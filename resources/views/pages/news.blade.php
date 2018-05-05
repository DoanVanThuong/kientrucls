<?php $curr = 'news';?>
@extends('master-page')
@section('title')Tin Tức & Xu Hướng | Kiến trúc LS
@stop
@section('define-css')
<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/news.css')}}">
<link rel="stylesheet" href="{{asset('css/about1.css')}}">



@stop
@section('main-content')
    <!--Main content-->
      @include('templates.news.content-news')
     
    <!--end Main content-->
@stop

@section('define-js')
<script src="{{asset('js/product-list.js')}}"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5adf2b4bd1fd9d8e"></script>


@stop