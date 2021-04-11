<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title"><?= lang('background') ?></h3>
        <hr>
        <form class="container" id="needs-validation" novalidate>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('motherTongue') ?></label>
                <select class="custom-select d-block form-control" id="motherTongue" name="motherTongue">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="sinhala"><?= lang('sinhala') ?></option>
                  <option value="tamil"><?= lang('tamil') ?></option>
                  <option value="english"><?= lang('english') ?></option>
                  <option value="other"><?= lang('other') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('ethnicity') ?></label>
                <select class="custom-select d-block form-control" id="ethnicity" name="ethnicity">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="Sinhalese"><?= lang('Sinhalese') ?></option>
                  <option value="sriLankanTamils"><?= lang('sriLankanTamils') ?></option>
                  <option value="muslims"><?= lang('muslims') ?></option>
                  <option value="indianTamils"><?= lang('indianTamils') ?></option>
                  <option value="sriLankanMalays"><?= lang('sriLankanMalays') ?></option>
                  <option value="burghers"><?= lang('burghers') ?></option>
                  <option value="mentionedInMyStory"><?= lang('mentionedInMyStory') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('religion') ?></label>
                <select class="custom-select d-block form-control" id="religion" name="religion">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="buddhist"><?= lang('buddhist') ?></option>
                  <option value="hindu"><?= lang('hindu') ?></option>
                  <option value="islam"><?= lang('islam') ?></option>
                  <option value="christians"><?= lang('christians') ?></option>
                  <option value="romanCatholic"><?= lang('romanCatholic') ?></option>
                  <option value="mentionedInMyStory"><?= lang('mentionedInMyStory') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('caste') ?></label>
                <select class="custom-select d-block form-control" id="caste" name="caste">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">Select 1</option>
                  <option value="2">Select 2</option>
                  <option value="mentionedInMyStory"><?= lang('mentionedInMyStory') ?></option>
                  <option value="disregardTheCaste"><?= lang('disregardTheCaste') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row" id="sub-caste-div">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('subCast') ?></label>
                <select class="custom-select d-block form-control" id="subCast" name="subCast">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">Select 1</option>
                  <option value="2">Select 2</option>
                  <option value="mentionedInMyStory"><?= lang('mentionedInMyStory') ?></option>
                </select>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('policeReport') ?></label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="bodyShape" name="bodyShape" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('canProvide') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="bodyShape" name="bodyShape" type="radio" class="custom-control-input" value="1">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('cantProvide') ?></span>
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

    $('#sub-caste-div').hide();

    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/residence') ?>";
    });

    $('#btnSubmit').click(function() {
      window.location.href = "<?php echo base_url('Registration/lifeStyle') ?>";
    });

    $('#caste').change(function() {
      var caste = $('#caste').val();
      console.log(caste);
      if (caste == 0 || caste == 'mentionedInMyStory' || caste == 'disregardTheCaste') {
        $('#sub-caste-div').hide();
      } else {
        $('#sub-caste-div').show();
      }
    });

  });
</script>