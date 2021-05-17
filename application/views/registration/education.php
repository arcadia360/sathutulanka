<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
        <h3 class="text-center text-inverse title">Education</h3>
        <hr>
        <form method="post" action="<?= base_url('Registration/addEducationDetails') ?>" id="addEducationDetails">


          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Education Level</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="EducationLevel" name="EducationLevel">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="Doctorate">Doctorate</option>
                  <option value="Masters">Masters</option>
                  <option value="Honors Degree">Honors Degree</option>
                  <option value="Bachelor">Bachelor</option>
                  <option value="Associate degree">Associate degree</option>
                  <option value="Undergraduate">Undergraduate</option>
                  <option value="Diploma">Diploma</option>
                  <option value="National collage of education">National collage of education</option>
                  <option value="Vocational and training education">Vocational and training education</option>
                  <option value="Certificates">Certificates</option>
                  <option value="Up to A/L">Up to A/L</option>
                  <option value="Up to O/L">Up to O/L</option>
                  <option value="Less than O/L">Less than O/L</option>
                  <option value="Mentioned in the writing box (Education)">Mentioned in the writing box (Education)</option>
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
                <select class="custom-select d-block form-control" id="EducationField" name="EducationField">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="Administration">Administration</option>
                  <option value="Arts">Arts</option>
                  <option value="Agriculture">Agriculture</option>
                  <option value="Construction">Construction</option>
                  <option value="Commerce and Management">Commerce and Management</option>
                  <option value="Education and Training">Education and Training</option>
                  <option value="Engineering">Engineering</option>
                  <option value="Food">Food</option>
                  <option value="Fisheries">Fisheries</option>
                  <option value="Forestry">Forestry</option>
                  <option value="Finance">Finance</option>
                  <option value="Health and welfare">Health and welfare</option>
                  <option value="Human Personal Services">Human Personal Services</option>
                  <option value="Hospitality Services">Hospitality Services</option>
                  <option value="History">History</option>
                  <option value="Information and Communication Technology">Information and Communication Technology</option>
                  <option value="Journalism and Information">Journalism and Information</option>
                  <option value="Languages">Languages</option>
                  <option value="Low">Low</option>
                  <option value="Logistics Services">Logistics Services</option>
                  <option value="Mathematics and Statistics">Mathematics and Statistics</option>
                  <option value="Manufacturing and Processing">Manufacturing and Processing</option>
                  <option value="Marketing, Sales and Services">Marketing, Sales and Services</option>
                  <option value="Natural Sciences">Natural Sciences</option>
                  <option value="Philosophy">Philosophy</option>
                  <option value="Religion">Religion</option>
                  <option value="Physical Sciences">Physical Sciences</option>
                  <option value="Social Sciences">Social Sciences</option>
                  <option value="Shipping">Shipping</option>
                  <option value="Security Services">Security Services</option>
                  <option value="Transport Distribution">Transport Distribution</option>
                  <option value="Veterinary">Veterinary</option>
                  <option value="Mentioned in the writing box (Below)">Mentioned in the writing box (Below)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">School/ University (Description)</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <textarea class="form-control" id="vcSclUniDescription" name="vcSclUniDescription" rows="5"></textarea>
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
      window.location.href = "<?php echo base_url('Registration/WhoAmI') ?>";
    });

    $('#btnSubmit').click(function() {
      if ($('#EducationLevel').val() == 0) {
        toastr["error"]("Please select Education Level");
        $("#EducationLevel").focus();
      } else if ($('#EducationField').val() == 0) {
        toastr["error"]("Please select Education Field");
        $("#EducationField").focus();
      } else if ($('#vcSclUniDescription').val() == "") {
        toastr["error"]("Please select School University Description");
        $("#vcSclUniDescription").focus();
      } else {
        var form = $("#addEducationDetails");
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              Swal.fire({
                icon: 'success',
                title: 'Education details saved successfully!',
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = "<?= base_url('Registration/career') ?>";
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
          }
        });
      }

    });
  });
</script>