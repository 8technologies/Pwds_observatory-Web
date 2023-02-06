<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('pages.dashboard.home');
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
