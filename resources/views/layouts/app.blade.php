<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
        {{-- Scripts --}}
        <script src="{{asset('js/app.js')}}"></script>
    
    
        {{-- Styles --}}
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
    
        <title>Mi AulaPOP</title>
    </head>
    <body class="antialiased">
        <header>

        </header>
        <main>
            @yield('content')
        </main>
       
    </body>
</html>
