<!DOCTYPE html>
<html>
<head>
  @include('layouts.head')
  <style>
  .btn-margin-left{
    margin-left: 15%;
  }
  .btn-margin-right{
    margin-right: 15%;
  }
</style>
</head>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <header class="main-header">

      @include('layouts.header')

    </header>
    <!-- NAVIGATION -->
    @include('layouts.navigation')
    <!-- END -->
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>{{count($vaccines)}}</h3>

                <p>Vaccines</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="rendered_vaccines" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <!-- <div class="col-lg-3 col-xs-6">
            
            <div class="small-box bg-green">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3> {{count($employees)}}</h3>  
                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>{{count($patients)}}</h3>

                <p>Total Number of Patients</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Search bar)-->
            <div class="input-group margin">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-normal">Find!</button>
              </span>
            </div>
            <!-- /.nav-tabs-custom -->

            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">December 1,2018</h3>
                <!--Search Existing Patient-->
                <form action="/search" method="POST" role="search">
                  {{ csrf_field() }}
                  <div class="input-group">
                    <input type="text" class="form-control" name="searchInput"
                    placeholder="Search users"> <span class="input-group-btn">
                      <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table id="patientTable" class="table no-margin">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Type of Service</th>
                          <th>
                          </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  @if(Auth::User()->position == "assistant")
                  <div class="box-footer clearfix">
                    <a href="patient-form"> <button type="submit" class="btn btn-info pull-right">Add Patient</button></a>
                  </div>
                  @endif
                </div>
              </div>
            </div>
          </section>
        </div>




        @include('layouts.footer')
      </div>
    </body>
    </html>
