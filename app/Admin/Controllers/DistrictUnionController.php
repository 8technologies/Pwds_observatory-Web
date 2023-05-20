<?php

namespace App\Admin\Controllers;

use App\Mail\CreatedDistrictUnionMail;
use App\Models\Organisation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Admin\Extensions\DistrictUnionsExcelExporter;
use Encore\Admin\Admin;
use App\Models\District;

class DistrictUnionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'District Unions';
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Organisation());
        $grid->disableFilter();
        $grid->disableBatchActions();
        $grid->quickSearch('name')->placeholder('Search by Name');
        if(!auth('admin')->user()->isRole('nudipu')) {
            $grid->disableCreateButton();
            $grid->disableActions();
        }
        $grid->model()->where('relationship_type', 'du')->orderBy('updated_at', 'desc');
        $grid->exporter(new DistrictUnionsExcelExporter());

        $grid->column('name', __('Name'));
        $grid->column('registration_number', __('Registration number'));
        $grid->column('date_of_registration', __('Date of registration'));
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
        $show = new Show(Organisation::findOrFail($id));
        $model = Organisation::findOrFail($id);

        return view('admin.organisations.show', [
            'organisation' => $model
        ]);

        session(['organisation_id' => $model->id]); //set a global organisation id

        //Add new button to the top
        $show->panel()
            ->tools(function ($tools) use ($model) {
                $tools->disableList();
                $tools->disableDelete();
                if ($model->membership_type == 'member') {
                    $tools->append('<a class="btn btn-sm btn-primary mx-3" href="' . url('admin/opds/create') . '">Add OPD</a>');
                } else if ($model->membership_type == 'all') {
                    $tools->append('<a class="btn btn-sm btn-info mx-3" href="' . url('admin/people/create') . '">Add Person With Disability</a>');
                    $tools->append('<a class="btn btn-sm btn-primary mx-3" href="' . url('admin/opds/create') . '">Add OPD</a>');
                } else {
                    $tools->append('<a class="btn btn-sm btn-info mx-3" href="' . url('admin/people/create') . '">Add Person With Disability</a>');
                }
            });
        $obj = Organisation::find($id);

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
                return $contact_person->name . ' (' . $contact_person->position . ')' . ' - ' . $contact_person->phone1 . ' / ' . $contact_person->phone2;
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
            $form->select('district_id', __('District Of Operation'))->options(District::pluck('name', 'id'))->required();
            $form->text('registration_number', __('Registration number'));
            $form->date('date_of_registration', __('Date of registration'));
            $form->textarea('mission', __('Mission'));
            $form->textarea('vision', __('Vision'));
            $form->textarea('core_values', __('Core values'));
            $form->quill('brief_profile', __('Brief profile'));
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
            $form->radio('membership_type', __('Membership type'))->options(['organisation-based' => 'Organisation-based', 'individual-based' => 'Individual-based', 'both' => 'Both'])->required();
        });

        $form->tab('Contact', function ($form) {
            $form->text('physical_address', __('Physical address'))->required();


            $form->hasMany('contact_persons', 'Contact Persons', function (Form\NestedForm $form) {
                $form->text('name', __('Name'))->required();
                $form->text('position', __('Position'))->required();
                $form->email('email', __('Email'))->required();
                $form->text('phone1', __('Phone Tel'))->required();
                $form->text('phone2', __('Other Tel'));
            });
        });

        $form->tab('Attachments', function ($form) {
            $form->file('logo', __('Logo'))->removable()->rules('mimes:png,jpg,jpeg')
                ->help("Upload image logo in png, jpg, jpeg format (max: 2MB)");
            $form->file('certificate_of_registration', __('Certificate of registration'))->removable()->rules('mimes:pdf')
                ->help("Upload certificate of registration in pdf format (max: 2MB)");

            $form->multipleFile('attachments', __('Other Attachments'))->removable()->rules('mimes:pdf,png,jpg,jpeg')
                ->help("Upload files such as certificate (pdf), logo (png, jpg, jpeg), constitution, etc (max: 2MB)");
        });
        $form->tab('Membership Duration', function ($form) {
            $form->date('valid_from', __('Valid From'))->default(date('Y-m-d'));
            $form->date('valid_to', __('Valid To'))->default(date('Y-m-d'))->rules('after:start_date');
            $form->hidden('relationship_type')->default('du');
            $form->hidden('parent_organisation_id')->default(session('organisation_id'));

            $form->divider();

            // $form->html('<button type="submit" class="btn btn-primary float-right">Submit</button>');
        });
        $form->tab('Administrator', function ($form) {
            $form->email('admin_email', ('Administrator'))->required()
                ->help("This will be emailed with the password to log into the system");

            $form->divider();

            $form->html('<button type="submit" class="btn btn-primary float-right">Submit</button>');
        });
        $form->hidden('user_id')->default(0);

        $form->saving(function ($form) {
            $du_exists = Organisation::where('district_id', $form->district_id)->where('relationship_type', 'du')->exists();
            if ($du_exists) {
                admin_error('District Union already exists', 'Please check the district and try again');
                return back();
            }
            // save the admin in users and map to this du
            if ($form->isCreating()) {
                //generate random password for user and send it to the user's email
                $alpha_list = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz1234567890';
                $password = substr(str_shuffle($alpha_list), 0, 8);

                $admin_email = $form->admin_email;

                $new_password = $password;
                $password = Hash::make($password);
                //check if user exists
                $admin = User::where('email', $admin_email)->first();
    
                if($admin == null) {
                    $admin = User::create([
                        'username' => $admin_email,
                        'email' => $form->admin_email,
                        'password' => $password,
                        'name' => $form->name,
                        'profile_photo' => $form->logo,
                    ]);

                    $admin->assignRole('district-union');
                }
                $form->user_id = $admin->id;
                
                $form->parent_organisation_id = session('organisation_id');
        
                session(['password' => $new_password]);
            }
        });


        $form->saved(function (Form $form) {
            if ($form->isCreating()) {
                $admin_password = session('password');        

                Mail::to($form->admin_email)->send(new CreatedDistrictUnionMail($form->name, $form->admin_email, $admin_password));
            }
        });


        return $form;
    }
}
