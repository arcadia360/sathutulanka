<style>
    body {
        /* margin-top:20px; */
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;

    }

    input[type="text"]:disabled {
        background: #ffffff;
    }

    label {
        font-family: 'Raleway', sans-serif !important;
        font-weight: 600;
        font-size: 0.9em;
    }

    .btn-link {
        text-decoration: none !important;
    }

    .text-primary {
        color: #b52b4a !important;
        font-size: 0.9em !important;
        font-weight: 600;
    }





    .list-group-item.active:not(.disabled) {
        border-color: #e7e7e7;
        background: #fff;
        color: #b52b4a;
        cursor: default;
        pointer-events: none;
    }


    .list-group-item {
        padding-top: 16px;
        padding-bottom: 16px;
        -webkit-transition: all .3s;
        transition: all .3s;
        border: 1px solid #e7e7e7 !important;
        border-radius: 0 !important;
        color: #404040;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .08em;
        text-transform: uppercase;
        text-decoration: none;
    }

    .list-group-item.active:not(.disabled)::before {
        background-color: #b52b4a;
    }

    .list-group-item::before {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background-color: transparent;
        content: '';
    }

    .form-control {
        border: 1px solid #cfd1d8;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        font-size: .825rem;
        background: #ffffff;
        color: #2e323c;
    }

    .profile-pic {
        object-fit: cover;
        width: 200px;
        height: 200px;

        /* margin: 0 auto;
        position: relative;
        overflow: hidden; */
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border: 5px solid #FFFFFF;
    }

    /* .image-margin-circle {
        border: 4px solid #b52b4a;
        border-radius: 50%;
    } */

    .profile-badge {
        z-index: 1;
        color: #2196f3;
        /* font-size: 1.4em; */
        /* position: absolute; */
        left: 5px;
    }

    .badge-premium {
        color: #212529;
        background-color: #ffca28 !important;
        text-transform: uppercase;
    }

    .badge-trustVerified {
        color: #e8f5e9;
        background-color: #2e7d32 !important;
        text-transform: uppercase;
    }

    .badge-trustProving {
        color: #FFFFFF;
        background-color: #9ccc65 !important;
        text-transform: uppercase;
    }

    .badge-notTrustVerified {
        color: #FFFFFF;
        background-color: #607d8b !important;
        text-transform: uppercase;
    }

    .profile-heart {
        z-index: 1;
        color: #b0bec5;
        font-size: 1.4em;
        position: absolute;
        right: 30px;
        transition: 0.6s;
    }

    .profile-heart:hover {
        color: #e91e63 !important;
    }

    .like {
        color: #e91e63 !important;
    }

</style>
<div class="container">
    <div class="main-body">

        <!-- Breadcrumb -->
        <!-- <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav> -->
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <!-- <div class="row">
                                <a href="" class="profile-heart like"><i class="fas fa-heart"></i></a>
                            </div> -->
                            <!-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150"> -->
                            <div class="image-margin-circle">
                                <img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-5.jpg" class="profile-pic" />
                                <!-- <img src="https://wallpapercave.com/wp/wp5047302.jpg" class="profile-pic" /> -->
                            </div>
                            <div class="mt-3">
                                <h4>Supun Ariyarathna <span class="profile-badge"><i class="fas fa-certificate"></i></span></h4>
                                <p class="text-secondary mb-1">Software Engineer</p>
                                <p class="badge-label"><span class="badge badge-premium">PREMIUM</span></p>
                                <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                <!-- <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="wizard">
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
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Basic Information
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row gutters">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="fullName">Short Name</label>
                                                    <input type="text" class="form-control" id="shortName" value="<?= $userData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="eMail">Providing Information</label>
                                                    <input type="text" class="form-control" id="providingInformation" value="<?= $userData['vcProvidingInformationType'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phone">Gender</label>
                                                    <input type="text" class="form-control" id="gender" value="<?= $userData['vcGender'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Date Of Birth</label>
                                                    <input type="text" class="form-control" id="bateOfBirth" value="<?= $userData['dtDOB'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Marital Status</label>
                                                    <input type="text" class="form-control" id="maritalStatus" value="<?= $userData['vcMaritalStatus'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">No Of Children(s)</label>
                                                    <input type="text" class="form-control" id="noOfChildren" value="<?= $userData['vcNoOfChildren'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Marry By</label>
                                                    <input type="text" class="form-control" id="marryBy" value="<?= $userData['vcMarriageType'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="row gutters">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="fullName">Height</label>
                                                    <input type="text" class="form-control" id="height" value="<?= $userData['intHeight'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="eMail">Weight (KG)</label>
                                                    <input type="text" class="form-control" id="weight" value="<?= $userData['intWeightFrom'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phone">Body Shape</label>
                                                    <input type="text" class="form-control" id="bodyShape" value="<?= $userData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Skin Color</label>
                                                    <input type="text" class="form-control" id="skinColor" value="<?= $userData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Disability</label>
                                                    <input type="text" class="form-control" id="disability" value="<?= $userData['vcNickName'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Blood Group</label>
                                                    <input type="text" class="form-control" id="bloodGroup" value="<?= $userData['vcBloodGroup'] ?>" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Health Information</label>
                                                    <input type="text" class="form-control" id="healthInformation" value="<?= $userData['vcNickName'] ?>" placeholder="N/A" disabled>
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
                                        <div class="row gutters">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="fullName">Height</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="eMail">Weight (KG)</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phone">Body Shape</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Skin Color</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Disability</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Blood Group</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Health Information</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
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
                                        <div class="row gutters">
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
                                                    <label for="website">Su Cast</label>
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
                                <div class="card-header" id="headingLifeStyle">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseLifeStyle" aria-expanded="false" aria-controls="collapseLifeStyle">
                                            Life Style
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseLifeStyle" class="collapse" aria-labelledby="headingLifeStyle" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row gutters">
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
                                                    <label for="website">Used to travel</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Call to parents</label>
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
                                <div class="card-header" id="headingLifeStyle">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-primary" data-toggle="collapse" data-target="#collapseLifeStyle" aria-expanded="false" aria-controls="collapseLifeStyle">
                                            Who Am I
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseLifeStyle" class="collapse" aria-labelledby="headingLifeStyle" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- <div class="row gutters">
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
                                                    <label for="website">Used to travel</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="website">Call to parents</label>
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
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--  -->

                    </div>
                </div>
                <!-- <div class="row gutters-sm">
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