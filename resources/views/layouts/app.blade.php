<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <style>
  .preloader {
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s .2s, opacity .2s;
  }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') |شركة المصنع الأول للصناعات الصحية المحدودة</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet">
    
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- AOS --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer-style.css') }}" rel="stylesheet">
    
</head>
<body>
    @yield('navbar')

    <main class="py-0">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out', 
    once: true 
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.preloader').style.visibility = 'visible';
    document.querySelector('.preloader').style.opacity = 1;
  });
</script>
    
    <!-- Custom JS -->
    <!-- {{-- <script src="{{ asset('js/main.js') }}"></script> --}} -->
</body>
</html>