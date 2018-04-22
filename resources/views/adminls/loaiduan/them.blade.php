<?php $curr = 'project_category'; ?>
<?php $view = 'project_category_add'; ?>
@extends('adminls.layout.index')

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm loại dự án mới</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="admin/loaiduan/them" method="POST" enctype="multipart/form-data">  
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
      </div>
@stop