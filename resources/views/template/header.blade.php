<!DOCTYPE html>
<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="{{$meta_keywords}}" />
<meta name="author" content="" />
<meta name="robots" content="" />

<meta name="description" content="{{$meta_desc}}" />
<meta property="og:title" content="{{$meta_title}}" />
<meta property="og:description" content="{{$meta_desc}}" />
<meta property="og:image" content="https://butterfly.dexignzone.com/xhtml/social-image.png"/>
<meta name="format-detection" content="telephone=no">

<link rel="cannical" href="{{$url_cannonical}}">
<!-- Favicons Icon -->
<link rel="icon" href="{{asset('public/frontend/images/faviconico.png')}}" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/images/faviconico.png')}}" />

<!-- Page Title Here -->
<title>{{$meta_title}}</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/fonts/flaticon.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/plugins.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/cart.css')}}">
<link class="skin"  rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/skin/skin-1.css')}}">
<link  rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/templete.css')}}">

<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/revolution/v5.4.3/css/settings.css')}}">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/plugins/revolution/v5.4.3/css/navigation.css')}}">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900|Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900" rel="stylesheet"> 
</head>
<body>
    
<div class="page-wraper">
<div id="loading-area"></div>
<style>
    .font_family{
        font-family: "Times New Roman", Times, serif;
    }
    .cart-Lea-Home{
            display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;

    }

</style>
    
    <header class="site-header header-transparent spa-header fullwidth">
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="dez-topbar-right topbar-social">
                        <ul>
                            <li><a href="https://www.facebook.com/leabeauty.vn" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="site-button-link youtube hover"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <div class="dez-topbar-right">
                        <ul>
                            <li><i class="fa fa-envelope-o m-r5"></i> khoecunglea@gmail.com </li>
                            <li> <i class="fa fa-phone m-r5"></i> +(84) 090 947 99 46</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container-fluid clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="{{URL::to('trang-chu')}}"><img src="{{asset('public/frontend/images/new-logo.png')}}" alt=""></a>
                    </div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" > 
                        <i class="flaticon-menu"></i>
                    </button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="fa fa-search"></i></button>
                            <div class="shop-cart navbar-right">
                                <a href="{{URL::to('/gio-hang')}}" type="button" class="site-button-link cart-btn">
    <?php
     $content = Cart::getContent();?>
     
    
                                    <i class="fa fa-shopping-bag"></i>
                                    @if(count($content) >0 )
                                    <span class="badge bg-black">{{count($content)}}</span>
                                    @else
                                    <span class="badge bg-black">0</span>
                                    @endif
                                </a>
                             

                            </div>
                            
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dez-quik-search bg-primary ">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="flaticon-cancel"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"> <a href="{{URL::to('trang-chu')}}">Trang chủ</a>
                                
                            </li>
                            <li> <a href="{{URL::to('/dich-vu-massage')}}">Dịch Vụ</a>
                            </li>
                            <li> <a href="{{URL::to('danh-sach-san-pham')}}">Sản Phẩm</a>
                              
                            </li>
                             <li> <a href="javascript:;">Giới thiệu</i></a></li>
                           
                            <li> <a href="javascript:;">Khuyến Mãi</i></a></li>
                            <li> <a href="javascript:;">Liên hệ</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>