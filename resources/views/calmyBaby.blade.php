@extends('layouts.app')

@section('title', $data['title'])

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')

<section style="background-image: url('{{ asset('images/photo2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container pb-5">
        <div class="text-center mb-4">
            <h3 class="fw-bold mb-2" style="display: inline-block; padding-bottom: 5px;">
                {{ $data['title'] }}
            </h3>
            <h5 class="text-muted font-bold">
                {{ $data['description'] }}
            </h5>
        </div>

        <div class="row gy-4 mx-5">
            @foreach($data['features'] as $feature)
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                             style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem; background-color: {{ $feature['color'] }}1A">
                            <i class="{{ $feature['icon'] }}" style="color: {{ $feature['color'] }}"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">{{ $feature['title'] }}</h5>
                            <p class="card-text text-muted">
                                {{ $feature['text'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-2">
    <div class="container py-1">
        <div class="row align-items-center g-4">
            <div class="col-md-6 mb-4" data-aos="fade-left">
                <h3 class="fw-bold mb-4 text-dark" style="font-family: 'Tajawal', sans-serif;">
                    لماذا تختار {{ $data['title'] }}؟
                </h3>
                <ul class="features-list">
                    @foreach($data['sizes'] as $size)
                        <li><span class="check-icon">✔</span> {{ $size }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <div class="about-image rounded overflow-hidden">
                    <img src="{{ asset('images/CalmyBaby.png') }}" alt="صورة منتجات {{ $data['title'] }}"
                         class="img-fluid w-100" style="max-height: 500px; opacity: 0.8;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center">
            <h3 class="fw-bold mb-2" style="display: inline-block; padding-bottom: 5px;">
                مجموعة {{ $data['title'] }}
            </h3>
            <h6 class="text-muted">
                اختر المقاس المناسب لطفلك من مجموعتنا المتنوعة من الحفاضات عالية الجودة
            </h6>
        </div>

        <div class="row justify-content-center my-4 text-center">
            @foreach($data['sizes'] as $size)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3" data-aos="zoom-in">
                    <button class="custom-btn btn btn-outline-light w-100 text-black border rounded-3 py-3 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1rem; font-weight: 900;">
                        {{ $size }}
                    </button>
                </div>
            @endforeach
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($data['products'] as $product)
                <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                        <img src="{{ asset($product['image']) }}"
                             class="card-img-top mx-auto rounded-top img-fluid"
                             alt="{{ $product['name'] }}"
                             style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">

                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-2">{{ $product['name'] }}</h5>
                            <p class="card-text text-muted small">
                                {{ $product['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-5">
            <button class="btn text-white rounded-3 px-5 py-3 fw-semibold"
                    style="background-color: #2b3b6b; transition: 0.3s; font-size: 1rem; font-weight: 900;">
                عرض جميع المنتجات
            </button>
        </div>
    </div>
</section>

@endsection
