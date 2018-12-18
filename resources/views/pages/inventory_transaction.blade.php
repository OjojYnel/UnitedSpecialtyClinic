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
              <thead><h1>NAME OF TYPES<h1>
                <tr role="row" class="odd">
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Lot Number</th>                  
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Adjustment Date</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Adjustment Reason</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Patient Name</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Increased Amount</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Decreased Amount</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Assistant Responsible</th>
                </tr>
              </thead>             
              <!--./Fetch data table-start-->
              <tbody>

                  
                  <tr>
                    <!--.Vaccine Types-->
                    
                    <!--.Available Count-->
                    <td class="sorting_1" >
                   </td>

                   <!--.Expired Count-->
                   <td class="sorting_1">
                   </td>

                   <!--.Returned Count-->
                   <td class="sorting_1">
                   </td>

                   <!--.Damaged Count-->
                   
                   <td class="sorting_1">
                  </td> 

                  <!--.Consumed Count -->
                  <td class="sorting_1">

                  </td> 
                </tr>


                
            </tbody>
          </table>
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
</body>
</html>
