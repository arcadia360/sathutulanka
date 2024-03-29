		<footer class="footer-distributed">

			<!-- <div class="footer-right">

				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="https://wa.me/+94777292932" target="new"><i class="fab fa-whatsapp"></i></a>
				<a href="tel:0115735736"><i class="fas fa-phone-alt"></i></a>

			</div> -->

			<div class="footer-left">

				<p class="footer-links">

					<a href="#" style="text-transform: uppercase;"><?= lang('help_support'); ?></a>

					<a href="#" style="text-transform: uppercase;"><?= lang('about_us'); ?></a>

					<a href="<?= base_url("Welcome/ContactUs") ?>" style="text-transform: uppercase;"><?= lang('contact_us'); ?></a>
				</p>
				<div class="col-md-12 px-0 pt-2 pb-3">
					<img src="<?= base_url("resources/images/sathutu-lanka-footer-logo.png") ?>" width="180px" alt="">
					<span class="">&nbsp; <?= lang('footer_title'); ?></span>
				</div>
				<p>Sathutulanka.lk &copy; 2021</p>
			</div>

		</footer>

		</body>
		<!-- Sweet Alert 2 -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


		<!-- UiKit JS -->
		<script src='https://getuikit.com/assets/uikit/dist/js/uikit.js?nc=868'></script>
		<script src='https://getuikit.com/assets/uikit/dist/js/uikit-icons.js?nc=868'></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Bootstrap 4.0 JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<!-- Toaster JS -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
		<!-- Swiper JS -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
		<script src='<?= base_url('resources/js/swiper_script.js') ?>'></script>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<script>
			AOS.init({
				easing: 'ease-in-out-sine'
			});

			toastr.options = {
				"closeButton": false,
				"debug": false,
				"newestOnTop": false,
				"progressBar": false,
				"positionClass": "toast-top-right",
				"preventDuplicates": false,
				"onclick": null,
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "500000",
				"extendedTimeOut": "1000",
				"showEasing": "swing",
				"hideEasing": "linear",
				"showMethod": "fadeIn",
				"hideMethod": "fadeOut"
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				// alert("dd");
				<?php if ($this->session->flashdata('errors')) { ?>
					toastr["error"]("<?= $this->session->flashdata('errors') ?>");
					// alert("Please fill in all fields !"); 
				<?php
				} ?>
				// toastr["error"]("Please fill in all fields !");
			});
		</script>


		<script>
			// $(document).ready(function() {

			//     var span = document.getElementsByClassName("closeViewer")[0];

			//     span.onclick = function() {
			//         modal.style.display = "none";
			//     }
			// });
			// var modal = document.getElementById("myModal");

			// var img = document.getElementById("myImg");
			// var modalImg = document.getElementById("img01");
			// // var captionText = document.getElementById("caption");

			// img.onclick = function() {
			//     modal.style.display = "block";
			//     modalImg.src = this.src;
			//     // captionText.innerHTML = this.alt;
			// }
		</script>


		</html>