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
										<h3 class="card-title ">Latest Records Of Doctor</h3>

									</div>

									@include('verror.error')
									<div class="table-responsive">
										
										<table id="search" class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
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
										  
                                           {{ $doctorlist->links() }}
                                         
										
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
<!-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"</script>
<script>
$(document).ready(function(){
$('#search').DataTable();
});
</script> -->

@endsection