@include('template.ecommerce.header')

<style type="text/css">
    .product-detail .nav.nav-pills .nav-link {
             background: #4caf50;
              color: #ebf4f0;
    }
.product-detail .nav.nav-pills .nav-link.active {
    color: #000000;
    font-weight: bold;
  
}
.navbar-nav .nav-item .nav-link i { margin-right: 8px; text-align: center;width: 20px;}
.price-Lea{
    width: 93px !important;
}
.img-multi-lea{
    min-height: 59px !important;max-height: 59px !important;
}
.img-main-lea{
    min-height: 320px !important;max-height: 320px !important;
}
</style>
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{URL::to('/danh-sach-san-pham')}}">Sản Phẩm</a></li>
            <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

 
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="product-detail-top">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        <img class="img-main-lea" src="{{asset('public/uploads/product/'.$productDetail['image'])}}" alt="{{$productDetail['productName']}}">
                                        @foreach($listImage as $image)
                                        <img class="img-main-lea" src="{{asset('public/uploads/product/'.$image->imgName)}}" alt="{{$productDetail['productName']}}">
                                        @endforeach
                                    </div>
                                    <div class="product-slider-single-nav normal-slider">
                                       
                                        <div class="slider-nav-img"><img class="img-multi-lea" src="{{asset('public/uploads/product/'.$productDetail['image'])}}" alt="{{$productDetail['productName']}}"></div>
                                        @foreach($listImage as $image)
                                        <div class="slider-nav-img"><img class="img-multi-lea" src="{{asset('public/uploads/product/'.$image->imgName)}}" alt="{{$productDetail['productName']}}"></div>
                                        
                                        @endforeach
                                    </div>
                                </div>
                               
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <div class="title"><h2>{{$productDetail['productName']}}</h2></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <h4 >Giá:</h4>
                                            <p >{{$productDetail['price']}} ₫ <span>{{$productDetail['price_old']}}</span></p>
                                        </div>
                <form >
                                              
 
                <div class="quantity">
                    <h4 class='price-Lea'>Số Lượng:</h4>
                    <div class="qty">
                        <button type="button" class="btn-minus "><i class="fa fa-minus"></i></button>
                        <input type="text" name="qty" class="cart_product_qty_{{$productDetail->productID}}" value="1">
                       
                        <button type="button" class="btn-plus"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                                      
                                        <div class="action">
                                            @csrf
                                            <input type="hidden" class="cart_product_id_{{$productDetail->productID}}" value="{{$productDetail->productID}}">
                                            <input type="hidden" class="cart_product_name_{{$productDetail->productID}}" value="{{$productDetail->productName}}">
                                            <input type="hidden" class="cart_product_price_{{$productDetail->productID}}" value="{{$productDetail->price}}">
                                            <input type="hidden" class="cart_product_image_{{$productDetail->productID}}" value="{{$productDetail->image}}">
                                            
                                            <button type="button" data-id_product="{{$productDetail->productID}}" class="btn add-to-cart-lea" ><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</button>
                                            
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row product-detail-bottom">

                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Mô tả</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#specification">Thông tin Thêm</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Đánh giá (0)</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="description" class="container tab-pane active">
                                        <h4>Giới thiệu về sản phẩm {{$productDetail['productName']}}</h4>
                                        
                                            
                                       
                                    <p><?php echo $productDetail['product_desc'];?></p>
                                    </div>
                                    <div id="specification" class="container tab-pane fade">
                                        <h4>Thông tin Thêm</h4>
                                        <ul>
                                            <li>Hệ thống đang cập nhật</li>
                                        </ul>
                                    </div>
                                    <div id="reviews" class="container tab-pane fade">
                                     <h4>Chưa có đánh giá.</h4>
                                        <ul>
                                            <li>Hệ thống đang cập nhật</li>
                                        </ul></div>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <div class="section-header">
                                <h2>Sản Phẩm Cùng Loại</h2>
                            </div>

    <div class="row align-items-center product-slider product-slider-3">
        @if(count($productsByCateId) > 3)
        @foreach($productsByCateId as $product)
                                <div class="col-lg-3">
                                    <div class="product-item">   
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img style="max-height: 300px;min-height: 300px;"
                                                src="{{asset('public/uploads/product/'.$product->image)}}" alt="{{$product->productName}}">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="{{URL::to('/chi-tiet-san-pham-'.$product->productID)}}"><i class="fa fa-heart"></i></a>
                                                <a href="{{URL::to('/chi-tiet-san-pham-'.$product->productID)}}"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                            <!--customer product item-->
                                     <a href="{{URL::to('/chi-tiet-san-pham-'.$product->productID)}}"> 
                                        <div class="dez-info p-t20 "> 
                                        <div class="m-b15 price"> 
                                            <strong class="item_new_price txt_20 left font">{{$product->price}} đ</strong> 
                                                                        </div> 
                                        <div class="brand_product txt_color_1 ">
                                            <div class=" item_name_lea txt_18">{{$product->productName}}</div>
                                        </div> 
                                        <h2 class="  name_product"> 
                                            <div class="item_name font">
                                               {{$product->moTaNgan}}</div> 
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
        @endif
    </div>
                        </div>
                    </div>
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-widget category">
                            <h2 class="title">Danh Mục</h2>
                            @include('template.ecommerce.category')
                        </div>
                        
                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                               @foreach($productFeature as $product)
                                <div class="product-item">
                                        
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img style="max-height: 320px;min-height: 320px;"
                                                src="{{asset('public/uploads/product/'.$product->image)}}" alt="Product Image">
                                            </a>
                                            <div class="product-action">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                                <a href="{{URL::to('/chi-tiet-san-pham-'.$product->productID)}}"><i class="fa fa-heart"></i></a>
                                                <a href="{{URL::to('/chi-tiet-san-pham-'.$product->productID)}}"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>
                                       
                                            <!--customer product item-->
                                     <a href="{{URL::to('/chi-tiet-san-pham-'.$product->productID)}}"> 
                                        <div class="dez-info p-t20 "> 
                                        <div class="m-b15 price"> 
                                            <strong class="item_new_price txt_20 left font">{{$product->price}} đ</strong> 
                                                                        </div> 
                                        <div class="brand_product txt_color_1 ">
                                            <div class=" item_name_lea txt_18">{{$product->productName}}</div>
                                        </div> 
                                        <h2 class="  name_product"> 
                                            <div class="item_name font">
                                                {{$product->moTaNgan}}</div> 
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
                    @endforeach
                                
                            </div>
                        </div>
                        
                       
                        <div class="sidebar-widget tag">
                            <h2 class="title">Tags Liên Quan</h2>
                            <a href="#">Khẩu trang</a>
                            <a href="#">hàng Y tế</a>
                            <a href="#">HA95</a>
                            <a href="#">Oxy spo</a>
                            <a href="#">Dưỡng da</a>
                            <a href="#">Tắm trắng</a>
                            <a href="#">Trị mụn</a>
                            <a href="#">Iphone</a>
                            <a href="#">Omo</a>
                            <a href="#">Comfort</a>
                            <a href="#">onevias</a>
                            <a href="#">Aquarius</a>
                        </div>
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>

          <!-- Brand Start -->
 
        <!-- Brand End -->   
@include('template.ecommerce.footer')