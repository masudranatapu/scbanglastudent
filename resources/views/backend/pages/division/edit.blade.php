
@extends('backend.layouts.master')

@section('title')
Admin Panel - Division Edit
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
                <h4 class="page-title pull-left">Division Edit</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.division.index') }}">All Division</a></li>
                    <li><span>Edit Division</span></li>
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
                    <h4 class="header-title">Edit Division</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.division.update',$division->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="division_name">Division Name</label>
                                <input type="text" class="form-control" id="division_name" name="division_name" value="{{$division->division_name ?? ''}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <span> Old Logo : </span>
                            <img src="{{ asset('public/uploads/'.$division->cover_photo) }}" width="80" height="60" alt="">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="division_cover_photo">Division Cover Photo</label>
                                <input type="file" class="form-control" id="division_cover_photo" name="division_cover_photo">
                            </div>
                        </div>
                        <div class="form-row">
                            <span> Old Cover Photo : </span>
                            <img src="{{ asset('public/uploads/'.$division->logo) }}"  width="50" height="50" alt="">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="division_logo">Division Logo</label>
                                <input type="file" class="form-control" id="division_logo" name="division_logo">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Division</button>
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