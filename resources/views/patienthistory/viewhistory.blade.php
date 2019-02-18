 <div class="container">
  <div class="row">
    <div class="col-md-12">
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
          </div>

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
          </div>
        </div>

                <!-- ============================Ipd data=============================== -->

 <div class="row">
    <div class="col-md-12">
                <div class="panel panel-default mb-4">
                  <div class="panel-heading1 ">
                    <h4 class="panel-title1">
                      <a class="accordion-toggle collapsed text-center" data-toggle="collapse" data-parent="#accordion" href="#collapseFour1" aria-expanded="false">IPD TREATMENT</a>
                    </h4>
                  </div>
                  <div id="collapseFour1" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
                        @if(empty($ipdData))
                     <br>
                  <div class="bgRed badge-warning"><strong>No Data Availble</strong></div>
                       @else
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-striped table-hovered">
                        <thead>
                          <tr>
                            <th width="25%">OPD Number </th>
                            <td width="25%">{{ $ipdData->patientId }}</td>
                            <th width="25%">OPD Date</th>
                            <td width="25%">{{ $ipdData->opd->regDate}}</td>
                          </tr>
                          <tr>
                            <th>IPD Number</th>
                            <td>{{ $ipdData->ipdRegNum }}</td>
                            <th>IPD Date</th>
                            <td>{{ $ipdData->ipdRegDate }}</td>
                          </tr>
                          <tr>
                            <th>Patient Name</th>
                            <td colspan="3">
                              {{ $ipdData->opd->patientName }}   
                              <strong>
                             {{ $ipdData->prefixName }}                     
                             </strong>
                             {{ $ipdData->refName }}                   
                              </td>
                          </tr>
                          <tr>
                            <th>Gender</th>
                            <td>{{$ipdData->opd->gender  }}</td>
                            <th>Age</th>
                            <td>{{ $ipdData->opd->age }}</td>
                          </tr>
                          <tr>
                            <th>Address</th>
                            <td colspan="3">{{ $ipdData->opd->address }}</td>
                          </tr>
                          <tr>
                            <th>Consultant</th>
                            <td>{{ $ipdData->doctorName->name }}</td>
                            <th>Other Consultant </th>
                            <td>{{ $ipdData->otherConsultant }}</td>
                          </tr>
                          <tr>
                            <th>Ward Name</th>
                            <td>{{ $ipdData->getwardName->name }}</td>
                            <th>Bed Number</th>
                            <td>{{ $ipdData->bedNum }}</td>
                          </tr>
                          <tr>
                            <th>Date of Discharge</th>
                            <td colspan="3">{{ $ipdData->dod }}</td>
                          </tr>
                          <tr>
                            <th>Provisional Diagnosis</th>
                            <td colspan="3">{{ $ipdData->provisionalDiagnosis }}</td>
                          </tr>

                          <tr>
                            <th>Chief Complaints</th>
                            <td colspan="3">{{ $ipdData->chiefComplaints }}</td>
                          </tr>
                          <tr>
                            <th>Past History</th>
                            <td colspan="3">{{ $ipdData->pastHistory }}</td>
                          </tr>

                          <tr>
                            <th>Family History - Maternal</th>
                            <td colspan="3">{{ $ipdData->fh_maternal }}</td>
                          </tr>

                          <tr>
                            <th>Family History - Paternal</th>
                            <td colspan="3">{{ $ipdData->fh_paternal}}</td>
                          </tr>

                          <tr>
                            <th>Family History - Other</th>
                            <td colspan="3">{{ $ipdData->fh_other}}</td>
                          </tr>
                          <tr>
                            <th colspan="4">
                              <table class="table table-bordered table-hover table-striped">
                                  <tbody><tr>
                                    <th>GC:</th>
                                    <td>{{ $ipdData->ge_gc  }} </td>
                                    <th>Anaemla/Pallor:</th>
                                    <td>{{ $ipdData->ge_anaemla  }}</td>
                                    <th>Bowel/Bladder:</th>
                                    <td>{{  $ipdData->ge_bowel }}</td>
                                  </tr>
                                  <tr>
                                    <th>Pulse:</th>
                                    <td>{{  $ipdData->ge_pulse }}</td>
                                    <th>JVP:</th>
                                    <td>{{ $ipdData->ge_jvp }}</td>
                                    <th>Sleep:</th>
                                    <td>{{ $ipdData->ge_sleep }}</td>
                                  </tr>
                                  <tr>
                                    <th>Temp:</th>
                                    <td>{{ $ipdData->ge_temp  }} </td>
                                    <th>Oedema:</th>
                                    <td>{{ $ipdData->ge_oedema  }}</td>
                                    <th>Allergies:</th>
                                    <td>{{  $ipdData->ge_allergies }}</td>
                                  </tr>
                                  <tr>
                                    <th>Resp:</th>
                                    <td>{{  $ipdData->ge_resp}}</td>
                                    <th>Cyanosis:</th>
                                    <td>{{ $ipdData->ge_cyanosis  }}</td>
                                    <th>Skin:</th>
                                    <td>{{ $ipdData->ge_skin  }}</td>
                                  </tr>
                                  <tr>
                                    <th>B.P.:</th>
                                    <td>{{$ipdData->ge_bp }}</td>
                                    <th>Appetite:</th>
                                    <td>{{ $ipdData->ge_thirst }}</td>
                                    <th>Thirst:</th>
                                    <td>{{ $ipdData->ge_tongue }}</td>
                                  </tr>
                                  <tr>
                                    <th>Tongue:</th>
                                    <td>{{ $ipdData->ge_lymph }}</td>
                                    <th>Lymph Gland:</th>
                                    <td>{{ $ipdData->ge_addictions }}  </td>
                                    <th>Addictions:</th>
                                    <td>{{ $ipdData->ge_conjective }}</td>
                                  </tr>
                                  <tr>
                                    <th>Conjunctiva/Icterus:</th>
                                    <td>{{ $ipdData->ge_throat }}</td>
                                    <th>Throat:</th>
                                    <td>{{ $ipdData->ge_diet }}</td>
                                    <th>Diet:</th>
                                    <td>{{$ipdData->ge_appetite  }}</td>
                                  </tr>
                                </tbody>
                              </table>
                            </th>
                          </tr>
                          <tr>
                            <th>ECG</th>
                            <td colspan="3">{{ $ipdData->ecgTest }}</td>
                          </tr>

                          <tr>
                            <th>Respiratory System</th>
                            <td colspan="3">{{ $ipdData->respiratorySystem }} </td>
                          </tr>

                          <tr>
                            <th>Gastro - Intestinal System</th>
                            <td colspan="3">{{ $ipdData->gastroIntestinalSystem }}</td>
                          </tr>

                          <tr>
                            <th>Cardio - Vascular System</th>
                            <td colspan="3">{{ $ipdData->cardioVascularSystem }}</td>
                          </tr>

                          <tr>
                            <th>Central Nervous System</th>
                            <td colspan="3">{{ $ipdData->centralNervousSystem }} </td>
                          </tr>

                          <tr>
                            <th>Local Examination</th>
                            <td colspan="3">{{ $ipdData->localExamination }}</td>
                          </tr>

                          <tr>
                            <th>Investigation <span class="badge pull-right">1</span></th>
                            <td colspan="3">{{ $ipdData->getInvestigation1->name }}</td>
                          </tr>

                          <tr>
                            <th>Investigation <span class="badge pull-right">2</span></th>
                            <td colspan="3">{{ $ipdData->getInvestigation2->name}}</td>
                          </tr>

                          <tr>
                            <th>Investigation <span class="badge pull-right">3</span></th>
                            <td colspan="3">{{ $ipdData->getInvestigation3->name}}</td>
                          </tr>

                          <tr>
                            <th>Medicine <span class="badge badge-danger pull-right">1</span></th>
                            <td>{{ $ipdData->getMedicine1->name }} </td>
                            <th>Potency <span class="badge badge-danger pull-right">1</span></th>
                            <td>{{ $ipdData->getPotency1->name }}</td>
                          </tr>

                          <tr>
                            <th>Medicine <span class="badge badge-danger pull-right">2</span></th>
                            <td>{{ $ipdData->getMedicine2->name }}</td>
                            <th>Potency <span class="badge badge-danger pull-right">2</span></th>
                            <td>{{ $ipdData->getPotency2->name }}</td>
                          </tr>

                          <tr>
                            <th>Medicine <span class="badge badge-danger pull-right">3</span></th>
                            <td>{{ $ipdData->getMedicine3->name }}</td>
                            <th>Potency <span class="badge badge-danger pull-right">3</span></th>
                            <td>{{ $ipdData->getPotency3->name }}</td>
                          </tr>

                          <tr>
                            <th>Diet Plan <span class="badge badge-success pull-right">1</span></th>
                            <td>{{ $ipdData->getDietPlan1->name }}</td>
                            <th>Diet Plan <span class="badge badge-success pull-right">2</span></th>
                            <td>{{ $ipdData->getDietPlan2->name}}</td>
                          </tr>

                          <tr>
                            <th>Diet Plan Text <span class="badge badge-info pull-right">1</span></th>
                            <td>{{ $ipdData->diet1Text }}</td>
                            <th>Diet Plan Text <span class="badge badge-info pull-right">2</span></th>
                            <td>{{ $ipdData->diet2Text }}</td>
                          </tr>

                          <tr>
                            <th>Yoga</th>
                            <td>{{ $ipdData->yoga }}</td>
                            <th>Physiotherapy</th>
                            <td>{{ $ipdData->physiotherapy }}</td>
                          </tr>
                          <tr>
                            <th>Remark</th>
                            <td colspan="3">{{ $ipdData->remark }}</td>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
               
           
