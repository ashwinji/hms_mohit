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
                            <div class="card-body">
                                    {!! Form::open(array('id'=>'opd-filter-form'))!!}
                                    <div class="row">
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                                {!! Form::label('from', 'From:') !!}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
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
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                {!! Form::date('toDate','', ['class'
                                                =>
                                                'form-control','id'=>'toDate','required'=>'required'])
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

       

@endsection