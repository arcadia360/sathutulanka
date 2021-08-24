$(function () {
    $("#icon-wait-create").hide();
    $("#errorMsg").hide();

    var linkStatus = ($("#linkStatus").val());
    if (linkStatus == "0") {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Link !',
            showConfirmButton: false,
            timer: 4000
          }).then((result) => {
            $("body").hide();
            if (result.dismiss === Swal.DismissReason.timer) {
              window.location.href = base_url;
            }
          })
    } 

    // $("#invalid-email").hide();
    // $("#invalid-password").hide();
    // $("#invalid-messages").hide();

    $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("fa-eye-slash");
            $('#show_hide_password i').removeClass("fa-eye");
        } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("fa-eye-slash");
            $('#show_hide_password i').addClass("fa-eye");
        }
    });

    $("#show_hide_confirm_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_confirm_password input').attr("type") == "text") {
            $('#show_hide_confirm_password input').attr('type', 'password');
            $('#show_hide_confirm_password i').addClass("fa-eye-slash");
            $('#show_hide_confirm_password i').removeClass("fa-eye");
        } else if ($('#show_hide_confirm_password input').attr("type") == "password") {
            $('#show_hide_confirm_password input').attr('type', 'text');
            $('#show_hide_confirm_password i').removeClass("fa-eye-slash");
            $('#show_hide_confirm_password i').addClass("fa-eye");
        }
    });

});


function passwordCheck(password) {
    if (password.length >= 8)
        strength += 1;
    if (password.match(/(?=.*[0-9])/))
        strength += 1;
    if (password.match(/(?=.*[!,%,&,@,#,$,^,*,?,_,~,<,>,])/))
        strength += 1;
    if (password.match(/(?=.*[a-z])/))
        strength += 1;

    displayBar(strength);
}

function displayBar(strength) {
    $(".password-strength-group").attr('data-strength', strength);
}

$("#newPassword").keyup(function () {
    strength = 0;
    var password = $(this).val();
    passwordCheck(password);
});

$("#btn-createPassword").click(function () {
    $("#errorMsg").hide();
    if ($("#newPassword").val() === "") {
        $("#errorMsg").text("Please Enter Your New Password !");
        $("#errorMsg").show();
    } else if ($("#confirmPassword").val() === "") {
        $("#errorMsg").text("Please Enter Confirmation Password !");
        $("#errorMsg").show();
    } else if ($("#newPassword").val() != $("#confirmPassword").val()) {
        $("#errorMsg").text("The password confirmation does not match !");
        $("#errorMsg").show();
    } else {
        $("#icon-wait-create").show();

        $.ajax({
            type: 'POST',
            url: base_url + 'CreateAccount/CreateNewPassword',
            data: $("#createNewPasswordForm").serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.success == true) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Password Reset successfully!',
                        showConfirmButton: false,
                        timer: 2000
                    }).then((result) => {
                        $("body").hide();
                        if (result.dismiss === Swal.DismissReason.timer) {
                            window.location.href = base_url;
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
                    }
                }
            }
        });
    }



});
