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

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-md-4 p-xs-0">
                    <div class="card profile-card" style="height: 520px !important;">
                        <div class="overlay">
                            <div class="card-img-block">
                                <?php
                                if ($memberData['intMemberAccountTypeID'] == 4) {
                                ?>
                                    <p class="premium_badge"><i class="fas fa-crown"></i> PREMIUM</p>
                                <?php
                                }
                                ?>
                                <img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-5.jpg" />
                            </div>
                            <div class="card-body">
                                <h4 class="col-12 mb-1" style="text-align: center;"><?= $memberData['vcNickName'] ?> </h4>
                                <p class="text-secondary mb-1 mt-1"><?= $memberData['vcWorkingAS'] ?></p>
                                <?php
                                if ($memberData['intMemberAccountTypeID'] == 1) { // Not Trust Verified
                                ?>
                                    <p class="badge-label"><span class="badge badge-notTrustVerified">Not Trust Verified</span></p>
                                <?php
                                } else if ($memberData['intMemberAccountTypeID'] == 2) { // Trust Proving
                                ?>
                                    <p class="badge-label"><span class="badge badge-trustProving">Trust Proving</span></p>
                                <?php
                                } else if ($memberData['intMemberAccountTypeID'] == 3) { // Trust Verified
                                ?>
                                    <p class="badge-label"><span class="badge badge-trustVerified">Trust Verified</span></p>
                                <?php
                                } else if ($memberData['intMemberAccountTypeID'] == 4) { // Premium
                                ?>
                                    <p class="badge-label"><span class="badge badge-trustVerified">Trust Verified</span></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div class="wizard" style="bottom: 60px; position: relative;">
                            <nav class="list-group list-group-flush">
                                <a class="list-group-item active" href="#">
                                    <div>
                                        <i class="fas fa-user mr-2"></i>Profile
                                    </div>
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fas fa-user-cog mr-2"></i>Privacy Settings
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fas fa-sliders-h mr-2"></i>Partnet Preference
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fas fa-user-check mr-2"></i>Trust Verify
                                </a>
                                <a class="list-group-item" href="#">
                                    <i class="fas fa-certificate mr-2"></i>Be Premium
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-xs-0">
                    <div class="card mb-3">
                        <div class="card-body">
                            <!-- Photo Slider - Start -->
                            <div class="card">
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

                            <!-- Photo Slider - End -->
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link text-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Basic Information
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Nick Name</label>
                                                        <input type="text" class="form-control" id="shortName" value="<?= $memberData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Providing Information</label>
                                                        <input type="text" class="form-control" id="providingInformation" value="<?= $memberData['vcProvidingInformationType'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Gender</label>
                                                        <input type="text" class="form-control" id="gender" value="<?= $memberData['vcGender'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Date Of Birth</label>
                                                        <input type="text" class="form-control" id="bateOfBirth" value="<?= $memberData['dtDOB'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Marital Status</label>
                                                        <input type="text" class="form-control" id="maritalStatus" value="<?= $memberData['vcMaritalStatus'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">No Of Children(s)</label>
                                                        <input type="text" class="form-control" id="noOfChildren" value="<?= $memberData['vcNoOfChildren'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Marry By</label>
                                                        <input type="text" class="form-control" id="marryBy" value="<?= $memberData['vcMarriageType'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Physical Status
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Height</label>
                                                        <input type="text" class="form-control" id="height" value="<?= $memberData['intHeight'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Weight (KG)</label>
                                                        <input type="text" class="form-control" id="weight" value="<?= $memberData['intWeightFrom'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Body Shape</label>
                                                        <input type="text" class="form-control" id="bodyShape" value="<?= $memberData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Skin Color</label>
                                                        <input type="text" class="form-control" id="skinColor" value="<?= $memberData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Disability</label>
                                                        <input type="text" class="form-control" id="disability" value="<?= $memberData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Blood Group</label>
                                                        <input type="text" class="form-control" id="bloodGroup" value="<?= $memberData['vcBloodGroup'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Health Information</label>
                                                        <input type="text" class="form-control" id="healthInformation" value="<?= $memberData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Residence
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">If Live in Another Country</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Residence Status</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Province</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">District</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">City</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Ownership of the Address</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="website">Address of Sri Lanka</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Native District</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingBackground">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseBackground" aria-expanded="false" aria-controls="collapseBackground">
                                                Background
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseBackground" class="collapse" aria-labelledby="headingBackground" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Mother Tonge</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Ethnicity</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Religion</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Cast</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Sub Cast</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Police Report</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingLifeStyle">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseLifeStyle" aria-expanded="false" aria-controls="collapseLifeStyle">
                                                Life Style
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseLifeStyle" class="collapse" aria-labelledby="headingLifeStyle" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Diet</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Drink</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Smoke</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Languages, Speak</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Dress & Makeup</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Used to Travel</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Call to Parents</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Customs</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Live In</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingWhoAmI">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseWhoAmI" aria-expanded="false" aria-controls="collapseWhoAmI">
                                                Who Am I
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseWhoAmI" class="collapse" aria-labelledby="headingWhoAmI" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="shortName">Openness to Experience</label>
                                                        <input type="text" class="form-control" id="shortName" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Conscientiousness</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Extrovert Personality</label>
                                                        <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Introvert Personality</label>
                                                        <input type="text" class="form-control" id="maritalStatus" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Agreeableness</label>
                                                        <input type="text" class="form-control" id="noOfChildren" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Neuroticism</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Family Bond</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Money</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Religious</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Physically Active</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Politics</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Knowledge</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">Love Affairs</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="website">The Importance of Male & Female Virginity.</label>
                                                        <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                    <h6 class="font-weight-bold">My interests and Hobbies</h6>
                                                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Enrichment Hobbies</h6>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Study / Reading / Writing" id="EnrichmentHobieschk1" name="EnrichmentHobies[]">
                                                                    <label class="form-check-label" for="EnrichmentHobieschk1">
                                                                        Study / Reading / Writing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Museums / Galleries" id="EnrichmentHobieschk2" name="EnrichmentHobies[]">
                                                                    <label class="form-check-label" for="EnrichmentHobieschk2">
                                                                        Museums / Galleries
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Technology" id="EnrichmentHobieschk3" name="EnrichmentHobies[]">
                                                                    <label class="form-check-label" for="EnrichmentHobieschk3">
                                                                        Technology
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Net surfing" id="EnrichmentHobieschk4" name="EnrichmentHobies[]">
                                                                    <label class="form-check-label" for="EnrichmentHobieschk4">
                                                                        Net surfing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Meditation" id="EnrichmentHobieschk5" name="EnrichmentHobies[]">
                                                                    <label class="form-check-label" for="EnrichmentHobieschk5">
                                                                        Meditation
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Watching" id="EnrichmentHobieschk6" name="EnrichmentHobies[]">
                                                                    <label class="form-check-label" for="EnrichmentHobieschk6">
                                                                        Watching
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="The rest are in the writing box (MY Story)" id="EnrichmentHobieschk7" name="EnrichmentHobies[]">
                                                                    <label class="form-check-label" for="EnrichmentHobieschk7">
                                                                        The rest are in the writing box (MY Story)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Sports / Physical activities</h6>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Jogging" id="Sports-Physicalactivitieschk1" name="Sports-Physicalactivities[]">
                                                                    <label class="form-check-label" for="Sports-Physicalactivitieschk1">
                                                                        Jogging
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Exercise" id="Sports-Physicalactivitieschk2" name="Sports-Physicalactivities[]">
                                                                    <label class="form-check-label" for="Sports-Physicalactivitieschk2">
                                                                        Exercise
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Martial Arts" id="Sports-Physicalactivitieschk3" name="Sports-Physicalactivities[]">
                                                                    <label class="form-check-label" for="Sports-Physicalactivitieschk3">
                                                                        Martial Arts
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Yoga" id="Sports-Physicalactivitieschk4" name="Sports-Physicalactivities[]">
                                                                    <label class="form-check-label" for="Sports-Physicalactivitieschk4">
                                                                        Yoga
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Adventure Sports" id="Sports-Physicalactivitieschk5" name="Sports-Physicalactivities[]">
                                                                    <label class="form-check-label" for="Sports-Physicalactivitieschk5">
                                                                        Adventure Sports
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Outdoor sports" id="Sports-Physicalactivitieschk6" name="Sports-Physicalactivities[]">
                                                                    <label class="form-check-label" for="Sports-Physicalactivitieschk6">
                                                                        Outdoor sports
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Technology" id="Sports-Physicalactivitieschk7" name="Sports-Physicalactivities[]">
                                                                    <label class="form-check-label" for="Sports-Physicalactivitieschk7">
                                                                        Technology
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="The rest are in the writing box (MY Story)" id="Sports-Physicalactivitieschk8" name="Sports-Physicalactivities[]">
                                                                    <label class="form-check-label" for="Sports-Physicalactivitieschk8">
                                                                        The rest are in the writing box (MY Story)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Social Activites</h6>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input SocialActivities" type="checkbox" value="Social Service" id="SocialActivitieschk1" name="SocialActivities[]">
                                                                    <label class="form-check-label" for="SocialActivitieschk1">
                                                                        Social Service
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input SocialActivities" type="checkbox" value="Volunteering" id="SocialActivitieschk2" name="SocialActivities[]">
                                                                    <label class="form-check-label" for="SocialActivitieschk2">
                                                                        Volunteering
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input SocialActivities" type="checkbox" value="Politics" id="SocialActivitieschk3" name="SocialActivities[]">
                                                                    <label class="form-check-label" for="SocialActivitieschk3">
                                                                        Politics
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input SocialActivities" type="checkbox" value="Party clubbing" id="SocialActivitieschk4" name="SocialActivities[]">
                                                                    <label class="form-check-label" for="SocialActivitieschk4">
                                                                        Party clubbing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input SocialActivities" type="checkbox" value="Religion" id="SocialActivitieschk5" name="SocialActivities[]">
                                                                    <label class="form-check-label" for="SocialActivitieschk5">
                                                                        Religion
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input SocialActivities" type="checkbox" value="Dining" id="SocialActivitieschk6" name="SocialActivities[]">
                                                                    <label class="form-check-label" for="SocialActivitieschk6">
                                                                        Dining
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input SocialActivities" type="checkbox" value="Spending time with friends" id="SocialActivitieschk7" name="SocialActivities[]">
                                                                    <label class="form-check-label" for="SocialActivitieschk7">
                                                                        Spending time with friends
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input SocialActivities" type="checkbox" value="The rest are in the writing box (MY Story)" id="SocialActivitieschk8" name="SocialActivities[]">
                                                                    <label class="form-check-label" for="SocialActivitieschk8">
                                                                        The rest are in the writing box (MY Story)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Creative Hobbies</h6>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Drawing" id="CreatvieHobieschk1" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk1">
                                                                        Drawing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Dancing" id="CreatvieHobieschk2" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk2">
                                                                        Dancing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Fashion & Style" id="CreatvieHobieschk3" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk3">
                                                                        Fashion & Style
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Acting" id="CreatvieHobieschk4" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk4">
                                                                        Acting
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Handy Craft" id="CreatvieHobieschk5" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk5">
                                                                        Handy Craft
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Sewing" id="CreatvieHobieschk6" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk6">
                                                                        Sewing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Music" id="CreatvieHobieschk7" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk7">
                                                                        Music
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Photography" id="CreatvieHobieschk8" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk8">
                                                                        Photography
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="The rest are in the writing box (MY Story)" id="CreatvieHobieschk9" name="CreatvieHobies[]">
                                                                    <label class="form-check-label" for="CreatvieHobieschk9">
                                                                        The rest are in the writing box (MY Story)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Collecting Hobbies</h6>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CollectingHobbies" type="checkbox" value="Antiques" id="CollectingHobbieschk1" name="CollectingHobbies[]">
                                                                    <label class="form-check-label" for="CollectingHobbieschk1">
                                                                        Antiques
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CollectingHobbies" type="checkbox" value="Books / Magazines" id="CollectingHobbieschk2" name="CollectingHobbies[]">
                                                                    <label class="form-check-label" for="CollectingHobbieschk2">
                                                                        Books / Magazines
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CollectingHobbies" type="checkbox" value="Collecting stamps" id="CollectingHobbieschk3" name="CollectingHobbies[]">
                                                                    <label class="form-check-label" for="CollectingHobbieschk3">
                                                                        Collecting stamps
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CollectingHobbies" type="checkbox" value="Coins" id="CollectingHobbieschk4" name="CollectingHobbies[]">
                                                                    <label class="form-check-label" for="CollectingHobbieschk4">
                                                                        Coins
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input CollectingHobbies" type="checkbox" value=" The rest are in the writing box (MY Story)" id="CollectingHobbieschk5" name="CollectingHobbies[]">
                                                                    <label class="form-check-label" for="CollectingHobbieschk5">
                                                                        The rest are in the writing box (MY Story)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Outdoors Hobbies</h6>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Hiking" id="outdoorHobieschk1" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk1">
                                                                        Hiking
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Fishing" id="outdoorHobieschk2" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk2">
                                                                        Fishing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Camping" id="outdoorHobieschk3" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk3">
                                                                        Camping
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Bird-watching" id="outdoorHobieschk4" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk4">
                                                                        Bird-watching
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Gardening" id="outdoorHobieschk5" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk5">
                                                                        Gardening
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Nature" id="outdoorHobieschk6" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk6">
                                                                        Nature
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Hunting" id="outdoorHobieschk7" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk7">
                                                                        Hunting
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Driving" id="outdoorHobieschk8" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk8">
                                                                        Driving
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Shopping" id="outdoorHobieschk9" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk9">
                                                                        Shopping
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Travel / Sight seeing" id="outdoorHobieschk10" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk10">
                                                                        Travel / Sight seeing
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input outdoorHobies" type="checkbox" value="The rest are in the writing box (MY Story)" id="outdoorHobieschk11" name="outdoorHobies[]">
                                                                    <label class="form-check-label" for="outdoorHobieschk11">
                                                                        The rest are in the writing box (MY Story)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Domestic Hobbies</h6>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Knitting" id="domesticHobbieschk1" name="domesticHobbies[]">
                                                                    <label class="form-check-label" for="domesticHobbieschk1">
                                                                        Knitting
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Pets" id="domesticHobbieschk2" name="domesticHobbies[]">
                                                                    <label class="form-check-label" for="domesticHobbieschk2">
                                                                        Pets
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Cooking" id="domesticHobbieschk3" name="domesticHobbies[]">
                                                                    <label class="form-check-label" for="domesticHobbieschk3">
                                                                        Cooking
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Spending time with family" id="domesticHobbieschk4" name="domesticHobbies[]">
                                                                    <label class="form-check-label" for="domesticHobbieschk4">
                                                                        Spending time with family
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Sports indoor" id="domesticHobbieschk5" name="domesticHobbies[]">
                                                                    <label class="form-check-label" for="domesticHobbieschk5">
                                                                        Sports indoor
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Home interior decoration" id="domesticHobbieschk6" name="domesticHobbies[]">
                                                                    <label class="form-check-label" for="domesticHobbieschk6">
                                                                        Home interior decoration
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input domesticHobbies" type="checkbox" value="The rest are in the writing box (MY Story)" id="domesticHobbieschk7" name="domesticHobbies[]">
                                                                    <label class="form-check-label" for="domesticHobbieschk7">
                                                                        The rest are in the writing box (MY Story)
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingEducation">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseEducation" aria-expanded="false" aria-controls="collapseEducation">
                                                Education
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseEducation" class="collapse" aria-labelledby="headingEducation" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Education Level</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Education Field</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="phone">School / University</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingCareer">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseCareer" aria-expanded="false" aria-controls="collapseCareer">
                                                Career
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseCareer" class="collapse" aria-labelledby="headingCareer" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Working With</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Working As</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Working Country</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Working District</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Working City</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Describe Career</label>
                                                        <textarea class="form-control" rows="3" id="comment" placeholder="N/A" disabled></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingPersonalAssets">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapsePersonalAssets" aria-expanded="false" aria-controls="collapsePersonalAssets">
                                                Personal Assets
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapsePersonalAssets" class="collapse" aria-labelledby="headingPersonalAssets" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Monthly Income</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Monthly Income Routes</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Asset Value</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Asset Routes</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Ownership of Assets</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingFamily">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseFamily" aria-expanded="false" aria-controls="collapseFamily">
                                                Family
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFamily" class="collapse" aria-labelledby="headingFamily" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Family Location</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Family Type</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Family Values</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Family Class</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Family Culture</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Father Status</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Mother Status</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Family Details</label>
                                                        <textarea class="form-control" rows="4" id="comment" placeholder="N/A" disabled></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
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
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingAfterMarriage">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseAfterMarriage" aria-expanded="false" aria-controls="collapseAfterMarriage">
                                                After Marriage
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseAfterMarriage" class="collapse" aria-labelledby="headingAfterMarriage" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Prefer to Live</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Job</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Education</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Children Likes</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Help Family</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Other Needs</label>
                                                        <textarea class="form-control" rows="4" id="comment" placeholder="N/A" disabled></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingHoroscope">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseHoroscope" aria-expanded="false" aria-controls="collapseHoroscope">
                                                Horoscope
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseHoroscope" class="collapse" aria-labelledby="headingHoroscope" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="fullName">Matching Horoscope</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="eMail">Papa Kendara</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Zodiac Sign</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Nekatha</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Ganaya</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Moon</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Mars</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Mercury</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Jupiter</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Venus</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Saturn</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Rahu</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Kethu</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group">
                                                        <label for="phone">Papa Kendara</label>
                                                        <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-xs-0" id="headingTellMe">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseTellMe" aria-expanded="false" aria-controls="collapseTellMe">
                                                Tell More About My Self
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTellMe" class="collapse" aria-labelledby="headingTellMe" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row ">
                                                <div class="col-12">
                                                    <textarea class="form-control" rows="4" id="comment" placeholder="N/A" disabled></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--  -->

                        </div>
                    </div>
                    <!-- <div class="row -sm">
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function viewImage(element) {
            var ele = element;
            modal.style.display = "block";
            modalImg.src = element.src;
        }
        var modal = document.getElementById("myModal");
        // var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        // var captionText = document.getElementById("caption");

        // img.onclick = function() {
        //     alert("dd");
        //     modal.style.display = "block";
        //     modalImg.src = this.src;
        //     // captionText.innerHTML = this.alt;
        // }

        var span = document.getElementsByClassName("closeViewer")[0];

        span.onclick = function() {
            modal.style.display = "none";

        }
    </script>