
<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="expanel expanel-default mt-4">
                    <div class="expanel-body">
                        <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><a href=""><b>X</b></a></span>
                        <b style="margin-right: 36px">{{ ucfirst($data->patientName) }}</b>
                        <span class="pull-right" style="padding-right: 5px">
                        <b style="margin-right: 36px">{{ $data->regNum }}</b>
                        </span> <i class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> Print</i> 
                        <a href="javascript:void(0);"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped table-hovered  col-md-12">
    <thead>
        <tr>
            <th><b>Registration Number</b> </th>
            <td>{{ $data->regNum }}</td>
            <th>Registration Date </th>
            <td>{{$data->regDate }}</td>
        </tr>
        <tr>
            <th>Name </th>
            <td colspan="3">{{ $data->patientName }}</td>
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
            <td>{{ $data->doctorName->name }}</td>
            <th>Other Consultant </th>
            <td>{{ $data->otherConsultant }}</td>
        </tr>
        <tr>
            <th>Department </th>
            <td colspan="3">{{ $data->departmentName->name }}</td>
        </tr>
    </thead>
</table>
