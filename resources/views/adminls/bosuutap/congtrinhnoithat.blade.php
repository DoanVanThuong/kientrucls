@extends('adminls.layout.index')
<?php $curr = 'gallery'; ?>
<?php $view = 'gallery_furniture_list'; ?>
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
        max-height: 100px;
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
      /* display: none; */
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
    
  </style>
@endsection
@section('content')
    <div class="box-header">
        <h1 class="box-title" data-ix"floating">
            Bộ sưu tập công trình nội thất
            <small>danh sách</small>
        </h1>
        @include('adminls.functions.alert')        
        &nbsp;
        <a href="admin/bosuutap/them" title="Thêm mới" data-toggle="tooltip" class="btn btn-info" role="button">Thêm ảnh</a>
    </div>
    <div class="box box-default color-palette-box" >
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-tag"></i>công trình nội thất</h3>
            <!-- tools box -->
             <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!-- /. tools -->
        </div>
        <div class="box-body">
            <div class="row">
                @foreach($congtrinhnoithat as $item)
                <div class="col-sm-4 col-md-3">
                    <div class="color-palette-set" data-toggle="tooltip">
                        <div class="img-wp">
                            <div class="delete">
                                <a href="admin/bosuutap/xoa/{{$item->id}}"  title="Xóa">
                                    <i class="fa fa-times" aria-hidden="flase"></i>
                                </a>
                                <a href="admin/bosuutap/sua/{{$item->id}}"  title="Sửa">
                                    <i class="fa fa-edit" aria-hidden="flase"></i>
                                </a>
                            </div>
                            <a href="javascript:void(0)" title="Click để phóng to" data-toggle="modal" data-target="#bietthu-{{$item->id}}">
                                <img src="{{asset($item->img)}}" class="img-responsive" alt="">     
                            </a>
                        </div>
                        <div class="bg-light-blue disabled color-palette"><span>{{$item->name}}</span></div>
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
    {{-- congtrinhnoithat --}}
    
@stop
@section('define-js')
    $();
@stop