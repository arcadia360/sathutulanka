$(function() {

    FillHorascopeData();

    function FillHorascopeData() {
    

      ajaxCall('registration/getMemberData', model, function(response) {
        if (response.vcMatchingHoroscope != null) {
          var MatchingHoroscope = (response.vcMatchingHoroscope);
          if (MatchingHoroscope == "Very Important") {
            $("#matchingHoroscope1").prop("checked", true);
          } else if (MatchingHoroscope == "Important") {
            $("#matchingHoroscope2").prop("checked", true);
          } else if (MatchingHoroscope == "Not Important") {
            $("#matchingHoroscope3").prop("checked", true);
          }
          $("#ZodiacSign").val(response.vcZodiacSign);
          $("#Ganaya").val(response.vcGanaya);
          $("#Nekatha").val(response.vcNekatha);
          $("#Ravi").val(response.intRavi);
          $("#Moon").val(response.intMoon);
          $("#Mars").val(response.intMars);
          $("#Mercury").val(response.intMercury);
          $("#Jupiter").val(response.intJupiter);
          $("#Venus").val(response.intVenus);
          $("#Saturn").val(response.intSaturn);
          $("#Rahu").val(response.intRahu);
          $("#Kethu").val(response.intKethu);
          var PapaKendara = (response.vcPapaKendara);
          if (PapaKendara == "Dont Know") {
            $("#PapaKendara1").prop("checked", true);
          } else if (MatchingHoroscope == "Yes") {
            $("#PapaKendara2").prop("checked", true);
          } else if (MatchingHoroscope == "No") {
            $("#PapaKendara3").prop("checked", true);
          }

        }
      });
    }
    $('#btnBack').click(function() {
      window.location.href = navigateBack;
    });

    $('#btnSubmit').click(function() {
      var isMatchingHoroscopeSelected = $("input[name=matchingHoroscope]").is(":checked");
      var isPapaKendaraSelected = $("input[name=PapaKendara]").is(":checked");
      if (!isMatchingHoroscopeSelected) {
        toastr["error"]("Please select matching horoscope !");
      } else if ($('#ZodiacSign').val() == 0) {
        toastr["error"]("Please select zodiac sign !");
        $("#ZodiacSign").focus();
      } else if ($('#Ganaya').val() == 0) {
        toastr["error"]("Please select ganaya !");
        $("#Ganaya").focus();
      } else if ($('#Nekatha').val() == 0) {
        toastr["error"]("Please select nekatha !");
        $("#Nekatha").focus();
      } else if ($('#Ravi').val() == 0) {
        toastr["error"]("Please select ravi !");
        $("#Ravi").focus();
      } else if ($('#Moon').val() == 0) {
        toastr["error"]("Please select moon !");
        $("#Moon").focus();
      } else if ($('#Mars').val() == 0) {
        toastr["error"]("Please select mars !");
        $("#Mars").focus();
      } else if ($('#Mercury').val() == 0) {
        toastr["error"]("Please select mercury !");
        $("#Mercury").focus();
      } else if ($('#Jupiter').val() == 0) {
        toastr["error"]("Please select jupiter !");
        $("#Jupiter").focus();
      } else if ($('#Venus').val() == 0) {
        toastr["error"]("Please select venus !");
        $("#Venus").focus();
      } else if ($('#Saturn').val() == 0) {
        toastr["error"]("Please select saturn !");
        $("#Saturn").focus();
      } else if ($('#Kethu').val() == 0) {
        toastr["error"]("Please select kethu !");
        $("#Kethu").focus();
      } else if (!isPapaKendaraSelected) {
        toastr["error"]("Please select papa kendara !");
      } else {
        var form = $("#addHoroscopeDetails");
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
                title: 'Horoscope details saved successfully !',
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                $("body").hide();
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
            })
          }
        });
        $("#btnSubmit").attr("disabled","enabled");
      }
    });
  });