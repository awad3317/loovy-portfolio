@extends('layouts.app')

@section('title', 'لوفي بيبي')

@section('navbar')
     @extends('partials.navbar')
@endsection

@section('content')

<section style="background-image: url('{{ asset('images/photo2.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
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
                            لماذا تختار حفاضات لوفي بيبي؟
                        </h3>
                        <ul class="features-list">
                            <li><span class="check-icon">✔</span> تصميم T مرن</li>
                            <li><span class="check-icon">✔</span> إمتصاص فائق</li>
                            <li><span class="check-icon">✔</span> سطح داخلي قطني ناعم</li>
                            <li><span class="check-icon">✔</span> حاجز تسريب مزدوج (Double lock)</li>
                            <li><span class="check-icon">✔</span> اذان مطاطية جانبية</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image  rounded overflow-hidden">
                            <img src="{{ asset('images/photo3.png') }}" alt="صورة منتجات لوفي بيبي"
                                class="img-fluid w-100" style="max-height: 500px; opacity: 0.8;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <section class="py-5" >
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

                    <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                                 <img src="{{ asset('images/lofy4.jpg') }}"
                                class="card-img-top mx-auto rounded-top img-fluid" 
                                alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                    <p class="card-text text-muted small">
                                        حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً
                                        مع حماية للبشرة الحساسة.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                                <img src="{{ asset('images/lofy4.jpg') }}"
                                class="card-img-top mx-auto rounded-top img-fluid" 
                                alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                    <p class="card-text text-muted small">
                                        حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً
                                        مع حماية للبشرة الحساسة.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                                 <img src="{{ asset('images/lofy4.jpg') }}"
                                class="card-img-top mx-auto rounded-top img-fluid" 
                                alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                    <p class="card-text text-muted small">
                                        حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً
                                        مع حماية للبشرة الحساسة.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                                <img src="{{ asset('images/lofy4.jpg') }}"
                                    class="card-img-top mx-auto rounded-top img-fluid" 
                                    alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold mb-2">حفاضات حديثي الولادة</h5>
                                    <p class="card-text text-muted small">
                                        حفاضات فائقة النعومة مصممة خصيصاً للأطفال حديثي الولادة، توفر امتصاصاً ممتازاً
                                        مع حماية للبشرة الحساسة.
                                    </p>
                                </div>
                            </div>
                        </div>
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