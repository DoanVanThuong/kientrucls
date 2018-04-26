  <!-- Main Header -->
  <header class="main-header">
    <!-- Logo -->
    <a href="/admin/ls" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kiến Trúc</b> LS</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('img/default-user.png')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
                    @if(Auth::user())
                  {{Auth::user()->name}}
                 @endif
                  
                </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('img/default-user.png')}}" class="img-circle" alt="User Image">
                @if(Auth::user())
                <p>{{Auth::user()->name}}</p>                
                 @endif
                
              </li>           
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/" class="btn btn-default btn-flat">Về trang chủ</a>
                </div>
                <div class="pull-right">
                  <a href="/admin/dangxuat" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
