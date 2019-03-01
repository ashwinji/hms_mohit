
<div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="card">
      <div class="card-body">
      <div class="expanel expanel-default mt-4">
      <div class="expanel-body">
      <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><a href=""><b>X</b></a></span>
      <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
      <span class="pull-right" style="padding-right: 5px">
      <b style="margin-right: 36px">{{ $data->patientId }}</b>
      </span> <i class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);"></a>
      </div>
      </div>
      </div>
      </div>
    </div>
    <table class="table table-bordered table-striped table-responsive table-hovered col-md-12">
      <thead>
        <tr>
          <th class="col-md-3"><b>Registration Number</b> </th>
          <td class="col-md-3">{{ $data->patientId }}</td>
          <th class="col-md-3">Registration Date </th>
          <td class="col-md-3">{{$data->opd->regDate }}</td>
        </tr>
        <tr>
          <th><b>ipd Number</b> </th>
          <td>{{ $data->ipdRegNum }}</td>
          <th>ipd Date </th>
          <td>{{$data->ipdRegDate }}</td>
        </tr>
        <tr>
          <th>Name </th>
          <td> {{ $data->opd->patientName }}</td>
        </tr>
        <tr>
          <th>Gender </th>
          <td>{{ $data->opd->gender }}</td>
          <th>Age </th>
          <td>{{ $data->opd->age }}</td>
        </tr>
        <tr>
          <th>Address </th>
          <td> {{ $data->opd->address }}</td>
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
          <th>Date of Discharge </th>
          <td>colspan{{ $data->dod}}</td>
        </tr>
        <tr>
          <th>Department </th>
          <td colspan="3">{{ $data->dod}}</td>
        </tr>
        <tr>
          <th>Provisional Diagnosis</th>
          <td colspan="3">{{ $data->provisionalDiagnosis}}</td>
        </tr>
        <tr>
          <th>Chief Complaints</th>
          <td colspan="3">{{ $data->chiefComplaints}}</td>
        </tr>
        <tr>
          <th>Past History</th>
          <td colspan="3">{{ $data->pastHistory}}</td>
        </tr>
        <tr>
          <th>Family History - Maternal</th>
          <td colspan="3">{{ $data->fh_maternal}}</td>
        </tr>
        <tr>
          <th>Family History - Paternal</th>
          <td colspan="3">{{ $data->fh_paternal}}</td>
        </tr>
        <tr>
          <th>Family History - Other</th>
          <td colspan="3">{{ $data->fh_other}}</td>
        </tr>
        <tr>
        <th colspan="4">
        <table>
          <tbody>
            <tr>
              <th>GC:</th>
              <td>{{ $data->ge_gc}} </td>
              <th>Anaemla/Pallor:</th>
              <td>{{ $data->ge_anaemla}}</td>
              <th>Bowel/Bladder:</th>
              <td>{{ $data->ge_bowel}}</td>
            </tr>
            <tr>
              <th>Pulse:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>JVP:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Sleep:</th>
              <td>{{ $data->ge_gc}}</td>
            </tr>
            <tr>
              <th>Temp:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Oedema:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Allergies:</th>
              <td>{{ $data->ge_gc}}</td>
            </tr>
            <tr>
              <th>Resp:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Cyanosis:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Skin:</th>
              <td>{{ $data->ge_gc}}</td>
            </tr>
            <tr>
              <th>B.P.:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Appetite:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Thirst:</th>
              <td>{{ $data->ge_gc}}</td>
            </tr>
            <tr>
              <th>Tongue:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Lymph Gland:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Addictions:</th>
              <td>{{ $data->ge_gc}}</td>
            </tr>
            <tr>
              <th>Conjunctiva/Icterus:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Throat:</th>
              <td>{{ $data->ge_gc}}</td>
              <th>Diet:</th>
              <td>{{ $data->ge_gc}}</td>
            </tr>
          </tbody>
      </table>
        </th>
        </tr>
        <tr>
          <th>ECG</th>
          <td colspan="3">{{$data->ecgTest}}</td>
        </tr>
        <tr>
          <th>Respiratory System</th>
          <td colspan="3">{{$data->respiratorySystem}} </td>
        </tr>
        <tr>
          <th>Gastro - Intestinal System</th>
          <td colspan="3">{{$data->gastroIntestinalSystem}}</td>
        </tr>
        <tr>
          <th>Cardio - Vascular System</th>
          <td colspan="3">{{$data->cardioVascularSystem}}</td>
        </tr>
        <tr>
          <th>Central Nervous System</th>
          <td colspan="3">{{$data->centralNervousSystem}} </td>
        </tr>
        <tr>
          <th>Local Examination</th>
          <td colspan="3">{{$data->localExamination}}</td>
        </tr>
        <tr>
          <th>Investigation <span class="badge pull-right">1</span></th>
          <td colspan="3">{{$data->getInvestigation1->name}}</td>
        </tr>
        <tr>
          <th>Investigation <span class="badge pull-right">2</span></th>
          <td colspan="3">{{$data->getInvestigation2->name}}</td>
        </tr>
        <tr>
          <th>Investigation <span class="badge pull-right">3</span></th>
          <td colspan="3">{{$data->getInvestigation3->name}}</td>
        </tr>
        <tr>
          <th>Medicine <span class="badge badge-danger pull-right">1</span></th>
          <td> {{$data->getMedicine1->name}}</td>
          <th>Potency <span class="badge badge-danger pull-right">1</span></th>
          <td>{{$data->getPotency1->name}}</td>
        </tr>
        <tr>
          <th>Medicine <span class="badge badge-danger pull-right">2</span></th>
          <td>{{$data->getMedicine2->name}}</td>
          <th>Potency <span class="badge badge-danger pull-right">2</span></th>
          <td>{{$data->getPotency2->name}}</td>
        </tr>
        <tr>
          <th>Medicine <span class="badge badge-danger pull-right">3</span></th>
          <td>{{$data->getMedicine3->name}}</td>
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
          <th>Diet Plan Text <span class="badge badge-info pull-right">1</span></th>
          <td>{{$data->diet1Text}}</td>
          <th>Diet Plan Text <span class="badge badge-info pull-right">2</span></th>
          <td>{{$data->diet2Text}}</td>
        </tr>
        <tr>
          <th>Yoga</th>
          <td>{{$data->yoga}}</td>
          <th>Physiotherapy</th>
          <td>{{$data->physiotherapy}}</td>
        </tr>
        <tr>
          <th>Remark</th>
          <td colspan="3">{{$data->remark}} </td>
        </tr>
      </thead>
    </table>
</div>