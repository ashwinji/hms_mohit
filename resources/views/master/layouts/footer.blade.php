<footer class="footer">
  <div class="container">
    <div class="row align-items-center flex-row-reverse">
      <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
        Copyright © 2018 - 2019 <a href="#">NRT</a>. Designed by <a href="#">NRT</a> All rights reserved.
      </div>
    </div>
  </div>
</footer>

<div class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel2">Enter Project Details</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
</div>
<div class="card-body">
    <form>
            <div class="form-group">
                <label for="listname">Project name</label>
                <input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
            </div>
            <div class="form-group">
                <label for="listname">Backend</label>
                      <select name="Language" id="select-Language" class="form-control custom-select">
                            <option value="ph" data-data="">PHP</option>
                            <option value="aj" data-data="">Angular js</option>
                            <option value="jv" data-data="">Java</option>
                            <option value="nt" data-data="" selected="">.Net</option>
                            <option value="py" data-data="" >Phython</option>
                            <option value="js" data-data="" >Javascript</option>
                            <option value="ui" data-data="" >UI Design</option>
                      </select>
            </div>

            <div class="form-group">
                  <label >Deadline</label>
                  <input type="Date" name="Date" class="form-control">
            </div>
            <div class="form-group">
                <label for="listname">Team Members</label>
                <input type="text" class="form-control" name="listname" id="listname2" placeholder="How many Team memebers?">
            </div>
            <div class="form-group">
                <label for="listname">Description</label>
                <textarea class="form-control" name="example-textarea-input" rows="3" placeholder="text here.."></textarea>
            </div>
            <div class="form-group">
                <label>Add a list item</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="example-file-input-custom">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>
            <div class="form-group text-center">
                 <button type="submit" class="btn btn-block btn-primary">Sign in</button>
            </div>
    </form>
</div>
</div>
</div>
</div>
<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Dashboard Core -->
<script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/selectize.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/jquery.tablesorter.min.js')}}"></script>
<!-- <script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script> -->
<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
<script src="{{asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>


<!-- Echarts Js-->
<script src="{{asset('assets/plugins/echarts/echarts.js')}}"></script>
{{-- <script src="{{asset('assets/js/index1.js')}}"></script>
 --}}
<!--othercharts js-->
{{-- <script src="{{asset('assets/js/othercharts.js')}}"></script> --}}

<!-- Charts Plugin -->
<script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

<!--Jquery.knob js-->
<script src="{{asset('assets/plugins/othercharts/jquery.knob.js')}}"></script>

<!--Amcharts Charts Plugin -->
<script src="{{asset('assets/plugins/am-chart/amcharts.js')}}"></script>
<script src="{{asset('assets/plugins/am-chart/serial.js')}}"></script>

<!-- peitychart -->
<script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

<!-- Fullside-menu Js-->
<script src="{{asset('assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>
<!-- Sweet alert Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<!-- Custom scroll bar Js-->
<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- Custom Js-->
<script src="{{asset('assets/js/popover.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/print.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/datatable.js')}}"></script>
        <link href="{{asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
      <script src= "https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/Javascript">
 $(document).ready( function () {
  
    $('#table').DataTable();
} );
</script>
@section('footerSection')

@show
