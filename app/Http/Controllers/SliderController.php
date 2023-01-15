<?php

namespace App\Http\Controllers;

use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'desc')->get();
        return view('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
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
            'image' => 'required',
            ]);
        $news = new Slider();
        $news->title = $request->title;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = "slider_".time().'.'.$image->getClientOriginalExtension();
            $image->move(base_path('public/uploads/slider/'),$file_name);
            $news->image = $file_name;
         }
         $news->save();

         return redirect()->route('slider.index')->with('success','Slider created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $Slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
       return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'image' => 'required',
            ]);
        $news = Slider::find($id);
        $news->title = $request->title;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $file_name = "slider_".time().'.'.$image->getClientOriginalExtension();
            $image->move(base_path('public/uploads/slider/'),$file_name);
            $news->image = $file_name;
         }
         $news->save();
        return redirect()->route('slider.index')->with('success','Slider created successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $Slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = Slider::find($id);
        $news->delete();
        return redirect()->route('slider.index')->with('success','Slider deleted successfully!');
    }
}
