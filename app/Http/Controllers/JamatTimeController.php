<?php

namespace App\Http\Controllers;

use App\Models\JamatTime;
use Illuminate\Http\Request;

class JamatTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $jamat = JamatTime::orderBy('created_at', 'desc')->first();
        if($jamat==NULL){
            $jamat = new JamatTime();
            $jamat->title = 'N/A';
            $jamat->sub_title = 'N/A';
            $jamat->save();
            $jamat = JamatTime::orderBy('created_at', 'desc')->first();
            return view('backend.jamat.index', compact('jamat'));
        }else{
            $jamat = JamatTime::orderBy('created_at', 'desc')->first();
            return view('backend.jamat.index', compact('jamat'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.jamat.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JamatTime  $jamatTime
     * @return \Illuminate\Http\Response
     */
    public function show(JamatTime $jamatTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JamatTime  $jamatTime
     * @return \Illuminate\Http\Response
     */
    public function edit(JamatTime $jamatTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JamatTime  $jamatTime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jamat = JamatTime::find($id);
        $jamat->title = $request->title;
        $jamat->sub_title = $request->sub_title;
        $jamat->Fajr_weekdays = $request->Fajr_weekdays;
        $jamat->Fajr_weekends = $request->Fajr_weekends;
        $jamat->Dhuhr_weekdays = $request->Dhuhr_weekdays;
        $jamat->Dhuhr_weekends = $request->Dhuhr_weekends;
        $jamat->Asr_weekdays = $request->Asr_weekdays;
        $jamat->Asr_weekends = $request->Asr_weekends;
        $jamat->Magrib_weekdays = $request->Magrib_weekdays;
        $jamat->Magrib_weekends = $request->Magrib_weekends;
        $jamat->Isha_weekdays = $request->Isha_weekdays;
        $jamat->Isha_weekends = $request->Isha_weekends;
        $jamat->Jummah_weekdays = $request->Jummah_weekdays;
        $jamat->Jummah_weekends = $request->Jummah_weekends;
        $jamat->save();
        return redirect()->route('jamattime.index')->with('success','Jamat Times Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JamatTime  $jamatTime
     * @return \Illuminate\Http\Response
     */
    public function destroy(JamatTime $jamatTime)
    {
        //
    }
}
