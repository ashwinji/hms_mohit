 <div class="panel panel-default">
      <div class="panel-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">x</span>
          </button>
          <b style="margin-right: 36px">{{ ucfirst($data->patientName) }}</b>
          <span class="pull-right" style="padding-right: 5px">
              <b style="margin-right: 36px">{{ $data->regNum }}</b></span>
          <i class="pull-right fa fa-print btn btn-sm btn-info"style="margin-right: 10px;">Print</i>
      </div>
        <hr>
            <section class="panel">
              <div class="panel-body" id="tables">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hovered">
                      <thead>
                        <tr>
                          <th>Name </th>
                          <td>{{ ucfirst($data->patientName) }}</td>
                          <th>Registration Number </th>
                          <td>{{ $data->regNum }}</td>
                        </tr>
                        <tr>
                          <th>Registration Date </th>
                          <td>{{ $data->regDate }}</td>
                          <th>Registration Amount </th>
                          <td>{{ $data->regAmount }}</td>
                        </tr>
                        <tr>
                          <th>Address </th>
                          <td>{{ $data->address }}</td>
                          <th>Age </th>
                          <td>{{ $data->age }}</td>
                        </tr>
                        <tr>
                          <th>Gender </th>
                          <td>{{ $data->gender }}</td>
                          <th>Contact Number </th>
                          <td>{{ $data->contactNum }}</td>
                        </tr>
                        <tr>
                          <th>Consultant / Dr. Name </th>
                          <td colspan="3">{{ $data->doctorName->name }}</td>
                        </tr>
                        <tr>
                          <th>Department </th>
                          <td colspan="3">{{ $data->departmentName->name }}</td>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>
            </section>

<div class=" col-md-12">
  <div class="row">
