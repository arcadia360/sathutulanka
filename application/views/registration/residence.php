<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title"><?= lang('residance') ?></h3>
        <hr>
        <form class="container" id="needs-validation" novalidate>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('currentlyLiveIn') ?></label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="LiveInSriLanka" name="liveIn" type="radio" class="custom-control-input" value="<?= lang('sriLanka') ?>">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('sriLanka') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="<?= lang('overSeas') ?>">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('overSeas') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row ifOvereSeas">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('Country') ?></label>
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
                <div class="form-group">
                  <select class="custom-select d-block form-control" id="city" name="city">

                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('AddressofSriLanka') . "    " ?> <span style="font-weight: 100;color: #FF9800;">(Will not publish.Office purpose only)</span> </label>
                  <input type="text" class=" d-block form-control">
                </div>
              </div>
            </div>
          </div><!-- end ifLveInSriLanka -->

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

    $(".ifOvereSeas").hide();
    loadCountries();
    loadDistricts();
    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/physicalStatus') ?>";
    });

    $('#btnSubmit').click(function() {
      window.location.href = "<?php echo base_url('Registration/background') ?>";
    });

    function loadCountries() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadCountries',
        async: false,
        dataType: 'json',
        success: function(data) {
          var html = '';
          var i;
          html += '<option value = 0><?= lang('select'); ?></option>';
          for (i = 0; i < data.length; i++) {
            html += '<option value=' + data[i].intCountryId + ' >' + data[i].vcCountry_si + '</option>';
          }
          $('#country').html(html);
          $('#country').val(0);
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
          toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') . ' Connection Err' ?>");
        }
      });
    }

    //load city list
    $('#district').change(function() {
      var districtID = $('#district').val()
      console.log(districtID);
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
          toastr["error"]("<?= lang('city') . ' ' . lang('dataCannotRetrieve') . ' Connection Err' ?>");
        }
      });
    });

    $("#LiveInOverSeas").click(function() {
      $(".ifLiveInSriLanka").hide();
      $(".ifOvereSeas").show();
    });

    $("#LiveInSriLanka").click(function() {
      $(".ifLiveInSriLanka").show();
      $(".ifOvereSeas").hide();
      $("#country").val('0');

    });

  });
</script>