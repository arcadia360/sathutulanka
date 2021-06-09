<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title"><?= lang('lifeStyle') ?></h3>
  <form method="post" action="<?= base_url('Registration/addLifeStyleDetails') ?>" id="addLifeStyleDetails">


    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('diet') ?></label>
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
    <hr>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('drink') ?></label>
        <div class="row">
          <div class="col-3">
            <center>
              <input id="drinkNo" name="drink" type="radio" class="" value="No">
              <br>
              <span class="custom-control-description"><?= lang('no') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="drinkYes" name="drink" type="radio" class="" value="Yes">
              <br>
              <span class="custom-control-description"><?= lang('yes') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="drinkDuringFunction" name="drink" type="radio" class="" value="During Function">
              <br>
              <span class="custom-control-description"><?= lang('duringFunction') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="drinkStopped" name="drink" type="radio" class="" value="Stopped">
              <br>
              <span class="custom-control-description"><?= lang('stopped') ?></span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('smoke') ?></label>
        <div class="row">
          <div class="col-3">
            <center>
              <input id="smokeNo" name="smoke" type="radio" class="" value="no">
              <br>
              <span class="custom-control-description"><?= lang('no') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="smokeYes" name="smoke" type="radio" class="" value="Yes">
              <br>
              <span class="custom-control-description"><?= lang('yes') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="smokeDuringFunction" name="smoke" type="radio" class="" value="During Function">
              <br>
              <span class="custom-control-description"><?= lang('duringFunction') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="smokeStopped" name="smoke" type="radio" class="" value="Stopped">
              <br>
              <span class="custom-control-description"><?= lang('stopped') ?></span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr>
    <div class="row languageSpeak">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Languages Can Speak</label>
        <div class="row">
          <div class="col-3">
            <div class="form-group">
              <center>
                <input type="checkbox" class=" language" name="language[]" value="sinhala" id="sinhala" required>
                <br>
                <span class="custom-control-description"><?= lang('sinhala') ?></span>
              </center>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <center>
                <input type="checkbox" class=" language" name="language[]" value="tamil" id="tamil" required>
                <br>
                <span class="custom-control-description"><?= lang('tamil') ?></span>
              </center>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <center>
                <input type="checkbox" class=" language" name="language[]" value="english" id="english" required>
                <br>
                <span class="custom-control-description"><?= lang('english') ?></span>
              </center>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <center>
                <input type="checkbox" class=" language" name="language[]" value="other" id="other" required>
                <br>
                <span class="custom-control-description"><?= lang('other') ?></span>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('dressAndMakeup') ?></label>
        <div class="row">
          <div class="col-3">
            <center>
              <input id="dressAndMakeupTraditional" name="dressAndMakeup" type="radio" class="" value="Traditional">
              <br>
              <span class="custom-control-description"><?= lang('traditional') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="dressAndMakeupModern" name="dressAndMakeup" type="radio" class="" value="Moder">
              <br>
              <span class="custom-control-description"><?= lang('modern') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="dressAndMakeupMixofTraditionalAndModern" name="dressAndMakeup" type="radio" class="" value="Mix of Traditional and modern">
              <br>
              <span class="custom-control-description"><?= lang('mixofTraditionalAndModern') ?></span>
            </center>
          </div>
          <div class="col-3">
            <center>
              <input id="dressAndMakeupShortDresses" name="dressAndMakeup" type="radio" class="" value="Short Dresses">
              <br>
              <span class="custom-control-description"><?= lang('shortDresses') ?></span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('usedToTravel') ?></label>
        <div class="row">
          <div class="col-4">
            <center>
              <input id="usedToTravelPublic" name="usedToTravel" type="radio" class="" value="Public">
              <br>
              <span class="custom-control-description"><?= lang('public') ?></span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="usedToTravelPrivate" name="usedToTravel" type="radio" class="" value="Private">
              <br>
              <span class="custom-control-description"><?= lang('private') ?></span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="usedToTravelPublicAndPrivate" name="usedToTravel" type="radio" class="" value="Public and Private">
              <br>
              <span class="custom-control-description"><?= lang('publicAndPrivate') ?></span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('CallTtParents') ?> (Your and Partner) </label>
        <div class="row">
          <div class="col-6">
            <center>
              <input id="CallTtParentsTraditional" name="CallTtParents" type="radio" class="" value="Traditional (Thaththa/ Amma/ Appachchi)">
              <br>
              <span class="custom-control-description"><?= lang('traditional') . " " . lang('CallTtParentsT') ?></span>
            </center>
          </div>
          <div class="col-6">
            <center>
              <input id="CallTtParentsModern" name="CallTtParents" type="radio" class="" value="Modern (Daddy/ Mammy/ Uncle / Aunt)">
              <br>
              <span class="custom-control-description"><?= lang('modern') . " " . lang('CallTtParentsM') ?></span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('customs') ?></label>
        <div class="row">
          <div class="col-4">
            <center>
              <input id="customsRespect" name="customs" type="radio" class="" value="Respect">
              <br>
              <span class="custom-control-description"><?= lang('respect') ?></span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="customsLittleRespect" name="customs" type="radio" class="" value="Little Respect">
              <br>
              <span class="custom-control-description"><?= lang('littleRespect') ?></span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="customsNoRespect" name="customs" type="radio" class="" value="No Respect">
              <br>
              <span class="custom-control-description"><?= lang('noRespect') ?></span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr>
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('LiveIn') ?></label>
        <div class="row">
          <div class="col-4">
            <center>
              <input id="LiveInNormalHouse" name="LiveIn" type="radio" class="" value="Normal House">
              <br>
              <span class="custom-control-description"><?= lang('normalHouse') ?></span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="LiveInSemiluxuryHouse" name="LiveIn" type="radio" class="" value="Semi luxury House">
              <br>
              <span class="custom-control-description"><?= lang('semiLuxuryHouse') ?></span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="LiveInLuxuryHouse" name="LiveIn" type="radio" class="" value="Luxury House">
              <br>
              <span class="custom-control-description"><?= lang('luxuryHouse') ?></span>
            </center>
          </div>
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

    var Member = function() {
      this.MemberID = 0;
    }
    var model = new Member();
    model.MemberID = (<?= $this->session->userdata('member_id') ?>);

    ajaxCall('registration/getMemberData', model, function(response) {

      if (response.vcDiet != null) {
        $("#diet").val(response.vcDiet);
        var drinkType = (response.vcDrink);

        if (drinkType == "No") {
          document.getElementById("drinkNo").checked = true;
        } else if (drinkType == "Yes") {
          document.getElementById("drinkYes").checked = true;
        } else if (drinkType == "During Function") {
          document.getElementById("drinkDuringFunction").checked = true;
        } else if (drinkType == "Stopped") {
          document.getElementById("drinkStopped").checked = true;
        }
        var smokeType = (response.vcSmoke);

        if (smokeType == "No") {
          document.getElementById("smokeNo").checked = true;
        } else if (smokeType == "Yes") {
          document.getElementById("smokeYes").checked = true;
        } else if (smokeType == "During Function") {
          document.getElementById("smokeDuringFunction").checked = true;
        } else if (smokeType == "Stopped") {
          document.getElementById("smokeStopped").checked = true;
        }

        var dressAndMakeupType = (response.vcDressAndMakeup);
        if (dressAndMakeupType == "Traditional") {
          document.getElementById("dressAndMakeupTraditional").checked = true;
        } else if (dressAndMakeupType == "Moder") {
          document.getElementById("dressAndMakeupModern").checked = true;
        } else if (dressAndMakeupType == "Mix of Traditional and modern") {
          document.getElementById("dressAndMakeupMixofTraditionalAndModern").checked = true;
        } else if (dressAndMakeupType == "Short Dresses") {
          document.getElementById("dressAndMakeupShortDresses").checked = true;
        }

        var usedToTravelType = (response.vcUsedToTravel);
        if (usedToTravelType == "Public") {
          document.getElementById("usedToTravelPublic").checked = true;
        } else if (usedToTravelType == "Private") {
          document.getElementById("usedToTravelPrivate").checked = true;
        } else if (usedToTravelType == "Public and Private") {
          document.getElementById("usedToTravelPublicAndPrivate").checked = true;
        }


        if (response.vcCalToParent == "Traditional (Thaththa/ Amma/ Appachchi)") {
          document.getElementById("CallTtParentsTraditional").checked = true;
        } else if (response.vcCalToParent == "Modern (Daddy/ Mammy/ Uncle / Aunt)") {
          document.getElementById("CallTtParentsModern").checked = true;
        }

        if (response.vcCustoms == "Respect") {
          document.getElementById("customsRespect").checked = true;
        } else if (response.vcCustoms == "Little Respect") {
          document.getElementById("customsLittleRespect").checked = true;
        } else if (response.vcCustoms == "No Respect") {
          document.getElementById("customsNoRespect").checked = true;
        }


        if (response.vcLiveIn == "Normal House") {
          document.getElementById("LiveInNormalHouse").checked = true;
        } else if (response.vcLiveIn == "Semi luxury House") {
          document.getElementById("LiveInSemiluxuryHouse").checked = true;
        } else if (response.vcLiveIn == "Luxury House") {
          document.getElementById("LiveInLuxuryHouse").checked = true;
        }

      }

    });

    var model = new Member();
    model.MemberID = (<?= $this->session->userdata('member_id') ?>);
    ajaxCall('registration/getMemberWiseLanguageSpeak', model, function(response) {

      for (let index = 0; index < response.length; index++) {
        if (response[index].vcLanguage == "sinhala") {
          document.getElementById("sinhala").checked = true;
        } else if (response[index].vcLanguage == "tamil") {
          document.getElementById("tamil").checked = true;
        } else if (response[index].vcLanguage == "english") {
          document.getElementById("english").checked = true;
        } else if (response[index].vcLanguage == "other") {
          document.getElementById("other").checked = true;
        }
      }

    });

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
        toastr["error"]("Please select diet !");
        $("#diet").focus();
      } else if (!isDrinkSelected) {
        toastr["error"]("Please select drink !");
      } else if (!isSmokeSelected) {
        toastr["error"]("Please select smoke !");
      } else if (!isSmokeSelected) {
        toastr["error"]("Please select smoke");
      } else if ($('.language[type=checkbox]:checked').length == 0) {
        toastr["error"]("Please select Languages,Speak !");
      } else if (!isDressAndMakeupSelected) {
        toastr["error"]("Please select dress and makeup !");
      } else if (!isusedToTravelSelected) {
        toastr["error"]("Please select used to travel !");
      } else if (!isCallTtParentsSelected) {
        toastr["error"]("Please select call to parent !");
      } else if (!iscustomsSelected) {
        toastr["error"]("Please select customs !");
      } else if (!isLiveInSelected) {
        toastr["error"]("Please select live in !");
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
                title: 'Life style details saved successfully !',
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