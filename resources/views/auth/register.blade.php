@extends('frontend.master')

@section('content')

<!--<section class="sptb">-->
<!--    <div class="container customerpage">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 d-block mx-auto">-->
<!--                <div class="row">-->
<!--                    <div class="col-xl-12 col-md-12 col-md-12">-->
<!--                        <div class="card mb-xl-0">-->
<!--                            <div class="card-header"><h3 class="card-title">Register</h3></div>-->
<!--                            <div class="card-body">-->
<!--                                <form action="{{ route('institute.store') }}" method="POST" enctype="multipart/form-data">-->
<!--                                    @csrf-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="form-label text-dark">Institute Name</label> -->
<!--                                        <input type="text" name="institute_name" class="form-control" placeholder="Enter Institute name " />-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="form-label text-dark">Select Type</label> -->
<!--                                        <select name="institute_type" class="form-control" id="category">-->
<!--                                            <option value="" selected disabled>Select One</option>-->
<!--                                            @foreach(App\Models\InstituteType::orderByDesc('id')->get() as $row)-->
<!--                                                <option value="{{ $row->institute_type }}">{{ $row->institute_type ?? '' }}</option>-->
<!--                                            @endforeach-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                    <div class="form-group" >-->
<!--                                        <label class="form-label text-dark">Select Sub Type</label> -->
<!--                                        <select name="sub_institute_type_id" class="form-control" id="subcategory">-->
<!--                                            @foreach(App\Models\InstituteType::orderByDesc('id')->get() as $row)-->
<!--                                                <optgroup label="{{ $row->institute_type }}">-->
<!--                                                    @foreach($row->sub_institute_type as $subType)-->
<!--                                                        <option value="{{ $subType->id }}">{{ $subType->sub_institute_type ?? '' }}</option>-->
<!--                                                    @endforeach-->
<!--                                                </optgroup>-->
                                                <!--<option value="{{ $row->id }}">{{ $row->sub_institute_type ?? '' }}</option>-->
<!--                                            @endforeach-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="form-label text-dark">Select Division</label>-->
<!--                                        <select name="division_id" class="form-control">-->
<!--                                            @foreach(App\Models\Division::orderByDesc('id')->get() as $row)-->
<!--                                            <option value="{{ $row->id }}">{{ $row->division_name ?? '' }}</option>-->
<!--                                            @endforeach-->
<!--                                        </select>-->
<!--                                    </div>-->
                                    
<!--                                    <div class="form-group">-->
<!--                                        <label class="form-label text-dark">Select Board</label> -->
<!--                                        <select name="board_id" class="form-control">-->
<!--                                            @foreach(App\Models\Board::orderByDesc('id')->get() as $row)-->
<!--                                            <option value="{{ $row->id }}">{{ $row->board_name ?? '' }}</option>-->
<!--                                            @endforeach-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="form-label text-dark">Location</label> -->
<!--                                        <input type="text" name="location" class="form-control" placeholder="Enter Location" />-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="form-label text-dark">Email address</label> -->
<!--                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" />-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label class="form-label text-dark">Password</label> -->
<!--                                        <input type="password" name="password" class="form-control" placeholder="Password" />-->
<!--                                    </div>-->
<!--                                    <div class="form-footer mt-2">-->
<!--                                        <button type="submit" class="btn btn-primary btn-block">Create New Account</button>-->
<!--                                    </div>-->
<!--                                </form>-->
<!--                                <div class="text-center mt-3 text-dark">Already have account?<a href="{{url('/login')}}">SignIn</a></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<script>-->
<!--    $(document).ready(function(){-->
<!--        var $optgroups = $('#subcategory > optgroup');-->
<!--        $("#category").on("change",function(){-->
<!--            var selectedVal = this.value;-->
<!--            $('#subcategory').html($optgroups.filter('[label="'+selectedVal+'"]'));-->
<!--        });  -->
<!--    });-->
<!--</script>-->

