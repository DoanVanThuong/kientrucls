 <!--Logo Slider-->
 <section class="our-product our-logos">
    <div class="container" data-ix="float-in-on-scroll">
        <h3 class="home-title">Khách hàng của chúng tôi</h3>
        <div class="home-title-border"></div>
    </div>
    <div class="container" data-ix="float-in-on-scroll-2">
        <div class="row logos-slider home-slider">
            @foreach($logo as $item)
            <div class="col-md-2" data-toggle="tooltip">
                <img src="{{asset($item->img)}}" alt="{{$item->name}}" title="{{$item->name}}" class="img-responsive">
            </div>
         @endforeach
            
        </div>
    </div>
</section>
<!--end Logo Slider-->