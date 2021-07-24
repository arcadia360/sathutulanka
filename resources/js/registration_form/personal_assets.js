$(function() {


    FillPersonalAssetsData();
    FillMonthlyIncomeRoutesData();
    FillAssetRoutes();

    function FillPersonalAssetsData() {
        

        ajaxCall('registration/getMemberData', model, function(response) {
            if (response.intMonthlyIncomeID != null) {
                $("#monthlyIncome").val(response.intMonthlyIncomeID);
                $("#assetValue").val(response.intAssetValueID);
                var OwnershipOfAssets = (response.vcOwnershipOfAssets);
                if (OwnershipOfAssets == "Parent") {
                    $("#OwnershipOfAssets1").prop("checked", true);
                } else if (OwnershipOfAssets == "Self") {
                    $("#OwnershipOfAssets2").prop("checked", true);
                } else if (OwnershipOfAssets == "Under Parent and me") {
                    $("#OwnershipOfAssets3").prop("checked", true);
                } else if (OwnershipOfAssets == "Ask (My Story)") {
                    $("#OwnershipOfAssets4").prop("checked", true);
                }
            }
        });
    }

    function FillMonthlyIncomeRoutesData() {
        
        ajaxCall('registration/getMonthlyIncomeRoutesData', model, function(response) {
            for (let index = 0; index < response.length; index++) {
                if (response[index].vcMonthlyIncomeRoute == "Job") {
                    $("#incomeRoute1").prop("checked", true);
                } else if (response[index].vcMonthlyIncomeRoute == "Rent/Lease") {
                    $("#incomeRoute2").prop("checked", true);
                } else if (response[index].vcMonthlyIncomeRoute == "Fixed Deposit") {
                    $("#incomeRoute3").prop("checked", true);
                } else if (response[index].vcMonthlyIncomeRoute == "Shares") {
                    $("#incomeRoute4").prop("checked", true);
                } else if (response[index].vcMonthlyIncomeRoute == "Business") {
                    $("#incomeRoute5").prop("checked", true);
                } else if (response[index].vcMonthlyIncomeRoute == "Ask (My Story)") {
                    $("#incomeRoute6").prop("checked", true);
                }
            }
        });
    }

    function FillAssetRoutes() {
   
        ajaxCall('registration/getAssetRoutesData', model, function(response) {
            for (let index = 0; index < response.length; index++) {
                if (response[index].vcAssetRoute == "Land") {
                    $("#assestRoute1").prop("checked", true);
                } else if (response[index].vcAssetRoute == "Vehicles") {
                    $("#assestRoute2").prop("checked", true);
                } else if (response[index].vcAssetRoute == "House") {
                    $("#assestRoute3").prop("checked", true);
                } else if (response[index].vcAssetRoute == "Business") {
                    $("#assestRoute4").prop("checked", true);
                } else if (response[index].vcAssetRoute == "Jewellery") {
                    $("#assestRoute5").prop("checked", true);
                } else if (response[index].vcAssetRoute == "Savings") {
                    $("#assestRoute6").prop("checked", true);
                } else if (response[index].vcAssetRoute == "Business Premises") {
                    $("#assestRoute7").prop("checked", true);
                } else if (response[index].vcAssetRoute == "Ask (My Story)") {
                    $("#assestRoute8").prop("checked", true);
                }
            }
        });
    }
    $('#btnBack').click(function() {
        window.location.href = navigateBack;
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
                            title: 'Personal assets saved successfully!',
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
                    }
                }
            });
            $("#btnSubmit").attr("disabled","enabled");
        }
    });

});