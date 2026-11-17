@php
    $settings = \App\Models\Setting::first();
@endphp
<footer class="bg-slate-950 text-slate-300 border-t border-slate-800">
    <!-- Top Footer Bar -->
    <div class="container mx-auto px-4 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Col 1: Brand Info -->
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    @if($settings && $settings->logo)
                        <div class="p-1.5 rounded-xl bg-white/5 border border-white/10">
                            <img src="{{ asset('upload/' . $settings->logo) }}" alt="Logo" class="h-10 w-auto object-contain">
                        </div>
                    @else
                        <div class="h-10 w-10 rounded-xl bg-gradient-to-tr from-amber-600 to-amber-400 flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                    @endif
                    <h2 class="text-xl font-bold font-heading text-white tracking-tight">
                        {{ $settings->company ?? 'K&K Accessories' }}
                    </h2>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Leading manufacturer of premier garment accessories, woven labels, hang tags, badges, and trims. Delivering excellence, precision, and global standards to the world's apparel industry.
                </p>
                @if($settings && $settings->email)
                    <div class="flex items-center gap-2 text-sm text-slate-300 pt-2">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>{{ $settings->email }}</span>
                    </div>
                @endif
                @if($settings && $settings->phone)
                    <div class="flex items-center gap-2 text-sm text-slate-300">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>{{ $settings->phone }}</span>
                    </div>
                @endif
            </div>

            <!-- Col 2: Quick Links -->
            <div>
                <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 mb-4 font-heading">Explore</h3>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-amber-400 transition-colors">Home</a></li>
                    <li><a href="{{ route('products.user') }}" class="hover:text-amber-400 transition-colors">Product Portfolio</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-amber-400 transition-colors">Services & Capabilities</a></li>
                    <li><a href="{{ route('managing-body') }}" class="hover:text-amber-400 transition-colors">Corporate Management</a></li>
                    <li><a href="{{ route('gallery.user') }}" class="hover:text-amber-400 transition-colors">Gallery & Showroom</a></li>
                    <li><a href="{{ route('branches.user') }}" class="hover:text-amber-400 transition-colors">Production Factories</a></li>
                </ul>
            </div>

            <!-- Col 3: Categories & Capabilities -->
            <div>
                <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 mb-4 font-heading">Products & Trims</h3>
                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('products.user') }}" class="hover:text-amber-400 transition-colors">Woven & Printed Labels</a></li>
                    <li><a href="{{ route('products.user') }}" class="hover:text-amber-400 transition-colors">Hangtags & Price Tickets</a></li>
                    <li><a href="{{ route('products.user') }}" class="hover:text-amber-400 transition-colors">Metal Badges & Buttons</a></li>
                    <li><a href="{{ route('products.user') }}" class="hover:text-amber-400 transition-colors">Leather & PU Patches</a></li>
                    <li><a href="{{ route('products.user') }}" class="hover:text-amber-400 transition-colors">Heat Transfer & Silicon Badges</a></li>
                    <li><a href="{{ route('products.user') }}" class="hover:text-amber-400 transition-colors">Ribbons, Tapes & Drawcords</a></li>
                </ul>
            </div>

            <!-- Col 4: Corporate Office & Inquiry -->
            <div>
                <h3 class="text-sm font-bold uppercase tracking-wider text-amber-400 mb-4 font-heading">Headquarters</h3>
                <p class="text-sm text-slate-400 mb-4 leading-relaxed">
                    {{ $settings->address ?? 'Dhaka, Bangladesh' }}
                </p>
                <div class="p-4 rounded-xl bg-slate-900 border border-slate-800">
                    <p class="text-xs text-slate-400 mb-2">Looking for bespoke production or international export inquiry?</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-400 hover:text-amber-300">
                        <span>Send an Inquiry</span>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="mt-12 pt-8 border-t border-slate-900 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© {{ date('Y') }} {{ $settings->company ?? 'K&K Accessories' }}. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="{{ route('contact') }}" class="hover:text-slate-400 transition-colors">Privacy Policy</a>
                <span>•</span>
                <a href="{{ route('contact') }}" class="hover:text-slate-400 transition-colors">Terms of Service</a>
                <span>•</span>
                <a href="{{ route('login') }}" class="text-slate-600 hover:text-amber-400 transition-colors">Staff Login</a>
            </div>
        </div>
    </div>
</footer>
