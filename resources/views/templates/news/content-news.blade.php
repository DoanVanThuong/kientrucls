<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="page-title">Tin Tức và Xu hướng</h3>
            </div>
            <div class="col-md-6">
                <ul class="breadcumb-menu">
                    <li>
                        <a href="#">Trang chủ</a>
                    </li>
                    <li class="separator">/</li>
                    <li>Tin tức</li>
                </ul>
            </div>
        </div>
    </div>
</section>
    <section class="news-wp">
        <div class="container">
            <div class="row">
                @foreach($news as $item)
                <div class="col-md-6">
                    <div class="content-wp">
                        <div class="img-news">
                            <img src="{{asset($item->img)}}" class="img-responsive" alt="">
                        </div>
                        <div class="des">
                            <div class="news-tag">Tin Tức</div>
                            <h3 class="title">{{$item->title}}</h3>
                        <p class="content">{{$item->des}}</p>
                            <div class="view-more text-center">
                                <a href="/tin-tuc/{{$item->slug}}" class="btn btn-info" role="button">Xem chi tiết</a>
                            </div>
                        
                        </div>
                    
                    </div>
                </div>
               @endforeach
            </div>
           @include('templates.news.pagination')
        </div>
    </section>