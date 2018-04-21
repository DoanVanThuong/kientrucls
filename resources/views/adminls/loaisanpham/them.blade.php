<?php $curr = 'categories'; ?>
<?php $view = 'categories_add'; ?>
@extends('adminls.layout.index')

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm loại sản phẩm mới</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="admin/loaisanpham/them" method="POST" enctype="multipart/form-data">  
            @include('adminls.functions.alert')
            <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên loại <span class="text-danger">*</span></label>
              <input type="text" name="tenloaiSP" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên loại">
            </div>
            <div class="form-group">
              <label >Miêu tả</label>
              <textarea class="form-control" name="description" rows="3" placeholder="Thông tin mô tả"></textarea>
            </div>
            <div class="form-group">
              <label for="InputFile">Ảnh đại diện<span class="text-danger">*</span></label>
              <input type="file" name="anh" id="InputFile">       
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