   <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
  <!--Header-->
  <header>
    <!--Slider-->
    <section class="stonetile-banner">
        <nav class=" stonetile-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas"
                        style="float:left;">
                        <span class="sr-only">Toggle navigation</span>
                        <span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('img/home/logo-ls.png')}}" alt="" class="img-responsive" class="logo" id="logo1">
                    </a>
                </div>
                <div class="navbar-offcanvas navbar-offcanvas-left navbar-offcanvas-touch" id="js-bootstrap-offcanvas">

                    <div class="wrap-navbar">
                        <ul class="nav navbar-nav">
                            <li class="{{$curr == 'index' ? 'active' : '' }}">
                                <a href="/">Trang chủ</a>
                            </li>
                            <li class="{{$curr == 'about' ? 'active' : '' }}">
                                <a href="/gioi-thieu">Giới thiệu</a>
                            </li>
                            <li  class="{{$curr == 'product' ? 'active' : '' }}">
                                <a href="/san-pham">Sản phẩm</a>
                            </li>

                        </ul>
                        <div class="stonetile-logo">
                            <a class="navbar-brand" href="/">
                                <img src="{{asset('img/home/logo-ls.png')}}" alt="" class="img-responsive" class="logo" id="logo2">
                            </a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="/bo-suu-tap">Dự án</a>
                            </li>
                            <li class=" {{$curr == 'gallery' ? 'active' : '' }}">
                                <a href="/bo-suu-tap">Bộ Sưu tập</a>
                            </li>
                            <li class=" {{$curr == 'contact' ? 'active' : '' }}">
                                <a href="/lien-he">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-->
            </div>
            <!-- /.container-->
        </nav>

        <div class="skitter skitter-large">
            <ul>
                <li>
                    <a href="#">
                        <img src="{{asset('img/home/slider1.png')}}" class="cubeSize" class="img-responsive" />
                    </a>
                    <div class="label_text">
                        <div class="hsubtitle">Kiến trúc LS</div>
                        <div class="hborder"></div>
                        <h2 class="htitle">Cải thiện ngôi nhà
                            <br> Và điều kiện sống</h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('img/home/slider2.png')}}" class="cubeSize" class="img-responsive" />
                    </a>
                    <div class="label_text">
                        <div class="hsubtitle">Kiến trúc LS</div>
                        <div class="hborder"></div>
                        <h2 class="htitle">Không gian dù lớn hay nhỏ
                            <br> Thì cũng cần phải đẹp</h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('img/home/slider3.png')}}" class="cubeSize" class="img-responsive" />
                    </a>
                    <div class="label_text">
                        <div class="hsubtitle">Kiến trúc LS</div>
                        <div class="hborder"></div>
                        <h2 class="htitle">Chăm sóc ngôi nhà của bạn
                            <br> Là sứ mệnh của chúng tôi</h2>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="{{asset('img/home/slider3.png')}}" class="cubeSize" class="img-responsive" />
                    </a>
                    <div class="label_text">
                        <div class="hsubtitle">Kiến trúc LS</div>
                        <div class="hborder"></div>
                        <h2 class="htitle">Chăm sóc ngôi nhà của bạn
                            <br> Là sứ mệnh của chúng tôi</h2>
                    </div>
                </li>
            </ul>
        </div>

    </section>
</header>
<!--end Header-->