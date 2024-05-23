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

       {{-- Google Fonts --}}
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

      {{-- Admi dashboard --}}
      <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700"
      rel="stylesheet"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


      {{-- CHARTS --}}
     

       <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
       <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>


       <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        </style>

    {{-- CSS ANIMATION --}}

    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

     {{-- NAVBARAR --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css', 'resources/css/navbar.css','resources/css/welcome.css','resources/css/footer.css', 'resources/css/about.css','resources/css/apply-now.css', 'resources/js/apply-now.js','resources/css/login.css','resources/css/logout.css', 'resources/css/all-users.css', 'resources/css/admin-nav.css', 'resources/css/register.css', 'resources/css/admin-dashboard.css', 'resources/js/chart.js', 'resources/js/data.js',])
</head>
<body>
    <div id="app" class="admin-container">
        @include('partials.admin-nav')
    
       
        @include('partials.error')
        <main class="content py-4">
            @yield('content')
        </main>
    
        
    </div>
    @include('partials.admin-footer')
<style>
    /* .admin-container {
    display: flex;
} */



.content {
    flex: 1;
    padding: 20px;
    margin-left: 250px; 
}

@media screen and (max-width: 768px) {
    .content {
        margin-left: 0;
    }
}


  </style>    

</body>
</html>