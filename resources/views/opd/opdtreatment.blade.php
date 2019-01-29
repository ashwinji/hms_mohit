<style>
  th {
    font-weight: bold;
  }
</style>
<div class="panel panel-default">

  <div class="panel-body">
    <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><b>X</b></span>
    <b style="margin-right: 36px">{{ ucfirst($data->patientName) }}</b>
    <span class="pull-right" style="padding-right: 5px">
      <b style="margin-right: 36px">{{ $data->regNum }}</b>
    </span> <i class=" pull-right fa fa-print btn btn-warning" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);"></a>
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
    <tr>
      <th>Complaints </th>
      <td>pain in abdomen with headache and restlessness
      </td>

    </tr>
    <tr>
      <th width="20%">Treatment Date </th>
      <td class="text-danger">
        05-01-2019 <span class="badge pull-right">1</span>
      </td>
    </tr>
    <tr>
      <th>Treatment </th>
      <td></td>
    </tr>
    <tr>
      <th>Medicine </th>
      <td>Belladonna </td>
    </tr>
    <tr>
      <th>Potency </th>
      <td>200</td>
    </tr>
    <tr>
      <th>Number of Days </th>
      <td>tds x 3 days </td>
    </tr>
    <tr>
      <th>Investigation </th>
      <td>
        <span class="label label-danger">
          <span class="text-success">#1</span>
        </span><br><br>
      </td>
    </tr>
    <tr>
      <th>Remark </th>
      <td></td>
    </tr>
    <tr>
      <th>Referred To </th>
      <td>
        <span class="label label-info">DISPENSARY</span>
      </td>
    </tr>
    <tr>
      <th>Consultant </th>
      <td>DR. MAHENDRA SHARMA</td>
    </tr>

  </table>



  <!-- 
    @if(!empty($data->PatientTreatmentDetails))

      @foreach($data->PatientTreatmentDetails as $patient)
        <table class="table table-bordered table-striped table-hovered">
          <tbody>
            <tr>
              <th>Complaints </th>
                <td>{{ $patient->complaint }}
                  <span class="pull-right">
                    <div class="btn-group btn-group-xs  noPrint">

                        <a data-toggle="modal" data-id="{{ $patient->id }}" href="#updateDetail" class="btn btn-success tooltips updatePatientTreatment" data-original-title="Update Treatment" style="margin-right: 5px !important;"><i class="fa fa-pencil"></i> Edit
                        </a>
                        <button  class="btn btn-danger delete" data-id="{{ $patient->id }}" data-original-title="Delete Treatment" onclick="return confirm('Are You Sure You Want To Delete This Treatment?');"><i class="fa fa-times"></i> Delete
                        </button>

                    </div>
                  </span>
                </td>
              </tr>
              <tr>
                <th width="20%">Treatment Date </th>
                <td class="text-danger">
                  05-01-2019 <span class="badge pull-right">1</span>
                </td>
              </tr>
              <tr>
                <th>{{ $patient->treatment }} </th>
                <td></td>
              </tr>
              <tr>
                <th>Medicine </th>
                <td>{{ $patient->medicine }} </td>
              </tr>
              <tr>
                <th>Potency </th>
                <td>{{ $patient->potency }}</td>
              </tr>
              <tr>
                <th>Number of Days </th>
                <td>{{ $patient->nod }} </td>
              </tr>
              <tr>
                <th>Investigation </th>
                <td>
                    <span class="badge badge-info"><span class="text-danger">#1</span>{{ $patient->advice }} </span><br><br>
                </td>
              </tr>
              <tr>
                <th>Remark </th>
                <td>{{ $patient->remark }}</td>
              </tr>
              <tr>
                <?php $a=explode(",",$patient->refTo)?>

                <th>Referred To </th>
                  <td>  
                    @foreach($a as $b)
                     <span class="badge badge-primary">{{ $b }}</span>
                     @endforeach
                </td>
              </tr>
              <tr>
                <th>Consultant </th>
                <td>{{ $patient->consultant }}</td>
              </tr>
             </tbody>
           </table>
           @endforeach
      @endif
        </div> -->