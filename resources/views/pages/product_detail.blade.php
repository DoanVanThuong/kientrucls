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
    <div class="main-content" style="margin-top:30px">
        @include('templates.products.products_detail.content')
        @include('templates.products.products_detail.product_relative')
    </div>
@stop

@section('define-js')
<script src="{{asset('js/product_detail.js')}}"></script>

@stop