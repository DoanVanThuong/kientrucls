@extends('adminls.layout.index')
<?php $curr = 'slide'; ?>
<?php $view = 'slide_edit'; ?>

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Sửa slide</h3>
    </div>
<form action="admin/slide/sua/{{$slide->id}}" method="POST" enctype="multipart/form-data" novalidate>  
        @include('adminls.functions.alert')
        <div class="box-body">                              
            
            <div class="form-group">
                <label >Tiêu đề chính <span class="text-danger">*</span></label>
            <input type="text" name="title" class="form-control" value="{{$slide->title}}" >
            </div>    
            <div class="form-group">
                <label >Tiêu đề phụ <span class="text-danger">*</span></label>
                <input type="text" name="sub" class="form-control" value="{{$slide->sub}}">
            </div>
            <div class="form-group">
                <label >ảnh<span class="text-danger">*</span></label>
                <p>
                    <img src="{{asset($slide->img)}}" width="40%" class="img-responsive" alt="">
                </p>
            </div> 
            <div class="form-group">
                <label for="InputFile">Thêm ảnh khác<span class="text-danger">*</span></label>
                <input type="file" name="anh" id="InputFile">       
            </div>    
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
        {!!csrf_field()!!}
    </form>
</div>
@stop