<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecentEvent;
use Auth;
use App\Helpers\Helper;
class RecentEventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent_events = RecentEvent::where('institute_id',Auth::user()->institute->id)->orderByDesc('id')->paginate(12);
        return view('frontend.pages.recent_event.index',compact('recent_events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.recent_event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation 
        $request->validate([
            'event_short_description'    => 'required',
            'event_long_description'     => 'nullable',
            'event_thumbnail'            => 'required|image',
        ]);
        
        try {
            $recent_event = new RecentEvent();
            $recent_event->institute_id = $request->institute_id;
            $recent_event->event_short_description = $request->event_short_description;
            $recent_event->event_long_description = $request->event_long_description;
            if ($request->hasFile('event_thumbnail')) {
               $recent_event->event_thumbnail = Helper::upload_image($request->file('event_thumbnail'));
            }
            $recent_event->save();

            return back()->with('message','Successully recent event created !!');

        } catch (Exception $e) {
            return back()->with('message','Something went wrong !!');
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
        $recent_event = RecentEvent::findOrFail($id);

        return view('frontend.pages.recent_event.edit',compact('recent_event'));
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
        try {
            $recent_event = RecentEvent::findOrFail($id);
            $recent_event->institute_id = $request->institute_id;
            $recent_event->event_short_description = $request->event_short_description;
            $recent_event->event_long_description = $request->event_long_description;
            if ($request->hasFile('event_thumbnail')) {
                unlink('public/uploads/'.$recent_event->event_thumbnail);
               $recent_event->event_thumbnail = Helper::upload_image($request->file('event_thumbnail'));
            }
            $recent_event->update();

            return back()->with('message','Successully recent event updated !!');

        } catch (Exception $e) {
            return back()->with('message','Something went wrong !!');
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
            $recent_event = RecentEvent::findOrFail($id);
            if (isset($recent_event->event_thumbnail)) {
                unlink('public/uploads/'.$recent_event->event_thumbnail);
            }
            $recent_event->delete();

            return back()->with('message','Successfully recent event deleted !!');
        } catch (Exception $e) {
             return back()->with('message','Something went wrong !!');
        }
    }
}
