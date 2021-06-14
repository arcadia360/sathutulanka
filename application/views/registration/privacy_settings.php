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
        <input name="MyPhotos" id="MyPhotos1" type="radio" value="1">
      </div>
      <div class="col-3 text-al-center">
        <input name="MyPhotos" id="MyPhotos2" type="radio" value="2">
      </div>
      <div class="col-3 text-al-center">
        <input name="MyPhotos" id="MyPhotos3" type="radio" value="3">
      </div>
    </div>
    <div class="row">
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
    </div>
    <div class="row">
      <div class="col-3"><label for="">(3) Assets Details</label></div>
      <div class="col-3 text-al-center">
        <input name="AssetsDetails" id="AssetsDetails1" type="radio" value="1">
      </div>
      <div class="col-3 text-al-center">
        <input name="AssetsDetails" id="AssetsDetails2"  type="radio" value="2">
      </div>
      <div class="col-3 text-al-center">
        <input name="AssetsDetails" id="AssetsDetails3" type="radio" value="3">
      </div>
    </div>
    <div class="row">
      <div class="col-3"><label for="">(4) Family Details</label></div>
      <div class="col-3 text-al-center">
        <input name="FamilyDetails" id="FamilyDetails1" type="radio" value="1">
      </div>
      <div class="col-3 text-al-center">
        <input name="FamilyDetails" id="FamilyDetails2"  type="radio" value="2">
      </div>
      <div class="col-3 text-al-center">
        <input name="FamilyDetails" id="FamilyDetails3"  type="radio" value="3">
      </div>
    </div>
    <div class="row">
      <div class="col-3"><label for="">(5) Horoshcope</label></div>
      <div class="col-3 text-al-center">
        <input name="Horoshcope" id="Horoshcope1" type="radio" value="1">
      </div>
      <div class="col-3 text-al-center">
        <input name="Horoshcope" id="Horoshcope2" type="radio" value="2">
      </div>
      <div class="col-3 text-al-center">
        <input name="Horoshcope"  id="Horoshcope3"  type="radio" value="3">
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
  $(function() {

    FillPrivacySettingsData();

    function FillPrivacySettingsData() {
      var Member = function() {
        this.MemberID = 0;
      }
      var model = new Member();
      model.MemberID = (<?= $this->session->userdata('member_id') ?>);

      ajaxCall('registration/getMemberData', model, function(response) {
        if (response.intMyPhotosPrivacy != null) {
          var MyPhotosPrivacy = (response.intMyPhotosPrivacy);
          if (MyPhotosPrivacy == "1") {
            $("#MyPhotos1").prop("checked", true);
          } else if (MyPhotosPrivacy == "2") {
            $("#MyPhotos2").prop("checked", true);
          } else if (MyPhotosPrivacy == "3") {
            $("#MyPhotos3").prop("checked", true);
          }

          var MyVideosPrivacy = (response.intMyVideosPrivacy);
          if (MyVideosPrivacy == "1") {
            $("#MyVideos1").prop("checked", true);
          } else if (MyVideosPrivacy == "2") {
            $("#MyVideos2").prop("checked", true);
          } else if (MyVideosPrivacy == "3") {
            $("#MyVideos3").prop("checked", true);
          }

          var AssetsDetailsPrivacy = (response.intAssetsDetailsPrivacy);
          if (AssetsDetailsPrivacy == "1") {
            $("#AssetsDetails1").prop("checked", true);
          } else if (AssetsDetailsPrivacy == "2") {
            $("#AssetsDetails2").prop("checked", true);
          } else if (AssetsDetailsPrivacy == "3") {
            $("#AssetsDetails3").prop("checked", true);
          }

          
          var FamilyDetailsPrivacy = (response.intFamilyDetailsPrivacy);
          if (FamilyDetailsPrivacy == "1") {
            $("#FamilyDetails1").prop("checked", true);
          } else if (FamilyDetailsPrivacy == "2") {
            $("#FamilyDetails2").prop("checked", true);
          } else if (FamilyDetailsPrivacy == "3") {
            $("#FamilyDetails3").prop("checked", true);
          }

          var HoroscopeDetailsPrivacy = (response.intHoroscopeDetailsPrivacy);
          if (HoroscopeDetailsPrivacy == "1") {
            $("#Horoshcope1").prop("checked", true);
          } else if (HoroscopeDetailsPrivacy == "2") {
            $("#Horoshcope2").prop("checked", true);
          } else if (HoroscopeDetailsPrivacy == "3") {
            $("#Horoshcope3").prop("checked", true);
          }

        }
      });
    }


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
        toastr["error"]("Please select my photos privacy !");
      } else if (!isMyVideosSelected) {
        toastr["error"]("Please select my videos privacy !");
      } else if (!isAssetsDetailsSelected) {
        toastr["error"]("Please select asset details privacy !");
      } else if (!isFamilyDetailsSelected) {
        toastr["error"]("Please select family details privacy !");
      } else if (!isHoroshcopeSelected) {
        toastr["error"]("Please select horoscope privacy !");
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
                title: 'Privacy settings saved successfully !',
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