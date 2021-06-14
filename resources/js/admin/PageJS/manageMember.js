$(document).ready(function () {



});

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