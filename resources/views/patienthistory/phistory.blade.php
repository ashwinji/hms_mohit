@extends('master.layouts.app')
@section('headSection')
 <meta name="csrf-token" content="{{csrf_token()}}">
@endsection
@section('main-content')
<div class="page">
  <div class="row">
    <div class="col-md-12 col-lg-12">
    <div class="card">
			<div class="card-header ">
				<h3 class="card-title ">Patient History List</h3>
			</div>
			<div class="card-body">
			<div class="table-responsive">
				<table id="Opddata-table" class="table table-striped table-bordered w-100">
					<thead>
					  <tr>
						<th >S.No</th>
						<th >Patient Name</th>
						<th >Reg. ID</th>
						<th >Rg. Date </th>
						<th >Address</th>
						<th >Gender</th>
						<th >Action</th>
					  </tr>
					</thead>
				  </table>
			</div>
		</div>
		</div>
	</div>
</div>

<!-- model for view -->
<div  class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" >
          <h4 >Details Of Patients History</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="color: black;">
        <div class="row" id="viewmodal">
				
        </div>
        <div  class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- model for view -->
</div>
</div>
</div>
</div>
@endsection
@section('footerSection')

<script type="text/javascript">
$(document).ready(function() {
     $('#Opddata-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('phistory.show') }}',

        columns:[

                { data: 'order', data: 'order' },
                { data: 'patientName', name: 'patientName' },
                { data: 'regNum', name: 'regNum' },
                { data: 'regDate', name: 'regDate' },
                { data: 'address', name: 'address' },
                { data: 'gender', name: 'gender' },
                { data: 'action', name: 'action' },
        ]
     });
});

 </script>
<!-- viewwwwwwwwwwwwww -->
 <script type="text/javascript">
 	$(document).on('click', '.view', function(){
        var id = $(this).attr("id");
        alert(id);
         var _token = $("meta[name='csrf-token']").attr("content");
        alert(_token);
        $('#form_output').html('');
        $.ajax({
            url:"{{route('history.view')}}",
            method:'post',
            data:{id:id,_token:_token},
          
            success:function(res)
            {
            	if(res.status==true){
            		$('#viewmodal').html(res.html);
                    $('#myModal').modal('show');
            	}
                
            }
        })
    });
 </script>

@endsection