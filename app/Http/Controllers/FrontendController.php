<?php

namespace App\Http\Controllers;
use App\Models\JamatTime;
use App\Models\Slider;
use Carbon\Carbon;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){


        //Prrayer Time API 
        $current_timestamp = Carbon::now()->timestamp; // Produces something like 1552296328
        $url = "https://api.aladhan.com/v1/timings/.$current_timestamp?latitude=52.9115&longitude=-0.6418&method=4";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        //Prrayer Time API  Ends



        $data['prayer'] = json_decode($resp, true);
        $data['jamat'] = JamatTime::orderBy('created_at', 'desc')->first();
        $data['sliders'] = Slider::All();
        return view('frontend.home.index', $data);
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
