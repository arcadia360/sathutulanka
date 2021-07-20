$(function () {
    $("#icon-wait").hide();
    $("#invalid-email").hide();
    $("#invalid-password").hide();
    $("#invalid-messages").hide(); 
    

});


$("#btn-signin").click(function () {

    // $('body').addClass("wait"); // Change Cursor To Progress
 
    $("#invalid-email").hide();
    $("#invalid-password").hide();
    $("#invalid-messages").hide();
    

    if ($("#username").val().trim() === "") {
        $("#invalid-email").text("Please Enter Your Email Address !");
        $("#invalid-email").show();
    }else if(!validEmail($("#username").val().trim())){
        $("#invalid-email").text("Please Enter Valid Email Address !");
        $("#invalid-email").show();
        return;
    }
    if ($("#password").val().trim() === "") {
        $("#invalid-password").text("Please Enter Your Password !");
        $("#invalid-password").show();
    }

    if($("#username").val().trim() !== "" && $("#password").val().trim() !== ""){

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
    
                $('input[name=csrf_arcadia360]').val(response.token);
    
                if (response.success == false) {
                    $("#invalid-messages").text(response.messages);
                    $("#invalid-messages").show();
                    $("#icon-wait").hide();
                }else{
                    $("#icon-wait").hide();
                    location.reload();
                }
                // alert("ddd");
            }
        });
    }

//     ajaxCall('Auth/Login', $("#loginForm").serialize(), function (response) {
// alert("ddd");
//     });


});

$("#login-button").click(function (event) {
    event.preventDefault();

    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
});




 