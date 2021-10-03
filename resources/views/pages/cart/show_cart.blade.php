@include('template.ecommerce.header')
<style>
 .cart-btn-lea button, .cart-btn-lea a{
    right: 0;
    position: absolute;
    margin: -45px 0;
    color: #58bd5c;
    background: #ffffff;
    border: 1px solid #58bd5c;
    width: calc(50% - 15px);
    height: 50px;
    padding: 2px 10px;
    text-align: center;
    border-radius: 4px;
    }
.empty-cart-lea a{
    display: block;
    margin: 50px auto;
    width: fit-content;
    border: 1px solid;
    padding: 20px;
    font-weight: 700;
    font-size: larger;
}
.empty-cart-lea a:hover{
    background: #1c8153;
    color: #fff;
}
.txt-center{
    text-align: center;
}
.lea-order{
    margin: 0 auto;
}
.cart-btn-lea a,button:hover{
    background-color: #1baf68;
    font-weight: bold;
    border: #1baf68;
    color: #fff;
}
.cart-content{
    background-color: #fff;
}
</style>
<?php $content = Cart::getContent();?>
            <!-- Cart Start -->
  <div class="cart-page">
   
    <div class="container-fluid">
         <!-- Breadcrumb Start -->
         <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="{{URL::to('danh-sach-san-pham')}}">Sản Phẩm</a></li>
                    <li class="breadcrumb-item active">Giỏ hàng</li>
                </ul>
               
            </div>
            
        </div>
        <!-- Breadcrumb End -->
    @if(count($content) >0 )
            <div class="row cart_desktop " style="margin-bottom: 100px;">
                <div class="col-lg-12">  
                    <div class="cart-page-inner">
                        <?php 
                        $mess = Session::get('message'); 
                        if ($mess == 'success_edit') {
                                ?>
                        <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Cập nhật giỏ hành thành công.</strong>
                        </div>
                        <?php
                        }
                        Session::put('message',null);
                        ?>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="45%">Sản phẩm </th>
                                        <th width="15%">Giá</th>
                                        <th width="15%">Thành tiền</th>
                                        <th width="15%">Số lượng</th> 
                                        <th width="10%">Xóa</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle font_family">
                <form action="{{URL::to('/update-cart')}}" method="POST">  
                    {{ csrf_field() }}   

                @foreach($content as $key =>$items)
            
                    <input type="hidden" name="" value="{{$key}}">

                    <tr>
                        <td>
                            <div class="img">
                                <a href="{{URL::to('/chi-tiet-san-pham-'.$items->id)}}">
                                    <img style="max-height: 80px;min-width: 80px;min-height: 80px;max-width: 80px;" 
                                    src="{{asset('public/uploads/product/'.$items->attributes->image)}}" alt="{{$items->name}}"></a>
                                <p>{{$items->name}}</p>
                            </div>
                        </td>
                        <td>{{(number_format($items->price) )}} vnđ</td>
                       
                    
                        <input type="hidden" name="form['rowId'][]" value="{{$key}}">

                        <td>{{number_format($items->getPriceSum())}} vnđ</td>
                        <td>
                            <div class="qty">
                                <button type='button' class="btn-minus"><i class="fa fa-minus"></i></button>
                                <input name="arr[{{$key}}][]" type="text" value="{{$items->quantity}}">
                                <button type='button' class="btn-plus"><i class="fa fa-plus"></i></button>
                            </div>
                        </td>
                        <td style="font-size: 26px">
                            <a href="{{URL::to('/delete-cart-'.$key)}}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                </div>
                
                <div class="col-lg-12">
                    <div class="cart-page-inner">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="cart-summary">
                                    
                                    <div class=" cart-btn-lea">
                                        <button  type="submit" style="right: 0;
                                        position: absolute;margin: -45px 0;">Cập nhật giỏ hàng</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </form>
        
         
            <div class="col-md-8 font_family lea-order">
                <div class="cart-summary">
                    <div class="cart-content">
                        <h1 class="txt-center">Hóa đơn của bạn</h1>
                        <p>Tạm tính<span>{{number_format(Cart::getSubTotal())}} vnđ</span></p>
                       
                        <h2 style="font-family: sans-serif;">Tổng cộng<span>{{number_format(Cart::getTotal())}} vnđ</span></h2>
                    </div>
                    <div class="cart-btn-lea">
                        
                        <a href="{{URL::to('/checkout')}}" class="place_order" style="right: 0;
                        position: absolute;padding: 10px; margin: -28px 200px;">Tiến hành đặt hàng</a>
                    </div>
                </div>
            </div>
           

