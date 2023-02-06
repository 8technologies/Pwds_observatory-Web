<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function view(Request $request, $id = null)
    {
        if(\is_null($id)){
            $opportunities = \App\Models\Opportunity::latest()->paginate(100);
            $data = ['opportunities' => $opportunities];
            return view('pages.dashboard.Opportunities.opportunities', $data);
        }

    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.dashboard.Opportunities.create');
        }
        
    }
}
