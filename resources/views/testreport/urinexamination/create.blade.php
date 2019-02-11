	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
		<div class="page-main">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="mb-0 card-title">URINE EXAMINATION</h3>
							<div class="card-body">
								<div class="btn-list" style="float: right;">			
									<a href="#" class="btn btn-xs btn-success">Show Urine Examination Pateints List
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
			{!! Form::open(['route' => ['urine.store'],'autocomplete'=>'off']) !!}
			{!! csrf_field() !!}
			{{ Form::hidden('status', '1') }}
			<div class="row">
					         <div class="offset-md-2 col-md-4">
				             <div class="form-group">
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('opd_id', '', ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'Opd_id']) !!}
					         <div id="opd_list">
					         </div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName', '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','Disabled']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate', '', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','Disabled']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::select('consultant', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',], '', ['class' => 'form-control','disabled']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('patientName', '', ['class' => 'form-control','placeholder' => 'Enter Investigation Advised','id'=>'opd_name',]) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('otDate', '', ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Sample') !!}
	        {!! Form::text('sample', '', ['class' => 'form-control','placeholder' => 'Enter Sample']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Quantity') !!}
	        {!! Form::text('quantity', '', ['class' => 'form-control','placeholder' => 'Enter Quantity']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Colour') !!}
	        {!! Form::text('colour', '', ['class' => 'form-control','placeholder' => 'Enter Colour']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'SP Gravity') !!}
	        {!! Form::text('spGravity', '', ['class' => 'form-control','placeholder' => 'Enter SP Gravity']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Reaction') !!}
	        {!! Form::text('reaction', '', ['class' => 'form-control','placeholder' => 'Enter Reaction']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Albumin') !!}
	        {!! Form::text('albumin', '', ['class' => 'form-control','placeholder' => 'Enter Albumin']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Suger') !!}
	        {!! Form::text('suger', '', ['class' => 'form-control','placeholder' => 'Enter Suger']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'BileSalts') !!}
	        {!! Form::text('bileSalts', '', ['class' => 'form-control','placeholder' => 'Enter BileSalts']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Bile Pigments') !!}
	        {!! Form::text('bilePigments', '', ['class' => 'form-control','placeholder' => 'Enter Bile Pigments']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Acetone') !!}
	        {!! Form::text('acetone', '', ['class' => 'form-control','placeholder' => 'Enter Acetone']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Bence Jones Proteins') !!}
	        {!! Form::text('benceJonesProteins', '', ['class' => 'form-control','placeholder' => 'Enter Bence Jones Proteins']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Pus Cells') !!}
	        {!! Form::text('pusCells', '', ['class' => 'form-control','placeholder' => 'Enter Pus Cells']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Epithellal Cells') !!}
	        {!! Form::text('epithellalCells', '', ['class' => 'form-control','placeholder' => 'Enter Epithellal Cells']) !!}
							    </div>
								</div>
								<div class=" col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Crystals') !!}
	        {!! Form::text('crystals', '', ['class' => 'form-control','placeholder' => 'Enter Crystals']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'RBS') !!}
	        {!! Form::text('rbs', '', ['class' => 'form-control','placeholder' => 'Enter RBS']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Bacteria') !!}
	        {!! Form::text('bacteria', '', ['class' => 'form-control','placeholder' => 'Enter Bacteria']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Cast') !!}
	        {!! Form::text('cast', '', ['class' => 'form-control','placeholder' => 'Enter Cast']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('others', '', ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 1, 'cols' => 10,]) !!}
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