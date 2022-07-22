<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\InstituteType;
use App\Helpers\Helper;
class InstituteTypeController extends Controller
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
        if (is_null($this->user) || !$this->user->can('institute_type.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any institute type !');
        }

        $institute_types = InstituteType::orderByDesc('id')->get();
        return view('backend.pages.institute_type.index', compact('institute_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (is_null($this->user) || !$this->user->can('institute_type.create')) {
            abort(403,'Sorry !! You are Unauthorized to create any institute type !');
        }
        return view('backend.pages.institute_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('institute_type.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any institute type !');
        }

        // Validation Data
        $request->validate([
            'institute_type' => 'required|unique:institute_types|max:100',
        ]);

        // Create New Institute Type
        $institute_type = new InstituteType();
        $institute_type->institute_type = $request->institute_type;
        $institute_type->slug = Helper::make_slug($request->institute_type);
        $institute_type->save();

 
        session()->flash('success', 'Institute type has been created !!');
        return redirect()->route('admin.institute_type.index');
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
        if (is_null($this->user) || !$this->user->can('institute_type.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any institute type !');
        }
        $institute_type = InstituteType::findOrFail($id);
        return view('backend.pages.institute_type.edit', compact('institute_type'));  
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
        if (is_null($this->user) || !$this->user->can('institute_type.edit')) {
            abort(403,'Sorry !! You are Unauthorized to update any institute type');
        }
        // Validate Data

        $request->validate([
            'institute_type' => 'required|unique:institute_types|max:50'
        ]);

        // Update Institute Type

        $institute_type = InstituteType::findOrFail($id);
        $institute_type->institute_type = $request->institute_type;
        $institute_type->slug = Helper::make_slug($request->institute_type);
        $institute_type->update();

    
        session()->flash('success', 'Institute type has been updated !!');
        return redirect()->route('admin.institute_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if (is_null($this->user) || !$this->user->can('institute_type.delete')) {
           abort(403,'Sorry !! You are Unauthorized to delete any institute type !');
       }
       $institute_type = InstituteType::findOrFail($id);
       if (!is_null($institute_type)) {
        $institute_type->delete();
       }
       
       session()->flash('success','Institute type has been deleted !!');
       return  back();
    }
}
