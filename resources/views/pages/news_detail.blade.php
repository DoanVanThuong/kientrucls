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
                    <h3 class="title text-center">18 xu hướng thiết kế nội thất nổi bật trong 2014 - Phần 2</h3>
                    <ul class="list-inline list-social">
                        <li>
                            <button class="btn btn-just-icon btn-facebook">
                                    <i class="fa fa-facebook" arial-hidden="false"></i>

                            </button>
                        </li>
                        <li>
                                <button class="btn btn-just-icon btn-google">
                                        <i class="fa fa-google" arial-hidden="false"></i>
    
                                </button>
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
                <h4>Tin liên quan <span class="text-danger">*</span></h4>
                <ul class="list-unstyled list-news-relative">
                    <li>
                        <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, quas.</a>
                    </li>
                    <li>
                        <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, quas.</a>
                    </li>
                    <li>
                        <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, quas.</a>
                    </li>
                </ul>
           </div>
       </section>
    </div>
@stop

@section('define-js')

@stop