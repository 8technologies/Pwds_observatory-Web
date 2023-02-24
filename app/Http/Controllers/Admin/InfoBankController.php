<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoBankController extends Controller
{
    use StoreImageTrait;

    public function view(Request $request, $id = null)
    {
        if(\is_null($id)){
            $info_banks = \App\Models\InformationBank::where('user_id', Auth::user()->id)
            ->latest()->paginate(100);
            
            $data = ['info_banks' => $info_banks];
            return view('pages.dashboard.Info_banks.info_banks', $data);
        }

        $info_bank = \App\Models\InformationBank::find($id);
        if(!$info_bank){
            return abort(404);
        }

        if($request->has('action')){
            if($request->has('action') == 'delete' && $info_bank->user_id == Auth::user()->id){
                $delete_image = $this->deleteFile($info_bank->banner_image);
                $delete_pdf = $this->deleteFile($info_bank->pdf_file);
                if(!$delete_image || !$delete_pdf){
                    return abort(500);  
                }
                $info_bank->delete();
                return "success";
            }
            return abort(403);
        }         

    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.dashboard.Info_banks.create');
        }

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'title' => 'required|string|min:10|max:2000',
            'details' => 'required|min:10',
            'pdf_file' => 'required|file|mimes:pdf',
        ]);
        

        $data = $request->all();
        $image = $this->verifyAndStoreImage($request, 'info_banks_banners', 'avatar');
        $file = $this->verifyAndStoreFile($request, 'info_banks_pdfs', 'pdf_file');
        if($image && $file){
            $data = array_merge($data, [
                    'banner_image' => $image,
                    'pdf_file' => $file,
                    'user_id' => Auth::user()->id
                ]
            );
        }

        \App\Models\InformationBank::create($data);
        return redirect()->route("admin_info_bank")->with('success', 'Item has been uploaded');        
        
    }    
}
