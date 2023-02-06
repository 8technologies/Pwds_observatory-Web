<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsEventsController extends Controller
{
    public function view(Request $request, $id = null)
    {
        if(\is_null($id)){
            $opportunities = \App\Models\Opportunity::latest()->paginate(100);
            $data = ['opportunities' => $opportunities];
            return view('pages.dashboard.News_events.news_and_events', $data);
        }

    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.dashboard.News_events.create');
        }
        
    }
}
