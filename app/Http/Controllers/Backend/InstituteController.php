<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;
use Auth;
use App\Models\User;
use App\Models\Widget;
use App\Helpers\Helper;
class InstituteController extends Controller
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
       if (is_null($this->user) || !$this->user->can('institute.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any institute!');
        }
        $institutes = Institute::where('is_approved',1)->orderByDesc('id')->get();
        return view('backend.pages.institute.index',compact('institutes'));
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
        if (is_null($this->user) || !$this->user->can('institute.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any institute!');
        }
        $institute = Institute::findOrFail($id);
        return view('backend.pages.institute.edit',compact('institute'));
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
        if (is_null($this->user) || !$this->user->can('institute.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any institute!');
        }

        try {
            $institute = Institute::findOrFail($id);
            $institute->institute_name = $request->institute_name;
            $institute->institute_slug = Helper::make_slug($request->institute_name);
            $institute->institute_type_id = $request->institute_type_id;
            $institute->sub_institute_type_id = $request->sub_institute_type_id;
            $institute->division_id = $request->division_id;
            $institute->district_id = $request->district_id;
            $institute->headmaster_principal_name = $request->headmaster_principal_name;
            $institute->eiin_code = $request->eiin_code;
            $institute->established_in = $request->established_in;
            $institute->total_student = $request->total_student;
            $institute->facebook_link = $request->facebook_link;
            $institute->twitter_link = $request->twitter_link;
            $institute->instgram_link = $request->instgram_link;
            $institute->linkedin_link = $request->linkedin_link;
            $institute->division_rank = $request->division_rank;
            $institute->district_rank = $request->district_rank;
            $institute->banglastudent_rank = $request->banglastudent_rank;
            $institute->location = $request->location;
            $institute->website = $request->website;
            if ($request->hasFile('logo')) {
                $institute->logo = Helper::upload_image($request->file('logo'));
            }
             if ($request->hasFile('cover_photo')) {
                $institute->cover_photo = Helper::upload_image($request->file('cover_photo'));
            }
            $institute->phone = $request->phone;
            $institute->description = $request->description;
            $institute->update();

            session()->flash('success', 'Institute has been updated !!');
            return redirect()->route('admin.institute.index');


        } catch (Exception $e) {
            session()->flash('errors', 'Something went wrong !!');
            return redirect()->route('admin.institute.index');
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
            $institute = Institute::findOrFail($id);
            // Delete User
            $user = User::findOrFail($institute->user_id);
            $user->delete();
            // Delete Widget
            $widget = Widget::where('institute_id',$id)->first();
            $widget->delete();
            
            $institute->delete();

            session()->flash('success', 'Institute has been deleted !!');
            return redirect()->route('admin.institute.index');
        } catch (Exception $e) {
            session()->flash('errors', 'Something went wrong !!');
            return redirect()->route('admin.institute.index');
        }
    }
    // Approve Institute

    public function approve(Request $request)
    {
         if (is_null($this->user) || !$this->user->can('institute.approve')) {
            abort(403, 'Sorry !! You are Unauthorized to approve any institute!');
        }

        try {
            $institute = Institute::findOrFail($request->institute_id);
            $institute->is_approved = 1;
            $institute->approved_by = $this->user->id;
            $institute->update();

            session()->flash('success','Successfully institute approved !!');
            return back();
        } catch (Exception $e) {
            session()->flash('success','Something went wrong !!');
            return back();
        }
    }

    // Pending Institute Show
    public function pendingInstitute()
    {
        $pending_institute = Institute::where('is_approved',NULL)->get();
        return view('backend.pages.institute.pending_institute',compact('pending_institute'));
    }

    // Active Featured Institute
    public function instituteFeaturedActive(Request $request)
    {
        try {
            $institute = Institute::findOrFail($request->institute_id);
            $institute->featured_status = 1;
            $institute->update();

            session()->flash('success','Successfully institute updated !!');
            return back();

        } catch (Exception $e) {
            session()->flash('success','Something went wrong !!');
            return back();
        }
    }
    // Deactive Featured Institute
    public function instituteFeaturedDeactive(Request $request)
    {
        try {
            $institute = Institute::findOrFail($request->institute_id);
            $institute->featured_status = NULL;
            $institute->update();

            session()->flash('success','Successfully institute updated !!');
            return back();

        } catch (Exception $e) {
            session()->flash('success','Something went wrong !!');
            return back();
        }
    }

        // Active Top Institute
    public function instituteTopActive(Request $request)
    {
        try {
            $institute = Institute::findOrFail($request->institute_id);
            $institute->top_institute = 1;
            $institute->update();

            session()->flash('success','Successfully institute updated !!');
            return back();

        } catch (Exception $e) {
            session()->flash('success','Something went wrong !!');
            return back();
        }
    }
    // Deactive Top Institute
    public function instituteTopDeactive(Request $request)
    {
        try {
            $institute = Institute::findOrFail($request->institute_id);
            $institute->top_institute = NULL;
            $institute->update();

            session()->flash('success','Successfully institute updated !!');
            return back();

        } catch (Exception $e) {
            session()->flash('success','Something went wrong !!');
            return back();
        }
    }
}