<!-- ======================ipd treatement================== -->
 @if(!empty($ipdTreatmentData))
    @foreach($ipdTreatmentData as  $ipdtreatment)
         <table class="table table-bordered table-striped table-hovered">
              <tbody><tr>
                <th>Complaints </th>
                <td>{{$ipdtreatment->complaint }}<span class="pull-right">
                    <div class="btn-group btn-group-sm  noPrint"> 
                      <button data-toggle="modal" data-id="{{$ipdtreatment->id }}" href="#updateDetail" class="btn-sm btn-success tooltips updatePatientTreatment" data-original-title="Update Treatment" style="margin-right: 5px !important;"><i class="fa fa-pencil"></i> Edit</button>
                      <button  class="btn-sm btn-danger delete" data-id="{{$ipdtreatment->id }}" data-original-title="Delete Treatment" onclick="return confirm('Are You Sure You Want To Delete This Treatment?');"><i class="fa fa-times"></i> Delete</button>
                    </div>
                  </span>
                </td>
              </tr>
              <tr>
                <th width="20%">Treatment Date </th>
                @php static $j=1; @endphp
                <td class="text-danger"> {{ Carbon\Carbon::parse($ipdtreatment->treatmentDate)->format('d-m-Y') }}<span class="badge pull-right">{{ $j++}}</span>
                </td>
              </tr>
              <tr>
                <th>Treatment</th>
                <td>{{$ipdtreatment->treatment }} </td>
              </tr>
              <tr>
                <th>Medicine </th>
                <td>{{$ipdtreatment->getMedicineName->name  }} </td>
              </tr>
              <tr>
                <th>Potency </th>
                <td>{{$ipdtreatment->getPotencyName->name}}</td>
              </tr>
              <tr>
                <th>Number of Days </th>
                <td>{{$ipdtreatment->nod }} </td>
              </tr>
              <tr>
                <th>Investigation </th>
                <td>
                  <span class="badge badge-info"><span class="text-danger">1</span>
                    {{$ipdtreatment->getInvestigationName->name}} </span><br><br>
                </td>
              </tr>
              <tr>
                <th>Remark </th>
                <td>{{$ipdtreatment->remark }}</td>
              </tr>
              <tr>
                <?php $a=explode(",",$ipdtreatment->refTo)?>

                <th>Referred To </th>
                  <td>  
                    @foreach($a as $b)
                     <span class="badge badge-primary">{{ $b }}</span>
                     @endforeach
                </td>
              </tr>
              <tr>
                <th>Consultant </th>
                <td>{{$ipdtreatment->getDoctorName->name}}</td>
              </tr>
             </tbody>
         </table>
             @endforeach
         @endif
       </div>
       @endif
    </div>
