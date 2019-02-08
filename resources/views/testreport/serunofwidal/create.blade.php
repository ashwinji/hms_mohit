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
												
												<a href="#" class="btn btn-xs btn-success">Show Serun Examination Pateints List</a>
												
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
							{!! Form::open(['route' => ['serun.store'],'autocomplete'=>'off']) !!}

							{!! csrf_field() !!}

							{{ Form::hidden('status', '1') }}
							<div class="row">
	  							<div class="offset-md-2 col-md-8 offset-md-2">
								<div class="form-group">
								
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('opd_id',  null, ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'Opd_id']) !!}
	         
								</div>
							
								<div class="form-group">
								
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName',  null, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','Disabled']) !!}
							    </div>
								
								<div class="form-group">
								
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate',  null, ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','Disabled']) !!}
							    </div>
								
								<div class="form-group">
								
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::select('consultant', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',],  null, ['class' => 'form-control','disabled']) !!}
							    </div>
								<div class="form-group">
								
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('patientName',  null, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							    </div>
								<div class="form-group">
								
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('otDate',  null, ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
							</div>

						       <div class="row">
					            <div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'S. TYPHI "O"') !!}
	        {!! Form::text('sTyphiO',null, ['class' => 'form-control','placeholder' => 'Enter TYPHI MHO']) !!}
							    </div>
								</div>
								<div class=" col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'S.  TYPHI "H"') !!}
	        {!! Form::text('sTyphiAH',  null, ['class' => 'form-control','placeholder' => 'Enter type h
	        H']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'S. PARA TYPHI "BH"') !!}
	        {!! Form::text('sTyphiBH',  null, ['class' => 'form-control','placeholder' => 'Enter PARA TYPHI']) !!}
							    </div>
								</div>
										<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'S. PARA TYPHI "BH"') !!}
	        {!! Form::text('sTyphiBH',  null, ['class' => 'form-control','placeholder' => 'Enter PARA TYPHI']) !!}
							    </div>
								</div>
							</div>
						<div class="offset-md-2 col-md-8 offset-md-2">
								<div class="form-group">
								
								{!! Form::label('name', 'IMPRESSION') !!}
	        {!! Form::textarea('impression',  null, ['class' => 'form-control','placeholder' => 'Enter IMPRESSION','rows' =>2, 'cols' => 14,]) !!}
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