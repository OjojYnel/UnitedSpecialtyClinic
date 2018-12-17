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
        <div class="row">
          
          
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Search bar)-->
            <div class="input-group margin">
              <input type="text" name="search" id="search" class="form-control" placeholder="Search Patient Data" />
              <span class="input-group-btn">
                <button type="button" class="btn btn-info btn-normal">Search</button>
              </span>
            </div>
            <div class="container">
              <!-- Trigger the modal with a button -->
              
              <div class="container">
                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#recordsmodel">Add</button> 
                <!-- Modal -->
                <div id="recordsmodel" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    @if(count($errors)>0)
                    <ul>
                      @foreach($errors->all() as $error)
                      <li class="alert alert-danger">{{$error}}</li>
                      @endforeach
                    </ul>
                    @endif
                    <div class="modal-content">
                      <button type="button" class="close" data-dismiss="modal" style="position: relative;right: 9px;">&times;</button>
                      <section class="content">
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">Patient Form</h3>
                          </div>
                          <center><h4>PERSONAL DETAILS</h4></center>
                          <form role="form" action="/addPatient" method="post" id="patientform">
                            @csrf
                            <div class="box-body">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label >First Name</label>
                                  <input type="text" class="form-control"  placeholder="First Name" name="fname" required="required">
                                </div>  
                                <div class="form-group col-md-6">
                                  <label >Last Name</label>
                                  <input type="text" class="form-control"  placeholder="Last Name" name="lname" required="required">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-3">
                                  <label for="inputState">Sex</label>
                                  <select id="inputState" class="form-control" name="sex" required="required">
                                    <option selected>Choose...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-2">
                                  <label>Age</label>
                                  <input type="number" class="form-control"  placeholder="Age" name="age" min="1" max="20" required="required">
                                </div>
                                <div class="form-group col-md-7">
                                  <label >Date of Birth</label>
                                  <input type="date" class="form-control"  placeholder="Date of Birth" name="dofbirth" required="required">
                                </div>
                              </div>
                              
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label >Mother's Name</label>
                                  <input type="text" class="form-control"  placeholder="Mother's Name" name="mothername" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                  <label >Occupation</label>
                                  <input type="text" class="form-control"  placeholder="Occupation" name="moccu" required="required">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label >Father's Name</label>
                                  <input type="text" class="form-control"  placeholder="Father's Name" name="fathername" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                  <label >Occupation</label>
                                  <input type="text" class="form-control"  placeholder="Occupation" name="foccu" required="required">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label >Address</label>
                                  <input type="text" class="form-control"  placeholder="Address" name="address" required="required">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label >Contact No:</label>
                                  <input type="text" class="form-control"  placeholder="Contact No" name="connum" required="required">
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputState">Type of Delivery:</label>
                                    <select id="inputState" class="form-control" name="typeofdelivery" required="required">
                                      <option selected>Choose...</option>
                                      <option value="Vaginal Delivery">Vaginal Delivery</option>
                                      <option value="Natural Delivery">Natural Delivery</option>
                                      <option value="Vacuum Extraction">Vacuum Assisted Delivery / Vacuum Extraction</option>
                                      <option value="Forceps Delivery">Forceps Delivery</option>
                                      <option value="C-Section">Cesarian Section (C-Section)</option>
                                      <option value="Vaginal Birth After Cesarian">Vaginal Birth After Cesarian</option>
                                    </select>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label >Newborn Screening:</label>
                                      <input type="text" class="form-control"  placeholder="Newborn Screening" name="newscreen" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label >Newborn Hearing Test:</label>
                                      <input type="text" class="form-control" placeholder="Newborn Hearing Test" name="nht" required="required">
                                    </div>
                                  </div>

                                  <center><h4>BIRTH HISTORY</h4></center>
                                  <form role="form">
                                    <div class="box-body">
                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputState">Blood Type:</label>
                                          <select id="inputState" class="form-control" name="btype" required="required">
                                            <option selected>Choose...</option>
                                            <option value="A">Type A</option>
                                            <option value="B">Type B</option>
                                            <option value="AB">Type AB</option>
                                            <option value="O">Type O</option>
                                            <option value="A+">Type A+</option>
                                            <option value="A-">Type A-</option>
                                            <option value="B+">Type B+</option>
                                            <option value="B-">Type B-</option>
                                            <option value="AB+">Type AB+</option>
                                            <option value="AB-">Type AB-</option>
                                          </select>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-4">
                                            <label >Birth Weight:</label>
                                            <input type="number" class="form-control" id="birth_weight" placeholder="Birth Weight" name="bw" min="0"  required="required">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label >Birth Length:</label>
                                            <input type="number" class="form-control" id="birth_length" placeholder="Birth Length" name="bl" min="0" required="required">
                                          </div>
                                        </div>
                                        <div class="form-row">
                                          <div class="form-group col-md-4">
                                            <label >Head Circumference:</label>
                                            <input type="number" class="form-control" id="head_cire" placeholder="Head Circumference" name="headcirc" min="0" required="required">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label >Chest Circumference:</label>
                                            <input type="number" class="form-control" id="chest_cire" placeholder="Chest Circumference" name="chestcirc" min="0" required="required">
                                          </div>
                                          <div class="form-group col-md-4">
                                            <label >Abdominal Circumference:</label>
                                            <input type="number" class="form-control" id="abdominal_cire" placeholder="Abdominal Circumference" name="abdocirc" min="0" required="required">
                                          </div>
                                        </div>



                                        
                                        
                                        <div class="box-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#register">Add Patient</button>
                                        </div>

                                        
                                      </form>
                                    </div>
                                  </div>
                                </section>
                              </div>

                            </div>
                          </div>
                          
                          
                          
                          
                          
                          
                          
                          <button type="button" class="btn btn-primary btn-md">Edit</button>    

                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">
                            
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-body">
                                <div class="signup-form">
                                  <form action="/examples/actions/confirmation.php" method="post">
                                    <p class="hint-text">United Specialty Clinic</p>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-xs-6"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                                        <div class="col-xs-6"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                                      </div>          
                                    </div>
                                    <div class="form-group">
                                      <input type="role" class="form-control" name="role" placeholder="Mother's Name" required="required">
                                    </div>
                                    <div class="form-group">
                                      <input type="address" class="form-control" name="address" placeholder="Date of Birth" required="required">
                                    </div>
                                    <div class="form-group">
                                      <input type="form-group" class="form-control" name="email" placeholder="Sex" required="required">
                                    </div>
                                    <div class="form-group">
                                      <input type="contact" class="form-control" name="contact" placeholder="Status" required="required">
                                    </div>
                                    
                                  </div>
                                  
                                </div>
                              </div>
                              
                            </div>  

                            <!-- /.nav-tabs-custom -->        
                          </section>

                          <!-- /.Left col -->
                          <!-- right col (We are only adding the ID to make the widgets sortable)-->
                          <!-- right col -->
                        </div>
                        <!-- /.row (main row) -->
                        
                        <!-- Left col -->
                        
                        <!-- Custom tabs (Search bar)-->
                        
                        
                        
                        <!-- /.nav-tabs-custom -->        
                        
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <!-- right col -->
                        
                        

                        <div class="box">
                          <div class="box-header">
                            <h3 class="box-title">List of Patients</h3>


                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                              <tbody>
                                <tr>
                                  <th>Fist Name</th>
                                  <th>Last Name</th>
                                  <th>Birth Date</th>
                                  <th>Address</th>
                                  <th>Gender</th>
                                  <th>Father's Name</th>
                                  <th>Mother's Name</th>
                                </tr>
                              </tbody>
                              <script>
                                $(document).ready(function(){
                                  
                                 fetch_customer_data();
                                 
                                 function fetch_customer_data(query = '')
                                 {
                                  $.ajax({
                                   url:"{{ route('live_search.action') }}",
                                   method:'GET',
                                   data:{query:query},
                                   dataType:'json',
                                   success:function(data)
                                   {
                                    $('tbody').html(data.table_data);
                                    $('#total_records').text(data.total_data);
                                  }
                                })
                                }
                                
                                $(document).on('keyup', '#search', function(){
                                  var query = $(this).val();
                                  fetch_customer_data(query);
                                });
                              });
                            </script>
                            
                          </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      

                    </section>
                  </div>

                  <footer class="main-footer">
                    @include('layouts.footer')
                  </footer>

                </body>
                </html>
