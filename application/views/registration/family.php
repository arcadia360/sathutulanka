<div class="offset-lg-3 col-lg-6 main-section">
  <!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
  <h3 class="text-center text-inverse title">Family</h3>
  <div class="row">
    <div class="container">
      <button class="btn btn-info float-right" type="button" id="btnSkip">Skip this step &nbsp; <i class="fas fa-forward"></i></button>
    </div>
  </div>
  <br>
  <form method="post" action="<?= base_url('Registration/addFamilyDetails') ?>" id="addFamilyDetails">
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Family Location</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="district" name="district">
            <!-- Generated Area -->
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Family Type</label>
        <div class="row">
          <div class="col-4">
            <center>
              <input name="Family-Type" id="familyTypeJoin" type="radio" value="Join">
              <br>
              <span class="custom-control-description">Join</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input name="Family-Type" id="familyTypeNotJoin" type="radio" value="Not join">
              <br>
              <span class="custom-control-description">Not join</span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Family Values</label>
        <div class="row">
          <div class="col-4">
            <center>
              <input id="Traditional" name="Family-Values" type="radio" value="Traditional">
              <br>
              <span class="custom-control-description">Traditional</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="TraditionalAndModern" name="Family-Values" type="radio" value="Mix of Traditional and Modern">
              <br>
              <span class="custom-control-description">Mix of Traditional and Modern</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="Modern" name="Family-Values" type="radio" value="Modern">
              <br>
              <span class="custom-control-description">Modern</span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Family Class</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="Family-Class" name="Family-Class">
            <option value="0"><?= lang('select') ?></option>
            <option value="Affluent">Affluent</option>
            <option value="Upper Middle Class">Upper Middle Class</option>
            <option value="Middle Class">Middle Class</option>
            <option value="Lower Middle Class">Lower Middle Class</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Family Culture</label>
        <div class="row">
          <div class="col-4">
            <center>
              <input name="Family-Culture" id="Culture1" type="radio" value="Urban">
              <br>
              <span class="custom-control-description">Urban</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input name="Family-Culture" id="Culture2" type="radio" value="Sub Urban">
              <br>
              <span class="custom-control-description">Sub Urban</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input name="Family-Culture" id="Culture3" type="radio" value="Rural">
              <br>
              <span class="custom-control-description">Rural</span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Father Status</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="Father-Status" name="Father-Status">
            <option value="0"><?= lang('select') ?></option>
            <option value="Employed">Employed</option>
            <option value="Business">Business</option>
            <option value="Retired">Retired</option>
            <option value="Not Employed">Not Employed</option>
            <option value="Passed away">Passed away</option>
            <option value="Seperated">Seperated</option>
            <option value="Sick">Sick</option>
            <option value="Details in Writing">Details in Writing</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Mother Status</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="Mother-Status" name="Mother-Status">
            <option value="0"><?= lang('select') ?></option>
            <option value="Employed">Employed</option>
            <option value="Business">Business</option>
            <option value="Retired">Retired</option>
            <option value="Not Employed">Not Employed</option>
            <option value="Passed away">Passed away</option>
            <option value="Seperated">Seperated</option>
            <option value="Sick">Sick</option>
            <option value="Details in Writing">Details in Writing</option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Add Family Details</label>

        <div class="form-group">
          <textarea class="form-control" id="Add-Family-Details" rows="5" name="Add-Family-Details"></textarea>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
        <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i></button>
      </div>
    </div>
  </form>
</div>

<script>
  $(function() {

    FillFamilyData();

    function FillFamilyData() {
      var Member = function() {
        this.MemberID = 0;
      }
      var model = new Member();
      model.MemberID = (<?= $this->session->userdata('member_id') ?>);

      ajaxCall('registration/getMemberData', model, function(response) {
        if (response.intFamilyLocationID != null) {
          $("#district").val(response.intFamilyLocationID);
          var FamilyType = (response.vcFamilyType);
          if (FamilyType == "Join") {
            $("#familyTypeJoin").prop("checked", true);
          } else if (FamilyType == "Not join") {
            $("#familyTypeNotJoin").prop("checked", true);
          }
          var FamilyValues = (response.vcFamilyValues);
          if (FamilyValues == "Traditional") {
            $("#Traditional").prop("checked", true);
          } else if (FamilyType == "Mix of Traditional and Modern") {
            $("#TraditionalAndModern").prop("checked", true);
          }
          $("#Family-Class").val(response.vcFamilyClass);
          var FamilyCulture = (response.vcFamilyCulture);
          if (FamilyCulture == "Urban") {
            $("#Culture1").prop("checked", true);
          } else if (FamilyCulture == "Sub Urban") {
            $("#Culture2").prop("checked", true);
          } else if (FamilyCulture == "Rural") {
            $("#Culture3").prop("checked", true);
          }
          $("#Father-Status").val(response.vcFatherStatus);
          $("#Mother-Status").val(response.vcMotherStatus);
          $("#Add-Family-Details").val(response.vcFamilyDetails);

        }
      });
    }

    $('#btnSubmit').click(function() {
      let isFamilyTypeSelected = $("input[name=Family-Type]").is(":checked");
      let isFamilyValuesSelected = $("input[name=Family-Values]").is(":checked");
      let isFamilyCultureSelected = $("input[name=Family-Culture]").is(":checked");

      if ($('#district').val() == 0) {
        toastr["error"]("Please select district !");
        $("#district").focus();
      } else if (!isFamilyTypeSelected) {
        toastr["error"]("Please select family type !");
      } else if (!isFamilyValuesSelected) {
        toastr["error"]("Please select family values !");
      } else if ($('#Family-Class').val() == 0) {
        toastr["error"]("Please select family class !");
        $("#Family-Class").focus();
      } else if (!isFamilyCultureSelected) {
        toastr["error"]("Please select family culture !");
      } else if ($('#Father-Status').val() == 0) {
        toastr["error"]("Please select father status !");
        $("#Father-Status").focus();
      } else if ($('#Mother-Status').val() == 0) {
        toastr["error"]("Please select mother status !");
        $("#mother-Status").focus();
      } else if ($('#Add-Family-Details').val() == "") {
        toastr["error"]("Please add family details !");
        $("#Add-Family-Details").focus();
      } else {
        var form = $("#addFamilyDetails");
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              Swal.fire({
                icon: 'success',
                title: 'Family details saved successfully!',
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = "<?= base_url('Registration/afterMarriage') ?>";
                }
              })
            } else {
              if (response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#" + index);
                  id.closest('.form-group')
                    .removeClass('has-error')
                    .removeClass('has-success')
                    .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  id.after(value);
                });
              } else {
                toastr["error"](response.messages);
                $(button).prop('disabled', false);
              }
            }
          }
        });
      }
    });

    $('#btnSkip').click(function() {
      <?php $session_data = array('no_of_submitted_form' => 10);
      $this->session->set_userdata($session_data); ?>

      window.location.href = "<?php echo base_url('Registration/afterMarriage') ?>";
    });

    loadDistricts();
    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/personalAssets') ?>";
    });

    function loadDistricts() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/loadDistricts',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#district').html(data);;
            $('#district').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') . ' Connection Err' ?>");
        }
      });
    }
  });
</script>