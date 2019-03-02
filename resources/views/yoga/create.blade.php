@extends('master.layouts.app')
@section('headSection')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main-content')
<div class="page">
    <div class="row ">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 card-title">YOGA EXAMINATION</h3>
                    <div class="card-body">
                    <div class="btn-list" style="float: right;">
                    <a href="{{route('yoga-filter')}}" class="btn btn-square btn-xs btn-success">Show Yoga Examination Patient List
                    </a>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('verror.error')
                    {!! Form::open(array('route' => 'yoga.store','files'=>'true','class'=>'fixed','id'=>'profile-form','autocomplete'=>'off')) !!}
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('opdNUM', 'OPD Number:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                            {!! Form::text('opdNum', '',['class' => 'form-control','id'=>'opdNum','name'=>'opdNum','placeholder'=>'OPD Registration number']) !!}
                            <div id="opd-reg-list"></div>
                            </div>
                            </div>
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('opdDate', 'OPD Date:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                            {!! Form::date('opdDate', '', ['class' => 'form-control','id'=>'opdDate','name'=>'opdDate','placeholder'=>'OPD date','readonly'=>'true']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('patientName', 'PatientName:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-8">
                            <div class="form-group">
                            {!! Form::text('patientName', '', ['class' => 'form-control','name'=>'patientName','id'=>'patientName','readonly'=>'true']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('ipdRegNum', 'IPD Number:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                            {!! Form::text('ipdRegNum', '', ['class' => 'form-control','id'=>'ipdRegNum','name'=>'ipdRegNum','placeholder'=>'IPD Registration number','readonly'=>'true']) !!}
                            </div>
                            </div>
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('ipdRegNUM', 'IPD Date:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                            {!! Form::date('ipdDate', '', ['class' => 'form-control','id'=>'ipdDate','name'=>'ipdDate','placeholder'=>'IPD date','readonly'=>'true']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('age', 'AGE:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                            {!! Form::text('age', '', ['class' => 'form-control','id'=>'age','name'=>'age','placeholder'=>'AGE','readonly'=>'true']) !!}
                            </div>
                            </div>
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('gender', 'GENDER:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                            {!! Form::text('gender', '', ['class' => 'form-control','id'=>'gender','name'=>'gender','placeholder'=>'GENDER','readonly'=>'true']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('address', 'Address:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-8">
                            <div class="form-group">
                            {!! Form::text('address', '', ['class' => 'form-control','id'=>'address','placeholder'=>'address','readonly'=>'true']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('address', 'Reffered By:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-8">
                            <div class="form-group">
                            {!! Form::text('refferedby', '', ['class' => 'form-control','id'=>'refferedby','placeholder'=>'RefferedBY','readonly'=>'true']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('otDate', 'TESTDate:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                            {!! Form::date('yogadate', '', ['class' => 'form-control','id'=>'yogadate','name'=>'yogadate']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('diagnosis', 'Disease diagnosis:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-8">
                            <div class="form-group">
                            {!! Form::select('disease',$disease,'',['class' => 'form-control','id'=>'disease','name'=>'disease','placeholder'=>'select disease'])
                            !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('exersize', 'Exersize') !!}
                            </div>
                            </div>
                            <div class="col-sm-8">
                            <div class="form-group">
                            {!! Form::text('exersize', '', ['class' => 'form-control','id'=>'exersize','name'=>'exersize','placeholder'=>'exersize']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('other', 'Other') !!}
                            </div>
                            </div>
                            <div class="col-sm-8">
                            <div class="form-group">
                            {!! Form::text('other', '', ['class' => 'form-control','id'=>'other','name'=>'other','placeholder'=>'other']) !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('Remark', 'Remark:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-8">
                            <div class="form-group">
                            {!! Form::textarea('Remark',null,['class'=>'form-control', 'id'=>'Remark','rows' => 3, 'cols' => 40,'placeholder'=>'Remark','name'=>'Remark']) !!}
                            </div>
                            </div>
                        </div>
                        <center>  
                            <button class="btn btn-square btn-success" type="submit" id="submit">Submit</button>
                                <a href="{{route('dashboard')}}"  class="btn  btn-square btn-danger" id="cancel" type="reset">Cancel</a>
                        </center>
                        {!! Form::close() !!}
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
    $('#opdNum').on('keyup',function(){
    if($('#opdNum').val() != ""){
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
    jQuery(document).ready(function(){ 
    jQuery('#opdNum').on('keyup',function(){
    var opd= $(this).val();
    $('#opdNum').html("");
    if(opd !='')
    {
    var _token = $('input[name="_token"]').val();
    $.ajax({

    url:"{{ route('yoga.fetch') }}",
    method:"POST",
    data:{query:opd,_token:_token},
    success:function(data){
    $('#opd-reg-list').fadeIn();
    $('#opd-reg-list').html(data);
    }

    });
    }
    });

    });
    $(document).on('click', 'li', function(){ 
    $('#opdNum').val($(this).text()); 
    var opd=$('#opdNum').val();
    var _token = $('input[name="_token"]').val();
    $.ajax({ 
    url:"{{ route('yoga.fetchSearch') }}",
    method:"POST",
    data:{query:opd,_token:_token},
    success:function(data){
    console.log(data);
    $('#opdDate').val(data.data1.regDate);
    $('#patientName').val(data.data1.patientName);
    $('#age').val(data.data1.age);
    $('#gender').val(data.data1.gender);
    $('#address').val(data.data1.address);
    $('#refferedby').val(data.doctor);
    $('#yogadate').val(data.data1.yogadate);
    // $('#otDate').val(data.otDate);

    }

    });
    $('#opd-reg-list').fadeOut();  
    }); 

</script>

<script type="text/javascript">
$(document).ready(function() {
    $("#disease").on("change", function() {
    var id= $("#disease").val();
    var token = $("meta[name='csrf-token']").attr("content");

    $.ajax({
    url: '{{route("getexercise")}}',
    type: 'POST',
    dataType: 'json',
    data: {
    id: id,
    _token: token,
    },
    success: function (res) {

    if(res.status==true){
    $('#exersize').val(res.excersise);
    }
    },      
    error: function (data) {

    }
    });

    });
    });
</script>
@endsection