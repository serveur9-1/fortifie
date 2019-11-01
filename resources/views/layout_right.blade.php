<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
        @include('site.share.stylesheets')
    </head>
    <body>

    @include('site.share.header')

    @yield('bread')

        <!--================Blog Area =================-->
        <section class="blog_area single-post-area">
            <div class="container">

                <div class="row">
                    @yield('content')

                    @include('site.share.right_sidebar')
                </div>
            </div>
        </section>

    @include('site.share.footer')


    @include('site.share.script')

    </body>

</html>
