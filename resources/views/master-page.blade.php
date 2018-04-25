<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
	@include('templates.libary.head')
<body class="">
	<div id="container">    
        @include('templates.layout.header-page')
        @yield('main-content')        
        @include('templates.layout.footer')
    </div>
    @include('templates.libary.foot-page')
</body>
</html>