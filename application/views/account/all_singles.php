 <style>
     /*Profile Card 5*/

     body {
         background-color: #FFFFFF;
         background-image: url(<?= base_url("resources/images/flower_bg.jpg") ?>);
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }

     .card {
         border: none !important;

         box-shadow:
             0 2.2px 2.2px rgba(0, 0, 0, 0.02),
             0 5.4px 5.3px rgba(0, 0, 0, 0.028),
             0 10.1px 10px rgba(0, 0, 0, 0.035),
             0 18.1px 17.9px rgba(0, 0, 0, 0.042),
             0 33.8px 33.4px rgba(0, 0, 0, 0.05),
             0 81px 80px rgba(0, 0, 0, 0.07);


     }

     .card-body {
         padding: 0 !important;
     }

     .profile-card {
         margin-top: 80px;
         height: 329px;
     }

     .profile-card .overlay {
         bottom: 60px;
         position: relative;
     }



     .card-img-block {
         margin: 0 auto;
         position: relative;
         overflow: hidden;
         border-radius: 50%;
         /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.63); */
         border: 5px solid #FFFFFF;
         width: 150px;
         height: 150px;

         box-shadow:
             0 0.6px 2.2px rgba(0, 0, 0, 0.031),
             0 1.3px 5.3px rgba(0, 0, 0, 0.044),
             0 2.5px 10px rgba(0, 0, 0, 0.055),
             0 4.5px 17.9px rgba(0, 0, 0, 0.066),
             0 8.4px 33.4px rgba(0, 0, 0, 0.079),
             0 20px 80px rgba(0, 0, 0, 0.11);


     }

     .card-img-block img {
         object-fit: cover;
         width: 140px;
         height: 140px;
         margin: 0 auto;
     }

     .profile-card h5 {
         color: #263238;
         font-weight: 600;
         text-align: center;
         height: 24px;
         overflow: hidden;
     }

     .profile-card p {
         font-size: 1em;
         font-weight: 400;
         text-align: center;
     }

     .profile-card .btn {
         border-radius: 0 !important;
         text-transform: uppercase;
         font-size: 12px;
         padding: 10px 20px;
     }

     .profile-card .btn-primary {
         background-color: #b52b4a;
         border: 2px solid #b52b4a;
         font-size: 1em;
         margin-top: 0px;
         width: 100%;
         transition: 0.6s;
     }

     .profile-card .btn-primary:hover {
         background-color: #FFFFFF;
         color: #b52b4a;
         font-size: 1em;
         /* margin-top: 5px; */
         width: 100%;
     }

     .profile-card .card-percentage {
         color: #b52b4a;
         position: relative;
     }

     .profile-card .card-percentage .percentage-left,
     .profile-card .card-percentage .percentage-right {
         padding: 0 !important;
         margin: 0 !important;
         font-size: 2em;
         font-weight: 600;
         text-align: center !important;
     }

     .profile-card .card-percentage .text-left,
     .profile-card .card-percentage .text-right {
         padding: 0 !important;
         margin: 0 !important;
         font-size: 0.8em;
         text-align: center !important;
     }

     .profile-card .card-title {
         margin: 0 !important;
         padding: 0 !important;
         top: 10px;
     }

     .profile-card .card-designation {
         position: relative;
         color: #455a64 !important;
         font-weight: 400;
         text-align: center;
         font-size: 0.8em;
         margin: 0 !important;
         padding: 0 !important;
         top: 10px;
     }

     .profile-card .card-text {
         position: relative;
         /* bottom: 35px; */
         color: #455a64 !important;
         /* font-weight: 600; */
         text-align: center;
         font-size: 0.8em;
         margin: 0 !important;
         padding-left: 5px !important;
         padding-right: 5px !important;
         width: 100%;
         height: 59px;
         overflow: hidden;
         top: 10px;
     }

     /* .profile-badge {
         z-index: 1;
         color: #2196f3;
         left: 5px;
     } */

     .profile-card .profile-heart {
         z-index: 1;
         color: #b0bec5;
         font-size: 1.4em;
         position: absolute;
         right: 5px;
         transition: 0.6s;
     }

     .profile-card .profile-heart:hover {
         color: #e91e63 !important;
     }

     .like {
         color: #e91e63 !important;
     }

     /* .badge-premium {
         color: #212529;
         background-color: #ffca28 !important;
         text-transform: uppercase;
     } */

     .badge-trustVerified {
         color: #e8f5e9;
         background-color: #2e7d32 !important;
         text-transform: uppercase;
     }

     .badge-trustProving {
         color: #FFFFFF;
         background-color: #9ccc65 !important;
         text-transform: uppercase;
     }

     .badge-notTrustVerified {
         color: #FFFFFF;
         background-color: #607d8b !important;
         text-transform: uppercase;
     }


     .badge-label {
         margin: 0 !important;
         padding: 0 !important;
         position: relative;
         top: 10px;
     }

     .profile-card .premium_badge {
         background-color: #ffca28;
         position: absolute !important;
         width: 100%;
         font-size: 0.6em !important;
         /* top: 1px !important; */
         padding: 4px 0px 0px 0px !important;
         margin: 0 !important;
         font-weight: 600 !important;
         z-index: 999999;
     }

     .profile-card .photo-count {
         position: absolute;
         width: 100%;
         margin: 0 !important;
         padding: 0 !important;
         color: #FFFFFF;
         /* background-color: red; */
         bottom: 5px;
         font-size: 0.7em !important;
     }

     @media (max-width: 768px) {

         /* body {
             background-color: yellow;
         } */
         .profile-card {
             margin-top: 80px;
             height: 253px;
         }

         .profile-card .btn {
             margin-top: 10px;
         }

         .profile-card .card-text {
             height: 40px;
         }

         .percentage-row {
             position: absolute;
             width: 100%;
             top: 100px;
             left: 15px;
         }

         .profile-card .card-percentage .percentage-left {
             text-align: left !important;
             /* padding-left: 30px !important; */
         }

         .profile-card .card-percentage .text-left {
             text-align: left !important;
             /* padding-left: 20px !important; */
         }

         .profile-card .card-percentage .percentage-right {
             text-align: right !important;
             /* padding-right: 15px !important; */
         }

         .profile-card .card-percentage .text-right {
             text-align: right !important;
             /* padding-right: 25px !important; */
         }

         .profile-card .profile-heart {
             font-size: 2em;
             right: 10px;
         }
     }

     @media only screen and (max-width: 1199px) and (min-width: 992px) {
         /* body {
             background-color: red !important;
         } */

         .profile-card .card-text {
             height: 56px;
             overflow: hidden;
             font-size: 0.8em !important;
             padding-left: 2px !important;
             padding-right: 2px !important;
         }

         .profile-card .btn-primary {
             /* background-color: #b52b4a;
             border-color: #b52b4a; */
             font-size: 1em;
             bottom: -10px !important;
             position: relative;
             float: left;
             width: 100%;
             padding: 7px !important;
         }
     }

     /* Medium devices (landscape tablets, 768px and up) */
     /* @media only screen and (max-width: 1200px) { */
     @media (max-width: 920px) {
         body {

             background-size: auto;
             background-position: unset;
             /* background-repeat: no-repeat; */
         }


     }

     /* body {
             background-color: yellow;
         }
     } */
 </style>
 <div class="container">
     <div class="row">
         <!--Profile Card-->
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
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
                         <!-- <p class="badge-label"><span class="badge badge-premium">PREMIUM</span></p> -->
                         <p class="badge-label"><span class="badge badge-trustVerified">Trust Verified</span></p>
                         <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                     </div>
                     <a href="#" class="btn btn-primary">Check Match</a>
                 </div>


             </div>
         </div>

         <!--Profile Card-->
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

         <!--Profile Card-->
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

         <!--Profile Card-->
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
                             <!-- <span>-</span> -->
                             <span class="badge badge-notTrustVerified">Not Trust Verified</span>
                         </p>
                         <p class="card-text">24 Years, 4'5", Sinhalese, Christians, Never Married, Masters.</p>
                     </div>
                     <a href="#" class="btn btn-primary">Check Match</a>
                 </div>
             </div>
         </div>


         <!--Profile Card-->
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
             <div class="card profile-card">
                 <div class="row">
                     <!-- <a href="" class="profile-badge"><i class="fas fa-certificate"></i></a> -->
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


         <!--Profile Card-->
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
             <div class="card profile-card">
                 <div class="row">
                     <!-- <a href="" class="profile-badge"><i class="fas fa-certificate"></i></a> -->
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


         <!--Profile Card-->
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
             <div class="card profile-card">
                 <div class="row">
                     <!-- <a href="" class="profile-badge"><i class="fas fa-certificate"></i></a> -->
                     <a href="" class="profile-heart"><i class="fas fa-heart"></i></a>
                 </div>
                 <div class="overlay">
                     <div class="card-img-block">
                         <!-- <img src="https://images.pexels.com/photos/1580271/pexels-photo-1580271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" /> -->
                         <img src="https://scontent.fcmb1-1.fna.fbcdn.net/v/t1.6435-9/121689417_946060599214450_6732556071226167997_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=Ym43BmIgeaAAX82VqbG&_nc_ht=scontent.fcmb1-1.fna&oh=e2bcfefee32163b1cf96670344703a57&oe=60C529AA" alt="">
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


         <!--Profile Card-->
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
             <div class="card profile-card">
                 <div class="row">
                     <!-- <a href="" class="profile-badge"><i class="fas fa-certificate"></i></a> -->
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
         </div>

     </div>
 </div>