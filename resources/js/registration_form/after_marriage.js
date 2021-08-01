$(function() {

    FillAfterMarriageData();

    function FillAfterMarriageData() {
       

        ajaxCall('registration/getMemberData', model, function(response) {
            if (response.vcPrefferToLive != null) {
                var PrefferToLive = (response.vcPrefferToLive);
                if (PrefferToLive == "In my home") {
                    $("#familyTypeJoin1").prop("checked", true);
                } else if (PrefferToLive == "In my parent's home") {
                    $("#familyTypeJoin2").prop("checked", true);
                }else if (PrefferToLive == "As partner wish") {
                    $("#familyTypeJoin3").prop("checked", true);
                }else if (PrefferToLive == "Separated other place") {
                    $("#familyTypeJoin4").prop("checked", true);
                }else if (PrefferToLive == "Outside of Sri lanka") {
                    $("#familyTypeJoin5").prop("checked", true);
                }

                var HelpFamily = (response.vcHelpFamily);
                if (HelpFamily == "yes") {
                    $("#HelpFamily1").prop("checked", true);
                } else if (HelpFamily == "Care of parents") {
                    $("#HelpFamily2").prop("checked", true);
                }else if (HelpFamily == "No need much help") {
                    $("#HelpFamily3").prop("checked", true);
                }

                var JobAfterMarriage = (response.vcJobAfterMarriage);
                if (JobAfterMarriage == "Good to continue") {
                    $("#Job1").prop("checked", true);
                } else if (JobAfterMarriage == "As partner wish") {
                    $("#Job2").prop("checked", true);
                }else if (JobAfterMarriage == "Cannot stop") {
                    $("#Job3").prop("checked", true);
                }

                var EducationAfterMarriage = (response.vcEducationAfterMarriage);
                if (EducationAfterMarriage == "Good to continue") {
                    $("#Education1").prop("checked", true);
                } else if (EducationAfterMarriage == "As partner wish") {
                    $("#Education2").prop("checked", true);
                }else if (EducationAfterMarriage == "Cannot stop") {
                    $("#Education3").prop("checked", true);
                }

                var ChildrenLikes = (response.vcChildrenLikes);
                if (ChildrenLikes == "no") {
                    $("#ChildrenLikes1").prop("checked", true);
                } else if (ChildrenLikes == "1") {
                    $("#ChildrenLikes2").prop("checked", true);
                }else if (ChildrenLikes == "2") {
                    $("#ChildrenLikes3").prop("checked", true);
                }else if (ChildrenLikes == "over 2") {
                    $("#ChildrenLikes4").prop("checked", true);
                }
                $("#OtherNeeds").val(response.vcOtherNeeds);
            }
        });
    }

    $('#btnSubmit').click(function() {
        let isPrefferToLiveSelected = $("input[name=PrefferToLive]").is(":checked");
        let isHelpFamilySelected = $("input[name=HelpFamily]").is(":checked");
        let isJobSelected = $("input[name=Job]").is(":checked");
        let isEducationSelected = $("input[name=Education]").is(":checked");
        let isChildrenLikesSelected = $("input[name=ChildrenLikes]").is(":checked");

        if (!isPrefferToLiveSelected) {
            toastr["error"]("Please select preffer to live !");
        } else if (!isHelpFamilySelected) {
            toastr["error"]("Please select help family !");
        } else if (!isJobSelected) {
            toastr["error"]("Please select job !");
        } else if (!isEducationSelected) {
            toastr["error"]("Please select education !");
        } else if (!isChildrenLikesSelected) {
            toastr["error"]("Please select children likes !");
        } else if ($('#OtherNeeds').val() == "") {
            toastr["error"]("Please add other needs !");
            $('#OtherNeeds').focus();
        } else {
            var form = $("#addAfterMarriageDetails");
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
                            title: 'After marriage details saved successfully!',
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
                    }
                }
            });
            $("#btnSubmit").attr("disabled","enabled");
        }

    });


    $('#btnBack').click(function() {
        window.location.href =navigateBack;
    });

    // $('#btnSubmit').click(function() {
    //     // window.location.href = "<?php echo base_url('Registration/horoscope') ?>";
    //     alert('futher forms not developed yet');
    // });

});