<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;
use Auth;
use App\Helpers\Helper;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image_galleries = ImageGallery::orderByDesc('id')->get();
        return view('frontend.pages.image_gallery.list', compact('image_galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.image_gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate 
        $request->validate([
            'title' => 'required',
            'thumbnail_image' => 'required',
            'gallery_image' => 'required',
        ]);
        // Store Data
        try {
            $image_gallery = new ImageGallery();
            $image_gallery->institute_id = Auth::user()->institute->id;
            $image_gallery->title = $request->title;
            $image_gallery->thumbnail_image = Helper::upload_image($request->thumbnail_image);
            $image_gallery->gallery_image = $request->gallery_image;
            $image_gallery->save();
            return back()->with('message', 'Image Gallery Created Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Something went wrong');
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
        $image_gallery = ImageGallery::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
        return view('frontend.pages.image_gallery.edit', compact('image_gallery'));
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
        // Update Data
        try {
            $image_gallery = ImageGallery::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
            $image_gallery->title = $request->title;
            if (isset($image_gallery->thumbnail_image)) {
                unlink('public/uploads/'.$image_gallery->thumbnail_image);
                $image_gallery->thumbnail_image = upload_image($request->thumbnail_image);
            }
            $image_gallery->gallery_image = $request->gallery_image;
            $image_gallery->update();
            return back()->with('message', 'Image Gallery Updated Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Something went wrong');
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
        // Delete Gallery 
        try {
            $image_gallery = ImageGallery::where('id',$id)->where('institute_id',Auth::user()->institute->id)->first();
            if (isset($image_gallery->thumbnail_image)) {
                unlink('public/uploads/'.$image_gallery->thumbnail_image);
            }
            $image_gallery->delete();
            return back()->with('message', 'Image Gallery Deleted Successfully');
        } catch (\Throwable $th) {
            return back()->with('error', 'Something went wrong');
        }
        
    }
}
