<div class="offset-lg-3 col-lg-6 main-section">
    <h3 class="text-center text-inverse title">Personal Assets</h3>
    <form method="post" action="<?= base_url('Registration/addPersonalAssestDetails') ?>" id="addPersonalAssestDetails">
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
                            <center>
                                <input type="checkbox" class="language routeIncome" name="incomeRoute[]" value="Job">
                                <br>
                                <span class="custom-control-description">Job</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language routeIncome" name="incomeRoute[]" value="Rent/Lease">
                                <br>
                                <span class="custom-control-description">Rent/Lease</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language routeIncome" name="incomeRoute[]" value="Fixed Deposit">
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
                                <input type="checkbox" class="language routeIncome" name="incomeRoute[]" value="Shares">
                                <br>
                                <span class="custom-control-description">Shares</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language routeIncome" name="incomeRoute[]" value="Business">
                                <br>
                                <span class="custom-control-description">Business</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language routeIncome" name="incomeRoute[]" value="Ask (My Story)">
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
                            <center>
                                <input type="checkbox" class="language assetRoutes" name="assestRoute[]" value="Land">
                                <br>
                                <span class="custom-control-description">Land</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" name="assestRoute[]" value="Vehicles">
                                <br>
                                <span class="custom-control-description">Vehicles</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" name="assestRoute[]" value="House">
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
                                <input type="checkbox" class="language assetRoutes" name="assestRoute[]" value="Business">
                                <br>
                                <span class="custom-control-description">Business</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" name="assestRoute[]" value="Jewellery">
                                <br>
                                <span class="custom-control-description">Jewellery</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" name="assestRoute[]" value="Savings">
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
                                <input type="checkbox" class="language assetRoutes" name="assestRoute[]" value="Business Premises">
                                <br>
                                <span class="custom-control-description">Business Premises</span>
                            </center>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <center>
                                <input type="checkbox" class="language assetRoutes" name="assestRoute[]" value="Ask (My Story)">
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
                                <input name="OwnershipOfAssets" type="radio" value="Parent">
                                <br>
                                <span class="custom-control-description">Parent</span>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <input name="OwnershipOfAssets" type="radio" value="Self">
                                <br>
                                <span class="custom-control-description">Self</span>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <input name="OwnershipOfAssets" type="radio" value="Under Parent and me">
                                <br>
                                <span class="custom-control-description">Under Parent and me</span>
                            </center>
                        </div>
                        <div class="col-3">
                            <center>
                                <input name="OwnershipOfAssets" type="radio" value="Ask (My Story)">
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
                <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </form>
</div>
<script>
    $(function() {

        $('#btnBack').click(function() {
            window.location.href = "<?php echo base_url('Registration/career') ?>";
        });

        $('#btnSubmit').click(function() {
            var isOwnershipOfAssetsSelected = $("input[name=OwnershipOfAssets]").is(":checked");
            if ($('#monthlyIncome').val() == 0) {
                toastr["error"]("Please select monthly income !");
                $("#monthlyIncome").focus();
            } else if ($('.routeIncome[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select income route !");
            } else if ($('#assetValue').val() == 0) {
                toastr["error"]("Please select asset value");
                $("#assetValue").focus();
            } else if ($('.assetRoutes[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select assest route !");
            } else if (!isOwnershipOfAssetsSelected) {
                toastr["error"]("Please select ownership of assets !");
            } else {

                var form = $("#addPersonalAssestDetails");
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Personal assets saved successfully!',
                                showConfirmButton: false,
                                timer: 2000
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    window.location.href = "<?= base_url('Registration/family') ?>";
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

    });
</script>