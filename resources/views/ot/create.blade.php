@extends('master.layouts.app')
@section('main-content')
<div class="container" style="width: 1175px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title btn btn-pill btn-info">OT - NEW PATIENT REGISTRATION</h6>
                    <h6 class="pull-right card-title btn btn-pill btn-default" style="margin-left: 400px; background-color:#1fb5ad;color:white;"><i class="fa fa-list"></i>  SHOW/SEARCH OLD PATIENT</h6>

                </div>
                <div class="card-body">
                  {!! Form::open(array('route' => 'ot-store','files'=>'true','id'=>'profile-form')) !!}
                        <div class="col-md-12">
                           <div class="row">

                           </div>
                           <!-- <div class="row">
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
                           </div> -->
                           <div class="row">
                                <div class="col-md-offset-3 col-sm-2">
                                        <div class="form-group">
                                                {!! Form::label('opdNUM', 'OPD Number:*') !!}
                                        </div>
                                </div>
                                <div class="col-sm-3">
                                        <div class="form-group">
                                                {!! Form::text('opdNum', '', ['class' => 'form-control','id'=>'opdNum','placeholder'=>'OPD Registration number']) !!}
                                        </div>
                                </div>
                                <div class="col-md-offset-3 col-sm-2">
                                        <div class="form-group">
                                                {!! Form::label('opdNUM', 'OPD Date:*') !!}
                                        </div>
                               </div>
                               <div class="col-sm-3">
                                       <div class="form-group">
                                               {!! Form::text('opdDate', '', ['class' => 'form-control','id'=>'opddate','placeholder'=>'OPD date']) !!}
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
                                              {!! Form::text('patientName', '', ['class' => 'form-control','id'=>'patientName']) !!}
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
                                              {!! Form::text('ipdRegNum', '', ['class' => 'form-control','id'=>'ipdRegNum','placeholder'=>'IPD Registration number']) !!}
                                      </div>
                              </div>
                              <div class="col-md-offset-3 col-sm-2">
                                      <div class="form-group">
                                              {!! Form::label('ipdRegNUM', 'IPD Date:*') !!}
                                      </div>
                             </div>
                             <div class="col-sm-3">
                                     <div class="form-group">
                                             {!! Form::text('ipdDate', '', ['class' => 'form-control','id'=>'ipddate','placeholder'=>'IPD date']) !!}
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
                                                {!! Form::text('age', '', ['class' => 'form-control','id'=>'age','placeholder'=>'AGE']) !!}
                                        </div>
                                </div>
                                <div class="col-md-offset-3 col-sm-2">
                                        <div class="form-group">
                                                {!! Form::label('gender', 'GENDER:*') !!}
                                        </div>
                               </div>
                               <div class="col-sm-3">
                                       <div class="form-group">
                                               {!! Form::text('gender', '', ['class' => 'form-control','id'=>'gender','placeholder'=>'GENDER']) !!}
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
                                                  {!! Form::text('address', '', ['class' => 'form-control','id'=>'address']) !!}
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
                                                  {!! Form::date('otDate', '', ['class' => 'form-control','id'=>'otDate']) !!}
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
                                                {!! Form::textarea('diagnosis',null,['class'=>'form-control', 'id'=>'diagnosis','rows' => 3, 'cols' => 40,'placeholder'=>'diagnosis']) !!}
                                          </div>
                                  </div>
                             </div>
                             <div class="row">
                                  <div class="col-md-offset-3 col-sm-2">
                                          <div class="form-group">
                                                  {!! Form::label('otProcessure', 'OT Processure:*') !!}
                                          </div>
                                  </div>
                                  <div class="col-sm-8">
                                          <div class="form-group">
                                                {!! Form::textarea('otProcessure',null,['class'=>'form-control', 'id'=>'otProcessure','rows' => 3, 'cols' => 40,'placeholder'=>'otprocessre']) !!}
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
                                                      ['class' => 'form-control','id'=>'Consultant'])
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
                                                      {!! Form::text('otherConsultant', '', ['class' => 'form-control','id'=>'otherConsultant']) !!}
                                              </div>
                                      </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-offset-3 col-sm-2">
                                           <div class="form-group">
                                                   {!! Form::label('adviceTreatment', 'advice & Treatment:*') !!}
                                           </div>
                                   </div>
                                   <div class="col-sm-8">
                                           <div class="form-group">
                                                 {!! Form::textarea('adviceTreatment',null,['class'=>'form-control', 'id'=>'adviceTreatment','rows' => 3, 'cols' => 40,'placeholder'=>'adviceTreatment']) !!}
                                           </div>
                                   </div>
                              </div>
                              <div class="row">
                                      <div class="col-md-offset-3 col-sm-2">
                                              <div class="form-group">
                                                      {!! Form::label('medicine1', 'Medicine<span class="badge badge-danger control-label">1</span>',[],false) !!}
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
                                                          'S',
                                                          ['class' => 'form-control','id'=>'medicine1'])
                                                      !!}
                                              </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                          <div class="col-md-offset-3 col-sm-2">
                                                  <div class="form-group">
                                                          {!! Form::label('medicine2', 'Medicine<span class="badge badge-danger control-label">2</span>',[],false) !!}
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
                                                              'S',
                                                              ['class' => 'form-control','id'=>'medicine2'])
                                                          !!}
                                                  </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                              <div class="col-md-offset-3 col-sm-2">
                                                      <div class="form-group">
                                                              {!! Form::label('medicine3', 'Medicine<span class="badge badge-danger control-label">3</span>',[],false) !!}
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
                                                                  'S',
                                                                  ['class' => 'form-control','id'=>'medicine3'])
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
                                                             {!! Form::textarea('Remark',null,['class'=>'form-control', 'id'=>'Remark','rows' => 3, 'cols' => 40,'placeholder'=>'Remark']) !!}
                                                       </div>
                                               </div>
                                          </div>




                                               <center >    <button class="btn btn-success" type="submit" >Submit</button>


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
