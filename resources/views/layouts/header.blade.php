<header class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="flex items-center gap-2 text-[var(--primary-color)]">
                    @php $settings = \App\Models\Setting::first(); @endphp
                    @if($settings && $settings->logo)
                        <img src="{{ asset('upload/' . $settings->logo) }}" alt="Logo" height="32" width="32">
                    @else
                        <svg class="feather feather-shield" fill="none" height="32" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    @endif
                    <h1 class="text-2xl font-bold text-gray-900 tracking-tight">
                        {{ $settings->company ?? 'Company Name' }}
                    </h1>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="ml-nav hidden md:flex items-center gap-3">
                <a href="{{ route('home') }}"
                class="px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('home') 
                        ? 'border-amber-500 text-amber-600' 
                        : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                    Home
                </a>

                <a href="{{ route('products.user') }}"
                class="px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('products.user') 
                        ? 'border-amber-500 text-amber-600' 
                        : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                    Products
                </a>

                <a href="{{ route('managing-body') }}"
                class="px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('managing-body') 
                        ? 'border-amber-500 text-amber-600' 
                        : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                    Management
                </a>

                <a href="{{ route('gallery.user') }}"
                class="px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('gallery.user') 
                        ? 'border-amber-500 text-amber-600' 
                        : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                    Gallery
                </a>

                <a href="{{ route('contact') }}"
                class="px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('contact') 
                        ? 'border-amber-500 text-amber-600' 
                        : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                    Contact
                </a>
            </nav>


            <!-- Login + Mobile Menu Button -->
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" 
                    class="hidden md:inline-flex items-center justify-center rounded-md px-5 py-2.5 text-sm font-semibold text-white shadow-sm {{ request()->routeIs('login') ? 'bg-[var(--primary-color)]' : 'bg-[var(--primary-color)] hover:bg-amber-500' }}">
                    Login
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden p-2 text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden flex-col mt-4 space-y-3 md:hidden">
            <a href="{{ route('home') }}" 
                class="block px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('home') 
                    ? 'border-amber-500 text-amber-600' 
                    : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                Home
            </a>

            <a href="{{ route('products.user') }}" 
                class="block px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('products.user') 
                    ? 'border-amber-500 text-amber-600' 
                    : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                Products
            </a>

            <a href="{{ route('managing-body') }}" 
                class="block px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('managing-body') 
                    ? 'border-amber-500 text-amber-600' 
                    : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                Management
            </a>

            <a href="{{ route('gallery.user') }}" 
                class="block px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('gallery.user') 
                    ? 'border-amber-500 text-amber-600' 
                    : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                Gallery
            </a>

            <a href="{{ route('contact') }}" 
                class="block px-4 py-2 font-medium border-b-2 transition-colors duration-200 
                {{ request()->routeIs('contact') 
                    ? 'border-amber-500 text-amber-600' 
                    : 'border-transparent text-gray-700 hover:text-amber-600 hover:border-amber-400' }}">
                Contact
            </a>

            <a href="{{ route('login') }}" 
                class="inline-block bg-amber-500 text-white px-4 py-2 rounded-md font-medium hover:bg-amber-600 transition-colors duration-200">
                Login
            </a>
        </div>
    </div>
</header>

<style>
    body {
        padding-top: 80px;
    }
    .ml-nav {
        margin-left: 25%;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuButton = document.getElementById("mobile-menu-button");
        const mobileMenu = document.getElementById("mobile-menu");

        menuButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    });
</script>
