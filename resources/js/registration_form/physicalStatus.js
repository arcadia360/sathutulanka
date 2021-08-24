loadDisabilityDetails()

function loadDisabilityDetails() {
    $.ajax({
        type: 'ajax',
        url: loadDisabilityUrl,
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
            toastr["error"]("Internal Error,Failed to load disability selection data");
        }
    });
}

// ================================================================
// declared in physicalstatus.php
// var Member = function() {
//     this.MemberID = 0;
// }
// var model = new Member();
// model.MemberID = (<?= $this->session->userdata('member_id') ?>);  
// ================================================================

ajaxCall('registration/getMemberData', model, function(response) {

    debugger;

    // $("#Supplier").val(response.intHeight);
    $("#height").val(response.intHeight);
    $("#weight").val(response.Weight_Customised);
    var BodyType = (response.intBodyTypeID);
    if (BodyType == 1) {
        document.getElementById("bodyShape1").checked = true;
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



    $("#disability").val(response.intDisabilityID);
    $("#bloodGroup").val(response.vcBloodGroup);
    $("#healthInfo").val(response.isHealthInfo);
});

$('#btnSubmit').click(function() {
    var isBodySapeSelected = $("input[name=bodyShape]").is(":checked");
    var isSkinColorSelected = $("input[name=skinColor]").is(":checked");

    if (jQuery.trim($("#height").val()).length == 0) {
        toastr["error"]("Please select height");
        $("#height").focus();
    } else if (jQuery.trim($("#weight").val()).length == 0) {
        toastr["error"]("Please select weight");
        $("#weight").focus();
    } else if (!isBodySapeSelected) {
        toastr["error"]("Please select body type");
    } else if (!isSkinColorSelected) {
        toastr["error"]("Please select skin color");
    } else if ($("#disability").val() == 0) {
        toastr["error"](" Please select disability");
        $("#disability").focus();
    } else if (jQuery.trim($("#disability").val()).length == 0) {
        toastr["error"]("Please select disability");
        $("#disability").focus();
    } else if (jQuery.trim($("#bloodGroup").val()).length == 0) {
        toastr["error"]("Please select blood group");
        $("#bloodGroup").focus();
    } else if (jQuery.trim($("#healthInfo").val()).length == 0) {
        toastr["error"]("Please select health info");
        $("#healthInfo").focus();
    } else {
        var form = $("#addPyysicalStatus");
        $("#btnSubmitLoading").addClass("fa fa-spinner fa-spin");
        $("#btnSubmit").attr("disabled","disabled");
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
                        $("body").hide();
                        if (result.dismiss === Swal.DismissReason.timer) {
                            window.location.href = navigateTo;
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
                    $("#btnSubmit").attr("disabled","enabled");
                }

            }
        });
    }
});

$('[data-toggle="popover"]').popover({
    trigger: 'focus'
  });

$('[data-toggle="popover"]').on('click', function(e) {
    e.preventDefault();
	return true; 
});