<?php $curr = 'gallery';?>
@extends('master-page')
@section('title')Giới thiệu | Kiến trúc LS
@stop
@section('define-css')
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">

<link rel="stylesheet" href="{{asset('css/header-page.css')}}">
<link rel="stylesheet" href="{{asset('css/gallery.css')}}">
@stop

@section('main-content')
    <section class="main-content">
        <!-- page header -->
        <section class="gallery-header clearfix">
            <div class="container">
                <div class="left">
                    <h2 class="gallery-header-title">Gallery</h2>
                </div>
                <ul class="breadcumb-menu list-inline">
                    <li>
                        <a href="/" title="">Home</a>
                    </li>
                    <span>/</span>
                    <li class="curr">
                        <a href="/bo-suu-tap" title="">Gallery</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- end page header -->
        <!--slider slider slider slider slider slider slider  -->
        <!--our-collection our-collection our-collection our-collection  -->
        <section class="our-collection">
            <div class="our-collection-wp">
                <h3 class="our-collection-title">OUR collections</h3>
                <p class="clearfix">Từ thiết kế ban đầu cho đến hoàn thành một cách nhanh chóng và chính xác</p>
                <ul class="list-inline collection-list">
                    <li id="bungalows">
                        <a href="javascript:void(0) " title="">Biệt thự</a>
                    </li>
                    <li id="commercial">
                        <a href="javascript:void(0) " title="">Nhà cỗ</a>
                    </li>
                    <li id="estate">
                        <a href="javascript:void(0) " title="">Nhà lô</a>
                    </li>
                    <li id="multi">
                        <a href="javascript:void(0) " title="">Văn phòng</a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- bungalows bungalows bungalows bungalows bungalows bungalows bungalows -->
        <!-- bungalows bungalows bungalows bungalows bungalows bungalows bungalows -->
        <!-- bungalows bungalows bungalows bungalows bungalows bungalows bungalows -->
        <section class="gallery-banner-content" id="banner-0">
            <div class="gallery-banner bungalows-banner">
                <div class="banner-cover">
                    <div class="banner-info-center">
                        <h2 class="product-title">Biệt thự</h2>
                        <hr class="hr-product-title">
                        <h3 class="gallery-banner-subtitle">bộ sưu tập</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="{{asset('img/gallery/img-bungalows1.jpg')}}" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#bungalows-modal1">View project</button>
                        </div>
                    </div>
                    <!-- Modal bungalows1-->
                    <div class="modal fade" id="bungalows-modal1" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="{{asset('img/gallery/img-bungalows1.jpg')}}" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal bungalows1-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="{{asset('img/gallery/img-bungalows2.jpg')}}" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#bungalows-modal2">View project</button>
                        </div>
                    </div>
                    <!-- Modal bungalows2-->
                    <div class="modal fade" id="bungalows-modal2" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-bungalows2.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal bungalows2-->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-bungalows3.jpg" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#bungalows-modal3">View project</button>
                        </div>
                    </div>
                    <!-- Modal bungalows3-->
                    <div class="modal fade" id="bungalows-modal3" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-bungalows3.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal bungalows3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-bungalows4.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#bungalows-modal4">View project</button>
                        </div>
                    </div>
                    <!-- Modal bungalows4-->
                    <div class="modal fade" id="bungalows-modal4" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-bungalows4.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal bungalows4-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-bungalows5.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#bungalows-modal5">View project</button>
                        </div>
                    </div>
                    <!-- Modal bungalows5-->
                    <div class="modal fade" id="bungalows-modal5" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-bungalows5.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal bungalows5-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-bungalows6.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#bungalows-modal6">View project</button>
                        </div>
                    </div>
                    <!-- Modal bungalows6-->
                    <div class="modal fade" id="bungalows-modal6" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-bungalows6.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal bungalows6-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-bungalows7.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#bungalows-modal7">View project</button>
                        </div>
                    </div>
                    <!-- Modal bungalows7-->
                    <div class="modal fade" id="bungalows-modal7" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-bungalows7.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal bungalows7-->
                </div>
            </div>
        </section>
        <!-- end bungalows bungalows bungalows bungalows bungalows bungalows bungalows -->
        <!-- end bungalows bungalows bungalows bungalows bungalows bungalows bungalows -->
        <!-- end bungalows bungalows bungalows bungalows bungalows bungalows bungalows -->

        <!--comercial comercial comercial comercial comercial comercial comercial  -->
        <!--comercial comercial comercial comercial comercial comercial comercial  -->
        <!--comercial comercial comercial comercial comercial comercial comercial  -->
        <section class="gallery-banner-content " id="banner-1">
            <div class="gallery-banner bungalows-banner">
                <div class="banner-cover">
                    <div class="banner-info-center">
                        <h2 class="product-title">Nhà cỗ </h2>
                        <hr class="hr-product-title">
                        <h3 class="gallery-banner-subtitle">Bộ sưu tập</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-comercial1.jpg" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#comercial-modal1">View project</button>
                        </div>
                    </div>
                    <!-- Modal comercial1-->
                    <div class="modal fade" id="comercial-modal1" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-comercial1.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal comercial1-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-comercial2.jpg" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#comercial-modal2">View project</button>
                        </div>
                    </div>
                    <!-- Modal comercial2-->
                    <div class="modal fade" id="comercial-modal2" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-comercial2.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal comercial2-->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-comercial3.jpg" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#comercial-modal3">View project</button>
                        </div>
                    </div>
                    <!-- Modal comercial3-->
                    <div class="modal fade" id="comercial-modal3" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-comercial3.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal comercial3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/bungalows.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#comercial-modal4">View project</button>
                        </div>
                    </div>
                    <!-- Modal comercial4-->
                    <div class="modal fade" id="comercial-modal4" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/bungalows.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal comercial4-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-comercial4.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#comercial-modal5">View project</button>
                        </div>
                    </div>
                    <!-- Modal comercial5-->
                    <div class="modal fade" id="comercial-modal5" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-comercial4.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal comercial5-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-comercial5.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#comercial-modal6">View project</button>
                        </div>
                    </div>
                    <!-- Modal comercial6-->
                    <div class="modal fade" id="comercial-modal6" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-comercial5.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal comercial6-->
                </div>
            </div>
        </section>
        <!--end comercial comercial comercial comercial comercial comercial comercial  -->
        <!--end comercial comercial comercial comercial comercial comercial comercial  -->
        <!--end comercial comercial comercial comercial comercial comercial comercial  -->

        <!--estate estate estate estate estate estate estate estate estate estate   -->
        <!--estate estate estate estate estate estate estate estate estate estate   -->
        <!--estate estate estate estate estate estate estate estate estate estate   -->
        <section class="gallery-banner-content" id="banner-2">
            <div class="gallery-banner estate-banner">
                <div class="banner-cover">
                    <div class="banner-info-center">
                        <h2 class="product-title">Nhà lô</h2>
                        <hr class="hr-product-title">
                        <h3 class="gallery-banner-subtitle">Bộ sưu tập</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate1.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal1">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 1-->
                    <div class="modal fade" id="estate-modal1" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate1.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 1-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate2.jpg" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal2">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 2-->
                    <div class="modal fade" id="estate-modal2" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate2.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 2-->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate3.jpg" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal3">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 3-->
                    <div class="modal fade" id="estate-modal3" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate3.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate4.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal4">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 4-->
                    <div class="modal fade" id="estate-modal4" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate4.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 4-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate5.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal5">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 5-->
                    <div class="modal fade" id="estate-modal5" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate5.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 5-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate6.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal6">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 6-->
                    <div class="modal fade" id="estate-modal6" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate6.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 6-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate7.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal7">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 7-->
                    <div class="modal fade" id="estate-modal7" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate7.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 7-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate8.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal8">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 8-->
                    <div class="modal fade" id="estate-modal8" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate8.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 8-->
                </div>
            </div>
        </section>
        <!--end estate estate estate estate estate estate  estate estate estate estate  -->
        <!--end estate estate estate estate estate estate  estate estate estate estate  -->
        <!--end estate estate estate estate estate estate  estate estate estate estate  -->

        <!-- Multi Family Multi Family Multi Family Multi Family Multi  Multi Family -->
        <!-- Multi Family Multi Family Multi Family Multi Family Multi  Multi Family -->
        <!-- Multi Family Multi Family Multi Family Multi Family Multi  Multi Family -->
        <section class="gallery-banner-content">
            <div class="gallery-banner estate-banner">
                <div class="banner-cover">
                    <div class="banner-info-center">
                        <h2 class="product-title">Văn phòng</h2>
                        <hr class="hr-product-title">
                        <h3 class="gallery-banner-subtitle">Bộ sưu tập</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate1.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal1">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 1-->
                    <div class="modal fade" id="estate-modal1" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate1.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 1-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate2.jpg" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal2">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 2-->
                    <div class="modal fade" id="estate-modal2" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate2.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 2-->
                    <div class="col-md-3 col-sm-6 ">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate3.jpg" class=" thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal3">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 3-->
                    <div class="modal fade" id="estate-modal3" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate3.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 3-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate4.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal4">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 4-->
                    <div class="modal fade" id="estate-modal4" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate4.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 4-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate5.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal5">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 5-->
                    <div class="modal fade" id="estate-modal5" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate5.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 5-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate6.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal6">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 6-->
                    <div class="modal fade" id="estate-modal6" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate6.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 6-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate7.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal7">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 7-->
                    <div class="modal fade" id="estate-modal7" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate7.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 7-->
                    <div class="col-md-3 col-sm-6">
                        <div class="thumb-wp">
                            <img src="img/gallery/img-estate8.jpg" class="thumb img-responsive" alt="">
                            <button type="button" class="btn-info" data-toggle="modal" data-target="#estate-modal8">View project</button>
                        </div>
                    </div>
                    <!-- Modal estate 8-->
                    <div class="modal fade" id="estate-modal8" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <img src="img/gallery/img-estate8.jpg" class="thumb img-responsive" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal estate 8-->
                </div>
            </div>
        </section>

    </section>
@stop

@section('define-js')
<script src="{{asset('js/product_detail.js')}}"></script>

<script src="{{asset('js/gallery.js')}}"></script>

@stop