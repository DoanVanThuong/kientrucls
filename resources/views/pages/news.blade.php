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
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="page-title">Tin Tức và Xu hướng</h3>
                </div>
                <div class="col-md-6">
                    <ul class="breadcumb-menu">
                        <li>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li class="separator">/</li>
                        <li>Tin tức</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
      <section class="news-wp">
          <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content-wp">
                        <div class="img-news">
                            <img src="{{asset('img/news/img-news1.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="des">
                            <div class="news-tag">Tin Tức</div>
                            <h3 class="title">Learning different cultures through travel</h3>
                            <p class="content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
                            <div class="view-more text-center">
                                <button class="btn btn-default">Xem chi tiết</button>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-wp">
                        <div class="img-news">
                            <img src="{{asset('img/news/img-news2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="des">
                            <div class="news-tag">Tin Tức</div>
                            <h3 class="title">Learning different cultures through travel</h3>
                            <p class="content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
                            <div class="view-more text-center">
                                <button class="btn btn-default">Xem chi tiết</button>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-wp">
                        <div class="img-news">
                            <img src="{{asset('img/news/img-news2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="des">
                            <div class="news-tag">Tin Tức</div>
                            <h3 class="title">Learning different cultures through travel</h3>
                            <p class="content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
                            <div class="view-more text-center">
                                <button class="btn btn-default">Xem chi tiết</button>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content-wp">
                        <div class="img-news">
                            <img src="{{asset('img/news/img-news2.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="des">
                            <div class="news-tag">Tin Tức</div>
                            <h3 class="title">Learning different cultures through travel</h3>
                            <p class="content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.</p>
                            <div class="view-more text-center">
                                <button class="btn btn-default">Xem chi tiết</button>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row pg">
                <div class="pagination-area text-center">
                    <ul class="pagination pagination-primary pagination-no-border justify-content-center">
                          <li class="page-item"><a href="#paper-kit" class="page-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                          <li class="page-item active"><a href="#paper-kit" class="page-link">1</a></li>
                          <li class="page-item"><a href="#paper-kit" class="page-link">2</a></li>
                          <li class="page-item"><a href="#paper-kit" class="page-link">3</a></li>
                          <li class="page-item"><a href="#paper-kit" class="page-link">4</a></li>
                          <li class="page-item"><a href="#paper-kit" class="page-link">5</a></li>
                          <li class="page-item"><a href="#paper-kit" class="page-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                     </ul>
                </div>
            </div>
          </div>
      </section>
    <!--end Main content-->
@stop

@section('define-js')
{{-- <script src="{{asset('js/product-list.js')}}"></script> --}}

@stop