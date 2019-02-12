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
            </span> <i class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);" ></a>
          </div>

          <table class="table table-bordered table-striped table-hovered">
            <thead>
             
              <tr>

                <th>Name </th>
                <td colspan="3">{{ $data->opd->patientName }} </td>
              </tr>
              <tr>
                <th>Age </th>
                <td>{{ $data->opd->age }}</td>
                <th>Gender </th>
                <td>{{ $data->opd->gender }}</td>
              </tr>
              <tr>
              <th>Referred By </th>
              <td>{{$data->referredBy}}</td>
              <th>Test Date </th>
              <td>05-01-2019</td>
              </tr>
              <tr>
              	<th>Investigation Advised</th>
              	<td>{{$data->investigationAdvised}}</td>
                <th>opd</th>
               <td colspan="3"> {{ $data->opd->regNum }}</td>
              </tr>
              
              </thead>
          </table>
          <div class="text-center text-white font-weight-bold">
          <div class="label label-danger " style="text-color:#FF0000">STOOL EXAMINATION</div>
          </div>
          
</div>
</div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-12">
<table class="table  table-bordered  card-table table-vcenter text-nowrap  table-hover">
                    <tbody><tr>
                      <th width="50%"><span class="text-danger">MACROSCOPIC</span></th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Colour </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Consistency </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Mucus </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Blood </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th><span class="text-danger">MICROSCOPIC</span></th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Pus Cells </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>RBCs </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Vegetable Matter </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Cysts </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th><span class="margin-Left"></span>Giardia</th>
                      <td></td>
                    </tr>
                    <tr>
                      <th><span class="margin-Left"></span>E Histolytica</th>
                      <td></td>
                    </tr>
                    <tr>
                      <th><span class="margin-Left"></span>E Coil</th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>OVA </th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Worms</th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Occult Stool</th>
                      <td></td>
                    </tr>
                    <tr>
                      <th>Reducing Substances</th>
                      <td></td>
                    </tr>
                    <tr>
                      <th colspan="2"> Other : Stool C/S     Sterilite</th>
                    </tr>
                  </tbody></table>
</div>
</div>