@extends('adminls.layout.index')
<?php $curr = 'slide'; ?>
<?php $view = 'slide_list'; ?>
@section('define-css')
<style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: center;
    }

    .color-palette-set {
      margin-bottom: 15px;
      
    }
    .color-palette-set:hover {
        cursor: pointer;
    }
    .img-wp img{
        transition: .5s;
    }
    .color-palette-set:hover img{
       transform: scale(1.1);
    }
    .color-palette-set:hover .delete{
       display: block;
    }
    .img-wp {
        overflow: hidden;
        max-height: 300px;
        position: relative;
    }
    .img-wp .delete {
        position: absolute;
        right: 0;
        z-index: 3;
        display: none;
        transition: all .2s;
        font-size: 20px;
    }
    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette-box h4 {
      position: absolute;
      top: 100%;
      left: 25px;
      margin-top: -40px;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
    .delete a {
        color:red;
    }
    .bold {
        color:000;
        font-weight: 800;
    }
  </style>
@section('content')
<div class="box-header" >
        <h1 class="box-title" >
            Các Bộ sưu tập của Kiến trúc LS
            <small>danh sách</small>
        </h1>
        @include('adminls.functions.alert')        
        &nbsp;
        <a href="admin/slide/them" title="Thêm mới" data-toggle="tooltip" class="btn btn-info" role="button">Thêm ảnh</a>
    </div>
    <div class="box box-default color-palette-box" >
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-tag"></i>Bộ sưu tập biệt thự</h3>
        </div>
        <div class="box-body">
            <div class="row" >
                @foreach($slide as $item)
                <div class="col-sm-4 col-md-3">
                    <div class="color-palette-set" data-toggle="tooltip">
                        <div class="img-wp">
                            <div class="delete">
                                <a href="admin/slide/xoa/{{$item->id}}"  title="Xóa">
                                    <i class="fa fa-times" aria-hidden="false"></i>
                                </a>
                                <a href="admin/slide/sua/{{$item->id}}"  title="Sửa">
                                    <i class="fa fa-edit" aria-hidden="false"></i>
                                </a>
                            </div>
                            <a href="javascript:void(0)" title="Click để phóng to" data-toggle="modal" data-target="#bietthu-{{$item->id}}">
                                <img src="{{asset($item->img)}}" class="img-responsive" alt="">     
                            </a>
                        </div>
                    <p class="title"> <span class="bold">Tiêu đề:</span> {{$item->title}}</p>
                    <p class="sub"><span class="bold">Tiêu đề phụ:</span>{{$item->sub}}</p>
                    
                    </div>
                </div>
                 <!-- Modal bungalows1-->
                 <div class="modal fade" id="bietthu-{{$item->id}}" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="{{asset($item->img)}}" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>    
        </div>
        <!-- /.box-body -->
    </div>
@endsection