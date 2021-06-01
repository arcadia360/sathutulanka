<?php
// defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

    <!-- Jquery 3.2  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
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
    </style>

    <!-- <script type="text/javascript">
        $(function() {
            alert("dd");
            // toastr["error"]("Please fill in all fields !");
        });
    </script> -->

<body>

    <nav class="navbar navbar-expand-lg bg-red">

        <a class="navbar-brand" href="#">
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#userNavbarItems" aria-controls="userNavbarItems" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
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
                    <!-- <span class="d-none d-lg-block" style="font-size: 1.4em; color: #FFFFFF;"> | </span> -->
                    <li class="nav-item <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "AllSingles") {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="<?= base_url("Account/AllSingles") ?>">&nbsp;Singles&nbsp;</a>
                    </li>
                    <!-- <span class="d-none d-lg-block" style="font-size: 1.4em; color: #FFFFFF;"> | </span> -->
                    <li class="nav-item <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "Suggesitions") {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="#">&nbsp;Suggesitions&nbsp;</a>
                    </li>
                    <!-- <span class="d-none d-lg-block" style="font-size: 1.4em; color: #FFFFFF;"> | </span> -->
                    <li class="nav-item <?php if ($this->uri->segment(1) == "Account" && $this->uri->segment(2) == "Notifications") {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="#">&nbsp;Notifications&nbsp;</a>
                    </li>
                    <!-- <span class="d-none d-lg-block" style="font-size: 1.4em; color: #FFFFFF;"> | </span> -->
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
            if ($_SESSION['logged_in'] == TRUE) {
            ?>
                <!-- <button type="button" class="btn btn-login" data-toggle="modal" data-target="#exampleModal">LOG OUT </button> -->
                <a href="<?= base_url('Auth/logout') ?>" class="btn btn-login">
                    Logout
                </a>
            <?php
            } else {
            ?>
                <button type="button" class="btn btn-login" data-toggle="modal" data-target="#exampleModal">
                    <?= lang('login'); ?>
                </button>
            <?php
            }
            ?>

            <?php

            $url = "";
            for ($i = 0; $i < count($this->uri->segment_array()); $i++) {
                $url = $url . $this->uri->segment($i + 1) . "/";
            }

            if ($url == "") {
                $url = "Welcome";
            }
            if ($_SESSION['language_id'] == 1) { // Current Language - English
            ?>
                <a class="nav-link btn-lang" href="<?= base_url("Welcome/ChangeLanguage/2/" . $url); ?>">සිංහල</a>
            <?php
            } else if ($_SESSION['language_id'] == 2) { // Current Language - Sinhala
            ?>
                <a class="nav-link btn-lang" href="<?= base_url("Welcome/ChangeLanguage/1/" . $url); ?>">English</a>
            <?php
            }
            ?>

        </div>
    </nav>


    <!-- <div class="angle-div ">dd</div> -->


    <!-- Login Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"><?= lang('welcome_to_login') ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <h4><i class="fas fa-times"></i></h4>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="card card-body" style="border: none;">

                            <form id="submitForm" action="<?= base_url("Auth/login") ?>" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                                <div class="form-group required">
                                    <lSabel for="username"><?= lang('email_phone') ?></lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div>
                                <div class="form-group required">
                                    <label class="d-flex flex-row align-items-center" for="password"><?= lang('password') ?></label>
                                    <input type="password" class="form-control" required="" id="password" name="password" value="">
                                </div>
                                <div class="form-group mt-4 mb-4">

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">
                                                <label class="custom-control-label lbl-remember-me" for="remember-me" style="cursor: pointer !important;"><?= lang('remember_me') ?></label>
                                            </div>
                                            <a class="ml-auto btn-forget-password" href="/forget-password"><?= lang('forget_password') ?></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group pt-1">
                                    <button class="btn btn-block btn-signin" type="submit"><?= lang('sign_in') ?></button>
                                </div>
                            </form>
                            <p class="small-xl text-center">
                                <span class="text-muted"><?= lang('not_a_member') ?></span>
                                <a class="btn-register-free" href="<?= base_url('Registration') ?>">
                                    <h5 class="animate__animated animate__pulse animate__infinite m-auto"><?= lang('register_free') ?></h5>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- </body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html> -->