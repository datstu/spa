@extends('admin')
@section('main')		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Trang chủ</h1>
			</div>
		</div><!--/.row-->
									
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">{{$countProduct}}</div>
							<div class="text-muted">Sản phẩm</div>
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">52</div>
							<div class="text-muted">Bình luận</div>
						</div>
					</div>
				</div>
			</div> --}}
			{{-- <div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">24</div>
							<div class="text-muted">Người dùng</div>
						</div>
					</div>
				</div>
			</div> --}}
			{{-- <div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">25.2k</div>
							<div class="text-muted">Đơn hàng</div>
						</div>
					</div>
				</div>
			</div> --}}
		</div><!--/.row-->
		<div class="row">
			<h3>Thống kê truy cập</h3>
			<table class="table">
				<thead>
				  <tr>
					<th scope="col">Đang Online</th>
					<th scope="col">Tổng tháng trước</th>
					<th scope="col">Tổng tháng này</th>
					<th scope="col">Tổng 1 năm</th>
					<th scope="col">Tổng truy cập</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<th scope="row">{{$visitorOnline}}</th>
					<td>{{$visitorLastmonthCount}}</td>
					<td>{{$visitorThismonthCount}}</td>
					<td>{{$visitorOneYearsCount}}</td>
					<td>{{$visitorTotal}}</td>
				  </tr>
				  
				  </tr>
				</tbody>
			  </table>
		</div>
		
@endsection()