<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
    <link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B600%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" onload="this.rel='stylesheet'" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>@yield('title', 'Maxone International')</title>
    <link rel="icon" href="{{ asset('upload/favicon.ico') }}" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style type="text/tailwindcss">
        :root { --primary-color: #1193d4; }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-gray-50 text-gray-800">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        @include('layouts.header')

        <main class="flex-grow">
            @yield('content')
        </main>
        <a href="https://wa.me/8801612152443" target="_blank"
            class="fixed bottom-6 right-6 text-white rounded-full z-50 flex items-center justify-center"
            title="Chat with me on WhatsApp">
        <img src="{{ asset('backend/images/whatsapp.png') }}" 
            alt="WhatsApp" 
            class="w-20 h-20 object-contain">
        </a>
        @include('layouts.footer')
    </div>
</body>

</html>
