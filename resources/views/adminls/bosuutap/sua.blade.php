@extends('adminls.layout.index')
<?php $curr = 'gallery'; ?>
<?php $view = 'gallery_edit'; ?>

@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Sửa <small>{{$bosuutap->name}}</small></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
    <form action="admin/bosuutap/sua/{{$bosuutap->id}}" method="POST" enctype="multipart/form-data">  
            @include('adminls.functions.alert')
            <div class="box-body">
            <div class="form-group">
                    <label>Loại dự án</label>                   
                    <select class="form-control" name="loaiduan">
                        @foreach($loaiduan as $item)                                           
                            <option 
                                @if($bosuutap->loaiduan->id == $item->id)
                                {{"selected"}}
                            @endif     
                            value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tên dự án <span class="text-danger">*</span></label>
                <input type="text" name="tenloai" value="{{$bosuutap->name}}"  class="form-control" id="exampleInputEmail1" placeholder="Nhập tên loại">
            </div>            
            <div class="form-group">
              <label for="InputFile">Ảnh đại diện<span class="text-danger">*</span></label>
              <br>
              <p>
              <img src="{{asset($bosuutap->img)}}" width="50%" alt="" class="img-responsive">
              </p>
          </div>
          <div class="form-group">
                <label for="InputFile">Chọn ảnh đại diện khác<span class="text-danger">*</span></label>
                <input type="file" name="anh" id="InputFile">       
            </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Sửa</button>
            <button type="reset" class="btn btn-danger pull-right">reset</button>            
          </div>
          {!!csrf_field()!!}
        </form>
      </div>
@stop