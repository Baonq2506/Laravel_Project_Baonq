<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('frontend.abouts.index');
    }

    public function contact(){
        return view('frontend.abouts.contact');
    }
}