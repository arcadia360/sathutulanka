<style>
  .ui-widget-header {

    background: #1edd10 url(<?= base_url('resouces/images/ui-bg_diagonals-thick_18_b81900_40x40_dk_green.png') ?>) 50% 50% !important;

  }

  /* button */
  .example .btn-toggle {
    top: 50%;
    transform: translateY(-50%);
  }

  .btn-toggle {
    margin: 0 4rem;
    padding: 0;
    position: relative;
    border: none;
    height: 1.5rem;
    width: 3rem;
    border-radius: 1.5rem;
    color: #6b7381;
    background: #bdc1c8;
  }

  .btn-toggle:focus,
  .btn-toggle.focus,
  .btn-toggle:focus.active,
  .btn-toggle.focus.active {
    outline: none;
  }

  .btn-toggle:before,
  .btn-toggle:after {
    line-height: 1.5rem;
    width: 4rem;
    text-align: center;
    font-weight: 600;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: absolute;
    bottom: 0;
    transition: opacity 0.25s;
  }

  .btn-toggle:before {
    content: 'No';
    left: -4rem;
  }

  .btn-toggle:after {
    content: 'Yes';
    right: -4rem;
    opacity: 0.5;
  }

  .btn-toggle>.handle {
    position: absolute;
    top: 0.1875rem;
    left: 0.1875rem;
    width: 1.125rem;
    height: 1.125rem;
    border-radius: 1.125rem;
    background: #fff;
    transition: left 0.25s;
  }

  .btn-toggle.active {
    transition: background-color 0.25s;
  }

  .btn-toggle.active>.handle {
    left: 1.6875rem;
    transition: left 0.25s;
  }

  .btn-toggle.active:before {
    opacity: 0.5;
  }

  .btn-toggle.active:after {
    opacity: 1;
  }

  .btn-toggle:before,
  .btn-toggle:after {
    color: #6b7381;
  }

  .btn-toggle.active {
    background-color: #29b5a8;
  }

  /* end button */
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function() {

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

    $("#distididin").click(() => {
      alert($("#ristrictHeight").hasClass("active"));
    });

  });
</script>

<button type="button" id="distididin"> test</button>

<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area Start -->
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
            <div class="col-12">
              <label for="" style="color:#616161; font-size:0.8em">Restrict this contact</label>
              <button type="button" class="btn btn-toggle" data-toggle="button" aria-pressed="true" autocomplete="off" id="ristrictHeight">
                <div class="handle"></div>
              </button>
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


  });
</script>