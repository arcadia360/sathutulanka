<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">Career</h3>
  <form method="post" action="<?= base_url('Registration/addcareerDetails') ?>" id="addcareerDetails">
    <div class="row">
      <div class="col-12">
        <!-- <label class="text-inverse font-weight-bold" for="validationCustom01">Working With</label> -->
        <label class="text-inverse font-weight-bold" for="validationCustom01">Working Field</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="workingWith" name="workingWith">
            <!-- Generated Area -->
          </select>
        </div>
      </div>
    </div>
    <div id="not-working-or-education">

      <div id="workingAsWorkingSector">
        <div class="row" id="working-As">
          <div class="col-12">
            <label class="text-inverse font-weight-bold" for="validationCustom01">Working as</label>
            <div class="form-group">
              <select class="custom-select d-block form-control" id="workingAs" name="workingAs">
                <!-- Generated Area -->
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <label class="text-inverse font-weight-bold" for="validationCustom01">Working Sector</label>
          <div class="form-group">
            <select class="custom-select d-block form-control" id="WorkingSector" name="WorkingSector">
            </select>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-12">
          <label class="text-inverse font-weight-bold" for="validationCustom01">Working Location</label>
          <div class="form-group">
            <select class="custom-select d-block form-control" id="workingLocation" name="workingLocation">
              <option value="0"><?= lang('select') ?></option>
              <option value="Out Side Sri Lanka">Out Side Sri Lanka</option>
              <option value="In Sri Lanka">In Sri Lanka</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row" id="ifWorkingLocationSL">
        <div class="col-12">
          <div class="form-group">
            <select class="custom-select d-block form-control" id="district" name="district">
              <!-- Generated Area -->
            </select>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <select class="custom-select d-block form-control" id="city" name="city">
              <!-- Generated Area -->
            </select>
          </div>
        </div>
      </div>
      <div class="row" id="ifWorkingLocationOS">
        <div class="col-12">
          <div class="form-group">
            <select class="custom-select d-block form-control" id="country" name="country">
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label class="text-inverse font-weight-bold" for="validationCustom01">Describe Career</label>
          <div class="form-group">
            <textarea class="form-control" id="describeCareer" rows="5" name="describeCareer" placeholder="Describe career with details"></textarea>
          </div>
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
  let loadCountriesUrl = '<?php echo base_url(); ?>Registration/LoadCountries';
  let LoadWorkingSectorUrl = '<?php echo base_url(); ?>Registration/LoadWorkingSector';
  let navigateBack = "<?php echo base_url('Registration/education') ?>";
  let navigateTo = "<?= base_url('Registration/personalAssets') ?>";
  let loadWorkingWithUrl = '<?php echo base_url(); ?>Registration/loadWorkingWith';
  let loadWorkingAsUrl = '<?php echo base_url(); ?>Registration/loadWorkingAs';
  let loadDistrictsUrl = '<?php echo base_url(); ?>Registration/loadDistricts';
  let loadCitiesUrl = '<?php echo base_url(); ?>Registration/loadCities';
</script>
<script src="<?= base_url('resources/js/registration_form/career.js') ?>"></script>