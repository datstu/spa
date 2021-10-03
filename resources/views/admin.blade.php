<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard </title>
<link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('public/backend/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('public/backend/css/styles.css')}}" rel="stylesheet">
<link href="{{asset('public/backend/css/custom.css')}}" rel="stylesheet">
<script src="{{asset('public/backend/js/lumino.glyphs.js')}}"></script>
<script src="{{asset('public/backend/js/tags/jquery.js')}}"></script>  

<link rel="{{asset('public/backend/css/tags/bootstrap-tagsinput.css')}}" />
<script src="{{asset('public/backend/js/tags/bootstrap-tagsinput.js')}}"></script> 
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"> Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>Hi, <?php $name = Session::get('admin_name'); if($name){ echo $name;} ?>  <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{URL::to('/admin-logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="{{URL::to('/admin')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="{{URL::to('/quan-ly-danh-muc')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
			<li><a href="{{URL::to('/quan-ly-thuong-hieu')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Thương hiệu</a></li>
			<li class="dropdownCustom"><a href="{{URL::to('/quan-ly-san-pham')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a>
		
		
			</li>
		<li class=""><a href="{{URL::to('/quan-ly-don-hang')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Đơn hàng</a>
			<li class=""><a href="{{URL::to('/quan-ly-bai-viet')}}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Bài viết</a>
			</li>
			<li><a href="{{URL::to('/quan-ly-van-chuyen')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Vận chuyển</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">@yield('main')</div>	<!--/.main-->
		  
	
	<script src="{{asset('public/backend/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/backend/js/chart.min.js')}}"></script>
	<script src="{{asset('public/backend/js/chart-data.js')}}"></script>
	<script src="{{asset('public/backend/js/easypiechart.js')}}"></script>
	<script src="{{asset('public/backend/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('public/backend/js/bootstrap-datepicker.js')}}"></script>
	
<script>
	$(document).ready(function(){
		$(document).on('click','.fee_feeship_edit',function(){
			var fee_value = $(this).text('');
					
		});
		$(document).on('blur','.fee_feeship_edit',function(){
			
			var feeship_id = $(this).data('feeship_id');
			var fee_value = $(this).text();
			var _token =$('input[name="_token"]').val();
			var phoneno = /^\d+$/;
			
			if(phoneno.test(fee_value)){
				$.ajax({
					url:'{{url('/update-feeship')}}',
					method: 'POST',
					data:{feeship_id:feeship_id,fee_value:fee_value,_token:_token},
					success:function(data){
						
						fecth_delivery();
						
					}
				});
			} else {
				alert('Chỉ được nhập số.')
				fecth_delivery();
			}
			
		});
		fecth_delivery();
		function fecth_delivery(){
			var _token =$('input[name="_token"]').val();
			$.ajax({
				url:'{{url('/select-feeship')}}',
				method: 'POST',
				data:{_token:_token},
				success:function(data){
					
					$('#load_delivery').html(data);
					
				}
			});
		}
		
		$('.add_delivery').click(function(){
			var city = $('.city').val();
			var province =  $('.province').val();
			var wards =  $('.wards').val();
			var fee_ship = $('.fee_ship').val();
			var _token = $('input[name="_token"]').val();
			
			if(province == null  || wards== null  || fee_ship == null  || fee_ship=='' ){
				alert('Vui lòng không bỏ trống.') ;
				
			} else{
				$.ajax({
				url:'{{url('/insert-delivery')}}',
				method: 'post',
				data:{city:city,province:province,wards:wards,fee_ship:fee_ship,_token:_token},
				success:function(data){
					console.log(data);
					alert('Thêm phí vận chuyển thành công.');
					$("#fee_ship").trigger("reset");
					fecth_delivery();
				}
			});
			}
		
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
		
	});
</script>

	<script>
	

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		function changeImg(input){
			var allowedExtension = ['jpeg', 'jpg','png','gif'];
			var fileExtension = document.getElementById('img').value.split('.').pop().toLowerCase();
			var isValidFile = false;

  for(var index in allowedExtension) {
  
      if(fileExtension === allowedExtension[index]) {
          isValidFile = true; 
          break;
      }
  }
  if(!isValidFile) {
      alert('Chỉ được phép up file có định dạng : *.' + allowedExtension.join(', *.'));
      return isValidFile;
  }
 
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	</script>	



</body>

</html>
