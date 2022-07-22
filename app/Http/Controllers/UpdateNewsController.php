<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpdateNews;
use Auth;
class UpdateNewsController extends Controller
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
        $update_news = UpdateNews::where('institute_id',Auth::user()->institute->id)->orderByDesc('id')->get();
        return view('frontend.pages.update_news.create',compact('update_news'));
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
            'update_news' => 'required|unique:update_news',
            'institute_id'  => 'required',
        ]);

        try {
            $update_news = new UpdateNews();
            $update_news->institute_id = $request->institute_id;
            $update_news->update_news = $request->update_news;
            $update_news->save();
            return back()->with('message','Successully Update News Added !!');

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
        $update_news = UpdateNews::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
        $all_news = UpdateNews::where('institute_id',Auth::user()->institute->id)->orderByDesc('id')->get();
        return view('frontend.pages.update_news.edit',compact('update_news','all_news'));
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
            $update_news = UpdateNews::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
            $update_news->update_news = $request->update_news;
            $update_news->update();
            return back()->with('message','Successully Update News Updated !!');

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
            $update_news = UpdateNews::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
            $update_news->delete();
            return back()->with('message','Successully Update News Deleted !!');

        } catch (\Throwable $th) {
            return back()->with('message','Something went wrong !!');
        }
    }
}
