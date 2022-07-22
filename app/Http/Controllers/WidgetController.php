<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Widget;
use Auth;
use App\Helpers\Helper;
class WidgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $widget = Widget::where('institute_id',Auth::user()->institute->id)->first();

        return view('frontend.pages.widget.index',compact('widget'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $widget = Widget::findOrFail($id);
            $widget->widget_one_title = $request->widget_one_title;
            $widget->widget_one_heading = $request->widget_one_heading;
            $widget->widget_short_description = $request->widget_short_description;
            $widget->widget_long_description = $request->widget_long_description;
            if ($request->hasFile('widget_one_image')) {
                $widget->widget_one_image = Helper::upload_image($request->file('widget_one_image'));
            }

            $widget->widget_one_image_bottom_text = $request->widget_one_image_bottom_text;  

            $widget->widget_two_title = $request->widget_two_title;
            $widget->widget_two_heading = $request->widget_two_heading;
            $widget->widget_short_two_description = $request->widget_short_two_description;
            $widget->widget_long_two_description = $request->widget_long_two_description;

            if ($request->hasFile('widget_two_image')) {
                $widget->widget_two_image = Helper::upload_image($request->file('widget_two_image'));
            }

            $widget->widget_two_image_bottom_text = $request->widget_two_image_bottom_text;
            $widget->notice_title = $request->notice_title;
            $widget->notice = $request->notice;

            $widget->update();

            return back()->with('message','Successfully Widget Updated !!');
        } catch (Exception $e) {
             return back()->with('message','Something went wrong.. !!');
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
        //
    }
}
