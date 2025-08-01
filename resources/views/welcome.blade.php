@extends('layouts.app')

@section('title', 'الرئيسية')

@section('navbar')
     @extends('partials.navbar_hero')
@endsection

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
                            <img src="{{asset('images/hugeicons_test-tube-01.png')}}" alt="" srcset="">
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
                            <img src="{{asset('images/fluent_control-button-20-regular.png')}}" alt="" srcset="">
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

    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h3 class="fw-bold mb-2" style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    منتجاتنا
                </h3>
                <h6 class="text-muted mt-3">
                    نقدم مجموعة متنوعة من المنتجات الصحية عالية الجودة للأطفال من مختلف الفئات العمرية
                </h6>
            </div>

            <div class="row justify-content-center my-4 text-center">

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                    <button class="custom-btn btn btn-outline-light w-100 text-black border rounded-3 py-2 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1.5rem; font-weight: 900; font-size: 1.5rem; font-weight: 900;">
                        جميع المنتجات
                    </button>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                    <button class="custom-btn btn btn-outline-light w-100 text-black border rounded-3 py-2 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1.5rem; font-weight: 900;">
                        منتج لوفي بيبي
                    </button>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                    <button class="custom-btn btn btn-outline-light w-auto text-black border rounded-3 py-2 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1.4rem; font-weight: 900;">
                        منتج كالمي بيبي
                    </button>
                </div>

                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                    <select class="custom-select form-select text-black border fw-semibold rounded-3 py-2 px-3"
                            style="border: 1.5px solid #fff; background-color: transparent; transition: 0.3s; font-size: 1.5rem; font-weight: 900;">
                        <option selected disabled>المقاسات</option>
                        <option value="small">صغير</option>
                        <option value="medium">متوسط</option>
                        <option value="large">كبير</option>
                        <option value="x_large">كبير جداً</option>
                    </select>
                </div>

            </div>


            <div class="row g-4 justify-content-center">
                @foreach ([1,2,3,4,5] as $index)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                            <img src="{{ asset('images/lofy' . (($index % 2 == 0) ? 4 : 3) . '.jpg') }}"
                                 class="card-img-top mx-auto rounded-top"
                                 alt="منتج"
                                 style="width: 100%; height: 250px; object-fit: cover;">

                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                <p class="card-text text-muted small">
                                    حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً مع حماية للبشرة الحساسة.
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-5">
                <button class="btn text-white rounded-3 px-5 py-3 fw-semibold"
                        style="background-color: #2b3b6b; transition: 0.3s; font-size: 1.5rem; font-weight: 900;">
                    عرض جميع المنتجات
                </button>
            </div>
        </div>
    </section>
@endsection

