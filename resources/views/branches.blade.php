@extends('layouts.app')

@section('title', 'الرئيسية')

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')
 <style>
        .nav-tabs .nav-link.active {
            background-color: #253E69 !important;
            color: white !important;
            border-color: #253E69 #fff !important;
        }
        .nav-tabs .nav-link.active:hover {
            color: white !important;
            background-color: #1a2d4d !important;
        }
         .nav-tabs .nav-link:hover {
            color: #253E69 !important;
            background-color: #f8f9fa !important;
        }

        
    </style>
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    فروعنا
                </h3>
                <h6 class="text-muted mt-3">
                    تواجدنا في 15 فرع رئيسي لخدمتكم
                </h6>
            </div>
            <div class="row align-items-start gy-4">
               
                <div class="col-lg-6">
                    <ul class="nav nav-tabs mb-3" id="countryTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-dark" id="yemen-tab" data-bs-toggle="tab"
                                data-bs-target="#yemen" type="button" role="tab">اليمن</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="saudi-tab" data-bs-toggle="tab" data-bs-target="#saudi"
                                type="button" role="tab">السعودية</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="countryTabContent"
                        style="max-height: 550px; overflow-y: auto; direction: ltr;">
                        {{-- تبويب اليمن --}}
                        <div class="tab-pane fade show active" id="yemen" role="tabpanel">
                            <div class="d-flex flex-column gap-3">
                                @foreach ($branches['yemen'] as $branch)
                                    <div class="card shadow-sm rounded-4 border-0" style="direction: rtl;">
                                        <div class="card-body">
                                            <h5 class="card-title fw-semibold mb-3">{{ $branch['name'] }}</h5>
                                            <div class="d-flex align-items-center mb-2 text-muted">
                                                <i class="fa-solid fa-location-dot text-dark me-3 fs-5"></i>
                                                <span>{{ $branch['address'] }}</span>
                                            </div>
                                            <div class="d-flex align-items-center text-muted">
                                                <i class="fa-solid fa-phone text-dark me-3 fs-5"></i>
                                                <span>{{ $branch['phone'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- تبويب السعودية --}}
                        <div class="tab-pane fade" id="saudi" role="tabpanel">
                            <div class="d-flex flex-column gap-3">
                                @foreach ($branches['saudi'] as $branch)
                                    <div class="card shadow-sm rounded-4 border-0" style="direction: rtl;">
                                        <div class="card-body">
                                            <h5 class="card-title fw-semibold mb-3">{{ $branch['name'] }}</h5>
                                            <div class="d-flex align-items-center mb-2 text-muted">
                                                <i class="fa-solid fa-location-dot text-dark me-3 fs-5"></i>
                                                <span>{{ $branch['address'] }}</span>
                                            </div>
                                            <div class="d-flex align-items-center text-muted">
                                                <i class="fa-solid fa-phone text-dark me-3 fs-5"></i>
                                                <span>{{ $branch['phone'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="rounded-4 shadow-sm overflow-hidden" style="height: 550px;">
                        <iframe
                            src="https://www.google.com/maps/d/embed?mid=1Lv0VGdKiJRY2ucl41RbrYrGBYyfZvDw&ehbc=2E312F&ll=18.0,45.0&z=6"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="موقع مصنع لوفي بيبي - سيئون، اليمن">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
