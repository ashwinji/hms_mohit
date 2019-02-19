	@extends('master.layouts.app')
    @section('main-content')
	<div class="page">
		<div class="page-main">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h3 class="mb-0 card-title">STOOL EXAMINATION</h3>
								<div class="card-body">
									<div class="btn-list" style="float: right;">
										<a href="{{route('stool-filter')}}" class="btn btn-xs btn-success">Show Stool Examination Pateints List
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
				  @include('verror.error')	
			{!! Form::open(['route' => ['stool.store'],'autocomplete'=>'off']) !!}
			{!! csrf_field() !!}
			{{ Form::hidden('status', '1') }}
			              <div class="row">

							  <div class="offset-md-2 col-md-4">
						      <div class="form-group">	

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
	        {!! Form::text('patientName','', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'OPD Date') !!}
	        {!! Form::date('opdDate','', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Referred By') !!}
	        {!! Form::text('referredBy','', ['class' => 'form-control','id'=>'referredBy','readonly'=>'true']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Investigation Advised') !!}
	        {!! Form::text('investigationAdvised','', ['class' => 'form-control','placeholder' => 'investigationAdvised','id'=>'investigationAdvised',]) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Test Date') !!}
	        {!! Form::date('date','', ['class' => 'form-control','placeholder' => 'Enter Test Date']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Colour') !!}
	        {!! Form::text('colour','', ['class' => 'form-control','placeholder' => 'Enter Colour']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Consistency') !!}
	        {!! Form::text('consistency','', ['class' => 'form-control','placeholder' => 'Enter Consistency']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Mucus') !!}
	        {!! Form::text('mucus','', ['class' => 'form-control','placeholder' => 'Enter Mucus']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Blood') !!}
	        {!! Form::text('blood','', ['class' => 'form-control','placeholder' => 'Enter Blood']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Pus Cells') !!}
	        {!! Form::text('pusCells','', ['class' => 'form-control','placeholder' => 'Enter Pus Cells']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'RBCS') !!}
	        {!! Form::text('rbcs','', ['class' => 'form-control','placeholder' => 'Enter RBCS']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Vegetable Matter') !!}
	        {!! Form::text('vegetableMatter','', ['class' => 'form-control','placeholder' => 'Enter Vegetable Matter']) !!}
							    </div>
								</div>

								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Cysts') !!}
	        {!! Form::text('cysts','', ['class' => 'form-control','placeholder' => 'Enter Cysts']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Giardia') !!}
	        {!! Form::text('giardia','', ['class' => 'form-control','placeholder' => 'Enter Giardia']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'E Histolytica') !!}
	        {!! Form::text('eHistolytica','', ['class' => 'form-control','placeholder' => 'Enter E Histolytica']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'E Coil') !!}
	        {!! Form::text('eCoil','', ['class' => 'form-control','placeholder' => 'Enter E Coil']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'OVA') !!}
	        {!! Form::text('ova','', ['class' => 'form-control','placeholder' => 'Enter OVA']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Worms') !!}
	        {!! Form::text('worms','', ['class' => 'form-control','placeholder' => 'Enter Worms']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Occult Stool') !!}
	        {!! Form::text('occultBlood','', ['class' => 'form-control','placeholder' => 'Enter Occult Stool']) !!}
							    </div>
								</div>
								<div class="offset-md-2 col-md-4">
								<div class="form-group">					
			{!! Form::label('name', 'Reducing Substances') !!}
	        {!! Form::text('reducingSubstances','', ['class' => 'form-control','placeholder' => 'Enter Reducing Substances']) !!}
							    </div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
			{!! Form::label('name', 'Other') !!}
	        {!! Form::textarea('other','', ['class' => 'form-control','placeholder' => 'Enter Other','rows' => 1, 'cols' => 10,]) !!}
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
									    <a href=""><button class="btn btn-square btn-primary" type="reset" id="cancel">Cancel</button></a>
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
        jQuery(document).ready(function () {debugger
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
                                $('#opd_name').val(data.data1.patientName);
                                $('#age').val(data.data1.age);
                                $('#referredBy').val(data.doctor);
                        }

                });
                $('#opd-reg-list').fadeOut();
        });

</script>
@endSection