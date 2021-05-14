<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title"><?= lang('background') ?></h3>
        <hr>
        <form method="post" action="<?= base_url('Registration/addBackgroundDetails') ?>" id="addBackgroundDetails">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('motherTongue') ?></label>
                <select class="custom-select d-block form-control" id="motherTongue" name="motherTongue">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="sinhala"><?= lang('sinhala') ?></option>
                  <option value="tamil"><?= lang('tamil') ?></option>
                  <option value="english"><?= lang('english') ?></option>
                  <option value="other"><?= lang('other') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('ethnicity') ?></label>
                <select class="custom-select d-block form-control" id="ethnicity" name="ethnicity">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="Sinhalese"><?= lang('Sinhalese') ?></option>
                  <option value="sriLankanTamils"><?= lang('sriLankanTamils') ?></option>
                  <option value="muslims"><?= lang('muslims') ?></option>
                  <option value="indianTamils"><?= lang('indianTamils') ?></option>
                  <option value="sriLankanMalays"><?= lang('sriLankanMalays') ?></option>
                  <option value="burghers"><?= lang('burghers') ?></option>
                  <option value="mentionedInMyStory"><?= lang('mentionedInMyStory') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('religion') ?></label>
                <select class="custom-select d-block form-control" id="religion" name="religion">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="buddhist"><?= lang('buddhist') ?></option>
                  <option value="hindu"><?= lang('hindu') ?></option>
                  <option value="islam"><?= lang('islam') ?></option>
                  <option value="christians"><?= lang('christians') ?></option>
                  <option value="romanCatholic"><?= lang('romanCatholic') ?></option>
                  <option value="mentionedInMyStory"><?= lang('mentionedInMyStory') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('caste') ?></label>
                <select class="custom-select d-block form-control" id="caste" name="caste">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">Select 1</option>
                  <option value="2">Select 2</option>
                  <option value="mentionedInMyStory"><?= lang('mentionedInMyStory') ?></option>
                  <option value="disregardTheCaste"><?= lang('disregardTheCaste') ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row" id="sub-caste-div">
            <div class="col-12">
              <div class="form-group">
                <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('subCaste') ?></label>
                <select class="custom-select d-block form-control" id="subCaste" name="subCaste">

                </select>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('policeReport') ?></label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="policeReport" name="policeReport" type="radio" class="custom-control-input" value="1" checked>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('canProvide') ?></span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="policeReport" name="policeReport" type="radio" class="custom-control-input" value="0">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?= lang('cantProvide') ?></span>
                  </label>
                </div>
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
    loadCaste();
    $('#btnSubmit').click(function() {
      var policeReport = $("input[name=policeReport]").is(":checked");
      if ($('#motherTongue').val() == 0) {
        toastr["error"]("Please select mother tounge");
        $("#motherTongue").focus();
      } else if ($('#ethnicity').val() == 0) {
        toastr["error"]("Please select ethnicity");
        $("#ethnicity").focus();
      } else if ($('#religion').val() == 0) {
        toastr["error"]("Please select religion");
        $("#religion").focus();
      } else if ($('#caste').val() == 0) {
        toastr["error"]("Please select caste");
        $("#caste").focus();
      } else if (($('#caste').val() != 0 && $('#caste').val() != 2 && $('#caste').val() != 1) && $('#subCaste').val() == 0) {
        toastr["error"]("Please select sub caste");
        $("#subCaste").focus();
      } else if (!policeReport) {
        toastr["error"]("Please select police report");
      } else {
        var form = $("#addBackgroundDetails");
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              swal({
                title: 'Success!',
                text: "Background details saved successfully!",
                type: 'success',
                confirmButtonText: 'OK'
              }).then(() => {
                window.location.href = "<?php echo base_url('Registration/lifeStyle') ?>";
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

    function loadCaste() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/loadCaste',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= 'Caste ' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#caste').html(data);;
            $('#caste').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= 'Caste ' . lang('dataCannotRetrieve') . ' Connection error' ?>");
        }
      });
    }

    //load sub caste 
    $('#caste').change(function() {
      if (($('#caste').val() != 0 && $('#caste').val() != 1 && $('#caste').val() != 2)) {
        var casteID = $('#caste').val()
        $.ajax({
          type: 'POST',
          url: '<?php echo base_url(); ?>Registration/loadSubCaste',
          async: false,
          dataType: 'json',
          data: {
            'casteID': casteID
          },
          success: function(data) {
            if (!data) {
              toastr["error"]("<?= 'Caste ' . lang('dataCannotRetrieve') ?>");
            } else {
              $('#subCaste').html(data);;
              $('#subCaste').val(0);
            }
          },
          error: function() {
            toastr["error"]("<?= 'Caste ' . lang('dataCannotRetrieve') . ' Connection Err' ?>");
          }
        });
      } else {
        $('#sub-caste-div').hide();
        $('#subCaste').val(0);
      }
    });

    $('#sub-caste-div').hide();

    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/residence') ?>";
    });

    // $('#btnSubmit').click(function() {
    // window.location.href = "<?php echo base_url('Registration/lifeStyle') ?>";
    // });

    $('#caste').change(function() {
      var caste = $('#caste').val();
      console.log(caste);
      if (caste == 0 || caste == 1 || caste == 2) {
        $('#sub-caste-div').hide();
      } else {
        $('#sub-caste-div').show();
      }
    });

  });
</script>