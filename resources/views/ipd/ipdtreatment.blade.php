<div class="page">
<<<<<<< HEAD
  <div class="row">
    <div class="col-lg-12">
      <div cmedicineListlass>
        <style>
          th{
        font-weight: bold;
    }
</style>
        <div class="panel panel-default">

          <div class="panel-body">
            <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><a href=""><b>X</b></a></span>
            <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
            <span class="pull-right" style="padding-right: 5px">
              <b style="margin-right: 36px">{{ $data->opd->regNum }}</b>
            </span> <i  onclick="printDiv('IPD patients','ipdaddtreatment-id')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                        Print</i> <a href="javascript:void(0);" ></a>
          </div>
            <div id="ipdaddtreatment-id">
          <table class="table table-bordered table-striped table-hovered " >
            <thead >
              <tr>
                <b>
                  <th class="">OPD Registration Number </th>
                </b>
                <td>{{ $data->opd->regNum }}</td>
                <th>OPD Registration Date </th>
                <td>{{ $data->opd->regDate }}</td>
              </tr>
              <tr>
                <b>
                  <th>IPD Registration Number </th>
                </b>
                <td>{{ $data->ipdRegNum }}</td>
                <th>IPD Registration Date </th>
                <td>{{ $data->ipdRegDate }}</td>
              </tr>
              <tr>

                <th>Name </th>
                <td colspan="4">{{ $data->opd->patientName }} 
                  <b>{{ $data->prefixName }}</b> {{ucfirst($data->refName)}}</td>
              </tr>
              <tr>
                <th>Gender </th>
                <td>{{ $data->opd->gender }}</td>
                <th>Age </th>
                <td>{{ $data->age }}</td>
              </tr>
              <tr>
                <th>Address </th>
                <td colspan="4">{{ $data->opd->address }}</td>
              </tr>
              <tr>
                <th>IPD Consultant  </th>
                <td>{{$data->doctorName->name}}</td>
                <th>Other Consultant </th>
                <td>{{ $data->otherConsultant }}</td>
              </tr>
            </thead>

          </table>
        </div>
        <div class="text-center">
          <div class="label label-info text-white">Add Treatment Details</div>

        </div>
        {!! Form::open(array('files'=>'true','id'=>'ipdTreatement-form','autocomplete'=>'off')) !!}
        @csrf
