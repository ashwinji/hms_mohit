@extends('master.layouts.app')
@section('main-content')
<div class="page">
    <div class="row ">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-header">
                      <h3 class="mb-0 card-title">PHYSIOTHERPY EXAMINATION</h3>
                      <div class="card-body">
                      <div class="btn-list" style="float: right;">
                        
                        <a href="#" class="btn btn-xs btn-success">Show Physiotherpy Examination Patient List</a>
                        
                      </div>

                  </div>
                    </div>
                <div class="card-body">
                @include('verror.error')
                  {!! Form::open(array('route' => 'physiotherpy.store','files'=>'true','class'=>'fixed','id'=>'profile-form','autocomplete'=>'off')) !!}
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
                                       {!! Form::text('opdNum', '',['class' => 'form-control','id'=>'opdNum','name'=>'
                                       ','placeholder'=>'OPD Registration number']) !!}
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
                                               {!! Form::date('opdDate', '', ['class' => 'form-control','id'=>'opdDate','name'=>'opdDate','placeholder'=>'OPD date']) !!}
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
                                              {!! Form::text('patientName', '', ['class' => 'form-control','name'=>'patientName','id'=>'patientName']) !!}
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
                                              {!! Form::text('ipdRegNum', '', ['class' => 'form-control','id'=>'ipdRegNum','name'=>'ipdRegNum','placeholder'=>'IPD Registration number']) !!}
                                      </div>
                              </div>
                              <div class="col-md-offset-3 col-sm-2">
                                      <div class="form-group">
                                              {!! Form::label('ipdRegNUM', 'IPD Date:*') !!}
                                      </div>
                             </div>
                             <div class="col-sm-3">
                                     <div class="form-group">
                                             {!! Form::date('ipdDate', '', ['class' => 'form-control','id'=>'ipdDate','name'=>'ipdDate','placeholder'=>'IPD date']) !!}
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
                                                {!! Form::text('age', '', ['class' => 'form-control','id'=>'age','name'=>'age','placeholder'=>'AGE']) !!}
                                        </div>
                                </div>
                                <div class="col-md-offset-3 col-sm-2">
                                        <div class="form-group">
                                                {!! Form::label('gender', 'GENDER:*') !!}
                                        </div>
                               </div>
                               <div class="col-sm-3">
                                       <div class="form-group">
                                               {!! Form::text('gender', '', ['class' => 'form-control','id'=>'gender','name'=>'gender','placeholder'=>'GENDER']) !!}
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
                                                  {!! Form::text('address', '', ['class' => 'form-control','id'=>'address','placeholder'=>'address']) !!}
                                          </div>
                                  </div>
                             </div>
                               <div class="row">
                                  <div class="col-md-offset-3 col-sm-2">
                                          <div class="form-group">
                                                  {!! Form::label('address', 'Reffered By:*') !!}
                                          </div>
                                  </div>
                                  <div class="col-sm-8">
                                          <div class="form-group">
                                                  {!! Form::text('refferedby', '', ['class' => 'form-control','id'=>'refferedby','placeholder'=>'RefferedBY']) !!}
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
                                                  {!! Form::date('testDate', '', ['class' => 'form-control','id'=>'otDate','name'=>'testDate']) !!}
                                          </div>
                                  </div>
                             </div>
                             <div class="row">
                                  <div class="col-md-offset-3 col-sm-2">
                                          <div class="form-group">
                                                  {!! Form::label('diagnosis', 'Disease diagnosis:*') !!}
                                          </div>
                                  </div>
                                  <div class="col-sm-8">
                                          <div class="form-group">

                                                  {!! Form::select('diagnosis',
                                                  array(
                                                      '' => '----Select diagnosis----',
                                                      'Arthrits' => 'Arthrits',
                                                      'Backache&amp Stiffness' => 'Backache&amp Stiffness',
                                                      'Bodyache' => 'Bodyache',
                                                      'Knee Joint Pain' => 'Knee Joint Pain',
                                                      'Cervical  Pain' => 'Cervical  Pain',
                                                      'Others' => 'Others'
                                                      ),
                                                       'S',
                                                      ['class' => 'form-control','id'=>'consultant','name'=>'diagnosis'])
                                                  !!}
                                          </div>
                                  </div>
                              </div>
                             
                               <div class="row">
                                      <div class="col-md-offset-3 col-sm-2">
                                              <div class="form-group">
                                                      {!! Form::label('advicedTherapy', 'Adviced Therapy') !!}
                                              </div>
                                      </div>
                                      <div class="col-sm-8">
                                              <div class="form-group">
                                                      {!! Form::text('advicedTherapy', '', ['class' => 'form-control','id'=>'otherConsultant','placeholder'=>'Adviced Therapy','name'=>'advicedTherapy']) !!}
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
                                                      {!! Form::text('other', '', ['class' => 'form-control','id'=>'other','name'=>'other','placeholder'=>'other']) !!}
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
                                                             {!! Form::textarea('Remark',null,['class'=>'form-control', 'id'=>'Remark','rows' => 3, 'cols' => 40,'placeholder'=>'Remark','name'=>'Remark']) !!}
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