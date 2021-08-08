<!-- <div class="col-lg-4 col-md-4 col-12 justify-content-center" style="background-color: #000000;">
    dsds
</div> -->

<!-- <style>
    html,
    body {
        height: 100%;
    }

    .section {
        box-shadow:
            0 1.4px 2.2px rgba(0, 0, 0, 0.02),
            0 3.4px 5.3px rgba(0, 0, 0, 0.028),
            0 6.4px 10px rgba(0, 0, 0, 0.035),
            0 11.4px 17.9px rgba(0, 0, 0, 0.042),
            0 21.3px 33.4px rgba(0, 0, 0, 0.05),
            0 51px 80px rgba(0, 0, 0, 0.07);
    }

    h1 {
        margin-bottom: 1.5em;
        font-size: 30px;
        color: #484548;
        font-weight: 200;
    }

    h1 span,
    small {
        display: block;
        font-size: 14px;
        color: #989598;
    }

    small {
        font-style: italic;
        font-size: 11px;
    }

    form p {
        position: relative;
    }

    .password {
        width: 90%;
        padding: 15px 12px;
        margin-bottom: 5px;
        border: 1px solid #e5e5e5;
        border-bottom: 2px solid #ddd;
        background: rgba(255, 255, 255, 0.2) !important;
        color: #555;
    }

    .password+.unmask {
        position: absolute;
        right: 5%;
        top: 10px;
        width: 25px;
        height: 25px;
        background: transparent;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        font-family: 'fontawesome';
        font-size: 14px;
        line-height: 24px;
        -webkit-appearance: none;
        outline: none
    }

    .password+.unmask:before {
        content: "\f06e";
        position: absolute;
        top: 0;
        left: 0;
        width: 25px;
        height: 25px;
        background: rgba(205, 205, 205, 0.2);
        z-index: 1;
        color: #aaa;
        border: 2px solid;
        border-radius: 50%;
    }

    .password[type="text"]+.unmask:before {
        content: "\f070";
        background: rgba(105, 205, 255, 0.2);
        color: #06a
    }

    #valid {
        font-size: 12px;
        color: #daa;
        height: 15px
    }

    #strong {
        height: 20px;
        font-size: 12px;
        color: #daa;
        text-transform: capitalize;
        background: rgba(205, 205, 205, 0.1);
        border-radius: 5px;
        overflow: hidden
    }

    #strong span {
        display: block;
        box-shadow: 0 0 0 #fff inset;
        height: 100%;
        transition: all 0.8s
    }

    #strong .weak {
        box-shadow: 5em 0 0 #daa inset;
    }

    #strong .medium {
        color: #da6;
        box-shadow: 10em 0 0 #da6 inset
    }

    #strong .strong {
        color: #595;
        box-shadow: 50em 0 0 #ada inset
    }
</style> -->

<style>
    html,
    body {
        height: 100%;
    }

    h1 {
        margin-bottom: 1.5em;
        font-size: 30px;
        color: #484548;
        font-weight: 200;
    }

    h1 span,
    small {
        display: block;
        font-size: 14px;
        color: #989598;
    }


    .password-strength-group .password-strength-meter {
        width: 100%;
        transition: height 0.3s;
        display: flex;
        justify-content: stretch;
    }

    .password-strength-group .password-strength-meter .meter-block {
        height: 4px;
        background: #ccc;
        margin-right: 6px;
        flex-grow: 1;
    }

    .password-strength-group .password-strength-meter .meter-block:last-child {
        margin: 0;
    }

    .password-strength-group .password-strength-message {
        font-weight: 20px;
        height: 1em;
        text-align: right;
        transition: all 0.5s;
        margin-top: 3px;
        position: relative;
    }

    .password-strength-group .password-strength-message .message-item {
        font-size: 12px;
        position: absolute;
        right: 0;
        opacity: 0;
        transition: opacity 0.2s;
    }

    .password-strength-group[data-strength="1"] .meter-block:nth-child(-n+1) {
        background: #cc3d04;
    }

    .password-strength-group[data-strength="1"] .message-item:nth-child(1) {
        opacity: 1;
    }

    .password-strength-group[data-strength="2"] .meter-block:nth-child(-n+2) {
        background: #ffc43b;
    }

    .password-strength-group[data-strength="2"] .message-item:nth-child(2) {
        opacity: 1;
    }

    .password-strength-group[data-strength="3"] .meter-block:nth-child(-n+3) {
        background: #9ea60a;
    }

    .password-strength-group[data-strength="3"] .message-item:nth-child(3) {
        opacity: 1;
    }

    .password-strength-group[data-strength="4"] .meter-block:nth-child(-n+4) {
        background: #289116;
    }

    .password-strength-group[data-strength="4"] .message-item:nth-child(4) {
        opacity: 1;
    }
</style>

<div class="h-100 d-flex justify-content-center align-items-center">
    <div class="col-lg-4 col-md-4 col-12 section p-5">
        <h1>
            Change Password
            <span>choose a good one!</span>
        </h1>
        <form id="createNewPasswordForm">
        <input type="hidden" class="form-control" id="linkStatus" name="linkStatus" value="<?= $user_data['status']  ?>" placeholder="N/A">
        <input type="hidden" class="form-control" id="emailCode" name="emailCode" value="<?= $user_data['emailCode']  ?>" placeholder="N/A">
            <!-- <p>
                <input type="password" value="" placeholder="Enter Password" id="p" class="password">
                <button class="unmask" type="button"></button>
            </p>
            <p>
                <input type="password" value="" placeholder="Confirm Password" id="p-c" class="password">
                <button class="unmask" type="button"></button>
            <div id="strong"><span></span></div>
            <div id="valid"></div>
            <small>Must be 6+ characters long and contain at least 1 upper case letter, 1 number, 1 special character</small>
            </p> -->

            <div class="form-group">
                <div class="input-group" id="show_hide_password">
                    <input class="form-control" type="password" id="newPassword" name="newPassword" placeholder="Enter New Password">
                    <div class="input-group-addon" style="align-items: center;">
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="password-strength-group" data-strength="">

                <div id="password-strength-meter" class="password-strength-meter">
                    <div class="meter-block"></div>
                    <div class="meter-block"></div>
                    <div class="meter-block"></div>
                    <div class="meter-block"></div>
                </div>

                <div class="password-strength-message">
                    <div class="message-item">
                        Weak Password !
                    </div>

                    <div class="message-item">
                        Okay !
                    </div>

                    <div class="message-item">
                        Strong !
                    </div>

                    <div class="message-item">
                        Very Strong !
                    </div>
                </div>

            </div>

            <div class="form-group mt-3">
                <div class="input-group" id="show_hide_confirm_password">
                    <input class="form-control" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                    <div class="input-group-addon" style="align-items: center;">
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>
                </div>
                <small id="errorMsg" class="form-text text-danger font-weight-bold animate__animated animate__flash" style="font-size: 12px;"></small>
            </div>

            <div class="form-group mt-5">
                <button class="btn btn-block btn-signin" id="btn-createPassword" type="button" style="font-size: 17px;">
                    Change Password
                    <i class="fa fa-spinner fa-spin" style="font-size:20px" id="icon-wait-create"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<script src="<?= base_url("resources/js/pageJS/create_new_password.js") ?>"></script>