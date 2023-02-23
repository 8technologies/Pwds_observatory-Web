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
            $users = \App\Models\User::paginate(100);
            $data = ['users' => $users];
            return view('pages.dashboard.users.users', $data);
        }

    }
}
