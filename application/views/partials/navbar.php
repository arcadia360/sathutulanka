<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('resources/css/common.css')?>">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">Sathutu Lanka</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#">Disabled</a>
                </li>
            </ul>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <?= lang('login'); ?>
            </button>
            <!-- <a class="nav-link" href=""><?= lang('login'); ?></a> -->
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
                <a class="nav-link" href="<?= base_url("Welcome/ChangeLanguage/2/" . $url); ?>">සිංහල</a>
            <?php
            } else if ($_SESSION['language_id'] == 2) { // Current Language - Sinhala
            ?>
                <a class="nav-link" href="<?= base_url("Welcome/ChangeLanguage/1/" . $url); ?>">English</a>
            <?php
            }
            ?>

        </div>
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Welcome to Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="card card-body" style="border: none;">

                            <form id="submitForm" action="/login" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                                <div class="form-group required">
                                    <lSabel for="username">Email / Phone</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" required="" name="username" value="">
                                </div>
                                <div class="form-group required">
                                    <label class="d-flex flex-row align-items-center" for="password">Password</label>
                                    <input type="password" class="form-control" required="" id="password" name="password" value="">
                                </div>
                                <div class="form-group mt-4 mb-4">
                                   
                                        <div class="col-12">
                                        <div class="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember-me" name="remember-me" data-parsley-multiple="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember me</label>
                                        </div>
                                            <a class="ml-auto border-link small-xl" href="/forget-password">Forget Password?</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                                </div>
                            </form>
                            <p class="small-xl pt-3 text-center">
                                <span class="text-muted">Not a member?</span>
                                <a href="/signup">Register Free</a>
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

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>