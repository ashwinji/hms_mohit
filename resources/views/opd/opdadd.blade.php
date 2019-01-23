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