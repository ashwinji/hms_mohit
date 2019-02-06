	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
        <div class="row ">
                <div class="col-lg-12">
                        <div class="card">
                                <div class="card-header">
                                        <h3 class="mb-0 card-title">SEMENE EXAMINATION</h3>
                                        <div class="card-body">
                                                <div class="btn-list" style="float: right;">

                                                        <a href="{{route('semen-filter')}}" class="btn btn-xs btn-success ">Show
                                                                Semen Examination Patient List
                                                         </a>

                                                </div>

                                        </div>
                                </div>
                                <div class="card-body">
							{!! Form::open(['route' => ['semen.store'],'autocomplete'=>'off']) !!}

							{!! csrf_field() !!}

							{{ Form::hidden('status', '1') }}
							<div class="row">
	  							<div class="col-md-6">
								<div class="form-group">
					@include('verror.error')			
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('patientId', '', ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'patientId']) !!}
	         <div id="opd-reg-list">
	         </div>
	       
								</div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName', '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name']) !!}
							    </div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate', '', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate']) !!}
							    </div>
								</div>

								
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::select('consultant', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',], '', ['class' => 'form-control']) !!}
							    </div>
								</div>

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('patientName', '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							    </div>
								</div>


								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('otDate', '', ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
							    </div>
								</div>
								

								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Place Of Collection') !!}
	        {!! Form::text('placeOfCollection', '', ['class' => 'form-control','placeholder' => 'Enter Place Of Collection']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Time Of Collection In Lab') !!}
	        {!! Form::text('timeOfCollectionInLab', '', ['class' => 'form-control','placeholder' => 'Enter Collection In Lab']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Quantity') !!}
	        {!! Form::text('quantity', '', ['class' => 'form-control','placeholder' => 'Enter Quantity']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Consistency') !!}
	        {!! Form::text('consistency', '', ['class' => 'form-control','placeholder' => 'Enter Consistency']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Colour') !!}
	        {!! Form::text('colour', '', ['class' => 'form-control','placeholder' => 'Enter Colour']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'PH') !!}
	        {!! Form::text('ph', '', ['class' => 'form-control','placeholder' => 'Enter Total PH']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Liqufication Time') !!}
	        {!! Form::text('liquficationTime', '', ['class' => 'form-control','placeholder' => 'Enter Liqufication Time']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Viscocity') !!}
	        {!! Form::text('viscocity', '', ['class' => 'form-control','placeholder' => 'Enter Viscocity']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Count') !!}
	        {!! Form::text('count', '', ['class' => 'form-control','placeholder' => 'Enter Count']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Motility') !!}
	        {!! Form::text('motility', '', ['class' => 'form-control','placeholder' => 'Enter Motility']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Abnormal Forms') !!}
	        {!! Form::text('abnormalForms', '', ['class' => 'form-control','placeholder' => 'Enter Abnormal Forms']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Pus Cells') !!}
	        {!! Form::text('pusCells', '', ['class' => 'form-control','placeholder' => 'Enter Pus Cells']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'Epithelial Cells') !!}
	        {!! Form::text('epithelialCells', '', ['class' => 'form-control','placeholder' => 'Enter Epithelial Cells']) !!}
							    </div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
								
								{!! Form::label('name', 'RBCS') !!}
	        {!! Form::text('rbcs', '', ['class' => 'form-control','placeholder' => 'Enter Total RBCS']) !!}
							    </div>
								</div>
								<div class="col-md-12">
								<div class="form-group">
								
								{!! Form::label('name', 'Fructose Test') !!}
	        {!! Form::text('fructoseTest', '', ['class' => 'form-control','placeholder' => 'Enter Fructose Test']) !!}
							    </div>
								</div>
								

								<div class="col-md-12">
								<div class="form-group">
								
								{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('other', '', ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 3, 'cols' => 10,]) !!}
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
		</div>
	@endsection
		@section('footerSection')


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">

        </script>
<script type="text/javascript">

        jQuery(document).ready(function () {debugger
                jQuery('#patientId').on('keyup', function () {
                        var opd = $(this).val();
                        $('#patientId').html("");
                        if (opd != '') {
                                var _token = $('input[name="_token"]').val();
                                $.ajax({

                                        url: "{{ route('ipd.fetch') }}",
                                        method: "POST",
                                        data: { query: opd, _token: _token },
                                        success: function (data) {
                                                $('#opd-reg-list').fadeIn();
                                                $('#opd-reg-list').html(data);
                                        }

                                });
                        }
                });

        });
        $(document).on('click', 'li', function () {
                $('#patientId').val($(this).text());
                var opd = $('#patientId').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                        url: "{{ route('ipd.fetchSearch') }}",
                        method: "POST",
                        data: { query: opd, _token: _token },
                        success: function (data) {
                                console.log(data);
                                $('#regDate').val(data.regDate);
                                $('#opd_name').val(data.patientName);
                                $('#age').val(data.age);
                                $('#referredBy').val(data.referredBy);
                        }

                });
                $('#opd-reg-list').fadeOut();
        });

</script>

	@endSection