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
					<a href="{{ route('generalblood-filter') }}" class="btn btn-square btn-xs btn-success">Show General Blood Examination Pateints List
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
							{!! Form::open(['route' => ['generalblood.store'],'autocomplete'=>'off']) !!}
							{!! csrf_field() !!}
							@include('verror.error')
							{{ Form::hidden('status', '1') }}
							<div class="row">
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'OPD Registration Number') !!}
							{!! Form::text('patientId',  '', ['class' => 'form-control dynamic_opd',
							'placeholder' => 'Enter Registration Number','id'=>'patientId']) !!}
							<div id="opd-reg-list">
							</div>
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Patient Name') !!}
							{!! Form::text('patientName',  '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name','readonly'=>'true']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'OPD Date') !!}
							{!! Form::date('opdDate',  '', ['class' => 'form-control','placeholder' => 'Enter Registration Date','id'=>'regDate','readonly'=>'true']) !!}
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
							{!! Form::text('investigationAdvised',  '', ['class' => 'form-control','placeholder' => 'Enter Patient Name','id'=>'opd_name',]) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Test Date') !!}
							{!! Form::date('date',  '', ['class' => 'form-control','placeholder' => 'Enter Date']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Blood (Fasting)') !!}
							{!! Form::text('bloodFasting',  '', ['class' => 'form-control','placeholder' => 'Enter Haemoglobin']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Blood (Random)') !!}
							{!! Form::text('bloodRandom',  '', ['class' => 'form-control','placeholder' => 'Enter Total RBC Count']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Blood (PP)') !!}
							{!! Form::text('bloodPP',  '', ['class' => 'form-control','placeholder' => 'Enter Haemoglobin']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Urea') !!}
							{!! Form::text('urea',  '', ['class' => 'form-control','placeholder' => 'Enter Total RBC Count']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">

							{!! Form::label('name', 'Creatinine') !!}
							{!! Form::text('creatinine',  '', ['class' => 'form-control','placeholder' => 'Enter Haemoglobin']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Uric Acid') !!}
							{!! Form::text('uricAcid',  '', ['class' => 'form-control','placeholder' => 'Enter Uric Acid']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Total Bilirubin') !!}
							{!! Form::text('totalBilirubin',  '', ['class' => 'form-control','placeholder' => 'Enter Total Bilirubin']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Direct Bilirubin') !!}
							{!! Form::text('directBilirubin',  '', ['class' => 'form-control','placeholder' => 'Enter Direct Bilirubin']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'SGPT / ALT') !!}
							{!! Form::text('sgptAlt',  '', ['class' => 'form-control','placeholder' => 'Enter SGPT / ALT']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'SGOT / AST') !!}
							{!! Form::text('sgotAst',  '', ['class' => 'form-control','placeholder' => 'Enter SGOT / AST']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'ALK Phosphatase') !!}
							{!! Form::text('alkPhosphatase',  '', ['class' => 'form-control','placeholder' => 'Enter ALK Phosphatase']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Total Protein') !!}
							{!! Form::text('totalProtein',  '', ['class' => 'form-control','placeholder' => 'Enter Total Protein']) !!}
							</div>
							</div>
							<div class="offset-md-2 col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'Albumin') !!}
							{!! Form::text('albumin',  '', ['class' => 'form-control','placeholder' => 'Enter Albumin']) !!}
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							{!! Form::label('name', 'AG Ratio') !!}
							{!! Form::text('agRatio',  '', ['class' => 'form-control','placeholder' => 'Enter AG Ratio']) !!}
							</div>
							</div>
							<div class="col-md-6" >
							<div class="form-group">
							<div style="float: right;">
							{!! Form::submit('Submit', ['class' => 'btn  btn-square btn-success','id'=>'submit']) !!}
							</div>
							</div>
							</div>
							{!! Form::close() !!}
							<div class="col-md-6" >
							<div class="form-group">
							<div >
							<a href="" class=" btn btn-square btn-primary" id="cancel" type="reset">Cancel</a>
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

<<<<<<< HEAD
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
=======
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
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f

});
</script>
<script type="text/javascript">
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