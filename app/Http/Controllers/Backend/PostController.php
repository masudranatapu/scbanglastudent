<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use App\Helpers\Helper;
class PostController extends Controller
{
     public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
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
        if (is_null($this->user) || !$this->user->can('post.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any post!');
        }
        $posts = Post::where('is_approved',1)->orderByDesc('id')->get();
        return view('backend.pages.post.index',compact('posts'));
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
        if (is_null($this->user) || !$this->user->can('post.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any post!');
        }
        $post = Post::findOrFail($id);
        return view('backend.pages.post.edit',compact('post'));
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
        //
    }

    public function approve(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('post.approve')) {
            abort(403, 'Sorry !! You are Unauthorized to approve any post!');
        }

        try {
            $post = Post::findOrFail($request->post_id);
            $post->is_approved = 1;
            $post->approved_by = $this->user->id;
            $post->update();

            session()->flash('success','Successfully post approved !!');
            return back();
        } catch (Exception $e) {
            session()->flash('success','Something went wrong !!');
            return back();
        }
    }

    // Show Pending Post

    public function pendingPost()
    {
        $pending_post = Post::where('is_approved',NULL)->orderByDesc('id')->get();
        return view('backend.pages.post.pending_post',compact('pending_post'));
    }

            // Active Top Post
            public function postTopActive(Request $request)
            {
                try {
                    $post = Post::findOrFail($request->post_id);
                    $post->featured = 1;
                    $post->update();
        
                    session()->flash('success','Successfully Post updated !!');
                    return back();
        
                } catch (Exception $e) {
                    session()->flash('success','Something went wrong !!');
                    return back();
                }
            }
            // Deactive Top Post
            public function postTopDeactive(Request $request)
            {
                try {
                    $Post = Post::findOrFail($request->post_id);
                    $Post->featured = NULL;
                    $Post->update();
        
                    session()->flash('success','Successfully Post updated !!');
                    return back();
        
                } catch (Exception $e) {
                    session()->flash('success','Something went wrong !!');
                    return back();
                }
            }
}
