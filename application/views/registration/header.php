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
	<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'> -->
	<!-- Bootstrap 4.0 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Common CSS -->
	<link rel="stylesheet" href="<?= base_url('resources/css/common.css') ?>">
	<!-- DK CSS -->
	<link rel="stylesheet" href="<?= base_url('resources/css/common_dk.css') ?>">
	<!-- Navbar CSS -->
	<link rel="stylesheet" href="<?= base_url('resources/css/navbar.css') ?>">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<!-- Toastr CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<!-- Swiper CSS -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css'>
	<link rel='stylesheet' href='<?= base_url('resources/css/swiper_style.css') ?>'>
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="<?php echo base_url('resources/css/admin/select2.min.css') ?>">

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

		.main-section {
			padding: 15px;
			background: #FFFFFF;
			box-shadow:
				0 2.8px 2.2px rgba(0, 0, 0, 0.02),
				0 6.7px 5.3px rgba(0, 0, 0, 0.028),
				0 12.5px 10px rgba(0, 0, 0, 0.035),
				0 22.3px 17.9px rgba(0, 0, 0, 0.042),
				0 41.8px 33.4px rgba(0, 0, 0, 0.05),
				0 100px 80px rgba(0, 0, 0, 0.07);
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

		#btnSubmit,
		#btnBack,
		#btnSkip {
			padding-left: 30px;
			padding-right: 30px;
			border-radius: 0 !important;
			background-color: #FFFFFF;
			border: 2px solid #b52b4a;
			color: #b52b4a;
			font-weight: 500;
		}

		#btnSubmit:hover,
		#btnBack:hover,
		#btnSkip:hover {
			background-color: #b52b4a;
			color: #FFFFFF;
		}

		.btn.focus,
		.btn:focus {
			box-shadow: none !important;
		}

		input[type='radio']:after {
			width: 15px;
			height: 15px;
			border-radius: 15px;
			top: -2px;
			left: -1px;
			position: relative;
			background-color: #FFFFFF;
			content: '';
			display: inline-block;
			visibility: visible;
			border: 2px solid #455a64;
		}

		input[type='radio']:checked:after {
			width: 15px;
			height: 15px;
			border-radius: 15px;
			top: -2px;
			left: -1px;
			position: relative;
			background-color: #455a64;
			content: '';
			display: inline-block;
			visibility: visible;
			/* padding: 2px !important; */
			/* border: 2px solid red; */
		}

		input[type='checkbox']:after {
			width: 15px;
			height: 15px;
			/* border-radius: 15px; */
			top: -2px;
			left: -1px;
			position: relative;
			background-color: #FFFFFF;
			content: '';
			display: inline-block;
			visibility: visible;
			border: 2px solid #455a64;
		}

		input[type='checkbox']:checked:after {
			width: 15px;
			height: 15px;
			/* border-radius: 15px; */
			top: -2px;
			left: -1px;
			position: relative;
			background-color: #455a64;
			content: '';
			display: inline-block;
			visibility: visible;
			/* padding: 2px !important; */
			/* border: 2px solid red; */
		}

		/* check box customize */

		/* input[type="checkbox"]:checked+label::after {
			content: '';
			position: absolute;
			width: 1.2ex;
			height: 0.4ex;
			background: rgba(0, 0, 0, 0);
			top: 0.9ex;
			left: 0.4ex;
			border: 3px solid blue;
			border-top: none;
			border-right: none;
			-webkit-transform: rotate(-45deg);
			-moz-transform: rotate(-45deg);
			-o-transform: rotate(-45deg);
			-ms-transform: rotate(-45deg);
			transform: rotate(-45deg);
		}

		input[type="checkbox"] {
			line-height: 2.1ex;
		} */

		/* input[type="checkbox"] {
			position: absolute;
			left: -999em;
		} */
		/* 
		input[type="checkbox"]+label {
			position: relative;
			overflow: hidden;
			cursor: pointer;
		}

		input[type="checkbox"]+label::before {
			content: "";
			display: inline-block;
			vertical-align: -25%;
			height: 2ex;
			width: 2ex;
			background-color: white;
			border: 1px solid rgb(166, 166, 166);
			border-radius: 4px;
			box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.25);
			margin-right: 0.5em;
		} */



		@media only screen and (max-width: 768px) {
			.main-section {
				min-height: CALC(100vh - 66px);
				background: none;
			}
		}
	</style>

	<script>
		var base_url = "<?php echo base_url(); ?>";
	</script>

	<!-- jquery 3.2.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<!-- toastr -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<!-- sweetalert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- dataTables -->
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<!-- sweet alert 2 -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('resources/js/bootstrap.bundle.min.js') ?>"></script>
	<!-- Select2 -->
	<script src="<?php echo base_url('resources/js/select2.full.min.js') ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('resources/js/admin/adminlte.min.js') ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<!-- <script src="<?php echo base_url('resources/js/admin/demo.js') ?>"></script> -->
	<!-- InputMask  -->
	<script src="<?php echo base_url('resources/js/admin/moment.min.js') ?>"></script>
	<!-- date-range-picker  -->
	<script src="<?php echo base_url('resources/js/admin/daterangepicker.js') ?>"></script>
	<!-- Tempusdominus Bootstrap 4  -->
	<script src="<?php echo base_url('resources/js/admin/tempusdominus-bootstrap-4.min.js') ?>"></script>
	<!-- Common  -->
	<script src="<?php echo base_url('resources/js/common.js') ?>"></script>


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
			<?php
			if ($_SESSION['logged_in'] == TRUE) {
			?>
				<a href="<?= base_url('Auth/logout') ?>" class="btn btn-login">
					Logout
				</a>
			<?php
			}
			?>
			<!-- <a class="nav-link btn-lang" href="">සිංහල</a> -->

		</div>
	</nav>