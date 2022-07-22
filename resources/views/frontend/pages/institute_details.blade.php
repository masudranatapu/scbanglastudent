@extends('frontend.master')

<!--@include('frontend.partials.institute-style')-->

@section('content')

<section class="py-4 position-relative z-2 text-white">
    <div class="absolute-full z-2 bg-dark opacity-90"></div>
    <div class="absolute-full z-1">
        <div class="carousel h-100" data-items="1" data-fade="true" data-infinite="true" data-autoplay="true">
            <div class="single-slide">
                <img class="lazyload img-fit w-100 h-100" data-src="{{asset('public/frontend/images/gallery/search-bg1.jpg')}}" alt="Slide Image">
            </div>
            <div class="single-slide">
                <img class="lazyload img-fit w-100 h-100" data-src="{{asset('public/frontend/images/gallery/search-bg2.jpg')}}" alt="Slide Image">
            </div>
            <div class="single-slide">
                <img class="lazyload img-fit w-100 h-100" data-src="{{asset('public/frontend/images/gallery/search-bg1.jpg')}}" alt="Slide Image">
            </div>
        </div>
    </div>
    <div class="position-relative z-3">
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="">
                        <div class="university-title">
                            <div class="d-flex gap-4 align-items-center flex-lg-nowrap flex-wrap justify-content-start">
                                <div class="flex-shrink-0">
                                    <span class="factorylogo">
                                        <img class="lazyload img-contain bg-white rounded" width="160" height="160"
                                            data-src="@if($institute->logo) {{ asset('public/uploads/'.$institute->logo) }} @else {{asset('public/frontend/images/gallery/school2.jpg')}} @endif"
                                            alt="Logo">
                                    </span>
                                </div>
                                <div class="col-lg flex-grow-1">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="flex-shrink-0">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="50" fill="currentColor"
                                                viewBox="0 0 122.9 115.4" style="enable-background:new 0 0 122.9 115.4;" xml:space="preserve">
                                                <title>bank</title>
                                                <path d="M113.8,108.8v-6.3h-1.3v-3h-3.8V63.2h7.8v-8.7H6.4v8.7h7.9v36.3h-3.8v3H9.1v6.3H0v6.6h122.9v-6.6H113.8z M40.8,99.5H37v3
                                                h-4.4v0v-3h-3.9V63.2h12.1V99.5z M67.5,99.5h-3.9v3h-4.4l0,0v-3h-3.8V63.2h12.1V99.5z M94.1,99.5h-3.9v3h-4.4v0v-3H82V63.2h12.1
                                                V99.5z"/>
                                                <g>
                                                <path d="M61.4,0L2.8,48.1h117.6L61.4,0z M61.6,40.2c-7.8,0-14.1-6.3-14.1-14.1c0-7.8,6.3-14.1,14.1-14.2c0,0,0,0,0,0
                                                c7.8,0,14.1,6.3,14.1,14.1S69.4,40.2,61.6,40.2z"/>
                                                <path d="M70.3,18.4c-2-2.3-4.9-3.7-8-3.9c-3.1-0.2-6.1,0.9-8.4,2.9c-4.8,4.3-5.2,11.6-1,16.4c4.3,4.8,11.6,5.2,16.4,1
                                                C74.1,30.5,74.5,23.1,70.3,18.4z M61.6,35.6c-5.3,0-9.5-4.3-9.5-9.5c0-5.3,4.3-9.5,9.5-9.5v0c5.3,0,9.5,4.3,9.5,9.5
                                                C71.1,31.3,66.8,35.6,61.6,35.6z"/>
                                                <path d="M61.6,21.3L61.6,21.3c-2.6,0-4.7,2.1-4.7,4.7c0,2.6,2.1,4.7,4.7,4.7c2.6,0,4.7-2.1,4.7-4.7S64.2,21.3,61.6,21.3z"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h4 class="h4 mb-0 fw-600">রাজউক উত্তরা মডেল কলেজ</h4>
                                            <h3 class="h3 mb-0 fw-600">
                                                 <span>{{ $institute->institute_name ?? '' }}</span>
                                            </h3>
                                        </div>
                                    </div>    
                                    <ul class="list-unstyled mb-0 row gy-2 fs-16">
                                        <li class="col-12">
                                            <svg version="1.1" height="22" fill="currentColor"
                                                id="Layer_1" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 435 511.8"
                                                style="enable-background:new 0 0 435 511.8;" xml:space="preserve">
                                                <rect x="71.6" y="374" width="103.3" height="15.5"/>
                                                <path d="M71.6,329.9h130.9c0.9-4.8,2.4-9.9,5.1-15.5h-136V329.9z"/>
                                                <path d="M71.6,270.3h210.8c2.3-1.8,4.5-3.6,6.9-5.1c1.1-0.7,2.2-1.4,3.3-2v-8.4H71.6V270.3z"/>
                                                <polygon points="71.6,91.4 144.4,91.4 144.4,75.9 71.6,75.9 71.6,91.4 "/>
                                                <polygon points="71.6,151 174.9,151 174.9,135.5 71.6,135.5 71.6,151 "/>
                                                <rect x="71.6" y="195.1" width="220.8" height="15.5"/>
                                                <path d="M301.3,385.6l14.6,13.9L341,374c2.5-2.5,4-4.5,7.1-1.4l10,10.2c3.3,3.2,3.1,5.1,0,8.1l-36.5,35.9c-6.5,6.4-5.4,6.8-12,0.2
                                                L284.5,402c-1.4-1.5-1.2-3,0.3-4.5l11.5-12C298.1,383.8,299.5,383.9,301.3,385.6z"/>
                                                <path d="M421.6,373.3c-8.4-11.1-9.9-18.7-10.4-26.9c-0.5-7.6-0.8-15.4-7.4-25.2c-11.4-16.9-33.6-7.5-45.5-14.3
                                                c-8.5-4.9-15.4-12.6-21.5-16.4c-10.5-6.7-20.9-6.6-31.4,0c-6.1,3.9-13,11.6-21.5,16.4c-12,6.8-34.2-2.6-45.5,14.3
                                                c-6.6,9.8-6.9,17.6-7.4,25.2c-0.5,8.2-2,15.8-10.4,26.9c-13.9,18.4-16.8,30.7-9.7,43.5c4.9,8.7,15.2,13.6,17.6,19.1
                                                c5.1,11.8-0.5,20.6,6.4,34.3c4.8,9.5,12.3,15.8,22.2,19c8.4,2.7,16.7-1.2,23.5,1.6c11.8,5,20.5,16.4,29.8,19.3
                                                c7.1,2.2,14.5,2.2,21.6,0c9.4-2.9,18-14.4,29.8-19.3c6.7-2.8,15.1,1.1,23.5-1.6c9.9-3.2,17.4-9.4,22.2-19
                                                c6.9-13.7,1.3-22.5,6.4-34.3c2.4-5.5,12.7-10.4,17.6-19.1C438.4,404,435.5,391.8,421.6,373.3z M320.6,464.1
                                                c-35.2,0-63.7-28.5-63.7-63.7c0-35.2,28.5-63.7,63.7-63.7c35.2,0,63.7,28.5,63.7,63.7C384.3,435.6,355.8,464.1,320.6,464.1z"/>
                                                <path d="M354.4,131L234.6,5c-2.5-3.2-6.4-5-10.5-5H24.3C10.9,0,0,10.9,0,24.4v416.7c0,13.4,10.9,24.3,24.3,24.3h177.5
                                                c-0.8-5-0.9-10.1-1-15.2c-2.3-2-4.7-4.1-7.1-6.5h-172v-422h191.4v122.3c0,7.5,6,13.7,13.7,13.7h115.6v102.2c3.7,1.5,7,3.4,10.2,5.4
                                                l2.2,1.5c3.4,2.4,6.3,4.8,9.4,7.5V146h0C364.2,146,360.1,136.6,354.4,131z M237.6,133.1l1.4-86.9v0l81.3,85.5L237.6,133.1z"/>
                                            </svg> <span class="ps-2">EIIN Code:
                                            1635467641</span> </li>
                                        <li class="col-12">
                                            <i class="fa-solid fa-location-dot me-2"></i> {{ $institute->location ?? '' }}
                                        </li>
                                        <li class="col-12">
                                            <a href="https://{{ $institute->website ?? '' }}" target="_blank" class=""><i
                                                    class="fa fa-globe me-2"></i> {{ $institute->website ?? '' }}</a>
                                        </li>
                                        <li class="col-12">
                                            <i class="fa fa-file-text me-2"></i> University Type:
                                            {{ $institute->sub_institute_type->sub_institute_type ?? '' }} </li>
                                        <li class="col-12">
                                            <i class="fa fa-thumbs-up me-2"></i> Approved by :
                                            @foreach(App\ApprovedBy::where('institute_id',$institute->id)->get() as
                                            $approved_by)
                                            <img class="lazyload img-contain"
                                                data-src="{{ asset('public/uploads/'.$approved_by->approved_by_image) }}"
                                                width="40" height="40" alt="Logo">
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 align-self-end border-lg-start border-light">
                                    <div class="ps-lg-4">
                                        <ul class="list-unstyled mb-0 row gy-2 fs-16">
                                            <li class="col-12">
                                                <i class="fa-solid fa-person fs-18 me-2"></i> Male Students: 125
                                            </li>
                                            <li class="col-12">
                                                <i class="fa-solid fa-person-dress fs-18 me-2"></i> Female Students: 154
                                            </li>
                                            <li class="col-12">
                                                <i class="fa-solid fa-person-chalkboard me-2"></i> Total Teachers: 50 
                                            </li>
                                            <li class="col-12">
                                                <i class="fa-solid fa-code-branch me-2"></i> Other Branchs: 02
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pt-3 mt-3 border-top border-light"></div>
                    <ul class="row list-unstyled mb-0 g-3">
                        <li class="col-lg-3 col-sm-6">
                            <div
                                class="d-flex align-items-center gap-3 fs-16 fw-600 border border-light rounded-3 p-2 px-3 bg-primary">
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" height="34"
                                    fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z" />
                                    <path
                                        d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z" />
                                </svg>
                                <div class="flex-grow-1">Total Students</div>
                                <span
                                    class="flex-shrink-0 border-start border-light ps-3">{{$institute->total_student ?? ''}}</span>
                            </div>
                        </li>
    
                        <li class="col-lg-3 col-sm-6">
                            <div
                                class="d-flex align-items-center gap-3 fs-16 fw-600 border border-light rounded-3 p-2 px-3 bg-primary">
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" height="34"
                                    fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                    <path
                                        d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                </svg>
                                <div class="flex-grow-1"> Divisional Ranked</div>
                                <span
                                    class="flex-shrink-0 border-start border-light ps-3">{{$institute->district_rank ?? ''}}</span>
                            </div>
                        </li>
                        <li class="col-lg-3 col-sm-6">
                            <div
                                class="d-flex align-items-center gap-3 fs-16 fw-600 border border-light rounded-3 p-2 px-3 bg-primary">
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                    height="34" fill="currentColor">
                                    <path
                                        d="M512 32H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h448c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM176 128c35.35 0 64 28.65 64 64s-28.65 64-64 64s-64-28.65-64-64S140.7 128 176 128zM272 384h-192C71.16 384 64 376.8 64 368C64 323.8 99.82 288 144 288h64c44.18 0 80 35.82 80 80C288 376.8 280.8 384 272 384zM496 320h-128C359.2 320 352 312.8 352 304S359.2 288 368 288h128C504.8 288 512 295.2 512 304S504.8 320 496 320zM496 256h-128C359.2 256 352 248.8 352 240S359.2 224 368 224h128C504.8 224 512 231.2 512 240S504.8 256 496 256zM496 192h-128C359.2 192 352 184.8 352 176S359.2 160 368 160h128C504.8 160 512 167.2 512 176S504.8 192 496 192z" />
                                </svg>
                                <div class="flex-grow-1">District Ranked</div>
                                <span
                                    class="flex-shrink-0 border-start border-light ps-3">{{$institute->banglastudent_rank ?? ''}}</span>
                            </div>
                        </li>
    
                        <li class="col-lg-3 col-sm-6">
                            <div
                                class="d-flex align-items-center gap-3 fs-16 fw-600 border border-light rounded-3 p-2 px-3 bg-primary">
                                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" height="34"
                                    fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                <div class="flex-grow-1">Established year</div>
                                <span
                                    class="flex-shrink-0 border-start border-light ps-3">{{ $institute->established_in ?? '' }}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

