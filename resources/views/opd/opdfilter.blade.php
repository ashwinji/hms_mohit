@extends('master.layouts.app')
@section('headSection')
 
@endsection
@section('main-content')
<body>
     @include('verror.error')
     
    <div class="container col-lg-12" >

          <table id="opduser" class=" table table-bordered table-hover table-condensed table-striped table-primary table-hover bg-info " style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>RegNUM</th>
                    <th>Date</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Consultant</th>
                    <th>Action</th>
                </tr>   
            </thead>
          </table>
    </div>
</body>
@endsection

@section('footerSection')
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            oTable = $('#opduser').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('datatable.getopd') }}",
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'patientName', name: 'patientName'},
                    {data: 'regNum', name: 'regNum'},
                    {data: 'regDate', name: 'regDate'},
                    {data: 'address', name: 'address'},
                    {data: 'gender', name: 'gender'},
                    {data: 'consultant', name: 'consultant'},
                    {data: 'action', name: 'action'},
                    
                    
                ]
            });
        });
    </script>
@endsection