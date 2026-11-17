@extends('layouts.master')

@section('title', $product->name . ' | K&K Accessories')

@section('content')
    <section class="page-title kk-page-title" style="background-image: url({{ asset('echix/images/home-1/inner/page-title-bg.png') }});">
        <div class="auto-container">
            <h1 class="title">{{ $product->name }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('products.user') }}">Products</a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </div>
    </section>

    <section class="kk-page-section">
        <div class="container">
            @if (session('success'))<div class="kk-alert">{{ session('success') }}</div>@endif
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    @php $mainImage = $product->cover_image ?: optional($product->images->first())->image; @endphp
                    <img id="mainImage" class="kk-product-detail-img" src="{{ $mainImage ? asset('upload/' . $mainImage) : asset('echix/images/home-1/inner/products/product-details.jpg') }}" alt="{{ $product->name }}">
                    @if ($product->images->count())
                        <div class="d-flex gap-2 flex-wrap mt-3">
                            @foreach ($product->images as $img)
                                <img src="{{ asset('upload/' . $img->image) }}" class="kk-thumb thumbnail" alt="{{ $product->name }}" data-full="{{ asset('upload/' . $img->image) }}">
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-lg-6">
                    <div class="section-title mb-20">
                        <div class="sub-title"><span>{{ $product->category->name ?? 'Product' }}</span></div>
                        <h2 class="title">{{ $product->name }}</h2>
                    </div>
                    <p>{!! nl2br(e($product->description)) !!}</p>
                    <div class="d-flex gap-3 flex-wrap mt-35">
                        <a href="{{ route('products.user') }}" class="theme-btn style-2">Back To Products</a>
                        <button type="button" class="theme-btn" data-bs-toggle="modal" data-bs-target="#quotationModal">Request Quotation</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="quotationModal" class="modal fade" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Request a Quotation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3"><input class="kk-form-control" type="text" name="name" placeholder="Your Name" value="{{ old('name') }}"></div>
                        <div class="mb-3"><input class="kk-form-control" type="email" name="email" placeholder="Your Email" value="{{ old('email') }}"></div>
                        <div class="mb-3"><textarea class="kk-form-control" name="message" placeholder="Your Message">{{ old('message', 'Quotation request for ' . $product->name) }}</textarea></div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="theme-btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
document.querySelectorAll('.thumbnail').forEach(thumbnail => {
    thumbnail.addEventListener('click', () => {
        document.getElementById('mainImage').src = thumbnail.dataset.full;
    });
});
</script>
@endpush
