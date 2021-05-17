<div class="btnbg" style="padding-top: 10px;">
    <!-- Container Area Start -->
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
                <h3 class="text-center text-inverse title">After Marriage</h3>
                <!-- <hr> -->


                <!-- dk start -->
                <form method="post" action="<?= base_url('Registration/addAfterMarriageDetails') ?>" id="addAfterMarriageDetails">
                    <div class="row">
                        <div class="col-12">
                            <label class="text-inverse font-weight-bold" for="validationCustom01">Preffer to Live</label>
                            <div class="row">
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="PrefferToLive" id="familyTypeJoin" type="radio" class="custom-control-input" value="In my home">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">In my home</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="PrefferToLive" id="familyTypeNotJoin" type="radio" class="custom-control-input" value="In my parent's home">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">In my parent's home</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="PrefferToLive" id="familyTypeNotJoin" type="radio" class="custom-control-input" value="As partner wish">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">As partner wish</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="PrefferToLive" id="familyTypeJoin" type="radio" class="custom-control-input" value="Separated other place">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Separated other place</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="PrefferToLive" id="familyTypeNotJoin" type="radio" class="custom-control-input" value="Outside of Sri lanka">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Outside of Sri lanka</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="text-inverse font-weight-bold" for="validationCustom01">Help Family</label>
                            <div class="row">
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="HelpFamily" type="radio" class="custom-control-input" value="yes">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Yes</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="HelpFamily" type="radio" class="custom-control-input" value="Care of parents">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Care of parents</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="HelpFamily" type="radio" class="custom-control-input" value="No need much help">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">No need much help</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="text-inverse font-weight-bold" for="validationCustom01">Job</label>
                            <div class="row">
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Job" type="radio" class="custom-control-input" value="Good to continue">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Good to continue</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Job" type="radio" class="custom-control-input" value="As partner wish">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">As partner wish</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Job" type="radio" class="custom-control-input" value="Cannot stop">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cannot stop</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="text-inverse font-weight-bold" for="validationCustom01">Education</label>
                            <div class="row">
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Education" type="radio" class="custom-control-input" value="Good to continue">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Good to continue</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Education" type="radio" class="custom-control-input" value="As partner wish">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">As partner wish</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Education" type="radio" class="custom-control-input" value="Cannot stop">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Cannot stop</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="text-inverse font-weight-bold" for="validationCustom01">Children Likes</label>
                            <div class="row">
                                <div class="col-3">
                                    <label class="custom-control custom-radio">
                                        <input name="ChildrenLikes" type="radio" class="custom-control-input" value="no">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">No</span>
                                    </label>
                                </div>
                                <div class="col-3">
                                    <label class="custom-control custom-radio">
                                        <input name="ChildrenLikes" type="radio" class="custom-control-input" value="1">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">1</span>
                                    </label>
                                </div>
                                <div class="col-3">
                                    <label class="custom-control custom-radio">
                                        <input name="ChildrenLikes" type="radio" class="custom-control-input" value="2">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">2</span>
                                    </label>
                                </div>
                                <div class="col-3">
                                    <label class="custom-control custom-radio">
                                        <input name="ChildrenLikes" type="radio" class="custom-control-input" value="over 2">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Over 2</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-inverse font-weight-bold" for="validationCustom01">Other Needs</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" id="OtherNeeds" rows="5" name="OtherNeeds"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
                            <button class="btn btn-info" style="width: 150px;" id="btnBack" type="button">BACK</button>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
                            <button class="btn btn-info" style="width: 150px;" type="button" id="btnSubmit">CONTINUE</button>
                        </div>
                    </div>
                </form>
                <!-- dk end -->
            </div>
        </div>
    </div>

    <!-- Container Area End -->

</div>
<script>
    $(function() {

        $('#btnSubmit').click(function() {
            let isPrefferToLiveSelected = $("input[name=PrefferToLive]").is(":checked");
            let isHelpFamilySelected = $("input[name=HelpFamily]").is(":checked");
            let isJobSelected = $("input[name=Job]").is(":checked");
            let isEducationSelected = $("input[name=Education]").is(":checked");
            let isChildrenLikesSelected = $("input[name=ChildrenLikes]").is(":checked");

            if (!isPrefferToLiveSelected) {
                toastr["error"]("Please select preffer to live");
            } else if (!isHelpFamilySelected) {
                toastr["error"]("Please select help family");
            } else if (!isJobSelected) {
                toastr["error"]("Please select job");
            } else if (!isEducationSelected) {
                toastr["error"]("Please select education");
            } else if (!isChildrenLikesSelected) {
                toastr["error"]("Please select children likes");
            } else if ($('#OtherNeeds').val() == "") {
                toastr["error"]("Please add other needs");
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