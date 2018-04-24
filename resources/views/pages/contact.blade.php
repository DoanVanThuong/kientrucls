<?php $curr = 'contact';?>
@extends('master-page')
@section('title')Liên hệ | Kiến trúc LS
@stop

@section('define-css')
<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/contact.css')}}">

@stop

@section('main-content')
    <div class="main-content">
        <section class="contact-title">
            <div class="container">
                <h2>Liên hệ với chúng tôi</h2>
                <ol class="breadcrumb clearfix">
                    <li>Trang chủ</li>
                    <li class="active">liên hệ</li>
                </ol>
            </div>
        </section>
        @include('templates.contact.address')
        <section class="google-map">
            <div id="map"></div>
        </section>
        <script>
            var host = 'http://' + window.location.host;
            var map;
            function initMap(lat1 = 21.0681041, lng1 = 105.880896) {
                var stonetile = {
                    lat: lat1,
                    lng: lng1
                };
                map = new google.maps.Map(document.getElementById('map'), {
                    center: stonetile,
                    zoom: 17
                });
                var img = {
                    url: 'img/home/logo-ls.png',
                    size: new google.maps.Size(100, 100),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(50, 50),
                    scaledSize: new google.maps.Size(100, 78)
                };
                var marker = new google.maps.Marker({
                    position: stonetile,
                    draggable: false,
                    map: map,
                    icon: img
                });
            }          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2Qcxw_0TWYNdIrbrsuju7kjCWxlR5uGc&callback=initMap" async
            defer></script>
       @include('templates.contact.message')
    </div>
@stop

@section('define-js')
<script src="{{asset('js/product-list.js')}}"></script>
@stop

