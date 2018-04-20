<section class="acessories">
        <div class="banner-cover">
            <div class="banner-cover-img"></div>
            <div class="banner-info-center">
                <h2 class="product-title">Gạch đá ốp lát</h2>
                <hr class="hr-product-title">
            </div>
        </div>
        <div class="container">
            <!-- slider -->
            <div class="slider-wp clearfix">
                @foreach($product_gach as $item)
                <div class="thumbnail-wp">
                    <div class="thumb-relative">
                        <img src="{{asset($item->img)}}" alt="" class="thumb img-responsive">
                        <div class="cap">
                            <h4>{{$item->name}}</h4>
                        </div>
                        <div class="inside-bg">
                        <img class="img-responsive" title="{{$item->des}}" src="{{asset($item->img)}}" alt="">
                            <div class="order-bar">
                                <div class="order">
                                    <a href="/san-pham/{{$item->slug}}">View Detail</a>
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
    </section>