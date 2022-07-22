@extends('frontend.master')

@section('content')

<section class="py-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-9 col-lg-8">
                <!--Classified Description-->
                <div class="card">
                    <div class="ribbon ribbon-top-right text-white"><span
                            class="bg-primary px-10px">{{$board->division->division_name ?? ''}}</span></div>
                    <div class="card-body h-100">
                        <div class="item-det">
                            <h3 class="fw-600 mb-md-3 mb-2 text-lg-start text-center">{{$board->board_name ?? ''}}</h3>
                        </div>
                        <div class="carousel mb-3" data-items="1" data-fade="true" data-autoplay="true" data-infinite="true">
                            <div class="single-item">
                                <img class="lazyload w-100 img-fit responsive-slide-img"
                                    data-src="https://visathingforstudent.com/wp-content/uploads/2022/05/Western-Caspian-University-campus.jpg"
                                    height="400" alt="Slide Image">
                            </div>
                            <div class="single-item">
                                <img class="lazyload w-100 img-fit responsive-slide-img"
                                    data-src="https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=847&q=80 847w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1147&q=80 1147w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1447&q=80 1447w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1694&q=80 1694w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1747&q=80 1747w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2047&q=80 2047w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2294&q=80 2294w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2347&q=80 2347w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2647&q=80 2647w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2894&q=80 2894w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2947&q=80 2947w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3247&q=80 3247w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3494&q=80 3494w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3547&q=80 3547w, https://images.unsplash.com/20/cambridge.JPG?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3578&q=80 3578w"
                                    height="400" alt="Slide Image">
                            </div>
                            <div class="single-item">
                                <img class="lazyload w-100 img-fit responsive-slide-img"
                                    data-src="https://visathingforstudent.com/wp-content/uploads/2022/05/Western-Caspian-University-campus.jpg"
                                    height="400" alt="Slide Image">
                            </div>
                        </div>
                        <div class="mb-4 fs-15">
                            {!! $board->description ?? '' !!}
                        </div>
                    </div>
                </div>

            </div>
            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="h4 fw-600 card-title mb-0">Board Details</h4>
                    </div>
                    <div class="card-body item-user">
                        <div class="text-center">
                            <h5 class="h5">{{$board->board_name ?? ''}}</h5>
                        </div>
                        <div class="text-center">
                            <img class="lazyload img-contain mw-200px w-100"
                                data-src="{{ asset('public/uploads/'.$board->logo) }}"
                                alt="Board" />
                        </div>
                        <ul class="list-unstyled mb-0 row gy-2 fs-16">
                            @if($board->location)
                                <li class="col-12">
                                    <i class="fa-solid fa-location-dot me-2"></i> {{ $board->location ?? '' }}</li>
                            @endif
                            @if($board->established_in)
                                <li class="col-12">
                                <i class="fa fa-thumbs-up me-2"></i> Established In : {{ $board->established_in ?? '' }} </li>
                            @endif
                            <li class="col-12">
                                <span class="font-weight-semibold"><i class="fa fa-envelope me-2"></i></span>
                                <a class="hov-text-primary" href="mailto::{{ $board->email ?? '' }}">
                                    {{$board->email ?? ''}}</a>
                            </li>
                            <li class="col-12">
                                <span class="font-weight-semibold"><i class="fa fa-phone me-2"></i></span>
                                <a href="tel:{{ $board->phone ?? '' }}" class="hov-text-primary">{{$board->phone ?? ''}}</a>
                            </li>
                            <li class="col-12">
                                <span class="font-weight-semibold">
                                    <i class="fa fa-globe me-2"></i></span>
                                <a href="https://{{$board->website ?? ''}}"
                                    class="text-primary">Visit Website</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="h4 mb-0 fw-600">Social Media</h3>
                    </div>
                    <div class="card-body product-filter-desc">
                        <div class="d-flex align-items-center gap-3 justify-content-center">
                            <a href="{{$board->facebook_link ?? ''}}" class="">
                                <i class="fa-brands fa-facebook-f fs-24"></i>
                            </a>
                            <a href="{{ $board->twitter_link ?? '' }}" class="">
                                <i class="fa-brands fa-twitter fs-24"></i>
                            </a>
                            <a href="{{ $board->instgram_link ?? '' }}" class="">
                                <i class="fa-brands fa-linkedin-in fs-24"></i>
                            </a>
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
        <div class="pe-4">
            <h4 class="mb-3 fw-600 h4 custom-title">List of Institutions of Dhaka Education Board</h4>
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
        <div class="py-3">
            <div class="row g-3">
                <div class="col-md-3 col-6">
                    <div class="single-banner"><a href="#" target="_blank"><img class="lazyload img-fit w-100"
                                data-src="{{asset('public/frontend/images/banner/banner2.png')}}" alt="Banner Image"></a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-banner"><a href="#" target="_blank"><img class="lazyload img-fit w-100"
                                data-src="{{asset('public/images/two.png')}}" alt="Banner Image"></a></div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-banner"><a href="#" target="_blank"><img class="lazyload img-fit w-100"
                                data-src="{{asset('public/images/images.png')}}" alt="Banner Image"></a></div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="single-banner"><a href="#" target="_blank"><img class="lazyload img-fit w-100"
                                data-src="{{asset('public/images/one.png')}}" alt="Banner Image"></a></div>
                </div>
            </div>
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
