<section class="tiles">
    <div class="banner-cover">
        <div class="banner-cover-img"></div>
        <div class="banner-info-center">
            <h2 class="product-title">{{$name}}</h2>
            <hr class="hr-product-title">

        </div>
    </div>
    <div class="container">
        <!-- slider -->
        <div class="slider-wp clearfix">
            <?php $n = 0;?>
            @foreach($loaisanpham as $item)
            <?php $n++; ?>
            <div class="thumbnail-wp">
                <div class="thumb-relative">
                <a href="{{$item->slug}}" data-toogle="tooltip">
                <img src="{{asset($item->img)}}" alt="" title="{{$item->name}}" class="thumb img-responsive">
                        <div class="cap">
                            <h4>{{$item->name}}</h4>
                        </div>
                    </a>                 
                </div>
            </div>
            
        </div>
        <!-- end slider -->
        @endforeach
            @if($n == 0)
            <h3 class=" text-danger">Không tìm thấy sản phẩm</h3>

            @endif
    </div>
    <!-- end container -->
</section>