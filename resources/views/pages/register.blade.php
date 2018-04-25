<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <base href="{{asset('')}}">
    
     
  <link rel="stylesheet" href="admin_asset2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin_asset2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin_asset2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_asset2/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="admin_asset2/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html">
                <b>KienTruc</b>LS</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            @include('adminls.functions.alert')            
            <p class="login-box-msg">Đăng kí user mới</p>
            <form action="/dangky" method="post" enctype="multipart/form-data" novalidate>
                <div class="form-group has-feedback">
                    <input type="text" name="name" class="form-control" placeholder="Tên">
                    <span class="fa fa-male form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>  
                <div class="form-group has-feedback">
                        <input type="password" name="repassword" class="form-control" placeholder="Xác nhận lại mật khẩu">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>  
                <div class="form-group text-center">
                    <button class="btn btn-primary" type="submit">Đăng ký</button>
                </div> 
                {!!csrf_field()!!}            
            </form>          
            <br>
            <a href="/admin/dangnhap" class="text-center">Đã có tài khoản</a>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="admin_asset2/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="admin_asset2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    
</body>

</html>