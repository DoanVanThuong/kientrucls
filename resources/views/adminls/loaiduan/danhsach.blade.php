<?php $curr = 'project_category';?>
<?php $view = 'project_category_list';?>
@section('define-css')
    <style>
        .info-box:hover{
            cursor: pointer;
            -webkit-box-shadow: 0 10px 6px -6px #777;
            -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;
            transition: .2s;
        }
    </style>
@stop
@extends('adminls.layout.index')
@section('content')
    <div class="row">
        @foreach($loaiduan as $item)        
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">{{$item->name}}</span>
                        <span class="info-box-number">1,410</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row text-center">
        <a href="admin/loaiduan/them" class="btn btn-success" role="button">Thêm mới</a>
    </div>
@stop