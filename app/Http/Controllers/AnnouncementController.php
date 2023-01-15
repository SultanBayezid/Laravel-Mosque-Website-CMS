<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('backend.announcement.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'announcement' => 'required',
            ]);
        $news = new Announcement();
        $news->announcement = $request->announcement;
        $news->save();

         return redirect()->route('announcement.index')->with('success','Announcement created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = Announcement::find($id);
       return view('backend.announcement.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'announcement' => 'required',
            ]);
        $news = Announcement::find($id);
        $news->announcement = $request->announcement;
        $news->save();
        return redirect()->route('announcement.index')->with('success','Announcement created successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = Announcement::find($id);
        $news->delete();
        return redirect()->route('announcement.index')->with('success','announcement deleted successfully!');
    }
}
