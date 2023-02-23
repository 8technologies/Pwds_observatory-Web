<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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

    public function services(Request $request, $id = null)
    {
        if(is_null($id)){
            $services = \App\Models\Service::latest()->paginate(24);
            return view('pages.site.services', ['services' => $services]);
        }    
    }

    public function opportunities(Request $request, $id = null)
    {
        if(is_null($id)){
            $today = Carbon::today();
            $opportunities = \App\Models\Opportunity::whereDate('expiry_date', '>=', $today)
            ->latest()->paginate(50);
            return view('pages.site.opportunities', ['opportunities' => $opportunities]);
        }
        
    }

    public function info_bank(Request $request, $id = null)
    {
        if(is_null($id)){
            $info_banks = \App\Models\InformationBank::latest()->paginate(24);
            return view('pages.site.info_bank', ['info_banks' => $info_banks]);
        }
    }

    public function innovations(Request $request, $id = null)
    {
        if(is_null($id)){
            $innovations = \App\Models\Innovation::latest()->paginate(24);
            return view('pages.site.innovations', ['innovations' => $innovations]);
        }    
    }
}
