
@extends('backend.layouts.master')

@section('title')
Admin Panel - Board Edit
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Board Edit</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.board.index') }}">All Board</a></li>
                    <li><span>Edit Board</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-8 offset-2 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Board</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.board.update',$board->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="division_id">Select Division</label>
                                <select name="division_id" id="" class="form-control select2">
                                    @foreach(App\Models\Division::orderByDesc('id')->get() as $row)
                                        <option value="{{ $row->id }}" @if($row->id == $board->division_id) selected @endif>{{ $row->division_name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="board_name">Board Name</label>
                                <input type="text" class="form-control" id="board_name" name="board_name" value="{{ $board->board_name ?? '' }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="established_in">Established In</label>
                                <input type="text" class="form-control" id="established_in" name="established_in" value="{{ $board->established_in ?? '' }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="facebook_link">Facebook Link</label>
                                <input type="text" class="form-control" id="facebook_link" name="facebook_link" value="{{ $board->facebook_link ?? '' }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="twitter_link">Twitter Link</label>
                                <input type="text" class="form-control" id="twitter_link" name="twitter_link" value="{{ $board->twitter_link ?? '' }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="instgram_link">Instgram Link</label>
                                <input type="text" class="form-control" id="instgram_link" name="instgram_link" value="{{ $board->instgram_link ?? '' }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="location">Board Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ $board->location ?? '' }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="website" name="website" value="{{ $board->website ?? '' }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $board->email ?? '' }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $board->phone ?? '' }}">
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <span>Old Cover Photo : </span>
                                <img src="{{ asset('public/uploads/'.$board->cover_photo) }}" alt="" width="50" height="50">
                                <label for="cover_photo">Cover Photo</label>
                                <input type="file" class="form-control" id="cover_photo" name="cover_photo">
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <span>Old Logo : </span>
                                <img src="{{ asset('public/uploads/'.$board->logo) }}" alt="" width="50" height="50">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="class_name">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10">{!! $board->description ?? '' !!}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Board</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection