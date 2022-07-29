<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institute;
use App\Models\Post;
use Auth;
use DB;

class HomeController extends Controller
{
    public function myhome(Request $request)
    {
        $featuredPost = Post::where('featured', 1)->where('is_approved',1)->orderByDesc('id')->take(12)->get();
        $featuredInstitute = Institute::where('featured_status', 1)->where('is_approved',1)->orderByDesc('id')->get();
        $topInstitute = Institute::where('top_institute', 1)->where('is_approved',1)->orderByDesc('id')->get();

        if($request->sessionGet == 1) {
            $sessionGet = session()->get('sessionGet');
            $sessionGet = [
                'id' => 1,
            ];
            
            session()->put('sessionGet', $sessionGet);

            $featuredPost = Post::where('featured', 1)->where('is_approved',1)->orderByDesc('id')->take(12)->get();
            $featuredInstitute = Institute::where('featured_status', 1)->where('is_approved',1)->where('division_id', $request->division_id)->orWhere('district_id', $request->district_id)->orWhere('sub_district_id', $request->sub_district_id)->orderByDesc('id')->get();
            $topInstitute = Institute::where('top_institute', 1)->where('is_approved',1)->orderByDesc('id')->get();

        };
        
        return view('frontend.index', compact('featuredPost','featuredInstitute','topInstitute'));
    }
    
    public function getDistrict($id)
    {
        $districts = DB::table('districts')->where('division_id', $id)->get();
        return json_encode($districts);
    }

    public function getSubDistrict($id)
    {
        $subdistricts = DB::table('sub_districts')->where('district_id', $id)->get();
        return json_encode($subdistricts);
    }

    public function redirectAdmin()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $institute = Institute::where('user_id',Auth::user()->id)->first();
        return view('frontend.dashboard',compact('institute'));
    }
}
