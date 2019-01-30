@extends('master.layouts.app')
@section('headSection')
 <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main-content')
<body>
 @include('verror.error')

                         <div class="row">
							<div class="col-md-12 col-lg-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Tables</div>
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



            ]
        });
    });
</script>

@endsection