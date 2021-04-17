<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sathutu Lanka | User Registration</title>

    <link rel="stylesheet" href="<?php echo base_url('resources/css/registration_form/style.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Common CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/common.css') ?>">
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/navbar.css') ?>">

    <style rel="stylesheet">
        @import url('https://fonts.googleapis.com/css2?family=Bad+Script&display=swap');

        .agreement_label,
        .agreement_label a {
            color: #000000 !important;
            font-size: 0.9em;
        }

        .sbmitBtn {
            background-color: #b52b4a;
            border: none;
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

        <a class="navbar-brand" href="#">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Disabled</a>
                </li> -->
            </ul>

            <a class="nav-link btn-lang" href="">සිංහල</a>

        </div>
    </nav>

    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-lg-8 col-md-7 d-none d-md-block d-lg-block">
            <!-- <img class="main-img" src="https://s3.amazonaws.com/gspv-expression-engine/background-images/wedding-photographers-atlanta.jpg" alt=""> -->
            <!-- <div class="slider-wrap"> -->
            <div class="slider"></div>
            <div class="slider"></div>
            <div class="slider"></div>

            <p class="title">Let's Set Up Your Profile <span style="font-size: 3em;">Free</span>,<br>To Find Your Love..</p>
            <!-- </div> -->
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12 side-form">
            <form method="post" action="<?= base_url('Registration/createAccount') ?>" id="submitForm">
                <div class="px-3 py-3 home-main-search-bgcolor reg_form" style="overflow: scroll; height:90vh;">
                    <h4 class="px-3"><?= lang('create_your_account') ?></h4>
                    <div class="col-md-12 pt-3">
                        <input type="text" class="form-control form-padding red-color" name="short_name" id="short_name" placeholder="<?= lang('short_name') ?>" autcomplete="false" value="">
                    </div>
                    <!-- country codes (ISO 3166) and Dial codes. -->
                    <div class="col-md-12 pt-3">
                        <!-- <div class="form-group"> -->
                        <select class="custom-select d-block form-control" id="country_code" name="country_code">
                            <option value="">Country Codes</option>
                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
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
                            <!-- 

                            <optgroup label="Other countries"> -->
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

                    </div>


                    <div class="col-md-12 pt-3">
                        <input type="text" class="form-control form-padding red-color" name="mobile_no" id="mobile_no" placeholder="Mobile No" value="">
                    </div>

                    <div class="col-md-12 pt-3">
                        <input type="password" class="form-control form-padding red-color" name="password" id="password" placeholder="New Password" autocomplete="false">
                    </div>
                    <div class="col-md-12 pt-3">
                        <input type="password" class="form-control form-padding red-color" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" autcomplete="false">
                    </div>
                    <div class="col-md-12 pt-3">
                        <input type="email" class="form-control form-padding red-color" name="email" id="email" placeholder="Your Email" autocomplete="false" value="">
                    </div>

                    <div class="col-md-12 pt-4">
                        <p class="p20 yellow-color gill-sans-mt-regular-font mb-2">Providing Information</p>
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
                            <option value="mentioned in writing"><?= lang('mentioned in writing') ?></option>
                        </select>
                    </div>
                    <div class="col-md-12 pt-4">
                        <p class="p20 yellow-color gill-sans-mt-regular-font mb-2">Gender</p>
                        <select class="custom-select d-block form-control" name="gender" id="gender">
                            <option value="0" ><?= lang('select') ?></option>
                            <option value="male"><?= lang('male') ?></option>
                            <option value="female"><?= lang('female') ?></option>
                        </select>
                    </div>

                    <p class="p20 yellow-color gill-sans-mt-regular-font mb-2 ml-3 pt-4">Date Of Birth</p>
                    <div class="row mx-0 mr-4">

                        <div class="col-md-4">
                            <select class="custom-select d-block form-control" name="birth_day" id="birth_day">
                                <option value="">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <select class="custom-select d-block form-control" name="birth_month" id="birth_month">
                                <option value="">Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <select class="custom-select d-block form-control" name="birth_year" id="birth_year">
                                <option value="">Year</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-12 pt-4">
                        <p class="p20 yellow-color gill-sans-mt-regular-font mb-2">Marital Status</p>
                        <select class="custom-select d-block form-control" name="marital_status" id="marital_status" onchange="getMarryDetails(this)">
                            <option value="0"><?= lang('select') ?></option>
                            <!-- <?php foreach ($MaritalStatus_data as $k => $v) { ?>
                                <option value="<?= $v['intMaritalStatusID'] ?>"><?= $v['vcMaritalStatus'] ?></option>
                            <?php } ?> -->
                            <option value="never married"><?= lang('never married') ?></option>
                            <option value="divorced"><?= lang('divorced') ?></option>
                            <option value="awaiting divorce"><?= lang('awaiting divorce') ?></option>
                            <option value="separated (not legally)"><?= lang('separated (not legally)') ?></option>
                            <option value="widowed"><?= lang('widowed') ?></option>
                            <option value="annulled"><?= lang('annulled') ?></option>
                            <option value="divorced only at engagement"><?= lang('divorced only at engagement') ?></option>
                            <option value="virginity problem"><?= lang('virginity problem') ?></option>
                        </select>
                    </div>
                    <div class="col-md-12 pt-4 childrenDiv">
                        <p class="p20 yellow-color gill-sans-mt-regular-font mb-2">Number of Children</p>
                        <select class="custom-select d-block form-control" name="num_of_child" id="num_of_child">
                            <option value="0"><?= lang('select') ?></option>
                            <!-- <?php foreach ($NoofChildren_data as $k => $v) { ?>
                                <option value="<?= $v['intNoOfChildrenID'] ?>"><?= $v['vcNoOfChildren'] ?></option>
                            <?php } ?> -->
                            <option value="No">No</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="3+">3+</option>
                        </select>
                        </select>
                    </div>
                    <div class="col-md-12 pt-4">
                        <p class="p20 yellow-color gill-sans-mt-regular-font mb-2">Marry By</p>
                        <select class="custom-select d-block form-control" name="marry_by" id="marry_by">
                            <option value="0"><?= lang('select') ?></option>
                            <!-- <?php foreach ($MarriageType_data as $k => $v) { ?>
                                <option value="<?= $v['intMarriageTypeID'] ?>"><?= $v['vcMarriageType'] ?></option>
                            <?php } ?> -->
                            <option value="proposal">Proposal</option>
                            <option value="love">Love</option>
                        </select>
                    </div>

                    <div class="col-md-12 pt-4">
                        <p class="mb-0 p14 text-white text-center agreement_label">
                            <input type="checkbox" class="agreement_check" autocomplete="off" name="agreement">
                            By Clicking Continue Button You Accept Our <br>
                            <a style="color:#284d98 !important; text-decoration: underline;" href="#" data-toggle="modal" data-target="#termsConditionsModal"> Term And Condition And Privacy Policy</a>
                        </p>
                    </div>
                    <div class="col-md-12 text-center pt-3 pb-2">
                        <!-- <a href="<?= base_url()?>" class="btn btn-primary btn-block sbmitBtn">&nbsp;CONTINUE&nbsp;</a> -->
                        <button type="submit" class="btn btn-primary btn-block sbmitBtn">&nbsp;CONTINUE&nbsp;</a>
                        <!-- <button type="submit" class="btn btn-primary btn-block gill-sans-mt-regular-font home-search-btn p20 home-search-letter-spacing sbmitBtn">&nbsp;CONTINUE&nbsp;</button> -->
                    </div>


            </form>

        </div>
    </div>
    <!-- </div> -->



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>