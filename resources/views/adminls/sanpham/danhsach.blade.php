<?php $curr = 'products'; ?>
<?php $view = 'products_list' ?>
@extends('adminls.layout.index')
@section('content')
    <div class="row"> 
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">
                    {{$name == 'products' ? 'Sản Phẩm' : $name}}
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
                            <th class="text-center">Tên</th>
                            <th class="text-center">Loại</th>                            
                            <th class="text-center">Mã</th>
                            <th class="text-center">Giá</th>
                            <th class="text-center">Bảo hành</th>
                            <th class="text-center">Tình trạng</th>
                            <th class="text-center">Size</th>                            
                            <th class="text-center">slug</th>
                            <th class="text-center">ảnh đại diện</th>            
                            <th class="text-center">Xóa</th>
                            <th class="text-center">Sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sanpham as $item)
                        <tr class="odd gradeX " align="center">
                            <td class="text-center">{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a href="javascript:void(0) ">{{$item->loaisanpham['name']}}</a>                            
                            </td>                            
                            <td>{{$item->code}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->guarantee}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->size}}</td>
                            <td>{{$item->slug}}</td>                            
                            <td style="width:50%">
                                <img src="{{asset($item->img)}}" width="30%" class="img-responsive" alt="">
                            </td>                                                   
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$item->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$item->id}}">Sửa</a></td>
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