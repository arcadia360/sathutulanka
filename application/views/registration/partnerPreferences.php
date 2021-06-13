<style>
  .ui-widget-header {

    background: #1edd10 url(<?= base_url('resouces/images/ui-bg_diagonals-thick_18_b81900_40x40_dk_green.png') ?>) 50% 50% !important;

  }
</style>



<!-- slider -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="<?= base_url('resources/css/btnStyle.css') ?>">

<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script> -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="<?= base_url('resources/css/bootstrap-multiselect.css') ?>">
<script src="<?= base_url('resources/js/bootstrap-multiselect.js') ?>"></script>

<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title">Partner Preferences</h3>
        <hr>
        <form method="post" action="<?= base_url('Registration/addPartnerPreference') ?>" id="addPartnerPreference">


          <div class="row">
            <div class="col-12">
              <div class="text-al-center">
                <h6 class="font-weight-bold">What kind of partner are you looking for</h6>
              </div>
              <h6 class="font-weight-bold">Age</h6>
              <div data-role="rangeslider">
                <p style="color:#616161; font-size:0.8em">Min <span id="ageStart">23</span> years <span style="float:right;">Max <span id="ageEnd">63</span> years</span> </p>
                <div id="slider-range-age"></div>
              </div>
              <div class="text-al-center">
                <h6 class="">(Better to set a gap of 4 years for age)</h6>
              </div>
            </div>
          </div>
          <br>

          <!-- <div class="row">
            <div class="col-lg-2 col-md-3 col-12">
              <p class="sm-text" for="">Restrict this contact</p>
            </div>
            <div class="col-lg-10 col-md-3 col-12">
              <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                <div class="handle"></div>
              </button>
              <a href="#" data-toggle="popover123" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
            </div>
          </div> -->




          <div class="row">
            <div class="col-12">
              <div class="text-al-center">
              </div>
              <h6 class="font-weight-bold">Height</h6>
              <div data-role="rangeslider">
                <p style="color:#616161; font-size:0.8em">Min <span id="heightStart">5'0"</span> <span style="float:right;">Max <span id="heightEnd">6'8"</span> </span> </p>
                <div id="slider-range-Height"></div>
              </div>
              <div class="text-al-center">
                <h6 class="">(Better to set a gap of 4 inches for height)</h6>
              </div>
            </div>
          </div>


          <div id="maritialDetails" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Martial Status</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="MartialStatusDrp" name="MartialStatusDrp[]" multiple="multiple" class="form-control">
                </select>
              </div>
            </div>

            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="restrictMartialStatusPop" title="Martial Status" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="Children" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Children</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="NoOfChildrenDrp" name="NoOfChildrenDrp[]" multiple="multiple" class="form-control">
                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="Religion" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Religion</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="ReligionDrp" name="ReligionDrp[]" multiple="multiple" class="form-control">
                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="Ethnicity" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Ethnicity</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="EthnicityDrp" name="EthnicityDrp[]" multiple="multiple" class="form-control">
                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="motherTounge" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Mother Tounge</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="motherToungeDrp" name="motherToungeDrp[]" multiple="multiple" class="form-control">
                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="LiveInSriLanka" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Live in Sri Lanka</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="LiveInSriLankaDrp" name="LiveInSriLankaDrp[]" multiple="multiple" class="form-control">
                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="EducationLevel" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Education Level</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="EducationLevelDrp" name="EducationLevelDrp[]" multiple="multiple" class="form-control">

                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="CareerLevel" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Career Level</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="CareerLevelDrp" name="CareerLevelDrp[]" multiple="multiple" class="form-control">
                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="MonthlyIncome" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Monthly Income</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="MonthlyIncomeDrp" name="MonthlyIncomeDrp[]" multiple="multiple" class="form-control">

                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="AssetValue" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Asset Value</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="AssetValueDrp" name="AssetValueDrp[]" multiple="multiple" class="form-control">

                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="AnyDisability" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Any Disability</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="AnyDisabilityDrp" name="AnyDisabilityDrp[]" multiple="multiple" class="form-control">

                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <div id="Diet" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Diet</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="DietDrp" name="DietDrp[]" multiple="multiple" class="form-control">

                </select>
              </div>
            </div>
            <!-- <div class="row">
              <div class="col-lg-2 col-md-3 col-12">
                <p class="sm-text" for="">Restrict this contact</p>
              </div>
              <div class="col-lg-10 col-md-3 col-12">
                <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" id="restrictMartialStatusBtn">
                  <div class="handle"></div>
                </button>
                <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
              </div>
            </div> -->
          </div>

          <hr>
          <div class="row">
            <div class="col-12">
              <button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
              <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i></button>
            </div>
          </div>

      </div>


      </form>
    </div>
  </div>
