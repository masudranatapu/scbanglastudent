@extends('home')
@section('admin_content')
<div class="col-12">
    @include('frontend.partials.flash')
    <div class="row g-2">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
            <div
                class="rounded shadow-sm hov-shadow-md bg-white p-4 has-transition hov-translate--3px position-relative text-center h-100">
                <a href="{{route('post.create')}}" class="absolute-full"></a>
                <div class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="40" fill="currentColor">
                        <path
                            d="M480 32H128C110.3 32 96 46.33 96 64v336C96 408.8 88.84 416 80 416S64 408.8 64 400V96H32C14.33 96 0 110.3 0 128v288c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V64C512 46.33 497.7 32 480 32zM272 416h-96C167.2 416 160 408.8 160 400C160 391.2 167.2 384 176 384h96c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 320h-96C167.2 320 160 312.8 160 304C160 295.2 167.2 288 176 288h96C280.8 288 288 295.2 288 304C288 312.8 280.8 320 272 320zM432 416h-96c-8.836 0-16-7.164-16-16c0-8.838 7.164-16 16-16h96c8.836 0 16 7.162 16 16C448 408.8 440.8 416 432 416zM432 320h-96C327.2 320 320 312.8 320 304C320 295.2 327.2 288 336 288h96C440.8 288 448 295.2 448 304C448 312.8 440.8 320 432 320zM448 208C448 216.8 440.8 224 432 224h-256C167.2 224 160 216.8 160 208v-96C160 103.2 167.2 96 176 96h256C440.8 96 448 103.2 448 112V208z" />
                        </svg>
                </div>
                <h5 class="h5 mb-0 fw-600 text-secondary">CREATE POST</h5>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
            <div
                class="rounded shadow-sm hov-shadow-md bg-white p-4 has-transition hov-translate--3px position-relative text-center h-100">
                <a href="{{route('slider.index')}}" class="absolute-full"></a>
                <div class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"></path>
                    </svg>
                </div>
                <h5 class="h5 mb-0 fw-600 text-secondary">ADD SLIDER</h5>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
            <div
                class="rounded shadow-sm hov-shadow-md bg-white p-4 has-transition hov-translate--3px position-relative text-center h-100">
                <a href="{{route('video_gallery.create')}}" class="absolute-full"></a>
                <div class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" fill="currentColor" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                        <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"></path>
                    </svg>
                </div>
                <h5 class="h5 mb-0 fw-600 text-secondary">ADD VIDEO</h5>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
            <div
                class="rounded shadow-sm hov-shadow-md bg-white p-4 has-transition hov-translate--3px position-relative text-center h-100">
                <a href="{{route('post.create')}}" class="absolute-full"></a>
                <div class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="40" fill="currentColor">
                        <path
                            d="M480 32H128C110.3 32 96 46.33 96 64v336C96 408.8 88.84 416 80 416S64 408.8 64 400V96H32C14.33 96 0 110.3 0 128v288c0 35.35 28.65 64 64 64h384c35.35 0 64-28.65 64-64V64C512 46.33 497.7 32 480 32zM272 416h-96C167.2 416 160 408.8 160 400C160 391.2 167.2 384 176 384h96c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 320h-96C167.2 320 160 312.8 160 304C160 295.2 167.2 288 176 288h96C280.8 288 288 295.2 288 304C288 312.8 280.8 320 272 320zM432 416h-96c-8.836 0-16-7.164-16-16c0-8.838 7.164-16 16-16h96c8.836 0 16 7.162 16 16C448 408.8 440.8 416 432 416zM432 320h-96C327.2 320 320 312.8 320 304C320 295.2 327.2 288 336 288h96C440.8 288 448 295.2 448 304C448 312.8 440.8 320 432 320zM448 208C448 216.8 440.8 224 432 224h-256C167.2 224 160 216.8 160 208v-96C160 103.2 167.2 96 176 96h256C440.8 96 448 103.2 448 112V208z" />
                        </svg>
                </div>
                <h5 class="h5 mb-0 fw-600 text-secondary">CREATE POST</h5>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
            <div
                class="rounded shadow-sm hov-shadow-md bg-white p-4 has-transition hov-translate--3px position-relative text-center h-100">
                <a href="{{route('slider.index')}}" class="absolute-full"></a>
                <div class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"></path>
                    </svg>
                </div>
                <h5 class="h5 mb-0 fw-600 text-secondary">ADD SLIDER</h5>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6">
            <div
                class="rounded shadow-sm hov-shadow-md bg-white p-4 has-transition hov-translate--3px position-relative text-center h-100">
                <a href="{{route('video_gallery.create')}}" class="absolute-full"></a>
                <div class="mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" fill="currentColor" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                        <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"></path>
                    </svg>
                </div>
                <h5 class="h5 mb-0 fw-600 text-secondary">ADD VIDEO</h5>
            </div>
        </div>
    </div>
</div>
@endsection
