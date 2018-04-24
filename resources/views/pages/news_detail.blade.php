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
       @include('templates.news.news_detail.detail')
       @include('templates.news.news_detail.relative')
    </div>
@stop

@section('define-js')

@stop