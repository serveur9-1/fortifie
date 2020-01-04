<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="theme-color" content="#6c3191">
    <meta name="author" content="GAYATECH +225 77832982">
    <link rel="icon" href="{{{ asset('assets/image/favicon.png')}}}">
    <title>Fortifie-Toi </title>
    <!-- Bootstrap core CSS -->
    @include('site.share.stylesheets')
</head>
<body>

<header>
    <div style="padding:18px 0px; background-color:#6b2f90;" class="navbar">
        <div class="container d-flex justify-content-between">
            <div class="col-4" style="padding-left: 15px;">
                <img style="height:45px;" src="{{ asset('/assets/image/Logo.png') }}" alt="Fortifie-toi">
            </div>
        </div>
    </div>
</header>

    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    {{ $header ?? '' }}

                    <!-- Email Body -->
                    <tr>
                        <td class="body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        {{ Illuminate\Mail\Markdown::parse($slot) }}

                                        {{ $subcopy ?? '' }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{ $footer ?? '' }}
                </table>
            </td>
        </tr>
    </table>
    <hr>
    <div>
        <p><a target="_blank" href="www.fortifietoi.ci">www.fortifietoi.ci</a></p>
        <p>Copyright ©
            @if( date('Y') == 2018 )
                {{ date('Y')}}
            @else
                {{ '2018 - ' .date('Y') }}
            @endif
             Fortifie-Toi 
        </p>
    </div>
</body>
</html>
