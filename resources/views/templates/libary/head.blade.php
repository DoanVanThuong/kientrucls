<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Công ty Tư vấn Thiết kế XD và TM Không gian Lớn và  Nhỏ chuyên tư vấn thiết kế công trình, thiết kế nội thất, thiết kế kiến trúc, xây dựng công trình">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content= "Tư vấn thiết kế công trình, thiết kế nội thất, thiết kế kiến trúc, xây dựng công trình" />
    <meta property="og:url"           content="{{URL::current()}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:description"   content="Kiến trúc LS" />
    <meta property="og:image"         content="{{asset('img/home/logo-ls.png')}}"/>
    <meta property="og:title" content="@yield('title')" />
    <meta name="author" content= "kientrucls.vn" />
    <meta name="Design" content="by DVT" />
    @yield('og')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.offcanvas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/skitter.css')}}">
    <link rel="stylesheet" href="{{asset('css/streamline-small.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/scroll-down-menu.css')}}">
    @yield('define-css')
    <script src="{{asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
    