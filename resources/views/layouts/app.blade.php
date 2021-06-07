<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        body {
    font-family: 'Didact Gothic', sans-serif;
    color:#333;
        box-sizing: border-box;
}

* {
    box-sizing: border-box;
}

a {
    text-decoration: none;
}

nav {
    width: 800px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
}

.logo {
    width: 100px;
}

.logo img {
    width: 100px;
    
}

.lang-menu {
    width: 100px;
    text-align: right;
    font-weight: bold;
    margin-top: 10px;
    position: relative;
}
.lang-menu .selected-lang {
    display: flex;   
    justify-content: space-between;
    line-height: 2;
    cursor: pointer;
}
.lang-menu .selected-lang:before {
    content: '';
    display: inline-block;
    width: 32px;
    height: 32px;
    background-image: url(https://www.countryflags.io/us/flat/32.png);
    background-size: contain;
    background-repeat: no-repeat;
}

.lang-menu ul {
    margin: 0;
    padding: 0;
    display: none;
    background-color: #fff;
    border: 1px solid #f8f8f8;
    position: absolute;
    top: 45px;
    right: 0px;
    width: 125px;
    border-radius: 5px;
    box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
}


.lang-menu ul li {
    list-style: none;
    text-align: left;
    display: flex;
    justify-content: space-between;
}

.lang-menu ul li a {
    text-decoration: none;
    width: 125px;
    padding: 5px 10px;
    display: block;
}

.lang-menu ul li:hover {
    background-color: #f2f2f2;
}

.lang-menu ul li a:before {
    content: '';
    display: inline-block;
    width: 25px;
    height: 25px;
    vertical-align: middle;
    margin-right: 10px;
    background-size: contain;
    background-repeat: no-repeat;
}

.de:before {
    background-image: url(https://www.countryflags.io/de/flat/32.png);
}

.en:before {
    background-image: url(https://www.countryflags.io/us/flat/32.png);
}
.vn:before {
    background-image: url(https://www.countryflags.io/vn/flat/32.png);
}

.jp:before {
    background-image: url(https://www.countryflags.io/jp/flat/32.png);
}


.lang-menu:hover ul {
    display: block;
}
    </style>
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav>
                <div class="logo">
                <a href="#"><img src="data:image/png;base64,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" alt=""></a>
            </div>
                <div class="lang-menu">
                <div class="selected-lang text-gray-300">
                    English
                </div>
                <ul>
                    <li>
                        <a href="language/de" class="de">German</a>
                    </li>
                    <li>
                        <a href="language/en" class="en">English</a>
                    </li>
                    <li>
                        <a href="language/vn" class="vn">Tiếng Việt</a>
                    </li>
                    <li>
                        <a href="language/jp" class="jp">Japanese</a>
                    </li>
                </ul>
                
            </div>
            </nav>
                <div>
                <div class="space-x-4 text-gray-300 text-sm sm:text-base">
                <a class="no-underline hover:underline" href="/">Home</a>
                <a class="no-underline hover:underline" href="/blog">Blog</a>
               
            
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </div>
            </div>
        </header>
        <div>
        @yield('content')
        </div>
       <div>
       @include('layouts.footer')
       </div>
    </div>
</body>
</html>
