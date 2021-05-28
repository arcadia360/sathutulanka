<!--  -->
<div class="btnbg" style="padding-top: 10px;">
	<!-- Container Area Start -->
	<div class="container" style="z-index: 1;">
		<div class="row">
			<div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
				<h3 class="text-center text-inverse font-weight-bold title"><?= lang('physicalStatus') ?></h3>
				<hr>

				<?php
				if ($this->session->flashdata('flashValidationErr') == 1) {
					$this->session->set_flashdata('flashValidationErr', 0);
					echo validation_errors('<div class="alert alert-danger ErrMsg">', '</div>');
				}
				// echo form_open('Registration/addPhysicalStatus'); 
				?>
				<form method="post" action="<?= base_url('Registration/addPhysicalStatus') ?>" id="addPyysicalStatus">
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-12">
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
						<div class="col-lg-12 col-12">
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
						<div class="col-lg-12 col-12">
							<div class="form-group">
								<label class="text-inverse font-weight-bold" for="inputEmail4" id="bodyShapeLabel"><?= lang('bodyShape') ?></label> <br>
								<div class="row">
									<div class="col-4 d-flex align-items-center">
										<img class="img-thumbnail margin-0-auto body-size" src="<?= base_url('resources/images/slim.png') ?>" alt="slim image">
										<label class="custom-control custom-radio">
											<input id="bodyShape" name="bodyShape" type="radio" class="custom-control-input" value="1">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description"><?= lang('slim') ?></span>
										</label>
									</div>
									<div class="col-4 d-flex align-items-center">
										<img class="img-thumbnail margin-0-auto body-size" src="<?= base_url('resources/images/average.png') ?>" alt="average image">
										<label class="custom-control custom-radio">
											<input id="bodyShape2" name="bodyShape" type="radio" class="custom-control-input" value="2">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description"><?= lang('average') ?></span>
										</label>
									</div>
									<div class="col-4 d-flex align-items-center">
										<img class="img-thumbnail margin-0-auto body-size" src="<?= base_url('resources/images/fat.png') ?>" alt="heavy image">
										<label class="custom-control custom-radio">
											<input id="bodyShape3" name="bodyShape" type="radio" class="custom-control-input" value="3">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description"><?= lang('heavy') ?></span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<!-- skin colour -->
						<div class="col-lg-12 col-12">
							<div class="form-group">
								<label class="text-inverse font-weight-bold" for="inputEmail4"><?= lang('skinColour') ?></label> <br>
								<div class="row">
									<div class="col-1"></div>
									<div class="col-2">
										<div class="text-al-center">
											<div class="round-symbol rounded-circle margin-0-auto veryFair"></div>
										</div>
										<div class="text-al-center">
											<label class="margin-0-auto" for="veryFair"><?= lang('veryFair') ?></label>
										</div>
										<div class="text-al-center">
											<input type="radio" name="skinColor" value="1" id="skinColor1" required>
										</div>
									</div>
									<div class="col-2">
										<div class="text-al-center">
											<div class="round-symbol rounded-circle margin-0-auto fair"></div>
										</div>
										<div class="text-al-center">
											<label class="margin-0-auto" for=""><?= lang('fair') ?></label>
										</div>
										<div class="text-al-center">
											<input type="radio" name="skinColor" value="2" id="skinColor2">
										</div>
									</div>
									<div class="col-2">
										<div class="text-al-center">
											<div class="round-symbol rounded-circle margin-0-auto lightBrown"></div>
										</div>
										<div class="text-al-center">
											<label class="margin-0-auto" for=""><?= lang('lightBrown') ?></label>
										</div>
										<div class="text-al-center">
											<input type="radio" name="skinColor" value="3" id="skinColor3">
										</div>
									</div>
									<div class="col-2">
										<div class="text-al-center">
											<div class="round-symbol rounded-circle margin-0-auto darkBrown"></div>
										</div>
										<div class="text-al-center">
											<label class="margin-0-auto" for=""><?= lang('darkBrown') ?></label>
										</div>
										<div class="text-al-center">
											<input type="radio" name="skinColor" value="4" id="skinColor4">
										</div>
									</div>
									<div class="col-2">
										<div class="text-al-center">
											<div class="round-symbol rounded-circle margin-0-auto blackBrown"></div>
										</div>
										<div class="text-al-center">
											<label class="margin-0-auto" for=""><?= lang('blackBrown') ?></label>
										</div>
										<div class="text-al-center">
											<input type="radio" name="skinColor" value="5" id="skinColor5">
										</div>
									</div>
									<div class="col-1"></div>
									<!-- end skin colour -->
									<div class="col-lg-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('disability') ?></label>
											<select class="custom-select d-block form-control" id="disability" name="disability" required>
												<option value=""><?= lang('select') ?></option>
												<option value="0"><?= lang('noDisability') ?></option>
												<option value="1"><?= lang('inDetails') ?></option>

											</select>
										</div>
									</div>
									<div class="col-lg-12 col-sm-12 col-12">
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

									<div class="col-lg-12 col-sm-12 col-12">
										<div class="form-group">
											<label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('healthInfo') ?></label>
											<select class="custom-select d-block form-control" id="healthInfo" name="healthInfo" required>
												<option value=""><?= lang('select') ?></option>
												<option value="0"><?= lang('noHealthIssues') ?></option>
												<option value="1"><?= lang('inDetails') ?></option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-12 col-sm-12 col-12 text-center">
							<button class="btn btn-info" type="button" id="btnSubmit">CONTINUE</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


