@include('template.header')
    <!-- header END -->
    <!-- Content -->
    <style>
    .top-bar .container-fluid{
        color: black !important;
    }
    .navbar-nav .active a{
    border-color: #00723d !important;
}
.navbar-nav li a{
    color: black !important;
}
@media only screen and (max-width: 425px) {
    .container .row-category  {
      margin-top: 0 ;
    }
    .mobile-425{
        height:235px;
    }
  }
    </style>
    <div class="page-content bg-white" style="padding-bottom:0; background-image:url(public/frontend/images/background/bg10.jpg);background-size: 100% 75%;">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-white-middle tb m-b30 mobile-425" style="background-image:url(public/frontend/images/banner/bnr_product2.jpg);background-size: 100% 100%;">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Sản phẩm của Lea Beauty</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="/">Trang chủ</a></li>
							<li>Sản phẩm</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->


<!-- custom here -->

<div class="slotholder">
  @include('template.sliderBanner')
</div>
    <!-- #endregion Jssor Slider End -->
        <!-- contact area -->
        <div class="content-area bgeffect" style="background-image:url(public/frontend/images/background/bg12.jpg);" data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
       <style>
       .row-category{
           margin-top:-25px
       }
       .item-category{
        text-align:center;
       }
        .title-category {
        height: 57px;
        margin-top:3px;
       }
       .img-item-category{
        height: 60px;
       }
       .item_new_price{
        color: #ff6600;
        line-height: 20px;
       }
       .txt_16{
                                    font-size: 16px;
                                }
                                .txt_20{
                                    font-size: 20px;
                                }
                                .price strong{
                                    font-weight:bold;
                                }
                                .discount_percent{
                                    background: #ff5501;
                                    float: right;
                                    display: inline-block;
                                    background: red;
                                    margin-left: 5px;
                                    padding: 0px 5px;
                                    border-radius: 2px;
                                    color: #fff;
                                }
                                .item_old_price{
                                    color: #666;
                                    text-decoration: line-through;
                                    line-height: 20px;
                                }
                                .right{
                                    float: right;
                                }
                                .left{
                                    float: left;
                                }
                                .txt_12 {
                                    font-size: 12px;
                                }
                                .txt_color_1 {
                                    color: #326e51;
                                }
                                   
                                   .brand_product{
                                    width: 100%;
                                    margin-top: 25px;
                                    font-weight:bold;
                                   }
                                  
                                   .name_product{                                  
                                    width: 100%;
                                   
                                    font-size: 20px;
                                   }
                                   .item_name{
                                    line-height: 24px;
                                    max-height: 50px;
                                    overflow: hidden;
                                    margin: -15px 0;
                                   }
                                   
                                  .block_star{
                                    position: relative;
                                    display: inline-block;
                                    font-size: 0;
                                    line-height: 0;
                                    margin-right: 3px;
                                  }
                                  .start_small{
                                    width: 64px;
                                    height: 11px;
                                  }
                                  .number_start {
                                    position: absolute;
                                    left: 0;
                                    top: 0;
                                }
                                  .start_small .number_start {
                                        height: 11px;
                                        background: url('public/frontend/images/css/bg_start_small.jpg') no-repeat 0 -10px;
                                    }
                                    .start_small .start_background {
                                        width: 100%;
                                        height: 11px;
                                        background: url('public/frontend/images/css/bg_start_small.jpg') no-repeat 0 -0px;
                                    }
                                    .font{
                                        font-family: "Times New Roman", Times, serif;
                                    }
                                    .txt_14{
                                        font-size:14px;
                                    }
                                    .txt_18{
                                        font-size:18px;
                                    }
                                    .rate{
                                    	margin-top: -25px;
                                    }
       </style>
       <!-- category -->
       <div class="container">
       <div class="row row-category ">                                 
            <div class="col-md-2  col-xs-4  justify-content-center item-category">
                <a href=""> <span class="icon-category-top">
                <img src="{{asset('public/frontend/images/item-category/pic1.png')}}" alt="" class='img-item-category'></span>
                <div class="title-category">Bán chạy</div>
                </a>
            </div>
            <div class="col-md-2  col-xs-4  justify-content-center item-category">
                <a href=""> <span class="icon-category-top">
                <img src="{{asset('public/frontend/images/item-category/pic1.png')}}" alt="" class='img-item-category'></span>
                <div class="title-category">Dịch vụ</div>
                </a>
            </div>
            <div class="col-md-2  col-xs-4  justify-content-center item-category">
                <a href=""> <span class="icon-category-top">
                <img src="{{asset('public/frontend/images/item-category/pic1.png')}}" alt="" class='img-item-category'></span>
                <div class="title-category">Đặt hẹn</div>
                </a>
            </div>
            <div class="col-md-2  col-xs-4  justify-content-center item-category">
                <a href=""> <span class="icon-category-top">
                <img src="{{asset('public/frontend/images/item-category/pic1.png')}}" alt="" class='img-item-category'></span>
                <div class="title-category">Khuyến mãi</div>
                </a>
            </div>
            <div class="col-md-2  col-xs-4  justify-content-center item-category">
                <a href=""> <span class="icon-category-top">
                <img src="{{asset('public/frontend/images/item-category/pic1.png')}}" alt="" class='img-item-category'></span>
                <div class="title-category">Cẩm nang</div>
                </a>
            </div>
            <div class="col-md-2  col-xs-4  justify-content-center item-category">
                <a href=""> <span class="icon-category-top">
                <img src="{{asset('public/frontend/images/item-category/pic1.png')}}" alt="" class='img-item-category'></span>
                <div class="title-category">Covid</div>
                </a>
            </div>
        </div>
        </div>
       <!-- category end -->
            <!-- Product -->
            <div class="container " >
                 <div class="row" data-aos="fade-up" data-aos-duration="1000"> <div class="col-md-3 col-sm-6 m-b30 " > <div class="dez-box p-a20 border-1 bg-gray"> <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt=""> <div class="overlay-bx"> <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div> </div> </div> <div class="dez-info p-t20 "> <div class="m-b15 price"> <strong class="item_new_price txt_20 left font">123.000 ₫</strong> <span class="discount_percent txt_14 font">35%</span> <span class="item_old_price txt_16 right font">189.000 ₫</span> </div> <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div> <h2 class="  name_product"> <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div> </h2> <div class=" rate font txt_16"> <div class="block_star start_small"> <div style="width:96%;" class="number_start"></div> <div class="start_background"></div> </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16"> <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true"> 1.581</span> </div> </div> </div> </div><div class="col-md-3 col-sm-6 m-b30"> <div class="dez-box p-a20 border-1 bg-gray"> <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt=""> <div class="overlay-bx"> <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div> </div> </div> <div class="dez-info p-t20 "> <div class="m-b15 price"> <strong class="item_new_price txt_20 left font">123.000 ₫</strong> <span class="discount_percent txt_14 font">35%</span> <span class="item_old_price txt_16 right font">189.000 ₫</span> </div> <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div> <h2 class="  name_product"> <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div> </h2> <div class=" rate font txt_16"> <div class="block_star start_small"> <div style="width:96%;" class="number_start"></div> <div class="start_background"></div> </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16"> <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true"> 1.581</span> </div> </div> </div> </div><div class="col-md-3 col-sm-6 m-b30"> <div class="dez-box p-a20 border-1 bg-gray"> <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt=""> <div class="overlay-bx"> <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div> </div> </div> <div class="dez-info p-t20 "> <div class="m-b15 price"> <strong class="item_new_price txt_20 left font">123.000 ₫</strong> <span class="discount_percent txt_14 font">35%</span> <span class="item_old_price txt_16 right font">189.000 ₫</span> </div> <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div> <h2 class="  name_product"> <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div> </h2> <div class=" rate font txt_16"> <div class="block_star start_small"> <div style="width:96%;" class="number_start"></div> <div class="start_background"></div> </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16"> <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true"> 1.581</span> </div> </div> </div> </div><div class="col-md-3 col-sm-6 m-b30"> <div class="dez-box p-a20 border-1 bg-gray"> <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt=""> <div class="overlay-bx"> <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> </div> </div> </div> <div class="dez-info p-t20 "> <div class="m-b15 price"> <strong class="item_new_price txt_20 left font">123.000 ₫</strong> <span class="discount_percent txt_14 font">35%</span> <span class="item_old_price txt_16 right font">189.000 ₫</span> </div> <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div> <h2 class="  name_product"> <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div> </h2> <div class=" rate font txt_16"> <div class="block_star start_small"> <div style="width:96%;" class="number_start"></div> <div class="start_background"></div> </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16"> <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true"> 1.581</span> </div> </div> </div> </div></div>
                <div class="row" data-aos="fade-up" data-aos-duration="1000"> 
                    <div class="col-md-3 col-sm-6 m-b30 " >
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> 
                                    </div>
                                </div>
                            </div>
                                                       
						<div class="dez-info p-t20 ">
						 	<div class="m-b15 price">
								<strong class="item_new_price txt_20 left font">123.000 ₫</strong>
						        <span class="discount_percent txt_14 font">35%</span>
						        <span class="item_old_price txt_16 right font">189.000 ₫</span>
						    </div>
						     <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div>
						        <h2 class="  name_product">
						            <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div>
						        </h2>
						        <div class=" rate font txt_16">
						            <div class="block_star start_small">
						                <div style="width:96%;" class="number_start"></div>
						                <div class="start_background"></div>
						            </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16">
						                        <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true">
						                        1.581</span>
						        </div>  
						       
		
			                    </div>
			                </div>
			        </div><div class="col-md-3 col-sm-6 m-b30">
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> 
                                    </div>
                                </div>
                            </div>
        
                                
                                
						<div class="dez-info p-t20 ">
						 	<div class="m-b15 price">
								<strong class="item_new_price txt_20 left font">123.000 ₫</strong>
						        <span class="discount_percent txt_14 font">35%</span>
						        <span class="item_old_price txt_16 right font">189.000 ₫</span>
						    </div>
						     <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div>
						        <h2 class="  name_product">
						            <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div>
						        </h2>
						        <div class=" rate font txt_16">
						            <div class="block_star start_small">
						                <div style="width:96%;" class="number_start"></div>
						                <div class="start_background"></div>
						            </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16">
						                        <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true">
						                        1.581</span>
						        </div>  
						       
		
			                    </div>
			                </div>
			        </div><div class="col-md-3 col-sm-6 m-b30">
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> 
                                    </div>
                                </div>
                            </div>
        
                                
                                
						<div class="dez-info p-t20 ">
						 	<div class="m-b15 price">
								<strong class="item_new_price txt_20 left font">123.000 ₫</strong>
						        <span class="discount_percent txt_14 font">35%</span>
						        <span class="item_old_price txt_16 right font">189.000 ₫</span>
						    </div>
						     <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div>
						        <h2 class="  name_product">
						            <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div>
						        </h2>
						        <div class=" rate font txt_16">
						            <div class="block_star start_small">
						                <div style="width:96%;" class="number_start"></div>
						                <div class="start_background"></div>
						            </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16">
						                        <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true">
						                        1.581</span>
						        </div>  
						       
		
			                    </div>
			                </div>
			        </div><div class="col-md-3 col-sm-6 m-b30">
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> 
                                    </div>
                                </div>
                            </div>
        
                                
                                
						<div class="dez-info p-t20 ">
						 	<div class="m-b15 price">
								<strong class="item_new_price txt_20 left font">123.000 ₫</strong>
						        <span class="discount_percent txt_14 font">35%</span>
						        <span class="item_old_price txt_16 right font">189.000 ₫</span>
						    </div>
						     <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div>
						        <h2 class="  name_product">
						            <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div>
						        </h2>
						        <div class=" rate font txt_16">
						            <div class="block_star start_small">
						                <div style="width:96%;" class="number_start"></div>
						                <div class="start_background"></div>
						            </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16">
						                        <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true">
						                        1.581</span>
						        </div>  
						       
		
			                    </div>
			                </div>
			        </div>
                                </div>  <div class="row aos-animate" data-aos="fade-up" data-aos-duration="1000"> 
                    <div class="col-md-3 col-sm-6 m-b30">
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> 
                                    </div>
                                </div>
                            </div>
        
                                
                                
						<div class="dez-info p-t20 ">
						 	<div class="m-b15 price">
								<strong class="item_new_price txt_20 left font">123.000 ₫</strong>
						        <span class="discount_percent txt_14 font">35%</span>
						        <span class="item_old_price txt_16 right font">189.000 ₫</span>
						    </div>
						     <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div>
						        <h2 class="  name_product">
						            <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div>
						        </h2>
						        <div class=" rate font txt_16">
						            <div class="block_star start_small">
						                <div style="width:96%;" class="number_start"></div>
						                <div class="start_background"></div>
						            </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16">
						                        <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true">
						                        1.581</span>
						        </div>  
						       
		
			                    </div>
			                </div>
			        </div><div class="col-md-3 col-sm-6 m-b30">
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> 
                                    </div>
                                </div>
                            </div>
        
                                
                                
						<div class="dez-info p-t20 ">
						 	<div class="m-b15 price">
								<strong class="item_new_price txt_20 left font">123.000 ₫</strong>
						        <span class="discount_percent txt_14 font">35%</span>
						        <span class="item_old_price txt_16 right font">189.000 ₫</span>
						    </div>
						     <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div>
						        <h2 class="  name_product">
						            <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div>
						        </h2>
						        <div class=" rate font txt_16">
						            <div class="block_star start_small">
						                <div style="width:96%;" class="number_start"></div>
						                <div class="start_background"></div>
						            </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16">
						                        <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true">
						                        1.581</span>
						        </div>  
						       
		
			                    </div>
			                </div>
			        </div><div class="col-md-3 col-sm-6 m-b30">
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> 
                                    </div>
                                </div>
                            </div>
        
                                
                                
						<div class="dez-info p-t20 ">
						 	<div class="m-b15 price">
								<strong class="item_new_price txt_20 left font">123.000 ₫</strong>
						        <span class="discount_percent txt_14 font">35%</span>
						        <span class="item_old_price txt_16 right font">189.000 ₫</span>
						    </div>
						     <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div>
						        <h2 class="  name_product">
						            <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div>
						        </h2>
						        <div class=" rate font txt_16">
						            <div class="block_star start_small">
						                <div style="width:96%;" class="number_start"></div>
						                <div class="start_background"></div>
						            </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16">
						                        <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true">
						                        1.581</span>
						        </div>  
						       
		
			                    </div>
			                </div>
			        </div><div class="col-md-3 col-sm-6 m-b30">
                        <div class="dez-box p-a20 border-1 bg-gray">
                            <div class="dez-thum-bx dez-img-overlay1 dez-img-effect zoom"> <img src="{{asset('public/frontend/images/product/traxanh.jpg')}}" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0)"> <i class="fa fa-cart-plus icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-search icon-bx-xs"></i> </a> <a href="javascript:void(0)"> <i class="fa fa-heart icon-bx-xs"></i> </a> 
                                    </div>
                                </div>
                            </div>
        
                                
                                
						<div class="dez-info p-t20 ">
						 	<div class="m-b15 price">
								<strong class="item_new_price txt_20 left font">123.000 ₫</strong>
						        <span class="discount_percent txt_14 font">35%</span>
						        <span class="item_old_price txt_16 right font">189.000 ₫</span>
						    </div>
						     <div class="brand_product txt_color_1 "><span class=" txt_18"> L'oreal</span></div>
						        <h2 class="  name_product">
						            <div class="item_name font">Nước Tẩy Trang L'Oreal Tươi Mát Cho Da Dầu Hỗn Hợp 400ml</div>
						        </h2>
						        <div class=" rate font txt_16">
						            <div class="block_star start_small">
						                <div style="width:96%;" class="number_start"></div>
						                <div class="start_background"></div>
						            </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16">
						                        <img src="{{('public/frontend/images/css/cart.svg')}}"  alt="" draggable="false" class="loading" data-was-processed="true">
						                        1.581</span>
						        </div>  
						       
		
			                    </div>
			                </div>
			        </div>
                </div>
            </div>
            <!-- Product END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    @include('template.footer')