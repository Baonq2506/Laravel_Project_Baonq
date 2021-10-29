<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){

        $user=User::all();
        $blogs=Post::all();
        return view('backend.dashboard',[
            'user'=>$user,
            'blogs'=>$blogs,
        ]);
    }
}
