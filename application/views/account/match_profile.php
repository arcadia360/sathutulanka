<link rel='stylesheet' href='<?= base_url('resources/css/memberProfile.css') ?>'>

<style>
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
</style>

<script>
    $(function() {
        $('#btnAllDetails').click(function() {

            debugger;

            if ($("#btnAllDetails").hasClass("show")) { // If Already Show
                $("#btnAllDetails").addClass('hide');
                $("#btnAllDetails").removeClass('show');

                ShowAllDetails(false);

                // alert("Hide");
            } else { // If Already Hide
                $("#btnAllDetails").addClass('show');
                $("#btnAllDetails").removeClass('hide');

                ShowAllDetails(true);

                // alert("Show");
            }

            // var classList = $("#btnAllDetails").attr("class");

            // var value = $("#btnAllDetails").hasClass("hide");

            // var value = $("#btnAllDetails").hasClass("show");


            // var val = $("#btnAllDetails").find(".collapse");

            // .addClass('hidden');

            // alert(window.getComputedStyle(this, ':before').content);

            // if ($(this).val() == "Show") {
            //     $(this).val("pause");
            //     play_int();
            // } else {
            //     $(this).val("play");
            //     play_pause();
            // }
        });
    });



    function ShowAllDetails(value) {
        debugger;
        var val = $(".card").find(".collapse");

        // val[1].className += "show";

        for (let index = 1; index < val.length; index++) {
            if (value) { // Show All
                val[index].className += " show";
            } else { // Hide All
                val[index].classList.remove("show");
            }
        }
    }



    // $(".blah").eq(9).html('blah');
</script>

<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4">
                <div class="card profile-card">
                    <div class="row">
                        <a href="" class="profile-heart like"><i class="fas fa-heart"></i></a>
                    </div>
                    <div class="overlay">
                        <div class="card-img-block">
                            <p class="premium_badge"><i class="fas fa-crown"></i> PREMIUM</p>
                            <p class="photo-count"><i class="fas fa-camera"></i> 5</p>
                            <img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-5.jpg" />
                        </div>
                        <div class="card-body">
                            <h4 class="col-12" style="text-align: center;">Supun Ariyarathna</h4>
                            <p class="text-secondary mb-1">Software Engineer</p>
                            <p class="badge-label"><span class="badge badge-trustVerified">Trust Verified</span></p>

                            <button class="btn btn-outline-primary col-12" style="margin-top: 20px;">Expressing Interest</button>
                            <button class="btn btn-outline-primary col-12" onclick="clickk();">Request</button>
                            <button class="btn btn-outline-primary col-12">Block / Report</button>

                        </div>
                    </div>


                </div>


            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div id="accordion">
                            <div class="card">
                                <!-- Photo Slider - Start -->
                                <main class="main">
                                    <div class="photo-container">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="card-image">
                                                        <!-- <img id="myImg" onclick="viewImage(this)" src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/1.jpg" ?>" alt="Image Slider"> -->
                                                        <img class="myImg" onclick="viewImage(this)" src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/1.jpg" ?>" alt="Image Slider">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card-image">
                                                        <img class="myImg" onclick="viewImage(this)" src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/2.jpg" ?>" alt="Image Slider">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card-image">
                                                        <img class="myImg" onclick="viewImage(this)" src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/3.jpg" ?>" alt="Image Slider">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card-image">
                                                        <img class="myImg" onclick="viewImage(this)" src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/4.jpg" ?>" alt="Image Slider">
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="card-image">
                                                        <img class="myImg" onclick="viewImage(this)" src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/5.jpeg" ?>" alt="Image Slider">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination"></div>
                                            <!-- Add Scrollbar -->
                                            <div class="swiper-button-next">
                                                <i class="fas fa-chevron-circle-right arrow-icon"></i>
                                            </div>
                                            <div class="swiper-button-prev">
                                                <i class="fas fa-chevron-circle-left arrow-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </main>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                    <span class="closeViewer">&times;</span>
                                    <img class="modal-content" id="img01">
                                    <!-- <div id="caption"></div> -->
                                </div>
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-6">
                                        <label class="float-right" style="font-size: 0.8em;">All Details :
                                            <button type="button" id="btnAllDetails" class="btn btn-sm btn-toggle hide" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                <div class="handle"></div>
                                            </button>
                                        </label>
                                    </div>
                                    <div class="col-6">
                                        <label class="float-right" style="font-size: 0.8em; margin-right: 20px;">My Details :
                                            <button type="button" class="btn btn-sm btn-toggle active" data-toggle="button" aria-pressed="false" autocomplete="off">
                                                <div class="handle"></div>
                                            </button>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link text-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Basic Information
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 style="background-color: #00838f; padding: 10px; color: #FFFFFF; border-radius: 20px; text-align: center;"><i class="fas fa-male"></i> His Details</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5 style="background-color: #f06292; padding: 10px; color: #FFFFFF; border-radius: 20px; text-align: center;"><i class="fas fa-female"></i> My Details</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="fullName">Short Name</label>
                                                    <input type="text" class="form-control" id="shortName" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="fullName">Short Name</label>
                                                    <input type="text" class="form-control" id="shortName" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Gender</label>
                                                    <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Gender</label>
                                                    <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Age</label>
                                                    <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Age</label>
                                                    <input type="text" class="form-control" id="gender" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Marital Status</label>
                                                    <input type="text" class="form-control" id="maritalStatus" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Marital Status</label>
                                                    <input type="text" class="form-control" id="maritalStatus" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">No Of Children(s)</label>
                                                    <input type="text" class="form-control" id="noOfChildren" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">No Of Children(s)</label>
                                                    <input type="text" class="form-control" id="noOfChildren" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Marry By</label>
                                                    <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Marry By</label>
                                                    <input type="text" class="form-control" id="marryBy" value="" placeholder="N/A" disabled>
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
                                        <div class="row gutters">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="fullName">Height</label>
                                                    <input type="text" class="form-control" id="height" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="eMail">Weight (KG)</label>
                                                    <input type="text" class="form-control" id="weight" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Body Shape</label>
                                                    <input type="text" class="form-control" id="bodyShape" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Skin Color</label>
                                                    <input type="text" class="form-control" id="skinColor" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Disability</label>
                                                    <input type="text" class="form-control" id="disability" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Blood Group</label>
                                                    <input type="text" class="form-control" id="bloodGroup" value="" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Health Information</label>
                                                    <input type="text" class="form-control" id="healthInformation" value="" placeholder="N/A" disabled>
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
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="fullName">Height</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="eMail">Weight (KG)</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Body Shape</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Skin Color</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Disability</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Blood Group</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
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
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="fullName">Mother Tonge</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="eMail">Ethnicity</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Religion</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Cast</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Su Cast</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
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
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="fullName">Diet</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="eMail">Drink</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Smoke</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Languages, Speak</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Dress & Makeup</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Used to travel</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Call to parents</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Customs</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
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
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="fullName">Diet</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="eMail">Drink</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="phone">Smoke</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Languages, Speak</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Dress & Makeup</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Used to travel</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Call to parents</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="website">Customs</label>
                                                    <input type="text" class="form-control" id="shortName" placeholder="N/A" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
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

<script>
    function viewImage(element) {
        var ele = element;
        modal.style.display = "block";
        modalImg.src = element.src;
    }
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    var span = document.getElementsByClassName("closeViewer")[0];

    span.onclick = function() {
        modal.style.display = "none";

    }
</script>