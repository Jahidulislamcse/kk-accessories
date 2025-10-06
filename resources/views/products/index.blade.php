@extends('layouts.master')

@section('title', 'Products')

@section('content')

<div class="max-w-7xl mx-auto card-container">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl tracking-tight">
            @if(!empty($setting->products_header))
                {{ $setting->products_header }}
            @else
                Our Products
            @endif
        </h1>
    </div>
    
    <div class="flex flex-wrap justify-left gap-4 mb-10">
        <button class="category-tab {{ !$selectedCategory ? 'active' : '' }}" data-category="all">All</button>
        @foreach($allCategories as $cat)
            <button class="category-tab {{ $selectedCategory == $cat->slug ? 'active' : '' }}" data-category="{{ $cat->slug }}">
                {{ $cat->name }}
            </button>
        @endforeach
    </div>

    <div id="productGrid">
        @include('products.partials.products-grid', ['categories' => $categories])
    </div>

    {{-- @foreach($categories as $category)
        @if($category->products->count())
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ $category->name }}</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($category->products as $product)
                    <div class="flex flex-col bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105 hover:shadow-xl group relative">
                        <!-- Image Container -->
                        <div class="relative flex-shrink-0">
                            @if($product->cover_image)
                                <img alt="{{ $product->name }}" class="h-48 w-full object-cover" src="{{ asset('upload/' . $product->cover_image) }}">
                            @elseif($product->images->first())
                                <img alt="{{ $product->name }}" class="h-48 w-full object-cover" src="{{ asset('upload/' . $product->images->first()->image) }}">
                            @else
                                <img alt="{{ $product->name }}" class="h-48 w-full object-cover" src="https://via.placeholder.com/400x200?text=No+Image">
                            @endif

                            <!-- Hover Button -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/25">
                                <a href="{{ route('products.show', $product->slug) }}"
                                    class="px-6 py-2 border border-white text-white font-medium rounded-md transition-transform transition-colors duration-200 transform hover:scale-105">
                                    View Product
                                </a>
                            </div>
                        </div>

                        <!-- Product Info -->
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div>
                                <h3 class="mt-2 text-xl font-semibold text-gray-900">{{ $product->name }}</h3>
                                <p class="mt-3 text-base text-gray-500">{{ Str::limit($product->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach --}}
</div>

<style>
    .card-container {
        margin-top: 50px;
        margin-bottom: 80px;
    }
    .category-tab {
        padding: 8px 20px;
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
</style>

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
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(res => res.json())
                .then(data => {
                    productGrid.innerHTML = data.html;
                })
                .catch(err => console.error(err));
            });
        });
    });
</script>


@endsection
