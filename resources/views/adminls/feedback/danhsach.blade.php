<?php $curr = 'feedback'; ?>
<?php $view = 'feedback_list' ?>
@extends('adminls.layout.index')
@section('content')
    <div class="row"> 
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">
                  Thông tin phản hồi
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
                            <th class="text-center">Nội dung</th>
                            <th class="text-center">Tình trạng</th>                            
                            <th class="text-center">Lên trang chủ</th>
                            <th class="text-center">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feedback as $item)
                        <tr class="odd gradeX " align="center">
                            <td>{{$item->id}}</td>
                            <td>{{$item->customer}}</td>
                            <td>{{$item->content}}</td>  
                            <td>
                                @if($item->top == true)
                                <i class="fa fa-check text-success fa-lg"></i>
                                @else
                                <i class="fa fa-times text-danger fa-lg"></i>                             
                                @endif                                
                            </td>      
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/feedback/sua/{{$item->id}}">Top</a></td>                                                                                                                                                                                                 
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/feedback/xoa/{{$item->id}}"> Xóa</a></td>
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