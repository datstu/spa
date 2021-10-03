@extends('admin')
@section('main')
<style>
.display_block {
    display: block;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản thương hiệu</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-5 col-lg-5">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm thương hiệu
            </div>
            <form action="{{URL::to('/save-brand')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
@if(isset($brandById) )

<div class="panel-body">
    <div class="form-group">
        <label>Tên thương hiệu:</label>
        <input value="{{$brandById->brand_name}}" type="text" name="nameBrand" class="form-control">
    </div>
    <div class="form-group">
        <label>Miêu tả</label>
        <textarea class="display_block" name="descBrand">{{$brandById->brand_desc}}</textarea>
    </div>
    <div class="form-group">
        <label>Ảnh thương hiệu</label>
        <input id="img" type="file" name="imgBrand" class="form-control hidden" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="100"
        @if(empty($brandById->brand_image))
       
        src="{{asset('public/backend/img/new_seo-10-512.png')}}">
        @else
        src="{{asset('public/uploads/brand/'.$brandById->brand_image)}}">
            
        @endif
        
        
    </div>
    <div class="form-group">
        <label>Hiển thị</label>
        <select  name="statusBrand" class="form-control">
        @if($brandById->brand_status == 1)
            <option selected value="1">Hiện</option>
            <option value="0">Ẩn</option>
        @else
            <option value="1">Hiện</option>
            <option selected value="0">Ẩn</option>
        @endif
        </select>
    </div>
    <input type="hidden" name="id" value="{{$brandById->brand_id }}" class="btn btn-primary">
    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
@else
<div class="panel-body">
    <div class="form-group">
        <label>Tên thương hiệu:</label>
        <input required="" type="text" name="nameBrand" class="form-control"
            placeholder="Tên danh mục...">
    </div>
    <div class="form-group">
        <label>Miêu tả</label>
        <textarea class="display_block" name="descBrand"></textarea>
    </div>
    <div class="form-group">
        <label>Ảnh thương hiệu</label>
        <input id="img" type="file" name="imgBrand" class="form-control hidden" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="100"
            src="{{asset('public/backend/img/new_seo-10-512.png')}}">
    </div>
    <div class="form-group">
        <label>Hiển thị</label>
        <select  name="statusBrand" class="form-control">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>

        </select>
    </div>
    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
@endif
            
                

                   
                </div>
            </form>
        </div>
    </div>
</div>
<!--/.row-->
@endsection()