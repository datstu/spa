@extends('admin')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý Đơn hàng</h1>
    </div>

</div>
<!--/.row-->
<style>
    
    .them-anh-lea-a{
        margin: 5px;background: green;
        border: 0;
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
    'value'=>'Thêm đơn hàng thành công.'
    ],
    [
        'mess'=>'fail_add',
        'class'=>'alert-danger',
        'status'=>'Error!',
        'value'=>'Đã xảy ra lỗi khi thêm đơn hàng.'
    ],
    [
    'mess'=>'success_edit',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Cập nhật đơn hàng thành công.'
    ],
    [
    'mess'=>'fail_edit',
    'class'=>'alert-danger',
    'status'=>'Error!',
    'value'=>'Đã xảy ra lỗi khi cập nhật đơn hàng.'
    ],
    [
    'mess'=>'success_delete',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Đã xóa 1 đơn hàng.'
    ],
    [
    'mess'=>'fail_delete',
    'class'=>'alert-danger',
    'status'=>'Error!',
    'value'=>'Đã xảy ra lỗi khi xóa 1 đơn hàng.'
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
            <div class="panel-heading">Quản lý Đơn hàng</div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">
                      
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th>Tên khách hàng</th>
                                    <th width="300">Tổng đơn</th>
                                    <th width="200">Trạng thái </th>
                                    
                                    <th  width="200">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
@foreach($orders as $key => $order)
    <tr>
        <td>{{$order->id_order }}</td>
        <td>{{$order->name_user}}</td>
        
        <td>{{number_format($order->total_order)}}</td>
        <td>
            {{$order->status_order}}
        </td>
        <td>
            <a href="{{URL::to('/cap-nhat-don-hang-'.$order->id_order)}}" class="btn btn-warning"><i class="fa fa-pencil"
                    aria-hidden="true"></i> Cập nhật</a>
            <a onclick="return confirm('Bạn muốn xóa đơn hàng {{$order->id_order}}?')" href="{{URL::to('/xoa-don-hang-'.$order->id_order )}}" class="btn btn-danger"><i class="fa fa-trash"
                    aria-hidden="true"></i> Xóa</a>
        </td>
    </tr>
@endforeach						
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                {{$orders->links()}}
            </div>
        </div>
    </div>
</div>
@endsection()