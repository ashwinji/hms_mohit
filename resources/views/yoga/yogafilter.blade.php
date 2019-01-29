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
                  <table id="yogauser" class=" table table-bordered table-hover table-condensed table-striped table-primary table-hover bg-success" style="width:100%">
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

  <div class="modal fade" id="id-largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <div id="yoga-view">
                                
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal.min.css">


    <script type="text/javascript">
        $(document).ready(function() {
            oTable = $('#yogauser').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('getyoga') }}",
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'patientName', name: 'patientName'},
                    {data: 'regNum', name: 'regNum'},
                    {data: 'regDate',name:'regDate'},           
                    {data:'referredBy',name:'referredBy'},
                    {data:'yogadate',name:'yogadate'},
                    {data: 'action', name: 'action'},
               
                 ]
               });
        });
    </script>
    <script type="text/javascript">
        
   
    $(document).on('click',".deleteyogaRecord",function(e){
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
        url: "yoga/delete/"+id,
        type: 'DELETE',
        dataType: 'json',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (res){
           $('#yogauser').DataTable().ajax.reload();
        },
        error: function (data) {
                     
               }
    });
    }
   
});
   
    </script>
    <script type="text/javascript">

    $(document).on('click',".editYoga", function (e) {
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
    $(document).on('click', ".viewRecord", function (e) {debugger
        var id = $(this).data('id');
        var token = $("meta[name='csrf-token']").attr("content");
        alert(id);
        $.ajax(
            {
                url: '{{route("yoga-show")}}',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    _token: token,
                },
                success: function (res) {

                    if (res.status == true) {
                        $('#yoga-view').html(res.html);
                        $('#id-largemodal').modal('show');
                    }
                },
                error: function (data) {

                }
            });

    });
</script>

@endsection