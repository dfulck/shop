<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.slider.index',[
            'sliders'=>slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        slider::query()->create([
            'title'=>$request->get('title'),
            'image'=>$request->file('image')->storeAs('public/slider', $request->file('image')->getClientOriginalName())
        ]);

        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        return view('Admin.slider.edit',[
            'slider'=>$slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        $image = $slider->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->storeAs('public/slider', $request->file('image')->getClientOriginalName());
        }
        $slider->update([
            'title'=>$request->get('title'),
            'image'=>$image
        ]);

        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        Storage::delete($slider->image);
        $slider->delete();
        return redirect(route('sliders.index'));
    }
}
