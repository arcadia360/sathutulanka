 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


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
         animation-delay: -3s;
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
         background-color: rgba(255, 0, 0, 0.3);

         background-size: cover;
         background-position: center;
         background-repeat: no-repeat;
         /* clip-path: polygon(0 0, 100% 0, 100% 45%, 50% 56%, 50% 40%, 0 50%); */
         /* clip-path: polygon(0 0, 100% 0, 100% 47%, 0 24%); */
         clip-path: polygon(100% 0, 100% 100%, 38% 85%, 0 100%, 0 0);
         padding-bottom: 30px;
         /* height: 600px;
         margin-bottom: 0; */
     }

     .site-caption-1 p,
     .site-caption-1 {
         font-family: 'Merienda', cursive !important;
         font-size: 0.9em;
         color: #5c4e3f;
         z-index: 111;
         text-align: justify;
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
         font-family: "Poppins", Arial, sans-serif !important;
         font-weight: 700;
         font-size: 16px;
         color: #000000;
     }

     .our-services-section {
         background-image: url(<?= base_url("resources/images/flower_bg.jpg") ?>) !important;
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
 <style>
     .card-service {
         width: 100%;
         height: 100%;
         position: absolute;
         transform-style: preserve-3d;
         transition: transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
         border-radius: 6px;
         box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
         cursor: pointer;
         /* background-color: yellow;
         z-index: 999999; */
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
 </style>

 <div class="container-fluid" style="margin-top: -56px;">
     <div class="row">
         <div class="slider">
             <ul>
                 <li><img src="<?= base_url(); ?>resources/images/slider/img_9.jpg" class="img-fluid"></li>
                 <li><img src="<?= base_url(); ?>resources/images/slider/img_2.jpg" class="img-fluid"></li>
                 <li><img src="<?= base_url(); ?>resources/images/slider/img_3.jpg" class="img-fluid"></li>
                 <li><img src="<?= base_url(); ?>resources/images/slider/img_10.jpg" class="img-fluid"></li>
             </ul>
         </div>
     </div>
     <div class="row">
         <div class="search-area">
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
                     <img src="<?= base_url("resources/images/sathutulanka_1.png") ?>" alt="Sathutulanka.LK" style="width: 300px; margin: 0 auto !important; display:block;">
                 </div>
                 <div class="col-md-8">
                     <div class="uk-height-large uk-background-cover uk-light uk-flex uk-flex-top pt-3 site-caption-1">
                         <h3 style="font-weight: 400;">Who We Are _______</h3>
                         <p class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical pt-1" uk-parallax="opacity: 0,1; y: 100,0; viewport: 0.1">
                             This is the first and only marriage service in Sri Lanka and the world by trust.
                             Beauty, wealth, caste, education, occupation, nationality, religion, age, horoscope ,expectation, widow are common problems in love affairs and marriages for everyone and everytime..
                             So what we need is, these matters should not loss our hopes, trust, fortunate and goodness after the onset of marriage, becoming lonely single again...
                         </p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="row our-services-section">
         <div class="container transcroller-body">
             <div class="row  pt-5">
                 <p style="font-weight: 500; text-align: center;" class="col-12 pb-0 mb-0" data-aos="fade-down" data-aos-once="true">Our Services</p>
                 <h3 style="font-weight: 600; text-align: center;" class="col-12" data-aos="fade-up" data-aos-once="true">What We Offers</h3>
             </div>


             <!-- <div class="card-service">
                     <div class="front">Click to flip Click to flip Click to flip Click to flip Click to flip</div>
                     <div class="back">Yo, what up?</div>
                 </div> -->

             <div class="row  pt-5" data-aos="fade-down" data-aos-once="true">
               
                 <div class="col-md-4 services ftco-animate fadeInUp ftco-animated">
                     <div class="d-block d-flex">
                         <div class="icon d-flex justify-content-center align-items-center">
                         <i class="far fa-handshake"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Trust</h4>
                             <p>A certificate for the word of trust.</p>
                             <p><a href="#" class="btn-custom">Read more</a></p>
                         </div>
                     </div>
                     <div class="d-block d-flex">
                         <div class="icon d-flex justify-content-center align-items-center">
                         <i class="far fa-heart"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Love or Proposal</h4>
                             <p>Do you like to marry by love or proposal?</p>
                             <p><a href="#" class="btn-custom">Read more</a></p>
                         </div>
                     </div>
                 </div>
                <!--  <div class="col-md-4 services ftco-animate fadeInUp ftco-animated">
                     <div class="d-block d-flex">
                         <div class="icon d-flex justify-content-center align-items-center">
                             <i class="fas fa-user-shield"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Privacy</h4>
                             <p>You and your family's privacy will be 100% secure.</p>
                             <p><a href="#" class="btn-custom">Read more</a></p>
                         </div>
                     </div>
                     <div class="d-block d-flex">
                         <div class="icon d-flex justify-content-center align-items-center">
                         <i class="fas fa-sync-alt"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">After Marriage</h4>
                             <p>Think about your life after marriage.</p>
                             <p><a href="#" class="btn-custom">Read more</a></p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 services ftco-animate fadeInUp ftco-animated">
                     <div class="d-block d-flex">
                         <div class="icon d-flex justify-content-center align-items-center">
                             <i class="fas fa-coins"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Save Money</h4>
                             <p>Save your money, Time and energy (No Unnecessary meetings).</p>
                             <p><a href="#" class="btn-custom">Read more</a></p>
                         </div>
                     </div>
                     <div class="d-block d-flex">
                         <div class="icon d-flex justify-content-center align-items-center">
                         <i class="far fa-laugh-wink"></i>
                         </div>
                         <div class="media-body pl-3">
                             <h4 class="heading">Always Free</h4>
                             <p>Find your life partner without barriers, It's always Free.</p>
                             <p><a href="#" class="btn-custom">Read more</a></p>
                         </div>
                     </div>
                 </div> -->
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

 <script>
     $('.card-service').on('click', function() {
         $('.card-service').toggleClass('flipped');
     });
 </script>