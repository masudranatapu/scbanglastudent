<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use Auth;
use App\Helpers\Helper;
class GroupController extends Controller
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
        if (is_null($this->user) || !$this->user->can('group.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any group !');
        }
        $groups = Group::orderByDesc('id')->get();
        return view('backend.pages.group.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user) || !$this->user->can('group.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any group !');
        }

        return view('backend.pages.group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('group.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any group !');
        }

        // Validation Data
        $request->validate([
            'group_name' => 'required|unique:groups|max:100',
        ]);

        // Data Store to Database

        try {
            $group = new Group();
            $group->group_name = $request->group_name;
            $group->save();

            session()->flash('success','Group has been created !!');
            return redirect()->route('admin.group.index');
        } catch (Exception $e) {
            session()->flash('error','Something went wrong !!');
            return redirect()->route('admin.group.index');
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
        if (is_null($this->user) || !$this->user->can('group.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any group !');
        }
        $group = Group::findOrFail($id);
        return view('backend.pages.group.edit',compact('group'));
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
        if (is_null($this->user) || !$this->user->can('group.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any group !');
        }

        // Data Store to Database

        try {
            $group = Group::findOrFail($id);
            $group->group_name = $request->group_name;
            $group->update();

            session()->flash('success','Group has been updated !!');
            return redirect()->route('admin.group.index');
        } catch (Exception $e) {
            session()->flash('error','Something went wrong !!');
            return redirect()->route('admin.group.index');
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
        if (is_null($this->user) || !$this->user->can('group.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any group !');
        }

        // Delete Data
        try {
            $group = Group::findOrFail($id);
            $group->delete();

            session()->flash('success','Group has been deleted !!');
            return redirect()->route('admin.group.index');
        } catch (Exception $e) {
            session()->flash('error','Something went wrong !!');
            return redirect()->route('admin.group.index');
        }
    }
}
