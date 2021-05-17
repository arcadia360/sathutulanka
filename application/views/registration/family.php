<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
        <h3 class="text-center text-inverse title">Family</h3>
        <div class="row">
          <div class="container">
            <button class="btn btn-info" style="width: 150px; margin-bottom:20px; float:right;" type="button" id="btnSkip">Skip this step &nbsp; <i class="fas fa-forward"></i></button>
          </div>
        </div>

        <form method="post" action="<?= base_url('Registration/addFamilyDetails') ?>" id="addFamilyDetails">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Family Location</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">

                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Type</label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input name="Family-Type" id="familyTypeJoin" type="radio" class="custom-control-input" value="Join">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Join</span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input name="Family-Type" id="familyTypeNotJoin" type="radio" class="custom-control-input" value="Not join">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Not join</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Values</label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="Traditional" name="Family-Values" type="radio" class="custom-control-input" value="Traditional">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Traditional</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="TraditionalAndModern" name="Family-Values" type="radio" class="custom-control-input" value="Mix of Traditional and Modern">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Mix of Traditional and Modern</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="Modern" name="Family-Values" type="radio" class="custom-control-input" value="Modern">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Modern</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Family Class</label>
              </div>
            </div>
            <div class="col-6">
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

          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Culture</label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input name="Family-Culture" type="radio" class="custom-control-input" value="Urban">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Urban</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input name="Family-Culture" type="radio" class="custom-control-input" value="Sub Urban">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Sub Urban</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input name="Family-Culture" type="radio" class="custom-control-input" value="Rural">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Rural</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Father Status</label>
              </div>
            </div>
            <div class="col-6">
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

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Mother Status</label>
              </div>
            </div>
            <div class="col-6">
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

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Add Family Details</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="Add-Family-Details" rows="5" name="Add-Family-Details"></textarea>
              </div>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
              <button class="btn btn-info" style="width: 150px;" id="btnBack" type="button">BACK</button>
            </div>
            <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
              <button class="btn btn-info" style="width: 150px;" type="button" id="btnSubmit">CONTINUE</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Container Area End -->
</div>

<script>
  $(function() {

    $('#btnSubmit').click(function() {

      let isFamilyTypeSelected = $("input[name=Family-Type]").is(":checked");
      let isFamilyValuesSelected = $("input[name=Family-Values]").is(":checked");
      let isFamilyCultureSelected = $("input[name=Family-Culture]").is(":checked");

      if ($('#district').val() == 0) {
        toastr["error"]("Please select district");
        $("#district").focus();
      } else if (!isFamilyTypeSelected) {
        toastr["error"]("Please select family type");
      } else if (!isFamilyValuesSelected) {
        toastr["error"]("Please select family values");
      } else if ($('#Family-Class').val() == 0) {
        toastr["error"]("Please select family class");
      } else if (!isFamilyCultureSelected) {
        toastr["error"]("Please select family culture");
      } else if ($('#Father-Status').val() == 0) {
        toastr["error"]("Please select father status");
        $("#Father-Status").focus();
      } else if ($('#Mother-Status').val() == 0) {
        toastr["error"]("Please select mother status");
        $("#mother-Status").focus();
      } else if ($('#Add-Family-Details').val() == "") {
        toastr["error"]("Please add family details");
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