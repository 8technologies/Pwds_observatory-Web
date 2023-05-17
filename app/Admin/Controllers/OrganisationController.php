<?php

namespace App\Admin\Controllers;

use App\Models\Organisation;
use Encore\Admin\Admin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use Encore\Admin\Widgets\MultipleSteps;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use App\Admin\Extensions\OrganisationsExcelExporter;

class OrganisationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Organisation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Organisation());
        $grid->model()->whereNull('relationship_type')->orderBy('updated_at', 'desc');
        // handle exports
        $grid->exporter(new OrganisationsExcelExporter());
        $grid->column('name', __('Name'));
        $grid->column('registration_number', __('Registration number'));
        $grid->column('date_of_registration', __('Date of registration'));
        $grid->column('type', __('Type Of Organisation'));
        $grid->column('membership_type', __('Membership type'));
        $grid->column('physical_address', __('Physical address'));
        // $grid->column('contact_persons', __('Contact persons'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $model = Organisation::findOrFail($id);
        $show = new Show($model);
        session(['organisation_id' => $model->id]); //set a global organisation id
    
        //Add new button to the top
        $show->panel()
        ->tools(function ($tools) use ($model) {
            $tools->disableList();
            $tools->disableDelete();
            if($model->membership_type == 'member') {
                $tools->append('<a class="btn btn-sm btn-primary mx-3" href="' . url('admin/opds/create') . '">Add OPD</a>');
                $tools->append('<a class="btn btn-sm btn-info mx-3" href="' . url('admin/district-unions/create') . '">Add District Union</a>');
            }else if($model->membership_type == 'all') {
                $tools->append('<a class="btn btn-sm btn-info mx-3" href="' . url('admin/people/create') . '">Add Person With Disability</a>');
                $tools->append('<a class="btn btn-sm btn-primary mx-3" href="' . url('admin/opds/create') . '">Add OPD</a>');
                $tools->append('<a class="btn btn-sm btn-info mx-3" href="' . url('admin/district-unions/create') . '">Add District Union</a>');
            }else{
                $tools->append('<a class="btn btn-sm btn-info mx-3" href="' . url('admin/people/create') . '">Add Person With Disability</a>');
            }
       });  

        $show->field('name', __('Name'));
        $show->field('registration_number', __('Registration number'));
        $show->field('date_of_registration', __('Date of registration'));
        $show->field('mission', __('Mission'));
        $show->field('vision', __('Vision'));
        $show->field('core_values', __('Core values'));
        $show->field('brief_profile', __('Brief profile'));
        $show->field('membership_type', __('Membership type'));
        $show->field('physical_address', __('Physical address'));
        $show->divider();
        $show->field('contact_persons', __('Contact persons'))->as(function ($contact_persons) {
            return $contact_persons->map(function ($contact_person) {
                return $contact_person->name. ' ('.$contact_person->position.')'. ' - '.$contact_person->phone1. ' / '.$contact_person->phone2;
            })->implode('<br>');
        });
        $show->divider();

    //     foreach($obj->attachments as $attachment){
    //         $show->field('attachments', __('Attachments'))->unescape()->as(function ($attachments) {
    //             return Arr::map($attachments,function ($attachment) {
    //                 return '<a href="'.$attachment->downloadable().'" target="_blank">'.$attachment->name.'</a>';
    //             })->implode('<br>');
    //         });
    //     }
    // //    $show->multipleFile($obj->attachments->downloadable();

        return $show;
    }
    //     /**
    //  * Create interface.
    //  *
    //  * @param Content $content
    //  *
    //  * @return Content
    //  */
    // public function create(Content $content)
    // {
    //     $form = new Form(new Organisation());
    //     $forms = [
    //         'bio' => new \App\Admin\Forms\Organisation\Bio($form),
    //     ];

    //     // Create a custom html content
    //     return $content
    //         ->title('Create Organisation')
    //         ->body(MultipleSteps::make($forms, null, $form));
    // }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Organisation());

        
        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
            $footer->disableSubmit();
        });

        $form->tab('Bio', function ($form) {
            $form->text('name', __('Name'))->required();
            $form->text('registration_number', __('Registration number'))->required();
            $form->date('date_of_registration', __('Date of registration'))->required();
            $form->radio('type', __('Type Of Organisation'))->options(['NGO'=> 'NGO', 'SACCO'=> 'SACCO'])->required();
            $form->textarea('mission', __('Mission'))->required();
            $form->textarea('vision', __('Vision'))->required();
            $form->textarea('core_values', __('Core values'))->required();
            $form->quill('brief_profile', __('Brief profile'))->required();
        });

        // $form->tab('Leadership', function ($form) {
        //     $form->hasMany('leaderships', function (Form\NestedForm $form) {
        //         $form->table('members', 'Members', function ($form) {
        //             $form->text('name', __('Name'));
        //             $form->text('position', __('Position'));
        //         });
        //         $form->date('term_of_office_start', __('Term of office start'));
        //         $form->date('term_of_office_end', __('Term of office end'));
        //     });
        // });

        $form->tab('Membership', function ($form) {
            $form->radio('membership_type', __('Membership type'))->options(['member' => 'Member-Based', 'pwd' => 'Individual-based', 'all' => 'Both'])->required();
        });

        $form->tab('Contact', function ($form) {
            $form->text('physical_address', __('Physical address'));

            $form->hasMany('contact_persons', 'Contact Persons', function (Form\NestedForm $form) {
                $form->text('name', __('Name'))->required();
                $form->text('position', __('Position'))->required();
                $form->email('email', __('Email'))->required();
                $form->text('phone1', __('Phone Tel'))->required();
                $form->text('phone2', __('Other Tel') );
            });
        });

        $form->tab('Attachments', function($form) {
            $form->file('logo', __('Logo'))->removable()->rules('mimes:png,jpg,jpeg')->required()
            ->help("Upload image logo in png, jpg, jpeg format (max: 2MB)");
            $form->file('certificate_of_registration', __('Certificate of registration'))->removable()->rules('mimes:pdf')->required()
            ->help("Upload certificate of registration in pdf format (max: 2MB)");
            
            $form->multipleFile('attachments', __('Other Attachments'))->removable()->rules('mimes:pdf,png,jpg,jpeg')
            ->help("Upload files such as certificate (pdf), logo (png, jpg, jpeg)");

            $form->divider();

            $form->html('<button type="submit" class="btn btn-primary float-right">Submit</button>');

        });
        $form->hidden('user_id')->default(Auth::guard('admin')->user()->id);

        $form->saving(function (Form $form) {
            $form->user_id = Auth::guard('admin')->user()->id;
        });
        $form->saved(function (Form $form) {
            return redirect()->route('admin.organisations.show', $form->model()->id);
        });


        return $form;
    }
    
}
