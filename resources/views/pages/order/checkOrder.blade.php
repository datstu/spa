@include('template.ecommerce.header')
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{URL::to('/danh-sach-san-pham')}}">Sản phẩm</a></li>
            <li class="breadcrumb-item active">Tra cứu đơn hàng</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
   
        <!-- Checkout Start -->
        <div class="product-view">
            <div class="container-fluid"> 
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="product-view-top">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-search">
                                        <p>Nhập số điện thoại hoặc mã đơn hàng</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form action="search-order" method="GET">
                                        @csrf
                                    <div class="product-search">
                                        <input required name="search_order" placeholder="vd: #000123" >
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                  
                                </form>
                                <?php $mess = Session::get('message');
                                  if( $mess){
                                   ?>
                                    <div class="alert alert-danger">
                                       <button type="button" class="close" data-dismiss="alert">×</button>
                                       <strong>Error!</strong> <?php echo $mess; ?>
                                   </div>
                                   <?php } Session::put('message',null); ?>
                                </div>
                       
                                
                            </div>
                        </div>
                    </div>
                    
                    </div>
               
                </div>
            </div>
        </div>
        <!-- Checkout End -->
@include('template.ecommerce.footer')
