@extends('layouts.app')

@section('title', 'الرئيسية')

@section('navbar')
    @extends('partials.navbar')
@endsection

@section('content')
 <style>
        .nav-tabs .nav-link.active {
            background-color: #253E69 !important;
            color: white !important;
            border-color: #253E69 #fff !important;
        }
        .nav-tabs .nav-link.active:hover {
            color: white !important;
            background-color: #1a2d4d !important;
        }
         .nav-tabs .nav-link:hover {
            color: #253E69 !important;
            background-color: #f8f9fa !important;
        }

        
    </style>
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    فروعنا
                </h3>
                <h6 class="text-muted mt-3">
                    تواجدنا في 15 فرع رئيسي لخدمتكم
                </h6>
            </div>
            <div class="row align-items-start gy-4">
               
                <div class="container">
    <h3 class="fw-bold text-center mb-4">فروعنا</h3>

  <ul class="nav nav-tabs mb-3" id="branchTabs" role="tablist">
    @foreach ($Branchs as $country => $countryBranches)
        <li class="nav-item" role="presentation">
            <button class="nav-link {{ $loop->first ? 'active' : '' }}" 
                    id="{{ Str::slug($country) }}-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#{{ Str::slug($country) }}"
                    type="button" role="tab">
                {{ $country }}
            </button>
        </li>
    @endforeach
</ul>

<div class="tab-content" id="branchTabsContent">
    @foreach ($Branchs as $country => $countryBranches)
        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" 
             id="{{ Str::slug($country) }}" role="tabpanel">
            <div class="row g-3">
                @foreach ($countryBranches as $branch)
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm border-0 rounded-4 p-3">
                            <h5 class="fw-bold">{{ $branch->name }}</h5>
                            <p class="text-muted mb-1">
                                <i class="fa-solid fa-location-dot me-2"></i>{{ $branch->address }}
                            </p>
                            <p class="mb-0">
                                <i class="fa-solid fa-phone me-2"></i>{{ $branch->phone }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

</div>

                <div class="col-lg-6 text-center">
                    <div class="rounded-4 shadow-sm overflow-hidden" style="height: 550px;">
                        <iframe
                            src="https://www.google.com/maps/d/embed?mid=1Lv0VGdKiJRY2ucl41RbrYrGBYyfZvDw&ehbc=2E312F&ll=18.0,45.0&z=6"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" title="موقع مصنع لوفي بيبي - سيئون، اليمن">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
