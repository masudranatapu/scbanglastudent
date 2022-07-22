
@extends('backend.layouts.master')

@section('title')
Admin Panel - Post Edit
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
                <h4 class="page-title pull-left">Post Edit</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.post.index') }}">All Post</a></li>
                    <li><span>Edit Post</span></li>
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
                    <h4 class="header-title">Edit Post</h4>
                    @include('backend.layouts.partials.messages')
                     <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="tab-pane" id="tab1">
                            <div class="form-group">
                                <label for="post_title">Post Title</label>
                                <input type="text" class="form-control" value="{{$post->post_title ?? ''}}" name="post_title">
                            </div>
                            <div class="form-group">
                                <label for="">Old Photo</label> <br>
                                <img src="{{ asset('public/uploads/'.$post->post_thumbnail) }}" width="100" alt=""> <br>
                                <label for="post_title">Post Thumbnail</label>
                                <input type="file" class="form-control" name="post_thumbnail">
                            </div>
                            <div class="form-group">
                                <label for="monthly_tuition_fee">Monthly Tuition Fee</label>
                                <input type="text" class="form-control" name="monthly_tuition_fee" value="{{ $post->monthly_tuition_fee ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="class">Select Class</label>
                                <select name="class_id" id="class" class="form-control">
                                   @foreach(App\Models\Classes::orderByDesc('id')->get() as $class)
                                    <option value="{{ $class->id }}" @if($class->id == $post->class_id) selected @endif>{{ $class->class_name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="shift">Select Shift</label>
                                <select name="shift_id" id="shift" class="form-control">
                                   @foreach(App\Models\Shift::orderByDesc('id')->get() as $shift)
                                    <option value="{{ $shift->id }}" @if($shift->id == $post->shift_id) selected @endif>{{ $shift->name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="group">Select Group</label>
                                <select name="group_id" id="group" class="form-control">
                                    <option value="0">None</option>
                                   @foreach(App\Models\Group::orderByDesc('id')->get() as $group)
                                    <option value="{{ $group->id }}" @if($group->id == $post->group_id) selected @endif >{{ $group->group_name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="maximum_seat">Maximum Seat</label>
                                <input type="text" class="form-control" name="maximum_seat" value="{{ $post->maximum_seat ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="gender">Select Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="male" @if($post->gender == 'male') selected @endif>Male</option>
                                    <option value="female" @if($post->gender == 'female') selected @endif>Female</option>
                                    <option value="both" @if($post->gender == 'both') selected @endif>Both</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="apply_before">Apply Before</label>
                                <input type="datetime-local" id="apply_before" value="{{ $post->apply_before ?? '' }}" name="apply_before" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" cols="30" name="description" rows="10">{{ $post->description ?? '' }}</textarea>
                            </div>                          
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
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