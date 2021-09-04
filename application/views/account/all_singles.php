  <!-- UiKit CSS -->
  <link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=868'>
  <!-- singles.css -->
  <link rel='stylesheet' href='<?= base_url("resources/css/singles.css") ?>'>
  <!-- Preloader CSS -->
  <link rel='stylesheet' href='<?= base_url("resources/css/preloader.css") ?>'>

  <style>
      /*Profile Card 5*/
  </style>

  <div class="pt-3 pb-3 main-container">
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

          <!-- <div class="row d-xs-block d-lg-none">
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
      </div> -->
          <div class="member-menubar mb-2">
              <div class="member-menubar-row">
                  <a href="<?= base_url('Account/AllSingles') ?>" class="btn btn-sm btn-light col-md-3 pt-2 pb-2 active" id="btnAllSingles">All Singles <span class="float-right uk-badge"><?= $allSinglesCount['AllSinglesCount'] ?></span></a>
                  <a class="btn btn-sm btn-light col-md-3 pt-2 pb-2" id="btnMyMatches">My Matches <span class="float-right uk-badge"><?= count($myMatchesCount)  ?></span></a>
                  <a class="btn btn-sm btn-light col-md-3 pt-2 pb-2">Accepted Members <span class="float-right uk-badge">10</span></a>
                  <a class="btn btn-sm btn-light col-md-3 pt-2 pb-2">New Matches <span class="float-right uk-badge">1</span></a>
                  <a href="<?= base_url('Account/myFavourites') ?>" class="btn btn-sm btn-light col-md-3 pt-2 pb-2">My Favourites <span class="float-right uk-badge">1</span></a>
                  <a class="btn btn-sm btn-light col-md-3 pt-2 pb-2">Members Intrusted In Me <span class="float-right uk-badge">1</span></a>
                  <a href="<?= base_url('Account/VisitedProfiles') ?>" class="btn btn-sm btn-light col-md-3 pt-2 pb-2">Visited Profiles <span class="float-right uk-badge"><?= $visitedProfileCountCount ?></span></a>
                  <a class="btn btn-sm btn-light col-md-3 pt-2 pb-2">Blocked Profiles <span class="float-right uk-badge">1</span></a>
              </div>
          </div>


          <!-- <div class="row">
          <div class="col-12 mt-lg-5">
              <div class="col-md-6 offset-md-3 input-group mb-3 container-search">
                  <input type="text" class="form-control txt-search" placeholder="Partner Nick Name or Profile ID" style="outline: none !important;">
                  <div class="input-group-append">
                      <button class="btn btn-outline-secondary btn-search" type="button">Search</button>
                  </div>
              </div>
              <a class="float-right btn-advance-search" href="#modal-full" uk-toggle>Advance Search <i class="fas fa-search"></i></a>
          </div>
          <div id="modal-full" class="uk-modal-full uk-modal" uk-modal style="margin-top: 66px; height: 100vh;">
              <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
                  <button class="uk-modal-close-full" type="button" uk-close></button>
                  <form class="uk-search uk-search-large">
                      <input class="uk-search-input uk-text-center" type="search" placeholder="Search With Member No" autofocus>
                  </form>
              </div>
          </div>
      </div> -->

          <!-- <?php
                $attributes = array('role' => 'form', 'id' => 'loginForm');
                echo form_open('', $attributes);
                ?>
                <?= form_close(); ?> -->

          <div class="row" id="mini-profile-area">


              <div class="flex-container">
                  <div class="unit">
                      <div class="heart">
                          <div class="heart-piece-0"></div>
                          <div class="heart-piece-1"></div>
                          <div class="heart-piece-2"></div>
                          <div class="heart-piece-3"></div>
                          <div class="heart-piece-4"></div>
                          <div class="heart-piece-5"></div>
                          <div class="heart-piece-6"></div>
                          <div class="heart-piece-7"></div>
                          <div class="heart-piece-8"></div>
                      </div>
                      <p>Loading..</p>
                  </div>
              </div>


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

          </div>
      </div>
  </div>

  <script src="<?= base_url("resources/js/pageJS/all_singles.js") ?>"></script>