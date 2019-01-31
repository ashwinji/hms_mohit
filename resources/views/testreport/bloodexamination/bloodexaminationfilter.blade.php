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
								<!-- table-wrapper -->
							</div>
							<!-- section-wrapper -->

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

<script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/datatable.js')}}"></script>
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

		<!-- Custom scroll bar Js-->
		<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

		<!-- Custom Js-->
		<script src="{{asset('assets/js/custom.js')}}"></script>
        <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/plugins/select2/select2.min.css" rel="stylesheet')}}" />

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
                {data: 'action', name: 'action'},



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
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: "/blood-delete/"+id,
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