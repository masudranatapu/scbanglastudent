
@extends('backend.layouts.master')

@section('title')
Admin Panel - Ads Edit
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
                <h4 class="page-title pull-left">Ads Edit</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.ads.index') }}">All Ads</a></li>
                    <li><span>Edit Ads</span></li>
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
                    <h4 class="header-title">Edit Ads</h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.ads.update',$ads->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsOne">Ad One Scripts</label>
                                <textarea name="ads_one" class="form-control" id="adsOne" cols="30" rows="10">{{ $ads->adone_script ?? '' }}</textarea>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsTwo">Ad Two Scripts</label>
                                <textarea name="ads_two" class="form-control" id="adsTwo" cols="30" rows="10">{{ $ads->adtwo_script ?? '' }}</textarea>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsThree">Ad Three Scripts</label>
                                <textarea name="ads_three" class="form-control" id="adsThree" cols="30" rows="10">{{ $ads->adthree_script ?? '' }}</textarea>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsFour">Ad Four Scripts</label>
                                <textarea name="ads_four" class="form-control" id="adsFour" cols="30" rows="10">{{ $ads->adfour_script ?? '' }}</textarea>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsFive">Ad Five Scripts</label>
                                <textarea name="ads_five" class="form-control" id="adsFive" cols="30" rows="10">{{ $ads->adfive_script ?? '' }}</textarea>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsSix">Ad Six Scripts</label>
                                <textarea name="ads_six" class="form-control" id="adsSix" cols="30" rows="10">{{ $ads->adsix_script ?? '' }}</textarea>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsSeven">Ad Seven Scripts</label>
                                <textarea name="ads_seven" class="form-control" id="adsSeven" cols="30" rows="10">{{ $ads->adseven_script ?? '' }}</textarea>
                            </div>
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsEight">Ad Eight Scripts</label>
                                <textarea name="ads_eight" class="form-control" id="adsEight" cols="30" rows="10">{{ $ads->adeight_script ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsNine">Ad Nine Scripts</label>
                                <textarea name="ads_nine" class="form-control" id="adsNine" cols="30" rows="10">{{ $ads->adnine_script ?? '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="adsTen">Ad Ten Scripts</label>
                                <textarea name="ads_ten" class="form-control" id="adsTen" cols="30" rows="10">{{ $ads->adten_script ?? '' }}</textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save Ads</button>
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