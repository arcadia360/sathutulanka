<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title"><?= lang('lifeStyle') ?></h3>
        <hr>
        <form method="post" action="<?= base_url('Registration/addLifeStyleDetails') ?>" id="addLifeStyleDetails">


          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('diet') ?></label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="diet" name="diet">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="veg"><?= lang('veg') ?></option>
                  <option value="Non Veg"><?= lang('NonVeg') ?></option>
                  <option value="Occasionally Non Veg"><?= lang('OccasionallyNonVeg') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('drink') ?></label>
              <div class="row">
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="drink" name="drink" type="radio" class="custom-control-input" value="No">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('no') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="drink" name="drink" type="radio" class="custom-control-input" value="Yes">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('yes') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="drink" name="drink" type="radio" class="custom-control-input" value="During Function">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('duringFunction') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="drink" name="drink" type="radio" class="custom-control-input" value="Stopped">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('stopped') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('smoke') ?></label>
              <div class="row">
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="smoke" name="smoke" type="radio" class="custom-control-input" value="no">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('no') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="smoke" name="smoke" type="radio" class="custom-control-input" value="Yes">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('yes') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="smoke" name="smoke" type="radio" class="custom-control-input" value="During Function">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('duringFunction') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="smoke" name="smoke" type="radio" class="custom-control-input" value="Stopped">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('stopped') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row languageSpeak">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('languagesSpeak') ?></label>
              <div class="row">
                <div class="col-3">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input language" name="language[]" value="sinhala" required>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><?= lang('sinhala') ?></span>
                    </label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input language" name="language[]" value="tamil" required>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><?= lang('tamil') ?></span>
                    </label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input language" name="language[]" value="english" required>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><?= lang('english') ?></span>
                    </label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input language" name="language[]" value="other" required>
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><?= lang('other') ?></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('dressAndMakeup') ?></label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="dressAndMakeup" name="dressAndMakeup" type="radio" class="custom-control-input" value="Traditional">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('traditional') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="dressAndMakeup" name="dressAndMakeup" type="radio" class="custom-control-input" value="Moder">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('modern') ?></span>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="dressAndMakeup" name="dressAndMakeup" type="radio" class="custom-control-input" value="Mix of Traditional and modern">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('mixofTraditionalAndModern') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="dressAndMakeup" name="dressAndMakeup" type="radio" class="custom-control-input" value="Short Dresses">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('shortDresses') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('usedToTravel') ?></label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="usedToTravel" name="usedToTravel" type="radio" class="custom-control-input" value="Public">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('public') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="usedToTravel" name="usedToTravel" type="radio" class="custom-control-input" value="Private">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('private') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="usedToTravel" name="usedToTravel" type="radio" class="custom-control-input" value="Public and Private">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('publicAndPrivate') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('CallTtParents') ?></label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="CallTtParents" name="CallTtParents" type="radio" class="custom-control-input" value="Traditional (Thaththa/ Amma/ Appachchi)">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('traditional') . " " . lang('CallTtParentsT') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="CallTtParents" name="CallTtParents" type="radio" class="custom-control-input" value="Modern (Daddy/ Mammy/ Uncle / Aunt)">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('modern') . " " . lang('CallTtParentsM') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('customs') ?></label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="customs" name="customs" type="radio" class="custom-control-input" value="Respect">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('respect') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="customs" name="customs" type="radio" class="custom-control-input" value="Little Respect">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('littleRespect') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="customs" name="customs" type="radio" class="custom-control-input" value="No Respect">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('noRespect') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('LiveIn') ?></label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveIn" name="LiveIn" type="radio" class="custom-control-input" value="Normal House">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('normalHouse') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveIn" name="LiveIn" type="radio" class="custom-control-input" value="Semi luxury House">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('semiLuxuryHouse') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveIn" name="LiveIn" type="radio" class="custom-control-input" value="Luxury House">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('luxuryHouse') ?></span>
                  </label>
                </div>
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

    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/background') ?>";
    });

    $('#btnSubmit').click(function() {

      var isDrinkSelected = $("input[name=drink]").is(":checked");
      var isSmokeSelected = $("input[name=smoke]").is(":checked");
      var isDressAndMakeupSelected = $("input[name=dressAndMakeup]").is(":checked");
      var isusedToTravelSelected = $("input[name=usedToTravel]").is(":checked");
      var isCallTtParentsSelected = $("input[name=CallTtParents]").is(":checked");
      var iscustomsSelected = $("input[name=customs]").is(":checked");
      var isLiveInSelected = $("input[name=LiveIn]").is(":checked");


      if ($('#diet').val() == 0) {
        toastr["error"]("Please select diet");
        $("#diet").focus();
      } else if (!isDrinkSelected) {
        toastr["error"]("Please select drink");
      } else if (!isSmokeSelected) {
        toastr["error"]("Please select smoke");
      } else if (!isSmokeSelected) {
        toastr["error"]("Please select smoke");
      } else if ($('.language[type=checkbox]:checked').length == 0) {
        toastr["error"]("Please select Languages,Speak ");
      } else if (!isDressAndMakeupSelected) {
        toastr["error"]("Please select dress and makeup");
      } else if (!isusedToTravelSelected) {
        toastr["error"]("Please select used to travel");
      } else if (!isCallTtParentsSelected) {
        toastr["error"]("Please select call to parent");
      } else if (!iscustomsSelected) {
        toastr["error"]("Please select customs");
      } else if (!isLiveInSelected) {
        toastr["error"]("Please select live in");
      } else {

        var form = $("#addLifeStyleDetails");
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              Swal.fire({
                icon: 'success',
                title: 'Life style details saved successfully!',
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = "<?= base_url('Registration/WhoAmI') ?>";
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
          },
          error: function() {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Internal Server Error! Please contact system administrator.',
            })
          }
        });
      }
    });

  });
</script>