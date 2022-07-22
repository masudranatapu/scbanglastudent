<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Division;
use Auth;
use App\Helpers\Helper;
class DivisionController extends Controller
{
    public $user;

    public function __construct(){
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
        if (is_null($this->user) || !$this->user->can('division.view')) {
            abort(403,'Sorry you are unauthorized to view this division page');
        }
        $divisions = Division::orderByDesc('id')->get();
        return view('backend.pages.division.index',compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user) || !$this->user->can('division.create')) {
            abort(403,'Sorry you are unauthorized to view this division page');
        }
        return view('backend.pages.division.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (is_null($this->user) || !$this->user->can('division.create')) {
            abort(403,'Sorry you are unauthorized to view this division page');
        } 
        $request->validate([
            'division_name'          => 'required|unique:divisions|max:100',
            'division_logo'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'division_cover_photo'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try {
            $division = new Division();
            $division->division_name = $request->division_name;
            $division->division_slug = Helper::make_slug($request->division_name);
            if ($request->hasFile('division_logo')) {
                $division->logo = Helper::upload_image($request->file('division_logo'));
            }
            if ($request->hasFile('division_cover_photo')) {
                $division->cover_photo = Helper::upload_image($request->file('division_cover_photo'));
            }
            $division->save();

           session()->flash('success', 'Division has been created !!');
            return redirect()->route('admin.division.index');
        } catch (Exception $e) {
            session()->flash('error', 'Something went wrong.. !!');
            return redirect()->route('admin.division.index');
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
        if (is_null($this->user) || !$this->user->can('division.edit')) {
            abort(403,'Sorry you are unauthorized to edit this division page');
        }
        $division = Division::findOrFail($id);
        return view('backend.pages.division.edit',compact('division'));
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
        if (is_null($this->user) || !$this->user->can('division.edit')) {
            abort(403,'Sorry you are unauthorized to edit this division page');
        } 
        try {
            $division = Division::findOrFail($id);
            $division->division_name = $request->division_name;
            $division->division_slug = Helper::make_slug($request->division_name);
            if ($request->hasFile('division_logo')) {
                // unlink('public/uploads/'.$division->division_logo);
                $division->logo = Helper::upload_image($request->file('division_logo'));
            }
            if ($request->hasFile('division_cover_photo')) {
                // unlink('public/uploads/'.$division->division_cover_photo);
                $division->cover_photo = Helper::upload_image($request->file('division_cover_photo'));
            }
            $division->update();

           session()->flash('success', 'Division has been updated !!');
            return redirect()->route('admin.division.index');
        } catch (Exception $e) {
            session()->flash('error', 'Something went wrong.. !!');
            return redirect()->route('admin.division.index');
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
            $division = Division::findOrFail($id);
            $division->delete();

           session()->flash('success', 'Division has been deleted !!');
           return redirect()->route('admin.division.index');  
        } catch (Exception $e) {
           session()->flash('error', 'Something went wrong.. !!');
            return redirect()->route('admin.division.index'); 
        }
    }
}
