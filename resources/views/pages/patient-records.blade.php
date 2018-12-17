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
        <div class="box box-solid box-primary">
          <div class="box-header">
            <h3 class="box-title">List of Patients</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
              
             <table id="printTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
                <tr role="row">
                  <th>FIRST NAME</th>
                  <th>LAST NAME</th>
                  <th>MIDDLE NAME</th>
                  <th>DATE OF BIRTH</th>
                  <th>GENDER</th>
                  <th>STATUS</th>
                </tr>
              </thead>
              <tbody>
                
               @if(count($patients)> 0)
               @foreach ($patients as $patientRet)
               
               <tr style="cursor: pointer" data-toggle="modal" data-target="#viewModal">
                <td><a href="/create/{{$patientRet->id}}">{{$patientRet->patient_fname}}</a></td>
                <td>{{$patientRet->patient_lname}}</td>
                <td>{{$patientRet->patient_mname}}</td>
                <td>{{$patientRet->patient_bday}}</td>
                <td>{{$patientRet->patient_gender}}</td>
                <td></td>
              </tr>
              @endforeach

              @endif
            </tbody>
            
          </table></div></div>
          <div class="box-footer">
          <button class="btn btn-primary pull-right">Print Report</button>   
      </div>
        </div>
        <!-- /.box-body -->
      </div>
    </section>

    @include('layouts.footer')
    <script>
  $(document).ready( function () {
    $('#printTable').DataTable();
  } );
  function printData()
    {
      var divToPrint=document.getElementById("printTable");
      newWin= window.open("");
      newWin.document.write(divToPrint.outerHTML);
      newWin.print();
      newWin.close();
    }

    $('button').on('click',function(){
    printData();
    })
</script>



  </body>
  </html>
