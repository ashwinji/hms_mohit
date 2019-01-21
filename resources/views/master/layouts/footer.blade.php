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
<script src="assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendors/jquery.sparkline.min.js"></script>
<script src="assets/js/vendors/selectize.min.js"></script>
<script src="assets/js/vendors/jquery.tablesorter.min.js"></script>
<script src="assets/js/vendors/circle-progress.min.js"></script>
<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
<script src="assets/plugins/flot/jquery.flot.js"></script>
<script src="assets/plugins/flot/jquery.flot.fillbetween.js"></script>
<script src="assets/plugins/flot/jquery.flot.pie.js"></script>


<!-- Echarts Js-->
<script src="assets/plugins/echarts/echarts.js"></script>
<script src="assets/js/index1.js"></script>

<!--othercharts js-->
<script src="assets/js/othercharts.js"></script>

<!-- Charts Plugin -->
<script src="assets/plugins/chart/Chart.bundle.js"></script>
<script src="assets/plugins/chart/utils.js"></script>

<!--Jquery.knob js-->
<script src="assets/plugins/othercharts/jquery.knob.js"></script>

<!--Amcharts Charts Plugin -->
<script src="assets/plugins/am-chart/amcharts.js"></script>
<script src="assets/plugins/am-chart/serial.js"></script>

<!-- peitychart -->
<script src="assets/plugins/peitychart/jquery.peity.min.js"></script>
<script src="assets/plugins/peitychart/peitychart.init.js"></script>

<!-- Fullside-menu Js-->
<script src="assets/plugins/toggle-sidebar/sidemenu.js"></script>

<!-- Custom scroll bar Js-->
<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Custom Js-->
<script src="assets/js/custom.js"></script>
@section('footerSection')

@show
