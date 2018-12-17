<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
      @if(Auth::User()->position == "assistant")
        <img src="{{asset('bower_components/admin-lte/dist/img/avatar.png')}}" class="img-circle" alt="User Image">
      @endif
      @if(Auth::User()->position == "doctor")
        <img src="{{asset('bower_components/admin-lte/dist/img/davatar.png')}}" class="img-circle" alt="User Image">
      @endif
      </div>
      <div class="pull-left info">
        <p>{{ Auth::User()->employee_fname }} {{ Auth::User()->employee_lname }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <li>
        <a href="/dashboard">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Inventory</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/vaccinetypes"><i class="fa fa-circle-o"></i>Vaccines</a></li>
          <li><a href="/rendered_vaccines"><i class="fa fa-circle-o"></i> Report</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Patients Records</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/create"><i class="fa fa-circle-o"></i> Records</a></li>
          <li><a href="/appointment"><i class="fa fa-circle-o"></i> Appointment</a></li>
          <li><a href="/patient-form"><i class="fa fa-circle-o"></i> Patient Form</a></li>
          <li><a href="/create"><i class="fa fa-circle-o"></i> Patient Profile</a></li>
        </ul>
      </li>
      <li>
        <!-- <a href="/ActivityLog">
          <i class="fa fa-book"></i> <span>ActivityLog</span>
        </a> -->
      </li>
      @if(Auth::User()->position == "assistant")
      <li>
        <a href="/UserManagement">
          <i class="fa fa-envelope"></i> <span>User Management</span>
        </a>
      </li>
      @endif
      <li>
        <a href="/Archive">
          <i class="fa fa-archive"></i> <span>Archive</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>