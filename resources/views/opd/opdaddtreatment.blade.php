<div class="page">
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
            <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><b>X</b></span>
            <b style="margin-right: 36px">{{ ucfirst($data->patientName) }}</b>
            <span class="pull-right" style="padding-right: 5px">
              <b style="margin-right: 36px">{{ $data->regNum }}</b>
            </span> <i class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);"></a>
          </div>

          <table class="table table-bordered table-striped table-hovered">
            <thead>
              <tr>
                <b>
                  <th>Registration Number </th>
                </b>
                <td>{{ $data->regNum }}</td>
                <th>Registration Date </th>
                <td>{{ $data->regDate }}</td>
              </tr>
              <tr>

                <th>Name </th>
                <td colspan="3">{{ $data->patientName }} </td>
              </tr>
              <tr>
                <th>Gender </th>
                <td>{{ $data->gender }}</td>
                <th>Age </th>
                <td>{{ $data->age }}</td>
              </tr>
              <tr>
                <th>Address </th>
                <td colspan="3">{{ $data->address }}</td>
              </tr>
              <tr>
                <th>Consultant Name </th>
                <td>{{ $data->consultant }}</td>
                <th>Other Consultant </th>
                <td>{{ $data->otherConsultant }}</td>
              </tr>
              <tr>
                <th>Department </th>
                <td colspan="3">{{ $data->department }}</td>
              </tr>
            </thead>

          </table>
        </div>
        <div class="text-center">
          <div class="label label-primary">Add Treatment Details</div>

        </div>
        {!! Form::open(array('files'=>'true','id'=>'opdTreatement-form','autocomplete'=>'off')) !!}
        @csrf
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="patientId" value="{{ $data->regNum }}" id="patientId">
              {!! Form::label('complaint', 'Complaints') !!}
              <div class="form-group">
                {!! Form::textarea('complaint','', ['class' => 'form-control','placeholder' => 'Enter complaint','rows'
                => 3, 'cols' => 10,'id'=>'id-complaint']) !!}
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group ">
                {!! Form::label('regDate', 'Treatment Date') !!}
                {!! Form::date('regDate','', ['class' => 'form-control','id'=>'regDate','placeholder' => 'Enter
                regDate']) !!}
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
                {!! Form::select('medicine',$medicinelist,'' ,
                ['class' => 'form-control',
                'id'=>'medicine',
                'placeholder' => '--Select Medicine--']) !!}
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                {!! Form::label('name', 'Potency') !!}
                {!! Form::select('potency1', array(''=>'--Select Potency--','6' => '6', '30' => '30', '200' =>
                '200','1M' => '1M', '10M' => '10M', '50M' => '50M','1X' => '1X','3X' => '3X', '6X' => '6X', '12X' =>
                '12X','Q' => 'Q'),'Input', ['class' => 'form-control','id'=>'potency']) !!}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group ">
                {!! Form::label('name', 'Number of Days',['class'=>'control-label col-lg-3']) !!}

                {!! Form::text('nod', '',['class'=>'form-control','id'=>'nod','placeholder'=>'Treatment Number of
                Days']) !!}
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            {!! Form::label('name', 'Investigation 1') !!}
            <div class="form-group">
              {!! Form::select('advice[]', array(''=>'--SELECT INVESTIGATION--','BLOOD GROUP & RH TYPE' => 'BLOOD GROUP
              & RH TYPE', 'BLOOD SUGAR' => 'BLOOD SUGAR', 'BLOOD UREA' => 'BLOOD UREA','BLOOD WIDAL TEST' => 'BLOOD
              WIDAL TEST','BT/CT' => 'BT/CT','CBC' => 'CBC','CBP' => 'CBP', 'CBP/ESR' => 'CBP/ESR', 'ECG' =>
              'ECG','ESR' => 'ESR','HUMOGLOBIN (HB%)' => 'HUMOGLOBIN (HB%)','LFT' => 'LFT','PS FOR MP' => 'PS FOR MP',
              'RA FACTORE' => 'RA FACTORE', 'REFFERED TO OTHER PATHOLOGY' => 'REFFERED TO OTHER PATHOLOGY','RFT' =>
              'RFT','SEMEN ANALYSIS' => 'SEMEN ANALYSIS','SERUM BILIRUBIN' => 'SERUM BILIRUBIN','SERUM CALCIUM' =>
              'SERUM CALCIUM', 'SERUM CREATININE' => 'SERUM CREATININE', 'SERUM URIC ACID' => 'SERUM URIC ACID','STOOL
              R/M' => 'STOOL R/M','T3 T4 TSH' => 'T3 T4 TSH','TOTAL LIPIDS PROFILE' => 'TOTAL LIPIDS PROFILE', 'URINE
              FOR BILE SALT / BILE PIGMENT' => 'URINE FOR BILE SALT / BILE PIGMENT','URINE FOR SUGAR/ALBUMIN/KETONE' =>
              'URINE FOR SUGAR/ALBUMIN/KETONE','URINE R/M' => 'URINE R/M','X-RAY ' => 'X-RAY ',),'Input', ['class' =>
              'form-control','id'=>'advice',]) !!}
            </div>
          </div>


          <div class="form-group">
            <div class="col-lg-12">
              {!! Form::label('remark', 'Remark') !!}
              {!! Form::textarea('remark', null, ['class' => 'form-control ','placeholder' => 'Enter remark','rows' =>
              3, 'cols' => 10,'id'=>'remark']) !!}
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row">
             
                      <div class="form-group ">
                        <label for="refTo" class="control-label col-lg-3">Referred To</label>
                        <div class="col-lg-3">
                          <input id="ot" type="checkbox" name="refTo[]" value="OT">
                          <label for="ot"><strong>OT</strong></label>
                        </div>

                        <div class="col-lg-3">
                          <input id="ipd" type="checkbox" name="refTo[]" value="IPD">
                          <label for="ipd"><strong>IPD</strong></label>
                        </div>

                        <div class="col-lg-3">
                          <input id="PATHOLOGY" type="checkbox" name="refTo[]" value="PATHOLOGY">
                          <label for="PATHOLOGY"><strong>PATHOLOGY</strong></label>
                        </div>

                      </div>

                      <div class="form-group ">
                        <label for="refTo" class="control-label col-lg-3">&nbsp;</label>
                        <div class="col-lg-3">
                          <input id="XRay" type="checkbox" name="refTo[]" value="X-RAY">
                          <label for="XRay"><strong>X-RAY</strong></label>
                        </div>

                        <div class="col-lg-3">
                          <input id="PHYSIOTHERPHY" type="checkbox" name="refTo[]" value="PHYSIOTHERPHY">
                          <label for="PHYSIOTHERPHY"><strong>PHYSIOTHERPHY</strong></label>
                        </div>

                        <div class="col-lg-3">
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
              {!! Form::label('consultant', 'IPD Consultant Name',['class' => 'control-label col-lg-3',]) !!}
              {!!
              Form::select('consultant', $docterlist,'',
              [
              'class' => 'form-control',
              'id'=>'consultant',
              'placeholder' => '--Select Consultant Name--'
              ])

              !!}

            </div>
          </div>

        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>