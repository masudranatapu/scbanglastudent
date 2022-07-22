@extends('frontend.master')
@section('content')

<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--Add lists-->
                <div class="">
                    <div class="">
                        <div class="">
                            <div class="">
                                <h3 class="mb-4 text-center h3 fw-600">
                                    Rearch Result
                                </h6>
                            </div>
                            <div class="tab-content">
                                <div class="row">
                                @foreach($institutes as $institute)
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
                                                                data-src="{{asset('public/uploads/'.$institute->logo)}}">
                                                        </figure>
                                                        
                                                        <ul class="list-unstyled mb-0 row gx-0 gy-2 flex-grow-1 hov-content">
                                                            <li class="col-12">
                                                                <span class="icon">
                                                                    <i class="fas fa-hand-point-right"></i>
                                                                </span>
                                                                <a href="#">
                                                                    <span style="font-size: 14px;">১ম শ্রেণি ভর্তি - Private School</span>
                                                                </a>
                                                            </li>
                                                            <li class="col-12">
                                                                <span class="icon">
                                                                    <i class="fas fa-hand-point-right"></i>
                                                                </span>
                                                                <a href="#">
                                                                    <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি - Private School</span>
                                                                </a>
                                                            </li>
                                                            <li class="col-12">
                                                                <span class="icon">
                                                                    <i class="fas fa-hand-point-right"></i>
                                                                </span>
                                                                <a href="#">
                                                                    <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি - Private School</span>
                                                                </a>
                                                            </li>
                                                            <li class="col-12">
                                                                <span class="icon">
                                                                    <i class="fas fa-hand-point-right"></i>
                                                                </span>
                                                                <a href="">
                                                                    <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি - Private School</span>
                                                                </a>
                                                            </li>
                                                            <li class="col-12">
                                                                <span class="icon">
                                                                    <i class="fas fa-hand-point-right"></i>
                                                                </span>
                                                                <a href="#">
                                                                    <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি - Private School</span>
                                                                </a>
                                                            </li>
                                                        </ul>                                                        
                                                        
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center">
                                                            <span class="icon text-primary pe-1 pt-1">
                                                                <i class="fa-solid fa-location-arrow fs-18"></i>
                                                            </span> Dhaka Bangladesh
                                                        </div>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="http://localhost/sc/institute-details/RAJUK-Uttara-Model-College" class="detail underline">আরো দেখুন</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Add lists-->
            </div>
        </div>
    </div>
</section>


@endsection