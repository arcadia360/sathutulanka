$(function() {


    FillAboutYourSelfData();

    function FillAboutYourSelfData() {
      ajaxCall('registration/getMemberData', model, function(response) {
        if (response.vcAboutYourselfAndPartner != null) {
          $("#aboutYourSelfAndPartner").val(response.vcAboutYourselfAndPartner);
        }
      });
    }


    $('#btnBack').click(function() {
      window.location.href = navigateBack;
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
        $("#btnSubmitLoading").addClass("fa fa-spinner fa-spin");
        $("#btnSubmit").attr("disabled","disabled");
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
                $("body").hide();
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = navigateTo;
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
        $("#btnSubmit").attr("disabled","enabled");
      }
    });

  });