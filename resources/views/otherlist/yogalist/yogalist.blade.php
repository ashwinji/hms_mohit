@extends('master.layouts.app')
@section('main-content')
<div class="page">
<div class="row">
	  <div class="col-md-12">
            <div class="card">
				<div class="card-header">
                     <h3 class="mb-0 card-title">List of Yoga Name</h3>
                        <div class="card-body">
                             <div class="btn-list" style="float: right;">
                                    <a href="{{route('yogalist.create')}}" class="btn btn-xs btn-square btn-success ">Register New Yoga Name</a>
                            </div>
                        </div>
                 </div>
               </div>
<div class="row ">
	 <div class="col-12">
			<div class="card">
				<div class="card-header ">
					<h3 class="card-title ">Latest Records Of YogaList</h3>
		        </div>
					@include('verror.error')
					<div class="table-responsive">
						  <table id="table" class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
								<thead>
									  <tr>
										<th scope="col">ID</th>
										<th scope="col">Disease Name</th>
										<th scope="col">Exercise Name</th>
										<th scope="col">Update</th>
										<th scope="col">Delete</th>
									  </tr>
								</thead>
								<tbody>
									 @if(isset($yogalistdata))
									 @foreach($yogalistdata as $yogalist)
									  <tr>
											<td>{{$yogalist->id}}</td>
											<td>{{$yogalist->disease}}</td>
											<td>{{$yogalist->exersise}}</td>

											<td><a href="{{route('yogalist.edit',['id'=>$yogalist->id])}}" class="btn btn-info fa fa-pencil" data-toggle="tooltip" data-placement="top" title="edit" onclick="return confirm('Are you sure?update');"></a>
											</td>
	                                       <td><a href="{{route('yogalist.delete',['id'=>$yogalist->id])}}" class="btn btn-danger fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Are you sure?delete');"></a>
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