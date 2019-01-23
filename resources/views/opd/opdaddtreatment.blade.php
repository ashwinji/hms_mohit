<div>
	<style>
  th{
        font-weight: bold;
    }
</style>
<div class="panel panel-default">

  <div class="panel-body">
      <span data-dismiss="modal" class="pull-right" style="margin-right: 50px !important;"><b>X</b></span> 
      <b style="margin-right: 36px">{{ ucfirst($data->patientName) }}</b>
      <span class="pull-right" style="padding-right: 5px">
        <b style="margin-right: 36px">{{ $data->regNum }}</b>
      </span> <i class=" pull-right fa fa-print btn btn-warning" style="margin-right: 10px;">  Print</i> <a href="javascript:void(0);"></a>
  </div>

  <table class="table table-bordered table-striped table-hovered">
        <thead>
            <tr>
                <b><th>Registration Number </th></b>
                <td>{{ $data->regNum }}</td>
                <th>Registration Date </th>
                <td>{{ $data->regDate }}</td>
            </tr>
            <tr>
            
                <th>Name </th>
                <td colspan="3">{{ $data->patientName }} </td>
            </tr>
            <tr>
                <th>Gender </th>
                <td>{{ $data->gender }}</td>
                <th>Age </th>
                <td>{{ $data->age }}</td>
            </tr>
            <tr>
                <th>Address </th>
                <td colspan="3">{{ $data->address }}</td>
            </tr>
            <tr>
                <th>Consultant Name </th>
                <td>{{ $data->consultant }}</td>
                <th>Other Consultant </th>
                <td>{{ $data->otherConsultant }}</td>
            </tr>
            <tr>
                <th>Department </th>
                <td colspan="3">{{ $data->department }}</td>
            </tr>
        </thead>

  </table>
</div>
<div class="text-center">
	                <div class="label label-primary">Add Treatment Details</div>
	               
	              </div>
	              {!! Form::open(array('files'=>'true','id'=>'opdTreatement-form','autocomplete'=>'off')) !!}
	              @csrf
	                 <div class="col-lg-12">
	                    <div class="row">
		                    <div class="col-md-12">
		                    	<input type="hidden" name="patientId" value="{{ $data->regNum }}" id="patientId">
		                        {!! Form::label('complaint', 'Complaints') !!}
		                          <div class="form-group">
		                        {!! Form::textarea('complaint','', ['class' => 'form-control','placeholder' => 'Enter complaint','rows' => 3, 'cols' => 10,'id'=>'id-complaint']) !!}
		                    	</div>
	                        </div>
	                 
						</div>
					    <div class="row">
	                        <div class="col-md-12">
	                      <div class="form-group ">
	                        {!! Form::label('regDate', 'Treatment Date') !!}
	                        {!! Form::date('regDate','', ['class' => 'form-control','id'=>'regDate','placeholder' => 'Enter regDate']) !!}
	                        </div>
	                      </div>
					    </div>
	                    <div class="row">
		                    <div class="col-lg-12">
		                         {!! Form::label('treatment', 'Treatment Advice') !!}
		                          <div class="form-group">
		                       		 {!! Form::textarea('treatment','', ['class' => 'form-control','placeholder' => 'Enter treatment','rows' => 3, 'cols' => 10,'id'=>'treatment']) !!}
		                    	</div>
		                    </div>
	                    </div>
						<div class="row">
		                    <div class="col-lg-6">
	                      	    <div class="form-group ">
		                          {!! Form::label('name','')!!}
		                      </div>
		                  </div>
		              </div>
