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

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GreaseCycle') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<header id="headerbar" class="algn-cntr">
    <div class="header">
        <div class="header-section">
            <div class="wrap-start algn-cntr">
                <img src="{{asset('/images/grease-cycle-icon-2.svg')}}" alt="Logo" height="60px" style="margin-right:10px;">
                <div class="wrap-start algn-cntr title-name-hd-dv">
                    <h1 class="title-name" style="color:#2FA008;font-size:25px;letter-spacing:1px;">GREASE</h1>
                    <h1 class="title-name" style="font-size:25px;letter-spacing:1px;">CYCLE</h1>
                </div>
            </div>
        </div>
        <div class="header-section">
            <div class="wrap-end">
                <a href="/engineering" class="head-eng-a-dv wrap-middle algn-cntr">Go to Engineering ></a>
                <a href="/#contact" class="head-cnt-dv wrap-middle algn-cntr" style="border-radius:45%;padding:7px;">
                    <img src="{{asset('images/email.svg')}}" alt="phone icon" height="25px"/>
                </a>
                <a href="/#contact" class="head-cnt-dv wrap-middle algn-cntr">
                    <img src="{{asset('images/phone.svg')}}" alt="phone icon" height="25px" style="margin-right:5px;"/>
                    <p style="font-family: 'Product Sans';color:white;">07384280662</p>
                </a>
            </div>
            <nav class="page-links wrap-end algn-base">
                <a class="page-link page-link" href="{{config('app.url')}}#home">Home</a>
                <a class="page-link page-link" href="{{config('app.url')}}#fog">Fog Trap</a>
                <a class="page-link page-link" href="{{config('app.url')}}#about">About</a>
                <a class="page-link page-link" href="{{config('app.url')}}#why">Why Us?</a>
                <a class="page-link page-link" href="{{config('app.url')}}#pricing">Pricing</a>
                <a class="page-link page-link" href="{{config('app.url')}}#contact">Contact</a>
            </nav>
        </div>
    </div>
</header>
<div class="body-content-wrap">
        @yield('content')
</div>
<div class="mobile-links-nav">
    <a href="/#fog"><img data-mob-link="/#fog"  class="mobile-btn-lnks" src="{{asset('/images/fog-alt.svg')}}" height="30px" alt="Grease Pod button"/></a>
    <a href="/#about"><img data-mob-link="/#about" class="mobile-btn-lnks" src="{{asset('/images/about-alt.svg')}}" height="30px" alt="about us button"/></a>
    <a href="/#pricing"><img data-mob-link="/#pricing" class="mobile-btn-lnks" src="{{asset('/images/price-alt.svg')}}" height="30px" alt="price button"/></a>
    <a href="/#contact"><img data-mob-link="/#contact" class="mobile-btn-lnks" src="{{asset('/images/phone-alt.svg')}}" height="30px" alt="phone button"/></a>
</div>
<footer class="algn-cntr">
    <div class="outr-content-wrap">
        <div class="inr-content-wrap">
            <div class="container algn-cntr">
                <img src="{{asset('/images/grease-cycle-logo-alt.svg')}}" alt="Logo" height="50px" style="margin-bottom:10px;">
                <p style="color: white; letter-spacing:0px;padding-bottom:10px;">{{ now()->year }} by GreaseCycle. All rights reserved.</p>
                <small style="color: white;padding-bottom:25px;">GreaseCycle | FOG Trap | Grease Managment | FOG | Fat Oil &amp; Grease Interceptor | FOG Interceptor</small>
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
