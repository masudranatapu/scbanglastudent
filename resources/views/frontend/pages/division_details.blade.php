@extends('frontend.master')

@section('content')
<section class="py-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-9 col-lg-8">
                <!--Classified Description-->
                <div class="card">
                    <div class="card-body h-100">
                        <div class="item-det">
                            <h3 class="fw-600 mb-md-3 mb-2 text-lg-start text-center">{{$division->division_name ?? ''}}
                            </h3>
                        </div>
                        <div class="carousel" data-items="1" data-fade="true" data-autoplay="true">
                            <div class="single-item">
                                <img class="lazyload w-100 img-fit responsive-slide-img"
                                    data-src="{{ asset('public/uploads/'.$division->cover_photo) }}" height="300"
                                    alt="Slide Image">
                            </div>
                            <div class="single-item">
                                <img class="lazyload w-100 img-fit responsive-slide-img"
                                    data-src="https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=847&q=80 847w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1147&q=80 1147w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1447&q=80 1447w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1694&q=80 1694w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1747&q=80 1747w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2047&q=80 2047w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2294&q=80 2294w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2347&q=80 2347w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2647&q=80 2647w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2894&q=80 2894w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2947&q=80 2947w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3247&q=80 3247w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3494&q=80 3494w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3547&q=80 3547w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3578&q=80 3578w"
                                    height="300" alt="Slide Image">
                            </div>
                            <div class="single-item">
                                <img class="lazyload w-100 img-fit responsive-slide-img"
                                    data-src="https://visathingforstudent.com/wp-content/uploads/2022/05/Western-Caspian-University-campus.jpg"
                                    height="300" alt="Slide Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-4 d-none d-lg-block">
                    <div class="px-10px">
                        <div class="mb-3">
                            <h4 class="h4 py-2 fw-600 text-start text-secondary text-md-start text-center mb-0">পছন্দের জেলার স্কুল / কলেজগুলো দেখুন--</h4>
                        </div>
                        <div class="search-wrapper shadow-secondary">
                            <form id="location_search" action="http://localhost/sc/location_search" method="GET"
                                class="row gx-0 align-items-center justify-content-center">
                                <div class="col-md border-end">
                                    <select class="select3 w-100" name="" id="">
                                        <option value="জেলা">জেলা</option>
                                        <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                        <option value="বরিশাল">বরিশাল</option>
                                        <option value="খুলনা">খুলনা</option>
                                    </select>
                                </div>
                                <div class="col-md">
                                    <select class="select3 w-100" name="" id="">
                                        <option value="উপজেলা">উপজেলা</option>
                                        <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                        <option value="বরিশাল">বরিশাল</option>
                                        <option value="খুলনা">খুলনা</option>
                                    </select>
                                </div>
                                <div class="w-md-fit p-3 d-grid">
                                    <button type="submit" class="btn-primary px-5">সার্চ করুন</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="h4 fw-600 card-title mb-0 text-center">ঢাকা বিভাগ / Dhaka Division </h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="lazyload img-contain mw-200px w-100"
                                data-src="http://localhost/sc/public/uploads/250px-Board_of_Intermediate_and_Secondary_Education_Dhaka_Logo.jpg" alt="Board" />
                        </div>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>

<section class="py-4">
    <div class="container">
        <div class="my-4 d-lg-none">
            <div class="px-10px">
                <div class="search-wrapper shadow-secondary">
                    <form id="location_search" action="http://localhost/sc/location_search" method="GET"
                        class="row gx-0 align-items-center justify-content-center">
                        <div class="col-12">
                            <h5 class="h5 py-2 fw-600 text-start text-secondary text-md-start text-center mb-0 px-3">পছন্দের জেলার স্কুল / কলেজগুলো দেখুন</h5>
                        </div>
                        <div class="col-md border-end">
                            <select class="select3 w-100" name="" id="">
                                <option value="জেলা">জেলা</option>
                                <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                <option value="বরিশাল">বরিশাল</option>
                                <option value="খুলনা">খুলনা</option>
                            </select>
                        </div>
                        <div class="col-md">
                            <select class="select3 w-100" name="" id="">
                                <option value="উপজেলা">উপজেলা</option>
                                <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                <option value="বরিশাল">বরিশাল</option>
                                <option value="খুলনা">খুলনা</option>
                            </select>
                        </div>
                        <div class="w-md-fit p-3 d-grid">
                            <button type="submit" class="btn-primary px-5">সার্চ করুন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="pe-4">
            <h4 class="mb-3 fw-600 h4 custom-title">List of Institutions of Dhaka Division</h4>
        </div>
        <div class="row g-3">
            @if( count($institutes) > 0 )
            @foreach($institutes as $institute)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-post p-3 h-100">
                    <div class="absolute-top-right">
                        <div class="featured">
                            <i class="fa-solid fa-bolt-lightning"></i>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="item-body">
                            <h6 class="h6 text-truncate-2 mb-3 text-dark"><a
                                    href="{{ route('institute_details',$institute->institute_slug) }}">{{$institute->institute_name ?? ''}}</a>
                            </h6>
                            <div class="d-flex gap-3 mb-3">
                                <figure class="mb-0 flex-shrink-0">
                                    <img class="lazyload img-contain shadow-custom rounded-2" width="70" height="70"
                                        data-src="{{asset('public/uploads/'.$institute->logo)}}">
                                </figure>
                                <ul class="list-unstyled mb-0 row gx-0 gy-2 flex-grow-1 hov-content">
                                    @foreach($institute->post as $post)
                                    <li class="col-12">
                                        <span class="icon">
                                            <i class="fas fa-hand-point-right"></i>
                                        </span>
                                        <a href="{{ route('post_details',$post->post_slug) }}">
                                            <span style="font-size: 14px;">
                                                {{$post->class->class_name ?? ''  }} -
                                                {{ $institute->sub_institute_type->sub_institute_type ?? '' }}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center">
                                    <span class="icon text-primary pe-1 pt-1"><i
                                            class="fa-solid fa-location-arrow fs-18"></i></span>
                                    @if($institute->district)
                                    {{ $institute->district->district_name }}
                                    @else
                                    Bangladesh
                                    @endif
                                </div>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="{{ route('institute_details',$institute->institute_slug) }}"
                                    class="detail underline">আরো
                                    দেখুন</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection
