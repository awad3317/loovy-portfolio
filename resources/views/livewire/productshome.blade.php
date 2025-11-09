<div>
    <style>
        .btn-active {
            background-color: #2b3b6b !important;
            color: #fff !important;
            border: 2px solid #2b3b6b !important;
        }

        .btn-inactive {
            background-color: #fff !important;
            color: #2b3b6b !important;
            border: 2px solid #2b3b6b !important;
        }

        .btn-inactive:hover {
            background-color: #2b3b6b !important;
            color: #fff !important;
        }
    </style>
    <section class="py-5">
        <div class="container">

            {{-- أزرار الفلترة --}}
         <div>
    <style>
        .btn-active {
            background-color: #2b3b6b !important;
            color: #fff !important;
            border: 2px solid #2b3b6b !important;
        }

        .btn-inactive {
            background-color: #fff !important;
            color: #2b3b6b !important;
            border: 2px solid #2b3b6b !important;
        }
    </style>

    <h2 class="text-center fw-bold mb-4">{{ $title }}</h2>

    {{-- أزرار الفلترة --}}
    <div class="row justify-content-center my-4 text-center">
        {{-- زر جميع المنتجات --}}
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <button wire:click="resetFilters"
                class="custom-btn btn w-100 rounded-3 py-3 fw-semibold border
                {{ !$selectedType && empty($selectedSizes) ? 'btn-active' : 'btn-inactive' }}">
                جميع المنتجات
            </button>
        </div>

        {{-- زر لوفي بيبي --}}
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <button wire:click="filterByType('lofy_baby')"
                class="custom-btn btn w-100 rounded-3 py-3 fw-semibold border
                {{ $selectedType === 'lofy_baby' ? 'btn-active' : 'btn-inactive' }}">
                لوفي بيبي
            </button>
        </div>

        {{-- زر كالمي بيبي --}}
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <button wire:click="filterByType('calmy_baby')"
                class="custom-btn btn w-100 rounded-3 py-3 fw-semibold border
                {{ $selectedType === 'calmy_baby' ? 'btn-active' : 'btn-inactive' }}">
                كالمي بيبي
            </button>
        </div>

        {{-- Dropdown لاختيار المقاسات --}}
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-3">
            <div class="dropdown">
                <button
                    class="custom-btn btn w-100 rounded-3 py-3 fw-semibold border dropdown-toggle btn-inactive"
                    type="button" id="sizeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    المقاسات
                </button>

                <ul class="dropdown-menu px-3" aria-labelledby="sizeDropdown">
                    @foreach ($sizes as $size)
                        <li>
                            <div class="form-check dropdown-item">
                                <input class="form-check-input" type="checkbox"
                                    wire:click="toggleSize('{{ $size }}')"
                                    {{ in_array($size, $selectedSizes) ? 'checked' : '' }}>
                                <label class="form-check-label w-100">{{ $size }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    {{-- عرض المنتجات --}}
    <div class="row g-4 justify-content-center">
        @forelse($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
      <a href="{{ route('products.show', ['type' => $product->type, 'id' => $product->id]) }}"
                            class="text-decoration-none text-dark">
                <div class="card h-100 border-0 shadow-sm rounded-4 text-center">
                    <img src="{{ asset($product->image) }}"
                        class="card-img-top mx-auto rounded-top img-fluid"
                        alt="{{ $product->name }}"
                        style="object-fit: contain; max-height: 200px; width: auto;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-2">{{ $product->name }}</h5>
                        <p class="card-text text-muted small">{{ $product->description }}</p>
                    </div>
                </div>
            </a>
            </div>
        @empty
            <p class="text-center text-muted">لا توجد منتجات مطابقة للفلترة.</p>
        @endforelse
    </div>
</div>



        </div>
    </section>
</div>
