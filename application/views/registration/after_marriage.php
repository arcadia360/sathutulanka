<div class="btnbg" style="padding-top: 10px;">
    <!-- Container Area Start -->
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
                <h3 class="text-center text-inverse title">After Marriage</h3>
                <!-- <hr> -->


                <!-- dk start -->
                <form method="post" action="<?= base_url('Registration/addFamilyDetails') ?>" id="addFamilyDetails">
                    <div class="row">
                        <div class="col-12">
                            <label class="text-inverse font-weight-bold" for="validationCustom01">Preffer to Live</label>
                            <div class="row">
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Family-Type" id="familyTypeJoin" type="radio" class="custom-control-input" value="Join">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">In my home</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Family-Type" id="familyTypeNotJoin" type="radio" class="custom-control-input" value="Not join">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">In my parent's home</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Family-Type" id="familyTypeNotJoin" type="radio" class="custom-control-input" value="Not join">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">As partner wish</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Family-Type" id="familyTypeJoin" type="radio" class="custom-control-input" value="Join">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Separated other place</span>
                                    </label>
                                </div>
                                <div class="col-4">
                                    <label class="custom-control custom-radio">
                                        <input name="Family-Type" id="familyTypeNotJoin" type="radio" class="custom-control-input" value="Not join">
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
                                <textarea class="form-control" id="Add-Family-Details" rows="5" name="Add-Family-Details"></textarea>
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

        $('#btnBack').click(function() {
            window.location.href = "<?php echo base_url('Registration/family') ?>";
        });

        $('#btnSubmit').click(function() {
            // window.location.href = "<?php echo base_url('Registration/horoscope') ?>";
            alert('futher forms not developed yet');
        });

    });
</script>