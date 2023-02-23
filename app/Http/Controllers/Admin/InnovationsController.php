<?php

namespace App\Http\Controllers\Admin;

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
            $innovations = \App\Models\Innovation::latest()->paginate(100);
            $data = ['innovations' => $innovations];
            return view('pages.dashboard.Innovations.innovations', $data);
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
