<div class="offset-lg-3 col-lg-6 main-section">
	<h3 class="text-center text-inverse  title"><?= lang('physicalStatus') ?></h3>
	<?php
	if ($this->session->flashdata('flashValidationErr') == 1) {
		$this->session->set_flashdata('flashValidationErr', 0);
		echo validation_errors('<div class="alert alert-danger ErrMsg">', '</div>');
	}
	?>
	<form method="post" action="<?= base_url('Registration/addPhysicalStatus') ?>" id="addPyysicalStatus">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="text-inverse font-weight-bold font-weight-bold" for="validationCustom01"><?= lang('height') ?></label>
					<select class="custom-select d-block form-control" name="height" id="height">
						<option value=""><?= lang('select') ?></option>
						<option value="134">4'5" - 134cm </option>
						<option value="137">4'6" - 137cm </option>
						<option value="139">4'7" - 139cm </option>
						<option value="142">4'8" - 142cm </option>
						<option value="149">4'9" - 149cm </option>
						<option value="150"> 4'10" - 150cm </option>
						<option value="151"> 4'11" - 151cm </option>
						<option value="152">5'0" - 152cm </option>
						<option value="154">5'1" - 154cm </option>
						<option value="157">5'2" - 157cm </option>
						<option value="160">5'3" - 160cm </option>
						<option value="162">5'4" - 162cm </option>
						<option value="165">5'5" - 165cm </option>
						<option value="167">5'6" - 167cm </option>
						<option value="170">5'7" - 170cm </option>
						<option value="172">5'8" - 172cm </option>
						<option value="175">5'9" - 175cm </option>
						<option value="177"> 5'10" - 177cm </option>
						<option value="180"> 5'11" - 180cm </option>
						<option value="182">6'0" - 182cm </option>
						<option value="185">6'1" - 185cm </option>
						<option value="187">6'2" - 187cm </option>
						<option value="190">6'3" - 190cm </option>
						<option value="193">6'4" - 193cm </option>
						<option value="195">6'5" - 195cm </option>
						<option value="198">6'6" - 198cm </option>
						<option value="200">6'7" - 200cm </option>
						<option value="203">6'8" - 203cm </option>
						<option value="205">6'9" - 205cm </option>
						<option value="208"> 6'10" - 208cm </option>
						<option value="210"> 6'11" - 210cm </option>
						<option value="213">7'0" - 213cm </option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="text-inverse font-weight-bold" for="validationCustom02"><?= lang('weight') . " (" . lang('weightScale') . ")" ?></label>
					<select class="custom-select d-block form-control" id="weight" name="weight">
						<option value=""><?= lang('select') ?></option>
						<option value="30-34"> 30 - 34 </option>
						<option value="35-39"> 35 - 39 </option>
						<option value="40-44"> 40 - 44 </option>
						<option value="45-49"> 45 - 49 </option>
						<option value="50-54"> 50 - 54 </option>
						<option value="55-59"> 55 - 59 </option>
						<option value="60-64"> 60 - 64 </option>
						<option value="65-69"> 65 - 69 </option>
						<option value="70-74"> 70 - 74 </option>
						<option value="75-79"> 75 - 79 </option>
						<option value="80-84"> 80 - 84 </option>
						<option value="85-89"> 85 - 89 </option>
						<option value="90-94"> 90 - 94 </option>
						<option value="95-99"> 95 - 99 </option>
						<option value="100-104"> 100 - 104 </option>
						<option value="105-109"> 105 - 109 </option>
						<option value="110-114"> 110 - 114 </option>
						<option value="115-119"> 115 - 119 </option>
						<option value="120-250"> Over 119 </option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<label class="text-inverse font-weight-bold" for="inputEmail4" id="bodyShapeLabel"><?= lang('bodyShape') ?></label> <br>
				<div class="row">
					<div class="col-4 align-items-center">
						<div style="width: 50px;" class="mx-auto">
							<img class="body-size" src="<?= base_url('resources/images/slim.png') ?>" alt="slim image">
							<label class="custom-radio">
								<center>
									<div class="radio icheck-midnightblue img-radio-align">
										<input type="radio" name="bodyShape" value="1" id="bodyShape1" checked>
										<label for="bodyShape1"></label>
									</div>
									<div><span class="custom-control-description"><?= lang('slim') ?></span></div>
								</center>
							</label>
						</div>

					</div>
					<div class="col-4 align-items-center">
						<div style="width: 50px;" class="mx-auto">
							<img class="body-size" src="<?= base_url('resources/images/average.png') ?>" alt="average image">
							<label class="custom-radio">
								<center>
									<div class="radio icheck-midnightblue img-radio-align">
										<input type="radio" name="bodyShape" value="2" id="bodyShape2">
										<label for="bodyShape2"></label>
									</div>
									<div> <span class="custom-control-description"><?= lang('average') ?></span></div>
								</center>
							</label>
						</div>

					</div>
					<div class="col-4 align-items-center">
						<div style="width: 50px;" class="mx-auto">
							<img class="body-size" src="<?= base_url('resources/images/fat.png') ?>" alt="heavy image">
							<label class="custom-radio">
								<center>
									<div class="radio icheck-midnightblue img-radio-align">
										<input type="radio" name="bodyShape" value="3" id="bodyShape3">
										<label for="bodyShape3"></label>
									</div>
									<div> <span class="custom-control-description"><?= lang('heavy') ?></span></div>
								</center>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- skin colour -->
		<div class="row">
			<label class="text-inverse font-weight-bold col-12" for="inputEmail4"><?= lang('skinColour') ?></label> <br>
			<div class="offset-1 col-2">
				<!-- <center>
					<div class="round-symbol d-flex veryFair"></div>
					<input type="radio" name="skinColor" value="1" id="skinColor1" checked>
					<br>
					<label class="custom-control-description" for="skinColor1"><?= lang('veryFair') ?></label>
				</center> -->

				<center>
					<div class="round-symbol skin-content-color mx-auto veryFair"></div>
					<div class="radio icheck-midnightblue skin-content-radio mx-auto">
						<input type="radio" name="skinColor" value="1" id="skinColor1">
						<label for="skinColor1"></label>
					</div>
					<div> <span class="custom-control-description"><?= lang('veryFair') ?></span></div>
				</center>

			</div>
			<div class="col-2">
				<center>
					<div class="round-symbol skin-content-color mx-auto fair"></div>
					<div class="radio icheck-midnightblue skin-content-radio mx-auto">
						<input type="radio" name="skinColor" value="2" id="skinColor2">
						<label for="skinColor2"></label>
					</div>
					<div> <span class="custom-control-description"><?= lang('fair') ?></span></div>
				</center>
			</div>
			<div class="col-2">
				<center>
					<div class="round-symbol skin-content-color lightBrown"></div>
					<div class="radio icheck-midnightblue skin-content-radio mx-auto">
						<input type="radio" name="skinColor" value="3" id="skinColor3">
						<label for="skinColor3"></label>
					</div>
					<div> <span class="custom-control-description"><?= lang('lightBrown') ?></span></div>
				</center>
			</div>
			<div class="col-2">
				<center>
					<div class="round-symbol skin-content-color darkBrown"></div>
					<div class="radio icheck-midnightblue skin-content-radio mx-auto">
						<input type="radio" name="skinColor" value="4" id="skinColor4">
						<label for="skinColor4"></label>
					</div>
					<div> <span class="custom-control-description"><?= lang('darkBrown') ?></span></div>
				</center>
			</div>
			<div class="col-2">
				<center>
					<div class="round-symbol skin-content-color blackBrown"></div>
					<div class="radio icheck-midnightblue skin-content-radio mx-auto">
						<input type="radio" name="skinColor" value="5" id="skinColor5">
						<label for="skinColor5"></label>
					</div>
					<div> <span class="custom-control-description"><?= lang('blackBrown') ?></span></div>

				</center>
			</div>
		</div>
		<!-- end skin colour -->
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('disability') ?></label>
					<select class="custom-select d-block form-control" id="disability" name="disability" required>

					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('bloodGroup') ?></label>
					<select class="custom-select d-block form-control" id="bloodGroup" name="bloodGroup" required>
						<option value=""><?= lang('select') ?></option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB">AB+</option>
						<option value="AB">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="0"><?= lang('noIdea') ?></option>
					</select>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('healthInfo') ?></label>
					<select class="custom-select d-block form-control" id="healthInfo" name="healthInfo" required>
						<option value=""><?= lang('select') ?></option>
						<option value="0"><?= lang('noHealthIssues') ?></option>
						<option value="1">Details in Writing</option>
					</select>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-12">
				<button class="btn btn-info" style="float:right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i> <i class="" id="btnSubmitLoading"></i></button>
			</div>
		</div>
	</form>
</div>
<script>
	var Member = function() {
		this.MemberID = 0;
	}
	var model = new Member();
	model.MemberID = (<?= $this->session->userdata('member_id') ?>);

	var loadDisabilityUrl = '<?php echo base_url(); ?>Registration/loadDisabilityDetails';
	let navigateTo = '<?= base_url('Registration/residence') ?>';
</script>
<script src="<?= base_url('resources/js/registration_form/physicalStatus.js') ?>"></script>