  <!--Products-->
  <section class="our-product" id="products">
    <div class="container" data-ix="float-in-on-scroll">
        <h3 class="home-title">Sản Phẩm Của Chúng Tôi</h3>
        <div class="home-title-border"></div>
        <div class="hproduct-intro">
            Kiến trúc LS cung cấp rất nhiều loại sản phẩm cho không gian sống của bạn
        </div>
    </div>
    <div class="container hslider-group" data-ix="float-in-on-scroll-2">
        <div class="row hproduct-slider home-slider">
            @foreach($product as $item)
            <div class="col-md-4 col-sm-4 col-xs-12 hproduct-item item" data-toogle="tooltip">
            <a href="/san-pham/{{$item->slug}}" title="{{$item->name}}">
                    <div class="hproduct-item-pic">
                    <img src="{{asset($item->img)}}" alt="{{$item->type}}" title="{{$item->name}}" class="img-responsive">
                    </div>
                    <h4 class="home-title">{{$item->name}}</h4>
                    <div class="home-title-border"></div>
                    <p class="hproduct-item-detail">{{$item->description}}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container" data-ix="float-in-on-scroll-3">
        <a href="/san-pham" class="btn hview-more">Xem thêm sản phẩm</a>
    </div>
</section>
<!--end Products-->