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
						<div class="card-title"> PATIENTS LIST
                            <a href="{{route('blood-create')}}" class="btn btn-xs btn-success"> <i class="fa fa-plus"></i> Add Patients </a></div>
                        <i  onclick="printDiv('BLOOD EXAMINATION','bloodexamination')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                        Print</i> <a href="javascript:void(0);" ></a>
                        </div>
						</div>
					<div class="card-body">
                        <div class="table-responsive">
							<table id="bloodexamination" class="table table-striped table-bordered w-100">
								<thead>
                                     <tr>
			                           <th class="wd-15p">Id</th>
			                            <th class="wd-15p">Name</th>
			                            <th class="wd-15p">RegNUM</th>
			                            <th class="wd-15p">RefferedBy</th>
			                            <th class="wd-15p">Age</th>
			                            <th class="wd-15p">investigationAdvised</th>
			                            <th class="wd-15p">TestDate</th>
			                            <th class="wd-15p">Action</th>
                                    </tr> 
								</thead>
							</table>
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
                    <div id="b-view">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class=" btn btn-square btn-info" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
@section('footerSection')
<script type="text/javascript">
    $(document).ready(function () {
        oTable = $('#bloodexamination').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('sendblooddata') }}",
            "columns": [
                { data: 'id', name: 'id' },
                { data: 'patientName', name: 'patientName' },
                { data: 'regNum', name: 'regNum' },
                { data: 'referredBy', name: 'referredBy' },
                { data: 'age', name: 'age' },
                { data: 'investigationAdvised', name: 'investigationAdvised' },
                { data: 'date', name: 'date' },
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
        var url = $(this).data("url");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url:url,
        type: 'delete',
        dataType: 'json',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (res){
           $('#bloodexamination').DataTable().ajax.reload();
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
    $(document).on('click', ".viewRecord", function (e) {
        
        var id = $(this).data('id');
        var token = $("meta[name='csrf-token']").attr("content");
       
        $.ajax(
            {
                url: '{{route("bloodexamination-show")}}',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    _token: token,
                },
                success: function (res) {

                    if (res.status == true) {
                        $('#b-view').html(res.html);
                        $("#largemodal").modal('show');
                    }
                },
                error: function (data) {

                }
            });

    });
</script>

@endsection