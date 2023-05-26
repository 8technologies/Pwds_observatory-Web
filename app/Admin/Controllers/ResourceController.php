<?php

namespace App\Admin\Controllers;

use App\Models\Resource;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ResourceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Resource';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Resource());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('type', __('Type'));
        $grid->column('other_type', __('Other type'));
        $grid->column('date_of_publication', __('Date of publication'));
        $grid->column('author', __('Author'));
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
        $show = new Show(Resource::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('type', __('Type'));
        $show->field('other_type', __('Other type'));
        $show->field('date_of_publication', __('Date of publication'));
        $show->field('description', __('Description'));
        $show->field('author', __('Author'));
        $show->field('attachments', __('Attachments'));
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
        $form = new Form(new Resource());

        $form->text('title', __('Title'));
        $form->text('type', __('Type'));
        $form->text('other_type', __('Other type'));
        $form->date('date_of_publication', __('Date of publication'))->default(date('Y-m-d'));
        $form->text('author', __('Author'));
        $form->quill('description', __('Description'));

        $form->multipleFile('attachments', __('Attachments'));

        return $form;
    }
}
