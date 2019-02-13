@extends('master.layouts.app')
@section('main-content')
<div class="page">
			<div class="page-main">

				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">YOGALIST - NEW PATIENT REGISTRATION</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">YOGALIST</a></li>
								<li class="breadcrumb-item active" aria-current="page">YOGALIST REGISTRATION</li>
							</ol>

						</div>
						<div class="row">
							<div class="col-md-12">

								<div class="card">
									<div class="card-header">
										<h3 class="mb-0 card-title">YOGALIST - REGISTRATION</h3>
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
						{!! Form::open(['route' => ['yogalist.update',$yogalist->id],'autocomplete'=>'off']) !!}

						{!! csrf_field() !!}

						
						<div class="row">
  							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('name', 'Disease Name') !!}
								    {!! Form::text('disease', $yogalist->disease, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									{!! Form::label('name', 'Exersise Name') !!}
								    {!! Form::text('exersise', $yogalist->exersise, ['class' => 'form-control']) !!}
								</div>
							</div>

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


@endsection