@if( count( $update_news ) > 0 )
<section class="headline pt-4 bg-white">
    <div class="container">
        <div class="d-flex align-items-center gap-3 overflow-hidden bg-light">
            <div
                class="flex-shrink-0 text-white fs-xs-20 fs-16 font-serif py-10px px-sm-3 px-2 pe-sm-2 pe-2 fw-700 bg-primary arrow-right position-relative z-1">
                UPDATE NEWS
            </div>
            <div class="flex-grow-1">
                <marquee class="d-flex" direction="left" scrollamount="4px" onmouseover="this.stop()"
                    onmouseout="this.start()">
                    @foreach($update_news as $news)
                    <a class="text-secondary fs-xs-16 fs-14 hov-text-primary px-2" href="#">
                        {{$news->update_news ?? ''}}
                    </a>
                    @endforeach
                </marquee>
            </div>
        </div>
    </div>
</section>
@endif
<!-- End Newsticker Area -->

<section class="py-4 bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-9 col-lg-8">
                <div class="row gx-0 gy-sm-5 gy-4">
                    <div class="col-12">
                        <div class="carousel" data-items="1" data-autoplay="true" data-infinite="true" data-fade="true"
                            data-arrows="true">
                            @foreach(App\Models\Slider::where('institute_id',$institute->id)->get() as $row)
                            <div>
                                <img class="lazyload img-fit w-100 responsive-slide-img"
                                    data-src="{{asset('public/uploads/'.$row->slider_thumbnail)}}" height="350"
                                    alt="Gallery Image">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12">
                        <nav class="custom-tabs mb-3">
                            <ul id="nav-tab" role="tablist" class="nav nav-tabs gap-1">
                                <li><button class="nav-link @if( $posts->currentPage() == 1 ) active @endif"
                                        id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description"
                                        type="button" role="tab" aria-controls="nav-description"
                                        aria-selected="true">Description</button></li>
                                <li><button class="nav-link @if( $posts->currentPage() >= 2 ) active @endif"
                                        id="nav-admision-tab" data-bs-toggle="tab" data-bs-target="#nav-admision"
                                        type="button" role="tab" aria-controls="nav-admision"
                                        aria-selected="false">Admision</button></li>
                                <li><button class="nav-link" id="nav-gallery-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-gallery" type="button" role="tab"
                                        aria-controls="nav-gallery" aria-selected="false">Gallery</button></li>
                                <li><button class="nav-link" id="nav-noticeboard-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-noticeboard" type="button" role="tab"
                                        aria-controls="nav-noticeboard" aria-selected="false">Notice Board</button></li>
                                <li><button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Contact</button></li>
                            </ul>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show @if( $posts->currentPage() == 1 ) active @endif"
                                id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                <div class="row gy-md-5 gy-4">
                                    <div class="col-12">
                                        <p class="fs-15 text-secondary mb-0">
                                            {!! $institute->description ?? '' !!}
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <div class="border-start border-3 border-primary bg-secondary py-10px text-white px-10px mb-3">
                    						<h4 class="h4 mb-0"><i class="fa-solid fa-thumbs-up pe-2"></i> Why people choose this School / College</h4>
                    					</div>
                    					<ul class="list-unstyled mb-0 row g-2">
                    					    <li class="w-fit">
                    					        <span class="d-flex align-items-center bg-light text-secondary btn ps-0 py-0 overflow-hidden">
                    					            <span class="d-flex align-self-stretch align-items-center px-2 bg-secondary py-2 text-white"><i class="fa-solid fa-check"></i> </span><span class="flex-grow-1 ps-2">Free Wifi</span>
                    					       </span>
                    					    </li>
                    					    <li class="w-fit">
                    					        <span class="d-flex align-items-center bg-light text-secondary btn ps-0 py-0 overflow-hidden">
                    					            <span class="d-flex align-self-stretch align-items-center px-2 bg-secondary py-2 text-white"><i class="fa-solid fa-check"></i> </span><span class="flex-grow-1 ps-2">Transport Facility</span>
                    					       </span>
                    					    </li>
                    					    <li class="w-fit">
                    					        <span class="d-flex align-items-center bg-light text-secondary btn ps-0 py-0 overflow-hidden">
                    					            <span class="d-flex align-self-stretch align-items-center px-2 bg-secondary py-2 text-white"><i class="fa-solid fa-check"></i> </span><span class="flex-grow-1 ps-2">Digital Class room</span>
                    					       </span>
                    					    </li>
                    					    <li class="w-fit">
                    					        <span class="d-flex align-items-center bg-light text-secondary btn ps-0 py-0 overflow-hidden">
                    					            <span class="d-flex align-self-stretch align-items-center px-2 bg-secondary py-2 text-white"><i class="fa-solid fa-check"></i> </span><span class="flex-grow-1 ps-2">Computer LAB</span>
                    					       </span>
                    					    </li>
                    					</ul>
                                    </div>
                                    <div class="col-12">
                                        <div class="border-start border-3 border-primary bg-secondary py-10px text-white px-10px mb-3">
                    						<h4 class="h4 mb-0"><i class="fa-solid fa-calendar-check pe-2"></i> Recent Event</h4>
                    					</div>
                    					<div class="carousel" data-autoplay="true" data-items="3" data-lg-items="3" data-md-items="2" data-xs-items="1" data-infinite="true">
                    					    <div class="p-2">
                    					        <article class="single-blog bg-white">
                                                    <figure class="mb-2 position-relative overflow-hidden">
                                                        <div class="absolute-top-right p-2">
                                                            <div class="size-34px bg-white place-items-center text-muted fs-16 rounded-circle">
                                                                <i class="lar la-bookmark"></i>
                                                            </div>
                                                        </div>
                                                        <a href="./single-blog.html">
                                                            <img class="ratio-1-65 img-fit w-100 lazyload" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80" alt="image description">
                                                        </a>
                                                        <figcaption>
                                                            <a class="bg-primary text-white d-block text-center p-10px fs-13" href="./single-blog.html">Read Full Article</a>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="px-2">
                                                        <div class="mb-2">
                                                            <h3 class="h5 fw-400 text-muted mb-0"><a href="#">Don't You Love The
                                                                    Patches</a>
                                                            </h3>
                                                        </div>
                                                        <div class="fs-14 text-muted pb-2">
                                                            <p class="mb-0 text-truncate-2">consectetur adipisicing
                                                                elit. Accusantium deserunt repudiandae earum accusamus obcaecati magnam
                                                                eveniet
                                                                quas
                                                                totam reprehenderit voluptatum aperiam nulla ea error, laboriosam
                                                                corrupti,
                                                                recusandae, quia placeat minima!
                                                            </p>
                                                        </div>
                                                        <ul class="list-unstyled mb-0 d-flex align-items-center gap-3">
                                                            <li class="fs-14 text-muted">
                                                                <a class="d-flex align-items-center gap-2" href="#">
                                                                    <i class="lar la-comments fs-22"></i>
                                                                    <span>357</span>
                                                                </a>
                                                            </li>
                                                            <li class="fs-14 text-muted">
                                                                <a class="d-flex align-items-center gap-2" href="#">
                                                                    <i class="lar la-calendar-alt fs-22"></i>
                                                                    <time datetime="2017-12-12">June 27, 2017</time>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                    					    </div>
                    					    <div class="p-2">
                    					        <article class="single-blog bg-white">
                                                    <figure class="mb-2 position-relative overflow-hidden">
                                                        <div class="absolute-top-right p-2">
                                                            <div class="size-34px bg-white place-items-center text-muted fs-16 rounded-circle">
                                                                <i class="lar la-bookmark"></i>
                                                            </div>
                                                        </div>
                                                        <a href="./single-blog.html">
                                                            <img class="ratio-1-65 img-fit w-100 lazyload" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80" alt="image description">
                                                        </a>
                                                        <figcaption>
                                                            <a class="bg-primary text-white d-block text-center p-10px fs-13" href="./single-blog.html">Read Full Article</a>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="px-2">
                                                        <div class="mb-2">
                                                            <h3 class="h5 fw-400 text-muted mb-0"><a href="#">Don't You Love The
                                                                    Patches</a>
                                                            </h3>
                                                        </div>
                                                        <div class="fs-14 text-muted pb-2">
                                                            <p class="mb-0 text-truncate-2">consectetur adipisicing
                                                                elit. Accusantium deserunt repudiandae earum accusamus obcaecati magnam
                                                                eveniet
                                                                quas
                                                                totam reprehenderit voluptatum aperiam nulla ea error, laboriosam
                                                                corrupti,
                                                                recusandae, quia placeat minima!
                                                            </p>
                                                        </div>
                                                        <ul class="list-unstyled mb-0 d-flex align-items-center gap-3">
                                                            <li class="fs-14 text-muted">
                                                                <a class="d-flex align-items-center gap-2" href="#">
                                                                    <i class="lar la-comments fs-22"></i>
                                                                    <span>357</span>
                                                                </a>
                                                            </li>
                                                            <li class="fs-14 text-muted">
                                                                <a class="d-flex align-items-center gap-2" href="#">
                                                                    <i class="lar la-calendar-alt fs-22"></i>
                                                                    <time datetime="2017-12-12">June 27, 2017</time>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                    					    </div>
                    					    <div class="p-2">
                    					        <article class="single-blog bg-white">
                                                    <figure class="mb-2 position-relative overflow-hidden">
                                                        <div class="absolute-top-right p-2">
                                                            <div class="size-34px bg-white place-items-center text-muted fs-16 rounded-circle">
                                                                <i class="lar la-bookmark"></i>
                                                            </div>
                                                        </div>
                                                        <a href="./single-blog.html">
                                                            <img class="ratio-1-65 img-fit w-100 lazyload" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80" alt="image description">
                                                        </a>
                                                        <figcaption>
                                                            <a class="bg-primary text-white d-block text-center p-10px fs-13" href="./single-blog.html">Read Full Article</a>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="px-2">
                                                        <div class="mb-2">
                                                            <h3 class="h5 fw-400 text-muted mb-0"><a href="#">Don't You Love The
                                                                    Patches</a>
                                                            </h3>
                                                        </div>
                                                        <div class="fs-14 text-muted pb-2">
                                                            <p class="mb-0 text-truncate-2">consectetur adipisicing
                                                                elit. Accusantium deserunt repudiandae earum accusamus obcaecati magnam
                                                                eveniet
                                                                quas
                                                                totam reprehenderit voluptatum aperiam nulla ea error, laboriosam
                                                                corrupti,
                                                                recusandae, quia placeat minima!
                                                            </p>
                                                        </div>
                                                        <ul class="list-unstyled mb-0 d-flex align-items-center gap-3">
                                                            <li class="fs-14 text-muted">
                                                                <a class="d-flex align-items-center gap-2" href="#">
                                                                    <i class="lar la-comments fs-22"></i>
                                                                    <span>357</span>
                                                                </a>
                                                            </li>
                                                            <li class="fs-14 text-muted">
                                                                <a class="d-flex align-items-center gap-2" href="#">
                                                                    <i class="lar la-calendar-alt fs-22"></i>
                                                                    <time datetime="2017-12-12">June 27, 2017</time>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                    					    </div>
                    					    <div class="p-2">
                    					        <article class="single-blog bg-white">
                                                    <figure class="mb-2 position-relative overflow-hidden">
                                                        <div class="absolute-top-right p-2">
                                                            <div class="size-34px bg-white place-items-center text-muted fs-16 rounded-circle">
                                                                <i class="lar la-bookmark"></i>
                                                            </div>
                                                        </div>
                                                        <a href="./single-blog.html">
                                                            <img class="ratio-1-65 img-fit w-100 lazyload" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80" alt="image description">
                                                        </a>
                                                        <figcaption>
                                                            <a class="bg-primary text-white d-block text-center p-10px fs-13" href="./single-blog.html">Read Full Article</a>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="px-2">
                                                        <div class="mb-2">
                                                            <h3 class="h5 fw-400 text-muted mb-0"><a href="#">Don't You Love The
                                                                    Patches</a>
                                                            </h3>
                                                        </div>
                                                        <div class="fs-14 text-muted pb-2">
                                                            <p class="mb-0 text-truncate-2">consectetur adipisicing
                                                                elit. Accusantium deserunt repudiandae earum accusamus obcaecati magnam
                                                                eveniet
                                                                quas
                                                                totam reprehenderit voluptatum aperiam nulla ea error, laboriosam
                                                                corrupti,
                                                                recusandae, quia placeat minima!
                                                            </p>
                                                        </div>
                                                        <ul class="list-unstyled mb-0 d-flex align-items-center gap-3">
                                                            <li class="fs-14 text-muted">
                                                                <a class="d-flex align-items-center gap-2" href="#">
                                                                    <i class="lar la-comments fs-22"></i>
                                                                    <span>357</span>
                                                                </a>
                                                            </li>
                                                            <li class="fs-14 text-muted">
                                                                <a class="d-flex align-items-center gap-2" href="#">
                                                                    <i class="lar la-calendar-alt fs-22"></i>
                                                                    <time datetime="2017-12-12">June 27, 2017</time>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                    					    </div>
                    					</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="border-start border-3 border-primary bg-secondary py-10px text-white px-10px mb-3">
                    						<h4 class="h4 mb-0"><i class="fa-solid fa-video pe-2"></i> Our Video Gallery</h4>
                    					</div>
                    					<div class="carousel" data-autoplay="true" data-items="3" data-lg-items="3" data-md-items="2" data-xs-items="1" data-infinite="true">
                    					    <div class="p-2">
                                                <div class="single-video position-relative">
                                                    <div class="position-relative">
                                                        <div class="absolute-center z-1">
                                                            <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-trigger">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                                    </circle>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <img class="lazyload img-fit w-100 ratio-1-65" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80">
                                                    </div>
                                                    <div class="p-10px">
                                                        <h6 class="h6 mb-0">Video Title Will Goes Here</h6>
                                                    </div>
                                                </div>
                    					    </div>
                    					    <div class="p-2">
                                                <div class="single-video position-relative">
                                                    <div class="position-relative">
                                                        <div class="absolute-center z-1">
                                                            <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-trigger">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                                    </circle>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <img class="lazyload img-fit w-100 ratio-1-65" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80">
                                                    </div>
                                                    <div class="p-10px">
                                                        <h6 class="h6 mb-0">Video Title Will Goes Here</h6>
                                                    </div>
                                                </div>
                    					    </div>
                    					    <div class="p-2">
                                                <div class="single-video position-relative">
                                                    <div class="position-relative">
                                                        <div class="absolute-center z-1">
                                                            <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-trigger">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                                    </circle>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <img class="lazyload img-fit w-100 ratio-1-65" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80">
                                                    </div>
                                                    <div class="p-10px">
                                                        <h6 class="h6 mb-0">Video Title Will Goes Here</h6>
                                                    </div>
                                                </div>
                    					    </div>
                    					    <div class="p-2">
                                                <div class="single-video position-relative">
                                                    <div class="position-relative">
                                                        <div class="absolute-center z-1">
                                                            <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-trigger">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                                    </circle>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <img class="lazyload img-fit w-100 ratio-1-65" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80">
                                                    </div>
                                                    <div class="p-10px">
                                                        <h6 class="h6 mb-0">Video Title Will Goes Here</h6>
                                                    </div>
                                                </div>
                    					    </div>
                    					    <div class="p-2">
                                                <div class="single-video position-relative">
                                                    <div class="position-relative">
                                                        <div class="absolute-center z-1">
                                                            <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-trigger">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                                    <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                                    <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                                    </circle>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                        <img class="lazyload img-fit w-100 ratio-1-65" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80">
                                                    </div>
                                                    <div class="p-10px">
                                                        <h6 class="h6 mb-0">Video Title Will Goes Here</h6>
                                                    </div>
                                                </div>
                    					    </div>
                    					</div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane my-4 fade @if( $posts->currentPage() >= 2 ) active show @endif"
                                id="nav-admision" role="tabpanel" aria-labelledby="nav-admision-tab">
                                <div class="row g-3">
                                    @foreach($posts as $post)
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="single-post h-100">
                                            <figure class="image">
                                                <a href="{{ route('post_details',$post->post_slug) }}">
                                                    <img class="lazyload ratio-1-65 img-fit w-100 rounded-1"
                                                        data-src="@if($post->post_thumbnail) {{ asset('public/uploads/'.$post->post_thumbnail) }} @else {{asset('public/frontend/images/gallery/school2.jpg')}} @endif"
                                                        alt="Collage/School Image">
                                                </a>
                                                <div class="price">
                                                    @if(!empty($post->offer_fee))
                                                    <span class="">{{ $post->offer_fee ?? '' }} ৳</span>
                                                    @endif
                                                    @if(empty($post->offer_fee))
                                                    {{ $post->monthly_tuition_fee ?? '' }} ৳
                                                    @else
                                                    <del class="text-muted">{{ $post->monthly_tuition_fee ?? '' }}
                                                        ৳</del>
                                                    @endif
                                                </div>
                                            </figure>
                                            <div
                                                class="countdown-wrapper d-flex align-items-center justify-content-center">
                                                <div class="fs-16 fw-600 text-dark">দিন বাকি <i
                                                        class="pe-1 las la-angle-double-right"></i>
                                                </div>
                                                <div class="count-down d-flex align-items-center justify-content-center gap-2"
                                                    data-countdown="2022/08/01 00:00:00">
                                                    <div class="countdown-item text-center"><span
                                                            class="countdown-digit">15</span><span
                                                            class="fs-15 fw-400 d-block">Days</span></div><span
                                                        class="countdown-separator">:</span>
                                                    <div class="countdown-item text-center"><span
                                                            class="countdown-digit">10</span><span
                                                            class="fs-15 fw-400 d-block">Hrs</span></div><span
                                                        class="countdown-separator">:</span>
                                                    <div class="countdown-item text-center"><span
                                                            class="countdown-digit">55</span><span
                                                            class="fs-15 fw-400 d-block">Min</span></div><span
                                                        class="countdown-separator">:</span>
                                                    <div class="countdown-item text-center"><span
                                                            class="countdown-digit">12</span><span
                                                            class="fs-15 fw-400 d-block">Sec</span></div>
                                                </div>
                                            </div>
                                            <div class="p-3">
                                                <h6 class="h6 text-truncate-2 mb-2">
                                                    <a href="{{ route('post_details',$post->post_slug) }}">{{ substr($post->post_title ?? '',0,500) }}
                                                        @if(strlen($post->post_title) > 500) ... @endif </a>
                                                </h6>
                                                <div class="d-flex gap-3">
                                                    <div class="flex-grow-1">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="py-1 d-flex align-items-center gap-2">
                                                                <span class="icon flex-shrink-0">
                                                                    <svg version="1.1" id="Layer_1"
                                                                        xmlns="http://www.w3.org/2000/svg" width="14"
                                                                        fill="currentColor"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        x="0px" y="0px" viewBox="0 0 90.4 122.9"
                                                                        style="enable-background:new 0 0 90.4 122.9;"
                                                                        xml:space="preserve">
                                                                        <g>
                                                                            <path
                                                                                d="M58.7,0H31.3c-0.7,0-1.4,0.1-2.1,0.4c-0.7,0.3-1.3,0.7-1.8,1.2l0,0c-0.5,0.5-0.9,1.1-1.2,1.7C26,4,25.9,4.7,25.9,5.4v12
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
																		c-0.6,0.2-1.2,0.2-1.8-0.1s-1-0.7-1.2-1.3c-1-2.8-2-5.1-3.2-6.9C11.9,95.7,10.6,94.2,9.3,93.2L9.3,93.2L9.3,93.2z" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                                <span
                                                                    class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">{{$post->maximum_seat ?? '' }}</span>
                                                            </li>
                                                            <li class="py-1 d-flex align-items-center gap-2">
                                                                <span class="icon flex-shrink-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-clock-history" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                                                        <path
                                                                            d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                                                        <path
                                                                            d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                                    </svg>
                                                                </span>
                                                                <span
                                                                    class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">{{ $post->shift->name ?? '' }}</span>
                                                            </li>
                                                            <li class="py-1 d-flex align-items-center gap-2">
                                                                <span class="icon flex-shrink-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-people-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                                        <path fill-rule="evenodd"
                                                                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                                        <path
                                                                            d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                                    </svg>
                                                                </span>
                                                                <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                                                    @if($post->gender == 'both') {{ 'Male/Female' }}
                                                                    @elseif($post->gender == 'female')
                                                                    {{ 'Female' }} @else {{ 'Male' }} @endif
                                                                </span>
                                                            </li>
                                                            <li class="py-1 d-flex align-items-center gap-2">
                                                                <span class="icon flex-shrink-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-hospital" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z" />
                                                                        <path
                                                                            d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z" />
                                                                    </svg>
                                                                </span>
                                                                <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                                                    @if($post->gender == 'both') {{ 'Male/Female' }}
                                                                    @elseif($post->gender == 'female')
                                                                    {{ 'Female' }} @else {{ 'Male' }} @endif
                                                                </span>
                                                            </li>
                                                            <li class="py-1 d-flex align-items-center gap-2">
                                                                <span class="icon flex-shrink-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 576 512" width="16"
                                                                        fill="currentColor">
                                                                        <path
                                                                            d="M288 0C422.4 0 512 35.2 512 80V128C529.7 128 544 142.3 544 160V224C544 241.7 529.7 256 512 256L512 416C512 433.7 497.7 448 480 448V480C480 497.7 465.7 512 448 512H416C398.3 512 384 497.7 384 480V448H192V480C192 497.7 177.7 512 160 512H128C110.3 512 96 497.7 96 480V448C78.33 448 64 433.7 64 416L64 256C46.33 256 32 241.7 32 224V160C32 142.3 46.33 128 64 128V80C64 35.2 153.6 0 288 0zM128 256C128 273.7 142.3 288 160 288H272V128H160C142.3 128 128 142.3 128 160V256zM304 288H416C433.7 288 448 273.7 448 256V160C448 142.3 433.7 128 416 128H304V288zM144 400C161.7 400 176 385.7 176 368C176 350.3 161.7 336 144 336C126.3 336 112 350.3 112 368C112 385.7 126.3 400 144 400zM432 400C449.7 400 464 385.7 464 368C464 350.3 449.7 336 432 336C414.3 336 400 350.3 400 368C400 385.7 414.3 400 432 400zM368 64H208C199.2 64 192 71.16 192 80C192 88.84 199.2 96 208 96H368C376.8 96 384 88.84 384 80C384 71.16 376.8 64 368 64z" />
                                                                    </svg>
                                                                </span>
                                                                <span class="flex-grow-1 fs-16 fw-500 lh-1 pt-1">
                                                                    @if($post->gender == 'both') {{ 'Male/Female' }}
                                                                    @elseif($post->gender == 'female')
                                                                    {{ 'Female' }} @else {{ 'Male' }} @endif
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <img class="lazyload img-contain rounded-2"
                                                            data-src="{{asset('frontend/images/icons/brac.png')}}"
                                                            width="50" height="50" alt="Logo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-12">
                                        <nav class="custom-pagination">
                                            <ul>
                                                <li class="custom-prevpage"><a href="#"><i
                                                            class="fa fa-angle-left"></i></a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li class="custom-active"><a href="#">5</a></li>
                                                <li>...</li>
                                                <li><a href="#">10</a></li>
                                                <li class="custom-nextpage"><a href="#"><i
                                                            class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-gallery" role="tabpanel"
                                aria-labelledby="nav-gallery-tab">
                                <div class="row g-sm-3 g-2 gallery">
                                    @foreach($image_gallery as $gallery)
                                    <div class="col-md-4 col-6">
                                        <div class="single-gallery">
                                            <img class="lazyload img-fit ratio-square w-100"
                                                data-src="{{ asset('public/uploads/'.$gallery->thumbnail_image) }}"
                                                alt="Images">
                                            <a data-caption="{{ $gallery->title ?? '' }}"
                                                href="{{ asset('public/uploads/'.$gallery->thumbnail_image) }}"
                                                class="gallery-icon">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="col-12">
                                        <nav class="custom-pagination">
                                            <ul>
                                                <li class="custom-prevpage"><a href="#"><i
                                                            class="fa fa-angle-left"></i></a>
                                                </li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li class="custom-active"><a href="#">5</a></li>
                                                <li>...</li>
                                                <li><a href="#">10</a></li>
                                                <li class="custom-nextpage"><a href="#"><i
                                                            class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-noticeboard" role="tabpanel"
                                aria-labelledby="nav-noticeboard-tab">
                                <div class="table-responsive">
                                    <table class="table table-striped align-middle">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="90">ক্রমিক</th>
                                                <th>শিরোনাম</th>
                                                <th>প্রকাশের তারিখ</th>
                                                <th class="text-center" width="100">ডাউনলোড</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach(App\NoticeBoard::where('institute_id',$institute->id)->orderByDesc('id')->take(10)->get()
                                            as $notice)
                                            <tr>
                                                <td class="text-center" width="90">
                                                    <strong>{{ $loop->index + 1 }}</strong></td>
                                                <td>{{ $notice->headline ?? '' }}</td>
                                                <td>{{ \Carbon\Carbon::parse($notice->created_at)->diffForHumans() ?? '' }}
                                                </td>
                                                <td class="text-center" width="100">
                                                    <a href="{{ url('/notice_board/download/'.$notice->notice) }}"><img
                                                            class="lazyload img-contain"
                                                            data-src="{{ asset('public/frontend/images/icons/pdf.png') }}"
                                                            height="30" alt="Icon">
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <div class="bg-light p-3">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="row g-2">
                                                        <div class="col-12">
                                                            <h4 class="mb-2 fw-600">Rajuk College Main Campus</h4>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-2 fs-16">
                                                                <div class="flex-shrink-0">
                                                                    <i class="fa-solid fa-phone"></i>
                                                                </div>
                                                                <div class="flex-grow-1"><a href="tel: 0199 7123 548">0199 7123 548</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-2 fs-16">
                                                                <div class="flex-shrink-0">
                                                                    <i class="fa-solid fa-globe"></i>
                                                                </div>
                                                                <div class="flex-grow-1"><a href="https://www.sc.banglastudent.com">www.sc.banglastudent.com</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-2 fs-16">
                                                                <div class="flex-shrink-0">
                                                                    <i class="fa-solid fa-envelope"></i>
                                                                </div>
                                                                <div class="flex-grow-1"><a href="mailto: admin@yourdomain.com">admin@yourdomain.com</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-2 fs-16">
                                                                <div class="flex-shrink-0">
                                                                    <i class="fa-solid fa-location-dot"></i>
                                                                </div>
                                                                <div class="flex-grow-1">St. Joseph High School and College, Dhaka, Bangladesh.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="map-wrapper h-100">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.254272231177!2d90.3654215!3d23.7985508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1592201299593!5m2!1sen!2sbd"
                                                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="bg-light p-3">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="row g-2">
                                                        <div class="col-12">
                                                            <h4 class="mb-2 fw-600">Rajuk College Branch Campus 1</h4>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-2 fs-16">
                                                                <div class="flex-shrink-0">
                                                                    <i class="fa-solid fa-phone"></i>
                                                                </div>
                                                                <div class="flex-grow-1"><a href="tel: 0199 7123 548">0199 7123 548</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-2 fs-16">
                                                                <div class="flex-shrink-0">
                                                                    <i class="fa-solid fa-globe"></i>
                                                                </div>
                                                                <div class="flex-grow-1"><a href="https://www.sc.banglastudent.com">www.sc.banglastudent.com</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-2 fs-16">
                                                                <div class="flex-shrink-0">
                                                                    <i class="fa-solid fa-envelope"></i>
                                                                </div>
                                                                <div class="flex-grow-1"><a href="mailto: admin@yourdomain.com">admin@yourdomain.com</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex align-items-center gap-2 fs-16">
                                                                <div class="flex-shrink-0">
                                                                    <i class="fa-solid fa-location-dot"></i>
                                                                </div>
                                                                <div class="flex-grow-1">St. Joseph High School and College, Dhaka, Bangladesh.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="map-wrapper h-100">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.254272231177!2d90.3654215!3d23.7985508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1592201299593!5m2!1sen!2sbd"
                                                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <h3 class="h3 mb-3 fw-600">Related Institute</h3>  
                      
                        <div class="carousel h-equal" data-arrows="true" data-items="3" data-xl-items="3" data-lg-items="2"
                            data-sm-items="1" data-xs-items="1" data-autoplay="true" data-infinite="true">
                            <div class="single-item px-8px pt-2 pb-4">
                                <div class="single-post p-3 h-100">
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div class="item-body">
                                            <h6 class="h6 text-truncate-2 mb-3 text-dark"><a href="https://sc.banglastudent.com/institute-details/RAJUK-Uttara-Model-College">RAJUK Uttara Model College</a>
                                            </h6>
                                            <div class="d-flex gap-3 mb-3">
                                                <figure class="mb-0 flex-shrink-0">
                                                    <img class="img-contain shadow-custom rounded-2 lazyload" width="70" height="70" data-src=" https://sc.banglastudent.com/public/uploads/1655404994801516206-Morogram_of_RAJUK_Uttara_Model_College.svg.png ">
                                                </figure>
                                                <ul class="list-unstyled mb-0 row gx-0 gy-2 flex-grow-1 hov-content">
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AC%E0%A7%87%E0%A6%B6%E0%A6%AA%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%A1%E0%A6%BE%E0%A6%89%E0%A6%A8%E0%A6%B2%E0%A7%8B%E0%A6%A1-%E0%A6%B6%E0%A7%81%E0%A6%B0%E0%A7%81-%E0%A6%8F%E0%A6%B8%E0%A6%8F%E0%A6%B8%E0%A6%B8%E0%A6%BF-%E0%A6%8F%E0%A6%87%E0%A6%9A%E0%A6%8F%E0%A6%B8%E0%A6%B8%E0%A6%BF-%E0%A6%AA%E0%A6%B0%E0%A7%80%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE">
                                                            <span style="font-size: 14px;">১ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AA%E0%A6%9E%E0%A7%8D%E0%A6%9A%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%A8%E0%A7%A6%-%E0%A6%9B%E0%A6%BE%E0%A7%9C%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF">
                                                            <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A7%AF%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%B9%E0%A6%A8-%E0%A6%AE%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A7%A7%E0%A7%A6%E0%A7%A6%E0%A7%A6-%E0%A6%9F%E0%A6%BE%E0%A6%95%E0%A6%BE-%E0%A6%AC%E0%A7%87%E0%A6%A4%E0%A6%A8%E0%A7%87">
                                                            <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                   <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AE%E0%A6%BE%E0%A6%A6%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%B8%E0%A6%BE%E0%A7%9F-%E0%A6%AA%E0%A6%9E%E0%A7%8D%E0%A6%9A%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%A8%E0%A7%A6%-%E0%A6%9B%E0%A6%BE%E0%A7%9C%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF">
                                                            <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি</span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/Class-9-Admission-50%-Discount">
                                                            <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon text-primary pe-1 pt-1"><i class="fa-solid fa-location-arrow fs-18"></i></span>
                                                                                        Dhaka Bangladesh
                                                                                    </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="https://sc.banglastudent.com/institute-details/RAJUK-Uttara-Model-College" class="detail underline">আরো
                                                    দেখুন</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item px-8px pt-2 pb-4">
                                <div class="single-post p-3 h-100">
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div class="item-body">
                                            <h6 class="h6 text-truncate-2 mb-3 text-dark"><a href="https://sc.banglastudent.com/institute-details/RAJUK-Uttara-Model-College">RAJUK Uttara Model College</a>
                                            </h6>
                                            <div class="d-flex gap-3 mb-3">
                                                <figure class="mb-0 flex-shrink-0">
                                                    <img class="img-contain shadow-custom rounded-2 lazyload" width="70" height="70" data-src=" https://sc.banglastudent.com/public/uploads/1655404994801516206-Morogram_of_RAJUK_Uttara_Model_College.svg.png ">
                                                </figure>
                                                <ul class="list-unstyled mb-0 row gx-0 gy-2 flex-grow-1 hov-content">
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AC%E0%A7%87%E0%A6%B6%E0%A6%AA%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%A1%E0%A6%BE%E0%A6%89%E0%A6%A8%E0%A6%B2%E0%A7%8B%E0%A6%A1-%E0%A6%B6%E0%A7%81%E0%A6%B0%E0%A7%81-%E0%A6%8F%E0%A6%B8%E0%A6%8F%E0%A6%B8%E0%A6%B8%E0%A6%BF-%E0%A6%8F%E0%A6%87%E0%A6%9A%E0%A6%8F%E0%A6%B8%E0%A6%B8%E0%A6%BF-%E0%A6%AA%E0%A6%B0%E0%A7%80%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE">
                                                            <span style="font-size: 14px;">১ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AA%E0%A6%9E%E0%A7%8D%E0%A6%9A%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%A8%E0%A7%A6%-%E0%A6%9B%E0%A6%BE%E0%A7%9C%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF">
                                                            <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A7%AF%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%B9%E0%A6%A8-%E0%A6%AE%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A7%A7%E0%A7%A6%E0%A7%A6%E0%A7%A6-%E0%A6%9F%E0%A6%BE%E0%A6%95%E0%A6%BE-%E0%A6%AC%E0%A7%87%E0%A6%A4%E0%A6%A8%E0%A7%87">
                                                            <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                   <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AE%E0%A6%BE%E0%A6%A6%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%B8%E0%A6%BE%E0%A7%9F-%E0%A6%AA%E0%A6%9E%E0%A7%8D%E0%A6%9A%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%A8%E0%A7%A6%-%E0%A6%9B%E0%A6%BE%E0%A7%9C%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF">
                                                            <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি</span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/Class-9-Admission-50%-Discount">
                                                            <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon text-primary pe-1 pt-1"><i class="fa-solid fa-location-arrow fs-18"></i></span>
                                                                                        Dhaka Bangladesh
                                                                                    </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="https://sc.banglastudent.com/institute-details/RAJUK-Uttara-Model-College" class="detail underline">আরো
                                                    দেখুন</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item px-8px pt-2 pb-4">
                                <div class="single-post p-3 h-100">
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div class="item-body">
                                            <h6 class="h6 text-truncate-2 mb-3 text-dark"><a href="https://sc.banglastudent.com/institute-details/RAJUK-Uttara-Model-College">RAJUK Uttara Model College</a>
                                            </h6>
                                            <div class="d-flex gap-3 mb-3">
                                                <figure class="mb-0 flex-shrink-0">
                                                    <img class="img-contain shadow-custom rounded-2 lazyload" width="70" height="70" data-src=" https://sc.banglastudent.com/public/uploads/1655404994801516206-Morogram_of_RAJUK_Uttara_Model_College.svg.png ">
                                                </figure>
                                                <ul class="list-unstyled mb-0 row gx-0 gy-2 flex-grow-1 hov-content">
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AC%E0%A7%87%E0%A6%B6%E0%A6%AA%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%A1%E0%A6%BE%E0%A6%89%E0%A6%A8%E0%A6%B2%E0%A7%8B%E0%A6%A1-%E0%A6%B6%E0%A7%81%E0%A6%B0%E0%A7%81-%E0%A6%8F%E0%A6%B8%E0%A6%8F%E0%A6%B8%E0%A6%B8%E0%A6%BF-%E0%A6%8F%E0%A6%87%E0%A6%9A%E0%A6%8F%E0%A6%B8%E0%A6%B8%E0%A6%BF-%E0%A6%AA%E0%A6%B0%E0%A7%80%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE">
                                                            <span style="font-size: 14px;">১ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AA%E0%A6%9E%E0%A7%8D%E0%A6%9A%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%A8%E0%A7%A6%-%E0%A6%9B%E0%A6%BE%E0%A7%9C%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF">
                                                            <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A7%AF%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%B9%E0%A6%A8-%E0%A6%AE%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A7%A7%E0%A7%A6%E0%A7%A6%E0%A7%A6-%E0%A6%9F%E0%A6%BE%E0%A6%95%E0%A6%BE-%E0%A6%AC%E0%A7%87%E0%A6%A4%E0%A6%A8%E0%A7%87">
                                                            <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                   <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AE%E0%A6%BE%E0%A6%A6%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%B8%E0%A6%BE%E0%A7%9F-%E0%A6%AA%E0%A6%9E%E0%A7%8D%E0%A6%9A%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%A8%E0%A7%A6%-%E0%A6%9B%E0%A6%BE%E0%A7%9C%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF">
                                                            <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি</span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/Class-9-Admission-50%-Discount">
                                                            <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon text-primary pe-1 pt-1"><i class="fa-solid fa-location-arrow fs-18"></i></span>
                                                                                        Dhaka Bangladesh
                                                                                    </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="https://sc.banglastudent.com/institute-details/RAJUK-Uttara-Model-College" class="detail underline">আরো
                                                    দেখুন</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item px-8px pt-2 pb-4">
                                <div class="single-post p-3 h-100">
                                    <div class="d-flex flex-column justify-content-between h-100">
                                        <div class="item-body">
                                            <h6 class="h6 text-truncate-2 mb-3 text-dark"><a href="https://sc.banglastudent.com/institute-details/RAJUK-Uttara-Model-College">RAJUK Uttara Model College</a>
                                            </h6>
                                            <div class="d-flex gap-3 mb-3">
                                                <figure class="mb-0 flex-shrink-0">
                                                    <img class="img-contain shadow-custom rounded-2 lazyload" width="70" height="70" data-src=" https://sc.banglastudent.com/public/uploads/1655404994801516206-Morogram_of_RAJUK_Uttara_Model_College.svg.png ">
                                                </figure>
                                                <ul class="list-unstyled mb-0 row gx-0 gy-2 flex-grow-1 hov-content">
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%AC%E0%A7%87%E0%A6%B6%E0%A6%AA%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%A1%E0%A6%BE%E0%A6%89%E0%A6%A8%E0%A6%B2%E0%A7%8B%E0%A6%A1-%E0%A6%B6%E0%A7%81%E0%A6%B0%E0%A7%81-%E0%A6%8F%E0%A6%B8%E0%A6%8F%E0%A6%B8%E0%A6%B8%E0%A6%BF-%E0%A6%8F%E0%A6%87%E0%A6%9A%E0%A6%8F%E0%A6%B8%E0%A6%B8%E0%A6%BF-%E0%A6%AA%E0%A6%B0%E0%A7%80%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE">
                                                            <span style="font-size: 14px;">১ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AA%E0%A6%9E%E0%A7%8D%E0%A6%9A%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%A8%E0%A7%A6%-%E0%A6%9B%E0%A6%BE%E0%A7%9C%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF">
                                                            <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A7%AF%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%B9%E0%A6%A8-%E0%A6%AE%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A7%A7%E0%A7%A6%E0%A7%A6%E0%A7%A6-%E0%A6%9F%E0%A6%BE%E0%A6%95%E0%A6%BE-%E0%A6%AC%E0%A7%87%E0%A6%A4%E0%A6%A8%E0%A7%87">
                                                            <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                   <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/%E0%A6%AE%E0%A6%BE%E0%A6%A6%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%B8%E0%A6%BE%E0%A7%9F-%E0%A6%AA%E0%A6%9E%E0%A7%8D%E0%A6%9A%E0%A6%AE-%E0%A6%B6%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%A3%E0%A6%BF%E0%A6%A4%E0%A7%87-%E0%A7%A8%E0%A7%A6%-%E0%A6%9B%E0%A6%BE%E0%A7%9C%E0%A7%87-%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF">
                                                            <span style="font-size: 14px;">৫ম শ্রেণি ভর্তি</span>
                                                        </a>
                                                    </li>
                                                    <li class="col-12">
                                                        <span class="icon">
                                                            <i class="fas fa-hand-point-right"></i>
                                                        </span>
                                                        <a href="https://sc.banglastudent.com/post-details/Class-9-Admission-50%-Discount">
                                                            <span style="font-size: 14px;">৯ম শ্রেণি ভর্তি </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center">
                                                    <span class="icon text-primary pe-1 pt-1"><i class="fa-solid fa-location-arrow fs-18"></i></span>
                                                                                        Dhaka Bangladesh
                                                                                    </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <a href="https://sc.banglastudent.com/institute-details/RAJUK-Uttara-Model-College" class="detail underline">আরো
                                                    দেখুন</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4">
                <div class="row gx-0 gy-4">
                    <div class="col-12">
                        <a href="#"><img class="lazyload img-fluid" data-src="https://sc.banglastudent.com/public/images/two.png" alt="ads"/></a>
                    </div>
                    <div class="col-12">
                        <h4 class="h4 fw-600 text-white bg-primary mb-3 py-2 px-3 lh-1">Introductory Video</h4>
                        <div class="row gx-0 gy-3">
                            <div class="col-12">
                                <div class="single-video position-relative">
                                    <div class="absolute-center z-1">
                                        <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-trigger">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                                                <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                                <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3">
                                                </circle>
                                            </svg>
                                        </a>
                                    </div>
                                    <img class="lazyload img-fit w-100 ratio-1-65" data-src="https://images.unsplash.com/photo-1594637551570-ef12e3750142?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4 class="h4 fw-600 text-white bg-primary mb-3 py-2 px-3 lh-1">Institute Teachers</h4>
                        <div class="row gx-0 gy-3">
                            <div class="col-12">
                                <div class="single-team bg-white p-2 border">
                                    <figure class="mb-0">
                                        <img class="lazyload w-100 ratio-square img-fit"
                                            data-src="{{ asset('public/uploads/'.$widget->widget_one_image) }}"
                                            alt="Image">
                                    </figure>
                                    <div class="p-3">
                                        <h6 class="h6 fw-600 text-dark mb-2">{{ $widget->widget_one_title ?? '' }}</h6>
                                        <p class="fs-15 text-secondary mb-0 text-truncate-2">
                                            {{ $widget->widget_short_description ?? '' }}</p>
                                        <div>
                                            <a class="underline" href="#">আরো জানুন</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="#"><img class="lazyload img-fluid" data-src="https://sc.banglastudent.com/public/images/two.png" alt="ads"/></a>
                    </div>
                    <div class="col-12">
                        <h4 class="h4 fw-600 text-white bg-primary mb-3 py-2 px-3 lh-1">Contact Info</h4>
                        <div class="p-2 px-3 border">
                            <div class="row gy-2">
                                <div class="col-12">
                                    <span class="text-primary"><i class="fa fa-envelope me-2"></i></span>
                                    <a href="mailto::uddindipu05@gmail.com" class="text-body">
                                        uddindipu05@gmail.com</a>
                                </div>
                                <div class="col-12">
                                    <span class="text-primary"><i class="fa fa-phone me-2"></i></span>
                                    <a href="tel:01954450531" class="hov-text-primary">01954450531</a>
                                </div>
                                <div class="col-12">
                                    <span class="text-primary">
                                        <i class="fa fa-link me-2"></i></span>
                                    <a href="https://https://banglastudent.com/"
                                        class="hov-text-primary">https://banglastudent.com/</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h4 class="h4 fw-600 text-white bg-primary mb-3 py-2 px-3 lh-1">Socail Media</h4>
                        <div class="p-2 px-3 border">
                            <div class="d-flex align-items-center gap-3 justify-content-center">
                                <a href="https://{{ $institute->facebook_link ?? '' }}" target="_blank" class="hov-text-primary p-2">
                                    <i class="fa-brands fa-facebook-f fs-24"></i>
                                </a>
                                <a href="https://{{ $institute->twitter_link ?? '' }}" target="_blank" class="hov-text-primary p-2">
                                    <i class="fa-brands fa-twitter fs-24"></i>
                                </a>
                                <a href="https://{{ $institute->linkedin_link ?? '' }}" target="_blank" class="hov-text-primary p-2">
                                    <i class="fa-brands fa-linkedin-in fs-24"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="#"><img class="lazyload img-fluid" data-src="https://sc.banglastudent.com/public/images/two.png" alt="ads"/></a>
                    </div>
                    <div class="col-12">
                        <a href="#"><img class="lazyload img-fluid" data-src="https://sc.banglastudent.com/public/images/two.png" alt="ads"/></a>
                    </div>
                    <div class="col-12">
                        <a href="#"><img class="lazyload img-fluid" data-src="https://sc.banglastudent.com/public/images/two.png" alt="ads"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
