<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Helpers\Helper;
class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.pages.slider.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation 
        $request->validate([
            'slider_title' => 'nullable',
            'slider_thumbnail' => 'required|image',
        ]);
        
        try {
            $slider = new Slider();
            $slider->institute_id = $request->institute_id;
            $slider->slider_title = $request->slider_title;
            $slider->slider_thumbnail = Helper::upload_image($request->file('slider_thumbnail'));
            $slider->save();

            return back()->with('message','Successully slider created !!');

        } catch (Exception $e) {
            return back()->with('message','Something went wrong !!');
        }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            if (isset($slider->slider_thumbnail)) {
                unlink('public/uploads/'.$slider->slider_thumbnail);
            }
            $slider->delete();

            return back();
        } catch (Exception $e) {
            
        }
    }
}
