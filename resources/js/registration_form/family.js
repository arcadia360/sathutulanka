$(function() {

    FillFamilyData();

    function FillFamilyData() {

      ajaxCall('registration/getMemberData', model, function(response) {
        if (response.intFamilyLocationID != null) {
          $("#district").val(response.intFamilyLocationID);
          var FamilyType = (response.vcFamilyType);
          if (FamilyType == "Join") {
            $("#familyTypeJoin").prop("checked", true);
          } else if (FamilyType == "Not join") {
            $("#familyTypeNotJoin").prop("checked", true);
          }
          var FamilyValues = (response.vcFamilyValues);
          if (FamilyValues == "Traditional") {
            $("#Traditional").prop("checked", true);
          } else if (FamilyType == "Mix of Traditional and Modern") {
            $("#TraditionalAndModern").prop("checked", true);
          }
          $("#Family-Class").val(response.vcFamilyClass);
          var FamilyCulture = (response.vcFamilyCulture);
          if (FamilyCulture == "Urban") {
            $("#Culture1").prop("checked", true);
          } else if (FamilyCulture == "Sub Urban") {
            $("#Culture2").prop("checked", true);
          } else if (FamilyCulture == "Rural") {
            $("#Culture3").prop("checked", true);
          }
          $("#Father-Status").val(response.vcFatherStatus);
          $("#Mother-Status").val(response.vcMotherStatus);
          $("#Add-Family-Details").val(response.vcFamilyDetails);

        }
      });
    } 

    $('#btnSubmit').click(function() {
      let isFamilyTypeSelected = $("input[name=Family-Type]").is(":checked");
      let isFamilyValuesSelected = $("input[name=Family-Values]").is(":checked");
      let isFamilyCultureSelected = $("input[name=Family-Culture]").is(":checked");

      if ($('#district').val() == 0) {
        toastr["error"]("Please select district !");
        $("#district").focus();
      } else if (!isFamilyTypeSelected) {
        toastr["error"]("Please select family type !");
      } else if (!isFamilyValuesSelected) {
        toastr["error"]("Please select family values !");
      } else if ($('#Family-Class').val() == 0) {
        toastr["error"]("Please select family class !");
        $("#Family-Class").focus();
      } else if (!isFamilyCultureSelected) {
        toastr["error"]("Please select family culture !");
      } else if ($('#Father-Status').val() == 0) {
        toastr["error"]("Please select father status !");
        $("#Father-Status").focus();
      } else if ($('#Mother-Status').val() == 0) {
        toastr["error"]("Please select mother status !");
        $("#mother-Status").focus();
      } else if ($('#Add-Family-Details').val() == "") {
        toastr["error"]("Please add family details !");
        $("#Add-Family-Details").focus();
      } else {
        var form = $("#addFamilyDetails");
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
                title: 'Family details saved successfully!',
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

    loadDistricts();
    $('#btnBack').click(function() {
      window.location.href = navigateBack;
    });

    function loadDistricts() {
      $.ajax({
        type: 'ajax',
        url:loadDistrictUrl,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') ?>");
          } else {
            $('#district').html(data);;
            $('#district').val(0);
          }
        },
        error: function() {
          toastr["error"]("<?= lang('district') . ' ' . lang('dataCannotRetrieve') . ' Connection Err' ?>");
        }
      });
    }
  
      // $('[data-toggle="popover"]').popover({
      //   container: 'body'
      // });
  });

  $('[data-toggle="popover"]').popover({
    trigger: 'focus'
  });

$('[data-toggle="popover"]').on('click', function(e) {
    e.preventDefault();
    return true;
});