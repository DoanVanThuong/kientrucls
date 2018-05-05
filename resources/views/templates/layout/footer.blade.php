   <!--scrollToTop-->
   <button  id="scroll" title="Scroll to top">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</button>
<!--Footer-->
 <!--Footer-->
 <footer>
    <section class="top-footer">
        <div class="container">
            <div class="row top-fgroup">
                <div class="col-md-4 col-sm-4 top-fitem">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <img src="{{asset('img/home/icon1.png')}}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p class="contact-info">
                                <span>Phone: </span>
                                <br> {{$address[0]->phone}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 top-fitem">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <img src="{{asset('img/home/icon2.png')}}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p class="contact-info">
                                    {{$address[0]->address}}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 top-fitem">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <img src="{{asset('img/home/icon3.png')}}" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <p class="contact-info">
                                <span>Email: </span>
                                <br> {{$address[0]->email}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-footer">
        <div class="container">
            <div class="row mainf-group">
                <div class="col-md-3 col-sm-6 mainf-item">
                    <h3 class="widget-title">Giới thiệu</h3>
                    <div class="title-border"></div>
                    <div class="widget-txt">
                        <p>{{$about->title}}

                        </p>
                    </div>
                    <ul class="footer-social">
                        <li>
                            <a href="https://www.facebook.com/stonetilecanada">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/StonetileCanada">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/108272472820847102517">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 mainf-item">
                    <h3 class="widget-title">Các sản phẩm</h3>
                    <div class="title-border"></div>
                    <ul class="widget-menu fproduct-menu">
                        @foreach($category as $item)
                        <li>
                        <a href="/san-pham/loai/{{$item->slug}}">{{$item->name}}</a>
                        </li>
                       @endforeach
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 mainf-item">
                    <h3 class="widget-title">Tag</h3>
                    <div class="title-border"></div>
                    <ul class="widget-menu fcate-menu">
                            @foreach($category as $item)
                            <li>
                            <a href="/san-pham/loai/{{$item->slug}}">{{$item->name}}</a>
                            </li>
                           @endforeach
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 mainf-item">
                    <h3 class="widget-title">Tin tức mới nhất</h3>
                    <div class="title-border"></div>
                    @foreach($news_provide as $item)
                    <div class="row entry-post">
                        <div class="col-md-5 col-xs-3">
                            <img src="{{asset($item->img)}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-7 col-xs-9">
                            <h4 class="entry-title">
                            <a href="{{$item->slug}}"></a>{{$item->title}}</a>
                            </h4>
                            <div class="entry-meta">
                                <span class="meta-date">{{$item->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <section class="bottom-footer">
        <div class="container">
            <p>
                <span>© Copyright 2018 by</span> KienTrucLS, Inc. All Rights Reserved</p>
        </div>
    </section>
    <section class="end-footer"></section>
</footer>
<!--end Footer-->