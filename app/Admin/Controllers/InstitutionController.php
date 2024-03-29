<?php

namespace App\Admin\Controllers;

use App\Models\Disability;
use App\Models\Institution;
use App\Models\Location;
use App\Models\Utils;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class InstitutionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Institution';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Institution());
        $grid->disableFilter();
        $grid->disableBatchActions();
        $grid->quickSearch('name')->placeholder('Search by name');
        $grid->model()->orderBy('id', 'desc');

        $grid->column('created_at', __('Regisetered'))->display(
            function ($x) {
                return Utils::my_date($x);
            }
        )->sortable();
        $grid->column('name', __('Name'))->sortable();

        $grid->column('skills', __('Skills'));
        $grid->column('fees_range', __('Fees range'));

        $grid->column('phone_number', __('Phone number'));
        $grid->column('email', __('Email'));

        $grid->column('district_id', __('District'))
            ->display(
                function ($x) {
                    $dis = Location::find($x);
                    if ($dis == null) {
                        return '-';
                    }
                    return $dis->name;
                }
            )->sortable();

        $grid->column('subcounty_id', __('Subcounty'))
            ->display(
                function ($x) {
                    $dis = Location::find($x);
                    if ($dis == null) {
                        return '-';
                    }
                    return $dis->name;
                }
            )->sortable();

        $grid->column('address', __('Address'));
        $grid->column('parish', __('Parish'));
        $grid->column('village', __('Village'));
        $grid->column('website', __('Website'));
        $grid->column('gps_latitude', __('Gps latitude'));
        $grid->column('gps_longitude', __('Gps longitude'));


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
        $show = new Show(Institution::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('administrator_id', __('Administrator id'));
        $show->field('disability_id', __('Disability id'));
        $show->field('name', __('Name'));
        $show->field('about', __('About'));
        $show->field('address', __('Address'));
        $show->field('parish', __('Parish'));
        $show->field('village', __('Village'));
        $show->field('phone_number', __('Phone number'));
        $show->field('email', __('Email'));
        $show->field('district_id', __('District id'));
        $show->field('subcounty_id', __('Subcounty id'));
        $show->field('website', __('Website'));
        $show->field('phone_number_2', __('Phone number 2'));
        $show->field('photo', __('Photo'));
        $show->field('gps_latitude', __('Gps latitude'));
        $show->field('gps_longitude', __('Gps longitude'));
        $show->field('status', __('Status'));
        $show->field('skills', __('Skills'));
        $show->field('fees_range', __('Fees range'));
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
        $form = new Form(new Institution());



        if (
            (Auth::user()->isRole('staff')) ||
            (Auth::user()->isRole('admin'))
        ) {

            $ajax_url = url(
                '/api/ajax?'
                    . "search_by_1=name"
                    . "&search_by_2=id"
                    . "&model=User"
            );
            $form->select('administrator_id', "Institution manager")
                ->options(function ($id) {
                    $a = Administrator::find($id);
                    if ($a) {
                        return [$a->id => "#" . $a->id . " - " . $a->name];
                    }
                })
                ->ajax($ajax_url)->rules('required');
        } else {
            $form->select('administrator_id', __('Institution manager'))
                ->options(Administrator::where('id', Auth::user()->id)->get()->pluck('name', 'id'))->default(Auth::user()->id)->readOnly()->rules('required');
        }


        $form->text('name', __('Institution Name'))->rules('required');




        $form->multipleSelect('disabilities', __('Select Categories of persons with disabilities'))
            ->rules('required')
            ->options(Disability::where([])->orderBy('name', 'asc')->get()->pluck('name', 'id'));

        $form->tags('skills', __('Skills offered'));
        $form->text('fees_range', __('Fees range'));

        $form->select('subcounty_id', __('Institution Subcounty'))
            ->rules('required')
            ->help('Where is this institution located?')
            ->options(Location::get_sub_counties_array());

        $form->text('village', __('Institution Village'))->rules('required');
        $form->text('parish', __('Institution Parish'))->rules('required');
        $form->text('address', __('Institution Address'));

        $form->text('phone_number', __('Institution Phone number'))->rules('required');
        $form->text('phone_number_2', __('Alternative Phone number'));
        $form->email('email', __('Institution Email address'));

        $form->url('website', __('Institution Website'));

        $form->text('gps_latitude', __('Institution Gps latitude'));
        $form->text('gps_longitude', __('Institution Gps longitude'));
        $form->image('photo', __('Institution logo'));
        $form->quill('about', __('About The Institution'))->rules('required');

        $form->disableReset();
        $form->disableViewCheck();



        return $form;
    }
}
