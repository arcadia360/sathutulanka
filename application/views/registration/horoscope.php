<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title">Horoscope</h3>
        <hr>
        <div class="row">
          <div class="container">
            <button class="btn btn-info" style="width: 150px; margin-bottom:20px; float:right;" type="button" id="btnSkip">Skip this step &nbsp; <i class="fas fa-forward"></i></button>
          </div>
        </div>

        <form method="post" action="<?= base_url('Registration/addHoroscopeDetails') ?>" id="addHoroscopeDetails">
          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Matching Horoscope</label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="VeryImportan" name="matchingHoroscope" type="radio" class="custom-control-input" value="Very Important" checked>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Very Important</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="Important" name="matchingHoroscope" type="radio" class="custom-control-input" value="Important">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Important</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="Not Important" name="matchingHoroscope" type="radio" class="custom-control-input" value="Not Important">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Not Important</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Zodiac Sign</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="ZodiacSign" name="ZodiacSign" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="Aries">Aries</option>
                  <option value="Taurus">Taurus</option>
                  <option value="Gemini">Gemini</option>
                  <option value="Cancer">Cancer</option>
                  <option value="Leo">Leo</option>
                  <option value="Virgo">Virgo</option>
                  <option value="Libra">Libra</option>
                  <option value="Scorpio">Scorpio</option>
                  <option value="Sagittarius">Sagittarius</option>
                  <option value="896">Capricorn</option>
                  <option value="897">Aquarius</option>
                  <option value="898">Pisces</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Ganaya</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Ganaya" name="Ganaya" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="Dewa">Dewa</option>
                  <option value="Manushya">Manushya</option>
                  <option value="Raksha">Raksha</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Nekatha</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Nekatha" name="Nekatha" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="Asvida">Asvida</option>
                  <option value="Berana">Berana</option>
                  <option value="Kethi">Kethi</option>
                  <option value="Rehena">Rehena</option>
                  <option value="Muwasirasa">Muwasirasa</option>
                  <option value="Ada">Ada</option>
                  <option value="Punawasa">Punawasa</option>
                  <option value="Pusha">Pusha</option>
                  <option value="Aslisa">Aslisa</option>
                  <option value="Maa">Maa</option>
                  <option value="Puwapal">Puwapal</option>
                  <option value="Uthurupal">Uthurupal</option>
                  <option value="Hatha">Hatha</option>
                  <option value="Sitha">Sitha</option>
                  <option value="Saa">Saa</option>
                  <option value="Visa">Visa</option>
                  <option value="Anura">Anura</option>
                  <option value="Deta">Deta</option>
                  <option value="Moola">Moola</option>
                  <option value="Puwasala">Puwasala</option>
                  <option value="Uthurasala">Uthurasala</option>
                  <option value="Suwana">Suwana</option>
                  <option value="Deneta">Deneta</option>
                  <option value="Siyawasa">Siyawasa</option>
                  <option value="Puwaputupa">Puwaputupa</option>
                  <option value="Uthuruputupa">Uthuruputupa</option>
                  <option value="Rewathi">Rewathi</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <h4 class="text-center ">Grahaya</h4>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Ravi</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Ravi" name="Ravi" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Moon</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Moon" name="Moon" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Mars</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Mars" name="Mars" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Mercury</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Mercury" name="Mercury" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Jupiter</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Jupiter" name="Jupiter" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Venus</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Venus" name="Venus" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Saturn</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Saturn" name="Saturn" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Rahu</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Rahu" name="Rahu" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Kethu</label>
            </div>
            <div class="col-lg-8 col-12">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="Kethu" name="Kethu" required>
                  <option value="0"><?= lang('select') ?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label class="text-inverse font-weight-bold" for="validationCustom01">Papa Kendara</label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input name="PapaKendara" type="radio" class="custom-control-input" value="Dont Know" checked>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Dont Know</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input name="PapaKendara" type="radio" class="custom-control-input" value="Yes">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Yes</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input name="PapaKendara" type="radio" class="custom-control-input" value="No">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">No</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
              <button class="btn btn-info" style="width: 150px;" id="btnBack" type="button">BACK</button>
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
    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/afterMarriage') ?>";
    });

    $('#btnSubmit').click(function() {
      var isMatchingHoroscopeSelected = $("input[name=matchingHoroscope]").is(":checked");
      var isPapaKendaraSelected = $("input[name=PapaKendara]").is(":checked");
      if (!isMatchingHoroscopeSelected) {
        toastr["error"]("Please select matching horoscope");
      } else if ($('#ZodiacSign').val() == 0) {
        toastr["error"]("Please select zodiac sign");
        $("#ZodiacSign").focus();
      } else if ($('#Ganaya').val() == 0) {
        toastr["error"]("Please select ganaya");
        $("#Ganaya").focus();
      } else if ($('#Nekatha').val() == 0) {
        toastr["error"]("Please select nekatha");
        $("#Nekatha").focus();
      } else if ($('#Ravi').val() == 0) {
        toastr["error"]("Please select ravi");
        $("#Ravi").focus();
      } else if ($('#Moon').val() == 0) {
        toastr["error"]("Please select moon");
        $("#Moon").focus();
      } else if ($('#Mars').val() == 0) {
        toastr["error"]("Please select mars");
        $("#Mars").focus();
      } else if ($('#Mercury').val() == 0) {
        toastr["error"]("Please select mercury");
        $("#Mercury").focus();
      } else if ($('#Jupiter').val() == 0) {
        toastr["error"]("Please select jupiter");
        $("#Jupiter").focus();
      } else if ($('#Venus').val() == 0) {
        toastr["error"]("Please select venus");
        $("#Venus").focus();
      } else if ($('#Saturn').val() == 0) {
        toastr["error"]("Please select saturn");
        $("#Saturn").focus();
      } else if ($('#Kethu').val() == 0) {
        toastr["error"]("Please select kethu");
        $("#Kethu").focus();
      } else if (!isPapaKendaraSelected) {
        toastr["error"]("Please select papa kendara");
      } else {
        var form = $("#addHoroscopeDetails");
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              Swal.fire({
                icon: 'success',
                title: 'Horoscope details saved successfully!',
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = "<?= base_url('Registration/myPhotosAndVideos') ?>";
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
          },
          error: function() {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Internal Server Error! Please contact system administrator.',
            })
          }
        });
      }
    });

    $('#btnSkip').click(function() {
      window.location.href = "<?php echo base_url('Registration/myPhotosAndVideos') ?>";
    });


  });
</script>