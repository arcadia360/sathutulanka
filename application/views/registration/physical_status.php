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
									<!-- <input id="bodyShape" name="bodyShape" type="radio" class="custom-control-input" value="1"> -->
									<center>
										<input type="radio" name="bodyShape" value="1" id="bodyShape" required>
										<br>
										<span class="custom-control-description"><?= lang('slim') ?></span>
									</center>
								</label>
							</div>

						</div>
						<div class="col-4 align-items-center">
							<div style="width: 50px;" class="mx-auto">
								<img class="body-size" src="<?= base_url('resources/images/average.png') ?>" alt="average image">
								<label class="custom-radio">
									<center>
										<input id="bodyShape2" name="bodyShape" type="radio" value="2">
										<span class="custom-control-description"><?= lang('average') ?></span>
									</center>
								</label>
							</div>

						</div>
						<div class="col-4 align-items-center">
							<div style="width: 50px;" class="mx-auto">
								<img class="body-size" src="<?= base_url('resources/images/fat.png') ?>" alt="heavy image">
								<label class="custom-radio">
									<center>
										<input id="bodyShape3" name="bodyShape" type="radio" value="3">
										<span class="custom-control-description"><?= lang('heavy') ?></span>
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
					<center>
						<div class="round-symbol d-flex veryFair"></div>
						<input type="radio" name="skinColor" value="1" id="skinColor1" required>
						<br>
						<label class="custom-control-description" for="skinColor1"><?= lang('veryFair') ?></label>
					</center>
				</div>
				<div class="col-2">
					<center>
						<div class="round-symbol d-flex fair"></div>
						<input type="radio" name="skinColor" value="2" id="skinColor2">
						<br>
						<label class="margin-0-auto custom-control-description" for="skinColor2"><?= lang('fair') ?></label>
					</center>
				</div>
				<div class="col-2">
					<center>
						<div class="round-symbol d-flex lightBrown"></div>
						<input type="radio" name="skinColor" value="3" id="skinColor3">
						<br>
						<label class="margin-0-auto custom-control-description" for="skinColor3"><?= lang('lightBrown') ?></label>
					</center>
				</div>
				<div class="col-2">
					<center>
						<div class="round-symbol d-flex darkBrown"></div>
						<input type="radio" name="skinColor" value="4" id="skinColor4">
						<br>
						<label class="margin-0-auto custom-control-description" for="skinColor4"><?= lang('darkBrown') ?></label>
					</center>
				</div>
				<div class="col-2">
					<center>
						<div class="round-symbol d-flex blackBrown"></div>
						<input type="radio" name="skinColor" value="5" id="skinColor5">
						<br>
						<label class="margin-0-auto custom-control-description" for="skinColor5"><?= lang('blackBrown') ?></label>
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
					<button class="btn btn-info" style="float:right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i></button>
				</div>
			</div>
		</form>
	</div>



	<script>
		loadDisabilityDetails()

		function loadDisabilityDetails() {
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url(); ?>Registration/loadDisabilityDetails',
				async: false,
				dataType: 'json',
				success: function(data) {
					if (!data) {
						toastr["error"]("Failed to load disability selection data");
					} else {
						$('#disability').html(data);
					}
				},
				error: function() {
					alert('failed to load countries');
				}
			});
		}

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
			} else if (BodyType == 2) {
				document.getElementById("bodyShape2").checked = true;
			} else {
				document.getElementById("bodyShape3").checked = true;
			}

			var skinColorID = (response.intSkinColourID);

			if (skinColorID == 1) {
				document.getElementById("skinColor1").checked = true;
			} else if (skinColorID == 2) {
				document.getElementById("skinColor2").checked = true;
			} else if (skinColorID == 3) {
				document.getElementById("skinColor3").checked = true;
			} else if (skinColorID == 4) {
				document.getElementById("skinColor4").checked = true;
			} else if (skinColorID == 5) {
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
			} else if ($("#disability").val() == 0) {
				toastr["error"](" Please select disability");
				$("#disability").focus();
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