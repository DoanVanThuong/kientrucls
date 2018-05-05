<?php $curr = 'gallery';?>
@extends('master-page')
@section('title')Bộ sưu tập công trình nội thất | Kiến trúc LS
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
                    <h2 class="gallery-header-title">Bộ sưu tập công trình nội thất</h2>
                </div>
                <ul class="breadcumb-menu list-inline">
                    <li>
                        <a href="/" title="">Trang chủ</a>
                    </li>
                    <span>/</span>
                    <li class="curr">
                        <a href="/cong-trinh-noi-that" title="">bộ sưu tập</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- end page header -->
        <!--slider slider slider slider slider slider slider  -->
        <!--our-collection our-collection our-collection our-collection  -->
        <section class="our-collection">
            <div class="our-collection-wp">
                <h3 class="our-collection-title">Các công trình nội thất của Kiến trúc LS </h3>
                <p class="clearfix">Từ thiết kế ban đầu cho đến hoàn thành một cách nhanh chóng và chính xác</p>
               
            </div>
        </section>
       @include('templates.galleries.noithat')
    </section>
@stop

@section('define-js')
<script src="{{asset('js/product_detail.js')}}"></script>
<script src="{{asset('js/gallery.js')}}"></script>
<script src="{{asset('js/product-list.js')}}"></script>

@stop