<div class="container ">
                      <div class="panel panel-default mb-4">
                              <div class="panel-heading1 ">
                                  <h4 class="panel-title1">
                                    <a class="accordion-toggle collapsed text-center " data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false">OPD TREATMENT</a>
                                  </h4>
                              </div>
                              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                                <div class="panel-body">
                                  <div class="col-md-12">
                                    <div class="text-center">
                                        <strong class="bgRed">OPD</strong>
                                    </div>
                                  </div>
                                    @if(!empty($data->opdTreatmentDetails))
                                    @foreach($data->opdTreatmentDetails as $patient)
                                  <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hovered">
                                      <tbody>
                                        <tr>
                                          <th width="30%">Treatment Date </th>
                                          <td class="text-danger">
                                            <?php static $i=1; ?>
                                            {{ Carbon\Carbon::parse($patient->treatmentDate )->format('d-m-Y')}} <span class="badge pull-right">{{ $i++ }}</span>
                                          </td>
                                        </tr>
                                          <tr>
                                            <th>Treatment / Medicin </th>
                                            <td>{{ $patient->medicine }}</td>
                                          </tr>
                                          <tr>
                                            <th>Number of Days </th>
                                            <td>{{ $patient->nod }}</td>
                                          </tr>
                                          <tr>
                                            <th>Advice / Investigation </th>
                                            <td>{{ $patient->advice }}</td>
                                          </tr>
                                          <tr>
                                            <th>Remark </th>
                                            <td>{{ $patient->remark }}</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    @endforeach
                                    @else
                                   <div class="bgRed badge-warning"><strong>No Data Availble</strong></div>
                                  @endif
                                </div>
                              </div>
                            </div>
                  

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">IPD</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="col-md-12">
            <div class="text-center">
              <strong class="bgRed">IPD</strong>
            </div>
            <hr>
          </div>
          <div class="table-responsive">
            @if(!empty($ipddata))
            <table class="table table-bordered table-striped table-hovered">
              <thead>

                <tr>
                  <th>IPD Number</th>
                  <td>{{$ipddata->id}}</td>
                  <th>IPD Date</th>
                  <td>{{$ipddata->ipdRegDate}}</td>
                </tr>


                <tr>
                  <th>Patient Name</th>
                  <td colspan="3">
                    {{$ipddata->opd->patientName}}                      
                </td>
                </tr>

                <tr>
                  <th>Consultant</th>
                  <td>DR. MAHENDRA SHARMA</td>
                  <th>Other Consultant </th>
                  <td></td>
                </tr>


                <tr>
                  <th>Ward Name</th>
                  <td>General Ward Male</td>
                  <th>Bed Number</th>
                  <td></td>
                </tr>

                <tr>
                  <th>Date of Discharge</th>
                  <td colspan="3">23-07-2018</td>
                </tr>

                <tr>
                  <th>Provisional Diagnosis</th>
                  <td colspan="3">Fever  </td>
                </tr>

                <tr>
                  <th>Chief Complaints</th>
                  <td colspan="3">High grade fever last day, headache,restlessness, nausea,dryness of tongue</td>
                </tr>

                <tr>
                  <th>Past History</th>
                  <td colspan="3">NAD</td>
                </tr>

                <tr>
                  <th>Family History - Maternal</th>
                  <td colspan="3">NAD</td>
                </tr>

                <tr>
                  <th>Family History - Paternal</th>
                  <td colspan="3">NAD</td>
                </tr>

                <tr>
                  <th>Family History - Other</th>
                  <td colspan="3">NAD</td>
                </tr>

                <tr>
                  <th colspan="4">
                    <table class="table table-bordered table-hover table-striped">
                      <tbody><tr>
                        <th>GC:</th>
                        <td>poor</td>
                        <th>Anaemla/Pallor:</th>
                        <td>abs.</td>
                        <th>Bowel/Bladder:</th>
                        <td>regular</td>
                      </tr>
                      <tr>
                        <th>Pulse:</th>
                        <td>88/min.</td>
                        <th>JVP:</th>
                        <td>Normal</td>
                        <th>Sleep:</th>
                        <td>restless</td>
                      </tr>
                      <tr>
                        <th>Temp:</th>
                        <td>103.F</td>
                        <th>Oedema:</th>
                        <td>abs</td>
                        <th>Allergies:</th>
                        <td>no</td>
                      </tr>
                      <tr>
                        <th>Resp:</th>
                        <td>19/min.</td>
                        <th>Cyanosis:</th>
                        <td>abs</td>
                        <th>Skin:</th>
                        <td>Dry</td>
                      </tr>
                      <tr>
                        <th>B.P.:</th>
                        <td>130/90mm of  Hg</td>
                        <th>Appetite:</th>
                        <td>loss</td>
                        <th>Thirst:</th>
                        <td>large quentity of cold water</td>
                      </tr>
                      <tr>
                        <th>Tongue:</th>
                        <td>Dry</td>
                        <th>Lymph Gland:</th>
                        <td>not palpable</td>
                        <th>Addictions:</th>
                        <td>no</td>
                      </tr>
                      <tr>
                        <th>Conjunctiva/Icterus:</th>
                        <td>redness</td>
                        <th>Throat:</th>
                        <td>congusted</td>
                        <th>Diet:</th>
                        <td>veg</td>
                      </tr>
                    </tbody></table>
                  </th>
                </tr>

                <tr>
                  <th>ECG</th>
                  <td colspan="3"></td>
                </tr>

                <tr>
                  <th>Respiratory System</th>
                  <td colspan="3">B/L are clear</td>
                </tr>

                <tr>
                  <th>Gastro - Intestinal System</th>
                  <td colspan="3">bowel regular</td>
                </tr>

                <tr>
                  <th>Cardio - Vascular System</th>
                  <td colspan="3">S1 S2 Normal</td>
                </tr>

                <tr>
                  <th>Central Nervous System</th>
                  <td colspan="3">Conscious</td>
                </tr>

                <tr>
                  <th>Local Examination</th>
                  <td colspan="3"></td>
                </tr>

                <tr>
                  <th>Investigation <span class="badge pull-right">1</span></th>
                  <td colspan="3">CBP&amp;ESR</td>
                </tr>

                <tr>
                  <th>Investigation <span class="badge pull-right">2</span></th>
                  <td colspan="3"></td>
                </tr>

                <tr>
                  <th>Investigation <span class="badge pull-right">3</span></th>
                  <td colspan="3"></td>
                </tr>

                <tr>
                  <th>Medicine <span class="badge badge-danger pull-right">1</span></th>
                  <td>Aconite Nap </td>
                  <th>Potency <span class="badge badge-danger pull-right">1</span></th>
                  <td>30</td>
                </tr>

                <tr>
                  <th>Medicine <span class="badge badge-danger pull-right">2</span></th>
                  <td></td>
                  <th>Potency <span class="badge badge-danger pull-right">2</span></th>
                  <td></td>
                </tr>

                <tr>
                  <th>Medicine <span class="badge badge-danger pull-right">3</span></th>
                  <td></td>
                  <th>Potency <span class="badge badge-danger pull-right">3</span></th>
                  <td></td>
                </tr>

                <tr>
                  <th>Diet Plan <span class="badge badge-success pull-right">1</span></th>
                  <td>Low Protein Diet</td>
                  <th>Diet Plan <span class="badge badge-success pull-right">2</span></th>
                  <td></td>
                </tr>

                <tr>
                  <th>Diet Plan Text <span class="badge badge-info pull-right">1</span></th>
                  <td></td>
                  <th>Diet Plan Text <span class="badge badge-info pull-right">2</span></th>
                  <td></td>
                </tr>

                <tr>
                  <th>Yoga</th>
                  <td></td>
                  <th>Physiotherapy</th>
                  <td></td>
                </tr>

                <tr>
                  <th>Remark</th>
                  <td colspan="3"></td>
                </tr>

              </thead>
            </table>
            @else
            <div class="bgRed badge-danger text-center"><strong>No Data Availble</strong></div>
            
            @endif

          </div>
          <hr>
          </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">BLOOD EXAMINATION</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="table-responsive">
          <div class="col-md-12">
            <div class="text-center">
              <strong class="bgRed">BLOOD EXAMINATION</strong>
            </div>
            <hr>
          </div>
          <div class="table-responsive">
                    <div class="panel-body">
                      <div class="table-responsive">
                        @if(!empty($blooddata))
                        <table class="table table-bordered table-striped table-hovered">
                            <thead>
                              <tr>
                                <th width="25%">Name </th>
                                <td width="25%">Ms Shaziya</td>
                                <th width="25%">Age </th>
                                <td width="25%">19</td>
                              </tr>
                              <tr>
                                <th>Referred By </th>
                                <td>DR. VANDANA MARU</td>
                                <th>Test Date </th>
                                <td>12-02-2019</td>
                              </tr>
                              <tr>
                                <th>Investigation Advised </th>
                                <td>{{$blooddata->investigationAdvised}}</td>
                                <th>OPD Number </th>
                                <td>7193/18</td>
                              </tr>
                              </thead>
                          </table>
                          <hr>
                          <!-- <div class="col-md-12">
                            <div class="text-center">
                              <strong class="bgRed">BLOOD EXAMINATION</strong>
                            </div>
                            <hr>
                          </div> -->

                          <table class="table table-bordered table-striped table-hovered">
                            <tbody><tr>
                              <th width="35%"> <span class="badge badge-danger">1</span></th>
                              <th width="25%"><span class="text-danger">OVSERVED VALUES</span> </th>
                              <th width="40%"><span class="text-danger">NORMAL RANGE</span> </th>
                            </tr>
                            <tr>
                              <th>Haemoglobin </th>
                              <td>{{$blooddata->haemoglobin}}</td>
                              <td><small>Male : 14 - 16gm% <br> Female : 12 - 15gm%</small></td>
                            </tr>
                            <tr>
                              <th>Total RBC Count </th>
                              <td>Test</td>
                              <td><small>Male : 4.5 - 6.0 Millions/Cumm. <br> Female : 4.5 - 5.5 Millions/Cumm.</small></td>
                            </tr>
                            <tr>
                              <th>Total WBC Count </th>
                              <td>Test</td>
                              <td>4000 - 11000 Cumm.</td>
                            </tr>
                            <tr>
                              <th>Polymorphs </th>
                              <td>Test</td>
                              <td>40% - 75%</td>
                            </tr>
                            <tr>
                              <th>Lymphocytes </th>
                              <td>Test</td>
                              <td>20% - 45%</td>
                            </tr>
                            <tr>
                              <th>Eosinophils </th>
                              <td>Test</td>
                              <td>1% - 6%</td>
                            </tr>
                            <tr>
                              <th>Monocytes </th>
                              <td>Test</td>
                              <td>2% - 10%</td>
                            </tr>
                            <tr>
                              <th>Basophils </th>
                              <td>Test</td>
                              <td>0% - 1%</td>
                            </tr>
                            <tr>
                              <th>ERS </th>
                              <td>Test</td>
                              <td><small>Male : 0-9mm <br> Female : 0-20mm</small> FHR</td>
                            </tr>
                            <tr>
                              <th>Platelet Count </th>
                              <td>Test</td>
                              <td>1.5 - 4.5 Lac/Cumm</td>
                            </tr>
                            <tr>
                              <th>Reticulocytes </th>
                              <td>Test</td>
                              <td>0.5 - 2.0%</td>
                            </tr>
                            <tr>
                              <th>PCV </th>
                              <td>Test</td>
                              <td><small>Male : 40 - 54% <br> Female : 37 - 47%</small></td>
                            </tr>
                            <tr>
                              <th>MCV </th>
                              <td>Test</td>
                              <td>78 - 92 Cu Micron</td>
                            </tr>
                            <tr>
                              <th>MCH </th>
                              <td>Test</td>
                              <td>27 - 32 Micro Micro GM</td>
                            </tr>
                            <tr>
                              <th>MCHC </th>
                              <td>Test</td>
                              <td>32% - 36%</td>
                            </tr>
                            <tr>
                              <th>Bleeding Time </th>
                              <td>Test</td>
                              <td>1 - 5 Minutes</td>
                            </tr>
                            <tr>
                              <th>Clotting Time </th>
                              <td>Test</td>
                              <td>5 - 12 Minutes</td>
                            </tr>
                            <tr>
                              <th>Malarial Parasite </th>
                              <td>Test</td>
                              <td></td>
                            </tr>
                            <tr>
                              <th colspan="3"> Remark : Test</th>
                            </tr>
                          </tbody></table>
                          @else
            <div class="bgRed badge-danger text-center"><strong>No Data Availble</strong></div>
                          @endif
                        </div>
                    </div>
          </div>
            
          </div>
        </div>

      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
          SEMEN EXAMINATION</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="table-responsive">
                      <div class="col-md-12">
            <div class="text-center">
              <strong class="bgRed">SEMEN EXAMINATION</strong>
            </div>
            <hr>
          </div>
          <div class="table-responsive">
                    <div class="panel-body">
                        <div class="table-responsive">
                          @if(!empty($semendata))
                        <table class="table table-bordered table-striped table-hovered">
                            <thead>
                              <tr>
                                <th>Name </th>
                                <td colspan="3">Ms Shaziya</td>
                              </tr>
                              <tr>
                                <th width="25%">Age </th>
                                <td width="25%">19</td>
                                <th width="25%">Gender </th>
                                <td width="25%">Female Adult</td>
                              </tr>
                              <tr>
                                <th>Referred By </th>
                                <td>DR. VANDANA MARU</td>
                                <th>Test Date </th>
                                <td>12-02-2019</td>
                              </tr>
                              <tr>
                                <th>Investigation Advised </th>
                                <td>Test</td>
                                <th>OPD Number </th>
                                <td>7193/18</td>
                              </tr>
                              </thead>
                            </table>
                            <hr>
                            <!-- <div class="col-md-12">
                              <div class="text-center">
                                <strong class="bgRed">SEMEN EXAMINATION</strong>
                              </div>
                              <hr>
                            </div> -->

                            <table class="table table-bordered table-striped table-hovered">
                              <tbody><tr>
                                <th colspan="2"><span class="badge badge-danger">1</span></th>
                              </tr>
                              <tr>
                                <th>Place Of Collection </th>
                                <td>{{$semendata->placeOfCollection}}</td>
                              </tr>
                              <tr>
                                <th>Time Of Collection In Lab </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th colspan="2"><span class="text-danger">PHYSICAL EXAMINATION</span></th>
                              </tr>
                              <tr>
                                <th>Quantity </th>
                                <td>Test / <small>NORMAL 2 - 5 ml</small></td>
                              </tr>
                              <tr>
                                <th>Consistency </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th>Colour </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th>PH </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th>Liqufication Time </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th>Viscocity </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th colspan="2"><span class="text-danger">MICROSCOPIC EXAMINATION</span></th>
                              </tr>
                              <tr>
                                <th>Count </th>
                                <td>Test / <small>NORMAL 60 - 150 Millions/ml</small></td>
                              </tr>
                              <tr>
                                <th>Motility </th>
                                <td>Test / <small>NORMAL 80% &amp; More</small></td>
                              </tr>
                              <tr>
                                <th>Abnormal Forms </th>
                                <td>Test / <small>NORMAL 20%</small></td>
                              </tr>
                              <tr>
                                <th>Pus Cells </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th>Epithelial Cells </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th>RBCS </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th>Fructose Test </th>
                                <td>Test</td>
                              </tr>
                              <tr>
                                <th colspan="2"> Other : Test</th>
                              </tr>
                            </tbody>
                          </table>
                          @endif
                          </div>
                    </div>
          </div>
          </div>
        </div>

      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
          SERUN FOR WIDAL TEST</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
                    <div class="col-md-12">
            <div class="text-center">
              <strong class="bgRed">SERUN FOR WIDAL TEST</strong>
            </div>
            <hr>
          </div>
          <div class="table-responsive">
                    <div class="panel-body">
                    <div class="table-responsive">
                      @if(!empty($serundata))
                        <table class="table table-bordered table-striped table-hovered">
                          <thead>
                            <tr>
                              <th>Name </th>
                              <td colspan="3">Ms Shaziya</td>
                            </tr>
                            <tr>
                              <th width="25%">Age </th>
                              <td width="25%">19</td>
                              <th width="25%">Gender </th>
                              <td width="25%">Female Adult</td>
                            </tr>
                            <tr>
                              <th>Referred By </th>
                              <td>DR. VANDANA MARU</td>
                              <th>Test Date </th>
                              <td>12-02-2019</td>
                            </tr>
                            <tr>
                              <th>Investigation Advised </th>
                              <td>Test</td>
                              <th>OPD Number </th>
                              <td>7193/18</td>
                            </tr>
                            </thead>
                          </table>
                          <hr>
                         <!--  <div class="col-md-12">
                            <div class="text-center">
                              <strong class="bgRed">SERUM FOR WIDAL TEST REPORT</strong>
                            </div>
                            <hr>
                          </div> -->

                          <table class="table table-bordered table-striped table-hovered">
                            <tbody><tr>
                              <td colspan="6"><span class="badge badge-danger">1</span></td>
                            </tr>
                            <tr>
                              <th rowspan="2"><span class="text-danger">ANTIGEN</span></th>
                              <th colspan="4" class=" text-center"><span class="text-danger text-center">DILUTION OF SERUM</span> </th>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>S. TYPHI <span class="pull-right">"O"</span></td>
                              <td>{{$serundata->sTyphiO}}</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>S. TYPHI <span class="pull-right">"H"</span></td>
                              <td>Test</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>S. PARA TYPHI <span class="pull-right">"AH"</span></td>
                              <td>Test</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td>S. PARA TYPHI <span class="pull-right">"BH"</span></td>
                              <td>Test</td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th colspan="5"> <span class="text-danger">IMPRESSION :</span><br> Test</th>
                            </tr>
                          </tbody>
                        </table>
                        @endif
                      </div>
                   </div>
          </div>
        </div>

      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
          STOOL EXAMINATION</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="col-md-12">
            <div class="text-center">
              <strong class="bgRed">STOOL EXAMINATION</strong>
            </div>
            <hr>
          </div>
          <div class="table-responsive">
            @if(!empty($stooldata))
            <table style="width:100%;" class="table table-bordered table-striped table-hovered">
