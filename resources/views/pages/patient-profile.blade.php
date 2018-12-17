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
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                @if($patient->patient_gender == "Female")
                <img class="profile-user-img img-responsive img-circle" src="{{asset('img/baby-girl.png')}}" alt="Patient profile picture">
                @endif
                @if($patient->patient_gender == "Male")
                <img class="profile-user-img img-responsive img-circle" src="{{asset('img/baby-boy.png')}}" alt="Patient profile picture">
                @endif
                <h3 class="profile-username text-center">{{$patient->patient_fname}} {{$patient->patient_lname}}</h3>
              </div>
              <!-- /.box-body -->
            </div>
            <a href="#patient-info" data-toggle="tab">
              <div class="small-box bg-teal" >
                <div class="inner">
                  <img width="100%" src="{{asset('img/personal-info.png')}}" alt="personal info tab">
                </div>
              </div>    
            </a>

            @if(Auth::User()->position == "assistant")
            <a href="#vitalSigns" data-toggle="tab">
              <div class="small-box bg-aqua" >
                <div class="inner">
                  <img  width="100%" src="{{asset('img/vitalSigns.png')}}" alt="vitalSigns tab">
                </div>
              </div>    
            </a>
            @endif
            @if(Auth::User()->position == "doctor")
            <a  class="mask flex-center" href="#checkup" data-toggle="tab">
              <div class="small-box bg-aqua " >
                <div class="inner">
                  <img  width="100%" src="{{asset('img/checkup.png')}}" alt="check up tab">
                </div>
              </div>    
            </a>
            @endif

            <a href="#immunization" data-toggle="tab">
              <div class="small-box bg-teal" >
                <div class="inner">
                  <img  width="100%" src="{{asset('img/immunization.png')}}" alt="immunization tab">
                </div>
              </div>    
            </a>
            <a href="#med_record" data-toggle="tab">
              <div class="small-box bg-aqua" >
                <div class="inner">
                  <img  width="100%" src="{{asset('img/med-record.png')}}" alt="medical record tab">
                </div>
              </div>    
            </a>
            
          </div>
          

          
          <!-- /.box -->
          
          <!-- /.col -->
          <div class="col-md-9">
            <div class="nav-tabs-custom">
              <div class="tab-content">
                <!------------------------------------------Patient Information Tab--------------------------------------->
                <div class="active tab-pane" id="printdiv">
                  <center><h3 class="box-title">Personal Information</h3></center>
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">General Information</h3>
                    </div>
                    <div class="box-body">
                      <table class='table table-bordered'>
                        <tr>
                          <th>Gender:</th>
                          <td><span class="text-muted"> {{$patient->patient_gender}}</span></td>
                          <th>Age:</th>
                          <td><span class="text-muted">{{$patient->age}}</span></td>
                          <th>Birthday:</th>
                          <td><span class="text-muted"> {{$patient->patient_bday}}</span> </td>
                        </tr>
                        <tr>
                          <th>Mother:</th>
                          <td><span class="text-muted"> {{$patient->mother_name}}</span></td>
                          <th>Occupation:</th>
                          <td><span class="text-muted">{{$patient->mother_occupation}}</span></td>
                        </tr>
                        <tr>
                          <th>Father:</th>
                          <td><span class="text-muted"> {{$patient->father_name}}</span></td>
                          <th>Occupation:</th>
                          <td><span class="text-muted">{{$patient->father_occupation}}</span></td>
                        </tr>
                        <tr>
                          <th>Address:</th>
                          <td><span class="text-muted"> {{$patient->patient_address}}</span></td>
                          <th>Contact Number:</th>
                          <td><span class="text-muted"> {{$patient->contact_number}}</span></td>
                        </tr>
                      </table>
                    </div> 
                  </div> 
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Birth History</h3>
                    </div>
                    <div class="box-body">
                      <table class='table table-bordered'>
                        <tr>
                          <th>Type of Delivery:</th>
                          <td><span class="text-muted">{{$patient->type_of_delivery}}</span></td>
                          <th>Head Circumference:</th>
                          <td><span class="text-muted">{{$patient->head_cire}} cm</span></td>
                          
                        </tr>
                        <tr>
                          <th>Blood Type:</th>
                          <td><span class="text-muted">{{$patient->blood_type}}</span></td>
                          <th>Chest Circumference:</th>
                          <td><span class="text-muted">{{$patient->chest_cire}} cm</span></td>
                        </tr>  
                        <tr>
                          <th>Birth Length:</th>
                          <td><span class="text-muted">{{$patient->birth_length}} cm</span></td>
                          <th>Abdominal Circumference:</th>
                          <td><span class="text-muted">{{$patient->abdominal_cire}} cm</span></td>
                        </tr> 
                        <tr>
                          <th>Birth Weight:</th>
                          <td><span class="text-muted">{{$patient->birth_weight}} kg</span></td>
                        </tr> 
                      </table>
                    </div>
                  </div> 
                </div>
                <div class="box-footer">
                    <button id="printButton" class="btn btn-primary pull-left">Print Report</button> 
                    @if(Auth::User()->position == "assistant")  
                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#editmodal">Edit</button>
                    @endif
                  </div>    
                
                <!------------------------------------------------Immunization Tab---------------------------------------->
                <style>
                option{font-family: Arial, Helvetica, sans-serif; font-size:20px;}
                .immunizationLabel{font-size:25px; color:white}
                #vaccinetype{height: 45px;}
                button{height: 32px;}

              </style>
              <div class="tab-pane" id="immunization">
                <center><h3 class="box-title">Childhood Immunization</h3></center>
                <div class="box box-info">
                  <div class="box-body">
                    <div class="row">
                     
                      <div class="form-row">
                        <div class="form-group col-lg-8 bg-teal" style="position:relative; left:20%;">
                          
                          <form role="form" action="/vaccine_type" method="post" class="table">
                            @csrf
                            <label class="immunizationLabel" for="vaccinetype">VACCINE TYPE</label>
                            <select id="vaccinetype" class="form-control" name="vaccinetype" required>
                              <option selected>Choose...</option>
                              @if(count($vaccine_type)> 0)
                              @foreach ($vaccine_type as $vaccine_types)
                              <option>{{$vaccine_types->vaccine_type_name}}</option>
                              @endforeach
                              @endif
                            </select>
                            <input type="hidden" id="patId" name="patVacId" value='{{$patient->id}}'>
                            <div class="box-footer">
                              <button type="submit" class="btn btn-info pull-left">Submit</button>
                            </div>  
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-----------------------------------Immunizations---------------------------------------> 
                    
                    <style>
                    th{color:black}
                    #dacs{
                      display: inline-block;
                      content: "\00d7";
                    }
                    h3{color:black}
                    #close{
                      position: relative; top:-5px; right:5px;
                    }
                  </style>
                  
                  @foreach ($immunizationGroup as $immunization)  
                  <div class="col-lg-8" style="position:relative; left:20%;" content="\00d7" id="dacs">
                    <div class="small-box bg-teal">
                      @if(Auth::User()->position == "doctor") 
                      {!!Form::open(['action' =>['PatientController@destroy' , $immunization->id], 'method' => 'POST'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                      {!!Form::close()!!}
                      @endif
                      <div class="inner">
                        <h3>{{$immunization->vaccine_type_name}}</h3>
                      </div>
                      <div class="icon" style="font-size:85px">
                      </div>
                      <div class="box box-default collapsed-box box-solid">
                        <div class="box-header with-border">
                          <h3 class="box-title"></h3>
                          <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>

                        
                        
                        
                        <input type="hidden" value='{{ $immunizationShots = DB::table('vaccines_used')
                        ->join( 'vaccine_lists', 'vaccines_used.vaccine_list_id', '=', 'vaccine_lists.id')
                        ->join( 'immunizations', 'vaccines_used.immunization_id', '=', 'immunizations.id')
                        ->join('vaccine_types', "vaccine_types.id", '=', 'immunizations.vaccine_type_id')
                        ->join('medical_records', 'medical_records.immunization_id', '=', 'immunizations.id')
                        ->where('medical_records.patient_id','=', $patient->id)
                        ->where('vaccines_used.immunization_id', '=', $immunization->id)
                        ->select('vaccines_used.date_administered','vaccines_used.immunization_id','vaccines_used.id', 'vaccine_lists.vaccine_lot_number')
                        ->get() }}' >
                        <form role="form" action="/done" method="post">
                          @csrf
                          <div class="box-body">
                            <table class="tbl table table-borderI table-hover">
                              <thead style="background-color:#ff7e00">
                                <tr>
                                  <th>Number Of Shot</th>
                                  <th>Date Administered</th>
                                  <th>Vaccine Lot Number</th>
                                </tr>
                              </thead>
                              @foreach ($immunizationShots as $immunizationShots)
                              <tr>
                                <th></th>
                                <th>{{$immunizationShots->date_administered}}</th>
                                <th>{{$immunizationShots->lot_number}}</th>
                                
                              </tr>
                              @endforeach
                              <input type="hidden" name="patId" value='{{$patient->id}}' >
                              <input type="hidden" name="immunizationID" value='{{$immunization->id}}' >
                              <input type="hidden" name="vaccine_type" value='{{$immunization->vaccine_type_name}}' >
                              <th></th>
                              <th></th>
                              @if(Auth::User()->position == "doctor")  
                              <th><input type="date" class="form-control"  placeholder="Date of Vaccination" name="Date"></th>
                              <th><button type="submit" class="btn btn-info pull-right">Done</button></th>
                              @endif
                            </table>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            <!------------------------------------------------Vital Signs Tab---------------------------------------->
            
            <div class="tab-pane" id="vitalSigns">
              <center><h3 class="box-title">Vital Signs</h3></center>
              <div class="box box-info">
                <div class="box-body">
                  <form role="form" action="/submit" method="post" class="table">
                    @csrf
                    <table class='table'>
                      <tr>
                        <th>Date:</th>
                        <td><div class="input-group"><input type="date" class="form-control" id="visitDate"  name="visitDate" required></div></td>
                      </tr>
                      <tr>
                        <th>Height</th>
                        <td><div class="input-group"><input type="number" class="form-control" id="newHeight" placeholder="Height" name="newHeight" required><span class="input-group-addon">cm</span></div></td>
                      </tr>
                      <tr>  
                        <th>Weight:</th>
                        <td><div class="input-group"><input type="number" class="form-control" id="newWeight" placeholder="Weight" name="NewWeight" required><span class="input-group-addon">kg</span></div></td>
                      </tr>
                      <tr> 
                        <th>Pulse Rate:</th>
                        <td><div class="input-group"><input type="number" class="form-control" id="pulseRate" placeholder="Pulse Rate" name="pulseRate" required><span class="input-group-addon">beats per minute</span></div></td>
                      </tr>
                      <tr>
                        <th>Respiration: </th>
                        <td><div class="input-group"><input type="number" class="form-control" id="respiration" placeholder="Respiration" name="respiration" required><span class="input-group-addon">breaths per minute</span></div></td>
                      </tr> 
                      <tr>
                        <th>Temperature: </th>
                        <td><div class="input-group"><input type="number" class="form-control" id="temperature" placeholder="Temperature" name="temperature" required><span class="input-group-addon">&#8451</span></div></td>
                      </tr>  
                    </table>
                    
                    
                    <input type="hidden" id="patId" name="patId" value='{{$patient->id}}' >
                    
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary pull-right mg-top">Submit</button>
                    </div>      
                  </form>
                </div>
              </div>
            </div> 
            <!---------------------------------------------Add checkup Tab------------------------------------------->
            
            <div class="tab-pane" id="checkup">
              <center><h3>Check Up</h3></center>

              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Vital Signs</h3>
                  <div class="box-body">
                    
                    <table class='table'>
                      
                      @if(!empty ($vitals))
                      
                      
                      <tr>
                        <th>Weight</th>
                        <td><span class="text-muted">{{$vitals->weight}}</span></td>
                        <td><span class="text-muted">kg</span></td>
                        <td width="20%"></td>
                        <th>Pulse Rate:</th>
                        <td><span class="text-muted">{{$vitals->pulse_rate}}</span></td>
                        <td><span class="text-muted">beats per minute</span> </td>
                        
                      </tr>
                      <tr>
                        <th>Height:</th>
                        <td><span class="text-muted">{{$vitals->height}}</span></td>
                        <td><span class="text-muted">cm</span></td>
                        <td></td>
                        <th>Temperature: </th>
                        <td><span class="text-muted">{{$vitals->temperature}}</span></td>
                        <td><span class="text-muted">&#8451</span></td>
                      </tr>
                      <tr>
                        <th>Respiration:</th>
                        <td><span class="text-muted">{{$vitals->respiration}}</span></td>
                        <td><span class="text-muted">breaths per minute</span></td>
                      </tr>
                      @else
                      <h1>No past record of vitals</h1>
                      @endif

                    </table>
                    
                  </div>
                </div>
              </div>

              <form role="form" action="/diagnosisResult" method="post" class="table">
               @csrf
               
               <div class="box box-info mg-top">
                <div class="box-header">
                  <h3 class="box-title">Allergies</h3>
                </div> 
                <div class="box-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="allergies" required>
                      
                    </div>
                  </div>
                </div> 
              </div>
              
              <div class="box box-info mg-top">
                <div class="box-header">
                 <h3 class="box-title">Diagnosis</h3>
               </div>
               <div class="box-body">
                <div class="row">
                  <div class="col-sm-12">
                    <input type="text" class="form-control"  name="diagnosis" required>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                

                <input type="hidden" name="patId" value='{{$patient->id}}' >

                <button type="submit" class="btn btn-primary pull-right mg-top">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <!---------------------------------------------Medical Record Tab------------------------------------------->
        <div class="tab-pane" id="med_record">
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li><a href="#growth_dev" data-toggle="tab">Growth and Development</a></li>
              <li class="active"><a href="#follow_up" data-toggle="tab">Follow Up Visits</a></li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="follow_up" >
                <div class="row">
                  <div class="col-md-12">
                    <div class="box box-info">
                      <div class="box-header">
                        <center><h3 class="box-title">Vital Signs and Diagnoses</h3></center>
                      </div>
                      <div class="box-body">
                        <table id="vitalsignsTable" class="table table-hover">
                          <thead>
                            <tr>
                              <th>DATE</th>
                              <th>AGE</th>
                              <th>WEIGHT</th>
                              <th>HEIGHT</th>
                              <th>TEMPERATURE</th>
                              <th>DIAGNOSIS AND PHYSICIANS NOTES</th>
                              <th>Vaccine</th>
                              <th>Date Administered</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if(!empty ($vitals))
                            <tr>
                              <td>{{$vitals->date}}</td>
                              <td>{{$patient->age}}</td>
                              <td>{{$vitals->weight}}</td>
                              <td>{{$vitals->height}}</td>
                              <td>{{$vitals->temperature}}</td>
                              <td> </td>
                              
                            </tr>
                            @else
                            <h1>No past record of vitals</h1>
                            @endif
                          </tbody>  
                        </table>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chart tab-pane" id="growth_dev" style="position: relative height: 400px;">
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Height Change</h3>
                  </div>
                  <div class="box-body">
                    <canvas id="heightChart"></canvas>
                  </div>
                </div>
                <div class="box box-info">
                  <div class="box-header">
                    <h3 class="box-title">Weight Gain</h3>
                  </div>
                  <div class="box-body">
                    <canvas id="weightChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div> 

        </div>
      </div> 
    </div>
  </div>
</div>
</section>
</div>
@include('layouts.footer')


<div class="modal fade" id="editmodal">
  @include('includes.editinfo')
</div>
</div>

<script>
 
  $(document).ready( function () {
    $('#medRecordTable').DataTable();
    $("a.collapsed").click(function(){
      $(this).find(".btn:contains('answer')").toggleClass("collapsed");
    });
    var id=$(this).data("id");  
    var url = window.location.href+"/graph";
    var height = new Array();
    var weight = new Array();
    var w = new Array();
    var h = new Array();
    var d = new Array();
    var label = ["Birth"];
    $.get(url, function(response){
      response.forEach(function(data){
        height=[data.birth_length];
        weight=[data.birth_weight];
        h.push(data.height);
        w.push(data.weight);
        d =[data.age];
        Array.prototype.push.apply(height,h);
        Array.prototype.push.apply(weight,w);
        Array.prototype.push.apply(label,d);
      });
      var ctxL = document.getElementById("heightChart").getContext('2d');
      var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
          labels: label,
          datasets: [{
            label: "Height(cm)",
            data: height,
            backgroundColor: [
            'rgba(105, 0, 132, .2)',
            ],
            borderColor: [
            'rgba(200, 99, 132, .7)',
            ],
            borderWidth: 2
          }
          ]
        },
        options: {
          responsive: true
        }
      });

      var ctxL = document.getElementById("weightChart").getContext('2d');
      var myLineChart = new Chart(ctxL, {
        type: 'line',
        data: {
          labels: label,
          datasets: [
          {
            label: "Weight(kg)",
            data: weight,
            backgroundColor: [
            'rgba(0, 137, 132, .2)',
            ],
            borderColor: [
            'rgba(0, 10, 130, .7)',
            ],
            borderWidth: 2
          }
          ]
        },
        options: {
          responsive: true
          
        }
      });
    } );
    function printData()
    {
      var divToPrint=document.getElementById("printdiv");
      newWin= window.open("");
      newWin.document.write(divToPrint.outerHTML);
      newWin.print();
      newWin.close();
    }

    $('#printButton').on('click',function(){
    printData();
    })
  } );
  
</script>

</body>
</html>
