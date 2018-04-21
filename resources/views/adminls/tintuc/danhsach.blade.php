<?php $curr = 'news'; ?>
<?php $view = 'newss_list' ?>
@extends('adminls.layout.index')
@section('content')
    <div class="row"> 
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">
                    {{$name == 'news' ? 'Tin Tức' : $name}}
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
                            <th class="text-center">Tiêu đề</th>
                            <th class="text-center">Mô tả</th>                            
                            <th class="text-center">Nội dung</th>
                            <th class="text-center">Slug</th>                                                        
                            <th class="text-center">Hình ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tintuc as $item)
                        <tr class="odd gradeX " align="center">
                            <td class="text-center">{{$item->id}}</td>
                            <td>{{$item->title}}</td>                                                     
                            <td>{{$item->des}}</td>
                            <td>{{!!$item->content!!}}</td>
                            <td>{{$item->slug}}</td>                   
                            <td style="width:30%">
                                <img src="{{asset($item->img)}}" class="img-responsive" alt="">
                            </td>    
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/xoa/{{$item->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{$item->id}}">Sửa</a></td>
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