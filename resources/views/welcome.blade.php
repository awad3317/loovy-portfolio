@extends('layouts.app')

@section('title', 'الرئيسية')

@extends('partials.navbar_index')

@section('content')
    <section class="py-1">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h4 class=" fw-bold text-dark" style="border-bottom: 3px solid #253E69; padding-bottom: 10px; display: inline-block;">
                    من نحنُ
                </h4>
            </div>
            <div class="row align-items-center g-4">
                <div class="col-lg-6 mb-4">
                    <h3 class="fw-bold mb-4 text-lg-start text-center"" style="font-family: 'Tajawal', sans-serif;">شركة المصنع الأول للصناعات الصحية المحدودة</h3>
                    <div class="about-content">
                        <p class="lead text-muted mb-4 " style="line-height: 1.8; text-align: justify;">
                            يعد "المصنع الأول للصناعات الصحية المحدودة" شركة سعودية مستثمرة في اليمن منذُ ٢٠١٩م،
                            فهو أول مصنع متخصص في صناعة حفاضات الأطفال على مستوى اليمن، مع وجود خطة مستقبلية
                            لإدراج بعض الصناعات الأخرى المتكاملة مع المنتج الحالي.
                        </p>
                        <p class="lead text-muted" style="line-height: 1.8; text-align: justify;">
                            يعد منتجنا الأول "لوفي بيبي" حفاضات عالية الجودة صُنعت بأيدي يمنية وتتميز بأنها عالية الامتصاص
                            بفضل الطبقات المتعددة والمواد اللطيفة والفعالة التي تُبقي بشرة الطفل جافة لساعات طويلة.
                            كما أنها متوفرة بمقاسات وأحجام مختلفة لتناسب جسم الطفل وحركته في كل مرحلة من مراحله العمرية.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image shadow-lg rounded overflow-hidden">
                        <img src="{{asset('images/lofy2.jpg')}}" alt="صورة منتجات لوفي بيبي" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-1 mb-4">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="fw-bold mb-2" style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    حلولنا الصناعية
                </h3>
                <p class="text-muted mt-3">
                    نقدم مجموعة متكاملة من الحلول الصناعية لضمان توفير منتجات صحية عالية الجودة تلبي احتياجات الأطفال
                </p>
            </div>

            <div class="row gy-4">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                             style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{asset('images/hugeicons_test-tube-02.png')}}" alt="" srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">إلتزامنا بالجودة</h5>
                            <p class="card-text text-muted">
                                من خلال تطبيق أعلى معايير الجودة في جميع مراحل التصنيع، نضمن تقديم منتجات آمنة، موثوقة، ومتوافقة مع المواصفات العالمية.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                             style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{asset('images/Frame811649.png')}}" alt="" srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">الإبتكار والتطوير المستمر</h5>
                            <p class="card-text text-muted">
                                نعمل بشكل دائم على تطوير المنتجات من خلال فرق بحث وتطوير متخصصة، لنقدم حلولاً تناسب تطلعات المستهلك الحديث.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                             style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{asset('images/lsicon_distribution-outline.png')}}" alt="" srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">جاهزون للتصدير</h5>
                            <p class="card-text text-muted">
                                نوفر منتجاتنا للأسواق الدولية وفق اشتراطات كل دولة، مع دعم لوجستي متكامل وسرعة في تنفيذ الطلبات الخارجية.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                             style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{asset('images/arcticons_mindustry.png')}}" alt="" srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">قدراتنا الصناعية</h5>
                            <p class="card-text text-muted">
                                نمتلك خطوط إنتاج متقدمة عالية الكفاءة قادرة على تلبية احتياجات السوق المحلي والدولي بجودة ثابتة وسرعة تنفيذ عالية.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                             style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">التحكم الذكي في العمليات</h5>
                            <p class="card-text text-muted">
                                نمتلك خطوط إنتاج متقدمة عالية الكفاءة قادرة على تلبية احتياجات السوق المحلي والدولي بجودة ثابتة وسرعة تنفيذ عالية.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

