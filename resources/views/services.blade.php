@extends('layouts.master')

@section('title', 'Services | K&K Accessories')

@section('content')
    <section class="page-title kk-page-title" style="background-image: url({{ asset('echix/images/home-1/inner/page-title-bg.png') }});">
        <div class="auto-container">
            <h1 class="title">Our Services</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>

    <section class="service-wrapper service-one kk-page-section">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title"><span>What We Do</span></div>
                <h2 class="title">Accessory services for dependable production</h2>
            </div>
            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-xl-4 col-md-6">
                        <div class="kk-card">
                            <div class="kk-card__body">
                                <div class="icon mb-20">
                                    @if($service->image)
                                        <img src="{{ asset('upload/' . $service->image) }}" alt="{{ $service->heading }}" style="height: 70px; width: 70px; object-fit: contain;">
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
@endsection
