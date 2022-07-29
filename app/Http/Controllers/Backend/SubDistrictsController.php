<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubDistrict;
use App\Models\Division;
use App\Models\District;
use Carbon\Carbon;

class SubDistrictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subdistricts = SubDistrict::latest()->get();

        return view('backend.pages.subdistrict.index', compact('subdistricts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $divisions = Division::orderByDesc('id')->get();
        return view('backend.pages.subdistrict.create', compact('divisions'));
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
        $this->validate($request, [
            'name' => 'required',
            'division_id' => 'required',
        ]);

        SubDistrict::insert([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'created_at' => Carbon::now(),
        ]);

        session()->flash('success', 'Sub district has been created !!');
        return redirect()->route('admin.sub-district.index');

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
        //
        $divisions = Division::orderByDesc('id')->get();
        $subdistricts = SubDistrict::findOrFail($id);
        $districts = District::latest()->get();
        return view('backend.pages.subdistrict.edit', compact('divisions', 'subdistricts', 'districts'));
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
        $this->validate($request, [
            'name' => 'required',
            'division_id' => 'required',
        ]);

        SubDistrict::findOrfail($id)->update([
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'created_at' => Carbon::now(),
        ]);

        session()->flash('success', 'Sub district has been updated !!');
        return redirect()->route('admin.sub-district.index');
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
        $subdistricts = SubDistrict::findOrFail($id);
        $subdistricts->delete();
        session()->flash('error', 'Sub district has been delete !!');
        return redirect()->route('admin.sub-district.index');

    }
    public function getdistrict($id)
    {
        $district = District::where('division_id', $id)->get();
        return json_encode($district);
    }
}
