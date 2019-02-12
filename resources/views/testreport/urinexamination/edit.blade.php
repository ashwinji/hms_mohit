	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
		<div class="page-main">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="mb-0 card-title">UPDATE URINE EXAMINATION</h3>
							<div class="card-body">
								<div class="btn-list" style="float: right;">			
									<a href="{{route('urine-filter')}}" class="btn btn-xs btn-success">Show Urine Examination Pateints List
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
			{!! Form::open(['route' => ['urine.update',$urine->id],'autocomplete'=>'off','method'=>'PUT']) !!}
			{!! csrf_field() !!}
			{!!method_field('PUT') !!}
			{{ Form::hidden('status', '1') }}
			<div class="row">
					         <div class="offset-md-2 col-md-4">
				             <div class="form-group">
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('patientId', $urine->opd->regNum, ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'Opd_id']) !!}
					         <div id="opd_list">
					         </div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName', $urine->opd->patientName, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','readonly']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate', $urine->opd->regDate, ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','readonly']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::text('referredBy',$urine->referredBy, ['class' => 'form-control','readonly']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('investigationAdvised',$urine->investigationAdvised, ['class' => 'form-control','placeholder' => 'Enter Investigation Advised','id'=>'investigationAdvised',]) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('testdate',$urine->date, ['class' => 'form-control','placeholder' => 'Enter test Date']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Sample') !!}
	        {!! Form::text('sample',$urine->sample, ['class' => 'form-control','placeholder' => 'Enter Sample']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Quantity') !!}
	        {!! Form::text('quantity',$urine->quantity, ['class' => 'form-control','placeholder' => 'Enter Quantity']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Colour') !!}
	        {!! Form::text('colour',$urine->colour, ['class' => 'form-control','placeholder' => 'Enter Colour']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'SP Gravity') !!}
	        {!! Form::text('spGravity',$urine->spGravity, ['class' => 'form-control','placeholder' => 'Enter SP Gravity']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Reaction') !!}
	        {!! Form::text('reaction',$urine->spGravity, ['class' => 'form-control','placeholder' => 'Enter Reaction']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Albumin') !!}
	        {!! Form::text('albumin',$urine->albumin, ['class' => 'form-control','placeholder' => 'Enter Albumin']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Suger') !!}
	        {!! Form::text('suger',$urine->suger, ['class' => 'form-control','placeholder' => 'Enter Suger']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'BileSalts') !!}
	        {!! Form::text('bileSalts',$urine->bileSalts, ['class' => 'form-control','placeholder' => 'Enter BileSalts']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Bile Pigments') !!}
	        {!! Form::text('bilePigments',$urine->bilePigments, ['class' => 'form-control','placeholder' => 'Enter Bile Pigments']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Acetone') !!}
	        {!! Form::text('acetone',$urine->acetone, ['class' => 'form-control','placeholder' => 'Enter Acetone']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Bence Jones Proteins') !!}
	        {!! Form::text('benceJonesProteins', $urine->benceJonesProteins, ['class' => 'form-control','placeholder' => 'Enter Bence Jones Proteins']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Pus Cells') !!}
	        {!! Form::text('pusCells',$urine->pusCells, ['class' => 'form-control','placeholder' => 'Enter Pus Cells']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Epithellal Cells') !!}
	        {!! Form::text('epithellalCells',$urine->epithellalCells, ['class' => 'form-control','placeholder' => 'Enter Epithellal Cells']) !!}
							    </div>
								</div>
								<div class=" col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Crystals') !!}
	        {!! Form::text('crystals',$urine->crystals, ['class' => 'form-control','placeholder' => 'Enter Crystals']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'RBS') !!}
	        {!! Form::text('rbs',$urine->rbs, ['class' => 'form-control','placeholder' => 'Enter RBS']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Bacteria') !!}
	        {!! Form::text('bacteria',$urine->bacteria, ['class' => 'form-control','placeholder' => 'Enter Bacteria']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Cast') !!}
	        {!! Form::text('cast',$urine->cast, ['class' => 'form-control','placeholder' => 'Enter Cast']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('others',$urine->others, ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 1, 'cols' => 10,]) !!}
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