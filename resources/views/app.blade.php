<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Saas - Laravel 8
    </title>
    <meta name="description" content="Saas - Laravel 8" />
    <meta name="keywords" content="saas, laravel8" />
    <meta name="author" content="" />
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!--Replace with your tailwind.css once created-->
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    
    <!-- Define your gradient here - use online tools to find a gradient matching your branding -->

    <style>
      .gradient {
         background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>

</head>
  <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
      @yield('content')
  </body>
</html>