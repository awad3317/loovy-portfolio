<div>
    <section
        style="background-image: url('{{ asset('images/photo2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container pb-5">
            <div class="text-center mb-4">
                <h3 class="fw-bold mb-2">{{ $calmy->name }}</h3>
                <h5 class="text-muted font-bold">{{ $calmy->description }}</h5>
            </div>

            <div class="row gy-4 mx-5">
                @foreach ($calmy->features as $feature)
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="card shadow-sm h-100 border-0 rounded-4">
                            <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                                style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem; background-color: {{ $feature->color }}1A">
                                <i class="{{ $feature->icon }}" style="color: {{ $feature->color }}"></i>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title fw-semibold">{{ $feature->title }}</h5>
                                <p class="card-text text-muted">{{ $feature->text }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-5 my-2">
    <div class="container py-5">
        <div class="row align-items-center g-4">
            <div class="col-md-6 mb-4">
                <h3 class="fw-bold mb-4 text-dark">لماذا تختار كالمي بيبي؟</h3>
                <ul class="features-list">
                    <li><span class="check-icon">✔</span> تصميم T مرن</li>
                    <li><span class="check-icon">✔</span> إمتصاص فائق</li>
                    <li><span class="check-icon">✔</span> سطح داخلي قطني ناعم</li>
                    <li><span class="check-icon">✔</span> حاجز تسريب مزدوج (Double lock)</li>
                    <li><span class="check-icon">✔</span> اذان مطاطية جانبية</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/CalmyBaby.png') }}" alt="صورة منتجات لوفي بيبي"
                     class="img-fluid w-100" style="max-height: 500px; opacity: 0.8;">
            </div>
        </div>
    </div>
</section>

    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h3 class="fw-bold mb-2">{{ $calmy->name }}</h3>
                <h6 class="text-muted">اختر المقاس المناسب لطفلك من مجموعتنا المتنوعة</h6>
            </div>

            <div class="row justify-content-center my-4 text-center">
                @foreach ($calmy->products as $product)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                        <button wire:click="filterBySize('{{ $product->size }}')"
                            class="custom-btn btn w-100 border rounded-3 py-3 px-3 fw-semibold
                                   {{ $selectedSize === $product->size ? 'btn-dark text-white' : 'btn-outline-light text-black' }}">
                            {{ $product->size }}
                        </button>
                    </div>
                @endforeach

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                    <button wire:click="resetFilter"
                        class="custom-btn btn w-100 border rounded-3 py-3 px-3 fw-semibold btn-primary"style="background-color: #2b3b6b;">
                        عرض الكل
                    </button>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                @forelse($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('products.show', ['type' => $product->type, 'id' => $product->id]) }}"
                            class="text-decoration-none text-dark">
                            <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                                <img src="{{ asset($product->image) }}"
                                    class="card-img-top mx-auto rounded-top img-fluid" alt="{{ $product->name }}"
                                    style="object-fit: contain; max-height: 200px; width: auto;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-2">{{ $product->name }}</h5>
                                    <p class="card-text text-muted small">{{ $product->description }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p class="text-center text-muted">لا توجد منتجات لهذا المقاس.</p>
                @endforelse
            </div>
        </div>
    </section>
</div>
