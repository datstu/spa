@extends('admin')
@section('main')
<style>
.display_block {
    display: block;
}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý phí vận chuyển</h1>
    </div>

</div>
<!--/.row-->
<div class="row">
    <div class="col-xs-12 col-md-5 col-lg-5">
        <div class="panel panel-primary">
            <script src="{{asset('public/backend/js/number-format/cleave.min.js')}}"></script>
            <form id="fee_ship" action="{{URL::to('/save-brand')}}" method="post" enctype="multipart/form-data">
               @csrf

<div class="panel-body">
   
    <div class="form-group">
        <label>Chọn khu vực</label>
        <select  name="city" id="city" class="form-control choose city">
            <option value="">--Chọn tỉnh/thành phố--</option>
            @foreach ($city as $item)
            <option value="{{$item->matp}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Chọn quận huyện</label>
        <select  name="province" id="province" class="form-control choose province">
            
            

        </select>
    </div>
    <div class="form-group">
        <label>Chọn xã phường</label>
        <select  name="wards" id="wards" class="form-control  wards">
            
           

        </select>
    </div>
    <div class="form-group">
        <label>Phí vận chuyển:</label>
        <input required type="text" name="fee_ship" class="form-control fee_ship"
            >
    </div>
    <input type="button" name="add_delivery" value="Thêm phi vận chuyển" class="btn btn-primary add_delivery">
  </div>
            </form>
        </div>
      
    </div>
</div>
<div id="load_delivery" ></div>
<script>
    document.querySelectorAll('.fee_ship').forEach(inp => new Cleave(inp, {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  }));
  document.querySelectorAll('td.fee_feeship_edit').forEach(inp => new Cleave(inp, {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
  }));

 
</script>
<!--/.row-->
@endsection()