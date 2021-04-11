<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
        <h3 class="text-center text-inverse title">Education</h3>
        <hr>
        <form class="container" id="needs-validation" novalidate>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Education Level</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="#" name="#">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="634">Doctorate</option>
                  <option value="635">Masters</option>
                  <option value="636">Honors Degree</option>
                  <option value="637">Bachelor</option>
                  <option value="639">Associate degree</option>
                  <option value="638">Undergraduate</option>
                  <option value="640">Diploma</option>
                  <option value="641">National collage of education</option>
                  <option value="642">Vocational and training education</option>
                  <option value="643">Certificates</option>
                  <option value="644">Up to A/L</option>
                  <option value="645">Up to O/L</option>
                  <option value="646">Less than O/L</option>
                  <option value="647">Mentioned in the writing box (Education)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Education Field</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="#" name="#">
                  <option value="976" selected="">Administration</option>
                  <option value="977">Arts</option>
                  <option value="978">Agriculture</option>
                  <option value="979">Construction</option>
                  <option value="980">Commerce and Management</option>
                  <option value="648">Education and Training</option>
                  <option value="649">Engineering</option>
                  <option value="981">Food</option>
                  <option value="982">Fisheries</option>
                  <option value="983">Forestry</option>
                  <option value="984">Finance</option>
                  <option value="985">Health and welfare</option>
                  <option value="986">Human Personal Services</option>
                  <option value="987">Hospitality Services</option>
                  <option value="988">History</option>
                  <option value="989">Information and Communication Technology</option>
                  <option value="990">Journalism and Information</option>
                  <option value="991">Languages</option>
                  <option value="992">Low</option>
                  <option value="994">Logistics Services</option>
                  <option value="995">Mathematics and Statistics</option>
                  <option value="996">Manufacturing and Processing</option>
                  <option value="997">Marketing, Sales and Services</option>
                  <option value="998">Natural Sciences</option>
                  <option value="999">Philosophy</option>
                  <option value="1000">Religion</option>
                  <option value="1001">Physical Sciences</option>
                  <option value="1002">Social Sciences</option>
                  <option value="1003">Shipping</option>
                  <option value="1004">Security Services</option>
                  <option value="1005">Transport Distribution</option>
                  <option value="1006">Veterinary</option>
                  <option value="1007">Mentioned in the writing box (Below)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">School/ University</label>
              </div>
            </div>
            <div class="col-6">
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

    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/WhoAmI') ?>";
    });

    $('#btnSubmit').click(function() {
      window.location.href = "<?php echo base_url('Registration/career') ?>";
    });
  });
</script>