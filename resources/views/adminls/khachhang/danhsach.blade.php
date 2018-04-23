<?php $curr = 'customer'; ?>
<?php $view = 'customer_list' ?>
@extends('adminls.layout.index')
@section('content')
    <div class="row"> 
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">
                  Thông tin khách hàng
                    <small>danh sách</small>
              </h1>
            </div>
            @include('adminls.functions.alert')
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr align="center">
                            <th class="text-center">ID</th>
                            <th class="text-center">Thông tin khách hàng</th>
                            <th class="text-center">Hình ảnh / logo</th>                            
                            <th class="text-center">Sửa</th>
                            <th class="text-center">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($khachhang as $item)
                        <tr class="odd gradeX " align="center">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td style="width:50%">
                                <img src="{{asset($item->img)}}" class="img-reponsive" alt="">
                            </td>                              
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/khachhang/sua/{{$item->id}}">Sửa</a></td>                                                                                                                                                                                                 
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/khachhang/xoa/{{$item->id}}"> Xóa</a></td>
                        </tr>
                        @endforeach
                    </tbody>               
              </table>
            </div>
          </div>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@stop