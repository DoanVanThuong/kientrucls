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
                <h2>Contact us</h2>
                <ol class="breadcrumb clearfix">
                    <li>home</li>
                    <li class="active">contact us</li>
                </ol>
            </div>
        </section>
        <section class="address">
            <div class="container">
                <div class="title-body">
                    <h3>Kiến Trúc LS Ltd.</h3>
                    <div class="line"></div>
                </div>
                <div class="info">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 location">
                            <div class="row">
                                <div class="col-md-3 col-xs-3">
                                    <div class="contact-item sl-small-location">
                                    </div>
                                </div>
                                <div class="col-md-9 col-xs-9 address-item">
                                    <p>
                                        Số 22/16/157 Phố Đức Giang
                                        <br> Long Biên - Hà Nội
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 phone">
                            <div class="row">
                                <div class="col-md-3 col-xs-3">
                                    <div class="contact-item sl-small-phone ">
                                    </div>
                                </div>
                                <div class="col-md-9 col-xs-9 address-item">
                                    <p>Phone
                                        <strong>02462570507</strong>
                                    </p>
                                    <p>Hotline
                                        <strong>0983334968</strong>
                                    </p>
                                    <p>Toll Free
                                        <strong>800 266 9320</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 clock">
                            <div class="row">
                                <div class="col-md-3 col-xs-3">
                                    <div class="contact-item sl-small-clock">
                                    </div>
                                </div>
                                <div class="col-md-9 col-xs-9 address-item">
                                    <p>
                                        Email
                                    </p>
                                    <strong>largeandsmall.jsc@gmail.com</strong>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
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
            $('.item-branches').on('click', function () {
                var lat1 = parseFloat($(this).data('l'));
                var lng1 = parseFloat($(this).data('lg'));
                initMap(lat1, lng1);
                $('.item-branches').removeClass('active');
                $(this).addClass('active');
            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2Qcxw_0TWYNdIrbrsuju7kjCWxlR5uGc&callback=initMap" async
            defer></script>
        <!--form message-->
        <section class="form-mess">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 left-form">
                        <input type="text" placeholder="Your Name *">
                        <input type="email" placeholder="Your Email *">
                        <input type="number" placeholder="Your Phone *">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <textarea placeholder="Message *" cols="50" rows="8"></textarea>
                    </div>
                    <div class="col-md-4 col-xs-12 middle">
                        <h3>Service request</h3>
                        <p>on existing stonetile installation</p>
                        <button>Send now</button>
                    </div>
                </div>
                <div class="promise">
                    <div class="row">
                        <div class="col-md-4 col-xs-12 text-promise">
                            We will contact you within one business day
                        </div>
                        <div class="col-md-4 col-xs-12 reset-padding-container btn-sendMess">
                            <button>Send Message</button>
                        </div>
                        <div class="col-md-4 col-xs-12"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('define-js')
<script src="{{asset('js/product-list.js')}}"></script>
@stop

