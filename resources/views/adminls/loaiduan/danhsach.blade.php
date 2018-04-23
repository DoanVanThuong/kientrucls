<?php $curr = 'project_category';?>
<?php $view = 'project_category_list';?>
<?php use App\Http\Controllers\AdminControllers\LoaiDuAnController; ?>
@section('define-css')
    <style>
        .info-box:hover{
            cursor: pointer;
            -webkit-box-shadow: 0 10px 6px -6px #777;
            -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;
            transition: .2s;
        }
        .info-box:hover .delete-icon {
            display: block;
        }
        .info-box {
            position: relative;
        }
        .info-box .delete-icon {
            position: absolute;
            z-index: 3;
            right: 0;
            display:none;
            transition: linear .2s;
        }
        .info-box .info-box-icon{
            overflow: hidden;
        }
    </style>
@stop
@extends('adminls.layout.index')
@section('content')
    <div class="row">
            <div class="box-header">
                    <h1 class="box-title">
                            Các Loại dự án
                            <small>danh sách</small>
                    </h1>
                </div>
        @foreach($loaiduan as $item)     
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <div class="delete-icon" data-toggle="tooltip">
                        <a href="admin/loaiduan/xoa/{{$item->id}}" data-ix="{{$item->id}}" class="delete" title="Xóa">
                            <i class="fa fa-times"></i>
                        </a>
                        <a href="admin/loaiduan/sua/{{$item->id}}" data-ix="{{$item->id}}" class="edit" title="Sửa">
                            <i class="fa fa-edit"></i>
                        </a>
                    </div>
                    <span class="info-box-icon bg-aqua">
                    <img src="{{asset($item->img)}}" class="img-reponsive" alt="">
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text text-primary">{{$item->name}}</span>
                        <span class="info-box-number text-danger"> {{ $duan->where('category_id', $item->id)->count() }}
                        </span>
                        {{-- goi function truc tiep tu controller --}}
                        {{-- {{LoaiDuAnController::countProject($item->id)}} --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row text-center">
        <a href="javascript:void(0) " class="btn btn-click btn-success" data-toggle="collapse" data-target="#form_add" role="button">Thêm mới</a>
    </div>
    @include('adminls.functions.alert')
    
    <form action="admin/loaiduan/them" class="collapse" method="POST" id="form_add" enctype="multipart/form-data">  
        @include('adminls.functions.alert')
        <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tên loại <span class="text-danger">*</span></label>
          <input type="text" name="tenloai" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên loại">
        </div>
        <div class="form-group">
                <label for="exampleInputFile">Chọn ảnh đại diện</label>
                <input type="file" name="anh" id="exampleInputFile">
              </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <button type="reset" class="btn btn-danger pull-right">reset</button>            
      </div>
      {!!csrf_field()!!}
    </form>
@stop

@section('define-js')
<script>
 
$('.btn-click').click(function(){
    $('div.alert').hide();    
    if($(this).text() == "Thêm mới") {
        $(this).text("Đóng");
    }
    else {
        $(this).text() == "Đóng";
        $(this).text("Thêm mới");
    }
});

   
</script>
@stop