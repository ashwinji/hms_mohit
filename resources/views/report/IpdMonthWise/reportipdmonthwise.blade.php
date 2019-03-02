@extends('master.layouts.app')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
    <div class="card">
    <div class="card-header">
    <h6 class="card-title btn btn-pill btn-info">
    IPD - REPORT MONTH WISE
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
    <div class="col-lg-3">
    <div class="form-group">
    {!! Form::month('fromDate','',
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
    <div class="col-lg-3">
    <div class="form-group">
    {!! Form::month('toDate','', ['class'
    =>
    'form-control','id'=>'toDate','required'=>'required'])
    !!}
    </div>
    </div>
    <div class="col-lg-1">
    <div class="form-group">
    {!! Form::label('department', 'Department:')
    !!}
    </div>
    </div>
    <div class="col-lg-2">
    <div class="form-group">
    {!! Form::select('department', $data,'', ['class' =>'form-control','id'=>'department','name'=>'department','placeholder'=>'select department',])
    !!}
    </div>
    </div>
    <div class="col-sm-1">
    <div class="form-group">
    {!! Form::button('Submit', ['class'
    => 'btn btn-square btn-info','id'=>'id-opdfilter']) !!}
    </div>
    </div>
    <div class="col-md-12 text-danger">
    <code>Note : Use Same Year form and to date, if you use different year then result show only from date year.</code>
    </div>
    {!! Form::close() !!}
    </div>

    </div>

    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
    <div class="card">
    <div class="card-body">
    <div class="table-responsive">
    <table id="Opddata-table" class="table table-striped table-bordered w-500">
    <thead>
    <tr>
    <td>#</td>
    <td>Year/Month</td>
    <td>Admitted Patients</td>
    <td>Disharge Patients</td>
    <td>Carry Forward In Next Month</td>
    <td>Remarks</td>
    </tr>
    </thead>
    <tfoot>
    <th colspan="2">Total</th>
    <th colspan="2"></th>
    </tfoot>
    </table>
    </div>
    </div>
    </div>
    </div>
</div>
@endsection

@section('footerSection')
<script>  
$(document).ready(function(){
$('#opdfilter').on('click',function(e){  
e.preventDefault();
var _token = $("input[name='_token']").val();

$('#Opddata-table').DataTable({

processing: true,
serverSide: true,
bDestroy: true,

ajax: {   url: "{{ route('ipdmonth.filter') }}",
type: "POST",
data:{fromDate: $('#fromDate').val(),
toDate: $('#toDate').val(),
department: $('#department').val(),
_token:_token},  },

columns:[

{ data: 'sn', data: 'sn' },
{ data: 'month', name: 'month' },
{ data: 'count', name: 'count', className:'totalipdmonth' },
{ data: 'remark', name: 'remark' },

],
"footerCallback": function(row, data, start, end, display) {
var api = this.api();
api.columns('.totalipdmonth', { page: 'current' }).every(function () {
var sum = this
.data()
.reduce(function (a, b) {
var x = parseFloat(a) || 0;
var y = parseFloat(b) || 0;
return x + y;
}, 0);
console.log(sum);

$(this.footer()).html(sum);
});
}



});  
});  
}); 
</script>

@endsection