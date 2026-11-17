@extends('layouts.master')

@section('title', 'Products | K&K Accessories')

@section('content')
    <section class="page-title kk-page-title" style="background-image: url({{ asset('echix/images/home-1/inner/page-title-bg.png') }});">
        <div class="auto-container">
            <h1 class="title">Our Products</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </section>

    <section class="kk-page-section">
        <div class="container">
            <div class="kk-filter">
                <button class="category-tab {{ !$selectedCategory ? 'active' : '' }}" data-category="all">All</button>
                @foreach ($allCategories as $cat)
                    <button class="category-tab {{ $selectedCategory == $cat->slug ? 'active' : '' }}" data-category="{{ $cat->slug }}">
                        {{ $cat->name }}
                    </button>
                @endforeach
            </div>

            <div id="productGrid">
                @include('products.partials.products-grid', ['categories' => $categories])
            </div>
        </div>
    </section>

    <div id="quotationPanel" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request a Quotation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        @if(session('success'))<div class="kk-alert">{{ session('success') }}</div>@endif
                        <div class="mb-3"><input class="kk-form-control" type="text" name="name" placeholder="Your Name" value="{{ old('name') }}"></div>
                        <div class="mb-3"><input class="kk-form-control" type="email" name="email" placeholder="Your Email" value="{{ old('email') }}"></div>
                        <div class="mb-3"><textarea class="kk-form-control" name="message" placeholder="Your Message">{{ old('message') }}</textarea></div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="theme-btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <button type="button" class="theme-btn" style="position: fixed; left: 0; top: 55%; z-index: 99; border-radius: 0 8px 8px 0;" data-bs-toggle="modal" data-bs-target="#quotationPanel">
        Make Quote
    </button>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.category-tab');
    const productGrid = document.getElementById('productGrid');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            fetch(`{{ route('products.user') }}?category=${tab.dataset.category}`, {
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(res => res.json())
            .then(data => productGrid.innerHTML = data.html)
            .catch(err => console.error(err));
        });
    });
});
</script>
@endpush
