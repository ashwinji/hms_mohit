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
	  							<div class="offset-md-2 col-md-4">
								<div class="form-group">
					@include('verror.error')			
			{!! Form::label('name', 'OPD Registration Number') !!}
		
	        {!! Form::text('patientId', '', ['class' => 'form-control dynamic_opd',
	        'placeholder' => 'Enter Registration Number','id'=>'patientId']) !!}
	         <div id="opd-reg-list">
	         </div>
								</div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Patient Name') !!}
	        {!! Form::text('patientName', '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'patientName','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('regdate', '', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Referred By') !!}
	        {!! Form::text('referredBy','', ['class' => 'form-control','id'=>'referredBy','placeholder'=>'referredBy','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('investigationAdvised', '', ['class' => 'form-control','placeholder' => 'Enter investigationAdvised ','id'=>'investigationAdvised',]) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('date', '', ['class' => 'form-control','placeholder' => 'Enter test Date','id'=>'date']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Place Of Collection') !!}
	        {!! Form::text('placeOfCollection', '', ['class' => 'form-control','placeholder' => 'Enter Place Of Collection']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Time Of Collection In Lab') !!}
	        {!! Form::text('timeOfCollectionInLab', '', ['class' => 'form-control','placeholder' => 'Enter Collection In Lab']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Quantity') !!}
	        {!! Form::text('quantity', '', ['class' => 'form-control','placeholder' => 'Enter Quantity']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Consistency') !!}
	        {!! Form::text('consistency', '', ['class' => 'form-control','placeholder' => 'Enter Consistency']) !!}
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
								{!! Form::label('name', 'PH') !!}
	        {!! Form::text('ph', '', ['class' => 'form-control','placeholder' => 'Enter Total PH']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Liqufication Time') !!}
	        {!! Form::text('liquficationTime', '', ['class' => 'form-control','placeholder' => 'Enter Liqufication Time']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Viscocity') !!}
	        {!! Form::text('viscocity', '', ['class' => 'form-control','placeholder' => 'Enter Viscocity']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Count') !!}
	        {!! Form::text('count', '', ['class' => 'form-control','placeholder' => 'Enter Count']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Motility') !!}
	        {!! Form::text('motility', '', ['class' => 'form-control','placeholder' => 'Enter Motility']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Abnormal Forms') !!}
	        {!! Form::text('abnormalForms', '', ['class' => 'form-control','placeholder' => 'Enter Abnormal Forms']) !!}
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
								
								{!! Form::label('name', 'Epithelial Cells') !!}
	        {!! Form::text('epithelialCells', '', ['class' => 'form-control','placeholder' => 'Enter Epithelial Cells']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'RBCS') !!}
	        {!! Form::text('rbcs', '', ['class' => 'form-control','placeholder' => 'Enter Total RBCS']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
								
								{!! Form::label('name', 'Fructose Test') !!}
	        {!! Form::text('fructoseTest', '', ['class' => 'form-control','placeholder' => 'Enter Fructose Test']) !!}
							    </div>
								</div>
								<div class=" col-md-4">
								<div class="form-group">
								{!! Form::label('name', 'Remarks') !!}
	        {!! Form::textarea('other', '', ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 1, 'cols' => 10,]) !!}
							    </div>
								</div>
								<div class="col-md-6" >
									<div class="form-group">
									  <div style="float: right;">
									     {!! Form::submit('Submit', ['class' => 'btn btn-square btn-success','id'=>'submit']) !!}
								      </div>
									</div>
								</div>
								{!! Form::close() !!}
								<div class="col-md-6" >
									<div class="form-group">
									  <div >
									    <a href="{{route('semen-create')}}"class="btn btn-square btn-primary" type="reset" id="cancel">Cancel</a>
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

<script type="text/javascript">
		jQuery(document).ready(function(){
		            $('#submit').hide();
		            $('#cancel').hide();
		    $('#patientId').on('keyup',function(){
		        if($('#patientId').val() != ""){
		            $('#submit').show();
		            $('#cancel').show();
		        }
		        else {
		             $('#submit').hide();
		             $('#cancel').hide();
		        }
		    });
		});
</script>

<script type="text/javascript">
        jQuery(document).ready(function () {
                jQuery('#patientId').on('keyup', function () {
                        var opd = $(this).val();
                        $('#patientId').html("");
                        if (opd != '') {
                                var _token = $('input[name="_token"]').val();
                                $.ajax({
                                        url: "{{ route('yoga.fetch') }}",
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
                        url: "{{ route('yoga.fetchSearch') }}",
                        method: "POST",
                        data: { query: opd, _token: _token },
                        success: function (data) {
                        console.log(data);
                        $('#regDate').val(data.data1.regDate);
                        $('#patientName').val(data.data1.patientName);
                        $('#age').val(data.data1.age);
                        $('#referredBy').val(data.doctor);
                        }

                });
                $('#opd-reg-list').fadeOut();
        });

</script>
@endSection