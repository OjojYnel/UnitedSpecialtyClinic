<header class="main-header">
  <!-- Logo -->
  <a href="dashboard" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>USC</span>
      <!-- logo for regular state and mobile devices -->
    <span class="logo-lg" style="font-size: 17px;">United Specialty Clinic</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                    page and may cause design problems
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-users text-red"></i> 5 new members joined
                  </a>
                </li>
                
                <li>
                  <a href="#">
                    <i class="fa fa-user text-red"></i> You changed your username
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="/Notifications">View all</a></li>
          </ul>
        </li>
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            @if(Auth::User()->position == "assistant")
              <img src="{{asset('bower_components/admin-lte/dist/img/avatar.png')}}" class="user-image" alt="User Image">
            @endif
            @if(Auth::User()->position == "doctor")
              <img src="{{asset('bower_components/admin-lte/dist/img/davatar.png')}}" class="user-image" alt="User Image">
            @endif
              <span class="hidden-xs">{{ Auth::User()->employee_fname }} {{ Auth::User()->employee_lname }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
               @if(Auth::User()->position == "assistant")
              <img src="{{asset('bower_components/admin-lte/dist/img/avatar.png')}}" class="img-circle" alt="User Image">
            @endif
            @if(Auth::User()->position == "doctor")
              <img src="{{asset('bower_components/admin-lte/dist/img/davatar.png')}}" class="img-circle" alt="User Image">
            @endif
              <p>
                {{ Auth::User()->employee_fname }} {{ Auth::User()->employee_lname }}
                <small>{{ Auth::User()->position}}</small>
              </p>
            </li>
            
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>