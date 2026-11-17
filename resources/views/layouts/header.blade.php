<header class="fixed top-0 left-0 w-full z-50 bg-slate-900/95 backdrop-blur-md border-b border-slate-800/80 shadow-lg transition-all duration-300">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group focus:outline-none">
                @php $settings = \App\Models\Setting::first(); @endphp
                @if($settings && $settings->logo)
                    <div class="relative flex items-center justify-center p-1 rounded-xl bg-white/5 border border-white/10 group-hover:border-amber-500/50 transition-colors">
                        <img src="{{ asset('upload/' . $settings->logo) }}" alt="Logo" class="h-12 w-auto max-h-12 object-contain rounded-lg">
                    </div>
                @else
                    <div class="h-12 w-12 rounded-xl bg-gradient-to-tr from-amber-600 to-amber-400 flex items-center justify-center text-white shadow-md shadow-amber-500/20">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                @endif
                <div>
                    <h1 class="text-xl md:text-2xl font-bold font-heading text-white tracking-tight group-hover:text-amber-400 transition-colors">
                        {{ $settings->company ?? 'K&K Accessories' }}
                    </h1>
                    <p class="text-[11px] font-medium tracking-wider text-amber-400/90 uppercase">Garment Accessories & Trims</p>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-1 lg:gap-2">
                <a href="{{ route('home') }}"
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200 
                   {{ request()->routeIs('home') 
                       ? 'bg-amber-500/10 text-amber-400 border border-amber-500/30' 
                       : 'text-slate-200 hover:text-white hover:bg-white/5' }}">
                    Home
                </a>

                <a href="{{ route('products.user') }}"
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200 
                   {{ request()->routeIs('products.user') 
                       ? 'bg-amber-500/10 text-amber-400 border border-amber-500/30' 
                       : 'text-slate-200 hover:text-white hover:bg-white/5' }}">
                    Products
                </a>

                <a href="{{ route('services') }}"
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200 
                   {{ request()->routeIs('services') 
                       ? 'bg-amber-500/10 text-amber-400 border border-amber-500/30' 
                       : 'text-slate-200 hover:text-white hover:bg-white/5' }}">
                    Services
                </a>

                <a href="{{ route('managing-body') }}"
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200 
                   {{ request()->routeIs('managing-body') 
                       ? 'bg-amber-500/10 text-amber-400 border border-amber-500/30' 
                       : 'text-slate-200 hover:text-white hover:bg-white/5' }}">
                    Management
                </a>

                <a href="{{ route('gallery.user') }}"
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200 
                   {{ request()->routeIs('gallery.user') 
                       ? 'bg-amber-500/10 text-amber-400 border border-amber-500/30' 
                       : 'text-slate-200 hover:text-white hover:bg-white/5' }}">
                    Gallery
                </a>

                <a href="{{ route('branches.user') }}"
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200 
                   {{ request()->routeIs('branches.user') 
                       ? 'bg-amber-500/10 text-amber-400 border border-amber-500/30' 
                       : 'text-slate-200 hover:text-white hover:bg-white/5' }}">
                    Factories
                </a>

                <a href="{{ route('contact') }}"
                   class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200 
                   {{ request()->routeIs('contact') 
                       ? 'bg-amber-500/10 text-amber-400 border border-amber-500/30' 
                       : 'text-slate-200 hover:text-white hover:bg-white/5' }}">
                    Contact
                </a>
            </nav>

            <!-- Actions -->
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ route('contact') }}" 
                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-semibold text-sm shadow-md shadow-amber-500/20 transition-all duration-200 transform hover:-translate-y-0.5">
                    <span>Request Quote</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button id="mobile-menu-button" type="button" class="md:hidden p-2.5 rounded-xl bg-white/5 border border-white/10 text-slate-200 hover:text-white focus:outline-none" aria-label="Toggle navigation">
                <svg id="menu-icon-bars" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-6 pt-2 border-t border-slate-800 space-y-1.5 animate-fadeIn">
            <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('home') ? 'bg-amber-500 text-white' : 'text-slate-200 hover:bg-white/5' }}">
                Home
            </a>
            <a href="{{ route('products.user') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('products.user') ? 'bg-amber-500 text-white' : 'text-slate-200 hover:bg-white/5' }}">
                Products
            </a>
            <a href="{{ route('services') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('services') ? 'bg-amber-500 text-white' : 'text-slate-200 hover:bg-white/5' }}">
                Services
            </a>
            <a href="{{ route('managing-body') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('managing-body') ? 'bg-amber-500 text-white' : 'text-slate-200 hover:bg-white/5' }}">
                Management
            </a>
            <a href="{{ route('gallery.user') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('gallery.user') ? 'bg-amber-500 text-white' : 'text-slate-200 hover:bg-white/5' }}">
                Gallery
            </a>
            <a href="{{ route('branches.user') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('branches.user') ? 'bg-amber-500 text-white' : 'text-slate-200 hover:bg-white/5' }}">
                Factories
            </a>
            <a href="{{ route('contact') }}" class="block px-4 py-2.5 rounded-lg text-base font-semibold {{ request()->routeIs('contact') ? 'bg-amber-500 text-white' : 'text-slate-200 hover:bg-white/5' }}">
                Contact
            </a>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="w-full text-center block px-5 py-3 rounded-xl bg-amber-500 hover:bg-amber-600 text-white font-bold text-sm shadow-md">
                    Request a Quote
                </a>
            </div>
        </div>
    </div>
</header>

<style>
    body {
        padding-top: 80px;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        const iconBars = document.getElementById("menu-icon-bars");
        const iconClose = document.getElementById("menu-icon-close");

        if (menuButton && mobileMenu) {
            menuButton.addEventListener("click", () => {
                const isHidden = mobileMenu.classList.toggle("hidden");
                if (iconBars && iconClose) {
                    iconBars.classList.toggle("hidden", !isHidden);
                    iconClose.classList.toggle("hidden", isHidden);
                }
            });
        }
    });
</script>
