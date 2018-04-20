<section class="gallery-banner-content" id="banner-2">
        <div class="gallery-banner multi-banner">
            <div class="banner-cover">
                <div class="banner-info-center">
                    <h2 class="product-title">Nhà lô</h2>
                    <hr class="hr-product-title">
                    <h3 class="gallery-banner-subtitle">Bộ sưu tập</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($project_nhalo as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="thumb-wp">
                        <img src="{{asset($item->img)}}" class="thumb img-responsive" alt="">
                    <button type="button" class="btn-info" data-toggle="modal" data-target="#nhalo{{$item->id}}">View project</button>
                    </div>
                </div>
                <!-- Modal estate 1-->
                <div class="modal fade" id="nhalo{{$item->id}}" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-body">
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