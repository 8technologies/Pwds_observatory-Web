<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    use StoreImageTrait;
    
    public function view(Request $request, $id = null)
    {
        if(\is_null($id)){
            $services = \App\Models\Service::where('user_id', Auth::user()->id)
            ->latest()->paginate(100);

            return view('pages.dashboard.Services.services', ['services' => $services]);
        }

        $service = \App\Models\Service::find($id);
        if(!$service){
            return abort(404);
        }

        if($request->has('action')){
            if($request->has('action') == 'delete' && $service->user_id == Auth::user()->id){
                $delete_file = $this->deleteFile($service->banner_image);
                if(!$delete_file){
                    return abort(500);  
                }
                $service->delete();
                return "success";
            }
            return abort(403);
        }         

    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.dashboard.Services.create');
        }

        $request->validate([
            'title' => 'required|string|min:10|max:2000',
            'details' => 'required|min:10',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'service_type' => 'required|string',
            'service_cost' => 'required|numeric',
            'chat_contact' => 'nullable|string',
        ]);        

        $data = $request->all();
        $image = $this->verifyAndStoreImage($request, 'services', 'avatar');
        if($image){
            $data = array_merge($data, ['banner_image' => $image, 'user_id' => Auth::user()->id]);
        }

        \App\Models\Service::create($data);
        return redirect()->route("admin_services")->with('success', 'Service has been posted');
        
    }
}
