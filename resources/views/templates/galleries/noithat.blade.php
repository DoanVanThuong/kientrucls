<section class="gallery-banner-content" id="banner-0">
        <div class="gallery-banner bungalows-banner">
            <div class="banner-cover">
                <div class="banner-info-center">
                    <h2 class="product-title">Công trình nội thất</h2>
                    <hr class="hr-product-title">
                    <h3 class="gallery-banner-subtitle">bộ sưu tập</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($congtrinhnoithat as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="thumb-wp">
                        <img src="{{asset($item->img)}}" class="thumb img-responsive" alt="">
                        <button type="button" class="btn-info" data-toggle="modal" data-target="#bietthu-{{$item->id}}">Xem dự án</button>
                    </div>
                </div>
                <!-- Modal bungalows1-->
                <div class="modal fade" id="bietthu-{{$item->id}}" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
                            <h4 class="text-center text-primary">{{$item->name}}</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <img src="{{asset($item->img)}}" class="thumb img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>