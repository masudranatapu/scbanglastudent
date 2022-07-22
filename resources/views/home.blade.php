@extends('frontend.master')

@section('content')
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                @include('frontend.partials.flash')

                <div class="nav-area d-lg-block d-none">
                    <div class="bg-white shadow-sm rounded">
                        <div class="p-4 mb-3 text-center bg-primary text-white position-relative rounded-top">
                            <div class="avatar mb-3">
                                <img class="lazyload border-2 border img-fit rounded-circle"
                                    data-src="../assets/images/avatar/avatar-place.png" width="60" height="60"
                                    alt="Profile Image">
                            </div>
                            <h4 class="fs-16 mb-1 fw-600">{{ Auth::user()->name ?? '' }}</h4>
                        </div>
                        <div>
                            <nav>
                                <ul class="metismenu list-unstyled mb-0" id="metismenu">
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom"
                                            href="{{ url('home') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                                <path fill-rule="evenodd"
                                                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                            </svg>
                                            <span class="flex-grow-1">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom"
                                            href="{{route('slider.index')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                <path
                                                    d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                                            </svg>
                                            <span class="flex-grow-1">Slider</span>
                                        </a>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                                <path
                                                    d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                                            </svg>
                                            <span class="flex-grow-1">Recent Event</span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1">
                                                <a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('recent_event.create')}}">Create
                                                    Event</a>
                                            </li>
                                            <li class="lh-1">
                                                <a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('recent_event.index')}}">All
                                                    Event</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                                            </svg>
                                            <span class="flex-grow-1">Video Gallery</span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('video_gallery.create')}}"> Create
                                                    Gallery</a></li>
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('video_gallery.index')}}"> All
                                                    Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom"
                                            href="{{route('widget.index')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                                            </svg>
                                            <span class="flex-grow-1">Widget</span>
                                        </a>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-stickies-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5z" />
                                                <path
                                                    d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177V10.5z" />
                                            </svg>
                                            <span class="flex-grow-1">Post</span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('post.create')}}">Create Post</a>
                                            </li>
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('post.pending_post')}}">Pending
                                                    Post</a></li>
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('post.index')}}">All Approved
                                                    Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <span class="flex-grow-1"> Why Choose Us</span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('why_choose_us.create') }}">Create</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                                <path
                                                    d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                                            </svg>
                                            <span class="flex-grow-1">Update News </span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('update_news.create') }}">News</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                            </svg>
                                            <span class="flex-grow-1">Notice Board </span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('notice_board.create') }}">Notice</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                <path
                                                    d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                            </svg>
                                            <span class="flex-grow-1">Image Gallery </span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('image_gallery.create') }}">Create
                                                    Gallery</a></li>
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('image_gallery.index') }}">Gallery
                                                    List</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                            </svg>
                                            <span class="flex-grow-1">Approved </span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('approved_by.create') }}">Approved
                                                    By</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom"
                                            href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                            </svg>
                                            <span class="flex-grow-1">{{ __('Logout') }}</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="mb-3 d-lg-none d-block">
                    <button type="button" class="btn btn-primary lh-1" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileNav" aria-controls="mobileNav">
                        <i class="fa-solid fa-bars fa-2x"></i>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileNav" aria-labelledby="mobileNav">
                        <div class="offcanvas-header bg-primary text-white">
                            <h5 class="offcanvas-title">
                                <a href="{{url('/')}}" class="d-block"><img class="lazyload logo"
                                        data-src="{{asset('public/uploads/logo.png')}}" width="180" alt="Logo"></a>
                            </h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <nav>
                                <ul class="metismenu list-unstyled mb-0" id="metismenu2">
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom"
                                            href="{{ url('home') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                                <path fill-rule="evenodd"
                                                    d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                            </svg>
                                            <span class="flex-grow-1">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom"
                                            href="{{route('slider.index')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                <path
                                                    d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                                            </svg>
                                            <span class="flex-grow-1">Slider</span>
                                        </a>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                                <path
                                                    d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                                            </svg>
                                            <span class="flex-grow-1">Recent Event</span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1">
                                                <a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('recent_event.create')}}">Create
                                                    Event</a>
                                            </li>
                                            <li class="lh-1">
                                                <a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('recent_event.index')}}">All
                                                    Event</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z" />
                                            </svg>
                                            <span class="flex-grow-1">Video Gallery</span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('video_gallery.create')}}"> Create
                                                    Gallery</a></li>
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('video_gallery.index')}}"> All
                                                    Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom"
                                            href="{{route('widget.index')}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                                            </svg>
                                            <span class="flex-grow-1">Widget</span>
                                        </a>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-stickies-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5z" />
                                                <path
                                                    d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177V10.5z" />
                                            </svg>
                                            <span class="flex-grow-1">Post</span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('post.create')}}">Create Post</a>
                                            </li>
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('post.pending_post')}}">Pending
                                                    Post</a></li>
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{route('post.index')}}">All Approved
                                                    Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <span class="flex-grow-1"> Why Choose Us</span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('why_choose_us.create') }}">Create</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                                                <path
                                                    d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                                            </svg>
                                            <span class="flex-grow-1">Update News </span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('update_news.create') }}">News</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
                                            </svg>
                                            <span class="flex-grow-1">Notice Board </span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('notice_board.create') }}">Notice</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                                <path
                                                    d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                                            </svg>
                                            <span class="flex-grow-1">Image Gallery </span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('image_gallery.create') }}">Create
                                                    Gallery</a></li>
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('image_gallery.index') }}">Gallery
                                                    List</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom has-arrow"
                                            href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                            </svg>
                                            <span class="flex-grow-1">Approved </span>
                                        </a>
                                        <ul class="list-unstyled mb-0">
                                            <li class="lh-1"><a class="px-3 py-2 d-flex border-bottom ps-4"
                                                    href="{{ route('approved_by.create') }}">Approved
                                                    By</a></li>
                                        </ul>
                                    </li>
                                    <li class="lh-1">
                                        <a class="d-flex align-items-center gap-2 px-3 py-2 border-bottom"
                                            href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                            </svg>
                                            <span class="flex-grow-1">{{ __('Logout') }}</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                @yield('admin_content')
            </div>
        </div>
    </div>
</section>

@endsection
