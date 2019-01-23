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
                  <table id="physcouser" class=" table table-bordered table-hover table-condensed table-striped table-primary table-hover bg-success" style="width:100%">
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
        $(document).ready(function() {
            oTable = $('#physcouser').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('getphysco') }}",
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'patientName', name: 'patientName'},
                    {data: 'regNum', name: 'regNum'},
                    {data:  'regDate',name:'regDate'},           
                    {data:'referredBy',name:'referredBy'},
                    {data:'phyadate',name:'phyadate'},
                    {data: 'action', name: 'action'},
               
                 ]
               });
        });
    </script>

  
    
@endsection