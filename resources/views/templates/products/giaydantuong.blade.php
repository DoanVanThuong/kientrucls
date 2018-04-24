<section class="tiles">
        <div class="banner-cover">
            <div class="banner-cover-img"></div>
            <div class="banner-info-center">
                <h2 class="product-title">Giấy gián tường</h2>
                <hr class="hr-product-title">

            </div>
        </div>
        <div class="container">
            <!-- slider -->
            <div class="slider-wp clearfix">
                @foreach($product_giaydantuong as $item)
                <div class="thumbnail-wp">
                    <div class="thumb-relative">
                        <img src="{{asset($item->img)}}" alt="" class="thumb img-responsive">
                        <div class="cap">
                            <h4>{{$item->name}}</h4>
                        </div>
                        <div class="inside-bg" data-toogle="tooltip">
                        <img class="img-responsive" src="{{asset($item->img)}}" title="{{$item->des}}" alt="">
                            <div class="order-bar">
                                <div class="order">
                                    <a href="/san-pham/{{$item->slug}}">Xem chi tiết</a>
                                </div>
                                <div class="arrow">
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- end slider -->
        </div>
        <!-- end container -->
    </section>