<!-- Cart End -->
      
          
        @else
        <!-- Breadcrumb Start -->
        <div class="cart_desktop">
         <div class="breadcrumb-wrap ">
            <div class="empty-cart-lea">
                <a href="{{URL::to('/danh-sach-san-pham')}}">Giỏ hàng đang trống. Tiếp tục mua hàng.</a>
            </div>
        </div>
    </div>
        <!-- Breadcrumb End -->
           
            @endif
            
        </div>

    </div>
    <!-- contact area  END -->
    @if(count($content) >0 )
    {{-- cart mobile --}}
<div id="cart_page" class=""><div class="content_cart_page width_common">
  <div>
    <form action="{{URL::to('/update-cart')}}" method="POST">  
        {{ csrf_field() }}   

      @foreach($content as $key =>$items)
      <div class="item_cart">
          <div class="thumb_donhang">
              <a href="{{URL::to('/chi-tiet-san-pham-'.$items->id)}}">
                  <img src="{{asset('public/uploads/product/'.$items->attributes->image)}}" 
                  alt="{{$items->name}}">
              </a>
          </div>
          <div class="info_donhang">
              <div class="title_sanpham_donhang space_bottom_5">
                  <div>
                      <strong><a href="{{URL::to('/chi-tiet-san-pham-'.$items->id)}}" class="txt_color_1">{{$items->name}}</a></strong>
                  </div>
                  
              </div>
              <div class="block_soluong space_bottom_5 qty">
                  <button type='button' class="button_left btn-minus"><i class="icon_minius">&nbsp;</i></button>
                  <input type="text" value="{{$items->quantity}}" name="arr[{{$key}}][]"  class="qty-mobile" id="qty" >
                  <button type='button' class="button_right btn-plus"><i class="icon_plus">&nbsp;</i></button>
              </div>
              <div class="price_cart_info"><span class="number_sl txt_666">x</span>
                  <span class="giamoi">{{number_format($items->price)}}&nbsp;₫</span>
              </div>
              <span class="txt_color_2 width_common"></span>
              <span class="txt_color_2 width_common"></span>
          </div>
      
          <a href="{{URL::to('/delete-cart-'.$key)}}" class="btn_del_cart_item material-ripple">
              <img src="{{asset('/public/ecommerce/img/cart-mobile/trash_close.svg')}}" alt="{{$items->name}}">
          </a>
      </div>
      @endforeach
  </div>
  {{-- update cart --}}
    <div id="box_addcombo_detail" class="width_common box_white border_bottom_detail">
        <div class="block_content_addcombo width_common relative">
            <div class="width_common block_result_addcombo">
                
                    <div class="block_result_combo">
                    <button type="submit" class="btn btn_site_3 btn_site_1" title="Thêm vào giỏ hàng"><span>Cập nhật giỏ hàng</span></button>
                    </div>
               
            </div>
        </div>
    </div>
</form>
  {{-- update cart --}}
    <div class="block_total_cart"><div class="total_item space_bottom_10">
        <div class="text_left text_item">Tạm tính:</div>
        <div class="text_right text_item"><div class="">{{number_format(Cart::getSubTotal())}} &nbsp;₫</div></div></div>
<div class="total_item space_bottom_10">
    <div class="text_left text_item">Tổng thanh toán:</div><div class="text_right text_item">
        <div class="txt_giatien">{{number_format(Cart::getTotal())}}&nbsp;₫</div>
        <div class="txt_666">Đã bao gồm VAT</div></div></div>
        <div class="text_warning_cart space_bottom_10"><div class="text_right">
            <div class="detail_text_warning_cart"></div></div></div></div></div>
            <div class="clearfix"></div>
            
    <div class="nav_bottom_detail material-ripple">
        <a href="{{URL::to('/checkout')}}" class="btn btn_site_3">Tiến hành đặt hàng</a>
    </div></div>
    {{-- end cart mobile --}}
   
  <!-- Product details -->
  @else 
   <!-- Breadcrumb Start -->
   <div id="cart_page_empty_mobile">
   <div class="breadcrumb-wrap cart_page">
      <div class="empty-cart-lea">
          <a href="{{URL::to('/danh-sach-san-pham')}}">Giỏ hàng đang trống. Tiếp tục mua hàng.</a>
      </div>
  </div>
</div>
  <!-- Breadcrumb End -->
     
      @endif
</div>

@include('template.ecommerce.footer')
