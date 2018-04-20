
<?php 
$curr = 'categories';
?>
@extends("admin.layout.index")
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại sản phẩm
                        <small>Thêm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12" style="padding-bottom:120px">
                    <form action="admin/loaisanpham/them" method="POST">     
                      @include('admin.functions.alert')
                        <div class="form-group">
                            <label>Tên loại sản phẩm</label>
                            <input class="form-control" name="tenloaiSP" placeholder="Nhập tên loại sản phẩm..." />
                        </div>                        
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        {!!csrf_field()!!}
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop