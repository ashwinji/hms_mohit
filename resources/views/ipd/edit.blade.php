@extends('master.layouts.app')
@section('main-content')
<div class="page">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 card-title">IPD -UPDATE PATIENT REGISTRATION</h3>
                    <div class="card-body">
                        <div class="btn-list" style="float: right;">
                            <a href="{{route('ipd-filter')}}" class="btn btn-xs btn-success">Show / Search Old IPD
                                Patients
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('verror.error')
                    {!! Form::open(array('route'=>['ipd.update',$ipd->id],'files'=>'true','id'=>'opd-form',
                    'method'=>'PUT','autocomplete'=>'off')) !!}
                    {{ Form::hidden('status', '1') }}
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('name', 'OPD Registration Number') !!}
                                {!! Form::text('patientId',$ipd->opd->regNum,
                                [
                                'class' => 'form-control opd',
                                'placeholder' => 'Enter OPD Registration Number',
                                'id'=>'id-opd-regnum',
                                'readonly'=>'true',

                                ]) !!}
                                <div id="opd-reg-list">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('opd', 'OPD Date') !!}
                                {!! Form::date('opdDate',$ipd->opd->regDate,
                                [
                                'class' => 'form-control',
                                'placeholder' => 'Enter OPD Date',
                                'id'=>'id-opddate',
                                'name'=>'id-opddate',
                                'readonly'=>'true',
                                ]) !!}
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('ipdnum', 'IPD Registration Number') !!}
                                {!! Form::text('ipdRegNum',$ipd->ipdRegNum,
                                [
                                'class' => 'form-control',
                                'placeholder' => 'Enter IPD Registration Number',
                                'id'=>'regnum',

                                ]) !!}
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('name', 'IPD Registration Date') !!}
                                {!! Form::date('ipdRegDate',$ipd->ipdRegDate,
                                [
                                'class' => 'form-control',
                                'placeholder' => 'Enter Registration Date'
                                ]) !!}
                            </div>

                        </div>
                        <div class="col-md-6">

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
                                $ipd->consultant,
                                ['class' => 'form-control','id'=>'consultant','name'=>'consultant'])
                                !!}
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('name', 'Other Consultant') !!}
                                {!! Form::text('otherConsultant', $ipd->otherConsultant,
                                ['class' => 'form-control',
                                'id'=>'otherConsultant',
                                'name'=>'otherConsultant',
                                'readonly' => 'true',
                                'placeholder' => 'Enter Other Consultant'])
                                !!}
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('name', 'Patient Name') !!}
                                {!! Form::text('patientName',$ipd->opd->patientName,
                                ['class' => 'form-control',
                                'placeholder' => 'Enter Registration Amount',
                                'id'=>'patientName',
                                'name'=>'patientName',
                                'readonly' => 'true',
                                ]) !!}
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Age') !!}
                                {!! Form::text('age',$ipd->opd->age,
                                ['class' => 'form-control',
                                'placeholder' => 'Enter Age' ,
                                'id'=>'age',
                                'name'=>'age',
                                'readonly' => 'true',
                                ]) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'S/o') !!}
                                {!! Form::radio('prefixName', '',
                                ['class' => 'form-control',
                                'placeholder' => 'Enter Registration Amount',
                                'id'=>'prefixName',
                                'name'=>'prefixName',
                                ]) !!}
                                {!! Form::label('name', 'W/o') !!}
                                {!! Form::radio('prefixName', '',
                                ['class' => 'form-control',
                                'placeholder' => 'Enter Registration Amount',
                                'id'=>'prefixName',]) !!}
                                {!! Form::label('name', 'D/o') !!}
                                {!! Form::radio('prefixName', '',
                                ['class' => 'form-control',
                                'placeholder' => 'Enter Registration Amount',
                                'id'=>'prefixName',])
                                !!}
                                {!! Form::text('refName', '',
                                ['class' => 'form-control',
                                'placeholder' => 'Enter Reference Name',
                                'id'=>'prefixName',])
                                !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Gender') !!}
                                {!! Form::select('gender', ['Male Adult' => 'Male Adult', 'Female Adult' => 'Female
                                Adult', 'Male Child' => 'Male Child','Male Child' => 'Male Child','Female Child' =>
                                'Female Child',], '', ['class' =>
                                'form-control','id'=>'gender','name'=>'gender','readonly' => 'true']) !!}
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Address') !!}
                                {!! Form::textarea('address',$ipd->opd->address, ['class' => 'form-control','placeholder' => 'Enter
                                Address','rows' => 3, 'cols' => 10,'id'=>'address','name'=>'address']) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Ward Name') !!}
                                {!! Form::select('wardName', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',],
                                $ipd->wardName, ['class' => 'form-control','id'=>'wardName','name'=>'wardName']) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div>Bed Number</div>
                                <div style="margin-left: 20px;">
                                    {!! Form::radio('bedNum', $ipd->bedNum, ['class' =>
                                    'form-control','id'=>'bedNum1']) !!}
                                    {!! Form::label('name', '1') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum2']) !!}
                                    {!! Form::label('name', '2') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum3']) !!}
                                    {!! Form::label('name', '3') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum4']) !!}
                                    {!! Form::label('name', '4') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum5']) !!}
                                    {!! Form::label('name', '5') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum6']) !!}
                                    {!! Form::label('name', '6') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum7']) !!}
                                    {!! Form::label('name', '7') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum8']) !!}
                                    {!! Form::label('name', '8') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum9']) !!}
                                    {!! Form::label('name', '9') !!}
                                    {!! Form::radio('bedNum', '', ['class' => 'form-control','id'=>'bedNum10']) !!}
                                    {!! Form::label('name', '10') !!}

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Date of Discharge') !!}
                                {!! Form::date('dod', $ipd->dod, ['class' =>
                                'form-control','id'=>'dod','name'=>'dod','placeholder' => 'Enter Mobile Number']) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Provisional Diagnosis') !!}
                                {!! Form::textarea('provisionalDiagnosis',$ipd->provisionalDiagnosis, ['class' =>
                                'form-control','id'=>'provisionalDiagnosis','name'=>'provisionalDiagnosis','placeholder'
                                => 'Enter Address','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Chief Complaints') !!}
                                {!! Form::textarea('chiefComplaints', $ipd->chiefComplaints, ['class' =>
                                'form-control','id'=>'chiefComplaints','name'=>'chiefComplaints','placeholder' =>
                                'Enter Address','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Past History') !!}
                                {!! Form::textarea('pastHistory', $ipd->pastHistory, ['class' =>
                                'form-control','id'=>'pastHistory','name'=>'pastHistory','placeholder' => 'Enter
                                Address','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h3 align="center"> Family History</h3>
                            <div class="form-group">
                                {!! Form::label('name', 'Maternal') !!}
                                {!! Form::textarea('fh_maternal', $ipd->fh_maternal, ['class' =>
                                'form-control','id'=>'fh_maternal','name'=>'fh_maternal','placeholder' => 'Enter
                                history','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12 " class="form-control">
                            <div class="form-group">
                                {!! Form::label('name', 'Paternal') !!}
                                {!! Form::textarea('fh_paternal', $ipd->fh_paternal, ['class' =>
                                'form-control','id'=>'fh_paternal','name'=>'fh_paternal','placeholder' => 'Enter
                                history','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Other') !!}
                                {!! Form::textarea('fh_other', $ipd->fh_other, ['class' =>
                                'form-control','id'=>'fh_other','name'=>'fh_other','placeholder' => 'Enter
                                Address','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h3 align="left" class="offset-1"> General Examination</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        {!! Form::label('name', 'GC:') !!}
                                        {!! Form::text('ge_gc', $ipd->ge_gc, ['class' =>
                                        'form-control','id'=>'ge_gc','name'=>'ge_gc','placeholder' => 'Enter G.C']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Pulse:') !!}
                                        {!! Form::text('ge_pulse',$ipd->ge_pulse, ['class' =>
                                        'form-control','id'=>'ge_pulse','name'=>'ge_pulse','placeholder' => 'Enter
                                        Age']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Temp:') !!}
                                        {!! Form::text('ge_temp', $ipd->ge_temp, ['class' =>
                                        'form-control','id'=>'ge_temp','name'=>'ge_temp','placeholder' => 'Temp']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Resp:') !!}
                                        {!! Form::text('ge_resp', $ipd->ge_resp, ['class' =>
                                        'form-control','id'=>'ge_resp','name'=>'ge_resp','placeholder' => 'Resp']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'B.P.:') !!}
                                        {!! Form::text('ge_bp', $ipd->ge_bp, ['class' =>
                                        'form-control','id'=>'ge_bp','name'=>'ge_bp','placeholder' => 'B.P.']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Tongue:') !!}
                                        {!! Form::text('ge_tongue', $ipd->ge_tongue, ['class' =>
                                        'form-control','id'=>'ge_tongue','name'=>'ge_tongue','placeholder' =>
                                        'Tongue']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Conjunctiva/Icterus:') !!}
                                        {!! Form::text('ge_conjective', $ipd->ge_conjective, ['class' =>
                                        'form-control','id'=>'ge_conjective','name'=>'ge_conjective','placeholder' =>
                                        'Conjunctiva/Icterus']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Anaemla/Pallor:') !!}
                                        {!! Form::text('ge_anaemla',$ipd->ge_anaemla, ['class' =>
                                        'form-control','id'=>'ge_anaemla','name'=>'ge_anaemla','placeholder' =>
                                        'Anaemla/Pallor']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'JVP:') !!}
                                        {!! Form::text('ge_jvp', $ipd->ge_jvp, ['class' => 'form-control','placeholder'
                                        => 'JVP']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Oedema:') !!}
                                        {!! Form::text('ge_oedema', $ipd->ge_oedema, ['class' =>
                                        'form-control','placeholder' => 'Oedema']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Cyanosis:') !!}
                                        {!! Form::text('ge_cyanosis', $ipd->ge_cyanosis, ['class' =>
                                        'form-control','placeholder' => 'Cyanosis']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Appetite:') !!}
                                        {!! Form::text('ge_appetite',$ipd->ge_appetite, ['class' =>
                                        'form-control','placeholder' => 'Appetite']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Lymph Gland:') !!}
                                        {!! Form::text('ge_lymph',$ipd->ge_lymph, ['class' =>
                                        'form-control','placeholder' => 'Lymph Gland']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Throat:') !!}
                                        {!! Form::text('ge_throat', $ipd->ge_throat, ['class' =>
                                        'form-control','placeholder' => 'Throat']) !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Bowel/Bladder:') !!}
                                        {!! Form::text('ge_bowel',$ipd->ge_bowel, ['class' =>
                                        'form-control','placeholder' => 'Bowel/Bladder']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Sleep:') !!}
                                        {!! Form::text('ge_sleep',$ipd->ge_sleep, ['class' =>
                                        'form-control','placeholder' => 'Sleep']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('name', 'Allergies:') !!}
                                        {!! Form::text('ge_allergies', $ipd->ge_allergies, ['class' =>
                                        'form-control','placeholder' => 'Allergies']) !!}
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Skin:') !!}
                                        {!! Form::text('ge_skin', $ipd->ge_skin, ['class' =>
                                        'form-control','placeholder' => 'Skin']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('name', 'Thirst:') !!}
                                        {!! Form::text('ge_thirst',$ipd->ge_thirst, ['class' =>
                                        'form-control','placeholder' => 'Thirst']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('name', 'Addictions:') !!}
                                        {!! Form::text('ge_addictions', $ipd->ge_addictions, ['class' =>
                                        'form-control','placeholder' => 'Addictions']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('name', 'Diet:') !!}
                                        {!! Form::text('ge_diet', $ipd->ge_diet, ['class' =>
                                        'form-control','placeholder' => 'Diet']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="offset-2 col-md-1">
                                    <h3 align="lefts" class="">ECG</h3>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {!! Form::checkbox('ecgTest', '', ['class' => 'form-control ']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Respiratory System') !!}
                                {!! Form::textarea('respiratorySystem', '', ['class' => 'form-control','placeholder'
                                => 'Enter Address','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Gastro - Intestinal System') !!}
                                {!! Form::textarea('gastroIntestinalSystem', '', ['class' =>
                                'form-control','placeholder' => 'Enter Address','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Cardio - Vascular System') !!}
                                {!! Form::textarea('cardioVascularSystem', '', ['class' =>
                                'form-control','placeholder' => 'Enter Address','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Central Nervous System') !!}
                                {!! Form::textarea('centralNervousSystem', '', ['class' =>
                                'form-control','placeholder' => 'Enter Address','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Local Examination') !!}
                                {!! Form::text('localExamination', '', ['class' => 'form-control','placeholder' =>
                                'localExamination','rows' => 3, 'cols' => 10,]) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Investigation<span class="badge badge-success control-label">1</span>',[],false)
                                !!}
                                {!! Form::select('investigation1', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',],
                                '', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Investigation<span class="badge badge-success control-label">2</span>',[],false)
                                !!}
                                {!! Form::select('investigation2', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',],
                                '', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Investigation<span class="badge badge-success control-label">3</span>',[],false)
                                !!}
                                {!! Form::select('investigation3', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',],
                                '', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('medicine1', 'Medicine<span class="badge badge-danger control-label">1</span>',[],false)
                                !!}
                                {!! Form::select('medicine1', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',],
                                '', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Potency') !!}
                                {!! Form::select('potency1', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',], '',
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('medicine1', 'Medicine<span class="badge badge-danger control-label">2</span>',[],false)
                                !!}
                                {!! Form::select('medicine2', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',],
                                '', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Potency') !!}
                                {!! Form::select('potency2', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',], '',
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('medicine1', 'Medicine<span class="badge badge-danger control-label">3</span>',[],false)
                                !!}
                                {!! Form::select('medicine3', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',],
                                '', ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('name', 'Potency') !!}
                                {!! Form::select('potency3', ['L' => 'Large', 'S' => 'Small', 'Sz' => 'Smallz',], '',
                                ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h3 align="left">Auxiliary Treatment</h3>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        {!! Form::label('dietPlan1', 'dietPlan<span class="badge badge-success control-label">1</span>',[],false)
                                        !!}
                                        {!! Form::select('dietPlan1', ['L' => 'Large', 'S' => 'Small', 'Sz' =>
                                        'Smallz',], '', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('dietPlan1', 'dietPlan<span class="badge badge-success control-label">1</span>',[],false)
                                        !!}
                                        {!! Form::textarea('diet1Text', '', ['class' => 'form-control','placeholder'
                                        => 'Diet 1 Plan Text','rows' => 3, 'cols' => 10, ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('dietPlan1', 'dietPlan<span class="badge badge-success control-label">2</span>',[],false)
                                        !!}
                                        {!! Form::select('dietPlan2', ['L' => 'Large', 'S' => 'Small', 'Sz' =>
                                        'Smallz',], '', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('dietPlan1', 'dietPlan<span class="badge badge-success control-label">2</span>',[],false)
                                        !!}
                                        {!! Form::textarea('diet2Text', '', ['class' => 'form-control','placeholder'
                                        => 'Diet 2 Plan Text','rows' => 3, 'cols' => 10, ]) !!}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 align="center">Yoga</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::checkbox('yoga', '', ['class' =>
                                                'form-control','placeholder' => 'Enter Registration Amount']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3 align="center">Physiotherapy</h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::checkbox('physiotherapy', '', ['class' => 'form-control'])
                                                !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Remarks') !!}
                                        {!! Form::textarea('remark',$ipd->remark, ['class' => 'form-control','placeholder' =>'
                                        Remarks','rows' => 3, 'cols' => 10,]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div style="float: right;">
                                    {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div>
                                    <a href="#"> <button class="btn btn-primary">Cancel</button>
                                    </a>
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
@endsection
@section('footerSection')

@endsection