<?php $curr = 'news'; ?>
<?php $view = 'news_edit'; ?>
@extends('adminls.layout.index')

@section('content')
<div class="box box-primary">
        <div class="box-header with-border text-center ">
        <h3 class="box-title text-primary">Sửa <small>{{$tintuc->title}}</small></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
    <form action="admin/tintuc/sua/{{$tintuc->id}}" method="POST" enctype="multipart/form-data">  
            @include('adminls.functions.alert')
            <div class="box-header">                   
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                    <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body pad">               
                <div class="form-group">
                    <label >Tiêu đề <span class="text-danger">*</span></label>
                    <input type="text" name="tieude" class="form-control"  value="{{$tintuc->title}}">
                </div>
                <div class="form-group">
                    <label >Mô tả<span class="text-danger">*</span></label>
                    <input type="text" name="mota" class="form-control"  value="{{$tintuc->des}}">
                </div>               
                <div>
                    <textarea id="noidung" name="noidung" rows="50" cols="80">
                        {{$tintuc->content}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Ảnh đại diện<span class="text-danger">*</span></label>
                    <p>
                        <img src="{{asset($tintuc->img)}}" style="width:30%"  class="img-responsive" alt="">
                    </p>   
                    </div>
                <div class="form-group">
                    <label for="InputFile">Thay ảnh đại diện<span class="text-danger">*</span></label>
                    <input type="file" name="anh" id="InputFile">       
                </div>
            </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
            <button type="reset" class="btn btn-danger pull-right">Nhập lại</button>            
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
        CKEDITOR.replace('noidung', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        })
    })
    </script>
@stop