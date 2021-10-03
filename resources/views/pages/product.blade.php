@include('template.ecommerce.header')   
    <style>
        @media only screen and  (max-width: 426px) {
        .bottom-bar {
background: #1baf68;
margin-bottom:unset;
padding:unset;
padding-bottom: 100px;
}}
        </style>    
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row" style="background: #f1f1f5; ">
                    <div class="col-md-3 header-img-mobile">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="{{asset('public/ecommerce/img/banner/ban6.jpg')}}" />
                                <a class="img-text" >
                                    <p>Lea không chỉ là nơi làm đẹp</p>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <style>
                        video {
                            object-fit: fill;
width: 645px;
height: 400px;
display: flex;
}
                    </style>
                    <div class="col-md-6 slider-mobile">
                        <div class="header-slider normal-slider">
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/ban4.jpg')}}" alt="Slider Image" />
                               
                            </div>
                            <div class="header-slider-item">
                                <img  src="{{asset('public/ecommerce/img/banner/ban5.jpg')}}" alt="Slider Image" />
                               
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-3 category-desktop">
                        <nav class="navbar bg-light">
                            @include('template.ecommerce.category')
                        </nav>
                    </div>

                   
                    
                </div>
            </div>
        </div>
        {{-- category-mobile --}}
<div class="block_icon_category width_common" id="new_box_icon_category">
    <div class="width_common scroll_horizon">
        <div class="content_scroll_horizon">
            <a href="">
            <div class="new_width_icon_category">
                <div class="item_category_top">
                    <a href="{{URL::to('/tra-cuu-don-hang')}}" >
                        <span class="icon_lam_category_top">
                            <img src="https://media.hasaki.vn/hsk/icon/menu-category.png"></span>
                            <div class="title_cate_home">Tất cả</div></a><a href="{{URL::to('/tra-cuu-don-hang')}}"  >
                            <span class="icon_lam_category_top"><img src="{{asset('public/ecommerce/img/category-mobile/track-order-70.png')}}"></span>
                            <div class="title_cate_home">Tra cứu đơn hàng</div>
                    </a>
                </div>
                <div class="item_category_top">
                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');">
                        <span class="icon_lam_category_top">
                            <img src="{{asset('public/ecommerce/img/category-mobile/menu-booking.png')}}">
                        </span><div class="title_cate_home">Đặt hẹn</div>
                    </a>
                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');">
                        <span class="icon_lam_category_top">
                            <img src="{{asset('public/ecommerce/img/category-mobile/icon-covid.png')}}">
                        </span><div class="title_cate_home">Covid</div>
                    </a>
                </div>
                <div class="item_category_top">
                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top">
                        <img src="{{asset('public/ecommerce/img/category-mobile/now-free-mobile.gif')}}"></span>
                        <div class="title_cate_home">Giao 2H</div>
                    </a>
                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');">
                        <span class="icon_lam_category_top"><img src="{{asset('public/ecommerce/img/category-mobile/menu-bestseller.png')}}"></span>
                        <div class="title_cate_home">Bán chạy</div>
                    </a></div>
                    <div class="item_category_top">
                        <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top"><img src="{{asset('public/ecommerce/img/category-mobile/menu-spa.png')}}"></span>
                            <div class="title_cate_home">Clinic &amp; S.P.A</div></a>
                            <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top">
                                <img src="{{asset('public/ecommerce/img/category-mobile/menu-deals.png')}}"></span>
                                <div class="title_cate_home">Deals</div></a></div><div class="item_category_top">
                                    <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top">
                                        <img src="{{asset('public/ecommerce/img/category-mobile/menu-spa-services.png')}}"></span>
                                        <div class="title_cate_home">Bảng giá</div></a>
                                        <a href="javascript:;"  onclick="alert('Hệ thống đang cập nhật. Xin cảm ơn.');"><span class="icon_lam_category_top">
                                            <img src="{{asset('public/ecommerce/img/category-mobile/menu-blog.png')}}"></span>
                                            <div class="title_cate_home">Cẩm nang</div></a>
                                        </div>
            </div>
        </div></div>
        </div>
             {{--end category-mobile --}}
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
       {{-- @include('template.ecommerce.brand')    --}}
        <!-- Brand End -->      
        <!-- Featured Product Start -->
        @if(count($featureProducts) >3 )
        <div class="featured-product product"  >
            <div class="container-fluid">
                <div class="section-header">
                    <h2 class="customer-h2">Sản phẩm Nổi bật</h2>
                    {{-- <span><a href="{{URL::to('/san-pham-theo-danh-muc-999' )}}">Xem tất cả @if(count($featureProducts)>10)(10+) @endif</a></span> --}}
                </div>
                {{-- <div class="row align-items-center product-slider product-slider-4"> --}}
                    <div class="row align-items-center product-slider ">
                    @foreach ($featureProducts as $item)      
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="{{URL::to('/chi-tiet-san-pham-'.$item->productID)}}">
                                    <img class="img-lea"
                                    src="{{asset('public/uploads/product/'.$item->image)}}" alt="{{$item->productName}}">
                                </a>
                                <div class="product-action">
                                    <form>
                                        @csrf
                                        <input type="hidden" class="cart_product_id_{{$item->productID}}" value="{{$item->productID}}">
                                        <input type="hidden" class="cart_product_name_{{$item->productID}}" value="{{$item->productName}}">
                                        <input type="hidden" class="cart_product_price_{{$item->productID}}" value="{{$item->price}}">
                                        <input type="hidden" class="cart_product_image_{{$item->productID}}" value="{{$item->image}}">
                                        
                                    <a  class="add-to-cart-lea" data-id_product="{{$item->productID}}"><i class="fa fa-cart-plus"></i></a>
                                </form>
                                    <a href="{{URL::to('/chi-tiet-san-pham-'.$item->productID)}}"><i class="fa fa-heart"></i></a>
                                    <a href="{{URL::to('/chi-tiet-san-pham-'.$item->productID)}}"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                           
                                <!--customer product item-->
                         <a href="{{URL::to('/chi-tiet-san-pham-'.$item->productID)}}"> 
                            <div class="dez-info p-t20 "> 
                            <div class="m-b15 price"> 
                                <strong class="item_new_price txt_20 left font">{{$item->price}} đ</strong> 
                                                            </div> 
                            <div class="brand_product txt_color_1 ">
                                <div class=" item_name_lea txt_18">{{$item->productName}}</div>
                            </div> 
                            <h2 class="  name_product"> 
                                <div class="item_name font">
                                    {{$item->moTaNgan}}</div> 
                            </h2> 
                            <div class=" rate font txt_16"> 
                                <div class="block_star start_small"> 
                                    <div style="width:96%;" class="number_start"> </div> 
                                    <div class="start_background"></div> 
                                </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16"><img style="width: unset;display: unset; " src="public/frontend/images/css/cart.svg" alt="" draggable="false" class="loading" data-was-processed="true"> 1.581</span>
                            </div>
                        </div>
                        </a>
                                 <!--end customer product item-->
                           
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <!-- Featured Product End -->       
   
        
        <!-- Category Start-->

        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="customer-h2">Khỏe cùng Lea</h1>
                    </div>
                    <div class="col-md-4" style="text-align: end;">
                        <a href="tel:0907799046">(+84) 090 7799 046</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        
        
       
        <!-- Newsletter End -->        
        
        <!-- Recent Product Start -->
        @if(count($meidcanProducts) >0 )
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h2 class="customer-h2">Thiết bị Y tế</h2>
            
                    {{-- <span><a href="{{URL::to('/san-pham-theo-danh-muc-'.$meidcanProducts[0]->category_id )}}">Xem tất cả @if(count($meidcanProducts)>10)(10+) @endif</a></span> --}}
                </div>
                <div class="row align-items-center product-slider ">
                    @foreach ($meidcanProducts as $item)
                        
                    
                    <div class="col-lg-3">
                        <div class="product-item">
                            
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img class="img-lea"
                                    src="{{asset('public/uploads/product/'.$item->image)}}" alt="{{$item->productName}}">
                                </a>
                                <div class="product-action">
                                    <form>
                                        @csrf
                                        <input type="hidden" class="cart_product_id_{{$item->productID}}" value="{{$item->productID}}">
                                        <input type="hidden" class="cart_product_name_{{$item->productID}}" value="{{$item->productName}}">
                                        <input type="hidden" class="cart_product_price_{{$item->productID}}" value="{{$item->price}}">
                                        <input type="hidden" class="cart_product_image_{{$item->productID}}" value="{{$item->image}}">

                                    <a  class="add-to-cart-lea" data-id_product="{{$item->productID}}"><i class="fa fa-cart-plus"></i></a>
                                </form>
                                <a href="{{URL::to('/chi-tiet-san-pham-'.$item->productID)}}"><i class="fa fa-heart"></i></a>
                                    <a href="{{URL::to('/chi-tiet-san-pham-'.$item->productID)}}"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                           
                                <!--customer product item-->
                         <a href="{{URL::to('/chi-tiet-san-pham-'.$item->productID)}}"> 
                            <div class="dez-info p-t20 "> 
                            <div class="m-b15 price"> 
                                <strong class="item_new_price txt_20 left font">{{$item->price}} vnđ</strong> 
                                                            </div> 
                            <div class="brand_product txt_color_1 ">
                                <div class=" item_name_lea txt_18">{{$item->productName}}</div>
                            </div> 
                            <h2 class="  name_product"> 
                                <div class="item_name font">
                                    {{$item->moTaNgan}}</div> 
                            </h2> 
                            <div class=" rate font txt_16"> 
                                <div class="block_star start_small"> 
                                    <div style="width:96%;" class="number_start"> </div> 
                                    <div class="start_background"></div> 
                                </div>(56)&nbsp;&nbsp;|&nbsp;&nbsp;<span class="item_count_by txt_16"><img style="width: unset;display: unset; " src="public/frontend/images/css/cart.svg" alt="" draggable="false" class="loading" data-was-processed="true"> 1.581</span>
                            </div>
                        </div>
                        </a>
                                 <!--end customer product item-->
                           
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <!-- Recent Product End -->
        
        

        <!-- Review Start -->
      
        <!-- Review End -->        
      
        @include('template.ecommerce.footer')