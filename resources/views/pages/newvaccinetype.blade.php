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
					</div>

					<!-- /.box-header -->
					<div class="box-body">
						{!! Form::open(['route'=>'vaccinetypesnew.store', 'method' => 'POST']) !!}
						<div class="form-group">
							{!! Form::label('vaccine_type_name',' Vaccine Type Name') !!}
							{!! Form::text('vaccine_type_name',null,['class'=>'form-control'])!!}
						</div>
						
						<div class="form-group">
							{!! Form::label('vaccine_dose','Vaccine Dose') !!}
							{!! Form::number('vaccine_dose',null,['class'=>'form-control'])!!}
						</div>

						<div class="form-group">
							{!! Form::label('vaccine_price','Vaccine Price') !!}
							{!! Form::number('vaccine_price',null,['class'=>'form-control'])!!}
						</div>

						<div class="form-group">
							{!! Form::label('vaccine_type_description',' Vaccine Type Description') !!}
							{!! Form::text('vaccine_type_description',null,['class'=>'form-control'])!!}
						</div>

						<div class="form-group">
							{!! Form::button('Add Type',['type'=>'submit','class'=>'btn btn-primary']) !!}
						</div>
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
