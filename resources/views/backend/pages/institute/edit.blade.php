
@extends('backend.layouts.master')

@section('title')
Admin Panel - Institute Edit
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
                <h4 class="page-title pull-left">Institute Edit</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.institute.index') }}">All Institute</a></li>
                    <li><span>Edit Institute</span></li>
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
                    <h4 class="header-title">Edit Institute</h4>
                    @include('backend.layouts.partials.messages')
                     <form action="{{ route('admin.institute.update',$institute->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="tab-pane" id="tab1">
                            <div class="form-group">
                                <label for="institute_name">Institute Name</label>
                                <input type="text" class="form-control" value="{{$institute->institute_name ?? ''}}" name="institute_name">
                            </div>
                            <div class="form-group">
                                <label for="post_title">Institute Type</label>
                                <select name="institute_type_id" id="" class="form-control">
                                    @foreach(App\Models\InstituteType::orderByDesc('id')->get() as $instituteType)
                                        <option value="{{ $instituteType->id }}" @if($instituteType->id == $institute->institute_type_id) selected @endif >{{ $instituteType->institute_type ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="post_title">Sub Institute Type</label>
                                <select name="sub_institute_type_id" id="" class="form-control">
                                    @foreach(App\Models\SubInstituteType::orderByDesc('id')->get() as $iubInstituteType)
                                        <option value="{{ $iubInstituteType->id }}" @if($iubInstituteType->id == $institute->sub_institute_type_id) selected @endif >{{ $iubInstituteType->sub_institute_type ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="post_title">Select Division</label>
                                <select name="division_id" id="" class="form-control">
                                    @foreach(App\Models\Division::orderByDesc('id')->get() as $division)
                                        <option value="{{ $division->id }}" @if($division->id == $institute->division_id) selected @endif >{{ $division->division_name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="post_title">Select District</label>
                                <select name="district_id" id="" class="form-control">
                                    @foreach(App\Models\District::orderByDesc('id')->get() as $district)
                                        <option value="{{ $district->id }}" @if($district->id == $institute->district_id) selected @endif >{{ $district->district_name ?? '' }}</option>
                                    @endforeach
                                </select>
                            </div>
                             <div class="form-group">
                                <label for="headmaster_principal_name">Headmaster / Principal Name</label>
                                <input type="text" class="form-control" name="headmaster_principal_name" value="{{ $institute->headmaster_principal_name ?? '' }}">
                            </div>
                             <div class="form-group">
                                <label for="eiin_code">EIIN Code</label>
                                <input type="text" class="form-control" name="eiin_code" value="{{ $institute->eiin_code ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="established_in">Established In</label>
                                <input type="text" class="form-control" name="established_in" value="{{ $institute->established_in ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="total_student">Total Student</label>
                                <input type="text" class="form-control" name="total_student" value="{{ $institute->total_student ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="facebook_link">Facebook Link</label>
                                <input type="text" class="form-control" name="facebook_link" value="{{ $institute->facebook_link ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="twitter_link">Twitter Link</label>
                                <input type="text" class="form-control" name="twitter_link" value="{{ $institute->twitter_link ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="instgram_link">Instgram Link</label>
                                <input type="text" class="form-control" name="instgram_link" value="{{ $institute->instgram_link ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="linkedin_link">Linkedin Link</label>
                                <input type="text" class="form-control" name="linkedin_link" value="{{ $institute->linkedin_link ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="division_rank">Division Rank</label>
                                <input type="text" class="form-control" name="division_rank" value="{{ $institute->division_rank ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="district_rank">District Link</label>
                                <input type="text" class="form-control" name="district_rank" value="{{ $institute->district_rank ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="banglastudent_rank">Banglastudent Link</label>
                                <input type="text" class="form-control" name="banglastudent_rank" value="{{ $institute->banglastudent_rank ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" name="location" value="{{ $institute->location ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" name="website" value="{{ $institute->website ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" id="phone" value="{{ $institute->phone ?? '' }}" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <span>Old Photo</span> <br> 
                                <img src="{{ asset('public/uploads/'.$institute->logo) }}" width="70" alt=""> <br>
                                <label for="website">Logo</label>
                                <input type="file" class="form-control" name="logo">
                            </div>
                            <div class="form-group">
                                <span>Old Photo</span> <br> 
                                <img src="{{ asset('public/uploads/'.$institute->cover_photo) }}" width="70" alt=""> <br>
                                <label for="website">Cover Photo</label>
                                <input type="file" class="form-control" name="cover_photo">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" cols="30" name="description" rows="10">{{ $institute->description ?? '' }}</textarea>
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