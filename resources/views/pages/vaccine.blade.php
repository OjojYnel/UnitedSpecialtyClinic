<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="bower_components/admin-lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="bower_components/admin-lte/dist/css/skins/_all-skins.min.css">
   <!-- Morris chart -->
   <link rel="stylesheet" href="bower_components/morris.js/morris.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    
    <header class="main-header">
      <!-- Logo -->
      <a href="FirstController" class="logo">
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
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="../template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../template/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../template/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../template/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../template/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
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
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                    <li><!-- Task item -->
                      <a href="#">
                        <h3>
                          Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                          aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">60% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Make beautiful transitions
                      <small class="pull-right">80%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                      aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
            </ul>
          </li>
          <li class="footer">
            <a href="#">View all tasks</a>
          </li>
        </ul>
      </li>
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="../template/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
          <span class="hidden-xs">Juan Dela Cruz</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="../template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            
            <p>
              Juan Dela Cruz - Web Developer
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<!----------------------------------------------------NAVIGATION----------------------------------->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Juan Dela Cruz</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="w3-select" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <li>
          <a href="../dashboard">
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
            <li><a href="Vaccines.html"><i class="fa fa-circle-o"></i>Vaccines</a></li>
            <li><a href="Report.html"><i class="fa fa-circle-o"></i> Report</a></li>
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
            <li><a href="../PatientRecord/Records.html"><i class="fa fa-circle-o"></i> Records</a></li>
            <li><a href="../PatientRecord/Appointment.html"><i class="fa fa-circle-o"></i> Appointment</a></li>
            <li><a href="../PatientRecord/PatientsReport.html"><i class="fa fa-circle-o"></i> Patient Report</a></li>
          </ul>
        </li>
        <li>
          <a href="../ActivityLog.html">
            <i class="fa fa-book"></i> <span>ActivityLog</span>
          </a>
        </li>
        <li>
          <a href="../UserManagement.html">
            <i class="fa fa-envelope"></i> <span>User Management</span>
          </a>
        </li>
        <li>
          <a href="../Archive.html">
            <i class="fa fa-archive"></i> <span>Archive</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <!--------------------------------------------END of NAVIGATION ----------------------------------------->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vaccines
        <small>United Specialty CLinic</small>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="../dashboard><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Inventory</li>
        <li class="active">Vaccines</li>
      </ol>
      
    </section>
    
    <!---------------------------------------------MAIN CONTENT-------------------------------------------->
    <!-- Main content -->
    <section class="content">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="vaccineTable" class="table no-margin">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Vaccine Type</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Vaccine Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Expiration Date</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Quantity</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Serial Number</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Edit</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" ></th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($vaccines) > 0)
                  @foreach($vaccines as $vaccineRet)
                  <tr role="row" class="odd">
                    <td class="sorting_1">{{$vaccineRet->vaccine_type}}</td>
                    <td>{{$vaccineRet->vaccine_name}}</td>
                    <td>{{$vaccineRet->expiration_date}}</td>
                    <td>{{$vaccineRet->vaccine_quantity}}</td>
                    <td>{{$vaccineRet->serial}}</td>
                    @if($vaccineRet->vaccine_quantity > 0)
                    <td>Available</td>
                    @else
                    <td>Out Of Stock</td>
                    @endif
                  </tr>
                  @endforeach
                  @endif
                  <tr role="row">
                    <td>Rotavirus</td>
                    <td>Rotarix</td>
                    <td>2018-06-24</td>
                    <td>10</td>
                    <td>4CE0460D0G</td>
                    <td style="color:green;">Available</td>
                    <td><a href="edit-supplies.html"><button type='button'> <i class="fa fa-fw fa-edit"></i></a> </td>
                      <td style="color:green;"><button type='button'> Archive</td>
                      </tr>
                      <tr role="row">
                        <td>Smallpox</td>
                        <td>Typhoid</td>
                        <td>2020-07-21</td>
                        <td>0</td>
                        <td>5AB046310G</td>
                        <td style="color:red;">No stock</td>
                        <td> <a href="edit-supplies.html"><button type='button'> <i class="fa fa-fw fa-edit"></i></a> </td>
                          <td style="color:green;"> <button type='button'> Archive </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer clearfix">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add New Vaccine</button> 
                  </div>
                  <!-- /.box-footer -->
                </div>
              </div> 
              
              
            </section>
            <!-- /.content -->
          </div> 
          
          <!-----------------------------------------------END OF MAIN CONTENT--------------------------------------->
          
          
          <!-- /.content-wrapper -->
          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
          </footer>
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Add a new Vaccine</h4>
                  </div>
                  <div class="modal-body">
                    <div class="signup-form">
                      <form action="createvaccine" method="POST">
                        @csrf
                        <thead>
                          <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Vaccine Type: <input type="text" class="form-control" id="" name="vaccine_type"></th>
                          </tr>
                          <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Vaccine Name: <input type="text" class="form-control" id="" name="vaccine_name"></th>
                          </tr>
                          <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Expiration Date: <input type="date" class="form-control" id="" name="expiration_date"></th>
                          </tr>
                          <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Quantity: <input type="number" class="form-control" id="" name="vaccine_quantity"></th>
                          </tr>
                          <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Serial Number: <input type="text" class="form-control" id="" name="serial"></th>
                          </tr>
                        </thead>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                <!-- ./wrapper -->

                <!-- jQuery 3 -->
                <script src="bower_components/jquery/dist/jquery.min.js"></script>
                <!-- jQuery UI 1.11.4 -->
                <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
                <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                <script>
                  $.widget.bridge('uibutton', $.ui.button);
                </script>
                <!-- Bootstrap 3.3.7 -->
                <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- Morris.js charts -->
                <script src="bower_components/raphael/raphael.min.js"></script>
                <script src="bower_components/morris.js/morris.min.js"></script>
                <!-- Sparkline -->
                <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
                <!-- jvectormap -->
                <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
                <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                <!-- jQuery Knob Chart -->
                <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
                <!-- daterangepicker -->
                <script src="bower_components/moment/min/moment.min.js"></script>
                <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
                <!-- datepicker -->
                <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
                <!-- Bootstrap WYSIHTML5 -->
                <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
                <!-- Slimscroll -->
                <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
                <!-- FastClick -->
                <script src="bower_components/fastclick/lib/fastclick.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.min.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="dist/js/pages/dashboard.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="dist/js/demo.js"></script>
              </body>
              </html>