$(function() {

    ajaxCall('registration/getMemberData', model, function(response) {
      if (response.intMotherTongueID != null) {
        $("#motherTongue").val(response.intMotherTongueID);
        $("#ethnicity").val(response.intEthnicityID);
        $('#religion').val(response.intReligionID);
        $("#caste").val(response.intCasteID);
        $('#caste').trigger('change');
        $('#subCaste').val(response.intSubCasteId);
        $('#subCaste').trigger('change');
        isPoliceReportCanProvide = (response.isPoliceReportCanProvide);
        if (isPoliceReportCanProvide == 1) {
          document.getElementById("policeReport1").checked = true;
        } else {
          document.getElementById("policeReport2").checked = true;
        }
      }


    });



    loadCaste();
    $('#btnSubmit').click(function() {
      var policeReport = $("input[name=policeReport]").is(":checked");
      if ($('#motherTongue').val() == 0) {
        toastr["error"]("Please select mother tounge !");
        $("#motherTongue").focus();
      } else if ($('#ethnicity').val() == 0) {
        toastr["error"]("Please select ethnicity !");
        $("#ethnicity").focus();
      } else if ($('#religion').val() == 0) {
        toastr["error"]("Please select religion !");
        $("#religion").focus();
      } else if ($('#caste').val() == 0) {
        toastr["error"]("Please select caste !");
        $("#caste").focus();
      } else if (($('#caste').val() != 0 && $('#caste').val() != 2 && $('#caste').val() != 1) && $('#subCaste').val() == 0) {
        toastr["error"]("Please select sub caste !");
        $("#subCaste").focus();
      } else if (!policeReport) {
        toastr["error"]("Please select police report !");
      } else {
        var form = $("#addBackgroundDetails");
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
                title: 'Background details saved successfully!',
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
      }
    });

    function loadCaste() {
      $.ajax({
        type: 'ajax',
        url: loadCasteUrl,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= 'Caste ' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#caste').html(data);;
            $('#caste').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= 'Caste ' . lang('dataCannotRetrieve') . ' Connection error' ?>");
        }
      });
    }

    //load sub caste 
    $('#caste').change(function() {
      if (($('#caste').val() != 0 && $('#caste').val() != 1 && $('#caste').val() != 2 && $('#caste').val() != 3)) {
        var casteID = $('#caste').val()
        $.ajax({
          type: 'POST',
          url: loadSubCasteUrl,
          async: false,
          dataType: 'json',
          data: {
            'casteID': casteID
          },
          success: function(data) {
            if (!data) {
              toastr["error"]("<?= 'Caste ' . lang('dataCannotRetrieve') ?>");
            } else {
              $('#subCaste').html(data);;
              $('#subCaste').val(0);
              $('#sub-caste-div').show();
            }
          },
          error: function() {
            toastr["error"]("internal error Failed to load sub caste selection data");
          }
        });
      } else {
        $('#sub-caste-div').hide();
        $('#subCaste').val(0);
      }
    });

    $('#sub-caste-div').hide();

    $('#btnBack').click(function() {
      window.location.href = navigateBack;
    });
  });