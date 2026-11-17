@extends('layouts.master')

@section('title', 'K&K Accessories')

@section('content')
    <section class="banner-wrapper banner-one">
        <div class="banner-one__bg" style="background-image: url({{ asset('echix/images/home-1/hero/hero-01.jpg') }});"></div>
        <div class="banner-one__shape-1">
            <img src="{{ asset('echix/images/home-1/hero/shape-01.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="banner-one__content">
                        <div class="section-title mb-25">
                            <div class="sub-title"><span>K&K Accessories</span></div>
                            <h1 class="title">{{ optional($sliders->first())->heading ?? optional($settings)->company ?? 'K&K Accessories' }}</h1>
                        </div>
                        <p>{!! optional($sliders->first())->desc ?? 'Quality apparel accessories, custom production, and dependable delivery for growing brands.' !!}</p>
                        <div class="btn-box mt-35">
                            <a href="{{ route('products.user') }}" class="theme-btn">View Products</a>
                            <a href="{{ route('contact') }}" class="theme-btn style-2 ms-2">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="banner-one__image">
                        @php $heroImage = optional($sliders->first())->image_path; @endphp
                        <img src="{{ $heroImage ? asset('upload/' . $heroImage) : asset('echix/images/home-1/about/about-image-01.jpg') }}" alt="K&K Accessories">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients-wrapper section-padding">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title"><span>Satisfied Clients</span></div>
                <h2 class="title">Brands We Serve</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @forelse($brands as $brand)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="kk-card d-flex align-items-center justify-content-center p-4">
                            @if($brand->image)
                                <img src="{{ asset('upload/' . $brand->image) }}" alt="{{ $brand->name }}" style="max-height: 80px; object-fit: contain;">
                            @else
                                <strong>{{ $brand->name }}</strong>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center"><p>No brands to display.</p></div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="service-wrapper service-one section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title"><span>Our Services</span></div>
                <h2 class="title">Accessory Solutions Built For Production</h2>
            </div>
            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-xl-4 col-md-6">
                        <div class="kk-card">
                            <div class="kk-card__body">
                                <div class="icon mb-20">
                                    @if($service->image)
                                        <img src="{{ asset('upload/' . $service->image) }}" alt="{{ $service->heading }}" style="height: 64px; width: 64px; object-fit: contain;">
                                    @else
                                        <i class="flaticon-technology"></i>
                                    @endif
                                </div>
                                <h3 class="kk-card__title">{{ $service->heading }}</h3>
                                <p>{{ $service->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="project-wrapper section-padding section-bg-2">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title"><span>Products</span></div>
                <h2 class="title">Explore Our Product Categories</h2>
            </div>
            <div class="row g-4">
                @foreach($allCategories as $cat)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="kk-card">
                            <a href="{{ route('products.user') }}">
                                <img class="kk-card__image" src="{{ $cat->image ? asset('upload/' . $cat->image) : asset('echix/images/home-1/inner/products/1.jpg') }}" alt="{{ $cat->name }}">
                            </a>
                            <div class="kk-card__body">
                                <h3 class="kk-card__title"><a href="{{ route('products.user') }}">{{ $cat->name }}</a></h3>
                                <a href="{{ route('products.user') }}" class="theme-btn">View Products</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-wrapper about-one section-padding">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-one__image">
                        <img src="{{ asset('echix/images/home-1/about/about-image-01.jpg') }}" alt="About K&K Accessories">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <div class="sub-title"><span>About Us</span></div>
                        <h2 class="title">Reliable accessories partner for apparel businesses</h2>
                    </div>
                    <p>{!! optional($settings)->about_desc ?? 'We support brands with design-aware accessory production, careful quality control, and responsive delivery.' !!}</p>
                    <div class="section-title mt-35">
                        <div class="sub-title"><span>Mission & Vision</span></div>
                    </div>
                    <p>{!! optional($settings)->mission_vision ?? 'Our mission is to make accessory sourcing easier, faster, and more dependable.' !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
