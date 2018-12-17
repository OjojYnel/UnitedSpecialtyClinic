<div class="tab-pane" id="vitalSigns">
  <center><h3 class="box-title">Vital Signs</h3></center>
  <div class="box box-info">
    <div class="box-body">
      {!!Form::open(['action' =>['PatientController@update', $patient->id], 'method' => 'POST'])!!}
      @csrf
      <table class='table'>
        <tr>
          <th>{{Form::label('date','Date')}}</th>
          <td><div class="input-group">echo Form::date('visitDate', \Carbon\Carbon::now());</div></td>
        </tr>
        <tr>
          <th>{{Form::label('newHeight','Height')}}</th>
          <td><div class="input-group">{{Form::number('newHeight',''[ 'class' => 'form-control'])}}<span class="input-group-addon">cm</span></div></td>
        </tr>
        <tr>  
          <th>{{Form::label('newWeight','Weight')}}</th>
          <td><div class="input-group">{{Form::number('NewWeight',''[ 'class' => 'form-control'])}}<span class="input-group-addon">kg</span></div></td>
        </tr>
        <tr> 
          <th>{{Form::label('pulseRate','Pulse Rate')}}</th>
          <td><div class="input-group">{{Form::number('pulseRate',''[ 'class' => 'form-control'])}}<span class="input-group-addon">beats per minute</span></div></td>
        </tr>
        <tr>
          <th>{{Form::label('respiration','Respiration')}}</th>
          <td><div class="input-group">{{Form::number('respiration',''[ 'class' => 'form-control'])}}<span class="input-group-addon">&#8451</span></div></td>
        </tr> 
        <tr>
          <th>{{Form::label('temperature','Temperature')}}</th>
          <td><div class="input-group">{{Form::number('temperature',''[ 'class' => 'form-control'])}}<span class="input-group-addon">&#8451</span></div></td>
        </tr> 
      </table>
      
      <div class="box-footer">
        {{Form::hidden('_method', 'PUT')}} 
        {{Form::submit('Save Changes',['class'=> 'btn btn-primary'])}}
      </div>      
      
      {!!Form::close()!!}
    </div>
  </div>
</div>