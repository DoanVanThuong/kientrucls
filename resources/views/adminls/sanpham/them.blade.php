<?php $curr = 'products'; ?>
<?php $view = 'products_add'; ?>
@extends('adminls.layout.index')

@section('content')
<div class="box box-primary">
        <div class="box-header with-border text-center ">
          <h3 class="box-title text-primary">Thêm sản phẩm mới</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="admin/sanpham/them" method="POST" enctype="multipart/form-data">  
            @include('adminls.functions.alert')
            <div class="box-body">
                <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <select class="form-control" name="loaisanpham">
                        @foreach($loaisanpham as $item)                  
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label >Tên Sản phẩm <span class="text-danger">*</span></label>
                    <input type="text" name="tenSP" class="form-control"  placeholder="Nhập tên ">
                </div>
                <div class="form-group">
                    <label >Mã Sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="maSP" class="form-control"  placeholder="Nhập mã">
                </div>
                <div class="form-group">
                    <label >Giá <span class="text-danger">*</span></label>
                    <input type="number" name="giaSP" class="form-control"  placeholder="Nhập giá">
                    </div>
                <div class="form-group">
                    <label >Bảo hành <span class="text-danger">*</span></label>
                    <input type="text" name="bhSP" class="form-control"  placeholder="Nhập thời gian bảo hành">
                    </div>
                <div class="form-group">
                    <label>Tình trạng<span class="text-danger">*</span></label>
                    <input type="text" name="tinhtrangSP" class="form-control"  placeholder="Nhập tình trạng">
                    </div>
                <div class="form-group">
                    <label>Kích thước <span class="text-danger">*</span></label>
                    <input type="text" name="kichthuocSP" class="form-control" placeholder="Nhập kích thước">
                    </div>            
                <div class="form-group">
                    <label >Miêu tả</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Thông tin mô tả"></textarea>
                </div>
                <div class="form-group">
                    <label for="InputFile">Ảnh đại diện<span class="text-danger">*</span></label>
                    <input type="file" name="anh" id="InputFile">       
                </div>
            </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
            <button type="reset" class="btn btn-danger pull-right">Nhập lại</button>            
          </div>
          {!!csrf_field()!!}
        </form>
      </div>
@stop