@extends('backend.layouts.master')

@section('title')

Admin Panel - District Create
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
                    <h4 class="page-title pull-left">Sub District Create</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('admin.district.index') }}">All District</a></li>
                        <li><span>Create Sub District</span></li>
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
                        <h4 class="header-title">Create Sub District</h4>
                        @include('backend.layouts.partials.messages')
                        
                        <form action="{{ route('admin.sub-district.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="class_name">Select Division</label>
                                    <select class="form-control select2" name="division_id" id="divisionId">
                                        <option value="" disabled selected>Select One</option>
                                        @foreach(App\Models\Division::orderByDesc('id')->get() as $row)
                                            <option value="{{ $row->id }}">{{ $row->division_name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row" id="districtShow" style="display: none;">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="class_name">Select District</label>
                                    <select class="form-control" name="district_id" id="districtId">
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="district_name">Sub District Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Sub District Name ">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save District</button>
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
        });

        $('#divisionId').on('change', function(){
            var divisionId = $(this).val();
            // alert(divisionId);
            if(divisionId) {
                $.ajax({
                    url: "{{  url('/admin/sub-district/ajax') }}/"+divisionId,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        console.log(data);
                        var d =$('#districtId').empty();
                        $('#districtShow').show();
                        $('#districtId').append('<option value="" disabled selected> Select One </option>');
                        $.each(data, function(key, value){
                            $('#districtId').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    </script>
@endsection