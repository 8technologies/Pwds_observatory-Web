<?php

namespace App\Admin\Controllers;

use App\Models\ServiceProvider;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;
use App\Models\District;
use Encore\Admin\Facades\Admin;

class ServiceProviderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ServiceProvider';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ServiceProvider());

        $grid->filter(function($filter){
            $filter->disableIdFilter();
            $filter->like('name', 'Name');
            $filter->like('registration_number', 'Registration number');
            $filter->between('date_of_registration', 'Date of registration')->date();
            $filter->where(function ($query) {
                $query->whereHas('districts_of_operation', function ($query) {
                    $query->where('name', 'like', "%{$this->input}%");
                });
            }, 'Districts of operation');
        });
        $grid->column('name', __('Name'));
        $grid->column('registration_number', __('Registration number'));
        $grid->column('date_of_registration', __('Date of registration'));
        $grid->column('user_id', __('User id'));
        $grid->column('physical_address', __('Physical address'));
        $grid->column('attachments', __('Attachments'));
        $grid->column('logo', __('Logo'));
        $grid->column('license', __('License'));
        $grid->column('certificate_of_registration', __('Certificate of registration'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        // $show = new Show(ServiceProvider::findOrFail($id));
        $service_provider = ServiceProvider::findOrFail($id);

        return view('admin.service-providers.show', compact('service_provider'));

        // $show->field('id', __('Id'));
        // $show->field('name', __('Name'));
        // $show->field('registration_number', __('Registration number'));
        // $show->field('date_of_registration', __('Date of registration'));
        // $show->field('user_id', __('User id'));
        // $show->field('brief_profile', __('Brief profile'));
        // $show->field('physical_address', __('Physical address'));
        // $show->field('attachments', __('Attachments'));
        // $show->field('logo', __('Logo'));
        // $show->field('license', __('License'));
        // $show->field('certificate_of_registration', __('Certificate of registration'));
        // $show->field('created_at', __('Created at'));
        // $show->field('updated_at', __('Updated at'));

        // return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ServiceProvider());

        $form->footer(function ($footer) {
            $footer->disableReset();
            $footer->disableViewCheck();
            $footer->disableEditingCheck();
            $footer->disableCreatingCheck();
            $footer->disableSubmit();
        });

        $form->tab('Bio', function ($form) {
            $form->text('name', __('Name'));
            $form->text('registration_number', __('Registration number'));
            $form->date('date_of_registration', __('Date of registration'))->rules('required');

            $form->multipleSelect('districts_of_operation', __('Select districts'))
            ->rules('required')
            ->options(District::orderBy('name', 'asc')->get()->pluck('name', 'id'));
            
            $form->quill('brief_profile', __('Brief profile'));

            $form->html('
            <a type="button" class="btn btn-primary btn-next float-right" data-toggle="tab" aria-expanded="true">Next</a>
            ');

        });

        $form->tab('Address & Contacts', function ($form) {
            $form->text('physical_address', __('Physical address'));

            
            $form->hasMany('contact_persons', 'Contact Persons', function (Form\NestedForm $form) {
                $form->text('name', __('Name'))->rules("required");
                $form->text('position', __('Position'))->rules("required");
                $form->email('email', __('Email'))->rules("required");
                $form->text('phone1', __('Phone Tel'))->rules("required");
                $form->text('phone2', __('Other Tel') );
            });

            $form->html('
            <a type="button" class="btn btn-info btn-prev float-left" data-toggle="tab" aria-expanded="true">Previous</a>
            <a type="button" class="btn btn-primary btn-next float-right" data-toggle="tab" aria-expanded="true">Next</a>
            ');
        });

        $form->tab('Attachmments',  function($form) {
            $form->file('logo', __('Logo'))
            ->help("Upload image logo in png, jpg, jpeg format (max: 2MB)");
            $form->file('certificate_of_registration', __('Certificate of registration'))
            ->rules("required")
            ->help("Upload certificate of registration in pdf format (max: 2MB)");

            $form->file('license', __('License'))
            ->rules("required")
            ->help("Upload your trade license");

            $form->multipleFile('attachments', __('Attachments'))
            ->help("Upload files such as certificate (pdf), logo (png, jpg, jpeg)");

            $form->divider();

            $form->html('
            <a type="button" class="btn btn-info btn-prev float-left" data-toggle="tab" aria-expanded="true">Previous</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button> 
           ');

        });

        $form->hidden('user_id')->default(Auth::guard('admin')->user()->id);

        $form->saving(function (Form $form) {
            $form->user_id = Auth::guard('admin')->user()->id;
        });
        $form->saved(function (Form $form) {`
            return redirect()->route('admin.service-providers.show', $form->model()->id);
        });

        Admin::script(
            <<<EOT
            $(document).ready(function() {
                $('.btn-next').click(function() {
                    $('.nav-tabs > .active').next('li').find('a').trigger('click');
                });
                $('.btn-prev').click(function() {
                    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
                });
            });
            EOT
        );

        return $form;
    }
}
