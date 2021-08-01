
  $(function() {

    FillPrivacySettingsData();

    function FillPrivacySettingsData() {
     

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
      window.location.href = navigateBack;
    });
    $('#btnSubmit').click(function() {
      let isMyPhotosSelected = $("input[name=MyPhotos]").is(":checked");
      // let isMyVideosSelected = $("input[name=MyVideos]").is(":checked");
      let isAssetsDetailsSelected = $("input[name=AssetsDetails]").is(":checked");
      let isFamilyDetailsSelected = $("input[name=FamilyDetails]").is(":checked");
      let isHoroshcopeSelected = $("input[name=Horoshcope]").is(":checked");
      if (!isMyPhotosSelected) {
        toastr["error"]("Please select my photos privacy !");
      }
      // else if (!isMyVideosSelected) {
      //   toastr["error"]("Please select my videos privacy !");
      // }
      else if (!isAssetsDetailsSelected) {
        toastr["error"]("Please select asset details privacy !");
      } else if (!isFamilyDetailsSelected) {
        toastr["error"]("Please select family details privacy !");
      } else if (!isHoroshcopeSelected) {
        toastr["error"]("Please select horoscope privacy !");
      } else {
        var form = $("#AddPrivacySettings");
        $("#btnSubmitLoading").addClass("fa fa-spinner fa-spin");
        $("#btnSubmit").attr("disabled","disabled");
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
                $("body").hide();
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = navigateTo;
                }
              })
            } else {
              if (response.falseType == DB) {
                toastr['error'](response.messages);
              }
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
        $("#btnSubmit").attr("disabled","enabled");
      }
    });

  });