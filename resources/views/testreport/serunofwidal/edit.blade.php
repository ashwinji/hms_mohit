	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
		<div class="page-main">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="mb-0 card-title">SERUN FOR WIDAL TEST</h3>
								<div class="card-body">
									<div class="btn-list" style="float: right;">
										<a href="{{route('serun-filter')}}" class="btn btn-xs btn-success">Update Serun Examination Pateints List</a>	
									</div>
								</div>
						 </div>
				<div>
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
				</div>
		<div class="card-body">
			<div class="row">						
				<div class="col-md-12">
			{!! Form::open(['route' => ['serun.update',$serun->id],'autocomplete'=>'off','method'=>'PUT']) !!}
							{!! csrf_field() !!}
							{{ Form::hidden('status', '1') }}
							<div class="row">
	  							<div class="offset-md-2 col-md-8 offset-md-2">
								<div class="form-group">
			{!! Form::label('name', 'OPD Registration Number') !!}
	        {!! Form::text('patientId',$serun->opd->regNum, ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'patientId','readonly'=>'true']) !!}
								</div>
								<div class="form-group">
			{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName', $serun->opd->patientName, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'patientName','readonly'=>'true']) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate',$serun->opd->regDate, ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','Disabled']) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'Referred By') !!}
	        {!! Form::text('referredBy', $serun->referredBy, ['class' => 'form-control','readonly'=>'true']) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('investigationAdvised', $serun->investigationAdvised, ['class' => 'form-control','placeholder' => 'Enter investigationAdvised','id'=>'investigationAdvised',]) !!}
							    </div>
								<div class="form-group">
			{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('otDate', $serun->date, ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
							</div>
						       <div class="row">
					             <div class="offset-md-2 col-md-4">
								 <div class="form-group">
			{!! Form::label('name', 'S. TYPHI "O"') !!}
	        {!! Form::text('sTyphiO',$serun->sTyphiO, ['class' => 'form-control','placeholder' => 'Enter TYPHI MHO']) !!}
							    </div>
								</div>
								<div class=" col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'S.  TYPHI "H"') !!}
	        {!! Form::text('sTyphiAH',$serun->sTyphiAH, ['class' => 'form-control','placeholder' => 'Enter type h
	        H']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'S. PARA TYPHI "BH"') !!}
	        {!! Form::text('sTyphiH',$serun->sTyphiH, ['class' => 'form-control','placeholder' => 'Enter PARA TYPHI']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
			{!! Form::label('name', 'S. PARA TYPHI "BH"') !!}
	        {!! Form::text('sTyphiBH', $serun->sTyphiBH, ['class' => 'form-control','placeholder' => 'Enter PARA TYPHI']) !!}
							    </div>
								</div>
							</div>
						<div class="offset-md-2 col-md-8 offset-md-2">
								<div class="form-group">
			{!! Form::label('name', 'IMPRESSION') !!}
	        {!! Form::textarea('impression', $serun->impression, ['class' => 'form-control','placeholder' => 'Enter IMPRESSION','rows' =>2, 'cols' => 14,]) !!}
							    </div>
								</div>
						<div class="offset-md-3 col-md-4" >
								<div class="form-group">
									 <div style="float: right;">
									     {!! Form::submit('Submit', ['class' => 'btn btn-square btn-success']) !!}
								      </div>
								      <div style="float: right;">
									    <a href="" class="btn btn-square btn-danger">Cancel </a>
								      </div>
								</div>		
                         </div>
								{!! Form::close() !!}
						</div>
				</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
@endsection