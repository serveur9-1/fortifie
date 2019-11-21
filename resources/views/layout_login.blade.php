<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#6c3191">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>@yield('title')</title>

    @include('admin.share.stylesheets')

</head>

<body id="page-top">
<style type="text/css">
    .bg-gradient{
        background-color: #6c2f91;
    }
    .confirm-switch {
        width: 35px;
        height: 17px;
        border-radius: 8.5px;
        background: #fff;
        position: relative;
        cursor: pointer;
    }

    .confirm-switch input {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    .confirm-switch input + label {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
    }

    .confirm-switch input + label:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: transparent;
        border-radius: 8.5px;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s;
        cursor: pointer;
    }

    .confirm-switch input + label:after {
        content: "";
        position: absolute;
        top: 1px;
        left: 1px;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: #fff;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s;
        -webkit-box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .confirm-switch input:checked + label:after {
        left: 19px;
    }

    .confirm-switch input:checked + label:before {
        background: #4cd3e3;
    }
</style>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->


            @include('site.share.alert')

            @yield('content')

        </div>

        @include('admin.share.footer')

    </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


@include('admin.share.modal')

@include('admin.share.script')

</body>

</html>
