@extends('master.layouts.app')
@section('main-content')
<div class="page">
	<div class="row ">
    <div class="col-lg-12">
      <div class="card">
      <div class="card-header">
          <h3 class="mb-0 card-title">List of Disease Name</h3>
            <div class="card-body">
                 <div class="btn-list" style="float: right;">
                  <a href="{{route('phycodisease.create')}}" class="btn btn-xs btn-square btn-success ">Register New Disease Name</a>
                </div>
            </div>
      </div>
  		<div class="row ">
  			<div class="col-12">
  				<div class="card">
  					<div class="card-header ">
  						<h3 class="card-title ">Latest Records Of Disease</h3>
  					</div>
  					@include('verror.error')
  					<div class="table-responsive">
  						<table id="table" class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
  							<thead>
  							  <tr>
    								<th scope="col">ID</th>
    								<th scope="col">Disease Name</th>
    								<th scope="col">Update</th>
    								<th scope="col">Delete</th>
  							  </tr>
  							</thead>
  							  <tbody>
    							 @if(isset($phycodiseaselist))
    							 @foreach($phycodiseaselist as $disease)
    							 <?php  static $i=1;?>
    							  <tr>
      								<td>{{$i++}}</td>
      								<td>{{$disease->name}}</td>
      								<td><a href="{{route('phycodisease.edit',['id'=>$disease->id])}}" class="btn btn-success fa fa-pencil" onclick="return confirm('Are you sure?update');"></a>
      								</td>
                       <td><a href="{{route('phycodisease.delete',['id'=>$disease->id])}}" class="btn btn-danger fa fa-trash" onclick="return confirm('Are you sure?');"></a></td>
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



@endsection