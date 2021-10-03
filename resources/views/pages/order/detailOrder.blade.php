@include('template.ecommerce.header')
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{URL::to('/danh-sach-san-pham')}}">Sản phẩm</a></li>
            <li class="breadcrumb-item "><a href="{{URL::to('/tra-cuu-don-hang')}}">Tra cứu đơn hàng</a></li>
            <li class="breadcrumb-item active">Đơn hàng <span class="increment-order-id">{{$orderbyid->increment_id}}</span></li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
     <!-- Wishlist Start -->
     <div class="wishlist-page">
        <div class="container-fluid">
            <div class="wishlist-page-inner">
                <div class="row">
                    <div class="col-md-8 font_family lea-order">
                        <div class="cart-summary">
                            <div class="cart-content">
                                <p ><span class="info-order-khoe-cung-lea"> Địa chỉ nhận hàng </span><span class="tmp-khoe"> {{$orderbyid->shipping->address_shipping}}</span></p>
                                <p ><span class="info-order-khoe-cung-lea tmp-khoe-2"> Số điện thoại người nhận </span><span class="tmp-khoe"> {{$orderbyid->shipping->phone_shipping}}</span></p>
                                <p ><span class="info-order-khoe-cung-lea tmp-khoe-2">Phí vận chuyển </span><span class="tmp-khoe"> {{number_format($orderbyid->shipping->fee_ship)}} đ</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 font_family lea-order">
                        <div class="cart-summary">
                            <div class="cart-content">
                                <p ><span class="info-order-khoe-cung-lea  tmp-khoe-2"> Tổng thanh toán </span><span class="tmp-khoe "> {{number_format($orderbyid->total_order)}} đ</span></p>
                                <p ><span class="info-order-khoe-cung-lea  tmp-khoe-2"> Trạng thái </span><span class="tmp-khoe "> {{$orderbyid->status_order}}</span></p>
                                <p ><span class="info-order-khoe-cung-lea  tmp-khoe-2"> Ngày đặt </span><span class="tmp-khoe"> {{$orderbyid->created_at}}</span></p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 cart_desktop">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Tổng</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    @if($productOfOrder)
                                    @foreach ($orderDetail as $order)
                                    @foreach ($productOfOrder as $item)
                                        
                                    @if( $order->id_product == $item->productID)
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <a href="{{URL::to('/chi-tiet-san-pham-' .$item->productID)}}"><img src="{{asset('public/uploads/product/'.$item->image)}}" alt="{{$item->productName}}"></a>
                                                <p>{{$item->productName}}</p>
                                            </div>
                                        </td>
                                        <td>{{$item->price}} đ</td>
                                     
                                        <td>
                                            {{$order->sales_qty}}
                                        </td>
                                        <td>
                                            {{number_format( $order->sub_total)}}
                                        </td>
                                       
                                      
                                    </tr>
                                    @endif
                                    @endforeach
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- begin --}}
                <div id="cart_page" class=""><div class="content_cart_page width_common">
                        <div>
                            @if($productOfOrder)
                            @foreach ($orderDetail as $order)
                            @foreach ($productOfOrder as $item)
                            @if( $order->id_product == $item->productID)
                         
                            <div class="item_cart">
                                <div class="thumb_donhang">
                                    <a href="{{URL::to('/chi-tiet-san-pham-' .$item->productID)}}">
                                        <img src="{{asset('public/uploads/product/'.$item->image)}}" 
                                        alt="{{$item->productName}}">
                                    </a>
                                </div>
                                <div class="info_donhang">
                                    <div class="title_sanpham_donhang space_bottom_5">
                                        <div>
                                            <strong><a href="{{URL::to('/chi-tiet-san-pham-' )}}" class="txt_color_1">{{$item->productName}}</a></strong>
                                        </div>
                                        
                                    </div>
                                    <div class="block_soluong space_bottom_5 qty">
                                       
                                    <input type="text" value="123" name="arr[123][]"  class="qty-mobile" id="qty" >
                                       
                                    </div>
                                    <div class="price_cart_info"><span class="number_sl txt_666">x</span>
                                        <span class="giamoi">{{($item->price)}}&nbsp;₫</span>
                                    </div>
                                    <span class="txt_color_2 width_common"></span>
                                    <span class="txt_color_2 width_common"></span>
                                </div>
                            
                               
                            </div>
                            @endif
                                    @endforeach
                                    @endforeach
                                    @endif
                        </div>
                    </div>
                
                </div>
                {{-- end --}}
            
        </div>
        
    </div>
    <!-- Wishlist End -->
  
@include('template.ecommerce.footer')
