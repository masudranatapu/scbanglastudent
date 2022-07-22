<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banglastudent</title>
    <link rel="shortcut icon" href="assets/images/logo/logo.png" type="image/x-icon" />
    @include('frontend.partials.styles')
    @php
    $ads = App\Models\Ads::findOrFail(1)->first();
    @endphp
</head>

<body @if(Route::is('users') ) {onload="showPopup();"} @endif >

    <div class="promo-top position-relative" id="promo">
        <div class="container">
            <div class="inner text-center">
                    <a href="#" class="d-block py-2" target="_blank">
                        <img class="lazyload img-fluid" data-src="{{asset('public/uploads/promo.png')}}"
                            alt="Video Resume is the new feature of Bdjobs">
                    </a>
                </div>
                <div class="absolute-top-right h-100 d-flex align-items-center">
                    <a href="#" class="btn" onclick="hidePromo();">
                        <span class="sr-only">Close</span>
                        <i class="fa-solid fa-xmark fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="promo-minimized" id="promoTrigger" style="display: none;">
        <a href="#" onclick="showPromo();">
            <span class="sr-only">Expand</span>
            <i class="fa-solid fa-chevron-down text-white"></i>
        </a>
    </div>
    <script>
        function showPromo() {
            document.getElementById('promo').style.display = 'block';
            document.getElementById('promoTrigger').style.display = 'none';
        }

        function hidePromo() {
            document.getElementById('promo').style.display = 'none';
            document.getElementById('promoTrigger').style.display = 'block';
        }

        // Allow deep linking to the promo
        if (window.location.hash == '#promo') {
            showPromo()
        }

    </script>

    <div class="topbar bg-primary py-2">
        <div class="container">
            <div class="d-flex justify-content-md-between justify-content-center">
                <div class="flex-shrink-0 d-lg-block d-none">
                    <ul class="list-inline fs-13 text-white mb-0">
                        <li class="list-inline-item me-3">
                            <a href="#" class="hov-text-secondary"><i class="pe-1 fa fa-phone fs-12"></i>
                                123-456-789</a> </li>
                        <li class="list-inline-item me-3">
                            <a href="#" class="hov-text-secondary"><i
                                    class="pe-1 fa-solid fa-envelope-circle-check"></i>contact@yourdomain.com</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-shrink-0">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 d-md-block d-none">
                            <ul class="mb-0 list-inline text-white">
                                <li class="list-inline-item"><a class="hov-text-secondary px-1" href="#"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="hov-text-secondary px-1" href="#"><i
                                            class="fa-brands fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hov-text-secondary px-1" href="#"><i
                                            class="fa-brands fa-google-plus-g"></i></a>
                                </li>
                                <li class="list-inline-item"><a class="hov-text-secondary px-1" href="#"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hov-text-secondary px-1" href="#"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-shrink-0">
                            <ul class="list-unstyled mb-0 text-white ps-4">
                                <li class="list-inline-item me-3">
                                    <a href="{{url('/login')}}" class="hov-text-secondary"><i
                                            class="fa-solid fa-user pe-1"></i>
                                        Login</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{url('/register')}}" class="hov-text-secondary">
                                        <i class="fa fa-edit pe-1"></i>Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="sticky-top bg-white shadow-sm">
        <div class="container">
            <div class="d-flex align-items-center gap-4 justify-content-between">
                <div class="flex-shrink-0">
                    <a href="{{url('/')}}" class="d-block py-3"><img class="lazyload logo"
                            data-src="{{asset('public/uploads/logo.png')}}" width="180" alt="Logo"></a>
                </div>
                <div class="flex-grow-1 d-lg-block d-none">
                    <div class="row g-2">
                        <div class="col">
                            <a href="#">
                                <img class="lazyload img-fluid" data-src="{{asset('public/uploads/banner1.webp')}}">
                            </a>
                        </div>
                        <div class="col">
                            <a href="#">
                                <img class="lazyload img-fluid" data-src="{{asset('public/uploads/banner1.webp')}}">
                            </a>
                        </div>
                        <div class="col">
                            <a href="#">
                                <img class="lazyload img-fluid" data-src="{{asset('public/uploads/banner1.webp')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex-shrink-0">
                    <a href="{{route('post.create')}}" class="btn btn-primary">পোস্ট করুন</a>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="bg-secondary text-white">
        <div class="container">
            <div class="py-3">
                <div class="row g-2">
                    <div class="col-lg-6 text-lg-start text-center">
                        <p class="mb-0 fs-15">
                            Copyright © 2011-2022. <a class="fw-500 text-primary" href="https://banglastudent.com/">banglastudent.com</a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 text-lg-end text-center">
                        <p class="mb-0 fs-15">
                            Developed by
                            <a class="fw-500 text-primary" href="https://rodh-it.com/"
                                target="_blank">RODH-IT</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <button class="scrollTop"><i class="fa-solid fa-arrow-up-long"></i></button>
    @include('frontend.partials.scripts')
    @stack('scripts')
</body>

</html>
