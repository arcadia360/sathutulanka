
$(function () {
    $("#icon-wait2").hide();
    $("#email").hide();
});


$("#btn-forgetpassword").click(function () {

    $("#email").hide();
    $("#icon-wait2").hide();
    $("#icon-default").show();

    if ($("#email-for-pass").val().trim() === "") {
        $("#email").text("Please Enter Your Email Address !");
        $("#email").show();
    } else if (!validEmail($("#email-for-pass").val().trim())) {
        $("#email").text("Please Enter Valid Email Address !"); 
        $("#email").show();
    } else {
        $("#icon-wait2").show();
        $("#icon-default").hide();
        ajaxCall('CreateAccount/SendPasswordResetLinkToTheEmailAddress', $("#frmForgetPassword").serialize(), function (response) {
            if (response.success == true) {
                $("#icon-wait2").hide();
                $("#icon-default").show();
                // alert(response.messages);

                swal({
                    title: "Success !",
                    text: "Please check your email !",
                    type: "success"
                }, function () {
                    window.location = base_url;
                });
 

            }else{
                $("#email").text("Please Enter Valid Email Address !");
                $("#email").show();

                $("#icon-wait2").hide();
                $("#icon-default").show();
            }
            // $('input[name=csrf_arcadia360]').val(response.token);
            // debugger;
            // alert(response.password + "ll");
        });
    }
});