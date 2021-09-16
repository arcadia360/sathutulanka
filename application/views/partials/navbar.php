<?php
// defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Viraj Start -->
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3">
    <!-- Viraj End -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <!-- Bootstrap 4.0 -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Common CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/common.css') ?>">
    <!-- Navbar CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/navbar.css') ?>">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Swiper CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css'>
    <link rel='stylesheet' href='<?= base_url('resources/css/swiper_style.css') ?>'>
    <!-- UiKit CSS -->
    <!-- <link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=868'> -->
    <!-- Footer CSS -->
    <link rel="stylesheet" href="<?= base_url('resources/css/footer.css') ?>">


    <style>
    
        
        .form-control {
            border-radius: 0 !important;
        } 

        .btn-signin:hover,
        .btn-signin:active {
            color: #FFFFFF;
        }

        #toast-container {
            position: fixed;
            z-index: 999999;
            pointer-events: none;
            right: 10px !important;

        }

        #toast-container>div {
            -moz-box-shadow: 0 0 12px #000000 !important;
            -webkit-box-shadow: 0 0 12px #000000 !important;
            box-shadow: 0 0 12px #000000 !important;
        }

        #toast-container>.toast-error {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=) !important;
            top: 70px !important;
        }

        .navbar-profile-pic .dropdown-toggle::after {
            content: none !important;
        }

        .navbar-profile-pic a {
            font-size: 0.9em !important;
        }

        .mobile-login-button {
            border-radius: 22px;
            color: #FFFFFF;
            left: 125px;
            /* right: 20px; */
            bottom: 10px;
            width: CALC(100% - 250px);
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            /* background-color: #479bef !important; */
            background-color: #00ad5f !important;
            box-shadow: 0 0px 2.2px rgba(0, 0, 0, 0.031), 0 0px 5.3px rgba(0, 0, 0, 0.044), 0 0px 10px rgba(0, 0, 0, 0.055), 0 0px 17.9px rgba(0, 0, 0, 0.066), 0 0px 33.4px rgba(0, 0, 0, 0.079), 0 0px 80px rgba(0, 0, 0, 0.11);
            /* box-shadow:
                0 0.2px 2.2px rgba(0, 0, 0, 0.037),
                0 0.4px 5.3px rgba(0, 0, 0, 0.053),
                0 0.8px 10px rgba(0, 0, 0, 0.065),
                0 1.3px 17.9px rgba(0, 0, 0, 0.077),
                0 2.5px 33.4px rgba(0, 0, 0, 0.093),
                0 6px 80px rgba(0, 0, 0, 0.13); */
            transition: bottom 0.3s;
            border: 4px #FFFFFF solid;

        }

        .mobile-login-button:hover {
            color: #FFFFFF;
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow:
                0 0.7px 1.3px rgba(0, 0, 0, 0.02),
                0 1.7px 3.2px rgba(0, 0, 0, 0.028),
                0 3.1px 6px rgba(0, 0, 0, 0.035),
                0 5.6px 10.7px rgba(0, 0, 0, 0.042),
                0 10.4px 20.1px rgba(0, 0, 0, 0.05),
                0 25px 48px rgba(0, 0, 0, 0.07);
            color: #FFFFFF;

        }

        .custom-control-input:checked~.custom-control-label::before {
            /* color: #fff; */
            border-color: transparent !important;
            /* background-color: #007bff; */
        }

        .custom-control-input:focus~.custom-control-label::before {
            box-shadow:
                0 0.7px 1.3px rgba(0, 0, 0, 0.02),
                0 1.7px 3.2px rgba(0, 0, 0, 0.028),
                0 3.1px 6px rgba(0, 0, 0, 0.035),
                0 5.6px 10.7px rgba(0, 0, 0, 0.042),
                0 10.4px 20.1px rgba(0, 0, 0, 0.05),
                0 25px 48px rgba(0, 0, 0, 0.07);
        }

        .input-group-addon {
            padding: .5rem .75rem;
            margin-bottom: 0;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.25;
            color: #495057;
            text-align: center;
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, .15);
            /* border-radius: .25rem; */
            position: absolute;
            right: 0;
            z-index: 9;
        }

        .input-group-addon a {
            color: #607d8b;
        }
    </style>

    <!-- Jquery 3.2  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- toastr -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- sweet alert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Select2 -->
    <script src="<?= base_url('resources/js/select2.full.min.js') ?>"></script>
    <!-- date-range-picker  -->
    <script src="<?= base_url('resources/js/admin/daterangepicker.js') ?>"></script>
    <!-- Common JS -->
    <script src="<?= base_url("resources/js/common.js") ?>"></script>

    <script>
        var base_url = "<?php echo base_url(); ?>";
    </script>

