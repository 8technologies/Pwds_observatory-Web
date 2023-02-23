<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct(Request $request) {
        $this->middleware(function ($request, $next) {
            if(Auth::user()->account_type != 'OPD'){
                return abort(403);
            }
            return $next($request);
        });
    }
    
    public function users(Request $request, $id = null)
    {
        if(\is_null($id)){
            $users = \App\Models\PwdProfile::where('district_organisation', Auth::user()->id)
            ->latest()->paginate(100);

            $data = ['pwd_users' => $users];
            return view('pages.dashboard.users.users', $data);
        }

    }

    public function create(Request $request)
    {
        if($request->isMethod('GET')){
            return view('pages.dashboard.Users.create');
        }

        $request->validate([
            'name' => 'required|string|min:3|max:2000',
            'phone' => 'required|string|unique:users',
            'email' => 'nullable|email|unique:users',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'education_level' => 'required|string',
            'employment_type' => 'required|string',
            'disability_type' => 'required|string',
            'nok' => 'nullable|string',
            'nok_relationship' => 'nullable|string',
            'nok_contact' => 'nullable|string',
            'has_care_giver' => 'nullable|string',
            'care_giver_name' => 'nullable|string',
            'care_giver_contact' => 'nullable|string',
            'care_giver_relationship' => 'nullable|string',
            'care_giver_dob' => 'nullable|date',
        ]); 
        
        $user_data = $request->only(['name', 'phone', 'email']);
        $user_data = array_merge($user_data,['account_type' => 'PWD']);
        $user = \App\Models\User::create($user_data);

        $pwd_profile = $request->only([
            'dob',
            'gender',
            'education_level',
            'employment_type',
            'disability_type',
            'nok',
            'nok_relationship',
            'nok_contact',
            'has_care_giver',
            'care_giver_name',
            'care_giver_contact',
            'care_giver_relationship',
            'care_giver_dob'            
        ]);

        $data = array_merge($pwd_profile, [
            'district_organisation' => Auth::user()->id, 
            'user_id' => $user->id,
        ]);
        \App\Models\PwdProfile::create($data);
        return redirect()->route("users")->with('success', 'Member has been registered'); 
    }
}
