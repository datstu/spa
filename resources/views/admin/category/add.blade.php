@extends('admin')
@section('main')
<style>
.display_block {
    width: 100%;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý danh mục</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-5 col-lg-5">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm danh mục
            </div>
            <form action="{{URL::to('/save-category')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
@if(isset($categoryById) )

<div class="panel-body">
    <div class="form-group">
        <label>Tên danh mục:</label>
        <input value="{{$categoryById->category_name}}" type="text" name="nameCategory" class="form-control">
    </div>
    <div class="form-group">
        <label>Miêu tả</label>
        <textarea rows=8 class="display_block" name="descCategory">{{$categoryById->category_desc}}</textarea>
    </div>
    <div class="form-group">
        <label>Từ khóa tìm kiếm</label>
        <textarea rows=8 class="display_block" name="category_keywords">{{$categoryById->meta_keywords}}</textarea>
    </div>
    <div class="form-group">
        <label>Ảnh sản phẩm</label>
        <input id="img" type="file" name="imgCategory" class="form-control hidden" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="100"
        @if(empty($categoryById->category_image))
       
        src="{{asset('public/backend/img/new_seo-10-512.png')}}">
        @else
        src="{{asset('public/uploads/category/'.$categoryById->category_image)}}">
            
        @endif
        
        
    </div>
    <div class="form-group">
        <label>Hiển thị</label>
        <select  name="statusCategory" class="form-control">
        @if($categoryById->category_status == 1)
            <option selected value="1">Hiện</option>
            <option value="0">Ẩn</option>
        @else
            <option value="1">Hiện</option>
            <option selected value="0">Ẩn</option>
        @endif
        </select>
    </div>
    <input type="hidden" name="id" value="{{$categoryById->category_id }}" class="btn btn-primary">
    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
@else
<div class="panel-body">
    <div class="form-group">
        <label>Tên danh mục:</label>
        <input required="" type="text" name="nameCategory" class="form-control"
            placeholder="Tên danh mục...">
    </div>
    <div class="form-group">
        <label>Miêu tả</label>
        <textarea rows=8 class="display_block" name="descCategory"></textarea>
    </div>
    <div class="form-group">
        <label>Từ khóa tìm kiếm</label>
        <textarea rows=8 class="display_block" name="category_keywords"></textarea>
    </div>
    <div class="form-group">
        <label>Ảnh sản phẩm</label>
        <input id="img" type="file" name="imgCategory" class="form-control hidden" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="100"
            src="{{asset('public/backend/img/new_seo-10-512.png')}}">
    </div>
    <div class="form-group">
        <label>Hiển thị</label>
        <select  name="statusCategory" class="form-control">
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