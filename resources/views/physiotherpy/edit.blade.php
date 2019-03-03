@extends('master.layouts.app')
@section('main-content')
<div class="page">
    <div class="row ">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 card-title">UPDATE PHYSIOTHERPY EXAMINATION</h3>
                    <div class="card-body">
                    <div class="btn-list" style="float: right;">
                    <a href="{{route('physiotherpy-filter')}}" class="btn btn-square btn-xs btn-success ">Show
                    Physiotherpy Examination Patient List</a>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('verror.error')
                    {!!
                    Form::open(array('route'=>['physiotherpy.update',$physiotherpy->id],'files'=>'true','class'=>'fixed','id'=>'profile-form','method'=>'PUT','autocomplete'=>'off'))
                    !!}
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('opdNUM', 'OPD Number:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-3">
                            <div class="form-group">
                            {!!
                            Form::text('patientId',$physiotherpy->opd->regNum,['class'
                            =>
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
                            {!! Form::date('opdDate',
                            $physiotherpy->opd->regDate, ['class' =>
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
                            {!!
                            Form::text('patientName',$physiotherpy->opd->patientName,
                            ['class' =>
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
                            'form-control','id'=>'ipdRegNum','name'=>'ipdRegNum','placeholder'=>'IPD
                            Registration number','readonly'=>'true']) !!}
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
                            {!! Form::text('age',$physiotherpy->opd->age,
                            ['class' =>
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
                            {!! Form::text('gender',
                            $physiotherpy->opd->gender, ['class' =>
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
                            {!! Form::text('address',
                            $physiotherpy->opd->address, ['class' =>
                            'form-control','id'=>'address','placeholder'=>'address','readonly'=>'true'])
                            !!}
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-3 col-sm-2">
                            <div class="form-group">
                            {!! Form::label('reffered', 'Reffered By:*') !!}
                            </div>
                            </div>
                            <div class="col-sm-8">
                            <div class="form-group">
                            {!!
                            Form::text('refferedby',$physiotherpy->referredBy,
                            ['class' =>
                            'form-control','id'=>'refferedby','placeholder'=>'RefferedBY','readonly'=>'true'])
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
                            {!!
                            Form::date('testDate',$physiotherpy->phyadate,
                            ['class' =>
                            'form-control','id'=>'otDate','name'=>'testDate'])
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
                            $physiotherpy->disease,
                            ['class' =>
                            'form-control','id'=>'disease','name'=>'disease','placeholder'=>'select disease Diagnosis'])
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
                            {!! Form::text('advicedTherapy',
                            $physiotherpy->therapy, ['class' =>
                            'form-control','id'=>'therapy','placeholder'=>'therapy','name'=>'therapy'])
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
                            {!! Form::text('other',$physiotherpy->other,
                            ['class' =>
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
                            Form::textarea('remark',$physiotherpy->remark,['class'=>'form-control',
                            'id'=>'remark','rows' => 3, 'cols' =>
                            40,'placeholder'=>'Remark','name'=>'remarks'])
                            !!}
                            </div>
                            </div>
                        </div>
                        <center> 
                            <button class="btn btn-square btn-success" type="submit">Submit</button>
                            <a href="{{route('dashboard')}}" class="btn btn-square btn-danger" type="reset">Cancel</a>
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

@endsection