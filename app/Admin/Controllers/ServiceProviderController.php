<?php

namespace App\Admin\Controllers;

use App\Models\ServiceProvider;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;
use App\Models\District;


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

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('registration_number', __('Registration number'));
        $grid->column('date_of_registration', __('Date of registration'));
        $grid->column('user_id', __('User id'));
        $grid->column('brief_profile', __('Brief profile'));
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
        $show = new Show(ServiceProvider::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('registration_number', __('Registration number'));
        $show->field('date_of_registration', __('Date of registration'));
        $show->field('user_id', __('User id'));
        $show->field('brief_profile', __('Brief profile'));
        $show->field('physical_address', __('Physical address'));
        $show->field('attachments', __('Attachments'));
        $show->field('logo', __('Logo'));
        $show->field('license', __('License'));
        $show->field('certificate_of_registration', __('Certificate of registration'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
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

        });

        $form->tab('Address & Contacts', function ($form) {
            $form->text('physical_address', __('Physical address'));

            
            $form->hasMany('contact_persons', 'Contact Persons', function (Form\NestedForm $form) {
                $form->text('name', __('Name'))->required();
                $form->text('position', __('Position'))->required();
                $form->email('email', __('Email'))->required();
                $form->text('phone1', __('Phone Tel'))->required();
                $form->text('phone2', __('Other Tel') );
            });


        });

        $form->tab('Attachmments',  function($form) {
            $form->file('logo', __('Logo'))
            ->help("Upload image logo in png, jpg, jpeg format (max: 2MB)");
            $form->file('certificate_of_registration', __('Certificate of registration'))
            ->required()
            ->help("Upload certificate of registration in pdf format (max: 2MB)");

            $form->file('license', __('License'))
            ->required()
            ->help("Upload your trade license");

            $form->multipleFile('attachments', __('Attachments'))
            ->help("Upload files such as certificate (pdf), logo (png, jpg, jpeg)");

            $form->divider();

            $form->html('<button type="submit" class="btn btn-primary float-right">Submit</button>');
        });

        $form->hidden('user_id')->default(Auth::guard('admin')->user()->id);

        $form->saving(function (Form $form) {
            $form->user_id = Auth::guard('admin')->user()->id;
        });
        $form->saved(function (Form $form) {
            return redirect()->route('admin.service-providers.show', $form->model()->id);
        });

        return $form;
    }
}
