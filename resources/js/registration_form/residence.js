$(function() {


   

    ajaxCall('registration/getMemberData', model, function(response) {
      if (response.intCountryId != null) {
        $("#country").val(response.intCountryId);
        $('#country').trigger('change');
        $("#district").val(response.intDistrictId);
        $('#district').trigger('change');
        $("#city").val(response.intCityIdIfLiveInSL);
        $('#city').trigger('change');
        $("#AddressofSriLanka").val(response.vcAddOfSriLanka);
        $("#nativeDistrict").val(response.intNativeDistrictId);
        $('#residenceStatus').val(response.intResidenceStatusID);
      }
      changeResidenceVisibility();
    });

    $('#country').change(function() {
      changeResidenceVisibility();
    });

    loadCountries();
    loadDistricts();
    residenceStatus();
    $('#ifLiveinAnotherCountry').hide();

    function changeResidenceVisibility() {
      if ($('#country').val() != 0 && $('#country').val() != 1) {
        $('#ifLiveinAnotherCountry').show();
      } else {
        $('#ifLiveinAnotherCountry').hide();
        $('#residenceStatus').val(0);
      }
    }

    $('#btnBack').click(function() {
      window.location.href = navigateBack;
    });

    $('#btnSubmit').click(function() {
      var LiveInSriLanka = $("#LiveInSriLanka").is(":checked");
      var LiveInOverSeas = $("#LiveInOverSeas").is(":checked");

      if ($('#country').val() == 0) {
        $("#country").focus();
        toastr["error"]("Please select currently live in !");
      } else if (($('#country').val() != 0 && $('#country').val() != 1) && $('#residenceStatus').val() == 0) {
        $("#residenceStatus").focus();
        toastr["error"]("Please select residence status !");
      } else if ($('#district').val() == 0) {
        $("#district").focus();
        toastr["error"]("Please select district !");
      } else if ($('#city').val() == 0) {
        $("#city").focus();
        toastr["error"]("Please select city !");
      } else if (jQuery.trim($("#AddressofSriLanka").val()).length == 0) {
        $("#AddressofSriLanka").focus();
        toastr["error"]("Please provide address of Sri Lanka !");
      } else if (jQuery.trim($("#AddressofSriLanka").val()).length < 15) {
        $("#AddressofSriLanka").focus();
        toastr["error"]("Invlid address.Address length should contain more than 15 characters !");
      } else if ($('#nativeDistrict').val() == 0) {
        $("#nativeDistrict").focus();
        toastr["error"]("Please select native district !");
      } else {
        {
          var form = $("#addResidenceDetails");
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
                  title: 'Residance details saved successfully!',
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

            }
          });
        }
      }
    });

    //load Residence Status
    function residenceStatus() {
      $.ajax({
        type: 'ajax',
        url: loadResidenceStatusUrl,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load residence status selection data");
          } else {
            $('#residenceStatus').html(data);
            $('#residenceStatus').val(0);
          }
        },
        error: function() {
          toastr["error"]("internal error Failed to load residence status selection data");
        }
      });
    }


    //load countries
    function loadCountries() {
      $.ajax({
        type: 'ajax',
        url: loadCountryListUrl,
        async: false, 
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load country selection data");
          } else {
            $('#country').html(data);
            $('#country').val(0);
          }
        },
        error: function() {
          toastr["error"]("internal error Failed to load country selection data");
        }
      });
    }

    function loadDistricts() {
      $.ajax({
        type: 'ajax',
        url: loadDistrictsUrl,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#district').html(data);;
            $('#district').val(0);
            $('#nativeDistrict').html(data);
            $('#nativeDistrict').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') . ' Connection error' ?>");
        }
      });
    }

    //load city list
    $('#district').change(function() {
      var districtID = $('#district').val()
      $.ajax({
        type: 'POST',
        url: loadCitiesUrl,
        async: false,
        dataType: 'json',
        data: {
          'districtID': districtID
        },
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= lang('city') . ' ' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#city').html(data);
            $('#city').val(0);
          }
        },
        error: function() {
          toastr["error"]("Internal error, City data could not retrieve");
        }
      });
    });
  });