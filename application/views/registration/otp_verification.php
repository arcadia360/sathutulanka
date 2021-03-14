<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Common CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/common.css') ?>">
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/navbar.css') ?>">
</head>

<body>
    <div id="wrapper">
        <div id="dialog">
            <button class="close">×</button>
            <h3>Please enter the 4-digit verification code we sent via SMS:</h3>
            <span>(we want to make sure it's you before we contact our movers)</span>
            <div id="form">
                <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" /><input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                <button class="btn btn-primary btn-embossed">Verify</button>
            </div>

            <div>
                Didn't receive the code?<br />
                <a href="#">Send code again</a><br />
                <a href="#">Change phone number</a>
            </div>
            <img src="http://jira.moovooz.com/secure/attachment/10424/VmVyaWZpY2F0aW9uLnN2Zw==" alt="test" />
        </div>
    </div>
</body>

</html>