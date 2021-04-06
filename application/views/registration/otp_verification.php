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
            <a href="" style="width: 100%; text-align: center; margin-top: 30px;">Send code again</a>
            <a href="" style="width: 100%; text-align: center;">Change phone number</a>
        </div>
    </div>
</div>
</div>