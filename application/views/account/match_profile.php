    <!-- UiKit CSS -->
    <link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=868'>
    <link rel='stylesheet' href='<?= base_url('resources/css/memberProfile.css') ?>'>




    <style>
        .modal {
            padding-top: 0 !important;
        }

        .tooltip-inner {
            white-space: pre-line;
            /* white-space: pre-wrap; */
        }

        .card {
            border-radius: none !important;
            border: none !important;
        }

        .collapse-area .card .row {
            min-height: 35px !important;
        }

        .collapse-area label {
            margin: 0 !important;
        }

        .profile-card {
            height: auto !important;
            margin-top: 20px !important;

        }

        .profile-card .overlay {
            bottom: 0 !important;
        }

        .profile-card,
        .content-area {

            box-shadow:
                0 2.2px 2.2px rgba(0, 0, 0, 0.02),
                0 5.4px 5.3px rgba(0, 0, 0, 0.028),
                0 10.1px 10px rgba(0, 0, 0, 0.035),
                0 18.1px 17.9px rgba(0, 0, 0, 0.042),
                0 33.8px 33.4px rgba(0, 0, 0, 0.05),
                0 81px 80px rgba(0, 0, 0, 0.07);
        }


        .card-header {
            background-color: #FFFFFF;
            border-top: 1px solid rgba(0, 0, 0, .125);
            border-bottom: none !important
        }



        .basic-preference-title {
            font-weight: 600 !important;
        }

        .fa-check {
            color: #29b5a8;
        }

        .fa-times {
            color: #F3565D;
        }

        .hide-my-detail {
            display: none;
        }

        .btn-toggle {
            /* margin: 0 4rem; */
            padding: 0;
            position: relative;
            border: none;
            height: 1.5rem;
            width: 3rem;
            border-radius: 1.5rem;
            color: #6b7381;
            background: #bdc1c8;
        }

        .btn:focus {
            outline: 0;
            box-shadow: none;
        }

        .btn-toggle:before,
        .btn-toggle:after {
            line-height: 1.5rem;
            width: 4rem;
            text-align: center;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: absolute;
            bottom: 0;
            transition: opacity 0.25s;
        }

        .btn-toggle:before {
            content: 'Hide';
            left: -4rem;
        }

        .btn-toggle:after {
            content: 'Show';
            right: -4rem;
            opacity: 0.5;
        }

        .btn-toggle>.handle {
            position: absolute;
            top: 0.2rem;
            left: 0.3em;
            width: 1.8em;
            height: 1.8em;
            border-radius: 1em;
            background: #fff;
            transition: left 0.25s;
        }

        .btn-toggle.active {
            transition: background-color 0.25s;
        }

        .btn-toggle.active>.handle {
            left: 39px;
            transition: left 0.25s;
        }

        .btn-toggle.active {
            background-color: #29b5a8;
        }

        .btn-toggle.btn-sm {
            /* margin: 0 0.5rem; */
            padding: 0;
            position: relative;
            border: none;
            height: 2rem;
            width: 69px;
            border-radius: 1.5rem;
        }

        .btn-toggle.btn-sm:before,
        .btn-toggle.btn-sm:after {
            line-height: 1.5rem;
            width: 0.5rem;
            text-align: center;
            font-weight: 600;
            font-size: 0.55rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: absolute;
            bottom: 3px;
            transition: opacity 0.25s;
        }

        .btn-toggle.btn-sm.btn-sm:before,
        .btn-toggle.btn-sm.btn-sm:after {
            line-height: -0.5rem;
            color: #fff;
            letter-spacing: 0.75px;
            left: 0.4125rem;
            width: 52px;
        }

        .btn-toggle.btn-sm.btn-sm:before {
            text-align: right;
        }

        .btn-toggle.btn-sm.btn-sm:after {
            text-align: left;
            opacity: 0;
        }

        .btn-toggle.btn-sm.btn-sm.active:before {
            opacity: 0;
        }

        .btn-toggle.btn-sm.btn-sm.active:after {
            opacity: 1;
        }

        .btn-link {
            width: 100%;
            text-align: left;
        }

        .btn-link:after {
            content: "\f107";
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            float: right;
        }

        .btn-link.collapsed:after {
            content: "\f106";
        }

        .details-area .card-body {
            padding: 0 !important;
        }

        .mini-picture {
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.63);
            border: 2px solid #FFFFFF;
            width: 72px;
            height: 72px;
        }

        .mini-picture img {
            object-fit: cover;
            width: 70px;
            height: 70px;
            margin: 0 auto;
        }

        .mini-percentage {
            text-align: center;
            font-weight: 600;
            color: #EA3C53;
        }

        .partner-detail,
        .my-detail {
            /* text-transform: capitalize; */
            /* width: CALC((100% - 150px) / 2); */
            /* padding-right: 15px; */
            /* float: left;
            position: relative; */
            /* padding-left: 15px; */
            width: 100%;
        }

        .title-column {
            width: 150px;
            float: left;
            position: relative;
        }

        /* UI Kit Components */

        .uk-panel img {
            height: 200px !important;
            width: 400px;
            object-fit: cover !important;
        }

        .uk-dotnav>.uk-active>* {
            background-color: #455a64 !important;
            border-color: transparent;
        }

        .uk-dotnav>*>* {
            border: none !important;
            background-color: #cfd8dc !important;
            height: 5px;
            width: 5px;
        }

        .progress {
            font-size: 1em !important;
            height: 1.3rem !important;
        }

        @media (min-width: 1200px) {
            .uk-grid>* {
                padding-left: 10px !important;
            }
        }

        /* Mobile Support */

        @media (max-width: 576px) {

            table {
                width: 150% !important;
            }

            .overflowX {
                width: 100% !important;
                overflow-X: scroll !important;
            }

            /* table {
                width: 50% !important;
            }

            .scroll-onMobile {
                overflow: scroll;
                width: CALC(100% - 150px);
                display: flex;

                background-color: green;
            }

            td {
                width: 200px !important;
            } */

            /* .inner {
                width: 400px;
            }

            .col-idle {
                display: block !important;
            }

            .inner {
                overflow-x: scroll;
                overflow-y: visible;
            } */


        }
    </style>

    <style>
        table {
            table-layout: fixed;
            width: 100%;
        }

        .overflowX td {
            vertical-align: top;
            /* border-top: 1px solid #ccc; */
            padding: 10px;
            /* width: 100%; */
            cursor: default;
            text-transform: capitalize;
            font-size: 0.9em;
            width: 50%;
        }



        /* .fixed_left {
            position: absolute; 
            left: 0;
            width: 150px;
            font-weight: 600;
        } */


        /* 
        .outer {
            position: relative;
            overflow: hidden;
        } */

        /* .inner { */
        /* overflow-x: scroll;
            overflow-y: visible; */
        /* width: 400px; */
        /* margin-left: 150px; */
        /* } */
        /* 
        .col-idle {
            display: none;
        } */
    </style>

    <div class="container-fluid">
        <div class="main-body">



            <div class="row">
                <div class="col-md-12 col-lg-3 padding-mobile-left-0 padding-mobile-right-0">
                    <div class="card profile-card">
                        <div class="row">
                            <!-- <a href="" class="profile-heart like"><i class="fas fa-heart"></i></a> -->
                            <button class="profile-heart  
                               <?php if ($matchingPercentageData["IsLiked"] == 1) { ?>
                                    like
                               <?php } ?>" name="<?= $partnerData['intMemberID'] ?>" id="btnHeart<?= $partnerData['intMemberID'] ?>" onclick="LikeOrDisLikeProfile(this)"><i class="fas fa-heart"></i></button>
                        </div>
                        <div class="overlay">
                            <div class="card-img-block">
                                <?php
                                if ($partnerData['intMemberAccountTypeID'] == 4) {
                                ?>
                                    <p class="premium_badge"><i class="fas fa-crown"></i> PREMIUM</p>
                                <?php
                                }
                                ?>
                                <!-- <p class="photo-count"><i class="fas fa-camera"></i> 5</p> -->
                                <img src="<?= base_url() . "resources/images/member/photos/" . $partnerData['vcMemberCode'] . "/" . $partnerData['vcProfilePicture'] ?>" />
                            </div>
                            <div class="card-body">
                                <h4 class="col-12 mb-1" style="text-align: center;"><?= $partnerData['vcNickName'] ?></h4>
                                <p class="text-secondary mb-1 mt-1"><?= $partnerData['MiniProfileDesignation'] ?></p>

                                <?php
                                if ($partnerData['intMemberAccountTypeID'] == 1) { // Not Trust Verified
                                ?>
                                    <button class="btn btn-block badge-notTrustVerified" style="margin-top: 0px; border-radius: 20px; font-weight:600">Not Trust Verified</button>
                                <?php
                                } else if ($partnerData['intMemberAccountTypeID'] == 2) { // Trust Proving
                                ?>
                                    <button class="btn btn-block badge-trustProving" style="margin-top: 0px; border-radius: 20px; font-weight:600">Trust Proving</button>
                                <?php
                                } else if ($partnerData['intMemberAccountTypeID'] == 3) { // Trust Verified
                                ?>
                                    <button class="btn btn-block badge-trustVerified" style="margin-top: 0px; border-radius: 20px; font-weight:600">Trust Verified</button>
                                <?php
                                } else if ($partnerData['intMemberAccountTypeID'] == 4) { // Premium
                                ?>
                                    <button class="btn btn-block badge-trustVerified" style="margin-top: 0px; border-radius: 20px; font-weight:600">Trust Verified</button>
                                <?php
                                }
                                ?>


                                <button class="btn btn-outline-primary col-12" style="margin-top: 20px;">Expressing Interest</button>
                                <button class="btn btn-outline-primary col-12" onclick="clickk();">Request</button>
                                <button class="btn btn-outline-primary col-12">Block / Report</button>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-12 col-lg-8 padding-mobile-left-0 padding-mobile-right-0">

                    <div class="card mb-3">
                        <div class="card-body content-areaX">
                            <div id="accordion">
                                <div class="card">

                                    <!-- partial:index.partial.html -->
                                    <!-- <div class="uk-container uk-container-small"> -->
                                    <div tabindex="-1" uk-slider="center: true">
                                        <div class="uk-position-relative uk-visible-toggle uk-light">
                                            <ul class="uk-slider-items uk-grid" uk-lightbox>
                                                <!-- Generate Area -->
                                                <?php foreach ($partnerPhotosData as $imageData) {
                                                    if ($imageData['isProfilePicture'] == 0) { ?>
                                                        <li>
                                                            <div class="uk-panel">
                                                                <a href="<?= base_url() . "resources/images/member/photos/" . $partnerData['vcMemberCode'] . "/" . $imageData['vcImage'] ?>">
                                                                    <img data-src="<?= base_url() . "resources/images/member/photos/" . $partnerData['vcMemberCode'] . "/" . $imageData['vcImage'] ?>" alt="" uk-img="target: !ul > :last-child, !* +*">
                                                                </a>
                                                            </div>
                                                        </li>
                                                <?php }
                                                } ?>
                                                <!-- Generate Area End -->
                                            </ul>
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                        </div>
                                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                                    </div>
                                </div>


                                <div class="details-area">


                                    <div class="card">
                                        <div class="card-header" id="headingBasic" style="padding: 0px 0 20px 0;">
                                            <!-- <h5 class="mb-0" style="background-color: #559FF8; padding: 10px; width: 100%;"> -->
                                            <h5 class="mb-0" style="background-color: #29b5a8; padding: 10px; width: 100%;">
                                                <button class="btn btn-link text-primary" style="color: #FFFFFF !important;" data-toggle="collapse" data-target="#collapseBasic" aria-expanded="true" aria-controls="collapseBasic">
                                                    Basic Preferences
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseBasic" class="collapse show" aria-labelledby="headingBasic" data-parent="#accordion">
                                            <div class="card-body">

                                                <div class="col-12" style="border:1px solid #2F373C !important; margin-bottom: 10px;">
                                                    <div class="row">
                                                        <!-- <h5 style="background-color: #2F373C; color: #FFFFFF; padding: 10px; width: 100%;"><i class="fas fa-balance-scale-left"></i> &nbsp; Basic Preferences</h5> -->
                                                        <div class="container pt-3">
                                                            <div class="row">
                                                                <div class="col-6" style="display: flex; align-items: center;">

                                                                </div>
                                                                <div class="col-3">
                                                                    <h3 class="mini-percentage"><?= $matchingPercentageData['ForPartner'] ?>%</h4>
                                                                        <div class="mini-picture">
                                                                            <img src="<?= base_url() . "resources/images/member/photos/" . $partnerData['vcMemberCode'] . "/" . $partnerData['vcProfilePicture'] ?>" alt="Profile Photo">
                                                                        </div>
                                                                </div>
                                                                <div class="col-3">
                                                                    <h3 class="mini-percentage"><?= $matchingPercentageData['ForMe'] ?>%</h4>
                                                                        <div class="mini-picture">
                                                                            <img src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/" . $this->session->userdata['profile_pic'] ?>" alt="Profile Photo">
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Age</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['Age'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" style="white-space: pre-line;" title="<?= $partnerData['vcNickName'] ?>'s Age :
                                                                    <?= $partnerData['intAge'] ?> Years
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedAge'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['Age'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Age :
                                                                    <?= $myData['intAge'] ?> Years
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedAge'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Height</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['Height'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Height : 
                                                                    <?= $partnerData['intHeight'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedHeight'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['Height'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Height :
                                                                    <?= $myData['intHeight'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedHeight'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Marital Status</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['MaritalStatus'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Marital Status
                                                                    <?= $partnerData['vcMaritalStatus'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedMaritalStatus'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['MaritalStatus'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Marital Status
                                                                    <?= $myData['vcMaritalStatus'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedMaritalStatus'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Children</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['NoOfChildren'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s No Of Children(S)
                                                                    <?= $partnerData['vcNoOfChildren'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['Preferednoofchildren'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['NoOfChildren'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My No Of Children(S)
                                                                    <?= $myData['vcNoOfChildren'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['Preferednoofchildren'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Religion</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['Religion'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Religion
                                                                    <?= $partnerData['vcReligion'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedReligion'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['Religion'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Religion
                                                                    <?= $myData['vcReligion'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedReligion'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Ethnicity</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['Ethnicity'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Ethnicity
                                                                        <?= $partnerData['vcEthnicity'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedEthnicity'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['Ethnicity'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Ethnicity
                                                                    <?= $myData['vcEthnicity'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedEthnicity'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Mother Tongue</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['MotherTongue'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Mother Tongue
                                                                    <?= $partnerData['vcMotherTounge'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedMotherTongue'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['MotherTongue'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Mother Tongue
                                                                     <?= $myData['vcMotherTounge'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedMotherTongue'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Live in Srilanka</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['Province'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Live in Srilanka
                                                                    <?= $partnerData['vcProvinceName'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedLiveinSrilanka'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['Province'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Live in Srilanka
                                                                    <?= $myData['vcProvinceName'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedLiveinSrilanka'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Education</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['EducationLevel'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Education
                                                                    <?= $partnerData['vcEducationLevel'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedEducationLevel'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['EducationLevel'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Education
                                                                    <?= $myData['vcEducationLevel'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedEducationLevel'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Career</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['CareerLevel'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Career
                                                                    <?= $partnerData['vcWorkingWith'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedCareer'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['CareerLevel'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Career
                                                                    <?= $myData['vcWorkingWith'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedCareer'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Monthly Income</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['MonthlyIncome'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Monthly Income
                                                                    <?= $partnerData['vcMonthlyIncome'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedMonthlyInCome'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['MonthlyIncome'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Monthly Income
                                                                     <?= $myData['vcMonthlyIncome'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedMonthlyInCome'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Asset Level</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['AssetValue'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Asset Level
                                                                    <?= $partnerData['vcAssetValue'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedAssetValue'] ?>"></i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['AssetValue'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Asset Level : 
                                                                    <?= $myData['vcAssetValue'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedAssetValue'] ?>"></i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Disability</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['Disability'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Disability
                                                                    <?= $partnerData['vcDisability'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedDisability'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['Disability'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Disability
                                                                    <?= $myData['vcDisability'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedDisability'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Diet</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($partnerMatchingData['Diet'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="<?= $partnerData['vcNickName'] ?>'s Diet
                                                                     <?= $partnerData['vcDiet'] ?> 
                                                                    ----------------
                                                                    <?= $partnerData['vcNickName'] ?>'s Preference :
                                                                    <?= $partnerBasicPreferencesData['PreferedDiet'] ?>">
                                                                    </i>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <i class="fas <?= ($memberMatchingData['Diet'] == 1) ? 'fa-check' : 'fa-times'; ?>" data-toggle="tooltip" title="My Diet
                                                                    <?= $myData['vcDiet'] ?> 
                                                                    ----------------
                                                                    My Preference :
                                                                    <?= $myBasicPreferencesData['PreferedDiet'] ?>">
                                                                    </i>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                                <div class="col-6">
                                                                    <span class="basic-preference-title">Horoscope</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <span style="color: #8297A8; font-size: 0.9em;">Check</span>
                                                                </div>
                                                                <div class="col-3" style="text-align:center;">
                                                                    <span style="color: #8297A8; font-size: 0.9em;">Check</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <label class="float-right">All Details :
                                                <button type="button" id="btnAllDetails" class="btn btn-sm btn-toggle hide" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                    <div class="handle"></div>
                                                </button>
                                            </label>
                                        </div>
                                        <div class="col-6 padding-mobile-left-0">
                                            <label class="float-right-mobile">My Details :
                                                <button type="button" id="btnMyDetails" class="btn btn-sm btn-toggle active show" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                    <div class="handle"></div>
                                                </button>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <div class="collapse-area">
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Basic Information
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr>
                                                                <td></td>
                                                                <td class="partner-detail" style="background-color: #ffe082; color: #795548; padding: 3px; font-weight: 600; text-align: center; border-right: 2px solid #FFFFFF;"><i class="fas fa-male"></i> His Details</td>
                                                                <td class="my-detail" style="background-color: #ffe082; color: #795548; padding: 3px; font-weight: 600; text-align: center;"><i class="fas fa-female"></i> My Details</td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Nick Name</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcNickName'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcNickName'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Gender</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcGender'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcGender'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Age</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intAge'] ?> Years</td>
                                                                <td class="my-detail"><?= $myData['intAge'] ?> Years</td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Marital Status</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcMaritalStatus'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcMaritalStatus'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>No Of Children(s)</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcNoOfChildren'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcNoOfChildren'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Manage By</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcProvidingInformationType'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcProvidingInformationType'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Marry By</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcMarriageType'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcMarriageType'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header pl-0" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Physical Status
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Height</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intHeight'] ?></td>
                                                                <td class="my-detail"><?= $myData['intHeight'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Weight</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['Weight_Customised'] ?></td>
                                                                <td class="my-detail"><?= $myData['Weight_Customised'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Body Shape</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcBodyType'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcBodyType'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Skin Color</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcSkinColour'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcSkinColour'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Disability</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcDisability'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcDisability'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Blood Group</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcBloodGroup'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcBloodGroup'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Health Information</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcHealthInfo'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcHealthInfo'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Residence
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Current Residence</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcWorkingCountry'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcWorkingCountry'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Residence Status</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcResidenceStatus'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcResidenceStatus'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Live in Sri Lanka</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcProvinceName'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcProvinceName'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>District</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcDistrictName'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcDistrictName'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>City</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcCityName'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcCityName'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom" style="background-color: orange;">
                                                                <td><strong>Ownership of the Address</strong></td>
                                                                <td class="partner-detail"> </td>
                                                                <td class="my-detail"> </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Native District</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['NativeDistrictName'] ?></td>
                                                                <td class="my-detail"><?= $myData['NativeDistrictName'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingBackground">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseBackground" aria-expanded="false" aria-controls="collapseBackground">
                                                    Background
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseBackground" class="collapse" aria-labelledby="headingBackground" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Mother Tongue</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcMotherTounge'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcMotherTounge'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Ethnicity</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcEthnicity'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcEthnicity'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Religion</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcReligion'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcReligion'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Caste</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcCasteName'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcCasteName'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Sub Caste</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcSubCasteName'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcSubCasteName'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Police Report</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcPoliceReportCanProvide'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcPoliceReportCanProvide'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingLifeStyle">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseLifeStyle" aria-expanded="false" aria-controls="collapseLifeStyle">
                                                    Life Style
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseLifeStyle" class="collapse" aria-labelledby="headingLifeStyle" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Diet</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcDiet'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcDiet'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Drink</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcDrink'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcDrink'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Smoke</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcSmoke'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcSmoke'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Languages, Speak</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcLanguageSpeakWithSeparator'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcLanguageSpeakWithSeparator'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Dress & Makeup</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcDressAndMakeup'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcDressAndMakeup'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Used to Travel</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcUsedToTravel'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcUsedToTravel'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Call to Parents</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcCalToParent'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcCalToParent'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Customs</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcCustoms'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcCustoms'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Live In</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcLiveIn'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcLiveIn'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingWhoAmI">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseWhoAmI" aria-expanded="false" aria-controls="collapseWhoAmI">
                                                    Who Am I
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseWhoAmI" class="collapse" aria-labelledby="headingWhoAmI" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Openness to Experience</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intOpennessToExperience'] ?>%;" aria-valuenow="<?= $partnerData['intOpennessToExperience'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intOpennessToExperience'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intOpennessToExperience'] ?>%;" aria-valuenow="<?= $myData['intOpennessToExperience'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intOpennessToExperience'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Conscientiousness</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intConscientiousness'] ?>%;" aria-valuenow="<?= $partnerData['intConscientiousness'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intConscientiousness'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intConscientiousness'] ?>%;" aria-valuenow="<?= $myData['intConscientiousness'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intConscientiousness'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Extrovert Personality</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intExtrovertPersonality'] ?>%;" aria-valuenow="<?= $partnerData['intExtrovertPersonality'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intExtrovertPersonality'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intExtrovertPersonality'] ?>%;" aria-valuenow="<?= $myData['intExtrovertPersonality'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intExtrovertPersonality'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Introvert Personality</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intIntrovertPersonality'] ?>%;" aria-valuenow="<?= $partnerData['intIntrovertPersonality'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intIntrovertPersonality'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intIntrovertPersonality'] ?>%;" aria-valuenow="<?= $myData['intIntrovertPersonality'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intIntrovertPersonality'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Agreeableness</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intAgreeableness'] ?>%;" aria-valuenow="<?= $partnerData['intAgreeableness'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intAgreeableness'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intAgreeableness'] ?>%;" aria-valuenow="<?= $myData['intAgreeableness'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intAgreeableness'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Neuroticism</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intNeuroticism'] ?>%;" aria-valuenow="<?= $partnerData['intNeuroticism'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intNeuroticism'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intNeuroticism'] ?>%;" aria-valuenow="<?= $myData['intNeuroticism'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intNeuroticism'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Family Bond</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intFamilyBond'] ?>%;" aria-valuenow="<?= $partnerData['intFamilyBond'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intFamilyBond'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intFamilyBond'] ?>%;" aria-valuenow="<?= $myData['intFamilyBond'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intFamilyBond'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Money</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intMoney'] ?>%;" aria-valuenow="<?= $partnerData['intMoney'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intMoney'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intMoney'] ?>%;" aria-valuenow="<?= $myData['intMoney'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intMoney'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Religious</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intReligious'] ?>%;" aria-valuenow="<?= $partnerData['intReligious'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intReligious'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intReligious'] ?>%;" aria-valuenow="<?= $myData['intReligious'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intReligious'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Physically Active</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intPhysicallyActive'] ?>%;" aria-valuenow="<?= $partnerData['intPhysicallyActive'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intPhysicallyActive'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intPhysicallyActive'] ?>%;" aria-valuenow="<?= $myData['intPhysicallyActive'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intPhysicallyActive'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Politics</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['IntPolitics'] ?>%;" aria-valuenow="<?= $partnerData['IntPolitics'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['IntPolitics'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['IntPolitics'] ?>%;" aria-valuenow="<?= $myData['IntPolitics'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['IntPolitics'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Knowledge</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intKnowledge'] ?>%;" aria-valuenow="<?= $partnerData['intKnowledge'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intKnowledge'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intKnowledge'] ?>%;" aria-valuenow="<?= $myData['intKnowledge'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intKnowledge'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Love Affairs</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intLoveAffairs'] ?>%;" aria-valuenow="<?= $partnerData['intLoveAffairs'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intLoveAffairs'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intLoveAffairs'] ?>%;" aria-valuenow="<?= $myData['intLoveAffairs'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intLoveAffairs'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>The Importance of Male & Female Virginity.</strong></td>
                                                                <td class="partner-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $partnerData['intimportanceVirginity'] ?>%;" aria-valuenow="<?= $partnerData['intimportanceVirginity'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $partnerData['intimportanceVirginity'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <div class="progress">
                                                                        <div class="progress-bar" role="progressbar" style="width: <?= $myData['intimportanceVirginity'] ?>%;" aria-valuenow="<?= $myData['intimportanceVirginity'] ?>" aria-valuemin="0" aria-valuemax="100">
                                                                            <?= $myData['intimportanceVirginity'] ?>%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>My Interests & Hobbies</strong></td>
                                                                <td class="partner-detail">
                                                                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#modelPartnerInterest">View Details</button>
                                                                </td>
                                                                <td class="my-detail">
                                                                    <button class="btn btn-info btn-block" data-toggle="modal" data-target="#modelMyInterest">View Details</button>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                        <!-- Partner Interests & Hobbies Modal -->
                                                        <div class="modal fade" id="modelPartnerInterest" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <h3 style="color: #37474f;"><strong><?= $partnerData['vcNickName'] ?>'s Interests & Hobbies</strong></h3>
                                                                        <hr />
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <h4 style="color: #2196f3;"><strong>Enrichment Hobbies</strong></h4>
                                                                                <?php
                                                                                foreach ($partnerEnrichmentHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #2196f3;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcEnrichmentHobby']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <h4 style="color: #a86955;"><strong>Sports / Physical Activities</strong></h4>
                                                                                <?php
                                                                                foreach ($partnerSportsActivities as $data) {
                                                                                ?>
                                                                                    <p style="color: #a86955;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcSportsPhysicalActivities']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <h4 style="color: #5738A6;"><strong>Social Activites</strong></h4>
                                                                                <?php
                                                                                foreach ($partnerSocialActivites as $data) {
                                                                                ?>
                                                                                    <p style="color: #5738A6;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcSocialActivities']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <h4 style="color: #ff9800;"><strong>Creative Hobbies</strong></h4>
                                                                                <?php
                                                                                foreach ($partnerCreativeHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #ff9800;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcCreativeHobbies']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <h5 style="color: #00bcd4;"><strong>Collecting Hobbies</strong></h5>
                                                                                <?php
                                                                                foreach ($partnerCollectingHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #00bcd4;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcCollectingHobby']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <h5 style="color: #ec407a;"><strong>Outdoors hobbies</strong></h5>
                                                                                <?php
                                                                                foreach ($partnerOutdoorsHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #ec407a;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcOutdoorHobies']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <h5 style="color: #009688;"><strong>Domestic Hobbies</strong></h5>
                                                                                <?php
                                                                                foreach ($partnerDomesticHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #009688;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcdomesticHobbies']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Model End -->

                                                        <!-- My Interests & Hobbies Modal -->
                                                        <div class="modal fade" id="modelMyInterest" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <h3 style="color: #37474f;"><strong>My Interests & Hobbies</strong></h3>
                                                                        <hr />
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <h4 style="color: #2196f3;"><strong>Enrichment Hobbies</strong></h4>
                                                                                <?php
                                                                                foreach ($myEnrichmentHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #2196f3;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcEnrichmentHobby']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <h4 style="color: #a86955;"><strong>Sports / Physical Activities</strong></h4>
                                                                                <?php
                                                                                foreach ($mySportsActivities as $data) {
                                                                                ?>
                                                                                    <p style="color: #a86955;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcSportsPhysicalActivities']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <h4 style="color: #5738A6;"><strong>Social Activites</strong></h4>
                                                                                <?php
                                                                                foreach ($mySocialActivites as $data) {
                                                                                ?>
                                                                                    <p style="color: #5738A6;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcSocialActivities']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <h4 style="color: #ff9800;"><strong>Creative Hobbies</strong></h4>
                                                                                <?php
                                                                                foreach ($myCreativeHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #ff9800;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcCreativeHobbies']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <h5 style="color: #00bcd4;"><strong>Collecting Hobbies</strong></h5>
                                                                                <?php
                                                                                foreach ($myCollectingHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #00bcd4;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcCollectingHobby']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <h5 style="color: #ec407a;"><strong>Outdoors hobbies</strong></h5>
                                                                                <?php
                                                                                foreach ($myOutdoorsHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #ec407a;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcOutdoorHobies']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <h5 style="color: #009688;"><strong>Domestic Hobbies</strong></h5>
                                                                                <?php
                                                                                foreach ($myDomesticHobbies as $data) {
                                                                                ?>
                                                                                    <p style="color: #009688;">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-circle"></i>&nbsp;<?= $data['vcdomesticHobbies']; ?></p>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Model End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingEducation">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseEducation" aria-expanded="false" aria-controls="collapseEducation">
                                                    Education
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseEducation" class="collapse" aria-labelledby="headingEducation" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Education Level</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcEducationLevel'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcEducationLevel'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Education Field</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcEducationField'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcEducationField'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>School / University</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcSclUniDescription'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcSclUniDescription'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingCareer">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseCareer" aria-expanded="false" aria-controls="collapseCareer">
                                                    Career
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseCareer" class="collapse" aria-labelledby="headingCareer" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Working With</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcWorkingWith'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcWorkingWith'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Working As</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcWorkingAs'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcWorkingAs'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Working Country</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcWorkingCountry'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcWorkingCountry'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Working District</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcWorkingDistrict'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcWorkingDistrict'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Working City</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcWorkingCity'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcWorkingCity'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Describe Career</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcDescribeCareer'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcDescribeCareer'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingPersonalAssets">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapsePersonalAssets" aria-expanded="false" aria-controls="collapsePersonalAssets">
                                                    Personal Assets
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsePersonalAssets" class="collapse" aria-labelledby="headingPersonalAssets" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Monthly Income</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcMonthlyIncome'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcMonthlyIncome'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Monthly Income Routes</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcMonthlyIncomeRouteSeparator'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcMonthlyIncomeRouteSeparator'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Asset Value</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcAssetValue'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcAssetValue'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom" style="background-color: orange;">
                                                                <td><strong>Asset Routes</strong></td>
                                                                <td class="partner-detail"></td>
                                                                <td class="my-detail"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Ownership of Assets</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcOwnershipOfAssets'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcOwnershipOfAssets'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingFamily">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseFamily" aria-expanded="false" aria-controls="collapseFamily">
                                                    Family
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFamily" class="collapse" aria-labelledby="headingFamily" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom" style="background-color: orange;">
                                                                <td><strong>Family Location</strong></td>
                                                                <td class="partner-detail"></td>
                                                                <td class="my-detail"></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Family Type</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcFamilyType'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcFamilyType'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Family Values</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcFamilyValues'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcFamilyValues'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Family Class</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcFamilyClass'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcFamilyClass'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Family Culture</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcFamilyCulture'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcFamilyCulture'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Family Status</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcFatherStatus'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcFatherStatus'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Mother Status</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcMotherStatus'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcMotherStatus'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Family Details</strong></td>
                                                                <td class="partner-detail"><button class="btn btn-info btn-block" data-toggle="modal" data-target="#modelPartnerFamilyDetails">View Details</button></td>
                                                                <td class="my-detail"><button class="btn btn-info btn-block" data-toggle="modal" data-target="#modelMyFamilyDetails">View Details</button></td>
                                                            </tr>
                                                        </table>


                                                        <!-- Partner Family Details Modal -->
                                                        <div class="modal fade" id="modelPartnerFamilyDetails" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <h3 style="color: #37474f;"><strong><?= $partnerData['vcNickName'] ?>'s Family Details</strong></h3>
                                                                        <hr />
                                                                        <p class="text-justify"><?= $partnerData['vcFamilyDetails'] ?></p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal End -->

                                                        <!-- My Family Details Modal -->
                                                        <div class="modal fade" id="modelMyFamilyDetails" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <h3 style="color: #37474f;"><strong>My Family Details</strong></h3>
                                                                        <hr />
                                                                        <p class="text-justify"><?= $myData['vcFamilyDetails'] ?></p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal End -->


                                                    </div>
                                                </div>
                                                <!-- partial:index.partial.html -->
                                                <!-- <div tabindex="-1" uk-slider="center: true">
                                                    <div class="uk-position-relative uk-visible-toggle uk-light">
                                                        <ul class="uk-slider-items uk-grid" uk-lightbox>
                                                            <li>
                                                                <div class="uk-panel">
                                                                    <a href="https://getuikit.com/docs/images/photo.jpg">
                                                                        <img data-src="https://getuikit.com/docs/images/photo.jpg" alt="" uk-img="target: !ul > :last-child, !* +*">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="uk-panel">
                                                                    <a href="https://getuikit.com/docs/images/light.jpg">
                                                                        <img data-src="https://getuikit.com/docs/images/light.jpg" alt="" uk-img="target: !* -*, !* +*">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="uk-panel">
                                                                    <a href="https://getuikit.com/docs/images/photo.jpg">
                                                                        <img data-src="https://getuikit.com/docs/images/photo.jpg" alt="" uk-img="target: !* -*, !* +*">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="uk-panel">
                                                                    <a href="https://getuikit.com/docs/images/light.jpg">
                                                                        <img data-src="https://getuikit.com/docs/images/light.jpg" alt="" uk-img="target: !* -*, !* +*">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="uk-panel">
                                                                    <a href="https://getuikit.com/docs/images/photo.jpg">
                                                                        <img data-src="https://getuikit.com/docs/images/photo.jpg" alt="" uk-img="target: !* -*, !* +*">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="uk-panel">
                                                                    <a href="https://getuikit.com/docs/images/light.jpg">
                                                                        <img data-src="https://getuikit.com/docs/images/light.jpg" alt="" uk-img="target: !* -*, !ul > :first-child">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                                    </div>
                                                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                                                </div> -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingAfterMarriage">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseAfterMarriage" aria-expanded="false" aria-controls="collapseAfterMarriage">
                                                    After Marriage
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseAfterMarriage" class="collapse" aria-labelledby="headingAfterMarriage" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Prefer to Live</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcPrefferToLive'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcPrefferToLive'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Job</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcJobAfterMarriage'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcJobAfterMarriage'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Education</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcEducationAfterMarriage'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcEducationAfterMarriage'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Children Likes</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcChildrenLikes'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcChildrenLikes'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Help Family</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcHelpFamily'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcHelpFamily'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Other Needs</strong></td>
                                                                <td class="partner-detail"><button class="btn btn-info btn-block" data-toggle="modal" data-target="#modelPartnerOtherNeeds">View Details</button></td>
                                                                <td class="my-detail"><button class="btn btn-info btn-block" data-toggle="modal" data-target="#modelMyOtherNeeds">View Details</button></td>
                                                            </tr>
                                                        </table>

                                                        <!-- Partner Other Needs Modal -->
                                                        <div class="modal fade" id="modelPartnerOtherNeeds" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <h3 style="color: #37474f;"><strong><?= $partnerData['vcNickName'] ?>'s Other Needs</strong></h3>
                                                                        <hr />
                                                                        <p class="text-justify"><?= $partnerData['vcOtherNeeds'] ?></p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal End -->

                                                        <!-- My Other Needs Modal -->
                                                        <div class="modal fade" id="modelMyOtherNeeds" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <h3 style="color: #37474f;"><strong>My Other Needs</strong></h3>
                                                                        <hr />
                                                                        <p class="text-justify"><?= $myData['vcOtherNeeds'] ?></p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header pl-0" id="headingHoroscope">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed text-primary p-0" data-toggle="collapse" data-target="#collapseHoroscope" aria-expanded="false" aria-controls="collapseHoroscope">
                                                    Horoscope
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseHoroscope" class="collapse" aria-labelledby="headingHoroscope" data-parent="#accordion">
                                            <div class="card-body pt-0">
                                                <div class="row">
                                                    <div class="overflowX">
                                                        <table>
                                                            <tr class="border-bottom">
                                                                <td><strong>Matching Horoscope</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcMatchingHoroscope'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcMatchingHoroscope'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Papa Kendara</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcPapaKendara'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcPapaKendara'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Zodiac Sign</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcZodiacSign'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcZodiacSign'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Nekatha</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcNekatha'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcNekatha'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Ganaya</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['vcGanaya'] ?></td>
                                                                <td class="my-detail"><?= $myData['vcGanaya'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Ganaya</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intMoon'] ?></td>
                                                                <td class="my-detail"><?= $myData['intMoon'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Mars</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intMars'] ?></td>
                                                                <td class="my-detail"><?= $myData['intMars'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Mercury</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intMercury'] ?></td>
                                                                <td class="my-detail"><?= $myData['intMercury'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Jupiter</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intJupiter'] ?></td>
                                                                <td class="my-detail"><?= $myData['intJupiter'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Venus</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intVenus'] ?></td>
                                                                <td class="my-detail"><?= $myData['intVenus'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Saturn</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intSaturn'] ?></td>
                                                                <td class="my-detail"><?= $myData['intSaturn'] ?></td>
                                                            </tr>
                                                            <tr class="border-bottom">
                                                                <td><strong>Rahu</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intRahu'] ?></td>
                                                                <td class="my-detail"><?= $myData['intRahu'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Kethu</strong></td>
                                                                <td class="partner-detail"><?= $partnerData['intKethu'] ?></td>
                                                                <td class="my-detail"><?= $myData['intKethu'] ?></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="my-detail">
                                                        <div class="form-group">
                                                            <button class="btn btn-info btn-block" data-toggle="modal" data-target="#modelMatchHoroscope">Match Horoscope</button>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Match Horoscope Modal -->
                                                <div class="modal fade" id="modelMatchHoroscope" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <h3 style="color: #37474f;"><strong>Match Horoscope</strong></h3>
                                                                <hr />
                                                                <p class="text-justify">
                                                                    Obtain the service of a talented and experienced astrologer to match the horoscopes.
                                                                    Never match your horoscopes via computer and internet.
                                                                    Not only the horoscopes but also the planetary influence also must be considered.
                                                                    A computer programme only shows you the percentage of horoscope matching.
                                                                    If any programme states that it can provide information based on your planetary powers that programme must be designed based on your horoscope.
                                                                    There are no equal individuals in the world. Although individuals resemble physically,
                                                                    they are different according to the way they think and the effect of Karma. Therefore, we do not find similar horoscopes.
                                                                    Matching horoscopes via computers can be roughly accurate concerning the programmes based on the mathematical functions of astrology.
                                                                    But the planetary predictions provided by the computers are wrong.
                                                                    The most pressing matter is that computers may indicate non-matching horoscopes as matching.
                                                                    Similarly, matching horoscopes are indicated by computers as non-matching.
                                                                    Therefore, always get your horoscope personally ready by an experienced astrologer.
                                                                </p>


                                                                <h5 class="text-center font-weight-bold">Your Profile</h5>
                                                                <h5 class="text-center mt-0"><?= $myData['vcNickName'] ?> - <?= $myData['vcMemberCode'] ?></h5>


                                                                <h5 class="text-center font-weight-bold">Partner Profile</h5>
                                                                <h5 class="text-center mt-0"><?= $partnerData['vcNickName'] ?> - <?= $partnerData['vcMemberCode'] ?></h5>

                                                                <?php
                                                                if ($myData['intMemberAccountTypeID'] != 4) { // Without Premium Members
                                                                ?>
                                                                    <br>
                                                                    <p>(We provide this service to our <strong>Premium Members</strong> free of charge)</p>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="row">
                                                                        <div class="col text-center">
                                                                            <button type="button" class="btn btn-success">Request Match the Horoscope</button>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <p class="text-center font-weight-bold" style="color: #455a64;">This facility is completely free. Because you are a <span style="color: #ff9800;">Premium Member</span> of our web site.</p>
                                                                <?php
                                                                }
                                                                ?>



                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Descriptive Information Modal -->
    <div class="modal" id="modalDescriptiveInformation" tabindex="-1" role="dialog" aria-labelledby="modalDescriptiveInformationTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Descriptive Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>


    <script>
        var Member = function() {
            this.MemberID = 0;
        }

        $(function() {


            $('[data-toggle="tooltip"]').tooltip();

            $('#btnAllDetails').click(function() {

                if ($("#btnAllDetails").hasClass("show")) { // If Already Show 
                    $("#btnAllDetails").addClass('hide');
                    $("#btnAllDetails").removeClass('show');

                    ShowAllDetails(false);
                } else { // If Already Hide
                    $("#btnAllDetails").addClass('show');
                    $("#btnAllDetails").removeClass('hide');

                    ShowAllDetails(true);
                }

            });

            $('#btnMyDetails').click(function() {

                if ($("#btnMyDetails").hasClass("show")) { // If Already Show
                    $("#btnMyDetails").addClass('hide');
                    $("#btnMyDetails").removeClass('show');

                    ShowMyDetails(false);
                } else { // If Already Hide
                    $("#btnMyDetails").addClass('show');
                    $("#btnMyDetails").removeClass('hide');

                    ShowMyDetails(true);
                }

            });
        });



        function ShowAllDetails(value) {
            var val = $(".collapse-area .card").find(".collapse");

            // val[1].className += "show";

            for (let index = 0; index < val.length; index++) {
                if (value) { // Show All
                    val[index].className += " show";
                } else { // Hide All
                    val[index].classList.remove("show");
                }
            }
        }

        function ShowMyDetails(value) {
            if (value) { // Show My Details
                // $(".header .partner-detail").removeClass("border-0");
                // $(".partner-detail").addClass("col-5");
                $(".my-detail").removeClass("hide-my-detail");
                $("table").removeClass("w-100");

            } else { // Hide My Details
                // $(".partner-detail").removeClass("col-5");
                // $(".header .partner-detail").addClass("border-0");
                $(".my-detail").addClass("hide-my-detail");
                $("table").addClass("w-100");
            }
        }


        function ShowDescriptiveInformation(value) {
            $("#modalDescriptiveInformation").modal("show");
        }

        // function LikeOrDisLikeProfile(PartnerID) {
        //     var model = new Member();
        //     model.MemberID = PartnerID;
        //     document.getElementById("btnHeart").classList.toggle("like");

        //     ajaxCall('Account/LikeOrDisLikeProfile', model, function(response) {
        //         if (response.success == false) {
        //             document.getElementById("btnHeart").classList.toggle("like");
        //         }
        //     });
        // }

        function LikeOrDisLikeProfile(element) {
            var model = new Member();
            model.MemberID = element.name;
            document.getElementById(element.id).classList.toggle("like");


            ajaxCall('Account/LikeOrDisLikeProfile', model, function(response) {
                if (response.success == false) {
                    document.getElementById(element.id).classList.toggle("like");
                }
            });
        }
    </script>