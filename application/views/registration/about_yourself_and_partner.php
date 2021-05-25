<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title">About Yourself And Partner</h3>
        <hr>
        <p class="lead">Tell more about yourself, partner preferences, family, career-plan or any special details, likes dislikes that you can't mention in other place</p>
        <form method="post" action="<?= base_url('Registration/AddAboutYourselfAndPartner') ?>" id="AddAboutYourselfAndPartner">

          <div class="row">
            <div class="col-12">
              <div class="text-center">
                <h4>Below field is mandatory.</h4>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="aboutYourSelfAndPartner" name="aboutYourSelfAndPartner" rows="8"></textarea>
              </div>
              <div class="text-center">
                <h4>Maximam 500 words (minimum 50)</h4>
              </div>
              <div class="text-center">
                <h5>This writing box will be checked every time when you update it.</h5>
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
</div>

<script>
  $(function() {

    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/myPhotosAndVideos') ?>";
    });
    $('#btnSubmit').click(function() {
      if ($('#aboutYourSelfAndPartner').val() == "") {
        toastr["error"]("Please add about your self and partner");
        $("#aboutYourSelfAndPartner").focus();
      } else if ($("#aboutYourSelfAndPartner").val().length > 2500) {
        toastr["error"]("The About yourself and partner field cannot exceed 2500 characters in length.");
        $("#aboutYourSelfAndPartner").focus();
      } else {
        var form = $("#AddAboutYourselfAndPartner");
        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          dataType: 'json',
          success: function(response) {
            if (response.success == true) {
              Swal.fire({
                icon: 'success',
                title: 'about yourself and partner details saved successfully!',
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = "<?= base_url('Registration/privacySettings') ?>";
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

  });
</script>