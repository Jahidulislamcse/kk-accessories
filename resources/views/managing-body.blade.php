@extends('layouts.master')

@section('title', 'Management | K&K Accessories')

@section('content')
    <section class="page-title kk-page-title" style="background-image: url({{ asset('echix/images/home-1/inner/page-title-bg.png') }});">
        <div class="auto-container">
            <h1 class="title">Management</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Management</li>
            </ul>
        </div>
    </section>

    <section class="team-wrapper kk-page-section">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title"><span>Director's Say</span></div>
                <h2 class="title">Leadership Message</h2>
            </div>
            @foreach($bodies as $index => $body)
                <div class="row g-5 align-items-center mb-70">
                    <div class="col-lg-5 {{ $index % 2 ? 'order-lg-2' : '' }}">
                        <div class="kk-card">
                            <img class="kk-card__image" style="height: 430px;" src="{{ $body->image ? asset('upload/' . $body->image) : asset('echix/images/home-1/team/team-01.jpg') }}" alt="{{ $body->director }}">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title mb-20">
                            <div class="sub-title"><span>Management</span></div>
                            <h2 class="title">{{ $body->director }}</h2>
                        </div>
                        @if($body->speech)<p>{!! nl2br(e($body->speech)) !!}</p>@endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="service-wrapper service-one section-padding section-bg-2">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title"><span>Team Structure</span></div>
                <h2 class="title">How our teams support every order</h2>
            </div>
            <div class="row g-4">
                @foreach(['Design Section', 'Production Section', 'QC Section', 'Delivery Section'] as $title)
                    <div class="col-xl-3 col-md-6">
                        <div class="kk-card">
                            <div class="kk-card__body">
                                <h3 class="kk-card__title">{{ $title }}</h3>
                                <p>Focused specialists coordinate each stage so every accessory is planned, produced, checked, and delivered with care.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
