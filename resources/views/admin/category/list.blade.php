@extends('admin')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý danh mục</h1>
    </div>

</div>
<!--/.row-->


<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
<?php

$message = Session::get('message');
$object = [ [
    'propertyOne' => 'foo',
    'propertyTwo' => 42,
  ]];
     
$data = [[
    'mess'=>'success_add',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Thêm danh mục sản phẩm thành công.'
    ],
    [
        'mess'=>'fail_add',
        'class'=>'alert-danger',
        'status'=>'Error!',
        'value'=>'Đã xảy ra lỗi khi thêm danh mục sản phẩm.'
    ],
    [
    'mess'=>'success_edit',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Cập nhật danh mục sản phẩm thành công.'
    ],
    [
    'mess'=>'fail_edit',
    'class'=>'alert-danger',
    'status'=>'Error!',
    'value'=>'Đã xảy ra lỗi khi cập nhật danh mục sản phẩm.'
    ],
    [
    'mess'=>'success_delete',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Đã xóa 1 danh mục sản phẩm.'
    ],
    [
    'mess'=>'fail_delete',
    'class'=>'alert-danger',
    'status'=>'Error!',
    'value'=>'Đã xảy ra lỗi khi xóa 1 danh mục sản phẩm.'
]];
?>

@foreach ($data as $value) 
     @if( $message == $value['mess'])
     <div class="alert {{$value['class']}}">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{$value['status']}}</strong> {{$value['value']}}
    </div>
    <?php Session::put('message',null); ?>
    @endif
@endforeach

        <div class="panel panel-primary">
            <div class="panel-heading">Quản lý danh mục</div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">
                        <a href="{{URL::to('/them-danh-muc')}}" class="btn btn-primary">Thêm danh mục</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th  width="30%">Miêu tả</th>
                                    <th width="20%">Ảnh </th>
                                    <th>Hiển thị</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
@foreach($listCategoryProduct as $key => $category)
    <tr>
        <td>{{$category->category_id }}</td>
        <td>{{$category->category_name}}</td>
        <td>{{$category->category_desc}}</td>
        <td>
            @if(empty($category->category_image))
            Chưa có hình.
            @else
            <img width="200px"
                src="{{asset('public/uploads/category/'.$category->category_image)}}"
                class="thumbnail">
            @endif
        </td>
        <td>
            @if($category->category_status == 1)
            Hiển thị
            @else
            Ẩn
            @endif
        </td>
        <td>
            <a href="{{URL::to('/cap-nhat-danh-muc/'.$category->category_id)}}" class="btn btn-warning"><i class="fa fa-pencil"
                    aria-hidden="true"></i> Sửa</a>
            <a onclick="return confirm('Bạn muốn xóa danh mục {{$category->category_name}}?')" href="{{URL::to('/xoa-danh-muc/'.$category->category_id)}}" class="btn btn-danger"><i class="fa fa-trash"
                    aria-hidden="true"></i> Xóa</a>
        </td>
    </tr>
@endforeach						
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                {{$listCategoryProduct->links()}}
            </div>
        </div>
    </div>
</div>
@endsection()