</div>
</div>


<script>
  $(function() {
    LoadMaritalStatusData();
    LoadReligionData();
    LoadNoOfChildrenData();
    LoadEthnicityData();
    LoadMotherToungeData();
    LoadLiveInSriLankaData();
    LoadCareerLevelData();
    LoadAnyDisabilityData();
    LoadDietData();
    LoadSummerizedEducationLevelData();
    LoadSummerizedMonthtlyIncomeData();
    LoadSummerizedAssetValuelData();

    $('#btnSubmit').click(function() {
      // if ($('#MartialStatusDrp').val() == 0) {
      //   toastr["error"]("Please select Martial Status !");
      //   $("#MartialStatusDrp").focus();
      // } else if ($('#NoOfChildrenDrp').val() == 0) {
      //   toastr["error"]("Please select Children !");
      //   $("#NoOfChildrenDrp").focus();
      // } else if ($('#ReligionDrp').val() == 0) {
      //   toastr["error"]("Please select Religion !");
      //   $("#ReligionDrp").focus();
      // } else if ($('#motherToungeDrp').val() == 0) {
      //   toastr["error"]("Please select Mother Tounge !");
      //   $("#motherToungeDrp").focus();
      // } else if ($('#LiveInSriLankaDrp').val() == 0) {
      //   toastr["error"]("Please select Live in Sri Lanka !");
      //   $("#LiveInSriLankaDrp").focus();
      // } else if ($('#EducationLevelDrp').val() == 0) {
      //   toastr["error"]("Please select Education Level!");
      //   $("#EducationLevelDrp").focus();
      // } else if ($('#CareerLevelDrp').val() == 0) {
      //   toastr["error"]("Please select Career Level !");
      //   $("#CareerLevelDrp").focus();
      // } else if ($('#MonthlyIncomeDrp').val() == 0) {
      //   toastr["error"]("Please select Monthly Income !");
      //   $("#MonthlyIncomeDrp").focus();
      // } else if ($('#AssetValueDrp').val() == 0) {
      //   toastr["error"]("Please select Asset Value !");
      //   $("#AssetValueDrp").focus();
      // } else if ($('#AnyDisabilityDrp').val() == 0) {
      //   toastr["error"]("Please select Any Disability !");
      //   $("#AnyDisabilityDrp").focus();
      // } else if ($('#DietDrp').val() == 0) {
      //   toastr["error"]("Please select Diet !");
      //   $("#DietDrp").focus();
      // } else {
      let memberPreferedFromAge = $("#slider-range-age").slider("values", 0);
      let memberPreferedToAge = $("#slider-range-age").slider("values", 1);
      let memberPreferedFromHeight = toInches($('#slider-range-Height').slider("values", 0));
      let memberPreferedToHeight = toInches($('#slider-range-Height').slider("values", 1));


      var form = $("#addPartnerPreference");
      $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize() + '&' + 'memberPreferedFromAge=' + memberPreferedFromAge + '&' + 'memberPreferedToAge=' + memberPreferedToAge + '&' + 'memberPreferedFromHeight=' + memberPreferedFromHeight + '&' + 'memberPreferedToHeight=' + memberPreferedToHeight,
        dataType: 'json',
        success: function(response) {
          if (response.success == true) {
            Swal.fire({
              icon: 'success',
              title: 'Partner preference saved successfully !',
              showConfirmButton: false,
              timer: 2000
            }).then((result) => {
              if (result.dismiss === Swal.DismissReason.timer) {
                // window.location.href = "<?= base_url('Registration/WhoAmI') ?>";
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
      // }
    });

    function LoadMaritalStatusData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadMaritalStatusData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"](" Failed to load Martial Status Data");
          } else {

            $('#MartialStatusDrp').html(data);
            $('#MartialStatusDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });
          }
        },
        error: function() {
          toastr["error"](" Internal error Failed to load Martial Status Data");
        }
      });
    }

    function LoadNoOfChildrenData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadNoOfChildrenData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load children Data");
          } else {
            $('#NoOfChildrenDrp').html(data);
            $('#NoOfChildrenDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"](" Internal error Failed to load children Data");
        }
      });
    }



    // $('[data-toggle="restrictMartialStatusPop"]').popover({
    //   trigger: 'focus'
    // });

    function LoadReligionData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadReligionData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load Religion Data");
          } else {
            $('#ReligionDrp').html(data);
            $('#ReligionDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"]("Internal error Failed to load Religion Data");
        }
      });
    }

    function LoadEthnicityData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadEthnicityData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load Ethnicity Data");
          } else {
            $('#EthnicityDrp').html(data);
            $('#EthnicityDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"]('Internal error Failed to load Ethnicity Data');
        }
      });
    }

    function LoadMotherToungeData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadMotherToungeData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load mother tounge data");
          } else {
            $('#motherToungeDrp').html(data);
            $('#motherToungeDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"]('Internal error Failed to load mother tounge data');

        }
      });
    }

    function LoadLiveInSriLankaData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadLiveInSriLankaData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load live in Sri Lanka data");
          } else {
            $('#LiveInSriLankaDrp').html(data);
            $('#LiveInSriLankaDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"]('Internal error Failed to load live in Sri Lanka data');

        }
      });
    }

    function LoadSummerizedEducationLevelData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadSummerizedEducationLevelData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load Education Level data");
          } else {
            $('#EducationLevelDrp').html(data);
            $('#EducationLevelDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"]('Internal error Failed to load Education Level data');

        }
      });
    }

    function LoadCareerLevelData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/loadWorkingAsMainCat',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load career level data");
          } else {
            $('#CareerLevelDrp').html(data);
            $('#CareerLevelDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"]('Internal error Failed to load career level data');

        }
      });
    }

    //


    function LoadSummerizedMonthtlyIncomeData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadSummerizedMonthtlyIncomeData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load Monthly Income data");
          } else {
            $('#MonthlyIncomeDrp').html(data);
            $('#MonthlyIncomeDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"]('Internal error,Failed to load Monthly Income data');

        }
      });
    }

    function LoadSummerizedAssetValuelData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadSummerizedAssetValuelData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load Asset Value data");
          } else {
            $('#AssetValueDrp').html(data);
            $('#AssetValueDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });

          }
        },
        error: function() {
          toastr["error"]('Internal error Failed to load Asset Value data');

        }
      });
    }



    $('#AssetValueDrp').multiselect({
      includeSelectAllOption: true,
      selectAllValue: 0,
      buttonWidth: '100%'
    });

    function LoadAnyDisabilityData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadAnyDisabilityData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load any disability data");
          } else {
            $('#AnyDisabilityDrp').html(data);
            $('#AnyDisabilityDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });
          }
        },
        error: function() {
          toastr["error"]('Internal error Failed load any disability data');

        }
      });
    }

    function LoadDietData() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/LoadDietData',
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("Failed to load diet data");
          } else {
            $('#DietDrp').html(data);
            $('#DietDrp').multiselect({
              includeSelectAllOption: true,
              selectAllValue: 0,
              buttonWidth: '100%'
            });
          }
        },
        error: function() {
          toastr["error"]('Internal error Failed load diet data');

        }
      });
    }
    // $('[data-toggle="popover123"]').popover({
    //   trigger: 'focus'
    // });


    $('#btnBack').click(function() {
      window.location.href = "<?= base_url('Registration/privacySettings') ?>";
    });

    // range slider age 
    $("#slider-range-age").slider({
      range: true,
      min: 18,
      max: 68,
      values: [23, 63],
      slide: function(event, ui) {
        let ageStart = ui.values[0];
        let ageEnd = ui.values[1];
        let midValue = ageEnd - ageStart;
        if (midValue <= 4) {
          return false;
        } else {
          $('#ageStart').text(ageStart);
          $('#ageEnd').text(ageEnd);
        }
      }
    });
    // range slider age end

    // slider-range-Height end
    function toInches(n) {
      return Math.floor(n / 12) + "'" + (n % 12) + '"';
    }
    $(function() {
      $("#slider-range-Height").slider({
        min: 54,
        max: 84,
        values: [60, 80],
        range: true,
        slide: function(event, ui) {
          let heightStart = ui.values[0];
          let heightEnd = ui.values[1];
          let heightMidValue = heightEnd - heightStart;
          if (heightMidValue <= 4.8) {
            return false;
          } else {
            $('#heightStart').text(toInches(ui.values[0]));
            $('#heightEnd').text(toInches(ui.values[1]));
          }
        }
      });
    });
    // slider-range-Height end

    // $("#distididin").click(() => {
    //   alert($("#ristrictHeight").hasClass("active"));
    // });

    // arrange progress bar
    // $("#slider-range-age").slider("option", "values", [1, 50]);

    // $('#togBtn').toggle(function() {
    //     alert();
    //   }

    // );

    // $("#distididin").click(function() {
    //   alert($('#togleBtnDiv').val());
    // });

    // $("#togleBtnDiv").toggle(function() {
    //   alert($('#togleBtnDiv').val());
    // });

  });
</script>