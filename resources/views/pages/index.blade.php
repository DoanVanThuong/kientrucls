<?php $curr = 'index';?>
@extends('master')
@section('title')Trang chủ | Kiến trúc LS
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
