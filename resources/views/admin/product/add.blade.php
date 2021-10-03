@extends('admin')
@section('main')
<style>
.display_block {
    display: block;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý sản phẩm</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Thêm sản phẩm
            </div>
            <script src="{{asset('public/backend/js/number-format/cleave.min.js')}}"></script>
            <form name="proForm" onsubmit="return validateForm()" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
@if(isset($ProductById) )

<div class="panel-body">
    <div class="form-group">
        <label>Tên sản phẩm:</label>
        <input value="{{$ProductById->productName}}" type="text" name="nameProduct" class="form-control">
    </div>
    <div class="form-group">
        <label>Mô tả ngắn:</label>
        <input type="text" name="sortDescProduct" class="form-control" value="{{$ProductById->moTaNgan}}" >
    </div>
    <div class="form-group">
        <label>Giá :</label>
        <input  type="text"  name="price" class="form-control price_class" value="{{$ProductById->price}}" >
    </div>
    <div class="form-group">
        <label>Danh mục:</label>
        <select  name="category" class="form-control">
         
            @foreach($categoryList as $value)
            <option value="{{$value->category_id}}"
                @if($ProductById->catID ==  $value->category_id)
                selected
                @endif
            >{{$value->category_name}}</option>
           
            @endforeach
        </select>
    </div>
   
    <div class="form-group">
        <label>Thương hiệu:</label>
        <select  name="brand" class="form-control">
            @foreach($brandList as $value)
            <option value="{{$value->brand_id }}"
                @if($ProductById->brandID ==  $value->brand_id )
                selected
                @endif
            >{{$value->brand_name}}</option>
           
            @endforeach
            </select>
    </div>
    <div class="form-group">
        <label>Miêu tả</label>
        <script  src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
        <textarea style="resize: none;" row="8" id="ckeditor1235" class="display_block" name="descProduct">{{$ProductById->product_desc}}</textarea>
          <script type="text/javascript">
                CKEDITOR.replace('ckeditor1235');
    var editor = CKEDITOR.replace('ckeditor',{
        language:'vi',
        filebrowserImageBrowseUrl: '../../ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: '../../ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../../public/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    });
</script>
    </div>
    <div class="form-group">
        <label>Ảnh sản phẩm</label>
        <input id="img" type="file" name="imgProductupdate" class="form-control hidden" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="100"
    
        src="{{asset('public/uploads/product/'.$ProductById->image)}}">
            
       
        
        
    </div>
    <div class="form-group">
        <label>Thuộc tính</label>
        <select  name="typeProduct" class="form-control">
            @if($ProductById->type == 0)
            <option selected value="0">None</option>
            <option value="1">Đặc biệt</option>
        @else
            <option value="0">None</option>
            <option selected value="1">Đặc biệt</option>
        @endif
        </select>
    </div>
    <div class="form-group">
        <label>Hiển thị</label>
        <select  name="statusProduct" class="form-control">
            @if($ProductById->status == 1)
            <option selected value="1">Hiện</option>
            <option value="0">Ẩn</option>
        @else
            <option value="1">Hiện</option>
            <option selected value="0">Ẩn</option>
        @endif
        </select>
    </div>
    <div class="form-group">
        <label>Từ khóa tìm kiếm:</label>
        <input  type="text" name="meta_keywords" class="form-control" value="{{$ProductById->meta_keyswords}}" >
    </div>
    <div class="form-group ">
        <strong>Tag:</strong>
        <input type="text" data-role="tagsinput" class="form-control" name="tags" value="
        @if($ProductById->tags)@foreach((array)(json_decode($ProductById->tags)) as $tag)
            {{ $tag }}
        @endforeach @endif
        ">
      </div>
    <input type="hidden" name="id" value="{{$ProductById->productID}}" >
    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
@else
<div class="panel-body">
    <div class="form-group">
        <label>Tên sản phẩm:</label>
        <input required type="text" name="nameProduct" class="form-control"
            placeholder="Tên sản phẩm...">
    </div>
    <div class="form-group">
        <label>Mô tả ngắn:</label>
        <input required type="text" name="sortDescProduct" class="form-control" >
    </div>
    <div class="form-group">
        <label>Giá :</label>
        <input required  type="text"  name="price" class="form-control price_class"  >
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
        <label>Thương hiệu:</label>
        <select   name="brand" class="form-control">
            @foreach($brandList as $value)
            <option value="{{$value->brand_id }}">{{$value->brand_name}}</option>
            @endforeach
            </select>
    </div>
    

    <div class="form-group">
        <label>Mô tả chi tiết</label>
        <script  src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
        <textarea id="xxx" style="resize: none;" rows="8"  required class="form-control" placeholder="Mô tả sản phẩm" name="descProduct"></textarea>
        <script type="text/javascript">
    var editor = CKEDITOR.replace('xxx');
</script>

    </div>
    <div class="form-group">
        <label>Ảnh sản phẩm</label>
        <input id="img"  type="file" name="imgProduct" class="form-control hidden" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="100"
            src="{{asset('public/backend/img/new_seo-10-512.png')}}">
    </div>
    <div class="form-group">
        <label>Thuộc tính</label>
        <select  name="typeProduct" class="form-control">
        
            <option selected value="0">None</option>
            <option value="1">Đặc biệt</option>
            <option value="1">Khuyến mãi</option>
            
      
        </select>
    </div>
    <div class="form-group">
        <label>Hiển thị</label>
        <select  name="statusProduct" class="form-control">
            <option value="1">Hiện</option>
            <option value="0">Ẩn</option>

        </select>
    </div>
    <div class="form-group">
        <label>Từ khóa tìm kiếm:</label>
        <input  type="text" name="meta_keywords" class="form-control" >
    </div>
    <div class="form-group ">
        <label for="Tags">Tags:</label>
        <input type="text" data-role="tagsinput" class="form-control" name="tags">
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

// var allowedExtension = ['jpeg', 'jpg','png'];
// var fileExtension = document.getElementById('img').value.split('.').pop().toLowerCase();
// var isValidFile = false;
// for(var index in allowedExtension) {

//     if(fileExtension === allowedExtension[index]) {
//         isValidFile = true; 
//         break;
//     }
// }
// if(!isValidFile) {
//     alert('Allowed Extensions are : *.' + allowedExtension.join(', *.'));
// }
// return isValidFile;
}
  </script>
@endsection()