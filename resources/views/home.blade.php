@extends('layouts.master')

@section('title', 'K&K Accessories | Leading Garment Accessories Manufacturer')

@section('content')

    <!-- ==================== HERO SLIDER SECTION ==================== -->
    <section class="relative bg-slate-950 text-white overflow-hidden">
        @if ($sliders->count())
            <div class="swiper swiper-hero w-full h-[70vh] min-h-[520px] max-h-[750px]">
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        <div class="swiper-slide relative flex items-center">
                            <!-- Background Image with Clean Visibility -->
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 scale-100"
                                style="background-image: url('{{ asset('upload/' . $slider->image_path) }}');">
                            </div>
                            
                            <!-- Refined Cinematic Gradient: Darker on the left for text contrast, translucent on the right to show the accessory product -->
                            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/90 via-slate-950/60 to-slate-950/20"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>

                            <!-- Content Container -->
                            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-12">
                                <div class="max-w-2xl">
                                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/20 text-amber-400 text-xs sm:text-sm font-semibold tracking-wide uppercase mb-6 backdrop-blur-md">
                                        <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                                        <span>Premier Garment Accessories</span>
                                    </div>

                                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold font-heading text-white tracking-tight leading-[1.15] mb-5 drop-shadow-md">
                                        {{ $slider->heading ?? 'Precision-Engineered Garment Trims & Accessories' }}
                                    </h1>

                                    @if(!empty($slider->desc))
                                        <div class="text-base sm:text-lg text-slate-200 font-normal leading-relaxed mb-8 line-clamp-3">
                                            {!! strip_tags($slider->desc) !!}
                                        </div>
                                    @endif

                                    <div class="flex flex-wrap items-center gap-4">
                                        <a href="#product-showcase"
                                           class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-sm sm:text-base shadow-lg shadow-amber-500/25 transition-all duration-200 transform hover:-translate-y-0.5">
                                            <span>Explore Products</span>
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                        </a>

                                        <a href="{{ route('contact') }}"
                                           class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-white/15 hover:bg-white/25 text-white font-semibold text-sm sm:text-base border border-white/25 backdrop-blur-md transition-all duration-200 transform hover:-translate-y-0.5">
                                            <span>Request a Quote</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Swiper Navigation Controls -->
                <div class="swiper-button-prev !hidden md:!flex !w-11 !h-11 !text-white !bg-slate-900/60 hover:!bg-amber-500 !backdrop-blur-md !rounded-xl !border !border-white/20 transition-all !left-6 after:!text-base"></div>
                <div class="swiper-button-next !hidden md:!flex !w-11 !h-11 !text-white !bg-slate-900/60 hover:!bg-amber-500 !backdrop-blur-md !rounded-xl !border !border-white/20 transition-all !right-6 after:!text-base"></div>
                <div class="swiper-pagination !bottom-6"></div>
            </div>
        @else
            <!-- Fallback Static Hero -->
            <div class="relative flex items-center h-[65vh] min-h-[480px] bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950">
                <div class="max-w-7xl mx-auto px-6 relative z-10 text-center w-full">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-sm font-semibold mb-6">
                        Leading Accessories Manufacturer
                    </span>
                    <h1 class="text-4xl md:text-6xl font-extrabold font-heading text-white tracking-tight leading-tight mb-6">
                        World-Class Apparel Trims, Labels & Packaging
                    </h1>
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
    </section>

    <!-- ==================== METRICS & TRUST STATS STRIP ==================== -->
    <section class="bg-white border-b border-slate-200 py-8 relative z-20 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8 divide-x divide-slate-100 text-center">
                <div class="px-3">
                    <div class="text-3xl sm:text-4xl font-extrabold font-heading text-amber-500">15+</div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-800 mt-1">Years of Leadership</div>
                    <div class="text-[11px] text-slate-500 hidden sm:block">Serving apparel brands since 2008</div>
                </div>
                <div class="px-3">
                    <div class="text-3xl sm:text-4xl font-extrabold font-heading text-slate-900">100+</div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-800 mt-1">Global Brand Clients</div>
                    <div class="text-[11px] text-slate-500 hidden sm:block">Trusted by top fashion labels</div>
                </div>
                <div class="px-3">
                    <div class="text-3xl sm:text-4xl font-extrabold font-heading text-amber-500">50M+</div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-800 mt-1">Annual Production Units</div>
                    <div class="text-[11px] text-slate-500 hidden sm:block">Advanced manufacturing capacity</div>
                </div>
                <div class="px-3">
                    <div class="text-3xl sm:text-4xl font-extrabold font-heading text-slate-900">100%</div>
                    <div class="text-xs sm:text-sm font-semibold text-slate-800 mt-1">Quality Inspected</div>
                    <div class="text-[11px] text-slate-500 hidden sm:block">Strict 4-point inspection system</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CLIENTS & BRANDS CAROUSEL ==================== -->
    @if ($brands->count())
        <section id="brands" class="py-10 bg-slate-50/70 border-b border-slate-200/80">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-6">
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-500 font-heading">
                        Trusted by Global Apparel Brands & Buying Houses
                    </p>
                </div>

                <div class="swiper swiper-brands">
                    <div class="swiper-wrapper items-center">
                        @foreach ($brands as $brand)
                            <div class="swiper-slide flex justify-center items-center px-3">
                                <div class="h-16 w-36 sm:w-44 p-3 rounded-xl bg-white border border-slate-200/90 shadow-2xs hover:border-amber-400 hover:shadow-md transition-all duration-300 flex items-center justify-center group">
                                    @if ($brand->image)
                                        <img src="{{ asset('upload/' . $brand->image) }}"
                                             alt="{{ $brand->name }}"
                                             class="max-h-full max-w-full object-contain filter grayscale group-hover:grayscale-0 opacity-70 group-hover:opacity-100 transition-all duration-300">
                                    @else
                                        <span class="text-xs font-semibold text-slate-600">{{ $brand->name }}</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- ==================== PRODUCT CATEGORIES SHOWCASE ==================== -->
    <section id="product-showcase" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-600 text-xs font-bold tracking-wider uppercase mb-3">
                    <span>✦ Product Categories Showcase</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-slate-900 tracking-tight">
                    Explore Our Product Portfolio
                </h2>
                <p class="text-slate-600 mt-3 text-base sm:text-lg leading-relaxed">
                    Browse our full range of trims, lace, labels, hangtags, and packaging. Select a category below to filter items instantly.
                </p>
            </div>

            <!-- Category Filter Tabs -->
            <div class="flex items-center justify-start sm:justify-center gap-2 sm:gap-3 overflow-x-auto pb-4 mb-10 scrollbar-none" id="categoryFilterTabs">
                <!-- All Button -->
                <button type="button" 
                        class="category-tab-btn active px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm tracking-wide transition-all duration-200 flex items-center gap-2 bg-amber-500 text-white shadow-md shadow-amber-500/25 flex-shrink-0"
                        data-category="all">
                    <span>All Products</span>
                    <span class="px-2 py-0.5 rounded-full text-[11px] bg-white/20 text-white">
                        {{ $categories->sum(fn($c) => $c->products->count()) }}
                    </span>
                </button>

                <!-- Dynamic Categories -->
                @foreach($categories as $category)
                    <button type="button" 
                            class="category-tab-btn px-4 py-2.5 rounded-xl font-semibold text-xs sm:text-sm text-slate-700 bg-slate-100 hover:bg-slate-200 border border-slate-200 transition-all duration-200 flex items-center gap-2 flex-shrink-0"
                            data-category="{{ $category->slug ?? Str::slug($category->name) }}">
                        @if($category->image)
                            <img src="{{ asset('upload/' . $category->image) }}" alt="{{ $category->name }}" class="w-5 h-5 rounded-full object-cover">
                        @endif
                        <span>{{ $category->name }}</span>
                        <span class="px-2 py-0.5 rounded-full text-[11px] bg-white text-slate-600 border border-slate-200">
                            {{ $category->products->count() }}
                        </span>
                    </button>
                @endforeach
            </div>

            <!-- Products Showcase Grid -->
            <div id="productShowcaseGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php $hasProducts = false; @endphp
                @foreach($categories as $category)
                    @foreach($category->products as $product)
                        @php $hasProducts = true; @endphp
                        <div class="product-card-item group bg-white rounded-2xl border border-slate-200/90 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1.5 flex flex-col justify-between"
                             data-category="{{ $category->slug ?? Str::slug($category->name) }}">
                            
                            <div>
                                <!-- Image Container -->
                                <div class="relative h-56 w-full overflow-hidden bg-slate-100">
                                    @php
                                        $imageSrc = $product->cover_image 
                                            ? asset('upload/' . $product->cover_image) 
                                            : ($product->images->first() ? asset('upload/' . $product->images->first()->image) : asset('echix/images/home-1/inner/products/1.jpg'));
                                    @endphp
                                    <img src="{{ $imageSrc }}" 
                                         alt="{{ $product->name }}" 
                                         class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    
                                    <!-- Category Pill Badge -->
                                    <div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-slate-900/80 backdrop-blur-md text-[11px] font-bold text-amber-400 border border-white/10 shadow-xs">
                                        {{ $category->name }}
                                    </div>

                                    <!-- Quick View Overlay Button -->
                                    <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4">
                                        <a href="{{ route('products.show', $product->slug) }}" 
                                           class="px-5 py-2.5 rounded-xl bg-white text-slate-900 font-bold text-xs shadow-lg transform translate-y-2 group-hover:translate-y-0 transition-all duration-300 hover:bg-amber-500 hover:text-white">
                                            View Product Details
                                        </a>
                                    </div>
                                </div>

                                <!-- Body -->
                                <div class="p-5">
                                    <h3 class="text-base font-bold font-heading text-slate-900 group-hover:text-amber-600 transition-colors line-clamp-1">
                                        <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                    </h3>
                                    
                                    @if(!empty($product->description))
                                        <p class="text-xs text-slate-500 mt-2 line-clamp-2 leading-relaxed">
                                            {{ strip_tags($product->description) }}
                                        </p>
                                    @else
                                        <p class="text-xs text-slate-400 mt-2">Precision engineered apparel accessory.</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Card Footer -->
                            <div class="px-5 pb-5 pt-2 border-t border-slate-100 flex items-center justify-between">
                                <span class="text-xs font-semibold text-slate-500">In Stock / Custom OEM</span>
                                <a href="{{ route('products.show', $product->slug) }}" 
                                   class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-600 group-hover:text-amber-700 transition-colors">
                                    <span>Details</span>
                                    <svg class="w-3.5 h-3.5 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endforeach

                @if(!$hasProducts)
                    <!-- Fallback: Display Category Cards if no products are in database -->
                    @foreach($allCategories as $cat)
                        <div class="product-card-item group bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300"
                             data-category="{{ $cat->slug }}">
                            <div class="relative h-56 w-full bg-slate-100 overflow-hidden">
                                @if($cat->image)
                                    <img src="{{ asset('upload/' . $cat->image) }}" alt="{{ $cat->name }}" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="h-full w-full flex items-center justify-center text-slate-400">No Image</div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 text-white">
                                    <h4 class="text-lg font-bold font-heading">{{ $cat->name }}</h4>
                                    <span class="text-xs text-amber-300">View Category Collection →</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <!-- Empty State when filtering finds no products -->
            <div id="noProductsFound" class="hidden text-center py-16 bg-slate-50 rounded-2xl border border-slate-200 mt-6">
                <svg class="w-12 h-12 text-slate-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                <h4 class="text-lg font-bold text-slate-800">No products found in this category</h4>
                <p class="text-xs text-slate-500 mt-1">Please check other categories or contact our team for custom manufacturing.</p>
            </div>

            <!-- View All Products CTA Button -->
            <div class="text-center mt-12">
                <a href="{{ route('products.user') }}" 
                   class="inline-flex items-center gap-2.5 px-8 py-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-sm shadow-md transition-all duration-200 transform hover:-translate-y-0.5">
                    <span>Explore Full Products Catalog</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ==================== ABOUT & CORPORATE PROFILE ==================== -->
    <section id="about" class="py-20 bg-slate-50 border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left: Media Showcase with Video Trigger -->
                <div class="lg:col-span-5" data-aos="fade-right">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200 bg-slate-900">
                        <img src="{{ asset('template/img/pexels.jpg') }}" alt="Factory Production" class="w-full h-[460px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/30 to-transparent"></div>

                        <!-- Video Play Trigger -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#videoModal"
                                    class="relative flex items-center justify-center h-20 w-20 rounded-full bg-amber-500 text-white shadow-xl shadow-amber-500/40 hover:scale-110 transition-transform focus:outline-none mb-3"
                                    title="Watch Factory Tour">
                                <span class="absolute inset-0 rounded-full bg-amber-400 animate-ping opacity-60"></span>
                                <svg class="w-8 h-8 ml-1 fill-current relative z-10" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </button>
                            <span class="text-xs font-bold uppercase tracking-wider text-white drop-shadow-md">Watch Factory Video</span>
                        </div>

                        <!-- Bottom Card -->
                        <div class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-white/10 backdrop-blur-md border border-white/20 text-white">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold font-heading">Certified Quality Standards</h4>
                                    <p class="text-xs text-slate-300">Oeko-Tex Standard 100 & Global Audits</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: About Content with Interactive Tabs -->
                <div class="lg:col-span-7 space-y-6" data-aos="fade-left">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-600 text-xs font-bold tracking-wider uppercase">
                        ✦ Who We Are
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-slate-900 tracking-tight leading-tight">
                        Crafting High-Precision Garment Trims & Accessories for Global Brands
                    </h2>

                    <!-- Clean Structured Nav Tabs for About / Mission / Quality -->
                    <div class="flex border-b border-slate-200 gap-6 pt-2" id="aboutTabs">
                        <button type="button" class="about-tab-btn active pb-3 font-bold text-sm text-amber-600 border-b-2 border-amber-500 transition-colors" data-target="tab-overview">
                            Company Overview
                        </button>
                        <button type="button" class="about-tab-btn pb-3 font-semibold text-sm text-slate-500 hover:text-slate-800 border-b-2 border-transparent transition-colors" data-target="tab-mission">
                            Mission & Vision
                        </button>
                        <button type="button" class="about-tab-btn pb-3 font-semibold text-sm text-slate-500 hover:text-slate-800 border-b-2 border-transparent transition-colors" data-target="tab-quality">
                            Quality & Compliance
                        </button>
                    </div>

                    <!-- Tab Contents -->
                    <div id="tab-overview" class="about-tab-content space-y-4">
                        <div class="text-sm sm:text-base text-slate-600 leading-relaxed max-h-56 overflow-y-auto pr-2 scrollbar-thin">
                            @if (!empty($settings->about_desc))
                                {!! $settings->about_desc !!}
                            @else
                                <p>
                                    With over 20 years of experience, we are a leading supplier of high-quality garment accessories dedicated to supporting the global apparel industry. We combine cutting-edge technology, strict quality control, and responsive supply chains to ensure on-time delivery for fashion brands, garment factories, and wholesalers worldwide.
                                </p>
                            @endif
                        </div>
                    </div>

                    <div id="tab-mission" class="about-tab-content hidden space-y-4">
                        <div class="p-5 rounded-2xl bg-white border border-slate-200">
                            <h4 class="text-sm font-bold font-heading text-slate-900 flex items-center gap-2 mb-2">
                                <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                                <span>Our Core Mission</span>
                            </h4>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                To be the most trusted and strategic trims partner for global apparel brands by providing innovative, sustainable, and competitively priced garment accessories that enhance brand identity.
                            </p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white border border-slate-200">
                            <h4 class="text-sm font-bold font-heading text-slate-900 flex items-center gap-2 mb-2">
                                <span class="h-2 w-2 rounded-full bg-amber-500"></span>
                                <span>Our Strategic Vision</span>
                            </h4>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Setting international standards for precision, speed, and sustainability, while fostering long-term relationships through integrity and manufacturing excellence.
                            </p>
                        </div>
                    </div>

                    <div id="tab-quality" class="about-tab-content hidden space-y-3">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="p-4 rounded-xl bg-white border border-slate-200">
                                <div class="font-bold text-xs text-slate-900">4-Point Quality Inspection</div>
                                <div class="text-xs text-slate-500 mt-1">Zero-defect policy before dispatch</div>
                            </div>
                            <div class="p-4 rounded-xl bg-white border border-slate-200">
                                <div class="font-bold text-xs text-slate-900">Sustainable Materials</div>
                                <div class="text-xs text-slate-500 mt-1">Recycled polyester, FSC paper & organic threads</div>
                            </div>
                            <div class="p-4 rounded-xl bg-white border border-slate-200">
                                <div class="font-bold text-xs text-slate-900">Rapid Physical Sampling</div>
                                <div class="text-xs text-slate-500 mt-1">Samples dispatched in 48-72 hours</div>
                            </div>
                            <div class="p-4 rounded-xl bg-white border border-slate-200">
                                <div class="font-bold text-xs text-slate-900">Export Certified</div>
                                <div class="text-xs text-slate-500 mt-1">Worldwide logistics & compliance certificates</div>
                            </div>
                        </div>
                    </div>

                    <!-- Key Checkmarks -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-2">
                        <div class="flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-800">
                            <span class="h-5 w-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">✓</span>
                            <span>Eco-Friendly & Sustainable Materials</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-800">
                            <span class="h-5 w-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">✓</span>
                            <span>Ultra-Fast Sampling & Prototyping</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-800">
                            <span class="h-5 w-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">✓</span>
                            <span>Custom In-House Design & R&D</span>
                        </div>
                        <div class="flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-800">
                            <span class="h-5 w-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs">✓</span>
                            <span>100% On-Time Global Shipment</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-sm shadow-md transition-colors">
                            <span>Get in Touch with Our Team</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== SPECIALIZED SERVICES ==================== -->
    @if ($services->count())
        <section id="services" class="py-20 bg-slate-900 text-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold tracking-wider uppercase mb-3">
                        Our Capabilities
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold font-heading text-white tracking-tight">
                        Specialized Manufacturing Services
                    </h2>
                    <p class="text-slate-400 mt-3 text-base">
                        From custom concept design to high-volume precision manufacturing, we offer end-to-end trims solutions.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ($services as $service)
                        <div class="group p-8 rounded-2xl bg-slate-800/60 hover:bg-slate-800 border border-slate-700/60 hover:border-amber-500/50 transition-all duration-300 transform hover:-translate-y-1.5 shadow-lg flex flex-col justify-between">
                            <div>
                                <div class="h-14 w-14 rounded-2xl bg-gradient-to-tr from-amber-500 to-amber-600 text-white flex items-center justify-center p-3 mb-6 shadow-md shadow-amber-500/20 group-hover:scale-110 transition-transform">
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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold font-heading tracking-tight mb-4 text-white">
                Ready to Upgrade Your Apparel Accessories?
            </h2>
            <p class="text-base sm:text-lg text-amber-100 mb-8 leading-relaxed max-w-2xl mx-auto">
                Share your design tech pack, material specifications, or order volume. Our engineering team provides competitive FOB quotes within 24 hours.
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

    <!-- ==================== INTERACTIVE SCRIPTS ==================== -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. Hero Swiper
            if (document.querySelector('.swiper-hero')) {
                new Swiper('.swiper-hero', {
                    loop: true,
                    speed: 1000,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    effect: 'fade',
                    fadeEffect: { crossFade: true },
                    pagination: { el: '.swiper-pagination', clickable: true },
                    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
                });
            }

            // 2. Brands Swiper
            if (document.querySelector('.swiper-brands')) {
                new Swiper('.swiper-brands', {
                    loop: true,
                    slidesPerView: 2,
                    spaceBetween: 16,
                    speed: 1500,
                    autoplay: { delay: 2500, disableOnInteraction: false },
                    breakpoints: {
                        640: { slidesPerView: 3, spaceBetween: 20 },
                        768: { slidesPerView: 4, spaceBetween: 24 },
                        1024: { slidesPerView: 6, spaceBetween: 28 },
                    },
                });
            }

            // 3. Category Filter Tabs Logic
            const filterBtns = document.querySelectorAll('.category-tab-btn');
            const productCards = document.querySelectorAll('.product-card-item');
            const noProductsFound = document.getElementById('noProductsFound');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    // Update active tab style
                    filterBtns.forEach(b => {
                        b.classList.remove('active', 'bg-amber-500', 'text-white', 'shadow-md', 'shadow-amber-500/25');
                        b.classList.add('bg-slate-100', 'text-slate-700', 'hover:bg-slate-200');
                    });
                    this.classList.remove('bg-slate-100', 'text-slate-700', 'hover:bg-slate-200');
                    this.classList.add('active', 'bg-amber-500', 'text-white', 'shadow-md', 'shadow-amber-500/25');

                    const selectedCategory = this.dataset.category;
                    let visibleCount = 0;

                    productCards.forEach(card => {
                        const cardCategory = card.dataset.category;
                        if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                            card.style.display = 'flex';
                            visibleCount++;
                        } else {
                            card.style.display = 'none';
                        }
                    });

                    if (noProductsFound) {
                        noProductsFound.classList.toggle('hidden', visibleCount > 0);
                    }
                });
            });

            // 4. About Us Tabs Logic
            const aboutTabBtns = document.querySelectorAll('.about-tab-btn');
            const aboutTabContents = document.querySelectorAll('.about-tab-content');

            aboutTabBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    aboutTabBtns.forEach(b => {
                        b.classList.remove('active', 'text-amber-600', 'border-amber-500');
                        b.classList.add('text-slate-500', 'border-transparent');
                    });
                    this.classList.remove('text-slate-500', 'border-transparent');
                    this.classList.add('active', 'text-amber-600', 'border-amber-500');

                    const targetId = this.dataset.target;
                    aboutTabContents.forEach(content => {
                        content.classList.toggle('hidden', content.id !== targetId);
                    });
                });
            });

            // 5. Video Modal Handling
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
