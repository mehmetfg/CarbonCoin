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

        @if(Request::is('user/profile'))
            <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
                @if(auth_user()->vallet)
                <ul class="horizontal-menu">
                <li class="level-menu outside"><a class="nav-link" href="{{route("transaction.customer",["vallet"=> auth_user()->vallet->id ?? 0])}}"><i data-feather="inbox"></i><span>Gönder</span></a>

                </li>

                </ul>
                    @endif
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
                            <div class="media-body"><span>{{auth_user()->name}}</span>
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
      @include("layouts.sidebar")
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title text-center">
                    <div class="row">
                        <h1>
                        <img src="/assets/images/logo.png" style="width: 100px;"></h1>
                       <!-- <div class="col-6">
                            <h5>Hoşgeldiniz {{auth_user()->name}}</h5><br>
                            <a class="btn btn-danger" href="{{route("logout")}}"> <i class="fa fa-sign-out"> </i>Çıkış Yap</a>
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
                            Şu anda <span class="btn btn-danger-gradien btn-sm m-btn m-btn--pill m-btn--wide"> {{auth()->user()->name}}</span> Kullanıcısı ile giriş yaptınız
                            <a class="btn btn-danger-gradien btn-sm m-btn m-btn--pill m-btn--wide pull-right" href="{{route("impersonate.leave")}}" >
                                <i class="fa fa-reply"></i> Kullanıcıdan Ayrıl
                            </a>
                        </div>

                    </div>
                    @endif

                    <div class="card">
                        @if(session("impersonate"))

                        @endif

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


<script src="{{ mix('js/app.js') }}" defer></script>
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
<script src="/js/custom.js"></script>
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
