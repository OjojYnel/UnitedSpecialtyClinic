<!DOCTYPE html>
<html>
<head>
  @include('layouts.head')
</head>
@include('layouts.header')
@include('layouts.navigation')
<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">
    <div class="content-wrapper">
      <section class="content">
        <div class="box">
          <div class="box-header">
            <h1>{{$vaccine_type->vaccine_type_name}}</h1>


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


               <!-- Alert Message Updated Vaccine type-->
               <div class="container">
                @if(session()->has('update'))
                <div class="row">
                  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Vaccine </strong> {{ session()->get('update') }}
                  </div>
                </div>
                @endif
              </div>


            <!-- Alert Message Added -->
            <div class="container">
              @if(session()->has('add'))
              <div class="row">
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <strong>Vaccine</strong> {{ session()->get('add') }}
                </div>
              </div>
              @endif
            </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="userTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Vaccine Name</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Platform(s): activate to sort column ascending">Lot No.</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Expiration Date</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Platform(s): activate to sort column ascending">Date Received</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Platform(s): activate to sort column ascending">Quantity</th>
                  @if(Auth::User()->position == "assistant")  
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Platform(s): activate to sort column ascending">Adjust</th>
                  @endif
                </tr>
              </thead>             
              <!--./Fetch data table-start-->
              <tbody>
                @foreach($vaccine_lists as $vac)
                <tr>
                  <td>{{$vac->vaccine_name}}</td>
                  <td>{{$vac->vaccine_lot_number}}</td>
                  <td>{{$vac->vaccine_expiration_date}}</td>
                  <td>{{$vac->vaccine_receive_date}}</td>
                  <td>{{$vac->quantity}}</td>
                  @if(Auth::User()->position == "assistant") 
                  <td>
                    <button  data-vacname="{{$vac->vaccine_name}}" 
                      data-receive="{{$vac->vaccine_receive_date}}" 
                      data-qty="{{$vac->quantity}}" 
                      data-vaclot="{{$vac->vaccine_lot_number}}"  
                      data-expdate="{{$vac->vaccine_expiration_date}}" 
                      data-vacstatus="{{$vac->status}}" 
                      data-vacid={{$vac->id}} data-toggle="modal" data-target="#edit">
                      <i class="fa fa-fw fa-edit"> </i>
                    </button>
                  </td>
                  @endif  
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @if(Auth::User()->position == "assistant")
          <div class="box-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#myVaccineModal">Add New Vaccine</a>
          </div>
          @endif
          <!--./Add-Modal Start-->
          <div class="myVaccineModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="/add_vaccine"  method="POST">
                  {{ csrf_field() }}
                  <div class="modal-body">
                    @include('pages.addnewvaccinemodal')
                  </div>
                </form>
              </div>
            </div>   
            <!--./Add-Modal End-->
            
            <!--/. edit modal start --> 
            <div class="modal fade" id="edit">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Edit New Vaccine</h4>
                    </div>
                    <form action="/edit_vaccine"  method="POST">
                      {{ csrf_field() }}
                      <div class="modal-body">
                        @include('pages.totalform')
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!--/. edit modal end -->
              </div>
              <!--./box-->
            </section>
            <!--./content-->
          </div>
          <!--./content-wrapper-->
        </div>
        <!--./wrapper-->
        @include('layouts.footer')
        <script>
          $(document).ready( function () {
            $('#userTable').DataTable();
          } );
        </script>

        <!--./Edit Modal Script Start -->
        <script>
          $('#edit').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var name = button.data('vacname')
            var exp = button.data('expdate')
            var qtyno = button.data('qty')
            var lotno = button.data('vaclot')
            var statu = button.data('vacstatus')
            var receivedate = button.data('receive')
            var vac_id = button.data('vacid')
            var modal = $(this)
            
            modal.find('.modal-body #vacname').val(name);
            modal.find('.modal-body #Receive').val(receivedate);
            modal.find('.modal-body #expdate').val(exp);
            modal.find('.modal-body #qty').val(qtyno);
            modal.find('.modal-body #stat').val(statu); 
            modal.find('.modal-body #lot').val(lotno);    
            modal.find('.modal-body #vac_id').val(vac_id);
          })
        </script>
        <!--./Edit Modal Script End -->
      </body>
      </html>
      