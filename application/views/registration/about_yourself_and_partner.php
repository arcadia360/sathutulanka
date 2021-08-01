<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">About Yourself And Partner</h3>
  <p class="text-justify">Tell more about yourself, partner preferences, family, career-plan or any special details, likes dislikes that you can't mention in other place</p>
  <form method="post" action="<?= base_url('Registration/AddAboutYourselfAndPartner') ?>" id="AddAboutYourselfAndPartner">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h5>Below field is mandatory.</h5>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="aboutYourSelfAndPartner" name="aboutYourSelfAndPartner" rows="8"></textarea>
        </div>
        <div class="text-center">
          <h6>Maximam 500 words (minimum 50)</h6>
        </div>
        <div class="text-center">
          <p>This writing box will be checked every time when you update it.</p>
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
  let navigateBack = "<?php echo base_url('Registration/myPhotos') ?>";
  let navigateTo = "<?= base_url('Registration/privacySettings') ?>";
</script>
<script src="<?= base_url('resources/js/registration_form/AboutYourselfAndPartner.js') ?>"></script>