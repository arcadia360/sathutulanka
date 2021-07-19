<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title"><?= lang('lifeStyle') ?></h3>
  <form method="post" action="<?= base_url('Registration/addLifeStyleDetails') ?>" id="addLifeStyleDetails">


    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('diet') ?></label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="diet" name="diet">
            <option value="0"><?= lang('select') ?></option>
            <?php foreach ($diet_data as $k => $v) { ?>
              <option value="<?= $v['intDietID'] ?>"><?= $v['vcDietName'] ?></option>
            <?php } ?>
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
              <div class="radio icheck-midnightblue icheck-align">
                <input type="radio" name="drink" value="No" id="drinkNo">
                <label for="drinkNo"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('no') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input type="radio" name="drink" value="Yes" id="drinkYes">
                <label for="drinkYes"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('yes') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input type="radio" name="drink" value="During Function" id="drinkDuringFunction">
                <label for="drinkDuringFunction"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('duringFunction') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input type="radio" name="drink" value="Stopped" id="drinkStopped">
                <label for="drinkStopped"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('stopped') ?></span></div>
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
              <div class="radio icheck-midnightblue icheck-align">
                <input type="radio" name="smoke" value="no" id="smokeNo">
                <label for="smokeNo"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('no') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input type="radio" name="smoke" value="Yes" id="smokeYes">
                <label for="smokeYes"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('yes') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input type="radio" name="smoke" value="During Function" id="smokeDuringFunction">
                <label for="smokeDuringFunction"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('duringFunction') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input type="radio" name="smoke" value="Stopped" id="smokeStopped">
                <label for="smokeStopped"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('stopped') ?></span></div>
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
                <div class="checkbox icheck-wetasphalt icheck-align">
                  <input type="checkbox" class=" language" name="language[]" value="sinhala" id="sinhala" />
                  <label for="sinhala"></label>
                </div>
                <div> <span class="custom-control-description"><?= lang('sinhala') ?></span></div>
              </center>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <center>
                <div class="checkbox icheck-wetasphalt icheck-align">
                  <input type="checkbox" class=" language" name="language[]" value="tamil" id="tamil" />
                  <label for="tamil"></label>
                </div>
                <div> <span class="custom-control-description"><?= lang('tamil') ?></span></div>
              </center>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <center>
                <div class="checkbox icheck-wetasphalt icheck-align">
                  <input type="checkbox" class=" language" name="language[]" value="english" id="english" />
                  <label for="english"></label>
                </div>
                <div> <span class="custom-control-description"><?= lang('english') ?></span></div>
              </center>
            </div>
          </div>
          <div class="col-3">
            <div class="form-group">
              <center>
                <div class="checkbox icheck-wetasphalt icheck-align">
                  <input type="checkbox" class=" language" name="language[]" value="other" id="other" />
                  <label for="other"></label>
                </div>
                <div> <span class="custom-control-description"><?= lang('other') ?></span></div>
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
              <!-- <input id="dressAndMakeupTraditional" name="dressAndMakeup" type="radio" class="" value="Traditional">
              <br>
              <label for="dressAndMakeupTraditional" class="custom-control-description"><?= lang('traditional') ?></label> -->

              <div class="radio icheck-midnightblue icheck-align">
                <input id="dressAndMakeupTraditional" name="dressAndMakeup" type="radio" class="" value="Traditional">
                <label for="dressAndMakeupTraditional"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('traditional') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="dressAndMakeupModern" name="dressAndMakeup" type="radio" class="" value="Modern">
                <label for="dressAndMakeupModern"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('modern') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="dressAndMakeupMixofTraditionalAndModern" name="dressAndMakeup" type="radio" class="" value="Mix of Traditional and modern">
                <label for="dressAndMakeupMixofTraditionalAndModern"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('mixofTraditionalAndModern') ?></span></div>
            </center>
          </div>
          <div class="col-3">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="dressAndMakeupShortDresses" name="dressAndMakeup" type="radio" class="" value="Short Dresses">
                <label for="dressAndMakeupShortDresses"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('shortDresses') ?></span></div>
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
              <div class="radio icheck-midnightblue icheck-align">
                <input id="usedToTravelPublic" name="usedToTravel" type="radio" class="" value="Public">
                <label for="usedToTravelPublic"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('public') ?></span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="usedToTravelPrivate" name="usedToTravel" type="radio" class="" value="Private">
                <label for="usedToTravelPrivate"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('private') ?></span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="usedToTravelPublicAndPrivate" name="usedToTravel" type="radio" class="" value="Public and Private">
                <label for="usedToTravelPublicAndPrivate"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('publicAndPrivate') ?></span></div>
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
              <div class="radio icheck-midnightblue icheck-align">
                <input id="CallTtParentsTraditional" name="CallTtParents" type="radio" class="" value="Traditional (Thaththa/ Amma/ Appachchi)">
                <label for="CallTtParentsTraditional"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('traditional') . " " . lang('CallTtParentsT') ?></span></div>
            </center>
          </div>
          <div class="col-6">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="CallTtParentsModern" name="CallTtParents" type="radio" class="" value="Modern (Daddy/ Mammy/ Uncle / Aunt)">
                <label for="CallTtParentsModern"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('modern') . " " . lang('CallTtParentsM') ?>/span></div>
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
              <div class="radio icheck-midnightblue icheck-align">
                <input id="customsRespect" name="customs" type="radio" class="" value="Respect">
                <label for="customsRespect"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('respect') ?></span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="customsLittleRespect" name="customs" type="radio" class="" value="Little Respect">
                <label for="customsLittleRespect"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('littleRespect') ?></span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="customsNoRespect" name="customs" type="radio" class="" value="No Respect">
                <label for="customsNoRespect"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('noRespect') ?></span></div>
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
              <div class="radio icheck-midnightblue icheck-align">
                <input id="LiveInNormalHouse" name="LiveIn" type="radio" class="" value="Normal House">
                <label for="LiveInNormalHouse"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('normalHouse') ?></span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="LiveInSemiluxuryHouse" name="LiveIn" type="radio" class="" value="Semi luxury House">
                <label for="LiveInSemiluxuryHouse"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('semiLuxuryHouse') ?></span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align">
                <input id="LiveInLuxuryHouse" name="LiveIn" type="radio" class="" value="Luxury House">
                <label for="LiveInLuxuryHouse"></label>
              </div>
              <div> <span class="custom-control-description"><?= lang('luxuryHouse') ?></span></div>
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
  var Member = function() {
    this.MemberID = 0;
  }
  var model = new Member();
  model.MemberID = (<?= $this->session->userdata('member_id') ?>);

  var model = new Member();
  model.MemberID = (<?= $this->session->userdata('member_id') ?>);


  let navigateBack = "<?php echo base_url('Registration/background') ?>";
  let navigateTo = "<?= base_url('Registration/WhoAmI') ?>";
</script>
<script src="<?= base_url('resources/js/registration_form/lifeStyle.js') ?>"></script>