function RemoveImage(e) {
    let imgID = e;
    Swal.fire({
      title: 'Are you sure?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, remove this!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: 'ajax',
          url: removeImageUrl,
          async: false,
          dataType: 'json',
          method: 'post',
          data: {
            'imgID': imgID
          },
          success: function(data) {
            toastr["success"]("Image renoved!");
            location.reload();
          },
          error: function() {
            toastr["error"]("Internal error failed to save profile picture");
          }
        });
      }
    })
  }

  $(function() {

    viewUploadImages();
    $('#btnBack').click(function() {
      window.location.href = navigateBack;
    });


    $('#btnSubmit').click(function() {

      var isMyPhotosSelected = $("input[name=MyPhotos]").is(":checked");
      let imgID = $('input[name="MyPhotos"]:checked').val();


      if (!isMyPhotosSelected) {
        toastr["error"]("Please select profile picture");
      } else {
        $("#btnSubmitLoading").addClass("fa fa-spinner fa-spin");
        $("#btnSubmit").attr("disabled","disabled");
        $.ajax({
          type: 'post',
          url: submitUrl,
          async: false,
          dataType: 'json',
          method: 'post',
          data: {
            'imgID': imgID
          },
          success: function(data) {
            if (data.status) {
              Swal.fire({
                icon: 'success',
                title: data.message,
                showConfirmButton: false,
                timer: 2000
              }).then((result) => {
                $("body").hide();
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = navigateTo;
                }
              })

            } else {
              toastr["error"](data.message);
            }
          },
          error: function() {
            toastr["error"]("Internal error failed to save images");
          }
        });
        $("#btnSubmit").attr("disabled","enabled");
      }
    });

    // upload and save image
    $('#addMyPhotos').submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: uploadImageUrl,
        type: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (data.success) {
            viewUploadImages();
            Swal.fire({
              icon: 'success',
              title: data.message,
              showConfirmButton: false,
              timer: 2000
            }).then((result) => {
              if (result.dismiss === Swal.DismissReason.timer) {
                // window.location.href = "<?= base_url('Registration/education') ?>";
              }
            })
          } else {
            toastr["error"]("failed to save images");
          }
        },
        error: function() {
          toastr["error"]('internal error failed to uploaded image');
        }
      });
    });

    function viewUploadImages() {
      $.ajax({
        type: 'ajax',
        url: viewUploadImageUrl,
        async: false,
        dataType: 'json',
        success: function(data) {
          if (!data) {
            toastr["error"]("failed to view uploaded images");
          } else {
            $('#loadimgdiv').html(data);;
          }
        },
        error: function() {
          // alert('internal error failed to view uploaded images');
        }
      });
    }
  });