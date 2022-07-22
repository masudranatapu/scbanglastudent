<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\InstituteType;
use App\Models\SubInstituteType;
use App\Helpers\Helper;
class SubInstituteTypeController extends Controller
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
        if (is_null($this->user) || !$this->user->can('sub_institute_type.view')) {
            abort('403','Sorry you are unauthorized to view this sub institute type');
        }
        $sub_institute_types = SubInstituteType::orderByDesc('id')->get();
        return view('backend.pages.sub_institute_type.index',compact('sub_institute_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         if (is_null($this->user) || !$this->user->can('sub_institute_type.create')) {
            abort(403,'Sorry !! You are Unauthorized to create any sub institute type !');
        }
        return view('backend.pages.sub_institute_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if (is_null($this->user) || !$this->user->can('sub_institute_type.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any institute type !');
        }

        // Validation 
        $request->validate([
             'sub_institute_type' => 'required|unique:sub_institute_types|max:100',
             'institute_type_id' => 'sometimes',

        ]);

        // Create New Sub Institute
        $sub_institute_type = new SubInstituteType();
        $sub_institute_type->institute_type_id = $request->institute_type_id;
        $sub_institute_type->sub_institute_type = $request->sub_institute_type;
        $sub_institute_type->sub_institute_type_slug = Helper::make_slug($request->sub_institute_type);
        $sub_institute_type->save();

        session()->flash('success', 'Sub Institute Type has been created !!');
        return redirect()->route('admin.sub_institute_type.index');
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
       if (is_null($this->user) || !$this->user->can('sub_institute_type.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any sub institute type !');
        }
        $sub_institute_type = SubInstituteType::findOrFail($id);
        return view('backend.pages.sub_institute_type.edit', compact('sub_institute_type'));  
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
        if (is_null($this->user) || !$this->user->can('sub_institute_type.edit')) {
            abort(403,'Sorry !! You are Unauthorized to update any sub institute type');
        }
        // Validate Data

        $request->validate([
            'sub_institute_id' => 'sometimes',
            'sub_institute_type' => 'sometimes|unique:sub_institute_types|max:100'
        ]);

        // Update Institute Type

        $sub_institute_type = SubInstituteType::findOrFail($id);
        $sub_institute_type->institute_type_id = $request->institute_type_id;
        $sub_institute_type->sub_institute_type = $request->sub_institute_type;
        $sub_institute_type->sub_institute_type_slug = Helper::make_slug($request->sub_institute_type);
        $sub_institute_type->update();

    
        session()->flash('success', 'Sub Institute Type has been updated !!');
        return redirect()->route('admin.sub_institute_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (is_null($this->user) || !$this->user->can('sub_institute_type.delete')) {
           abort(403,'Sorry !! You are Unauthorized to delete any sub institute type !');
       }
       $sub_institute_type = SubInstituteType::findOrFail($id);
       if (!is_null($sub_institute_type)) {
        $sub_institute_type->delete();
       }
       
       session()->flash('success','Sub Institute Type has been deleted !!');
       return  back();
    }
}
