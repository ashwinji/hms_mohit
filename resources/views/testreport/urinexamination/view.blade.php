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
          <div class="label label-danger " style="text-color:#FF0000">URINE EXAMINATION</div>
          </div>
          
</div>
</div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-12">
    <table >
<table class="table table-bordered table-responsive card-table table-vcenter text-nowrap  table-hover">
                 <tbody>
                    <tr>
                        <th colspan="2"><span class="text-danger">PHYSICAL EXAMINATION</span> </th>
                        <th colspan="2"><span class="text-danger">MICROSCOPIC EXAMINATION</span> </th>
                    </tr>
                    <tr>
                        <th wd="30%">Sample </th>
                        <td wd="20%">{{$data->sample}}</td>
                        <th wd="30%">Pus Cells </th>
                        <td wd="20%">{{$data->pusCells}}</td>
                    </tr>
                    <tr>
                        <th>Quantity </th>
                        <td>{{$data->quantity}}</td>
                        <th>Epithellal Cells</th>
                        <td>{{$data->epithellalCells}}</td>
                    </tr>
                    <tr>
                        <th>Colour </th>
                        <td>{{$data->colour}}</td>
                        <th>Crystals</th>
                        <td>{{$data->crystals}}</td>
                    </tr>
                    <tr>
                        <th>SP Gravity </th>
                        <td>{{$data->spGravity}}</td>
                        <th>RBS</th>
                        <td>{{$data->rbs}}</td>
                    </tr>
                    <tr>
                        <th>Reaction </th>
                        <td>{{$data->reaction}}</td>
                        <th>Bacteria</th>
                        <td>{{$data->bacteria}}</td>
                    </tr>
                    <tr>
                        <th colspan="2"><span class="text-danger">CHEMICAL EXAMINATION</span> </th>
                        <th>Cast</th>
                        <td>{{$data->cast}}</td>
                    </tr>
                    <tr>
                        <th>Albumin </th>
                        <td>{{$data->albumin}}</td>
                        <th>Others</th>
                        <td>{{$data->others}}</td>
                    </tr>
                    <tr>
                        <th>Suger </th>
                        <td>{{$data->suger}}</td>
                        <th></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>BileSalts </th>
                        <td>{{$data->bileSalts}}</td>
                        <th></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Bile Pigments </th>
                        <td>{{$data->bilePigments}}</td>
                        <th></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Acetone </th>
                        <td>{{$data->acetone}}</td>
                        <th></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Bence Jones Proteins </th>
                        <td>{{$data->benceJonesProteins}}</td>
                        <th></th>
                        <td></td>
                    </tr>
                </tbody>
              </table>
</div>
</div>