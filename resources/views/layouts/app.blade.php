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
    
    <!-- Preload للموارد -->
    <link rel="preload" href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style">
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    
    <!-- CSS الأساسية -->
    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer-style.css') }}" rel="stylesheet">
</head>
<body>
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
    
    @include('partials.footer')
    
    <!-- JS مع defer -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" defer></script>
    <script src="{{ asset('js/navbar-dropdown-menu.js') }}" defer></script>
    
    <!-- إخفاء Loader وإظهار المحتوى -->
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