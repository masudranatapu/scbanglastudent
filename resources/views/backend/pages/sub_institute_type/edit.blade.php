
@extends('backend.layouts.master')

@section('title')
Admin Panel - Sub Institute Type Edit
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
                <h4 class="page-title pull-left">Sub Institute Type Edit</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.sub_institute_type.index') }}">All Sub Institute Type</a></li>
                    <li><span>Edit Sub Institute Type</span></li>
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
                    <h4 class="header-title">Sub Edit Institute Type</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.sub_institute_type.update',$sub_institute_type->id) }}" method="POST">
                    	@method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="institute_type">Select Institute Type</label>
                                <select class="form-control" name="institute_type_id" id="">
                                    @foreach(App\Models\InstituteType::orderByDesc('id')->get() as $instituteType)
                                        <option value="{{ $instituteType->id ?? '' }}" @if($instituteType->id == $sub_institute_type->institute_type_id) selected @endif>{{$instituteType->institute_type ?? ''}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="institute_type">Sub Institute Type Name</label>
                                <input type="text" class="form-control" id="institute_type" name="sub_institute_type" value="{{ $sub_institute_type->sub_institute_type ?? '' }}">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update Sub Institute Type</button>
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