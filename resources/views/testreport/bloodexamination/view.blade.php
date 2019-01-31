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
              <td>DR. MAHENDRA SHARMA</td>
              <th>Test Date </th>
              <td>05-01-2019</td>
              </tr>
              <tr>
                <th>Investigation Advised</th>
                <td >{{$data->investigationAdvised}}</td>
                <th>OPD Number</th>
                <td >{{ $data->opd->regNum}}</td>
              </tr>
              <thead>
          </table>
          <div class="text-center text-white font-weight-bold">
          <div class="label label-danger " style="text-color:#FF0000">BLOOD EXAMINATION</div>



<!-- <table class="table table-bordered table-striped table-hovered">
                    <tbody><tr>
                      <th width="35%"> </th>
                      <th width="25%"><span class="text-danger" >OBSERVED VALUES</span> </th>
                      <th width="40%"><span class="text-danger">NORMAL RANGE</span> </th>
                    </tr>
                    <tr>
                      <th>Haemoglobin </th>
                      <td>9.8 gm%</td>
                      <td><small>Male : 14 - 16gm% <br> Female : 12 - 15gm%</small></td>
                    </tr>
                    <tr>
                      <th>Total RBC Count </th>
                      <td>3.46 mil/cumm</td>
                      <td><small>Male : 4.5 - 6.0 Millions/Cumm. <br> Female : 4.5 - 5.5 Millions/Cumm.</small></td>
                    </tr>
                    <tr>
                      <th>Total WBC Count </th>
                      <td>11,600/cumm</td>
                      <td>4000 - 11000 Cumm.</td>
                    </tr>
                    <tr>
                      <th>Polymorphs </th>
                      <td>76%</td>
                      <td>40% - 75%</td>
                    </tr>
                    <tr>
                      <th>Lymphocytes </th>
                      <td>20%</td>
                      <td>20% - 45%</td>
                    </tr>
                    <tr>
                      <th>Eosinophils </th>
                      <td>02%</td>
                      <td>1% - 6%</td>
                    </tr>
                    <tr>
                      <th>Monocytes </th>
                      <td>02%</td>
                      <td>2% - 10%</td>
                    </tr>
                    <tr>
                      <th>Basophils </th>
                      <td>00%</td>
                      <td>0% - 1%</td>
                    </tr>
                    <tr>
                      <th>ERS </th>
                      <td>34  mm/FHR</td>
                      <td><small>Male : 0-9mm <br> Female : 0-20mm</small> FHR</td>
                    </tr>
                    <tr>
                      <th>Platelet Count </th>
                      <td></td>
                      <td>1.5 - 4.5 Lac/Cumm</td>
                    </tr>
                    <tr>
                      <th>Reticulocytes </th>
                      <td></td>
                      <td>0.5 - 2.0%</td>
                    </tr>
                    <tr>
                      <th>PCV </th>
                      <td></td>
                      <td><small>Male : 40 - 54% <br> Female : 37 - 47%</small></td>
                    </tr>
                    <tr>
                      <th>MCV </th>
                      <td></td>
                      <td>78 - 92 Cu Micron</td>
                    </tr>
                    <tr>
                      <th>MCH </th>
                      <td></td>
                      <td>27 - 32 Micro Micro GM</td>
                    </tr>
                    <tr>
                      <th>MCHC </th>
                      <td></td>
                      <td>32% - 36%</td>
                    </tr>
                    <tr>
                      <th>Bleeding Time </th>
                      <td></td>
                      <td>1 - 5 Minutes</td>
                    </tr>
                    <tr>
                      <th>Clotting Time </th>
                      <td></td>
                      <td>5 - 12 Minutes</td>
                    </tr>
                    <tr>
                      <th>Malarial Parasite </th>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th colspan="3"> Remark : </th>
                    </tr>
                  </tbody>
                </table> -->
        </div>
        </div>
      </div>
    </div>

