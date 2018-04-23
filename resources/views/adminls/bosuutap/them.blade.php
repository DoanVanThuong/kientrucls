<?php $curr = 'gallery'; ?>
<?php $view = 'gallery_add'; ?>
@extends('adminls.layout.index')

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm ảnh vào bộ sưu tập</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="admin/bosuutap/them" method="POST" enctype="multipart/form-data">  
            @include('adminls.functions.alert')
            <div class="box-body">
            <div class="form-group">
                <label>Chọn bộ sưu tập</label>
                <select class="form-control" name="loaiduan">
                    @foreach($loaiduan as $item)                  
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tên <span class="text-danger">*</span></label>
              <input type="text" name="tenloai" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên loại">
            </div>        
            <div class="form-group">
              <label for="InputFile">Ảnh<span class="text-danger">*</span></label>
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