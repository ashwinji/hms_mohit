	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
		<div class="page-main">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="mb-0 card-title">STOOL EXAMINATION</h3>
								<div class="card-body">
									<div class="btn-list" style="float: right;">
										<a href="{{route('stool-filter')}}" class="btn btn-xs btn-success">Show Stool Examination Pateints List
										</a>	
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
			{!! Form::open(['route' => ['stool.update',$stool->id],'method'=>'PUT','autocomplete'=>'off']) !!}
			{!! csrf_field() !!}
			{{ Form::hidden('status', '1') }}
			              <div class="row">
							  <div class="offset-md-2 col-md-4">
						      <div class="form-group">				
			{!! Form::label('name', 'OPD Registration Number') !!}
	        {!! Form::text('patientId',$stool->opd->regNum, ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'patientId']) !!}
					            <div id="opd_list">
					            </div>
			                    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName',$stool->opd->patientName, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate', $stool->opd->PatientName, ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Referred By') !!}
	        {!! Form::text('referredBy',$stool->referredBy, ['class' => 'form-control','readonly'=>'true','id'=>'referredBy']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('investigationAdvised',$stool->investigationAdvised, ['class' => 'form-control','placeholder' =>'investigationAdvised','id'=>'investigationAdvised',]) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('date',$stool->date, ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Colour') !!}
	        {!! Form::text('colour',$stool->colour, ['class' => 'form-control','placeholder' => 'Enter Colour']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Consistency') !!}
	        {!! Form::text('consistency',$stool->consistency, ['class' => 'form-control','placeholder' => 'Enter Consistency']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Mucus') !!}
	        {!! Form::text('mucus',$stool->mucus, ['class' => 'form-control','placeholder' => 'Enter Mucus']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Blood') !!}
	        {!! Form::text('blood',$stool->blood, ['class' => 'form-control','placeholder' => 'Enter Blood']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Pus Cells') !!}
	        {!! Form::text('pusCells',$stool->pusCells, ['class' => 'form-control','placeholder' => 'Enter Pus Cells']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'RBCS') !!}
	        {!! Form::text('rbcs',$stool->rbcs, ['class' => 'form-control','placeholder' => 'Enter RBCS']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Vegetable Matter') !!}
	        {!! Form::text('vegetableMatter',$stool->vegetableMatter, ['class' => 'form-control','placeholder' => 'Enter Vegetable Matter']) !!}
							    </div>
								</div>

								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Cysts') !!}
	        {!! Form::text('cysts',$stool->cysts, ['class' => 'form-control','placeholder' => 'Enter Cysts']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Giardia') !!}
	        {!! Form::text('giardia',$stool->giardia, ['class' => 'form-control','placeholder' => 'Enter Giardia']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'E Histolytica') !!}
	        {!! Form::text('eHistolytica',$stool->eHistolytica, ['class' => 'form-control','placeholder' => 'Enter E Histolytica']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'E Coil') !!}
	        {!! Form::text('eCoil',$stool->eCoil, ['class' => 'form-control','placeholder' => 'Enter E Coil']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'OVA') !!}
	        {!! Form::text('ova',$stool->ova, ['class' => 'form-control','placeholder' => 'Enter OVA','id'=>'ova']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Worms') !!}
	        {!! Form::text('worms',$stool->worms, ['class' => 'form-control','placeholder' => 'Enter Worms']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Occult Stool') !!}
	        {!! Form::text('occultBlood',$stool->occultBlood, ['class' => 'form-control','placeholder' => 'Enter Occult Stool']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">					
			{!! Form::label('name', 'Reducing Substances') !!}
	        {!! Form::text('reducingSubstances',$stool->reducingSubstances, ['class' => 'form-control','placeholder' => 'Enter Reducing Substances']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Other') !!}
	        {!! Form::textarea('other',$stool->other, ['class' => 'form-control','placeholder' => 'Enter Other','rows' => 1, 'cols' => 10,]) !!}
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
									    <a href="{{route('dashboard')}}"><button class="btn btn-square btn-primary">Cancel</button></a>
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