 <!--Header-->
 <header>
    <nav class="navbar navbar-default navbar-page">
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
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li class="{{$curr == 'about' ? 'active' : '' }}">
                        <a href="/gioi-thieu">Giới thiệu</a>
                    </li>
                    <li class="{{$curr == 'product' ? 'active' : ''}}">
                        <a href="/san-pham">Sản phẩm</a>
                    </li>
                <li class="{{$curr == 'gallery' ? 'active' : ''}}">
                        <a href="/bo-suu-tap">Dự án</a>
                    </li>
                    <li class="{{$curr == 'gallery' ? 'active' : ''}}">
                        <a href="/bo-suu-tap">Bộ Sưu tập</a>
                    </li>
                    <li class="{{$curr == 'contact' ? 'active' : '' }}">
                        <a href="/lien-he">Liên Hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.navbar-->
</header>