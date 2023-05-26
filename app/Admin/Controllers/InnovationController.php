<?php

namespace App\Admin\Controllers;

use App\Models\Innovation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class InnovationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Innovation';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Innovation());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('innovation_type', __('Innovation type'));
        $grid->column('photo', __('Photo'));
        $grid->column('innovators', __('Innovators'));
        $grid->column('innovation_status', __('Innovation status'));
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
        $show = new Show(Innovation::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('innovation_type', __('Innovation type'));
        $show->field('photo', __('Photo'));
        $show->field('innovators', __('Innovators'));
        $show->field('innovation_status', __('Innovation status'));
        $show->field('description', __('Description'));
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
        $form = new Form(new Innovation());

        $form->text('title', __('Title'));
        $form->text('innovation_type', __('Innovation type'));
        $form->image('photo', __('Photo'));

        $form->divider('Innovators');
        $form->table('innovators', function ($table) {
            $table->text('name');
            $table->text('email');
            $table->text('url');
        });

        $form->section('Innovation Status');
        $form->text('innovation_status', __('Innovation status'));
        $form->quill('description', __('Description'));

        return $form;
    }
}
