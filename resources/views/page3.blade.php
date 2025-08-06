<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركة المصنع الأول للصناعات الصحية المحدودة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="lofy.css">
    <style>
        .features-list {
            list-style: none;
            padding: 0;
            margin: 0;
            direction: rtl;
            font-family: Arial, sans-serif;
        }

        .features-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 16px;
            color: #000;
        }

        .check-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #fff;
            border: 2px solid #253E69;
            color: #253E69;
            font-weight: bold;
            border-radius: 50%;
            text-align: center;
            line-height: 18px;
            margin-left: 10px;
            font-size: 14px;
        }

        button.custom-btn:hover {
            background-color: #253E69 !important;
            color: white !important;
            border-color: #253E69 !important;
        }

        select.custom-select:hover,
        select.custom-select:focus {
            background-color: #253E69 !important;
            color: white !important;
            border-color: #253E69 !important;
            outline: none;
            box-shadow: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <section
            style="background-image: url('{{ asset('images/photo2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false"
                        aria-label="تبديل التنقل">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navContent">
                        <ul class="navbar-nav d-flex flex-row gap-3 rounded-5 px-4 py-2"
                            style="background-color: #2b3b6b;">
                            <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#">الرئيسية</a>
                            </li>
                            <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#">عن الشركة</a>
                            </li>
                            <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#">منتجاتنا</a>
                            </li>
                            <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#">فروعنا</a>
                            </li>
                            <li class="nav-item"><a class="nav-link text-white fw-semibold" href="#">تواصل
                                    معنا</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div>
                <div class="container pb-5">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold mb-2" style="display: inline-block; padding-bottom: 5px;">
                            حفاضات لوفي بيبي
                        </h3>
                        <h5 class="text-muted  font-bold">
                            راحة استثنائية وحماية فائقة لطفلك مع تقنيات متطورة وخامات عالية الجودة
                        </h5>
                    </div>

                    <div class="row gy-4 mx-5">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="card shadow-sm h-100 border-0 rounded-4">
                                <div class="mx-auto mt-4 d-flex justify-content-center align-items-center"
                                    style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #EC26721A">
                                    <i class="fa-regular fa-face-smile" style="color: #d10a6a;"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-semibold">راحة فائقة</h5>
                                    <p class="card-text text-muted">
                                        تصميم مريح يتكيف مع حركة الطفل الطبيعية
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="card shadow-sm h-100 border-0 rounded-4">
                                <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                                    style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #E77A271A">
                                    <i class="fa-solid fa-shield" style="color: #E77A27;"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-semibold">مانع للتسرب</h5>
                                    <p class="card-text text-muted">
                                        حواف مرنة وتصميم محكم يمنع التسرب نهائياً
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="card shadow-sm h-100 border-0 rounded-4">
                                <div class="mx-auto mt-4 d-flex justify-content-center align-items-center "
                                    style="width: 60px; height: 60px; border-radius: 50%; font-size: 1.5rem;background-color: #024BE51A">
                                    <i class="fa-solid fa-droplet" style="color: #024BE5;"></i>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-semibold">امتصاص فائق</h5>
                                    <p class="card-text text-muted">
                                        تقنية امتصاص متطورة تحافظ على جفاف الطفل لمدة 12 ساعة
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </section>


        <section class="py-5 my-2">
            <div class="container py-5">
                <div class="row align-items-center g-4">
                    <div class="col-md-6 mb-4">
                        <h3 class="fw-bold mb-4 text-dark" style="font-family: 'Tajawal', sans-serif;">
                            لماذا تختار حفاضات كالمي بيبي؟
                        </h3>
                        <ul class="features-list">
                            <li><span class="check-icon">✔</span> سعر إقتصادي</li>
                            <li><span class="check-icon">✔</span> إمتصاص ممتاز</li>
                            <li><span class="check-icon">✔</span> سطح داخلي ناعم</li>
                            <li><span class="check-icon">✔</span> حاجز تسريب مزدوج (Double lock)</li>
                            <li><span class="check-icon">✔</span> لواصق جانبية قوية</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image  rounded overflow-hidden">
                            <img src="{{ asset('images/camalylofy.png') }}" alt="صورة منتجات لوفي بيبي"
                                class="img-fluid w-100" style="max-height: 500px; ">
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="py-5">
            <div class="container">
                <div class="text-center">
                    <h3 class="fw-bold mb-2" style="display: inline-block; padding-bottom: 5px;">
                        مجموعة حفاضات كالمي بيبي
                    </h3>
                    <h6 class="text-muted">
                        اختر المقاس المناسب لطفلك من مجموعتنا المتنوعة من الحفاضات عالية الجودة </h6>
                </div>


                <div class="row justify-content-center my-4 text-center">

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                        <button
                            class="custom-btn btn btn-outline-light w-100 text-black border rounded-3 py-3 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1rem; font-weight: 900;  font-weight: 500;">
                            مقاس 1( حديث الولادة )
                        </button>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                        <button
                            class="custom-btn btn btn-outline-light w-100 text-black border rounded-3 py-3 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1rem; font-weight: 900;">
                            مقاس 2 (صغير )
                        </button>
                    </div>

                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                        <button
                            class="custom-btn btn btn-outline-light w-auto text-black border rounded-3 py-3 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1rem; font-weight: 900;">
                            مقاس 3 ( وسط )
                        </button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                        <button
                            class="custom-btn btn btn-outline-light w-auto text-black border rounded-3 py-3 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1rem; font-weight: 900;">
                            مقاس 4 ( كبير )
                        </button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                        <button
                            class="custom-btn btn btn-outline-light w-auto text-black border rounded-3 py-3 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1rem; font-weight: 900;">
                            مقاس 5 ( كبير جداً )
                        </button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
                        <button
                            class="custom-btn btn btn-outline-light w-auto text-black border rounded-3 py-3 px-3 fw-semibold"
                            style="transition: 0.3s; font-size: 1rem; font-weight: 500;">
                            مقاس 6 ( كبير جداً جداً )
                        </button>
                    </div>

                </div>


                <div class="row g-4 justify-content-center">
                    @foreach ([1, 2, 3, 4, 5] as $index)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                                <img src="{{ asset('images/lofyc' . $index . '.jpg') }}"
                                    class="card-img-top mx-auto rounded-top" alt="منتج"
                                    style="width: 100%; height: 250px; object-fit: cover;">

                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                    <p class="card-text text-muted small">
                                        حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً
                                        مع حماية للبشرة الحساسة.
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





    </div>
    <footer class="bg-dark-blue text-white pt-5 pb-3" style="background-color: #243b6f;">
        <div class="container">
            <div class="row text-center text-md-end">

                <div class="col-12 col-md-3 mb-4">
                    <h5 class="fw-bold">شركة المصنع الأول للصناعات الصحية المحدودة</h5>
                    <p class="mt-3 small">
                        نقدم مجموعة متنوعة من المنتجات الصحية عالية الجودة للأطفال من مختلف الفئات العمرية.
                    </p>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3 mt-3 fs-5">
                        <a href="#" class="text-white"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-4">
                    <h6 class="fw-bold">روابط سريعة</h6>
                    <ul class="list-unstyled mt-3 small">
                        <li><a href="#" class="text-white text-decoration-none">الرئيسية</a></li>
                        <li><a href="#" class="text-white text-decoration-none">عن الشركة</a></li>
                        <li><a href="#" class="text-white text-decoration-none">خدماتنا</a></li>
                        <li><a href="#" class="text-white text-decoration-none">العروض الخاصة</a></li>
                        <li><a href="#" class="text-white text-decoration-none">تواصل معنا</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-3 mb-4">
                    <h6 class="fw-bold">الدعم</h6>
                    <ul class="list-unstyled mt-3 small">
                        <li><a href="#" class="text-white text-decoration-none">الأسئلة الشائعة</a></li>
                        <li><a href="#" class="text-white text-decoration-none">سياسة الخصوصية</a></li>
                        <li><a href="#" class="text-white text-decoration-none">شروط الاستخدام</a></li>
                        <li><a href="#" class="text-white text-decoration-none">سياسة الإلغاء</a></li>
                    </ul>
                </div>

                <div class="col-12 col-md-3 mb-4">
                    <h6 class="fw-bold">اتصل بنا</h6>
                    <ul class="list-unstyled mt-3 small">
                        <li><i class="bi bi-geo-alt-fill me-2"></i> اليمن، حضرموت، سيئون</li>
                        <li><i class="bi bi-telephone-fill me-2"></i> +967 770000000</li>
                        <li><i class="bi bi-envelope-fill me-2"></i> info@gmail.com</li>
                    </ul>
                </div>

            </div>

            <hr class="text-white my-3">

            <div class="text-center small">
                © 2025 لوفي بيبي جميع الحقوق محفوظة </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
