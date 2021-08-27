<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">Privacy Settings</h3>
  <form method="post" action="<?= base_url('Registration/AddPrivacySettings') ?>" id="AddPrivacySettings">
    <div class="text-center">
      <h5>Below field is mandatory.</h5>
    </div>
    <br>
    <div class="row">
      <div class="col-3"></div>
      <div class="col-3 text-al-center"><label for="">Visible to all members</label></div>
      <div class="col-3 text-al-center"><label for="">visible to verified members</label></div>
      <div class="col-3 text-al-center"><label for="">open on request</label></div>
    </div>
    <div class="row">
      <div class="col-3"><label for="">(1) My Photos</label></div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="MyPhotos" id="MyPhotos1" type="radio" value="1">
          <label for="MyPhotos1"></label>
        </div>
      </div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="MyPhotos" id="MyPhotos2" type="radio" value="2">
          <label for="MyPhotos2"></label>
        </div>
      </div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="MyPhotos" id="MyPhotos3" type="radio" value="3">
          <label for="MyPhotos3"></label>
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-3"><label for="">(2) My Videos</label></div>
      <div class="col-3 text-al-center">
        <input name="MyVideos" id="MyVideos1" type="radio" value="1">
      </div>
      <div class="col-3 text-al-center">
        <input name="MyVideos" id="MyVideos2" type="radio" value="2">
      </div>
      <div class="col-3 text-al-center">
        <input name="MyVideos" id="MyVideos3" type="radio" value="3">
      </div>
    </div> -->
    <div class="row">
      <div class="col-3"><label for="">(2) Assets Details</label></div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="AssetsDetails" id="AssetsDetails1" type="radio" value="1">
          <label for="AssetsDetails1"></label>
        </div>
      </div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="AssetsDetails" id="AssetsDetails2" type="radio" value="2">
          <label for="AssetsDetails2"></label>
        </div>
      </div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="AssetsDetails" id="AssetsDetails3" type="radio" value="3">
          <label for="AssetsDetails3"></label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-3"><label for="">(3) Family Details</label></div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="FamilyDetails" id="FamilyDetails1" type="radio" value="1">
          <label for="FamilyDetails1"></label>
        </div>
      </div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="FamilyDetails" id="FamilyDetails2" type="radio" value="2">
          <label for="FamilyDetails2"></label>
        </div>
      </div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="FamilyDetails" id="FamilyDetails3" type="radio" value="3">
          <label for="FamilyDetails3"></label>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-3"><label for="">(4) Horoshcope</label></div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="Horoshcope" id="Horoshcope1" type="radio" value="1">
          <label for="Horoshcope1"></label>
        </div>
      </div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="Horoshcope" id="Horoshcope2" type="radio" value="2">
          <label for="Horoshcope2"></label>
        </div>
      </div>
      <div class="col-3 text-al-center">
        <div class="radio icheck-midnightblue icheck-align mx-auto">
          <input name="Horoshcope" id="Horoshcope3" type="radio" value="3">
          <label for="Horoshcope3"></label>
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

  let navigateBack = "<?php echo base_url('Registration/AboutYourselfAndPartner') ?>";
  let navigateTo = "<?= base_url('Registration/partnerPreferences') ?>";
</script>
<script src="<?= base_url('resources/js/registration_form/privacy_settings.js') ?>"></script>