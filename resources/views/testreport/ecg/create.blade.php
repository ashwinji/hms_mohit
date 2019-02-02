@extends('master.layouts.app')
    @section('main-content')
    <div class="page">
				<div class="page-main">
							<div class="row">
								<div class="col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="mb-0 card-title">ECG EXAMINATION</h3>
											<div class="card-body">
												<div class="btn-list" style="float: right;">
													<a href="{{route('ecg-filter')}}" class="btn btn-square btn-xs btn-success">Show ecg Examination Pateints List</a>
												</div>
									        </div>
									    </div>
			<div class="card-body">
				<div class="row">						
						<div class="col-md-12 ">
							@include('verror.error')
							{!! Form::open(['route' => ['ecg.store'],'autocomplete'=>'off']) !!}

							{!! csrf_field() !!}

							<!-- {{ Form::hidden('status', '1') }} -->
							<div class="row" >
                                         
				  							<div class="col-md-6 ">
											<div class="form-group">
										
						{!! Form::label('name', 'OPD Registration Number') !!}
					
				        {!! Form::text('patientId','', ['class' => 'form-control dynamic_opd',
				        'placeholder' => 'Enter Registration Number','id'=>'patientId']) !!}
				         <div id="opd-reg-list">

				         </div>
				       
											</div>
											
											<div class="form-group">
											
											{!! Form::label('name', 'Patient Name') !!}
				        {!! Form::text('patientName',  '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name']) !!}
										    </div>
													<div class="form-group">
											
											{!! Form::label('age', 'Patient Age') !!}
				        {!! Form::text('age',  '', ['class' => 'form-control','placeholder' => 'Enter Patient age','id'=>'age']) !!}
										    </div>

											<div class="form-group">
											
											{!! Form::label('name', 'OPD Date') !!}
				        {!! Form::date('opdDate',  '', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate']) !!}
										    </div>
											
											<div class="form-group">
											
											{!! Form::label('name', 'Referred By') !!}
				        {!! Form::select('referredBy', ['' => 'Referred By', 'S' => 'Small', 'Sz' => 'Smallz',],  '', ['class' => 'form-control']) !!}
										    </div>

					
											<div class="form-group">
											
											{!! Form::label('name', 'Test Date') !!}
				        {!! Form::date('date',  '', ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
										    </div>
										
										
											<div class="form-group">
											
											{!! Form::label('name', 'Remarks') !!}
				        {!! Form::textarea('remark',  '', ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 3, 'cols' => 10,]) !!}
										    </div>
											
												<div class="form-group">
												  <div style="float: right;">
												     {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
											      </div>
												</div>
							
												<div class="form-group">
												  <div >
												    <a href="{{route('ecg-create')}}"><button class="btn btn-primary">Cancel</button></a>
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