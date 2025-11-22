@extends('layouts.app')

@section('title', 'فروعنا | لووڤي')

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

            <!-- العنوان -->
            <div class="text-center mb-4">
                <h3 class="fw-bold mb-2"
                    style="display: inline-block; border-bottom: 3px solid #253E69B2; padding-bottom: 5px;">
                    فروعنا
                </h3>
                <h6 class="text-muted mt-3">
                    لدينا شبكة واسعة من الفروع لخدمة عملائنا أينما كانوا
                </h6>
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

                                <div style="
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
                                                        <i class="fa-solid fa-location-dot text-dark ms-3 fs-5 me-2"></i>
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
                        <div id="map" style="height: 40rem; width: 100%; background:#eee;"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- كود الخريطة (دالة واحدة فقط) -->
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

    <!-- Google Maps API -->
   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD78D34sNioiFvU7GptQOzOf-wMEsHvGnc&callback=initMap" async
        defer></script>

@endsection
