<<<<<<< HEAD
<div class="page">
  <div class="row">
    <div class="col-lg-12">
      <div cmedicineListlass>
        <style>
          th {
            font-weight: bold;
          }
        </style>
        <div class="panel panel-default">

          <div class="panel-body">
            <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><b>X</b></span>
            <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
            <span class="pull-right" style="padding-right: 5px">
              <b style="margin-right: 36px">{{ $data->opd->regNum }}</b>
            </span>  <i  onclick="printDiv('yoga patient Card','opd-table')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                        Print</i> <a href="javascript:void(0);" ></a>
          </div>
          <div id="opd-table">
          <table class="table table-bordered table-striped table-hovered">
            <thead>
                <tr>
                  <b>
                    <th>Registration Number </th>
                  </b>
                  <td>{{ $data->opd->regNum }}</td>
                  <th>Registration Date </th>
                  <td>{{ $data->opd->regDate }}</td>
                </tr>
              <tr>

                <th>Name </th>
                <td colspan="3">{{ $data->opd->patientName }} </td>
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
                <th>Referred By </th>
                <td>{{$data->referredBy}}</td>
                <th>Test Date </th>
                <td>{{$data->yogadate}}</td>
              </tr>
             
              <tr>
                <th>Disease diagnosis</th>
                <td>{{$data->diseaseName->name}}</td>
                <th>Exercise</th>
                <td>{{$data->exersise}}</td>
              </tr>
=======
    <div class="page">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><b>X</b></span>
                    <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
                    <span class="pull-right" style="padding-right: 5px">
                    <b style="margin-right: 36px">{{ $data->opd->regNum }}</b>
                    </span> <i class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);"></a>
                </div>
            <table class="table table-bordered table-striped table-hovered">
                <thead>
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
                    <tr>
                    <b>
                    <th>Registration Number </th>
                    </b>
                    <td>{{ $data->opd->regNum }}</td>
                    <th>Registration Date </th>
                    <td>{{ $data->opd->regDate }}</td>
                    </tr>
                    <tr>
                    <th>Name </th>
                    <td colspan="3">{{ $data->opd->patientName }} </td>
                    </tr>
<<<<<<< HEAD
              </thead>
              
          </table>
        </div>
        </div>
      </div>
=======
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
                    <th>Referred By </th>
                    <td>{{$data->referredBy}}</td>
                    <th>Test Date </th>
                    <td>{{$data->yogadate}}</td>
                    </tr>
                    <tr>
                    <tr>
                    <th>Disease diagnosis</th>
                    <td>{{$data->diseaseName->name}}</td>
                    <th>Exercise</th>
                    <td>{{$data->exersise}}</td>
                    </tr>
                    <tr>
                    <th>Other</th>
                    <td colspan="3">{{$data->other}}</td>
                    </tr>
                    <tr>
                    <th>Remark </th>
                    <td> {{$data->remark}}></td>
                    </tr>
                <thead>
            </table>
        </div>
        </div>
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
    </div>