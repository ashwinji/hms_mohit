<div class="page">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><b>X</b></span>
                    <b style="margin-right: 36px">{{ ucfirst($data->opd->patientName) }}</b>
                    <span class="pull-right" style="padding-right: 5px">
                    <b style="margin-right: 36px">{{ $data->opd->regNum }}</b>
                    </span>  <i  onclick="printDiv('ECG EXAMINATION','ecg-id')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                    Print</i> <a href="javascript:void(0);" ></a>
                </div>
                <div id="ecg-id">
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
                        <th>opd</th>
                        <td colspan="3"> {{ $data->opd->regNum }}</td>
                        </tr>
                        </thead>
                    </table>
                    <div class="text-center text-white font-weight-bold">
                    <div class="label label-danger " style="text-color:#FF0000;text-align:center; ">Ecg EXAMINATION</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>