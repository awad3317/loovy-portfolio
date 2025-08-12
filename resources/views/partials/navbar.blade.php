<nav class="navbar navbar-expand-lg  fixed-lg-bottom">
    <div class="container-fluid d-flex  align-items-center">
         <a class="ms-1 justify-content-start" href="/" style="z-index: 1050;">
                <img src="{{asset('images/logo.png')}}" alt="شعار الشركة" width="100">
        </a>
        <div class="collapse navbar-collapse justify-content-center d-none d-l-flex" id="navContent">
            <ul class="navbar-nav d-flex flex-row gap-5 rounded-5 px-5 py-3" style="
                background-color: rgba(43, 59, 107, 0.85); 
                backdrop-filter: blur(8px); 
                width: auto;
                max-width: 95%;
                box-shadow: 0 4px 20px rgba(0,0,0,0.15);
                border: 1px solid rgba(255,255,255,0.1);">
               
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5 {{ request()->is('') ? 'active-nav-item' : '' }}" href="/">الرئيسية</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5" href="#">عن الشركة</a>
                </li>
                <li class="nav-item px-1 custom-dropdown">
                    <a class="nav-link text-white fw-semibold fs-5" href="#" id="productsLink">
                      منتجاتنا
                    </a>
                    <ul class="custom-dropdown-menu">
                        <li><a class="custom-dropdown-item" href="/loovyBaby">لوفي بيبي</a></li>
                        <li><a class="custom-dropdown-item" href="/calmyBaby">كالمي بيبي</a></li>
                    </ul>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5" href="#">فروعنا</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5" href="#">تواصل معنا</a>
                </li>
            </ul>
        </div>
        <a class="me-1 justify-content-start" href="#" style="z-index: 1050;">
                {{-- <img src="{{asset('images/search.png')}}" alt="شعار الشركة" width="40"> --}}
        </a>
        
        <div class="d-lg-none fixed-bottom py-2 px-2">
    <div class="container">
        <ul class="nav justify-content-between rounded-5 px-2 py-1" style="
                background-color: rgba(43, 59, 107, 0.85); 
                backdrop-filter: blur(5px); 
                max-width: 100%;
                box-shadow: 0 4px 20px rgba(0,0,0,0.15);
                border: 1px solid rgba(255,255,255,0.1); 
            ">
            <li class="nav-item" style="flex: 1; min-width: 0;"> 
                <a class="nav-link text-white text-center px-1" href="/" style="font-size: clamp(10px, 2.5vw, 16px);"> <!-- حجم خط متجاوب -->
                    <i class="fas fa-home d-block mx-auto mb-1" style="font-size: clamp(12px, 3vw, 20px);"></i> <!-- حجم أيقونة متجاوب -->
                    <small>الرئيسية</small>
                </a>
            </li>
            <li class="nav-item" style="flex: 1; min-width: 0;">
                <a class="nav-link text-white text-center px-1" href="#" style="font-size: clamp(10px, 2.5vw, 16px);">
                    <i class="fas fa-info-circle d-block mx-auto mb-1" style="font-size: clamp(12px, 3vw, 20px);"></i>
                    <small>عننا</small>
                </a>
            </li>
           <li class="nav-item" style="flex: 1; min-width: 0;">
                <div class="mobile-dropdown">
                    <a class="nav-link text-white text-center px-1" href="#" style="font-size: clamp(10px, 2.5vw, 16px);">
                        <i class="fas fa-box-open d-block mx-auto mb-1" style="font-size: clamp(12px, 3vw, 20px);"></i>
                        <small>منتجاتنا</small>
                    </a>
                    <ul class="mobile-dropdown-menu">
                        <li><a class="mobile-dropdown-item" href="/loovyBaby">لوفي بيبي</a></li>
                        <li><a class="mobile-dropdown-item" href="#">كالمي بيبي</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item" style="flex: 1; min-width: 0;">
                <a class="nav-link text-white text-center px-1" href="#" style="font-size: clamp(10px, 2.5vw, 16px);">
                    <i class="fas fa-map-marker-alt d-block mx-auto mb-1" style="font-size: clamp(12px, 3vw, 20px);"></i>
                    <small>فروعنا</small>
                </a>
            </li>
            <li class="nav-item" style="flex: 1; min-width: 0;">
                <a class="nav-link text-white text-center px-1" href="#" style="font-size: clamp(10px, 2.5vw, 16px);">
                    <i class="fas fa-envelope d-block mx-auto mb-1" style="font-size: clamp(12px, 3vw, 20px);"></i>
                    <small>تواصل</small>
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
</nav>