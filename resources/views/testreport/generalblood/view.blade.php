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
                <th>opd</th>
               <td colspan="3"> {{ $data->opd->regNum }}</td>
              </tr>
              
              <thead>
          </table>
          <div class="text-center text-white font-weight-bold">
          <div class="label label-danger " style="text-color:#FF0000">General Blood  BIOCHEMISTRY</div>
        </div>

         <div class="row">
           <div class="col-md-12 col-lg-12">
            <div class="card">
         <div class="table-responsive">
<table class="table table-bordered table-striped table-hovered">
                    <tbody><tr>
                      <th colspan="3">
                        <span class="text-danger ">GLUCOSE</span> 
                        <span class="pull-right">NORMAL VALUES</span> 
                      </th>
                    </tr>
                    <tr>
                      <th width="40%">Blood (Fasting)</th>
                      <td width="20%">{{$data->bloodFasting}}</td>
                      <td width="40%">70 - 110 mg%</td>
                    </tr>
                    <tr>
                      <th>Blood (Random) </th>
                      <td>{{$data->bloodRandom}}</td>
                      <td>70 - 160 mg%</td>
                    </tr>
                    <tr>
                      <th>Blood (PP) </th>
                      <td>{{$data->bloodPP}}</td>
                      <td>UPTO 140 mg%</td>
                    </tr>
                    <tr>
                      <th colspan="3">
                        <span class="text-danger">RENTAL</span>
                      </th>
                    </tr>
                    <tr>
                      <th>Urea </th>
                      <td>{{$data->urea}}</td>
                      <td>10 - 45 mg%</td>
                    </tr>
                    <tr>
                      <th>Creatinine </th>
                      <td>{{$data->creatinine}}</td>
                      <td><small>Male : &lt; 1.2 <br> Female : &lt; 0.9</small></td>
                    </tr>
                    <tr>
                      <th>Uric Acid </th>
                      <td> {{$data->uricAcid}}</td>
                      <td><small>Male : &lt; 7.0 <br> Female : &lt; 6.0</small></td>
                    </tr>
                    <tr>
                      <th colspan="3">
                        <span class="text-danger">HEPATIC</span>
                      </th>
                    </tr>
                    <tr>
                      <th>Total Bilirubin </th>
                      <td>{{$data->totalBilirubin}}</td>
                      <td>0.3 - 1.1 mg%</td>
                    </tr>
                    <tr>
                      <th>Direct Bilirubin </th>
                      <td>{{$data->directBilirubin}}</td>
                      <td>0.1 - 0.3 mg%</td>
                    </tr>
                    <tr>
                      <th colspan="3">
                        <span class="text-danger">INDIRECT BILIRUBIN</span>
                      </th>
                    </tr>
                    <tr>
                      <th>SGPT / ALT </th>
                      <td>{{$data->sgptAlt}}</td>
                      <td><small>Male : &lt;= 42 <br> Female : &lt;= 36</small></td>
                    </tr>
                    <tr>
                      <th>SGOT / AST </th>
                      <td>{{$data->sgotAst}}</td>
                      <td><small>Male : &lt;= 37 <br> Female : &lt;= 31</small></td>
                    </tr>
                    <tr>
                      <th>ALK Phosphatase </th>
                      <td>{{$data->alkPhosphatase}}</td>
                      <td><small>Adult : &lt;= 310 <br> Child : &lt;= 645</small></td>
                    </tr>
                    <tr>
                      <th>Total Protein </th>
                      <td>{{$data->totalProtein}}</td>
                      <td>6.0 - 8.5 gm%</td>
                    </tr>
                    <tr>
                      <th>Albumin </th>
                      <td>{{$data->albumin}}</td>
                      <td>3.2 - 5.5 gm%</td>
                    </tr>
                    <tr>
                      <th>AG Ratio </th>
                      <td>{{$data->agRatio}}</td>
                      <td>1.0 - 2.2:1'</td>
                    </tr>
                  </tbody></table>
   </div>
   </div>
   </div> 
    </div>
      </div>
    </div>
  </div>
</div>
</div>