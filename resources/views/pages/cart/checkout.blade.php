@include('template.ecommerce.header')
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{URL::to('/danh-sach-san-pham')}}">sản phẩm</a></li>
            <li class="breadcrumb-item active">Đặt hàng</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
   
        <!-- Checkout Start -->
        <form action="{{URL::to('/place-order')}}" method="POST">
            @csrf
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Thông tin nhận hàng</h2>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Số điện thoại</label>
                                        <input data-validation="length" data-validation-length="10" data-validation-error-msg="Vui lòng nhập đúng 10 số." name="phone_shipping" required class="form-control"  type="number" placeholder="Nhập số điện thoại">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Họ và Tên</label>
                                        <input name="name_shipping" required class="form-control"  type="text" placeholder="Vui lòng nhập họ và tên">
                                    </div>
                                   
                                   <input type="hidden"  name="id_user">
                                   <div class="col-md-12">
                                    <label>Chọn khu vực</label>
                                    <select  required name="city" id="city" class="form-control choose city">
                                        <option value="">--Chọn tỉnh/thành phố--</option>
                                        @foreach ($city as $item)
                                        <option value="{{$item->matp}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Chọn quận huyện</label>
                                    <select required  name="province" id="province" class="form-control choose province">
                                        
                                        
                            
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Chọn xã phường</label>
                                    <select required  name="wards" id="wards" class="form-control  wards">
                                        
                                       
                            
                                    </select>
                                </div>
                              
                                    <div class="col-md-12">
                                        <label>Địa chỉ</label>
                                        <input name="address_shipping" required class="form-control" type="text" placeholder="Vui lòng nhập địa chỉ">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Ghi chú</label>
                                        <textarea name="note" class="form-control" rows="10"></textarea>
                                    </div>
                               
                                   <input type="hidden" name="feeship">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <?php $content = Cart::getContent();  ?>
                                <h1>Đơn hàng</h1>
                               @foreach($content as $item)
                                <p >{{$item->name}}<span >{{number_format($item->getPriceSum())}} vnđ</span>
                                    <div>SL: {{$item->quantity}}</div></p>
                                    <hr>
                                @endforeach
                                <p class="sub-total">Tạm tính:<span>{{number_format(Cart::getSubTotal())}} vnđ</span>
                                </p>
                                <p class="ship-cost">Phí vận chuyển<span id="total-fee"> 0 vnđ </span> </p>
                                <input type="hidden" id="total-fee" name="feeship">
                                <h2>Thành tiền:<span id="total_order">{{number_format(Cart::getTotal())}} vnđ</span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Phương thức thanh toán</h1>
                                    <div class="payment-method">
                                       
                                        <div class="custom-control custom-radio">
                                            <input required type="radio" class="custom-control-input" value="1" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Thanh toán khi nhận hàng  </label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                                Shipping COD
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div id="cart-page">
                            <div class=" nav_bottom_detail ">
                                <button class="btn btn_site_3 " type="submit">ĐẶT HÀNG</button>
                            </div>
                        </div>
                            
                        </div>
                       
                    </div>
               
                </div>
            </div>
        </div>
    </form>
        <!-- Checkout End -->
@include('template.ecommerce.footer')
