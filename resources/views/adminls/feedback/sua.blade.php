@extends('adminls.layout.index')
<?php $curr = 'feedback'; ?>
<?php $view = 'feedback_edit'; ?>

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sửa thông tin phản hồi</h3>
        </div>
    <form action="admin/lienlac/sua/{{$lienlac->id}}" method="POST" enctype="multipart/form-data">  
            @include('adminls.functions.alert')
            <div class="box-body">
                <div class="form-group">
                    <label>Địa chỉ <span class="text-danger">*</span></label>
                    <input type="text" name="diachi" value="{{$lienlac->address}}"  class="form-control" >
                </div>
                <div class="form-group">
                    <label>Số điện thoại<span class="text-danger">*</span></label>
                    <input type="text" name="dienthoai" value="{{$lienlac->phone}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label>Hotline<span class="text-danger">*</span></label>
                    <input type="text" name="hotline" value="{{$lienlac->hotline}}"  class="form-control" >
                </div>
                <div class="form-group">
                    <label>Fax<span class="text-danger">*</span></label>
                    <input type="text" name="fax" value="{{$lienlac->fax}}"  class="form-control" >
                </div>
                <div class="form-group">
                    <label>Email<span class="text-danger">*</span></label>
                    <input type="text" name="email" value="{{$lienlac->email}}"  class="form-control" >
                </div>
            </div>          
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
            <button type="reset" class="btn btn-danger pull-right">reset</button>            
          </div>
          {!!csrf_field()!!}
        </form>
      </div>
@stop