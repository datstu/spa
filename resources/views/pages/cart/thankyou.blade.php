@include('template.ecommerce.header')
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{URL::to('/danh-sach-san-pham')}}">Sản phẩm</a></li>
            <li class="breadcrumb-item active">Đặt hàng</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
   
        <!-- Checkout Start -->
       
            <style>
                .success_order_place{
                    background: #fff;
    padding: 20px;
    text-align: center;
    margin-bottom: 50px;
                }
                .thank_you{
                    color: #1baf68;
    font-size: 40px;
    font-weight: bold;
                }
                .id_order{
                    font-size: 25px;
                }
                .id_order a{
                    font-weight: bold;
    font-style: italic;
    text-decoration: underline;
    color: red;
                }
                .continue_shopping{
                    display: inline-block;
    border: 2px solid #1baf68;
    border-radius: 10px;
    padding: 5px;
    margin: 5px;
                }
                .continue_shopping a{
                    font-size: 30px;
                }
                .continue_shopping a:hover, .continue_shopping:hover{
                    color: #000;
                    
                }
                .continue_shopping:hover{
                border: 2px solid #000;
                }
            </style>
<div class="checkout">
    <div class="container-fluid"> 
        <div class="row">
            
            <div class="col-lg-12">
                <div class="success_order_place">
                    <div class="thank_you"> Đặt hàng thành công.</div>
                    <div class="id_order">Cảm ơn bạn đã mua hàng. Chúng tôi sẽ liên hệ với bạn.<br> Mã đơn hàng: 
                        <form action="search-order" method="GET">
                            @csrf
                            <input name="search_order" value="{{$orderIncre}}"  type="hidden">
                        <button class="btn-outline-danger user-order-khoe">{{$orderIncre}}</button>
                        </form>
                     </div>
                    <div class="continue_shopping"><a href="{{URL::to('/danh-sach-san-pham')}}"> Tiếp tục mua hàng</a>    </div>
                </div>
            </div>
            
            </div>
        
        </div>
    </div>
</div>
        <!-- Checkout End -->
@include('template.ecommerce.footer')
