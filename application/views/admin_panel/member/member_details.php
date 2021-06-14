<link rel="stylesheet" href="<?= base_url("resources/css/memberProfile.css") ?>">
<link rel="stylesheet" href="<?= base_url("resources/css/common.css") ?>">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper arcadia-main-container ">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $member_data['vcNickName'] ?>'s Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Members</a></li>
                        <li class="breadcrumb-item active">All Members</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="mainTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="main_tab_1-tab" data-toggle="tab" href="#main_tab_1" role="tab" aria-controls="main_tab_1" aria-selected="true">Member Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="main_tab_2-tab" data-toggle="tab" href="#main_tab_2" role="tab" aria-controls="main_tab_2" aria-selected="false">Search Partner For Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="main_tab_3-tab" data-toggle="tab" href="#main_tab_3" role="tab" aria-controls="main_tab_3" aria-selected="false">Allocation Officer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="main_tab_4-tab" data-toggle="tab" href="#main_tab_4" role="tab" aria-controls="main_tab_4" aria-selected="false">Payment Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="main_tab_5-tab" data-toggle="tab" href="#main_tab_5" role="tab" aria-controls="main_tab_5" aria-selected="false">Member Verified Document</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="main_tab_6-tab" data-toggle="tab" href="#main_tab_6" role="tab" aria-controls="main_tab_6" aria-selected="false">Premium Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="main_tab_7-tab" data-toggle="tab" href="#main_tab_7" role="tab" aria-controls="main_tab_7" aria-selected="false">Edit Member Profile</a>
                    </li>
                </ul>

                <br>

                <div class="tab-content" id="myTabContent">

                    <!-- /.Main Member Details -->

                    <div class="tab-pane fade show active" id="main_tab_1" role="tabpanel" aria-labelledby="main_tab_1">

                        <ul class="nav nav-tabs" id="subTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="sub_1_1-tab" data-toggle="tab" href="#sub_1_1" role="tab" aria-controls="sub_1_1" aria-selected="true">Member Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sub_1_2-tab" data-toggle="tab" href="#sub_1_2" role="tab" aria-controls="sub_1_2" aria-selected="false">Member Request Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sub_1_3-tab" data-toggle="tab" href="#sub_1_3" role="tab" aria-controls="sub_1_3" aria-selected="false">Member Interested Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sub_1_4-tab" data-toggle="tab" href="#sub_1_4" role="tab" aria-controls="sub_1_4" aria-selected="false">Member Report Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sub_1_5-tab" data-toggle="tab" href="#sub_1_5" role="tab" aria-controls="sub_1_5" aria-selected="false">History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sub_1_6-tab" data-toggle="tab" href="#sub_1_6" role="tab" aria-controls="sub_1_6" aria-selected="false">Chat History</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sub_1_7-tab" data-toggle="tab" href="#sub_1_7" role="tab" aria-controls="sub_1_7" aria-selected="false">Share & Save</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sub_1_8-tab" data-toggle="tab" href="#sub_1_8" role="tab" aria-controls="sub_1_8" aria-selected="false">View Suggetion</a>
                            </li>
                        </ul>

                        <!-- /.Sub Member Details -->

                        <div class="tab-content mt-3">
                            <div class="tab-pane fade show active" id="sub_1_1">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> -->
                                                <div class="image-margin-circle">
                                                    <img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-5.jpg" class="profile-pic" />
                                                </div>

                                                <div class="mt-3">

                                                    <h4 class="nick-name"><?= $member_data['vcNickName'] ?>
                                                        <!-- <span class="profile-badge"><i class="fas fa-certificate"></i></span> -->
                                                    </h4>
                                                    <p class="text-secondary mb-1"><?= $member_data['vcWorkingAsSubCat_Customised'] ?></p>



                                                    <?php
                                                    if ($member_data['intMemberAccountTypeID'] == 1) { // Not Trust Verified
                                                    ?>
                                                        <p class="badge-label"><span class="badge badge-notTrustVerified">Not Trust Verified</span></p>
                                                    <?php
                                                    } else if ($member_data['intMemberAccountTypeID'] == 2) { // Trust Proving
                                                    ?>
                                                        <p class="badge-label"><span class="badge badge-trustProving">Trust Proving</span></p>
                                                    <?php
                                                    } else if ($member_data['intMemberAccountTypeID'] == 3) { // Trust Verified
                                                    ?>
                                                        <p class="badge-label"><span class="badge badge-trustVerified">Trust Verified</span></p>
                                                    <?php
                                                    } else if ($member_data['intMemberAccountTypeID'] == 4) { // Premium
                                                    ?>
                                                        <p class="badge-label"><span class="badge badge-premium">Premium</span></p>
                                                    <?php
                                                    }
                                                    ?>


                                                    <p class="text-secondary p-0"><strong><?= $member_data['vcMemberCode'] ?></strong></p>

                                                    <form role="form" action="<?php echo base_url('admin/updateMemberDetailsByAdmin') ?>" method="post" id="updateMemberDetailsByAdminForm">
                                                        <div class="row" style="text-align: left !important;">


                                                            <input type="hidden" class="form-control" id="intMemberID" value="<?= $member_data['intMemberID'] ?>" placeholder="N/A">

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="nic">NIC</label>
                                                                    <input type="text" class="form-control" name="nic" id="nic" value="<?= $member_data['vcNic'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="district">District</label>
                                                                <input type="text" class="form-control" id="district" value="<?= $member_data['vcCityName'] ?>" placeholder="N/A">
                                                            </div>
                                                            </div> -->
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="city">City</label>
                                                                    <input type="text" class="form-control"  id="city" value="<?= $member_data['vcCityName'] ?>" placeholder="N/A" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="address">Address</label>
                                                                    <input type="text" class="form-control" id="address" value="<?= $member_data['vcAddOfSriLanka'] ?>" placeholder="N/A" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="premanentAddress">Premanent Address</label>
                                                                    <input type="text" class="form-control" name="premanentAddress" id="premanentAddress" value="<?= $member_data['vcPremanentAddress'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="mobileNo">Mobile No</label>
                                                                    <input type="text" class="form-control" id="mobileNo" value="<?= $member_data['vcMobileNo'] ?>" placeholder="N/A" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="guardianContact">Guardian Contact</label>
                                                                    <input type="text" class="form-control" name="guardianContact" id="guardianContact" value="<?= $member_data['vcGuardianContact'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <button class="btn btn-sm btn-primary float-right" id="btnUpdateMemberDetailsByAdmin"><i class="fas fa-edit"></i> Update Details</button>

                                                    <button class="btn btn-sm btn-info float-right" data-toggle="modal" data-target="#addMemberRemark" id="btnAddMemberRemark"><i class="fas fa-edit"></i> Add Remark</button>

                                                    <?php if ($member_data['intMemberAccountStatusID'] != 8) { ?>
                                                        <button class="btn btn-sm btn-danger float-right" data-toggle="modal" data-target="#addSuspend" id="btnSuspend"><i class="fas fa-trash"></i> Suspend</button>
                                                    <?php } ?>


                                                    <?php if ($member_data['intMemberAccountStatusID'] != 6) { ?>
                                                        <button class="btn btn-sm btn-success float-right" id="btnApproval" onclick=btnApprovalMember(<?= $member_data['intMemberID'] ?>)><i class="fa fa-check"></i> Approval</button>
                                                    <?php } ?>


                                                    <!-- <a class="button btn btn-default" onclick=removeGRN()><i class="fa fa-trash"></i></a> -->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-9">

                                            <div class="row">
                                                <div class="nav flex-column nav-pills col-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active" id="basic-information-tab" data-toggle="pill" href="#basic-information" role="tab" aria-controls="basic-information" aria-selected="true">Basic Information</a>
                                                    <a class="nav-link" id="physical-status-tab" data-toggle="pill" href="#physical-status" role="tab" aria-controls="physical-status" aria-selected="false">Physical Status</a>
                                                    <a class="nav-link" id="residence-tab" data-toggle="pill" href="#residence" role="tab" aria-controls="residence" aria-selected="false">Residence</a>
                                                    <a class="nav-link" id="background-tab" data-toggle="pill" href="#background" role="tab" aria-controls="background" aria-selected="false">Background</a>
                                                    <a class="nav-link" id="life-style-tab" data-toggle="pill" href="#life-style" role="tab" aria-controls="life-style" aria-selected="false">Life Style</a>
                                                    <a class="nav-link" id="who-am-i-tab" data-toggle="pill" href="#who-am-i" role="tab" aria-controls="who-am-i" aria-selected="false">Who am I</a>
                                                    <a class="nav-link" id="education-tab" data-toggle="pill" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
                                                    <a class="nav-link" id="career-tab" data-toggle="pill" href="#career" role="tab" aria-controls="career" aria-selected="false">Career</a>
                                                    <a class="nav-link" id="personal-assets-tab" data-toggle="pill" href="#personal-assets" role="tab" aria-controls="personal-assets" aria-selected="false">Personal Assets</a>
                                                    <a class="nav-link" id="family-tab" data-toggle="pill" href="#family" role="tab" aria-controls="family" aria-selected="false">Family</a>
                                                    <a class="nav-link" id="after-marriage-tab" data-toggle="pill" href="#after-marriage" role="tab" aria-controls="after-marriage" aria-selected="false">After Marriage</a>
                                                    <a class="nav-link" id="horoscope-tab" data-toggle="pill" href="#horoscope" role="tab" aria-controls="horoscope" aria-selected="false">Horoscope</a>
                                                    <a class="nav-link" id="privacy-settings-tab" data-toggle="pill" href="#privacy-settings" role="tab" aria-controls="privacy-settings" aria-selected="false">Privacy Settings</a>
                                                    <a class="nav-link" id="partner-pereferences-tab" data-toggle="pill" href="#partner-pereferences" role="tab" aria-controls="partner-pereferences" aria-selected="false">Partner Pereferences</a>
                                                    <a class="nav-link" id="tell-more-tab" data-toggle="pill" href="#tell-more" role="tab" aria-controls="tell-more" aria-selected="false">Tell more about yourself & partner perfernces</a>
                                                </div>
                                                <div class="tab-content col-9" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active mt-3" id="basic-information" role="tabpanel" aria-labelledby="basic-information-tab">

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Nick Name</label>
                                                                    <input type="text" class="form-control" id="shortName" value="<?= $member_data['vcNickName'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="eMail">Providing Information</label>
                                                                    <input type="text" class="form-control" id="providingInformation" value="<?= $member_data['vcProvidingInformationType'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="phone">Gender</label>
                                                                    <input type="text" class="form-control" id="gender" value="<?= $member_data['vcGender'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="website">Date Of Birth</label>
                                                                    <input type="text" class="form-control" id="bateOfBirth" value="<?= $member_data['dtDOB'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="website">Marital Status</label>
                                                                    <input type="text" class="form-control" id="maritalStatus" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="website">No Of Children(s)</label>
                                                                    <input type="text" class="form-control" id="noOfChildren" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="website">Marry By</label>
                                                                    <input type="text" class="form-control" id="marryBy" value="<?= $member_data['vcMarriageType'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="website">Phone No</label>
                                                                    <input type="text" class="form-control" id="phoneNo" value="<?= $member_data['vcMarriageType'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <footer style="bottom: 0 !important;">
                                                            <button class="btn btn-sm btn-primary float-right"><i class="fas fa-edit"></i> Update Details</button>
                                                        </footer>


                                                    </div>
                                                    <div class="tab-pane fade active mt-3" id="physical-status" role="tabpanel" aria-labelledby="physical-status-tab">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="height">Height</label>
                                                                    <input type="text" class="form-control" id="height" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="disability">Disability</label>
                                                                    <input type="text" class="form-control" id="disability" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="Weight">Weight</label>
                                                                    <input type="text" class="form-control" id="weight" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="bloodGroup">Blood Group</label>
                                                                    <input type="text" class="form-control" id="bloodGroup" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="bodyShape">Body Shape</label>
                                                                    <input type="text" class="form-control" id="bodyShape" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="healthInformation">Health Information</label>
                                                                    <input type="text" class="form-control" id="healthInformation" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="skinColor">Skin Color</label>
                                                                    <input type="text" class="form-control" id="skinColor" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade mt-3" id="residence" role="tabpanel" aria-labelledby="residence-tab">

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="country">Country </label>
                                                                    <input type="text" class="form-control" id="country" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="sriLankaAddress">Sri Lanka Address </label>
                                                                    <input type="text" class="form-control" id="sriLankaAddress" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="residenceStatus">Residence Status</label>
                                                                    <input type="text" class="form-control" id="residenceStatus" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="ownership">Ownership</label>
                                                                    <input type="text" class="form-control" id="ownership" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="provinces">Provinces</label>
                                                                    <input type="text" class="form-control" id="provinces" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Native District</label>
                                                                    <input type="text" class="form-control" id="nativedistrict" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="districs">districs</label>
                                                                    <input type="text" class="form-control" id="districs" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="city">City</label>
                                                                    <input type="text" class="form-control" id="city" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane fade mt-3" id="background" role="tabpanel" aria-labelledby="background-tab">

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="country">Mother Tongue </label>
                                                                    <input type="text" class="form-control" id="motherTongue" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="sriLankaAddress">Caste</label>
                                                                    <input type="text" class="form-control" id="caste" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="residenceStatus">Ethnicity</label>
                                                                    <input type="text" class="form-control" id="ethnicity" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="ownership">Sub Caste</label>
                                                                    <input type="text" class="form-control" id="subCaste" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="provinces">Religion</label>
                                                                    <input type="text" class="form-control" id="religion" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Police Report</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="tab-pane fade mt-3" id="life-style" role="tabpanel" aria-labelledby="life-style-tab">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="country">Diet </label>
                                                                    <input type="text" class="form-control" id="motherTongue" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="sriLankaAddress">Use to Travel</label>
                                                                    <input type="text" class="form-control" id="caste" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="residenceStatus">Drink</label>
                                                                    <input type="text" class="form-control" id="ethnicity" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="ownership">Call to Parent</label>
                                                                    <input type="text" class="form-control" id="subCaste" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="provinces">Smoke</label>
                                                                    <input type="text" class="form-control" id="religion" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Customs</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Language,Speak</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Live In</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Dress & Makeup</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="tab-pane fade mt-3" id="who-am-i" role="tabpanel" aria-labelledby="who-am-i-tab">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="country">Openness to Expericence</label>
                                                                    <input type="text" class="form-control" id="motherTongue" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="sriLankaAddress">Love Affairs</label>
                                                                    <input type="text" class="form-control" id="caste" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="residenceStatus">Conscientiousness</label>
                                                                    <input type="text" class="form-control" id="ethnicity" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="ownership">Male / Female Virginity</label>
                                                                    <input type="text" class="form-control" id="subCaste" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="provinces">Extrovert Personality</label>
                                                                    <input type="text" class="form-control" id="religion" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Introvert Personality</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Agreeableness</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Neuroticism</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Family Bond</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Money</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Religious</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Physically Active</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Knowledge</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Sports / Physical activites</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Social Activites</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Creative Hobbies</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Collecting Hobbies</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Outdoors Hobbies</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="nativedistrict">Domestic Hobbies</label>
                                                                    <input type="text" class="form-control" id="policeReport" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade mt-3" id="education" role="tabpanel" aria-labelledby="education-tab">
                                                         
                                                    </div>


                                                    <div class="tab-pane fade mt-3" id="career" role="tabpanel" aria-labelledby="career-tab">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="workingWithBorder">Working with-border</label>
                                                                    <input type="text" class="form-control" id="workingWithBorder" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="describeCareer">Describe Career</label>
                                                                    <input type="text" class="form-control" id="describeCareer" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="working">Working as</label>
                                                                    <input type="text" class="form-control" id="working" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="workingLocation">Working Location</label>
                                                                    <input type="text" class="form-control" id="workingLocation" value="<?= $member_data['vcMaritalStatus'] ?>" placeholder="N/A">
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


                            <div class="tab-pane fade" id="sub_1_2">
                                <h1>Tab 2.2</h1>
                            </div>

                            <div class="tab-pane fade" id="sub_1_3">
                                <h1>Tab 2.3</h1>
                            </div>

                            <div class="tab-pane fade" id="sub_1_4">
                                <h1>Tab 2.4</h1>
                            </div>

                            <div class="tab-pane fade" id="sub_1_5">

                                <ul class="nav nav-tabs" id="thirdSubTabs" role="tablist" aria-labelledby="sub_1_5_1">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="sub_1_5_1-tab" data-toggle="tab" href="#sub_1_5_1" role="tab" aria-controls="sub_1_5_1" aria-selected="true">User Level Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sub_1_5_2-tab" data-toggle="tab" href="#sub_1_5_2" role="tab" aria-controls="sub_1_5_2" aria-selected="false">Login History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sub_1_5_3-tab" data-toggle="tab" href="#sub_1_5_3" role="tab" aria-controls="sub_1_5_3" aria-selected="false">Rechecked</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sub_1_5_4-tab" data-toggle="tab" href="#sub_1_5_4" role="tab" aria-controls="sub_1_5_4" aria-selected="false">Email History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sub_1_5_5-tab" data-toggle="tab" href="#sub_1_5_5" role="tab" aria-controls="sub_1_5_5" aria-selected="false">Send Letter History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sub_1_5_6-tab" onclick="RemarkHistoryTable()" data-toggle="tab" href="#sub_1_5_6" role="tab" aria-controls="sub_1_5_6" aria-selected="false">Remark History</a>
                                    </li>
                                </ul>

                                <div class="tab-content mt-3">
                                    <div class="tab-pane fade show active mt-3" id="sub_1_5_1">
                                        <h1>sub_1_5_1</h1>
                                    </div>
                                    <div class="tab-pane fade" id="sub_1_5_2">
                                        <h1>sub_1_5_2</h1>
                                    </div>
                                    <div class="tab-pane fade" id="sub_1_5_3">
                                        <h1>sub_1_5_3</h1>
                                    </div>
                                    <div class="tab-pane fade" id="sub_1_5_4">
                                        <h1>sub_1_5_4</h1>
                                    </div>
                                    <div class="tab-pane fade" id="sub_1_5_5">
                                        <h1>sub_1_5_5</h1>
                                    </div>
                                    <div class="tab-pane fade" id="sub_1_5_6">

                                        <table id="tblRemarkHistory" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Remark</th>
                                                    <th>Admin</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>


                                </div>

                                <!-- <div class="tab-pane fade show active mt-3" id="sub_1_5_1">
                                    <h1>sub_1_5_1</h1>
                                </div>
                                <div class="tab-pane fade" id="sub_1_5_2">
                                    <h1>sub_1_5_2</h1>
                                </div>

                                <div class="tab-pane fade" id="sub_1_5_3">
                                    <h1>sub_1_5_3</h1>
                                </div> -->


                            </div>

                            <div class="tab-pane fade" id="sub_1_6">
                                <h1>Tab 2.6</h1>
                            </div>

                            <div class="tab-pane fade" id="sub_1_7">
                                <h1>Tab 2.7</h1>
                            </div>
                        </div>
                    </div>







                    <div class="tab-pane fade" id="main_tab_2" role="tabpanel" aria-labelledby="main_tab_2">

                        <!-- /.main tab 2 Details -->
                        <div class="tab-pane" id="main_tab_2">
                            <div class="row">
                                <div class="col-md-4" style="border-right: 2px solid #171616;">

                                    <div class="box-group" id="accordion">

                                        <form id="search_part_form">
                                            <div class="panel box">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            Normal Search
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Age :</label>
                                                                    <select class="form-control select2" name="age_from" id="" style="width: 100%">
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
                                                                        <option value="32">32</option>
                                                                        <option value="33">33</option>
                                                                        <option value="34">34</option>
                                                                        <option value="35">35</option>
                                                                        <option value="36">36</option>
                                                                        <option value="37">37</option>
                                                                        <option value="38">38</option>
                                                                        <option value="39">39</option>
                                                                        <option value="40">40</option>
                                                                        <option value="41">41</option>
                                                                        <option value="42">42</option>
                                                                        <option value="43">43</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>To:</label>
                                                                    <select class="form-control select2" name="age_to" id="" style="width: 100%">
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
                                                                        <option value="32">32</option>
                                                                        <option value="33">33</option>
                                                                        <option value="34">34</option>
                                                                        <option value="35">35</option>
                                                                        <option value="36">36</option>
                                                                        <option value="37">37</option>
                                                                        <option value="38">38</option>
                                                                        <option value="39">39</option>
                                                                        <option value="40">40</option>
                                                                        <option value="41">41</option>
                                                                        <option value="42">42</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Height (Min):</label>
                                                                    <select class="form-control select2" name="height_min" id="height_min" style="width: 100%">
                                                                        <option value="">Select</option>
                                                                        <option value="3">4&#039;5&quot;</option>
                                                                        <option value="4">4&#039;6&quot;</option>
                                                                        <option value="5">4&#039;7&quot;</option>
                                                                        <option value="6">4&#039;8&quot;</option>
                                                                        <option value="7">4&#039;9&quot;</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Height (Max):</label>
                                                                    <select class="form-control select2" name="height_max" id="height_max" style="width: 100%">
                                                                        <option value="">Select</option>
                                                                        <option value="3">4&#039;5&quot;</option>
                                                                        <option value="4">4&#039;6&quot;</option>
                                                                        <option value="5">4&#039;7&quot;</option>
                                                                        <option value="6">4&#039;8&quot;</option>
                                                                        <option value="7">4&#039;9&quot;</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Marital Status:</label>
                                                                    <select class="form-control select2" multiple="multiple" name="prefer_marital_status[]" id="prefer_marital_status" style="width: 100%">
                                                                        <option value="">Select</option>




                                                                        <option value="1">Never Married</option>

                                                                        <option value="2">Divorced </option>

                                                                        <option value="532">Awaiting Divorce </option>

                                                                        <option value="533">Separated ( not Legally)</option>

                                                                        <option value="534">Widowed</option>

                                                                        <option value="535">Annulled</option>

                                                                        <option value="536">Divorced Only at Engagement</option>

                                                                        <option value="538">Virginity Problem</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Children:</label>
                                                                    <select class="form-control select2" multiple="multiple" name="prefer_children[]" id="prefer_children" style="width: 100%">
                                                                        <option value="">Select</option>
                                                                        <option value="839">No</option>
                                                                        <option value="840">1</option>
                                                                        <option value="841">2</option>
                                                                        <option value="842">3</option>
                                                                        <option value="843">3+</option>
                                                                        <option value="844">Not Staying Together</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Religion:</label>
                                                                    <select class="form-control select2" multiple="multiple" name="pre_religion[]" id="pre_religion" style="width: 100%">


                                                                        <option value="">Select</option>
                                                                        <option value="557">Buddhist</option>
                                                                        <option value="558">Hindu</option>
                                                                        <option value="559">Islam</option>
                                                                        <option value="560">Christians</option>
                                                                        <option value="561">Roman Catholic</option>
                                                                        <option value="563">other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Ethnicity:</label>
                                                                    <select class="form-control select2" multiple="multiple" name="pre_ethnicity[]" id="pre_ethnicity" style="width: 100%">


                                                                        <option value="">Select</option>
                                                                        <option value="366">Sinhalese</option>
                                                                        <option value="367">Sri lankan Tamils</option>
                                                                        <option value="368">Muslims</option>
                                                                        <option value="369">Indian Tamils</option>
                                                                        <option value="370">Sri lankan Malays</option>
                                                                        <option value="371">Burghers</option>
                                                                        <option value="372">Eurasians</option>
                                                                        <option value="373">Mentioned in the writing box (My Story)</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Mother Tongue:</label>
                                                                    <select class="form-control select2" multiple="multiple" name="pre_mother_tongue[]" id="pre_mother_tongue" style="width: 100%">
                                                                        <option value="">Select</option>
                                                                        <option value="362">Sinhala</option>
                                                                        <option value="363">Tamil</option>
                                                                        <option value="364">English</option>
                                                                        <option value="365">other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="post_user_id" id="post_user_id" value="154">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                            Advanced Search
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Live in :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="pre_user_live[]" id="pre_user_live" style="width: 100%">
                                                                        <option value="630">Normal House</option>
                                                                        <option value="631">Semi luxury House</option>
                                                                        <option value="632">Luxury House</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Educational Level:</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="pre_education_level[]" id="" style="width: 100%">
                                                                        <option value="634">Doctorate</option>
                                                                        <option value="635">Masters</option>
                                                                        <option value="636">Honors Degree</option>
                                                                        <option value="637">Bachelor</option>
                                                                        <option value="638">Undergraduate</option>
                                                                        <option value="639">Associate degree</option>
                                                                        <option value="640">Diploma</option>
                                                                        <option value="641">National collage of education</option>
                                                                        <option value="642">Vocational and training education</option>
                                                                        <option value="643">Certificates</option>
                                                                        <option value="644">Up to A/L</option>
                                                                        <option value="645">Up to O/L</option>
                                                                        <option value="646">Less than O/L</option>
                                                                        <option value="647">Mentioned in the writing box (Education)</option>
                                                                        <option value="975">Administration</option>
                                                                        <option value="993">Logistics Services</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Career Level:</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="pre_career_level[]" id="pre_career_level" style="width: 100%">
                                                                        <option value="661">Professionals</option>
                                                                        <option value="662">Politicians /Government Officials/Managers</option>
                                                                        <option value="845">Technicians and Associate Professionals</option>
                                                                        <option value="846">Clerks</option>
                                                                        <option value="847">Service Workers and Sales workers</option>
                                                                        <option value="848">Craft Workers</option>
                                                                        <option value="849">Agricultural, Animal &amp; Fishery Employees</option>



                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-border">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Monthly Income:</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="Select" name="pre_user_monthly_income[]" id="" style="width: 100%">
                                                                        <option value="665">Ask</option>
                                                                        <option value="666">Upto Rs 25000</option>
                                                                        <option value="667">Rs 25000 to Rs 50000</option>
                                                                        <option value="668">Rs 50000 to Rs 75000</option>
                                                                        <option value="669">Rs 75000 to Rs 100000</option>
                                                                        <option value="670">Rs 100000 to Rs 150000</option>
                                                                        <option value="671">Rs 150000 to Rs 200000</option>
                                                                        <option value="672">Rs 200000 to Rs 250000</option>
                                                                        <option value="673">Rs 250000 to Rs 300000</option>
                                                                        <option value="674">Rs 300000 to Rs 400000</option>
                                                                        <option value="675">Rs 400000 Up</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel box">
                                                <div class="box-header with-border">
                                                    <h4 class="box-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                            Horoscope Search
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse">
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Zodiac Sign :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="zodiac_signs[]" id="" style="width: 100%">
                                                                        <option value="887">Aries</option>
                                                                        <option value="888">Taurus</option>
                                                                        <option value="889">Gemini</option>
                                                                        <option value="890">Cancer</option>
                                                                        <option value="891">Leo</option>
                                                                        <option value="892">Virgo</option>
                                                                        <option value="893">Libra</option>
                                                                        <option value="894">Scorpio</option>
                                                                        <option value="895">Sagittarius</option>
                                                                        <option value="896">Capricorn</option>
                                                                        <option value="897">Aquarius</option>
                                                                        <option value="898">Pisces</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Ganaya :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="ganayas[]" id="" style="width: 100%">
                                                                        <option value="899">Dewa</option>
                                                                        <option value="900">Manushya</option>
                                                                        <option value="901">Raksha</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Nekatha :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="nekathas[]" id="" style="width: 100%">
                                                                        <option value="902">Asvida</option>
                                                                        <option value="903">Berana</option>
                                                                        <option value="904">Kethi</option>
                                                                        <option value="905">Rehena</option>
                                                                        <option value="906">Muwasirasa</option>
                                                                        <option value="1009">Ada</option>
                                                                        <option value="1010">Punawasa</option>
                                                                        <option value="1011">Pusha</option>
                                                                        <option value="1012">Aslisa</option>
                                                                        <option value="1013">Maa</option>
                                                                        <option value="1014">Puwapal</option>
                                                                        <option value="1015">Uthurupal</option>
                                                                        <option value="1016">Hatha</option>
                                                                        <option value="1017">Sitha</option>
                                                                        <option value="1018">Saa</option>
                                                                        <option value="1019">Visa</option>
                                                                        <option value="1020">Anura</option>
                                                                        <option value="1021">Deta</option>
                                                                        <option value="1022">Moola</option>
                                                                        <option value="1023">Puwasala</option>
                                                                        <option value="1024">Uthurasala</option>
                                                                        <option value="1025">Suwana</option>
                                                                        <option value="1026">Deneta</option>
                                                                        <option value="1027">Siyawasa</option>
                                                                        <option value="1028">Puwaputupa</option>
                                                                        <option value="1029">Uthuruputupa</option>
                                                                        <option value="1030">Rewathi</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Ravi :</label>
                                                                            <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_ravi[]" id="" style="width: 100%">
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
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Moon :</label>
                                                                            <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_moon[]" id="" style="width: 100%">
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
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Mars :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_mars[]" id="" style="width: 100%">
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
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Mercury :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_mercury[]" id="" style="width: 100%">
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
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Jupiter :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_jupiter[]" id="" style="width: 100%">
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
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Venus :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_venus[]" id="" style="width: 100%">
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
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Saturn :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_saturn[]" id="" style="width: 100%">
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
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Rahu :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_rahu[]" id="" style="width: 100%">
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
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label>Kethu :</label>
                                                                    <select class="form-control select2" multiple="multiple" data-placeholder="--Select--" name="prefe_kethu[]" id="" style="width: 100%">
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
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12" style="text-align: center;">
                                                    <button type="button" class="btn btn-primary" style="margin-top: 25px" onclick="searchPreferences()">Search</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                                <div class="col-md-8">
                                    <div id="user_prefernce_list_div"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="main_tab_3" role="tabpanel" aria-labelledby="main_tab_3">
                        <!-- /.main tab 3 Details -->
                        <table id="tblAllocateOfficer" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Allocate Officer</th>
                                    <th>Designation</th>
                                    <th>Allocate Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="main_tab_4" role="tabpanel" aria-labelledby="main_tab_4">
                        <!-- /.main tab 4 Details -->
                        <table id="manageTableeeee" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Requested Level</th>
                                    <th>Payment Method</th>
                                    <th>Offer</th>
                                    <th>Amount</th>
                                    <th>Bank</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="main_tab_5" role="tabpanel" aria-labelledby="main_tab_5">
                        <!-- /.main tab 5 Details -->
                        <table id="manageTableeeee" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Document</th>
                                    <th>Uploaded Admin</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                    <div class="tab-pane fade" id="main_tab_6" role="tabpanel" aria-labelledby="main_tab_6">
                        test 6
                    </div>
                    <div class="tab-pane fade" id="main_tab_7" role="tabpanel" aria-labelledby="main_tab_7">
                        test 7
                    </div>
                </div>
            </div>
    </section>




