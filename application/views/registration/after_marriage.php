<div class="offset-lg-3 col-lg-6 main-section">
    <h3 class="text-center text-inverse title">After Marriage</h3>
    <form method="post" action="<?= base_url('Registration/addAfterMarriageDetails') ?>" id="addAfterMarriageDetails">
        <div class="row">
            <div class="col-12">
                <label class="text-inverse font-weight-bold" for="validationCustom01">Preffer to Live</label>
                <div class="row">
                    <div class="col-4">
                        <center>
                            <input name="PrefferToLive" id="familyTypeJoin1" type="radio" value="In my home">
                            <br>
                            <span class="custom-control-description">In my home</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="PrefferToLive" id="familyTypeJoin2" type="radio" value="In my parent's home">
                            <br>
                            <span class="custom-control-description">In my parent's home</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="PrefferToLive" id="familyTypeJoin3" type="radio" value="As partner wish">
                            <br>
                            <span class="custom-control-description">As partner wish</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="PrefferToLive" id="familyTypeJoin4" type="radio" value="Separated other place">
                            <br>
                            <span class="custom-control-description">Separated other place</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="PrefferToLive" id="familyTypeJoin5" type="radio" value="Outside of Sri lanka">
                            <br>
                            <span class="custom-control-description">Outside of Sri lanka</span>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <label class="text-inverse font-weight-bold" for="validationCustom01">Help Family</label>
                <div class="row">
                    <div class="col-4">
                        <center>
                            <input name="HelpFamily" id="HelpFamily1" type="radio" value="yes">
                            <br>
                            <span class="custom-control-description">Yes</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="HelpFamily" id="HelpFamily2" type="radio" value="Care of parents">
                            <br>
                            <span class="custom-control-description">Care of parents</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="HelpFamily" id="HelpFamily3" type="radio" value="No need much help">
                            <br>
                            <span class="custom-control-description">No need much help</span>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <label class="text-inverse font-weight-bold" for="validationCustom01">Job</label>
                <div class="row">
                    <div class="col-4">
                        <center>
                            <input name="Job" id="Job1" type="radio" value="Good to continue">
                            <br>
                            <span class="custom-control-description">Good to continue</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="Job" id="Job2" type="radio" value="As partner wish">
                            <br>
                            <span class="custom-control-description">As partner wish</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="Job" id="Job3" type="radio" value="Cannot stop">
                            <br>
                            <span class="custom-control-description">Cannot stop</span>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <label class="text-inverse font-weight-bold" for="validationCustom01">Education</label>
                <div class="row">
                    <div class="col-4">
                        <center>
                            <input name="Education" id="Education1" type="radio" value="Good to continue">
                            <br>
                            <span class="custom-control-description">Good to continue</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="Education" id="Education2" type="radio" value="As partner wish">
                            <br>
                            <span class="custom-control-description">As partner wish</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="Education" id="Education3" type="radio" value="Cannot stop">
                            <br>
                            <span class="custom-control-description">Cannot stop</span>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <label class="text-inverse font-weight-bold" for="validationCustom01">Children Likes</label>
                <div class="row">
                    <div class="col-4">
                        <center>
                            <input name="ChildrenLikes" id="ChildrenLikes1" type="radio" value="no">
                            <br>
                            <span class="custom-control-description">No</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="ChildrenLikes" id="ChildrenLikes2" type="radio" value="1">
                            <br>
                            <span class="custom-control-description">1</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="ChildrenLikes" id="ChildrenLikes3" type="radio" value="2">
                            <br>
                            <span class="custom-control-description">2</span>
                        </center>
                    </div>
                    <div class="col-4">
                        <center>
                            <input name="ChildrenLikes" id="ChildrenLikes4" type="radio" value="over 2">
                            <br>
                            <span class="custom-control-description">Over 2</span>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <label class="text-inverse font-weight-bold" for="validationCustom01">Other Needs</label>
                <div class="form-group">
                    <textarea class="form-control" id="OtherNeeds" rows="5" name="OtherNeeds"></textarea>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
                <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </form>
    <!-- dk end -->
</div>

<script>
    $(function() {

        FillAfterMarriageData();

        function FillAfterMarriageData() {
            var Member = function() {
                this.MemberID = 0;
            }
            var model = new Member();
            model.MemberID = (<?= $this->session->userdata('member_id') ?>);

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
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    window.location.href = "<?= base_url('Registration/horoscope') ?>";
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


        $('#btnBack').click(function() {
            window.location.href = "<?php echo base_url('Registration/family') ?>";
        });

        // $('#btnSubmit').click(function() {
        //     // window.location.href = "<?php echo base_url('Registration/horoscope') ?>";
        //     alert('futher forms not developed yet');
        // });

    });
</script>