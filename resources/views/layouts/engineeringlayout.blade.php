<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA-->
    <meta charset="UTF-8" />
    <meta lang="en" />
    <meta name="language" content="en"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name='description' content='Fog Trap Specialists'/>
    <meta name='keywords' content='fog,fog trap,fog traps, fat oil grease traps, fat oil and grease traps, commercial fog trap, fog interceptor,free grease trap, free fog trap, air engineering, pump engineering' />
    <meta content="max-age=7200, public" http-equiv="Cache-Control"/>
    <meta name="Cache-Control" content="max-age=7200, public"/>
    <meta name="X-Content-Type-Options" content="nosniff"/>
    <meta name="X-XSS-Protection" content="1; mode=block">

    <!--<link rel="canonical" href="https://…"/>-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GreaseCycle') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<header id="headerbar" class="algn-cntr" style="background-color: #F0822B;">
    <div class="header" style="background-color: #F0822B;">
        <div class="header-section">
            <div class="wrap-start algn-cntr">
                <img src="{{asset('/images/grease-cycle-logo-alt.svg')}}" alt="Logo" height="60px" style="margin-right:10px;">
                <div style="margin-top:5px;">
                    <div class="wrap-start algn-cntr">
                        <h1 class="title-name" style="color:white;font-size:20px;letter-spacing:2px;">GREASE</h1>
                        <h1 class="title-name" style="color:white;font-size:20px;letter-spacing:2px;">CYCLE</h1>
                    </div>
                    <p style="color:rgb(80,80,80);font-size:15px;margin-top:-1px;">Engineering</p>
                </div>
            </div>
        </div>
        <div class="header-section">
            <div class="wrap-end">
                <a href="/" class="head-trap-a-dv wrap-middle algn-cntr">Go to Grease Traps ></a>
                <a href="/#contact" class="head-cnt-dv head-cnt-dv-eng wrap-middle algn-cntr" style="border-radius:45%;padding:7px;">
                    <img src="{{asset('images/email-alt.svg')}}" alt="phone icon" height="25px"/>
                </a>
                <a href="/#contact" class="head-cnt-dv head-cnt-dv-eng wrap-middle algn-cntr">
                    <img src="{{asset('images/phone-alt.svg')}}" alt="phone icon" height="25px" style="margin-right:5px;"/>
                    <p style="font-family: 'Product Sans';">07384280662</p>
                </a>
            </div>
            <nav class="page-links wrap-end algn-base">
                <a class="page-link page-link-eng" href="{{config('app.url')}}#home" style="color:white;">Home</a>
                <a class="page-link page-link-eng" href="{{config('app.url')}}#fog" style="color:white;">Fog Trap</a>
                <a class="page-link page-link-eng" href="{{config('app.url')}}#about" style="color:white;">About</a>
                <a class="page-link page-link-eng" href="{{config('app.url')}}#why" style="color:white;">Why Us?</a>
                <a class="page-link page-link-eng" href="{{config('app.url')}}#pricing" style="color:white;">Pricing</a>
                <a class="page-link page-link-eng" href="{{config('app.url')}}#contact" style="color:white;">Contact</a>
            </nav>
        </div>
    </div>
</header>
<div class="body-content-wrap">
    @yield('content')
</div>
<footer class="algn-cntr" style="background-color: #F0822B;">
    <div class="outr-content-wrap">
        <div class="inr-content-wrap">
            <div class="container algn-cntr">
                <img src="{{asset('/images/grease-cycle-logo-alt.svg')}}" alt="Logo" height="50px" style="margin-bottom:10px;">
                <p style="color: white; letter-spacing:0px;padding-bottom:10px;">{{ now()->year }} by GreaseCycle. All rights reserved.</p>
                <small style="color: white;">GreaseCycle | FOG Trap | Grease Managment | FOG | Fat Oil &amp; Grease Interceptor | FOG Interceptor</small>
            </div>
        </div>
    </div>
</footer>
</body>
<script type="application/javascript" charset="UTF-8">
    let newScrollPosition;
    let lastKnownScrollPosition;

    function hideHeaderBar(){
        document.getElementById('headerbar').style.top = "-110px";
    }

    function showHeaderBar(){
        document.getElementById('headerbar').style.top = "0px";
    }

    //HEADER BAR HIDE ON SCROLL
    document.addEventListener('scroll', function(e) {
        var newScrollPosition = window.scrollY;

        if(newScrollPosition > 100){
            if(newScrollPosition > lastKnownScrollPosition){
                hideHeaderBar();
            }
        }

        if(newScrollPosition < lastKnownScrollPosition){
            showHeaderBar();
        }

        lastKnownScrollPosition = newScrollPosition;
    });
</script>
</html>
