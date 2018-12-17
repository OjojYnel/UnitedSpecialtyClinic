<!DOCTYPE html>
<html>
<head>
  @include('layouts.head')
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
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
             <form action="/queue" method="POST">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="box box-primary">
                  <div class="form-row">
                    <div class="form-group col-md-3 pull-left">
                      <label for="inputState">Type of Service</label><br/>
                      <form action="">
                        <input type="radio" name="service" value="Check-Up"> Check-Up
                        <input type="radio" name="service" value="Vaccine"> Vaccine
                        <input type="radio" name="service" value="Check-Up & Vaccine"> Both
                      </form>
                    </div>
                    <div class="form-group col-md-2 pull-middle">
                      <label for="inputState">Status</label>
                      <select id="inputState" class="form-control" name="status">
                        <option selected>Choose...</option>
                        <option value="Waiting">Waiting</option>
                        <option value="On-Going">On Going</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="box-body">
                      <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <tr role="row" class="odd">      
                          <td class="sorting_1">First Name</td>
                          <td>Last Name</td>
                          <td>Gender</td>
                          <td>Birth Date</td>
                          <td>Address</td>
                          <td>Father's Name</td>
                          <td>Mother's Name</td>
                          <td>Father's Occupation</td>
                          <td>Mother's Occupation</td>
                          <td>Contact Number</td>
                        </tr>
                        <tbody>
                         @if(count($searches) > 0)
                         @foreach($searches as $search)
                         <tr>
                          <td><input type="radio" name="id" value="{{$search->id}}"></td>
                          <td>{{$search->patient_fname}}</td>
                          <td>{{$search->patient_lname}}</td>
                          <td>{{$search->patient_gender}}</td>
                          <td>{{$search->patient_bday}}</td>
                          <td>{{$search->patient_address}}</td>
                          <td>{{$search->father_name}}</td>
                          <td>{{$search->mother_name}}</td>
                          <td>{{$search->father_occupation}}</td>
                          <td>{{$search->mother_occupation}}</td>
                          <td>{{$search->contact_number}}</td>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                    </table>
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label>Weight</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Weight" name="moname">
                      </div>
                      <div class="form-group col-md-3">
                        <label>Height</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Height" name="moname">
                      </div>
                      <div class="form-group col-md-3">
                        <label >Pulse</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Pulse" name="moname">
                      </div>
                      <div class="form-group col-md-3">
                        <label>Temperature</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Temperature" name="moname">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Add to Queue</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>    
  @include('layouts.footer')
  <script>
    $(document).ready( function () {
      $('#recordsTable').DataTable();
    } );
  </script>            
</div>
</body>
</html>