@extends('layouts.master')

@section('title', 'Contact | K&K Accessories')

@section('content')
    <section class="page-title kk-page-title" style="background-image: url({{ asset('echix/images/home-1/inner/page-title-bg.png') }});">
        <div class="auto-container">
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>

    <section class="contact-wrapper contact-one kk-page-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-title">
                        <div class="sub-title"><span>Get In Touch</span></div>
                        <h2 class="title">Tell us what you need</h2>
                    </div>
                    @if(session('success'))<div class="kk-alert">{{ session('success') }}</div>@endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="kk-form-control" placeholder="Your Name" value="{{ old('name') }}">
                            @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="kk-form-control" placeholder="Your Email" value="{{ old('email') }}">
                            @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="kk-form-control" placeholder="Your Message">{{ old('message') }}</textarea>
                            @error('message')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <button type="submit" class="theme-btn">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="kk-card mb-4">
                        <div class="kk-card__body">
                            <h3 class="kk-card__title">Our Office</h3>
                            @if(optional($settings)->address)<p><strong>Address:</strong> {{ $settings->address }}</p>@endif
                            @if(optional($settings)->phone_number)<p><strong>Phone:</strong> {{ $settings->phone_number }}</p>@endif
                            @if(optional($settings)->contact_mail)<p><strong>Email:</strong> {{ $settings->contact_mail }}</p>@endif
                        </div>
                    </div>
                    <div class="kk-card" style="height: 420px;">
                        <iframe src="{{ $settings->google_map ?? 'https://maps.google.com' }}" width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
