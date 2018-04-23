@extends('adminls.layout.index')
<?php $curr = 'customer'; ?>
<?php $view = 'customer_add'; ?>

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Thêm khách hàng mới</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
    <form action="admin/khachhang/them/" method="POST" enctype="multipart/form-data">  
            @include('adminls.functions.alert')
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại <span class="text-danger">*</span></label>
                    <input type="text" name="tenKH" class="form-control" id="exampleInputEmail1" >
                </div>                        
                <div class="form-group">
                    <label for="InputFile">Chọn ảnh đại diện<span class="text-danger">*</span></label>
                    <input type="file" name="anh" id="InputFile">       
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="reset" class="btn btn-danger pull-right">reset</button>            
            </div>
          {!!csrf_field()!!}
        </form>
      </div>
@stop