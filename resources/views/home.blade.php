@extends('layouts.master')

@section('title', 'Home')

@section('content')

<section class="relative h-[90vh] min-h-[400px] flex items-center justify-center text-white">

    @if($sliders->count())
    <div class="absolute inset-0 bg-cover bg-center ">
        <div class="swiper-container h-full w-full">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide h-full w-full bg-cover bg-center relative"
                    style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('{{ asset('upload/' . $slider->image_path) }}');">

                    <div class="absolute inset-0 bg-black/30 flex flex-col items-center justify-center text-center px-6">
                        <h1 class="text-4xl md:text-6xl font-bold leading-tight tracking-tight mb-4 animate-fade-in-down">
                            {{ $slider->heading ?? '' }}
                        </h1>
                        <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-200 mb-8 animate-fade-in-up">
                            {!! $slider->desc ?? '' !!}
                        </p>
                    </div>

                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    @else
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('{{ asset('default-hero.jpg') }}')"></div>
    @endif
    <div class="absolute bottom-32 left-1/2 transform -translate-x-1/2 z-10 flex gap-4">
        <a href="{{ route('products.user') }}">
            <button class="inline-flex items-center justify-center rounded-md bg-amber-500 px-8 py-3 text-base font-semibold text-white shadow-lg transition-all hover:bg-opacity-90 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:ring-offset-2 focus:ring-offset-gray-900">
                Products
            </button>
        </a>

        <a href="{{ route('contact') }}"
            class="inline-flex items-center justify-center rounded-md border border-gray-300 bg-white/10 backdrop-blur-sm px-8 py-3 text-base font-semibold text-white shadow-lg transition-all hover:bg-white/20 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900">
            Contact
        </a>
    </div>
</section>

<section id="brands" class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">
       
        <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-12 text-center drop-shadow-lg">
            Satisfied Clients
        </h2>
        
        @if($brands->count())
            <div class="swiper-container-brands">
                <div class="swiper-wrapper">
                    @foreach($brands as $index => $brand)
                        <div class="swiper-slide flex justify-center items-center brand-slide">
                            <div class="flex justify-center items-center 
                                        h-24 w-30 sm:h-24 sm:w-40 md:h-30 md:w-52">
                                @if($brand->image)
                                    <img src="{{ asset('upload/'.$brand->image) }}" 
                                        alt="{{ $brand->name }}" 
                                        class="object-contain h-full w-full">
                                @else
                                    <span class="text-gray-400">No Image</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center text-gray-500">No brands to display.</p>
        @endif
    </div>
</section>

<section id="services" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-12 text-center drop-shadow-lg">
                Our Services
            </h2>
            <p class="text-lg text-gray-600 mt-2">Pioneering advancements from discovery to delivery.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $service)
                <div class="group bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 text-center">
                    <div class="flex items-center justify-center h-16 w-16 rounded-full bg-amber-500 text-white mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        @if($service->image)
                            <img src="{{ asset('upload/'.$service->image) }}" alt="{{ $service->heading }}" class="h-12 w-12 object-contain mx-auto">
                        @else
                            <span class="material-symbols-outlined text-3xl">science</span>
                        @endif
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $service->heading }}</h3>
                    <p class="text-gray-600">{{ $service->desc }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="about-mission" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- About Us Card -->
            <div class="bg-white p-10 rounded-xl shadow-lg transform ">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-12 text-center drop-shadow-lg">
                    About Us
                </h2>
                <div class="text-gray-700 text-lg leading-relaxed">
                    @if(!empty($settings->about_desc))
                        {!! $settings->about_desc !!} 
                    @endif
                </div>
            </div>

            <!-- Mission & Vision Card -->
            <div class="bg-white p-10 rounded-xl shadow-lg transform ">
                 <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-12 text-center drop-shadow-lg">
                   Mission & Vision
                </h2>
                <div class="text-gray-700 text-lg leading-relaxed">
                    @if(!empty($settings->mission_vision))
                        {!! $settings->mission_vision !!} 
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        speed: 1500,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
    });
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#about_desc'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    const swiperBrands = new Swiper('.swiper-container-brands', {
        loop: true,
        slidesPerView: 4, 
        spaceBetween: 30,
        speed: 2000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        freeMode: true,
        freeModeMomentum: false,
        breakpoints: {
            320: { slidesPerView: 2, spaceBetween: 10 },   
            640: { slidesPerView: 3, spaceBetween: 20 },  
            1024: { slidesPerView: 5, spaceBetween: 30 },  
        },
    });
</script>


<style>
    html {
        scroll-behavior: smooth;
    }

</style>

@endsection