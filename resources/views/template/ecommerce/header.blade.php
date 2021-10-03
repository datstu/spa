<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lea Store - Mỹ phẩm </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

     
{{-- SEO --}}
        <meta name="description" content="{{$meta_desc}}">
        <meta name="keywords" content="{{$meta_keywords}}"/>
        <meta name="robots" content="INDEX,FOLLOW"/>
        <link  rel="canonical" href="{{$url_canonical}}" />
        <meta property="og:title" content="{{$meta_title}}" />

        <meta property="og:description" content="{{$meta_desc}}" />
        <meta property="og:title" content="{{$meta_title}}" />
        <meta property="og:url" content="{{$url_canonical}}" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="khoecunglea.com" />
       

{{-- AND SEO --}}
        <!-- Favicon -->
        <link rel="icon" href="{{asset('public/frontend/images/faviconico.png')}}" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend/images/faviconico.png')}}" />
        
        <!-- Google Fonts -->
        <link href="{{asset('public/ecommerce/fonts/font-google.css')}}" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="{{asset('public/ecommerce/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('public/ecommerce/lib/slick/slick.css')}}" rel="stylesheet">
        <link href="{{asset('public/ecommerce/lib/slick/slick-theme.css')}}" rel="stylesheet">
      

        <!-- Template Stylesheet -->
        <link href="{{asset('public/ecommerce/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/ecommerce/css/sweetalert.css')}}" rel="stylesheet">
        <link href="{{asset('public/ecommerce/css/cart-mobile.css')}}" rel="stylesheet">
    </head>
<style>.img-lea{
    max-height: 250px;min-height: 250px;
}
.help-block{
    color: red;
}.customer-h2{
    font-size:25px;font-family: 'Roboto', sans-serif;
}

</style>
    <body>
        
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        khoecunglea@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                         +(84) 090 7799 046
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav" id="menu-scroll">
            <div class="container-fluid" >
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <button type="button" style="padding: 0; " class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="logo-mobile">
                        <a href="{{URL::to('trang-chu')}}"><img src="{{asset('public/frontend/images/new-logo-mobile.png')}}" alt="KhoeCungLea"></a>
                    </div>
                    {{-- <div class="logo-mobile">
                        <a href="{{URL::to('trang-chu')}}"><img src="{{asset('public/ecommerce/img/logo/logo-dt.png')}}" alt="KhoeCungLea"></a>
                    </div> --}}
                    <div id="search-center-mobile" style="display: none">
                        <div class="search">
                            <input  type="text" placeholder="Tìm sản phẩm, thương hiệu, dịch vụ">
                            
                        </div>
                    </div>
                    <a href="{{URL::to('/gio-hang')}}" class="btn cart mobile-lea">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="qty-lea-mobile">
<?php
$content = Cart::getContent();
if(count($content) >0 ){
?>
                      <?php echo count($content); }else{ echo '0';}?> </span>
                        
                    </a>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{URL::to('/trang-chu')}}" class="nav-item nav-link active">Trang chủ</a>
                            <a href="{{URL::to('/dich-vu-massage')}}" class="nav-item nav-link">Dịch vụ</a>
                          
                            <a href="{{URL::to('/danh-sach-san-pham')}}" class="nav-item nav-link">Sản phẩm </a>
                            <a href="{{URL::to('/tra-cuu-don-hang')}}" class="nav-item nav-link">Tra cứu đơn hàng </a>
                            <a href="{{URL::to('/ve-chung-toi')}}" class="nav-item nav-link">Giới thiệu</a>
                            
                            
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <?php 
                                $id_user = Session::get('id_user');
                                if($id_user){
                                    $name_user = Session::get('name_user');
                                  
                                ?>
                                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{$name_user}}</a>
                                     <div class="dropdown-menu">
                                   
                                        <a href="{{URL::to('/log-out-user')}}" class="dropdown-item">Đăng xuất</a>
                                        
                                    </div>
                               <?php } else {
                                   ?>
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ĐĂNG NHẬP/ĐĂNG KÝ</a>
                                <div class="dropdown-menu">
                                   
                                    <a href="{{URL::to('/login-checkout')}}" class="dropdown-item">Đăng nhập</a>
                                   
                                </div>
                                <?php
                               }
                                ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="{{URL::to('trang-chu')}}"><img src="{{asset('public/frontend/images/new-logo.png')}}" alt="KhoeCungLea"></a>
                        </div>
                        {{-- <div class="logo">
                            <a href="{{URL::to('trang-chu')}}"><img src="{{asset('/public/ecommerce/img/logo/logo.png')}}" alt="KhoeCungLea"></a>
                        </div> --}}
                       
                       
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input id="search-lea-input" type="text" placeholder="Tìm sản phẩm, thương hiệu, dịch vụ">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user user-mobile">
                            <a href="#" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="{{URL::to('/gio-hang')}}" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
    <?php
     $content = Cart::getContent();
     if(count($content) >0 ){
    ?>
                                <span id="count-item"><?php echo count($content); }else{ echo '(0)';}?> </span>
                                
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->    