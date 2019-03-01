@extends('master.layouts.app')
@section('main-content')
<div class="page">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 card-title">IPD - UPDATE PATIENT REGISTRATION</h3>
                    <div class="card-body">
                        <div class="btn-list" style="float: right;">
                        <a href="{{route('ipd-filter')}}" class="btn btn-square btn-xs btn-success">Show / Search Old IPD
                        Patients
                        </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('verror.error')
                    {!! Form::open(array('route'=>['ipd.update',$ipd->id],'files'=>'true','id'=>'opd-form','autocomplete'=>'off','method'=>'PUT'))
                    !!}
                    <div class="col-md-12 border">
                        <div class="row">
                            <div class="offset-md-2 col-md-4">
                                <div class="form-group">
                                    {!! Form::label('patientId', 'OPD Registration Number') !!}
                                    {!! Form::text('patientId',$ipd->opd->regNum,
                                    [
                                    'class' => 'form-control opd',
                                    'placeholder' => 'Enter OPD Registration Number',
                                    'id'=>'patientId',

                                    ]) !!}
                                    <div class="error text-danger">{{ $errors->first('patientId')}}</div>
                                    <div id="opd-reg-list">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    {!! Form::label('opd', 'OPD Date') !!}
                                    {!! Form::date('opdDate', $ipd->opd->regDate,
                                    [
                                    'class' => 'form-control','placeholder' => 'Enter OPD Date',
                                    'id'=>'opdDate','name'=>'opdDate','readonly' => 'true',
                                    ]) !!}
                                    <div class="error text-danger">{{ $errors->first('opdDate')}}</div>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-4">
                                <div class="form-group">
                                    {!! Form::label('ipdnum', 'IPD Registration Number') !!}
                                    {!! Form::text('ipdRegNum',$ipd->ipdRegNum,[
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter IPD Registration Number','id'=>'regnum',]) !!}
                                    <div class="error text-danger">{{ $errors->first('ipdRegNum')}}</div>   
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'IPD Registration Date') !!}
                                {!! Form::date('ipdRegDate',$ipd->ipdRegDate, ['class' => 'form-control',
                                'placeholder' => 'Enter Registration Date'
                                ]) !!}
                                <div class="error text-danger">{{ $errors->first('ipdRegDate')}}</div>
                            </div>
                            </div>
                            <div class="offset-md-2 col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'IPD Consultant') !!}
                                {!! Form::select('Consultant',$doctorlist,$ipd->consultant,
                                ['class' => 'form-control','id'=>'consultant','name'=>'consultant','placeholder'=>'select consultant'])
                                !!}
                                <div class="error text-danger">{{ $errors->first('consultant')}}</div>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('name', 'Other Consultant') !!}
                                    {!! Form::text('otherConsultant', $ipd->otherConsultant,
                                    ['class' => 'form-control','id'=>'otherConsultant','name'=>'otherConsultant','readonly' => 'true','placeholder' => 'Enter Other Consultant'])
                                    !!}
                                    <div class="error text-danger">{{ $errors->first('otherConsultant')}}</div>
                                </div>
                            </div>
                            <div class=" offset-md-2 col-md-4">
                                <div class="form-group">
                                    {!! Form::label('name', 'Patient Name') !!}
                                    {!! Form::text('patientName',$ipd->opd->patientName,['class' => 'form-control',
                                    'placeholder' => 'Enter Patient Name','id'=>'patientName','name'=>'patientName',
                                    'readonly' => 'true',]) !!}
                                    <div class="error text-danger">{{ $errors->first('patientName')}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('name', 'Age') !!}
                                    {!! Form::text('age',$ipd->opd->age,['class' => 'form-control',
                                    'placeholder' => 'Enter Age' ,'id'=>'age','name'=>'age','readonly' => 'true',
                                    ]) !!}
                                    <div class="error text-danger">{{ $errors->first('age')}}</div>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-4">
                                <div class="form-group">
                                    <div class="custom-controls-stacked">
                                        <label class="custom-control custom-checkbox col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        {!! Form::radio('prefixName','S/o',false,array("class"=>"custom-control-input",'id'=>'prefixName','checked'=>''))  !!}
                                        <span class="custom-control-label"><strong>S/o</strong></span>        
                                        </label>
                                        <label class="custom-control custom-checkbox col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        {!! Form::radio('prefixName','W/o',false,array("class"=>"custom-control-input",'id'=>'prefixName',))  !!}
                                        <span class="custom-control-label"><strong>W/o</strong></span>
                                        </label>
                                        <label class="custom-control custom-checkbox col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                        {!! Form::radio('prefixName','D/o',false,array("class"=>"custom-control-input",'id'=>'prefixName'))  !!}
                                        <span class="custom-control-label"><strong>D/o</strong></span>
                                        </label>
                                    </div>
                                </div>
                                <div>      
                                    {!! Form::text('refName', $ipd->refName, ['class' => 'form-control','placeholder' => 'Name','id'=>'refName','name'=>'refName']) !!}
                                    <div class="error text-danger">{{ $errors->first('refName')}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('name', 'Gender') !!}
                                    {!! Form::select('gender', ['Male Adult' => 'Male Adult', 'Female Adult' => 'Female
                                    Adult', 'Male Child' => 'Male Child','Male Child' => 'Male Child','Female Child' =>
                                    'Female Child',], $ipd->opd->gender, ['class' =>
                                    'form-control','id'=>'gender','name'=>'gender','readonly' => 'true']) !!}
                                    <div class="error text-danger">{{ $errors->first('gender')}}</div>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Address') !!}
                                {!! Form::textarea('address', $ipd->opd->address, ['class' => 'form-control','placeholder' => 'Enter Address','rows' => 1, 'cols' => 10,'id'=>'address','name'=>'address','readonly'=>'true']) !!}
                                <div class="error text-danger">{{ $errors->first('address')}}</div>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Ward Name') !!}
                                {!! Form::select('wardName',$wardname,$ipd->wardName,
                                ['class' => 'form-control','id'=>'wardName','name'=>'wardName','placeholder'=>'select ward']) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                    <div>Bed Number</div>
                                    <div class="custom-controls-stacked">
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','1',true,array("class"=>"custom-control-input",'id'=>'bedNum','checked'=>''))  !!}
                                    <span class="custom-control-label"><strong>1</strong></span>
                                    </label>
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','2',false,array("class"=>"custom-control-input",'id'=>'bedNum',))  !!}
                                    <span class="custom-control-label"><strong>2</strong></span>
                                    </label>
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','3',false,array("class"=>"custom-control-input",'id'=>'bedNum',))  !!}
                                    <span class="custom-control-label"><strong>3</strong></span>
                                    </label>
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','4',false,array("class"=>"custom-control-input",'id'=>'bedNum',))  !!}
                                    <span class="custom-control-label"><strong>4</strong></span>
                                    </label>
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','5',false,array("class"=>"custom-control-input",'id'=>'bedNum',))  !!}
                                    <span class="custom-control-label"><strong>5</strong></span>
                                    </label>
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','6',false,array("class"=>"custom-control-input",'id'=>'bedNum',))  !!}
                                    <span class="custom-control-label"><strong>6</strong></span>
                                    </label>
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','7',false,array("class"=>"custom-control-input",'id'=>'bedNum',))  !!}
                                    <span class="custom-control-label"><strong>7</strong></span>
                                    </label>
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','8',false,array("class"=>"custom-control-input",'id'=>'bedNum',))  !!}
                                    <span class="custom-control-label"><strong>8</strong></span>
                                    </label>
                                    <label class="custom-control custom-checkbox col-lg-1 col-md-1 col-sm-4 col-xs-4">
                                    {!! Form::radio('bedNum','9',false,array("class"=>"custom-control-input",'id'=>'bedNum',))  !!}
                                    <span class="custom-control-label"><strong>9</strong></span>
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Date of Discharge') !!}
                                {!! Form::date('dod',$ipd->dod, ['class' =>
                                'form-control','id'=>'dod','name'=>'dod','placeholder' => 'Date of Discharge']) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Provisional Diagnosis') !!}
                                {!! Form::textarea('provisionalDiagnosis', $ipd->provisionalDiagnosis, ['class' =>
                                'form-control','id'=>'provisionalDiagnosis','name'=>'provisionalDiagnosis','placeholder'=> 'provisionalDiagnosis','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Chief Complaints') !!}
                                {!! Form::textarea('chiefComplaints',$ipd->chiefComplaints, ['class' =>
                                'form-control','id'=>'chiefComplaints','name'=>'chiefComplaints','placeholder' =>'Enter chiefComplaints','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Past History') !!}
                                {!! Form::textarea('pastHistory', $ipd->pastHistory, ['class' =>
                                'form-control','id'=>'pastHistory','name'=>'pastHistory','placeholder' => 'Enter past History','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <h3 align="center"> Family History</h3>
                                <div class="form-group">
                                {!! Form::label('name', 'Maternal') !!}
                                {!! Form::textarea('fh_maternal', $ipd->fh_maternal, ['class' =>
                                'form-control','id'=>'fh_maternal','name'=>'fh_maternal','placeholder' => 'Enter history','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Paternal') !!}
                                {!! Form::textarea('fh_paternal',$ipd->fh_paternal, ['class' =>
                                'form-control','id'=>'fh_paternal','name'=>'fh_paternal','placeholder' => 'Enter  history','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Other') !!}
                                {!! Form::textarea('fh_other', $ipd->fh_other, ['class' =>
                                'form-control','id'=>'fh_other','name'=>'fh_other','placeholder' => 'Family History others','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <h3 align="center" class="offset-1"> General Examination</h3>
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
                                        {!! Form::text('ge_bp', $ipd->ge_resp, ['class' =>
                                        'form-control','id'=>'ge_bp','name'=>'ge_bp','placeholder' => 'B.P.']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Tongue:') !!}
                                        {!! Form::text('ge_tongue',$ipd->ge_tongue, ['class' =>
                                        'form-control','id'=>'ge_tongue','name'=>'ge_tongue','placeholder' =>
                                        'Tongue']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Conjunctiva/Icterus:') !!}
                                        {!! Form::text('ge_conjective',$ipd->ge_conjective, ['class' =>
                                        'form-control','id'=>'ge_conjective','name'=>'ge_conjective','placeholder' =>
                                        'Conjunctiva/Icterus']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        {!! Form::label('name', 'Anaemla/Pallor:') !!}
                                        {!! Form::text('ge_anaemla', $ipd->ge_anaemla, ['class' =>
                                        'form-control','id'=>'ge_anaemla','name'=>'ge_anaemla','placeholder' =>
                                        'Anaemla/Pallor']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'JVP:') !!}
                                        {!! Form::text('ge_jvp',$ipd->ge_jvp, ['class' => 'form-control','placeholder' =>
                                        'JVP']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Oedema:') !!}
                                        {!! Form::text('ge_oedema',$ipd->ge_oedema, ['class' => 'form-control','placeholder' =>
                                        'Oedema']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Cyanosis:') !!}
                                        {!! Form::text('ge_cyanosis', $ipd->ge_cyanosis, ['class' => 'form-control','placeholder' =>
                                        'Cyanosis']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Appetite:') !!}
                                        {!! Form::text('ge_appetite',$ipd->ge_appetite, ['class' => 'form-control','placeholder' =>
                                        'Appetite']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Lymph Gland:') !!}
                                        {!! Form::text('ge_lymph', $ipd->ge_lymph, ['class' => 'form-control','placeholder' =>
                                        'Lymph Gland']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Throat:') !!}
                                        {!! Form::text('ge_throat',$ipd->ge_throat, ['class' => 'form-control','placeholder' =>
                                        'Throat']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        {!! Form::label('name', 'Bowel/Bladder:') !!}
                                        {!! Form::text('ge_bowel', $ipd->ge_bowel, ['class' => 'form-control','placeholder' =>
                                        'Bowel/Bladder']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Sleep:') !!}
                                        {!! Form::text('ge_sleep', $ipd->ge_sleep, ['class' => 'form-control','placeholder' =>
                                        'Sleep']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Allergies:') !!}
                                        {!! Form::text('ge_allergies', $ipd->ge_allergies, ['class' => 'form-control','placeholder'
                                        => 'Allergies']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Skin:') !!}
                                        {!! Form::text('ge_skin',$ipd->ge_skin, ['class' => 'form-control','placeholder' =>
                                        'Skin']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Thirst:') !!}
                                        {!! Form::text('ge_thirst',$ipd->ge_thirst, ['class' => 'form-control','placeholder' =>
                                        'Thirst']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Addictions:') !!}
                                        {!! Form::text('ge_addictions',$ipd->ge_addictions, ['class' => 'form-control','placeholder'
                                        => 'Addictions']) !!}
                                        </div>
                                        <div class="form-group">
                                        {!! Form::label('name', 'Diet:') !!}
                                        {!! Form::text('ge_diet',$ipd->ge_diet, ['class' => 'form-control','placeholder' =>
                                        'Diet']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                    <div class="custom-controls-stacked">
                                    <h3 class="control-label col-lg-2">ECG</h3>
                                    <label class="custom-control custom-checkbox col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                    {!! Form::checkbox('ecgTest','ecgTest',false,array("class"=>"custom-control-input",'id'=>'ecgTest'))  !!}
                                    <span class="custom-control-label"><strong>ECG</strong></span>
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Respiratory System') !!}
                                {!! Form::textarea('respiratorySystem', $ipd->respiratorySystem, ['class' => 'form-control','placeholder'
                                => 'Enter Address','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Gastro - Intestinal System') !!}
                                {!! Form::textarea('gastroIntestinalSystem', $ipd->gastroIntestinalSystem, ['class' =>
                                'form-control','placeholder' => 'Enter Address','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Cardio - Vascular System') !!}
                                {!! Form::textarea('cardioVascularSystem',$ipd->gastroIntestinalSystem, ['class' =>
                                'form-control','placeholder' => 'Enter Address','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Central Nervous System') !!}
                                {!! Form::textarea('centralNervousSystem',$ipd->centralNervousSystem, ['class' =>
                                'form-control','placeholder' => 'Enter Address','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Local Examination') !!}
                                {!! Form::text('localExamination',$ipd->localExamination, ['class' => 'form-control','placeholder' =>
                                'localExamination','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Investigation<span class="badge badge-success control-label">1</span>',[],false)
                                !!}
                                {!! Form::select('investigation1', $investigation,
                                $ipd->investigation1, ['class' => 'form-control','id'=>'investigation1','placeholder'=>'select investigation 1']) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Investigation<span class="badge badge-success control-label">2</span>',[],false)
                                !!}
                                {!! Form::select('investigation2', $investigation,
                                $ipd->investigation2, ['class' => 'form-control','id'=>'investigation2','placeholder'=>'select investigation 2']) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <div class="form-group">
                                {!! Form::label('name', 'Investigation<span class="badge badge-success control-label">3</span>',[],false)
                                !!}
                                {!! Form::select('investigation3', $investigation,
                                $ipd->investigation3, ['class' => 'form-control','id'=>'investigation3','placeholder'=>'select investigation 3']) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-4 ">
                                <div class="form-group">
                                {!! Form::label('medicine1', 'Medicine<span class="badge badge-danger control-label">1</span>',[],false)
                                !!}
                                {!! Form::select('medicine1',$medicine,
                                $ipd->medicine1, ['class' => 'form-control','id'=>'medicine1','placeholder'=>'select medicine1']) !!}
                                </div>
                            </div>
                            <div class=" col-md-4 ">
                                <div class="form-group">
                                {!! Form::label('name', 'Potency') !!}
                                {!! Form::select('potency1',$potency,$ipd->potency1,
                                ['class' => 'form-control','id'=>'potency1','placeholder'=>'select potency1']) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-4">
                                <div class="form-group">
                                {!! Form::label('medicine1', 'Medicine<span class="badge badge-danger control-label">2</span>',[],false)
                                !!}
                                {!! Form::select('medicine2',$medicine,
                                $ipd->medicine2, ['class' => 'form-control','id'=>'medicine2','placeholder'=>'select medicine2']) !!}
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="form-group">
                                {!! Form::label('name', 'Potency') !!}
                                {!! Form::select('potency2',$potency, $ipd->potency2,
                                ['class' => 'form-control','id'=>'potency2','placeholder'=>'select potency2']) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-4">
                                <div class="form-group">
                                {!! Form::label('medicine1', 'Medicine<span class="badge badge-danger control-label">3</span>',[],false)
                                !!}
                                {!! Form::select('medicine3',$medicine,
                                '$ipd->medicine3', ['class' => 'form-control','id'=>'medicine3','placeholder'=>'select medicine3']) !!}
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="form-group">
                                {!! Form::label('name', 'Potency') !!}
                                {!! Form::select('potency3',$potency, $ipd->potency3,
                                ['class' => 'form-control','id'=>'potency3','placeholder'=>'select potency3']) !!}
                                </div>
                            </div>
                            <div class="offset-md-2 col-md-8 offset-md-2">
                                <h3 align="left">Auxiliary Treatment</h3>
                                <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                {!! Form::label('dietPlan1', 'dietPlan<span class="badge badge-success control-label">1</span>',[],false)
                                !!}
                                {!! Form::select('dietPlan1',$dietPlan, $ipd->dietPlan1, ['class' => 'form-control','id'=>'dietPlan1','placeholder'=>'select Diet plan 1']) !!}
                                </div>
                                <div class="form-group">
                                {!! Form::label('dietPlan1', 'dietPlan<span class="badge badge-success control-label">1</span>',[],false)
                                !!}
                                {!! Form::textarea('diet1Text', $ipd->diet1Text, ['class' => 'form-control','placeholder'
                                => 'Diet 1 Plan Text','rows' => 1, 'cols' => 10, ]) !!}
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                {!! Form::label('dietPlan1', 'dietPlan<span class="badge badge-success control-label">2</span>',[],false)
                                !!}
                                {!! Form::select('dietPlan2',$dietPlan,$ipd->dietPlan2, ['class' => 'form-control',
                                'id'=>'dietPlan2','placeholder'=>'select Diet plan 2']) !!}
                                </div>
                                <div class="form-group">
                                {!! Form::label('dietPlan1','dietPlan<span class="badge badge-success control-label">2</span>',[],false)
                                !!}
                                {!! Form::textarea('diet2Text',$ipd->diet2Text, ['class' => 'form-control','placeholder'
                                => 'Diet 2 Plan Text','rows' => 1, 'cols' => 10, ]) !!}
                                </div>
                                </div>
                                <div class=" col-md-6 ">
                                <div class="form-group">
                                <div class="custom-controls-stacked">
                                <h6 class="control-label col-lg-4">YOGA</h6>
                                <label class="custom-control custom-checkbox col-lg-3 col-md-3 col-sm-4 col-xs-4">
                                {!! Form::checkbox('yoga','yoga',false,array("class"=>"custom-control-input",'id'=>'yoga'))  !!}
                                <span class="custom-control-label"><strong>YOGA</strong></span>
                                </label>
                                </div>
                                </div>
                                </div>
                                <div class=" col-md-6 ">
                                <div class="form-group">
                                <div class="custom-controls-stacked">
                                <h6 class="control-label col-lg-6">Physiotherapy</h6>
                                <label class="custom-control custom-checkbox col-lg-6 col-md-6 col-sm-4 col-xs-4">
                                {!! Form::checkbox('Physiotherapy','Physiotherapy',false,array("class"=>"custom-control-input",'id'=>'Physiotherapy'))  !!}
                                <span class="custom-control-label"><strong>Physiotherapy</strong></span>
                                </label>
                                </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                <div class="form-group">
                                {!! Form::label('name', 'Remarks') !!}
                                {!! Form::textarea('remark', $ipd->remark, ['class' => 'form-control','placeholder' =>'
                                Remarks','rows' => 1, 'cols' => 10,]) !!}
                                </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <div style="float: right;">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <div>
                                {!! Form::submit('Submit', ['class' => 'btn btn-square btn-success','id'=>'submit']) !!}
                                {!! Form::reset('Cancel', ['class' => 'btn btn-square btn-danger','id'=>'cancel']) !!}
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
</div>
@endsection

@push('script')


@endpush