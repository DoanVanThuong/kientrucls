<?php $curr = 'gallery';?>
@extends('master-page')
@section('title')Bộ sưu tập | Kiến trúc LS
@stop
@section('define-css')
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/gallery.css')}}">
@stop

@section('main-content')
    <section class="main-content">
        <!-- page header -->
        <section class="gallery-header clearfix">
            <div class="container">
                <div class="left">
                    <h2 class="gallery-header-title">Bộ sưu tập công trình kiến trúc</h2>
                </div>
                <ul class="breadcumb-menu list-inline">
                    <li>
                        <a href="/" title="">Trang chủ</a>
                    </li>
                    <span>/</span>
                    <li class="curr">
                        <a href="/bo-suu-tap" title="">bộ sưu tập</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- end page header -->
        <!--slider slider slider slider slider slider slider  -->
        <!--our-collection our-collection our-collection our-collection  -->
        <section class="our-collection">
            <div class="our-collection-wp">
                <h3 class="our-collection-title">Các công trình của Kiến trúc LS </h3>
                <p class="clearfix">Từ thiết kế ban đầu cho đến hoàn thành một cách nhanh chóng và chính xác</p>
                <ul class="list-inline collection-list">
                    <li id="bungalows">
                        <a href="javascript:void(0) " title="">Biệt thự</a>
                    </li>
                    <li id="commercial">
                        <a href="javascript:void(0) " title="">Nhà cỗ</a>
                    </li>
                    <li id="estate">
                        <a href="javascript:void(0) " title="">Nhà lô</a>
                    </li>
                    <li id="multi">
                        <a href="javascript:void(0) " title="">Văn phòng</a>
                    </li>
                </ul>
            </div>
        </section>
       @include('templates.galleries.bietthu')
       @include('templates.galleries.nhaco')
       @include('templates.galleries.nhalo')
       @include('templates.galleries.vanphong')
    </section>
@stop

@section('define-js')
<script src="{{asset('js/product_detail.js')}}"></script>
<script src="{{asset('js/gallery.js')}}"></script>

@stop