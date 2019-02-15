	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
        <div class="row ">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="mb-0 card-title">UPDATE SEMENE EXAMINATION</h3>
                                <div class="card-body">
                                  <div class="btn-list" style="float: right;">
                                    <a href="{{route('semen-filter')}}" class="btn btn-xs btn-success ">Show
                                     Semen Examination Patient List
                                     </a>
                                   </div>
                               </div>
                            </div>
                                <div class="card-body">
			{!! Form::open(['route' => ['semen.update',$semen->id],'autocomplete'=>'off','method'=>'PUT']) !!}

							{!! csrf_field() !!}

							{{ Form::hidden('status', '1') }}
							<div class="row">
	  							<div class="offset-md-2 col-md-4">
								<div class="form-group">
					@include('verror.error')			
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('patientId', $semen->opd->regNum, ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'patientId']) !!}
	         <div id="opd-reg-list">
	         </div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName', $semen->opd->patientName, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate',$semen->opd->regDate, ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::text('referredBy',$semen->referredBy, ['class' => 'form-control','id'=>'referredBy','placeholder'=>'referredBy','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('patientName',$semen->investigationAdvised, ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('otDate',$semen->date, ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Place Of Collection') !!}
	        {!! Form::text('placeOfCollection',$semen->placeOfCollection, ['class' => 'form-control','placeholder' => 'Enter Place Of Collection']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Time Of Collection In Lab') !!}
	        {!! Form::text('timeOfCollectionInLab',$semen->timeOfCollectionInLab, ['class' => 'form-control','placeholder' => 'Enter Collection In Lab']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Quantity') !!}
	        {!! Form::text('quantity', $semen->quantity, ['class' => 'form-control','placeholder' => 'Enter Quantity']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Consistency') !!}
	        {!! Form::text('consistency', $semen->consistency, ['class' => 'form-control','placeholder' => 'Enter Consistency']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Colour') !!}
	        {!! Form::text('colour', $semen->colour, ['class' => 'form-control','placeholder' => 'Enter Colour']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'PH') !!}
	        {!! Form::text('ph', $semen->ph, ['class' => 'form-control','placeholder' => 'Enter Total PH']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Liqufication Time') !!}
	        {!! Form::text('liquficationTime', $semen->liquficationTime, ['class' => 'form-control','placeholder' => 'Enter Liqufication Time']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Viscocity') !!}
	        {!! Form::text('viscocity', $semen->viscocity, ['class' => 'form-control','placeholder' => 'Enter Viscocity']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Count') !!}
	        {!! Form::text('count', $semen->count, ['class' => 'form-control','placeholder' => 'Enter Count']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Motility') !!}
	        {!! Form::text('motility', $semen->motility, ['class' => 'form-control','placeholder' => 'Enter Motility']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Abnormal Forms') !!}
	        {!! Form::text('abnormalForms', $semen->abnormalForms, ['class' => 'form-control','placeholder' => 'Enter Abnormal Forms']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Pus Cells') !!}
	        {!! Form::text('pusCells', $semen->pusCells, ['class' => 'form-control','placeholder' => 'Enter Pus Cells']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Epithelial Cells') !!}
	        {!! Form::text('epithelialCells', $semen->epithelialCells, ['class' => 'form-control','placeholder' => 'Enter Epithelial Cells']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'RBCS') !!}
	        {!! Form::text('rbcs',$semen->rbcs, ['class' => 'form-control','placeholder' => 'Enter Total RBCS']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Fructose Test') !!}
	        {!! Form::text('fructoseTest', $semen->fructoseTest, ['class' => 'form-control','placeholder' => 'Enter Fructose Test']) !!}
							    </div>
								</div>
								<div class=" col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('other', $semen->other, ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 1, 'cols' => 10,]) !!}
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
</div>
@endsection

@section('footerSection')

@endSection