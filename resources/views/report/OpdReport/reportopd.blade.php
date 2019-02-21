@extends('master.layouts.app')
        @section('main-content')
        <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title btn btn-pill btn-info">
                                OPD - REPORT 
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
</div>

</div>

@endsection