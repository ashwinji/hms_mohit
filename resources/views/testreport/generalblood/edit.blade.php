@extends('master.layouts.app')
@section('main-content')
<div class="page">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0 card-title">GENERAL BLOOD</h3>
					<div class="card-body">
					<div class="btn-list" style="float: right;">
					<a href="{{ route('generalblood-filter') }}" class="btn btn-xs btn-success">Show General Blood Examination Pateints List</a>
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
							{!! Form::open(['route' => ['generalblood.update',$generalblood->id],'autocomplete'=>'off','method'=>'PUT']) !!}
							{!! csrf_field() !!}
							{{ Form::hidden('status', '1') }}
							<div class="row">
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'OPD Registration Number') !!}
							{!! Form::text('opd_id', $generalblood->opd->regNum, ['class' => 'form-control dynamic_opd',
							'placeholder' => 'Enter Registration Number','id'=>'Opd_id']) !!}
							<div id="opd_list">
							</div>
							</div>
							</div>
							<div class=" col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Patient Name') !!}
							{!! Form::text('patientName',$generalblood->opd->patientName , ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'OPD Date') !!}
							{!! Form::date('opdDate',$generalblood->opd->regDate , ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate',]) !!}
							</div>
							</div>
							<div class=" col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Referred By') !!}
							{!! Form::text('referredBy',$generalblood->referredBy , ['class' => 'form-control',]) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Investigation Advised') !!}
							{!! Form::text('investigationAdvised',$generalblood->investigationAdvised  , ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Test Date') !!}
							{!! Form::date('date',$generalblood->date , ['class' => 'form-control','placeholder' => 'Enter Date']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Blood (Fasting)') !!}
							{!! Form::text('bloodFasting',$generalblood->bloodFasting  , ['class' => 'form-control','placeholder' => 'Enter Haemoglobin']) !!}
							</div>
							</div>
							<div class=" col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Blood (Random)') !!}
							{!! Form::text('bloodRandom',$generalblood->bloodRandom , ['class' => 'form-control','placeholder' => 'Enter Total RBC Count']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Blood (PP)') !!}
							{!! Form::text('bloodPP',$generalblood->bloodPP  , ['class' => 'form-control','placeholder' => 'Enter Haemoglobin']) !!}
							</div>
							</div>
							<div class=" col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Urea') !!}
							{!! Form::text('urea',$generalblood->urea  , ['class' => 'form-control','placeholder' => 'Enter Total RBC Count']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">

							{!! Form::label('name', 'Creatinine') !!}
							{!! Form::text('creatinine',$generalblood->creatinine  , ['class' => 'form-control','placeholder' => 'Enter Haemoglobin']) !!}
							</div>
							</div>
							<div class=" col-md-4">
							<div class="form-group">

							{!! Form::label('name', 'Uric Acid') !!}
							{!! Form::text('uricAcid',$generalblood->uricAcid , ['class' => 'form-control','placeholder' => 'Enter Uric Acid']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">

							{!! Form::label('name', 'Total Bilirubin') !!}
							{!! Form::text('totalBilirubin',$generalblood->totalBilirubin  , ['class' => 'form-control','placeholder' => 'Enter Total Bilirubin']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">

							{!! Form::label('name', 'Direct Bilirubin') !!}
							{!! Form::text('directBilirubin',$generalblood->directBilirubin  , ['class' => 'form-control','placeholder' => 'Enter Direct Bilirubin']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">

							{!! Form::label('name', 'SGPT / ALT') !!}
							{!! Form::text('sgptAlt',$generalblood->sgptAlt , ['class' => 'form-control','placeholder' => 'Enter SGPT / ALT']) !!}
							</div>
							</div>
							<div class=" col-md-4">
							<div class="form-group">

							{!! Form::label('name', 'SGOT / AST') !!}
							{!! Form::text('sgotAst',$generalblood->sgotAst  , ['class' => 'form-control','placeholder' => 'Enter SGOT / AST']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">

							{!! Form::label('name', 'ALK Phosphatase') !!}
							{!! Form::text('alkPhosphatase',$generalblood->alkPhosphatase , ['class' => 'form-control','placeholder' => 'Enter ALK Phosphatase']) !!}
							</div>
							</div>
							<div class=" col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Total Protein') !!}
							{!! Form::text('totalProtein',$generalblood->totalProtein, ['class' => 'form-control','placeholder' => 'Enter Total Protein']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Albumin') !!}
							{!! Form::text('albumin',$generalblood->albumin , ['class' => 'form-control','placeholder' => 'Enter Albumin']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'AG Ratio') !!}
							{!! Form::text('agRatio',$generalblood->agRatio , ['class' => 'form-control','placeholder' => 'Enter AG Ratio']) !!}
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
@endsection