<div class="offset-lg-3 col-lg-6 main-section">
  <!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
  <h3 class="text-center text-inverse title">Family</h3>
  <p class="highLightText text-center">100% Privacy Controls Available</p>
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
        <a href="#" class="anchor-qustion" data-toggle="popover" data-content="Join means living in one place more than two families"><i class="	fa fa-question-circle"></i></a>
        <div class="row">
          <div class="col-6">
            <center>
              <div class="radio icheck-midnightblue icheck-align mx-auto">
                <input name="Family-Type" id="familyTypeJoin" type="radio" value="Join">
                <label for="familyTypeJoin"></label>
              </div>
              <div> <span class="custom-control-description">Join</span></div>
            </center>
          </div>
          <div class="col-6">
            <center>
              <div class="radio icheck-midnightblue icheck-align mx-auto">
                <input name="Family-Type" id="familyTypeNotJoin" type="radio" value="Not join">
                <label for="familyTypeNotJoin"></label>
              </div>
              <div> <span class="custom-control-description">Not join</span></div>
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
              <div class="radio icheck-midnightblue icheck-align mx-auto">
                <input id="Traditional" name="Family-Values" type="radio" value="Traditional">
                <label for="Traditional"></label>
              </div>
              <div> <span class="custom-control-description">Traditional</span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align mx-auto">
                <input id="TraditionalAndModern" name="Family-Values" type="radio" value="Mix of Traditional and Modern">
                <label for="TraditionalAndModern"></label>
              </div>
              <div> <span class="custom-control-description">Mix of Traditional and Modern</span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align mx-auto">
                <input id="Modern" name="Family-Values" type="radio" value="Modern">
                <label for="Modern"></label>
              </div>
              <div> <span class="custom-control-description">Modern</span></div>
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
              <div class="radio icheck-midnightblue icheck-align mx-auto">
                <input name="Family-Culture" id="Culture1" type="radio" value="Urban">
                <label for="Culture1"></label>
              </div>
              <div> <span class="custom-control-description">Urban</span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align mx-auto">
                <input name="Family-Culture" id="Culture2" type="radio" value="Sub Urban">
                <label for="Culture1"></label>
              </div>
              <div> <span class="custom-control-description">Sub Urban</span></div>
            </center>
          </div>
          <div class="col-4">
            <center>
              <div class="radio icheck-midnightblue icheck-align mx-auto">
                <input name="Family-Culture" id="Culture3" type="radio" value="Rural">
                <label for="Family-Culture"></label>
              </div>
              <div> <span class="custom-control-description">Rural</span></div>
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
        <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i>&nbsp; <i class="" id="btnSubmitLoading"></i></button>
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


  $('#btnSkip').click(function() {
    <?php $session_data = array('no_of_submitted_form' => 10);
    $this->session->set_userdata($session_data); ?>
    window.location.href = "<?php echo base_url('Registration/afterMarriage') ?>";
  });

  let navigateTo = "<?= base_url('Registration/afterMarriage') ?>";
  let navigateBack = "<?php echo base_url('Registration/personalAssets') ?>";
  let loadDistrictUrl = '<?php echo base_url(); ?>Registration/loadDistricts';
</script>
<script src="<?= base_url('resources/js/registration_form/family.js') ?>"></script>