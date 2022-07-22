<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classes;
use Auth;
use App\Helpers\Helper;

class ClassController extends Controller
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
        if (is_null($this->user) || !$this->user->can('class.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any class!');
        }
        $classes = Classes::orderByDesc('id')->get();
        return view('backend.pages.class.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user) || !$this->user->can('class.create')) {
            abort(403,'Sorry !! You are Unauthorized to create any class !');
        }
        return view('backend.pages.class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('class.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any class !');
        }
        // Validation 
        $request->validate([
            'class_name' => 'required|max:100|unique:classes'
        ]);
        try {
            $class = new Classes();
            $class->class_name = $request->class_name;
            $class->class_slug = Helper::make_slug($request->class_name);
            $class->save();

            session()->flash('success', 'Class has been created !!');
            return redirect()->route('admin.class.index');
        } catch (Exception $e) {
            session()->flash('error', 'Something went wrong.. !!');
            return redirect()->route('admin.class.index');
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
        if (is_null($this->user) || !$this->user->can('class.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any class !');
        }
        $class = Classes::findOrFail($id);
        return view('backend.pages.class.edit',compact('class'));

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
        if (is_null($this->user) || !$this->user->can('class.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any class !');
        }
        // Validation 
        try {
            $class = Classes::findOrFail($id);
            $class->class_name = $request->class_name;
            $class->class_slug = Helper::make_slug($request->class_name);
            $class->update();

            session()->flash('success', 'Class has been updated !!');
            return redirect()->route('admin.class.index');
        } catch (Exception $e) {
            session()->flash('error', 'Something went wrong.. !!');
            return redirect()->route('admin.class.index');
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
        if (is_null($this->user) || !$this->user->can('class.delete')) {
            abort(403,'Sorry !! You are Unauthorized to delete any class');
        }
        try {
            $class = Classes::findOrFail($id);
            $class->delete();

            session()->flash('success','Class has been deleted successfully !!');
            return redirect()->route('admin.class.index');

        } catch (Exception $e) {
            session()->flash('error','Something went wrong..!!');
            return redirect()->route('admin.class.index');
        }
    }
}