<section class="py-5">
    <div class="container">
        <div
            class="mw-1000px w-100 mx-auto p-4 shadow-md rounded-10px has-blur overflow-hidden border-2 border border-white position-relative">
            <div id="CustomerLoginForm" style="display: none;">
                <h4
                    class="h4 mb-3 text-dark fw-600 d-flex align-items-center gap-2 border-bottom border-2 pb-3 justify-content-center">
                    <span class="flex-shrink-0 size-40px text-primary place-items-center rounded-circle"
                        style="background-color: rgb(240 136 49 / 20%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </span>
                    <span class="flex-shrink-0">Log in</span>
                </h4>
                <form method="post" action="#">
                    <div class="row gy-2 gx-0">
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label text-muted">Email address</label>
                            <input type="email" class="form-control rounded-10px border-2" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="exampleInputPassword1" class="form-label text-muted">Password</label>
                            <input type="password" class="form-control rounded-10px border-2"
                                id="exampleInputPassword1">
                        </div>
                        <div class="col-7 pt-2">
                            <a href="#" onclick="showRecoverPasswordForm();return false;">Forgot
                                your password?</a>
                        </div>
                        <div class="col-5 pt-2 text-end">
                            <a href="#" onclick="ShowCreateAccountForm();return false;">Create account</a>
                        </div>
                        <div class="col-12">
                            <div class="d-grid pt-3">
                                <button type="submit" class="btn bg-primary text-white rounded-10px">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div id="RecoverPasswordForm" style="display: none;">
                <h4
                    class="h4 mb-3 text-dark fw-600 d-flex align-items-center gap-2 border-bottom border-2 pb-3 justify-content-center">
                    <span class="flex-shrink-0 size-40px text-primary place-items-center rounded-circle"
                        style="background-color: rgb(240 136 49 / 20%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </span>
                    <span class="flex-shrink-0">Reset your password</span>
                </h4>
                <form method="post" action="#">
                    <div class="row gy-2 gx-0">
                        <div class="col-12">
                            <label for="exampleInputEmail1" class="form-label text-muted">Email address</label>
                            <input type="email" class="form-control rounded-10px border-2" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We will send you an email to reset your password.
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid pt-3">
                                <button type="submit" class="btn bg-primary text-white rounded-10px">Submit</button>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <div class="py-3 fs-16 fw-500">Or</div>
                            <a class="btn bg-secondary text-white lh-1 px-4" href="#"
                                onclick="hideRecoverPasswordForm();return false;">Login</a>
                        </div>
                    </div>
                </form>
            </div>
            <div id="CreateAccountForm">
                <h4
                    class="h4 mb-3 text-dark fw-600 d-flex align-items-center gap-2 border-bottom border-2 pb-3 justify-content-center">
                    <span class="flex-shrink-0 size-40px text-primary place-items-center rounded-circle"
                        style="background-color: rgb(240 136 49 / 20%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path
                                d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>
                    </span>
                    <span class="flex-shrink-0">Create an account</span>
                </h4>
                <form method="POST" enctype="multipart/form-data" action="{{ route('institute.store') }}">
                    <div class="row g-3">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="mmc-input">
                                <label class="reg-label mb-2">বিভাগ<span style="color:#FF0000">*</span></label>
                                <select name="Institues.divid" class="form-select" id="divid">
                                    <option value="" selected="">--- নির্বাচন করুন --- </option>
                                    <option value="10">  বরিশাল</option>
                                    <option value="20">  চট্টগ্রাম</option>
                                    <option value="30">  ঢাকা</option>
                                    <option value="40">  খুলনা</option>
                                    <option value="50">  রাজশাহী</option>
                                    <option value="55">  রংপুর</option>
                                    <option value="60">  সিলেট</option>
                                    <option value="90">  ময়মনসিংহ</option>
                                </select>
                            </div>
                        </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="mmc-input">
                                <label class="reg-label mb-2">জেলা <span style="color:#FF0000">*</span></label>
                                <select class="form-select required" name="Institues.zillaid" id="zillaid" aria-required="true">
                                    <option value="" selected="">--- নির্বাচন করুন ---    </option>
                                </select>
                            </div>
                        </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="mmc-input">
                                <label class="reg-label mb-2">উপজেলা <span style="color:#FF0000">*</span></label>
                                <select name="Institues.upozillaid" class="form-select" id="upozillaid">
                                    <option value="" selected="">--- নির্বাচন করুন ---    </option>
                                </select>
                            </div>
                        </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="mmc-input">
                                <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের ধরন <span style="color:#FF0000">*</span></label>
                                <select name="Institues.education_type_ids" class="form-select" id="education_type_ids">
                                    <option value="" selected="">--- নির্বাচন করুন ---    </option>
                                    <option value="1">  সাধারণ </option>
                                    <option value="2">  মাদ্রাসা </option>
                                    <option value="3">  কারিগরি</option>
                                </select>
                            </div>
                        </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="mmc-input">
                                <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  স্তর </label>
                                <label class="mmc-checkbox">প্রাথমিক                                            <input type="checkbox" name="Institues.is_primary" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="mmc-checkbox">মাধ্যমিক                                            <input type="checkbox" name="Institues.is_secondary" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="mmc-checkbox">উচ্চমাধ্যমিক                                            <input type="checkbox" name="Institues.is_higher" value="1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="mmc-input">
                                <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  নাম<span style="color:#FF0000">*</span></label>
                                <input class="form-control" name="Institues.name" placeholder="এখানে নাম লিখুন" type="text">
                            </div>
                        </div><!-- col-md-4 col-sm-6 col-xs-12 close -->

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                            <div class="mmc-input">
                                <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  EIIN নাম্বার <span style="color:#FF0000">*</span></label>
                                <input class="form-control" name="Institues.code" placeholder="EIIN নাম্বার লিখুন" type="number" id="eiinNumber" aria-required="true" aria-invalid="false">
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
                                <input class="form-control" name="Institues.mobile" placeholder="০১xxxxxxxxx" type="text">
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
                                <input class="form-control" name="pass_conf" id="pass_conf" placeholder="পুনরায় পাসওয়ার্ড লিখুন" type="password" class="required" aria-required="true">
                            </div>
                        </div><!-- col-md-4 col-sm-6 col-xs-12 close -->
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-pill btn-primary">আবেদন করুন</button>
                        </div>
                    </div>
                </form>

                <script>
                    function showRecoverPasswordForm() {
                        document.getElementById('CreateAccountForm').style.display = 'none';
                        document.getElementById('RecoverPasswordForm').style.display = 'block';
                        document.getElementById('CustomerLoginForm').style.display = 'none';
                    }

                    function hideRecoverPasswordForm() {
                        document.getElementById('CreateAccountForm').style.display = 'none';
                        document.getElementById('RecoverPasswordForm').style.display = 'none';
                        document.getElementById('CustomerLoginForm').style.display = 'block';
                    }

                    function ShowCreateAccountForm() {
                        document.getElementById('CreateAccountForm').style.display = 'block';
                        document.getElementById('CustomerLoginForm').style.display = 'none';
                        document.getElementById('RecoverPasswordForm').style.display = 'none';
                    }

                    // Allow deep linking to the recover password form
                    if (window.location.hash == '#recover') {
                        showRecoverPasswordForm()
                        ShowCreateAccountForm()
                    }

                </script>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        var $optgroups = $('#subcategory > optgroup');
        $("#category").on("change",function(){
            var selectedVal = this.value;
            $('#subcategory').html($optgroups.filter('[label="'+selectedVal+'"]'));
        });  
    });
</script>
@endsection
