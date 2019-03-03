<script>
$(document).on("click", ".viewIpdPatientDetail", function () {
     var id = $(this).data('id');
   $.post( "viewIpdPatientDetail.php", { id: id})
    .done(function( data ) {
    $("#patientInfo").html(data);
    });
});

$(document).on("click", ".addIpdPatientTreatment", function () {
     var id = $(this).data('id');
   $.post( "addIpdPatientTreatment.php", { id: id})
    .done(function( data ) {
    $("#patientTreatment").html(data);
    });
});

function suggestPatient() {
  var min_length = 0; // min caracters to display the autocomplete
  var keyword = $('#regNum').val();
  if (keyword.length >= min_length) {
    $.ajax({
      url: 'autosuggestPatient.php',
      type: 'POST',
      data: {keyword:keyword},
      success:function(data){
        $('#showPatientDetails').show();
        $('#showPatientDetails').html(data);
      }
    });
  } else {
    $('#showPatientDetails').hide();
  }
}

// set_item : this function will be executed when we select an item
function set_item(patientId) {
  $('#regNum').val(patientId);
  $('#showPatientDetails').hide();
  $.ajax({
      url: 'opdRegDate.php',
      type: 'POST',
      data: {patientId:patientId},
      success:function(data){
        $('#opdRegDate').html(data);
      }
    });

  $.ajax({
      url: 'autoPatientName.php',
      type: 'POST',
      data: {patientId:patientId},
      success:function(data){
        $('#filledPatientNameForm').html(data);
      }
    });

  $.ajax({
      url: 'autoOtherFiledsPatient.php',
      type: 'POST',
      data: {patientId:patientId},
      success:function(data){
        $('#filledPatientDetailsForm').html(data);
        $('#AddIpdBtn').show();
      }
    });
}
function listclosesugg()
{
  $('#showPatientDetails').hide();
}
function checkRoom(bedNum)
{
  var wardName = document.getElementById('wardName').value;
  if(wardName!='')
  {
    $.ajax({
      url: 'checkRoom.php',
      type: 'POST',
      data: {bedNum:bedNum, wardName:wardName},
      success:function(data){
        $('#checkRoom').html(data);
      }
    });
  }
}

$(document).on("click", ".updatePatientTreatment", function () {
     var id = $(this).data('id');
    $.post( "updateIpdPatientTreatment.php", { id: id})
    .done(function( data ) {
    $('#viewDetail').modal('hide');
    $("#updateIpdPatientTreatment").html(data);
    });
});

$(document).on("click", ".dischargeDetail", function () {
    var id = $(this).data('id');
    $.post( "dischargeDetail.php", { id: id})
    .done(function( data ) {
    $("#dischargeDetailForm").html(data);
    });
});
</script>