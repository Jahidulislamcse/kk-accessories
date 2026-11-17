@extends('layouts.master')

@section('title', 'Factories | K&K Accessories')

@section('content')
    <section class="page-title kk-page-title" style="background-image: url({{ asset('echix/images/home-1/inner/page-title-bg.png') }});">
        <div class="auto-container">
            <h1 class="title">{{ $setting->branches_header ?? 'Factories' }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Factories</li>
            </ul>
        </div>
    </section>

    <section class="kk-page-section">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title"><span>Our Network</span></div>
                <h2 class="title">{{ $setting->branches_header ?? 'Our Factories' }}</h2>
                @if(!empty($setting->branches_desc))<p>{{ $setting->branches_desc }}</p>@endif
            </div>
            <div class="row g-4">
                @foreach($branches as $branch)
                    <div class="col-xl-4 col-md-6">
                        <div class="kk-card">
                            <img class="kk-card__image" src="{{ $branch->image ? asset('upload/' . $branch->image) : asset('echix/images/home-1/case/case-01.jpg') }}" alt="{{ $branch->name }}">
                            <div class="kk-card__body">
                                <span class="kk-card__meta">{{ $branch->address ?? 'Location' }}</span>
                                <h3 class="kk-card__title">{{ $branch->name }}</h3>
                                @if(!empty($branch->phone))<p>Phone: {{ $branch->phone }}</p>@endif
                                @if(!empty($branch->email))<p>Email: {{ $branch->email }}</p>@endif
                                @if(!empty($branch->link))
                                    <a href="{{ $branch->link }}" target="_blank" rel="noopener noreferrer" class="theme-btn mt-15">Visit Branch</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
