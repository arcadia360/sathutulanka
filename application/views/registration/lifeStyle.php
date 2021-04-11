<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title"><?= lang('lifeStyle') ?></h3>
        <hr>
        <form class="container" id="needs-validation" novalidate>

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
                  <option value="NonVeg"><?= lang('NonVeg') ?></option>
                  <option value="OccasionallyNonVeg"><?= lang('OccasionallyNonVeg') ?></option>
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
                    <input id="drink" name="drink" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('no') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="drink" name="drink" type="radio" class="custom-control-input" value="2">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('yes') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="drink" name="drink" type="radio" class="custom-control-input" value="3">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('duringFunction') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="drink" name="drink" type="radio" class="custom-control-input" value="3">
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
                    <input id="smoke" name="smoke" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('no') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="smoke" name="smoke" type="radio" class="custom-control-input" value="2">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('yes') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="smoke" name="smoke" type="radio" class="custom-control-input" value="3">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('duringFunction') ?></span>
                  </label>
                </div>
                <div class="col-3">
                  <label class="custom-control custom-radio">
                    <input id="smoke" name="smoke" type="radio" class="custom-control-input" value="3">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('stopped') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('languagesSpeak') ?></label>
              <div class="row">
                <div class="col-3">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" required name="sinhala" id="sinhala">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><?= lang('sinhala') ?></span>
                    </label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" required name="tamil" id="tamil">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><?= lang('tamil') ?></span>
                    </label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" required name="english" id="english">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description"><?= lang('english') ?></span>
                    </label>
                  </div>
                </div>
                <div class="col-3">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" required name="other" id="other">
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
                    <input id="dressAndMakeup" name="dressAndMakeup" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('traditional') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="dressAndMakeup" name="dressAndMakeup" type="radio" class="custom-control-input" value="2">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('modern') ?></span>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="dressAndMakeup" name="dressAndMakeup" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('mixofTraditionalAndModern') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="dressAndMakeup" name="dressAndMakeup" type="radio" class="custom-control-input" value="2">
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
                    <input id="usedToTravel" name="usedToTravel" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('public') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="usedToTravel" name="usedToTravel" type="radio" class="custom-control-input" value="2">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('private') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="usedToTravel" name="usedToTravel" type="radio" class="custom-control-input" value="3">
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
                    <input id="CallTtParents" name="CallTtParents" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('traditional') . " " . lang('CallTtParentsT') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="CallTtParents" name="CallTtParents" type="radio" class="custom-control-input" value="2">
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
                    <input id="customs" name="customs" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('respect') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="customs" name="customs" type="radio" class="custom-control-input" value="2">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('littleRespect') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="customs" name="customs" type="radio" class="custom-control-input" value="3">
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
                    <input id="LiveIn" name="LiveIn" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('normalHouse') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveIn" name="LiveIn" type="radio" class="custom-control-input" value="2">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('semiLuxuryHouse') ?></span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveIn" name="LiveIn" type="radio" class="custom-control-input" value="3">
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
              <button class="btn btn-info" style="width: 150px;" id="btnBack" type="button">Back</button>
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
      window.location.href = "<?php echo base_url('Registration/WhoAmI') ?>";
    });

  });
</script>