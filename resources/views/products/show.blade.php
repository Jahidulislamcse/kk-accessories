@extends('layouts.master')

@section('title', $product->name)

@section('content')
<div class="max-w-5xl mx-auto mt-12 px-4 py-5 my-10">
     <a href="{{ url()->previous() }}"
       class="absolute top-0 left-0 mt-4 ml-4 inline-flex items-center px-4 py-2 border border-[var(--primary-color)] text-[var(--primary-color)] font-medium rounded-md hover:bg-[var(--primary-color)] hover:text-white transition-colors duration-200">
        Go Back
    </a>

    <div class="flex flex-col lg:flex-row gap-8">
        <div class="flex-1">
            <div class="mb-4 relative">
                <img id="mainImage" src="{{ asset('upload/' . ($product->cover_image ?? ($product->images->first()->image ?? ''))) }}"
                     alt="{{ $product->name }}"
                     class="w-full rounded shadow-md object-cover"
                     style="height: 400px; cursor: zoom-in;">
            </div>

            @if($product->images->count())
                <div class="flex gap-2 flex-wrap">
                    @foreach($product->images as $img)
                        <img src="{{ asset('upload/' . $img->image) }}"
                             class="w-20 h-20 object-cover rounded cursor-pointer thumbnail"
                             data-full="{{ asset('upload/' . $img->image) }}">
                    @endforeach
                </div>
            @endif
        </div>

        <div class="flex-1">
            <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>
            <p class="text-sm text-[var(--primary-color)] mb-2">{{ $product->category->name ?? 'Uncategorized' }}</p>
            <p class="text-gray-700">{{ $product->description }}</p>
        </div>
    </div>
</div>

<script>
const mainImage = document.getElementById('mainImage');
const thumbnails = document.querySelectorAll('.thumbnail');

thumbnails.forEach(th => {
    th.addEventListener('click', () => {
        mainImage.src = th.dataset.full;
    });
});

mainImage.addEventListener('mousemove', function(e) {
    const rect = mainImage.getBoundingClientRect();
    const x = ((e.clientX - rect.left) / rect.width) * 100;
    const y = ((e.clientY - rect.top) / rect.height) * 100;
    mainImage.style.transformOrigin = `${x}% ${y}%`;
    mainImage.style.transform = 'scale(2)';
});

mainImage.addEventListener('mouseleave', function() {
    mainImage.style.transform = 'scale(1)';
    mainImage.style.transformOrigin = 'center center';
});
</script>

<style>
#mainImage {
    transition: transform 0.2s ease;
}
.thumbnail:hover {
    border: 2px solid var(--primary-color);
}
</style>
@endsection
