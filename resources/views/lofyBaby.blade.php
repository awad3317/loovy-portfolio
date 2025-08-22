@extends('layouts.app')

@section('title', $data['title'])

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')

<section style="background-image: url('{{ asset('images/photo2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
 <div class="container pb-5">
    <div class="text-center mb-4">
        <h3 class="fw-bold mb-2">{{ $data['title'] }}</h3>
        <h5 class="text-muted font-bold">{{ $data['description'] }}</h5>
    </div>

    <div class="row gy-4 mx-5">
        @foreach($data['features'] as $feature)
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="card shadow-sm h-100 border-0 rounded-4">
                <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                     style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: {{ $feature['color'] }}1A;">
                    <i class="{{ $feature['icon'] }}" style="color: {{ $feature['color'] }};"></i>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title fw-semibold">{{ $feature['title'] }}</h5>
                    <p class="card-text text-muted">{{ $feature['text'] }}</p>
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
                <h3 class="fw-bold mb-4 text-dark">لماذا تختار {{ $data['title'] }}؟</h3>
                <ul class="features-list">
                    <li><span class="check-icon">✔</span> تصميم T مرن</li>
                    <li><span class="check-icon">✔</span> إمتصاص فائق</li>
                    <li><span class="check-icon">✔</span> سطح داخلي قطني ناعم</li>
                    <li><span class="check-icon">✔</span> حاجز تسريب مزدوج (Double lock)</li>
                    <li><span class="check-icon">✔</span> اذان مطاطية جانبية</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/photo3.png') }}" alt="صورة منتجات لوفي بيبي"
                     class="img-fluid w-100" style="max-height: 500px; opacity: 0.8;">
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="fw-bold">{{ $data['title'] }}</h3>
            <h6 class="text-muted">اختر المقاس المناسب لطفلك من مجموعتنا المتنوعة</h6>
        </div>

        <div class="row justify-content-center my-4 text-center">
            @foreach($data['sizes'] as $size)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                <button class="custom-btn btn btn-outline-light w-100 text-black border rounded-3 py-3 px-3 fw-semibold">
                    {{ $size }}
                </button>
            </div>
            @endforeach
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($data['products'] as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                    <img src="{{ asset($product['image']) }}" class="card-img-top mx-auto rounded-top img-fluid"
                         style="object-fit: contain; max-height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-2">{{ $product['name'] }}</h5>
                        <p class="card-text text-muted small">{{ $product['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            <button class="btn text-white rounded-3 px-5 py-3 fw-semibold" style="background-color: #2b3b6b;">
                عرض جميع المنتجات
            </button>
        </div>
    </div>
</section>

@endsection
