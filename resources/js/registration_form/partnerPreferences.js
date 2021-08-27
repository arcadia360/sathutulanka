$(function () {
	// $('#MartialStatusDrp').selectpicker('selectAll');
	// $('#MartialStatusDrp').selectpicker();
	$('#btnSubmit').click(function () {
		if ($('#MartialStatusDrp').val() == 0) {
			toastr["error"]("Please select Martial Status !");
			$("#MartialStatusDrp").focus();
		} else if ($('#NoOfChildrenDrp').val() == 0) {
			toastr["error"]("Please select Children !");
			$("#NoOfChildrenDrp").focus();
		} else if ($('#ReligionDrp').val() == 0) {
			toastr["error"]("Please select Religion !");
			$("#ReligionDrp").focus();
		} else if ($('#motherToungeDrp').val() == 0) {
			toastr["error"]("Please select Mother Tounge !");
			$("#motherToungeDrp").focus();
		} else if ($('#LiveInSriLankaDrp').val() == 0) {
			toastr["error"]("Please select Live in Sri Lanka !");
			$("#LiveInSriLankaDrp").focus();
		} else if ($('#EducationLevelDrp').val() == 0) {
			toastr["error"]("Please select Education Level!");
			$("#EducationLevelDrp").focus();
		} else if ($('#CareerLevelDrp').val() == 0) {
			toastr["error"]("Please select Career Level !");
			$("#CareerLevelDrp").focus();
		} else if ($('#MonthlyIncomeDrp').val() == 0) {
			toastr["error"]("Please select Monthly Income !");
			$("#MonthlyIncomeDrp").focus();
		} else if ($('#AssetValueDrp').val() == 0) {
			toastr["error"]("Please select Asset Value !");
			$("#AssetValueDrp").focus();
		} else if ($('#AnyDisabilityDrp').val() == 0) {
			toastr["error"]("Please select Any Disability !");
			$("#AnyDisabilityDrp").focus();
		} else if ($('#DietDrp').val() == 0) {
			toastr["error"]("Please select Diet !");
			$("#DietDrp").focus();
		} else {
			let memberPreferedFromAge = $("#slider-range-age").slider("values", 0);
			let memberPreferedToAge = $("#slider-range-age").slider("values", 1);
			let memberPreferedFromHeight = toInches($('#slider-range-Height').slider("values", 0));
			let memberPreferedToHeight = toInches($('#slider-range-Height').slider("values", 1));

			var form = $("#addPartnerPreference");
			$("#btnSubmitLoading").addClass("fa fa-spinner fa-spin");
			$("#btnSubmit").attr("disabled", "disabled");
			// $("#btnSubmit").prop('disabled', true);
			$.ajax({
				type: form.attr('method'),
				url: form.attr('action'),
				data: form.serialize() + '&' + 'memberPreferedFromAge=' + memberPreferedFromAge + '&' + 'memberPreferedToAge=' + memberPreferedToAge + '&' + 'memberPreferedFromHeight=' + memberPreferedFromHeight + '&' + 'memberPreferedToHeight=' + memberPreferedToHeight,
				dataType: 'json',
				success: function (response) {
					if (response.success == true) {
						Swal.fire({
							icon: 'success',
							title: 'Partner preference saved successfully !',
							showConfirmButton: false,
							timer: 2000
						}).then((result) => {
							$("body").hide();
							if (result.dismiss === Swal.DismissReason.timer) {
								window.location.href = navigateTo;
							}
						})
					} else {
						if (response.messages instanceof Object) {
							$.each(response.messages, function (index, value) {
								var id = $("#" + index);
								id.closest('.form-group')
									.removeClass('has-error')
									.removeClass('has-success')
									.addClass(value.length > 0 ? 'has-error' : 'has-success');
								id.after(value);
							});
						} else {
							toastr["error"](response.messages);
							// $("#btnSubmit").prop('disabled', false);
							// $(button).prop('disabled', false);
						}
					}
				},
				error: function () {
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Internal Server Error! Please contact system administrator.',
					})
					$("#btnSubmit").prop('disabled', false);
				}
			});
			$("#btnSubmit").attr("disabled", "enabled");
		}
	});

	// function LoadSummerizedAssetValuelData() {
	// 	$.ajax({
	// 		type: 'ajax',
	// 		url: '<?php echo base_url(); ?>Registration/LoadSummerizedAssetValuelData',
	// 		async: false,
	// 		dataType: 'json',
	// 		success: function (data) {
	// 			if (!data) {
	// 				toastr["error"]("Failed to load Asset Value data");
	// 			} else {
	// 				$('#AssetValueDrp').html(data);
	// 				$('#AssetValueDrp').multiselect({
	// 					includeSelectAllOption: true,
	// 					selectAllValue: 0,
	// 					buttonWidth: '100%'
	// 				});
	// 			}
	// 		},
	// 		error: function () {
	// 			toastr["error"]('Internal error Failed to load Asset Value data');
	// 		}
	// 	});
	// }

	$('#btnBack').click(function () {
		window.location.href = navigateBack;
	});

	// range slider age 
	$("#slider-range-age").slider({
		range: true,
		min: 18,
		max: 68,
		values: [23, 63],
		slide: function (event, ui) {
			let ageStart = ui.values[0];
			let ageEnd = ui.values[1];
			let midValue = ageEnd - ageStart;
			if (midValue <= 4) {
				return false;
			} else {
				$('#ageStart').text(ageStart);
				$('#ageEnd').text(ageEnd);
			}
		}
	});
	// range slider age end

	// slider-range-Height end
	function toInches(n) {
		return Math.floor(n / 12) + "'" + (n % 12) + '"';
	}
	$(function () {
		$("#slider-range-Height").slider({
			min: 54,
			max: 84,
			values: [60, 80],
			range: true,
			slide: function (event, ui) {
				let heightStart = ui.values[0];
				let heightEnd = ui.values[1];
				let heightMidValue = heightEnd - heightStart;
				if (heightMidValue <= 4.8) {
					return false;
				} else {
					$('#heightStart').text(toInches(ui.values[0]));
					$('#heightEnd').text(toInches(ui.values[1]));
				}
			}
		});
	});
});
