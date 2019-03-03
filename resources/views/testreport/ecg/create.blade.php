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
						<a href="{{route('ecg-filter')}}" class="btn btn-square btn-xs btn-success">Show ecg Examination Pateints List
						</a>
						</div>
						</div>
					</div>
					<div class="card-body">
						<div class="row">						
							<div class="col-md-12 ">
								@include('verror.error')
								{!! Form::open(['route' => ['ecg.store'],'autocomplete'=>'off']) !!}
								{!! csrf_field() !!}
								{{ Form::hidden('status', '1') }} 
								<div class="row" >
								<div class="offset-md-2 col-md-8 offset-md-2 ">
								<div class="form-group">
								{!! Form::label('name', 'OPD Registration Number') !!}
								{!! Form::text('patientId','', ['class' => 'form-control dynamic_opd',
								'placeholder' => 'Enter Registration Number','id'=>'patientId']) !!}
								<div id="opd-reg-list">
								</div>
								</div>
								<div class="form-group">
								{!! Form::label('name', 'Patient Name') !!}
								{!! Form::text('patientName',  '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','readonly'=>'true']) !!}
								</div>
								<div class="form-group">					
								{!! Form::label('age', 'Patient Age') !!}
								{!! Form::text('age',  '', ['class' => 'form-control','placeholder' => 'Enter Patient age','id'=>'age','readonly'=>'true']) !!}
								</div>
								<div class="form-group">
								{!! Form::label('name', 'OPD Date') !!}
								{!! Form::date('opdDate',  '', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','readonly'=>'true']) !!}
								</div>
								<div class="form-group">
								{!! Form::label('name', 'Referred By') !!}
								{!! Form::text('referredBy', '', ['class' => 'form-control','id'=>'referredBy','placeholder'=>'RefferedBY','readonly'=>'true']) !!}
								</div>
								<div class="form-group">
								{!! Form::label('name', 'Test Date') !!}
								{!! Form::date('date',  '', ['class' => 'form-control','placeholder' => 'Enter OT Date']) !!}
								</div>
								<div class="form-group">
								{!! Form::label('name', 'Remarks') !!}
								{!! Form::textarea('remark',  '', ['class' => 'form-control','placeholder' => 'Enter Remarks','rows' => 2, 'cols' => 10,]) !!}
								</div>			
								<div class="offset-md-4 col-md-4 offset-md-4" >
								<div class="form-group">
								{!! Form::submit('Submit', ['class' => 'btn btn-square btn-success','id'=>'submit']) !!}
								<a href="{{route('ecg-create')}}"class="btn btn-square btn-primary" id="cancel">Cancel
								</button></a>
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