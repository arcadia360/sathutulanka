$(function () {
    $("#icon-wait-create").hide();
    $("#errorMsg").hide();


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

                // $('input[name=csrf_arcadia360]').val(response.token);

                if (response.success == false) {
                    $("#errorMsg").text(response.messages);
                    $("#errorMsg").show();
                    $("#icon-wait-create").hide();
                } else {
                    $("#icon-wait-create").hide();
                    location.reload();
                }
            }
        });
    }



});
