<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 30px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse"><?= lang('residance') ?></h3>
        <hr>
        <form class="container" id="needs-validation" novalidate>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom01"><?= lang('liveAnotherCountry') ?></label>
                <select class="custom-select d-block form-control" id="country" name="bloodGroup">

                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom01"><?= lang('liveInSriLanka') ?></label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="#" name="#">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="">Select 1</option>
                  <option value="">Select 2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="#" name="#">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="">Select 1</option>
                  <option value="">Select 2</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="#" name="#">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="">Select 1</option>
                  <option value="">Select 2</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom01"><?= lang('AddressofSriLanka') ?></label>
                <input type="text" class=" d-block form-control">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse" for="validationCustom01"><?= lang('ownershipOfTheAddress') ?></label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="ownershipOfTheAddress" name="ownershipOfTheAddress" type="radio" class="custom-control-input" value="ownPlace">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('ownPlace') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="ownershipOfTheAddress" name="ownershipOfTheAddress" type="radio" class="custom-control-input" value="notOwnPlace">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('notOwnPlace') ?></span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom01"><?= lang('nativeDistrict') ?></label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="#" name="#">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="">Select 1</option>
                  <option value="">Select 2</option>
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
  });
</script>