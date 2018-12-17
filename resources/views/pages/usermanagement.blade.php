<!DOCTYPE html>
<html>

@include('layouts.head')

<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">


    @include('layouts.header')


    <!-- NAVIGATION -->
    @include('layouts.navigation')
    <!-- END -->
    <div class="content-wrapper">
      <section class="content">
        <div class="container">
          @if(session()->has('add'))
          <div class="row">
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>User</strong> {{ session()->get('add') }}
            </div>
          </div>
          @endif
        </div>
        
        <div class="box box-solid box-primary">
          <div class="box-header">
            <h3 class="box-title">Registered Users</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              
             <table id="recordsTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
                <tr role="row">
                  <th>FIRST NAME</th>
                  <th>LAST NAME</th>
                  <th>ROLE</th>
                  <th>USERNAME</th>
                  <th>ADDRESS</th>
                  <th>CONTACT</th>
                </tr>
              </thead>
              <tbody>
                
               @if(count($employee)> 0)
               @foreach ($employee as $employee)
               
               <tr style="cursor: pointer" data-toggle="modal" data-target="#addModal">
                <td>{{$employee->employee_fname}}</td>
                <td>{{$employee->employee_lname}}</td>
                <td>{{$employee->position}}</td>
                <td>{{$employee->username}}</td>
                <td>{{$employee->address}}</td>
                <td>0{{$employee->contact}}</td>
              </tr>
              @endforeach

              @endif
            </tbody>
            
          </table></div></div>
          <div class="box-footer clearfix">
            
            <form role="form" action="/patient-form" method="post">
              @csrf
              <input type="hidden" name="origin" value="create">
              <button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-info btn-lg pull-right">Add User</button>
            </form>
            
          </div>
        </div>
        <!-- /.box-body -->
      </div>
    </section>

    @include('layouts.footer')

    <!-- Modal -->
    <div id="addModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add User</h4>
          </div>
          <div class="modal-body">
           
            <form method="POST" action="/addUser">
              @csrf

              <div class="form-group row">
                <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                <div class="col-md-8">
                  <select id="position"  class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" required autofocus>
                    <option value="doctor">Doctor</option>
                    <option value="assistant">Assistant</option>
                  </select>
                  @if ($errors->has('position'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('position') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="employee_lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                <div class="col-md-8">
                  <input id="employee_lname" type="text" class="form-control{{ $errors->has('employee_lname') ? ' is-invalid' : '' }}" name="employee_lname" value="{{ old('employee_lname') }}" required autofocus>

                  @if ($errors->has('employee_lname'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('employee_lname') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="employee_fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                <div class="col-md-8">
                  <input id="employee_fname" type="text" class="form-control{{ $errors->has('employee_fname') ? ' is-invalid' : '' }}" name="employee_fname" value="{{ old('employee_fname') }}" required autofocus>

                  @if ($errors->has('employee_fname'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('employee_fname') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                <div class="col-md-8">
                  <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

                  @if ($errors->has('address'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                <div class="col-md-8">
                  <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required autofocus>

                  @if ($errors->has('contact'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contact') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                <div class="col-md-8">
                  <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                  @if ($errors->has('username'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-8">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-8">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">
                {{ __('Register User') }}
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>

    <script>
      $(document).ready( function () {
        $('#recordsTable').DataTable();
        
      } );
    </script>
    <script type="text/javascript">
      @if (count($errors) > 0)
      $('#addModal').modal('show');
      @endif
    </script>
  </body>
  </html>
