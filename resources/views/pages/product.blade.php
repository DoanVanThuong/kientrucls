<?php $curr = 'product';?>
@extends('master-page')
@section('title')Sản phẩms | Kiến trúc LS
@stop
@section('define-css')
<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<link rel="stylesheet" href="{{asset('css/product_detail.css')}}">
@stop

@section('main-content')
    <div class="main-content">
        <div class="product-list_page">
            @include('templates.products.giaydantuong')
            @include('templates.products.sofa')
            @include('templates.products.dogo')
            @include('templates.products.tranhkinh')
            @include('templates.products.gach')         
        </div>
    </div>
@stop

@section('define-js')
<script src="js/product-list.js"></script>
<script src="js/product_detail.js"></script>
@stop