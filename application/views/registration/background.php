<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title"><?= lang('background') ?></h3>
  <form method="post" action="<?= base_url('Registration/addBackgroundDetails') ?>" id="addBackgroundDetails">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('motherTongue') ?></label>
          <select class="custom-select d-block form-control" id="motherTongue" name="motherTongue">
            <option value="0"><?= lang('select') ?></option>
            <?php foreach ($motherTongue_data as $k => $v) { ?>
              <option value="<?= $v['intMotherTongueID'] ?>"><?= $v['vcMotherTongueName'] ?></option>
            <?php } ?>
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
            <?php foreach ($ethnicity_data as $k => $v) { ?>
              <option value="<?= $v['intEthnicityID'] ?>"><?= $v['vcEthnicityName'] ?></option>
            <?php } ?>
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
            <?php foreach ($religion_data as $k => $v) { ?>
              <option value="<?= $v['intReligionID'] ?>"><?= $v['vcReligion'] ?></option>
            <?php } ?>
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
            <option value="Details in Writing">Details in Writing</option>
            <option value="disregardTheCaste"><?= lang('disregardTheCaste') ?></option>
          </select>
        </div>
      </div>
    </div>

    <div class="row" id="sub-caste-div">
      <div class="col-12">
        <div class="form-group">
          <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('subCaste') ?></label>
          <select class="custom-select d-block form-control" id="subCaste" name="subCaste">

          </select>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('policeReport') ?></label>
        <div class="row">
          <div class="col-6">
            <div class="radio icheck-midnightblue img-radio-align">
              <input type="radio" name="policeReport" value="1" id="policeReport1" checked>
              <label for="policeReport1">Can provide</label>
            </div>
          </div>
          <div class="col-6">
            <div class="radio icheck-midnightblue img-radio-align">
              <input type="radio" name="policeReport" value="0" id="policeReport2">
              <label for="policeReport2"> Can not provide</label>
            </div>

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

  //
  var loadDisabilityUrl = '<?php echo base_url(); ?>Registration/loadDisabilityDetails';
  let navigateTo = "<?= base_url('Registration/lifeStyle') ?>";
  let loadCasteUrl = '<?php echo base_url(); ?>Registration/loadCaste';
  let loadSubCasteUrl = '<?php echo base_url(); ?>Registration/loadSubCaste';
  let navigateBack = "<?php echo base_url('Registration/residence') ?>";
</script>
<script src="<?= base_url('resources/js/registration_form/background.js') ?>"></script>