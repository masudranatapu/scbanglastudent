<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\Institute;
use App\Models\Widget;
use App\Models\Post;
use App\Models\InstituteType;
use App\Models\subInstituteType;
use App\Models\Division;
use App\WhyChooseUs;
use App\UpdateNews;
use DB;
use App\ImageGallery;

class PageController extends Controller
{
    public function boardDetails(Request $request,$slug)
    {
        $board = Board::where('board_slug',$slug)->first();
        $institutes = Institute::where('education_board_id',$board->id)->get();
        return view('frontend.pages.board_details',compact('board','institutes'));
    }

    public function instituteDetails(Request $request,$slug)
    {
        $institute = Institute::where('institute_slug',$slug)->first();
        $widget = Widget::where('institute_id',$institute->id)->first();
        $posts = Post::where('institute_id',$institute->id)->paginate(6);
        $why_choose_us = WhyChooseUs::where('institute_id',$institute->id)->orderByDesc('id')->get();
        $update_news = UpdateNews::where('institute_id',$institute->id)->orderByDesc('id')->get();
        $image_gallery = ImageGallery::where('institute_id',$institute->id)->take(12)->get();
        return view('frontend.pages.institute_details',compact('institute','widget','posts','why_choose_us','update_news','image_gallery'));
    }

    public function instituteType($slug)
    {
        $getTypeId = InstituteType::where('slug',$slug)->first();
        $TypeInstitute = Institute::where('institute_type_id',$getTypeId->id)->where('is_approved',1)->paginate(32);
        return view('frontend.pages.institute_listing',compact('TypeInstitute'));
    }

    public function subInstituteType($slug)
    {
        $getSubTypeId = SubInstituteType::where('sub_institute_type_slug',$slug)->first();
        $TypeInstitute = Institute::where('sub_institute_type_id',$getSubTypeId->id)->where('is_approved',1)->paginate(32);
        return view('frontend.pages.institute_listing',compact('TypeInstitute'));
    }

    public function postDetails($slug)
    {
        $post = Post::where('post_slug',$slug)->first();
        
        return view('frontend.pages.post_details',compact('post'));
    }

    public function searchInstituteDetails(Request $request)
    {
        $institutes = DB::table('institutes')
               ->where('institute_name', 'LIKE', "%{$request->institute_key}%") 
               ->where('location', 'LIKE', "%{$request->location}%") 
               ->get();
        
         return view('frontend.pages.search_result',compact('institutes'));
         
   
    }

    // Show Division Page

    public function showDeivisionPage(Request $request)
    {
        $division = Division::where('division_slug',$request->slug)->first();
        $institutes = Institute::where('division_id',$division->id)->get();
        return view('frontend.pages.division_details',compact('division','institutes'));
    }

    // Show All Featured Institute

    public function allFeaturedInstitute()
    {
        $all_featured_institute = Institute::where('is_approved',1)->where('featured_status',1)->paginate(16);
        return view('frontend.pages.all_featured_institute',compact('all_featured_institute'));
    }

    // Show All Top Institute 

    public function allTopInstitute()
    {
        $all_top_institute = Institute::where('is_approved',1)->where('top_institute',1)->paginate(12);
        return view('frontend.pages.all_top_institute',compact('all_top_institute'));
    }

    public function locationSearch(Request $request)
    {
        $getInstituteId = Institute::where('division_id',$request->division_id)->where('district_id',$request->district_id)->where('is_approved',1)->pluck('id')->toArray();

        $featuredPost = Post::where('featured',1)->whereIn('institute_id',$getInstituteId)->orderByDesc('id')->take(20)->get();
        $featuredInstitute = Institute::where('featured_status',1)->whereIn('id',$getInstituteId)->orderByDesc('id')->get();
        $topInstitute  = Institute::where('top_institute',1)->whereIn('id',$getInstituteId)->orderByDesc('id')->get();
        return view('frontend.includes.institute-post-list',compact('featuredPost','featuredInstitute','topInstitute'));
    }
}
