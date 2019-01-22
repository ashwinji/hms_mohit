	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
				<div class="page-main">
							
							<div class="row">
								<div class="col-md-12">

									<div class="card">
										<div class="card-header">
											 <h3 class="mb-0 card-title">BLOOD EXAMINATION</h3>
											<div class="card-body">
											<div class="btn-list" style="float: right;">
												
												<a href="" class="btn btn-xs btn-success">Show Blood Examination Pateints List</a>
												
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
							{!! Form::open(['route' => ['blood.store'],'autocomplete'=>'off']) !!}

							{!! csrf_field() !!}

							{{ Form::hidden('status', '1') }}
							<div class="row">
	  							<div class="col-md-6">
								<div class="form-group">
								
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('opd_id',  null, ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'Opd_id']) !!}
	         <div id="opd_list">
	         </div>
	       
								</div>
								</div>

								

								

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName',  null, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','Disabled']) !!}
							    </div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate',  null, ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','Disabled']) !!}
							    </div>
								</div>

								
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::select('referredBy', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',],  null, ['class' => 'form-control','disabled']) !!}
							    </div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('investigationAdvised',  null, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							    </div>
								</div>


								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('date',  null, ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
								

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Haemoglobin') !!}
	        {!! Form::text('haemoglobin',  null, ['class' => 'form-control','placeholder' => 'Enter Haemoglobin']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Total RBC Count') !!}
	        {!! Form::text('totalRBCCount',  null, ['class' => 'form-control','placeholder' => 'Enter Total RBC Count']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Total WBC Count') !!}
	        {!! Form::text('totalWBCCount',  null, ['class' => 'form-control','placeholder' => 'Enter Total WBC Count']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Polymorphs') !!}
	        {!! Form::text('polymorphs',  null, ['class' => 'form-control','placeholder' => 'Enter Polymorphs']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Lymphocytes') !!}
	        {!! Form::text('lymphocytes',  null, ['class' => 'form-control','placeholder' => 'Enter Lymphocytes']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Eosinophils') !!}
	        {!! Form::text('eosinophils',  null, ['class' => 'form-control','placeholder' => 'Enter Eosinophils']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Monocytes') !!}
	        {!! Form::text('monocytes',  null, ['class' => 'form-control','placeholder' => 'Enter Monocytes']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Basophils') !!}
	        {!! Form::text('basophils',  null, ['class' => 'form-control','placeholder' => 'Enter Basophils']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'ERS') !!}
	        {!! Form::text('ers',  null, ['class' => 'form-control','placeholder' => 'Enter ERS']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Platelet Count') !!}
	        {!! Form::text('plateletCount',  null, ['class' => 'form-control','placeholder' => 'Enter Platelet Count']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Reticulocytes') !!}
	        {!! Form::text('reticulocytes',  null, ['class' => 'form-control','placeholder' => 'Enter Reticulocytes']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'PCV') !!}
	        {!! Form::text('pcv',  null, ['class' => 'form-control','placeholder' => 'Enter PCV']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'MCV') !!}
	        {!! Form::text('mcv',  null, ['class' => 'form-control','placeholder' => 'Enter MCV']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'MCH') !!}
	        {!! Form::text('mch',  null, ['class' => 'form-control','placeholder' => 'Enter MCH']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'MCHC') !!}
	        {!! Form::text('mchc',  null, ['class' => 'form-control','placeholder' => 'Enter MCHC']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Bleeding Time') !!}
	        {!! Form::text('bleedingTime',  null, ['class' => 'form-control','placeholder' => 'Enter Bleeding Time']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Clotting Time') !!}
	        {!! Form::text('clottingTime',  null, ['class' => 'form-control','placeholder' => 'Enter Clotting Time']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Malarial Parasite') !!}
	        {!! Form::text('malarialParasite',  null, ['class' => 'form-control','placeholder' => 'Enter Malarial Parasite']) !!}
							    </div>
								</div>

								<div class="col-md-12">
								<div class="form-group">
								
								{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('remark',  null, ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 3, 'cols' => 10,]) !!}
							    </div>
								</div>

								<div class="col-md-6" >
									<div class="form-group">
									  <div style="float: right;">
									     {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
								      </div>
									</div>
								</div>

								


								{!! Form::close() !!}
								<div class="col-md-6" >
									<div class="form-group">
									  <div >
									    <a href="#"><button class="btn btn-primary">Cancel</button></a>
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