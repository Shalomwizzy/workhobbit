<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

       {{-- LOGO --}}
      <link rel="shortcut icon" href="{{ asset('images/workhobbit_081437.jpg') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

      {{-- font awesome --}}
      <script src="https://kit.fontawesome.com/cc71075486.js" crossorigin="anonymous"></script>

    {{-- CSS ANIMATION --}}

    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <!-- Bootstrap Icons CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/navbar.css','resources/css/welcome.css','resources/css/footer.css', 'resources/css/register.css',  'resources/css/about.css','resources/css/apply-now.css','resources/css/login.css','resources/css/blog.css','resources/css/service.css', 'resources/css/client.css', 'resources/css/contact.css', 'resources/css/team.css','resources/css/faqs.css', 'resources/css/home.css',])

    {{-- 'resources/js/apply-now.js', --}}
</head>
<body>
    
    <div id="app">
        @include('partials.navbar')
  
        @include('partials.error')
          <main class="py-4">
              @yield('content')
          </main>
  
          @include('partials.footer')
      </div>





 <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6649da639a809f19fb32bdd0/1hu87q62h';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->


 <!-- Back to Top Button -->
          <div id="backToTopBtn" title="Go to top">
           {{-- <i class="fas fa-arrow-up"></i> --}}
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M8 256C8 119 119 8 256 8s248 111 248 248-111 248-248 248S8 393 8 256zm143.6 28.9l72.4-75.5V392c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V209.4l72.4 75.5c9.3 9.7 24.8 9.9 34.3.4l10.9-11c9.4-9.4 9.4-24.6 0-33.9L273 107.7c-9.4-9.4-24.6-9.4-33.9 0L106.3 240.4c-9.4 9.4-9.4 24.6 0 33.9l10.9 11c9.6 9.5 25.1 9.3 34.4-.4z"></path></svg>        
        </div>
</body>
</html>




