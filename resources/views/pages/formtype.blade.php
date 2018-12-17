
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
                       <!-- Alert Error Message  -->
                       
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

              </div>
              <!-- /.box-header -->

              <div class="box-body">
                {!! Form::open(['action' => ['PostVaccineTypeController@update', $vaccine->id], 'method' => 'POST']) !!}

                <div class="form-group"> 
                    {{Form::label('vaccine_type_name','Vaccine Type Name')}}
                    {{Form::text('vaccine_type_name', $vaccine->vaccine_type_name, ['class' => 'form-control', 'placeholder' => 'Vaccine Type Name'])}}
                </div>

                <div class="form-group"> 
                    {{Form::label('vaccine_dose','Dose')}}
                    {{Form::number('vaccine_dose', $vaccine->vaccine_dose, ['class' => 'form-control', 'placeholder' => 'Dose'])}}
                </div>

                <div class="form-group"> 
                    {{Form::label('vaccine_price','Price')}}
                    {{Form::number('vaccine_price', $vaccine->vaccine_price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
                </div>

                <div class="form-group"> 
                    {{Form::label('vaccine_type_description','Vaccine Type Description')}}
                    {{Form::text('vaccine_type_description', $vaccine->vaccine_type_description, ['class' => 'form-control', 'placeholder' => 'Vaccine Type Description'])}}
                </div>

                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
                {!! Form::close() !!}
            </div>
            <!--./box-body-->
            <div class="box-footer clearfix">
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














