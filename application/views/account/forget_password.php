	<style>
		body {
			padding-top: 25px !important;
			font-size: 0.8em;
		}

		.forgot {
			padding: 12px;
			border: 1px solid #dfdfdf
		}

		.padding-bottom-3x {
			padding-bottom: 72px !important
		}

		.card-footer {
			background-color: #fff
		}

		.card {
			box-shadow:
				0 0.6px 2.2px rgba(0, 0, 0, 0.025),
				0 1.5px 5.3px rgba(0, 0, 0, 0.036),
				0 2.9px 10px rgba(0, 0, 0, 0.045),
				0 5.1px 17.9px rgba(0, 0, 0, 0.054),
				0 9.6px 33.4px rgba(0, 0, 0, 0.065),
				0 23px 80px rgba(0, 0, 0, 0.09);

			border: none !important;

		}

		input::-webkit-input-placeholder {
			font-size: 14px;
			color: #cfd8dc !important;
		}

		/* .btn {
	        font-size: 13px
	    } */

		.form-control:focus {
			color: #2C3E50 !important;
			/* font-size: 14px; */
			border-color: #b52b4a !important;
			/* background-color: #000;
	        border-color: #76b7e9;*/
			outline: 0;
			box-shadow:
				0 0.7px 2.2px rgba(0, 0, 0, 0.011),
				0 1.8px 5.3px rgba(0, 0, 0, 0.016),
				0 3.4px 10px rgba(0, 0, 0, 0.02),
				0 6px 17.9px rgba(0, 0, 0, 0.024),
				0 11.3px 33.4px rgba(0, 0, 0, 0.029),
				0 27px 80px rgba(0, 0, 0, 0.04);


		}
	</style>

	<div class="container padding-bottom-3x mb-2 mt-5">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12">
				<div class="forgot">
					<h3>Forgot your password?</h2>
						<p>Change your password in three easy steps. This will help you to secure your password!</p>
						<ol class="list-unstyled">
							<li><span class="text-primary text-medium">1. </span>Enter your email address below.</li>
							<li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
							<li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
						</ol>
				</div>
				<form class="card mt-4" id="frmForgetPassword">
					<div class="card-body">
						<div class="form-group">
							<label for="email-for-pass"><strong>Enter your email address</strong></label>
							<input class="form-control" type="email" id="email-for-pass" name="email-for-pass" placeholder="example@email.com" required="">
							<small id="email" class="form-text text-danger font-weight-bold animate__animated animate__flash"></small> <!-- <<<== warning message -->
							<small class="form-text text-muted">Enter the email address you used during the registration on <strong>sathutulanka.lk</strong>. Then we'll email a link to this address.</small>
						</div>
					</div>
					<div class="card-footer">
						<a class="btn btn-danger col-md-5 col-12 mt-2" href="<?= base_url("Welcome") ?>"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp; <small>Back to</small> <strong>Sathutulanka.lk</strong></a>
						<button class="btn btn-success col-md-5 col-12 mt-2 float-right" id="btn-forgetpassword" type="button"><i class="fas fa-key" id="icon-default"></i><i class="fa fa-spinner fa-spin" style="font-size:20px" id="icon-wait2"></i>&nbsp;&nbsp; Get New Password</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="<?= base_url("Resources/js/pageJS/forgetPassword.js") ?>"></script>