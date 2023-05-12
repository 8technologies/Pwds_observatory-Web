<?php

namespace App\Admin\Controllers;

use App\Models\Organisation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

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

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('registration_number', __('Registration number'));
        $grid->column('date_of_registration', __('Date of registration'));
        $grid->column('mission', __('Mission'));
        $grid->column('vision', __('Vision'));
        $grid->column('core_values', __('Core values'));
        $grid->column('brief_profile', __('Brief profile'));
        $grid->column('membership_type', __('Membership type'));
        $grid->column('physical_address', __('Physical address'));
        $grid->column('contact_persons', __('Contact persons'));
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
        $show = new Show(Organisation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('registration_number', __('Registration number'));
        $show->field('date_of_registration', __('Date of registration'));
        $show->field('mission', __('Mission'));
        $show->field('vision', __('Vision'));
        $show->field('core_values', __('Core values'));
        $show->field('brief_profile', __('Brief profile'));
        $show->field('membership_type', __('Membership type'));
        $show->field('physical_address', __('Physical address'));
        $show->field('contact_persons', __('Contact persons'));
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
        $form = new Form(new Organisation());

        $form->tab('Bio', function ($form) {
            $form->text('name', __('Name'));
            $form->text('registration_number', __('Registration number'));
            $form->date('date_of_registration', __('Date of registration'));
            $form->textarea('mission', __('Mission'));
            $form->textarea('vision', __('Vision'));
            $form->textarea('core_values', __('Core values'));
            $form->quill('brief_profile', __('Brief profile'));
        });

        $form->tab('Leadership', function ($form) {
            $form->hasMany('leaderships', function (Form\NestedForm $form) {
                // $form->table('members', 'Members', function ($form) {
                //     $form->text('name', __('Name'));
                //     $form->text('position', __('Position'));
                // });
                $form->date('term_of_office_start', __('Term of office start'));
                $form->date('term_of_office_end', __('Term of office end'));
            });
        });

        $form->tab('Membership', function ($form) {
            $form->radio('membership_type', __('Membership type'))->options(['member' => 'Member', 'pwd' => 'PWD'])
            ->when('pwd', function (Form $form) {

            })
            ->when('member', function (Form $form) {
                // $form->hasMany('memberships', function (Form\NestedForm $form) {
                //     $form->text('member_to', __('Member To'))->rules('required');
                //     $form->text('nature_of_relationship', __('Nature Of Relationship'))->rules('required');
                //     $form->text('duration', __('Duration'))->placeholder('2022 -2023')->rules('required');
                // });
            })->default('member')
            ->required();
        });

        $form->tab('Contact', function ($form) {
            $form->text('physical_address', __('Physical address'));

            $form->hasMany('contact_persons', 'Contact Persons', function ($form) {
                $form->text('name', __('Name'))->required();
                $form->text('position', __('Position'))->required();
                $form->email('email', __('Email'))->required();
                $form->text('phone1', __('Phone Tel'))->required();
                $form->text('phone2', __('Other Tel'));
            });
        });




        return $form;
    }
}
