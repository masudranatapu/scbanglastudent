<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Ads;

class AdsController extends Controller
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
        if (is_null($this->user) || !$this->user->can('ads.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any ads!');
        }
        $ads = Ads::findOrFail(1);
        return view('backend.pages.ads.index',compact('ads'));
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
        if (is_null($this->user) || !$this->user->can('ads.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any ads!');
        }
        try {
            $ads = Ads::findOrFail(1);
            $ads->adone_script = $request->ads_one;
            $ads->adtwo_script = $request->ads_two;
            $ads->adthree_script = $request->ads_three;
            $ads->adfour_script = $request->ads_four;
            $ads->adfive_script = $request->ads_five;
            $ads->adsix_script = $request->ads_six;
            $ads->adseven_script = $request->ads_seven;
            $ads->adeight_script = $request->ads_eight;
            $ads->adnine_script = $request->ads_nine;
            $ads->adten_script = $request->ads_ten;
            $ads->update();

            session()->flash('success','Ads has been updated !!');
             return redirect()->route('admin.ads.index');
        } catch (Exception $e) {
            session()->flash('error','Something went wrong !!');
             return redirect()->route('admin.ads.index');
        }
    }

}
