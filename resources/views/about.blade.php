@extends('layouts.app')

@section('title', 'من نحن')

@section('navbar')
     @extends('partials.navbar')
@endsection

@section('content')
<section class="py-1">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h4 class=" fw-bold text-dark"
                    style="border-bottom: 3px solid #253E69; padding-bottom: 10px; display: inline-block;">
                    من نحنُ
                </h4>
            </div>
            <div class="row align-items-center g-4">
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <h3 class="fw-bold mb-4 text-lg-start text-center" style="font-family: 'Tajawal', sans-serif;">شركة
                        المصنع الأول للصناعات الصحية المحدودة</h3>
                    <div class="about-content">
                        <p class="lead text-muted mb-4 " style="line-height: 1.8; text-align: justify;">
                            يعد "المصنع الأول للصناعات الصحية المحدودة" شركة سعودية مستثمرة في اليمن منذُ ٢٠١٩م،
                            فهو أول مصنع متخصص في صناعة حفاضات الأطفال على مستوى اليمن، مع وجود خطة مستقبلية
                            لإدراج بعض الصناعات الأخرى المتكاملة مع المنتج الحالي.
                        </p>
                        <p class="lead text-muted" style="line-height: 1.8; text-align: justify;">
                            يعد منتجنا الأول "لوفي بيبي" حفاضات عالية الجودة صُنعت بأيدي يمنية وتتميز بأنها عالية
                            الامتصاص
                            بفضل الطبقات المتعددة والمواد اللطيفة والفعالة التي تُبقي بشرة الطفل جافة لساعات طويلة.
                            كما أنها متوفرة بمقاسات وأحجام مختلفة لتناسب جسم الطفل وحركته في كل مرحلة من مراحله العمرية.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image shadow-lg rounded overflow-hidden">
                        <img src="{{ asset('images/factory.jpg') }}" alt="صورة منتجات لوفي بيبي" class="img-fluid w-100"
                            style="max-height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection