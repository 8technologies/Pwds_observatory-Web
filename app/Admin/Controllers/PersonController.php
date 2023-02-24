<?php

namespace App\Admin\Controllers;

use App\Models\Disability;
use App\Models\Group;
use App\Models\Location;
use App\Models\Person;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PersonController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Person';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Person());

        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('association_id', __('Association id'));
        $grid->column('group_id', __('Group id'));
        $grid->column('name', __('Name'));
        $grid->column('address', __('Address'));
        $grid->column('parish', __('Parish'));
        $grid->column('village', __('Village'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('email', __('Email'));
        $grid->column('district_id', __('District id'));
        $grid->column('subcounty_id', __('Subcounty id'));
        $grid->column('disability_id', __('Disability id'));
        $grid->column('phone_number_2', __('Phone number 2'));
        $grid->column('dob', __('Dob'));
        $grid->column('sex', __('Sex'));
        $grid->column('education_level', __('Education level'));
        $grid->column('employment_status', __('Employment status'));
        $grid->column('has_caregiver', __('Has caregiver'));
        $grid->column('caregiver_name', __('Caregiver name'));
        $grid->column('caregiver_sex', __('Caregiver sex'));
        $grid->column('caregiver_phone_number', __('Caregiver phone number'));
        $grid->column('caregiver_age', __('Caregiver age'));
        $grid->column('caregiver_relationship', __('Caregiver relationship'));
        $grid->column('photo', __('Photo'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Person::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('association_id', __('Association id'));
        $show->field('group_id', __('Group id'));
        $show->field('name', __('Name'));
        $show->field('address', __('Address'));
        $show->field('parish', __('Parish'));
        $show->field('village', __('Village'));
        $show->field('phone_number', __('Phone number'));
        $show->field('email', __('Email'));
        $show->field('district_id', __('District id'));
        $show->field('subcounty_id', __('Subcounty id'));
        $show->field('disability_id', __('Disability id'));
        $show->field('phone_number_2', __('Phone number 2'));
        $show->field('dob', __('Dob'));
        $show->field('sex', __('Sex'));
        $show->field('education_level', __('Education level'));
        $show->field('employment_status', __('Employment status'));
        $show->field('has_caregiver', __('Has caregiver'));
        $show->field('caregiver_name', __('Caregiver name'));
        $show->field('caregiver_sex', __('Caregiver sex'));
        $show->field('caregiver_phone_number', __('Caregiver phone number'));
        $show->field('caregiver_age', __('Caregiver age'));
        $show->field('caregiver_relationship', __('Caregiver relationship'));
        $show->field('photo', __('Photo'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Person());

        $form->select('group_id', __('Select Association & Group'))
            ->rules('required')
            ->help('Where this person with disability belongs')
            ->options(Group::get_groups_array());


 

        $form->text('name', __('Full Name'))->rules('required');
        $form->image('photo', __('Photo')); 

        $form->date('dob', __('Date of Birth'))->rules('required');
        $form->radio('sex', __('Sex'))->options(['Male' => 'Male', 'Female' => 'Female'])->rules('required');


        $form->email('email', __('Email address'));
        $form->text('phone_number', __('Phone number'))->rules('required');
        $form->text('phone_number_2', __('Alternative Phone number'));

        $form->select('subcounty_id', __('Subcounty'))
            ->rules('required')
            ->help('Where is this business located?')
            ->options(Location::get_sub_counties_array());

        $form->text('parish', __('Parish'));
        $form->text('village', __('Village'));
        $form->text('address', __('Address'));

        $form->select('education_level', __('Education level'))
            ->options([
                'None' => 'None - (Not educated at all)',
                'Below primary' => 'Not educated - (Did not complete P.7)',
                'Primary' => 'Primary - (Completed P.7)',
                'Sendary' => 'Sendary - (Completed S.4)',
                'A-Level' => 'Advanced level - (Completed S.6)',
                'Bachelor' => 'Bachelor - (Degree)',
                'Masters' => 'Masters',
                'PhD' => 'PhD',
            ])->rules('required');

        $form->radio('employment_status', __('Employment status'))->options(['Employed' => 'Employed', 'Not Employed' => 'Not Employed'])->rules('required');
        $form->radio('has_caregiver', __('Has caregiver?'))
            ->options(['Yes' => 'Yes', 'No' => 'No'])
            ->when('Yes', function ($form) {
                $form->text('caregiver_name', __('Caregiver Name'))->rules('required');
                $form->radio('caregiver_sex', __('Caregiver Sex'))->options(['Male' => 'Male', 'Female' => 'Female'])->rules('required');
                $form->text('caregiver_phone_number', __('Caregiver phone number'));
                $form->text('caregiver_age', __('Caregiver age'));
                $form->text('caregiver_relationship', __('Caregiver relationship'));
            })
            ->rules('required');




        return $form;
    }
}
