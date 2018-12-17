
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="color:black">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color:#ffffff">Edit Patient Information</h4>
            </div>
            <div class="modal-body">
              {!!Form::open(['action' =>['PatientController@update', $patient->id], 'method' => 'POST'])!!}
              <center><h4 class="box-title">General Information</h4></center>
              <div class="row">
                <div class="col-md-4">
                    {{Form::label('fname','First Name:')}}
                    {{Form::text('fname',$patient->patient_fname,[ 'class' => 'form-control'])}}
                </div>    
                <div class="col-md-4">
                        {{Form::label('mname','Middle Name:')}}
                        {{Form::text('mname',$patient->patient_mname,[ 'class' => 'form-control'])}}
                </div>
                <div class="col-md-4">
                        {{Form::label('lname','Last Name:')}}
                        {{Form::text('lname',$patient->patient_lname,[ 'class' => 'form-control'])}}
                </div>        
              </div> 
              <div class="row">
                    <div class="col-md-4">
                        {{Form::label('sex','Gender:')}}
                        {{Form::select('sex',['Male'=>'Male','Female'=>'Female'],$patient->patient_gender,[ 'class' => 'form-control'])}}
                    </div> 
                    <div class="col-md-4">
                        {{Form::label('Age','Age:')}}
                        {{Form::number('age',$patient->age,[ 'class' => 'form-control'])}}
                    </div>   
                    <div class="col-md-4">
                        {{Form::label('dofbirth','Birthday:')}}
                        {{Form::date('dofbirth',$patient->patient_bday,[ 'class' => 'form-control'])}}
                    </div>
                            
             </div> <hr> 
             <div class="row">
                    <div class="col-md-6">
                        {{Form::label('mothername','Mother:')}}
                        {{Form::text('mothername',$patient->mother_name,[ 'class' => 'form-control'])}}
                    </div>  
                    <div class="col-md-6">
                        {{Form::label('mother occupation','Mother Occupation:')}}
                        {{Form::text('moccu',$patient->mother_occupation,[ 'class' => 'form-control'])}}
                    </div>    
                  
            </div>   
            <div class="row"> 
                    <div class="col-md-6">
                        {{Form::label('fathername','Father:')}}
                        {{Form::text('fathername',$patient->father_name,[ 'class' => 'form-control'])}}
                    </div>  
                    <div class="col-md-6">
                        {{Form::label('father occupation','Father Occupation:')}}
                        {{Form::text('foccu',$patient->father_occupation,[ 'class' => 'form-control' , 'placeholder' => 'Father Occupation:'])}}
                    </div>     
            </div>       
            
            <div class="row">
                    <div class="col-md-6">
                        {{Form::label('address','Address:')}}
                        {{Form::text('address',$patient->patient_address,[ 'class' => 'form-control'])}}
                    </div>   

                    <div class="col-md-6">
                        {{Form::label('contact','Contact Number:')}}
                        {{Form::text('connum',$patient->contact_number,[ 'class' => 'form-control'])}}
                    </div>     
            </div><hr>
            <center><h4 class="box-title">Birth History</h4></center> 
            <div class="row">
                    <div class="col-md-12">
                        {{Form::label('deliverytype','Type of Delivery:')}}
                        {{Form::select('typeofdelivery',['Vaginal Delivery'=>'Vaginal Delivery','Natural Delivery'=>'Natural Delivery','Vaccuum Assisted Delivery/Vacuum Extraction'=>'Vaccuum Assisted Delivery/Vacuum Extraction',
                        'Forceps Delivery'=>'Forceps Delivery', 'Cesarian Section(C-Section)'=>'Cesarian Section(C-Section)', 'Vaginal Birth After Cesarian'=>'Vaginal Birth After Cesarian'],'$patient->type_of_delivery',[ 'class' => 'form-control'])}}
                    </div>        
            </div>
            <div class="row">
                    <div class="col-md-4">
                            {{Form::label('bloodtype','Blood Type')}}
                            {{Form::select('btype',['Type A'=>'Type A','Type B'=>'Type B','Type AB'=>'Type AB',
                            'Type O'=>'Type O', 'Type A+'=>'Type A+','Type A-'=>'Type A-','Type B+'=>'Type B+','Type B-'=>'Type B-','Type AB'=>'Type AB+','Type AB-'=>'Type AB-'],$patient->blood_type,[ 'class' => 'form-control'])}}
                    </div>
                    <div class="col-md-4">
                        {{Form::label('birth_weight','Birth Weight:')}}
                      <div class="input-group">    
                        {{Form::number('bw',$patient->birth_weight,[ 'class' => 'form-control'])}}<span class="input-group-addon">kg</span>
                      </div>
                    </div>    
                    <div class="col-md-4">
                        {{Form::label('length','Birth Length:')}}
                      <div class="input-group">    
                        {{Form::number('bl',$patient->birth_length,[ 'class' => 'form-control'])}}<span class="input-group-addon">cm</span>
                      </div>
                    </div>     
            </div> 
            <div class="row">
                    <div class="col-md-4">
                            {{Form::label('hcirc','Head Circumference:')}}
                          <div class="input-group">    
                            {{Form::number('headcirc',$patient->head_cire,[ 'class' => 'form-control'])}}<span class="input-group-addon">kg</span>
                          </div>
                    </div>  
                    <div class="col-md-4">
                        {{Form::label('ccirc','Chest Circumference:')}}
                      <div class="input-group">    
                        {{Form::number('chestcirc',$patient->chest_cire,[ 'class' => 'form-control'])}}<span class="input-group-addon">kg</span>
                      </div>
                    </div>    
                    <div class="col-md-4">
                        {{Form::label('acirc','Abdominal Circumference:')}}
                      <div class="input-group">    
                        {{Form::number('abdocirc',$patient->abdominal_cire,[ 'class' => 'form-control'])}}<span class="input-group-addon">cm</span>
                      </div>
                    </div>     
            </div>          
        </div>  

            <div class="modal-footer">
                    {{Form::hidden('_method', 'PUT')}} 
                    {{Form::submit('Save Changes',['class'=> 'btn btn-primary'])}}
            </div> 
            
            
            {!!Form::close()!!}
          </div>  
        </div>
            
          <!-- /.modal-dialog -->
 
        
    