@extends('master.layouts.app')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            <h6 class="card-title btn btn-pill btn-info">
            OPD - REPORT DATE WISE
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
                <div class="col-lg-3">
                <div class="form-group">
                {!! Form::date('toDate','', ['class'
                =>
                'form-control','id'=>'toDate','required'=>'required'])
                !!}
                </div>
                </div>
                <div class="col-lg-1">
                <div class="form-group">
                {!! Form::label('gender', 'Department:')
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
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
    <div class="card">
    <div class="card-header">
    <div class="card-body">
    <div class="table-responsive">
    <table id="Opddata-table" class="table table-striped table-bordered w-500">
    <thead>
    <tr>
    <td>#</td>
    <td>Date</td>
    <td>Male Adult</td>
    <td>Female Adult</td>
    <td>Male Child</td>
    <td>Female Child</td>
    <td>Sub Total</td>
    </tr>
    </thead>
    <tfoot>
    <th colspan="2">Total</th>
    <th colspan=""></th>
    <th colspan=""></th>
    <th colspan=""></th>
    <th colspan=""></th>
    <th colspan=""></th>
    </tfoot>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
@endsection
@section('footerSection')

<script>  
$(document).ready(function(){
$('#id-opdfilter').on('click',function(e){  
e.preventDefault();
var _token = $("input[name='_token']").val();

$('#Opddata-table').DataTable({

processing: true,
serverSide: true,
bDestroy: true,

ajax: {   url: "{{ route('opddate.filter') }}",
type: "POST",
data:{fromDate: $('#fromDate').val(),
toDate: $('#toDate').val(),
department: $('#department').val(),
_token:_token},  },

columns:[

{ data: 'sn', data: 'sn' },
{ data: 'regDate', name: 'regDate' },
{ data: 'maleAdult', name: 'maleAdult',className:'total' },
{ data: 'femaleAdult', name: 'femaleAdult',className:'total' },
{ data: 'maleChild', name: 'maleChild',className:'total' },
{ data: 'femaleChild', name: 'femaleChild',className:'total' },
{ data: 'subTotal', name: 'subTotal',className:'total'},

],

"footerCallback": function(row, data, start, end, display) {
var api = this.api();
api.columns('.total', { page: 'current' }).every(function () {
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




