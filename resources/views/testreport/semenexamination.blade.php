	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
				<div class="page-main">

							<div class="row">
								<div class="col-md-12">

									<div class="card">
										<div class="card-header">
											<h3 class="mb-0 card-title">SEMEN EXAMINATION</h3>
											<div class="card-body">
											<div class="btn-list" style="float: right;">
												
												<a href="#" class="btn btn-xs btn-success</a>
												
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
							{!! Form::open(['route' => ['semen.store'],'autocomplete'=>'off']) !!}

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
	        {!! Form::select('consultant', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',],  null, ['class' => 'form-control','disabled']) !!}
							    </div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('patientName',  null, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							    </div>
								</div>


								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('otDate',  null, ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
								

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Place Of Collection') !!}
	        {!! Form::text('placeOfCollection',  null, ['class' => 'form-control','placeholder' => 'Enter Place Of Collection']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Time Of Collection In Lab') !!}
	        {!! Form::text('timeOfCollectionInLab',  null, ['class' => 'form-control','placeholder' => 'Enter Collection In Lab']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Quantity') !!}
	        {!! Form::text('quantity',  null, ['class' => 'form-control','placeholder' => 'Enter Quantity']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Consistency') !!}
	        {!! Form::text('consistency',  null, ['class' => 'form-control','placeholder' => 'Enter Consistency']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Colour') !!}
	        {!! Form::text('colour',  null, ['class' => 'form-control','placeholder' => 'Enter Colour']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'PH') !!}
	        {!! Form::text('ph',  null, ['class' => 'form-control','placeholder' => 'Enter Total PH']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Liqufication Time') !!}
	        {!! Form::text('liquficationTime',  null, ['class' => 'form-control','placeholder' => 'Enter Liqufication Time']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Viscocity') !!}
	        {!! Form::text('viscocity',  null, ['class' => 'form-control','placeholder' => 'Enter Viscocity']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Count') !!}
	        {!! Form::text('count',  null, ['class' => 'form-control','placeholder' => 'Enter Count']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Motility') !!}
	        {!! Form::text('motility',  null, ['class' => 'form-control','placeholder' => 'Enter Motility']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Abnormal Forms') !!}
	        {!! Form::text('abnormalForms',  null, ['class' => 'form-control','placeholder' => 'Enter Abnormal Forms']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Pus Cells') !!}
	        {!! Form::text('pusCells',  null, ['class' => 'form-control','placeholder' => 'Enter Pus Cells']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Epithelial Cells') !!}
	        {!! Form::text('epithelialCells',  null, ['class' => 'form-control','placeholder' => 'Enter Epithelial Cells']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'RBCS') !!}
	        {!! Form::text('rbcs',  null, ['class' => 'form-control','placeholder' => 'Enter Total RBCS']) !!}
							    </div>
								</div>
								<div class="col-md-12">
								<div class="form-group">
								
								{!! Form::label('name', 'Fructose Test') !!}
	        {!! Form::text('fructoseTest',  null, ['class' => 'form-control','placeholder' => 'Enter Fructose Test']) !!}
							    </div>
								</div>
								

								<div class="col-md-12">
								<div class="form-group">
								
								{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('other',  null, ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 3, 'cols' => 10,]) !!}
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
	@endsection