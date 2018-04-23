@extends('adminls.layout.index')
<?php $view = 'dashboard'; ?>
<?php $curr = 'dashboard'; ?>
@section('define-css')
<style>
        .color-palette {
          height: 35px;
          line-height: 35px;
          text-align: center;
        }
    
        .color-palette-set {
          margin-bottom: 15px;
        }
    
        .color-palette span {
          display: none;
          font-size: 12px;
        }
    
        .color-palette:hover span {
          display: block;
        }
    
        .color-palette-box h4 {
          position: absolute;
          top: 100%;
          left: 25px;
          margin-top: -40px;
          color: rgba(255, 255, 255, 0.8);
          font-size: 12px;
          display: block;
          z-index: 7;
        }
        .img-wp {
            height: 142px;
            overflow: hidden;
        }
      </style>
@stop

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
    {{-- /sum --}}
    <div class="row">
        <div class="box-header">
            <h1 class="box-title">
                Thông tin liên hệ
            </h1>
        </div>
        <div class="col-md-7"> 
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tin tức - xu hướng mới nhất</h3>
                    <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                    @foreach($news_newest as $item)
                    <li class="item">
                        <div class="product-img">
                        <img src="{{asset($item->img)}}" class="img-responsive" alt="Product Image">
                        </div>
                        <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">{{$item->title}}
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
                    <a href="admin/sampham/danhsach" class="uppercase">Tất cả tin tức</a>
                </div>
                <!-- /.box-footer -->
            </div>              
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
    {{--/ news & product --}}
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default color-palette-box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-tag"></i>Dự án mới nhất</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        @foreach($project_newst as $item)
                        <div class="col-sm-3 col-md-3">
                            <h4 class="text-center bg-light-blue">{{$item->name}}</h4>       
                            <div class="color-palette-set">
                               <div class="img-wp">
                                <img src="{{$item->img}}" class="img-responsive" alt="">
                               </div>
                            </div>
                        </div>
                        @endforeach                        
                    </div>               
                </div>
                <div class="box-footer text-center">
                    <a href="admin/duan/danhsach" class="uppercase">Xem tất cả dự án</a>
                </div>
            </div>
        </div>
    </div>
    {{-- /dự án mới nhất --}}    
    <div class="row">
        {{-- new Feedback --}}
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-comments-o"></i>
                    <h3 class="box-title">Phản hồi mới nhất</h3>
                    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">                   
                    </div>
                </div>
                <div class="box-body chat" id="chat-box">
                    @foreach($feedback_newst as $item)
                    <div class="item">
                        <img src="{{asset('img/default-user.png')}}" alt="user image" class="online">
                        <p class="message">
                            <a href="javascript:void(0)" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i>{{$item->created_at->diffForHumans()}}</small>
                           {{$item->name}}
                            </a>
                            {{$item->content}}
                        </p>           
                    </div>        
                    @endforeach                           
                </div>
                <div class="box-footer text-center">
                    <a href="admin/feedback/danhsach">Xem tất cả phản hồi</a>
                </div>
            </div>
        </div>
        <!-- USERS LIST -->        
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Khách hàng mới</h3>
                  <div class="box-tools pull-right">
                    <span class="label label-danger">{{$member_newst->count()}} khách hàng mới</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    @foreach($member_newst as $item)
                    <li>
                        <img src="{{asset($item->img)}}" alt="User Image">
                        <a class="users-list-name" href="#">{{$item->name}}</a>
                    </li>
                    @endforeach                   
                  </ul>
                </div>
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">Xem tất cả khách hàng</a>
                </div>
              </div>
        </div>
    </div>
    {{-- feedback - Customer --}}        
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Thông tin liên lạc</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                </div>
                <div class="box-body">
                    <dl>
                        <dt>Địa chỉ <span><i class="fa fa-address-card-o fa-lg text-primary" aria-hidden="true"></i></span></dt>
                            <dd>{{$contact->address}}</dd>
                        <dt>Điện thoại <span><i class="fa fa-phone fa-lg text-primary" aria-hidden="true"></i></span></dt>
                            <dd>{{$contact->phone}}</dd>
                        <dt>Hotline <span><i class="fa fa-mobile fa-lg text-primary" aria-hidden="true"></i></span></dt>
                            <dd>{{$contact->hotline}}</dd>
                        <dt>Fax <span><i class="fa fa-fax fa-lg text-primary" aria-hidden="true"></i></span></dt>
                            <dd>{{$contact->fax}}</dd>
                        <dt>Email <span><i class="fa fa-envelope-o fa-lg text-primary" aria-hidden="true"></i></span></dt>
                            <dd>{{$contact->email}}</dd>
                    </dl>
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                <a href="admin/lienlac/sua/{{$contact->id}}" class="uppercase">Chỉnh sửa thông tin</a>
                </div>
                <!-- /.box-footer -->
            </div>
        </div>    
    </div>
    {{-- /Contact Info --}}    
    
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