	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
		<div class="page-main">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="mb-0 card-title">X-RAY UPDATE</h3>
							<div class="card-body">
								 <div class="btn-list" style="float: right;">				
									<a href="{{route('xray-filter')}}" class="btn btn-xs btn-success">Show X-ray Examination Pateints List
									</a>	
								</div>
							</div>
						</div>
	<div class="card-body">
		<div class="row">		
			<div class="col-md-12">
			{!! Form::open(['route' => ['xray.update',$xray->id],'autocomplete'=>'off']) !!}
			{!! csrf_field() !!}
			{!!method_field('PUT')!!}
			{{ Form::hidden('status', '1') }}
				<div class="row">
	  				<div class="offset-md-2 col-md-8 offset-md-2">
					<div class="form-group">		
			{!! Form::label('name', 'OPD Registration Number') !!}
	        {!! Form::text('patientId',$xray->opd->regNum, ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'Opd_id','readonly'=>'true']) !!}
						        <div id="opd_list">
						        </div>
								</div>
								<div class="form-group">
			{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName', $xray->opd->patientName, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'patientName','readonly'=>'true']) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate',$xray->opd->regDate, ['class' => 	'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','readonly'=>'true']) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'Referred By') !!}
	        {!! Form::text('referredBy',$xray->referredBy, ['class' => 'form-control','readonly'=>'true']) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('investigationAdvised',$xray->investigationAdvised, ['class' => 'form-control','placeholder' => 'Enter Investigation Advised','id'=>'investigationAdvised',]) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('date',$xray->date, ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
				                <div class="form-group">	
			{!! Form::label('name', 'Description') !!}
	        {!! Form::textarea('description', $xray->description, ['class' => 'form-control','placeholder' => 'Enter Description','rows' => 2, 'cols' => 10,]) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('remark',$xray->remark, ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 2, 'cols' => 10,]) !!}
							    </div>
								</div>
			<div class="col-md-6" >
				<div class="form-group">
				  <div style="float: right;">
				     {!! Form::submit('Submit', ['class' => 'btn btn-square btn-success']) !!}
			      </div>
				</div>
			</div>

			{!! Form::close() !!}
			<div class="col-md-6" >
				<div class="form-group">
				  <div >
				    <a href="#"><button class="btn btn-square btn-primary">Cancel</button></a>
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
	</div>
	</div>
	@endsection