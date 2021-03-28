<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 30px;">
    <!-- Container Area Start -->
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
                <h3 class="text-center text-inverse"><?= lang('lifeStyle') ?></h3>
                <hr>




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

    <!-- Container Area End -->

</div>
<script>
    $(function() {

        $('#btnBack').click(function() {
            window.location.href = "<?php echo base_url('Registration/background') ?>";
        });

        $('#btnSubmit').click(function() {
            window.location.href = "<?php echo base_url('Registration/lifeStyle') ?>";
        });

    });
</script>