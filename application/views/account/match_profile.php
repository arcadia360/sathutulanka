    <!-- UiKit CSS -->
    <link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=868'>
    <link rel='stylesheet' href='<?= base_url('resources/css/memberProfile.css') ?>'>




    <style>
        .card {
            border-radius: none !important;
            border: none !important;
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
            top: 0.1875rem;
            left: 0.1875rem;
            width: 1.125rem;
            height: 1.125rem;
            border-radius: 1.125rem;
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
            height: 1.5rem;
            width: 60px;
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
            bottom: 0;
            transition: opacity 0.25s;
        }

        .btn-toggle.btn-sm.btn-sm:before,
        .btn-toggle.btn-sm.btn-sm:after {
            line-height: -0.5rem;
            color: #fff;
            letter-spacing: 0.75px;
            left: 0.4125rem;
            width: 42px;
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

        @media (min-width: 1200px) {
            .uk-grid>* {
                padding-left: 10px !important;
            }
        }
    </style>

    <script>
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
            var val = $(".card").find(".collapse");

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
                $(".partner-detail").removeClass("col-12");
                $(".partner-detail").addClass("col-6");
                $(".my-detail").removeClass("hide-my-detail");

            } else { // Hide My Details
                $(".partner-detail").removeClass("col-6");
                $(".partner-detail").addClass("col-12");
                $(".my-detail").addClass("hide-my-detail");
            }
        }


        function ShowDescriptiveInformation(value) {
            $("#modalDescriptiveInformation").modal("show");
        }
    </script>

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card profile-card">
                        <div class="row">
                            <a href="" class="profile-heart like"><i class="fas fa-heart"></i></a>
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
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body content-areaX">
                            <div id="accordion">
                                <div class="card">

                                    <!-- partial:index.partial.html -->
                                    <!-- <div class="uk-container uk-container-small"> -->
                                    <div tabindex="-1" uk-slider="center: true">
                                        <div class="uk-position-relative uk-visible-toggle uk-light">
                                            <ul class="uk-slider-items uk-grid" uk-lightbox>
                                                <li>
                                                    <div class="uk-panel">
                                                        <a href="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/1.jpg" ?>">
                                                            <img data-src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/1.jpg" ?>" alt="" uk-img="target: !ul > :last-child, !* +*">
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="uk-panel">
                                                        <a href="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/2.jpg" ?>">
                                                            <img data-src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/2.jpg" ?>" alt="" uk-img="target: !* -*, !* +*">
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="uk-panel">
                                                        <a href="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/3.jpg" ?>">
                                                            <img data-src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/3.jpg" ?>" alt="" uk-img="target: !* -*, !* +*">
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="uk-panel">
                                                        <a href="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/4.jpg" ?>">
                                                            <img data-src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/4.jpg" ?>" alt="" uk-img="target: !* -*, !* +*">
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="uk-panel">
                                                        <a href="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/5.jpeg" ?>">
                                                            <img data-src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/5.jpeg" ?>" alt="" uk-img="target: !* -*, !* +*">
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                        </div>
                                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                                    </div>
                                </div>

                                <div class="col-12" style="border:1px solid #2F373C !important; margin-bottom: 10px;">
                                    <div class="row">
                                        <h5 style="background-color: #2F373C; color: #FFFFFF; padding: 10px; width: 100%;"><i class="fas fa-balance-scale-left"></i> &nbsp; Basic Preferences</h5>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6" style="display: flex; align-items: center;">

                                                </div>
                                                <div class="col-3">
                                                    <div class="mini-profile-picture">
                                                        <img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-5.jpg" alt="Profile Photo">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mini-profile-picture">
                                                        <img src="https://www.gazabnews.com/wp-content/uploads/2017/06/Cute-Stylish-Girl-DP-1.jpg" alt="Profile Photo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Age</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check" data-toggle="tooltip" title="Descriptive Information"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check" data-toggle="tooltip" title="Descriptive Information Descriptive Information"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Height</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Marital Status</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Children</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Religion</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Ethnicity</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Mother Tongue</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Live in Srilanka</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Education</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Career</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Monthly Income</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Asset Level</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Disability</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center align-items-center" style="padding: 10px 0 10px 0;">
                                                <div class="col-6">
                                                    <span class="basic-preference-title">Diet</span>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
                                                </div>
                                                <div class="col-3" style="text-align:center;">
                                                    <i class="fas fa-check"></i>
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
                                <!-- <div class="row" style="margin-bottom: 10px;"> -->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="float-right" style="font-size: 0.8em;">All Details :
                                                <button type="button" id="btnAllDetails" class="btn btn-sm btn-toggle hide" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                    <div class="handle"></div>
                                                </button>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label style="font-size: 0.8em;">My Details :
                                                <button type="button" id="btnMyDetails" class="btn btn-sm btn-toggle active show" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                    <div class="handle"></div>
                                                </button>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link text-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Basic Information
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <h5 style="background-color: #4C637C; padding: 10px; color: #FFFFFF; text-align: center;"><i class="fas fa-male"></i> His Details</h5>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <h5 style="background-color: #4C637C; padding: 10px; color: #FFFFFF; text-align: center;"><i class="fas fa-female"></i> My Details</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="nickName">Nick Name</label>
                                                        <input type="text" class="form-control" id="partnerNickName" value="<?= $partnerData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Nick Name</label>
                                                        <input type="text" class="form-control" id="myNickName" value="<?= $myData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Gender</label>
                                                        <input type="text" class="form-control" id="partnerGender" value="<?= $partnerData['vcGender'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Gender</label>
                                                        <input type="text" class="form-control" id="myGender" value="<?= $myData['vcGender'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Age</label>
                                                        <input type="text" class="form-control" id="partnerAge" value="<?= $partnerData['vcGender'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Age</label>
                                                        <input type="text" class="form-control" id="myAge" value="<?= $myData['vcGender'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Marital Status</label>
                                                        <input type="text" class="form-control" id="partnerMaritalStatus" value="<?= $partnerData['vcMaritalStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <!-- <label for="shortName" class="float-right"><a class="descriptive-information-model" href="#" data-toggle="tooltip" title="Descriptive Information" onclick="ShowDescriptiveInformation('MaritalStatus')"><i class="fas fa-info-circle"></i></a></label> -->
                                                        <label for="website" style="color: #FFFFFF;">Marital Status</label>
                                                        <input type="text" class="form-control" id="myMaritalStatus" value="<?= $myData['vcMaritalStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">No Of Children(s)</label>
                                                        <input type="text" class="form-control" id="partnerNoOfChildren" value="<?= $partnerData['vcNoOfChildren'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <!-- <label for="shortName" class="float-right" style="color: #FFFFFF;">No Of Children(s)<a class="descriptive-information-model float-right" href="#" data-toggle="tooltip" title="Descriptive Information" onclick="ShowDescriptiveInformation('NoOfChildren')"><i class="fas fa-info-circle"></i></a></label> -->
                                                        <label for="website" style="color: #FFFFFF;">No Of Children(s)</label>
                                                        <input type="text" class="form-control" id="myNoOfChildren" value="<?= $myData['vcNoOfChildren'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Prof: Manage</label>
                                                        <input type="text" class="form-control" id="partnerMarryBy" value="<?= $partnerData['vcGender'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Prof: Manage</label>
                                                        <input type="text" class="form-control" id="myMarryBy" value="<?= $myData['vcGender'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Marry By</label>
                                                        <input type="text" class="form-control" id="partnerMarryBy" value="<?= $partnerData['vcMarriageType'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Marry By</label>
                                                        <input type="text" class="form-control" id="myMarryBy" value="<?= $myData['vcMarriageType'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-6">
                                            <div class="form-group">
                                                <label for="website">Date Of Birth</label>
                                                <input type="text" class="form-control" id="bateOfBirth" value="" placeholder="N/A" disabled>
                                            </div>
                                        </div> -->



                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Physical Status
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Height</label>
                                                        <input type="text" class="form-control" id="partnerHeight" value="<?= $partnerData['intHeight'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Height</label>
                                                        <input type="text" class="form-control" id="myHeight" value="<?= $myData['intHeight'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Weight</label>
                                                        <input type="text" class="form-control" id="partnerWeight" value="<?= $partnerData['Weight_Customised'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Weight</label>
                                                        <input type="text" class="form-control" id="myWeight" value="<?= $myData['Weight_Customised'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Body Shape</label>
                                                        <input type="text" class="form-control" id="partnerBodyShape" value="<?= $partnerData['vcBodyType'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Body Shape</label>
                                                        <input type="text" class="form-control" id="myBodyShape" value="<?= $myData['vcBodyType'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Skin Color</label>
                                                        <input type="text" class="form-control" id="partnerSkinColor" value="<?= $partnerData['vcSkinColour'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Skin Color</label>
                                                        <input type="text" class="form-control" id="mySkinColor" value="<?= $myData['vcSkinColour'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Disability</label>
                                                        <input type="text" class="form-control" id="partnerDisability" value="<?= $partnerData['vcDisability'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Disability</label>
                                                        <input type="text" class="form-control" id="myDisability" value="<?= $myData['vcDisability'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Blood Group</label>
                                                        <input type="text" class="form-control" id="partnerBloodGroup" value="<?= $partnerData['vcBloodGroup'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Blood Group</label>
                                                        <input type="text" class="form-control" id="myBloodGroup" value="<?= $myData['vcBloodGroup'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Health Information</label>
                                                        <input type="text" class="form-control" id="partnerHealthInformation" value="<?= $partnerData['vcHealthInfo'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Health Information</label>
                                                        <input type="text" class="form-control" id="myHealthInformation" value="<?= $myData['vcHealthInfo'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Residence
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Current Residence</label>
                                                        <input type="text" class="form-control" id="partnerCurrentResidence" value="<?= $partnerData['vcLiveIn'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Current Residence</label>
                                                        <input type="text" class="form-control" id="myCurrentResidence" value="<?= $myData['vcLiveIn'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Residence Status</label>
                                                        <input type="text" class="form-control" id="partnerResidenceStatus" value="<?= $partnerData['vcResidenceStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Residence Status</label>
                                                        <input type="text" class="form-control" id="myResidenceStatus" value="<?= $myData['vcResidenceStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Live in Srilanka</label>
                                                        <input type="text" class="form-control" id="partnerLiveinSriLanka" value="<?= $partnerData['vcLiveIn'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Live in Sri Lanka</label>
                                                        <input type="text" class="form-control" id="myLiveinSriLanka" value="<?= $myData['vcLiveIn'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">District</label>
                                                        <input type="text" class="form-control" id="partnerDistrict" value="<?= $partnerData['Test'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">District</label>
                                                        <input type="text" class="form-control" id="myDistrict" value="<?= $myData['Test'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">City</label>
                                                        <input type="text" class="form-control" id="partnerCity" value="<?= $partnerData['vcCityName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">City</label>
                                                        <input type="text" class="form-control" id="myCity" value="<?= $myData['vcCityName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Ownership of the Address</label>
                                                        <input type="text" class="form-control" id="partnerOwnerShipOfTheAddress" value="<?= $partnerData['vcAddOfSriLanka'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Ownership of the Address</label>
                                                        <input type="text" class="form-control" id="myOwnerShipOfTheAddress" value="<?= $myData['vcAddOfSriLanka'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Native District</label>
                                                        <input type="text" class="form-control" id="partnerNativeDistrict" value="<?= $partnerData['Test'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Native District</label>
                                                        <input type="text" class="form-control" id="myNativeDistrict" value="<?= $myData['Test'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingBackground">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseBackground" aria-expanded="false" aria-controls="collapseBackground">
                                                Background
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseBackground" class="collapse" aria-labelledby="headingBackground" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Mother Tongue</label>
                                                        <input type="text" class="form-control" id="partnerMotherTongue" value="<?= $partnerData['vcMotherTounge'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Mother Tongue</label>
                                                        <input type="text" class="form-control" id="myMotherTongue" value="<?= $myData['vcMotherTounge'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Ethnicity</label>
                                                        <input type="text" class="form-control" id="partnerEthnicity" value="<?= $partnerData['vcEthnicity'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Ethnicity</label>
                                                        <input type="text" class="form-control" id="myEthnicity" value="<?= $myData['vcEthnicity'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Religion</label>
                                                        <input type="text" class="form-control" id="partnerReligion" value="<?= $partnerData['vcReligion'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Religion</label>
                                                        <input type="text" class="form-control" id="myReligion" value="<?= $myData['vcReligion'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Caste</label>
                                                        <input type="text" class="form-control" id="partnerCaste" value="<?= $partnerData['vcReligion'] ?><?= $partnerData['vcReligion'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Caste</label>
                                                        <input type="text" class="form-control" id="myCaste" value="<?= $myData['vcReligion'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Sub Caste</label>
                                                        <input type="text" class="form-control" id="partnerSubCaste" value="<?= $partnerData['vcSubCasteName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Sub Caste</label>
                                                        <input type="text" class="form-control" id="mySubCaste" value="<?= $myData['vcSubCasteName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Police Report</label>
                                                        <input type="text" class="form-control" id="partnerPoliceReport" value="<?= $partnerData['vcPoliceReportCanProvide'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Police Report</label>
                                                        <input type="text" class="form-control" id="myPoliceReport" value="<?= $myData['vcPoliceReportCanProvide'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingLifeStyle">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseLifeStyle" aria-expanded="false" aria-controls="collapseLifeStyle">
                                                Life Style
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseLifeStyle" class="collapse" aria-labelledby="headingLifeStyle" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Diet</label>
                                                        <input type="text" class="form-control" id="partnerDiet" value="<?= $partnerData['vcDiet'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Diet</label>
                                                        <input type="text" class="form-control" id="myDiet" value="<?= $myData['vcDiet'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Drink</label>
                                                        <input type="text" class="form-control" id="partnerDrink" value="<?= $partnerData['vcDrink'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Drink</label>
                                                        <input type="text" class="form-control" id="myDrink" value="<?= $myData['vcDrink'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Smoke</label>
                                                        <input type="text" class="form-control" id="partnerSmoke" value="<?= $partnerData['vcSmoke'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Smoke</label>
                                                        <input type="text" class="form-control" id="mySmoke" value="<?= $myData['vcSmoke'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Languages, Speak</label>
                                                        <input type="text" class="form-control" id="partnerLanguages" value="<?= $partnerData['vcLanguageSpeakWithSeparator'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Languages, Speak</label>
                                                        <input type="text" class="form-control" id="myLanguages" value="<?= $myData['vcLanguageSpeakWithSeparator'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Dress & Makeup</label>
                                                        <input type="text" class="form-control" id="partnerDress&Makeup" value="<?= $partnerData['vcDressAndMakeup'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Dress & Makeup</label>
                                                        <input type="text" class="form-control" id="myDress&Makeup" value="<?= $myData['vcDressAndMakeup'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Used to Travel</label>
                                                        <input type="text" class="form-control" id="partnerUsedtoTravel" value="<?= $partnerData['vcUsedToTravel'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Used to Travel</label>
                                                        <input type="text" class="form-control" id="myUsedtoTravel" value="<?= $myData['vcUsedToTravel'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Call to Parents</label>
                                                        <input type="text" class="form-control" id="partnerCalltoParents" value="<?= $partnerData['vcCalToParent'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Call to Parents</label>
                                                        <input type="text" class="form-control" id="myCalltoParents" value="<?= $myData['vcCalToParent'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Customs</label>
                                                        <input type="text" class="form-control" id="partnerCustoms" value="<?= $partnerData['vcCustoms'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Customs</label>
                                                        <input type="text" class="form-control" id="myCustoms" value="<?= $myData['vcCustoms'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Live In</label>
                                                        <input type="text" class="form-control" id="partnerLiveIn" value="<?= $partnerData['vcLiveIn'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Live In</label>
                                                        <input type="text" class="form-control" id="myLiveIn" value="<?= $myData['vcLiveIn'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingWhoAmI">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseWhoAmI" aria-expanded="false" aria-controls="collapseWhoAmI">
                                                Who Am I
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseWhoAmI" class="collapse" aria-labelledby="headingWhoAmI" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Openness to Experience</label>
                                                        <input type="text" class="form-control" id="partnerOpennessToExperience" value="<?= $partnerData['intOpennessToExperience'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Openness to Experience</label>
                                                        <input type="text" class="form-control" id="myOpennessToExperience" value="<?= $myData['intOpennessToExperience'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Conscientiousness</label>
                                                        <input type="text" class="form-control" id="partnerConscientiousness" value="<?= $partnerData['intConscientiousness'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Conscientiousness</label>
                                                        <input type="text" class="form-control" id="myConscientiousness" value="<?= $myData['intConscientiousness'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Extrovert Personality</label>
                                                        <input type="text" class="form-control" id="partnerExtrovertPersonality" value="<?= $partnerData['intExtrovertPersonality'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Extrovert Personality</label>
                                                        <input type="text" class="form-control" id="myExtrovertPersonality" value="<?= $myData['intExtrovertPersonality'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Introvert Personality</label>
                                                        <input type="text" class="form-control" id="partnerIntrovertPersonality" value="<?= $partnerData['intIntrovertPersonality'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Introvert Personality</label>
                                                        <input type="text" class="form-control" id="myIntrovertPersonality" value="<?= $myData['intIntrovertPersonality'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Agreeableness</label>
                                                        <input type="text" class="form-control" id="partnerAgreeableness" value="<?= $partnerData['intAgreeableness'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Agreeableness</label>
                                                        <input type="text" class="form-control" id="myAgreeableness" value="<?= $myData['intAgreeableness'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Neuroticism</label>
                                                        <input type="text" class="form-control" id="partnerNeuroticism" value="<?= $partnerData['intNeuroticism'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Neuroticism</label>
                                                        <input type="text" class="form-control" id="myNeuroticism" value="<?= $myData['intNeuroticism'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Family Bond</label>
                                                        <input type="text" class="form-control" id="partnerFamilyBond" value="<?= $partnerData['intFamilyBond'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Family Bond</label>
                                                        <input type="text" class="form-control" id="myFamilyBond" value="<?= $myData['intFamilyBond'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Money</label>
                                                        <input type="text" class="form-control" id="partnerMoney" value="<?= $partnerData['intMoney'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Money</label>
                                                        <input type="text" class="form-control" id="myMoney" value="<?= $myData['intMoney'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Religious</label>
                                                        <input type="text" class="form-control" id="partnerReligious" value="<?= $partnerData['intReligious'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Religious</label>
                                                        <input type="text" class="form-control" id="myReligious" value="<?= $myData['intReligious'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Physically Active</label>
                                                        <input type="text" class="form-control" id="partnerPhysicallyActive" value="<?= $partnerData['intPhysicallyActive'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Physically Active</label>
                                                        <input type="text" class="form-control" id="myPhysicallyActive" value="<?= $myData['intPhysicallyActive'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Politics</label>
                                                        <input type="text" class="form-control" id="partnerPolitics" value="<?= $partnerData['IntPolitics'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Politics</label>
                                                        <input type="text" class="form-control" id="myPolitics" value="<?= $myData['IntPolitics'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Knowledge</label>
                                                        <input type="text" class="form-control" id="partnerKnowledge" value="<?= $partnerData['intKnowledge'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Knowledge</label>
                                                        <input type="text" class="form-control" id="myKnowledge" value="<?= $myData['intKnowledge'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">Love Affairs</label>
                                                        <input type="text" class="form-control" id="partnerLoveAffairs" value="<?= $partnerData['intLoveAffairs'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Love Affairs</label>
                                                        <input type="text" class="form-control" id="myLoveAffairs" value="<?= $myData['intLoveAffairs'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">The Importance of Male & Female Virginity.</label>
                                                        <input type="text" class="form-control" id="partnerFemaleVirginity" value="<?= $partnerData['intimportanceVirginity'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">The Importance of Male & Female Virginity.</label>
                                                        <input type="text" class="form-control" id="myFemaleVirginity" value="<?= $myData['intimportanceVirginity'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="website">My Interests & Hobbies</label>
                                                        <button class="btn btn-info btn-block">View Details</button>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">My Interests & Hobbies</label>
                                                        <button class="btn btn-info btn-block">View Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingEducation">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseEducation" aria-expanded="false" aria-controls="collapseEducation">
                                                Education
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseEducation" class="collapse" aria-labelledby="headingEducation" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Education Level</label>
                                                        <input type="text" class="form-control" id="partnerEducationLevel" value="<?= $partnerData['vcEducationLevel'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Education Level</label>
                                                        <input type="text" class="form-control" id="myEducationLevel" value="<?= $myData['vcEducationLevel'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Education Field</label>
                                                        <input type="text" class="form-control" id="partnerEducationField" value="<?= $partnerData['vcEducationField'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Education Field</label>
                                                        <input type="text" class="form-control" id="myEducationField" value="<?= $myData['vcEducationField'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">School / University</label>
                                                        <input type="text" class="form-control" id="partnerSchoolUniversity" value="<?= $partnerData['vcSclUniDescription'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">School / University</label>
                                                        <input type="text" class="form-control" id="mySchoolUniversity" value="<?= $myData['vcSclUniDescription'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingCareer">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseCareer" aria-expanded="false" aria-controls="collapseCareer">
                                                Career
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseCareer" class="collapse" aria-labelledby="headingCareer" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Working With</label>
                                                        <input type="text" class="form-control" id="shortName" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Working With</label>
                                                        <input type="text" class="form-control" id="shortName" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Working As</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Working As</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Working Country</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Working Country</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Working District</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Working District</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Working City</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Working City</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Describe Career</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Describe Career</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingPersonalAssets">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapsePersonalAssets" aria-expanded="false" aria-controls="collapsePersonalAssets">
                                                Personal Assets
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsePersonalAssets" class="collapse" aria-labelledby="headingPersonalAssets" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Monthly Income</label>
                                                        <input type="text" class="form-control" id="partnerMonthlyIncome" value="<?= $partnerData['vcMonthlyIncome'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Monthly Income</label>
                                                        <input type="text" class="form-control" id="myMonthlyIncome" value="<?= $myData['vcMonthlyIncome'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Monthly Income Routes</label>
                                                        <input type="text" class="form-control" id="partnerMonthlyIncomeRoutes" value="<?= $partnerData['vcMonthlyIncomeRouteSeparator'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Monthly Income Routes</label>
                                                        <input type="text" class="form-control" id="myMonthlyIncomeRoutes" value="<?= $myData['vcMonthlyIncomeRouteSeparator'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Asset Value</label>
                                                        <input type="text" class="form-control" id="partnerAssetValue" value="<?= $partnerData['vcAssetValue'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="website" style="color: #FFFFFF;">Asset Value</label>
                                                        <input type="text" class="form-control" id="myAssetValue" value="<?= $myData['vcAssetValue'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Asset Routes</label>
                                                        <input type="text" class="form-control" id="partnerAssetRoutes" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Asset Routes</label>
                                                        <input type="text" class="form-control" id="myAssetRoutes" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Ownership of Assets</label>
                                                        <input type="text" class="form-control" id="partnerOwnershipOfAssets" value="<?= $partnerData['vcOwnershipOfAssets'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Ownership of Assets</label>
                                                        <input type="text" class="form-control" id="myOwnershipOfAssets" value="<?= $myData['vcOwnershipOfAssets'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFamily">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseFamily" aria-expanded="false" aria-controls="collapseFamily">
                                                Family
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFamily" class="collapse" aria-labelledby="headingFamily" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Family Location</label>
                                                        <input type="text" class="form-control" id="partnerFamilyLocation" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Family Location</label>
                                                        <input type="text" class="form-control" id="myFamilyLocation" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Family Type</label>
                                                        <input type="text" class="form-control" id="partnerFamilyType" value="<?= $partnerData['vcFamilyType'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Family Type</label>
                                                        <input type="text" class="form-control" id="myFamilyType" value="<?= $myData['vcFamilyType'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Family Values</label>
                                                        <input type="text" class="form-control" id="partnerFamilyValues" value="<?= $partnerData['vcFamilyValues'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Family Values</label>
                                                        <input type="text" class="form-control" id="myFamilyValues" value="<?= $myData['vcFamilyValues'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Family Class</label>
                                                        <input type="text" class="form-control" id="partnerFamilyClass" value="<?= $partnerData['vcFamilyClass'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Family Class</label>
                                                        <input type="text" class="form-control" id="myFamilyClass" value="<?= $myData['vcFamilyClass'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Family Culture</label>
                                                        <input type="text" class="form-control" id="partnerFamilyCulture" value="<?= $partnerData['vcFamilyCulture'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Family Culture</label>
                                                        <input type="text" class="form-control" id="myFamilyCulture" value="<?= $myData['vcFamilyCulture'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Father Status</label>
                                                        <input type="text" class="form-control" id="partnerFatherStatus" value="<?= $partnerData['vcFatherStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Father Status</label>
                                                        <input type="text" class="form-control" id="myFatherStatus" value="<?= $myData['vcFatherStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Mother Status</label>
                                                        <input type="text" class="form-control" id="partnerMotherStatus" value="<?= $partnerData['vcMotherStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Mother Status</label>
                                                        <input type="text" class="form-control" id="myMotherStatus" value="<?= $myData['vcMotherStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Family Details</label>
                                                        <button class="btn btn-info btn-block">View Details</button>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Family Details</label>
                                                        <button class="btn btn-info btn-block">View Details</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- partial:index.partial.html -->
                                            <div tabindex="-1" uk-slider="center: true">
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
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingAfterMarriage">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseAfterMarriage" aria-expanded="false" aria-controls="collapseAfterMarriage">
                                                After Marriage
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseAfterMarriage" class="collapse" aria-labelledby="headingAfterMarriage" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Prefer to Live</label>
                                                        <input type="text" class="form-control" id="partnerPreferToLive" value="<?= $partnerData['vcPrefferToLive'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Prefer to Live</label>
                                                        <input type="text" class="form-control" id="myPreferToLive" value="<?= $myData['vcPrefferToLive'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Job</label>
                                                        <input type="text" class="form-control" id="partnerJob" value="<?= $partnerData['vcJobAfterMarriage'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Job</label>
                                                        <input type="text" class="form-control" id="myJob" value="<?= $myData['vcJobAfterMarriage'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Education</label>
                                                        <input type="text" class="form-control" id="partnerEducation" value="<?= $partnerData['vcEducationAfterMarriage'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Education</label>
                                                        <input type="text" class="form-control" id="myEducation" value="<?= $myData['vcEducationAfterMarriage'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Children Likes</label>
                                                        <input type="text" class="form-control" id="partnerChildrenLikes" value="<?= $partnerData['vcChildrenLikes'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Children Likes</label>
                                                        <input type="text" class="form-control" id="myChildrenLikes" value="<?= $myData['vcChildrenLikes'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Help Family</label>
                                                        <input type="text" class="form-control" id="partnerHelpFamily" value="<?= $partnerData['vcHelpFamily'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Help Family</label>
                                                        <input type="text" class="form-control" id="myHelpFamily" value="<?= $myData['vcHelpFamily'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Other Needs</label>
                                                        <button class="btn btn-info btn-block">View Details</button>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Other Needs</label>
                                                        <button class="btn btn-info btn-block">View Details</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingHoroscope">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseHoroscope" aria-expanded="false" aria-controls="collapseHoroscope">
                                                Horoscope
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseHoroscope" class="collapse" aria-labelledby="headingHoroscope" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="shortName">Matching Horoscope</label>
                                                        <input type="text" class="form-control" id="partnerMatchingHoroscope" value="<?= $partnerData['vcMatchingHoroscope'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Matching Horoscope</label>
                                                        <input type="text" class="form-control" id="myMatchingHoroscope" value="<?= $myData['vcMatchingHoroscope'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Papa Kendara</label>
                                                        <input type="text" class="form-control" id="partnerPapaKendara" value="<?= $partnerData['vcPapaKendara'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Papa Kendara</label>
                                                        <input type="text" class="form-control" id="myPapaKendara" value="<?= $myData['vcPapaKendara'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Zodiac Sign</label>
                                                        <input type="text" class="form-control" id="partnerZodiacSign" value="<?= $partnerData['vcZodiacSign'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Zodiac Sign</label>
                                                        <input type="text" class="form-control" id="myZodiacSign" value="<?= $myData['vcZodiacSign'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Nekatha</label>
                                                        <input type="text" class="form-control" id="partnerNekatha" value="<?= $partnerData['vcNekatha'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Nekatha</label>
                                                        <input type="text" class="form-control" id="myNekatha" value="<?= $myData['vcNekatha'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Ganaya</label>
                                                        <input type="text" class="form-control" id="partnerGanaya" value="<?= $partnerData['vcGanaya'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Ganaya</label>
                                                        <input type="text" class="form-control" id="myGanaya" value="<?= $myData['vcGanaya'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Moon</label>
                                                        <input type="text" class="form-control" id="partnerMoon" value="<?= $partnerData['intMoon'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Moon</label>
                                                        <input type="text" class="form-control" id="myMoon" value="<?= $myData['intMoon'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Mars</label>
                                                        <input type="text" class="form-control" id="partnerMars" value="<?= $partnerData['intMars'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Mars</label>
                                                        <input type="text" class="form-control" id="myMars" value="<?= $myData['intMars'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Mercury</label>
                                                        <input type="text" class="form-control" id="partnerMercury" value="<?= $partnerData['intMercury'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Mercury</label>
                                                        <input type="text" class="form-control" id="myMercury" value="<?= $myData['intMercury'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Jupiter</label>
                                                        <input type="text" class="form-control" id="partnerJupiter" value="<?= $partnerData['intJupiter'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Jupiter</label>
                                                        <input type="text" class="form-control" id="myJupiter" value="<?= $myData['intJupiter'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Venus</label>
                                                        <input type="text" class="form-control" id="partnerVenus" value="<?= $partnerData['intVenus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Venus</label>
                                                        <input type="text" class="form-control" id="myVenus" value="<?= $myData['intVenus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Saturn</label>
                                                        <input type="text" class="form-control" id="partnerSaturn" value="<?= $partnerData['intSaturn'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Saturn</label>
                                                        <input type="text" class="form-control" id="mySaturn" value="<?= $myData['intSaturn'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Rahu</label>
                                                        <input type="text" class="form-control" id="partnerRahu" value="<?= $partnerData['intRahu'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Rahu</label>
                                                        <input type="text" class="form-control" id="myRahu" value="<?= $myData['intRahu'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 partner-detail">
                                                    <div class="form-group">
                                                        <label for="phone">Kethu</label>
                                                        <input type="text" class="form-control" id="partnerKethu" value="<?= $partnerData['intKethu'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-6 my-detail">
                                                    <div class="form-group">
                                                        <label for="shortName" style="color: #FFFFFF;">Kethu</label>
                                                        <input type="text" class="form-control" id="myKethu" value="<?= $myData['intKethu'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 partner-detail">
                                                    <div class="form-group">
                                                        <button class="btn btn-info btn-block">Match Horoscope</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  <a href="#" uk-totop uk-scroll style="float: right; background-color: yellow; padding: 10px;"></a>< -->


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