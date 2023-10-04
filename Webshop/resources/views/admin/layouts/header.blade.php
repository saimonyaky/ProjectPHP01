<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{route('indexAdmin')}}" class="navbar-brand"><b>Quản lí bán hàng</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{route('category.index')}}">Danh mục</a></li>
            <li><a href="{{route('product.index')}}">Sản phẩm</a></li>
            <li><a href="{{route('user.index')}}">Tài khoản</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
           
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <span class="hidden-xs">admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Admin
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="{{route('adminLogout')}}" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>