<tbody>
  <tr>
    <th colspan="4" style="color: red;">STOOL EXAMINATION:-</th>
    </tr>
  <tr>
    <th style="color: red;">MACROSCOPIC:-</th>
    <th>Details</th>
  </tr>
    <tr>
      <th>Colour:</th>
      <td>{{$stooldata->colour}}</td>
      
    </tr>
    <tr>
      <th>Consistency:</th>
      <td>Consistency</td>
    </tr>
    <tr>
      <th>Mucus:</th>
      <td>Mucus</td>
      
    </tr>
      <tr>
      <th>Blood:</th>
      <td>Blood</td>
      
      
    </tr>
    <tr>
      <th colspan="2" style="color: red;">MICROSCOPIC:-</th>
      
    </tr>

      <tr>
      <th>Pus Cells:</th>
      <td>Pus Cells</td>
      
    </tr>
     <tr>
      <th>RBCs:</th>
      <td>RBCS</td>
      
    </tr>
    <tr>
      <th>Vegetable Matter:</th>
      <td>Vegetable Matter</td>
      
    </tr>
    <tr>
      <th>Cysts:</th>
      <td>Cysts</td>
      
    </tr>
    <tr>
      <th>Giardia:</th>
      <td>Giardia</td>
      
    </tr>
    <tr>
      <th>E Histolytica:</th>
      <td>E Histolytica</td>
      
    </tr>
    <tr>
      <th>E Coil:</th>
      <td>E Coil</td>
      
    </tr>
    <tr>
      <th>OVA:</th>
      <td>OVA</td>
      
    </tr>
    <tr>
      <th>Worms:</th>
      <td>Worms</td>
      
    </tr>
    <tr>
      <th>Occult Stool:</th>
      <td>Occult Stool</td>
      
    </tr>
    <tr>
      <th>Reducing Substances:</th>
      <td>Reducing Substances</td>
      
    </tr>
    <tr>
      <th>Other :</th>
      <td>Other</td>
      
    </tr>


  </tbody>
