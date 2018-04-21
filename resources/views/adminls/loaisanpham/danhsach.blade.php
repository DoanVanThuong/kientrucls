@extends('adminls.layout.index')
<?php $curr = 'categories'; ?>
@section('content')
    <div class="row"> 
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">
                    {{$name == 'categories' ? 'Loại Sản Phẩm' : $name}}
                    <small>danh sách</small>
              </h1>
            </div>
            @include('admin.functions.alert')
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr align="center">
                            <th class="text-center">ID</th>
                            <th class="text-center">Tên</th>
                            <th class="text-center">slug</th>
                            <th class="text-center">ảnh đại diện</th>            
                            <th class="text-center">Xóa</th>
                            <th class="text-center">Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($loaisanpham as $item)
                        <tr class="odd gradeX " align="center">
                            <td class="text-center">{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td style="width:50%">
                                <img src="{{asset($item->img)}}" width="30%" class="img-responsive" alt="">
                            </td>                                                   
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaisanpham/xoa/{{$item->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaisanpham/sua/{{$item->id}}">Sửa</a></td>
                        </tr>
                        @endforeach
                    </tbody>               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
@stop