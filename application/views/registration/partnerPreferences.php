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
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>






<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title">Partner Preferences</h3>
        <hr>
        <form method="post" action="<?= base_url('Registration/#') ?>" id="#">

          <div class="row">
            <div class="col-12">
              <div class="text-al-center">
                <h6 class="font-weight-bold">What kind of partner are you looking for</h6>
              </div>
              <h6 class="font-weight-bold">Age</h6>
              <div data-role="rangeslider">
                <p style="color:#616161; font-size:0.8em">Min <span id="ageStart">23</span> years <span style="float:right;">Max <span id="ageEnd">68</span> years</span> </p>
                <div id="slider-range-age"></div>
              </div>
              <div class="text-al-center">
                <h6 class="">(Better to set a gap of 4 years for age)</h6>
              </div>
            </div>
          </div>
          <br>

          <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
              <p for="">Restrict this contact</p>
            </div>
            <div class="col-lg-9 col-md-3 col-12">
              <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                <div class="handle"></div>
              </button>
              <a href="#" data-toggle="popover123" title="Popover Header" data-content="Some content inside the popover"><i class="far fa-question-circle"></i></a>
            </div>
          </div>




          <div class="row">
            <div class="col-12">
              <div class="text-al-center">
              </div>
              <h6 class="font-weight-bold">Height</h6>
              <div data-role="rangeslider">
                <p style="color:#616161; font-size:0.8em">Min <span id="heightStart">4'5"</span> <span style="float:right;">Max <span id="heightEnd">7'0"</span> </span> </p>
                <div id="slider-range-Height"></div>
              </div>
              <div class="text-al-center">
                <h6 class="">(Better to set a gap of 4 inches for height)</h6>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-12">
            <div class="form-group">
              <label class="text-inverse font-weight-bold" for="validationCustom02"><?= lang('weight') . " (" . lang('weightScale') . ")" ?></label>
              <select class="custom-select d-block form-control" id="weight" name="weight">
                <option value=""><?= lang('select') ?></option>
                <option value="30-34"> 30 - 34 </option>
                <option value="35-39"> 35 - 39 </option>
                <option value="40-44"> 40 - 44 </option>
                <option value="45-49"> 45 - 49 </option>
                <option value="50-54"> 50 - 54 </option>
                <option value="55-59"> 55 - 59 </option>
                <option value="60-64"> 60 - 64 </option>
                <option value="65-69"> 65 - 69 </option>
                <option value="70-74"> 70 - 74 </option>
                <option value="75-79"> 75 - 79 </option>
                <option value="80-84"> 80 - 84 </option>
                <option value="85-89"> 85 - 89 </option>
                <option value="90-94"> 90 - 94 </option>
                <option value="95-99"> 95 - 99 </option>
                <option value="100-104"> 100 - 104 </option>
                <option value="105-109"> 105 - 109 </option>
                <option value="110-114"> 110 - 114 </option>
                <option value="115-119"> 115 - 119 </option>
                <option value="120-250"> Over 119 </option>
              </select>
            </div>
          </div>

          <hr>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
  $(function() {



    $('#btnBack').click(function() {
      window.location.href = "<?= base_url('Registration/privacySettings') ?>";
    });

    $('[data-toggle="popover123"]').popover();

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