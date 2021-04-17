<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
        <h3 class="text-center text-inverse title">Family</h3>
        <hr>
        <form class="container" id="needs-validation" novalidate>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Family Location</label>
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
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Photos of assets, home and family members</label>
              </div>
            </div>
            <div class="col-6">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Type</label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="LiveInSriLanka" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Join</span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Not join</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Values</label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInSriLanka" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Traditional</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Mix of Traditional and Modern</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Modern</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Family Class</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="719">Affluent</option>
                  <option value="720">Upper Middle Class</option>
                  <option value="721">Middle Class</option>
                  <option value="722">Lower Middle Class</option>
                </select>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Culture</label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInSriLanka" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Urban</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Sub Urban</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Rural</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Father Status</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="726" selected="">Employed</option>
                  <option value="727">Business</option>
                  <option value="728">Retired</option>
                  <option value="729">Not Employed</option>
                  <option value="730">Passed away</option>
                  <option value="731">Seperated</option>
                  <option value="732">Sick</option>
                  <option value="733">Mentioned in the writing box (Below)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Mother Status</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="726" selected="">Employed</option>
                  <option value="727">Business</option>
                  <option value="728">Retired</option>
                  <option value="729">Not Employed</option>
                  <option value="730">Passed away</option>
                  <option value="731">Seperated</option>
                  <option value="732">Sick</option>
                  <option value="733">Mentioned in the writing box (Below)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Add Family Details</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
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
    loadDistricts();
    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/personalAssets') ?>";
    });

    $('#btnSubmit').click(function() {
      window.location.href = "<?php echo base_url('Registration/afterMarriage') ?>";
    });

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
          toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') . ' Connection Err' ?>");
        }
      });
    }


  });
</script>