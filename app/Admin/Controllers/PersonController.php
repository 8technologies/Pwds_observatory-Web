<?php

namespace App\Admin\Controllers;

use App\Models\Association;
use App\Models\Disability;
use App\Models\Group;
use App\Models\Location;
use App\Models\Person;
use App\Models\Utils;
use Dflydev\DotAccessData\Util;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Auth;

class PersonController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Persons with disabilities';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Person());


        $grid->filter(function ($f) {
            // Remove the default id filter
            $f->disableIdFilter();
            $f->between('created_at', 'Filter by registered')->date();


            $f->equal('disability_id', 'Filter Type of disability')->select(
                Disability::where([])->orderBy('name', 'asc')->get()->pluck('name', 'id')
            );


            $district_ajax_url = url(
                '/api/ajax?'
                    . "&search_by_1=name"
                    . "&search_by_2=id"
                    . "&query_parent=0"
                    . "&model=Location"
            );
            $f->equal('district_id', 'Filter by district')->select(function ($id) {
                $a = Location::find($id);
                if ($a) {
                    return [$a->id => "#" . $a->id . " - " . $a->name];
                }
            })
                ->ajax($district_ajax_url);


            $district_ajax_url = url(
                '/api/ajax?'
                    . "&search_by_1=name"
                    . "&model=Association"
            );

            $f->equal('association_id', 'Filter by association')->select(function ($id) {
                $a = Association::find($id);
                if ($a) {
                    return [$a->id => "#" . $a->id . " - " . $a->name];
                }
            })
                ->ajax($district_ajax_url);


            $f->equal('sex', 'Filter by Sex')->select([
                'Male' => 'Male',
                'Female' => 'Female',
            ]);


            $f->between('dob', 'Filter by date of birth range')->date();

            $f->equal('employment_status', 'Filter by employment status')->select([
                'Employed' => 'Employed',
                'Not Employed' => 'Not Employed',
            ]);

            $f->equal('has_caregiver', 'Has caregiver')->select([
                'Yes' => 'Yes',
                'No' => 'No',
            ]);
 
   
        });


        $grid->quickSearch('name')->placeholder('Search by name');

        $grid->model()->orderBy('id', 'desc');
        $grid->disableBatchActions();

        $grid->column('id', __('Id'))->sortable();
        $grid->column('created_at', __('Regisetered'))->display(
            function ($x) {
                return Utils::my_date($x);
            }
        )->sortable();
        $grid->column('name', __('Name'))->sortable();
        $grid->column('other_names', __('Other Names'))->sortable();
        $grid->column('sex', __('Gender'))->filter([
            'Male' => 'Male',
            'Female' => 'Female',
        ])->sortable();

        $grid->column('dob', __('AGE/D.O.B'));

        $grid->column('disabilities', __('Disabilities'))
            ->display(
                function ($x) {
                    //disabilities in badges
                    if ($this->disabilities()->count() > 0) {
                        $disabilities = $this->disabilities->map(function ($item) {
                            return "<span class='badge badge-info'>" . $item->name . "</span>";
                        })->toArray();
                        return join(' ', $disabilities);
                    }
                    // if ($this->disability == null) {
                    //     return '-';
                    // }
                    // return $this->disability->name;
                }
            )->sortable();
        $grid->column('phone_number', __('Phone number'))->sortable();
        $grid->column('district_id', __('District'))
            ->display(
                function ($x) {
                    if ($this->district == null) {
                        return '-';
                    }
                    return $this->district->name;
                }
            )->sortable();

        $grid->column('email', __('Email'))->hide();
        $grid->column('address', __('Address'))->hide();
        $grid->column('parish', __('Parish'))->hide();
        $grid->column('village', __('Village'))->hide();


        $grid->column('employment_status', __('Is Employed'))->dot([
            'Employed' => 'success',
            'Not Employed' => 'danger',
        ])->sortable();

        $grid->column('has_caregiver', __('Has caregiver'))->hide();
        $grid->column('caregiver_name', __('Caregiver name'))->hide();
        $grid->column('caregiver_sex', __('Caregiver sex'))->hide();
        $grid->column('caregiver_phone_number', __('Caregiver phone number'))->hide();
        $grid->column('caregiver_age', __('Caregiver age'))->hide();
        $grid->column('caregiver_relationship', __('Caregiver relationship'))->hide();
        $grid->column('photo', __('Photo'))->hide();

        $grid->column('association_id', __('Association'))
            ->display(
                function ($x) {
                    if ($this->association == null) {
                        return '-';
                    }
                    return $this->association->name;
                }
            )->sortable();



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

        $show->field('photo', __('Photo'));
        // $show->field('association_id', __('Association id'));
        // $show->field('group_id', __('Group id'));
        $show->field('name', __('Name'));
        $show->field('other_names', __('Other names'));
        $show->field('id_number', __('Id number'));
        $show->field('dob', __('Dob'));
        $show->field('sex', __('Gender'));
        $show->field('ethnicity', __('Ethnicity'));
        $show->field('religion', __('Religion'));
        $show->field('marital_status', __('Marital status'));
        $show->field('place_of_birth', __('Place of birth'));
        $show->field('languages', __('Languages'));
        $show->field('address', __('Address'));
        // $show->field('parish', __('Parish'));
        // $show->field('village', __('Village'));
        $show->field('phone_number', __('Phone number'));
        $show->field('email', __('Email'));
        // $show->field('district_id', __('District id'));
        // $show->field('subcounty_id', __('Subcounty id'));
        // $show->field('disability_id', __('Disability id'));
        // $show->field('phone_number_2', __('Phone number 2'));

        // $show->field('education_level', __('Education level'));
        // $show->field('employment_status', __('Employment status'));
        // $show->field('has_caregiver', __('Has caregiver'));
        // $show->field('caregiver_name', __('Caregiver name'));
        // $show->field('caregiver_sex', __('Caregiver sex'));
        // $show->field('caregiver_phone_number', __('Caregiver phone number'));
        // $show->field('caregiver_age', __('Caregiver age'));
        // $show->field('caregiver_relationship', __('Caregiver relationship'));

        $show->disabilities('Disabilities', function ($disabilities) use($show) {
            $disabilities->resource('/admin/disabilities');
            // $disabilities->id();
            $disabilities->name();
            $disabilities->description()->limit(0);

            $disabilities->disableCreateButton();
            $disabilities->disableActions();

        });

        $show->affiliated_organisations('Affiliated organisations', function ($affiliated_organisations) {
            $affiliated_organisations->resource('/admin/affiliated-organisations');
            $affiliated_organisations->organisation_name();
            $affiliated_organisations->position();
            $affiliated_organisations->Year_of_membership();

            $affiliated_organisations->disableCreateButton();
            $affiliated_organisations->disableActions();
        });

        $show->academic_qualifications('Academic qualifications', function ($academic_qualifications) {
            $academic_qualifications->resource('/admin/academic-qualifications');
            $academic_qualifications->institution();
            $academic_qualifications->qualification();
            $academic_qualifications->year_of_completion();

            $academic_qualifications->disableCreateButton();
            $academic_qualifications->disableActions();

        });

        $show->employment_history('Employment history', function ($employment_history) {
            $employment_history->resource('/admin/employment-history');
            $employment_history->employer();
            $employment_history->position();
            $employment_history->year_of_employment();

            $employment_history->disableCreateButton();
            $employment_history->disableActions();
        });

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
        $form->tab('Bio' , function ($form) {
            $form->text('name', __('Sir Name'))->rules('required');
            $form->text('other_names', __('Other Names'))->rules('required');
            $form->text('id_number', __('ID Number'))
                    ->help("NIN, Passport Number, Driving Permit Number")
                    ->rules('required');
            $form->date('dob', __('Date of Birth'));
            $form->radio('sex', __('Gender'))->options(['Male' => 'Male', 'Female' => 'Female'])->rules('required');
            $form->radio('marital_status', __('Marital Status'))->options(['Single' => 'Single', 'Married' => 'Married', 'Divorced' => 'Divorced', 'Widowed' => 'Widowed'])->rules('required');
            $form->text('ethnicity', __('Ethnicity'))->rules('required')
                ->help('Your Tribe');
            $form->text('religion', __('Religion'))->rules('required');
            $form->radio('place_of_birth', __('Place Of Birth'))->options(['Hospital' => 'Hospital', 'Home' => 'Home'])->rules('required');
            $form->text('languages', __('Languages'))->rules('required')
                ->help('English, Luganda, Runyakitara, etc');
            $form->multipleSelect('disabilities', __('Select disabilities'))
                ->rules('required')
                ->options(Disability::where([])->orderBy('name', 'asc')->get()->pluck('name', 'id'));
    
    
        });

        $form->tab('Academics' , function ($form) {
            $form->radio('is_formal_education', __('Attended Formal Education'))->options([1 => 'Yes', 0 => 'No'])->rules('required')
            ->when(1, function (Form $form) {
                $form->hasMany('academic_qualifications', function (Form\NestedForm $form) {
                    $form->text('institution', __('Institution'))->rules('required');
                    $form->text('qualification', __('Qualification'))->rules('required');
                    $form->text('year_of_completion', __('Year Of Completion'))->rules('required');
                })->default(0);
              
            });

        });

        $form->tab('Skills and Experience' , function ($form) {
            $form->textarea('skills', __('Skills'))->rows(10)->placeholder("knitting, dancing, teamwork, etc")->rules('required');
        });

        $form->tab('Employment' , function ($form) {
            $form->radio('is_employed', __('Employment History'))->options([1 => 'Yes', 0 => 'No'])->rules('required')
            ->when(1 , function (Form $form) {
                $form->hasMany('employment_history', function (Form\NestedForm $form) {
                    $form->text('employer', __('Employer Name'))->rules('required');
                    $form->text('position', __('Position'))->placeholder("Manager")->rules('required');
                    $form->text('year_of_employment', __('Period of service'))->placeholder("2022 - 2023")->rules('required');
                })->default(0);
               })
            ->help("Are you currently employed? or have you ever been employed?");
        });

        $form->tab('Memberships' , function ($form) {
            $form->radio('is_member', __('Membership'))->options([1 => 'Yes', 0 => 'No'])->rules('required')
            ->when(1 , function (Form $form) {
                $form->hasMany('affiliated_organisations', function (Form\NestedForm $form) {
                    $form->text('organisation_name', __('Name of Organisation'))->rules('required');
                    $form->text('position', __('Position'))->rules('required');
                    $form->text('Year_of_membership', __('Membership period'))->placeholder("2022 -2023")->rules('required');
                })->default(0);
              
            })
            ->help("Are you currently a member of any association? or have you ever been a member of any association?");
        });

        $form->tab('Next of Kin' , function ($form) {
            $form->text('next_of_kin_last_name', __('Sir Name'))->rules('required');
            $form->text('next_of_kin_other_names', __('Other Names'))->rules('required');
            $form->text('next_of_kin_phone_number', __('Phone Number'))->rules('required');
            $form->text('next_of_kin_relationship', __('Relationship'))->rules('required');
            $form->text('next_of_kin_address', __('Address'))->rules('required');
            $form->email('next_of_kin_email', __('Email'))->rules('required');
            $form->text('next_of_kin_alternative_phone_number', __('Alternative Phone Number'))->rules('required');

        });
        $form->tab('Aspirations & Areas of Interest' , function ($form) {
            $form->textarea('aspirations', __('Aspirations'))->rules('required');
            $form->textarea('areas_of_interest', __('Areas of Interest'))->rules('required');
        });

        $form->tab('Address & Contacts', function( $form){
            $form->radio('is_same_address', __('Is the same as next of kin?'))->options([1 => 'Yes', 0 => 'No'])->rules('required')
                ->when(0, function (Form $form) {
                    $form->text('address', __('Address'))->rules('required');
                    $form->text('phone_number', __('Phone Number'))->rules('required');
                    $form->text('email', __('Email'))->rules('required');
                })->default(0);
        });
    


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
            $form->select('administrator_id', "Account mananger")
                ->options(function ($id) {
                    $a = Administrator::find($id);
                    if ($a) {
                        return [$a->id => "#" . $a->id . " - " . $a->name];
                    }
                })
                ->ajax($ajax_url)->rules('required');
        } else {
            $form->select('administrator_id', __('Account mananger'))
                ->options(Administrator::where('id', Auth::user()->id)->get()->pluck('name', 'id'))->default(Auth::user()->id)->readOnly()->rules('required');
        }


        $form->select('group_id', __('Select Association & Group'))
            ->rules('required')
            ->help('Where this person with disability belongs')
            ->options(Group::get_groups_array());


        $form->image('photo', __('Photo'));

        $form->email('email', __('Email address'));
        $form->text('phone_number', __('Phone number'));
        $form->text('phone_number_2', __('Alternative Phone number'));

        // $form->select('subcounty_id', __('Subcounty'))
        //     ->rules('required')
        //     ->help('Where is this business located?')
        //     ->options(Location::get_sub_counties_array());

        // $form->text('parish', __('Parish'));
        // $form->text('village', __('Village'));
        // $form->text('address', __('Address'));

        // $form->select('education_level', __('Education level'))
        //     ->options([
        //         'None' => 'None - (Not educated at all)',
        //         'Below primary' => 'Below primary - (Did not complete P.7)',
        //         'Primary' => 'Primary - (Completed P.7)',
        //         'Secondary' => 'Secondary - (Completed S.4)',
        //         'A-Level' => 'Advanced level - (Completed S.6)',
        //         'Bachelor' => 'Bachelor - (Degree)',
        //         'Masters' => 'Masters',
        //         'PhD' => 'PhD',
        //     ]);

        // $form->radio('employment_status', __('Employment status'))->options(['Employed' => 'Employed', 'Not Employed' => 'Not Employed'])->rules('required');
        // $form->radio('has_caregiver', __('Has caregiver?'))
        //     ->options(['Yes' => 'Yes', 'No' => 'No'])
        //     ->when('Yes', function ($form) {
        //         $form->text('caregiver_name', __('Caregiver Name'));
        //         $form->radio('caregiver_sex', __('Caregiver Sex'))->options(['Male' => 'Male', 'Female' => 'Female']);
        //         $form->text('caregiver_phone_number', __('Caregiver phone number'));
        //         $form->text('caregiver_age', __('Caregiver age'));
        //         $form->text('caregiver_relationship', __('Caregiver relationship'));
        //     });




        return $form;
    }
}
