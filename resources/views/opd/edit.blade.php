@extends('master.layouts.app')
@section('main-content')
<div class="page">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 card-title">OPD - Update PATIENT REGISTRATION</h3>
                    <div class="card-body">
                        <div class="btn-list" style="float: right;">
                                <a href="{{route('opd-filter')}}" class="btn btn-xs btn-success">Show
                                        / Search Old Opd Patients
                                </a>
                       </div>
                   </div>
                 </div>
        <div class="card-body">
                                @include('verror.error')
                                {!!
                                Form::open(array('route'=>['opd.update',$opd->id],'files'=>'true','id'=>'profile-form','method'=>'PUT'))
                                !!}
                                <div class="col-md-12">
        <div class="row">
                <div class="col-md-offset-3 col-sm-2">
                        <div class="form-group">
                                {!! Form::label('PatientTitle', 'Patient
                                Title:*') !!}
                        </div>
                </div>
                <div class="col-sm-8">

                        <div class="form-group">
                                {!! Form::select('patientTitle',
                                array(
                                '' => '----Select Title----',
                                'Mr.' => 'Mr.',
                                'Mrs.' => 'Mrs.',
                                'Ms.' => 'Ms.',
                                'Mst.' => 'Mst.',
                                'Baby' => 'Baby',
                                ),
                                $opd->patientTitle,
                                ['class' =>
                                'form-control','id'=>'patientTitle'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('patientTitle')}}</div>
                        </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-offset-3 col-sm-2">

                        <div class="form-group">
                                {!! Form::label('Patient Name', 'Patient
                                Name:*') !!}
                        </div>
                </div>
                <div class="col-sm-8">

                        <div class="form-group">
                                {!! Form::text('patientName',
                                $opd->patientName, ['class' =>
                                'form-control','id'=>'patientName']) !!}
                                <div class="error text-danger">{{ $errors->first('patientName')}}</div>
                        </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-offset-3 col-sm-2">

                        <div class="form-group">
                                {!! Form::label('regNum', 'Registration
                                Number:*') !!}
                        </div>
                </div>
                <div class="col-sm-8">

                        <div class="form-group">
                                {!! Form::text('regNum', $opd->regNum, ['class'
                                =>
                                'form-control','id'=>'regNum'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('regNum')}}</div>
                        </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-offset-3 col-sm-2">

                        <div class="form-group">
                                {!! Form::label('regDate', 'Registration
                                Date:*') !!}
                        </div>
                </div>
                <div class="col-sm-8">

                        <div class="form-group">
                                {!! Form::date('regDate', $opd->regDate,
                                ['class' =>
                                'form-control','id'=>'regDate','name'=>'regDate'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('regDate')}}</div>
                        </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-offset-3 col-sm-2">

                        <div class="form-group">
                                {!! Form::label('Address', 'Address:*') !!}
                        </div>
                </div>
                <div class="col-sm-8">

                        <div class="form-group">
                                {!! Form::text('address', $opd->address,
                                ['class' =>
                                'form-control','id'=>'address','name'=>'address'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('address')}}</div>
                        </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-offset-3 col-sm-2">

                        <div class="form-group">
                                {!! Form::label('Age', 'Age:*') !!}
                        </div>
                </div>
                <div class="col-sm-8">
                        <div class="form-group">
                                {!! Form::text('Age', $opd->age, ['class' =>
                                'form-control','id'=>'Age','name'=>'Age']) !!}
                                <div class="error text-danger">{{ $errors->first('Age')}}</div>
                        </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-offset-3 col-sm-2">

                        <div class="form-group">
                                {!! Form::label('Gender', 'Gender:*') !!}
                        </div>
                </div>
                <div class="col-sm-8">
                        <div class="form-group">

                                {!! Form::select('gender',
                                array(
                                '' => '----Select Gender----',
                                'Male Adult' =>'Male Adult',
                                'Female Adult' =>'Female Adult',
                                'Male child' =>'Male child',
                                'Female child' =>'Male child',
                                ),
                                $opd->gender,
                                ['class' =>
                                'form-control','id'=>'gender','name'=>'gender'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('gender')}}</div>
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
                                {!! Form::select('Consultant',$docterlist,
                                $opd->consultant,
                                ['class' =>
                                'form-control','id'=>'Consultant','name'=>'Consultant'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('Consultant')}}</div>
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
                                {!! Form::text('otherConsultant',
                                $opd->otherConsultant, ['class' =>
                                'form-control','id'=>'otherConsultant','name'=>'otherConsultant'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('otherConsultant')}}</div>
                        </div>
                </div>
        </div>
        <div class="row">
                <div class="col-md-offset-3 col-sm-2">

                        <div class="form-group">
                                {!! Form::label('department', 'Department') !!}
                        </div>
                </div>
                <div class="col-sm-8">

                        <div class="form-group">
                                {!! Form::select('department',$department
                                ,
                                $opd->department,
                                ['class' =>
                                'form-control','id'=>'department','name'=>'department'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('department')}}</div>
                        </div>
                </div>
        </div>


        <center>
                <button class="btn btn-success" type="submit">Save
                </button>
                <a href="{{route('opd-create')}}" class="btn btn-danger" type="reset">Cancel</a>

        </center>

                                {!! Form::close() !!}
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection