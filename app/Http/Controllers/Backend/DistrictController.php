<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\District;
use App\Helpers\Helper;

class DistrictController extends Controller
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
        if (is_null($this->user) || !$this->user->can('district.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any district page');
        }
        $districts = District::orderByDesc('id')->get();
        return view('backend.pages.district.index',compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user) || !$this->user->can('district.create')) {
            abort(403,'Sorry !! You are Unauthorized to create any district page');
        }
        return view('backend.pages.district.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('district.create')) {
            abort(403,'Sorry you are unauthorized to view this district page');
        } 
        $request->validate([
            'district_name'          => 'required|unique:districts|max:100',
            'cover_photo'            => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try {
            $district = new District();
            $district->division_id = $request->division_id;
            $district->district_name = $request->district_name;
            $district->district_slug = Helper::make_slug($request->district_name);
            if ($request->hasFile('cover_photo')) {
                $district->cover_photo = upload_image($request->file('cover_photo'));
            }
            $district->save();

           session()->flash('success', 'District has been created !!');
           return redirect()->route('admin.district.index');
        } catch (Exception $e) {
            session()->flash('error', 'Something went wrong.. !!');
            return redirect()->route('admin.district.index');
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
        if (is_null($this->user) || !$this->user->can('district.edit')) {
            abort(403,'Sorry !! You are Unauthorized to edit any district');
        }
        $district = District::findOrFail($id);
        return view('backend.pages.district.edit',compact('district'));
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
        if (is_null($this->user) || !$this->user->can('district.edit')) {
            abort(403,'Sorry you are unauthorized to view this district page');
        }
        try {
            $district = District::findOrFail($id);
            $district->division_id = $request->division_id;
            $district->district_name = $request->district_name;
            $district->district_slug = make_slug($request->district_name);
            if ($request->hasFile('cover_photo')) {
                $district->cover_photo = Helper::upload_image($request->file('cover_photo'));
            }
            $district->update();

           session()->flash('success', 'District has been updated !!');
           return redirect()->route('admin.district.index');
        } catch (Exception $e) {
            session()->flash('error', 'Something went wrong.. !!');
            return redirect()->route('admin.district.index');
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
        //
    }
}
