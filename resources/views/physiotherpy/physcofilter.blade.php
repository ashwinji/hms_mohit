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
                        <div class="card-title"> PATIENTS LIST<a href="{{route('physiotherpy-create')}}" class="btn btn-xs btn-success"> <i class="fa fa-plus"></i> Add Patients </a>
                             <i  onclick="printDiv('Physiotherpy EXAMINATION','physcouser')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                        Print</i> <a href="javascript:void(0);" ></a>
                        </div>
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
                <button type="button" class="btn btn-square btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
@section('footerSection')
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
                { data: 'action', name: 'action' ,className:'noPrint'},

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
        var id = $(this).data('id');
        var token = $("meta[name='csrf-token']").attr("content");
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