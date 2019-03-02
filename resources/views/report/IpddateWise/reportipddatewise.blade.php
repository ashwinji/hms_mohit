@extends('master.layouts.app')
@section('main-content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            <h6 class="card-title btn btn-pill btn-info">
            IPD - REPORT DATE WISE
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
                    {!! Form::label('wardName', 'Ward Name:')
                    !!}
                    </div>
                    </div>
                    <div class="col-lg-2">
                    <div class="form-group">
                    {!! Form::select('wardName', $data,['' => '-select All-',],['class' => 'form-control','id'=>'wardName','placeholder' => 'All',]) !!}
                    </div>
                    </div>
                    <div class="col-sm-1">
                    <div class="form-group">
                    {!! Form::button('Submit', ['class' => 'btn btn-square btn-info','id'=>'id-ipdfilter']) !!}
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
        <div class="card-body">
        <table id="Ipddata-table" class="table table-striped table-bordered w-500">
        <thead>
        <tr>
        <td>S.N</td>
        <td>Year/Month</td>
        <td>Patients</td>
        </tr>
        </thead>
        <tfoot>
        <tr>
        <th colspan="2">Total number of patients</th>
        <th></th>
        </tr>
        </tfoot>
        </table>
        </div>
        </div>
    </div>
</div>

@endsection
@section('footerSection')

<script>  
    $(document).ready(function(){
    $('#id-ipdfilter').on('click',function(e){  
    e.preventDefault();
    var _token = $("input[name='_token']").val();

    $('#Ipddata-table').DataTable({
    processing: true,
    serverSide: true,
    bDestroy: true,
    ajax: {   url: "{{ route('ipddate.filter') }}",
    type: "POST",
    data:{fromDate: $('#fromDate').val(),
    toDate: $('#toDate').val(),
    wardName: $('#wardName').val(),
    _token:_token},  },

    columns:[
    { data: 'sn', data: 'sn' },
    { data: 'ipdRegDate', name: 'ipdRegDate' },
    { data: 'count', name: 'count', className:'totalipddate' },
    ],

    "footerCallback": function(row, data, start, end, display) {
    var api = this.api();
    api.columns('.totalipddate', { page: 'current' }).every(function () {
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