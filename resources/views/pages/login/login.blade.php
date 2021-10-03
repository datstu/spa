@include('template.ecommerce.header')
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Sản Phẩm</a></li>
            <li class="breadcrumb-item active">Đăng nhập & Đăng ký</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->

  <!-- Login Start -->
  <div class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6"> 
                <form action="{{URL::to('/register-user')}}" method="post">
                    {{ csrf_field() }}  
                    @if($errors->all()) 
                    <ul class="alert text-datger">
                       
                        @foreach ($errors->all() as $error)
                        
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                <div class="register-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Họ và Tên</label>
                            <input required class="form-control" name="name_user"  type="text" placeholder="Tên đầy đủ">
                        </div>
                        <div class="col-md-6">
                            <label>Số điện thoại</label>
                            <input required class="form-control" name="phone_number" type="text" >
                        </div>
                        <div class="col-md-6">
                            <label>Mật khẩu</label>
                            <input required class="form-control"  name="password" type="password" placeholder="Bao gồm chữ và số..">
                        </div>
                        <div class="col-md-6">
                            <label>Nhập lại mật khảu</label>
                            <input required class="form-control" name="re_password" type="password" placeholder="Ít nhất 6 ký tự.">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </form>   
            </div>
            <div class="col-lg-6">
                <div class="login-form">
                    <form action="{{URL::to('/login-user')}}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Số điện thoại</label>
                            <input required name="phone_number" class="form-control" type="text">
                        </div>
                        <div class="col-md-6">
                            <label>Mật khẩu</label>
                            <input required name="password" class="form-control" type="password" placeholder="Ít nhất 6 ký tự, gồm chữ và số">
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="btn">Đăng nhập</button>
                        </div>
                    </div>
                </form>
                </div>
                <?php $messFail = Session::get('message');
                    if($messFail){
                 ?>
                <div class="alert alert-danger">
                    
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Sai số điện thoại hoặc mật khẩu.</strong>
            </div>
                <?php } Session::put('message',null); ?>
            </div>
        </div>
    </div>
</div>
<!-- Login End -->

@include('template.ecommerce.footer')