</div>

<script>
	var Member = function() {
			this.MemberID = 0;
		}
		var model = new Member();
		model.MemberID = (<?= $this->session->userdata('member_id') ?>);

		ajaxCall('registration/getMemberData', model, function(response) {
			// $("#Supplier").val(response.intHeight);
			$("#height").val(response.intHeight);
			$("#weight").val(response.Weight_Customised);
			var BodyType = (response.intBodyTypeID);
			if (BodyType == 1) {
				document.getElementById("bodyShape").checked = true;
			}else if (BodyType == 2) {
				document.getElementById("bodyShape2").checked = true;
			}
			else{
				document.getElementById("bodyShape3").checked = true;
			}

			var skinColorID = (response.intSkinColourID);

			if (skinColorID == 1) {
				document.getElementById("skinColor1").checked = true;
			}else if (skinColorID == 2) {
				document.getElementById("skinColor2").checked = true;
			}else if (skinColorID == 3) {
				document.getElementById("skinColor3").checked = true;
			}else if (skinColorID == 4) {
				document.getElementById("skinColor4").checked = true;
			}else if (skinColorID == 5) {
				document.getElementById("skinColor5").checked = true;
			}


			$("#disability").val(response.isDisability);
			$("#bloodGroup").val(response.vcBloodGroup);
			$("#healthInfo").val(response.isHealthInfo);


		});

	// var MemberID = (<?= $this->session->userdata('member_id') ?>);

	// $.ajax({
	// 	async: false,
	// 	url: 'getMemberData/' + MemberID,
	// 	type: 'post',
	// 	dataType: 'json',
	// 	success: function(response) {
	// 		$("#height").val(response.intHeight);
	// 		$("#weight").val(response.Weight_Customised);
	// 		var BodyType = (response.intBodyTypeID);
	// 		if (BodyType == 1) {
	// 			document.getElementById("bodyShape").checked = true;
	// 		}else if (BodyType == 2) {
	// 			document.getElementById("bodyShape2").checked = true;
	// 		}
	// 		else{
	// 			document.getElementById("bodyShape3").checked = true;
	// 		}

	// 		var skinColorID = (response.intSkinColourID);

	// 		if (skinColorID == 1) {
	// 			document.getElementById("skinColor1").checked = true;
	// 		}else if (skinColorID == 2) {
	// 			document.getElementById("skinColor2").checked = true;
	// 		}else if (skinColorID == 3) {
	// 			document.getElementById("skinColor3").checked = true;
	// 		}else if (skinColorID == 4) {
	// 			document.getElementById("skinColor4").checked = true;
	// 		}else if (skinColorID == 5) {
	// 			document.getElementById("skinColor5").checked = true;
	// 		}


	// 		$("#disability").val(response.isDisability);
	// 		$("#bloodGroup").val(response.vcBloodGroup);
	// 		$("#healthInfo").val(response.isHealthInfo);

	// 	}
	// });


	// $("#height").val(213).trigger("chosen:updated");
	// alert(<?= $this->session->userdata('member_id') ?>);


	$('#btnSubmit').click(function() {
		var isBodySapeSelected = $("input[name=bodyShape]").is(":checked");
		var isSkinColorSelected = $("input[name=skinColor]").is(":checked");

		if (jQuery.trim($("#height").val()).length == 0) {
			toastr["error"]("<?= lang('heightErr') ?>");
			$("#height").focus();
		} else if (jQuery.trim($("#weight").val()).length == 0) {
			toastr["error"]("<?= lang('weightErr') ?>");
			$("#weight").focus();
		} else if (!isBodySapeSelected) {
			toastr["error"]("<?= lang('bodyTypetErr') ?>");
		} else if (!isSkinColorSelected) {
			toastr["error"]("<?= lang('skinColorErr') ?>");
		} else if (jQuery.trim($("#disability").val()).length == 0) {
			toastr["error"]("<?= lang('disabilityErr') ?>");
			$("#disability").focus();
		} else if (jQuery.trim($("#bloodGroup").val()).length == 0) {
			toastr["error"]("<?= lang('bloodGroupErr') ?>");
			$("#bloodGroup").focus();
		} else if (jQuery.trim($("#healthInfo").val()).length == 0) {
			toastr["error"]("<?= lang('healthInfoErr') ?>");
			$("#healthInfo").focus();
		} else {
			var form = $("#addPyysicalStatus");
			$.ajax({
				type: form.attr('method'),
				url: form.attr('action'),
				data: form.serialize(),
				dataType: 'json',
				success: function(response) {
					if (response.success == true) {
						Swal.fire({
							icon: 'success',
							title: 'Physical details saved successfully!',
							showConfirmButton: false,
							timer: 2000
						}).then((result) => {
							if (result.dismiss === Swal.DismissReason.timer) {
								window.location.href = "<?= base_url('Registration/residence') ?>";
							}
						})
					} else {
						if (response.messages instanceof Object) {
							$.each(response.messages, function(index, value) {
								var id = $("#" + index);
								id.closest('.form-group')
									.removeClass('has-error')
									.removeClass('has-success')
									.addClass(value.length > 0 ? 'has-error' : 'has-success');
								id.after(value);
							});
						} else {
							toastr["error"](response.messages);
							$(button).prop('disabled', false);
						}
					}

				}
			});
		}
	});
</script>