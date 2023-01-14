<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.home.index');
    }

    public function service(){
        return view('frontend.services.index');
    }

    public function news(){
        return view('frontend.news.index');
    }

    public function donate(){
        return view('frontend.donate.index');
    }
    public function contact(){
        return view('frontend.contact.index');
    }
}
