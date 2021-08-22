$(function () {
    $('#varifyyouremail').hide();
    $('#otpverifypending').hide();

    $("#icon-wait").hide();
    $("#invalid-email").hide();
    $("#empty-email").hide();
    $("#invalid-password").hide();
    $("#empty-password").hide();
    $("#invalid-messages").hide(); 
    $("#deactivated-messages").hide();
  


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

});


$("#btn-signin").click(function () {

    // $('body').addClass("wait"); // Change Cursor To Progress

    $("#invalid-email").hide();
    $("#empty-email").hide();
    $("#invalid-password").hide();
    $("#empty-password").hide();
    $("#invalid-messages").hide();
    $('#varifyyouremail').hide();
    $('#otpverifypending').hide();




    if ($("#username").val().trim() === "") {
        // $("#empty-email").text("Please Enter Your Email Address !");
        $("#empty-email").show();
    } else if (!validEmail($("#username").val().trim())) {
        // $("#invalid-email").text("Please Enter a Valid Email Address !");
        $("#invalid-email").show();
        return;
    }
    if ($("#password").val().trim() === "") {
        // $("#empty-password").text("Please Enter Your Password !");
        $("#empty-password").show();
    }

    if ($("#username").val().trim() !== "" && $("#password").val().trim() !== "") {

        $("#icon-wait").show();

        $.ajax({
            type: 'POST',
            url: base_url + 'Auth/Login',
            data: $("#loginForm").serialize(),
            dataType: 'json',
            complete: function () {
                // $('body').removeClass("wait");
                // $("#icon-wait").hide();
            },
            success: function (response) {
                // $('input[name=csrf_arcadia360]').val(response.token);

                if (response.success == false) {
                    if (response.messages == 1) {
                        $('#varifyyouremail').show();
                    } else if (response.messages == 2) {
                        $('#otpverifypending').show();
                    } else if (response.messages == 3) {
                        $("#invalid-messages").show();
                    } else if (response.messages == 4) {
                        $("#deactivated-messages").show();
                    } 
                    $("#icon-wait").hide();
                } else {
                    $("#icon-wait").hide();
                    location.reload();
                }
            }
        });
    }
});

$("#login-button").click(function (event) {
    event.preventDefault();

    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
});



