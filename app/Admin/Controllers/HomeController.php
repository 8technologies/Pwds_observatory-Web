<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Utils;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $u = Admin::user();

        if (Admin::user()->complete_profile != 1) {
            admin_info('Alert', 'Please complete your profile information to proceed.');
            return redirect(admin_url('auth/setting'));
        }
        Utils::checkEventRegustration();

        $content
            ->title('IUIU AA - Dashboard')
            ->description('Hello ' . $u->name . "!");

        $content->row(function (Row $row) {
            $row->column(6, function (Column $column) {
                $column->append(Dashboard::dashboard_members());
            });
            $row->column(3, function (Column $column) { 
                $column->append(Dashboard::dashboard_events());
            });
            $row->column(3, function (Column $column) {
                $column->append(Dashboard::dashboard_news());
            });
        });



        return $content;
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }
}
