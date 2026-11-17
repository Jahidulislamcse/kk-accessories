@php
    $settings = \App\Models\Setting::first();
    $logo = $settings && $settings->logo ? asset('upload/' . $settings->logo) : asset('echix/images/white-logo.png');
    $company = $settings->company ?? 'K&K Accessories';
@endphp

<footer class="footer-wrapper footer-one section-bg-2">
    <div class="footer-one__bg-image bg-cover" style="background-image: url({{ asset('echix/images/home-1/footer/footer-bg.png') }});">
        <img class="shape-1" src="{{ asset('echix/images/home-1/footer/shape%2001.png') }}" alt="" />
        <img class="shape-2" src="{{ asset('echix/images/home-1/footer/shape%2002.png') }}" alt="" />
        <div class="container">
            <div class="footer-one__top">
                <div class="footer-one__top-inner">
                    <div class="left-text">
                        <h2>Need custom accessories?</h2>
                    </div>
                    <div class="right">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="email">
                            <span>Email Us</span>
                            <a href="mailto:{{ optional($settings)->contact_mail ?? 'info@example.com' }}">{{ optional($settings)->contact_mail ?? 'info@example.com' }}</a>
                        </div>
                    </div>
                    <div class="circle-box"></div>
                </div>
            </div>
            <div class="footer-one__widget-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="footer-one__logo style-1 me-xl-5">
                            <a href="{{ route('home') }}"><img src="{{ $logo }}" alt="{{ $company }}"></a>
                            <p>{{ $company }} delivers apparel accessories with dependable service, quality production, and responsive support.</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Links</h4>
                            <ul class="usefull-link">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('products.user') }}">Products</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Explore</h4>
                            <ul class="usefull-link">
                                <li><a href="{{ route('managing-body') }}">Management</a></li>
                                <li><a href="{{ route('gallery.user') }}">Gallery</a></li>
                                <li><a href="{{ route('branches.user') }}">Factories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="footer-widget newsletter">
                            <h4 class="widget-title">Contact</h4>
                            @if(optional($settings)->address)<p>{{ $settings->address }}</p>@endif
                            @if(optional($settings)->phone_number)<p><a href="tel:{{ preg_replace('/\s+/', '', $settings->phone_number) }}">{{ $settings->phone_number }}</a></p>@endif
                            <div class="footer-social-icon">
                                @if(optional($settings)->facebook)<a href="{{ $settings->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="content">
                    <p>Copyright &copy; {{ date('Y') }} {{ $company }}. Developed & Maintained By Jahidul Islam.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
