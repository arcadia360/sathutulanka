
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
                    <input class="form-control form-control-lg text-center" type="text" placeholder="_" maxlength="1">
                </div>
                <div style="width: 100px; padding-left: 10px; padding-right: 10px;  position: relative; float:left;">
                    <input class="form-control form-control-lg text-center" type="text" placeholder="_" maxlength="1">
                </div>
                <div style="width: 100px; padding-left: 10px; padding-right: 10px;  position: relative; float:left;">
                    <input class="form-control form-control-lg text-center" type="text" placeholder="_" maxlength="1">
                </div>
                <div style="width: 100px; padding-left: 10px; padding-right: 10px;  position: relative; float:left;">
                    <input class="form-control form-control-lg text-center" type="text" placeholder="_" maxlength="1">
                </div>
            </div>
        </div>
        <div class="row">
            <button type="button" style="margin: 0 auto; width:200px; margin-top: 20px;" class="btn btn-success btn-lg">VERIFY</button>
        </div>
        <div class="row">
            <p style="width: 100%; text-align: center; margin-top: 30px;">Didn't receive the code?</p>
            <input type="hidden" id="EmailVerificationCode" name="EmailVerificationCode" value=<?php echo $verificationText; ?>>
            <a href="#" id="otpResend" style="width: 100%; text-align: center; margin-top: 30px;">Send code again</a>
            <a href="#" data-toggle="modal" data-target="#exampleModal" style="width: 100%; text-align: center;">Change phone number</a>

        </div>
    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12 pt-3">
                    <input type="text" class="form-control form-padding red-color" name="mobile_no" id="mobile_no" placeholder="Mobile No" value=<?php echo $vcMobileNo; ?>>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

Modal
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<script>
    $(document).ready(function() {

        $('#exampleModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })

        $("#otpResend").click(function() {
            // alert("Handler for .click() called.");
            var EmailVerificationCode = $("#EmailVerificationCode").val();
            // alert(EmailVerificationCode);
            if (EmailVerificationCode) {
                console.log('in ajax');
                $.ajax({
                    url: base_url + 'registration/otpResend/' + EmailVerificationCode,
                    type: 'post',
                    dataType: 'json',
                    async: true,
                    success: function(response) {

                        // alert(response.messages);
                        swal("Good job!", response.messages, "success");
                    },
                    error: function(xhr, status, error) {
                        //var err = eval("(" + xhr.responseText + ")");
                        alert(xhr.responseText);
                    }
                });
            }

        });

        // document.getElementById("otpResend").addEventListener("click", myFunction);

        // function myFunction() {
        //     var EmailVerificationCode = $("#EmailVerificationCode").val();
        //     alert(EmailVerificationCode);
        //     if (EmailVerificationCode > 0) {
        //         $.ajax({
        //             url: base_url + 'registration/otpResend/' + EmailVerificationCode,
        //             type: 'post',
        //             dataType: 'json',   
        //             async: true,
        //             success: function(response) {

        //                 alert(response.messages);
        //             },
        //             error: function(xhr, status, error) {
        //                 //var err = eval("(" + xhr.responseText + ")");
        //                 alert(xhr.responseText);
        //             }
        //         });
        //     }
        // }


    });

    // function doSomething() {
    //     var EmailVerificationCode = $("#EmailVerificationCode").val();
    //     if (EmailVerificationCode > 0) {
    //         $.ajax({
    //             url: base_url + 'request/'otpResend/' + EmailVerificationCode,
    //             type: 'post',
    //             dataType: 'json',
    //             success: function(response) {

    //                 alert("yaaa");
    //             },
    //             error: function(xhr, status, error) {
    //                 //var err = eval("(" + xhr.responseText + ")");
    //                 alert(xhr.responseText);
    //             }
    //         });
    //     }
    // }
</script>