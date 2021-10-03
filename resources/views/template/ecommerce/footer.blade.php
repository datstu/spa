    <!-- Footer Start -->
    <div class="footer ">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Địa chỉ của Lea</h2>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i> Số 228 Nguyễn Trọng Tuyển <br> F.8, Q.Phú Nhuận, Tp. Hồ Chí Minh</p>
                            <p><i class="fa fa-envelope"></i>khoecunglea@gmail.com</p>
                            <p><i class="fa fa-phone"></i>+(84) 090 7799 046</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2 class="font_Lea">Follow Lea Page </h2>
                        <div class="contact-info">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/khoecunglea"><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="contact-info">
                    <div class="social">
                        <img style="margin-top: 20px;" src="{{asset('public/ecommerce/img/payment-method.png')}}" alt="Payment Method" />
                    </div>
                    </div>
                    </div>

                
                    
              
                
          
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Giới Thiệu</h2>
                        <ul>
                            <li><a href="{{URL::to('/ve-chung-toi')}}">Về chúng tôi</a></li>
                            {{-- <li><a href="#">Chính sách bảo mật</a></li>
                            <li><a href="#">Điều khoản & Điều kiện</a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h2>Thông tin mua hàng</h2>
                        <ul>
                            <li><a href="{{URL::to('/chinh-sach-thanh-toan')}}">Chính sách thanh toán</a></li>
                            <li><a href="{{URL::to('/chinh-sach-nhan-hang')}}">Chính sách vận chuyển</a></li>
                            <li><a href="{{URL::to('/chinh-sach-hoan-tra')}}">Chính sách hoàn trả</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="payment-method">
                        <p>Copyright &copy; 2021 </p>
                    </div>
                </div>
            </div>
     
        </div>
    </div>
    <!-- Footer End -->
    
       
    
    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    
    <!-- JavaScript Libraries -->
    <script src="{{asset('public/ecommerce/js/jquery-3.4.1.min.js')}}"></script>
    
    <script src="{{asset('public/ecommerce/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/ecommerce/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/ecommerce/lib/slick/slick.min.js')}}"></script>
    
    <!-- Template Javascript -->
    <script src="{{asset('public/ecommerce/js/main.js')}}"></script>
    <script src="{{asset('public/ecommerce/js/jquery.validate.min.js')}}"></script>
    <script>
        $.validate({});
    </script>
    <?php $message = Session::get('message-cart-mobile');
    if($message){
        echo $message;Session::put('message-cart-mobile',null);
    }
     ?>
<script>
    $(document).ready(function(){
       
        $('.button_left').click(function(){
                $("#box_addcombo_detail").attr('style', 'display: block  !important;');
                
            });
            $('.button_right').click(function(){
                $("#box_addcombo_detail").attr('style', 'display: block  !important;');
               
            });
    $('.choose').on('change',function(){
			var action = $(this).attr('id');
			var ma_id = $(this).val();
			
			var _token = $('input[name="_token"]').val();
			var result = '';
			
			if(action == 'city'){
				result = 'province';
			} else {
				result = 'wards';
			}
			//alert(_token);	alert(matp);alert(result);
			$.ajax({
				url:'{{url('/select-delivery')}}',
				method: 'POST',
				data:{action:action,ma_id:ma_id,_token:_token},
				success:function(data){
					$('#'+result).html(data);
				
				}
			});
		});
        $('.wards').on('change',function(){
            var matp = $('.city').val();
            var maqh = $('.province').val();
            var xaid = $('.wards').val();
            var _token = $('input[name="_token"]').val();
           
            $.ajax({
				url:'{{url('/calculate-feeship')}}',
				method: 'POST',
				data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
				success:function(data){
                    
                    var result = JSON.parse(data);
                    
                    $('#total-fee').html(result[0]);
                    $('#total_order').html(result[1]);
                    $('input[type=hidden][name=feeship]').val(result[2]);
				}
			});
        });
        
    });
</script>
<script src="{{asset('public/ecommerce/js/sweetalert.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.add-to-cart-lea').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                 if(typeof cart_product_qty === 'undefined'  ) cart_product_qty = 1;
                
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_qty:cart_product_qty,cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,_token:_token},
                    success:function(data){
                        $('#count-item').html(data);
                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                    }

                });
            });
           
        });
    </script>
<script type="text/javascript">
  
    jQuery(document).ready(function( $ ) { // When jQuery is ready
    
    function check_from_top_de(){ // Create our function
      var scroll = $(window).scrollTop(); // Check scroll distance
      if (scroll >= 300) { // If it is equal or more than 300 - you can change this to what you want
        $(".logo-mobile").addClass("hidden-logo-mobile"); // Add custom class to body
        $("#search-center-mobile").addClass("scroll-lea-search");
        $("#menu-scroll").addClass("scroll-lea-menu");
        $(".bottom-bar").addClass("scroll-lea-desktop");
       
      } else {
        $(".logo-mobile").removeClass("hidden-logo-mobile"); // When scrolled to the top, remove the class
        $("#search-center-mobile").removeClass("scroll-lea-search"); 
        $("#menu-scroll").removeClass("scroll-lea-menu"); 
        $(".bottom-bar").removeClass("scroll-lea-desktop");
        $("#search-center-mobile").css("background", "none");
       
      }
    }
    
    check_from_top_de(); // On load, run the function
    
    $(window).scroll(function() { // When scroll - run function
   
      check_from_top_de();
    });
    
  });
  </script>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "108835094783066");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
