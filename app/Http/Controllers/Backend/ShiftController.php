<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shift;
use Auth;
use App\Helpers\Helper;
class ShiftController extends Controller
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
        if (is_null($this->user) || !$this->user->can('shift.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any shift !');
        }
        $shifts = Shift::orderByDesc('id')->get();
        return view('backend.pages.shift.index',compact('shifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if (is_null($this->user) || !$this->user->can('shift.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any shift !');
        }
        return view('backend.pages.shift.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (is_null($this->user) || !$this->user->can('shift.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any shift !');
        }
        $request->validate([
            'name' => 'required|unique:shifts|max:100'
        ]);
        try {
            $shift = new Shift();
            $shift->name = $request->name;
            $shift->save();

           session()->flash('success', 'Shift has been created !!');
           return redirect()->route('admin.shift.index');
        } catch (Exception $e) {
            session()->flash('error', 'Something went wrong..!!');
            return redirect()->route('admin.shift.index');
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
         if (is_null($this->user) || !$this->user->can('shift.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any shift !');
        }
        $shift = Shift::findOrFail($id);
        return view('backend.pages.shift.edit',compact('shift'));
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
        if (is_null($this->user) || !$this->user->can('shift.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any shift !');
        }
        try {
            $shift = Shift::findOrFail($id);
            $shift->name = $request->name;
            $shift->update();

           session()->flash('success', 'Shift has been updated !!');
           return redirect()->route('admin.shift.index');
        } catch (Exception $e) {
            session()->flash('error', 'Something went wrong..!!');
            return redirect()->route('admin.shift.index');
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
       if (is_null($this->user) || !$this->user->can('shift.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any shift !');
        } 
        try {
            $shift = Shift::findOrFail($id);
            $shift->delete();
            session()->flash('success','Shift has been deleted !!');
            return redirect()->route('admin.shift.index');
        } catch (Exception $e) {
            
        }
    }
}
