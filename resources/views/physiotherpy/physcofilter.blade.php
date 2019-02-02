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
                                    <div class="card-title"> PATIENTS LIST</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
            <div class="container col-lg-12">
             <table id="physcouser" class="table table-striped table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>opdReg</th>
                            <th>RegDate</th>
                            <th>Reffered by</th>
                            <th>TestDate</th>
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

    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="p-view">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        oTable = $('#physcouser').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('getphysco') }}",
            "columns": [
                { data: 'id', name: 'id' },
                { data: 'patientName', name: 'patientName' },
                { data: 'regNum', name: 'regNum' },
                { data: 'regDate', name: 'regDate' },
                { data: 'referredBy', name: 'referredBy' },
                { data: 'phyadate', name: 'phyadate' },
                { data: 'action', name: 'action' },

            ]
        });
    });
</script>

<script type="text/javascript">

    $(document).on('click', ".deleteRecord", function (e) {
        ;
        if (!confirm('Are you sure?')) {
            e.preventDefault();
            return false;
        }
        var a = true;
        if (a == true) {
            var id = $(this).data("id");
            var url = $(this).data("url");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax(
                {
                    url: url,
                    type: 'delete',
                    dataType: 'json',
                    data: {
                        id: id, _token: token,
                    },
                    success: function (res) {
                        $('#physcouser').DataTable().ajax.reload();
                    },
                    error: function (data) {

                    }
                });
        }

    });
</script>

<script type="text/javascript">
    $(document).on('click', ".viewRecord", function (e) {
        debugger
        var id = $(this).data('id');
        var token = $("meta[name='csrf-token']").attr("content");
        alert(id);
        $.ajax(
            {
                url: '{{route("Physiotherpy-show")}}',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    _token: token,
                },
                success: function (res) {

                    if (res.status == true) {
                        $('#p-view').html(res.html);
                        $("#largemodal").modal('show');
                    }
                },
                error: function (data) {

                }
            });

    });
</script>

<script type="text/javascript">

    $(document).on('click', ".editrecord", function (e) {
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