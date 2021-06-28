<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">About Yourself And Partner</h3>
  <p class="text-justify">Tell more about yourself, partner preferences, family, career-plan or any special details, likes dislikes that you can't mention in other place</p>
  <form method="post" action="<?= base_url('Registration/AddAboutYourselfAndPartner') ?>" id="AddAboutYourselfAndPartner">
    <div class="row">
      <div class="col-12">
        <div class="text-center">
          <h5>Below field is mandatory.</h5>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="aboutYourSelfAndPartner" name="aboutYourSelfAndPartner" rows="8"></textarea>
        </div>
        <div class="text-center">
          <h6>Maximam 500 words (minimum 50)</h6>
        </div>
        <div class="text-center">
          <p>This writing box will be checked every time when you update it.</p>
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


    FillAboutYourSelfData();

    function FillAboutYourSelfData() {
      var Member = function() {
        this.MemberID = 0;
      }
      var model = new Member();
      model.MemberID = (<?= $this->session->userdata('member_id') ?>);

      ajaxCall('registration/getMemberData', model, function(response) {
        if (response.vcAboutYourselfAndPartner != null) {
          $("#aboutYourSelfAndPartner").val(response.vcAboutYourselfAndPartner);
        }
      });
    }


    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/myPhotos') ?>";
    });
    $('#btnSubmit').click(function() {
      var wordCount = $.trim($("#aboutYourSelfAndPartner").val()).split(' ').filter(function(v) {
        return v !== ''
      }).length;

      if ($('#aboutYourSelfAndPartner').val() == "") {
        toastr["error"]("Please add about your self and partner !");
        $("#aboutYourSelfAndPartner").focus();
      } else if (wordCount < 50) {
        toastr["error"]("The About yourself and partner field must type 50 words in length !");
        // toastr["error"]("The About yourself and partner field cannot exceed 2500 characters in length !");
        $("#aboutYourSelfAndPartner").focus();
      } else if (wordCount > 500) {
        toastr["error"]("The About yourself and partner field cannot exceed 500 words in length !");
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
                title: 'about yourself and partner details saved successfully !',
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