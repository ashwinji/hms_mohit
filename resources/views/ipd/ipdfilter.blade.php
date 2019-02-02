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
                <table id="ipduser" class=" table table-striped table-bordered w-100">
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
</div>
</div>
</div>
</div>

    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <div id="add">

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
<script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/datatable.js')}}"></script>
        <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />

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
    $(document).on('click', ".deleteRecord", function (e) {
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
   <script type="text/javascript">
    $(document).on('click',".viewRecord",function(e){
       var id=$(this).data('id');
       var token = $("meta[name='csrf-token']").attr("content");
       
       $.ajax(
    {
        url: '{{route("ipd-show")}}',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id,
            _token: token,
        },
        success:function (res){
        
           if(res.status==true){
            $('#add').html(res.html);
            $("#largemodal").modal('show');
           }
        },
        error: function (data) {
                     
               }
    });
    
  });
        </script>
        <script type="text/javascript">
    $(document).on('click',".discharge",function(e){
       var id=$(this).data('id');
       var token = $("meta[name='csrf-token']").attr("content");
       
       $.ajax(
    {
        url: '{{route("ipd-discharge")}}',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id,
            _token: token,
        },
        success:function (res){
        
           if(res.status==true){
            $('#add').html(res.html);
            $("#largemodal").modal('show');
           }
        },
        error: function (data) {
                     
               }
    });
    
  });
        </script>


@endsection