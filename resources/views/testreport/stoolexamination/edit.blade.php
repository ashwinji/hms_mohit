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
										<a href="#" class="btn btn-xs btn-success">Show Stool Examination Pateints List
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
			{!! Form::open(['route' => ['stool.store'],'autocomplete'=>'off']) !!}
			{!! csrf_field() !!}
			{{ Form::hidden('status', '1') }}
			              <div class="row">
							  <div class="offset-md-2 col-md-4">
						      <div class="form-group">				
			{!! Form::label('name', 'OPD Registration Number') !!}
	        {!! Form::text('opd_id',  null, ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'Opd_id']) !!}
					            <div id="opd_list">
					            </div>
			                    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName',  null, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','Disabled']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate',  null, ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','Disabled']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Referred By') !!}
	        {!! Form::select('consultant', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',],  null, ['class' => 'form-control','disabled']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('patientName',  null, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('otDate',  null, ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Colour') !!}
	        {!! Form::text('colour',  null, ['class' => 'form-control','placeholder' => 'Enter Colour']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Consistency') !!}
	        {!! Form::text('consistency',  null, ['class' => 'form-control','placeholder' => 'Enter Consistency']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Mucus') !!}
	        {!! Form::text('mucus',  null, ['class' => 'form-control','placeholder' => 'Enter Mucus']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Blood') !!}
	        {!! Form::text('blood',  null, ['class' => 'form-control','placeholder' => 'Enter Blood']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Pus Cells') !!}
	        {!! Form::text('pusCells',  null, ['class' => 'form-control','placeholder' => 'Enter Pus Cells']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'RBCS') !!}
	        {!! Form::text('rbcs',  null, ['class' => 'form-control','placeholder' => 'Enter RBCS']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Vegetable Matter') !!}
	        {!! Form::text('vegetableMatter',  null, ['class' => 'form-control','placeholder' => 'Enter Vegetable Matter']) !!}
							    </div>
								</div>

								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Cysts') !!}
	        {!! Form::text('cysts',  null, ['class' => 'form-control','placeholder' => 'Enter Cysts']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Giardia') !!}
	        {!! Form::text('giardia',  null, ['class' => 'form-control','placeholder' => 'Enter Giardia']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'E Histolytica') !!}
	        {!! Form::text('eHistolytica',  null, ['class' => 'form-control','placeholder' => 'Enter E Histolytica']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'E Coil') !!}
	        {!! Form::text('eCoil',  null, ['class' => 'form-control','placeholder' => 'Enter E Coil']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'OVA') !!}
	        {!! Form::text('ova',  null, ['class' => 'form-control','placeholder' => 'Enter OVA']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Worms') !!}
	        {!! Form::text('worms',  null, ['class' => 'form-control','placeholder' => 'Enter Worms']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Occult Stool') !!}
	        {!! Form::text('occultBlood',  null, ['class' => 'form-control','placeholder' => 'Enter Occult Stool']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">					
			{!! Form::label('name', 'Reducing Substances') !!}
	        {!! Form::text('reducingSubstances',  null, ['class' => 'form-control','placeholder' => 'Enter Reducing Substances']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Other') !!}
	        {!! Form::textarea('other',  null, ['class' => 'form-control','placeholder' => 'Enter Other','rows' => 1, 'cols' => 10,]) !!}
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