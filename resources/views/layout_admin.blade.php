<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        @include('admin.share.stylesheets')
    </head>
    <body>

    @include('admin.share.header')
    
    @yield('content')
    
    @include('site.share.footer')
  

    @include('site.share.script')

    </body>

</html>
