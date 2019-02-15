@extends('master.layouts.app')
@section('headSection')
 <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main-content')

 <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title btn btn-pill btn-info">
                                OPD - FILTER DATA
                            </h6>
                            </div>
                            <div class="card-body">
                                    {!! Form::open(array('id'=>'opd-filter-form'))!!}
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                                {!! Form::label('from', 'From:') !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                {!! Form::date('fromDate','',
                                                ['class' =>
                                                'form-control','id'=>'fromDate','required'=>'required'])
                                                !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                                {!! Form::label('to', 'To:') !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                {!! Form::date('toDate','', ['class'
                                                =>
                                                'form-control','id'=>'toDate','required'=>'required'])
                                                !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                                {!! Form::label('gender', 'Gender:')
                                                !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                {!! Form::select('gender', 
                                                    array( 
                                                        ''=> '-Select Gender-', 
                                                        'Male Adult' =>'Male Adult',
                                                        'Female Adult' =>'Female Adult',
                                                        'Male Child' =>'Male Child',
                                                        'Female Child' =>'Female Child', ), '',
                                                        ['class' =>'form-control','id'=>'gender'])
                                                     !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                {!! Form::button('Submit', ['class'
                                            => 'btn btn-square btn-info','id'=>'id-opdfilter']) !!}
                                          </div>
                                        </div>
                                          <div class="col-sm-1">
                                            <div class="form-group">
                                                {!! Form::reset('Cancel', ['class'
                                            => 'btn btn-square btn-danger','id'=>'id-opdfilter']) !!}
                                            </div>

                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                
                            </div>
                       
                    </div>
                </div>
            </div>
<body>
  @include('verror.error')
        <div class="page">
                         <div class="row">
                            <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"> PATIENTS LIST</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                      <div class="container col-lg-12">
                  <table id="opduser" class=" table table-striped table-bordered w-100 ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>RegNUM</th>
                            <th>Date</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Consultant</th>
                            <th>Action</th>
                        </tr>   
                    </thead>
                  </table>
            </div>
       </div>
    </div>
</div>
</div>
</div>
</div>
    <div id="largemodal" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content ">
            <div class="modal-body pd-20">
             <div id="add">
                                    
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-square btn-info" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div><!-- modal-dialog -->
      </div>

            <div class="modal fade" id="largemodalt" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
                <div class="modal-dialog modal-lg " role="document">
                    <div class="modal-content">
                       
                        <div class="modal-body">
                            <div id="addtreatment">
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                             <button type="button" id="at"class="btn btn-square btn-info pull-left" data-dismiss="modal">Submit</button>
                            <button type="button" class="btn btn-square btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
</body>
@endsection

@section('footerSection')
<script type="text/javascript">

$(document).ready(function() {
    oTable = $('#opduser').DataTable({
        "processing": true,
        "serverSide": true,

            dom: 'Bflrtip',
    buttons: [
        'print', 'pdf','csv',
    ],
        "ajax": "{{ route('datatable.getopd') }}",
        "columns": [
            {data: 'id', name: 'id'},
            {data: 'patientName', name: 'patientName'},
            {data: 'regNum', name: 'regNum'},
            {data: 'regDate', name: 'regDate'},
            {data: 'address', name: 'address'},
            {data: 'gender', name: 'gender'},
            {data: 'consultant', name: 'consultant'},
            {data: 'action', name: 'action'},
            
            
                 ]
               });

      jQuery('#id-opdfilter').click(function(e){alert()
                       e.preventDefault();
                       var _token = $("input[name='_token']").val();
                        $('#opduser').DataTable({
                            "lengthMenu": [[100, 250, 500, 1000], [100, 250, 500, 1000]],

                            processing: true,
                            serverSide: true,
                            bDestroy: true,

                            ajax: {   url: "{{ route('filter.search') }}",
                                     type: "POST",
                                     data:{
                                      fromDate: jQuery('#fromDate').val(),
                                     toDate: jQuery('#toDate').val(),
                                     gender: jQuery('#gender').val(),
                                     _token:_token},  },

                            dom: 'Blfrtip',
                          buttons: [
                               'print'
                          ],

                    columns: [
                        { data: 'order', data: 'order' },
                        { data: 'patientName', name: 'patientName' },
                        { data: 'regNum', name: 'regNum' },
                        { data: 'regDate', name: 'regDate' },
                        { data: 'address', name: 'address' },
                        { data: 'gender', name: 'gender' },
                        { data: 'consultant', name: 'consultant' },
                        { data:'action',name:'action'},

                    ],
                });
            });
        });
    </script>

<script type="text/javascript">
    $(document).on('click',".deleteopdRecord",function(e){
       if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        var a= true;
    if(a==true)
    {
        var id = $(this).data("id");
        var url = $(this).data("url");
    var token = $("meta[name='csrf-token']").attr("content");
   
    $.ajax(
    {
        url: url,
        type: 'DELETE',
        dataType: 'json',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (res){
           $('#opduser').DataTable().ajax.reload();
        },
        error: function (data) {
                     
               }
    });
    }
   
});
   
    </script>

    <script type="text/javascript">
    $(document).on('click',".viewRecord",function(e){
       var id=$(this).data('id');
       var token = $("meta[name='csrf-token']").attr("content");
       
       $.ajax(
    {
        url: '{{route("opd-show")}}',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id,
            _token: token,
        },
        success:function (res){
        
           if(res.status==true){
            $('#add').html(res.html);
            $("#largemodal").modal('show');
           }
        },
        error: function (data) {
                     
               }
    });
    
  });
        </script>

        <script type="text/javascript">
    $(document).on('click',".addRecord",function(e){
       var id=$(this).data('id');
       var token = $("meta[name='csrf-token']").attr("content");
       
       $.ajax(
    {
        url: '{{route("opd-add")}}',
        type: 'POST',
        dataType: 'json',
        data: {
            id: id,
            _token: token,
        },
        success:function (res){
        
           if(res.status==true){
            $('#addtreatment').html(res.html);
            $("#largemodalt").modal('show');
           }
        },
        error: function (data) {
                     
               }
    });
    
  });
     </script>

     <script type="text/javascript">
    $(document).on('click',"#at",function(e){
     var token = $("meta[name='csrf-token']").attr("content");
     alert();
     var patientId=$('#patientId').val();
     var complaint=$('#id-complaint').val();
     var treatmentDate=$('#treatmentDate').val();
     var treatment=$('#treatment').val();
     var medicine=$('#medicine').val();
     var potency=$('#potency').val();
     var nod=$('#nod').val();
     var advice=$('#advice').val();
     var remark=$('#remark').val();
     var myCheckboxes = new Array();
     $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
     var consultant=$('#consultant').val();
alert(myCheckboxes);

$.ajax(
  {
     url: '{{route("opdt.store")}}',
        type: 'POST',
        dataType: 'json',
        data: {
            patientId:patientId,
            complaint:complaint,
            treatmentDate:treatmentDate,
            treatment:treatment ,
            medicine:medicine,
            potency:potency,
            nod:nod,
            advice:advice,
            remark:remark,
            myCheckboxes:myCheckboxes ,
            consultant:consultant,
            _token: token,
        },
        success:function (res){
        
           if(res.status==true){
            $('#addtreatment').html(res.html);
            $("#largemodalt").modal('show');
           }
        },
        error: function (data) {
                     
               }
    });

    });
   
    </script>
    <script type="text/javascript">

    $(document).on('click', ".editotRecord", function (e) {
        ;
        if (!confirm('Are you sure? update')) {
            e.preventDefault();
            return false;
        }
        var a = true;
        if (a == true) {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

        }

    });
</script>
    

@endsection
