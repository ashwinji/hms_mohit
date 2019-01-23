@extends('master.layouts.app')
@section('headSection')
 <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main-content')
<body>
 @include('verror.error')
     <div class="page">
        <div class="row">
            <div class="col-lg-12" >
                  <table id="opduser" class=" table table-bordered table-hover table-condensed table-striped table-primary table-hover bg-success " style="width:100%">
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
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
 src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal.min.css"> 

<script type="text/javascript">

$(document).ready(function() {
    oTable = $('#opduser').DataTable({
        "processing": true,
        "serverSide": true,

            dom: 'Bflrtip',
    buttons: [
        'print', 'pdf','csv',
    ],
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

<script type="text/javascript">
    $(document).on('click',".deleteopdRecord",function(e){
       if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        var a= true;
    if(a==true)
    {
        var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "delete/"+id,
        type: 'DELETE',
        dataType: 'json',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (res){
           $('#opduser').DataTable().ajax.reload();
        },
        error: function (data) {
                     
               }
    });
    }
   
});
   
    </script>

    <script type="text/javascript">
    $(document).on('click',".viewRecord",function(e){
       var id=$(this).data('id');
       var token = $("meta[name='csrf-token']").attr("content");
       
       $.ajax(
    {
        url: '{{route("opd-show")}}',
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
