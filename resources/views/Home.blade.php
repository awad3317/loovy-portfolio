@extends('layouts.app')

@section('title', 'الرئيسية')

@section('navbar')
     @extends('partials.navbar_hero')
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
                            يعد منتجنا الأول "لوفي بيبي" حفاضات عالية الجودة صُنعت بأيدي يمنية وتتميز بأنها عالية الامتصاص
                            بفضل الطبقات المتعددة والمواد اللطيفة والفعالة التي تُبقي بشرة الطفل جافة لساعات طويلة.
                            كما أنها متوفرة بمقاسات وأحجام مختلفة لتناسب جسم الطفل وحركته في كل مرحلة من مراحله العمرية.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image shadow-lg rounded overflow-hidden">
                        <img src="{{ asset('images/lofy2.jpg') }}" alt="صورة منتجات لوفي بيبي" class="img-fluid w-100"
                            style="max-height: 500px; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-1 mb-4" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-4"data-aos="fade-up">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    حلولنا الصناعية
                </h3>
                <p class="text-muted mt-3">
                    نقدم مجموعة متكاملة من الحلول الصناعية لضمان توفير منتجات صحية عالية الجودة تلبي احتياجات الأطفال
                </p>
            </div>

            <div class="row gy-4">
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{ asset('images/hugeicons_test-tube-02.png') }}" alt="" srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">إلتزامنا بالجودة</h5>
                            <p class="card-text text-muted">
                                من خلال تطبيق أعلى معايير الجودة في جميع مراحل التصنيع، نضمن تقديم منتجات آمنة، موثوقة،
                                ومتوافقة مع المواصفات العالمية.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{ asset('images/hugeicons_test-tube-01.png') }}" alt="" srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">الإبتكار والتطوير المستمر</h5>
                            <p class="card-text text-muted">
                                نعمل بشكل دائم على تطوير المنتجات من خلال فرق بحث وتطوير متخصصة، لنقدم حلولاً تناسب تطلعات
                                المستهلك الحديث.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{ asset('images/lsicon_distribution-outline.png') }}" alt="" srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">جاهزون للتصدير</h5>
                            <p class="card-text text-muted">
                                نوفر منتجاتنا للأسواق الدولية وفق اشتراطات كل دولة، مع دعم لوجستي متكامل وسرعة في تنفيذ
                                الطلبات الخارجية.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{ asset('images/arcticons_mindustry.png') }}" alt="" srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">قدراتنا الصناعية</h5>
                            <p class="card-text text-muted">
                                نمتلك خطوط إنتاج متقدمة عالية الكفاءة قادرة على تلبية احتياجات السوق المحلي والدولي بجودة
                                ثابتة وسرعة تنفيذ عالية.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #f3f4f9">
                            <img src="{{ asset('images/fluent_control-button-20-regular.png') }}" alt=""
                                srcset="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">التحكم الذكي في العمليات</h5>
                            <p class="card-text text-muted">
                                نمتلك خطوط إنتاج متقدمة عالية الكفاءة قادرة على تلبية احتياجات السوق المحلي والدولي بجودة
                                ثابتة وسرعة تنفيذ عالية.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    منتجاتنا
                </h3>
                <h6 class="text-muted mt-3">
                    نقدم مجموعة متنوعة من المنتجات الصحية عالية الجودة للأطفال من مختلف الفئات العمرية
                </h6>
            </div>
            <div class="row g-4 justify-content-center mt-4">
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                           <img src="{{ asset('images/lofy4.jpg') }}"
                                class="card-img-top mx-auto rounded-top img-fluid" 
                                alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">

                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                <p class="card-text text-muted small">
                                    حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً مع حماية
                                    للبشرة الحساسة.
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                            <img src="{{ asset('images/lofy4.jpg') }}"
                                class="card-img-top mx-auto rounded-top img-fluid" 
                                alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">

                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                <p class="card-text text-muted small">
                                    حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً مع حماية
                                    للبشرة الحساسة.
                                </p>
                            </div>
                        </div>
                    </div>

                     <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                            <img src="{{ asset('images/lofy4.jpg') }}"
                                class="card-img-top mx-auto rounded-top img-fluid" 
                                alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">

                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                <p class="card-text text-muted small">
                                    حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً مع حماية
                                    للبشرة الحساسة.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                           <img src="{{ asset('images/lofy4.jpg') }}"
                                class="card-img-top mx-auto rounded-top img-fluid" 
                                alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                <p class="card-text text-muted small">
                                    حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً مع حماية
                                    للبشرة الحساسة.
                                </p>
                            </div>
                        </div>
                    </div>

                    
            </div>

            <div class="d-flex justify-content-center mt-5">
                <button class="btn text-white rounded-3 px-5 py-3 fw-semibold"
                    style="background-color: #2b3b6b; transition: 0.3s; font-size: 1.5rem; font-weight: 900;">
                    عرض جميع المنتجات
                </button>
            </div>
        </div>
    </section>

     <section class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h3 class="fw-bold mb-2" style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    الجودة والشهادات
                </h3>
                <h6 class="text-muted mt-3">
                    نلتزم بأعلى معايير الجودة والسلامة في جميع منتجاتنا، وقد حصلنا على العديد من الشهادات والاعتمادات الدولية
                </h6>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 text-center" data-aos="fade-right">
                    <img src="{{ asset('images/lofy2.jpg') }}" alt="صورة المنتجات"
                         class="img-fluid rounded-4 shadow-sm" style="max-height: 400px; object-fit: cover;width: 100%;">
                </div>
                <div class="col-lg-6"  data-aos="fade-left">
                    <div class="d-flex flex-column gap-3">
                        <div class="card border-0 shadow-sm rounded-4 px-3 py-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px; font-size: 28px;">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="fw-bold mb-1">شهادة الأيزو 9001</h5>
                                        <a href="/path/to/iso-9001-certificate.pdf" download="شهادة_الأيزو_9001.pdf" style="transition: all 0.3s; transform: translateY(-2px);box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                            <i class="fas fa-download me-1" style="color: #2b3b6b"></i>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-0 small">
                                        حصلنا على شهادة الأيزو 9001 لنظام إدارة الجودة، مما يؤكد التزامنا بتطبيق أفضل الممارسات في جميع عملياتنا.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm rounded-4 px-3 py-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px; font-size: 28px;">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="fw-bold mb-1">شهادة الأيزو 9001</h5>
                                        <a href="/path/to/iso-9001-certificate.pdf" download="شهادة_الأيزو_9001.pdf" style="transition: all 0.3s; transform: translateY(-2px);box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                            <i class="fas fa-download me-1" style="color: #2b3b6b"></i>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-0 small">
                                        حصلنا على شهادة الأيزو 9001 لنظام إدارة الجودة، مما يؤكد التزامنا بتطبيق أفضل الممارسات في جميع عملياتنا.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm rounded-4 px-3 py-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px; font-size: 28px;">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="fw-bold mb-1">شهادة الأيزو 9001</h5>
                                        <a href="/path/to/iso-9001-certificate.pdf" download="شهادة_الأيزو_9001.pdf" style="transition: all 0.3s; transform: translateY(-2px);box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                            <i class="fas fa-download me-1" style="color: #2b3b6b"></i>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-0 small">
                                        حصلنا على شهادة الأيزو 9001 لنظام إدارة الجودة، مما يؤكد التزامنا بتطبيق أفضل الممارسات في جميع عملياتنا.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" >
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="fw-bold mb-2" style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    فروعنا
                </h3>
                <h6 class="text-muted mt-3">
                    تواجدنا في 15 فرع رئيسي لخدمتكم
                </h6>
            </div>
            <div class="row align-items-start gy-4">
                <div class="col-lg-6"> 
                    <div class="d-flex flex-column gap-3" style="max-height: 550px; overflow-y: auto; direction: ltr;">

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
                        <div class="card shadow-sm rounded-4 border-0"  style="direction: rtl;">
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

                        <div class="card shadow-sm rounded-4 border-0"  style="direction: rtl;">
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

                        <div class="card shadow-sm rounded-4 border-0"  style="direction: rtl;">
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
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="موقع مصنع لوفي بيبي - سيئون، اليمن">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h3 class="fw-bold mb-2" style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    تواصل معنا
                </h3>
                <h6 class="text-muted mt-3" data-aos="fade-up" data-aos-delay="100">
                    نحن هنا للإجابة على استفساراتكم وتلبية احتياجاتكم، لا تترددوا في التواصل معنا
                </h6>
            </div>

            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="card shadow-sm h-100 border-0" style="background-color: #253E690D; border-radius: 12px;">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4 fw-semibold">معلومات التواصل</h4>
                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up" data-aos-delay="250">
                                <i class="fa-solid fa-location-dot text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">العنوان</h6>
                                    <p class="mb-0 text-muted">اليمن، حضرموت، سيئون</p>
                                </div>
                            </div>

                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up" data-aos-delay="300">
                                <i class="fa-solid fa-phone text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">الهاتف</h6>
                                    <p class="mb-0 text-muted">+967 777000000</p>
                                </div>
                            </div>

                            <div class="mb-0 d-flex align-items-center gap-3" data-aos="fade-up" data-aos-delay="350">
                                <i class="fa-solid fa-envelope text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">البريد الإلكتروني</h6>
                                    <p class="mb-0 text-muted">info@health-industries.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="card shadow-sm h-100 border-0" style="background-color: #253E690D; border-radius: 12px;">
                        <div class="card-body p-4">
                            <h4 class="card-title mb-4 fw-semibold">أرسل لنا رسالة</h4>
                            <livewire:contactform />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
