  {{-- hàm hiển thị lỗi --}}
  @if( count($errors) > 0 )
  <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      @foreach($errors ->all() as $item)
      <h4><i class="icon fa fa-check"></i>   {{ $item }} </h4>
     
      @endforeach
  </div>
@endif
@if( session('thongbao') )
  <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-check"></i>   {{ session('thongbao') }}</h4>
  </div>
@elseif(session('loi'))
<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i>   {{ session('loi') }}</h4>
       
    </div>
@endif()
{{--  --}}