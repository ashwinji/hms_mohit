
<div class="row">
<<<<<<< HEAD
   <div class="col-md-12 col-lg-12">
       <div class="card">
           <div class="card-body">
               <div class="expanel expanel-default mt-4">
                   <div class="expanel-body">
                     <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><a href=""><b>X</b></a>
                     </span>
                      <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
                       <span class="pull-right" style="padding-right: 5px">
                       <b style="margin-right: 36px">{{ $data->patientId }}</b>
                      </span> <i  onclick="printDiv('Discharge Form','discharge')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                        Print</i> <a href="javascript:void(0);" ></a>
                      </a>
                   </div>
               </div>
          </div>
=======
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="expanel expanel-default mt-4">
                    <div class="expanel-body">
                        <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><a href=""><b>X</b></a>
                        </span>
                        <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
                        <span class="pull-right" style="padding-right: 5px">
                        <b style="margin-right: 36px">{{ $data->patientId }}</b>
                        </span> <i class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);">
                        </a>
                    </div>
                </div>
            </div>
        </div>
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
    </div>
</div>
<<<<<<< HEAD
<table class="table table-bordered table-striped table-hovered col-lg-12" id="discharge">
                <thead>
                  <tr>
                    <th><b>Registration Number</b> </th>
                    <td>{{ $data->patientId }}</td>
                    <th>Registration Date </th>
                    <td>{{$data->opd->regDate }}</td>
                  </tr>
                    <tr>
                    <th><b>ipd Number</b> </th>
                    <td>{{ $data->ipdRegNum }}</td>
                    <th>ipd Date </th>
                    <td>{{$data->ipdRegDate }}</td>
                  </tr>
                  <tr>
                    <th>Name </th>
                    <td colspan="3">{{ $data->opd->patientName }}</td>
                  </tr>
                  <tr>
                    <th>Gender </th>
                    <td>{{ $data->opd->gender }}</td>
                    <th>Age </th>
                    <td>{{ $data->opd->age }}</td>
                  </tr>
                  <tr>
                    <th>Address </th>
                    <td colspan="3">{{ $data->opd->address }}</td>
                  </tr>
                  <tr>
                    <th>Consultant Name </th>
                    <td>{{ $data->doctorName->name }}</td>
                    <th>Other Consultant </th>
                    <td>{{ $data->otherConsultant }}</td>
                  </tr>
                  <tr>
                    <th>Ward Name </th>
                    <td>{{ $data->getWardName->name}}</td>
                    <th>Bed Number </th>
                    <td>{{ $data->bedNum }}</td>
                  </tr>
                  <tr>
                   <th>Date of Discharge</th>
                      <td>{{ $data->dod }}</td>
                      <th>Time</th>
                      <td></td>
                    </tr>

                    <tr>
                      <th>Diagnosis</th>
                      <td colspan="3">{{ $data->provisionalDiagnosis}}</td>
                    </tr>

                    

                    <tr>
                      <th>Medicine <span class="badge badge-danger pull-right">1</span></th>
                      <td> {{$data->getMedicine1->name}} </td>
                      <th>Potency <span class="badge badge-danger pull-right">1</span></th>
                      <td>{{$data->getPotency1->name}}</td>
                    </tr>

                    <tr>
                      <th>Medicine <span class="badge badge-danger pull-right">2</span></th>
                      <td> {{$data->getMedicine2->name}}</td>
                      <th>Potency <span class="badge badge-danger pull-right">2</span></th>
                      <td>{{$data->getPotency2->name}}</td>
                    </tr>

                    <tr>
                      <th>Medicine <span class="badge badge-danger pull-right">3</span></th>
                      <td> {{$data->getMedicine3->name}}</td>
                      <th>Potency <span class="badge badge-danger pull-right">3</span></th>
                      <td>{{$data->getPotency3->name}}</td>
                    </tr>

                    <tr>
                      <th>Diet Plan <span class="badge badge-success pull-right">1</span></th>
                      <td>{{$data->getDietPlan1->name}}</td>
                      <th>Diet Plan <span class="badge badge-success pull-right">2</span></th>
                      <td>{{$data->getDietPlan2->name}}</td>
                    </tr>


                    <tr>
                      <th>Remark</th>
                      <td colspan="3">{{$data->remark}}</td>
                    </tr>

                    <tr>
                      <th colspan="2">
                        <br><br><br><br><br><br>
                        <div class="text-center">
                          <span>
                            Patient / Attender Signature
                          </span>
                        </div>
                      </th>
                      <th colspan="2">
                        <br><br><br><br><br>
                        <div class="text-center">
                          <span>
                              Authourised Signature
                          </span>
                          <br>
                          <span>
                            Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          </span>
                        </div>
                      </th>
                    </tr>
                </thead>
              </table>
  
