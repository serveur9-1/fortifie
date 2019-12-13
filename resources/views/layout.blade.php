<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#6c3191">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        @include('site.share.stylesheets')
    </head>
    <body>

    @include('site.share.header')
    
    @include('site.share.alert')
    
    @yield('content')

    @include('site.share.footer')
        <button onclick="topFunction()" id="myBtn" title="Vers le haut">
        <i class="fa fa-arrow-up"></i>
        </button>



    @include('site.share.script')

    </body>

</html>
