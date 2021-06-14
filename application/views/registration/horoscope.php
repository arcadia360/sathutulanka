<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">Horoscope</h3>
  <div class="row">
    <div class="container">
      <button class="btn btn-info float-right" type="button" id="btnSkip">Skip this step &nbsp; <i class="fas fa-forward"></i></button>
    </div>
  </div>
  <br>
  <form method="post" action="<?= base_url('Registration/addHoroscopeDetails') ?>" id="addHoroscopeDetails">
    <div class="row">
      <div class="col-12">
        <label class="text-inverse font-weight-bold" for="validationCustom01">Matching Horoscope</label>
        <div class="row">
          <div class="col-4">
            <center>
              <input id="matchingHoroscope1" name="matchingHoroscope" id="matchingHoroscope1" type="radio" value="Very Important">
              <br>
              <span class="custom-control-description">Very Important</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="matchingHoroscope2" name="matchingHoroscope" id="matchingHoroscope2" type="radio" value="Important">
              <br>
              <span class="custom-control-description">Important</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input id="matchingHoroscope3" name="matchingHoroscope" id="matchingHoroscope3" type="radio" value="Not Important">
              <br>
              <span class="custom-control-description">Not Important</span>
            </center>
          </div>
        </div>
      </div>
    </div>
    <br>
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
            <center>
              <input name="PapaKendara" id="PapaKendara1" type="radio" value="Dont Know">
              <br>
              <span class="custom-control-description">Dont Know</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input name="PapaKendara" id="PapaKendara2" type="radio" value="Yes">
              <br>
              <span class="custom-control-description">Yes</span>
            </center>
          </div>
          <div class="col-4">
            <center>
              <input name="PapaKendara" id="PapaKendara3"  type="radio" value="No">
              <br>
              <span class="custom-control-description">No</span>
            </center>
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

    FillHorascopeData();

    function FillHorascopeData() {
      var Member = function() {
        this.MemberID = 0;
      }
      var model = new Member();
      model.MemberID = (<?= $this->session->userdata('member_id') ?>);

      ajaxCall('registration/getMemberData', model, function(response) {
        if (response.vcMatchingHoroscope != null) {
          var MatchingHoroscope = (response.vcMatchingHoroscope);
          if (MatchingHoroscope == "Very Important") {
            $("#matchingHoroscope1").prop("checked", true);
          } else if (MatchingHoroscope == "Important") {
            $("#matchingHoroscope2").prop("checked", true);
          } else if (MatchingHoroscope == "Not Important") {
            $("#matchingHoroscope3").prop("checked", true);
          }
          $("#ZodiacSign").val(response.vcZodiacSign);
          $("#Ganaya").val(response.vcGanaya);
          $("#Nekatha").val(response.vcNekatha);
          $("#Ravi").val(response.intRavi);
          $("#Moon").val(response.intMoon);
          $("#Mars").val(response.intMars);
          $("#Mercury").val(response.intMercury);
          $("#Jupiter").val(response.intJupiter);
          $("#Venus").val(response.intVenus);
          $("#Saturn").val(response.intSaturn);
          $("#Rahu").val(response.intRahu);
          $("#Kethu").val(response.intKethu);
          var PapaKendara = (response.vcPapaKendara);
          if (PapaKendara == "Dont Know") {
            $("#PapaKendara1").prop("checked", true);
          } else if (MatchingHoroscope == "Yes") {
            $("#PapaKendara2").prop("checked", true);
          } else if (MatchingHoroscope == "No") {
            $("#PapaKendara3").prop("checked", true);
          }

        }
      });
    }




    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/afterMarriage') ?>";
    });

    $('#btnSubmit').click(function() {
      var isMatchingHoroscopeSelected = $("input[name=matchingHoroscope]").is(":checked");
      var isPapaKendaraSelected = $("input[name=PapaKendara]").is(":checked");
      if (!isMatchingHoroscopeSelected) {
        toastr["error"]("Please select matching horoscope !");
      } else if ($('#ZodiacSign').val() == 0) {
        toastr["error"]("Please select zodiac sign !");
        $("#ZodiacSign").focus();
      } else if ($('#Ganaya').val() == 0) {
        toastr["error"]("Please select ganaya !");
        $("#Ganaya").focus();
      } else if ($('#Nekatha').val() == 0) {
        toastr["error"]("Please select nekatha !");
        $("#Nekatha").focus();
      } else if ($('#Ravi').val() == 0) {
        toastr["error"]("Please select ravi !");
        $("#Ravi").focus();
      } else if ($('#Moon').val() == 0) {
        toastr["error"]("Please select moon !");
        $("#Moon").focus();
      } else if ($('#Mars').val() == 0) {
        toastr["error"]("Please select mars !");
        $("#Mars").focus();
      } else if ($('#Mercury').val() == 0) {
        toastr["error"]("Please select mercury !");
        $("#Mercury").focus();
      } else if ($('#Jupiter').val() == 0) {
        toastr["error"]("Please select jupiter !");
        $("#Jupiter").focus();
      } else if ($('#Venus').val() == 0) {
        toastr["error"]("Please select venus !");
        $("#Venus").focus();
      } else if ($('#Saturn').val() == 0) {
        toastr["error"]("Please select saturn !");
        $("#Saturn").focus();
      } else if ($('#Kethu').val() == 0) {
        toastr["error"]("Please select kethu !");
        $("#Kethu").focus();
      } else if (!isPapaKendaraSelected) {
        toastr["error"]("Please select papa kendara !");
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
                title: 'Horoscope details saved successfully !',
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