<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | شركة المصنع الأول للصناعات الصحية المحدودة</title>
    
    <!-- CSS الحرجة -->
    <style>
        body {
            visibility: hidden;
            font-family: 'Tajawal', sans-serif;
            direction: rtl;
        }
        .initial-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    
    <link rel="preload" href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style">
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer-style.css') }}" rel="stylesheet">
    <style>
.whatsapp-float {
    position: fixed;
    bottom: 80px;
    right: 25px;
    width: 40px;
    height: 40px;
    background-color: #25d366;
    color: white;
    border-radius: 50%;
    text-align: center;
    font-size: 30px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
}

.whatsapp-float:hover {
    background-color: #128c7e;
    transform: scale(1.1);
}
</style>
</head>
<body>
    @livewireStyles

    <!-- Loader مؤقت -->
    <div class="initial-loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">جاري التحميل...</span>
        </div>
    </div>

    @yield('navbar')
    
    <main class="py-0">
        @yield('content')
    </main>
    <!-- WhatsApp Floating Button -->
<a href="https://wa.me/967770662355?text=مرحباً%20أود%20الاستفسار%20عن%20منتجاتكم" 
   class="whatsapp-float" 
   target="_blank">
   <i class="fab fa-whatsapp"></i>
</a>


    @include('partials.footer')
    @livewireScripts
    <!-- JS مع defer -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
    <script src="{{ asset('js/navbar-dropdown-menu.js') }}" defer></script>
    
    <script>
        window.addEventListener('load', function() {
            document.querySelector('.initial-loader').style.display = 'none';
            document.body.style.visibility = 'visible';
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        });
    </script>
</body>
</html>