  <!-- UiKit CSS -->
  <link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=868'>
  <!-- singles.css -->
  <link rel='stylesheet' href='<?= base_url("resources/css/singles.css") ?>'>

  <style>
      /*Profile Card 5*/
  </style>


  <div class="container">
<!--   
  <?php 
  $path = base_url('application/views/partials/singlesNavbar.php');

//   /Applications/XAMPP/xamppfiles/htdocs/Arcadia360/sathutulanka/application/views/partials

//   echo $path;
//   echo "//////";
//   echo $_SERVER['DOCUMENT_ROOT'] . '/Arcadia360/sathutulanka/application/views/partials/singlesNavbar.php';
//   include($_SERVER['DOCUMENT_ROOT'] . '/Arcadia360/sathutulanka/application/views/partials/singlesNavbar.php'); 
  
  ?> -->
      <div class="row d-xs-block d-lg-none">
          <ul uk-accordion class="col-12 p-3 m-0">
              <li>
                  <a class="uk-accordion-title" href="#">All Singles</a>
                  <div class="uk-accordion-content">
                      <button type="button" class="btn btn-sm btn-light col-12">My Matches <span class="float-right uk-badge"><?= count($myMatchesCount)  ?></span></button>
                      <button type="button" class="btn btn-sm btn-light col-12">Accepted Members <span class="float-right uk-badge">10</span></button>
                      <button type="button" class="btn btn-sm btn-light col-12">New Matches <span class="float-right uk-badge">1</span></button>
                      <button type="button" class="btn btn-sm btn-light col-12">My Favourites <span class="float-right uk-badge">1</span></button>
                      <button type="button" class="btn btn-sm btn-light col-12">Members Intrusted In Me <span class="float-right uk-badge">1</span></button>
                      <button type="button" class="btn btn-sm btn-light col-12">Visited Profiles <span class="float-right uk-badge">1</span></button>
                      <button type="button" class="btn btn-sm btn-light col-12">Blocked Profiles <span class="float-right uk-badge">1</span></button>
                  </div>
              </li>
          </ul>
      </div>
      <div class="d-none d-lg-block mt-5">
          <div class="row">
              <button class="btn btn-sm btn-light col-md-3 col-12 active">All Singles <span class="float-right uk-badge"><?= $allSinglesCount['AllSinglesCount'] ?></span></button>
              <button class="btn btn-sm btn-light col-md-3 col-12">My Matches <span class="float-right uk-badge"><?= count($myMatchesCount)  ?></span></button>
              <button type="button" class="btn btn-sm btn-light col-md-3 col-12">Accepted Members <span class="float-right uk-badge">10</span></button>
              <button type="button" class="btn btn-sm btn-light col-md-3 col-12">New Matches <span class="float-right uk-badge">1</span></button>
              <button type="button" class="btn btn-sm btn-light col-md-3 col-12">My Favourites <span class="float-right uk-badge">1</span></button>
              <button type="button" class="btn btn-sm btn-light col-md-3 col-12">Members Intrusted In Me <span class="float-right uk-badge">1</span></button>
              <button type="button" class="btn btn-sm btn-light col-md-3 col-12">Visited Profiles <span class="float-right uk-badge">1</span></button>
              <button type="button" class="btn btn-sm btn-light col-md-3 col-12">Blocked Profiles <span class="float-right uk-badge">1</span></button>
          </div>
      </div>

      <div class="row">
          <div class="col-12 mt-lg-5">
              <div class="col-md-6 offset-md-3 input-group mb-3 container-search">
                  <input type="text" class="form-control txt-search" placeholder="Partner Nick Name or Profile ID" style="outline: none !important;">
                  <div class="input-group-append">
                      <button class="btn btn-outline-secondary btn-search" type="button">Search</button>
                  </div>
              </div>
              <a class="float-right btn-advance-search" href="#modal-full" uk-toggle>Advance Search <i class="fas fa-search"></i></a>
          </div>
          <div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
              <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
                  <button class="uk-modal-close-full" type="button" uk-close></button>
                  <form class="uk-search uk-search-large">
                      <button class="btn">okds</button>
                      <input class="uk-search-input uk-text-center" type="search" placeholder="Search With Member No" autofocus>
                  </form>
              </div>
          </div>
      </div>
      <div class="row" id="mini-profile-area">
          <!-- 
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <button class="profile-heart like"><i class="fas fa-heart"></i></button>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <p class="premium_badge"><i class="fas fa-crown"></i> PREMIUM</p>
                          <p class="photo-count"><i class="fas fa-camera"></i> 5</p>
                          <img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-5.jpg" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">98%</p>
                                  <p class="text-left">For me</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">91%</p>
                                  <p class="text-right">For him</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Supun Ariyarathna</h5>
                          <h6 class="col-12 card-designation">Software Engineer</h6>
                          <p class="badge-label"><span class="badge badge-trustVerified">Trust Verified</span></p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div> -->

          <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <a href="" class="profile-heart like"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <p class="premium_badge"><i class="fas fa-crown"></i> PREMIUM</p>
                          <p class="photo-count"><i class="fas fa-camera"></i> 5</p>
                          <img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-5.jpg" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">98%</p>
                                  <p class="text-left">For me</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">91%</p>
                                  <p class="text-right">For him</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Supun Ariyarathna</h5>
                          <h6 class="col-12 card-designation">Software Engineer</h6>
                          <p class="badge-label"><span class="badge badge-trustVerified">Trust Verified</span></p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div>


          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <a href="" class="profile-heart"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <img src="https://www.gazabnews.com/wp-content/uploads/2017/06/Cute-Stylish-Girl-DP-1.jpg" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">96%</p>
                                  <p class="text-left">For me</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">89%</p>
                                  <p class="text-right">For her</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Mishel</h5>
                          <h6 class="col-12 card-designation">No Job</h6>
                          <p class="badge-label"><span class="badge badge-trustVerified">Trust Verified</span></p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div>


          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <a href="" class="profile-heart"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <img src="https://mensline.org.au/wp-content/uploads/2021/02/How-to-deal-with-disappointment-tile.jpg" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">96%</p>
                                  <p class="text-left">You have him</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">89%</p>
                                  <p class="text-right">To him you</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Samson</h5>
                          <h6 class="col-12 card-designation">Farmer</h6>
                          <p class="badge-label"><span class="badge badge-trustProving">Trust Proving</span></p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div>


          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <a href="" class="profile-heart"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <img src="https://wallpapercave.com/wp/wp5047302.jpg" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">96%</p>
                                  <p class="text-left">You have him</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">89%</p>
                                  <p class="text-right">To him you</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Dinusha Wijeweera</h5>
                          <h6 class="col-12 card-designation">Undergraduate</h6>
                          <p class="badge-label">
                              <span class="badge badge-notTrustVerified">Not Trust Verified</span>
                          </p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <a href="" class="profile-heart"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Jill_Biden_portrait_%28cropped%29.jpg" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">96%</p>
                                  <p class="text-left">You have him</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">89%</p>
                                  <p class="text-right">To him you</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Rosi Senanayake</h5>
                          <h6 class="col-12 card-designation">Accountant</h6>
                          <p class="badge-label"><span class="badge badge-notTrustVerified">Not Trust Verified</span></p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <a href="" class="profile-heart"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <img src="https://i.pinimg.com/280x280_RS/60/41/61/604161662f0a9a0125102833b2798677.jpg" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">96%</p>
                                  <p class="text-left">You have him</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">89%</p>
                                  <p class="text-right">To him you</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Pasan</h5>
                          <h6 class="col-12 card-designation">Businessman</h6>
                          <p class="badge-label"><span class="badge badge-notTrustVerified">Not Trust Verified</span></p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <a href="" class="profile-heart"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <img src="https://images.pexels.com/photos/1580271/pexels-photo-1580271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">96%</p>
                                  <p class="text-left">For me</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">89%</p>
                                  <p class="text-right">For her</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Malki</h5>
                          <h6 class="col-12 card-designation">Teacher</h6>
                          <p class="badge-label"><span class="badge badge-notTrustVerified">Not Trust Verified</span></p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="card profile-card">
                  <div class="row">
                      <a href="" class="profile-heart"><i class="fas fa-heart"></i></a>
                  </div>
                  <div class="overlay">
                      <div class="card-img-block">
                          <img src="https://images.unsplash.com/photo-1482361046637-0226fdcfa3b7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bGFkeXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" />
                      </div>
                      <div class="card-body pt-0">
                          <div class="row percentage-row">
                              <div class="col-6 card-percentage">
                                  <p class="percentage-left">96%</p>
                                  <p class="text-left">You have him</p>
                              </div>
                              <div class="col-6 card-percentage">
                                  <p class="percentage-right">89%</p>
                                  <p class="text-right">To him you</p>
                              </div>
                          </div>
                          <h5 class="col-12 card-title">Malsha</h5>
                          <h6 class="col-12 card-designation">Beautician</h6>
                          <p class="badge-label"><span class="badge badge-notTrustVerified">Not Trust Verified</span></p>
                          <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                      </div>
                      <a href="#" class="btn btn-primary">Check Match</a>
                  </div>
              </div>
          </div> -->

      </div>
  </div>

  <script src="<?= base_url("resources/js/pageJS/all_singles.js") ?>"></script>