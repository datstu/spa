@include('template.ecommerce.header')
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{URL::to('/danh-sach-san-pham')}}">Sản phẩm</a></li>
            <li class="breadcrumb-item "><a href="{{URL::to('/tra-cuu-don-hang')}}">Tra cứu đơn hàng</a></li>
            <li class="breadcrumb-item active">Khách hàng <span class="increment-order-id">{{$phone}}</span></li>
        </ul>
    </div>
</div>
<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
<!-- Breadcrumb End -->
     <!-- Wishlist Start -->
     <div class="wishlist-page">
        <div class="container-fluid">
            <div class="wishlist-page-inner">
                <div class="row">
                    
                    
                    <div class="col-md-12 cart_desktop">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Mã đơn</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Ngày đặt hàng</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                   @foreach ($orderByPhone as $item)
                                       

                                    <tr>
                                       
                                        <td> <a class="underline" href="{{URL::to('theo-doi-don-hang-'.$item->id_order)}}">{{ $item->increment_id}} </a></td>
                                        <td>{{number_format( $item->total_order)}} đ</td>
                                        
                                        <td>{{ $item->status_order}}</td>
                                        <td>{{ $item->created_at}}</td>
                                   
                                      
                                    </tr>
                               
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                     {{-- begin --}}
                <div id="cart_page" style="margin: 0" ><div class="content_cart_page width_common">
                    <div>
                        @if($orderByPhone)
                       
                        @foreach ($orderByPhone as $item)
                        
                        <div class="item_cart">
                            <div class="thumb_donhang">
                                <a class="underline" href="{{URL::to('theo-doi-don-hang-'.$item->id_order)}}">{{ $item->increment_id}} </a>
                            </div>
                            <a  href="{{URL::to('theo-doi-don-hang-'.$item->id_order)}}">
                            <div class="info_donhang">
                                <div class="title_sanpham_donhang space_bottom_5">
                                    <div>
                                        <strong>{{ $item->status_order}}</strong>
                                    </div>
                                    
                                </div>
                                <div class=" space_bottom_5 qty">
                                    {{number_format( $item->total_order)}} đ
                                
                                </div>
                                <div class="space_bottom_5">
                                    {{ $item->created_at}}
                                </div>
                                <span class="txt_color_2 width_common"></span>
                                <span class="txt_color_2 width_common"></span>
                            </div>
                        </a>
                           
                        </div>
                       
                                @endforeach
                                @endif
                    </div>
                </div>
            
            </div>
            {{-- end --}}
                </div>  <div class="cart_desktop">{{$orderByPhone->links()}}</div>
                
               
            </div>
            
        </div>
        
    </div>
    <!-- Wishlist End -->
  
@include('template.ecommerce.footer')
