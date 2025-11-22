<div>
    <style>
        /* تبويبات الفروع */
        .nav-tabs .nav-link.active {
            background-color: #253E69 !important;
            color: white !important;
        }

        .nav-tabs .nav-link:hover {
            color: #253E69 !important;
        }

        /* الصور */
        img {
            max-width: 100%;
            height: auto !important;
        }

        /* صور الأقسام */
        .about-image img,
        .quality-image img {
            width: 100%;
            object-fit: cover;
        }

        /* كرت المنتج */
        .product-card-img {
            object-fit: contain;
            max-height: 200px;
            width: 100%;
        }

        /* محتوى تبويبات الفروع */
        .branches-tab-content {
            max-height: none !important;
            overflow-y: visible !important;
            direction: rtl;
            padding-bottom: 15px;
        }

        /* خريطة الفروع */
        .branches-map-wrapper {
            height: auto !important;
        }

        .branches-map-wrapper iframe {
            width: 100%;
            height: 450px;
        }


        /* موبايل */
        @media (max-width: 768px) {
            .branches-map-wrapper iframe {
                height: 300px !important;
            }

            .product-card-img {
                max-height: 160px;
            }

            .py-5 {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }

        

        }
    </style>
       <nav class="navbar navbar-expand-lg" style="background-color: #d3d8e1;" >
            <div class="container-fluid d-flex align-items-center">

                {{-- الشعار --}}
                <a class="ms-1 justify-content-start" href="#" style="z-index: 1050;">
                    <img src="{{ asset('images/logo.png') }}" alt="شعار الشركة" width="100">
                </a>

                {{-- قائمة الديسكتوب --}}
                <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="navContent">
                    <ul class="navbar-nav d-flex flex-row gap-5 rounded-5 px-5 py-3"
                        style="
                        background-color: rgba(43, 59, 107, 0.85); 
                        backdrop-filter: blur(8px); 
                        width: auto;
                        max-width: 95%;
                        box-shadow: 0 4px 20px rgba(0,0,0,0.15);
                        border: 1px solid rgba(255,255,255,0.1);
                    ">

                        <li class="nav-item px-1">
                            <a class="nav-link text-white fw-semibold fs-5 {{ request()->is('/') ? 'active-nav-item' : '' }}"
                                href="/">الرئيسية</a>
                        </li>

                        <li class="nav-item px-1">
                            <a class="nav-link text-white fw-semibold fs-5" href="/about">عن الشركة</a>
                        </li>

                        <li class="nav-item px-1 custom-dropdown">
                            <a class="nav-link text-white fw-semibold fs-5" href="#" id="productsLink">
                                منتجاتنا
                            </a>
                            <ul class="custom-dropdown-menu">
                                <li><a class="custom-dropdown-item" href="/lofyBaby">لوفي بيبي</a></li>
                                <li><a class="custom-dropdown-item" href="/calmyBaby">كالمي بيبي</a></li>
                                <li><a class="custom-dropdown-item" href="/all_product">الكل</a></li>
                            </ul>
                        </li>

                        <li class="nav-item px-1">
                            <a class="nav-link text-white fw-semibold fs-5" href="/branches">فروعنا</a>
                        </li>

                        <li class="nav-item px-1">
                            <a class="nav-link text-white fw-semibold fs-5" href="/contact">تواصل معنا</a>
                        </li>
                    </ul>
                </div>

                {{-- مكان للبحث أو أيقونة أخرى في اليمين --}}
                <a class="me-1 justify-content-start" href="#" style="z-index: 1050;">
                    {{-- <img src="{{asset('images/search.png')}}" alt="شعار الشركة" width="40"> --}}
                </a>

                {{-- قائمة الموبايل في الأسفل --}}
                <div class="d-lg-none fixed-bottom py-2 px-2">
                    <div class="container">
                        <ul class="nav justify-content-between rounded-5 px-2 py-1"
                            style="
                            background-color: rgba(43, 59, 107, 0.85); 
                            backdrop-filter: blur(5px); 
                            max-width: 100%;
                            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
                            border: 1px solid rgba(255,255,255,0.1);
                        ">
                            <li class="nav-item" style="flex: 1; min-width: 0;">
                                <a class="nav-link text-white text-center px-1" href="/"
                                    style="font-size: clamp(10px, 2.5vw, 16px);">
                                    <i class="fas fa-home d-block mx-auto mb-1"
                                        style="font-size: clamp(12px, 3vw, 20px);"></i>
                                    <small>الرئيسية</small>
                                </a>
                            </li>

                            <li class="nav-item" style="flex: 1; min-width: 0;">
                                <a class="nav-link text-white text-center px-1" href="/about"
                                    style="font-size: clamp(10px, 2.5vw, 16px);">
                                    <i class="fas fa-info-circle d-block mx-auto mb-1"
                                        style="font-size: clamp(12px, 3vw, 20px);"></i>
                                    <small>عننا</small>
                                </a>
                            </li>

                            <li class="nav-item" style="flex: 1; min-width: 0;">
                                <div class="mobile-dropdown">
                                    <a class="nav-link text-white text-center px-1" href="#"
                                        style="font-size: clamp(10px, 2.5vw, 16px);">
                                        <i class="fas fa-box-open d-block mx-auto mb-1"
                                            style="font-size: clamp(12px, 3vw, 20px);"></i>
                                        <small>منتجاتنا</small>
                                    </a>
                                    <ul class="mobile-dropdown-menu">
                                        <li><a class="mobile-dropdown-item" href="/lofyBaby">لوفي بيبي</a></li>
                                        <li><a class="mobile-dropdown-item" href="/calmyBaby">كالمي بيبي</a></li>
                                        <li><a class="mobile-dropdown-item" href="/all_product">الكل</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item" style="flex: 1; min-width: 0;">
                                <a class="nav-link text-white text-center px-1" href="/branches"
                                    style="font-size: clamp(10px, 2.5vw, 16px);">
                                    <i class="fas fa-map-marker-alt d-block mx-auto mb-1"
                                        style="font-size: clamp(12px, 3vw, 20px);"></i>
                                    <small>فروعنا</small>
                                </a>
                            </li>

                            <li class="nav-item" style="flex: 1; min-width: 0;">
                                <a class="nav-link text-white text-center px-1" href="/contact"
                                    style="font-size: clamp(10px, 2.5vw, 16px);">
                                    <i class="fas fa-envelope d-block mx-auto mb-1"
                                        style="font-size: clamp(12px, 3vw, 20px);"></i>
                                    <small>تواصل</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    <section
        style="
        background-image: url('{{ asset('images/Rectangle.png') }}'); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat;
        min-height: 80vh;
        position: relative;
    ">
 

     
        <div class="container  pt-4">
            <div class="row align-items-center">
                <div class="col-lg-6 intro-text text-lg-start text-center" data-aos="fade-left" data-aos-duration="800"
                    data-aos-delay="200">
                    <h4 class="fw-bold text-dark">شركة المصنع الأول للصناعات الصحية المحدودة</h4>
                    <p class="mt-3 mb-4 text-secondary">
                        نفخر بريادتنا في مجال الصناعات الصحيّة، ونسعى دائمًا إلى تقديم منتجات آمنة وموثوقة تلبي احتياجات
                        الأسرة الحديثة. نعمل على تطوير حلول مبتكرة تجمع بين الجودة العالية والمعايير الصحية الصارمة، مع
                        استخدام أحدث التقنيات لضمان منتجات تُكسب عملاءنا الراحة والثقة. نؤمن بأن العناية تبدأ من التفاصيل،
                        لذلك نحرص على أن تكون جميع منتجاتنا خيارًا يعتمد عليه في الحياة اليومية. </p>
                    <div class="d-lg-block d-flex justify-content-center">
                        <a href="/all_product">
                            <button class="btn text-white rounded-4 px-5 fw-bold"
                                style="background-color: #2b3b6b; font-size: 1.5rem; font-weight: 900;">
                                تعرّف على منتجاتنا
                            </button>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 text-center intro-image">
                    <img src="{{ asset('images/lofy1.png') }}" alt="صورة المنتجات" class="img-fluid"
                        style="max-height: 450px;">
                </div>
            </div>
        </div>

    </section>
    <section class="py-1">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h4 class="fw-bold text-dark"
                    style="border-bottom: 3px solid #253E69; padding-bottom: 10px; display: inline-block;">
                    من نحنُ
                </h4>
            </div>
            <div class="row align-items-center g-4">
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <h3 class="fw-bold mb-4 text-lg-start text-center" style="font-family: 'Tajawal', sans-serif;">
                        شركة المصنع الأول للصناعات الصحية المحدودة
                    </h3>
                    <div class="about-content">
                        <p class="lead text-muted mb-4" style="line-height: 1.8; text-align: justify;">
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
                        <img src="{{ asset('images/factory.jpg') }}" alt="صورة منتجات لوفي بيبي"
                            class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- حلولنا الصناعية --}}
    <section class="py-1 mb-4" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    حلولنا الصناعية
                </h3>
                <p class="text-muted mt-3">
                    منتجات مبتكرة تجمع بين الجودة والأمان… حلول صحية صنعت لتمنح عائلتك راحة واطمئنان في كل لحظة.
                </p>
            </div>

            <div class="row gy-4">
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem; background-color: #f3f4f9">
                            <img src="{{ asset('images/hugeicons_test-tube-02.png') }}" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">إلتزامنا بالجودة</h5>
                            <p class="card-text text-muted">
                                الجودة ليست خيارًا… بل وعد. في كل منتج نقدمه نضمن لكم أمانًا وموثوقية بمعايير عالمية.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem; background-color: #f3f4f9">
                            <img src="{{ asset('images/hugeicons_test-tube-01.png') }}" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">الإبتكار والتطوير المستمر</h5>
                            <p class="card-text text-muted">
                                كل يوم نفكر بخطوة أبعد… نطوّر منتجات تلبي احتياجاتكم اليوم وتواكب تطلعات الغد.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem; background-color: #f3f4f9">
                            <img src="{{ asset('images/lsicon_distribution-outline.png') }}" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">جاهزون للتصدير</h5>
                            <p class="card-text text-muted">
                                نلبي احتياجات الأسواق الدولية وفق أعلى الاشتراطات والمعايير، مع دعم لوجستي متكامل وسرعة
                                في تنفيذ الطلبات الخارجية.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem; background-color: #f3f4f9">
                            <img src="{{ asset('images/arcticons_mindustry.png') }}" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">قدراتنا الصناعية</h5>
                            <p class="card-text text-muted">
                                نمتلك خطوط إنتاج متقدمة وعالية الكفاءة، قادرة على تلبية متطلبات السوق المحلي والدولي
                                بجودة ثابتة وأداء موثوق وسرعة تنفيذ عالية.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card shadow-sm h-100 border-0 rounded-4">
                        <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                            style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem; background-color: #f3f4f9">
                            <img src="{{ asset('images/fluent_control-button-20-regular.png') }}" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">التحكم الذكي في العمليات</h5>
                            <p class="card-text text-muted">
                                نطبق أنظمة تحكم متطورة في جميع مراحل التصنيع، تضمن كفاءة تشغيلية عالية وجودة مستقرة تلبي
                                توقعات عملائنا في كل مرة.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- منتجاتنا --}}
    <section class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    منتجاتنا
                </h3>
                <h6 class="text-muted mt-3">
                    “نقدّم مجموعة متكاملة من المنتجات الصحية عالية الجودة، مصممة بعناية لتلبية احتياجات الأطفال في مختلف
                    المراحل العمرية.”
                </h6>
            </div>

            <div class="row g-4 justify-content-center mt-4">
                @foreach ($products as $index => $product)
                    @if ($index == 4)
                        @break
                    @endif
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up"
                        data-aos-delay="{{ 100 * ($index + 1) }}">
                        <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                            <img src="{{ asset($product['image']) }}"
                                class="card-img-top mx-auto rounded-top img-fluid product-card-img"
                                alt="{{ $product['name'] }}">

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

            <div class="text-center mt-4">
                <a href="{{ url('all_product') }}" class="btn text-white rounded-4 px-5 fw-bold"
                    style="background-color: #2b3b6b; font-size: 1.5rem; font-weight: 900;">
                    عرض كل المنتجات
                </a>
            </div>
        </div>
    </section>

    {{-- الجودة والشهادات --}}
    <section class="py-5" data-aos="fade-up">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    الجودة والشهادات
                </h3>
                <h6 class="text-muted mt-3">
                    الجودة التي تُوثق بشهادات
                    “ليست وعودًا فقط، بل إنجازات موثقة… منتجاتنا تحمل شهادات واعتمادات دولية تعكس التزامنا بالجودة
                    والموثوقية في كل تفصيلة.
                </h6>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 text-center quality-image" data-aos="fade-right">
                    <img src="{{ asset('images/factory2.jpg') }}" alt="صورة المنتجات"
                        class="img-fluid rounded-4 shadow-sm">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="d-flex flex-column gap-3">
                        <div class="card border-0 shadow-sm rounded-4 px-3 py-3" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px; font-size: 28px;">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="fw-bold mb-1">شهادة الايزو ISO 9001</h5>
                                        <a href=" {{ asset('files/FIRST_FACTORY-9K-FINAL.pdf') }}"
                                            download="شهادة_الأيزو_9001.pdf"
                                            style="transition: all 0.3s; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                            <i class="fas fa-download me-1" style="color: #2b3b6b"></i>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-0 small">
                                        بفضل التزامنا الراسخ بمعايير الجودة العالمية، حصلنا على شهادة ISO 9001 لإدارة
                                        الجودة. هذه الشهادة تعكس حرصنا الدائم على تطبيق أفضل الممارسات وضمان أعلى
                                        مستويات الكفاءة والتميز في جميع عملياتنا.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm rounded-4 px-3 py-3" data-aos="fade-up"
                            data-aos-delay="150">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px; font-size: 28px;">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="fw-bold mb-1">شهادة مطابقة المنتجات للوائح السعودية</h5>
                                        <a href="{{ asset('files/Baby_diaper_PCOC.pdf') }}"
                                            download="شهاده مطابقة للمنتجات الخاضعه للوائح من السعوديه.pdf"
                                            style="transition: all 0.3s; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                            <i class="fas fa-download me-1" style="color: #2b3b6b"></i>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-0 small">
                                        نفخر بحصولنا على شهادة مطابقة المنتجات للوائح السعودية لنظام إدارة الجودة، والتي
                                        تُؤكد التزامنا الصارم بتلبية المتطلبات الوطنية وتقديم منتجات آمنة وموثوقة تتماشى
                                        مع توقعات عملائنا وشركائنا في المملكة.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm rounded-4 px-3 py-3" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-light rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px; font-size: 28px;">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="fw-bold mb-1">شهادة ممارسات التصنيع الجيد من اليمن</h5>
                                        <a href="{{ asset('files/GMP_Level_A.pdf') }}"
                                            download="شهاده ممارسة التصنيع الجيد من اليمن.pdf"
                                            style="transition: all 0.3s; transform: translateY(-2px); box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                                            <i class="fas fa-download me-1" style="color: #2b3b6b"></i>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-0 small">
                                        حصلنا أيضًا على شهادة ممارسات التصنيع الجيد (GMP) من الجمهورية اليمنية، تأكيدًا
                                        على التزامنا بتطبيق أرفع المعايير في بيئة الإنتاج وضمان سلامة وجودة منتجاتنا بما
                                        يعكس ثقة المستهلكين في كل ما نقدمه.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- فروعنا --}}
    <section class="py-5">
        <div class="container">

            <!-- العنوان -->
            <div class="text-center mb-4">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    فروعنا
                </h3>
                <h6 class="text-muted mt-3">
                    لدينا شبكة واسعة من الفروع لخدمة عملائنا أينما كانوا </h6>
            </div>

            <div class="row align-items-start gy-4">

                <!-- قسم الفروع -->
                <div class="col-lg-6">

                    <!-- Tabs الخاصة بالدول -->
                    <ul class="nav nav-tabs mb-3 flex-wrap" id="countryTab" role="tablist">
                        @foreach ($branchesByCountry as $country => $countryBranches)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                    id="{{ $country }}-tab" data-bs-toggle="tab"
                                    data-bs-target="#{{ $country }}" type="button" role="tab">
                                    {{ $country }}
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <!-- محتوى Tabs -->
                    <div class="tab-content branches-tab-content" id="countryTabContent">

                        @foreach ($branchesByCountry as $country => $countryBranches)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                id="{{ $country }}" role="tabpanel">

                                <!-- صندوق ثابت فيه Scroll -->
                                <div
                                    style="
                    max-height: 550px; 
                    overflow-y: auto;
                    padding-right: 5px;
                    direction: rtl;
                ">

                                    <div class="d-flex flex-column gap-3">

                                        @foreach ($countryBranches as $branch)
                                            <div class="card shadow-sm rounded-4 border-0">
                                                <div class="card-body">

                                                    <h5 class="card-title fw-semibold mb-3">
                                                        {{ $branch->name }}
                                                    </h5>

                                                    <div class="d-flex align-items-center mb-2 text-muted">
                                                        <i class="fa-solid fa-location-dot text-dark ms-3 fs-5 me-2 "></i>
                                                        <span>{{ $branch->address }}</span>
                                                    </div>

                                                    <div class="d-flex align-items-center text-muted">
                                                        <i class="fa-solid fa-phone text-dark ms-3 fs-5 me-2"></i>
                                                        <span>{{ $branch->phone }}</span>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>


                <!-- قسم الخريطة -->
                <div class="col-lg-6 text-center">
                    <div class="rounded-4 shadow-sm overflow-hidden branches-map-wrapper">
                        <div id="map" style="height: 40rem; width: 100%;"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- سكربت الخريطة -->
    <script>
        function initMap() {
            const factoryLocation = {
                lat: 15.9957476,
                lng: 48.8246514
            };

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: factoryLocation,
            });

            new google.maps.Marker({
                position: factoryLocation,
                map: map,
                title: "موقع المصنع – صليلة، سيئون",
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD78D34sNioiFvU7GptQOzOf-wMEsHvGnc&callback=initMap" async
        defer></script>

    {{-- تواصل معنا --}}
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    تواصل معنا
                </h3>
                <h6 class="text-muted mt-3" data-aos="fade-up" data-aos-delay="100">
                    سواء كنتم تبحثون عن معلومات إضافية، عروض، تعاون، أو دعم فني — فريقنا جاهز للرد ومساعدتكم بكل سرور.
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
                                    <p class="mb-0 text-muted">770662888 967+</p>
                                </div>
                            </div>

                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="350">
                                <i class="fa-solid fa-envelope text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">البريد الإلكتروني</h6>
                                    <a href="mailto:info@1st-factory.com"
                                        class="text-decoration-none text-dark">info@1st-factory.com</a>
                                </div>
                            </div>

                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="400">
                                <i class="fa-solid fa-location-dot text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">العنوان</h6>
                                    <p class="mb-0 text-muted">المملكة العربية السعودية , جدة</p>
                                </div>
                            </div>

                            <div class="mb-4 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="450">
                                <i class="fa-solid fa-phone text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">الهاتف</h6>
                                    <p class="mb-0 text-muted">558885413 966+</p>
                                </div>
                            </div>

                            <div class="mb-0 d-flex align-items-center gap-3" data-aos="fade-up"
                                data-aos-delay="500">
                                <i class="fa-solid fa-envelope text-dark fs-4"></i>
                                <div>
                                    <h6 class="mb-1 fw-semibold">البريد الإلكتروني</h6>
                                    <a href="mailto:info@loovybaby.com"
                                        class="text-decoration-none text-dark">info@loovybaby.com</a>
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
</div>
