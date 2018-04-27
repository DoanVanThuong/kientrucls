<!--Projects-->
<section class="our-project our-product">
    <div class="container">
        <h3 class="home-title">Các Dự án &amp; SHOWS mới nhất</h3>
        <div class="home-title-border"></div>
    </div>
    <div class="row">
        @foreach($project as $item)
        <div class="col-md-3">
            <div class="img-project">
                <img src="{{asset($item->img)}}" alt="" class="img-responsive">
                <div class="project-des">
                <h4>{{$item->name}}</h4>
                    <p>
                       {{$item->des}}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
      
    </div>
    <div class="row">
        <a class="btn hview-more" href="/bo-suu-tap/cong-trinh-kien-truc">Xem thêm các dự án</a>
    </div>
</section>
<!--end Projects-->