</table>
@endif
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
          URINE EXAMINATION</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="table-responsive">
              <div class="panel-body">
                <div class="col-md-12">
            <div class="text-center">
              <strong class="bgRed">URINE EXAMINATION</strong>
            </div>
            <hr>
          </div>
                   <div class="table-responsive">
                    @if(!empty($urinedata))
                      <table class="table table-bordered table-striped table-hovered">
                        <thead>
                          <tr>
                            <th>Name </th>
                            <td colspan="3">{{$data->patientName}}</td>
                          </tr>
                          <tr>
                            <th width="25%">Age </th>
                            <td width="25%">19</td>
                            <th width="25%">Gender </th>
                            <td width="25%">Female Adult</td>
                          </tr>
                          <tr>
                            <th>Referred By </th>
                            <td>DR. VANDANA MARU</td>
                            <th>Test Date </th>
                            <td>12-02-2019</td>
                          </tr>
                          <tr>
                            <th>Investigation Advised </th>
                            <td>Testing</td>
                            <th>OPD Number </th>
                            <td>7193/18</td>
                          </tr>
                          </thead>
                        </table>
                        <hr>
                        <div class="col-md-12">
                          <div class="text-center">
                            <strong class="bgRed">URINE EXAMINATION</strong>
                          </div>
                          <hr>
                        </div>

                        <table class="table table-bordered table-striped table-hovered">
                          <tbody>
                            <tr>
                            <th colspan="4"><span class="badge badge-danger">1</span> </th>
                          </tr>
                          <tr>
                            <th colspan="2"><span class="text-danger">PHYSICAL EXAMINATION</span> </th>
                            <th colspan="2"><span class="text-danger">MICROSCOPIC EXAMINATION</span> </th>
                          </tr>
                          <tr>
                            <th width="30%">Sample </th>
                            <td width="20%">{{$urinedata->sample}}</td>
                            <th width="30%">Pus Cells </th>
                            <td width="20%">test</td>
                          </tr>
                          <tr>
                            <th>Quantity </th>
                            <td>test</td>
                            <th>Epithellal Cells</th>
                            <td>test</td>
                          </tr>
                          <tr>
                            <th>Colour </th>
                            <td>test</td>
                            <th>Crystals</th>
                            <td>test</td>
                          </tr>
                          <tr>
                            <th>SP Gravity </th>
                            <td>test</td>
                            <th>RBS</th>
                            <td>test</td>
                          </tr>
                          <tr>
                            <th>Reaction </th>
                            <td>test</td>
                            <th>Bacteria</th>
                            <td>test</td>
                          </tr>
                          <tr>
                            <th colspan="2"><span class="text-danger">CHEMICAL EXAMINATION</span> </th>
                            <th>Cast</th>
                            <td>test</td>
                          </tr>
                          <tr>
                            <th>Albumin </th>
                            <td>test</td>
                            <th>Others</th>
                            <td>test</td>
                          </tr>
                          <tr>
                            <th>Suger </th>
                            <td>test</td>
                            <th></th>
                            <td></td>
                          </tr>
                          <tr>
                            <th>BileSalts </th>
                            <td>test</td>
                            <th></th>
                            <td></td>
                          </tr>
                          <tr>
                            <th>Bile Pigments </th>
                            <td>test</td>
                            <th></th>
                            <td></td>
                          </tr>
                          <tr>
                            <th>Acetone </th>
                            <td>test</td>
                            <th></th>
                            <td></td>
                          </tr>
                          <tr>
                            <th>Bence Jones Proteins </th>
                            <td>test</td>
                            <th></th>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                      @endif
                    </div>
                 </div>
          </div>
        </div>
      </div>
    </div>

</div>

  </div>
</div>