<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;

class OpportunitiesController extends Controller
{
    use StoreImageTrait;

    public function view(Request $request, $id = null)
    {
        if(\is_null($id)){
            $opportunities = \App\Models\Opportunity::where('user_id', Auth::user()->id)
            ->latest()->paginate(100);
            
            $data = ['opportunities' => $opportunities];
            return view('pages.dashboard.Opportunities.opportunities', $data);
        }

        $opportunity = \App\Models\Opportunity::find($id);
        if(!$opportunity){
            return abort(404);
        }

        if($request->has('action')){
            if($request->has('action') == 'delete' && $opportunity->user_id == Auth::user()->id){
                $delete_file = $this->deleteFile($opportunity->banner_image);
                if(!$delete_file){
                    return abort(500);  
                }
                $opportunity->delete();
                return "success";
            }
            return abort(403);
        }        

    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.dashboard.Opportunities.create');
        }

        $request->validate([
            'title' => 'required|string|min:10|max:2000',
            'details' => 'required|min:10',
            'category' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'expiry_date' => 'required|date',
            'url' => 'nullable|url',
        ]);        

        $data = $request->all();
        $image = $this->verifyAndStoreImage($request, 'jobs_and_opportunities', 'avatar');
        if($image){
            $data = array_merge($data, ['banner_image' => $image, 'user_id' => Auth::user()->id]);
        }

        \App\Models\Opportunity::create($data);
        return redirect()->route("admin_opportunities")->with('success', 'Item has been uploaded');        
        
    }
}
