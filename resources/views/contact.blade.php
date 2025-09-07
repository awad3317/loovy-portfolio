@extends('layouts.app')

@section('title', 'الرئيسية')

@section('navbar')
     @extends('partials.navbar')
@endsection

@section('content')
<section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    تواصل معنا
                </h3>
                <h6 class="text-muted mt-3" data-aos="fade-up" data-aos-delay="100">
                    نحن هنا للإجابة على استفساراتكم وتلبية احتياجاتكم، لا تترددوا في التواصل معنا
                </h6>
            </div>

            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="card shadow-sm h-100 border-0"
                        style="background-color: #253E690D; border-radius: 12px;">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4 fw-semibold">معلومات التواصل</h4>
                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="250">
                                <i class="fa-solid fa-location-dot text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">العنوان</h6>
                                    <p class="mb-0 text-muted">اليمن، حضرموت، سيئون</p>
                                </div>
                            </div>

                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="300">
                                <i class="fa-solid fa-phone text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">الهاتف</h6>
                                    <p class="mb-0 text-muted">+967 777000000</p>
                                </div>
                            </div>

                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="350">
                                <i class="fa-solid fa-envelope text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">البريد الإلكتروني</h6>
                                    <p class="mb-0 text-muted">info@health-industries.com</p>
                                </div>
                            </div>
                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="250">
                                <i class="fa-solid fa-location-dot text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">العنوان</h6>
                                    <p class="mb-0 text-muted">المملكة العربية السعودية , جدة</p>
                                </div>
                            </div>

                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="300">
                                <i class="fa-solid fa-phone text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">الهاتف</h6>
                                    <p class="mb-0 text-muted">558885413 966+</p>
                                </div>
                            </div>

                            <div class="mb-0 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="350">
                                <i class="fa-solid fa-envelope text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">البريد الإلكتروني</h6>
                                    <p class="mb-0 text-muted">info@loovybaby.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="card shadow-sm h-100 border-0"
                        style="background-color: #253E690D; border-radius: 12px;">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4 fw-semibold">أرسل لنا رسالة</h4>
                            <livewire:contactform lazy />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection