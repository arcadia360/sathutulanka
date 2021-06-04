<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">Career</h3>
  <form method="post" action="<?= base_url('Registration/addcareerDetails') ?>" id="addcareerDetails">
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Working With</label>
        <div class="form-group">
          <select class="custom-select d-block form-control" id="workingWith" name="workingWith">
            <!-- Generated Area -->
          </select>
        </div>
      </div>
    </div>
    <div id="not-working-or-education">
      <div id="working-as">
        <div class="row">
          <div class="col-12">
            <label class="text-inverse font-weight-bold" for="validationCustom01">Working As</label>
            <div class="form-group">
              <select class="custom-select d-block form-control" id="WorkingAsMainCat" name="WorkingAsMainCat">
                <!-- Generated Area -->
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <select class="custom-select d-block form-control" id="workingAsSubCat" name="workingAsSubCat">
                <!-- Generated Area -->
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label class="text-inverse font-weight-bold" for="validationCustom01">Working Location</label>
          <div class="form-group">
            <select class="custom-select d-block form-control" id="workingLocation" name="workingLocation">
              <option value="0"><?= lang('select') ?></option>
              <option value="Out Side Sri Lanka">Out Side Sri Lanka</option>
              <option value="In Sri Lanka">In Sri Lanka</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row" id="ifWorkingLocationSL">
        <div class="col-12">
          <div class="form-group">
            <select class="custom-select d-block form-control" id="district" name="district">
              <!-- Generated Area -->
            </select>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <select class="custom-select d-block form-control" id="city" name="city">
              <!-- Generated Area -->
            </select>
          </div>
        </div>
      </div>
      <div class="row" id="ifWorkingLocationOS">
        <div class="col-12">
          <div class="form-group">
            <select class="custom-select d-block form-control" id="country" name="country">
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <label class="text-inverse font-weight-bold" for="validationCustom01">Describe Career</label>
          <div class="form-group">
            <textarea class="form-control" id="describeCareer" rows="5" name="describeCareer"></textarea>
          </div>
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
    loadWorkingWith();
    loadWorkingAsMainCat();
    loadCountries();
    $('#ifWorkingLocationOS').hide();
    $('#ifWorkingLocationSL').hide();

    //load countries
    function loadCountries() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadCountries',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#country').html(data);;
            $('#country').val(0);
          }
        },
        error: function() {
          alert('failed to load countries');
        }
      });
    }

    $('#workingWith').change(function() {
      if ($('#workingWith').val() == 6 || $('#workingWith').val() == 7) {
        $('#working-as').hide();
        $('#not-working-or-education').show();
      } else if ($('#workingWith').val() == 8 || $('#workingWith').val() == 9) {
        $('#not-working-or-education').hide();
      } else {
        $('#working-as').show();
        $('#not-working-or-education').show();
      }
    });

    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/education') ?>";
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

      } else if ($('#workingWith').val() != 8 && $('#workingWith').val() != 9 && $('#workingLocation').val() == 0) {
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
                  window.location.href = "<?= base_url('Registration/personalAssets') ?>";
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
    });

    function loadWorkingWith() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/loadWorkingWith',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= 'Woking with' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#workingWith').html(data);;
            $('#workingWith').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= 'working with' . lang('dataCannotRetrieve') . ' Connection Error' ?>");
        }
      });
    }

    function loadWorkingAsMainCat() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/loadWorkingAsMainCat',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= 'Working as' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#WorkingAsMainCat').html(data);;
            $('#WorkingAsMainCat').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= 'working as' . lang('dataCannotRetrieve') . ' Connection Error' ?>");
        }
      });
    }

    //load Working as sub category
    $('#WorkingAsMainCat').change(function() {
      var WorkingAsMainCatId = $('#WorkingAsMainCat').val()
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>Registration/loadWorkingAsSubCat',
        async: false,
        dataType: 'json',
        data: {
          'WorkingAsMainCatId': WorkingAsMainCatId
        },
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= 'Working as sub category ' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#workingAsSubCat').html(data);;
            $('#workingAsSubCat').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= 'Working as sub category ' . lang('dataCannotRetrieve') . ' Connection Error' ?>");
        }
      });
    });
    loadDistricts();

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
</script>