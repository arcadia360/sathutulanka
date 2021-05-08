<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 100px;">
  <!-- Container Area Start -->
  <div class="container" style="z-index: 1;">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
        <!-- <h3 class="text-center text-inverse font-weight-bold"><?= lang('residance') ?></h3> -->
        <h3 class="text-center text-inverse title">Family</h3>
        <hr>
        <!-- <form class="container" id="needs-validation" novalidate> -->

        <form class="form-horizontal" id="submit1" novalidate>
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Family Location</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">
                  <!-- <option value="0"><?= lang('select') ?></option>
                    <option value="">Select 1</option>
                    <option value="">Select 2</option> -->
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Photos of assets, home and family members</label>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#familyPhoto">
                Upload <i class="fas fa-upload"></i>
              </button>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Type</label>
              <div class="row">
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="LiveInSriLanka" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Join</span>
                  </label>
                </div>
                <div class="col-6">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Not join</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Values</label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInSriLanka" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Traditional</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Mix of Traditional and Modern</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Modern</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Family Class</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="719">Affluent</option>
                  <option value="720">Upper Middle Class</option>
                  <option value="721">Middle Class</option>
                  <option value="722">Lower Middle Class</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
              <label class="text-inverse font-weight-bold" for="validationCustom01">Family Culture</label>
              <div class="row">
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInSriLanka" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Urban</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Sub Urban</span>
                  </label>
                </div>
                <div class="col-4">
                  <label class="custom-control custom-radio">
                    <input id="LiveInOverSeas" name="liveIn" type="radio" class="custom-control-input" value="">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Rural</span>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Father Status</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="726" selected="">Employed</option>
                  <option value="727">Business</option>
                  <option value="728">Retired</option>
                  <option value="729">Not Employed</option>
                  <option value="730">Passed away</option>
                  <option value="731">Seperated</option>
                  <option value="732">Sick</option>
                  <option value="733">Mentioned in the writing box (Below)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Mother Status</label>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <select class="custom-select d-block form-control" id="district" name="district">
                  <option value="0"><?= lang('select') ?></option>
                  <option value="726" selected="">Employed</option>
                  <option value="727">Business</option>
                  <option value="728">Retired</option>
                  <option value="729">Not Employed</option>
                  <option value="730">Passed away</option>
                  <option value="731">Seperated</option>
                  <option value="732">Sick</option>
                  <option value="733">Mentioned in the writing box (Below)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <!-- <label class="text-inverse font-weight-bold" for="validationCustom01"><?= lang('liveInSriLanka') ?></label> -->
                <label class="text-inverse font-weight-bold" for="validationCustom01">Add Family Details</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
              </div>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
              <button class="btn btn-info" style="width: 150px;" id="btnBack" type="button">BACK</button>
            </div>
            <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
              <button class="btn btn-info" style="width: 150px;" type="submit" id="btnSubmit">CONTINUE</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Container Area End -->
  <!-- Modal -->
  <div class="modal fade" id="familyPhoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Images</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" id="submit">
          <div class="modal-body">
            <div class="col-12">
              <div class="form-group">
                <!-- Image tages for show 5 selecting images  -->
                <table>
                  <tr>
                    <td><img class="img-thumbnail imgUpload" src="" alt="" id="img1"></td>
                    <td>
                      <div class="form-group">
                        <label class="custom-file">
                          <input type="file" id="file1" name="file1" class="form-control custom-file-input" required>
                          <span class="custom-file-control"></span>
                          <div class="invalid-feedback">
                            Please selected any File.
                          </div>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="img-thumbnail imgUpload" src="" alt="" id="img2"></td>
                    <td>
                      <div class="form-group">
                        <label class="custom-file">
                          <input type="file" id="file2" name="file2" class="form-control custom-file-input" required>
                          <span class="custom-file-control"></span>
                          <div class="invalid-feedback">
                            Please selected any File.
                          </div>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="img-thumbnail imgUpload" src="" alt="" id="img3"></td>
                    <td>
                      <div class="form-group">
                        <label class="custom-file">
                          <input type="file" id="file3" name="file3" class="form-control custom-file-input" required>
                          <span class="custom-file-control"></span>
                          <div class="invalid-feedback">
                            Please selected any File.
                          </div>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="img-thumbnail imgUpload" src="" alt="" id="img4"></td>
                    <td>
                      <div class="form-group">
                        <label class="custom-file">
                          <input type="file" id="file4" name="file4" class="form-control custom-file-input" required>
                          <span class="custom-file-control"></span>
                          <div class="invalid-feedback">
                            Please selected any File.
                          </div>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><img class="img-thumbnail imgUpload" src="" alt="" id="img5"></td>
                    <td>
                      <div class="form-group">
                        <label class="custom-file">
                          <input type="file" id="file5" name="file5" class="form-control custom-file-input" required>
                          <span class="custom-file-control"></span>
                          <div class="invalid-feedback">
                            Please selected any File.
                          </div>
                        </label>
                      </div>
                    </td>
                  </tr>
                </table>

              </div>
            </div>

          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <button class="btn btn-success" id="btn_upload" type="Btnsubmit">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal End -->

</div>

<script>
  $(function() {

    loadDistricts();
    $('#btnBack').click(function() {
      window.location.href = "<?php echo base_url('Registration/personalAssets') ?>";
    });

    // $('#btnSubmit').click(function() {
    //   window.location.href = "<?php echo base_url('Registration/afterMarriage') ?>";
    // });

    $('#submit').submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: '<?php echo base_url(); ?>Registration/imageUpload',
        type: "post",
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        success: function(data) {
          alert(data);
        }
      });
    });


    function loadDistricts() {
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url(); ?>Registration/loadDistricts',
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

    // image select and view
    $(".imgUpload").hide();

    $("#file1").change(function(e) {
      $('#img1').removeAttr("src");
      $('#img1').hide();
      for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        var file = e.originalEvent.srcElement.files[i];
        var reader = new FileReader();
        reader.onloadend = function() {
          $('#img1').attr("src", reader.result);
          $('#img1').show();
        }
        reader.readAsDataURL(file);
      }
    });

    $("#file2").change(function(e) {
      $('#img2').removeAttr("src");
      $('#img2').hide();
      for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        var file = e.originalEvent.srcElement.files[i];
        var reader = new FileReader();
        reader.onloadend = function() {
          $('#img2').attr("src", reader.result);
          $('#img2').show();
        }
        reader.readAsDataURL(file);
      }
    });

    $("#file3").change(function(e) {
      $('#img3').removeAttr("src");
      $('#img3').hide();
      for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        var file = e.originalEvent.srcElement.files[i];
        var reader = new FileReader();
        reader.onloadend = function() {
          $('#img3').attr("src", reader.result);
          $('#img3').show();
        }
        reader.readAsDataURL(file);
      }
    });

    $("#file4").change(function(e) {
      $('#img4').removeAttr("src");
      $('#img4').hide();
      for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        var file = e.originalEvent.srcElement.files[i];
        var reader = new FileReader();
        reader.onloadend = function() {
          $('#img4').attr("src", reader.result);
          $('#img4').show();
        }
        reader.readAsDataURL(file);
      }
    });

    $("#file5").change(function(e) {
      $('#img5').removeAttr("src");
      $('#img5').hide();
      for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        var file = e.originalEvent.srcElement.files[i];
        var reader = new FileReader();
        reader.onloadend = function() {
          $('#img5').attr("src", reader.result);
          $('#img5').show();
        }
        reader.readAsDataURL(file);
      }
    });
    // end image select and view

  });
</script>