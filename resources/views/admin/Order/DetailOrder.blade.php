@extends('admin')
@section('main')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Cập nhật đơn hàng {{$orderbyid->increment_id }} </h1>
    </div>

</div>
<!--/.row-->
<style>
    
    .them-anh-lea-a{
        margin: 5px;background: green;
        border: 0;
    }
    .align-title{
        text-align: center;
    }
    .mb-10{
        margin-bottom: 10px;
        font-size: 40px;
        color: black;
    }
    .price_order{
        color: red;
    font-size: 30px;
    }
    .status_order{
            font-size: 19px;
    width: 50%;
    font-weight: bold;
    }
</style>
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
<?php

$message = Session::get('message');
?>


            <div class="panel panel-primary">
                        <div class="panel-heading align-title">Thông tin khách hàng</div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <div class="table-responsive">
                                  
                                    <table class="table table-bordered" style="margin-top:20px;">
                                        <thead>
                                            <tr class="bg-primary">
                                                <th>ID</th>
                                                <th>Tên khách hàng</th>
                                                <th>Số điện thoại</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                <tr>
                    <td>{{$orderbyid->id_user  }}</td>
                    <td>{{$orderbyid->name_user}}</td>
                    
                    <td>{{$orderbyid->phone_number}}</td>
                   
                </tr>
            				
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                           
                        </div>
                    
            </div>

             <div class="panel panel-primary">
                        <div class="panel-heading align-title">Thông tin giao hàng</div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <div class="table-responsive">
                                  
                                    <table class="table table-bordered" style="margin-top:20px;">
                                        <thead>
                                            <tr class="bg-primary">
                                                <th>Tên người nhận</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                                <th>Ghi chú </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                <tr>
                    <td>{{$orderbyid->name_shipping}}</td>
                    <td>{{$orderbyid->address_shipping}}</td>
                    <td>{{$orderbyid->phone_shipping}}</td>
                    <td>{{$orderbyid->note}}</td>
                </tr>
                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                           
                        </div>
                    
            </div>

             <div class="panel panel-primary">
                        <div class="panel-heading align-title">Chi tiết đơn hàng</div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <div class="table-responsive">
                                  
                                    <table class="table table-bordered" style="margin-top:20px;">
                                        <thead>
                                            <tr class="bg-primary">
                                              
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Tổng</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                 @foreach($detail as $item)
                <tr>
                    <td>{{$item->name_product  }}</td>
                    <td>{{$item->sales_qty}}</td>
                    <td>{{number_format($item->sub_total)}}</td>
                   
                </tr>
                @endforeach
                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        <div><div class="col-md-6">  
                            <div class="mb-10">Tổng</div>
                           <div class="price_order">{{number_format($orderbyid->total_order)}} vnđ</div>
                       </div>
                       <div class="col-md-6 mb-10">
                        <div class="mb-10">Trạng thái</div>
                           <div class="mb-10 "  >
    <form  action="{{URL::to('/save-edit-order')}}" method="post">
                {{csrf_field()}}
        <select  name="status" class="form-control status_order">
         
        @if($orderbyid->status_order == 'Đang chờ xử lý')
            <option value="Đang chờ xử lý" selected>Đang chờ xử lý</option>
             <option value="Đã xác nhận">Đã xác nhận</option>
        @else
            <option value="Đang chờ xử lý">Đang chờ xử lý</option>
             <option value="Đã xác nhận" selected>Đã xác nhận</option>
        @endif
            
        </select>
   
                       </div>
                           <input type="hidden" name="orderId" value="{{$orderbyid->id_order }}" >
                         <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
                     </form>
                        </div>
                    
            </div>
            </div>


    </div>
</div>
@endsection()