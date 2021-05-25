<div class="btnbg" style="padding-top: 10px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <h3 class="text-center text-inverse title">My Photos And Videos</h3>
        <hr>
        <p class="lead">Photos & videos are the key to best responses every time. Your photos & video will appear after the inspection of our officer. 100% privacy controls available.</p>

        <form method="post" action="<?= base_url('Registration/addWhoAmIDetails') ?>" id="addMyPhotos">
          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="form-group">
                <input type="file" id="file1" name="file1" class="form-control" required>
              </div>
            </div>
            <div class="col-lg-6 col-12 ">
              <div class="form-group text-al-center">
                <button type="submit" class="btn btn-success">Upload Image</button>
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
            <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
              <button class="btn btn-info" style="width: 150px;" id="btnBack" type="button">Back</button>
            </div>
            <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
              <button class="btn btn-info" style="width: 150px;" type="button" id="btnSubmit">CONTINUE</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
  $(function() {
    viewUploadImages();
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
          Swal.fire({
            icon: 'success',
            title: 'image uploaded successfully!',
            showConfirmButton: false,
            timer: 2000
          }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
              // window.location.href = "<?= base_url('Registration/education') ?>";

            }
          })
        },
        error: function() {
          alert('internal error failed to view uploaded images');
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