=======
<table class="table table-bordered table-striped table-hovered col-lg-12">
    <thead>
        <tr>
        <th><b>Registration Number</b> </th>
        <td>{{ $data->patientId }}</td>
        <th>Registration Date </th>
        <td>{{$data->opd->regDate }}</td>
        </tr>
        <tr>
        <th><b>ipd Number</b> </th>
        <td>{{ $data->ipdRegNum }}</td>
        <th>ipd Date </th>
        <td>{{$data->ipdRegDate }}</td>
        </tr>
        <tr>
        <th>Name </th>
        <td colspan="3">{{ $data->opd->patientName }}</td>
        </tr>
        <tr>
        <th>Gender </th>
        <td>{{ $data->opd->gender }}</td>
        <th>Age </th>
        <td>{{ $data->opd->age }}</td>
        </tr>
        <tr>
        <th>Address </th>
        <td colspan="3">{{ $data->opd->address }}</td>
        </tr>
        <tr>
        <th>Consultant Name </th>
        <td>{{ $data->doctorName->name }}</td>
        <th>Other Consultant </th>
        <td>{{ $data->otherConsultant }}</td>
        </tr>
        <tr>
        <th>Ward Name </th>
        <td>{{ $data->getWardName->name}}</td>
        <th>Bed Number </th>
        <td>{{ $data->bedNum }}</td>
        </tr>
        <tr>
        <th>Date of Discharge</th>
        <td>{{ $data->dod }}</td>
        <th>Time</th>
        <td></td>
        </tr>
        <tr>
        <th>Diagnosis</th>
        <td colspan="3">{{ $data->provisionalDiagnosis}}</td>
        </tr>
        <tr>
        <th>Medicine <span class="badge badge-danger pull-right">1</span></th>
        <td> {{$data->getMedicine1->name}} </td>
        <th>Potency <span class="badge badge-danger pull-right">1</span></th>
        <td>{{$data->getPotency1->name}}</td>
        </tr>
        <tr>
        <th>Medicine <span class="badge badge-danger pull-right">2</span></th>
        <td> {{$data->getMedicine2->name}}</td>
        <th>Potency <span class="badge badge-danger pull-right">2</span></th>
        <td>{{$data->getPotency2->name}}</td>
        </tr>
        <tr>
        <th>Medicine <span class="badge badge-danger pull-right">3</span></th>
        <td> {{$data->getMedicine3->name}}</td>
        <th>Potency <span class="badge badge-danger pull-right">3</span></th>
        <td>{{$data->getPotency3->name}}</td>
        </tr>
        <tr>
        <th>Diet Plan <span class="badge badge-success pull-right">1</span></th>
        <td>{{$data->getDietPlan1->name}}</td>
        <th>Diet Plan <span class="badge badge-success pull-right">2</span></th>
        <td>{{$data->getDietPlan2->name}}</td>
        </tr>
        <tr>
        <th>Remark</th>
        <td colspan="3">{{$data->remark}}</td>
        </tr>
        <tr>
        <th colspan="2">
        <br><br><br><br><br><br>
        <div class="text-center">
        <span>
        Patient / Attender Signature
        </span>
        </div>
        </th>
        <th colspan="2">
        <br><br><br><br><br>
        <div class="text-center">
        <span>
        Authourised Signature
        </span>
        <br>
        <span>
        Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        </div>
        </th>
        </tr>
    </thead>
</table>
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
