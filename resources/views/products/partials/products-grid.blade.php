@foreach($categories as $category)
    @if($category->products->count())
        <div class="mb-70">
            <div class="section-title mb-35">
                <div class="sub-title"><span>Category</span></div>
                <h2 class="title">{{ $category->name }}</h2>
            </div>
            <div class="row g-4">
                @foreach($category->products as $product)
                    @php
                        $image = $product->cover_image ?: optional($product->images->first())->image;
                    @endphp
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="kk-card">
                            <a href="{{ route('products.show', $product->slug) }}">
                                @if($image)
                                    <img class="kk-card__image" src="{{ asset('upload/' . $image) }}" alt="{{ $product->name }}">
                                @else
                                    <img class="kk-card__image" src="{{ asset('echix/images/home-1/inner/products/1.jpg') }}" alt="{{ $product->name }}">
                                @endif
                            </a>
                            <div class="kk-card__body">
                                <span class="kk-card__meta">{{ $category->name }}</span>
                                <h3 class="kk-card__title">
                                    <a href="{{ route('products.show', $product->slug) }}">{{ \Illuminate\Support\Str::limit($product->name, 42) }}</a>
                                </h3>
                                <p>{{ \Illuminate\Support\Str::limit(strip_tags($product->description), 80) }}</p>
                                <a href="{{ route('products.show', $product->slug) }}" class="theme-btn mt-15">View Product</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endforeach
