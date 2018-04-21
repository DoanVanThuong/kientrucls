@extends('adminls.layout.index')
<?php $curr = 'categories'; ?>
@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sửa <small>{{$loaisanpham->name}}</small></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="admin/loaisanpham/them" method="POST" enctype="multipart/form-data">  
            @include('admin.functions.alert')
            <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên loại <span class="text-danger">*</span></label>
            <input type="text" name="tenloaiSP" value="{{$loaisanpham->name}}"  class="form-control" id="exampleInputEmail1" placeholder="Nhập tên loại">
            </div>
            <div class="form-group">
              <label >Miêu tả</label>
              <textarea class="form-control" name="description"  rows="3" placeholder="Thông tin mô tả">{{$loaisanpham->description}}</textarea>
                            
            </div>
            <div class="form-group">
              <label for="InputFile">Ảnh đại diện<span class="text-danger">*</span></label>
              <br>
              <p>
              <img src="{{asset($loaisanpham->img)}}" width="50%" alt="" class="img-responsive">
              </p>
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