</div>
</div>
   <!-- ======================blood examination================== -->

   <div class="row">
    <div class="col-md-12">
    <div class="panel panel-default mb-4">
              <div class="panel-heading1 ">
                <h4 class="panel-title1">
                  <a class="accordion-toggle collapsed text-center" data-toggle="collapse" data-parent="#accordion" href="#collapseFour3" aria-expanded="false">BLOOD EXAMINATION</a>
                </h4>
              </div>
    <div id="collapseFour3" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
      <br>
        @if(empty($bloodData))
      <div class="begRed badge-danger"><strong>No Data Available</strong></div>
       @else
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hovered">
                <thead>
                  <tr>
                    <th>Name </th>
                    <td colspan="3">{{ ucfirst($bloodData->opd->patientName) }}</td>
                  </tr>
                  <tr>
                    <th width="25%">Age </th>
                    <td width="25%">{{ $bloodData->opd->age }}</td>
                    <th width="25%">Gender </th>
                    <td width="25%">{{ $bloodData->opd->gender}}</td>
                  </tr>
                  <tr>
                    <th>Referred By </th>
                    <td>{{ $bloodData->referredBy }}</td>
                    <th>Test Date </th>
                    <td>{{ Carbon\Carbon::parse($bloodData->date)->format('d-m-Y') }}</td>
                  </tr>
                  <tr>
                    <th>Investigation Advised </th>
                    <td>{{ $bloodData->investigationAdvised }}</td>
                    <th>OPD Number </th>
                    <td>{{$bloodData->opd->regNum }}</td>
                  </tr>
                  </thead>
                </table>
            </div>
          </div>
        <hr>
         @if(!empty($data->bloodExamData)) 
         @foreach($data->bloodExamData as $blood)
      
        <div class="col-md-12">
          <div class="text-center">
            <strong class="bgRed badge-danger">BLOOD EXAMINATION</strong>
          </div>
          <hr>
        </div>
        <table class="table table-bordered table-striped table-hovered">
          <tbody>
            @php static $k=1; @endphp
            <tr>
              <th width="35%">{{ $k++ }} </th>
              <th width="25%"><span class="text-danger">OBSERVED VALUES</span> </th>
              <th width="40%"><span class="text-danger">NORMAL RANGE</span> </th>
            </tr>
            <tr>
              <th>Haemoglobin </th>
              <td>{{  $blood->haemoglobin }}</td>
              <td><small>Male : 14 - 16gm% <br> Female : 12 - 15gm%</small></td>
            </tr>
            <tr>
              <th>Total RBC Count </th>
              <td>{{  $blood->totalRBCCount }}</td>
              <td><small>Male : 4.5 - 6.0 Millions/Cumm. <br> Female : 4.5 - 5.5 Millions/Cumm.</small></td>
            </tr>
            <tr>
              <th>Total WBC Count </th>
              <td>{{  $blood->totalWBCCount }}</td>
              <td>4000 - 11000 Cumm.</td>
            </tr>
            <tr>
              <th>Polymorphs </th>
              <td>{{  $blood->polymorphs}}</td>
              <td>40% - 75%</td>
            </tr>
            <tr>
              <th>Lymphocytes </th>
              <td>{{  $blood->lymphocytes }}</td>
              <td>20% - 45%</td>
            </tr>
            <tr>
              <th>Eosinophils</th>
              <td>{{ $blood->eosinophils }}</td>
              <td>1% - 6%</td>
            </tr>
            <tr>
              <th>Monocytes </th>
              <td>{{  $blood->monocytes }}</td>
              <td>2% - 10%</td>
            </tr>
            <tr>
              <th>Basophils </th>
              <td>{{ $blood->basophils }}</td>
              <td>0% - 1%</td>
            </tr>
            <tr>
              <th>ERS </th><td> {{ $blood->ers }}</td>
              <td><small>Male : 0-9mm <br> Female : 0-20mm</small> FHR</td>
            </tr>
            <tr>
              <th>Platelet Count </th>
              <td>{{  $blood->plateletCount }}</td>
              <td>1.5 - 4.5 Lac/Cumm</td>
            </tr>
            <tr>
              <th>Reticulocytes </th>
              <td>{{  $blood->reticulocytes }}</td>
              <td>0.5 - 2.0%</td>
            </tr>
            <tr>
              <th>PCV </th>
              <td>{{ $blood->pcv  }}</td>
              <td><small>Male : 40 - 54% <br> Female : 37 - 47%</small></td>
            </tr>
            <tr>
              <th>MCV </th>
              <td>{{  $blood->mcv }}</td>
              <td>78 - 92 Cu Micron</td>
            </tr>
            <tr>
              <th>MCH </th>
              <td>{{ $blood->mch  }}</td>
              <td>27 - 32 Micro Micro GM</td>
            </tr>
            <tr>
              <th>MCHC </th>
              <td>{{  $blood->mchc }}</td>
              <td>32% - 36%</td>
            </tr>
            <tr>
              <th>Bleeding Time </th>
              <td>{{  $blood->bleedingTime }}</td>
              <td>1 - 5 Minutes</td>
            </tr>
            <tr>
              <th>Clotting Time </th>
              <td>{{  $blood->clottingTime }}</td>
              <td>5 - 12 Minutes</td>
            </tr>
            <tr>
              <th>Malarial Parasite </th>
              <td>{{ $blood->malarialParasite  }}</td>
              <td></td>
            </tr>
            <tr>
              <th > Remark : </th>
             <td colspan="2"> {{ $blood->remark }}</td>
            </tr>
          </tbody>
        </table>
          @endforeach
          @endif 
          @endif 
    </div>
