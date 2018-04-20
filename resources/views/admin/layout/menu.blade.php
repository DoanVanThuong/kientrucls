<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="/"><i class="fa fa-dashboard fa-fw"></i> Về Trang chủ</a>
                </li>
                <li class="<?php $curr == 'categories' ? 'active' : '' ?>">
                    <a href=""><i class="fa fa-bar-chart-o fa-fw"></i> Loại Sản Phẩm<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                            <li>
                                <a href="admin/loaisanpham/danhsach"><span><i class="fa fa-list" aria-hidden="true"></i>&nbsp;</span>Danh Sách Loại Tin</a>
                            </li>
                            <li>
                                <a href="/admin/loaisanpham/them"><span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>&nbsp;Thêm Loại Tin</a>
                            </li>
                        </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List Product</a>
                        </li>
                        <li>
                            <a href="#">Add Product</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">List User</a>
                        </li>
                        <li>
                            <a href="#">Add User</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>