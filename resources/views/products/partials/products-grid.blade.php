@php $hasAnyProducts = false; @endphp

@foreach($categories as $category)
    @if($category->products && $category->products->count())
        @php $hasAnyProducts = true; @endphp
        <div class="mb-16">
            <!-- Category Title & Header -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 mb-8 border-b border-slate-200 gap-2">
                <div class="flex items-center gap-3">
                    <span class="h-3 w-3 rounded-full bg-amber-500"></span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold font-heading text-slate-900 tracking-tight">
                        {{ $category->name }}
                    </h2>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-amber-500/10 text-amber-700 border border-amber-500/20">
                        {{ $category->products->count() }} {{ Str::plural('Product', $category->products->count()) }}
                    </span>
                </div>
            </div>

            <!-- Products Grid for this Category -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-7">
                @foreach($category->products as $product)
                    <div class="group bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-xs hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col justify-between">
                        <div>
                            <!-- Product Image Container with Zoom & Badge -->
                            <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                                @php
                                    $imageSrc = $product->cover_image 
                                        ? asset('upload/' . $product->cover_image) 
                                        : ($product->images->first() ? asset('upload/' . $product->images->first()->image) : asset('echix/images/home-1/inner/products/1.jpg'));
                                @endphp
                                <img src="{{ $imageSrc }}" 
                                     alt="{{ $product->name }}" 
                                     class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-110">
                                
                                <!-- Category Tag Pill -->
                                <div class="absolute top-3.5 left-3.5 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-[11px] font-bold text-amber-400 border border-white/10 shadow-sm">
                                    {{ $category->name }}
                                </div>

                                <!-- Quick View Action Overlay -->
                                <div class="absolute inset-0 bg-slate-950/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4">
                                    <a href="{{ route('products.show', $product->slug) }}" 
                                       class="px-5 py-2.5 rounded-xl bg-white text-slate-900 font-bold text-xs shadow-xl transform translate-y-2 group-hover:translate-y-0 transition-all duration-300 hover:bg-amber-500 hover:text-white">
                                        View Product Details
                                    </a>
                                </div>
                            </div>

                            <!-- Product Information -->
                            <div class="p-5 sm:p-6">
                                <h3 class="text-lg font-bold font-heading text-slate-900 group-hover:text-amber-600 transition-colors line-clamp-1">
                                    <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                                </h3>

                                @if(!empty($product->description))
                                    <p class="text-xs sm:text-sm text-slate-500 mt-2 line-clamp-2 leading-relaxed">
                                        {{ strip_tags($product->description) }}
                                    </p>
                                @else
                                    <p class="text-xs text-slate-400 mt-2">
                                        Custom OEM/ODM garment accessory manufactured to brand specifications.
                                    </p>
                                @endif
                            </div>
                        </div>

                        <!-- Card Bottom Bar -->
                        <div class="px-5 sm:px-6 pb-5 pt-3 border-t border-slate-100 flex items-center justify-between bg-slate-50/50">
                            <span class="text-xs font-semibold text-slate-500 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                <span>In Stock / Custom</span>
                            </span>
                            <a href="{{ route('products.show', $product->slug) }}" 
                               class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-600 group-hover:text-amber-700 transition-colors">
                                <span>View Details</span>
                                <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endforeach

@if(!$hasAnyProducts)
    <div class="text-center py-20 bg-white rounded-3xl border border-slate-200/80 shadow-xs max-w-2xl mx-auto my-12">
        <div class="h-16 w-16 rounded-2xl bg-amber-500/10 text-amber-600 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
        </div>
        <h3 class="text-xl font-bold font-heading text-slate-900">No Products Currently Listed</h3>
        <p class="text-sm text-slate-500 mt-2 max-w-md mx-auto">
            We are currently updating this category collection with our latest sample releases. Please contact our team for physical catalogs and swatches.
        </p>
        <div class="mt-6">
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-amber-500 hover:bg-amber-600 text-white font-bold text-xs uppercase tracking-wider shadow-md transition-colors">
                <span>Request Sample Swatches</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
@endif
