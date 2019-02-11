@extends('master.layouts.app')
@section('main-content')
<div class="page">
    <div class="row ">
      <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0 card-title">PHYSIOTHERPY EXAMINATION</h3>
                    <div class="card-body">
                        <div class="btn-list" style="float: right;">
                            <a href="{{route('physiotherpy-filter')}}" class="btn btn-xs btn-square btn-success ">Show Physiotherpy Examination Patient List
                            </a>
                        </div>
                  </div>
            </div>
                <div class="card-body">
                                    @include('verror.error')
                                    {!! Form::open(array('route' =>'physiotherpy.store','files'=>'true','class'=>'fixed','id'=>'profile-form','autocomplete'=>'off'))!!}
                  <div class="col-md-12">
                        <div class="row">
                        </div>
                     <div class="row">
                        <div class="col-md-offset-3 col-sm-2">
                         <div class="form-group">
                          {!! Form::label('opdNUM', 'OPD Number:*') !!}
                         </div>
                        </div>
                        <div class="col-sm-3">
                                    <div class="form-group">
                                    {!! Form::text('patientId','',['class' =>
                                    'form-control','id'=>'patientId','placeholder'=>'OPD
                                    Registration number']) !!}
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
                                    {!! Form::date('opdDate', '', ['class' =>
                                    'form-control','id'=>'opdDate','placeholder'=>'OPD
                                    date','readonly'=>'true']) !!}
                                    </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                                    <div class="form-group">
                                    {!! Form::label('patientName', 'PatientName:*')
                                    !!}
                                    </div>
                            </div>
                            <div class="col-sm-8">
                                    <div class="form-group">
                                    {!! Form::text('patientName', '', ['class' =>
                                    'form-control','name'=>'patientName','id'=>'patientName','readonly'=>'true'])
                                    !!}
                                    </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                                    <div class="form-group">
                                    {!! Form::label('ipdRegNum', 'IPD Number:*')
                                            !!}
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                    {!! Form::text('ipdRegNum', '', ['class' =>
                                    'form-control','id'=>'ipdRegNum','name'=>'ipdRegNum','placeholder'=>'IPDRegistration number','readonly'=>'true']) !!}
                                    </div>
                            </div>
                            <div class="col-md-offset-3 col-sm-2">
                                    <div class="form-group">
                                    {!! Form::label('ipdRegNUM', 'IPD Date:*') !!}
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                    {!! Form::date('ipdDate', '', ['class' =>
                                    'form-control','id'=>'ipdDate','name'=>'ipdDate','placeholder'=>'IPD
                                    date','readonly'=>'true']) !!}
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
                                    {!! Form::text('age', '', ['class' =>
                                    'form-control','id'=>'age','name'=>'age','placeholder'=>'AGE','readonly'=>'true'])
                                    !!}
                                    </div>
                            </div>
                            <div class="col-md-offset-3 col-sm-2">
                                    <div class="form-group">
                                    {!! Form::label('gender', 'GENDER:*') !!}
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                    {!! Form::text('gender', '', ['class' =>
                                    'form-control','id'=>'gender','name'=>'gender','placeholder'=>'GENDER','readonly'=>'true'])
                                    !!}
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
                                    {!! Form::text('address', '', ['class' =>
                                    'form-control','id'=>'address','placeholder'=>'address','readonly'=>'true'])
                                    !!}
                                    </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                                    <div class="form-group">
                                    {!! Form::label('refferdBy', 'Reffered By:*') !!}
                                    </div>
                            </div>
                            <div class="col-sm-8">
                                    <div class="form-group">
                                    {!! Form::text('referredBy','', ['class' =>
                                    'form-control','id'=>'referredBy','placeholder'=>'referredBy','readonly'=>'true'])
                                    !!}
                                    </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                                    <div class="form-group">
                                    {!! Form::label('otDate', 'Test Date:*') !!}
                                    </div>
                            </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                    {!! Form::date('phyadate', '', ['class' =>
                                    'form-control','id'=>'phyadate','name'=>'phyadate'])
                                    !!}
                                    </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                                    <div class="form-group">
                                    {!! Form::label('diagnosis', 'Disease
                                    diagnosis:*') !!}
                                    </div>
                            </div>
                    <div class="col-sm-8">
                            <div class="form-group">

                                    {!! Form::select('disease',$disease,
                                    '',
                                    ['class' =>
                                    'form-control','id'=>'disease','name'=>'disease'])
                                    !!}
                            </div>
                    </div>
                    </div>

                    <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                                    <div class="form-group">
                                     {!! Form::label('advicedTherapy', 'Adviced
                                     Therapy') !!}
                                    </div>
                            </div>
                            <div class="col-sm-8">
                                    <div class="form-group">
                                     {!! Form::text('therapy', '', ['class'=>'form-control','id'=>'therapy','placeholder'=>'AdvicedTherapy','name'=>'therapy'])
                                     !!}
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
                                    {!! Form::text('other', '', ['class' =>
                                    'form-control','id'=>'other','name'=>'other','placeholder'=>'other'])
                                    !!}
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
                                    {!!
                                    Form::textarea('remark','',['class'=>'form-control',
                                    'id'=>'remark','rows' => 3, 'cols' =>
                                    40,'placeholder'=>'Remark','name'=>'remark'])
                                    !!}
                                    </div>
                            </div>
                    </div>
                        <center> 
                            <button class="btn btn-square btn-success" type="submit">Submit</button>
                            <button class="btn btn-square btn-danger" type="reset">Cancel</button>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">

        </script>
<script type="text/javascript">

        jQuery(document).ready(function () {
                jQuery('#patientId').on('keyup', function () {
                        var opd = $(this).val();
                        $('#patientId').html("");
                        if (opd != '') {
                                var _token = $('input[name="_token"]').val();
                                $.ajax({

                                        url: "{{ route('physiotherpy.fetch') }}",
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
                        url: "{{ route('physiotherpy.fetchSearch') }}",
                        method: "POST",
                        data: { query: opd, _token: _token },
                        success: function (data) {
                                console.log(data);
                                $('#opdDate').val(data.data1.regDate);
                                $('#patientName').val(data.data1.patientName);
                                $('#age').val(data.data1.age);
                                $('#gender').val(data.data1.gender);
                                $('#address').val(data.data1.address);
                                $('#referredBy').val(data.doctor);
                                $('#phyadate').val(data.data1.phyadate);
                        }

                });
                $('#opd-reg-list').fadeOut();
        });

</script>


@endsection