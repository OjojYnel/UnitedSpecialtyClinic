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
          
          <div class="box-body">
            <table border="1" id="printTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
              <thead>
                <tr role="row" class="odd">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Vaccine Type</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Available</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Expired</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Returned</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Damaged</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Consumed</th>                  
                </tr>
              </thead>             
              <!--./Fetch data table-start-->
              <tbody>
                <form action="vaccinetypes" method="POST">
                  {{csrf_field()}}

                  @foreach($vaccines as $vaccine)
                  
                  <tr>
                    <!--.Vaccine Types-->
                    <td>{{ $vaccine->vaccine_type_name }}</td>
                    
                    <!--.Available Count-->
                    <td class="sorting_1" >
                     {{ $vaccine->vaccine_count }}
                   </td>

                   <!--.Expired Count-->
                   <td class="sorting_1">
                     {{ $vaccine->vaccine_count2 }}
                   </td>

                   <!--.Returned Count-->
                   <td class="sorting_1">
                     {{ $vaccine->vaccine_count3 }}
                   </td>

                   <!--.Damaged Count-->
                   
                   <td class="sorting_1">
                    {{ $vaccine->vaccine_count4 }}
                  </td> 

                  <!--.Consumed Count -->
                  <td class="sorting_1">
                    {{ $vaccine->vaccine_count5 }}
                  </td> 
                </tr>
                @endforeach

                
              </form>
            </tbody>
          </table>
        </div>       
        <div class="box-footer">
          <button class="btn btn-primary pull-right">Print Report</button>   
      </div>
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
