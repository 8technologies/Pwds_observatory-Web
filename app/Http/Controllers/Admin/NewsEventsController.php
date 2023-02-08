<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Traits\StoreImageTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsEventsController extends Controller
{
    use StoreImageTrait; 

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
        
        $request->validate([
            'title' => 'required|string|min:10|max:2000',
            'details' => 'required|min:10',
            'type' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'venue' => 'nullable|string',
            'regestration_fee' => 'nullable|numeric',
            'event_url' => 'nullable|url',
        ]);        

        $data = $request->all();
        $image = $this->verifyAndStoreImage($request, 'news_and_events', 'avatar');
        if($image){
            $data = array_merge($data, ['banner_image' => $image, 'user_id' => Auth::user()->id]);
        }

        \App\Models\NewsAndEvent::create($data);
        return redirect()->route("admin_news")->with('success', 'Item has been uploaded');
        
    }
}
