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

@stop