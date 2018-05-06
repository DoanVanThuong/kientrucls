<?php $curr = 'index';?>
@extends('master')
@section('title')Công ty Cổ phần Tư vấn Thiết kế Xây dựng và Thương mại Không gian Lớn và Nhỏ
@stop

@section('main-content')
  <!--Main content-->
  <section class="main-content">
    @include('templates.index.product')
    @include('templates.index.project')
    @include('templates.index.testimonial')
    @include('templates.index.company')
</section>
<!--end Main content-->
@stop
