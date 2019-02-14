@extends('master.layouts.app')
@section('main-content')
<div class="page">
<div class="row">
	  <div class="col-md-12">
            <div class="card">
				<div class="card-header">
                     <h3 class="mb-0 card-title">List of Physiotherapylist Name</h3>
                        <div class="card-body">
                             <div class="btn-list" style="float: right;">
                                    <a href="{{route('Physiotherapylist.create')}}" class="btn btn-xs btn-square btn-success ">Register New Physiotherapy Name</a>
                            </div>
                        </div>
                 </div>
               </div>
<div class="row ">
	 <div class="col-12">
			<div class="card">
				<div class="card-header ">
					<h3 class="card-title ">Latest Records Of Physiotherapylist</h3>
		        </div>
					@include('verror.error')
					<div class="table-responsive">
						  <table id="table" class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
								<thead>
									  <tr>
										<th scope="col">ID</th>
										<th scope="col">Disease Name</th>
										<th scope="col">Therapy Name</th>
										<th scope="col">Update</th>
										<th scope="col">Delete</th>
									  </tr>
								</thead>
								<tbody>
									 @if(isset($physiotherapylist))
									 @foreach($physiotherapylist as $physiotherapy)
									  <tr>
											<td>{{$physiotherapy->id}}</td>
											<td>{{$physiotherapy->disease}}</td>
											<td>{{$physiotherapy->therapy}}</td>

											<td><a href="{{route('physiotherapylist.edit',['id'=>$physiotherapy->id])}}" class="btn btn-info fa fa-pencil" data-toggle="tooltip" data-placement="top" title="edit" onclick="return confirm('Are you sure?update');"></a>
											</td>
	                                       <td><a href="{{route('physiotherapylist.delete',['id'=>$physiotherapy->id])}}" class="btn btn-danger fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?delete');"></a>
	                                       </td>
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
 <script src="{{asset('assets/js/popover.js')}}"></script>

@endsection