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
            </span> <i class=" pull-right fa fa-print btn btn-warning" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);"></a>
          </div>

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
              <th>Referred By </th>
              <td>DR. MAHENDRA SHARMA</td>
              <th>Test Date </th>
              <td>05-01-2019</td>
              </tr>
              <tr>
                <tr>
                      <th>Disease diagnosis</th>
                      <td></td>
                      <th>Exercise</th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Other</th>
                      <td colspan="3">Migraine -Shavasana</td>
                    </tr>
                    <tr>
                      <th>Remark </th>
                      <td colspan="3"></td>
                    </tr>
              <thead>
          </table>
        </div>
      </div>
    </div>