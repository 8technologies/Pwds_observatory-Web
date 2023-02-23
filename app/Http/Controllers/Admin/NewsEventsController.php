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
            $events = \App\Models\NewsAndEvent::where('user_id', Auth::user()->id)
            ->latest()->paginate(100);

            return view('pages.dashboard.News_events.news_and_events', ['events' => $events]);
        }

        $event = \App\Models\NewsAndEvent::find($id);
        if(!$event){
            return abort(404);
        }

        if($request->has('action')){
            if($request->has('action') == 'delete' && $event->user_id == Auth::user()->id){
                $delete_file = $this->deleteFile($event->banner_image);
                if(!$delete_file){
                    return abort(500);  
                }

                $event->delete();
                return "success";
            }
            return abort(403);
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
