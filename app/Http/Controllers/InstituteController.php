<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\Institute;
use App\Models\InstituteType;
use App\User;
use Auth;
use App\Models\Widget;
use App\Helpers\Helper;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        try {
            $user = new User();
            $user->name = $request->institute_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            
            $institute = new Institute();
            $institute->user_id = $user->id;
            $institute->institute_name = $request->institute_name;
            $institute->institute_slug = Helper::make_slug($request->institute_name);

            $institute->institute_type_id = $request->institute_type_id;
            $institute->sub_institute_type_id = $request->sub_institute_type_id;
            $institute->phone = $request->phone;
            $institute->eiin_code = $request->eiin_code;
            $institute->division_id = $request->division_id;
            $institute->division_id = $request->division_id;
            $institute->district_id = $request->district_id;
            $institute->sub_district_id = $request->sub_district_id;
            
            $institute->save();

            $widget = new Widget();
            $widget->institute_id = $institute->id;
            $widget->widget_one_title = "Widget one title";
            $widget->widget_one_heading = "Widget one heading";
            $widget->widget_short_description = "Widget one short description..";
            $widget->widget_long_description = "Widget one long description..";
            $widget->widget_one_image = 'placeholder.png';
            $widget->widget_one_image_bottom_text = "Widget One Bottom Text";            
            $widget->widget_two_title = "Widget two title";
            $widget->widget_two_heading = "Widget two heading";
            $widget->widget_short_two_description = "Widget two short description..";
            $widget->widget_long_two_description = "Widget two long description..";
            $widget->widget_two_image = 'placeholder.png';
            $widget->widget_two_image_bottom_text = "Widget two Bottom Text";
            $widget->notice_title = "Notice Title";
            $widget->notice = "lorem ipsum dolor sit amet";
            $widget->save();
            
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {

                return view('/home')->with('message','Welcome to Dashboard');
            }else{
                return back()->with('message','Something Wrong !!');
            }
        } catch (Exception $e) {
            return back()->with('message','Something went wrong !!');
        }
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
            $institute = Institute::findOrFail($id);
            $institute->institute_name = $request->institute_name;
            $institute->institute_slug = Helper::make_slug($request->institute_name);
            $institute->institute_type_id = $request->institute_type_id;
            $institute->sub_institute_type_id = $request->sub_institute_type_id;
            $institute->division_id = $request->division_id;
            $institute->district_id = $request->district_id;
            $institute->headmaster_principal_name = $request->headmaster_principal_name;
            $institute->eiin_code = $request->eiin_code;
            $institute->established_in = $request->established_in;
            $institute->total_student = $request->total_student;
            $institute->facebook_link = $request->facebook_link;
            $institute->twitter_link = $request->twitter_link;
            $institute->instgram_link = $request->instgram_link;
            $institute->linkedin_link = $request->linkedin_link;
            $institute->division_rank = $request->division_rank;
            $institute->district_rank = $request->district_rank;
            $institute->banglastudent_rank = $request->banglastudent_rank;
            $institute->location = $request->location;
            $institute->website = $request->website;
            if ($request->hasFile('logo')) {
                $institute->logo = Helper::upload_image($request->file('logo'));
            }
             if ($request->hasFile('cover_photo')) {
                $institute->cover_photo = Helper::upload_image($request->file('cover_photo'));
            }
            $institute->phone = $request->phone;
            $institute->description = $request->description;
            $institute->update();

            return back()->with('message','Successfully institute updated !!');
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
        //
    }
}
