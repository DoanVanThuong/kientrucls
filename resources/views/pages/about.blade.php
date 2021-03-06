<?php $curr = 'about';?>
@extends('master-page')
@section('title')Giới thiệu | Kiến trúc LS
@stop
@section('define-css')
<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/about1.css')}}">

@stop
@section('main-content')
    <!--Main content-->
        <section class="main-content">
            <!--Banner-->
            <section class="page-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="page-title">Giới thiệu</h3>
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcumb-menu">
                                <li>
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="separator">/</li>
                                <li>Giới thiệu</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Introduction-->
            <section class="introduction" data-ix="float-in-on-scroll">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="author-wrap" data-ix="float-in-on-scroll-2">
                                <img src="{{asset('img/about/author.png')}}" alt="" class="img-responsive">
                                <div class="author-info">
                                    <h4 class="author-name">PETER KUELKER </h4>
                                    <span class="author-pos">Nhà sáng lập</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8" data-ix="float-in-on-scroll-3">
                            <h2 class="home-title about-title">{{$about->title}}</h2>
                            <div class="about-hr"></div>
                            <div class="intro-txt" data-ix="float-in-on-scroll">
                            <p>{!! $about->content !!}</p>
                            </div>
                        </div>
    
                    </div>
                    <div class="intro-hr"></div>
                </div>
            </section>
            <!--end Introduction-->
    
        </section>
    <!--end Main content-->
@stop

@section('define-js')
<script src="{{asset('js/product-list.js')}}"></script>
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5adf2b4bd1fd9d8e"></script>

@stop