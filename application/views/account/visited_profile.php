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


    ?> -->


      <div class="mt-5 member-menubar">
          <div class="member-menubar-row">
              <!-- <button class="btn btn-sm btn-light col-md-3 active" id="btnAllSingles">All Singles <span class="float-right uk-badge"><?= $allSinglesCount['AllSinglesCount'] ?></span></button> -->
              <!-- <button class="btn btn-sm btn-light col-md-3" id="btnMyMatches">My Matches <span class="float-right uk-badge"><?= count($myMatchesCount)  ?></span></button> -->
              <button class="btn btn-sm btn-light col-md-3">Accepted Members <span class="float-right uk-badge">10</span></button>
              <button class="btn btn-sm btn-light col-md-3">New Matches <span class="float-right uk-badge">1</span></button>
              <button class="btn btn-sm btn-light col-md-3">My Favourites <span class="float-right uk-badge">1</span></button>
              <button class="btn btn-sm btn-light col-md-3">Members Intrusted In Me <span class="float-right uk-badge">1</span></button>
              <button class="btn btn-sm btn-light col-md-3">Visited Profiles <span class="float-right uk-badge">1</span></button>
              <button class="btn btn-sm btn-light col-md-3">Blocked Profiles <span class="float-right uk-badge">1</span></button>
          </div>
      </div>

  </div>
  <div class="container p-3">
      <p class="display-5 text-center font-weight-bold">Visited Profile</p>
      <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Profiles Visited By Me</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile Visited By Others</a>
          </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="row" id="mini-profile-area">
              </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="row" id="MyProfileVisitedByOthers">
              </div>
          </div>
      </div>
  </div>
  <script src="<?= base_url("resources/js/pageJS/visitedProfiles.js") ?>"></script>