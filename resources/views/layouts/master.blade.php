<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'K&K Accessories')</title>
    <link rel="shortcut icon" href="{{ asset('echix/images/favicon.svg') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('echix/images/favicon.svg') }}" type="image/x-icon" />

    <link href="{{ asset('echix/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('echix/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('echix/css/responsive.css') }}" rel="stylesheet" />

    <style>
        :root {
            --theme-color1: #1193d4;
            --theme-color1-rgb: 17, 147, 212;
            --theme-color3: #f59e0b;
            --theme-color3-rgb: 245, 158, 11;
        }

        .main-header .logo img,
        .sticky-header .logo img,
        .mobile-menu .nav-logo img,
        .footer-one__logo img {
            max-height: 68px;
            width: auto;
        }

        .kk-page-section {
            padding: 120px 0 90px;
        }

        .kk-page-title {
            padding: 180px 0 110px;
        }

        .kk-card {
            height: 100%;
            background: #fff;
            border: 1px solid #edf0f5;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .06);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .kk-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 46px rgba(0, 0, 0, .12);
        }

        .kk-card__image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            background: #f3f6f8;
        }

        .kk-card__body {
            padding: 26px;
        }

        .kk-card__meta {
            display: block;
            margin-bottom: 8px;
            color: var(--theme-color1);
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .kk-card__title {
            margin-bottom: 12px;
            font-size: 22px;
            line-height: 1.3;
        }

        .kk-filter {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 45px;
        }

        .kk-filter button {
            border: 1px solid #dce4ec;
            border-radius: 999px;
            background: #fff;
            padding: 10px 20px;
            color: #171b24;
            font-weight: 700;
            transition: all .25s ease;
        }

        .kk-filter button.active,
        .kk-filter button:hover {
            border-color: var(--theme-color1);
            background: var(--theme-color1);
            color: #fff;
        }

        .kk-form-control {
            width: 100%;
            height: 58px;
            border: 1px solid #e4e8ef;
            border-radius: 8px;
            padding: 14px 18px;
            color: #171b24;
            background: #fff;
        }

        textarea.kk-form-control {
            min-height: 150px;
            height: auto;
        }

        .kk-alert {
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 14px 18px;
            background: #e9f9ef;
            color: #177245;
        }

        .kk-whatsapp {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 999;
        }

        .kk-whatsapp img {
            width: 72px;
            height: 72px;
            object-fit: contain;
        }

        .kk-product-detail-img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 8px;
        }

        .kk-thumb {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .kk-thumb:hover {
            border-color: var(--theme-color1);
        }

        @media (max-width: 767px) {
            .kk-page-section {
                padding: 80px 0 60px;
            }

            .kk-page-title {
                padding: 140px 0 80px;
            }

            .kk-product-detail-img {
                height: 320px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    <div class="page-wrapper">
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="K" class="letters-loading">K</span>
                    <span data-text-preloader="&" class="letters-loading">&</span>
                    <span data-text-preloader="K" class="letters-loading">K</span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-left"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-right"><div class="bg"></div></div>
                    <div class="col-3 loader-section section-right"><div class="bg"></div></div>
                </div>
            </div>
        </div>

        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

        @include('layouts.header')

        @yield('content')

        <a href="https://wa.me/8801819541258" target="_blank" class="kk-whatsapp" title="Chat on WhatsApp">
            <img src="{{ asset('backend/images/whatsapp.png') }}" alt="WhatsApp">
        </a>

        @include('layouts.footer')
    </div>

    <script src="{{ asset('echix/js/jquery.js') }}"></script>
    <script src="{{ asset('echix/js/popper.min.js') }}"></script>
    <script src="{{ asset('echix/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('echix/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('echix/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('echix/js/gsap.js') }}"></script>
    <script src="{{ asset('echix/js/gsap-scroll-to-plugin.js') }}"></script>
    <script src="{{ asset('echix/js/gsap-scroll-smoother.js') }}"></script>
    <script src="{{ asset('echix/js/gsap-scroll-trigger.js') }}"></script>
    <script src="{{ asset('echix/js/gsap-split-text.js') }}"></script>
    <script src="{{ asset('echix/js/split-type.min.js') }}"></script>
    <script src="{{ asset('echix/js/parallaxie.js') }}"></script>
    <script src="{{ asset('echix/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('echix/js/wow.js') }}"></script>
    <script src="{{ asset('echix/js/bxslider.js') }}"></script>
    <script src="{{ asset('echix/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('echix/js/knob.js') }}"></script>
    <script src="{{ asset('echix/js/appear.js') }}"></script>
    <script src="{{ asset('echix/js/swiper.min.js') }}"></script>
    <script src="{{ asset('echix/js/mixitup.js') }}"></script>
    <script src="{{ asset('echix/js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
