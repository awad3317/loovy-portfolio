@extends('layouts.app')

@section('title', 'الرئيسية')

@section('navbar')
     @extends('partials.navbar')
@endsection

@section('content')
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
                    <div class="d-flex flex-column gap-3"
                        style="max-height: 550px; overflow-y: auto; direction: ltr;">

                        <div class="card shadow-sm rounded-4 border-0" style="direction: rtl;">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-3">فرع حضرموت - سيئون</h5>
                                <div class="d-flex align-items-center mb-2 text-muted">
                                    <i class="fa-solid fa-location-dot text-dark me-3 fs-5"></i>
                                    <span>شارع سيئون، الخط الرئيسي مقابل...</span>
                                </div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="fa-solid fa-phone text-dark me-3 fs-5"></i>
                                    <span>+967 777 777 777</span>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-sm rounded-4 border-0" style="direction: rtl;">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-3">فرع حضرموت - سيئون</h5>
                                <div class="d-flex align-items-center mb-2 text-muted">
                                    <i class="fa-solid fa-location-dot text-dark me-3 fs-5"></i>
                                    <span>شارع سيئون، الخط الرئيسي مقابل...</span>
                                </div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="fa-solid fa-phone text-dark me-3 fs-5"></i>
                                    <span>+967 777 777 777</span>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm rounded-4 border-0" style="direction: rtl;">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-3">فرع عدن - المنصورة</h5>
                                <div class="d-flex align-items-center mb-2 text-muted">
                                    <i class="fa-solid fa-location-dot text-dark me-3 fs-5"></i>
                                    <span>الشارع الرئيسي - المنصورة - بجانب دوار كالتكس</span>
                                </div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="fa-solid fa-phone text-dark me-3 fs-5"></i>
                                    <span>+967 733 333 333</span>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm rounded-4 border-0" style="direction: rtl;">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-3">فرع صنعاء - شارع الجزائر</h5>
                                <div class="d-flex align-items-center mb-2 text-muted">
                                    <i class="fa-solid fa-location-dot text-dark me-3 fs-5"></i>
                                    <span>صنعاء، شارع الجزائر، بجانب مستشفى...</span>
                                </div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="fa-solid fa-phone text-dark me-3 fs-5"></i>
                                    <span>+967 711 111 111</span>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm rounded-4 border-0" style="direction: rtl;">
                            <div class="card-body">
                                <h5 class="card-title fw-semibold mb-3">فرع صنعاء - شارع الجزائر</h5>
                                <div class="d-flex align-items-center mb-2 text-muted">
                                    <i class="fa-solid fa-location-dot text-dark me-3 fs-5"></i>
                                    <span>صنعاء، شارع الجزائر، بجانب مستشفى...</span>
                                </div>
                                <div class="d-flex align-items-center text-muted">
                                    <i class="fa-solid fa-phone text-dark me-3 fs-5"></i>
                                    <span>+967 711 111 111</span>
                                </div>
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