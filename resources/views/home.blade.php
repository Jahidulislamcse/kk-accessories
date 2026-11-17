@extends('layouts.master')

@section('title', 'K&K Accessories')

@section('content')

    <section class="relative h-[60vh] min-h-[300px] flex items-center justify-center text-white bg-amber-50">

        @if ($sliders->count())
            <div class="absolute inset-0 bg-cover bg-center ">
                <div class="swiper-container h-full w-full">
                    <div class="swiper-wrapper">
                        @foreach ($sliders as $slider)
                            <div class="swiper-slide h-full w-full bg-cover bg-center relative"
                                style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('{{ asset('upload/' . $slider->image_path) }}');">

                                <div
                                    class="absolute inset-0 bg-black/30 flex flex-col items-center justify-center text-center px-6">
                                    <h1
                                        class="text-4xl md:text-6xl font-bold leading-tight tracking-tight mb-4 animate-fade-in-down">
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
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('{{ asset('default-hero.jpg') }}')">
            </div>
        @endif
        <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 z-10 flex gap-4">
            <a href="{{ route('products.user') }}">
                <button
                    class="inline-flex items-center justify-center rounded-md bg-amber-500 px-8 py-3 text-base font-semibold text-white shadow-lg transition-all hover:bg-opacity-90 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[var(--primary-color)] focus:ring-offset-2 focus:ring-offset-gray-900">
                    Products
                </button>
            </a>

            <a href="{{ route('contact') }}"
                class="inline-flex items-center justify-center rounded-md border border-gray-300 bg-white/10 backdrop-blur-sm px-8 py-3 text-base font-semibold text-white shadow-lg transition-all hover:bg-white/20 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900">
                Contact
            </a>
        </div>
    </section>

    <section id="brands" class="py-6">
        <div class="container mx-auto px-6">

            <h2 class="text-2xl md:text-3xl font-bold text-amber-500 mb-4 text-center drop-shadow-lg">
                Satisfied Clients
            </h2>

            @if ($brands->count())
                <div class="swiper-container-brands">
                    <div class="swiper-wrapper">
                        @foreach ($brands as $index => $brand)
                            <div class="swiper-slide flex justify-center items-center brand-slide">
                                <div
                                    class="flex justify-center items-center 
                                        h-24 w-30 sm:h-24 sm:w-40 md:h-30 md:w-52">
                                    @if ($brand->image)
                                        <img src="{{ asset('upload/' . $brand->image) }}" alt="{{ $brand->name }}"
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

    <section id="services" class="py-10" style="background-image: url('{{ asset('upload/Background/about.jpg') }}');">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-amber-500 mb-12 text-center drop-shadow-lg">
                    Our Services
                </h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div
                        class="group bg-white p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 text-center">
                        <div
                            class="flex items-center justify-center h-16 w-16 rounded-full bg-amber-500 text-white mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            @if ($service->image)
                                <img src="{{ asset('upload/' . $service->image) }}" alt="{{ $service->heading }}"
                                    class="h-12 w-12 object-contain mx-auto">
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

    <section id="home-categories" class="py-20" style="margin-top:50px; ">
        <div class="container mx-auto px-6">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-extrabold text-amber-500 mb-12 drop-shadow-lg">
                    Our Products
                </h2>
            </div>
    
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($allCategories as $cat)
                    <div class="flex flex-col bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl group relative">
                        <div class="relative flex-shrink-0">
                            @if($cat->image)
                                <img alt="{{ $cat->name }}" class="h-48 w-full object-cover" src="{{ asset('upload/' . $cat->image) }}">
                            @else
                                <img alt="{{ $cat->name }}" class="h-48 w-full object-cover" src="https://via.placeholder.com/400x200?text=No+Image">
                            @endif
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/25">
                                <a href="{{ route('products.user') }}" class="px-6 py-2 border border-white text-white font-medium rounded-md transition-transform duration-200 transform hover:scale-105">
                                    View Product
                                </a>
                            </div>
                        </div>
                        <div class="flex-1 p-4 flex flex-col justify-between">
                            <h3 class="mt-2 text-xl font-semibold text-gray-900 text-center">{{ $cat->name }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section id="about" class="py-20 about section" >
        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" style="text-align: justify;">
                   
                    <div class="position-relative mb-4">
                        <img src="{{ asset('template/img/pexels.jpg') }}" class="img-fluid rounded-4" alt="">
                        <a href="#" class="pulsating-play-btn" data-bs-toggle="modal" data-bs-target="#videoModal"></a>
                    </div>
                    <h3>About Us</h3>

                    <p>
                        @if (!empty($settings->about_desc))
                            {!! $settings->about_desc !!}
                        @endif
                    </p>
                   
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5" style="text-align: justify;">
                        <h3>Mission and Vision</h3>
                        <p >
                            @if (!empty($settings->mission_vision))
                                {!! $settings->mission_vision !!}
                            @endif
                        </p>

                         <img src="{{ asset('template/img/aboutx.jpeg') }}" class="img-fluid rounded-4 mt-4" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>

        
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
              <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                  <iframe id="videoFrame" 
                          src="" 
                          title="YouTube video"
                          allow="autoplay; encrypted-media"
                          allowfullscreen>
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>


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
        document.addEventListener('DOMContentLoaded', function() {
            var videoSrc = "https://www.youtube.com/embed/AVnJSxvFJSM?autoplay=1";
            var videoFrame = document.getElementById("videoFrame");
        
            var modal = document.getElementById('videoModal');
        
            modal.addEventListener('shown.bs.modal', function () {
                videoFrame.src = videoSrc;
            });
        
            modal.addEventListener('hidden.bs.modal', function () {
                videoFrame.src = "";
            });
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
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 30
                },
            },
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.category-tab');
            const productGrid = document.getElementById('productGrid');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.remove('active'));
                    tab.classList.add('active');

                    const category = tab.dataset.category;

                    fetch(`{{ route('products.user') }}?category=${category}`, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(res => res.json())
                        .then(data => productGrid.innerHTML = data.html)
                        .catch(err => console.error(err));
                });
            });
        });
    </script>

    <style>
        .card-container {
            margin-top: 50px;
            margin-bottom: 80px;
        }

        .category-tab {
            padding: 6px 20px 0 20px;
            border-radius: 9999px;
            border: 2px solid #1193d4;
            background: white;
            color: #1193d4;
            font-weight: 600;
            transition: all 0.2s ease-in-out;
        }

        .category-tab:hover,
        .category-tab.active {
            background: #1193d4;
            color: white;
        }

        html {
            scroll-behavior: smooth;
        }

        .swiper-container-brands {
            height: 120px;
            overflow: hidden;
        }

        .brand-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .text-blu {
            color: #1193D4;
        }
        .justified-text {
            text-align: justify;
        }
    </style>


@endsection
