<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use App\Helpers\Helper;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('web')->user();
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('is_approved',1)->paginate('12');
        return view('frontend.pages.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.post.create');
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
            'post_title'            => 'required',
            'post_thumbnail'        => 'required|image',
            'monthly_tuition_fee'   => 'required',
            'class_id'              => 'required',
            'shift_id'              => 'required',
            'maximum_seat'          => 'required',
            'gender'                => 'required',
            'apply_before'          => 'required',
            'description'           => 'required',
        ]);

        try {
            $post = new Post();
            $post->institute_id = $request->institute_id;
            $post->post_title = $request->post_title;
            $post->post_slug = Helper::make_slug($request->post_title);
            if ($request->hasFile('post_thumbnail')) {
                $post->post_thumbnail = Helper::upload_image($request->file('post_thumbnail'));
            }
            $post->monthly_tuition_fee = $request->monthly_tuition_fee;
            $post->offer_fee = $request->offer_fee;
            $post->class_id  =  $request->class_id;
            $post->shift_id   = $request->shift_id;
            $post->group_id = $request->group_id;
            $post->maximum_seat = $request->maximum_seat;
            $post->gender = $request->gender;
            $post->apply_before = $request->apply_before;
            $post->description = $request->description;
            $post->save();

            return back()->with('message','Successfully post added !!');
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

        $post = Post::findOrFail($id);
        return view('frontend.pages.post.edit',compact('post'));
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
            $post = Post::findOrFail($id);
            $post->post_title = $request->post_title;
            $post->post_slug = Helper::make_slug($request->post_title);
            if ($request->hasFile('post_thumbnail')) {
                unlink('public/uploads/'.$post->post_thumbnail);
                $post->post_thumbnail = Helper::upload_image($request->file('post_thumbnail'));
            }
            $post->monthly_tuition_fee = $request->monthly_tuition_fee;
            $post->offer_fee = $request->offer_fee;
            $post->class_id  =  $request->class_id;
            $post->shift_id   = $request->shift_id;
            $post->group_id = $request->group_id;
            $post->maximum_seat = $request->maximum_seat;
            $post->gender = $request->gender;
            $post->apply_before = $request->apply_before;
            $post->description = $request->description;
            $post->update();

            session()->flash('success', 'Post has been updated !!');
            return back()->with('message','Successfully post updated !!');
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
            $post = Post::findOrFail($id);
            if (isset($post->post_thumbnail)) {
                unlink('public/uploads/'.$post->post_thumbnail);
            }
            $post->delete();

            session()->flash('success', 'Post has been deleted !!');
           return redirect()->route('admin.shift.index');
            return back()->with('message','Successfully post deleted !!');
        } catch (Exception $e) {
            return back()->with('message','Something went wrong !!');
        }
    }

    public function pendingPost()
    {
        $pending_post = Post::where('is_approved',NULL)->paginate();
        return view('frontend.pages.post.pending_post',compact('pending_post'));
    }
}
