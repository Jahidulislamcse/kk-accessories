 @extends('layouts.master')

 @section('title', 'Contact')

 @section('content')

 <main class="flex-1">
     <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
             <!-- Left Side -->
             <div class="flex flex-col gap-8">
                 <div>
                     <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">Contact Us</h1>
                     <p class="mt-4 text-lg text-gray-600">
                         We're here to help. Reach out to us with any questions or inquiries.
                     </p>
                 </div>

                 <!-- Contact Form -->
                 <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                     @csrf

                     <div>
                         <input type="text" name="name" id="name" placeholder="Your Name" autocomplete="name"
                             class="block w-full rounded-md border-gray-300 px-4 py-3 text-gray-900 shadow-sm
                                focus:border-[#1193d4] focus:ring-[#1193d4] sm:text-sm"
                             value="{{ old('name') }}" />
                         @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                     </div>

                     <div>
                         <input type="email" name="email" id="email" placeholder="Your Email" autocomplete="email"
                             class="block w-full rounded-md border-gray-300 px-4 py-3 text-gray-900 shadow-sm
                                focus:border-[#1193d4] focus:ring-[#1193d4] sm:text-sm"
                             value="{{ old('email') }}" />
                         @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                     </div>

                     <div>
                         <textarea name="message" id="message" placeholder="Your Message" rows="4"
                             class="block w-full rounded-md border-gray-300 px-4 py-3 text-gray-900 shadow-sm
                                focus:border-[#1193d4] focus:ring-[#1193d4] sm:text-sm">{{ old('message') }}</textarea>
                         @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                     </div>

                     <div>
                         <button type="submit"
                             class="flex w-full justify-center rounded-md border border-transparent bg-[#1193d4]
                                px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-sky-600
                                focus:outline-none focus:ring-2 focus:ring-[#1193d4] focus:ring-offset-2
                                transition-colors duration-200">
                             Send Message
                         </button>
                     </div>

                     @if(session('success'))
                     <div id="success-message" class="mb-6 p-4 text-green-800 bg-green-100 border border-green-200 rounded-lg">
                         {{ session('success') }}
                     </div>
                     <script>
                         setTimeout(function() {
                             const msg = document.getElementById('success-message');
                             if (msg) {
                                 msg.style.transition = "opacity 0.5s";
                                 msg.style.opacity = "0";
                                 setTimeout(() => msg.remove(), 500);
                             }
                         }, 3000);
                     </script>
                     @endif
                 </form>


                 <!-- Social Media -->
                 <div class="mt-8 border-t border-gray-200 pt-8">
                     <h3 class="text-lg font-medium text-gray-900">Follow us</h3>
                    <div class="mt-4 flex space-x-6">
                        @if(optional($settings)->facebook)
                            <a href="{{ $settings->facebook }}" class="text-gray-400 hover:text-gray-500" target="_blank">
                                <span class="sr-only">Facebook</span>
                                <i class="fab fa-facebook text-2xl"></i>
                            </a>
                        @endif
                    </div>

                 </div>
             </div>

             <!-- Right Side -->
             <div class="space-y-8">
                 <!-- Google Map -->
                 <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg">
                     <iframe src="{{ $settings->google_map ?? 'https://maps.google.com' }}"
                         class="w-full h-full object-cover"
                         height="450"
                         width="600"
                         style="border:0;"
                         allowfullscreen
                         loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>

                 <!-- Office Info -->
                 <div class="bg-white p-8 rounded-lg shadow-lg">
                     <h2 class="text-2xl font-bold text-gray-900">Our Office</h2>
                     <div class="mt-6 space-y-4">
                         @if(optional($settings)->address)
                         <div class="flex items-start">
                             <span class="material-symbols-outlined text-[#1193d4]"> location_on </span>
                             <div class="ml-3">
                                 <p class="text-base text-gray-700">Address</p>
                                 <p class="text-base text-gray-500">{{ $settings->address }}</p>
                             </div>
                         </div>
                         @endif

                         @if(optional($settings)->phone_number)
                         <div class="flex items-start">
                             <span class="material-symbols-outlined text-[#1193d4]"> call </span>
                             <div class="ml-3">
                                 <p class="text-base text-gray-700">Phone</p>
                                 <p class="text-base text-gray-500">{{ $settings->phone_number }}</p>
                             </div>
                         </div>
                         @endif

                         @if(optional($settings)->contact_mail)
                         <div class="flex items-start">
                             <span class="material-symbols-outlined text-[#1193d4]"> mail </span>
                             <div class="ml-3">
                                 <p class="text-base text-gray-700">Email</p>
                                 <p class="text-base text-gray-500">{{ $settings->contact_mail }}</p>
                             </div>
                         </div>
                         @endif
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </main>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

 @endsection