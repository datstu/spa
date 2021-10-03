@extends('admin')
@section('main')
<style>
.display_block {
    display: block;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Thêm nhiều ảnh cho sản phẩm: </h3>
    </div>

</div>
<!--/.row-->
<?php
$message = Session::get('message');
     
$data = [[
    'mess'=>'success_add',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Thêm ảnh mới thành công.'
    ],
    [
        'mess'=>'fail_add',
        'class'=>'alert-danger',
        'status'=>'Error!',
        'value'=>'Đã xảy ra lỗi khi thêm ảnh.'
    ],
    [
    'mess'=>'success_delete',
    'class'=>'alert-success',
    'status'=>'Successfully!',
    'value'=>'Xóa ảnh thành công.'
    ],
    [
    'mess'=>'fail_delete',
    'class'=>'alert-danger',
    'status'=>'Error!',
    'value'=>'Xóa ảnh thất bại.'
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
<div class="row">
    <div class="col-xs-12  ">
        <div class="panel panel-primary">
            <div class="panel-heading">
              {{$productDetail->productName}}
            </div>

        <div class="col-xs-5 panel-body">  
            <form enctype="multipart/form-data" action="{{URL::to('/save-multi-image')}}"   method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
            <div class="form-group">
                
                 <input required multiple="multiple" type="file" name="imgMulti[]" class="form-control " onchange="changeImg(this)"> 
              
            </div>
            <input type="hidden" name="productId" value="{{$productDetail->productID}}">
            <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
            </form>
    </div>
           <div class="panel panel-primary">
          
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="table-responsive">
                        
                        <table class="table table-bordered" style="margin-top:20px;">
                            <thead>
                                <tr class="bg-primary">
                                    <th>ID</th>
                                    <th width="200px">Hình</th>
                                    
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
        <tbody>
@foreach($listImgaOfProduct as $imgae)
    <tr>
        <td>{{$imgae->imgID}}</td>
        <td> <img width="200"
            src="{{asset('public/uploads/product/'.$imgae->imgName)}}"
            class="thumbnail"></td>
        
       
       
        <td>
            <a onclick="return confirm('Bạn có chắn muốn xóa?')" href="{{URL::to('/delete-multi-image-'.$imgae->imgID)}}" class="btn btn-danger"><i class="fa fa-trash"
                    aria-hidden="true"></i> Xóa</a>
        </td>
    </tr>
@endforeach	
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"></div>
                {{$listImgaOfProduct->links()}}
            </div>
        </div>
        </div>
    </div>
</div>
<!--/.row-->
@endsection()