</div>
</div>
</div>

  <!-- ======================semen examinatio examination================== -->

  <div class="row">
    <div class="col-md-12">
    <div class="panel panel-default mb-4">
       <div class="panel-heading1 ">
         <h4 class="panel-title1">
           <a class="accordion-toggle collapsed text-center" data-toggle="collapse" data-parent="#accordion" href="#collapseFour4" aria-expanded="false">SEMEN EXAMINATION</a>
          </h4>
      </div>
         <div id="collapseFour4" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
            <div class="panel-body">
          @if(empty($semenData))
            <div class="begRed badge-danger"><strong>No Data Available</strong></div>  
         @else
          <section class="panel">
            <div class="panel-body" id="tables">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hovered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <td colspan="3">
                                        {{ ucfirst($semenData->opd->patientName) }}
                                    </td>
                                </tr>
                                <tr>
                                    <th width="25%">Age</th>
                                    <td width="25%">
                                        {{ $semenData->opd->age }}
                                    </td>
                                    <th width="25%">Gender</th>
                                    <td width="25%">
                                        {{ $semenData->opd->gender }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Referred By</th>
                                    <td>{{ $semenData->referredBy }}</td>
                                    <th>Test Date</th>
                                    <td>{{ $semenData->date }}</td>
                                </tr>
                                <tr>
                                    <th>Investigation Advised</th>
                                    <td>{{ $semenData->investigationAdvised }}</td>
                                    <th>OPD Number</th>
                                    <td>{{ $semenData->opd->patientId }}</td>
                                </tr>
                            </thead>
                        </table>
                        <hr>
                        @if(!empty($data->semeneExamData)) 
                        @foreach($data->semeneExamData as $semene)
                      <div class="col-md-12">
                          <div class="text-center">
                              <strong class="begRed badge-danger">SEMEN EXAMINATION</strong>
                          </div>
                          <hr />
                      </div>
                      <table class="table table-bordered table-striped table-hovered">
                          <tbody>
                              <tr>
                                  <th>Place Of Collection</th>
                                  <td>{{ $semene->placeOfCollection }}</td>
                              </tr>
                              <tr>
                                  <th>Time Of Collection In Lab</th>
                                  <td>{{ $semene->timeOfCollectionInLab }}</td>
                              </tr>
                              <tr>
                                  <th colspan="2">
                                    <span class="text-danger" >PHYSICAL EXAMINATION</span>
                                  </th>
                              </tr>
                              <tr>
                                  <th>Quantity</th>
                                  <td>
                                      {{ $semene->quantity}}<small>NORMAL 2 - 5 ml</small>
                                  </td>
                              </tr>
                              <tr>
                                  <th>Consistency</th>
                                  <td>{{ $semene->consistency }}</td>
                              </tr>
                              <tr>
                                  <th>Colour</th>
                                  <td>{{ $semene->colour }}</td>
                              </tr>
                              <tr>
                                  <th>PH</th>
                                  <td>{{ $semene->ph }}</td>
                              </tr>
                              <tr>
                                  <th>Liqufication Time</th>
                                  <td>{{ $semene->liquficationTime }}</td>
                              </tr>
                              <tr>
                                  <th>Viscocity</th>
                                  <td>{{ $semene->viscocity }}</td>
                              </tr>
                              <tr>
                                  <th colspan="2">
                                      <span class="text-danger"
                                          >MICROSCOPIC EXAMINATION</span
                                      >
                                  </th>
                              </tr>
                              <tr>
                                  <th>Count</th>
                                  <td>
                                      {{ $semene->count }} /
                                      <small>NORMAL 60 - 150 Millions/ml</small>
                                  </td>
                              </tr>
                              <tr>
                                  <th>Motility</th>
                                  <td>
                                      {{ $semene->motility }} /
                                      <small>NORMAL 80% &amp; More</small>
                                  </td>
                              </tr>
                              <tr>
                                  <th>Abnormal Forms</th>
                                  <td>
                                      {{ $semene->abnormalForms }} /
                                      <small>NORMAL 20%</small>
                                  </td>
                              </tr>
                              <tr>
                                  <th>Pus Cells</th>
                                  <td>{{ $semene->pusCells }}</td>
                              </tr>
                              <tr>
                                  <th>Epithelial Cells</th>
                                  <td>{{ $semene->epithelialCells }}</td>
                              </tr>
                              <tr>
                                  <th>RBCS</th>
                                  <td>{{ $semene->rbcs }}</td>
                              </tr>
                              <tr>
                                  <th>Fructose Test</th>
                                  <td>{{ $semene->fructoseTest }}</td>
                              </tr>
                              <tr>
                                  <th colspan="2">Other : {{ $semene->other }}</th>
                              </tr>
                          </tbody>
                      </table>
                       @endforeach
                     @endif
                     @endif
                  </div>
              </div>
          </div>
      </section>
        </div>
      </div>
    </div>
  </div>
</div>

    <!--serun of widal =========================================================== -->

    <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default mb-4">
        <div class="panel-heading1 ">
          <h4 class="panel-title1">
            <a class="accordion-toggle collapsed text-center col-md-12" data-toggle="collapse" data-parent="#accordion" href="#collapseFour5" aria-expanded="false">SERUN FOR WIDAL TEST</a>
          </h4>
        </div>
        <div id="collapseFour5" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
          @if(empty($serunData))
                <div class="begRed badge-warning"><strong>No Data Available</strong></div>
            @else
          <div class="panel-body">
            <div class="col-md-12">
              <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hovered">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <td colspan="3">
                                  {{ucfirst($serunData->opd->patientName) }}
                              </td>
                          </tr>
                          <tr>
                              <th width="25%">Age</th>
                              <td width="25%">
                                  {{ $serunData->opd->age }}
                              </td>
                              <th width="25%">Gender</th>
                              <td width="25%">
                                  {{ $serunData->opd->gender }}
                              </td>
                          </tr>
                          <tr>
                              <th>Referred By</th>
                              <td>{{ $serunData->referredBy }}</td>
                              <th>Test Date</th>
                              <td>{{ $serunData->date }}</td>
                          </tr>
                          <tr>
                              <th>OPD Number</th>
                              <td colspan="3">{{ $serunData->opd->patientId }}</td>
                          </tr>
                        </thead>
                    </table>
                    <hr>
                     @if(!empty($data->serunExamData))
                     @foreach($data->serunExamData as $serun)
                    <div class="col-md-12">
                        <div class="text-center">
                              <strong class="bgRed badge-danger">SERUM FOR WIDAL TEST REPORT</strong>
                        </div>
                          <hr>
                        <table class="table table-bordered table-striped table-hovered">
                            <tbody>
                                  <tr>
                                      <th rowspan="2">
                                          <span class="text-danger">ANTIGEN</span>
                                      </th>
                                      <th colspan="4" class=" text-center">
                                          <span class="text-danger text-center">DILUTION OF SERUM</span>
                                      </th>
                                  </tr>
                                  <tr>
                                      <td>&nbsp;</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          S. TYPHI <span class="pull-right">"O"</span>
                                      </td>
                                      <td>{{ $serun->sTyphiO }}</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          S. TYPHI <span class="pull-right">"H"</span>
                                      </td>
                                      <td>{{ $serun->sTyphiH }}</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td>
                                          S. PARA TYPHI
                                          <span class="pull-right">"AH"</span>
                                      </td>
                                      <td>{{ $serun->sTyphiAH }}</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <td>S. PARA TYPHI<span class="pull-right">"BH"</span></td>
                                      <td>{{ $serun->sTyphiBH }}</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                  </tr>
                                  <tr>
                                      <th colspan="5">
                                          <span class="text-danger"
                                              >IMPRESSION : </span
                                          ><br />
                                          {{ $serun->impression }}
                                      </th>
                                  </tr>
                            </tbody>
                        </table>
                        @endforeach
                        @endif
                        @endif
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
</div>
</div>
         <!-- ======== stool examination=================================================-->     
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default mb-4">
        <div class="panel-heading1 ">
            <h4 class="panel-title1">
            <a class="accordion-toggle collapsed text-center" data-toggle="collapse" data-parent="#accordion" href="#collapseFour6" aria-expanded="false">STOOL EXAMINATION</a>
            </h4>
        </div>
        <div id="collapseFour6" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
          @if(empty($stoolData)) 
          <div class="begRed badge-danger">
            <strong>No Data Available</strong>
          </div>
          @else
        <div class="panel-body">
          <div class="panel-body" id="tables">
            <div class="col-md-12">
              <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hovered">
                    <thead>
                      <tr>
                        <th>Name </th>
                        <td colspan="3">{{ ucfirst($stoolData->opd->patientName) }}</td>
                      </tr>
                      <tr>
                        <th width="25%">Age </th>
                        <td width="25%">{{ $stoolData->opd->age }}</td>
                        <th width="25%">Gender </th>
                        <td width="25%">{{ $stoolData->opd->gender }}</td>
                      </tr>
                      <tr>
                        <th>Referred By </th>
                        <td>{{ $stoolData->referredBy }}</td>
                        <th>Test Date </th>
                        <td>{{ $stoolData->date }}</td>
                      </tr>
                      <tr>
                        <th>Investigation Advised </th>
                        <td>{{ $stoolData->investigationAdvised }}</td>
                        <th>OPD Number </th>
                        <td>{{ $stoolData->opd->patientId }}</td>
                      </tr>
                      </thead>
                     </table>
                      <hr>
                      @if(!empty($data->stoolExamData))
                      @foreach($data->stoolExamData as $stool)
                      <div class="col-md-12">
                        <div class="text-center">
                          <strong class="bgRed badge-danger">STOOL EXAMINATION</strong>
                        </div>
                        <hr>
                      </div>
                      <table class="table table-bordered table-striped table-hovered">
                        <tbody>
                            <tr>
                              <th width="50%"><span class="text-danger">MACROSCOPIC</span></th>
                              <td></td>
                            </tr>
                                <tr>
                                  <th>Colour </th>
                                  <td>{{ $stool->colour }}</td>
                                </tr>
                                <tr>
                                  <th>Consistency </th>
                                  <td>{{ $stool->consistency }}</td>
                                </tr>
                                <tr>
                                  <th>Mucus </th>
                                  <td>{{ $stool->mucus }}</td>
                                </tr>
                                <tr>
                                  <th>Blood </th>
                                  <td>{{ $stool->blood }}</td>
                                </tr>
                                <tr>
                                  <th><span class="text-danger">MICROSCOPIC</span></th>
                                  <td></td>
                                </tr>
                                <tr>
                                  <th>Pus Cells </th>
                                  <td>{{ $stool->pusCells }}</td>
                                </tr>
                                <tr>
                                  <th>RBCs </th>
                                  <td>{{ $stool->rbcs }}</td>
                                </tr>
                                <tr>
                                  <th>Vegetable Matter </th>
                                  <td>{{ $stool->vegetableMatter }}</td>
                                </tr>
                                <tr>
                                  <th>Cysts </th>
                                  <td>{{ $stool->cysts }}</td>
                                </tr>
                                <tr>
                                  <th><span class="margin-Left"></span>Giardia</th>
                                  <td>{{ $stool->giardia }}</td>
                                </tr>
                                <tr>
                                  <th><span class="margin-Left"></span>E Histolytica</th>
                                  <td>{{ $stool->eHistolytica }}</td>
                                </tr>
                                <tr>
                                  <th><span class="margin-Left"></span>E Coil</th>
                                  <td>{{ $stool->eCoil }}</td>
                                </tr>
                                <tr>
                                  <th>OVA </th>
                                  <td>{{ $stool->ova }}</td>
                                </tr>
                                <tr>
                                  <th>Worms</th>
                                  <td>{{ $stool->worms }}</td>
                                </tr>
                                <tr>
                                  <th>Occult Stool</th>
                                  <td>{{ $stool->occultBlood }}</td>
                                </tr>
                                <tr>
                                  <th>Reducing Substances</th>
                                  <td>{{ $stool->reducingSubstances }}</td>
                                </tr>
                                <tr>
                                  <th colspan="2"> Other : Stool C/S  Sterilite {{ $stool->other }}</th>
                                </tr>
                            </tbody>
                           </table>
                      @endforeach 
                      @endif
                      @endif
                    </div>
                  </div>
                </div>
             </div>
          </div>
        </div>
      </div>
    </div>

           <!-- ======== urin examination=================================================-->    
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default mb-4">
        <div class="panel-heading1">
          <h4 class="panel-title1">
            <a class="accordion-toggle collapsed text-center" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false">URINE EXAMINATION</a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-expanded="false">
          @if(empty($urineData))
          <div class="begRed badge-warning"><strong>No Data Available</strong>
            @else
              <div class="panel-body">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hovered">
                        <thead>
                          <tr>
                            <th>Name </th>
                            <td colspan="3">{{ ucfirst($urineData->opd->patientName) }}</td>
                          </tr>
                          <tr>
                              <th width="25%">Age </th>
                              <td width="25%">{{ $urineData->opd->age }}</td>
                              <th width="25%">Gender </th>
                              <td width="25%">{{ $urineData->opd->gender }}</td>
                          </tr>
                          <tr>
                              <th>Referred By </th>
                              <td>{{ $urineData->referredBy }}</td>
                              <th>Test Date </th>
                              <td>{{ $urineData->date }}</td>
                          </tr>
                          <tr>
                              <th>Investigation Advised </th>
                              <td>{{ $urineData->investigationAdvised }}</td>
                              <th>OPD Number </th>
                              <td>{{ $urineData->opd->patientId }}</td>
                          </tr>
                        </thead>
                    </table>
                    <hr>
                    @if($data->urineExamData)
                    @foreach($data->urineExamData as $urine)
                        <div class="col-md-12">
                              <div class="text-center">
                                <strong class="bgRed badge-danger">URINE EXAMINATION</strong>
                              </div>
                              <hr>
                        </div>
                        <table class="table table-bordered table-striped table-hovered">
                            <tbody>
                              <tr>
                                  <th colspan="2"><span class="text-danger">PHYSICAL EXAMINATION</span> </th>
                                  <th colspan="2"><span class="text-danger">MICROSCOPIC EXAMINATION</span> </th>
                                </tr>
                              <tr>
                                  <th width="30%">Sample </th>
                                  <td width="20%">{{ $urine->sample }} </td>
                                  <th width="30%">Pus Cells </th>
                                  <td width="20%">{{ $urine->pusCells }}</td>
                              </tr>
                              <tr>
                                  <th>Quantity </th>
                                  <td>{{ $urine->quantity }}</td>
                                  <th>Epithellal Cells</th>
                                  <td>{{ $urine->epithellalCells }}</td>
                              </tr>
                              <tr>
                                  <th>Colour </th>
                                  <td>{{ $urine->colour }}</td>
                                  <th>Crystals</th>
                                  <td>{{ $urine->crystals }} </td>
                              </tr>
                              <tr>
                                  <th>SP Gravity </th>
                                  <td>{{ $urine->spGravity }}</td>
                                  <th>RBS</th>
                                  <td>{{ $urine->rbs }} </td>
                              </tr>
                              <tr>
                                  <th>Reaction </th>
                                  <td>{{ $urine->reaction }}</td>
                                  <th>Bacteria</th>
                                  <td>{{ $urine->bacteria }} </td>
                              </tr>
                              <tr>
                                  <th colspan="2"><span class="text-danger">CHEMICAL EXAMINATION</span> </th>
                                  <th>Cast</th>
                                  <td>{{ $urine->cast }}</td>
                              </tr>
                              <tr>
                                  <th>Albumin </th>
                                  <td>{{ $urine->albumin }} </td>
                                  <th>Others</th>
                                  <td>{{ $urine->other }}</td>
                              </tr>
                              <tr>
                                  <th>Suger </th>
                                  <td>{{ $urine->suger }}</td>
                                  <th></th>
                                  <td></td>
                              </tr>
                              <tr>
                                  <th>BileSalts </th>
                                  <td>{{ $urine->bileSalts }} </td>
                                  <th></th>
                                  <td></td>
                              </tr>
                              <tr>
                                  <th>Bile Pigments </th>
                                  <td>{{ $urine->bilePigments }} </td>
                                  <th></th>
                                  <td></td>
                              </tr>
                              <tr>
                                  <th>Acetone </th>
                                  <td>{{ $urine->acetone }} </td>
                                  <th></th>
                                  <td></td>
                              </tr>
                              <tr>
                                  <th>Bence Jones Proteins </th>
                                  <td>{{ $urine->benceJonesProteins }} </td>
                                  <th></th>
                                  <td></td>
                              </tr>
                          </tbody>
                      </table>
                      @endforeach
                      @endif
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
        
      
                