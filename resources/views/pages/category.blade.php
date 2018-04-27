<?php $curr = 'product';?>
@extends('master-page')
@section('title')Sản phẩm | Kiến trúc LS
@stop
@section('define-css')
<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<link rel="stylesheet" href="{{asset('css/product_detail.css')}}">
@stop

@section('main-content')
    <div class="main-content">
        <div class="product-list_page">
            @include('templates.products.category.category')
        </div>
    </div>
@stop

@section('define-js')
<script src="{{asset('js/product-list.js')}}"></script>
<script src="{{asset('js/product_detail.js')}}"></script>
@stop