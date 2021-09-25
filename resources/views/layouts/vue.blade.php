{{--/**
* Created by PhpStorm.
* User: Mehmet F. GCGN
* Date: 10.04.2021
* Time: 17:00
*/--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <?php
    header("Access-Control-Allow-Origin: *");
    ?>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/scrollbar.css">


    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
        <link href="/static/css/2.0975cee1.chunk.css" rel="stylesheet"><link href="/static/css/main.5531e5be.chunk.css" rel="stylesheet">
        @if(Request::is('user/profile'))
            <link rel="stylesheet" href="/css/app.css">
        @endif

    @livewireStyles
        @stack("css")
</head>
<body>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="/">{{--<img class="img-fluid" src="/assets/images/logo/logo.png" alt="">--}}</a></div>
            </div>
            <div class="left-header col horizontal-wrapper ps-0">

                <ul class="horizontal-menu">
                <li class="level-menu outside"><a class="nav-link" href=""><i data-feather="inbox"></i><span>Gönder</span></a>

                </li>

                </ul>

            </div>
            <div class="nav-right col-8 pull-right right-header p-0">
                <ul class="nav-menus">
                 <!--   <li class="language-nav">
                        <div class="translate_wrapper">
                            <div class="current_lang">
                                <div class="lang"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">EN                               </span></div>
                            </div>
                            <div class="more_lang">
                                <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                                <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                                <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                                <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                                <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                                <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                                <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                            </div>
                        </div>
                    </li>



                    <li>
                        <div class="mode"><i class="fa  fa-moon-o"></i></div>
                    </li> -->

                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                    <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media"><img class="b-r-10" src="" alt="">
                            <div class="media-body"><span></span>
                                <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="{{ route('profile.show') }}"><i data-feather="user"></i><span>Hesap </span></a></li>


                            <li> <form action="{{route("logout")}}" method="post" >
                                    @csrf<button type="submit" class="link " ><i data-feather="log-in"> </i><span>{{__("Log out")}}</span></button>
                                </form></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                    <div class="ProfileCard-details">
                        <div class="ProfileCard-realName"></div>
                    </div>
                </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->

        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title text-center">
                    <div class="row">
                        <h1>
                        <img src="/assets/images/logo.png" style="width: 100px;"></h1>

                       <!-- <div class="col-6">
                            <h5>Hoşgeldiniz </h5><br>
                            <a class="btn btn-danger" href=""> <i class="fa fa-sign-out"> </i>Çıkış Yap</a>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">                                       <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">CYCE</li>
                                <li class="breadcrumb-item active">CYCE Alım Sayfası</li>
                            </ol>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="col-sm-12">

                    @if(session("impersonate"))
                    <div class="alert round-badge-primary"  role="alert">
                        <div class="m-alert__text">
                            <strong>
                                Dikkat!
                            </strong>
                            Şu anda <span class="btn btn-danger-gradien btn-sm m-btn m-btn--pill m-btn--wide"> </span> Kullanıcısı ile giriş yaptınız
                            <a class="btn btn-danger-gradien btn-sm m-btn m-btn--pill m-btn--wide pull-right" href="{{route("impersonate.leave")}}" >
                                <i class="fa fa-reply"></i> Kullanıcıdan Ayrıl
                            </a>
                        </div>

                    </div>
                    @endif

                    <div class="card">
                        <a class="btn btn-danger-gradien" href="/">Anasayfa</a>
                        @if(session("impersonate"))

                        @endif
                            <div id="location" data-location="{{Stevebauman\Location\Facades\Location::get(get_client_ip())->countryCode }}"></div>
                @yield("content")


                        @if(Request::is('user/profile'))
                            {{ $slot }}
                            @endif


            </div>
            <!-- Container-fluid Ends-->
        </div>

    </div>  <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2021 © CYCE </p>
                    </div>
                </div>
            </div>
        </footer>
        <style>
            .page-wrapper .page-header .header-wrapper {
               display:none;
            }
            .footer {
                background-color: #fff;
                -webkit-box-shadow: 0 0 20px rgb(89 102 122 / 10%);
                box-shadow: 0 0 20px rgb(89 102 122 / 10%);
                padding: 15px;
                bottom: 0;
                left: 0;
            margin-left: 0px;
                -webkit-transition: 0.5s;
                transition: 0.5s;
            }
            .page-wrapper.compact-wrapper .page-body-wrapper .page-body {
                min-height: calc(100vh - 80px);
               margin-top: 0px;
                 margin-left: 0px;
            }
            .card .card-header {
                background-color: #fff;
                padding: 20px;
                border-bottom: 1px solid #ecf3fa;
                border-top-left-radius: 15px;
                border-top-right-radius: 15px;
                position: relative;
            }
        </style>

</div>

</div>

<!-- latest jquery-->
@livewireScripts


    <script>!function(e){function r(r){for(var n,a,i=r[0],c=r[1],l=r[2],p=0,s=[];p<i.length;p++)a=i[p],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&s.push(o[a][0]),o[a]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(e[n]=c[n]);for(f&&f(r);s.length;)s.shift()();return u.push.apply(u,l||[]),t()}function t(){for(var e,r=0;r<u.length;r++){for(var t=u[r],n=!0,i=1;i<t.length;i++){var c=t[i];0!==o[c]&&(n=!1)}n&&(u.splice(r--,1),e=a(a.s=t[0]))}return e}var n={},o={1:0},u=[];function a(r){if(n[r])return n[r].exports;var t=n[r]={i:r,l:!1,exports:{}};return e[r].call(t.exports,t,t.exports,a),t.l=!0,t.exports}a.e=function(e){var r=[],t=o[e];if(0!==t)if(t)r.push(t[2]);else{var n=new Promise((function(r,n){t=o[e]=[r,n]}));r.push(t[2]=n);var u,i=document.createElement("script");i.charset="utf-8",i.timeout=120,a.nc&&i.setAttribute("nonce",a.nc),i.src=function(e){return a.p+"static/js/"+({}[e]||e)+"."+{3:"fb2fa1df"}[e]+".chunk.js"}(e);var c=new Error;u=function(r){i.onerror=i.onload=null,clearTimeout(l);var t=o[e];if(0!==t){if(t){var n=r&&("load"===r.type?"missing":r.type),u=r&&r.target&&r.target.src;c.message="Loading chunk "+e+" failed.\n("+n+": "+u+")",c.name="ChunkLoadError",c.type=n,c.request=u,t[1](c)}o[e]=void 0}};var l=setTimeout((function(){u({type:"timeout",target:i})}),12e4);i.onerror=i.onload=u,document.head.appendChild(i)}return Promise.all(r)},a.m=e,a.c=n,a.d=function(e,r,t){a.o(e,r)||Object.defineProperty(e,r,{enumerable:!0,get:t})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,r){if(1&r&&(e=a(e)),8&r)return e;if(4&r&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(a.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&r&&"string"!=typeof e)for(var n in e)a.d(t,n,function(r){return e[r]}.bind(null,n));return t},a.n=function(e){var r=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(r,"a",r),r},a.o=function(e,r){return Object.prototype.hasOwnProperty.call(e,r)},a.p="/",a.oe=function(e){throw console.error(e),e};var i=this["webpackJsonppanel-dapp"]=this["webpackJsonppanel-dapp"]||[],c=i.push.bind(i);i.push=r,i=i.slice();for(var l=0;l<i.length;l++)r(i[l]);var f=c;t()}([])</script><script src="/static/js/2.c34e1943.chunk.js"></script><script src="/static/js/main.a2dcf412.chunk.js"></script>
<script src="/assets/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap js-->
<script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="/assets/js/scrollbar/simplebar.js"></script>
<script src="/assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="/assets/js/config.js"></script>

    <!-- Theme js-->

<!-- Plugins JS start-->

<!-- Plugins JS Ends-->
<!-- Theme js-->

<!-- login js-->
<!-- Plugin used-->
@stack("js")
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!--    <script src="../assets/js/theme-customizer/customizer.js"></script>-->
</body>

</html>
