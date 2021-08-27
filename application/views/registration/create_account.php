<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration | Sathutu Lanka</title>

    <link rel="stylesheet" href="<?php echo base_url('resources/css/registration_form/style.css') ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Common CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/common.css') ?>">
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/navbar.css') ?>">
    <!-- toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->

    <!-- DK -->
    <link rel="stylesheet" href="<?php echo base_url('resources/css/registration_form/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- end DK -->

    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var base_url = "<?php echo base_url(); ?>";
    </script>
    <style rel="stylesheet">
        @import url('https://fonts.googleapis.com/css2?family=Bad+Script&display=swap');

        body {
            background-color: #FFFFFF !important;
            padding: 0 !important;
        }

        .btn-primary.focus,
        .btn-primary:focus {
            box-shadow: none !important;
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #b52b4a !important;
            background-color: #FFFFFF !important;
            border-color: #b52b4a !important;
        }

        .agreement_label,
        .agreement_label a {
            color: #000000 !important;
            font-size: 0.9em;
        }

        .sbmitBtn {
            background-color: #b52b4a;
            border: 2px #b52b4a solid;
        }

        .sbmitBtn:hover {
            background-color: #FFFFFF;
            color: #b52b4a;
            border: 2px #b52b4a solid;
            cursor: pointer;
        }

        .main-img {
            height: 100vh;
        }

        .side-form {
            height: CALC(100vh - 66px);
            /* background-color: #FFFFFF; */
        }

        .slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            animation: fade-slider 12s linear infinite;
        }

        .slider:nth-child(1) {
            animation-delay: -1s;
            background-image: url("<?= base_url("resources/images/wedding_couple_8.jpg") ?>");
        }

        .slider:nth-child(2) {
            animation-delay: 3s;
            background-image: url("<?= base_url("resources/images/wedding_couple_5.jpg") ?>");
        }

        .slider:nth-child(3) {
            animation-delay: 7s;
            background-image: url("<?= base_url("resources/images/wedding_couple_6.jpg") ?>");
        }

        @keyframes fade-slider {
            0% {
                opacity: 0;
            }

            8.3333333333% {
                opacity: 1;
            }

            33.3333333333% {
                opacity: 1;
            }

            41.6666666667% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        .title {
            position: absolute;
            top: 50%;
            left: 10%;
            font-size: 1.5em;
            font-family: 'Bad Script', cursive;
            color: #FFFFFF;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-red">

        <a class="navbar-brand" href="<?= base_url() ?>">
            <?php
            if ($_SESSION['language_id'] == 1) { // Current Language - English
            ?>
                <img class="img-fluid navbar-logo" src="<?= base_url('resources/images/navbar-logo-en.png') ?>" alt="Sathutu Lanka">
            <?php
            } else if ($_SESSION['language_id'] == 2) { // Current Language - Sinhala
            ?>
                <img class="img-fluid navbar-logo" src="<?= base_url('resources/images/navbar-logo-si.png') ?>" alt="සතුටු ලංකා">
            <?php
            }
            ?>

        </a>


        <?php
        if ($_SESSION['language_id'] == 1) {
        ?>
            <a class="nav-link btn-lang" style="color: #FFFFFF; cursor: pointer; position: absolute; right: 0;" onclick="ChangeLanguage(2)">
                <i class="fa fa-spinner fa-spin" style="font-size:17px;" id="icon-wait-lang"></i>
                සිංහල</a>
        <?php
        } else if ($_SESSION['language_id'] == 2) {
        ?>
            <a class="nav-link btn-lang" style="color: #FFFFFF; cursor: pointer; position: absolute; right: 0;" onclick="ChangeLanguage(1)">
                <i class="fa fa-spinner fa-spin" style="font-size:17px;" id="icon-wait-lang"></i>
                English</a>
        <?php
        }
        ?>
    </nav>

    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-lg-8 col-md-7 d-none d-md-block d-lg-block" style="height: CALC(100vh - 56px);">
            <!-- <img class="main-img" src="https://s3.amazonaws.com/gspv-expression-engine/background-images/wedding-photographers-atlanta.jpg" alt=""> -->
            <!-- <div class="slider-wrap"> -->
            <div class="slider"></div>
            <div class="slider"></div>
            <div class="slider"></div>

            <p class="title"><?= lang('lets_setup_your_profile_free') ?></p>
            <!-- </div> -->
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 side-form">
            <form method="post" action="<?= base_url('CreateAccount/saveAccount') ?>" id="submitForm">
                <!-- <form method="post" action="<?= base_url('Registration/physicalStatus') ?>" id="submitForm"> -->
                <div class="pl-3 pr-3 home-main-search-bgcolor reg_form" style="overflow: scroll; height:CALC(100vh - 56px);">
                    <h4 class="pt-3"><strong><?= lang('create_your_account') ?></strong></h4>
                    <!-- <div class="col-md-12 pt-3"> -->
                    <input type="text" class="form-control form-padding red-color mt-3" name="short_name" id="short_name" maxlength="15" placeholder="<?= lang('short_name') ?>" autcomplete="false">
                    <!-- </div> -->

                    <!-- country codes (ISO 3166) and Dial codes. -->
                    <!-- <div class="col-md-12 pt-3"> -->
                    <!-- <div class="form-group"> -->
                    <select class="custom-select d-block form-control  mt-3" id="country_code" name="country_code">
                        <option value="" disabled><?= lang('country_code') ?></option>
                        <option data-countryCode="LK" value="94" selected><?= lang('sri_lanka') ?> (+94)</option>
                        <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                        <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                        <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                        <option data-countryCode="IN" value="91">India (+91)</option>
                        <option data-countryCode="FR" value="33">France (+33)</option>
                        <option data-countryCode="QA" value="974">Qatar (+974)</option>
                        <option data-countryCode="CA" value="1">Canada (+1)</option>
                        <option data-countryCode="US" value="1">UK (+44)</option>
                        <option data-countryCode="IT" value="39">Italy (+39)</option>
                        <option data-countryCode="AU" value="61">Australia (+61)</option>
                        <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                        <option data-countryCode="DE" value="49">Germany (+49)</option>
                        <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                        <option data-countryCode="US" value="1">USA (+1)</option>
                        <option data-countryCode="KR" value="82">Korea South (+82)</option>
                        <option data-countryCode="JP" value="81">Japan (+81)</option>
                        <option data-countryCode="GB" value="44">Norway (+47)</option>
                        <option data-countryCode="DK" value="45">Denmark (+45)</option>
                        <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                        <option data-countryCode="IL" value="972">Israel (+972)</option>
                        <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                        <option data-countryCode="AD" value="376">Andorra (+376)</option>
                        <option data-countryCode="AO" value="244">Angola (+244)</option>
                        <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                        <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                        <option data-countryCode="AR" value="54">Argentina (+54)</option>
                        <option data-countryCode="AM" value="374">Armenia (+374)</option>
                        <option data-countryCode="AW" value="297">Aruba (+297)</option>
                        <option data-countryCode="AT" value="43">Austria (+43)</option>
                        <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                        <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                        <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                        <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                        <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                        <option data-countryCode="BY" value="375">Belarus (+375)</option>
                        <option data-countryCode="BE" value="32">Belgium (+32)</option>
                        <option data-countryCode="BZ" value="501">Belize (+501)</option>
                        <option data-countryCode="BJ" value="229">Benin (+229)</option>
                        <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                        <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                        <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                        <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                        <option data-countryCode="BW" value="267">Botswana (+267)</option>
                        <option data-countryCode="BR" value="55">Brazil (+55)</option>
                        <option data-countryCode="BN" value="673">Brunei (+673)</option>
                        <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                        <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                        <option data-countryCode="BI" value="257">Burundi (+257)</option>
                        <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                        <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                        <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                        <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                        <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                        <option data-countryCode="CL" value="56">Chile (+56)</option>
                        <option data-countryCode="CN" value="86">China (+86)</option>
                        <option data-countryCode="CO" value="57">Colombia (+57)</option>
                        <option data-countryCode="KM" value="269">Comoros (+269)</option>
                        <option data-countryCode="CG" value="242">Congo (+242)</option>
                        <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                        <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                        <option data-countryCode="HR" value="385">Croatia (+385)</option>
                        <option data-countryCode="CU" value="53">Cuba (+53)</option>
                        <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                        <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                        <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                        <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                        <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                        <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                        <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                        <option data-countryCode="EG" value="20">Egypt (+20)</option>
                        <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                        <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                        <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                        <option data-countryCode="EE" value="372">Estonia (+372)</option>
                        <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                        <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                        <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                        <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                        <option data-countryCode="FI" value="358">Finland (+358)</option>
                        <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                        <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                        <option data-countryCode="GA" value="241">Gabon (+241)</option>
                        <option data-countryCode="GM" value="220">Gambia (+220)</option>
                        <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                        <option data-countryCode="GH" value="233">Ghana (+233)</option>
                        <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                        <option data-countryCode="GR" value="30">Greece (+30)</option>
                        <option data-countryCode="GL" value="299">Greenland (+299)</option>
                        <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                        <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                        <option data-countryCode="GU" value="671">Guam (+671)</option>
                        <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                        <option data-countryCode="GN" value="224">Guinea (+224)</option>
                        <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                        <option data-countryCode="GY" value="592">Guyana (+592)</option>
                        <option data-countryCode="HT" value="509">Haiti (+509)</option>
                        <option data-countryCode="HN" value="504">Honduras (+504)</option>
                        <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                        <option data-countryCode="HU" value="36">Hungary (+36)</option>
                        <option data-countryCode="IS" value="354">Iceland (+354)</option>
                        <option data-countryCode="ID" value="62">Indonesia (+62)</option>
                        <option data-countryCode="IR" value="98">Iran (+98)</option>
                        <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                        <option data-countryCode="IE" value="353">Ireland (+353)</option>
                        <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                        <option data-countryCode="JO" value="962">Jordan (+962)</option>
                        <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                        <option data-countryCode="KE" value="254">Kenya (+254)</option>
                        <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                        <option data-countryCode="KP" value="850">Korea North (+850)</option>
                        <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                        <option data-countryCode="LA" value="856">Laos (+856)</option>
                        <option data-countryCode="LV" value="371">Latvia (+371)</option>
                        <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                        <option data-countryCode="LR" value="231">Liberia (+231)</option>
                        <option data-countryCode="LY" value="218">Libya (+218)</option>
                        <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                        <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                        <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                        <option data-countryCode="MO" value="853">Macao (+853)</option>
                        <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                        <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                        <option data-countryCode="MW" value="265">Malawi (+265)</option>
                        <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                        <option data-countryCode="MV" value="960">Maldives (+960)</option>
                        <option data-countryCode="ML" value="223">Mali (+223)</option>
                        <option data-countryCode="MT" value="356">Malta (+356)</option>
                        <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                        <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                        <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                        <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                        <option data-countryCode="MX" value="52">Mexico (+52)</option>
                        <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                        <option data-countryCode="MD" value="373">Moldova (+373)</option>
                        <option data-countryCode="MC" value="377">Monaco (+377)</option>
                        <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                        <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                        <option data-countryCode="MA" value="212">Morocco (+212)</option>
                        <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                        <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                        <option data-countryCode="NA" value="264">Namibia (+264)</option>
                        <option data-countryCode="NR" value="674">Nauru (+674)</option>
                        <option data-countryCode="NP" value="977">Nepal (+977)</option>
                        <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                        <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                        <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                        <option data-countryCode="NE" value="227">Niger (+227)</option>
                        <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                        <option data-countryCode="NU" value="683">Niue (+683)</option>
                        <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                        <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                        <option data-countryCode="NO" value="47">Norway (+47)</option>
                        <option data-countryCode="OM" value="968">Oman (+968)</option>
                        <option data-countryCode="PW" value="680">Palau (+680)</option>
                        <option data-countryCode="PA" value="507">Panama (+507)</option>
                        <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                        <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                        <option data-countryCode="PE" value="51">Peru (+51)</option>
                        <option data-countryCode="PH" value="63">Philippines (+63)</option>
                        <option data-countryCode="PL" value="48">Poland (+48)</option>
                        <option data-countryCode="PT" value="351">Portugal (+351)</option>
                        <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                        <option data-countryCode="RE" value="262">Reunion (+262)</option>
                        <option data-countryCode="RO" value="40">Romania (+40)</option>
                        <option data-countryCode="RU" value="7">Russia (+7)</option>
                        <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                        <option data-countryCode="SM" value="378">San Marino (+378)</option>
                        <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                        <option data-countryCode="SN" value="221">Senegal (+221)</option>
                        <option data-countryCode="CS" value="381">Serbia (+381)</option>
                        <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                        <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                        <option data-countryCode="SG" value="65">Singapore (+65)</option>
                        <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                        <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                        <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                        <option data-countryCode="SO" value="252">Somalia (+252)</option>
                        <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                        <option data-countryCode="ES" value="34">Spain (+34)</option>
                        <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                        <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                        <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                        <option data-countryCode="SD" value="249">Sudan (+249)</option>
                        <option data-countryCode="SR" value="597">Suriname (+597)</option>
                        <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                        <option data-countryCode="SE" value="46">Sweden (+46)</option>
                        <option data-countryCode="SI" value="963">Syria (+963)</option>
                        <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                        <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                        <option data-countryCode="TH" value="66">Thailand (+66)</option>
                        <option data-countryCode="TG" value="228">Togo (+228)</option>
                        <option data-countryCode="TO" value="676">Tonga (+676)</option>
                        <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                        <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                        <option data-countryCode="TR" value="90">Turkey (+90)</option>
                        <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                        <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                        <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                        <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                        <option data-countryCode="UG" value="256">Uganda (+256)</option>
                        <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                        <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                        <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                        <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                        <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                        <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                        <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                        <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                        <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                        <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                        <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                        <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                        <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                        <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                        <!-- </optgroup> -->
                    </select>
                    <!-- </div> -->

                    <!-- </div> -->


                    <!-- <div class="col-md-12 pt-3"> -->
                    <!-- <input type="number" pattern="[0-9]*" inputmode="numeric" class="form-control form-padding red-color only-decimal  mt-3" name="mobile_no" id="mobile_no" placeholder="<?= lang('mobile_number') ?> (<?= lang('eg') ?> : 0777123456)"> -->
                    <input type="text" inputmode="numeric" pattern="[0-9]*" class="form-control form-padding red-color only-decimal  mt-3" name="mobile_no" id="mobile_no" placeholder="<?= lang('mobile_number') ?> (<?= lang('eg') ?> : 0777123456)">

                    <!-- </div> -->

                    <!-- <div class="col-md-12 pt-3"> -->
                    <input type="password" class="form-control form-padding red-color  mt-3" name="password" id="password" placeholder="<?= lang('new_password') ?>" autocomplete="false">
                    <!-- </div> -->
                    <!-- <div class="col-md-12 pt-3"> -->
                    <input type="password" class="form-control form-padding red-color  mt-3" name="password_confirmation" id="password_confirmation" placeholder="<?= lang('confirm_password') ?>" autcomplete="false">
                    <!-- </div>
                    <div class="col-md-12 pt-3"> -->
                    <input type="email" class="form-control form-padding red-color  mt-3" name="email" id="email" placeholder="<?= lang('email') ?>" autocomplete="false">
                    <!-- </div> -->

                    <section class="pt-3 pb-4 mt-4" style="border: 2px solid #ffab91;  border-radius: 20px;">
                        <div class="col-12">
                            <p class="p20 yellow-color gill-sans-mt-regular-font mb-2"><strong><?= lang('providing_information') ?></strong></p>
                            <select class="custom-select d-block form-control" name="provide_infor" id="provide_infor">
                                <option value="0"><?= lang('select') ?></option>
                                <!-- <?php foreach ($ProvidingInformationType_data as $k => $v) { ?>
                                <option value="<?= $v['intProvidingInformationTypeID'] ?>"><?= $v['vcProvidingInformationType'] ?></option>
                            <?php } ?> -->
                                <option value="self"><?= lang('self') ?></option>
                                <option value="parents"><?= lang('parents') ?></option>
                                <option value="guardian"><?= lang('guardian') ?></option>
                                <option value="relative"><?= lang('relative') ?></option>
                                <option value="brother"><?= lang('brother') ?></option>
                                <option value="sister"><?= lang('sister') ?></option>
                                <option value="friend"><?= lang('friend') ?></option>
                                <option value="mentioned in writing"><?= lang('mentioned_in_writing') ?></option>
                            </select>
                        </div>

                        <div class="col-md-12 pt-4">
                            <p class="p20 yellow-color gill-sans-mt-regular-font mb-2"><strong><?= lang('gender') ?></strong></p>
                            <select class="custom-select d-block form-control" name="gender" id="gender">
                                <option value="0"><?= lang('select') ?></option>
                                <option value="male"><?= lang('male') ?></option>
                                <option value="female"><?= lang('female') ?></option>
                            </select>
                        </div>

                        <div class="col-md-12 pt-4">
                            <p class="p20 yellow-color gill-sans-mt-regular-font mb-2"><strong><?= lang('date_of_birth') ?></strong></p>
                            <div class="row">
                                <div class="col-4">
                                    <select class="custom-select d-block form-control" name="birth_year" id="birth_year">
                                        <option value="0"><?= lang('year') ?></option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="custom-select d-block form-control" name="birth_month" id="birth_month">
                                        <option value="0"><?= lang('month') ?></option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="custom-select d-block form-control" name="birth_day" id="birth_day">
                                        <option value="0"><?= lang('date') ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 pt-4">
                            <p class="p20 yellow-color gill-sans-mt-regular-font mb-2"><strong><?= lang('marital_status') ?></strong></p>
                            <select class="custom-select d-block form-control" name="marital_status" id="marital_status">
                                <option value="0"><?= lang('select') ?></option>
                                <?php foreach ($MaritalStatus_data as $k => $v) { ?>
                                    <option value="<?= $v['intMaritalStatusID'] ?>"><?= $v['vcMaritalStatus'] ?></option>
                                <?php } ?>
                                <!-- <option value="never married"><?= lang('never married') ?></option>
                            <option value="divorced"><?= lang('divorced') ?></option>
                            <option value="awaiting divorce"><?= lang('awaiting divorce') ?></option>
                            <option value="separated (not legally)"><?= lang('separated (not legally)') ?></option>
                            <option value="widowed"><?= lang('widowed') ?></option>
                            <option value="annulled"><?= lang('annulled') ?></option>
                            <option value="divorced only at engagement"><?= lang('divorced only at engagement') ?></option>
                            <option value="virginity problem"><?= lang('virginity problem') ?></option> -->
                            </select>
                        </div>

                        <div class="col-md-12 pt-4 childrenDiv" id="Div_num_of_child">
                            <p class="p20 yellow-color gill-sans-mt-regular-font mb-2"><strong><?= lang('no_of_children') ?></strong></p>
                            <select class="custom-select d-block form-control" name="num_of_child" id="num_of_child">
                                <option value="0"><?= lang('select') ?></option>
                                <?php foreach ($NoofChildren_data as $k => $v) { ?>
                                    <option value="<?= $v['intNoOfChildrenID'] ?>"><?= $v['vcNoOfChildren'] ?></option>
                                <?php } ?>
                            </select>
                            </select>
                        </div>

                        <div class="col-md-12 pt-4">
                            <p class="p20 yellow-color gill-sans-mt-regular-font mb-2"><strong><?= lang('marry_by') ?></strong></p>
                            <select class="custom-select d-block form-control" name="marry_by" id="marry_by">
                                <option value="0"><?= lang('select') ?></option>
                                <!-- <?php foreach ($MarriageType_data as $k => $v) { ?>
                                <option value="<?= $v['intMarriageTypeID'] ?>"><?= $v['vcMarriageType'] ?></option>
                            <?php } ?> -->
                                <option value="proposal"><?= lang('marry_by_proposal') ?></option>
                                <option value="love"><?= lang('marry_by_love') ?></option>
                            </select>
                        </div>

                    </section>


                    <small id="warning-message" class="form-text text-danger font-weight-bold animate__animated animate__flash mt-3 text-center"><?= lang('incorrect_email_or_password') ?></small>

                    <div class="col-md-12 pt-4">
                        <p class="mb-0 p14 text-white text-center agreement_label">
                            <input type="checkbox" class="agreement_check" autocomplete="off" id="agreement" name="agreement">
                            <label for="agreement">By Clicking Continue Button You Accept Our</label> <br>
                            <a style="color:#284d98 !important; text-decoration: underline;" href="#" data-toggle="modal" data-target="#termsConditionsModal"> Term And Condition And Privacy Policy</a>
                        </p>
                    </div>
                    <button type="button" name="btnContinue" id="btnContinue" class="btn btn-primary btn-block sbmitBtn p-2 mb-3 mt-3" style="text-transform: uppercase;">&nbsp;<?= lang('continue') ?>&nbsp; </button>

                    <div class="col-12 text-justify pt-2" style="border: 2px solid #01579b; color:#01579b; border-radius: 10px;">
                        <p> <?= lang('law_notice') ?></p>
                    </div>

                    <!-- Mobile No Verify Modal -->
                    <div class="modal fade" id="contactNoVerifyModal" tabindex="-1" role="dialog" aria-labelledby="contactNoVerifyModal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <?= lang('we_will_be_verifying_the_phone_number') ?>
                                    <br>
                                    <input type="text" id="country_code_view" name="country_code_view" style="border: 0px none;">
                                    <br>
                                    <?= lang('is_this_ok_the_number') ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" name="btnEdit" id="btnEdit" class="btn btn-light" data-dismiss="modal">Edit</button>
                                    <button type="button" name="btnSaveUser" id="btnSaveUser" class="btn" style="background-color: #b52b4a; color:#FFFFFF;">&nbsp;&nbsp;OK&nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Terms & Conditions Modal -->
                    <div class="modal fade" id="termsConditionsModal" tabindex="-1" role="dialog" aria-labelledby="termsConditionsModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #FFFFFF !important;">
                                    <h5 class="modal-title" style="color: #000000 !important;"><?= lang('conditions_applicable') ?> &nbsp; / &nbsp; <?= lang('service_agreement') ?></h5>
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button> -->
                                </div>
                                <div class="modal-body">
                                    <?= lang('t_and_c_section') ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-dismiss="modal" style="background-color: #b52b4a; color:#FFFFFF;">&nbsp;&nbsp;OK&nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

        </div>
    </div>
    <!-- </div> -->


</body>



<script>
    $(function() {

        $('#icon-wait-lang').hide();

        $('#Div_num_of_child').hide();

        $('#warning-message').hide();



        const monthNames = ["<?= lang('january') ?>", "<?= lang('february') ?>", "<?= lang('march') ?>", "<?= lang('april') ?>", "<?= lang('may') ?>", "<?= lang('june') ?>",
            "<?= lang('july') ?>", "<?= lang('august') ?>", "<?= lang('september') ?>", "<?= lang('october') ?>", "<?= lang('november') ?>", "<?= lang('december') ?>"
        ];
        // let qntYears = 20;
        // let selectYear = $("#birth_year");
        // let selectMonth = $("#birth_month");
        // let selectDay = $("#birth_day");
        let currentYear = new Date().getFullYear();

        let ageEndYear = currentYear - 17;
        let ageStartingYear = ageEndYear - 50;


        for (ageStartingYear; ageStartingYear < ageEndYear; ageStartingYear++) {
            let date = new Date(ageStartingYear);
            let yearElem = document.createElement("option");
            yearElem.value = ageStartingYear
            yearElem.textContent = ageStartingYear;
            $("#birth_year").append(yearElem);
        }

        for (var m = 0; m < 12; m++) {
            let month = monthNames[m];
            let monthElem = document.createElement("option");
            monthElem.value = m;
            monthElem.textContent = month;
            $("#birth_month").append(monthElem);
        }

        var d = new Date();
        var month = d.getMonth();
        var year = d.getFullYear();
        var day = d.getDate();


    });

    function AdjustDays() {
        var year = $("#birth_year").val();
        var month = parseInt($("#birth_month").val()) + 1;
        $("#birth_day").empty();
        $("#birth_day").append('<option value="0"><?= lang('date') ?></option>');

        var days = 0
        if (year > 0 && month > 0) {
            days = new Date(year, month, 0).getDate();
        }

        for (var d = 1; d <= days; d++) {
            var dayElem = document.createElement("option");
            dayElem.value = d;
            dayElem.textContent = d;
            $("#birth_day").append(dayElem);
        }
    }

    $("#birth_year").change(function(e) {
        AdjustDays();
    });

    $("#birth_month").change(function(e) {
        AdjustDays();
    });


    $('.only-decimal').keypress(function(event) {
        return isNumber(event, this)
    });

    $('#btnContinue').click(function() {

        $('#warning-message').hide();

        var isAgreementCheck = $("input[name=agreement]").is(":checked");
        const length = $("#mobile_no").val().length;

        if (jQuery.trim($("#short_name").val()).length == 0) {
            // toastr["error"]("Please Enter Name !");
            $('#warning-message').text('<?= lang('please_enter_name') ?>');
            $('#warning-message').show();
            $("#short_name").focus();
        } else if ($("#country_code :selected").val() == 0) {
            // toastr["error"]("Please Select Country Code !");
            $('#warning-message').text('<?= lang('please_enter_country_code') ?>');
            $('#warning-message').show();
            $("#country_code").focus();
        } else if (jQuery.trim($("#mobile_no").val()).length == 0) {
            // toastr["error"]("Please Enter Mobile No !");
            $('#warning-message').text('<?= lang('please_enter_mobile_no') ?>');
            $('#warning-message').show();
            $("#mobile_no").focus();
        } else if (jQuery.trim($("#country_code").val()) == 94 && length != 10) { // With 1st zero "0"
            // toastr["error"]("Please Valid Mobile No");
            $('#warning-message').text('<?= lang('please_enter_valid_mobile_no') ?>');
            $('#warning-message').show();
            $("#mobile_no").focus();
        } else if (jQuery.trim($("#password").val()).length == 0) {
            // toastr["error"]("Please Enter Password !");
            $('#warning-message').text('<?= lang('please_enter_password') ?>');
            $('#warning-message').show();
            $("#password").focus();
        } else if (jQuery.trim($("#password_confirmation").val()).length == 0) {
            // toastr["error"]("Please Re-Enter Your Password !");
            $('#warning-message').text('<?= lang('please_enter_confirm_password') ?>');
            $('#warning-message').show();
            $("#password_confirmation").focus();
        } else if (jQuery.trim($("#password").val()) != jQuery.trim($("#password_confirmation").val())) {
            // toastr["error"]("Password and confirm password do not match !");
            $('#warning-message').text('<?= lang('password_did_not_match') ?>');
            $('#warning-message').show();
            $("#password_confirmation").focus();
        } else if (jQuery.trim($("#email").val()).length == 0) {
            // toastr["error"]("Please Enter Email !");
            $('#warning-message').text('<?= lang('please_enter_email') ?>');
            $('#warning-message').show();
            $("#email").focus();
        } else if ($("#provide_infor :selected").val() == 0) {
            // toastr["error"]("Please Select Providing Information !");
            $('#warning-message').text('<?= lang('please_select_providing_information') ?>');
            $('#warning-message').show();
            $("#provide_infor").focus();
        } else if ($("#gender :selected").val() == 0) {
            // toastr["error"]("Please Select Gender !");
            $('#warning-message').text('<?= lang('please_select_gender') ?>');
            $('#warning-message').show();
            $("#gender").focus();
        } else if ($("#birth_year :selected").val() == 0) {
            // toastr["error"]("Please Select Birth Year !");
            $('#warning-message').text('<?= lang('please_select_birth_year') ?>');
            $('#warning-message').show();
            $("#birth_year").focus();
        } else if ($("#birth_month :selected").val() == 0) {
            // toastr["error"]("Please Select Birth Moth !");
            $('#warning-message').text('<?= lang('please_select_birth_month') ?>');
            $('#warning-message').show();
            $("#birth_month").focus();
        } else if ($("#birth_day :selected").val() == 0) {
            // toastr["error"]("Please Select Birth Day !");
            $('#warning-message').text('<?= lang('please_select_birth_day') ?>');
            $('#warning-message').show();
            $("#birth_day").focus();
        } else if ($("#marital_status :selected").val() == 0) {
            // toastr["error"]("Please Select Marital Status !");
            $('#warning-message').text('<?= lang('please_select_marital_status') ?>');
            $('#warning-message').show();
            $("#marital_status").focus();
        } else if ($("#marry_by :selected").val() == 0) {
            // toastr["error"]("Please Select Marry By !");
            $('#warning-message').text('<?= lang('please_select_marry_by') ?>');
            $('#warning-message').show();
            $("#marry_by").focus();
        } else if (!isAgreementCheck) {
            // toastr["error"]("Please Check Term And Condition And Privacy Policy !");
            $('#warning-message').text('<?= lang('please_check_t_and_c') ?>');
            $('#warning-message').show();
            $("#agreement_check").focus();
        } else {
            var mStatus = $('#marital_status').val();
            if (mStatus != 1) {
                if ($("#num_of_child :selected").val() == 0) {
                    // toastr["error"]("Please Select number of children !");
                    $('#warning-message').text('<?= lang('please_select_no_of_children') ?>');
                    $('#warning-message').show();
                    $("#num_of_child").focus();
                    return;
                }
            }
            $("#country_code_view").val("+" + jQuery.trim($("#country_code").val()) + " " + jQuery.trim($("#mobile_no").val().substring(1)));
            $('#contactNoVerifyModal').modal('show');
        }
    });

    $('#btnSaveUser').click(function() {
        saveUser()
    });

    $('#btnEdit').click(function() {
        $('#contactNoVerifyModal').modal('hide');
        $("#mobile_no").focus();
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

    $('#marital_status').change(function() {
        var mStatus = $('#marital_status').val();
        if (mStatus == 1) {
            $('#Div_num_of_child').hide();
        } else {
            $('#Div_num_of_child').show();
        }
    });



    function saveUser() {
        var form = $("#submitForm");
        $("#btnSaveUser").prop('disabled', true);
        $('#contactNoVerifyModal').modal('hide');

        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success == true) {
                    swal("<?= lang('successful')?>", response.messages, "success")
                        .then((value) => {
                            window.location.href = "<?= base_url() ?>"
                        });
                    sendEmail(response.email, response.verificationText);
                } else {
                    if (response.messages instanceof Object) {
                        $.each(response.messages, function(index, value) {
                            var id = $("#" + index);
                            id.closest('.form-group')
                                .removeClass('has-error')
                                .removeClass('has-success')
                                .addClass(value.length > 0 ? 'has-error' : 'has-success');
                            id.after(value);
                            $('#contactNoVerifyModal').modal('hide')
                            $("#btnSaveUser").prop('disabled', false)
                        });
                    } else {
                        toastr["error"](response.messages);
                        $("#btnSaveUser").prop('disabled', false)
                    }
                }

            }
        });
    }

    function sendEmail(email, verificationText) {
        $.ajax({
            async: false,
            url: base_url + 'CreateAccount/sendEmail/' + email + '/' + verificationText,
            success: function(response) {},
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: " + textStatus);
                alert("Error: " + errorThrown);
            }
        });
    }


    function ChangeLanguage(languageID) {
        $('#icon-wait-lang').show();
        // ajaxCall('Welcome/ChangeLanguage/' + languageID, null, function(response) {
        //     if (response['success'] == true) {
        //         location.reload();
        //     }
        // });


        $.ajax({
            type: 'POST',
            url: 'Welcome/ChangeLanguage/' + languageID,
            data: null,
            dataType: 'json',
            success: function(response) {
                if (response['success'] == true) {
                    location.reload();
                }
            }
        });


    }
</script>

</html>