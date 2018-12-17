<!DOCTYPE html>
<html>
<head>
  @include('layouts.head')
</head>
<header class="main-header">
  @include('layouts.header')
</header>
@include('layouts.navigation')
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content">
        <div class="box">
          <div class="box-header">

            @if(count($errors)>0)
            <ul>
              @foreach($errors->all() as $error)

              <div class="row">
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>{{$error}}</strong>
                </div>
              </div>              
              @endforeach
            </ul>
            @endif
            <!-- Alert Message Added Vaccines -->
            <div class="container">
              @if(session()->has('notif'))
              <div class="row">
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Vaccine Type</strong> {{ session()->get('notif') }}
                </div>
              </div>
              @endif
            </div>

            <!-- Alert Message Updated Vaccine type-->
            <div class="container">
              @if(session()->has('update'))
              <div class="row">
                <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Vaccine Type</strong> {{ session()->get('update') }}
                </div>
              </div>
              @endif
            </div>

            <!-- Alert Message Updated Vaccines -->
            <div class="container">
              @if(session()->has('updated'))
              <div class="row">
                <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Vaccine</strong> {{ session()->get('updated') }}
                </div>
              </div>
              @endif
            </div>
          </div>

          <!-- /.box-header -->
          <div class="box-body">
            <table id="userTable" class="table table-bordered dataTable" role="grid" aria-describedby="example2_info">

              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Vaccine Type</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Dose</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">(PHP)Price</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Vaccine Description</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Quantity</th>
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Modify</th>

                @if(Auth::User()->position == "assistant")  
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                  {{ link_to_route('vaccinetypes.create','Add New Type',null,['class'=>'btn btn-primary']) }} 
                </th>
                @endif  
                
              </tr>
              <form action="vaccinetypes" method="POST">
                {{csrf_field()}}
                @foreach($vaccines as $vaccine)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $vaccine->vaccine_type_name }}</td>
                  <td class="sorting_1">{{ $vaccine->vaccine_dose}}</td>
                  <td class="sorting_1">{{ $vaccine->vaccine_price}}</td>               
                  <td class="sorting_1">{{ $vaccine->vaccine_type_description }}</td>
                  <td class="sorting_1">{{$vaccine->vaccine_count}}</td>
                  @if(Auth::User()->position == "assistant")
                  <td> <a href="/vaccinetypes/{{$vaccine->id}}/edit" class="btn btn-info"> Edit </a> </td>
                  @endif  
                  <td> 
                    <button type="submit" name="id_vac" class="btn btn-success" value="{{$vaccine->id}}"> View Vaccines </button>
                  </td>
                </tr>
                @endforeach
              </form>
            </table>
          </div>
          <!--./box-body-->
          <!--./box-->
        </section>
        <!--./content-->
      </div>
      <!--./content-wrapper-->
    </div>
    @include('layouts.footer')
  </body>
  </html>
