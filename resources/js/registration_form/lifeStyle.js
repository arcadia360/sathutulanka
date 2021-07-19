
  $(function() {
    ajaxCall('registration/getMemberData', model, function(response) {
      if (response.intDietID != null) {
        $("#diet").val(response.intDietID);
        var drinkType = (response.vcDrink);

        if (drinkType == "No") {
          document.getElementById("drinkNo").checked = true;
        } else if (drinkType == "Yes") {
          document.getElementById("drinkYes").checked = true;
        } else if (drinkType == "During Function") {
          document.getElementById("drinkDuringFunction").checked = true;
        } else if (drinkType == "Stopped") {
          document.getElementById("drinkStopped").checked = true;
        }
        var smokeType = (response.vcSmoke);

        if (smokeType == "No") {
          document.getElementById("smokeNo").checked = true;
        } else if (smokeType == "Yes") {
          document.getElementById("smokeYes").checked = true;
        } else if (smokeType == "During Function") {
          document.getElementById("smokeDuringFunction").checked = true;
        } else if (smokeType == "Stopped") {
          document.getElementById("smokeStopped").checked = true;
        }

        var dressAndMakeupType = (response.vcDressAndMakeup);
        if (dressAndMakeupType == "Traditional") {
          document.getElementById("dressAndMakeupTraditional").checked = true;
        } else if (dressAndMakeupType == "Moder") {
          document.getElementById("dressAndMakeupModern").checked = true;
        } else if (dressAndMakeupType == "Mix of Traditional and modern") {
          document.getElementById("dressAndMakeupMixofTraditionalAndModern").checked = true;
        } else if (dressAndMakeupType == "Short Dresses") {
          document.getElementById("dressAndMakeupShortDresses").checked = true;
        }

        var usedToTravelType = (response.vcUsedToTravel);
        if (usedToTravelType == "Public") {
          document.getElementById("usedToTravelPublic").checked = true;
        } else if (usedToTravelType == "Private") {
          document.getElementById("usedToTravelPrivate").checked = true;
        } else if (usedToTravelType == "Public and Private") {
          document.getElementById("usedToTravelPublicAndPrivate").checked = true;
        }


        if (response.vcCalToParent == "Traditional (Thaththa/ Amma/ Appachchi)") {
          document.getElementById("CallTtParentsTraditional").checked = true;
        } else if (response.vcCalToParent == "Modern (Daddy/ Mammy/ Uncle / Aunt)") {
          document.getElementById("CallTtParentsModern").checked = true;
        }

        if (response.vcCustoms == "Respect") {
          document.getElementById("customsRespect").checked = true;
        } else if (response.vcCustoms == "Little Respect") {
          document.getElementById("customsLittleRespect").checked = true;
        } else if (response.vcCustoms == "No Respect") {
          document.getElementById("customsNoRespect").checked = true;
        }


        if (response.vcLiveIn == "Normal House") {
          document.getElementById("LiveInNormalHouse").checked = true;
        } else if (response.vcLiveIn == "Semi luxury House") {
          document.getElementById("LiveInSemiluxuryHouse").checked = true;
        } else if (response.vcLiveIn == "Luxury House") {
          document.getElementById("LiveInLuxuryHouse").checked = true;
        }

      }

    });

 
    ajaxCall('registration/getMemberWiseLanguageSpeak', model, function(response) {

      for (let index = 0; index < response.length; index++) {
        if (response[index].vcLanguage == "sinhala") {
          document.getElementById("sinhala").checked = true;
        } else if (response[index].vcLanguage == "tamil") {
          document.getElementById("tamil").checked = true;
        } else if (response[index].vcLanguage == "english") {
          document.getElementById("english").checked = true;
        } else if (response[index].vcLanguage == "other") {
          document.getElementById("other").checked = true;
        }
      }

    });

    $('#btnBack').click(function() {
      window.location.href = navigateBack;
    });

    $('#btnSubmit').click(function() {

      var isDrinkSelected = $("input[name=drink]").is(":checked");
      var isSmokeSelected = $("input[name=smoke]").is(":checked");
      var isDressAndMakeupSelected = $("input[name=dressAndMakeup]").is(":checked");
      var isusedToTravelSelected = $("input[name=usedToTravel]").is(":checked");
      var isCallTtParentsSelected = $("input[name=CallTtParents]").is(":checked");
      var iscustomsSelected = $("input[name=customs]").is(":checked");
      var isLiveInSelected = $("input[name=LiveIn]").is(":checked");


      if ($('#diet').val() == 0) {
        toastr["error"]("Please select diet !");
        $("#diet").focus();
      } else if (!isDrinkSelected) {
        toastr["error"]("Please select drink !");
      } else if (!isSmokeSelected) {
        toastr["error"]("Please select smoke !");
      } else if (!isSmokeSelected) {
        toastr["error"]("Please select smoke");
      } else if ($('.language[type=checkbox]:checked').length == 0) {
        toastr["error"]("Please select Languages,Speak !");
      } else if (!isDressAndMakeupSelected) {
        toastr["error"]("Please select dress and makeup !");
      } else if (!isusedToTravelSelected) {
        toastr["error"]("Please select used to travel !");
      } else if (!isCallTtParentsSelected) {
        toastr["error"]("Please select call to parent !");
      } else if (!iscustomsSelected) {
        toastr["error"]("Please select customs !");
      } else if (!isLiveInSelected) {
        toastr["error"]("Please select live in !");
      } else {

        var form = $("#addLifeStyleDetails");
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              Swal.fire({
                icon: 'success',
                title: 'Life style details saved successfully !',
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = navigateTo;
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
            });
          }
        });
      }
    });

  });