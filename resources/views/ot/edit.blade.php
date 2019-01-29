@extends('master.layouts.app')
@section('main-content')
<div class="page">
        <div class="row ">
                <div class="col-lg-11">
                        <div class="card">
                                <div class="card-header">
                                        <h3 class="mb-0 card-title">OT - UPDATE PATIENT REGISTRATION</h3>
                                        <div class="card-body">
                                                <div class="btn-list" style="float: right;">
                                                        <a href="{{route('ot-filter')}}" class="btn btn-xs btn-success">
                                                                Show Search Old OT Patients
                                                        </a>
                                                </div>
                                        </div>
                                </div>
                                <div class="card-body">
                                        @include('verror.error')
                                        {!!
                                        Form::open(array('route'=>['ot.update',$ot->id],'files'=>'true','class'=>'fixed','id'=>'profile-form','method'=>'PUT','autocomplete'=>'off'))
                                        !!}
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
                                                                        {!! Form::text('opdNum',$ot->patientId,['class'
                                                                        =>
                                                                        'form-control','id'=>'opdNum','name'=>'opdNum','placeholder'=>'OPD
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
                                                                        {!! Form::date('opdDate', $ot->opdDate,
                                                                        ['class' =>
                                                                        'form-control','id'=>'opdDate','name'=>'opdDate','readonly'=>'true',
                                                                        'placeholder'=>'OPD date']) !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">
                                                                <div class="form-group">
                                                                        {!! Form::label('patientName','PatientName:*')
                                                                        !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">

                                                                <div class="form-group">
                                                                        {!!
                                                                        Form::text('patientName',$ot->opd->patientName,
                                                                        ['class' =>
                                                                        'form-control','name'=>'patientName','readonly'=>'true',
                                                                        'id'=>'patientName']) !!}
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
                                                                        {!! Form::text('ipdRegNum',$ot->ipdRegNum,
                                                                        ['class' =>
                                                                        'form-control','id'=>'ipdRegNum','name'=>'ipdRegNum','placeholder'=>'IPD
                                                                        Registration number']) !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('ipdRegNUM', 'IPD Date:*') !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-3">

                                                                <div class="form-group">
                                                                        {!! Form::date('ipdDate',$ot->ipdRegDate,
                                                                        ['class' =>
                                                                        'form-control','id'=>'ipdDate','name'=>'ipdDate','placeholder'=>'IPD
                                                                        date']) !!}
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
                                                                        {!! Form::text('age', $ot->opd->age, ['class'
                                                                        =>
                                                                        'form-control','id'=>'age','name'=>'age','readonly'=>'true',
                                                                        'placeholder'=>'AGE']) !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('gender', 'GENDER:*') !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-3">

                                                                <div class="form-group">
                                                                        {!! Form::text('gender',$ot->opd->gender,
                                                                        ['class' =>
                                                                        'form-control','id'=>'gender','name'=>'gender','readonly'=>'true',
                                                                        'placeholder'=>'GENDER']) !!}
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
                                                                        {!! Form::text('address',$ot->opd->address,
                                                                        ['class' =>
                                                                        'form-control','id'=>'address','readonly'=>'true'])
                                                                        !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('otDate', 'Ot Date:*') !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-3">

                                                                <div class="form-group">
                                                                        {!! Form::date('otDate',$ot->otDate, ['class'
                                                                        =>
                                                                        'form-control','id'=>'otDate','name'=>'otDate'])
                                                                        !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('diagnosis', 'Diagnosis:*') !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">

                                                                <div class="form-group">
                                                                        {!!
                                                                        Form::textarea('diagnosis',$ot->dignosis,['class'=>'form-control',
                                                                        'id'=>'diagnosis','name'=>'diagnosis','rows' =>
                                                                        3, 'cols' => 40,'placeholder'=>'diagnosis'])
                                                                        !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('otProcessure', 'OT
                                                                        Processure:*') !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                                <div class="form-group">
                                                                        {!!
                                                                        Form::textarea('otProcessure',$ot->otProcessure,['class'=>'form-control',
                                                                        'id'=>'otProcessure','name'=>'otProcessure','rows'
                                                                        => 3, 'cols' =>
                                                                        40,'placeholder'=>'otprocessre']) !!}
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">
                                                                <div class="form-group">
                                                                        {!! Form::label('Consultant', 'Consultant:*')
                                                                        !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                                <div class="form-group">

                                                                        {!! Form::select('Consultant',
                                                                        array(
                                                                        '' => '----Select Consultant----',
                                                                        'Medicine' => 'Medicine',
                                                                        'Surgery' => 'Surgery',
                                                                        'Obs / Gyne' => 'Obs / Gyne',
                                                                        'Pediatric' => 'Pediatric',
                                                                        'Others' => 'Others'
                                                                        ),
                                                                        $ot->consultant,
                                                                        ['class' =>
                                                                        'form-control','id'=>'consultant','name'=>'consultant'])
                                                                        !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('otherConsultant', 'Other
                                                                        Consultant') !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">

                                                                <div class="form-group">
                                                                        {!!
                                                                        Form::text('otherConsultant',$ot->otherConsultant,
                                                                        ['class' =>
                                                                        'form-control','id'=>'otherConsultant','name'=>'otherConsultant'])
                                                                        !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('adviceTreatment', 'advice &
                                                                        Treatment:*') !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">

                                                                <div class="form-group">
                                                                        {!!
                                                                        Form::textarea('adviceTreatment',$ot->adviceTreatment,['class'=>'form-control',
                                                                        'id'=>'adviceTreatment','name'=>'adviceTreatment','rows'
                                                                        => 3, 'cols' =>
                                                                        40,'placeholder'=>'adviceTreatment']) !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('medicine1', 'Medicine<span
                                                                                class="badge badge-danger control-label">1</span>',[],false)
                                                                        !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">

                                                                <div class="form-group">

                                                                        {!! Form::select('medicine1',
                                                                        array(
                                                                        '' => '-- Select Medicine --',
                                                                        'Medicine' => 'Medicine',
                                                                        'Surgery' => 'Surgery',
                                                                        'Obs / Gyne' => 'Obs / Gyne',
                                                                        'Pediatric' => 'Pediatric',
                                                                        'Others' => 'Others',
                                                                        ),
                                                                        $ot->medicine1,
                                                                        ['class' =>
                                                                        'form-control','id'=>'medicine1','name'=>'medicine1'])
                                                                        !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('medicine2', 'Medicine<span
                                                                                class="badge badge-danger control-label">2</span>',[],false)
                                                                        !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">

                                                                <div class="form-group">

                                                                        {!! Form::select('medicine1',
                                                                        array(
                                                                        '' => '-- Select Medicine --',
                                                                        'Medicine' => 'Medicine',
                                                                        'Surgery' => 'Surgery',
                                                                        'Obs / Gyne' => 'Obs / Gyne',
                                                                        'Pediatric' => 'Pediatric',
                                                                        'Others' => 'Others',
                                                                        ),
                                                                        $ot->medicine2,
                                                                        ['class' =>
                                                                        'form-control','id'=>'medicine2','name'=>'medicine2'])
                                                                        !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-md-offset-3 col-sm-2">

                                                                <div class="form-group">
                                                                        {!! Form::label('medicine3', 'Medicine<span
                                                                                class="badge badge-danger control-label">3</span>',[],false)
                                                                        !!}
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-8">

                                                                <div class="form-group">

                                                                        {!! Form::select('medicine1',
                                                                        array(
                                                                        '' => '-- Select Medicine --',
                                                                        'Medicine' => 'Medicine',
                                                                        'Surgery' => 'Surgery',
                                                                        'Obs / Gyne' => 'Obs / Gyne',
                                                                        'Pediatric' => 'Pediatric',
                                                                        'Others' => 'Others',
                                                                        ),
                                                                        $ot->medicine3,
                                                                        ['class' =>
                                                                        'form-control','id'=>'medicine3','name'=>'medicine3'])
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
                                                                        Form::textarea('Remark',$ot->remark,['class'=>'form-control',
                                                                        'id'=>'Remark','rows' => 3, 'cols' =>
                                                                        40,'placeholder'=>'Remark','name'=>'Remark'])
                                                                        !!}
                                                                </div>
                                                        </div>
                                                </div>

                                                <center>
                                                        <button class="btn btn-success" type="submit">Submit
                                                        </button>
                                                        <button class="btn btn-danger" type="reset">
                                                                Cancel
                                                        </button>
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