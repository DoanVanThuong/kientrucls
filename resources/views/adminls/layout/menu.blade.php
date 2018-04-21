  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="/"><i class="fa fa-link"></i> <span>Trang chủ</span></a></li>
            <li class="treeview {{$curr == 'categories' ? 'active' : ''}}  ">
            <a href="javascript:void(0)   "><i class="fa fa-link "></i> <span>Loại sản phẩm</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{$view == 'categories_list' ? 'active' : ''}}  "><a href="admin/loaisanpham/danhsach">Danh sách</a></li>
                <li class="{{$view == 'categories_add' ? 'active' : ''}} "><a href="admin/loaisanpham/them">Thêm loại SP</a></li>
            </ul>
            </li>
            <li class="treeview {{$curr == 'products' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-link "></i> <span>Sản phẩm</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'products_list' ? 'active' : ''}}  "><a href="admin/sanpham/danhsach">Danh sách</a></li>
                    <li class="{{$view == 'products_add' ? 'active' : ''}} "><a href="admin/sanpham/them">Thêm SP</a></li>
                </ul>
            </li>
            <li class="treeview {{$curr == 'news' ? 'active' : ''}}  ">
                <a href="javascript:void(0)"><i class="fa fa-link "></i> <span>Tin Tức</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{$view == 'news_list' ? 'active' : ''}}  "><a href="admin/tintuc/danhsach">Danh sách tin</a></li>
                    <li class="{{$view == 'news_add' ? 'active' : ''}} "><a href="admin/tintuc/them">Thêm tin mới</a></li>
                </ul>
            </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>