@php
    $settings = \App\Models\Setting::first();
    $logo = $settings && $settings->logo ? asset('upload/' . $settings->logo) : asset('echix/images/white-logo.png');
    $company = $settings->company ?? 'K&K Accessories';
@endphp

<header class="main-header header-style-one header-1">
    <div class="auto-container">
        <div class="header-lower">
            <div class="main-box">
                <div class="nav-outer">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ $logo }}" alt="{{ $company }}" title="{{ $company }}" /></a>
                        </div>
                    </div>
                    <div class="outer-box">
                        <nav class="nav main-menu">
                            <ul class="navigation">
                                <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->routeIs('products.*') ? 'current' : '' }}"><a href="{{ route('products.user') }}">Products</a></li>
                                <li class="{{ request()->routeIs('services') ? 'current' : '' }}"><a href="{{ route('services') }}">Services</a></li>
                                <li class="{{ request()->routeIs('managing-body') ? 'current' : '' }}"><a href="{{ route('managing-body') }}">Management</a></li>
                                <li class="{{ request()->routeIs('gallery.user') ? 'current' : '' }}"><a href="{{ route('gallery.user') }}">Gallery</a></li>
                                <li class="{{ request()->routeIs('branches.user') ? 'current' : '' }}"><a href="{{ route('branches.user') }}">Factories</a></li>
                                <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="nav-right">
                        <a href="{{ route('contact') }}" class="header-btn">Let's Talk</a>
                        <div class="mobile-nav-toggler d-flex d-xl-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
            <div class="upper-box">
                <div class="nav-logo">
                    <a href="{{ route('home') }}"><img src="{{ $logo }}" alt="{{ $company }}" /></a>
                </div>
                <div class="close-btn"><i class="icon fa fa-times"></i></div>
            </div>
            <ul class="navigation clearfix"></ul>
            <ul class="contact-list-one">
                @if(optional($settings)->phone_number)
                    <li>
                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Call Now</span>
                            <a href="tel:{{ preg_replace('/\s+/', '', $settings->phone_number) }}">{{ $settings->phone_number }}</a>
                        </div>
                    </li>
                @endif
                @if(optional($settings)->contact_mail)
                    <li>
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title">Send Email</span>
                            <a href="mailto:{{ $settings->contact_mail }}">{{ $settings->contact_mail }}</a>
                        </div>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ $logo }}" alt="{{ $company }}" /></a>
                </div>
                <div class="nav-outer">
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix"></ul>
                        </div>
                    </nav>
                    <div class="mobile-nav-toggler"><span></span><span></span><span></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
