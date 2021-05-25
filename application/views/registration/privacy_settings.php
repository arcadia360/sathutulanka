<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title">Privacy Settings</h3>
        <hr>
        <form method="post" action="<?= base_url('Registration/AddPrivacySettings') ?>" id="AddPrivacySettings">
          <div class="text-center">
            <h5>Below field is mandatory.</h5>
          </div>
          <div class="row">
            <div class="col-3"></div>
            <div class="col-3 text-al-center"><label for="">Visible to all members</label></div>
            <div class="col-3 text-al-center"><label for="">visible to verified members</label></div>
            <div class="col-3 text-al-center"><label for="">open on request</label></div>
          </div>
          <div class="row">
            <div class="col-3"><label for="">(1) My Photos</label></div>
            <div class="col-3 text-al-center">
              <input name="MyPhotos" type="radio" value="1">
            </div>
            <div class="col-3 text-al-center">
              <input name="MyPhotos" type="radio" value="2">
            </div>
            <div class="col-3 text-al-center">
              <input name="MyPhotos" type="radio" value="3">
            </div>
          </div>
          <div class="row">
            <div class="col-3"><label for="">(2) My Videos</label></div>
            <div class="col-3 text-al-center">
              <input name="MyVideos" type="radio" value="1">
            </div>
            <div class="col-3 text-al-center">
              <input name="MyVideos" type="radio" value="2">
            </div>
            <div class="col-3 text-al-center">
              <input name="MyVideos" type="radio" value="3">
            </div>
          </div>
          <div class="row">
            <div class="col-3"><label for="">(3) Assets Details</label></div>
            <div class="col-3 text-al-center">
              <input name="AssetsDetails" type="radio" value="1">
            </div>
            <div class="col-3 text-al-center">
              <input name="AssetsDetails" type="radio" value="2">
            </div>
            <div class="col-3 text-al-center">
              <input name="AssetsDetails" type="radio" value="3">
            </div>
          </div>
          <div class="row">
            <div class="col-3"><label for="">(4) Family Details</label></div>
            <div class="col-3 text-al-center">
              <input name="FamilyDetails" type="radio" value="1">
            </div>
            <div class="col-3 text-al-center">
              <input name="FamilyDetails" type="radio" value="2">
            </div>
            <div class="col-3 text-al-center">
              <input name="FamilyDetails" type="radio" value="3">
            </div>
          </div>
          <div class="row">
            <div class="col-3"><label for="">(5) Horoshcope</label></div>
            <div class="col-3 text-al-center">
              <input name="Horoshcope" type="radio" value="1">
            </div>
            <div class="col-3 text-al-center">
              <input name="Horoshcope" type="radio" value="2">
            </div>
            <div class="col-3 text-al-center">
              <input name="Horoshcope" type="radio" value="3">
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
</div>

<script>
  $(function() {

    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/AboutYourselfAndPartner') ?>";
    });
    $('#btnSubmit').click(function() {
      let isMyPhotosSelected = $("input[name=MyPhotos]").is(":checked");
      let isMyVideosSelected = $("input[name=MyVideos]").is(":checked");
      let isAssetsDetailsSelected = $("input[name=AssetsDetails]").is(":checked");
      let isFamilyDetailsSelected = $("input[name=FamilyDetails]").is(":checked");
      let isHoroshcopeSelected = $("input[name=Horoshcope]").is(":checked");
      if (!isMyPhotosSelected) {
        toastr["error"]("Please select my photos privacy");
      } else if (!isMyVideosSelected) {
        toastr["error"]("Please select my videos privacy");
      } else if (!isAssetsDetailsSelected) {
        toastr["error"]("Please select asset details privacy");
      } else if (!isFamilyDetailsSelected) {
        toastr["error"]("Please select family details privacy");
      } else if (!isHoroshcopeSelected) {
        toastr["error"]("Please select horoscope privacy");
      } else {
        var form = $("#AddPrivacySettings");
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              Swal.fire({
                icon: 'success',
                title: 'Privacy settings saved successfully!',
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = "<?= base_url('Registration/partnerPreferences') ?>";
                }
              })

            } else {
              if (response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var id = $("#" + index);
                  id.closest('.form-group')
                    .removeClass('has-error')
                    .removeClass('has-success')
                    .addClass(value.length > 0 ? 'has-error' : 'has-success');
                  id.after(value);
                });
              } else {
                toastr["error"](response.messages);
                $(button).prop('disabled', false);
              }
            }
          },
          error: function() {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Internal Server Error! Please contact system administrator.',
            })
          }
        });
      }
    });

  });
</script>