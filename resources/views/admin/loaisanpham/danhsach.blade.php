<?php 
$curr = 'categories';
?>
@extends('admin.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{$name == 'categories' ? 'Loại Sản Phẩm' : $name}}
                        <small>danh sách</small>
                    </h1>
                </div>
                @include('admin.functions.alert')
                    
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                            <td>
                                <img src="{{asset($item->img)}}" width="20%" class="img-responsive" alt="">
                            </td>
                            
                            
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/loaisanpham/xoa/{{$item->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/loaisanpham/sua/{{$item->id}}">Sửa</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop