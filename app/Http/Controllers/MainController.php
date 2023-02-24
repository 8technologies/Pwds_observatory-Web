<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\NewsPost;
use Encore\Admin\Auth\Database\Administrator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as BaseController;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {

        $members = Administrator::where([])->orderBy('updated_at', 'desc')->limit(8)->get();
        $profiles = [];
        $_profiles = [];
        foreach (Administrator::where([])->orderBy('updated_at', 'desc')->limit(15)->get() as $key => $v) {
            $profiles[] = $v;
        }
 
        foreach ($profiles as $key => $pro) {
            if ($pro->intro == null || strlen($pro->intro) < 3) {
                $pro->intro = "Hi there, I'm $pro->name IUIU Alumnus. I am excited to be a part of IUIU-AA Network. I call upon you to join the team!";
            }
            $_profiles[] = $pro;
        }

        $posts = [];
        foreach (NewsPost::all() as $key => $v) {
            $posts[] = $v;
        }
        shuffle($posts);
        $_posts = [];
        $i = 0;
        foreach ($posts as $key => $v) {
            $_posts[] = $v;
            $i++;
            if ($i > 2) {
                break;
            }
        }
        
        return view('index', [
            'members' => $members,
            'profiles' => $_profiles,
            'posts' => $_posts, 
        ]);
    }
    public function about_us()
    {
        return view('about-us');
    }
    public function our_team()
    {
        return view('our-team');
    }
    public function news_category()
    {
        return view('news-category');
    }

    public function dinner()
    {
        $p = Event::find(1);
        if ($p == null) {
            die("Post not found.");
        }
        return view('dinner', [
            'd' => $p
        ]);
    }

    public function news(Request $r)
    {
        $p = NewsPost::find($r->id);
        if ($p == null) {
            die("Post not found.");
        }

        $posts = [];
        foreach (NewsPost::all() as $key => $v) {
            $posts[] = $v;
        }
        shuffle($posts);
        $_posts = [];
        $i = 0;
        foreach ($posts as $key => $v) {
            $_posts[] = $v;
            $i++;
            if ($i > 2) {
                break;
            }
        }

        return view('news-post', [
            'p' => $p,
            'post' => $p,
            'posts' => $_posts,
        ]);
    }
    public function members()
    {
        $members = Administrator::where([])->orderBy('id', 'desc')->limit(12)->get();
        return view('members', [
            'members' => $members
        ]);
    }
}
