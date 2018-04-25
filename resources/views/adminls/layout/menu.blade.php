  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('img\projects\nhaco\rWKp_004.JPG')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          @if(Auth::user())
                <p>{{Auth::user()->name}}</p>
          @endif
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li  class="{{$view == 'dashboard' ? 'active' : ''}}  "><a href="/admin"><i class="fa fa-desktop"></i> <span>Trang quản trị</span></a></li>
            <li class="treeview {{$curr == 'categories' ? 'active' : ''}}  ">
            <a href="javascript:void(0)   "><i class="fa fa-industry "></i> <span>Loại sản phẩm</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{$view == 'categories_list' ? 'active' : ''}}  "><a href="admin/loaisanpham/danhsach"><i class="fa fa-list "></i>Danh sách</a></li>
                <li class="{{$view == 'categories_add' ? 'active' : ''}} "><a href="admin/loaisanpham/them"><i class="fa fa-plus "></i>Thêm loại SP</a></li>
            </ul>
            </li>
            <li class="treeview {{$curr == 'products' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-product-hunt "></i> <span>Sản phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'products_list' ? 'active' : ''}}  "><a href="admin/sanpham/danhsach"><i class="fa fa-list "></i>Danh sách</a></li>
                    <li class="{{$view == 'products_add' ? 'active' : ''}} "><a href="admin/sanpham/them"><i class="fa fa-plus "></i>Thêm SP</a></li>
                </ul>
            </li>
            <li class="treeview {{$curr == 'news' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-newspaper-o "></i> <span>Tin Tức</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'news_list' ? 'active' : ''}}  "><a href="admin/tintuc/danhsach"><i class="fa fa-list "></i>Danh sách tin</a></li>
                    <li class="{{$view == 'news_add' ? 'active' : ''}} "><a href="admin/tintuc/them"><i class="fa fa-plus "></i>Thêm tin mới</a></li>
                </ul>
            </li>
            <li class="treeview {{$curr == 'project_category' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-industry "></i> <span>Loại Dự Án</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'project_category_list' ? 'active' : ''}}  "><a href="admin/loaiduan/danhsach"><i class="fa fa-list "></i>Danh sách loại dự án</a></li>
                </ul>
            </li>
            <li class="treeview {{$curr == 'project' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-building "></i> <span>Dự án</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'project_list' ? 'active' : ''}}  "><a href="admin/duan/danhsach"><i class="fa fa-list "></i>Danh sách dự án</a></li>
                </ul>
            </li>
            <li class="treeview {{$curr == 'gallery' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-file-image-o "></i> <span>Bộ sưu tập</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'gallery_list' ? 'active' : ''}}  "><a href="admin/bosuutap/danhsach"><i class="fa fa-list "></i>Công trình kiến trúc </a></li>
                    <li class="{{$view == 'gallery_furniture_list' ? 'active' : ''}}  "><a href="admin/bosuutap/congtrinhnoithat"><i class="fa fa-list "></i>Công trình nội thất</a></li>                    
                </ul>
            </li>
            <li class="treeview {{$curr == 'customer' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-male "></i> <span>Khách hàng</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'customer_list' ? 'active' : ''}}  "><a href="admin/khachhang/danhsach"><i class="fa fa-list "></i>Danh sách khách hàng</a></li>
                    <li class="{{$view == 'customer_add' ? 'active' : ''}}  "><a href="admin/khachhang/danhsach"><i class="fa fa-plus "></i>Thêm </a></li>                    
                </ul>
            </li>
            <li class="treeview {{$curr == 'inbox' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-inbox "></i> <span>Inbox</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'inbox_list' ? 'active' : ''}}  "><a href="admin/inbox/danhsach"><i class="fa fa-list "></i>Inbox</a></li>
                    {{-- <li class="{{$view == 'inbox_add' ? 'active' : ''}}  "><a href="admin/khachhang/danhsach"><i class="fa fa-plus "></i>Thêm </a></li>                     --}}
                </ul>
            </li>
            <li class="treeview {{$curr == 'slide' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-picture-o "></i> <span>Slide</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'slide_list' ? 'active' : ''}}  "><a href="admin/slide/danhsach"><i class="fa fa-list "></i>Xem</a></li>
                    <li class="{{$view == 'slide_add' ? 'active' : ''}}  "><a href="admin/slide/them"><i class="fa fa-plus "></i>Thêm </a></li>                    
                </ul>
            </li>
            <li><a href="/admin/dangky"><i class="fa fa-user"></i> <span>Thêm user</span></a></li>
            <li><a href="/admin/dangxuat"><i class="fa fa-logout"></i> <span>Thoát</span></a></li>
            
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>