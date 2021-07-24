<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title"><?= lang('residance') ?></h3>
  <form method="post" action="<?= base_url('Registration/addResidenceDetails') ?>" id="addResidenceDetails">
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Currently living</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="country" name="country">
          </select>
        </div>
      </div>
    </div>

    <div class="row" id="ifLiveinAnotherCountry">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Residence Status</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="residenceStatus" name="ResidenceStatus">
          </select>
        </div>
      </div>
    </div>

    <div class="ifLiveInSriLanka">
      <div class="row">
        <div class="col-4">
          <div class="form-group">
            <label class="text-inverse font-weight-bold" for="validationCustom01">My location in Sri Lanka</label>
          </div>
        </div>
        <div class="col-8">
          <label class="text-inverse font-weight-bold">District</label>
          <div class="form-group">
            <select class="custom-select d-block form-control" id="district" name="district">
              <!-- Generated Area -->
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="offset-4 col-8">
          <label class="text-inverse font-weight-bold">City</label>
          <div class="form-group">
            <select class="custom-select d-block form-control" id="city" name="city">
              <!-- Generated Area -->
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label class="text-inverse d-flex font-weight-bold" for="validationCustom01">Home address of Sri Lanka
            <span class="highLightText">&nbsp; (Will not publish, Office purpose only.)</span>
          </label>
          <input type="text" class=" d-block form-control" name="AddressofSriLanka" id="AddressofSriLanka">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('nativeDistrict') ?></label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="nativeDistrict" name="nativeDistrict">
            <!-- Generated Area -->
          </select>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-12">
        <button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
        <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i><i class="" id="btnSubmitLoading"></i></button>
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
  let navigateBack = "<?php echo base_url('Registration/physicalStatus') ?>";
  let navigateTo = "<?= base_url('Registration/background') ?>";
  let loadResidenceStatusUrl = '<?php echo base_url(); ?>Registration/residenceStatus';
  let loadCountryListUrl = '<?php echo base_url(); ?>Registration/LoadCountries';
  let loadDistrictsUrl = '<?php echo base_url(); ?>Registration/loadDistricts';
  let loadCitiesUrl = '<?php echo base_url(); ?>Registration/loadCities';
</script>
<script src="<?= base_url('resources/js/registration_form/residence.js') ?>"></script>