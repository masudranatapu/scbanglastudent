@extends('frontend.master')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="mw-400px w-100 mx-auto p-4 shadow-md rounded-10px has-blur overflow-hidden border-2 border border-white position-relative">
                <div id="CustomerLoginForm">
                    <h4 class="h4 mb-3 text-dark fw-600 d-flex align-items-center gap-2 border-bottom border-2 pb-3 justify-content-center">
                        <span class="flex-shrink-0 size-40px text-primary place-items-center rounded-circle"
                            style="background-color: rgb(240 136 49 / 20%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-key-fill" viewBox="0 0 16 16">
                                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                        </span>
                        <span class="flex-shrink-0">Log in</span>
                    </h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row gy-2 gx-0">
                            <div class="col-12">
                                <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  ই-মেইল <span style="color:#FF0000">*</span></label>
                                <input type="email" name="email" class="form-control rounded-10px border-2" placeholder="শিক্ষা প্রতিষ্ঠানের  ই-মেইল">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="reg-label mb-2">শিক্ষা প্রতিষ্ঠানের  পাসওয়ার্ড <span style="color:#FF0000">*</span></label>
                                <input type="password" name="password" class="form-control rounded-10px border-2" placeholder="শিক্ষা প্রতিষ্ঠানের পাসওয়ার্ড">
                            </div>
                            <div class="col-7 pt-2">
                                <a href="javascript:;">
                                    Forgot your password?
                                </a>
                            </div>
                            <div class="col-5 pt-2 text-end">
                                <a class="fw-500" href="{{url('/register')}}">নতুন একাউন্ট করুন</a>
                            </div>
                            <div class="col-12">
                                <div class="d-grid pt-3">
                                    <button type="submit" class="btn btn-pill btn-primary">লগইন করুন</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
