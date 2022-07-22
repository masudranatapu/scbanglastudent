<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhyChooseUs;
use Auth;

class WhyChooseUsController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $why_choose_us = WhyChooseUs::where('institute_id',Auth::user()->institute->id)->orderByDesc('id')->get();
        return view('frontend.pages.why_choose_us.create',compact('why_choose_us'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'why_choose_us' => 'required|unique:why_choose_us',
            'institute_id'  => 'required',
        ]);

        try {
            $why_choose_us = new WhyChooseUs();
            $why_choose_us->institute_id = $request->institute_id;
            $why_choose_us->why_choose_us = $request->why_choose_us;
            $why_choose_us->save();

            return back()->with('message','Successully Why Choose Us Added !!');

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
        //
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
            $why_choose_us = WhyChooseUs::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
            $why_choose_us->delete();
            return back()->with('message','Successully Why Choose Us Deleted !!');

        } catch (\Throwable $th) {
            return back()->with('message','Something went wrong !!');
        }
    }
}
