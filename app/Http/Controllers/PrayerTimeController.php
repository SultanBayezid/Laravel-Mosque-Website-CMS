<?php

namespace App\Http\Controllers;

use App\Models\PrayerTime;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PrayerTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

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
       $data['prayer'] = json_decode($resp, true);
       //Prrayer Time API  Ends
       $jamat = PrayerTime::orderBy('created_at', 'desc')->first();
       if($jamat==NULL){
           $jamat = new PrayerTime();
           $jamat->title = 'N/A';
           $jamat->sub_title = 'N/A';
           $jamat->save();
           $data['jamat'] = PrayerTime::orderBy('created_at', 'desc')->first();
           return view('backend.prayertime.index', $data);

       }else{
           $data['jamat'] = PrayerTime::orderBy('created_at', 'desc')->first();
           return view('backend.prayertime.index', $data);

       }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ptime = PrayerTime::find($id);
        $ptime->title = $request->title;
        $ptime->sub_title = $request->sub_title;
        $ptime->save();
        return redirect()->route('prayer-time.index')->with('success','Prayer Times Updated successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PrayerTime  $prayerTime
     * @return \Illuminate\Http\Response
     */
    public function show(PrayerTime $prayerTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PrayerTime  $prayerTime
     * @return \Illuminate\Http\Response
     */
    public function edit(PrayerTime $prayerTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrayerTime  $prayerTime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ptime = PrayerTime::find($id);
        $ptime->title = $request->title;
        $ptime->sub_title = $request->sub_title;
        $ptime->save();
        return redirect()->route('prayer-time.index')->with('success','Prayer Times Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrayerTime  $prayerTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(PrayerTime $prayerTime)
    {
        //
    }
}
