@extends('adminls.layout.index')
<?php $curr = 'about'; ?>
<?php $view = 'about_edit'; ?>

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sửa thông tin giới thiệu</h3>
        </div>
        <!-- /.box-header -->
        <form action="admin/gioithieu/sua/{{$gioithieu->id}}" method="POST" enctype="multipart/form-data">  
            @include('adminls.functions.alert')
            <div class="box-body">
                <div class="form-group">
                    <label>Tiêu đề <span class="text-danger">*</span></label>
                    <input type="text" name="tieude" value="{{$gioithieu->title}}"  class="form-control" >
                </div>
                <div class="form-group">
                    <textarea name="noidung" class="form-control" id="content-about" cols="30" rows="30">{{$gioithieu->content}}</textarea>
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

@section('define-js')
<script>
$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('content-about', {
    filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
    filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
    filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
    filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
    filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
    filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    })
})
</script>
@endsection