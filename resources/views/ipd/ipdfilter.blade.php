@extends('master.layouts.app')
@section('headSection')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main-content')

<body>
    <div class="page">
        <div class="row">
            @include('verror.error')
            <div class="container col-lg-12">
                <table id="ipduser" class=" table table-bordered table-hover table-condensed table-striped table-primary table-hover bg-success"
                    style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>opdno</th>
                            <th>ipdno</th>
                            <th>ipdDate</th>
                            <th>wardno</th>
                            <th>bedno</th>
                            <th>Consultant</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largemodal1">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="add">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

@section('footerSection')
<link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        oTable = $('#ipduser').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('getipd') }}",
            "columns": [
                { data: 'id', name: 'id' },
                { data: 'patientName', name: 'patientName' },
                { data: 'RegNum', name: 'RegNum' },
                { data: 'ipdRegNum', name: 'ipdRegNum' },
                { data: 'ipdRegDate', name: 'ipdRegDate' },
                { data: 'wardName', name: 'wardName' },
                { data: 'bedNum', name: 'bedNum' },
                { data: 'consultant', name: 'consultant' },
                { data: 'action', name: 'action' },



            ]
        });
    });
</script>

<script type="text/javascript">
    $(document).on('click', ".deleteipdrecord", function (e) {
        if (!confirm('Are you sure?')) {
            e.preventDefault();
            return false;
        }
        var a = true;
        if (a == true) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax(
                {
                    url: "delete1/" + id,
                    type: 'DELETE',
                    dataType: 'json',
                    data: {
                        id: id,
                        _token: token,
                    },
                    success: function (res) {
                        $('#ipduser').DataTable().ajax.reload();
                    },
                    error: function (data) {

                    }
                });
        }

    });

</script>
<script type="text/javascript">

    $(document).on('click', ".editRecord", function (e) {
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