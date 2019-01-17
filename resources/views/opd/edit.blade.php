@extends('master.layouts.app')
@section('main-content')
<div class="container" style="width: 1175px;">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title btn btn-pill btn-success">OPD - Update PATIENT Details</h6>
                    <a href="{{route('opd-filter')}}"><h6 class="pull-right card-title btn btn-pill btn-default" style="margin-left: 400px; background-color:#5ed84f;color:white;"><i class="fa fa-list"></i>  SHOW/SEARCH OLD PATIENT</h6></a>

                </div>
                <div class="card-body">
                 @include('verror.error')
                  {!! Form::open(array('route' => 'opd.store','files'=>'true','id'=>'profile-form')) !!}
                        <div class="col-md-12">
                           <div class="row">
                                <div class="col-md-offset-3 col-sm-2">
                                        <div class="form-group">
                                                {!! Form::label('PatientTitle', 'Patient Title:*') !!}
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
                                                     'S',
                                                    ['class' => 'form-control','id'=>'patientTitle','name'=>'patientTitle'])
                                                !!}

                                        </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-md-offset-3 col-sm-2">
                                        <div class="form-group">
                                                {!! Form::label('Patient Name', 'Patient Name:*') !!}
                                        </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                                {!! Form::text('patientName', '', ['class' => 'form-control','id'=>'patientName']) !!}
                                        </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-md-offset-3 col-sm-2">
                                        <div class="form-group">
                                                {!! Form::label('regNum', 'Registration Number:*') !!}
                                        </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                                {!! Form::text('regNum', '', ['class' => 'form-control','id'=>'regNum','name'=>'regNum']) !!}
                                        </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-md-offset-3 col-sm-2">
                                        <div class="form-group">
                                                {!! Form::label('regDate', 'Registration Date:*') !!}
                                        </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                                {!! Form::date('regDate', '', ['class' => 'form-control','id'=>'regDate','name'=>'regDate']) !!}
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
                                                {!! Form::text('address', '', ['class' => 'form-control','id'=>'address','name'=>'address']) !!}
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
                                                {!! Form::text('Age', '', ['class' => 'form-control','id'=>'Age','name'=>'Age']) !!}
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
                                                    'male' => 'Male',
                                                    'female' => 'Female.',
                                                    ),
                                                     'S',
                                                    ['class' => 'form-control','id'=>'gender','name'=>'gender'])
                                                !!}
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-md-offset-3 col-sm-2">
                                         <div class="form-group">
                                                 {!! Form::label('Consultant', 'Consultant:*') !!}
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
                                                      'S',
                                                     ['class' => 'form-control','id'=>'Consultant','name'=>'Consultant'])
                                                 !!}
                                         </div>
                                 </div>
                             </div>
                                    <div class="row">
                                            <div class="col-md-offset-3 col-sm-2">
                                                    <div class="form-group">
                                                            {!! Form::label('otherConsultant', 'Other Consultant') !!}
                                                    </div>
                                            </div>
                                            <div class="col-sm-8">
                                                    <div class="form-group">
                                                            {!! Form::text('otherConsultant', '', ['class' => 'form-control','id'=>'otherConsultant','name'=>'otherConsultant']) !!}
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

                                                            {!! Form::select('department',
                                                            array(
                                                                '' => '-- Select Department Name --',
                                                                'Medicine' => 'Medicine',
                                                                'Surgery' => 'Surgery',
                                                                'Obs / Gyne' => 'Obs / Gyne',
                                                                'Pediatric' => 'Pediatric',
                                                                'Others' => 'Others',
                                                                ),
                                                                'S',
                                                                ['class' => 'form-control','id'=>'department','name'=>'department'])
                                                            !!}
                                                    </div>
                                            </div>
                                        </div>


                                               <center >    <button class="btn btn-success" type="submit" >Save</button>


                                                        <button class="btn btn-danger" type="reset">Cancel</button>

                                                </center>

                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
