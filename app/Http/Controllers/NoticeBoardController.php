<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NoticeBoard;
use Auth;
use App\Helpers\Helper;
use Response;
class NoticeBoardController extends Controller
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
        return view('frontend.pages.notice_board.create');
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
            'headline' => 'required|unique:notice_boards',
            'notice' => 'required',
        ]);
    
        try {
            $notice = new NoticeBoard();
            $notice->institute_id = Auth::user()->institute->id;
            $notice->headline = $request->headline;
            $notice->notice = Helper::upload_image($request->file('notice'));
            $notice->save();
            return back()->with('message','Successully Notice Added !!');

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
        $notice = NoticeBoard::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
        $all_notice = NoticeBoard::where('institute_id',Auth::user()->institute->id)->orderByDesc('id')->get();
        return view('frontend.pages.notice_board.edit',compact('notice','all_notice'));
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
            $notice = NoticeBoard::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
            $notice->headline = $request->headline;
            if ($request->hasFile('notice')) {
                unlink('public/uploads/'.$notice->notice);
               $notice->notice = Helper::upload_image($request->file('notice'));
            }
            $notice->update();
            return back()->with('message','Successully Notice Updated !!');
        } catch (\Throwable $th) {
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
            $notice = NoticeBoard::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
            if (isset($notice->notice)) {
                unlink('public/uploads/'.$notice->notice);
            }
            $notice->delete();
            return back()->with('message','Successully Notice Deleted !!');
        } catch (Exception $e) {
            return back()->with('message','Something went wrong !!');
        }
          
    }

    public function download($file){
        $path= public_path('/uploads/'.$file);
        return Response::download($path);
    }
}
