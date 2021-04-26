<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
</head>

<style>
    h3 {
        font-size: 1.5em;
    }

    input[type=text] {
        outline: 1px solid #b52b4a;
        border: 1px solid transparent;
    }

    input[type=text]:focus {
        border-color: #b52b4a;
        box-shadow: 0 0 5px #b52b4a inset;
        border-radius: 0;
    }
</style>
<script>
    var base_url = "<?php echo base_url(); ?>";
</script>
<div class="container-fluid" style="background-color: white; height:500px;">

    <div class="col-md-6 offset-md-3 col-sm-12 text-center" style="background-color: white; margin-top: 20px;">
        <div class="row">
            <div class="col">
                <h3>Please enter the 4-digit verification <br> code we sent via SMS:</h3>
                <span>(we want to make sure it's you before we contact our users)</span>
            </div>
        </div>
        <div class="row">
            <div style="margin: 20px auto;">
                <div style="width: 100px; padding-left: 10px; padding-right: 10px; position: relative; float:left;">
                    <input class="form-control form-control-lg text-center only-decimal" type="text" id="no1" placeholder="_" maxlength="1">
                </div>
                <div style="width: 100px; padding-left: 10px; padding-right: 10px;  position: relative; float:left;">
                    <input class="form-control form-control-lg text-center only-decimal" type="text" id="no2" placeholder="_" maxlength="1">
                </div>
                <div style="width: 100px; padding-left: 10px; padding-right: 10px;  position: relative; float:left;">
                    <input class="form-control form-control-lg text-center only-decimal" type="text" id="no3" placeholder="_" maxlength="1">
                </div>
                <div style="width: 100px; padding-left: 10px; padding-right: 10px;  position: relative; float:left;">
                    <input class="form-control form-control-lg text-center only-decimal" type="text" id="no4" placeholder="_" maxlength="1">
                </div>
            </div>
        </div>
        <div class="row">
            <button type="button" id="btnVerify" style="margin: 0 auto; width:200px; margin-top: 20px;" class="btn btn-success btn-lg">VERIFY</button>
        </div>
        <div class="row">
            <p style="width: 100%; text-align: center; margin-top: 30px;">Didn't receive the code?</p>
            <input type="hidden" id="EmailVerificationCode" name="EmailVerificationCode" value=<?php echo $verificationText; ?>>
            <a href="#" id="otpResend" style="width: 100%; text-align: center; margin-top: 30px;">Send code again</a>
            <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="editMobileNumer('<?php echo $verificationText; ?>')" style="width: 100%; text-align: center;">Change phone number</a>

        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Number</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 pt-3">
                    <input type="number" class="form-control form-padding red-color only-decimal" name="mobile_no" onKeyPress="if(this.value.length==10) return false;" id="mobile_no" placeholder="Mobile No">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="btnUpdateNumber" class="btn btn-primary">Update Number</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $('.only-decimal').keypress(function(event) {
            return isNumber(event, this)
        });


        $("#otpResend").click(function() {
            // alert("Handler for .click() called.");
            var EmailVerificationCode = $("#EmailVerificationCode").val();
            // alert(EmailVerificationCode);
            if (EmailVerificationCode) {
                $.ajax({
                    url: base_url + 'registration/otpResend/' + EmailVerificationCode,
                    type: 'post',
                    dataType: 'json',
                    async: true,
                    success: function(response) {
                        // alert(response.messages);

                        if (response.success === true) {
                            swal("Sent Successfully!", response.messages, "success");
                        } else {
                            swal("Can't Send!", response.messages, "error");
                        }

                    },
                    error: function(xhr, status, error) {
                        //var err = eval("(" + xhr.responseText + ")");
                        alert(xhr.responseText);
                    }
                });
            }
        });


        $("#btnUpdateNumber").click(function() {
            var mobile_no = $("#mobile_no").val();
            var emailVerificationCode = $("#EmailVerificationCode").val();
            const length = $("#mobile_no").val().length;
            
            if (length != 10) {
                toastr["error"]("Please Valid Mobile No");
                $("#mobile_no").focus();
            } else {
                if (mobile_no) {
                    $.ajax({
                        url: base_url + 'registration/upDateMobileNumber/' + mobile_no + '/' + emailVerificationCode,
                        type: 'post',
                        dataType: 'json',
                        async: true,
                        success: function(response) {
                            if (response.success === true) {
                                toastr['success']('Update Successfully');
                                $("#exampleModal").modal('hide');
                            } else {
                                swal("Error!", response.messages, "error");
                            }
                        },
                        error: function(xhr, status, error) {
                            //var err = eval("(" + xhr.responseText + ")");
                            alert(xhr.responseText);
                        }
                    });
                }
            }

        });

        $("#btnVerify").click(function() {
            var emailVerificationCode = $("#EmailVerificationCode").val();
            var no1 = $("#no1").val();
            var no2 = $("#no2").val();
            var no3 = $("#no3").val();
            var no4 = $("#no4").val();

            var otpNumber = no1 + no2 + no3 + no4

            if (jQuery.trim($("#no1").val()).length == 0) {
                toastr["error"]("Please Enter No 1");
                $("#no1").focus();
            } else if (jQuery.trim($("#no2").val()).length == 0) {
                toastr["error"]("Please Enter No 2");
                $("#no2").focus();
            } else if (jQuery.trim($("#no3").val()).length == 0) {
                toastr["error"]("Please Enter No 3");
                $("#no3").focus();
            } else if (jQuery.trim($("#no4").val()).length == 0) {
                toastr["error"]("Please Enter No 4");
                $("#no4").focus();
            } else {

                if (mobile_no) {
                    $.ajax({
                        url: base_url + 'registration/otpVerification/' + otpNumber + '/' + emailVerificationCode,
                        type: 'post',
                        dataType: 'json',
                        async: true,
                        success: function(response) {
                            if (response.success === true) {
                                swal("Successfully!", response.messages, "success");
                                window.location.href = "<?= base_url('Registration/physicalStatus') ?>";
                            } else {
                                swal("Error!", response.messages, "error");
                            }
                        },
                        error: function(xhr, status, error) {
                            //var err = eval("(" + xhr.responseText + ")");
                            alert(xhr.responseText);
                        }
                    });
                }
            }

        });

    });

    function isNumber(evt, element) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (
            (charCode != 46 || $(element).val().indexOf('.') != -1) && // “.” CHECK DOT, AND ONLY ONE.
            (charCode < 48 || charCode > 57) &&
            (charCode != 13)) {
            return false;
        }
        return true;
    }

    function editMobileNumer(EmailVerificationCode) {
        $.ajax({
            url: base_url + 'registration/fetchUserDate/' + EmailVerificationCode,
            type: 'post',
            dataType: 'json',
            success: function(response) {
                $("#mobile_no").val(response.Without94);
            }
        });
    }
</script>