@extends('admin')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý sản phẩm</h1>
    </div>

</div>
<!--/.row-->
<style>
    
    .them-anh-lea-a{
        margin: 5px;background: green;
        border: 0;
    }
    .ul-display{
        list-style-type: none;
    padding: 0;
    }
</style>
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
<?php

$message = Session::get('message');
     
$data = [[
    'mess'=>'success_add',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Thêm bài viết thành công.'
    ],
    [
        'mess'=>'fail_add',
        'class'=>'alert-danger',
        'status'=>'Error!',
        'value'=>'Đã xảy ra lỗi khi thêm bài viết.'
    ],
    [
    'mess'=>'success_edit',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Cập nhật bài viết thành công.'
    ],
    [
    'mess'=>'fail_edit',
    'class'=>'alert-danger',
    'status'=>'Error!',
    'value'=>'Đã xảy ra lỗi khi cập nhật bài viết.'
    ],
    [
    'mess'=>'success_delete',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Đã xóa 1 bài viết.'
    ],
    [
    'mess'=>'fail_delete',
    'class'=>'alert-danger',
    'status'=>'Error!',
    'value'=>'Đã xảy ra lỗi khi xóa 1 bài viết.'
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
            <div class="panel-heading">Quản lý bài viết</div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">
                        <a href="{{URL::to('/them-bai-viet')}}" class="btn btn-primary">Thêm bài viết</a>
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                    <th width="50">ID</th>
                                    <th width="200">Tiêu đề</th>
                                    <th width="300">Mô tả ngắn</th>
                                    <th width="150">Ảnh chính </th>
                                    <th width="150">Hiển thị</th>
                                    <th  width="150">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
@foreach($posts as $key => $post)

    <tr>
        <td>{{$post->post_id }}</td>
        <td>{{$post->post_title}}</td>
        <td>{{$post->post_desc}}</td>
        <td>
            <img width="200px"
                src="{{asset('public/uploads/post/'.$post->post_image)}}"
                class="thumbnail">
        </td>
        <td>
            
           <ul class="ul-display"><?php $display = json_decode($post->display,true);?>
        
            @foreach ((array)$display as $item)
                
           @if($item == 1)
           <li>Trang chủ</li>
            @elseif($item == 2)
            <li>Danh sách dịch vụ</li>
             @elseif($item == 3) 
            <li>Danh sách bài viết</li>
            @endif
            @endforeach
         
        </ul>
        </td>
        <td>
            <a href="{{URL::to('/cap-nhat-bai-viet-'.$post->post_id)}}" class="btn btn-warning"><i class="fa fa-pencil"
                    aria-hidden="true"></i> Sửa</a>
            <a onclick="return confirm('Bạn muốn xóa danh mục {{$post->post_name}}?')" href="{{URL::to('/xoa-bai-viet-'.$post->post_id )}}" class="btn btn-danger"><i class="fa fa-trash"
                    aria-hidden="true"></i> Xóa</a>
        </td>
    </tr>
@endforeach						
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>
@endsection()