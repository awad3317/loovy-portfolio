<div>
    <style>
        :root {
            --primary-color: #2b3b6b;
            --secondary-color: #f8d7da;
            --accent-color: #ff9f40;
            --light-bg: #f9f9f9;
        }

        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #f5f5f5;
            padding-top: 20px;
            padding-bottom: 50px;
        }

        .product-header {
            background: linear-gradient(135deg, var(--primary-color), #2b3b6b);
            color: white;
            border-radius: 15px;
        }

        .feature-list {
            list-style: none;
            padding: 0;
        }

        .feature-list li {
            padding: 8px 0;
            padding-right: 30px;
            position: relative;
        }

        .feature-list li:before {
            content: "✓";
            position: absolute;
            right: 0;
            color: var(--primary-color);
            font-weight: bold;
        }

        .product-card {
            display: flex;
            flex-direction: column;
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
        }

        .product-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .card-text {
            flex: 1;
            font-size: 0.9rem;
            color: #555;
        }


        .img-placeholder {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
        }

        .img-placeholder img {
            object-fit: contain;
            /* أو cover حسب رغبتك */
            width: 40%;
            height: 200%;
        }

        .main-img {
            height: 30px;
            /* ارتفاع الصورة الرئيسية */
        }

        .thumb img {
            cursor: pointer;
            transition: transform 0.3s;
        }

        .thumb img:hover {
            transform: scale(1.1);
        }


        .cta-section {
            background: linear-gradient(135deg, var(--primary-color), #2b3b6b);
            border-radius: 15px;
        }

        .nav-tabs .nav-link.active {
            background-color: var(--primary-color);
            color: white;
            border: none;
        }

        .nav-tabs .nav-link {
            color: var(--primary-color);
        }

        @media (max-width: 768px) {
            .product-image {
                margin-bottom: 20px;
            }
        }
    </style>

    <div class="container">
        <div class="product-header p-4 mb-4 text-center">
            <h1 class="fw-bold">{{ $product->name }} -{{ $product->size }}</h1>
            <p class="lead">{{ $product->description }}</p>
        </div>

        <div class="row mb-5">
            <div class="col-md-5 product-image" x-data="{ mainImage: '{{ asset($product->image) }}' }">
                <!-- الصورة الرئيسية -->
                <div class="img-placeholder mb-3">
                    <img :src="mainImage" alt="{{ $product->name }}"
                        class="card-img-top mx-auto rounded-top img-fluid"
                        style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">
                </div>

                <!-- الصور الفرعية -->
                <div class="row mt-3">
                    @foreach ($product->images as $img)
                        <div class="col-3">
                            <div class="img-placeholder" style="height: 80px;">
                                <img src="{{ asset($img) }}" class="img-fluid"
                                    style="height: 150%; width: 150%; cursor: pointer;"
                                    @click="mainImage = '{{ asset($img) }}'">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


            <div class="col-md-7">
                <div class="card p-4">
                    <h3 class="text-primary mb-3">مميزات المنتج:</h3>
                    <ul class="feature-list">
                        <li class="mb-2">تصميم T مرن</li>
                        <li class="mb-2">إضغط على قانون</li>
                        <li class="mb-2">سطح داخلي ناعم</li>
                        <li class="mb-2">حماية تسريب مزدوج (Double lock)</li>
                        <li class="mb-2">اذان مطاطية جانبية</li>
                    </ul>
                </div>
            </div>
        </div>

        <h2 class="mb-4 border-bottom pb-2">منتجات مشابهة</h2>
        <div class="row mb-5">
            @foreach ($similarProducts as $item)
                <div class="col-md-3 col-sm-6 mb-4">
                    <a href="{{ route('products.show', ['type' => $item->type, 'id' => $item->id]) }}"
                        class="text-decoration-none text-dark">
                        <div class="card product-card h-100">
                            <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->name }}"
                                class="card-img-top mx-auto rounded-top img-fluid" alt="منتج"
                                style="object-fit: contain; max-height: 200px; width: auto; object-position: center;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="mb-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details"
                        type="button" role="tab">تفاصيل المنتج</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button"
                        role="tab">مواصفات إضافية</button>
                </li>
            </ul>
            <div class="tab-content p-4 border-start border-end border-bottom rounded-bottom" id="myTabContent">
                <div class="tab-pane fade show active" id="details" role="tabpanel">
                    <h4 style="color: #2b3b6b">حفاضات الأطفال صيفي الرائعة</h4>
                    @if ($product->details)
                        <ul class="feature-list">
                            @foreach ($product->details as $detail)
                                <li>{{ $detail }}</li>
                            @endforeach
                        </ul>
                    @endif

                </div>
                <div class="tab-pane fade" id="specs" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <th>المقاس</th>
                                    <td>{{ $product->size }}</td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <th>الوزن المناسب</th>
                                    <td>{{ $product->weight }}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cta-section p-5 text-center text-white mb-5">
            <h2 class="mb-3">جرب حفاضات لوفي بيبي الآن!</h2>
            <p class="lead mb-4">انضم إلى آلاف الأمهات الراضيات عن منتجاتنا</p>
            <a href="https://wa.me/967781332188?text=السلام عليكم، أريد طلب منتج" target="_blank"
                class="btn btn-success btn-lg px-5">
                اطلب الآن
            </a>

        </div>
    </div>
</div>
