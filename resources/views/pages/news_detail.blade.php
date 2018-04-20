<?php $curr = 'news';?>
@extends('master-page')
@section('title')Tin Tức | Kiến trúc LS
@stop
@section('define-css')
<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/news.css')}}">
@stop

@section('main-content')
    <div class="main-content" style="margin-top:30px">
       <section class="content-detail">
            <div class="container">
                <div class="row">
                    <h3 class="title">18 xu hướng thiết kế nội thất nổi bật trong 2014 - Phần 2</h3>
                    <ul class="list-inline">
                        <li>
                            <i class="fa fa-facebook" arial-hidden="false"></i>
                        </li>
                        <li>
                            <i class="fa fa-google" arial-hidden="false"></i>
                        </li>
                    </ul>
                    <div class="detail">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, at modi rem illo qui dolorum explicabo vel, quaerat, harum neque iure quibusdam. Quo explicabo eaque libero vel nam rerum, repellendus ipsum, officia ratione, et consequatur atque totam perspiciatis quis assumenda eligendi excepturi iusto inventore. Inventore vitae voluptatem expedita atque assumenda dicta maxime cupiditate! Facilis rem quibusdam eligendi autem iusto non error ipsa sed recusandae quo natus possimus cumque, ducimus ipsum debitis minima itaque sit eum laborum obcaecati perspiciatis. Eveniet ex, est sunt inventore asperiores animi vel iste quasi quos culpa perferendis dolore, facilis fuga! Consectetur nihil numquam iure a doloribus.
                    </div>

                </div>
            </div>
       </section>
       <section class="news-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('img/news/kham-pha-ngoi-nha-rat-quai-cua-tung-duong.jpg')}}" class="img-responsive" alt="">
                            </div>
                            <div class="col-md-9">
                                <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores, fugiat.</a>
                                <div class="des">desciprtion</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
    </div>
@stop

@section('define-js')

@stop