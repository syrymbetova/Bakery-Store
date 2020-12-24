<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('main.online_shop'): @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #a2d3d7">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}" style="color: black">@lang('main.online_shop')</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @routeactive('index')><a href="{{ route('index') }}" style="color: black; background-color: #a2d3d7">@lang('main.all_products')</a></li>
                <li @routeactive('categor*')><a href="{{ route('categories') }}" style="color: black; background-color: #a2d3d7">@lang('main.categories')</a>
                </li>
                <li @routeactive('basket*')><a href="{{ route('basket') }}"style="color: black; background-color: #a2d3d7">@lang('main.cart')</a></li>

                <li><a href="{{ route('locale', __('main.set_lang')) }}" style="color: black; background-color: #a2d3d7">@lang('main.set_lang')</a></li>

{{--                <li class="dropdown">--}}
{{--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $currencySymbol }}<span class="caret"></span></a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        @foreach ($currencies as $currency)--}}
{{--                            <li><a href="{{ route('currency', $currency->code) }}">{{ $currency->symbol }}</a></li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}"style="color: black">@lang('main.login')</a></li>
                @endguest

                @auth
                    @admin
                    <li><a href="{{ route('home') }}"style="color: black">@lang('main.admin_panel')</a></li>
                    @else
                    <li><a href="{{ route('person.orders.index') }}"style="color: black">@lang('main.my_orders')</a></li>
                    @endadmin
                    <li><a href="{{ route('get-logout') }}"style="color: black">@lang('main.logout')</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        @if(session()->has('warning'))
            <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif
        @yield('content')
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><p>Информация</p>
                <ul>
                        <li>Almaty</li>
                    <li>bakerystore@gmail.com</li>
                    <li>87076815137</li>
                </ul>
            </div>

        </div>
    </div>
</footer>

</body>
</html>
