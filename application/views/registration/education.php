	<div class="offset-lg-3 col-lg-6 main-section">
		<!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
		<h3 class="text-center text-inverse title">Education</h3>
		<form method="post" action="<?= base_url('Registration/addEducationDetails') ?>" id="addEducationDetails">
			<div class="row">
				<div class="col-12">
					<label class="text-inverse font-weight-bold" for="validationCustom01">Education Level</label>
					<div class="form-group">
						<select class="custom-select d-block form-control" id="EducationLevel" name="EducationLevel">
							<option value="0"><?= lang('select') ?></option>
							<?php foreach ($educationLevel_data as $k => $v) { ?>
								<option value="<?= $v['intEducationLevelID'] ?>"><?= $v['vcEducationLevel'] ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<label class="text-inverse font-weight-bold" for="validationCustom01">Education Field</label>
					<div class="form-group">
						<select class="custom-select d-block form-control" id="EducationField" name="EducationField">
							<option value="0"><?= lang('select') ?></option>
							<?php foreach ($educationField_data as $k => $v) { ?>
								<option value="<?= $v['intEducationFieldID'] ?>"><?= $v['vcEducationField'] ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<label class="text-inverse font-weight-bold" for="validationCustom01">School/ University (Description)</label>
					<div class="form-group">
						<textarea class="form-control" id="vcSclUniDescription" name="vcSclUniDescription" rows="5" placeholder="Type your school, university details here..."></textarea>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-12">
					<button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
					<button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i><i class="" id="btnSubmitLoading"></i></button>
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
		let navigateBack = "<?php echo base_url('Registration/WhoAmI') ?>";
		let navigateTo = "<?= base_url('Registration/career') ?>";
	</script>
	<script src="<?= base_url('resources/js/registration_form/education.js') ?>"></script>