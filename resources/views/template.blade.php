<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Дмитрий Алфёров</title>
    {{--<link href="/public/css/app.css">--}}
    <link rel="stylesheet"  href=" {{ mix('/css/app.css') }} ">  {{-- #3  6:55   -- 7:53 не нужно писать папку /public/  --}}
</head>

<body>
{{--
    <div>ШАПКА</div>
--}}
<div class="uk-container">
        <div class="uk-position-relative" >
            <nav class="uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <a  class="uk-navbar-item uk-logo" href="#">Logo</a>
                </div>

                <div class="uk-navbar-center">
                    @include('menu')
                </div>

                <div class="uk-navbar-right">
                    <a href="/contacts">about/contact</a>
                </div>
            </nav>

            <div class="uk-navbar-dropbar"></div>
        </div>

    {{--<div>Контент</div>--}}

    <div>@yield('content')</div> {{--  #2 18:25 --}}

    <div>ПОДВАЛ</div>

</div>

<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
