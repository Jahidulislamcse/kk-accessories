@extends('layouts.master')

@section('title', 'Gallery | K&K Accessories')

@section('content')
    <section class="page-title kk-page-title" style="background-image: url({{ asset('echix/images/home-1/inner/page-title-bg.png') }});">
        <div class="auto-container">
            <h1 class="title">Gallery</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </section>

    <section class="kk-page-section">
        <div class="container">
            <div class="section-title text-center">
                <div class="sub-title"><span>Gallery</span></div>
                <h2 class="title">A look at our work</h2>
            </div>
            @if($galleries->count())
                <div class="row g-4">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-4 col-md-6">
                            <div class="kk-card">
                                <a data-fancybox="gallery" href="{{ asset('upload/' . $gallery->image) }}">
                                    <img class="kk-card__image" src="{{ asset('upload/' . $gallery->image) }}" alt="{{ $gallery->description ?? 'Gallery Image' }}">
                                </a>
                                <div class="kk-card__body">
                                    <p>{{ $gallery->description ?? 'K&K Accessories' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">No images available in the gallery.</p>
            @endif
        </div>
    </section>
@endsection
