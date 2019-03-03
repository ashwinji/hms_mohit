@extends('master.layouts.app')
@section('main-content')
<div class="page">
    <div class="page-main">
        <div class="row">
        <div class="col-md-12  col-lg-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">OPD TREATMENTS LIST - FILTER DATA</h3>
                </div>
                {!! Form::open(array('id'=>'opd-filter-form')) !!}
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-5" >
                                <div class="form-group">
                                {!! Form::label('name', 'From') !!}
                                {!! Form::date('fromDate',  null, ['class' => 'form-control','placeholder' => 'Enter Registration Amount','id'=>'fromDate']) !!}
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                {!! Form::label('name', 'To') !!}
                                {!! Form::date('toDate',  null, ['class' => 'form-control','placeholder' => 'Enter Registration Amount','id'=>'toDate']) !!}
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                        <button style="margin-top: 28px;" class="btn btn-square btn-success" id="opdfilter">submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                {!! Form::close() !!}
            </div>
        </div>
<<<<<<< HEAD

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
              <th >Action</th>
            </tr>
          </thead>
        </table>
      </div>
=======
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
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
                                    <th >S.N.</th>
                                    <th >Reg.ID</th>
                                    <th >Patient Name</th>
                                    <th >Patient Age</th>
                                    <th >Gender</th>
                                    <th >Consultant</th>
                                    <th >Rg.Date </th>
                                    <th >treatmentDate </th>
                                    <th class="noPrint" >Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content">
                    <div class="modal-header" >
                    <h4 >Details Of OPD Patients</h4>
                    </div>
                    <div class="page">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="modal-body">
                                    <div id="viewmodal">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-square btn-info" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footerSection')
<script type="text/javascript">
    $(document).ready(function() {
    $('#Opdlist-table').DataTable({
    processing: true,
    serverSide: true,
<<<<<<< HEAD
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
                  { data: 'action', name: 'action'},
                ]
              });
 });
  
=======
    ajax: '{{ route('opdtreatmentlist.filter') }}',

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
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
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

    ajax: {   url: "{{ route('opdtreatmentlistdate.filter') }}",
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
    { data: 'treatmentDate', name: 'treatmentDate' },
    { data: 'action', name: 'action' },
    ],


    });  
    });  
    }); 
</script>
<!-- view-->
<script type="text/javascript">
    $(document).on('click', '.opdlistview', function(){
    var id = $(this).attr("id");
    var _token=$("input[name='_token']").val();
    $('#form_output').html('');
    $.ajax({
    url:"{{route('opd.treatment.view')}}",
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
<!-- view -->
@endsection