<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">My Photos</h3>
  <p>Photos & videos are the key to best responses every time. Your photos & video will appear after the inspection of our officer. 100% privacy controls available.</p>

  <form method="post" action="<?= base_url('Registration/addWhoAmIDetails') ?>" id="addMyPhotos">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="form-group">
          <input type="file" id="file1" name="file1" class="form-control" required>
        </div>
      </div>
      <div class="col-lg-6 col-12 ">
        <div class="form-group text-al-center">
          <button type="submit" id="btnUpload" class="btn btn-success">Upload Image</button>
        </div>
      </div>
    </div>
  </form>

  <table class="table">
    <tr style="text-align: center;">
    </tr>
    <tbody id="loadimgtable" style="text-align: center;">

    </tbody>
  </table>

  <div class="row" id="loadimgdiv">

  </div>

  <hr>
  <div class="row">
    <div class="col-12">
      <button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
      <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i></button>
    </div>
  </div>

</div>

<script>
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
          url: '<?php echo base_url(); ?>Registration/removeImage',
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
      window.location.href = "<?php echo base_url('Registration/horoscope') ?>";
    });


    $('#btnSubmit').click(function() {

      var isMyPhotosSelected = $("input[name=MyPhotos]").is(":checked");
      let imgID = $('input[name="MyPhotos"]:checked').val();


      if (!isMyPhotosSelected) {
        toastr["error"]("Please select profile picture");
      } else {
        $.ajax({
          type: 'post',
          url: '<?php echo base_url(); ?>Registration/saveProfilePicture',
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
                if (result.dismiss === Swal.DismissReason.timer) {
                  window.location.href = "<?php echo base_url('Registration/AboutYourselfAndPartner') ?>";
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
      }
    });

    // upload and save image
    $('#addMyPhotos').submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?php echo base_url(); ?>Registration/UploadMyPhotos',
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
        url: '<?php echo base_url(); ?>Registration/LoadUploadedImages',
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
</script>