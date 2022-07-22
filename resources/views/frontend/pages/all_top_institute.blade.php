@extends('frontend.master')

@section('content')
<section class="featured-section py-4">
    <div class="container">
        <div class="row g-lg-3 g-3">
            @foreach($all_top_institute as $institute)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="single-post p-3 h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="item-body">
                            <h6 class="h6 text-truncate-2 mb-3 text-dark"><a
                                    href="{{ route('institute_details',$institute->institute_slug) }}">{{$institute->institute_name ?? ''}}</a>
                            </h6>
                            <div class="d-flex gap-3 mb-3">
                                <figure class="mb-0 flex-shrink-0">
                                    <img class="lazyload img-contain shadow-custom rounded-2" width="70" height="70"
                                        data-src="@if($institute->logo) {{asset('public/uploads/'.$institute->logo)}} @else {{ asset('public/frontend/images/icons/brac.png') }} @endif">
                                </figure>
                                <ul class="list-unstyled mb-0 row gx-0 gy-2 flex-grow-1 hov-content">

                                    @foreach($institute->post as $post)
                                    <li class="col-12">
                                        <span class="icon">
                                            <i class="fas fa-hand-point-right"></i>
                                        </span> <a href="{{ route('post_details',$post->post_slug) }}">
                                            <span style="font-size: 14px;">{{ $post->class->class_name ?? ''}} -
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
                                        Dhaka, Bangladesh
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
        </div>
    </div>
</section>
<!-- End Featured Section -->
@endsection
