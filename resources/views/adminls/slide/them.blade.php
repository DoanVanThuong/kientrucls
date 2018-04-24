@extends('adminls.layout.index')
<?php $curr = 'slide'; ?>
<?php $view = 'slide_add'; ?>

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Thêm ảnh slide mới</h3>
    </div>
    <form action="admin/slide/them/" method="POST" enctype="multipart/form-data" novalidate>  
        @include('adminls.functions.alert')
        <div class="box-body">                                   
            <div class="form-group">
                <label for="InputFile">Thêm ảnh<span class="text-danger">*</span></label>
                <input type="file" name="anh" id="InputFile">       
            </div>
            <div class="form-group">
                <label >Tiêu đề chính <span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" >
            </div>    
            <div class="form-group">
                <label >Tiêu đề phụ <span class="text-danger">*</span></label>
                <input type="text" name="sub" class="form-control" id="exampleInputEmail1" >
            </div>    
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
        {!!csrf_field()!!}
    </form>
</div>
@stop