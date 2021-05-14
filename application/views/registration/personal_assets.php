<div class="btnbg" style="padding-top: 100px;">
    <!-- Container Area Start -->
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
                <h3 class="text-center text-inverse title">Personal Assets</h3>
                <hr>
                <form method="post" action="<?= base_url('Registration/addPersonalAssestDetails') ?>" id="addPersonalAssestDetails">
                    <!-- dk -->
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label class="text-inverse font-weight-bold" for="validationCustom01">Monthly Income</label>
                                <select class="form-control js-example-basic-single" name="monthlyIncome" id="monthlyIncome">
                                    <option value="0">Select</option>
                                    <option value="Ask">Ask</option>
                                    <option value="Upto Rs 25000 ">Upto Rs 25000 </option>
                                    <option value="Rs 25000 to Rs 50000 ">Rs 25000 to Rs 50000 </option>
                                    <option value="Rs 50000 to Rs 75000">Rs 50000 to Rs 75000 </option>
                                    <option value="Rs 75000 to Rs 100000 ">Rs 75000 to Rs 100000 </option>
                                    <option value="Rs 100000 to Rs 150000">Rs 100000 to Rs 150000 </option>
                                    <option value="Rs 150000 to Rs 200000">Rs 150000 to Rs 200000 </option>
                                    <option value="Rs 200000 to Rs 250000">Rs 200000 to Rs 250000 </option>
                                    <option value="Rs 250000 to Rs 300000">Rs 250000 to Rs 300000 </option>
                                    <option value="Rs 300000 to Rs 400000 ">Rs 300000 to Rs 400000 </option>
                                    <option value="Rs 400000 Up">Rs 400000 Up </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <label class="text-inverse font-weight-bold">Monnthly Income Routes</label>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language routeIncome" name="incomeRoute[]" value="Job">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Job</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language routeIncome" name="incomeRoute[]" value="Rent/Lease">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Rent/Lease</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language routeIncome" name="incomeRoute[]" value="Fixed Deposit">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Fixed Deposit</span>
                                        </label>
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
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language routeIncome" name="incomeRoute[]" value="Shares">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Shares</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language routeIncome" name="incomeRoute[]" value="Business">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Business</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language routeIncome" name="incomeRoute[]" value="Ask (My Story)">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Ask (My Story)</span>
                                        </label>
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
                                    <option value="Ask">Ask</option>
                                    <option value="Upto Rs 150000">Upto Rs 150000 </option>
                                    <option value="Rs 150000 to Rs 250000">Rs 150000 to Rs 250000 </option>
                                    <option value="Rs 250000 to Rs 500000">Rs 250000 to Rs 500000 </option>
                                    <option value="Rs 500000 to Rs 750000">Rs 500000 to Rs 750000 </option>
                                    <option value="Rs 750000 to Rs 1000000 ">Rs 750000 to Rs 1000000 </option>
                                    <option value="Rs 1M to Rs 1.5M ">Rs 1M to Rs 1.5M </option>
                                    <option value="Rs 1.5M to Rs 2M">Rs 1.5M to Rs 2M </option>
                                    <option value="Rs 2M to Rs 2.5M ">Rs 2M to Rs 2.5M </option>
                                    <option value="Rs 2.5M to Rs 3M">Rs 2.5M to Rs 3M </option>
                                    <option value="Rs 3M to Rs 4M">Rs 3M to Rs 4M </option>
                                    <option value="Rs 4M to Rs 5M ">Rs 4M to Rs 5M </option>
                                    <option value="Rs 5M to Rs 7.5M">Rs 5M to Rs 7.5M </option>
                                    <option value="Rs 7.5M to Rs 10M">Rs 7.5M to Rs 10M </option>
                                    <option value="Rs 10M to Rs15M">Rs 10M to Rs15M </option>
                                    <option value="Rs 15M to Rs 20M">Rs 15M to Rs 20M </option>
                                    <option value="Rs 20M to Rs 30M">Rs 20M to Rs 30M </option>
                                    <option value="Rs 30M to Rs 40M">Rs 30M to Rs 40M </option>
                                    <option value="Rs 40M to Rs 50M">Rs 40M to Rs 50M </option>
                                    <option value="Rs 50M up">Rs 50M up </option>
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
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language assetRoutes" name="assestRoute[]" value="Land">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Land</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language assetRoutes" name="assestRoute[]" value="Vehicles">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Vehicles</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language assetRoutes" name="assestRoute[]" value="House">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">House</span>
                                        </label>
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
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language assetRoutes" name="assestRoute[]" value="Business">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Business</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language assetRoutes" name="assestRoute[]" value="Jewellery">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Jewellery</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language assetRoutes" name="assestRoute[]" value="Savings">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Savings</span>
                                        </label>
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
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language assetRoutes" name="assestRoute[]" value="Business Premises">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Business Premises</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input language assetRoutes" name="assestRoute[]" value=">Ask (My Story)">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Ask (My Story)</span>
                                        </label>
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
                                    <div class="col-4 d-flex align-items-center">
                                        <label class="custom-control custom-radio">
                                            <input name="OwnershipOfAssets" type="radio" class="custom-control-input" value="Parent">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Parent</span>
                                        </label>
                                    </div>
                                    <div class="col-4 d-flex align-items-center">
                                        <label class="custom-control custom-radio">
                                            <input name="OwnershipOfAssets" type="radio" class="custom-control-input" value="Self">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Self</span>
                                        </label>
                                    </div>
                                    <div class="col-4 d-flex align-items-center">
                                        <label class="custom-control custom-radio">
                                            <input name="OwnershipOfAssets" type="radio" class="custom-control-input" value="Under Parent and me">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Under Parent and me</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <label class="custom-control custom-radio">
                                            <input name="OwnershipOfAssets" type="radio" class="custom-control-input" value="Ask (My Story)">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Ask (My Story)</span>
                                        </label>
                                    </div>
                                    <div class="col-4 d-flex align-items-center">

                                    </div>
                                    <div class="col-4 d-flex align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
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
            window.location.href = "<?php echo base_url('Registration/career') ?>";
        });

        $('#btnSubmit').click(function() {
            var isOwnershipOfAssetsSelected = $("input[name=OwnershipOfAssets]").is(":checked");
            if ($('#monthlyIncome').val() == 0) {
                toastr["error"]("Please select monthly income");
                $("#monthlyIncome").focus();
            } else if ($('.routeIncome[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select income route ");
            } else if ($('#assetValue').val() == 0) {
                toastr["error"]("Please select asset value");
                $("#assetValue").focus();
            } else if ($('.assetRoutes[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select assest route ");
            } else if (!isOwnershipOfAssetsSelected) {
                toastr["error"]("Please select ownership of assets ");
            } else {

                var form = $("#addPersonalAssestDetails");
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success == true) {
                            swal({
                                title: 'Success!',
                                text: "Personal assets details saved successfully!",
                                type: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = "<?php echo base_url('Registration/family') ?>";
                            });
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

    });
</script>