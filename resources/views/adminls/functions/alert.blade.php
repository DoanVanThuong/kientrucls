  {{-- hàm hiển thị lỗi --}}
  @if( count($errors) > 0 )
  <div class="alert alert-danger">
      @foreach($errors ->all() as $item)
       {{ $item }} <br>
      @endforeach
  </div>
@endif
@if( session('thongbao') )
  <div class="alert alert-success">
      {{ session('thongbao') }}
  </div>
@elseif(session('loi'))
<div class="alert alert-danger">
        {{ session('loi') }}
    </div>
@endif()
{{--  --}}