 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=868'>

 <!-- UI Kit Overriding -->
 <style>
     *+h1,
     *+.uk-h1,
     *+h2,
     *+.uk-h2,
     *+h3,
     *+.uk-h3,
     *+h4,
     *+.uk-h4,
     *+h5,
     *+.uk-h5,
     *+h6,
     *+.uk-h6,
     *+.uk-heading-small,
     *+.uk-heading-medium,
     *+.uk-heading-large,
     *+.uk-heading-xlarge,
     *+.uk-heading-2xlarge {
         margin-top: 0;
     }
 </style>
 <!-- Overriding End -->

 <style>
     @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');
     @import url('https://fonts.googleapis.com/css2?family=Merienda&display=swap');

     /* 
     *,
     *:before,
     *:after {
         box-sizing: border-box;
     } */

     .aos-all {
         width: 1000px;
         max-width: 98%;
         margin: 10vh auto 0 auto;
     }

     .aos-item {
         display: inline-block;
         float: left;
         width: 33.3333%;
         height: 300px;
         padding: 20px;
     }

     .aos-item__inner {
         position: relative;
         width: 100%;
         height: 100%;
         float: left;
         background: #1da4e2;
         line-height: 260px;
         text-align: center;
         color: #fff;
     }

     * {
         /* margin: 0;
        padding: 0; */
         /* font-family: 'Open Sans', sans-serif; */
         box-sizing: border-box;
     }

     /* slider */
     .slider {
         width: 100%;
         height: 100vh;
         margin: 0 !important;
         position: relative;

     }

     .slider ul {
         margin: 0;
         padding: 0;
         list-style: none;
     }

     .slider .img-fluid {
         width: 100% !important;
         height: auto;
     }

     .slider ul li {
         width: 100%;
         position: absolute;
         top: 0;
         left: 0;
         margin: 0 !important;
         animation-iteration-count: infinite;
         animation-duration: 24s;
         overflow: hidden;
         height: 100vh;

     }


     .slider ul li:nth-child(1) {
         animation-name: slider;
         animation-delay: -2s;
     }

     .slider ul li:nth-child(2) {
         animation-name: slider;
         animation-delay: 5s;
         opacity: 0;
     }

     .slider ul li:nth-child(3) {
         animation-name: slider;
         animation-delay: 11s;
         opacity: 0;
     }

     .slider ul li:nth-child(4) {
         animation-name: slider;
         animation-delay: 16s;
         opacity: 0;
     }

     /* .slider ul li:nth-child(5) {
         animation-name: slider;
         animation-delay: 16s;
         opacity: 0;
     } */


     @keyframes slider {
         0% {
             opacity: 0;
         }

         20.83% {
             opacity: 1;
         }

         33.33% {
             opacity: 1;
         }

         45.83% {
             opacity: 0;
         }

         100% {
             opacity: 0;
         }
     }


     /*  */
     body {
         /* font-family: "Roboto", sans-serif; */
         /* font-family: "Poppins", Arial, sans-serif !important; */
         background-color: #FFFFFF !important;
         background-image: none !important;
     }

     .search-area {
         width: 100%;
         position: absolute;
         z-index: 1;
     }

     .search {
         padding: 2rem;
     }

     .search-area .form-control {
         display: block;
         width: 100%;
         font-size: 0.875rem;
         line-height: 1.5;
         color: #55595c;
         background-color: #fff;
         background-image: none;
         border: 1px solid #ccc;
         height: 3.2rem !important;
         border-radius: 0;
         background-clip: inherit;
     }

     .search-area .wrn-btn {
         width: 100%;
         font-size: 16px;
         font-weight: 400;
         text-transform: capitalize;
         height: 3.2rem !important;
         border-radius: 0;
     }

     .search-area .container {
         background-color: rgba(26, 70, 104, 0.51);
         padding: 30px 100px 30px 100px;
     }



     .site-caption-section {
         /* background-image: url("../../../resources/images/flower_bg.jpg") !important; */
         /* background-color: rgba(255, 0, 0, 0.3); */

         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;

         padding-bottom: 30px;
     }



     .site-caption-1 p,
     .site-caption-1 {
         /* font-family: 'Merienda', cursive !important; */
         font-size: 0.9em;
         color: #5c4e3f;
         z-index: 111;
         text-align: justify;
     }

     .service-card {
         min-height: 100px !important;
     }

     .services .icon {
         line-height: 1.3;
         position: relative;
         width: 70px;
         height: 70px;
         margin: 0 auto;
         position: relative;
         z-index: 0;
         border-radius: 50%;
         background: #b52b4a;
         -webkit-box-shadow: 0px 10px 30px -4px rgb(0 0 0 / 15%);
         -moz-box-shadow: 0px 10px 30px -4px rgba(0, 0, 0, 0.15);
         box-shadow: 0px 10px 30px -4px rgb(0 0 0 / 15%);
         font-size: 30px;
         color: #fff;
     }

     .services .media-body h4 {
         /* font-family: "Poppins", Arial, sans-serif !important; */
         font-weight: 700;
         font-size: 16px;
         color: #000000;
         margin: 0 !important;
     }

     .services p {
         font-size: 0.8em;
     }

     .services .read-more {
         position: absolute;
         bottom: 0;
     }

     *+p,
     *+ul,
     *+ol,
     *+dl,
     *+pre,
     *+address,
     *+fieldset,
     *+figure {
         margin-top: 0 !important;
     }

     .uk-modal-dialog p,
     .uk-modal-dialog div {
         font-size: 0.8em;
     }

     .our-services-section {
         /* background-image: url(<?= base_url("resources/images/flower_bg.jpg") ?>) !important; */
         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
     }

     @media (max-width: 768px) {
         .search-area {
             position: relative;
             background: #1A4668;
         }

         .slider {
             height: 25.9vh;
         }

         .search-area .container {
             padding: 0 !important;
         }
     }



     @media only screen and (min-width: 768px) {
         .search {
             top: -40vh;
         }
     }

     @media only screen and (min-width: 892px) {
         .search-area {
             top: 40vh;
         }

     }

     @media only screen and (min-width: 1200px) {
         .search-area {
             top: 60vh;
         }

     }
 </style>

 <!-- Flip Card -->
 <!-- <style>
     .card-service {
         width: 100%;
         height: 100%;
         position: absolute;
         transform-style: preserve-3d;
         transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
         border-radius: 6px;
         box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
         cursor: pointer;
     }

     .card-service div {
         position: absolute;
         width: 100%;
         height: 100%;
         -webkit-backface-visibility: hidden;
         backface-visibility: hidden;
         border-radius: 6px;
         background: #fff;
         display: -ms-flexbox;
         display: box;
         display: flex;
         -o-box-pack: center;
         justify-content: center;
         -o-box-align: center;
         align-items: center;
         font: 16px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
         -webkit-font-smoothing: antialiased;
         color: #47525d;
     }

     .card-service .back {
         transform: rotateY(180deg);
     }

     .card-service.flipped {
         transform: rotateY(180deg);
     }
 </style> -->

 <div class="container-fluid" style="margin-top: -56px;">
     <div class="row">
         <div class="slider" style="clip-path: polygon(100% 0, 100% 84%, 25% 100%, 0 85%, 0 0);">
             <ul>
                 <li><img src="<?= base_url(); ?>resources/images/slider/img_12.jpg" class="img-fluid"></li>
                 <!-- <li><img src="<?= base_url(); ?>resources/images/slider/img_9.jpg" class="img-fluid"></li> -->
                 <!-- <li><img src="<?= base_url(); ?>resources/images/slider/img_2.jpg" class="img-fluid"></li> -->
                 <li><img src="<?= base_url(); ?>resources/images/slider/img_13.jpg" class="img-fluid"></li>

                 <!-- <li><img src="<?= base_url(); ?>resources/images/slider/img_3.jpg" class="img-fluid"></li> -->
                 <li><img src="<?= base_url(); ?>resources/images/slider/img_16.jpg" class="img-fluid"></li>
                 <!-- <li><img src="<?= base_url(); ?>resources/images/slider/img_10.jpg" class="img-fluid"></li> -->
                 <li><img src="<?= base_url(); ?>resources/images/slider/img_14.jpg" class="img-fluid"></li>

             </ul>
         </div>
     </div>
     <div class="row">
         <div class="search-area" data-aos="fade-in" data-aos-once="true">
             <div class="search">
                 <!-- <div class="row"> -->
                 <div class="container">
                     <form action="#">
                         <div class="row">
                             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 p-0">
                                 <select class="form-control">
                                     <option>I'm Looking For</option>
                                     <option>Lady</option>
                                     <option>Gentleman</option>
                                 </select>
                             </div>
                             <div class="col-6 col-lg-2 col-md-2 col-sm-6 col-xs-6 p-0">
                                 <select class="form-control">
                                     <option>Age From</option>
                                     <option value="18">18</option>
                                     <option value="19">19</option>
                                     <option value="20">20</option>
                                     <option value="21">21</option>
                                     <option value="22">22</option>
                                     <option value="23">23</option>
                                     <option value="24">24</option>
                                     <option value="25">25</option>
                                     <option value="26">26</option>
                                     <option value="27">27</option>
                                     <option value="28">28</option>
                                     <option value="29">29</option>
                                     <option value="30">30</option>
                                     <option value="31">31</option>
                                     <option value="32">32</option>
                                     <option value="33">33</option>
                                     <option value="34">34</option>
                                     <option value="35">35</option>
                                     <option value="36">36</option>
                                     <option value="37">37</option>
                                     <option value="38">38</option>
                                     <option value="39">39</option>
                                     <option value="40">40</option>
                                     <option value="41">41</option>
                                     <option value="42">42</option>
                                     <option value="43">43</option>
                                     <option value="44">44</option>
                                     <option value="45">45</option>
                                     <option value="46">46</option>
                                     <option value="47">47</option>
                                     <option value="48">48</option>
                                     <option value="49">49</option>
                                     <option value="50">50</option>
                                     <option value="51">51</option>
                                     <option value="52">52</option>
                                     <option value="53">53</option>
                                     <option value="54">54</option>
                                     <option value="55">55</option>
                                     <option value="56">56</option>
                                     <option value="57">57</option>
                                     <option value="58">58</option>
                                     <option value="59">59</option>
                                     <option value="60">60</option>
                                     <option value="61">61</option>
                                     <option value="62">62</option>
                                     <option value="63">63</option>
                                     <option value="64">64</option>
                                     <option value="65">65</option>
                                     <option value="66">66</option>
                                     <option value="67">67</option>
                                     <option value="68">68</option>
                                 </select>
                             </div>
                             <div class="col-6 col-lg-2 col-md-2 col-sm-6 col-xs-6 p-0">
                                 <select class="form-control">
                                     <option>Age To</option>
                                     <option value="18">18</option>
                                     <option value="19">19</option>
                                     <option value="20">20</option>
                                     <option value="21">21</option>
                                     <option value="22">22</option>
                                     <option value="23">23</option>
                                     <option value="24">24</option>
                                     <option value="25">25</option>
                                     <option value="26">26</option>
                                     <option value="27">27</option>
                                     <option value="28">28</option>
                                     <option value="29">29</option>
                                     <option value="30">30</option>
                                     <option value="31">31</option>
                                     <option value="32">32</option>
                                     <option value="33">33</option>
                                     <option value="34">34</option>
                                     <option value="35">35</option>
                                     <option value="36">36</option>
                                     <option value="37">37</option>
                                     <option value="38">38</option>
                                     <option value="39">39</option>
                                     <option value="40">40</option>
                                     <option value="41">41</option>
                                     <option value="42">42</option>
                                     <option value="43">43</option>
                                     <option value="44">44</option>
                                     <option value="45">45</option>
                                     <option value="46">46</option>
                                     <option value="47">47</option>
                                     <option value="48">48</option>
                                     <option value="49">49</option>
                                     <option value="50">50</option>
                                     <option value="51">51</option>
                                     <option value="52">52</option>
                                     <option value="53">53</option>
                                     <option value="54">54</option>
                                     <option value="55">55</option>
                                     <option value="56">56</option>
                                     <option value="57">57</option>
                                     <option value="58">58</option>
                                     <option value="59">59</option>
                                     <option value="60">60</option>
                                     <option value="61">61</option>
                                     <option value="62">62</option>
                                     <option value="63">63</option>
                                     <option value="64">64</option>
                                     <option value="65">65</option>
                                     <option value="66">66</option>
                                     <option value="67">67</option>
                                     <option value="68">68</option>
                                 </select>
                             </div>
                             <div class="col-6 col-lg-2 col-md-2 col-sm-6 col-xs-6 p-0">
                                 <select class="form-control">
                                     <option>Religion</option>
                                     <option value="">Buddhist</option>
                                     <option value="">Hindu</option>
                                     <option value="">Islam</option>
                                     <option value="">Christians</option>
                                     <option value="">Roman Catholic</option>
                                     <option value="">Other</option>
                                 </select>
                             </div>
                             <div class="col-6 col-lg-2 col-md-2 col-sm-6 col-xs-6 p-0">
                                 <select class="form-control">
                                     <option>Mother Tongue</option>
                                     <option>සිංහල</option>
                                     <option>English</option>
                                     <option>தமிழ்</option>
                                 </select>
                             </div>
                             <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                 <button type="button" class="btn btn-danger wrn-btn">Search</button>
                             </div>
                         </div>
                     </form>
                 </div>
                 <!-- </div> -->
             </div>
         </div>
     </div>
     <div class="row site-caption-section mt-2">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <img src="<?= base_url("resources/images/sathutulanka_1.png") ?>" alt="Sathutulanka.LK" data-aos="zoom-out" data-aos-once="true" style="width: 300px;" class="mt-3">
                 </div>
                 <div class="col-md-8">
                     <div class="pt-3 site-caption-1">
                         <p style="font-weight: 500; text-align: right;" class="col-12 pb-0 mb-0" data-aos="fade-down" data-aos-once="true">Sathutulanka.lk</p>
                         <h3 style="font-weight: bold; text-align: right;" data-aos="fade-left" data-aos-once="true">WHO WE ARE</h3>
                         <p data-aos="fade-up" data-aos-once="true">
                             This is the first and only marriage service in <b>Sri Lanka</b> and the world by trust.
                             Beauty, wealth, caste, education, occupation, nationality, religion, age, horoscope ,expectation, widow are common problems in love affairs and marriages for everyone and everytime..
                             So what we need is, these matters should not loss our hopes, trust, fortunate and goodness after the onset of marriage, becoming lonely single again...
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="row our-services-section" style="background-color: #f5f5f5; clip-path: polygon(68% 21%, 100% 0, 100% 100%, 0 100%, 0 0);">
         <div class="container transcroller-body">
             <div class="row  pt-5">
                 <p style="font-weight: 500; font-size: 0.9em;" class="col-12 pb-0 mb-0" data-aos="fade-down" data-aos-once="true">Our Services</p>
                 <h3 style="font-weight: bold;" class="col-12" data-aos="fade-up" data-aos-once="true">WHAT WE OFFERS</h3>
             </div>

             <div class="row pt-5 services" data-aos="fade-right" data-aos-once="true">
                 <div class="col-md-4">
                     <div class="d-block d-flex service-card">
                         <div class="icon d-flex justify-content-center align-items-center">
                             <i class="far fa-handshake"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Trust</h4>
                             <p>A certificate for the word of trust.</p>
                             <p class="read-more"><a href="#modal-trust" uk-toggle>Read More</a></p>
                         </div>
                     </div>
                 </div>

                 <!-- Read more modal - trust -->
                 <div id="modal-trust" class="uk-flex-top" uk-modal>
                     <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                         <button class="uk-modal-close-outside" type="button" uk-close></button>
                         <h2 class="uk-modal-title">A certificate for the word of trust</h2>
                         <p>
                             It is our belief that truth and honesty conquer in the end and never regret. By visiting to homes of marriage seekers,
                             we inspect <b><a href="#modal-70-important" uk-toggle>over 70 important</a></b> matters are true and correct with government accepted certificates.
                             The specialty of this service is that trust is not limited to just verification of an identity copy,
                             a telephone number, an email address, a letter or application sent by an applicant.
                         </p>

                     </div>
                 </div>
                 <!-- End of read more modal - trust -->

                 <!-- modal - over 70 important -->
                 <div id="modal-70-important" class="uk-flex-top" uk-modal>
                     <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                         <button class="uk-modal-close-outside" type="button" uk-close></button>
                         <h2 class="uk-modal-title">70 Important Mattters</h2>
                         <hr class="uk-divider-icon">
                         <div class="row">
                             <div class="col-3">Basic Information</div>
                             <div class="col-9">
                                 - 01. Name
                                 02. Age
                                 03. Marital Status
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Residences and Contacts</div>
                             <div class="col-9">
                                 - 04. Permanent Address
                                 05. Postal Address
                                 06. Residence ownership
                                 07. Native District and Lived places
                                 08. Contacts</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Physical Status</div>
                             <div class="col-9">
                                 - 09. Height
                                 10. Weight
                                 11. Body Shape/Type
                                 12. Skin Color
                                 13. Disability if any
                                 14. Blood Group
                                 15. Health Information</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Background</div>
                             <div class="col-9">
                                 - 16. Mother Tongue
                                 17. Nationality
                                 18. Religion
                                 19. Caste
                                 20. Family attitudes about castes
                                 21. If involved in a criminal or civil case
                             </div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Life Style</div>
                             <div class="col-9">
                                 - 22. Diet
                                 23. Drink
                                 24. Smoke
                                 25. Languages
                                 26. Dress and Makeup
                                 27. Used to travel
                                 28. How to speak parents (Amma or Mammy... etc.)
                                 29. Attitudes about Customs
                                 30.The nature of the home</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Partners attitudes</div>
                             <div class="col-9">
                                 - 31. Open Personality
                                 32. Conscious Personality
                                 33. Extrovert Personality
                                 34. Introvert Personality
                                 35. Agreeable Personality
                                 36. Neurotic Personality
                                 37. Family Bond
                                 38. Attitudes towards Money
                                 39. Attitudes towards Religion
                                 40. Physically Activities
                                 41. Attitudes towards Politics
                                 42. Attitudes towards Knowledge and education
                                 43. Love Affairs
                                 44. The importance of male & female Virginity
                                 45. Interests and Hobbies
                                 46. Favorite People and Things</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Education</div>
                             <div class="col-9">
                                 - 47. Education Level
                                 48. Education field
                                 49. Schools/ Universities</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Career</div>
                             <div class="col-9">
                                 - 50. Employment Section
                                 51. Designation
                                 52. Workplace
                                 53. Nature of Occupation or Business
                                 54. Income/Salary and Previous Service Information</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Personal Assets</div>
                             <div class="col-9">
                                 - 55. Assets
                                 56. Ownership, Nature and Issues of Assets</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Family</div>
                             <div class="col-9">
                                 - 57. The present address of the family
                                 58. Fathers Name and Caste
                                 59. Fathers Current Information
                                 60. Mothers Name and Caste
                                 61. Mothers Current Information
                                 62. Sibling Information
                                 63. Family type (rural or urban / middle or high income status)
                                 64. Family Special Information (Religious, Cultural, Legal Issues, etc.)</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">After marriage</div>
                             <div class="col-9">
                                 - 65. Proposers plans to live after marriage (Residence / Expatriation etc.)
                                 66. The need of the proponents family
                                 67. Future employment and educational activities of the proponent
                                 68. Number of expectant children
                                 69. Other Requirements of the Proponent</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Partner Preferences and Other Information</div>
                             <div class="col-9">
                                 - 70. Preferences of the proposed partner and other specific information of the proposer</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Astrology</div>
                             <div class="col-9">
                                 - 71. Horoscope
                                 72. Attitudes of the family in astrology</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Photos and Videos</div>
                             <div class="col-9">
                                 - 73. More photos and videos are collected for clear identification. It gives you the opportunity to save time, money, energy on visiting homes and people.</div>
                         </div>
                         <hr>
                         <div class="row">
                             <div class="col-3">Basic Information</div>
                             <div class="col-9">- 01. Name 02. Age 03. Marital Status</div>
                         </div>
                         <hr class="uk-divider-icon">

                     </div>
                 </div>
                 <!-- End of modal - over 70 important -->

                 <div class="col-md-4">
                     <div class="d-block d-flex service-card">
                         <div class="icon d-flex justify-content-center align-items-center">
                             <i class="fas fa-user-shield"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Privacy</h4>
                             <p>You and your family's privacy will be 100% secure.</p>
                             <p class="read-more"><a href="#modal-privacy" uk-toggle>Read More</a></p>
                         </div>
                     </div>
                 </div>

                 <!-- Read more modal - privacy -->
                 <div id="modal-privacy" class="uk-flex-top" uk-modal>
                     <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                         <button class="uk-modal-close-outside" type="button" uk-close></button>
                         <h2 class="uk-modal-title">You and your family’s privacy will be 100% secure</h2>
                         <p>
                             Your all information will be visible to others under your control.
                             We value your privacy above all and you can get to know each other better without revealing your identity. (Free and secure chat box)
                         </p>
                     </div>
                 </div>
                 <!-- End of read more modal - privacy -->

                 <div class="col-md-4">
                     <div class="d-block d-flex service-card">
                         <div class="icon d-flex justify-content-center align-items-center">
                             <i class="fas fa-coins"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Save Money</h4>
                             <p>Save your money, Time and energy (No Unnecessary meetings).</p>
                             <p class="read-more"><a href="#modal-save-money" uk-toggle>Read More</a></p>
                         </div>
                     </div>
                 </div>

                 <!-- Read more modal - save-money -->
                 <div id="modal-save-money" class="uk-flex-top" uk-modal>
                     <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                         <button class="uk-modal-close-outside" type="button" uk-close></button>
                         <h2 class="uk-modal-title">Save your Money, Time and Energy (No unnecessary meetings)</h2>
                         <p>
                             Modern internet technology is fully utilized allowing to add videos, photos and details of the marriage seekers so as to get a true,
                             clear and complete idea about them without any conditions. This will help you and your family not to spend valuable money,
                             time and energy over and over to inspect homes with unnecessary meetings.
                         </p>
                     </div>
                 </div>
                 <!-- End of read more modal - save-money -->

                 <div class="col-md-4">
                     <div class="d-block d-flex service-card">
                         <div class="icon d-flex justify-content-center align-items-center">
                             <i class="far fa-heart"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Love or Proposal</h4>
                             <p>Do you like to marry by love or proposal?</p>
                             <p class="read-more"><a href="#modal-Proposal" uk-toggle>Read More</a></p>
                         </div>
                     </div>
                 </div>

                 <!-- Read more modal - Proposal -->
                 <div id="modal-Proposal" class="uk-flex-top" uk-modal>
                     <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                         <button class="uk-modal-close-outside" type="button" uk-close></button>
                         <h2 class="uk-modal-title">Do you like to marry by love or proposal?</h2>
                         <p>
                             Most of love affairs are not successful due to family reasons. Love couldn’t be expressed to unknown persons when you feel the problems of an unmatching person.
                             There is also a lot frustrated singles whom are forced to live through parents choice. Considering all the facts of a love marriage,
                             we assure you with confidence that you have a trustworthy space here to find your partner by love or proposal without loosing your family’s choice.
                         </p>
                     </div>
                 </div>
                 <!-- End of read more modal - Proposal -->

                 <div class="col-md-4">
                     <div class="d-block d-flex service-card">
                         <div class="icon d-flex justify-content-center align-items-center">
                             <i class="fas fa-sync-alt"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">After Marriage</h4>
                             <p>Think about your life after marriage.</p>
                             <p class="read-more"><a href="#modal-After-Marriage" uk-toggle>Read More</a></p>
                         </div>
                     </div>
                 </div>

                 <!-- Read more modal - After Marriage -->
                 <div id="modal-After-Marriage" class="uk-flex-top" uk-modal>
                     <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                         <button class="uk-modal-close-outside" type="button" uk-close></button>
                         <h2 class="uk-modal-title">Think about your life after marriage</h2>
                         <p>
                             Let us think deeply about life after marriage. Unfortunately, All your efforts will be waste if you have to seperate yourselves in a short period of time due to mismatch of your ideas.
                             There is a special space here to talk about thoughts of after marriage before building a relationship such as personal goals, prefer to live,
                             the expectations of both parents, how your jobs affect the marriage life?, further education,
                             about children and all other matters important to you after marriage.
                         </p>
                     </div>
                 </div>
                 <!-- End of read more modal - After Marriage -->

                 <div class="col-md-4">
                     <div class="d-block d-flex service-card">
                         <div class="icon d-flex justify-content-center align-items-center">
                             <i class="far fa-laugh-wink"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Always Free</h4>
                             <p>Find your life partner without barriers, It's always Free.</p>
                             <p class="read-more"><a href="#modal-Always-Free" uk-toggle>Read More</a></p>
                         </div>
                     </div>
                 </div>

                 <!-- Read more modal - Always Free -->
                 <div id="modal-Always-Free" class="uk-flex-top" uk-modal>
                     <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                         <button class="uk-modal-close-outside" type="button" uk-close></button>
                         <h2 class="uk-modal-title">Find your life partner without barriers, it is always free</h2>
                         <p>
                             From registration onwards, every member gets totally free and fully secure communication platform to send interests and exchange ideas under his or her own control.
                             You will be informed about matches by automated message system daily and free of charge.
                         </p>
                     </div>
                 </div>
                 <!-- End of read more modal - Always Free -->



             </div>

             <!-- <div class="aos-item" data-aos="fade-down" data-aos-once="true">
                 <div class="aos-item__inner">
                     <h3>1</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-down">
                 <div class="aos-item__inner">
                     <h3>2</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="zoom-out-down">
                 <div class="aos-item__inner">
                     <h3>3</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="flip-down">
                 <div class="aos-item__inner">
                     <h3>4</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="flip-up">
                 <div class="aos-item__inner">
                     <h3>5</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-down">
                 <div class="aos-item__inner">
                     <h3>6</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>7</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-down">
                 <div class="aos-item__inner">
                     <h3>8</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>9</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-down">
                 <div class="aos-item__inner">
                     <h3>10</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-up">
                 <div class="aos-item__inner">
                     <h3>11</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-down">
                 <div class="aos-item__inner">
                     <h3>12</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>13</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-up">
                 <div class="aos-item__inner">
                     <h3>14</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>15</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-up">
                 <div class="aos-item__inner">
                     <h3>16</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-down">
                 <div class="aos-item__inner">
                     <h3>17</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-up">
                 <div class="aos-item__inner">
                     <h3>18</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="zoom-out">
                 <div class="aos-item__inner">
                     <h3>19</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-up">
                 <div class="aos-item__inner">
                     <h3>20</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="zoom-out">
                 <div class="aos-item__inner">
                     <h3>21</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>22</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="zoom-out-up">
                 <div class="aos-item__inner">
                     <h3>23</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="zoom-out-down">
                 <div class="aos-item__inner">
                     <h3>24</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>25</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>26</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>27</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>28</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>29</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>30</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>31</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>32</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>33</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>34</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>35</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>36</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>37</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>38</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>39</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>40</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>41</h3>
                 </div>
             </div>
             <div class="aos-item" data-aos="fade-in">
                 <div class="aos-item__inner">
                     <h3>42</h3>
                 </div>
             </div> -->
         </div>
     </div>
 </div>


 </div>

 <!-- <script>
     $('.card-service').on('click', function() {
         $('.card-service').toggleClass('flipped');
     });
 </script> -->