<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class InnovationsController extends Controller
{
    use StoreImageTrait;

    public function view(Request $request, $id = null)
    {
        if(\is_null($id)){
            $innovations = \App\Models\Innovation::where('user_id', Auth::user()->id)
            ->latest()->paginate(100);
            
            $data = ['innovations' => $innovations];
            return view('pages.dashboard.Innovations.innovations', $data);
        }

        $innovation = \App\Models\Innovation::find($id);
        if(!$innovation){
            return abort(404);
        }

        if($request->has('action')){
            if($request->has('action') == 'delete' && $innovation->user_id == Auth::user()->id){
                $delete_file = $this->deleteFile($innovation->banner_image);
                if(!$delete_file){
                    return abort(500);  
                }

                $innovation->delete();
                return "success";
            }
            return abort(403);
        }        

    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.dashboard.Innovations.create');
        }

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'title' => 'required|string|min:10|max:2000',
            'details' => 'required|min:10',
            'access_contact' => 'nullable|string',
        ]);        

        $data = $request->all();
        $image = $this->verifyAndStoreImage($request, 'innovations', 'avatar');
        if($image){
            $data = array_merge($data, ['banner_image' => $image, 'user_id' => Auth::user()->id]);
        }

        \App\Models\Innovation::create($data);
        return redirect()->route("admin_innovations")->with('success', 'Item has been uploaded');        
        
    }
}
