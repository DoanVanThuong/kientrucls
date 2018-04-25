<section class="gallery-banner-content " id="banner-1">
        <div class="gallery-banner estate-banner">
            <div class="banner-cover">
                <div class="banner-info-center">
                    <h2 class="product-title">Nhà cỗ </h2>
                    <hr class="hr-product-title">
                    <h3 class="gallery-banner-subtitle">Bộ sưu tập</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($project_nhaco as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="thumb-wp">
                        <img src="{{asset($item->img)}}" class=" thumb img-responsive" alt="">
                    <button type="button" class="btn-info" data-toggle="modal" data-target="#nhaco{{$item->id}}">Xem dự án</button>
                    </div>
                </div>
                <!-- Modal comercial1-->
                <div class="modal fade" id="nhaco{{$item->id}}" role="dialog">
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