@extends('master.layouts.app')
@section('headSection')
 <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('main-content')
    <body>
         @include('verror.error')
         <div class="page">
            <div class="row">
                <div class="container col-lg-12">
                      <table id="otuser" class=" table table-bordered table-hover table-condensed table-striped table-primary table-hover bg-success" style="width:100%">
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
</body>
<div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="largemodal1">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('footerSection')
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            oTable = $('#otuser').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('getot') }}",
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'patientName', name: 'patientName'},
                    {data: 'regNum', name: 'regNum'},
                    {data: 'opdDate', name: 'opdDate'},
                    {data: 'otDate', name: 'otDate'},
                    {data: 'consultant', name: 'consultant'},
                    {data: 'action', name: 'action'},
                   
                    
                    
                ]
            });
        });
    </script>


    <script type="text/javascript">

    $(document).on('click',".deleteotRecord",function(e){
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
        url: "delete2/"+id,
        type: 'DELETE',
        dataType: 'json',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (res){
           $('#otuser').DataTable().ajax.reload();
        },
        error: function (data) {
                     
               }
    });
    }
   
});
   
    </script>

    <script type="text/javascript">
        
        $(document).on('click',".editotRecord",function(e){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
         alert("are you sure want to update");
        $.ajax(
        {
            url:"{{url('ot/edit')}}"+'/'+id,
            type:'POST',
            dataType: 'json',
            data: { _token: token,
            },
            success: function (res){
               $('#otuser').DataTable().ajax.reload();
            },
            error: function (data) {
                         
                   }
        });
        
       
    });
    
    </script>

        <script type="text/javascript">
    $(document).on('click',".viewRecord",function(e){
       var id=$(this).data('id');
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
        success:function (res){
        
           if(res.status==true){
            $('#ot-view').html(res.html);
            $("#largemodal").modal('show');
           }
        },
        error: function (data) {
                     
               }
    });
    
  });
        </script>


@endsection
