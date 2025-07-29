<section style="
    background-image: url('{{ asset('images/Rectangle.png') }}'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat;
    min-height: 80vh;
    position: relative;
">
<nav class="navbar navbar-expand-lg  fixed-lg-bottom">
    <div class="container ">
         <a class="ms-0 justify-content-start" href="#" style="z-index: 1050;">
                <img src="{{asset('images/logo.png')}}" alt="شعار الشركة" width="100">
        </a>
        <div class="collapse navbar-collapse justify-content-center d-none d-lg-flex" id="navContent">
            <ul class="navbar-nav d-flex flex-row gap-5 rounded-5 px-5 py-3" style="
                background-color: rgba(43, 59, 107, 0.85); 
                backdrop-filter: blur(8px); 
                max-width: 95%;
                box-shadow: 0 4px 20px rgba(0,0,0,0.15);
                border: 1px solid rgba(255,255,255,0.1);
                min-width: 60%">
               
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5" href="#">الرئيسية</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5" href="#">عن الشركة</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5" href="#">منتجاتنا</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5" href="#">فروعنا</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link text-white fw-semibold fs-5" href="#">تواصل معنا</a>
                </li>
            </ul>
        </div>
        
        <div class="d-lg-none fixed-bottom py-3 px-3">
            <div class="container">
                <ul class="nav justify-content-between rounded-5 p-2 mx-auto" style="
                    background-color: rgba(43, 59, 107, 0.85); 
                    backdrop-filter: blur(8px); 
                    max-width: 95%;
                    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
                    border: 1px solid rgba(255,255,255,0.1); 
                ">
                <li class="nav-item">
                    <a class="nav-link text-white text-center px-3" href="#">
                        <i class="fas fa-home d-block mx-auto mb-1"></i>
                        <small>الرئيسية</small>
                    </a>
                </li>
            <li class="nav-item">
                <a class="nav-link text-white text-center px-3" href="#">
                    <i class="fas fa-info-circle d-block mx-auto mb-1"></i>
                    <small>عن الشركة</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-center px-3" href="#">
                    <i class="fas fa-box-open d-block mx-auto mb-1"></i>
                    <small>منتجاتنا</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-center px-3" href="#">
                    <i class="fas fa-map-marker-alt d-block mx-auto mb-1"></i>
                    <small>فروعنا</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white text-center px-3" href="#">
                    <i class="fas fa-envelope d-block mx-auto mb-1"></i>
                    <small>تواصل</small>
                </a>
            </li>
        </ul>
        
    </div>
    
</div>
</nav>
  
    <!-- المحتوى الرئيسي -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 intro-text">
                <h4 class="fw-bold text-dark">شركة المصنع الأول للصناعات الصحية المحدودة</h4>
                <p class="mt-3 mb-4 text-secondary">
                    نلتزم في الصناعات الصحية بتقديم منتجات آمنة وموثوقة تلبي أعلى معايير الجودة العالمية،
                    لنضمن راحة وصحة أطفالكم في كل لحظة.
                </p> 
                <button class="btn text-white rounded-4 px-5 fw-bold"
                        style="background-color: #2b3b6b; font-size: 1.5rem; font-weight: 900;">
                    أكتشف منتجاتنا
                </button>
            </div>
            <div class="col-lg-6 text-center intro-image">
                <img src="{{ asset('images/lofy1.png') }}" alt="صورة المنتجات" class="img-fluid" >
            </div>
        </div>
    </div>
 
</section>