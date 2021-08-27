<div class="offset-lg-3 col-lg-6 main-section">
    <h3 class="text-center text-inverse title">Personal Assets</h3>
    <p class="highLightText text-center">100% Privacy Controls Available</p>
    <form method="post" action="<?= base_url('Registration/addPersonalAssestDetails') ?>" id="addPersonalAssestDetails">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="form-group">
                    <label class="text-inverse font-weight-bold" for="validationCustom01">Monthly Income</label>
                    <select class="form-control js-example-basic-single" name="monthlyIncome" id="monthlyIncome">
                        <option value="0">Select</option>
                        <?php foreach ($monthlyIncome_data as $k => $v) { ?>
                            <option value="<?= $v['intMonthlyIncomeID'] ?>"><?= $v['vcMonthlyIncome'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label class="text-inverse font-weight-bold">Monthly Income Routes</label>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language routeIncome" id="incomeRoute1" name="incomeRoute[]" value="Job">
                                    <label for="incomeRoute1"></label>
                                </div>
                                <div> <span class="custom-control-description">Job</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language routeIncome" id="incomeRoute2" name="incomeRoute[]" value="Rent/Lease">
                                    <label for="incomeRoute2"></label>
                                </div>
                                <div> <span class="custom-control-description">Rent/Lease</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language routeIncome" id="incomeRoute3" name="incomeRoute[]" value="Fixed Deposit">
                                    <label for="incomeRoute3"></label>
                                </div>
                                <div> <span class="custom-control-description">Fixed Deposit</span></div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language routeIncome" id="incomeRoute4" name="incomeRoute[]" value="Shares">
                                    <label for="incomeRoute4"></label>
                                </div>
                                <div> <span class="custom-control-description">Shares</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language routeIncome" id="incomeRoute5" name="incomeRoute[]" value="Business">
                                    <label for="incomeRoute5"></label>
                                </div>
                                <div> <span class="custom-control-description">Business</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language routeIncome" id="incomeRoute6" name="incomeRoute[]" value="Details in writing">
                                    <label for="incomeRoute6"></label>
                                </div>
                                <div> <span class="custom-control-description">Details in writing</span></div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="form-group">
                    <label class="text-inverse font-weight-bold" for="validationCustom01">Asset Value</label>
                    <select class="form-control js-example-basic-single" name="assetValue" id="assetValue">
                        <option value="0">Select</option>
                        <?php foreach ($assetValue_data as $k => $v) { ?>
                            <option value="<?= $v['intAssetValueID'] ?>"><?= $v['vcAssetValue'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <label class="text-inverse font-weight-bold">Asset Routes</label>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language assetRoutes" id="assestRoute1" name="assestRoute[]" value="Land">
                                    <label for="assestRoute1"></label>
                                </div>
                                <div> <span class="custom-control-description">Land</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language assetRoutes" id="assestRoute2" name="assestRoute[]" value="Vehicles">
                                    <label for="assestRoute2"></label>
                                </div>
                                <div> <span class="custom-control-description">Vehicles</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language assetRoutes" id="assestRoute3" name="assestRoute[]" value="House">
                                    <label for="assestRoute3"></label>
                                </div>
                                <div> <span class="custom-control-description">House</span></div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language assetRoutes" id="assestRoute4" name="assestRoute[]" value="Business">
                                    <label for="assestRoute4"></label>
                                </div>
                                <div> <span class="custom-control-description">Business</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language assetRoutes" id="assestRoute5" name="assestRoute[]" value="Jewellery">
                                    <label for="assestRoute5"></label>
                                </div>
                                <div> <span class="custom-control-description">Jewellery</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language assetRoutes" id="assestRoute6" name="assestRoute[]" value="Savings">
                                    <label for="assestRoute6"></label>
                                </div>
                                <div> <span class="custom-control-description">Savings</span></div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language assetRoutes" id="assestRoute7" name="assestRoute[]" value="Business Premises">
                                    <label for="assestRoute7"></label>
                                </div>
                                <div> <span class="custom-control-description">Business Premises</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <div class="checkbox icheck-wetasphalt icheck-align">
                                    <input type="checkbox" class="language assetRoutes" id="assestRoute8" name="assestRoute[]" value="Details in writing">
                                    <label for="assestRoute8"></label>
                                </div>
                                <div> <span class="custom-control-description">Details in writing</span></div>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label class="text-inverse font-weight-bold" for="inputEmail4" id="bodyShapeLabel">Ownership of Assets</label> <br>
                    <div class="row">
                        <div class="col-3">
                            <center>
                                <div class="radio icheck-midnightblue icheck-align mx-auto">
                                    <input name="OwnershipOfAssets" id="OwnershipOfAssets1" type="radio" value="Parent">
                                    <label for="OwnershipOfAssets1"></label>
                                </div>
                                <div> <span class="custom-control-description">Parent</span></div>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <div class="radio icheck-midnightblue icheck-align mx-auto">
                                    <input name="OwnershipOfAssets" id="OwnershipOfAssets2" type="radio" value="Self">
                                    <label for="OwnershipOfAssets2"></label>
                                </div>
                                <div> <span class="custom-control-description">Self</span></div>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <div class="radio icheck-midnightblue icheck-align mx-auto">
                                    <input name="OwnershipOfAssets" id="OwnershipOfAssets3" type="radio" value="Under Parent and me">
                                    <label for="OwnershipOfAssets3"></label>
                                </div>
                                <div> <span class="custom-control-description">Under Parent and me</span></div>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <div class="radio icheck-midnightblue icheck-align mx-auto">
                                    <input name="OwnershipOfAssets" id="OwnershipOfAssets4" type="radio" value="Details in writing">
                                    <label for="OwnershipOfAssets4"></label>
                                </div>
                                <div> <span class="custom-control-description">Details in writing</span></div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
                <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i>&nbsp; <i class="" id="btnSubmitLoading"></i></button>
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

    var Member = function() {
        this.MemberID = 0;
    }
    var model = new Member();
    model.MemberID = (<?= $this->session->userdata('member_id') ?>);

    var Member = function() {
        this.MemberID = 0;
    }
    var model = new Member();
    model.MemberID = (<?= $this->session->userdata('member_id') ?>);

    let navigateBack = "<?php echo base_url('Registration/career') ?>";
    let navigateTo = "<?= base_url('Registration/family') ?>";
</script>
<script src="<?= base_url('resources/js/registration_form/personal_assets.js') ?>"></script>