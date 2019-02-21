	@extends('master.layouts.app')
	@section('main-content')
	<div class="page">
		<div class="row">
		  <div class="col-lg-12">
		   <div class="card">
		     <div class="card-header">
		       <h3 class="mb-0 card-title">OPD - NEW PATIENT REGISTRATION</h3>
		         <div class="card-body">
		           <div class="btn-list" style="float: right;">
						<a href="{{route('opd-filter')}}" class="btn btn-square btn-xs btn-success">Show / Search Old Opd Patients
						</a>
		           </div>
		      </div>
		   </div>
		<div class="card-body">
		@include('verror.error')
		{!! Form::open(array('route' =>'opd.store','files'=>'true','id'=>'profile-form')) !!}
		<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
											<div class="form-group">
			{!! Form::label('PatientTitle', 'Patient Title:*') !!}
											</div>
			</div>
			<div class="col-sm-8">
											<div class="form-group">
			{!! Form::select('patientTitle',array('' => '----Select Title----','Mr.' => 'Mr.',
									'Mrs.' => 'Mrs.',
									'Ms.' => 'Ms.',
									'Mst.' => 'Mst.',
									'Baby' => 'Baby',
									),
									'',['class' =>'form-control','id'=>'patientTitle','name'=>'patientTitle'])
									!!}
									<div class="error text-danger">{{ $errors->first('patientTitle')}}</div>
								            </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
									<div class="form-group">
			{!! Form::label('Patient Name', 'Patient Name:*') !!}
									</div>
			</div>
								<div class="col-sm-8">
										<div class="form-group">
			{!! Form::text('patientName', '', ['class' =>'form-control','id'=>'patientName',]) !!}
			<div class="error text-danger">{{ $errors->first('patientName')}}</div>
										</div>
								</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
					<div class="form-group">
			{!! Form::label('regNum', 'Registration Number:*') !!}
					</div>
			</div>
			<div class="col-sm-8">
					<div class="form-group">
			{!! Form::text('regNum', '', ['class' =>'form-control','id'=>'regNum','name'=>'regNum'])
													!!}
			<div class="error text-danger">{{ $errors->first('regNum')}}</div>
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
					<div class="form-group">
			{!! Form::label('regDate', 'Registration Date:*') !!}
					</div>
			</div>
			<div class="col-sm-8">
					<div class="form-group">
			{!! Form::date('regDate', '', ['class' =>'form-control','id'=>'regDate','name'=>'regDate'])
													!!}
				<div class="error text-danger">{{ $errors->first('regDate')}}</div>									
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
					<div class="form-group">
		   {!! Form::label('Address', 'Address:*') !!}
					</div>
			</div>
			<div class="col-sm-8">
					<div class="form-group">
		   {!! Form::text('address', '', ['class' =>'form-control','id'=>'address','name'=>'address'])
													!!}
				<div class="error text-danger">{{ $errors->first('address')}}</div>										
					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">

					<div class="form-group">
		   {!! Form::label('Age', 'Age:*') !!}
					</div>
			</div>
			<div class="col-sm-8">
					<div class="form-group">
		   {!! Form::text('Age', '', ['class' =>'form-control','id'=>'Age','name'=>'Age']) !!}
		   <div class="error text-danger">{{ $errors->first('Age')}}</div>	

					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
				<div class="col-lg-1">
				<div class="form-group">
				{!! Form::label('gender', 'Gender:')
				!!}
				</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="form-group">
				{!! Form::select('gender', 
				array( 
				''=> '-Select Gender-', 
				'Male Adult' =>'Male Adult',
				'Female Adult' =>'Female Adult',
				'Male Child' =>'Male Child',
				'Female Child' =>'Female Child', ), '',
				['class' =>'form-control','id'=>'gender'])
				!!}
				<div class="error text-danger">{{ $errors->first('gender')}}</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
				<div class="form-group">
				{!! Form::label('Consultant', 'Consultant:*')!!}
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
				{!! Form::select('Consultant',$docterlist,
				'',
				['class' =>
				'form-control','id'=>'Consultant','name'=>'Consultant','placeholder'=>'select consulant',])
				!!}
				<div class="error text-danger">{{ $errors->first('Consultant')}}</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
				<div class="form-group">
				{!! Form::label('otherConsultant', 'Other Consultant') !!}
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
				{!! Form::text('otherConsultant', '', ['class' =>
				'form-control','id'=>'otherConsultant','name'=>'otherConsultant'])
				!!}
				<div class="error text-danger">{{ $errors->first('otherConsultant')}}</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-3 col-sm-2">
				<div class="form-group">
				{!! Form::label('department', 'Department') !!}
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
				{!! Form::select('department',$department,'',['class' =>
				'form-control','id'=>'department','name'=>'department','placeholder'=>'select department'])
				!!}
				<div class="error text-danger">{{ $errors->first('department')}}</div>
				</div>
			</div>
		</div>
		<center>
			<button class="btn btn-lg btn-square btn-success" type="submit">Save</button>
			<button class="btn btn-lg btn-square btn-danger" type="reset">Cancel</button>
		</center>
		{!! Form::close() !!}
		</div>
	</div>
  </div>
 </div>
</div>
</div>
		@endsection