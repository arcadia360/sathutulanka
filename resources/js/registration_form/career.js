$(function() {

    FillCareerData();

    function FillCareerData() {
   

      ajaxCall('registration/getMemberData', model, function(response) {
        if (response.intWorkingWithId != null) {
          $("#workingWith").val(response.intWorkingWithId);
          $('#workingWith').trigger('change');
          if (response.intWorkinAsMainCat != null) {
            $("#WorkingAsMainCat").val(response.intWorkinAsMainCat);
            $('#WorkingAsMainCat').trigger('change');
          }
          if (response.intWorkingAsSubCatId != null) {
            $("#workingAsSubCat").val(response.intWorkingAsSubCatId);
            $('#workingAsSubCat').trigger('change');
          }
          if (response.vcWorkingLocation != null) {
            $("#workingLocation").val(response.vcWorkingLocation);
            $("#workingLocation").trigger('change');
          }
          if (response.intDistrictid != null) {
            $("#district").val(response.intDistrictid);
            $("#district").trigger('change');
          }
          if (response.intCityIdWorkingIn != null) {
            $("#city").val(response.intCityIdWorkingIn);
            $("#country").val(response.intWorkingCountryID);
          }

          $("#describeCareer").val(response.vcDescribeCareer);

        }
      });

    }

    loadWorkingWith();
    LoadWorkingSector();
    // loadWorkingAsMainCat();
    loadCountries();
    $('#ifWorkingLocationOS').hide();
    $('#ifWorkingLocationSL').hide();

    //load countries
    function loadCountries() {
      $.ajax({
        type: 'ajax',
        url: loadCountriesUrl,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load countries");
          } else {
            $('#country').html(data);
            $('#country option[value="1"]').remove();
            $('#country').val(0);
          }
        },
        error: function() {
          toastr["error"]("Internal error,Failed to load countries");
        }
      });
    }

    //Load Working Sector
    function LoadWorkingSector() {
      $.ajax({
        type: 'ajax',
        url: LoadWorkingSectorUrl,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load working sector");
          } else {
            $('#WorkingSector').html(data);
            $('#WorkingSector option[value="1"]').remove();
            $('#WorkingSector').val(0);
          }
        },
        error: function() {
          toastr["error"]("Internal error,Failed to load working sector");
        }
      });
    }

    $('#workingWith').change(function() {
      // if ($('#workingWith').val() == 6 || $('#workingWith').val() == 7) {
      //   $('#working-as').hide();
      //   $('#not-working-or-education').show();
      // } else if ($('#workingWith').val() == 8 || $('#workingWith').val() == 9) {
      //   $('#not-working-or-education').hide();
      // } else {
      //   $('#working-as').show();
      //   $('#not-working-or-education').show();
      // }
    });

    $('#btnBack').click(function() {
      window.location.href = navigateBack;
    });

    $('#btnSubmit').click(function() {
      if ($('#workingWith').val() == 0) {
        toastr["error"]("Please select working with !");
        $("#workingWith").focus();

      } else if ($('#workingWith').val() != 6 && $('#workingWith').val() != 7 && $('#workingWith').val() != 8 && ($('#workingWith').val() != 9) && $('#WorkingAsMainCat').val() == 0) {
        toastr["error"]("Please select working as main category !");
        $("#WorkingAsMainCat").focus();

      } else if ($("#WorkingAsMainCat").val() != 0 && $('#workingAsSubCat').val() == 0) {
        toastr["error"]("Please select working as sub category !");
        $("#workingAsSubCat").focus();

      } else if ($('#workingWith').val() != 14 && $('#workingWith').val() != 9 && $('#workingLocation').val() == 0) {
        toastr["error"]("Please select working location !");
        $("#workingLocation").focus();

      } else if ($('#workingLocation').val() == "In Sri Lanka" && $('#district').val() == 0) {
        toastr["error"]("Please select working district !");
        $("#district").focus();

      } else if ($('#workingLocation').val() == "In Sri Lanka" && $('#city').val() == 0) {
        toastr["error"]("Please select working city !");
        $("#city").focus();

      } else if ($('#workingLocation').val() == "Out Side Sri Lanka" && $('#country').val() == 0) {
        toastr["error"]("Please select country !");
        $("#country").focus();

      } else if ($("#workingLocation").val() != 0 && $('#describeCareer').val() == 0) {
        toastr["error"]("Please describe career !");
        $("#describeCareer").focus();
      } else {
        var form = $("#addcareerDetails");
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
                title: 'Career details saved successfully!',
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
            $("#btnSubmit").attr("disabled","enabled");
          },
          error: function() {
            toastr["error"]("Internal error, failed to save career details!");
          }
        });
      }
    });

    function loadWorkingWith() {
      $.ajax({
        type: 'ajax',
        url: loadWorkingWithUrl,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= 'Woking with' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#workingWith').html(data);
            $('#workingWith').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= 'working with' . lang('dataCannotRetrieve') . ' Connection Error' ?>");
        }
      });
    }

    function AllclearFields() {
      $('#workingAs').val(0);
      $('#WorkingSector').val(0);
      $('#workingLocation').val(0);
      $('#country').val(0);
      $('#district').val(0);
      $('#city').val(0);
      $('#describeCareer').val("");

    }

    //load Working as sub category
    $('#workingWith').change(function() {
      if ($('#workingWith').val() == 2 || $('#workingWith').val() == 4 || $('#workingWith').val() == 5 || $('#workingWith').val() == 6 || $('#workingWith').val() == 6 || $('#workingWith').val() == 7 || $('#workingWith').val() == 8 || $('#workingWith').val() == 10 || $('#workingWith').val() == 11 || $('#workingWith').val() == 13 || $('#workingWith').val() == 15) {

        let workingWith = $('#workingWith').val();

        $.ajax({
          type: 'POST',
          url:loadWorkingAsUrl,
          async: false,
          dataType: 'json',
          data: {
            'workingWith': workingWith
          },
          success: function(data) {
            if (!data) {
              toastr["error"]("Failed to load Working as data");
            } else {
              $('#workingAs').html(data);
              $('#workingAsWorkingSector').show();
              $('#workingAs').val(0);
              $('#WorkingSector').val(0);
              $('#not-working-or-education').show();
            }
          },
          error: function() {
            toastr["error"]("Internal error, failed to load Working as data");
          }
        });
      } else if ($('#workingWith').val() == 14 || $('#workingWith').val() == 9) {
        $('#not-working-or-education').hide();
        AllclearFields();

      } else {
        $('#workingAsWorkingSector').hide();
        $('#workingAs').val(0);
        $('#WorkingSector').val(0);
        $('#not-working-or-education').show();
      }
    });
    loadDistricts();

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
            $('#city').html(data);;
            $('#city').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= lang('city') . ' ' . lang('dataCannotRetrieve') . ' Connection error' ?>");
        }
      });
    });

    $('#workingLocation').change(function() {
      if ($('#workingLocation').val() == "In Sri Lanka") {
        $('#ifWorkingLocationOS').hide();
        $('#ifWorkingLocationSL').show();
        $('#country').val(0);
      }
      if (($('#workingLocation').val() == "Out Side Sri Lanka")) {
        $('#ifWorkingLocationOS').show();
        $('#ifWorkingLocationSL').hide();
        $('#district').val(0);
        $('#city').val(0);
      }
    });
  });