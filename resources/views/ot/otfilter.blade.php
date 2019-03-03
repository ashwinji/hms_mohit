@extends('master.layouts.app')
    @section('headSection')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @endsection
@section('main-content')
 <body>
   @include('verror.error')
        <div class="page">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"> PATIENTS LIST  <a href="{{route('ot-create')}}" class="btn btn-xs btn-success"> <i class="fa fa-plus"></i> Add Patients </a></div>
                        <i  onclick="printDiv('OT EXAMINATION','otuser')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                        Print</i> <a href="javascript:void(0);" ></a></div>
                        </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="container col-lg-12">
                <table id="otuser" class="table table-striped table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Reg No</th>
                            <th>Reg Date</th>
                            <th>OT Date</th>
                            <th>consultant</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="id-largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="page">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="modal-body">
                            <div id="ot-view">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-square btn-info" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
@endsection

@section('footerSection')
<script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/datatable.js')}}"></script>
        <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />

<script type="text/javascript">
    $(document).ready(function () {
        oTable = $('#otuser').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('getot') }}",
            "columns": [
                { data: 'order', name: 'order' },
                { data: 'patientName', name: 'patientName' },
                { data: 'regNum', name: 'regNum' },
                { data: 'opdDate', name: 'opdDate' },
                { data: 'otDate', name: 'otDate' },
                { data: 'consultant', name: 'consultant' },
                { data: 'action', name: 'action',className:'noPrint' },
            ]
        });
    });
</script>


<script type="text/javascript">

    $(document).on('click', ".deleteotRecord", function (e) {
        var url = $(this).attr('data-url');
        if (!confirm('Are you sure?delete')) {
            e.preventDefault();
            return false;
        }
        var a = true;
        if (a == true) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (res) {
                    $('#otuser').DataTable().ajax.reload();
                },
                error: function (data) {

                }
            });
        }

    });

</script>


<script type="text/javascript">
    $(document).on('click', ".viewRecord", function (e) {
        var id = $(this).data('id');
        var token = $("meta[name='csrf-token']").attr("content");
    
        $.ajax(
            {
                url: '{{route("ot-show")}}',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    _token: token,
                },
                success: function (res) {

                    if (res.status == true) {
                        $('#ot-view').html(res.html);
                        $("#id-largemodal").modal('show');
                    }
                },
                error: function (data) {

                }
            });

    });
</script>
<script type="text/javascript">

    $(document).on('click', ".editotRecord", function (e) {
        ;
        if (!confirm('Are you sure? update')) {
            e.preventDefault();
            return false;
        }
        var a = true;
        if (a == true) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

        }

    });
</script>
@endsection