=======
    <div class="row">
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><a href=""><b>X</b></a></span>
                    <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
                    <span class="pull-right" style="padding-right: 5px">
                    <b style="margin-right: 36px">{{ $data->opd->regNum }}</b>
                    </span> <i class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);">
                    </a>
                </div>
                <table class="table table-bordered table-striped table-hovered ">
                    <thead >
                        <tr>
                            <b>
                            <th class="">OPD Registration Number </th>
                            </b>
                            <td>{{ $data->opd->regNum }}</td>
                            <th>OPD Registration Date </th>
                            <td>{{ $data->opd->regDate }}</td>
                        </tr>
                        <tr>
                            <b>
                            <th>IPD Registration Number </th>
                            </b>
                            <td>{{ $data->ipdRegNum }}</td>
                            <th>IPD Registration Date </th>
                            <td>{{ $data->ipdRegDate }}</td>
                        </tr>
                        <tr>
                            <th>Name </th>
                            <td colspan="4">{{ $data->opd->patientName }} 
                            <b>{{ $data->prefixName }}</b> {{ucfirst($data->refName)}}</td>
                        </tr>
                        <tr>
                            <th>Gender </th>
                            <td>{{ $data->opd->gender }}</td>
                            <th>Age </th>
                            <td>{{ $data->age }}</td>
                        </tr>
                        <tr>
                            <th>Address </th>
                            <td colspan="4">{{ $data->opd->address }}</td>
                        </tr>
                        <tr>
                            <th>IPD Consultant  </th>
                            <td>{{$data->doctorName->name}}</td>
                            <th>Other Consultant </th>
                            <td>{{ $data->otherConsultant }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="text-center">
            <div class="label label-info text-white">Add Treatment Details</div>
            </div>
            {!! Form::open(array('files'=>'true','id'=>'ipdTreatement-form','autocomplete'=>'off')) !!}
            @csrf
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="patientId" value="{{ $data->opd->regNum }}" id="patientId">
                        {!! Form::label('complaint', 'Complaints') !!}
                        <div class="form-group">
                        {!! Form::textarea('complaint','', ['class' => 'form-control','placeholder' => 'Enter complaint','rows'
                        => 3, 'cols' => 10,'id'=>'id-complaint']) !!}
                        </div>
                    </div>
                    <input type="hidden" name="ipdId" id ="ipdId" value="{{$data->id}}">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                        {!! Form::label('treatmentDate', 'Treatment Date') !!}
                        {!! Form::date('treatmentDate','', ['class' => 'form-control','id'=>'treatmentDate','placeholder' => 'Enter
                        treatmentDate']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::label('treatment', 'Treatment Advice') !!}
                        <div class="form-group">
                        {!! Form::textarea('treatment','', ['class' => 'form-control','placeholder' => 'Enter treatment','rows'
                        => 3, 'cols' => 10,'id'=>'treatment']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group ">
                        {!! Form::label('name', 'Medicine ') !!}
                        {!! Form::select('medicine',$medicine,'' ,
                        ['class' => 'form-control',
                        'id'=>'medicine',
                        'placeholder' => '--Select Medicine--']) !!}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        {!! Form::label('name', 'Potency') !!}
                        {!! Form::select('potency1', $potency,'', ['class' => 'form-control','id'=>'potency','placeholder'=>'select potency']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group ">
                        {!! Form::label('name', 'Number of Days')!!}

                        {!! Form::text('nod', '',['class'=>'form-control','id'=>'nod','placeholder'=>'Treatment Number of
                        Days']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                {!! Form::label('name', 'Investigation 1') !!}
                    <div class="form-group">
                    {!! Form::select('investigation1',$investigation ,'', ['class' =>
                    'form-control','id'=>'investigation','placeholder'=>'select investigation1']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-12">
                    {!! Form::label('remark', 'Remark') !!}
                    {!! Form::textarea('remark', '', ['class' => 'form-control ','placeholder' => 'Enter remark','rows' =>
                    3, 'cols' => 10,'id'=>'remark']) !!}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row">
                    <div class="form-group ">
                        {!! Form::label('refTo', 'Referred To') !!}
                        <div class="col-lg-4">
                        <input id="ot" type="checkbox" name="refTo[]" value="OT">
                        <label for="ot"><strong>OT</strong></label>
                        </div>
                        <div class="col-lg-4">
                        <input id="ipd" type="checkbox" name="refTo[]" value="IPD">
                        <label for="ipd"><strong>IPD</strong></label>
                        </div>
                        <div class="col-lg-4">
                        <input id="PATHOLOGY" type="checkbox" name="refTo[]" value="PATHOLOGY">
                        <label for="PATHOLOGY"><strong>PATHOLOGY</strong></label>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="refTo" class="control-label ">&nbsp;</label>
                        <div class="col-lg-4">
                        <input id="XRay" type="checkbox" name="refTo[]" value="X-RAY">
                        <label for="XRay"><strong>X-RAY</strong></label>
                        </div>

                        <div class="col-lg-4">
                        <input id="PHYSIOTHERPHY" type="checkbox" name="refTo[]" value="PHYSIOTHERPHY">
                        <label for="PHYSIOTHERPHY"><strong>PHYSIOTHERPHY</strong></label>
                        </div>

                        <div class="col-lg-4">
                        <input id="YOGA" type="checkbox" name="refTo[]" value="YOGA">
                        <label for="YOGA"><strong>YOGA</strong></label>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="refTo" class="control-label col-lg-3">&nbsp;</label>
                        <div class="col-lg-3">
                        <input id="DISPENSARY" type="checkbox" name="refTo[]" value="DISPENSARY">
                        <label for="DISPENSARY"><strong>DISPENSARY</strong></label>
                        </div>
                        <div class="col-lg-3">
                        <input id="OTHER HOSPITAL" type="checkbox" name="refTo[]" value="OTHER HOSPITAL">
                        <label for="OTHER HOSPITAL"><strong>OTHER HOSPITAL</strong></label>
                        </div>
                        <div class="col-lg-3">
                        <input id="ECG" type="checkbox" name="refTo[]" value="ECG">
                        <label for="ECG"><strong>ECG</strong></label>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                        {!! Form::label('consultant','Consultant Name') !!}
                        {!!
                        Form::select('consultant', $doctorlist,'',[
                        'class' => 'form-control','id'=>'consultant','placeholder' => '--Select Consultant Name--'
                        ])
                        !!}
                        </div>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
          </div>
          </div>
=======
            {!! Form::close() !!}
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
        </div>
    </div>
<<<<<<< HEAD
  </div>
</div>
=======
</div>
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
