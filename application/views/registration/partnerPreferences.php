<style>
  .ui-widget-header {

    background: #1edd10 url(<?= base_url('resouces/images/ui-bg_diagonals-thick_18_b81900_40x40_dk_green.png') ?>) 50% 50% !important;

  }

  .dropdown-menu.show {
    background-color: #eceff1;
    box-shadow: 0 2.8px 2.2px rgb(0 0 0 / 2%), 0 6.7px 5.3px rgb(0 0 0 / 3%), 0 12.5px 10px rgb(0 0 0 / 4%), 0 22.3px 17.9px rgb(0 0 0 / 4%), 0 41.8px 33.4px rgb(0 0 0 / 5%), 0 100px 80px rgb(0 0 0 / 7%);
  }

  .filter-option {
    background-color: #ffffff !important;
    border: 1px solid #cfd8dc;
    border-radius: 3px;
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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>



<link rel="stylesheet" href="<?= base_url('resources/css/bootstrap-multiselect.css') ?>">
<script src="<?= base_url('resources/js/bootstrap-multiselect.js') ?>"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


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
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Maritial Status</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="MartialStatusDrp" name="MartialStatusDrp[]">
                  <?php foreach ($LoadMaritalStatusData as $k => $v) { ?>
                    <option value="<?= $v['intMaritalStatusID'] ?>"><?= $v['vcMaritalStatus_en'] ?></option>
                  <?php } ?>

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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="NoOfChildrenDrp" name="NoOfChildrenDrp[]">
                  <?php foreach ($LoadNoOfChildrenData as $k => $v) { ?>
                    <option value="<?= $v['intNoOfChildrenID'] ?>"><?= $v['vcNoOfChildren_en'] ?></option>
                  <?php } ?>
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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="ReligionDrp" name="ReligionDrp[]">

                  <?php foreach ($LoadReligionData as $k => $v) { ?>
                    <option value="<?= $v['intReligionID'] ?>"><?= $v['vcReligion'] ?></option>
                  <?php } ?>


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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="EthnicityDrp" name="EthnicityDrp[]">

                  <?php foreach ($LoadEthnicityData as $k => $v) { ?>
                    <option value="<?= $v['intEthnicityID'] ?>"><?= $v['vcEthnicityName'] ?></option>
                  <?php } ?>
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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="motherToungeDrp" name="motherToungeDrp[]">

                  <?php foreach ($LoadMotherToungeData as $k => $v) { ?>
                    <option value="<?= $v['intMotherTongueID'] ?>"><?= $v['vcMotherTongueName'] ?></option>
                  <?php } ?>
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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="LiveInSriLankaDrp" name="LiveInSriLankaDrp[]">

                  <?php foreach ($LoadLiveInSriLankaData as $k => $v) { ?>
                    <option value="<?= $v['IntProvinceId'] ?>"><?= $v['vcProvinceName'] ?></option>
                  <?php } ?>
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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="EducationLevelDrp" name="EducationLevelDrp[]">

                  <?php foreach ($LoadSummerizedEducationLevelData as $k => $v) { ?>
                    <option value="<?= $v['intEducationLevelSumerizedId'] ?>"><?= $v['vcEducationLevelSumerized'] ?></option>
                  <?php } ?>
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

          <!-- <div id="WorkingWith" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Working With</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select id="WorkingWithDrp" name="WorkingWithDrp[]" multiple="multiple" class="form-control">
                </select>
              </div>
            </div> -->
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
          <!-- </div> -->


          <div id="CareerLevel" class="marginTopPartnerP">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                  <label class="text-inverse font-weight-bold" for="validationCustom02">Career Level</label>
                </div>
              </div>
              <div class="col-lg-6">
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="CareerLevelDrp" name="CareerLevelDrp[]">

                  <?php foreach ($loadWorkingWithData as $k => $v) { ?>
                    <option value="<?= $v['intWorkingWithId'] ?>"><?= $v['vcWorkingWith'] ?></option>
                  <?php } ?>
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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="MonthlyIncomeDrp" name="MonthlyIncomeDrp[]">

                  <?php foreach ($LoadSummerizedMonthtlyIncomeData as $k => $v) { ?>
                    <option value="<?= $v['intMonthlyIncomeSummerisedID'] ?>"><?= $v['vcMonthlyIncomeSummerised'] ?></option>
                  <?php } ?>
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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="AssetValueDrp" name="AssetValueDrp[]">

                  <?php foreach ($LoadSummerizedAssetValuelData as $k => $v) { ?>
                    <option value="<?= $v['intAssetvaluesummerisedID'] ?>"><?= $v['vcAssetvaluesummerised'] ?></option>
                  <?php } ?>
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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="AnyDisabilityDrp" name="AnyDisabilityDrp[]">

                  <?php foreach ($LoadAnyDisabilityData as $k => $v) { ?>
                    <option value="<?= $v['intDisabilityID'] ?>"><?= $v['vcDisability'] ?></option>
                  <?php } ?>
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
                <select class="selectpicker form-control" multiple data-actions-box="true" data-size="5" data-selected-text-format="count > 3" id="DietDrp" name="DietDrp[]">

                  <?php foreach ($LoadDietData as $k => $v) { ?>
                    <option value="<?= $v['intDietID'] ?>"><?= $v['vcDietName'] ?></option>
                  <?php } ?>
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
              <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i>&nbsp; <i class="" id="btnSubmitLoading"></i></button>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<script>
  let navigateBack = "<?= base_url('Registration/privacySettings') ?>";
  let navigateTo = "<?= base_url('Account/AllSingles') ?>";
</script>
<script src="<?= base_url('resources/js/registration_form/partnerPreferences.js') ?>"></script>