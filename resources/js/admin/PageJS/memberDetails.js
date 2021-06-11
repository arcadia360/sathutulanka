
$(document).ready(function () {


    $('#Div_OtherReasonSuspend').hide();
    $('#suspendReason').change(function () {
        var sReason = $('#suspendReason').val();
        if (sReason == 10) {
            $('#Div_OtherReasonSuspend').show();
        } else {
            $('#Div_OtherReasonSuspend').hide();
        }
    });

});

function RemarkHistoryTable() {
    var MemberID = +($("#intRemarkMemberID").val());

    $('#tblRemarkHistory').DataTable({
        'ajax': base_url + 'admin/GetRemarkHistoryData/' + MemberID,
        'order': [],
        "bDestroy": true
    });
}


$('#btnSubmitMemberRemark').click(function () {
    if ($("#member_remark").val() == '') {
        toastr["error"]("Please Enter Reason !");
        $("#member_remark").focus();
        // return;
    }
    else {
        $("#addMemberRemark").modal('hide');
        arcadiaConfirmAlert("You want to be able to Add this Remark !", function (button) {
            var form = $("#addMemberRemarkForm");
            $.ajax({
                async: false,
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {

                    if (response.success == true) {
                        arcadiaSuccessMessage("Saved !");
                    } else {

                        if (response.messages instanceof Object) {
                            $.each(response.messages, function (index, value) {
                                var id = $("#" + index);

                                id.closest('.form-group')
                                    .removeClass('has-error')
                                    .removeClass('has-success')
                                    .addClass(value.length > 0 ? 'has-error' : 'has-success');

                                id.after(value);

                            });
                        } else {
                            toastr["error"](response.messages);
                            // arcadiaErrorMessage(response.messages);
                            // $(button).prop('disabled', false);
                        }
                    }
                }
            });
        }, this);
    }
});


function btnApprovalMember(MemberID) {
    arcadiaConfirmAlert("You want to be able to Approve this Member !", function (button) {
        $.ajax({
            async: true,
            url: base_url + 'admin/approvalMember',
            type: 'post',
            data: {
                intMemberID: MemberID
            },
            dataType: 'json',
            success: function (response) {
                if (response.success == true) {
                    arcadiaSuccessMessage("Approved !");
                } else {
                    toastr["error"](response.messages);
                }
            },
            error: function (request, status, error) {
                arcadiaErrorMessage(error);
            }
        });
    }, this);
}

$('#btnSubmitMemberSuspend').click(function () {

    if ($("#suspendReason :selected").val() == 0) {
        toastr["error"]("Please select Reason !");
        $("#suspendReason").focus();
    }
    else if ($("#suspendReason :selected").val() == 10 && ($("#otherReasonSuspend").val() == '')) {
        toastr["error"]("Please Enter Reason !");
        $("#otherReasonSuspend").focus();
    }

    else {
        $("#addSuspend").modal('hide');
        arcadiaConfirmAlert("You want to be able to Suspend this Account !", function (button) {
            var form = $("#addSuspendForm");
            $.ajax({
                async: false,
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {

                    if (response.success == true) {
                        arcadiaSuccessMessage("Saved !");
                    } else {

                        if (response.messages instanceof Object) {
                            $.each(response.messages, function (index, value) {
                                var id = $("#" + index);

                                id.closest('.form-group')
                                    .removeClass('has-error')
                                    .removeClass('has-success')
                                    .addClass(value.length > 0 ? 'has-error' : 'has-success');

                                id.after(value);

                            });
                        } else {
                            toastr["error"](response.messages);
                            // arcadiaErrorMessage(response.messages);
                            // $(button).prop('disabled', false);
                        }
                    }
                }
            });
        }, this);
    }
});

$('#btnUpdateMemberDetailsByAdmin').click(function () {

    if ($("#suspendReason :selected").val() == 0) {
        toastr["error"]("Please select Reason !");
        $("#suspendReason").focus();
    }
    else if ($("#suspendReason :selected").val() == 10 && ($("#otherReasonSuspend").val() == '')) {
        toastr["error"]("Please Enter Reason !");
        $("#otherReasonSuspend").focus();
    }

    else {
        arcadiaConfirmAlert("You want to be able to Suspend this Account !", function (button) {
            var form = $("#----------------");
            $.ajax({
                async: false,
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function (response) {

                    if (response.success == true) {
                        arcadiaSuccessMessage("Saved !");
                    } else {

                        if (response.messages instanceof Object) {
                            $.each(response.messages, function (index, value) {
                                var id = $("#" + index);

                                id.closest('.form-group')
                                    .removeClass('has-error')
                                    .removeClass('has-success')
                                    .addClass(value.length > 0 ? 'has-error' : 'has-success');

                                id.after(value);

                            });
                        } else {
                            toastr["error"](response.messages);
                            // arcadiaErrorMessage(response.messages);
                            // $(button).prop('disabled', false);
                        }
                    }
                }
            });
        }, this);
    }
});

