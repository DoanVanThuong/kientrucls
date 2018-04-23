@extends('adminls.layout.index')
<?php $view = 'dashboard'; ?>
<?php $curr = 'dashboard'; ?>


@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                <h3>{{$numProjects}}</h3>
                <p>Dự án</p>
                </div>
                <div class="icon">
                <i class="fa fa-building"></i>
                </div>
                <a href="admin/duan/danhsach" class="small-box-footer">Xem chi tiết <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                <h3>{{$numProducts}}</h3>
                <p>Sản phẩm</p>
                </div>
                <div class="icon">
                <i class="fa fa-product-hunt"></i>
                </div>
                <a href="admin/sanpham/danhsach" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                <h3>{{$numGalleries}}</h3>
    
                <p>Bộ sưu tập các công trình dự án</p>
                </div>
                <div class="icon">
                <i class="fa fa-picture-o"></i>
                </div>
                <a href="admin/bosuutap/danhsach" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                <h3>{{$numNews}}</h3>
    
                <p>Bài viết - Tin tức</p>
                </div>
                <div class="icon">
                <i class="fa fa-newspaper-o"></i>
                </div>
                <a href="admin/tintuc/danhsach" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="box-header">
            <h1 class="box-title">
                Thông tin liên hệ
            </h1>
        </div>
        <div class="col-md-7"> 
                           
        </div>
      
        <div class="col-md-5">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Những sản phẩm mới nhất</h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    @foreach($product_newest as $item)
                    <li class="item">
                      <div class="product-img">
                      <img src="{{asset($item->img)}}" class="img-responsive" alt="Product Image">
                      </div>
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">{{$item->name}}
                          <span class="label label-warning pull-right">{{$item->price}}</span></a>
                        <span class="product-description">
                              {{$item->des}}
                        </span>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="admin/sampham/danhsach" class="uppercase">Xem tất cả sản phẩm</a>
                </div>
                <!-- /.box-footer -->
            </div>
        </div>
    </div>
@stop

@section('define-js')
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
                url: 'img/home/icon-map.png',
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
@stop