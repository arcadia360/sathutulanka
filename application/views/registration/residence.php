<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title"><?= lang('residance') ?></h3>
  <form method="post" action="<?= base_url('Registration/addResidenceDetails') ?>" id="addResidenceDetails">
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Currently living</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="country" name="country">
          </select>
        </div>
      </div>
    </div>

    <div class="row" id="ifLiveinAnotherCountry">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Residence Status</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="residenceStatus" name="ResidenceStatus">
          </select>
        </div>
      </div>
    </div>

    <div class="ifLiveInSriLanka">
      <div class="row">
        <div class="col-4">
          <div class="form-group">
            <label class="text-inverse font-weight-bold" for="validationCustom01">My location in Sri Lanka</label>
          </div>
        </div>
        <div class="col-8">
          <label class="text-inverse font-weight-bold">District</label>
          <div class="form-group">
            <select class="custom-select d-block form-control" id="district" name="district">
              <!-- Generated Area -->
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="offset-4 col-8">
          <label class="text-inverse font-weight-bold">City</label>
          <div class="form-group">
            <select class="custom-select d-block form-control" id="city" name="city">
              <!-- Generated Area -->
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label class="text-inverse d-flex font-weight-bold" for="validationCustom01">Home address of Sri Lanka
            <span style="font-weight: 300;color: #bf360c; font-size: 0.8em;">&nbsp; (Will not publish, Office purpose only.)</span>
          </label>
          <input type="text" class=" d-block form-control" name="AddressofSriLanka" id="AddressofSriLanka">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('nativeDistrict') ?></label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="nativeDistrict" name="nativeDistrict">
            <!-- Generated Area -->
          </select>
        </div>
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

    loadCountries();
    loadDistricts();
    residenceStatus();
    $('#ifLiveinAnotherCountry').hide();

    var Member = function() {
      this.MemberID = 0;
    }
    var model = new Member();
    model.MemberID = (<?= $this->session->userdata('member_id') ?>);

    ajaxCall('registration/getMemberData', model, function(response) {
      if (response.intCountryId != null) {
        $("#country").val(response.intCountryId);
        $("#district").val(response.intDistrictId);
        $('#district').trigger('change');
        $("#city").val(response.intCityIdIfLiveInSL);
        $('#city').trigger('change');
        $("#AddressofSriLanka").val(response.vcAddOfSriLanka);
        $("#nativeDistrict").val(response.intNativeDistrictId);
      }
      changeResidenceVisibility();
    });

    $('#country').change(function() {
      changeResidenceVisibility();
    });

    function changeResidenceVisibility() {
      if ($('#country').val() != 0 && $('#country').val() != 1) {
        $('#ifLiveinAnotherCountry').show();
      } else {
        $('#ifLiveinAnotherCountry').hide();
        $('#residenceStatus').val(0);
      }
    }

    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/physicalStatus') ?>";
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
      } else if ($('#nativeDistrict').val() == 0) {
        $("#nativeDistrict").focus();
        toastr["error"]("Please select native district !");
      } else {
        {
          var form = $("#addResidenceDetails");
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
                  if (result.dismiss === Swal.DismissReason.timer) {
                    window.location.href = "<?= base_url('Registration/background') ?>";
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
        url: '<?php echo base_url(); ?>Registration/residenceStatus',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load residence status selection data");
          } else {
            $('#residenceStatus').html(data);
            $('#country').val(0);
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
        url: '<?php echo base_url(); ?>Registration/LoadCountries',
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
        url: '<?php echo base_url(); ?>Registration/loadDistricts',
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
        url: '<?php echo base_url(); ?>Registration/loadCities',
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
          toastr["error"]("<?= lang('city') . ' ' . lang('dataCannotRetrieve') . ' Connection error' ?>");
        }
      });
    });
  });
</script>