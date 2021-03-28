<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Sathutu Lanka | User Registration</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<!-- Bootstrap 4.0 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Common CSS -->
	<link rel="stylesheet" href="<?= base_url('resources/css/common.css') ?>">
	<!-- Navbar CSS -->
	<link rel="stylesheet" href="<?= base_url('resources/css/navbar.css') ?>">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


	<link rel="stylesheet" href="<?php echo base_url('resources/css/registration_form/style.css') ?>">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> -->
	<!-- DK CSS -->
	<link rel="stylesheet" href="<?= base_url('resources/css/common_dk.css') ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	<style>
		.main-section {
			padding: 15px;
			background: #FFFFFF;
		}

		.custom-file-control::after {
			content: "Choose file...";
		}

		.custom-file-control::before {
			content: "Browse";
		}

		.title {
			background-color: #37474f;
			padding-top: 20px;
			padding-bottom: 20px;
			color: #FFFFFF;
			margin-bottom: 20px;
		}
	</style>

</head>

<body>

	<nav class="navbar navbar-expand-lg bg-red">

		<a class="navbar-brand" href="#">
			<img class="img-fluid navbar-logo" src="<?= base_url('resources/images/navbar-logo-en.png') ?>" alt="Sathutu Lanka">
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