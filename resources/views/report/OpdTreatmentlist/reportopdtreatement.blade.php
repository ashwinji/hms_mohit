@extends('master.layouts.app')
 @section('main-content')
        <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title btn btn-pill btn-info">
                                OPD - Treatment List
                            </h6>
                            </div>
                             {!! Form::open(array('id'=>'opd-filter-form')) !!}

                <div class="row" style="margin: 10px;">
                  <div class="col-md-11">
                    <div class="row">
                      <div class="col-md-6" >
                        <div class="form-group">
                          {!! Form::label('name', 'From') !!}
                          {!! Form::date('fromDate',  null, ['class' => 'form-control','placeholder' => 'Enter Registration Amount','id'=>'fromDate']) !!}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">

                          {!! Form::label('name', 'To') !!}
                          {!! Form::date('toDate',  null, ['class' => 'form-control','placeholder' => 'Enter Registration Amount','id'=>'toDate']) !!}
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-1">
                    <div class="form-group">
                      <button style="margin-top: 28px;" class="btn btn-primary" id="opdfilter">submit</button>
                    </div>
                  </div>

                </div>


                {!! Form::close() !!}
              </div>
            </div>

      <div class="row">
       <div class="col-md-12 col-lg-12">
        <div class="card">
         <div class="card-header ">
          <h3 class="card-title ">Latest Records Of Patient</h3>

        </div>

        <div class="card-body">
         <div class="table-responsive" id="dynamic-tables">
          <table id="Opdlist-table" class="table table-striped table-bordered w-100 ">
           <thead>
             <tr>
              <th >ID</th>
              <th >Reg.ID</th>
              <th >Patient Name</th>
              <th >Patient Age</th>
              <th >Gender</th>
              <th >Consultant</th>
              <th >Rg.Date </th>
              <th >Treatment.Date </th>
              <th class="noPrint" >Action</th>
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
        <h4 >Details Of OPD Patients</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
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

@endsection

@section('footerSection')
<script type="text/javascript">
  $(document).ready(function() {
   $('#Opdlist-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: '{{ route('opdtreatment.filter') }}',

                  columns:[

                  { data: 'id', data: 'id' },
                  { data: 'regNum', name: 'regNum' },
                  { data: 'patientName', name: 'patientName' },
                  { data: 'age', name: 'age' },
                  { data: 'gender', name: 'gender' },
                  { data: 'consultant', name: 'consultant' },
                  { data: 'regDate', name: 'regDate'}, 
                  { data: 'treatmentDate', name: 'treatmentDate'}, 
                  { data: 'action', name: 'action',className:'noPrint' },
                ]
              });
 });
  
</script>


<script>  
  $(document).ready(function(){
   $('#opdfilter').on('click',function(e){  
    e.preventDefault();
    var _token = $("input[name='_token']").val();
    $('#Opdlist-table').DataTable({
      
      processing: true,
      serverSide: true,
      bDestroy: true,
      
      ajax: {   url: "{{ route('opdtreatmentdate.filter') }}",
      type: "POST",
      data:{fromDate: $('#fromDate').val(),
      toDate: $('#toDate').val(),
      gender: $('#gender').val(),
      _token:_token},  },

                  columns:[

                  { data: 'id', data: 'id' },
                  { data: 'regNum', name: 'regNum' },
                  { data: 'patientName', name: 'patientName' },
                  { data: 'age', name: 'age' },
                  { data: 'gender', name: 'gender' },
                  { data: 'consultant', name: 'consultant' },
                  { data: 'regDate', name: 'regDate' },
                  { data: 'treatmentDate', name: 'treatmentDate'}, 
                  { data: 'action', name: 'action' },
                ],
                
                
              });  
  });  
 }); 
</script>

   @endsection