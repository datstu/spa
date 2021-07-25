@extends('admin')
@section('main')
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>

		</div><!--/.row-->
		<?php
		$message = Session::get('message');
		if(isset($message) && $message == 'success'){
			?>
        <div class="alert alert-success">  
            <button type="button" class="close" data-dismiss="alert">×</button>  
            <strong>Chúc mừng!</strong> Thêm danh mục sản phẩm thành công..  
        </div>  
			<?php
			Session::put('message',null);
		} else if(isset($message) && $message == 'fail') {
			?> 
			  <div class="alert alert-danger">  
            <button type="button" class="close" data-dismiss="alert">×</button>  
            <strong>Error!</strong> Đã xảy ra lỗi khi thêm danh mục sản phẩm.  
        </div>  <?php	
			Session::put('message',null);
		}
		 ?>
       
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<form action="{{URL::to('/save-category')}}" method="post">
							{{csrf_field()}}
						<div class="panel-body">
							<div class="form-group">
								<label>Tên danh mục:</label>
    							<input required="" type="text" name="nameCategory" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group" >
										<label>Miêu tả</label>
										<textarea required name="descCategory"></textarea>
							</div>
							
							<div class="form-group" >
										<label>Danh mục</label>
										<select required name="statusCategory" class="form-control">
											<option value="1">Hiện</option>
											<option value="0">Ẩn</option>
											
					                    </select>
							</div>
							<div class="form-group" >
								<label>Ảnh sản phẩm</label>
								<input  id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
			                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('public/backend/img/new_seo-10-512.png')}}">
							</div>
							<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
						</div>
						</form>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên danh mục</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	<tbody>
								<tr></tr>
			                  	<tr></tr> 
			                  	<tr></tr> 
			                  	<tr></tr>
			                  	<tr></tr>
			                  	<tr></tr>
			                  	<tr>
									<td>Motorola</td>
									<td>
			                    		<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr> 
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->



	
@endsection()