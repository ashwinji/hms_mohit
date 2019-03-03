<div class="page">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><a href=""><b>X</b></a></span>
                    <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
                    <span class="pull-right" style="padding-right: 5px">
                    <b style="margin-right: 36px">{{ $data->opd->regNum }}</b>
                    </span> <i  onclick="printDiv('SEMEN EXAMINATION','semen-id')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> Print</i> <a href="javascript:void(0);" ></a>
                </div>
                <div id="semen-id">
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
                <div class="label label-danger " style="text-color:#FF0000;text-align:center;">SEMEN EXAMINATION</div>
                </div>
                <div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                    <div class="card">
                    <div class="table-responsive">
                    <table class="table card-table table-bordered table-vcenter text-nowrap">
                    <tbody>
                    <tr>
                    <th >Place Of Collection </th>
                    <td >{{$data->placeOfCollection}}</td>
                    </tr>
                    <tr>
                    <th>Time Of Collection In Lab </th>
                    <td>{{$data->timeOfCollectionInLab}}</td>
                    </tr>
                    <tr>
                    <th ><span class="text-danger">PHYSICAL EXAMINATION</span></th>
                    </tr>
                    <tr>
                    <th>Quantity </th>
                    <td>{{$data->quantity}}</td>
                    </tr>
                    <tr>
                    <th>Consistency </th>
                    <td>{{$data->consistency}}</td>
                    </tr>
                    <tr>
                    <th>Colour </th>
                    <td>{{$data->colour}}</td>
                    </tr>
                    <tr>
                    <th>PH </th>
                    <td>{{$data->ph}}</td>
                    </tr>
                    <tr>
                    <th>Liqufication Time </th>
                    <td>{{$data->liquficationTime}}</td>
                    </tr>
                    <tr>
                    <th>Viscocity </th>
                    <td>{{$data->viscocity}}</td>
                    </tr>
                    <tr>
                    <th ><span class="text-danger">MICROSCOPIC EXAMINATION</span></th>
                    </tr>
                    <tr>
                    <th>Count </th>
                    <td>{{$data->count}}</td>
                    </tr>
                    <tr>
                    <th>Motility </th>
                    <td>{{$data->motility}}</td>
                    </tr>
                    <tr>
                    <th>Abnormal Forms </th>
                    <td>{{$data->abnormalForms}}</td>
                    </tr>
                    <tr>
                    <th>Pus Cells </th>
                    <td>{{$data->pusCells}}</td>
                    </tr>
                    <tr>
                    <th>Epithelial Cells </th>
                    <td>{{$data->epithelialCells}}</td>
                    </tr>
                    <tr>
                    <th >RBCS </th>
                    <td>{{$data->rbcs}}</td>
                    </tr>
                    <tr>
                    <th >Fructose Test </th>
                    <td>{{$data->fructoseTest}}</td>
                    </tr>
                    <tr>
                    <th > Other : Other</th>
                    <td>{{$data->other}}</td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

