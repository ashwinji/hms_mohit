@extends('master.layouts.app')
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title btn btn-pill btn-info">
                    SEMEN EXAMINATION - REPORT MONTH WISE
                    </h6>
                </div>
            <div class="card-body">
                          {!! Form::open(array('id'=>'opd-filter-form')) !!}
              <div class="row">
                <div class="col-md-11">
                  <div class="row">
                    <div class="col-md-6" >
                      <div class="form-group">
                          {!! Form::label('name', 'From') !!}
                          {!! Form::month('fromDate', '', ['class' => 'form-control','placeholder' => 'Enter Date','id'=>'fromDate']) !!}
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('name', 'To') !!}
                          {!! Form::month('toDate', '', ['class' => 'form-control','placeholder' => 'Enter Date','id'=>'toDate']) !!}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <button style="margin-top: 28px;" class="btn btn-square btn-info" id="stoolfilter">submit</button>
                  </div>
                </div>
              </div>
                         {!! Form::close() !!}
              </div>
            </div>
            <div class="row" id="xrayrow">
              <div class="col-md-12 ">
                 <div class="card">
                   <div class="card-body">
                      <div class="table-responsive">
                <table id="stooldata-table" class="table table-striped table-bordered w-500">
                    <thead>
                      <tr>
                        <td>S.N.</td>
                        <td>Year/Month</td>
                        <td>No. Of semenReport</td>
                        <td>Remarks</td>
                      </tr>
                    </thead>
                    <tfoot>
                        <tr>
                          <th colspan="2">total</th>
                          <th colspan="2"></th>
                        </tr>
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
</div>
</div>
@endsection

@section('footerSection')
<script type="text/javascript">  
        jQuery(document).ready(function(){
                    $('#xrayrow').hide();
                  
            $('#stoolfilter').on('click',function(){
                
                    $('#xrayrow').show();
                
            });
        });

  </script>


<script>  
  $(document).ready(function(){
    $('#stoolfilter').on('click',function(e){  
      e.preventDefault();
      var _token = $("input[name='_token']").val();

      $('#stooldata-table').DataTable({

        processing: true,
        serverSide: true,
        bDestroy: true,

        ajax: {   url: "{{ route('semen.filter') }}",
        type: "POST",
        data:{fromDate: $('#fromDate').val(),
        toDate: $('#toDate').val(),
        _token:_token},  },

          columns:[

          { data: 'sn', data: 'sn' },
          { data: 'month', name: 'month' },
          { data: 'count', data: 'count',className:'totalcountxray' },
          { data: 'remark', name: 'remark' },
          

        ],

        "footerCallback": function(row, data, start, end, display) {
         var api = this.api();
         api.columns('.totalcountxray', { page: 'current' }).every(function () {
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