@extends('frontend.master')

@section('content')
    @php
        $division = DB::table('divisions')->latest()->get();
    @endphp
    <section class="py-5">
        <div class="container">
            <h4 class="h4 mb-3 text-dark fw-600 d-flex align-items-center gap-2 border-bottom border-2 pb-3 justify-content-center">
                <span class="flex-shrink-0">Create an account</span>
            </h4>
            <form method="POST" enctype="multipart/form-data" action="{{ route('institute.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">বিভাগ<span style="color:#FF0000">*</span></label>
                            <select name="division_id" class="form-select" id="divId">
                                <option value="" selected="">--- নির্বাচন করুন --- </option>
                                @foreach($division as $div)
                                    <option value="{{$div->id}}"> {{$div->division_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">জেলা <span style="color:#FF0000">*</span></label>
                            <select class="form-select required" name="district_id" id="disId" aria-required="true">
                                <option value="" selected="">--- নির্বাচন করুন ---</option>
                            </select>
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">উপজেলা <span style="color:#FF0000">*</span></label>
                            <select name="sub_district_id" class="form-select" id="subDisId">
                                <option value="" selected="">--- নির্বাচন করুন ---    </option>
                            </select>
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের ধরন <span style="color:#FF0000">*</span></label>
                            <select name="institute_type_id" class="form-select">
                                <option value="" selected="">--- নির্বাচন করুন ---    </option>
                                <option value="1">  সাধারণ </option>
                                <option value="2">  মাদ্রাসা </option>
                                <option value="3">  কারিগরি</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  স্তর </label>
                            <label class="mmc-checkbox">প্রাথমিক <input type="checkbox" name="sub_institute_type_id" value="1">
                                <span class="checkmark"></span>
                            </label>
                            <label class="mmc-checkbox">মাধ্যমিক <input type="checkbox" name="sub_institute_type_id" value="2">
                                <span class="checkmark"></span>
                            </label>
                            <label class="mmc-checkbox">উচ্চমাধ্যমিক <input type="checkbox" name="sub_institute_type_id" value="3">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  নাম<span style="color:#FF0000">*</span></label>
                            <input class="form-control" name="institute_name" placeholder="এখানে নাম লিখুন" type="text">
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  EIIN নাম্বার <span style="color:#FF0000">*</span></label>
                            <input class="form-control" name="eiin_code" placeholder="EIIN নাম্বার লিখুন" type="number" id="eiinNumber" aria-required="true" aria-invalid="false">
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  ই-মেইল <span style="color:#FF0000">*</span></label>
                            <input class="form-control" name="email" placeholder="এখানে ই-মেইল লিখুন" type="text">
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  মোবাইল নম্বর <span style="color:#FF0000">*</span></label>
                            <input class="form-control" name="phone" placeholder="০১ xxxxxxxxx" type="text">
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  পাসওয়ার্ড <span style="color:#FF0000">*</span></label>
                            <input class="form-control" name="password" id="password" placeholder="এখানে পাসওয়ার্ড লিখুন" type="password" class="required" aria-required="true">
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="mmc-input">
                            <label class="reg-label mb-2">পুনরায় পাসওয়ার্ড লিখুন <span style="color:#FF0000">*</span></label>
                            <input class="form-control" name="confirmed_password" id="pass_conf" placeholder="পুনরায় পাসওয়ার্ড লিখুন" type="password" class="required" aria-required="true">
                        </div>
                    </div><!-- col-md-4 col-sm-6 col-xs-12 close -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-pill btn-primary">আবেদন করুন</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#divId').on('change', function(){
                var divId = $(this).val();
                // alert(divId);
                if(divId) {
                    $.ajax({
                        url: "{{ url('/get-district/ajax') }}/"+divId,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            $('#subDisId').html('');
                            $('#subDisId').append('<option value="" disabled selected> নির্বাচন করুন </option>');
                            var d =$('#disId').empty();
                            $('#disId').append('<option value="" disabled selected> নির্বাচন করুন </option>');
                            $.each(data, function(key, value){
                                $('#disId').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });

            $('#disId').on('change', function(){
                var disId = $(this).val();
                // alert(disId);
                if(disId) {
                    $.ajax({
                        url: "{{  url('/get-sub-district/ajax') }}/"+disId,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                        var d =$('#subDisId').empty();
                            $('#subDisId').append('<option value="" disabled selected> -- নির্বাচন করুন -- </option>');
                            $.each(data, function(key, value){
                                $('#subDisId').append('<option value="'+ value.id +'">' + value.name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });

        });
    </script>
@endsection
