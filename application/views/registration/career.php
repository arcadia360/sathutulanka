<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
        <h3 class="text-center text-inverse title">Career</h3>
        <hr>
        <form method="post" action="<?= base_url('Registration/addcareerDetails') ?>" id="addcareerDetails">


          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Working With</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="workingWith" name="workingWith">

                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">WORKING AS</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="WorkingAsMainCat" name="WorkingAsMainCat">

                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="workingAsSubCat" name="workingAsSubCat">

                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">WORKING LOCATION</label>
              </div>
            </div>
            <div class="col-6">
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
            <div class="col-6">

            </div>
            <div class="col-3">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">

                </select>
              </div>
            </div>
            <div class="col-3">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="city" name="city">

                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">DESCRIBE CAREER</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <textarea class="form-control" id="describeCareer" rows="5" name="describeCareer"></textarea>
              </div>
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
  <!-- Container Area End -->

</div>

<script>
  $(function() {
    loadWorkingWith();
    loadWorkingAsMainCat();
    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/education') ?>";
    });

    $('#btnSubmit').click(function() {
      if ($('#workingWith').val() == 0) {
        toastr["error"]("Please select working with");
        $("#workingWith").focus();
      } else if ($('#WorkingAsMainCat').val() == 0) {
        toastr["error"]("Please select working as main category");
        $("#WorkingAsMainCat").focus();
      } else if ($('#workingAsSubCat').val() == 0) {
        toastr["error"]("Please select working as sub category");
        $("#workingAsSubCat").focus();
      } else if ($('#workingLocation').val() == 0) {
        toastr["error"]("Please select working location");
        $("#workingLocation").focus();
      } else if ($('#workingLocation').val() == "In Sri Lanka" && $('#district').val() == 0) {
        toastr["error"]("Please select working district");
        $("#district").focus();
      } else if ($('#workingLocation').val() == "In Sri Lanka" && $('#city').val() == 0) {
        toastr["error"]("Please select working city");
        $("#city").focus();
      } else if ($('#describeCareer').val() == 0) {
        toastr["error"]("Please describe career");
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
              swal({
                title: 'Success!',
                text: "Career details saved successfully!",
                type: 'success',
                confirmButtonText: 'OK'
              }).then(() => {
                window.location.href = "<?php echo base_url('Registration/personalAssets') ?>";
              });


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
      if ($('#workingLocation').val() != "In Sri Lanka") {
        $('#ifWorkingLocationSL').hide();
        $('#district').val(0);
        $('#city').val(0);
      } else {
        $('#ifWorkingLocationSL').show();
      }
    });

  });
</script>