<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApprovedBy;
use Auth;
use App\Helpers\Helper;
class ApprovedByController extends Controller
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
        $approved_by = ApprovedBy::where('institute_id',Auth::user()->institute->id)->get();
        return view('frontend.pages.approved_by.index',compact('approved_by'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Store Data
        // try {
            $approved_by = new ApprovedBy();
            $approved_by->institute_id = Auth::user()->institute->id;
            $approved_by->approved_by_image = Helper::upload_image($request->approved_by_image);
            $approved_by->save();
            return back()->with('message', 'Approved By Created Successfully');
        // } catch (\Throwable $th) {
        //     return back()->with('error', 'Something went wrong');
        // }
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
        // Delete Gallery 
        try {
            $approved_by = ApprovedBy::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
            if (isset($approved_by->thumbnail_image)) {
                unlink('public/uploads/'.$approved_by->thumbnail_image);
            }
            $approved_by->delete();
            return back()->with('message', 'Approved By Deleted Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Something went wrong');
        }
    }
}
