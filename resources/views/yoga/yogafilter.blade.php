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
                                    <div> <a href="{{route('yoga.create')}}" class="btn btn-xs btn-success"> <i class="fa fa-plus"></i> Add Patients </a>
                                        <i  onclick="printDiv('yoga patient LIST','yogauser')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                        Print</i> <a href="javascript:void(0);" ></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
            <div class="container col-lg-12">
                  <table id="yogauser" class=" table table-striped table-bordered w-100" style="width:100%">
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

  <div class="modal fade" id="id-largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
         <div class="modal-dialog modal-lg " role="document">
                 <div class="modal-content">
                        
                        <div class="modal-body">
                            <div id="yoga-view">
                                
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
                    {data: 'action', name: 'action',className:'noPrint'},
               
                 ]
               });
        });
    </script>
    <script type="text/javascript">
        
   
    $(document).on('click',".deleteRecord",function(e){
       if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        var a= true;
    if(a==true)
    {
       var id = $(this).data("id");
       var url=$(this).data("url")
       var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url:url,
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
    $(document).on('click', ".viewRecord", function (e) {
        var id = $(this).data('id');
        var token = $("meta[name='csrf-token']").attr("content");
        
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