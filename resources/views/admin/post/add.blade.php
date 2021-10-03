@extends('admin')
@section('main')
<style>
.display_block {
    display: block;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý bài viết</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm bài viết
            </div>
            <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.5.3/dist/cleave.min.js"></script>
            <form name="proForm" onsubmit="return validateForm()" action="{{URL::to('/save-post')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
@if(isset($postById) )

<div class="panel-body">
    <div class="form-group">
        <label>Tiêu đề:</label>
        <input value="{{$postById->post_title}}" type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
        <label>Mô tả ngắn:</label>
        <input type="text" name="sortDesc" class="form-control" value="{{$postById->post_desc}}" >
    </div>
    
    <div class="form-group">
        <label>Danh mục:</label>
        <select  name="category" class="form-control">
         
            @foreach($categoryList as $value)
            <option value="{{$value->category_id}}"
                @if($postById->catID ==  $value->category_id)
                selected
                @endif
            >{{$value->category_name}}</option>
           
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Nội dung</label>
        <script  src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
        <textarea style="resize: none;" row="8" id="ckeditor1235" class="display_block" name="content">{{$postById->post_content}}</textarea>
          <script type="text/javascript">
                CKEDITOR.replace('ckeditor1235');
   
</script>
    </div>
    <div class="form-group">
        <label>Ảnh sản phẩm</label>
        <input id="img" type="file" name="imgProductupdate" class="form-control hidden" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="100"
    
        src="{{asset('public/uploads/post/'.$postById->post_image)}}">
            
       
        
        
    </div>
    
    <div class="form-group">
        <label>Hiển thị</label>
        <br>
        <?php $display = json_decode($postById->display,true); ?>
        <label class="checkbox-inline">
            <input type="checkbox" name="show[]" <?php if(in_array(1,(array)$display)) echo 'checked'; ?> value="1">Trang chủ
          </label>
          <label class="checkbox-inline">
            <input type="checkbox"  name="show[]" <?php if(in_array(2,(array)$display)) echo 'checked'; ?> value="2">Danh sách dịch vụ
          </label>
          <label class="checkbox-inline">
            <input type="checkbox"  name="show[]" <?php if(in_array(3,(array)$display)) echo 'checked'; ?> value="3">Danh sách bài viết
          </label>

    </div>
    <input type="hidden" name="id" value="{{$postById->post_id }}" >
    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
@else
<div class="panel-body">
    <div class="form-group">
        <label>Tên tiêu đề:</label>
        <input required type="text" name="title" class="form-control"
            placeholder="Tiêu đề bài viết...">
    </div>
    <div class="form-group">
        <label>Mô tả ngắn:</label>
        <input required type="text" name="sortDesc" class="form-control" >
    </div>
    <div class="form-group">
        <label>Danh mục:</label>
        <select  name="category" class="form-control">
            @foreach($categoryList as $value)
            <option value="{{$value->category_id}}">{{$value->category_name}}</option>
            @endforeach
        </select>
    </div> 

    <div class="form-group">
        <label>Nội dung:</label>
        <script  src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
        <textarea  id="xxx" style="resize: none;" rows="8"  class="form-control" placeholder="Nội dung bài viết..." name="content"></textarea>
        <script type="text/javascript">
            var editor = CKEDITOR.replace('xxx');
        </script>

    </div>
    <div class="form-group">
        <label>Ảnh bài viết</label>
        <input id="img" type="file" name="imgProduct" class="form-control hidden" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="100"
            src="{{asset('public/backend/img/new_seo-10-512.png')}}">
    </div>
    <div class="form-group">
        <label>Hiển thị</label>
        <br>
        <label class="checkbox-inline">
            <input type="checkbox" name="show[]" value="1">Trang chủ
          </label>
          <label class="checkbox-inline">
            <input type="checkbox"  name="show[]" value="2">Danh sách dịch vụ
          </label>
          <label class="checkbox-inline">
            <input type="checkbox"  name="show[]" value="3">Danh sách bài viết
          </label>
    </div>
    <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
@endif
            
                

                   
                </div>
            </form>
        </div>
    </div>
</div>
<!--/.row-->
<script>document.querySelectorAll('.price_class').forEach(inp => new Cleave(inp, {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  }));

  function validateForm() {
    var x = document.forms["proForm"]["imgProduct"].value;
  if (x == "" || x == null) {
    alert("Vui lòng chọn ảnh.");
    return false;
  }
}
  </script>
@endsection()