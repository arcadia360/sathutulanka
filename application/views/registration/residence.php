<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title"><?= lang('residance') ?></h3>
        <hr>
        <form method="post" action="<?= base_url('Registration/addResidenceDetails') ?>" id="addResidenceDetails">
          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('currentlyLiveIn') ?></label>
              <div class="form-group">
                <select class="custom-select d-block form-control" id="country" name="country">
                </select>
              </div>
            </div>
          </div>
          <div class="ifLiveInSriLanka">
            <!-- ifLveInSriLanka -->
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label>
                </div>
              </div>
              <div class="col-6">
                <label class="text-inverse font-weight-bold">District</label>
                <div class="form-group">
                  <select class="custom-select d-block form-control" id="district" name="district">
                    <!-- <option value="0"><?= lang('select') ?></option>
                    <option value="">Select 1</option>
                    <option value="">Select 2</option> -->
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
              </div>
              <div class="col-6">
                <label class="text-inverse font-weight-bold">City</label>
                <div class="form-group">
                  <select class="custom-select d-block form-control" id="city" name="city">

                  </select>
                </div>
              </div>
            </div>
          </div><!-- end ifLveInSriLanka -->
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('AddressofSriLanka') . "    " ?> <span style="font-weight: 100;color: #FF9800;">(Will not publish.Office purpose only)</span> </label>
                <input type="text" class=" d-block form-control" name="AddressofSriLanka" id="AddressofSriLanka">
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('nativeDistrict') ?></label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="nativeDistrict" name="nativeDistrict">

                </select>
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

    loadCountries();
    loadDistricts();
    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/physicalStatus') ?>";
    });

    $('#btnSubmit').click(function() {
      // var liveIn = $("input[name=liveIn]").is(":checked");
      var LiveInSriLanka = $("#LiveInSriLanka").is(":checked");
      var LiveInOverSeas = $("#LiveInOverSeas").is(":checked");

      // if (!liveIn) {
      //   toastr["error"]("Please select currently live in");
      // } else 
      // if (LiveInSriLanka && $('#district').val() == 0) {
      //   $("#district").focus();
      //   toastr["error"]("Please select district");
      // } else if (LiveInSriLanka && $('#city').val() == 0) {
      //   $("#city").focus();
      //   toastr["error"]("Please select city");
      // } else if (LiveInOverSeas && $('#country').val() == 0) {
      //   $("#country").focus();
      //   toastr["error"]("Please select country");
      // } else if (jQuery.trim($("#AddressofSriLanka").val()).length == 0) {
      //   toastr["error"]("Please provide address of Sri Lanka");
      // } else if ($('#nativeDistrict').val() == 0) {
      //   $("#nativeDistrict").focus();
      //   toastr["error"]("Please select native district");
      // }

      if ($('#country').val() == 0) {
        $("#country").focus();
        toastr["error"]("Please select currently live in");
      } else if ($('#district').val() == 0) {
        $("#district").focus();
        toastr["error"]("Please select district");
      } else if ($('#city').val() == 0) {
        $("#city").focus();
        toastr["error"]("Please select city");
      } else if (jQuery.trim($("#AddressofSriLanka").val()).length == 0) {
        toastr["error"]("Please provide address of Sri Lanka");
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
                swal({
                  title: 'Success!',
                  text: "Residence details saved successfully!",
                  type: 'success',
                  confirmButtonText: 'OK'
                }).then(() => {
                  window.location.href = "<?= base_url('Registration/background') ?>";
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
      }
      // window.location.href = "<?php echo base_url('Registration/background') ?>";
    });

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
            $('#nativeDistrict').html(data);;
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
            $('#city').html(data);;
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