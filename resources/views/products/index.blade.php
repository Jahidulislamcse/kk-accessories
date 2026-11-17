@extends('layouts.master')

@section('title', 'Products & Accessories Catalog | K&K Accessories')

@section('content')

    <!-- ==================== PAGE HERO HEADER ==================== -->
    <section class="relative bg-slate-950 text-white py-16 sm:py-20 overflow-hidden border-b border-slate-800">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900 to-slate-950"></div>
        <div class="absolute -top-32 -right-32 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center max-w-3xl">
            <!-- Breadcrumbs -->
            <div class="inline-flex items-center gap-2 text-xs font-semibold text-slate-400 uppercase tracking-widest mb-4">
                <a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Home</a>
                <span>/</span>
                <span class="text-amber-400">Products Catalog</span>
            </div>

            <h1 class="text-3xl sm:text-5xl font-extrabold font-heading text-white tracking-tight leading-tight mb-4">
                Apparel Accessories & Trims Portfolio
            </h1>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed max-w-2xl mx-auto">
                Discover our precision-crafted trims, custom lace, luxury woven labels, hangtags, metal badges, and sustainable apparel packaging.
            </p>
        </div>
    </section>

    <!-- ==================== MAIN CATALOG SECTION ==================== -->
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
        }
        .no-scrollbar {
            -ms-overflow-style: none !important;
            scrollbar-width: none !important;
        }
    </style>

    <section class="py-14 sm:py-20 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter Tabs Bar -->
            <div class="mb-12">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-3 mb-3 gap-2">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-500 font-heading">Filter by Category:</span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-slate-200/80 text-[11px] font-semibold text-slate-600">
                            <span class="flex items-center gap-0.5 text-xs font-bold text-amber-600">
                                <kbd class="px-1 py-0.2 bg-white rounded shadow-2xs border border-slate-300">←</kbd>
                                <kbd class="px-1 py-0.2 bg-white rounded shadow-2xs border border-slate-300">→</kbd>
                            </span>
                            <span>Arrow keys to switch</span>
                        </span>
                    </div>

                    <div class="flex items-center justify-between sm:justify-end gap-3">
                        <span class="text-xs font-medium text-slate-400 hidden md:inline">Select any category to view items</span>
                        
                        <!-- Navigation Arrow Buttons -->
                        <div class="inline-flex items-center gap-1.5 bg-white p-1 rounded-xl border border-slate-200 shadow-2xs">
                            <button type="button" id="prevCategoryBtn" 
                                    class="h-8 w-8 rounded-lg text-slate-600 hover:text-amber-600 hover:bg-amber-50 flex items-center justify-center transition-all cursor-pointer" 
                                    title="Previous Category (Left Arrow key ←)">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                            </button>
                            <span class="h-4 w-px bg-slate-200"></span>
                            <button type="button" id="nextCategoryBtn" 
                                    class="h-8 w-8 rounded-lg text-slate-600 hover:text-amber-600 hover:bg-amber-50 flex items-center justify-center transition-all cursor-pointer" 
                                    title="Next Category (Right Arrow key →)">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Horizontal Tabs Container with hidden scrollbar -->
                <div class="relative">
                    <div class="flex items-center gap-2.5 overflow-x-auto pb-2 scroll-smooth no-scrollbar" id="productCategoryTabs" style="-webkit-overflow-scrolling: touch;">
                        <!-- All Tab -->
                        <button type="button"
                                class="category-tab-pill flex-shrink-0 px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs sm:text-sm tracking-wide transition-all duration-200 flex items-center gap-2 cursor-pointer {{ !$selectedCategory ? 'active bg-amber-500 text-white shadow-md shadow-amber-500/25 border-amber-500' : 'bg-white text-slate-700 hover:text-amber-600 hover:bg-slate-50 border border-slate-200 shadow-2xs' }}"
                                data-category="all">
                            <span>All Categories</span>
                        </button>

                        <!-- Category Pills -->
                        @foreach ($allCategories as $cat)
                            <button type="button"
                                    class="category-tab-pill flex-shrink-0 px-3.5 sm:px-4 py-2.5 rounded-xl font-semibold text-xs sm:text-sm transition-all duration-200 flex items-center gap-2 cursor-pointer {{ $selectedCategory == $cat->slug ? 'active bg-amber-500 text-white shadow-md shadow-amber-500/25 border-amber-500' : 'bg-white text-slate-700 hover:text-amber-600 hover:bg-slate-50 border border-slate-200 shadow-2xs' }}"
                                    data-category="{{ $cat->slug }}">
                                @if ($cat->image)
                                    <img src="{{ asset('upload/' . $cat->image) }}" alt="{{ $cat->name }}"
                                         class="w-5 h-5 rounded-full object-cover">
                                @endif
                                <span>{{ $cat->name }}</span>
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Loading Spinner Indicator (during AJAX) -->
            <div id="productGridLoading" class="hidden text-center py-16">
                <div class="inline-block animate-spin rounded-full h-10 w-10 border-4 border-amber-500 border-t-transparent"></div>
                <p class="text-xs font-semibold text-slate-500 mt-3">Loading products...</p>
            </div>

            <!-- Product Grid Container -->
            <div id="productGrid" class="transition-opacity duration-300">
                @include('products.partials.products-grid', ['categories' => $categories])
            </div>
        </div>
    </section>

    <!-- ==================== FLOATING QUOTE BUTTON & SLIDEOUT DRAWER ==================== -->
    <div id="quotationTriggerBtn" 
         class="fixed bottom-8 left-6 sm:left-auto sm:right-28 z-40 flex items-center gap-2 px-5 py-3 rounded-full bg-slate-900 hover:bg-amber-500 text-white font-bold text-xs uppercase tracking-wider shadow-2xl border border-white/10 cursor-pointer transition-all duration-300 transform hover:scale-105"
         title="Request a Custom Quote">
        <svg class="w-4 h-4 text-amber-400 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
        <span>Request Quote</span>
    </div>

    <!-- Quotation Backdrop -->
    <div id="quotationBackdrop" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 hidden opacity-0 transition-opacity duration-300"></div>

    <!-- Slideout Quotation Drawer -->
    <div id="quotationDrawer" class="fixed top-0 right-0 h-full w-full sm:w-[450px] bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col justify-between overflow-y-auto">
        <div class="p-6 sm:p-8">
            <!-- Drawer Header -->
            <div class="flex items-center justify-between pb-4 mb-6 border-b border-slate-100">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-amber-600 font-heading">✦ Instant Sourcing Inquiry</span>
                    <h3 class="text-xl font-bold font-heading text-slate-900 mt-1">Request a Custom Quotation</h3>
                </div>
                <button type="button" id="closeDrawerBtn" class="p-2 rounded-xl text-slate-400 hover:text-slate-800 hover:bg-slate-100 focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1.5">Your Full Name</label>
                    <input type="text" name="name" required placeholder="e.g. John Doe / Brand Manager"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:border-amber-500 focus:ring-1 focus:ring-amber-500 outline-none transition-all"
                           value="{{ old('name') }}" />
                    @error('name') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1.5">Work Email Address</label>
                    <input type="email" name="email" required placeholder="name@company.com"
                           class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:border-amber-500 focus:ring-1 focus:ring-amber-500 outline-none transition-all"
                           value="{{ old('email') }}" />
                    @error('email') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wide mb-1.5">Product & Order Details</label>
                    <textarea name="message" required rows="4" placeholder="Mention item category, estimated quantity, dimensions, or custom specifications..."
                              class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm focus:border-amber-500 focus:ring-1 focus:ring-amber-500 outline-none transition-all">{{ old('message') }}</textarea>
                    @error('message') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div class="pt-2">
                    <button type="submit"
                            class="w-full py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold text-sm tracking-wide shadow-md shadow-amber-500/20 transition-all duration-200">
                        Submit Inquiry
                    </button>
                </div>

                @if(session('success'))
                    <div class="mt-4 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold">
                        ✓ {{ session('success') }}
                    </div>
                @endif
            </form>
        </div>

        <!-- Drawer Footer -->
        <div class="p-6 bg-slate-50 border-t border-slate-100 text-center">
            <p class="text-xs text-slate-500">Or reach us directly via WhatsApp:</p>
            <a href="https://wa.me/8801819541258" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-emerald-600 hover:text-emerald-700 mt-1">
                <span>Chat on WhatsApp (+880 1819-541258)</span>
            </a>
        </div>
    </div>

    <!-- ==================== INTERACTIVE SCRIPTS ==================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.category-tab-pill');
            const productGrid = document.getElementById('productGrid');
            const loadingIndicator = document.getElementById('productGridLoading');
            const tabsContainer = document.getElementById('productCategoryTabs');
            const prevCategoryBtn = document.getElementById('prevCategoryBtn');
            const nextCategoryBtn = document.getElementById('nextCategoryBtn');

            // Slideout Quotation Drawer Toggle elements
            const triggerBtn = document.getElementById('quotationTriggerBtn');
            const closeBtn = document.getElementById('closeDrawerBtn');
            const drawer = document.getElementById('quotationDrawer');
            const backdrop = document.getElementById('quotationBackdrop');

            // Central Tab Activation Function
            function activateTab(targetTab, triggerFetch = true) {
                if (!targetTab) return;

                tabs.forEach(t => {
                    t.classList.remove('active', 'bg-amber-500', 'text-white', 'shadow-md', 'shadow-amber-500/25', 'border-amber-500');
                    t.classList.add('bg-white', 'text-slate-700', 'hover:text-amber-600', 'hover:bg-slate-50', 'border', 'border-slate-200', 'shadow-2xs');
                });

                targetTab.classList.remove('bg-white', 'text-slate-700', 'hover:text-amber-600', 'hover:bg-slate-50', 'border', 'border-slate-200', 'shadow-2xs');
                targetTab.classList.add('active', 'bg-amber-500', 'text-white', 'shadow-md', 'shadow-amber-500/25', 'border-amber-500');

                // Smoothly center the active tab in the horizontal scroll container
                targetTab.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });

                const categorySlug = targetTab.dataset.category;

                // Update browser URL without reloading
                const url = new URL(window.location);
                if (categorySlug === 'all') {
                    url.searchParams.delete('category');
                } else {
                    url.searchParams.set('category', categorySlug);
                }
                window.history.pushState({}, '', url);

                if (!triggerFetch) return;

                // Show loader
                if (productGrid && loadingIndicator) {
                    productGrid.style.opacity = '0.3';
                    loadingIndicator.classList.remove('hidden');
                }

                // AJAX Fetch
                fetch(`{{ route('products.user') }}?category=${categorySlug}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    if (productGrid) {
                        productGrid.innerHTML = data.html;
                        productGrid.style.opacity = '1';
                    }
                    if (loadingIndicator) {
                        loadingIndicator.classList.add('hidden');
                    }
                })
                .catch(err => {
                    console.error(err);
                    if (productGrid) productGrid.style.opacity = '1';
                    if (loadingIndicator) loadingIndicator.classList.add('hidden');
                });
            }

            // Switch Category using Arrow Keys or Buttons
            function switchCategory(direction) {
                const tabsArr = Array.from(tabs);
                if (!tabsArr.length) return;

                let currentIndex = tabsArr.findIndex(t => t.classList.contains('active'));
                if (currentIndex === -1) currentIndex = 0;

                let targetIndex;
                if (direction === 'prev') {
                    targetIndex = currentIndex - 1;
                    if (targetIndex < 0) targetIndex = tabsArr.length - 1; // loop around
                } else {
                    targetIndex = currentIndex + 1;
                    if (targetIndex >= tabsArr.length) targetIndex = 0; // loop around
                }

                activateTab(tabsArr[targetIndex], true);
            }

            // Click listener for each category pill
            tabs.forEach(tab => {
                tab.addEventListener('click', function () {
                    activateTab(this, true);
                });
            });

            // On-Screen Arrow Buttons
            if (prevCategoryBtn) {
                prevCategoryBtn.addEventListener('click', () => switchCategory('prev'));
            }
            if (nextCategoryBtn) {
                nextCategoryBtn.addEventListener('click', () => switchCategory('next'));
            }

            // Global Keyboard Arrow Key Listener
            document.addEventListener('keydown', (e) => {
                // Ignore if user is currently typing in an input, textarea, or select
                const activeEl = document.activeElement;
                if (activeEl && (activeEl.tagName === 'INPUT' || activeEl.tagName === 'TEXTAREA' || activeEl.tagName === 'SELECT' || activeEl.isContentEditable)) {
                    return;
                }

                // Ignore if drawer is open
                if (drawer && !drawer.classList.contains('translate-x-full')) {
                    return;
                }

                if (e.key === 'ArrowLeft') {
                    e.preventDefault();
                    switchCategory('prev');
                } else if (e.key === 'ArrowRight') {
                    e.preventDefault();
                    switchCategory('next');
                }
            });

            // Natural Mouse Wheel Horizontal Scrolling on Tabs
            if (tabsContainer) {
                tabsContainer.addEventListener('wheel', (e) => {
                    if (e.deltaY !== 0 && !e.shiftKey) {
                        e.preventDefault();
                        tabsContainer.scrollLeft += e.deltaY;
                    }
                }, { passive: false });
            }

            // Ensure active tab on load is centered
            const initialActiveTab = document.querySelector('.category-tab-pill.active');
            if (initialActiveTab) {
                setTimeout(() => {
                    initialActiveTab.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                }, 150);
            }

            // Slideout Quotation Drawer Toggle
            function openDrawer() {
                if (drawer && backdrop) {
                    backdrop.classList.remove('hidden');
                    setTimeout(() => backdrop.classList.remove('opacity-0'), 10);
                    drawer.classList.remove('translate-x-full');
                }
            }

            function closeDrawer() {
                if (drawer && backdrop) {
                    drawer.classList.add('translate-x-full');
                    backdrop.classList.add('opacity-0');
                    setTimeout(() => backdrop.classList.add('hidden'), 300);
                }
            }

            if (triggerBtn) triggerBtn.addEventListener('click', openDrawer);
            if (closeBtn) closeBtn.addEventListener('click', closeDrawer);
            if (backdrop) backdrop.addEventListener('click', closeDrawer);
        });
    </script>

@endsection
