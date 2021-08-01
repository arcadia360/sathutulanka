<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">My Photos</h3>
  <p>Photos are the key to best responses every time. Your photos & video will appear after the inspection of our officer. 100% privacy controls available.</p>

  <form method="post" action="<?= base_url('Registration/addWhoAmIDetails') ?>" id="addMyPhotos">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="form-group">
          <input type="file" id="file1" name="file1" class="form-control" required>
        </div>
      </div>
      <div class="col-lg-6 col-12 ">
        <div class="form-group text-al-center">
          <button type="submit" id="btnUpload" class="btn btn-success">Upload Image</button>
        </div>
      </div>
    </div>
  </form>

  <table class="table">
    <tr style="text-align: center;">
    </tr>
    <tbody id="loadimgtable" style="text-align: center;">

    </tbody>
  </table>

  <div class="row" id="loadimgdiv">

  </div>

  <hr>
  <div class="row">
    <div class="col-12">
      <button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
      <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i><i class="" id="btnSubmitLoading"></i></button>
    </div>
  </div>

</div>

<script>
  let removeImageUrl = '<?php echo base_url(); ?>Registration/removeImage';
  let navigateBack = "<?php echo base_url('Registration/horoscope') ?>";
  let submitUrl = '<?php echo base_url(); ?>Registration/saveProfilePicture';
  let navigateTo = "<?php echo base_url('Registration/AboutYourselfAndPartner') ?>";
  let uploadImageUrl = '<?php echo base_url(); ?>Registration/UploadMyPhotos';
  let viewUploadImageUrl = '<?php echo base_url(); ?>Registration/LoadUploadedImages';
</script>
<script src="<?= base_url('resources/js/registration_form/my_photos.js') ?>"></script>