@include('template.ecommerce.header')
<!-- header END -->
<!-- Content -->

<div class="page-content bg-white"
    >
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-white-middle tb m-b30 mobile-425"
        style="background-image:url(public/frontend/images/banner/bnr_product2.jpg);background-size: 100% 100%;">
       
    </div>
    <!-- inner page banner END -->


    <!-- custom here -->


    <!-- #endregion Jssor Slider End -->
    <!-- contact area -->
    <div class="content-area bgeffect" style="background-image:url(public/frontend/images/background/bg12.jpg);"
        data-0="background-position:0px 0px;" data-end="background-position:0px 1000px;">
        <style>
        .row-category {
            margin-top: -25px
        }

        .item-category {
            text-align: center;
        }

        .title-category {
            height: 57px;
            margin-top: 3px;
        }

        .img-item-category {
            height: 60px;
        }

        .item_new_price {
            color: #ff6600;
            line-height: 20px;
        }

        .txt_16 {
            font-size: 16px;
        }

        .txt_20 {
            font-size: 20px;
        }

        .price strong {
            font-weight: bold;
        }

        .discount_percent {
            background: #ff5501;
            float: right;
            display: inline-block;
            background: red;
            margin-left: 5px;
            padding: 0px 5px;
            border-radius: 2px;
            color: #fff;
        }

        .item_old_price {
            color: #666;
            text-decoration: line-through;
            line-height: 20px;
        }

        .right {
            float: right;
        }

        .left {
            float: left;
        }

        .txt_12 {
            font-size: 12px;
        }

        .txt_color_1 {
            color: #326e51;
        }

        .brand_product {
            width: 100%;
            margin-top: 25px;
            font-weight: bold;
        }

        .name_product {
            width: 100%;

            font-size: 20px;
        }

        .item_name {
            line-height: 24px;
            max-height: 50px;
            overflow: hidden;
            margin: -15px 0;
        }

        .block_star {
            position: relative;
            display: inline-block;
            font-size: 0;
            line-height: 0;
            margin-right: 3px;
        }

        .start_small {
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

        .font {
            font-family: "Times New Roman", Times, serif;
        }

        .txt_14 {
            font-size: 14px;
        }

        .txt_18 {
            font-size: 18px;
        }

        .rate {
            margin-top: -25px;
        }
        </style>
        <!-- category -->
      
        <!-- category end -->
        <!-- Product -->
        @if(count($productCategory) >3 )
        <div class="featured-product product"  >
            <div class="container-fluid">
                <div class="section-header" style="color: #000">
                    @if($category = 999) 
                    <h3 style="display:inline-block"> Sản phẩm nổi bật</h3>
                    @else<h3 style="display:inline-block"> {{$category->category_name}}</h3>
                    @endif
                    <span> ({{count($productCategory) }} Sản phẩm)</span>
                </div>
                <div class="row align-items-center ">
                    @foreach ($productCategory as $item)      
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-image">
                                <a href="{{URL::to('/chi-tiet-san-pham-'.$item->productID)}}">
                                    <img class="img-lea"
                                    src="{{asset('public/uploads/product/'.$item->image)}}" alt="{{$item->productName}}">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
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
                {{$productCategory->links()}}
            </div>
   
        </div>

        @endif
        <!-- Product END -->
        
    </div>

    <!-- contact area  END -->
</div>
<!-- Content END-->
@include('template.ecommerce.footer')