<body>

    <nav class="navbar fixed-top navbar-expand-lg bg-red" id="navbar">

        <a class="navbar-brand" href="<?= base_url() ?>">
            <?php
            if ($_SESSION['language_id'] == 1) { // Current Language - English
            ?>
                <img class="navbar-logo" src="<?= base_url('resources/images/navbar-logo-en.png') ?>" alt="Sathutu Lanka">
            <?php
            } else if ($_SESSION['language_id'] == 2) { // Current Language - Sinhala
            ?>
                <img class="navbar-logo" src="<?= base_url('resources/images/navbar-logo-si.png') ?>" alt="සතුටු ලංකා">
            <?php
            }
            ?>
        </a>


        <div class="collapse navbar-collapse" id="userNavbarItems">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <?php
                if (isset($_SESSION['member_id']) || !empty($_SESSION['member_id'])) {
                ?>
                    <li class="nav-item <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "MyAccount") {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="<?= base_url("Account/MyAccount") ?>">&nbsp;My&nbsp;Account&nbsp;</a>
                    </li>
                    <li class="nav-item <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "AllSingles") {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="<?= base_url("Account/AllSingles") ?>">&nbsp;Suggetions&nbsp;</a>
                    </li>
                    <li class="nav-item <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "Suggesitions") {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="#">&nbsp;Interests/Requests&nbsp;</a>
                    </li>
                    <li class="nav-item <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "Notifications") {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="#">&nbsp;Notifications&nbsp;</a>
                    </li>
                    <li class="nav-item <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "Discussions") {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="#">&nbsp;Discussions&nbsp;</a>
                    </li>
                <?php
                }
                ?>
            </ul>
            <?php
            if ($this->uri->segment(1) == "" || $this->uri->segment(1) == "Welcome"){
            
            if ($_SESSION['logged_in'] == TRUE) {
            ?>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item dropdown navbar-profile-pic">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="mini-profile-picture">
                                <img src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/" . $this->session->userdata['profile_pic'] ?>" alt="Profile Photo">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">Logout</a>
                        </div>
                    </li>
                </ul>

            <?php
            } else if ($this->uri->segment(1) == "Welcome" && $this->uri->segment(2) == "" || $this->uri->segment(1) == "") {
            ?>
                <button type="button" class="btn btn-login" data-toggle="modal" data-target="#exampleModal">
                    <?= lang('login'); ?>
                </button>
            <?php
            }
        }
            ?>
        </div>



        <!-- Commented on 2021-08-11 (ViRAJ) -->

        <?php
        // if ($this->uri->segment(1) == "Welcome" && $this->uri->segment(2) == "" || $this->uri->segment(1) == "") {
        //     $url = "";
        //     for ($i = 0; $i < count($this->uri->segment_array()); $i++) {
        //         $url = $url . $this->uri->segment($i + 1) . "/";
        //     }
        //     if ($url == "") {
        //         $url = "Welcome";
        //     }
        //     if ($_SESSION['language_id'] == 1 && $_SESSION['logged_in'] == FALSE) { // Current Language - English
        ?>
        <!-- <a class="nav-link btn-lang" href="<?= base_url("Welcome/ChangeLanguage/2/" . $url); ?>">සිංහල</a> -->
        <?php
        // } else if ($_SESSION['language_id'] == 2 && $_SESSION['logged_in'] == FALSE) { // Current Language - Sinhala
        ?>
        <!-- <a class="nav-link btn-lang" href="<?= base_url("Welcome/ChangeLanguage/1/" . $url); ?>">English</a> -->
        <?php
        //     }
        // }
        ?>


        <?php

        if ($this->uri->segment(1) == "" || $this->uri->segment(1) == "Welcome") {
            if ($_SESSION['language_id'] == 1) {
        ?>
                <a class="nav-link btn-lang" onclick="ChangeLanguage(2)">
                    <i class="fa fa-spinner fa-spin" style="font-size:17px" id="icon-wait-lang"></i>
                    සිංහල</a>
            <?php
            } else if ($_SESSION['language_id'] == 2) {
            ?>
                <a class="nav-link btn-lang" onclick="ChangeLanguage(1)">
                    <i class="fa fa-spinner fa-spin" style="font-size:17px" id="icon-wait-lang"></i>
                    English</a>
        <?php
            }
        }
        ?>

        <?php
        if ($this->uri->segment(1) != "Welcome" && $this->uri->segment(1) != "") {
        if ($_SESSION['logged_in'] == TRUE) {
        ?>
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item dropdown navbar-profile-pic">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="mini-profile-picture">
                            <img src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/" . $this->session->userdata['profile_pic'] ?>" alt="Profile Photo">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <!-- <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">Logout</a>
                    </div>
                </li>
            </ul>

        <?php
        } else if ($this->uri->segment(1) == "Welcome" && $this->uri->segment(2) == "" || $this->uri->segment(1) == "") {
        ?>
            <button type="button" class="btn btn-login" data-toggle="modal" data-target="#exampleModal">
                <?= lang('login'); ?>
            </button>
        <?php
        }
    }
        ?>


    </nav>


    <?php
    if ($_SESSION['logged_in'] == TRUE) {
    ?>
        <!-- Mobile Navbar - Start -->
        <nav id="mobile-navbar" class="fixed-bottom p-2 bg-white d-xs-block d-lg-none">
            <div class="row">
                <div class="col">
                    <a class="menu-button <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "MyAccount") {
                                                echo 'active';
                                            } ?> ml-1" href="<?= base_url("Account/MyAccount") ?>"><i class="fas fa-home"></i></a>
                </div>

                <div class="col">
                    <a class="menu-button <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "Suggesitions") {
                                                echo 'active';
                                            } ?>" href="#"><i class="fas fa-magic"></i></a>
                </div>
                <div class="col">
                    <a class="menu-button <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "AllSingles") {
                                                echo 'active';
                                            } ?>" href="<?= base_url("Account/AllSingles") ?>"><i class="fas fa-search"></i></a>
                </div>
                <div class="col">
                    <a class="menu-button <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "Notifications") {
                                                echo 'active';
                                            } ?>" href="#"><i class="fas fa-bell"></i></a>
                </div>
                <div class="col">
                    <a class="menu-button <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "Discussions") {
                                                echo 'active';
                                            } ?>" href="#"><i class="fas fa-comments"></i></a>
                </div>
                <!-- <div class="col-2 navbar-profile-pic">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="mini-profile-picture" style="width: 30px !important; height:30px !important;">
                            <img src="<?= base_url() . "resources/images/member/photos/" . $this->session->userdata['member_code'] . "/" . $this->session->userdata['profile_pic'] ?>" alt="Profile Photo">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">Logout</a>
                    </div>
                </div> -->
            </div>
        </nav>
    <?php } else if ($this->uri->segment(1) == "Welcome" && $this->uri->segment(2) == "" || $this->uri->segment(1) == "") { ?>
        <button class="fixed-bottom d-xs-block d-lg-none btn mobile-login-button" id="mobile-login-button" data-toggle="modal" data-target="#exampleModal"><?= lang('login'); ?></button>
    <?php } ?>
    <!-- Mobile Navbar - End -->


    <?php
    if ($_SESSION['logged_in'] == FALSE) {
        if ($this->uri->segment(1) == "Welcome" && $this->uri->segment(2) == "" || $this->uri->segment(1) == "") {
    ?>

            <!-- Login Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel"><?= lang('welcome_to_login') ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 72px; outline: none;">
                                <h4 style="color: #FFFFFF; font-size: 30px; margin: 0;"><i class="fas fa-times"></i></h4>
                            </button>
                        </div>
                        <div class="modal-body">

                            <small id="invalid-messages" class="form-text text-danger font-weight-bold animate__animated animate__flash" style="position: absolute; top:5px; z-index: 1;"><?= lang('incorrect_email_or_password') ?></small>
                            <small id="deactivated-messages" class="form-text text-danger font-weight-bold animate__animated animate__flash" style="position: absolute; top:5px; z-index: 1;"><?= lang('deactivated_account') ?></small>

                            <small id="varifyyouremail" class="form-text text-danger font-weight-bold animate__animated animate__flash" style="position: absolute; top:5px; z-index: 1;"><?= lang('varify_your_email') ?></small>
                            <small id="otpverifypending" class="form-text text-danger font-weight-bold animate__animated animate__flash" style="position: absolute; top:5px; z-index: 1;"><?= lang('otp_verify_pending') ?></small>


                            <div class="row">
                                <div class="card card-body" style="border: none;">
                                    <?php
                                    $attributes = array('role' => 'form', 'id' => 'loginForm');
                                    echo form_open('', $attributes);
                                    ?>
                                    <div class="form-group required">
                                        <!-- <label for="username"><?= lang('email_phone') ?></label> -->
                                        <label for="username"><?= lang('email') ?></label>
                                        <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                        <small id="invalid-email" class="form-text text-danger font-weight-bold animate__animated animate__flash"><?= lang('invalid_email') ?></small>
                                        <small id="empty-email" class="form-text text-danger font-weight-bold animate__animated animate__flash"><?= lang('empty_email') ?></small>

                                    </div>
                                    <div class="form-group required">
                                        <label class="d-flex flex-row align-items-center" for="password"><?= lang('password') ?></label>
                                        <!-- <input type="password" class="form-control" required="" id="password" name="password" value=""> -->
                                        <div class="input-group" id="show_hide_password">
                                            <input class="form-control" type="password" id="password" name="password">
                                            <div class="input-group-addon" style="align-items: center;">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <small id="empty-password" class="form-text text-danger font-weight-bold animate__animated animate__flash"><?= lang('empty_password') ?></small>
                                    </div>
                                    <div class="form-group mt-4 mb-4">

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me" checked>
                                                    <label class="custom-control-label lbl-remember-me" for="remember-me" style="cursor: pointer !important;"><?= lang('remember_me') ?></label>
                                                </div>
                                                <a class="ml-auto btn-forget-password" href="<?= base_url("createaccount/ForgetPassword") ?>"><?= lang('forget_password') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pt-1">
                                        <!-- <button class="btn btn-block btn-signin" type="submit"><?= lang('sign_in') ?></button> -->
                                        <button class="btn btn-block btn-signin" id="btn-signin" type="button">
                                            <?= lang('sign_in') ?>
                                            <i class="fa fa-spinner fa-spin" style="font-size:24px" id="icon-wait"></i>
                                        </button>
                                    </div>
                                    <?= form_close(); ?>
                                    <p class="small-xl text-center">
                                        <span class="text-muted"><?= lang('not_a_member') ?></span>
                                        <a class="btn-register-free" href="<?= base_url('Registration') ?>">
                                            <h5 class="animate__animated animate__pulse animate__infinite m-auto"><?= lang('register_free') ?></h5>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
        }
    }
    ?>

    <script>
        // var invalid_messages = <?= lang('incorrect_email_or_password') ?>;
        // var deactivated_messages = <?= lang('deactivated_account') ?>;
        // var varify_your_email = <?= lang('varify_your_email') ?>;
        // var otp_verify_pending = <?= lang('OTP_verify_pending') ?>;




        function ChangeLanguage(languageID) {
            $('#icon-wait-lang').show();
            ajaxCall('Welcome/ChangeLanguage/' + languageID, null, function(response) {
                if (response['success'] == true) {
                    location.reload();
                }
            });
        }
    </script>

    <!-- </body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html> -->