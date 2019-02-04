@extends('master.layouts.app')
@section('main-content')
<div class="page">
			<div class="row ">
                <div class="col-lg-12">
                	<div class="card">
                              
                         <div class="card-header">
                                        <h3 class="mb-0 card-title">List of Doctor Name</h3>
                                        <div class="card-body">
                                                 <div class="btn-list" style="float: right;">

                                                        <a href="{{route('doctor.create')}}" class="btn btn-xs btn-square btn-success ">Register New Doctor Name</a>

                                                </div>

                                        </div>
                                </div>

						<div class="row ">
							<div class="col-12">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title ">Latest Records Of Patient</h3>

									</div>

									@include('verror.error')
									<div class="table-responsive">
										<table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
											<thead>
											  <tr>
												<th scope="col">ID</th>
												<th scope="col">Doctor Name</th>
												<th scope="col">Update</th>
												<th scope="col">Delete</th>
											  </tr>
											</thead>
											<tbody>

											 @if(isset($doctorlist))
											 @foreach($doctorlist as $doctor)
											 <?php  static $i=1;?>
											  <tr>
												<td>{{$i++}}</td>
												<td>{{$doctor->name}}</td>

												<td><a href="{{route('doctor.edit',['id'=>$doctor->id])}}" class="btn btn-success fa fa-pencil" onclick="return confirm('Are you sure?update');"></a>
												</td>

                                               <td><a href="{{route('doctor.destroy',['id'=>$doctor->id])}}" class="btn btn-danger fa fa-trash" onclick="return confirm('Are you sure?');"></a></td>
												
											  </tr>
											  @endforeach
											  @endif
											 
											</tbody>
										  </table>
										  
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
</div>
</div>
  
@endsection
@section('FooterSection')
<!-- <script type="text/javascript">

    $(document).on('click', ".deleteotRecord", function (e) {
        var url = $(this).attr('data-url');
        if (!confirm('Are you sure?delete')) {
            e.preventDefault();
            return false;
        }
        var a = true;
        if (a == true) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                url: url,
                type: 'DELETE',
                dataType: 'json',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (res) {
                    $('#otuser').DataTable().ajax.reload();
                },
                error: function (data) {

                }
            });
        }

    });

</script> -->
@endsection