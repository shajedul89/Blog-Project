<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function home(){
        $posts=post::latest()->get();
        return view('frontend.index',compact('posts'));
    }

    public function single_post(){

        return view('frontend.single_post');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function video(){
        return view('frontend.video');
    }
}
