@extends('layouts.master')

@section('title', 'K&K Accessories | Leading Garment Accessories Manufacturer')

@section('content')

    <!-- ==================== HERO SLIDER SECTION ==================== -->
    <section class="relative bg-slate-950 text-white overflow-hidden">
        @if ($sliders->count())
            <div class="swiper swiper-hero w-full h-[75vh] min-h-[550px] max-h-[850px]">
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        <div class="swiper-slide relative flex items-center">
                            <!-- Background Image with Zoom & Dark Gradient Overlay -->
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 scale-100"
                                style="background-image: url('{{ asset('upload/' . $slider->image_path) }}');">
                            </div>
                            <!-- Radial & Linear Gradient Overlay for High Contrast & Modern Feel -->
                            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/75 to-slate-950/30"></div>
                            <div class="absolute inset-0 bg-radial-at-c from-transparent via-transparent to-slate-950/60"></div>

                            <!-- Content Container -->
                            <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-12">
                                <div class="max-w-3xl">
                                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs sm:text-sm font-semibold tracking-wide uppercase mb-6 backdrop-blur-md">
                                        <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                                        <span>Premier Garment Accessories</span>
                                    </div>

                                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold font-heading text-white tracking-tight leading-[1.15] mb-6">
                                        {{ $slider->heading ?? 'Precision-Engineered Garment Trims & Accessories' }}
                                    </h1>

                                    @if(!empty($slider->desc))
                                        <div class="text-base sm:text-lg md:text-xl text-slate-300 font-normal leading-relaxed mb-8 max-w-2xl">
                                            {!! $slider->desc !!}
                                        </div>
                                    @endif

                                    <div class="flex flex-wrap items-center gap-4">
                                        <a href="{{ route('products.user') }}"
                                           class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-sm sm:text-base shadow-lg shadow-amber-500/25 transition-all duration-200 transform hover:-translate-y-0.5">
                                            <span>Explore Products</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                        </a>

                                        <a href="{{ route('contact') }}"
                                           class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-white/10 hover:bg-white/15 text-white font-semibold text-sm sm:text-base border border-white/20 backdrop-blur-md transition-all duration-200 transform hover:-translate-y-0.5">
                                            <span>Request a Quote</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Swiper Navigation Controls -->
                <div class="swiper-button-prev !hidden md:!flex !w-12 !h-12 !text-white !bg-slate-900/40 hover:!bg-amber-500 !backdrop-blur-md !rounded-xl !border !border-white/15 transition-all !left-6 after:!text-lg"></div>
                <div class="swiper-button-next !hidden md:!flex !w-12 !h-12 !text-white !bg-slate-900/40 hover:!bg-amber-500 !backdrop-blur-md !rounded-xl !border !border-white/15 transition-all !right-6 after:!text-lg"></div>
                <div class="swiper-pagination !bottom-8"></div>
            </div>
        @else
            <!-- Fallback Static Hero -->
            <div class="relative flex items-center h-[70vh] min-h-[500px] bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950">
                <div class="container mx-auto px-6 relative z-10 text-center max-w-4xl">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-sm font-semibold mb-6">
                        Leading Accessories Manufacturer
                    </span>
                    <h1 class="text-4xl md:text-6xl font-extrabold font-heading text-white tracking-tight leading-tight mb-6">
                        World-Class Apparel Trims, Labels & Packaging
                    </h1>
                    <p class="text-lg text-slate-300 mb-8 max-w-2xl mx-auto">
                        Delivering precision, durability, and sustainable innovation for international fashion labels.
                    </p>
                    <div class="flex justify-center gap-4">
                        <a href="{{ route('products.user') }}" class="px-7 py-3.5 rounded-xl bg-amber-500 hover:bg-amber-600 text-white font-bold text-sm shadow-lg">
                            Explore Catalog
                        </a>
                        <a href="{{ route('contact') }}" class="px-7 py-3.5 rounded-xl bg-white/10 hover:bg-white/15 text-white font-semibold text-sm border border-white/20">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        @endif

        <!-- Floating Stats Strip -->
        <div class="relative z-20 bg-slate-900/90 border-y border-slate-800 backdrop-blur-md">
            <div class="container mx-auto px-4 lg:px-8 py-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center divide-x divide-slate-800/80">
                    <div class="px-4">
                        <div class="text-2xl sm:text-3xl font-extrabold font-heading text-amber-400">15+</div>
                        <div class="text-xs sm:text-sm text-slate-400 font-medium mt-1">Years of Excellence</div>
                    </div>
                    <div class="px-4">
                        <div class="text-2xl sm:text-3xl font-extrabold font-heading text-white">100+</div>
                        <div class="text-xs sm:text-sm text-slate-400 font-medium mt-1">Global Brands Served</div>
                    </div>
                    <div class="px-4">
                        <div class="text-2xl sm:text-3xl font-extrabold font-heading text-amber-400">100%</div>
                        <div class="text-xs sm:text-sm text-slate-400 font-medium mt-1">Quality Inspected</div>
                    </div>
                    <div class="px-4">
                        <div class="text-2xl sm:text-3xl font-extrabold font-heading text-white">50M+</div>
                        <div class="text-xs sm:text-sm text-slate-400 font-medium mt-1">Annual Production Units</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CLIENTS & BRANDS CAROUSEL ==================== -->
    @if ($brands->count())
        <section id="brands" class="py-12 bg-white border-b border-slate-100">
            <div class="container mx-auto px-4 lg:px-8">
                <div class="text-center mb-8">
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400 font-heading">
                        Trusted by Leading Global Apparel Brands & Retailers
                    </p>
                </div>

                <div class="swiper swiper-brands">
                    <div class="swiper-wrapper items-center">
                        @foreach ($brands as $brand)
                            <div class="swiper-slide flex justify-center items-center px-4">
                                <div class="h-16 sm:h-20 w-36 sm:w-44 p-3 rounded-xl bg-slate-50 border border-slate-100 hover:border-amber-400/50 hover:shadow-md transition-all duration-300 flex items-center justify-center group">
                                    @if ($brand->image)
                                        <img src="{{ asset('upload/' . $brand->image) }}"
                                             alt="{{ $brand->name }}"
                                             class="max-h-full max-w-full object-contain filter grayscale group-hover:grayscale-0 opacity-70 group-hover:opacity-100 transition-all duration-300">
                                    @else
                                        <span class="text-xs font-semibold text-slate-500">{{ $brand->name }}</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- ==================== FEATURED PRODUCTS / CATEGORIES ==================== -->
    <section id="categories" class="py-20 bg-slate-50">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-600 text-xs font-bold tracking-wider uppercase mb-3">
                        Product Portfolio
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-slate-900 tracking-tight">
                        Explore Our Product Categories
                    </h2>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="{{ route('products.user') }}" class="inline-flex items-center gap-2 text-sm font-bold text-amber-600 hover:text-amber-700 transition-colors">
                        <span>View All Products</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($allCategories as $cat)
                    <a href="{{ route('products.user') }}"
                       class="group relative rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-xl border border-slate-200/80 transition-all duration-300 transform hover:-translate-y-1 flex flex-col">
                        <!-- Image Container with Gradient Overlay -->
                        <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                            @if($cat->image)
                                <img src="{{ asset('upload/' . $cat->image) }}"
                                     alt="{{ $cat->name }}"
                                     class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                            @else
                                <div class="h-full w-full flex items-center justify-center bg-slate-200 text-slate-400">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-60 group-hover:opacity-80 transition-opacity"></div>
                            
                            <!-- Category Badge -->
                            <div class="absolute top-3 right-3 px-2.5 py-1 rounded-lg bg-slate-900/80 backdrop-blur-md text-[11px] font-bold text-white border border-white/10">
                                Premium Quality
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-5 flex items-center justify-between bg-white flex-1">
                            <div>
                                <h3 class="text-lg font-bold font-heading text-slate-900 group-hover:text-amber-600 transition-colors">
                                    {{ $cat->name }}
                                </h3>
                                <p class="text-xs text-slate-500 mt-1">High-Precision Manufacturing</p>
                            </div>
                            <div class="h-9 w-9 rounded-full bg-slate-100 group-hover:bg-amber-500 group-hover:text-white text-slate-700 flex items-center justify-center transition-all duration-300">
                                <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ==================== ABOUT & MISSION SECTION ==================== -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Column: Video & Media Cards -->
                <div class="lg:col-span-5 relative" data-aos="fade-right">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200">
                        <img src="{{ asset('template/img/pexels.jpg') }}" alt="About Factory" class="w-full h-[420px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>

                        <!-- Pulsating Video Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#videoModal"
                                    class="relative flex items-center justify-center h-20 w-20 rounded-full bg-amber-500 text-white shadow-xl shadow-amber-500/40 hover:scale-110 transition-transform focus:outline-none"
                                    title="Watch Company Showcase">
                                <span class="absolute inset-0 rounded-full bg-amber-400 animate-ping opacity-75"></span>
                                <svg class="w-8 h-8 ml-1 fill-current relative z-10" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </button>
                        </div>

                        <!-- Overlay Badge -->
                        <div class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 text-white">
                            <p class="text-xs uppercase tracking-wider text-amber-400 font-bold">Watch Video Tour</p>
                            <h4 class="text-base font-bold font-heading">Our Advanced Factory & Production Lines</h4>
                        </div>
                    </div>

                    <!-- Floating Mini Experience Card -->
                    <div class="hidden sm:flex absolute -bottom-6 -right-6 p-5 rounded-2xl bg-slate-900 border border-slate-800 text-white shadow-xl items-center gap-4">
                        <div class="h-12 w-12 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <div class="text-lg font-bold font-heading">Certified Quality</div>
                            <div class="text-xs text-slate-400">Global Standards Compliance</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Narrative & Mission -->
                <div class="lg:col-span-7 space-y-6" data-aos="fade-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-600 text-xs font-bold tracking-wider uppercase">
                        Who We Are
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-slate-900 tracking-tight leading-tight">
                        Crafting High-Precision Garment Trims & Accessories for Global Brands
                    </h2>

                    <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed text-base">
                        @if (!empty($settings->about_desc))
                            {!! $settings->about_desc !!}
                        @else
                            <p>
                                K&K Accessories is a premier manufacturer and exporter of world-class garment accessories. Equipped with cutting-edge European machinery and sustainable manufacturing methodologies, we deliver exceptional quality labels, hangtags, metal hardware, and packaging solutions tailored to international apparel buyers.
                            </p>
                        @endif
                    </div>

                    <!-- Mission & Vision Cards -->
                    @if (!empty($settings->mission_vision))
                        <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200/80">
                            <h3 class="text-lg font-bold font-heading text-slate-900 flex items-center gap-2 mb-2">
                                <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                                <span>Our Mission & Vision</span>
                            </h3>
                            <div class="text-sm text-slate-600 leading-relaxed">
                                {!! $settings->mission_vision !!}
                            </div>
                        </div>
                    @endif

                    <!-- Key Advantages List -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                        <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                            <span class="h-6 w-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">✓</span>
                            <span>Eco-Friendly & Sustainable Materials</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                            <span class="h-6 w-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">✓</span>
                            <span>Ultra-Fast Sampling & Prototyping</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                            <span class="h-6 w-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">✓</span>
                            <span>Custom In-House Design & R&D</span>
                        </div>
                        <div class="flex items-center gap-2.5 text-sm font-semibold text-slate-800">
                            <span class="h-6 w-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">✓</span>
                            <span>100% On-Time Global Shipment</span>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-sm shadow-md transition-colors">
                            <span>Get in Touch with Our Team</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== SERVICES & CAPABILITIES ==================== -->
    @if ($services->count())
        <section id="services" class="py-20 bg-slate-900 text-white relative overflow-hidden">
            <!-- Background Decorative Glow -->
            <div class="absolute -top-40 -left-40 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-40 -right-40 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="container mx-auto px-4 lg:px-8 relative z-10">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold tracking-wider uppercase mb-3">
                        Our Capabilities
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-white tracking-tight">
                        Specialized Manufacturing Services
                    </h2>
                    <p class="text-slate-400 mt-3 text-base">
                        From custom concept design to high-volume precision manufacturing, we offer full-spectrum accessories support.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($services as $service)
                        <div class="group p-8 rounded-2xl bg-slate-800/60 hover:bg-slate-800 border border-slate-700/60 hover:border-amber-500/50 transition-all duration-300 transform hover:-translate-y-1.5 shadow-lg flex flex-col justify-between">
                            <div>
                                <div class="h-16 w-16 rounded-2xl bg-gradient-to-tr from-amber-500 to-amber-600 text-white flex items-center justify-center p-3 mb-6 shadow-md shadow-amber-500/20 group-hover:scale-110 transition-transform">
                                    @if ($service->image)
                                        <img src="{{ asset('upload/' . $service->image) }}" alt="{{ $service->heading }}" class="h-full w-full object-contain filter brightness-0 invert">
                                    @else
                                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                                    @endif
                                </div>
                                <h3 class="text-xl font-bold font-heading text-white group-hover:text-amber-400 transition-colors mb-3">
                                    {{ $service->heading }}
                                </h3>
                                <p class="text-slate-300 text-sm leading-relaxed">
                                    {{ $service->desc }}
                                </p>
                            </div>

                            <div class="pt-6 mt-6 border-t border-slate-700/60 flex items-center gap-2 text-xs font-semibold text-amber-400 group-hover:text-amber-300">
                                <span>Learn More</span>
                                <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- ==================== CALL TO ACTION BANNER ==================== -->
    <section class="py-16 bg-gradient-to-r from-amber-600 via-amber-500 to-amber-600 text-white relative overflow-hidden">
        <div class="container mx-auto px-4 lg:px-8 relative z-10 text-center max-w-3xl">
            <h2 class="text-3xl sm:text-4xl font-extrabold font-heading tracking-tight mb-4 text-white">
                Have a Custom Accessories Requirement?
            </h2>
            <p class="text-base sm:text-lg text-amber-100 mb-8 leading-relaxed">
                Send us your design tech pack, sample inquiry, or order details. Our engineering & sales team responds with competitive quotations within 24 hours.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-3.5 rounded-xl bg-slate-900 hover:bg-slate-950 text-white font-bold text-sm shadow-xl transition-all duration-200 transform hover:-translate-y-0.5">
                    Request a Custom Quote
                </a>
                <a href="https://wa.me/8801819541258" target="_blank" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-white/20 hover:bg-white/30 text-white font-bold text-sm border border-white/30 backdrop-blur-md transition-all duration-200 transform hover:-translate-y-0.5">
                    <span>Chat on WhatsApp</span>
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.299.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.087-.179.182-.077.357.101.174.45 1.742 1.637 1.794.204.068.324.087.44.029.116-.058.491-.57.622-.765.13-.195.26-.163.434-.099.174.064 1.101.52 1.289.614.188.094.314.14.36.219.046.079.046.455-.098.86z"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== VIDEO MODAL ==================== -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-slate-950 border border-slate-800 rounded-3xl overflow-hidden shadow-2xl">
                <div class="modal-header border-b border-slate-800 px-6 py-4">
                    <h3 class="text-lg font-bold font-heading text-white">Company & Factory Showcase</h3>
                    <button type="button" class="btn-close btn-close-white focus:outline-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe id="videoFrame" 
                                src="" 
                                title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== SWIPER & VIDEO SCRIPT ==================== -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Hero Swiper
            if (document.querySelector('.swiper-hero')) {
                new Swiper('.swiper-hero', {
                    loop: true,
                    speed: 1000,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
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
            }

            // Brands Swiper
            if (document.querySelector('.swiper-brands')) {
                new Swiper('.swiper-brands', {
                    loop: true,
                    slidesPerView: 2,
                    spaceBetween: 20,
                    speed: 1500,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: { slidesPerView: 3, spaceBetween: 24 },
                        768: { slidesPerView: 4, spaceBetween: 28 },
                        1024: { slidesPerView: 6, spaceBetween: 32 },
                    },
                });
            }

            // Video Modal handler
            const videoSrc = "https://www.youtube.com/embed/AVnJSxvFJSM?autoplay=1";
            const videoFrame = document.getElementById("videoFrame");
            const videoModal = document.getElementById('videoModal');

            if (videoModal && videoFrame) {
                videoModal.addEventListener('shown.bs.modal', function () {
                    videoFrame.src = videoSrc;
                });

                videoModal.addEventListener('hidden.bs.modal', function () {
                    videoFrame.src = "";
                });
            }
        });
    </script>

@endsection
