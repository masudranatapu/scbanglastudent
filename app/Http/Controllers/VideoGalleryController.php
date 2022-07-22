<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoGallery;
use Auth;
use App\Helpers\Helper;
class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video_galleries = VideoGallery::where('institute_id',Auth::user()->institute->id)->orderByDesc('id')->paginate(12);
        return view('frontend.pages.video_gallery.index',compact('video_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.video_gallery.create');
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
            'gallery_short_description'    => 'required',
            'gallery_long_description'     => 'nullable',
            'video_link'                   => 'required',
        ]);
        
        try {
            $video_gallery = new VideoGallery();
            $video_gallery->institute_id = $request->institute_id;
            $video_gallery->gallery_short_description = $request->gallery_short_description;
            $video_gallery->gallery_long_description = $request->gallery_long_description;
            $video_gallery->video_link = $request->video_link;
            
            $video_gallery->save();

            return back()->with('message','Successully video gallery created !!');

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
        $video_gallery = VideoGallery::findOrFail($id);
        return view('frontend.pages.video_gallery.edit',compact('video_gallery'));
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
            $video_gallery = VideoGallery::findOrFail($id);
            $video_gallery->institute_id = $request->institute_id;
            $video_gallery->gallery_short_description = $request->gallery_short_description;
            $video_gallery->gallery_long_description = $request->gallery_long_description;
            $video_gallery->video_link = $request->video_link;
            
            $video_gallery->update();

            return back()->with('message','Successully video gallery updated !!');

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
            $video_gallery = VideoGallery::findOrFail($id);
            $video_gallery->delete();

            return back()->with('message','Successully video gallery deleted !!');
        } catch (Exception $e) {
            return back()->with('message','Something went wrong !!');
        }
    }
}
