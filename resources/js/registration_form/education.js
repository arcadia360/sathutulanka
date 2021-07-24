$(function() {

    FillEducationData(); 

    function FillEducationData() {
      
        ajaxCall('registration/getMemberData', model, function(response) {
            if (response.intEducationLevelID != null) {
                $("#EducationLevel").val(response.intEducationLevelID);
                $('#EducationLevel').trigger('change');
                $("#EducationField").val(response.intEducationFieldID);
                $('#EducationField').trigger('change');
                $("#vcSclUniDescription").val(response.vcSclUniDescription);
            }
        });

    }

    $('#btnBack').click(function() {
        window.location.href =navigateBack;
    });

    $('#btnSubmit').click(function() {
        if ($('#EducationLevel').val() == 0) {
            toastr["error"]("Please select education level !");
            $("#EducationLevel").focus();
        } else if ($('#EducationField').val() == 0) {
            toastr["error"]("Please select education field !");
            $("#EducationField").focus();
        } else if ($('#vcSclUniDescription').val() == "") {
            toastr["error"]("Please select school university description !");
            $("#vcSclUniDescription").focus();
        } else {
            var form = $("#addEducationDetails");
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
                            title: 'Education details saved successfully!',
                            showConfirmButton: false,
                            timer: 2000
                        }).then((result) => {
                            $("body").hide();
                            if (result.dismiss === Swal.DismissReason.timer) {
                                window.location.href =navigateTo;
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
});