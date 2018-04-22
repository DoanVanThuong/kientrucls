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
    </style>
@stop
@extends('adminls.layout.index')
@section('content')
    <div class="row">
        @foreach($loaiduan as $item)     
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">{{$item->name}}</span>
                        <span class="info-box-number"> {{ $duan->where('category_id', $item->id)->count() }}
                        </span>
                        {{-- goi function truc tiep tu controller --}}
                        {{-- {{LoaiDuAnController::countProject($item->id)}} --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row text-center">
        <a href="javascript:void(0) " class="btn btn-success" data-toggle="collapse" data-target="#form_add" role="button">Thêm mới</a>
    </div>
    <form action="admin/loaiduan/them" class="collapse" method="POST" id="form_add" enctype="multipart/form-data">  
        @include('adminls.functions.alert')
        <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tên loại <span class="text-danger">*</span></label>
          <input type="text" name="tenloaiSP" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên loại">
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
 

</script>
@stop