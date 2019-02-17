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
         


                <!-- ============================Ipd data=============================== -->


                <div class="panel panel-default mb-4">
                  <div class="panel-heading1 ">
                    <h4 class="panel-title1">
                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour1" aria-expanded="false">IPD TREATMENT</a>
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
                              {{ $ipdData->opd->patientName }}                        <strong>
                             {{ $ipdData->prefixName }}                     </strong>
                             {{ $ipdData->refName }}                    </td>
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
                            <td colspan="3">{{ $ipdData->getInvestigation2->namewa}}</td>
                          </tr>

                          <tr>
                            <th>Investigation <span class="badge pull-right">3</span></th>wa
                            <td colspan="3">{{ $ipdData->getInvestigation3->namewa}}</td>
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
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
