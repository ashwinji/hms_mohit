@extends('master.layouts.app')
@section('headSection')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main-content')
<body>
<<<<<<< HEAD
@include('verror.error')
   <div class="page">
     <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="card">
             <div class="card-header">
                <div class="card-title"> PATIENTS LIST<a href="{{route('xray-create')}}" class="btn btn-xs btn-success"> <i class="fa fa-plus"></i> Add Patients </a></div>
                        <i  onclick="printDiv('IPD EXAMINATION','ipduser')" class=" pull-right fa fa-print btn btn-square btn-info" style="margin-right: 10px;"> 
                        Print</i> <a href="javascript:void(0);" ></a></div>
               </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <div class="container col-lg-12">
                <table id="ipduser" class=" table table-striped table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>opdno</th>
                            <th>ipdno</th>
                            <th>ipdDate</th>
                            <th>wardno</th>
                            <th>bedno</th>
                            <th>Consultant</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
=======
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
                                <table id="ipduser" class=" table table-striped table-bordered w-100">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>opdno</th>
                                        <th>ipdno</th>
                                        <th>ipdDate</th>
                                        <th>wardno</th>
                                        <th>bedno</th>
                                        <th>Consultant</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
            </div>
        </div>
    </div>
    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-body">
                <div id="add">

                </div>
                </div>
                <div class="modal-footer align-center">
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
    $(document).ready(function () {
<<<<<<< HEAD
        oTable = $('#ipduser').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('getipd') }}",
            "columns": [
                { data: 'order', name: 'order' },
                { data: 'patientName', name: 'patientName' },
                { data: 'RegNum', name: 'RegNum' },
                { data: 'ipdRegNum', name: 'ipdRegNum' },
                { data: 'ipdRegDate', name: 'ipdRegDate' },
                { data: 'wardName', name: 'wardName' },
                { data: 'bedNum', name: 'bedNum' },
                { data: 'consultant', name: 'consultant' },
                { data: 'action', name: 'action',className:'noPrint' },
            ]
        });
=======
    oTable = $('#ipduser').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{route('getipd') }}",
    "columns": [
    { data: 'order', name: 'order' },
    { data: 'patientName', name: 'patientName' },
    { data: 'RegNum', name: 'RegNum' },
    { data: 'ipdRegNum', name: 'ipdRegNum' },
    { data: 'ipdRegDate', name: 'ipdRegDate' },
    { data: 'wardName', name: 'wardName' },
    { data: 'bedNum', name: 'bedNum' },
    { data: 'consultant', name: 'consultant' },
    { data: 'action', name: 'action' },
    ]
    });
>>>>>>> 43aa501ca8c4bb6763b3a162c4858002ea1b578f
    });
</script>
<script type="text/javascript">
    $(document).on('click', ".deleteRecord", function (e) {
    if (!confirm('Are you sure?')) {
    e.preventDefault();
    return false;
    }
    var a = true;
    if (a == true) {
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");

    $.ajax(
    {
    url: "delete1/" + id,
    type: 'DELETE',
    dataType: 'json',
    data: {
    id: id,
    _token: token,
    },
    success: function (res) {
    $('#ipduser').DataTable().ajax.reload();
    },
    error: function (data) {

    }
    });
    }

    });
</script>
<script type="text/javascript">
    $(document).on('click', ".editRecord", function (e) {
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
<script type="text/javascript"> 
    $(document).on('click',".viewRecord",function(e){
    var id=$(this).data('id');
    var token = $("meta[name='csrf-token']").attr("content");

    $.ajax(
    {
    url: '{{route("ipd-show")}}',
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
    $(document).on('click',".discharge",function(e){
    var id=$(this).data('id');
    var token = $("meta[name='csrf-token']").attr("content");

    $.ajax(
    {
    url: '{{route("ipd-discharge")}}',
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
    url: '{{route("ipd-add")}}',
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
    $(document).on('click',"#at",function(e){debugger
    var token = $("meta[name='csrf-token']").attr("content");

    var patientId=$('#patientId').val();
    var ipdId=$('#ipdId').val();
    var complaint=$('#id-complaint').val();
    var treatmentDate=$('#treatmentDate').val();
    var treatment=$('#treatment').val();
    var medicine=$('#medicine').val();
    var potency=$('#potency').val();
    var investigation=$('#investigation').val();
    var nod=$('#nod').val();
    var remark=$('#remark').val();
    var myCheckboxes = new Array();
    $("input:checked").each(function() {
    myCheckboxes.push($(this).val());
    });
    var consultant=$('#consultant').val();
    alert(myCheckboxes);

    $.ajax(
    {
    url: '{{route("ipdt.store")}}',
    type: 'POST',
    dataType: 'json',
    data: {
    patientId:patientId,
    ipdId:ipdId,
    complaint:complaint,
    treatmentDate:treatmentDate,
    treatment:treatment ,
    medicine:medicine,
    potency:potency,
    investigation:investigation,
    nod:nod,
    remark:remark,
    myCheckboxes:myCheckboxes ,
    consultant:consultant,
    _token: token,
    },
    success:function (res){
    alert(res.status);
    if(res.status==true){
    swal({
    title: "hello mohit",
    text: "data save successfully.",
    type: 'success',
    timer: 2000
    });
    }
    },
    error: function (data) {

    }
    });

    });

</script>

@endsection