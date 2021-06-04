<div class="offset-lg-3 col-lg-6 main-section">
  <h3 class="text-center text-inverse title">My Photos And Videos</h3>
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
          <button type="button" id="btnUpload" class="btn btn-success">Upload Image</button>
        </div>
      </div>
    </div>

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
  </form>
</div>

<script>
  $(function() {
    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/horoscope') ?>";
    });
    $('#btnSubmit').click(function() {
      window.location.href = "<?php echo base_url('Registration/AboutYourselfAndPartner') ?>";
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
        success: function(data) {
          viewUploadImages();
          Swal.fire({
            icon: 'success',
            title: 'image uploaded successfully !',
            showConfirmButton: false,
            timer: 2000
          }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
              // window.location.href = "<?= base_url('Registration/education') ?>";

            }
          })
        },
        error: function() {
          alert('internal error failed to uploaded image');
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
          alert('internal error failed to view uploaded images');
        }
      });
    }



  });
</script>