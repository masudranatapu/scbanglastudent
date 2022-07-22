@extends('frontend.master')

@section('content')
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <!--Classified Description-->
                <div class="card mb-3">
                    <div class="card-body h-100">
                        <div class="product-slider mb-3">
                            <img class="lazyload img-fluid" data-src="{{ asset('public/uploads/'.$post->post_thumbnail) }}" alt="Image">
                        </div>
                        <div class="item-det mb-3">
                            <h4 class="mb-0 h4">
                                <b>{{$post->post_title ?? ''}}</b>
                            </h4>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-3">
                               <div class="p-3 bg-secondary text-white h-100">
                                    <h6 class="h6 m-0">Tuition Fee 
                                        @if($post->offer_fee)
                                            {{ $post->offer_fee ?? '' }} ৳
                                        @else
                                            {{ $post->monthly_tuition_fee ?? '' }} ৳
                                        @endif
        
                                    </h6>
                               </div>
                            </div>
                            <div class="col-md-5">
                                <div class="p-3 bg-secondary text-white h-100">
                                    <!--<h6 class="h6 m-0">Apply Last Date: {{ \Carbon\Carbon::parse($post->apply_before)->diffForHumans() ?? '' }}</h6>-->
                                    <div class="countdown-wrapper d-flex align-items-center justify-content-center">
                                        <div class="fs-16 fw-600">দিন বাকি <i class="pe-1 las la-angle-double-right"></i>
                                        </div>
                                        <div class="count-down d-flex align-items-center justify-content-center gap-2"
                                            data-countdown="2022/08/01 00:00:00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-secondary text-white h-100">
                                        <h6 class="h6 m-0">Phone: {{$post->institute->phone ?? ''}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h4 class="h4 mb-0 fw-600">Description</h4></div>
                    <div class="card-body">
                        <div class="mb-4">
                            {!! $post->description ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="row gy-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="h4 mb-0 fw-600">Institute Details</h3>
                            </div>
                            <div class="card-body item-user">
                                <div class="profile-pic mb-0">
                                    <img src="{{ asset('public/uploads/'.$post->institute->logo) }}" class="brround avatar-xxl" alt="Institute" />
                                    <h6 class="text-dark mb-2 fw-600">Established In : {{ $post->institute->established_in ?? '' }}</h6> 
                                    <h6 class="text-dark mb-0 fw-600">Location : {{ $post->institute->location ?? '' }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="h4 mb-0 fw-600">Post Details</h3>
                            </div>
                            <div class="card-body item-user">
                                <div class="billing-content">
                                    <p class="mb-2"> <span class="color-text-2 font-weight-medium mr-1">Institute Name : </span> 
                                        <a href="http://localhost/sc/institute/details/1">{{$post->institute->institute_name ?? ''}}</a> </p>
                                    <p class="mb-2"> <span class="me-1">Institute Type : {{ $post->institute->institute_type->institute_type ?? '' }} </span></p>
                                    <p class="mb-2"> <span class="me-1">Monthly Tuition Fee : </span>@if($post->offer_fee) {{ $post->offer_fee ?? '' }}@else {{ $post->monthly_tuition_fee ?? '' }}@endif ৳</p>
                                    <p class="mb-2"><span class="me-1 ">Class : {{$post->class->class_name ?? ''}}</span></p>
                                    <p class="mb-2"> <span class="me-1">Group :</span> {{$post->group->group_name ?? ''}}</p>
                                    <p class="mb-2"> <span class="me-1">Shift :</span> {{$post->shift->name ?? ''}}</p>
                                    <p class="mb-2"><span class="me-1">Gender :</span> {{$post->gender ?? ''}}</p>
                                    <p class="mb-2"><span class="me-1">Maximum Seat :</span> {{$post->maximum_seat ?? ''}}</p>
                                    <p class="mb-2"> <span class="me-1">Apply Before : {{ \Carbon\Carbon::parse($post->apply_before)->diffForHumans() ?? '' }} </span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="h4 mb-0 fw-600">Contact Info</h4>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-2">
                                    <span class="font-weight-semibold"><i class="fa fa-envelope me-3 mb-2"></i></span>
                                    <a href="mailto::{{ $post->institute->user->email ?? '' }}" class="text-body"> {{$post->institute->user->email ?? ''}}</a>
                                </h6>
                                <h6 class="mb-2">
                                    <span class="font-weight-semibold"><i class="fa fa-phone me-3 mb-2"></i></span>
                                    <a href="tel:{{ $post->institute->phone ?? '' }}" class="text-primary">{{$post->institute->phone ?? ''}}</a>
                                </h6>
                                <h6 class="mb-2">
                                    <span class="font-weight-semibold">
                                        <i class="fa fa-link me-3"></i></span>
                                        <a href="{{ $post->institute->website ?? '' }}" class="text-primary">{{ $post->institute->website ?? '' }}</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"><h3 class="h4 mb-0 fw-600">Social Media</h3></div>
                            <div class="card-body product-filter-desc">
                                <div class="d-flex align-items-center gap-3 justify-content-center">
                                    <a href="#" class="">
                                        <i class="fa-brands fa-facebook-f fs-24"></i>
                                    </a>
                                    <a href="#" class="">
                                        <i class="fa-brands fa-twitter fs-24"></i>
                                    </a>
                                    <a href="#" class="">
                                        <i class="fa-brands fa-linkedin-in fs-24"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-4">
    <div class="container">
        <h3 class="h3 mb-3 fw-600">Related Post</h3>
        <div class="carousel" data-items="4" data-xl-items="4" data-lg-items="3" data-sm-items="2" data-xs-items="1" data-autoplay="true" data-infinite="true">
            <div class="p-2">
                <div class="single-post">
                    <div class="absolute-top-right">
                        <div class="featured">
                            <i class="fa-solid fa-bolt-lightning"></i>
                        </div>
                    </div>
                    <figure class="image">
                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">
                            <img class="ratio-1-65 img-fit w-100 rounded-1 ls-is-cached lazyload" data-src=" https://sc.banglastudent.com/public/uploads/271946760_913646816015295_1906760125067810598_n.jpg " alt="Collage/School Image">
                        </a>
                        <div class="price">
                                                        <span class="">1000 ৳</span>
                                                                                    <del class="text-muted">1200 ৳</del>
                                                    </div>
                        <div class="absolute-bottom-right p-3">
                            <img class="img-contain rounded-2 bg-white ls-is-cached lazyloaded" data-src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png" width="40" height="40" alt="Logo" src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png">
                        </div>
                    </figure>
                    <div class="countdown-wrapper d-flex align-items-center justify-content-center">
                        <div class="fs-16 fw-600 text-dark">দিন বাকি <i class="pe-1 las la-angle-double-right"></i>
                        </div>
                        <div class="count-down d-flex align-items-center justify-content-center gap-2" data-countdown="2022/08/01 00:00:00"><span class="countdown-digit">15</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">00</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">56</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">02</span></div>
                    </div>
                    <div class="p-3">
                        <h6 class="h6 text-truncate-2 mb-2">
                            <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">এবার ‘গোল্ড ব্যাংক’-এর দাবি স্বর্ণ ব্যবসায়ীদের
                                 </a>
                        </h6>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="14" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90.4 122.9" style="enable-background:new 0 0 90.4 122.9;" xml:space="preserve">
                                                <g>
                                                    <path d="M58.7,0H31.3c-0.7,0-1.4,0.1-2.1,0.4c-0.7,0.3-1.3,0.7-1.8,1.2l0,0c-0.5,0.5-0.9,1.1-1.2,1.7C26,4,25.9,4.7,25.9,5.4v12
                                                c0,1.5,0.6,2.8,1.6,3.8l0,0c1,1,2.3,1.6,3.8,1.6h27.4c1.5,0,2.8-0.6,3.8-1.6l0,0c1-1,1.6-2.3,1.6-3.8v-12c0-0.7-0.1-1.4-0.4-2.1
                                                c-0.3-0.7-0.7-1.3-1.2-1.8c-0.5-0.5-1.1-0.9-1.8-1.2C60.2,0.1,59.5,0,58.7,0L58.7,0L58.7,0z M76.8,88.7V43.9c0-2-0.4-4-1.1-5.7
                                                c-0.8-1.8-1.9-3.5-3.3-4.9s-3-2.5-4.9-3.3c-1.8-0.7-3.7-1.1-5.7-1.1H27.5c-2,0-4,0.4-5.7,1.1c-1.8,0.8-3.5,1.9-4.9,3.3
                                                c-1.4,1.4-2.5,3-3.3,4.9c-0.7,1.8-1.1,3.7-1.1,5.7v44.7c1.4,1.2,2.7,2.7,4,4.6c1.2,1.8,2.3,3.8,3.3,6.2c3.7-1.9,7.6-3.3,11.5-4.2
                                                c4.1-0.9,8.3-1.4,12.6-1.4c4.3,0,8.7,0.5,13.3,1.5c4.4,0.9,8.9,2.3,13.5,4.1c0.5-2.2,1.2-4.2,2.2-5.9C74,91.6,75.4,90,76.8,88.7
                                                L76.8,88.7L76.8,88.7z M25.5,50.6L25.5,50.6c-0.4-0.6-0.5-1.2-0.4-1.8c0.1-0.6,0.5-1.1,1-1.5l0.1,0c0.5-0.3,1.1-0.4,1.7-0.3
                                                c0.6,0.1,1.1,0.5,1.5,1c1.7,2.6,3.2,5.2,4.5,8c1.3,2.8,2.5,5.8,3.5,8.9c1,3.1,1.7,6.4,2.2,9.8c0.5,3.4,0.8,7.1,0.8,10.9
                                                c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7c-0.7,0-1.2-0.3-1.7-0.7c-0.4-0.4-0.7-1-0.7-1.7c0-3.6-0.3-7-0.7-10.2
                                                c-0.5-3.2-1.2-6.3-2-9.2c-0.9-2.9-2-5.7-3.2-8.3C28.5,55.5,27,53,25.5,50.6L25.5,50.6L25.5,50.6z M60.7,48c0.4-0.5,0.9-0.9,1.5-1
                                                c0.6-0.1,1.2,0,1.8,0.3l0,0c0.5,0.4,0.9,0.9,1,1.5c0.1,0.6,0,1.2-0.3,1.8l0,0c-1.6,2.4-3,4.8-4.2,7.5c-1.2,2.6-2.3,5.4-3.2,8.3
                                                c-0.9,2.9-1.6,6-2,9.2s-0.7,6.6-0.7,10.2c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7s-1.2-0.3-1.7-0.7l0,0
                                                c-0.4-0.4-0.7-1-0.7-1.6c0-3.8,0.3-7.5,0.8-10.9c0.5-3.4,1.2-6.7,2.2-9.8c1-3.1,2.1-6.1,3.4-8.9C57.5,53.3,59.1,50.6,60.7,48
                                                L60.7,48L60.7,48z M9.3,93.2C9.1,93.1,9,93,8.8,92.9c-0.2-0.1-0.3-0.3-0.5-0.4C8,92.2,7.6,92,7.3,91.9c-0.4-0.2-0.7-0.3-1.1-0.4
                                                c-0.4-0.1-0.8-0.1-1.2-0.1c-0.4,0-0.7,0.1-1.1,0.2c-0.4,0.1-0.7,0.3-1.1,0.6c-0.3,0.3-0.7,0.6-1,1C0.3,95.3-0.2,98,0,100.8
                                                c0.2,2.9,1,5.9,1.7,8.7l0,0.1c0.2,0.7,0.4,1.4,0.5,1.9l1.8,7.2c0.3,1.1,0.5,2,0.6,2.8l0,0c0.1,0.5,0.2,0.9,0.2,1.2c0,0,0,0,0,0.1
                                                c0,0,0.1,0,0.1,0c0.3,0,0.8-0.1,1.7-0.1l1.5,0h74.4l0.1,0h0.6c0.9,0,1.5,0,1.8,0.1c0.1,0,0.1,0,0.1,0v0c0-0.2,0.1-0.5,0.2-1l0,0
                                                c0.2-0.7,0.4-1.7,0.7-2.7l2.2-7.3c1.4-4.7,2-8.5,2.1-11.5c0.1-3.4-0.6-5.8-1.7-7.3c-0.4-0.5-0.8-0.9-1.3-1.2
                                                c-0.5-0.3-1-0.5-1.6-0.6c-0.6-0.1-1.2-0.1-1.9,0.1c-0.7,0.1-1.3,0.4-2,0.7c-1.8,0.9-3.5,2.6-4.8,4.8c-1.2,2-2,4.4-2.2,7.3l0,0.1
                                                c0,0.1,0,0.2-0.1,0.3v0c0,0.1-0.1,0.2-0.1,0.3c-0.3,0.6-0.7,1-1.3,1.3c-0.6,0.2-1.2,0.2-1.8,0c-4.9-2.1-9.7-3.7-14.3-4.7
                                                c-4.6-1.1-9.1-1.6-13.5-1.7c-4.3,0-8.5,0.5-12.5,1.5c-4,1-7.9,2.6-11.7,4.7l-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0
                                                c-0.6,0.2-1.2,0.2-1.8-0.1s-1-0.7-1.2-1.3c-1-2.8-2-5.1-3.2-6.9C11.9,95.7,10.6,94.2,9.3,93.2L9.3,93.2L9.3,93.2z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">120</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">Day</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                                                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"></path>
                                                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="16" fill="currentColor">
                                                <path d="M288 0C422.4 0 512 35.2 512 80V128C529.7 128 544 142.3 544 160V224C544 241.7 529.7 256 512 256L512 416C512 433.7 497.7 448 480 448V480C480 497.7 465.7 512 448 512H416C398.3 512 384 497.7 384 480V448H192V480C192 497.7 177.7 512 160 512H128C110.3 512 96 497.7 96 480V448C78.33 448 64 433.7 64 416L64 256C46.33 256 32 241.7 32 224V160C32 142.3 46.33 128 64 128V80C64 35.2 153.6 0 288 0zM128 256C128 273.7 142.3 288 160 288H272V128H160C142.3 128 128 142.3 128 160V256zM304 288H416C433.7 288 448 273.7 448 256V160C448 142.3 433.7 128 416 128H304V288zM144 400C161.7 400 176 385.7 176 368C176 350.3 161.7 336 144 336C126.3 336 112 350.3 112 368C112 385.7 126.3 400 144 400zM432 400C449.7 400 464 385.7 464 368C464 350.3 449.7 336 432 336C414.3 336 400 350.3 400 368C400 385.7 414.3 400 432 400zM368 64H208C199.2 64 192 71.16 192 80C192 88.84 199.2 96 208 96H368C376.8 96 384 88.84 384 80C384 71.16 376.8 64 368 64z"></path>
                                                </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="single-post">
                    <div class="absolute-top-right">
                        <div class="featured">
                            <i class="fa-solid fa-bolt-lightning"></i>
                        </div>
                    </div>
                    <figure class="image">
                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">
                            <img class="ratio-1-65 img-fit w-100 rounded-1 ls-is-cached lazyload" data-src=" https://sc.banglastudent.com/public/uploads/271946760_913646816015295_1906760125067810598_n.jpg " alt="Collage/School Image">
                        </a>
                        <div class="price">
                                                        <span class="">1000 ৳</span>
                                                                                    <del class="text-muted">1200 ৳</del>
                                                    </div>
                        <div class="absolute-bottom-right p-3">
                            <img class="img-contain rounded-2 bg-white ls-is-cached lazyloaded" data-src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png" width="40" height="40" alt="Logo" src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png">
                        </div>
                    </figure>
                    <div class="countdown-wrapper d-flex align-items-center justify-content-center">
                        <div class="fs-16 fw-600 text-dark">দিন বাকি <i class="pe-1 las la-angle-double-right"></i>
                        </div>
                        <div class="count-down d-flex align-items-center justify-content-center gap-2" data-countdown="2022/08/01 00:00:00"><span class="countdown-digit">15</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">00</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">56</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">02</span></div>
                    </div>
                    <div class="p-3">
                        <h6 class="h6 text-truncate-2 mb-2">
                            <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">এবার ‘গোল্ড ব্যাংক’-এর দাবি স্বর্ণ ব্যবসায়ীদের
                                 </a>
                        </h6>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="14" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90.4 122.9" style="enable-background:new 0 0 90.4 122.9;" xml:space="preserve">
                                                <g>
                                                    <path d="M58.7,0H31.3c-0.7,0-1.4,0.1-2.1,0.4c-0.7,0.3-1.3,0.7-1.8,1.2l0,0c-0.5,0.5-0.9,1.1-1.2,1.7C26,4,25.9,4.7,25.9,5.4v12
                                                c0,1.5,0.6,2.8,1.6,3.8l0,0c1,1,2.3,1.6,3.8,1.6h27.4c1.5,0,2.8-0.6,3.8-1.6l0,0c1-1,1.6-2.3,1.6-3.8v-12c0-0.7-0.1-1.4-0.4-2.1
                                                c-0.3-0.7-0.7-1.3-1.2-1.8c-0.5-0.5-1.1-0.9-1.8-1.2C60.2,0.1,59.5,0,58.7,0L58.7,0L58.7,0z M76.8,88.7V43.9c0-2-0.4-4-1.1-5.7
                                                c-0.8-1.8-1.9-3.5-3.3-4.9s-3-2.5-4.9-3.3c-1.8-0.7-3.7-1.1-5.7-1.1H27.5c-2,0-4,0.4-5.7,1.1c-1.8,0.8-3.5,1.9-4.9,3.3
                                                c-1.4,1.4-2.5,3-3.3,4.9c-0.7,1.8-1.1,3.7-1.1,5.7v44.7c1.4,1.2,2.7,2.7,4,4.6c1.2,1.8,2.3,3.8,3.3,6.2c3.7-1.9,7.6-3.3,11.5-4.2
                                                c4.1-0.9,8.3-1.4,12.6-1.4c4.3,0,8.7,0.5,13.3,1.5c4.4,0.9,8.9,2.3,13.5,4.1c0.5-2.2,1.2-4.2,2.2-5.9C74,91.6,75.4,90,76.8,88.7
                                                L76.8,88.7L76.8,88.7z M25.5,50.6L25.5,50.6c-0.4-0.6-0.5-1.2-0.4-1.8c0.1-0.6,0.5-1.1,1-1.5l0.1,0c0.5-0.3,1.1-0.4,1.7-0.3
                                                c0.6,0.1,1.1,0.5,1.5,1c1.7,2.6,3.2,5.2,4.5,8c1.3,2.8,2.5,5.8,3.5,8.9c1,3.1,1.7,6.4,2.2,9.8c0.5,3.4,0.8,7.1,0.8,10.9
                                                c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7c-0.7,0-1.2-0.3-1.7-0.7c-0.4-0.4-0.7-1-0.7-1.7c0-3.6-0.3-7-0.7-10.2
                                                c-0.5-3.2-1.2-6.3-2-9.2c-0.9-2.9-2-5.7-3.2-8.3C28.5,55.5,27,53,25.5,50.6L25.5,50.6L25.5,50.6z M60.7,48c0.4-0.5,0.9-0.9,1.5-1
                                                c0.6-0.1,1.2,0,1.8,0.3l0,0c0.5,0.4,0.9,0.9,1,1.5c0.1,0.6,0,1.2-0.3,1.8l0,0c-1.6,2.4-3,4.8-4.2,7.5c-1.2,2.6-2.3,5.4-3.2,8.3
                                                c-0.9,2.9-1.6,6-2,9.2s-0.7,6.6-0.7,10.2c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7s-1.2-0.3-1.7-0.7l0,0
                                                c-0.4-0.4-0.7-1-0.7-1.6c0-3.8,0.3-7.5,0.8-10.9c0.5-3.4,1.2-6.7,2.2-9.8c1-3.1,2.1-6.1,3.4-8.9C57.5,53.3,59.1,50.6,60.7,48
                                                L60.7,48L60.7,48z M9.3,93.2C9.1,93.1,9,93,8.8,92.9c-0.2-0.1-0.3-0.3-0.5-0.4C8,92.2,7.6,92,7.3,91.9c-0.4-0.2-0.7-0.3-1.1-0.4
                                                c-0.4-0.1-0.8-0.1-1.2-0.1c-0.4,0-0.7,0.1-1.1,0.2c-0.4,0.1-0.7,0.3-1.1,0.6c-0.3,0.3-0.7,0.6-1,1C0.3,95.3-0.2,98,0,100.8
                                                c0.2,2.9,1,5.9,1.7,8.7l0,0.1c0.2,0.7,0.4,1.4,0.5,1.9l1.8,7.2c0.3,1.1,0.5,2,0.6,2.8l0,0c0.1,0.5,0.2,0.9,0.2,1.2c0,0,0,0,0,0.1
                                                c0,0,0.1,0,0.1,0c0.3,0,0.8-0.1,1.7-0.1l1.5,0h74.4l0.1,0h0.6c0.9,0,1.5,0,1.8,0.1c0.1,0,0.1,0,0.1,0v0c0-0.2,0.1-0.5,0.2-1l0,0
                                                c0.2-0.7,0.4-1.7,0.7-2.7l2.2-7.3c1.4-4.7,2-8.5,2.1-11.5c0.1-3.4-0.6-5.8-1.7-7.3c-0.4-0.5-0.8-0.9-1.3-1.2
                                                c-0.5-0.3-1-0.5-1.6-0.6c-0.6-0.1-1.2-0.1-1.9,0.1c-0.7,0.1-1.3,0.4-2,0.7c-1.8,0.9-3.5,2.6-4.8,4.8c-1.2,2-2,4.4-2.2,7.3l0,0.1
                                                c0,0.1,0,0.2-0.1,0.3v0c0,0.1-0.1,0.2-0.1,0.3c-0.3,0.6-0.7,1-1.3,1.3c-0.6,0.2-1.2,0.2-1.8,0c-4.9-2.1-9.7-3.7-14.3-4.7
                                                c-4.6-1.1-9.1-1.6-13.5-1.7c-4.3,0-8.5,0.5-12.5,1.5c-4,1-7.9,2.6-11.7,4.7l-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0
                                                c-0.6,0.2-1.2,0.2-1.8-0.1s-1-0.7-1.2-1.3c-1-2.8-2-5.1-3.2-6.9C11.9,95.7,10.6,94.2,9.3,93.2L9.3,93.2L9.3,93.2z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">120</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">Day</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                                                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"></path>
                                                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="16" fill="currentColor">
                                                <path d="M288 0C422.4 0 512 35.2 512 80V128C529.7 128 544 142.3 544 160V224C544 241.7 529.7 256 512 256L512 416C512 433.7 497.7 448 480 448V480C480 497.7 465.7 512 448 512H416C398.3 512 384 497.7 384 480V448H192V480C192 497.7 177.7 512 160 512H128C110.3 512 96 497.7 96 480V448C78.33 448 64 433.7 64 416L64 256C46.33 256 32 241.7 32 224V160C32 142.3 46.33 128 64 128V80C64 35.2 153.6 0 288 0zM128 256C128 273.7 142.3 288 160 288H272V128H160C142.3 128 128 142.3 128 160V256zM304 288H416C433.7 288 448 273.7 448 256V160C448 142.3 433.7 128 416 128H304V288zM144 400C161.7 400 176 385.7 176 368C176 350.3 161.7 336 144 336C126.3 336 112 350.3 112 368C112 385.7 126.3 400 144 400zM432 400C449.7 400 464 385.7 464 368C464 350.3 449.7 336 432 336C414.3 336 400 350.3 400 368C400 385.7 414.3 400 432 400zM368 64H208C199.2 64 192 71.16 192 80C192 88.84 199.2 96 208 96H368C376.8 96 384 88.84 384 80C384 71.16 376.8 64 368 64z"></path>
                                                </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="single-post">
                    <div class="absolute-top-right">
                        <div class="featured">
                            <i class="fa-solid fa-bolt-lightning"></i>
                        </div>
                    </div>
                    <figure class="image">
                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">
                            <img class="ratio-1-65 img-fit w-100 rounded-1 ls-is-cached lazyload" data-src=" https://sc.banglastudent.com/public/uploads/271946760_913646816015295_1906760125067810598_n.jpg " alt="Collage/School Image">
                        </a>
                        <div class="price">
                                                        <span class="">1000 ৳</span>
                                                                                    <del class="text-muted">1200 ৳</del>
                                                    </div>
                        <div class="absolute-bottom-right p-3">
                            <img class="img-contain rounded-2 bg-white ls-is-cached lazyloaded" data-src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png" width="40" height="40" alt="Logo" src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png">
                        </div>
                    </figure>
                    <div class="countdown-wrapper d-flex align-items-center justify-content-center">
                        <div class="fs-16 fw-600 text-dark">দিন বাকি <i class="pe-1 las la-angle-double-right"></i>
                        </div>
                        <div class="count-down d-flex align-items-center justify-content-center gap-2" data-countdown="2022/08/01 00:00:00"><span class="countdown-digit">15</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">00</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">56</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">02</span></div>
                    </div>
                    <div class="p-3">
                        <h6 class="h6 text-truncate-2 mb-2">
                            <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">এবার ‘গোল্ড ব্যাংক’-এর দাবি স্বর্ণ ব্যবসায়ীদের
                                 </a>
                        </h6>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="14" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90.4 122.9" style="enable-background:new 0 0 90.4 122.9;" xml:space="preserve">
                                                <g>
                                                    <path d="M58.7,0H31.3c-0.7,0-1.4,0.1-2.1,0.4c-0.7,0.3-1.3,0.7-1.8,1.2l0,0c-0.5,0.5-0.9,1.1-1.2,1.7C26,4,25.9,4.7,25.9,5.4v12
                                                c0,1.5,0.6,2.8,1.6,3.8l0,0c1,1,2.3,1.6,3.8,1.6h27.4c1.5,0,2.8-0.6,3.8-1.6l0,0c1-1,1.6-2.3,1.6-3.8v-12c0-0.7-0.1-1.4-0.4-2.1
                                                c-0.3-0.7-0.7-1.3-1.2-1.8c-0.5-0.5-1.1-0.9-1.8-1.2C60.2,0.1,59.5,0,58.7,0L58.7,0L58.7,0z M76.8,88.7V43.9c0-2-0.4-4-1.1-5.7
                                                c-0.8-1.8-1.9-3.5-3.3-4.9s-3-2.5-4.9-3.3c-1.8-0.7-3.7-1.1-5.7-1.1H27.5c-2,0-4,0.4-5.7,1.1c-1.8,0.8-3.5,1.9-4.9,3.3
                                                c-1.4,1.4-2.5,3-3.3,4.9c-0.7,1.8-1.1,3.7-1.1,5.7v44.7c1.4,1.2,2.7,2.7,4,4.6c1.2,1.8,2.3,3.8,3.3,6.2c3.7-1.9,7.6-3.3,11.5-4.2
                                                c4.1-0.9,8.3-1.4,12.6-1.4c4.3,0,8.7,0.5,13.3,1.5c4.4,0.9,8.9,2.3,13.5,4.1c0.5-2.2,1.2-4.2,2.2-5.9C74,91.6,75.4,90,76.8,88.7
                                                L76.8,88.7L76.8,88.7z M25.5,50.6L25.5,50.6c-0.4-0.6-0.5-1.2-0.4-1.8c0.1-0.6,0.5-1.1,1-1.5l0.1,0c0.5-0.3,1.1-0.4,1.7-0.3
                                                c0.6,0.1,1.1,0.5,1.5,1c1.7,2.6,3.2,5.2,4.5,8c1.3,2.8,2.5,5.8,3.5,8.9c1,3.1,1.7,6.4,2.2,9.8c0.5,3.4,0.8,7.1,0.8,10.9
                                                c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7c-0.7,0-1.2-0.3-1.7-0.7c-0.4-0.4-0.7-1-0.7-1.7c0-3.6-0.3-7-0.7-10.2
                                                c-0.5-3.2-1.2-6.3-2-9.2c-0.9-2.9-2-5.7-3.2-8.3C28.5,55.5,27,53,25.5,50.6L25.5,50.6L25.5,50.6z M60.7,48c0.4-0.5,0.9-0.9,1.5-1
                                                c0.6-0.1,1.2,0,1.8,0.3l0,0c0.5,0.4,0.9,0.9,1,1.5c0.1,0.6,0,1.2-0.3,1.8l0,0c-1.6,2.4-3,4.8-4.2,7.5c-1.2,2.6-2.3,5.4-3.2,8.3
                                                c-0.9,2.9-1.6,6-2,9.2s-0.7,6.6-0.7,10.2c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7s-1.2-0.3-1.7-0.7l0,0
                                                c-0.4-0.4-0.7-1-0.7-1.6c0-3.8,0.3-7.5,0.8-10.9c0.5-3.4,1.2-6.7,2.2-9.8c1-3.1,2.1-6.1,3.4-8.9C57.5,53.3,59.1,50.6,60.7,48
                                                L60.7,48L60.7,48z M9.3,93.2C9.1,93.1,9,93,8.8,92.9c-0.2-0.1-0.3-0.3-0.5-0.4C8,92.2,7.6,92,7.3,91.9c-0.4-0.2-0.7-0.3-1.1-0.4
                                                c-0.4-0.1-0.8-0.1-1.2-0.1c-0.4,0-0.7,0.1-1.1,0.2c-0.4,0.1-0.7,0.3-1.1,0.6c-0.3,0.3-0.7,0.6-1,1C0.3,95.3-0.2,98,0,100.8
                                                c0.2,2.9,1,5.9,1.7,8.7l0,0.1c0.2,0.7,0.4,1.4,0.5,1.9l1.8,7.2c0.3,1.1,0.5,2,0.6,2.8l0,0c0.1,0.5,0.2,0.9,0.2,1.2c0,0,0,0,0,0.1
                                                c0,0,0.1,0,0.1,0c0.3,0,0.8-0.1,1.7-0.1l1.5,0h74.4l0.1,0h0.6c0.9,0,1.5,0,1.8,0.1c0.1,0,0.1,0,0.1,0v0c0-0.2,0.1-0.5,0.2-1l0,0
                                                c0.2-0.7,0.4-1.7,0.7-2.7l2.2-7.3c1.4-4.7,2-8.5,2.1-11.5c0.1-3.4-0.6-5.8-1.7-7.3c-0.4-0.5-0.8-0.9-1.3-1.2
                                                c-0.5-0.3-1-0.5-1.6-0.6c-0.6-0.1-1.2-0.1-1.9,0.1c-0.7,0.1-1.3,0.4-2,0.7c-1.8,0.9-3.5,2.6-4.8,4.8c-1.2,2-2,4.4-2.2,7.3l0,0.1
                                                c0,0.1,0,0.2-0.1,0.3v0c0,0.1-0.1,0.2-0.1,0.3c-0.3,0.6-0.7,1-1.3,1.3c-0.6,0.2-1.2,0.2-1.8,0c-4.9-2.1-9.7-3.7-14.3-4.7
                                                c-4.6-1.1-9.1-1.6-13.5-1.7c-4.3,0-8.5,0.5-12.5,1.5c-4,1-7.9,2.6-11.7,4.7l-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0
                                                c-0.6,0.2-1.2,0.2-1.8-0.1s-1-0.7-1.2-1.3c-1-2.8-2-5.1-3.2-6.9C11.9,95.7,10.6,94.2,9.3,93.2L9.3,93.2L9.3,93.2z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">120</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">Day</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                                                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"></path>
                                                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="16" fill="currentColor">
                                                <path d="M288 0C422.4 0 512 35.2 512 80V128C529.7 128 544 142.3 544 160V224C544 241.7 529.7 256 512 256L512 416C512 433.7 497.7 448 480 448V480C480 497.7 465.7 512 448 512H416C398.3 512 384 497.7 384 480V448H192V480C192 497.7 177.7 512 160 512H128C110.3 512 96 497.7 96 480V448C78.33 448 64 433.7 64 416L64 256C46.33 256 32 241.7 32 224V160C32 142.3 46.33 128 64 128V80C64 35.2 153.6 0 288 0zM128 256C128 273.7 142.3 288 160 288H272V128H160C142.3 128 128 142.3 128 160V256zM304 288H416C433.7 288 448 273.7 448 256V160C448 142.3 433.7 128 416 128H304V288zM144 400C161.7 400 176 385.7 176 368C176 350.3 161.7 336 144 336C126.3 336 112 350.3 112 368C112 385.7 126.3 400 144 400zM432 400C449.7 400 464 385.7 464 368C464 350.3 449.7 336 432 336C414.3 336 400 350.3 400 368C400 385.7 414.3 400 432 400zM368 64H208C199.2 64 192 71.16 192 80C192 88.84 199.2 96 208 96H368C376.8 96 384 88.84 384 80C384 71.16 376.8 64 368 64z"></path>
                                                </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="single-post">
                    <div class="absolute-top-right">
                        <div class="featured">
                            <i class="fa-solid fa-bolt-lightning"></i>
                        </div>
                    </div>
                    <figure class="image">
                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">
                            <img class="ratio-1-65 img-fit w-100 rounded-1 ls-is-cached lazyload" data-src=" https://sc.banglastudent.com/public/uploads/271946760_913646816015295_1906760125067810598_n.jpg " alt="Collage/School Image">
                        </a>
                        <div class="price">
                                                        <span class="">1000 ৳</span>
                                                                                    <del class="text-muted">1200 ৳</del>
                                                    </div>
                        <div class="absolute-bottom-right p-3">
                            <img class="img-contain rounded-2 bg-white ls-is-cached lazyloaded" data-src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png" width="40" height="40" alt="Logo" src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png">
                        </div>
                    </figure>
                    <div class="countdown-wrapper d-flex align-items-center justify-content-center">
                        <div class="fs-16 fw-600 text-dark">দিন বাকি <i class="pe-1 las la-angle-double-right"></i>
                        </div>
                        <div class="count-down d-flex align-items-center justify-content-center gap-2" data-countdown="2022/08/01 00:00:00"><span class="countdown-digit">15</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">00</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">56</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">02</span></div>
                    </div>
                    <div class="p-3">
                        <h6 class="h6 text-truncate-2 mb-2">
                            <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">এবার ‘গোল্ড ব্যাংক’-এর দাবি স্বর্ণ ব্যবসায়ীদের
                                 </a>
                        </h6>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="14" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90.4 122.9" style="enable-background:new 0 0 90.4 122.9;" xml:space="preserve">
                                                <g>
                                                    <path d="M58.7,0H31.3c-0.7,0-1.4,0.1-2.1,0.4c-0.7,0.3-1.3,0.7-1.8,1.2l0,0c-0.5,0.5-0.9,1.1-1.2,1.7C26,4,25.9,4.7,25.9,5.4v12
                                                c0,1.5,0.6,2.8,1.6,3.8l0,0c1,1,2.3,1.6,3.8,1.6h27.4c1.5,0,2.8-0.6,3.8-1.6l0,0c1-1,1.6-2.3,1.6-3.8v-12c0-0.7-0.1-1.4-0.4-2.1
                                                c-0.3-0.7-0.7-1.3-1.2-1.8c-0.5-0.5-1.1-0.9-1.8-1.2C60.2,0.1,59.5,0,58.7,0L58.7,0L58.7,0z M76.8,88.7V43.9c0-2-0.4-4-1.1-5.7
                                                c-0.8-1.8-1.9-3.5-3.3-4.9s-3-2.5-4.9-3.3c-1.8-0.7-3.7-1.1-5.7-1.1H27.5c-2,0-4,0.4-5.7,1.1c-1.8,0.8-3.5,1.9-4.9,3.3
                                                c-1.4,1.4-2.5,3-3.3,4.9c-0.7,1.8-1.1,3.7-1.1,5.7v44.7c1.4,1.2,2.7,2.7,4,4.6c1.2,1.8,2.3,3.8,3.3,6.2c3.7-1.9,7.6-3.3,11.5-4.2
                                                c4.1-0.9,8.3-1.4,12.6-1.4c4.3,0,8.7,0.5,13.3,1.5c4.4,0.9,8.9,2.3,13.5,4.1c0.5-2.2,1.2-4.2,2.2-5.9C74,91.6,75.4,90,76.8,88.7
                                                L76.8,88.7L76.8,88.7z M25.5,50.6L25.5,50.6c-0.4-0.6-0.5-1.2-0.4-1.8c0.1-0.6,0.5-1.1,1-1.5l0.1,0c0.5-0.3,1.1-0.4,1.7-0.3
                                                c0.6,0.1,1.1,0.5,1.5,1c1.7,2.6,3.2,5.2,4.5,8c1.3,2.8,2.5,5.8,3.5,8.9c1,3.1,1.7,6.4,2.2,9.8c0.5,3.4,0.8,7.1,0.8,10.9
                                                c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7c-0.7,0-1.2-0.3-1.7-0.7c-0.4-0.4-0.7-1-0.7-1.7c0-3.6-0.3-7-0.7-10.2
                                                c-0.5-3.2-1.2-6.3-2-9.2c-0.9-2.9-2-5.7-3.2-8.3C28.5,55.5,27,53,25.5,50.6L25.5,50.6L25.5,50.6z M60.7,48c0.4-0.5,0.9-0.9,1.5-1
                                                c0.6-0.1,1.2,0,1.8,0.3l0,0c0.5,0.4,0.9,0.9,1,1.5c0.1,0.6,0,1.2-0.3,1.8l0,0c-1.6,2.4-3,4.8-4.2,7.5c-1.2,2.6-2.3,5.4-3.2,8.3
                                                c-0.9,2.9-1.6,6-2,9.2s-0.7,6.6-0.7,10.2c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7s-1.2-0.3-1.7-0.7l0,0
                                                c-0.4-0.4-0.7-1-0.7-1.6c0-3.8,0.3-7.5,0.8-10.9c0.5-3.4,1.2-6.7,2.2-9.8c1-3.1,2.1-6.1,3.4-8.9C57.5,53.3,59.1,50.6,60.7,48
                                                L60.7,48L60.7,48z M9.3,93.2C9.1,93.1,9,93,8.8,92.9c-0.2-0.1-0.3-0.3-0.5-0.4C8,92.2,7.6,92,7.3,91.9c-0.4-0.2-0.7-0.3-1.1-0.4
                                                c-0.4-0.1-0.8-0.1-1.2-0.1c-0.4,0-0.7,0.1-1.1,0.2c-0.4,0.1-0.7,0.3-1.1,0.6c-0.3,0.3-0.7,0.6-1,1C0.3,95.3-0.2,98,0,100.8
                                                c0.2,2.9,1,5.9,1.7,8.7l0,0.1c0.2,0.7,0.4,1.4,0.5,1.9l1.8,7.2c0.3,1.1,0.5,2,0.6,2.8l0,0c0.1,0.5,0.2,0.9,0.2,1.2c0,0,0,0,0,0.1
                                                c0,0,0.1,0,0.1,0c0.3,0,0.8-0.1,1.7-0.1l1.5,0h74.4l0.1,0h0.6c0.9,0,1.5,0,1.8,0.1c0.1,0,0.1,0,0.1,0v0c0-0.2,0.1-0.5,0.2-1l0,0
                                                c0.2-0.7,0.4-1.7,0.7-2.7l2.2-7.3c1.4-4.7,2-8.5,2.1-11.5c0.1-3.4-0.6-5.8-1.7-7.3c-0.4-0.5-0.8-0.9-1.3-1.2
                                                c-0.5-0.3-1-0.5-1.6-0.6c-0.6-0.1-1.2-0.1-1.9,0.1c-0.7,0.1-1.3,0.4-2,0.7c-1.8,0.9-3.5,2.6-4.8,4.8c-1.2,2-2,4.4-2.2,7.3l0,0.1
                                                c0,0.1,0,0.2-0.1,0.3v0c0,0.1-0.1,0.2-0.1,0.3c-0.3,0.6-0.7,1-1.3,1.3c-0.6,0.2-1.2,0.2-1.8,0c-4.9-2.1-9.7-3.7-14.3-4.7
                                                c-4.6-1.1-9.1-1.6-13.5-1.7c-4.3,0-8.5,0.5-12.5,1.5c-4,1-7.9,2.6-11.7,4.7l-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0
                                                c-0.6,0.2-1.2,0.2-1.8-0.1s-1-0.7-1.2-1.3c-1-2.8-2-5.1-3.2-6.9C11.9,95.7,10.6,94.2,9.3,93.2L9.3,93.2L9.3,93.2z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">120</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">Day</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                                                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"></path>
                                                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="16" fill="currentColor">
                                                <path d="M288 0C422.4 0 512 35.2 512 80V128C529.7 128 544 142.3 544 160V224C544 241.7 529.7 256 512 256L512 416C512 433.7 497.7 448 480 448V480C480 497.7 465.7 512 448 512H416C398.3 512 384 497.7 384 480V448H192V480C192 497.7 177.7 512 160 512H128C110.3 512 96 497.7 96 480V448C78.33 448 64 433.7 64 416L64 256C46.33 256 32 241.7 32 224V160C32 142.3 46.33 128 64 128V80C64 35.2 153.6 0 288 0zM128 256C128 273.7 142.3 288 160 288H272V128H160C142.3 128 128 142.3 128 160V256zM304 288H416C433.7 288 448 273.7 448 256V160C448 142.3 433.7 128 416 128H304V288zM144 400C161.7 400 176 385.7 176 368C176 350.3 161.7 336 144 336C126.3 336 112 350.3 112 368C112 385.7 126.3 400 144 400zM432 400C449.7 400 464 385.7 464 368C464 350.3 449.7 336 432 336C414.3 336 400 350.3 400 368C400 385.7 414.3 400 432 400zM368 64H208C199.2 64 192 71.16 192 80C192 88.84 199.2 96 208 96H368C376.8 96 384 88.84 384 80C384 71.16 376.8 64 368 64z"></path>
                                                </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="single-post">
                    <div class="absolute-top-right">
                        <div class="featured">
                            <i class="fa-solid fa-bolt-lightning"></i>
                        </div>
                    </div>
                    <figure class="image">
                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">
                            <img class="ratio-1-65 img-fit w-100 rounded-1 ls-is-cached lazyload" data-src=" https://sc.banglastudent.com/public/uploads/271946760_913646816015295_1906760125067810598_n.jpg " alt="Collage/School Image">
                        </a>
                        <div class="price">
                                                        <span class="">1000 ৳</span>
                                                                                    <del class="text-muted">1200 ৳</del>
                                                    </div>
                        <div class="absolute-bottom-right p-3">
                            <img class="img-contain rounded-2 bg-white ls-is-cached lazyloaded" data-src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png" width="40" height="40" alt="Logo" src="https://sc.banglastudent.com/public/frontend/images/icons/brac.png">
                        </div>
                    </figure>
                    <div class="countdown-wrapper d-flex align-items-center justify-content-center">
                        <div class="fs-16 fw-600 text-dark">দিন বাকি <i class="pe-1 las la-angle-double-right"></i>
                        </div>
                        <div class="count-down d-flex align-items-center justify-content-center gap-2" data-countdown="2022/08/01 00:00:00"><span class="countdown-digit">15</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">00</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">56</span><span class="countdown-separator lh-1"> <i class="las la-braille fs-18"></i> </span><span class="countdown-digit">02</span></div>
                    </div>
                    <div class="p-3">
                        <h6 class="h6 text-truncate-2 mb-2">
                            <a href="https://sc.banglastudent.com/post-details/%E0%A6%8F%E0%A6%AC%E0%A6%BE%E0%A6%B0-%E2%80%98%E0%A6%97%E0%A7%87%E0%A6%BE%E0%A6%B2%E0%A7%8D%E0%A6%A1-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%82%E0%A6%95%E2%80%99-%E0%A6%8F%E0%A6%B0-%E0%A6%A6%E0%A6%BE%E0%A6%AC%E0%A6%BF-%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%A3-%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A7%9F%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0">এবার ‘গোল্ড ব্যাংক’-এর দাবি স্বর্ণ ব্যবসায়ীদের
                                 </a>
                        </h6>
                        <div class="d-flex gap-3">
                            <div class="flex-grow-1">
                                <ul class="list-unstyled mb-0">
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="14" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90.4 122.9" style="enable-background:new 0 0 90.4 122.9;" xml:space="preserve">
                                                <g>
                                                    <path d="M58.7,0H31.3c-0.7,0-1.4,0.1-2.1,0.4c-0.7,0.3-1.3,0.7-1.8,1.2l0,0c-0.5,0.5-0.9,1.1-1.2,1.7C26,4,25.9,4.7,25.9,5.4v12
                                                c0,1.5,0.6,2.8,1.6,3.8l0,0c1,1,2.3,1.6,3.8,1.6h27.4c1.5,0,2.8-0.6,3.8-1.6l0,0c1-1,1.6-2.3,1.6-3.8v-12c0-0.7-0.1-1.4-0.4-2.1
                                                c-0.3-0.7-0.7-1.3-1.2-1.8c-0.5-0.5-1.1-0.9-1.8-1.2C60.2,0.1,59.5,0,58.7,0L58.7,0L58.7,0z M76.8,88.7V43.9c0-2-0.4-4-1.1-5.7
                                                c-0.8-1.8-1.9-3.5-3.3-4.9s-3-2.5-4.9-3.3c-1.8-0.7-3.7-1.1-5.7-1.1H27.5c-2,0-4,0.4-5.7,1.1c-1.8,0.8-3.5,1.9-4.9,3.3
                                                c-1.4,1.4-2.5,3-3.3,4.9c-0.7,1.8-1.1,3.7-1.1,5.7v44.7c1.4,1.2,2.7,2.7,4,4.6c1.2,1.8,2.3,3.8,3.3,6.2c3.7-1.9,7.6-3.3,11.5-4.2
                                                c4.1-0.9,8.3-1.4,12.6-1.4c4.3,0,8.7,0.5,13.3,1.5c4.4,0.9,8.9,2.3,13.5,4.1c0.5-2.2,1.2-4.2,2.2-5.9C74,91.6,75.4,90,76.8,88.7
                                                L76.8,88.7L76.8,88.7z M25.5,50.6L25.5,50.6c-0.4-0.6-0.5-1.2-0.4-1.8c0.1-0.6,0.5-1.1,1-1.5l0.1,0c0.5-0.3,1.1-0.4,1.7-0.3
                                                c0.6,0.1,1.1,0.5,1.5,1c1.7,2.6,3.2,5.2,4.5,8c1.3,2.8,2.5,5.8,3.5,8.9c1,3.1,1.7,6.4,2.2,9.8c0.5,3.4,0.8,7.1,0.8,10.9
                                                c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7c-0.7,0-1.2-0.3-1.7-0.7c-0.4-0.4-0.7-1-0.7-1.7c0-3.6-0.3-7-0.7-10.2
                                                c-0.5-3.2-1.2-6.3-2-9.2c-0.9-2.9-2-5.7-3.2-8.3C28.5,55.5,27,53,25.5,50.6L25.5,50.6L25.5,50.6z M60.7,48c0.4-0.5,0.9-0.9,1.5-1
                                                c0.6-0.1,1.2,0,1.8,0.3l0,0c0.5,0.4,0.9,0.9,1,1.5c0.1,0.6,0,1.2-0.3,1.8l0,0c-1.6,2.4-3,4.8-4.2,7.5c-1.2,2.6-2.3,5.4-3.2,8.3
                                                c-0.9,2.9-1.6,6-2,9.2s-0.7,6.6-0.7,10.2c0,0.7-0.3,1.2-0.7,1.7c-0.4,0.4-1,0.7-1.7,0.7s-1.2-0.3-1.7-0.7l0,0
                                                c-0.4-0.4-0.7-1-0.7-1.6c0-3.8,0.3-7.5,0.8-10.9c0.5-3.4,1.2-6.7,2.2-9.8c1-3.1,2.1-6.1,3.4-8.9C57.5,53.3,59.1,50.6,60.7,48
                                                L60.7,48L60.7,48z M9.3,93.2C9.1,93.1,9,93,8.8,92.9c-0.2-0.1-0.3-0.3-0.5-0.4C8,92.2,7.6,92,7.3,91.9c-0.4-0.2-0.7-0.3-1.1-0.4
                                                c-0.4-0.1-0.8-0.1-1.2-0.1c-0.4,0-0.7,0.1-1.1,0.2c-0.4,0.1-0.7,0.3-1.1,0.6c-0.3,0.3-0.7,0.6-1,1C0.3,95.3-0.2,98,0,100.8
                                                c0.2,2.9,1,5.9,1.7,8.7l0,0.1c0.2,0.7,0.4,1.4,0.5,1.9l1.8,7.2c0.3,1.1,0.5,2,0.6,2.8l0,0c0.1,0.5,0.2,0.9,0.2,1.2c0,0,0,0,0,0.1
                                                c0,0,0.1,0,0.1,0c0.3,0,0.8-0.1,1.7-0.1l1.5,0h74.4l0.1,0h0.6c0.9,0,1.5,0,1.8,0.1c0.1,0,0.1,0,0.1,0v0c0-0.2,0.1-0.5,0.2-1l0,0
                                                c0.2-0.7,0.4-1.7,0.7-2.7l2.2-7.3c1.4-4.7,2-8.5,2.1-11.5c0.1-3.4-0.6-5.8-1.7-7.3c-0.4-0.5-0.8-0.9-1.3-1.2
                                                c-0.5-0.3-1-0.5-1.6-0.6c-0.6-0.1-1.2-0.1-1.9,0.1c-0.7,0.1-1.3,0.4-2,0.7c-1.8,0.9-3.5,2.6-4.8,4.8c-1.2,2-2,4.4-2.2,7.3l0,0.1
                                                c0,0.1,0,0.2-0.1,0.3v0c0,0.1-0.1,0.2-0.1,0.3c-0.3,0.6-0.7,1-1.3,1.3c-0.6,0.2-1.2,0.2-1.8,0c-4.9-2.1-9.7-3.7-14.3-4.7
                                                c-4.6-1.1-9.1-1.6-13.5-1.7c-4.3,0-8.5,0.5-12.5,1.5c-4,1-7.9,2.6-11.7,4.7l-0.2,0.1c-0.1,0-0.1,0.1-0.2,0.1l0,0
                                                c-0.6,0.2-1.2,0.2-1.8-0.1s-1-0.7-1.2-1.3c-1-2.8-2-5.1-3.2-6.9C11.9,95.7,10.6,94.2,9.3,93.2L9.3,93.2L9.3,93.2z"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">120</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"></path>
                                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"></path>
                                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">Day</span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
                                                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"></path>
                                                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"></path>
                                            </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                    <li class="py-1 d-flex align-items-center gap-2">
                                        <span class="icon flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="16" fill="currentColor">
                                                <path d="M288 0C422.4 0 512 35.2 512 80V128C529.7 128 544 142.3 544 160V224C544 241.7 529.7 256 512 256L512 416C512 433.7 497.7 448 480 448V480C480 497.7 465.7 512 448 512H416C398.3 512 384 497.7 384 480V448H192V480C192 497.7 177.7 512 160 512H128C110.3 512 96 497.7 96 480V448C78.33 448 64 433.7 64 416L64 256C46.33 256 32 241.7 32 224V160C32 142.3 46.33 128 64 128V80C64 35.2 153.6 0 288 0zM128 256C128 273.7 142.3 288 160 288H272V128H160C142.3 128 128 142.3 128 160V256zM304 288H416C433.7 288 448 273.7 448 256V160C448 142.3 433.7 128 416 128H304V288zM144 400C161.7 400 176 385.7 176 368C176 350.3 161.7 336 144 336C126.3 336 112 350.3 112 368C112 385.7 126.3 400 144 400zM432 400C449.7 400 464 385.7 464 368C464 350.3 449.7 336 432 336C414.3 336 400 350.3 400 368C400 385.7 414.3 400 432 400zM368 64H208C199.2 64 192 71.16 192 80C192 88.84 199.2 96 208 96H368C376.8 96 384 88.84 384 80C384 71.16 376.8 64 368 64z"></path>
                                                </svg>
                                        </span>
                                        <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                             Male/Female                                         </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection