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
                            <li class=" {{$curr == 'news' ? 'active' : '' }}">
                                <a href="/tin-tuc">Tin Tức</a>                                
                            </li>
                            <li class="dropdown">
                                <a href="#" class="sub">Bộ Sưu tập 
                                    <span class="caret"></span>
                                </a>
                                <ul class="submenu list-unstyled" style="display:none" >
                                    <li>
                                        <a href="/bo-suu-tap/cong-trinh-kien-truc">Công trình kiến trúc</a>
                                    </li>
                                    <li>
                                        <a href="/bo-suu-tap/cong-trinh-noi-that">Công trình nội thất</a>                                        
                                    </li>                               
                                </ul>
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
                @foreach($slide as $item)
                <li>
                    <a href="#">
                        <img src="{{asset($item->img)}}" class="cubeSize img-responsive" />
                    </a>
                    <div class="label_text">
                        <div class="hsubtitle">{{$item->title}}</div>
                        <div class="hborder"></div>
                        <h2 class="htitle">{{$item->sub}}</h2>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</header>
<!--end Header-->