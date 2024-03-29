  <!-- Navbar CSS -->
  <link rel="stylesheet" href="<?= base_url('resources/css/contact_us.css') ?>">

  <div class="container-contact100">
      <div class="wrap-contact100">
          <form class="contact100-form validate-form">
              <span class="contact100-form-title">
                  Send Us A Message
              </span>

              <label class="label-input100" for="first-name">Tell us your name *</label>
              <div class="wrap-input100 validate-input" data-validate="Type name">
                  <input id="first-name" class="input100" type="text" name="first-name" placeholder="Name">
                  <span class="focus-input100"></span>
              </div>
              <!-- <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                  <input class="input100" type="text" name="last-name" placeholder="Last name">
                  <span class="focus-input100"></span> 
              </div> -->

              <label class="label-input100" for="email">Enter your email *</label>
              <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                  <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                  <span class="focus-input100"></span>
              </div>

              <label class="label-input100" for="phone">Enter phone number</label>
              <div class="wrap-input100">
                  <input id="phone" pattern="[0-9]*" inputmode="numeric" class="input100" type="text" name="phone" placeholder="Eg. 07xxxxxxxx">
                  <span class="focus-input100"></span>
              </div>

              <label class="label-input100" for="message">Message *</label>
              <div class="wrap-input100 validate-input" data-validate="Message is required">
                  <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                  <span class="focus-input100"></span>
              </div>

              <div class="container-contact100-form-btn">
                  <button class="contact100-form-btn">
                      Send Message
                  </button>
              </div>
          </form>

          <div class="contact100-more flex-col-c-m" style="background-image: url('<?= base_url("resources/images/create_account_wedding_couple.jpg") ?>'); background-position: left">
              <div class="flex-w size1 p-b-47">
                  <div class="txt1 p-r-25">
                      <!-- <span class="lnr lnr-map-marker"></span> -->
                      <i class="fas fa-map-marker-alt"></i>
                  </div>

                  <div class="flex-col size2">
                      <span class="txt1 p-b-20">
                          Address
                      </span>

                      <span class="txt3">
                          Panaduara, Sri Lanka
                      </span>
                  </div>
              </div>

              <div class="dis-flex size1 p-b-47">
                  <div class="txt1 p-r-25">
                      <!-- <span class="lnr lnr-phone-handset"></span> -->
                      <i class="fas fa-phone-alt"></i>
                  </div>

                  <div class="flex-col size2">
                      <span class="txt1 p-b-20">
                          Lets Talk
                      </span>

                      <span class="txt3">
                          +94 115 735 736
                      </span>
                      <span class="txt3">
                          +94 777 292 932
                      </span>
                      <span class="txt3">
                          +94 723 929 292
                      </span>
                  </div>
              </div>

              <div class="dis-flex size1 p-b-47">
                  <div class="txt1 p-r-25">
                      <!-- <span class="lnr lnr-envelope"></span> -->
                      <i class="fas fa-envelope"></i>
                  </div>

                  <div class="flex-col size2">
                      <span class="txt1 p-b-20">
                          General Support
                      </span>

                      <span class="txt3">
                          sathutulanka@gmail.com
                      </span>
                  </div>
              </div>

              <div class="">
                  <a href="#" style="background-color: #2196f3; padding: 5px 15px 5px 15px !important; color: #FFFFFF;"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://wa.me/+94777292932" target="new" style="background-color: #4caf50; padding: 5px 12px 5px 12px !important; color: #FFFFFF;"><i class="fab fa-whatsapp"></i></a>
                  <!-- <a href="tel:0115735736"><i class="fas fa-phone-alt"></i></a> -->
              </div>
          </div>
      </div>
  </div>