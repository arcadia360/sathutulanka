<div class="offset-lg-3 col-lg-6 main-section">
    <h3 class="text-center text-inverse title">Personal Assets</h3>
    <span class="highLightText">Will not publish, Office purpose only.</span>
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
                                <input type="checkbox" class="language routeIncome" id="incomeRoute1" name="incomeRoute[]" value="Job">
                                <br>
                                <span class="custom-control-description">Job</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language routeIncome" id="incomeRoute2" name="incomeRoute[]" value="Rent/Lease">
                                <br>
                                <span class="custom-control-description">Rent/Lease</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language routeIncome" id="incomeRoute3" name="incomeRoute[]" value="Fixed Deposit">
                                <br>
                                <span class="custom-control-description">Fixed Deposit</span>
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
                                <input type="checkbox" class="language routeIncome" id="incomeRoute4" name="incomeRoute[]" value="Shares">
                                <br>
                                <span class="custom-control-description">Shares</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language routeIncome" id="incomeRoute5" name="incomeRoute[]" value="Business">
                                <br>
                                <span class="custom-control-description">Business</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language routeIncome" id="incomeRoute6" name="incomeRoute[]" value="Ask (My Story)">
                                <br>
                                <span class="custom-control-description">Ask (My Story)</span>
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
                                <input type="checkbox" class="language assetRoutes" id="assestRoute1" name="assestRoute[]" value="Land">
                                <br>
                                <span class="custom-control-description">Land</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" id="assestRoute2" name="assestRoute[]" value="Vehicles">
                                <br>
                                <span class="custom-control-description">Vehicles</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" id="assestRoute3" name="assestRoute[]" value="House">
                                <br>
                                <span class="custom-control-description">House</span>
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
                                <input type="checkbox" class="language assetRoutes" id="assestRoute4" name="assestRoute[]" value="Business">
                                <br>
                                <span class="custom-control-description">Business</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" id="assestRoute5" name="assestRoute[]" value="Jewellery">
                                <br>
                                <span class="custom-control-description">Jewellery</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" id="assestRoute6" name="assestRoute[]" value="Savings">
                                <br>
                                <span class="custom-control-description">Savings</span>
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
                                <input type="checkbox" class="language assetRoutes" id="assestRoute7" name="assestRoute[]" value="Business Premises">
                                <br>
                                <span class="custom-control-description">Business Premises</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" id="assestRoute8" name="assestRoute[]" value="Ask (My Story)">
                                <br>
                                <span class="custom-control-description">Ask (My Story)</span>
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
                                <input name="OwnershipOfAssets" id="OwnershipOfAssets1" type="radio" value="Parent">
                                <br>
                                <span class="custom-control-description">Parent</span>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <input name="OwnershipOfAssets" id="OwnershipOfAssets2" type="radio" value="Self">
                                <br>
                                <span class="custom-control-description">Self</span>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <input name="OwnershipOfAssets" id="OwnershipOfAssets3" type="radio" value="Under Parent and me">
                                <br>
                                <span class="custom-control-description">Under Parent and me</span>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <input name="OwnershipOfAssets" id="OwnershipOfAssets4" type="radio" value="Ask (My Story)">
                                <br>
                                <span class="custom-control-description">Ask (My Story)</span>
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