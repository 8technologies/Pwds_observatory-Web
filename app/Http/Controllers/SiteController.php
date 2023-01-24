<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(Request $request)
    {
        return view('pages.site.index');
    }

    public function events(Request $request)
    {
        return view('pages.site.events');
    }

    public function services(Request $request)
    {
        return view('pages.site.services');
    }

    public function opportunities(Request $request)
    {
        return view('pages.site.opportunities');
    }

    public function info_bank(Request $request)
    {
        return view('pages.site.info_bank');
    }
}