</div>

<!-- btnAddMemberRemark Modallllllllllllllll -->
<div class="modal fade" id="addMemberRemark" tabindex="-1" role="dialog" aria-labelledby="addMemberRemark" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMemberRemark">Add Member Remark</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form role="form" action="<?php echo base_url('admin/addMemberRemark') ?>" method="post" id="addMemberRemarkForm">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="intRemarkMemberID" name="intRemarkMemberID" value="<?= $member_data['intMemberID'] ?>" placeholder="N/A">
                    <div class="form-group">
                        <label for="remark">Remark</label>
                        <textarea class="form-control rounded-0" id="member_remark" name="member_remark" placeholder="Enter Rmark" rows="3"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" id="btnSubmitMemberRemark" class="btn btn-success btn-flat"><i class="fas fa-download" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Save Remark</button>
                </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- btnSuspend Modallllllllllllllll -->
<div class="modal fade" id="addSuspend" tabindex="-1" role="dialog" aria-labelledby="addSuspend" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSuspend">Member Suspend</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form role="form" action="<?php echo base_url('admin/suspendMemberAccount') ?>" method="post" id="addSuspendForm">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="intMemberID" name="intMemberID" value="<?= $member_data['intMemberID'] ?>" placeholder="N/A">
                    <div class="form-group">
                        <label>Suspend Reason</label>
                        <select class="form-control" style="width: 100%;" id="suspendReason" name="suspendReason">
                            <option value="0" disabled selected hidden>Select Reason</option>
                            <?php foreach ($suspendReason as $row) { ?>
                                <option value="<?= $row->intMemberSuspendReasons ?>"><?= $row->vcSuspendReason ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" id="Div_OtherReasonSuspend">
                        <label for="Reason">Reason</label>
                        <textarea class="form-control rounded-0" id="otherReasonSuspend" name="otherReasonSuspend" placeholder="Enter Reason" rows="3"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" id="btnSubmitMemberSuspend" class="btn btn-success btn-flat"><i class="fas fa-download" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Submit</button>
                </div>

            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<script src="<?php echo base_url('resources/js/admin/pageJS/memberDetails.js') ?>"></script>