@extends('master.layouts.app')
@section('main-content')
<div class="page">
		<div class="row ">
                <div class="col-lg-12">

						<dic class="card">

                         <div class="card-header">
							<h4 class="page-title">DIETPLAN - NEW  REGISTRATION</h4>
							<div class="card-body">
							<div style="float: right;">
							<ol class="breadcrumb"  >
								<li class="breadcrumb-item"><a href="#">DIETPLAN</a></li>
								<li class="breadcrumb-item active" aria-current="page">DIETPLAN REGISTRATION</li>
							</ol>
						   </div>
					        </div>

						</div>
				
						<div class="row">
							<div class="col-md-12">

								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">DIETPLAN - REGISTRATION</h3>
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
						
						{!! Form::open(['route' =>['dietPlan.store'],'autocomplete'=>'off']) !!}

						{!! csrf_field() !!}

						
						<div class="row">
  							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('name', 'DietPlan Name') !!}
								    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                              <div class="col-md-6" >
								<div class="form-group">
								  <div style="float: right;">
								     {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
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
</div>
</div>
</div>
</div>
@endsection