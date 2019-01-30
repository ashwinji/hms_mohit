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
												
												<a href="{{route('blood-filter')}}" class="btn btn-xs btn-success">Show Blood Examination Pateints List</a>
												
											</div>

									</div>
										</div>
										
										<div class="card-body">
											<div class="row">
												
						<div class="col-md-12">
							 @include('verror.error')
							{!! Form::open(['route' => ['blood.store'],'autocomplete'=>'off']) !!}

							{!! csrf_field() !!}

							{{ Form::hidden('status', '1') }}
							<div class="row">
	  							<div class="col-md-6">
								<div class="form-group">
								
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('patientId',  '', ['class' => 'form-control',
	        'placeholder' => 'Enter Registration Number','id'=>'patientId']) !!}
	         <div id="opd_list">
	         </div>
	       
								</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName',  '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							    </div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate',  '', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate',]) !!}
							    </div>
								</div>

								
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::select('referredBy', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',],  '', ['class' => 'form-control',]) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('Age', 'Age') !!}
	        {!! Form::text('age',  '',['class'=>'form-control','placeholder' => 'Enter age']) !!}
							    </div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('investigationAdvised',  '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							    </div>
								</div>


								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('date',  '', ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
								

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Haemoglobin') !!}
	        {!! Form::text('haemoglobin',  '', ['class' => 'form-control','placeholder' => 'Enter Haemoglobin']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Total RBC Count') !!}
	        {!! Form::text('totalRBCCount',  '', ['class' => 'form-control','placeholder' => 'Enter Total RBC Count']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Total WBC Count') !!}
	        {!! Form::text('totalWBCCount',  '', ['class' => 'form-control','placeholder' => 'Enter Total WBC Count']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Polymorphs') !!}
	        {!! Form::text('polymorphs',  '', ['class' => 'form-control','placeholder' => 'Enter Polymorphs']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Lymphocytes') !!}
	        {!! Form::text('lymphocytes',  '', ['class' => 'form-control','placeholder' => 'Enter Lymphocytes']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Eosinophils') !!}
	        {!! Form::text('eosinophils',  '', ['class' => 'form-control','placeholder' => 'Enter Eosinophils']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Monocytes') !!}
	        {!! Form::text('monocytes',  '', ['class' => 'form-control','placeholder' => 'Enter Monocytes']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Basophils') !!}
	        {!! Form::text('basophils',  '', ['class' => 'form-control','placeholder' => 'Enter Basophils']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'ERS') !!}
	        {!! Form::text('ers',  '', ['class' => 'form-control','placeholder' => 'Enter ERS']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Platelet Count') !!}
	        {!! Form::text('plateletCount',  '', ['class' => 'form-control','placeholder' => 'Enter Platelet Count']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Reticulocytes') !!}
	        {!! Form::text('reticulocytes',  '', ['class' => 'form-control','placeholder' => 'Enter Reticulocytes']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'PCV') !!}
	        {!! Form::text('pcv',  '', ['class' => 'form-control','placeholder' => 'Enter PCV']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'MCV') !!}
	        {!! Form::text('mcv',  '', ['class' => 'form-control','placeholder' => 'Enter MCV']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'MCH') !!}
	        {!! Form::text('mch',  '', ['class' => 'form-control','placeholder' => 'Enter MCH']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'MCHC') !!}
	        {!! Form::text('mchc',  '', ['class' => 'form-control','placeholder' => 'Enter MCHC']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Bleeding Time') !!}
	        {!! Form::text('bleedingTime',  '', ['class' => 'form-control','placeholder' => 'Enter Bleeding Time']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Clotting Time') !!}
	        {!! Form::text('clottingTime',  '', ['class' => 'form-control','placeholder' => 'Enter Clotting Time']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Malarial Parasite') !!}
	        {!! Form::text('malarialParasite',  '', ['class' => 'form-control','placeholder' => 'Enter Malarial Parasite']) !!}
							    </div>
								</div>

								<div class="col-md-12">
								<div class="form-group">
								
								{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('remark',  '', ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 3, 'cols' => 10,]) !!}
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