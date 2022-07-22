<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Board;
use App\Helpers\Helper;
use Illuminate\Support\Str;

class BoardController extends Controller
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
        if (is_null($this->user) || !$this->user->can('board.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any board!');
        }
        $boards = Board::orderByDesc('id')->get();
        return view('backend.pages.board.index',compact('boards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user) || !$this->user->can('board.create')) {
            abort('403','Sorry !! You are Unauthorized to create any board');
        }
        return view('backend.pages.board.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (is_null($this->user) || !$this->user->can('board.create')) {
            abort('403','Sorry !! You are Unauthorized to create any board');
        } 

        // Validation

        $request->validate([
            'board_name'         => 'required|unique:boards|max:100',
            'established_in'     => 'required',
            'facebook_link'      => 'nullable',
            'twitter_link'       => 'nullable',
            'instgram_link'      => 'nullable',
            'location'           => 'required',
            'website'            => 'required',
            'email'              => 'required',
            'phone'              => 'required',
            'cover_photo'        => 'required|image',
            'logo'               => 'required|image',
            'description'        => 'required',
        ]);

        $board = new Board();
        $board->board_name      = $request->board_name;
        $board->board_slug      = Helper::make_slug($request->board_name);
        $board->division_id     = $request->division_id;
        $board->established_in  = $request->established_in;
        $board->facebook_link   = $request->facebook_link;
        $board->twitter_link    = $request->twitter_link;
        $board->instgram_link   = $request->instgram_link;
        $board->location        = $request->location;
        $board->website         = $request->website;
        $board->email           = $request->email;
        $board->phone           = $request->phone;
        if ($request->hasFile('cover_photo')) {
            $board->cover_photo = Helper::upload_image($request->file('cover_photo'));
        }
        if ($request->hasFile('logo')) {
            $board->logo = Helper::upload_image($request->file('logo'));
        }
        $board->description     = $request->description;

        $board->save();


        session()->flash('success','Board has been created !!');
         return redirect()->route('admin.board.index');
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
        if (is_null($this->user) || !$this->user->can('board.edit')) {
            abort('403','Sorry !! You are Unauthorized to edit any board');
        }

        $board = Board::findOrFail($id);
        return view('backend.pages.board.edit',compact('board'));

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
        if (is_null($this->user) || !$this->user->can('board.edit')) {
            abort('403','Sorry !! You are Unauthorized to edit any board');
        } 

        // Validation

        $board = Board::findOrFail($id);
        $board->board_name      = $request->board_name;
        $board->board_slug      = Str::slug($request->board_name);
        $board->division_id     = $request->division_id;
        $board->established_in  = $request->established_in;
        $board->facebook_link   = $request->facebook_link;
        $board->twitter_link    = $request->twitter_link;
        $board->instgram_link   = $request->instgram_link;
        $board->location        = $request->location;
        $board->website         = $request->website;
        $board->email           = $request->email;
        $board->phone           = $request->phone;
        if ($request->hasFile('cover_photo')) {
            if (isset($board->cover_photo)) {
                unlink('public/uploads/'.$board->cover_photo);
            }
            $board->cover_photo = Helper::upload_image($request->file('cover_photo'));
        }
        if ($request->hasFile('logo')) {
            $board->logo = Helper::upload_image($request->file('logo'));
        }
        $board->description     = $request->description;

        $board->update();


        session()->flash('success','Board has been updated !!');
         return redirect()->route('admin.board.index');
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
            $board = Board::findOrFail($id);
            $board->delete();

            session()->flash('success','Board has been deleted !!');
            return redirect()->route('admin.board.index');
        } catch (Exception $e) {
            session()->flash('errors','Something went wrong !!');
            return redirect()->route('admin.board.index');
        }
    }
}
