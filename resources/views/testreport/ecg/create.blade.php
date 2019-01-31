@extends('master.layouts.app')
    @section('main-content')
    <div class="page">
				<div class="page-main">
							
							<div class="row">
								<div class="col-md-12">

									<div class="card">
										<div class="card-header">
											<h3 class="mb-0 card-title">ECG EXAMINATION</h3>
											<div class="card-body">
											<div class="btn-list" style="float: right;">
												
												<a href="#" class="btn btn-xs btn-success">Show ecg Examination Pateints List</a>
												
											</div>

									</div>
										</div>
			
										<div class="card-body">
											<div class="row">
												
						<div class="col-md-12 ">
							@include('verror.error')
							{!! Form::open(['route' => ['ecg.store'],'autocomplete'=>'off']) !!}

							{!! csrf_field() !!}

							<!-- {{ Form::hidden('status', '1') }} -->
							<div class="row">

	  							<div class="col-md-6">
								<div class="form-group">
								
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('opd_id','', ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'Opd_id']) !!}
	         <div id="opd_list">

	         </div>
	       
								</div>
								
								<div class="form-group">
								
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName',  '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name']) !!}
							    </div>
								

								<div class="form-group">
								
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate',  '', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate']) !!}
							    </div>
								
								<div class="form-group">
								
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::select('referredBy', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',],  '', ['class' => 'form-control']) !!}
							    </div>

		
								<div class="form-group">
								
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('date',  '', ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
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