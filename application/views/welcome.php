<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel='stylesheet' href='https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=868'>
<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
<!-- <link rel='stylesheet' href='<?= base_url("resources/css/process_steps.css") ?>'> -->


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

    .modal-title{
        color: #FFFFFF;
        font-size: 1.8em;
        align-items: center;
        /* font-weight: bold; */
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

        /* padding-bottom: 30px; */
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

    .our-services-section {
        /* background-image: url(<?= base_url("resources/images/flower_bg.jpg") ?>) !important; */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    #modal-container p {
        text-align: justify !important;
        text-justify: inter-word !important;
    }

    .step-header {
        font-size: 3em;
        text-align: center;
        min-width: 72px !important;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bolder;
        color: #FFFFFF;
        border-radius: 10px;
    }

    .step-title {
        font-size: 1em;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bolder;
        padding-left: 10px;
        padding-right: 10px;
        width: 100%;
        border-radius: 10px;
    }

    .steps-element {
        box-shadow:
            0 0.2px 2.2px rgba(0, 0, 0, 0.025),
            0 0.4px 5.3px rgba(0, 0, 0, 0.036),
            0 0.8px 10px rgba(0, 0, 0, 0.045),
            0 1.3px 17.9px rgba(0, 0, 0, 0.054),
            0 2.5px 33.4px rgba(0, 0, 0, 0.065),
            0 6px 80px rgba(0, 0, 0, 0.09);
        border-radius: 10px;

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
    <div class="row site-caption-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url("resources/images/sathutulanka_1.png") ?>" alt="Sathutulanka.LK" style="width: 300px;" class="mt-3">
                </div>
                <div class="col-md-8">
                    <div class="pt-3 site-caption-1">
                        <p style="font-weight: 500; text-align: right;" class="col-12 pb-0 mb-0">Sathutulanka.lk</p>
                        <h3 style="font-weight: bold; text-align: right;">WHO WE ARE</h3>
                        <p>
                            This is the first and only marriage service in <b>Sri Lanka</b> and the world by trust.
                            Beauty, wealth, caste, education, occupation, nationality, religion, age, horoscope ,expectation, widow are common problems in love affairs and marriages for everyone and everytime..
                            So what we need is, these matters should not loss our hopes, trust, fortunate and goodness after the onset of marriage, becoming lonely single again...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row our-services-section" style="background-color: #f5f5f5; clip-path: polygon(75% 14%, 100% 0, 100% 76%, 0 100%, 0 0); padding-bottom: 100px;">
        <div class="container transcroller-body">
            <div class="row  pt-5">
                <p style="font-weight: 500; font-size: 0.9em;" class="col-12 pb-0 mb-0">Our Services</p>
                <h3 style="font-weight: bold;" class="col-12">WHAT WE OFFERS</h3>
            </div>

            <div class="row pt-5 services">
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <i class="far fa-handshake"></i>
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading">Trust</h4>
                            <p>A certificate for the word of trust.</p>
                            <p class="read-more"><a href="#modal-container" uk-toggle>Read More</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading">Privacy</h4>
                            <p>You and your family's privacy will be 100% secure.</p>
                            <p class="read-more"><a href="#modal-container" uk-toggle>Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading">Save Money</h4>
                            <p>Save your money, Time and energy (No Unnecessary meetings).</p>
                            <p class="read-more"><a href="#modal-container" uk-toggle>Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading">Love or Proposal</h4>
                            <p>Do you like to marry by love or proposal?</p>
                            <p class="read-more"><a href="#modal-container" uk-toggle>Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading">After Marriage</h4>
                            <p>Think about your life after marriage.</p>
                            <p class="read-more"><a href="#modal-container" uk-toggle>Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <i class="far fa-laugh-wink"></i>
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading">Always Free</h4>
                            <p>Find your life partner without barriers, It's always Free.</p>
                            <p class="read-more"><a href="#modal-container" uk-toggle>Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Read more modal -->
        <div id="modal-container" class="uk-modal-container" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h2 class="uk-modal-title" style="color: #0f6ecd;"><strong>Advantages of Sathutu Lanka</strong></h2>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>A certificate for the word of trust</strong></h4>
                        <p>
                            It is our belief that truth and honesty conquer in the end and never regret.
                            By visiting to homes of marriage seekers, we inspect <a href="#modal-70" uk-toggle><strong>over 70 important</strong></a> matters are true and correct with government accepted certificates.
                            The specialty of this service is that trust is not limited to just verification of an identity copy, a telephone number,
                            an email address, a letter or application sent by an applicant.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Save your money, time and energy (No unnecessary meetings)</strong></h4>
                        <p>
                            Modern internet technology is fully utilized allowing to add videos, photos and details of the marriage seekers so as to get a true,
                            clear and complete idea about them without any conditions. This will help you and your family not to spend valuable money,
                            time and energy over and over to inspect homes with unnecessary meetings.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Find your life partner without barriers, It is always free</strong></h4>
                        <p>
                            Modern internet technology is fully utilized allowing to add videos, photos and details of the marriage seekers so as to get a true,
                            clear and complete idea about them without any conditions. This will help you and your family not to spend valuable money,
                            time and energy over and over to inspect homes with unnecessary meetings.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>You and your family’s privacy will be 100% secure</strong></h4>
                        <p>
                            Your all information will be visible to others under your control.
                            We value your privacy above all and you can get to know each other better without revealing your identity. (Free and secure chat box)
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Do you like to marry by love or proposal?</strong></h4>
                        <p>
                            Most of love affairs are not successful due to family reasons.
                            Love couldn’t be expressed to unknown persons when you feel the problems of an unmatching person. There is also a lot frustrated singles whom are forced to live through parents choice.
                            Considering all the facts of a love marriage, we assure you with confidence that you have a trustworthy space here to find your partner by love or proposal without loosing your family’s choice.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Think about your life after marriage</strong></h4>
                        <p>
                            Let us think deeply about life after marriage. Unfortunately, All your efforts will be waste if you have to seperate yourselves in a short period of time due to mismatch of your ideas.
                            There is a special space here to talk about thoughts of after marriage before building a relationship such as personal goals,
                            prefer to live, the expectations of both parents, how your jobs affect the marriage life?,
                            further education, about children and all other matters important to you after marriage.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Think about your life after marriage</strong></h4>
                        <p>
                            Thousands of marriage seekers will come to the website because there is a free service ranging from the publication of the proposal to the identification of any partner of the website.
                            100% trust verification service available with government approved certificates if necessary.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Think about your life after marriage</strong></h4>
                        <p>
                            The ability to quickly find your desired partner through thousands of marriage seekers under 37 key points and restricting getting interests of undesired marriage seekers if necessary.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Search Engine Convenience</strong></h4>
                        <p>
                            The ability to quickly find your desired partner through thousands of marriage seekers under 37 key points and restricting getting interests of undesired marriage seekers if necessary.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Single Attention to each Account</strong></h4>
                        <p>
                            The ability to select desired partners reliably and smoothly as our staff monitors each account separately and get trust verified.
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <h4><strong>Premium Membership</strong></h4>
                        <p>
                            The ability to quickly and easily meet your marriage needs by sending your interests to members by post,
                            examination of horoscopes by expert astrologers soon, making your profile top of other members and finding marriage expectants from other media also.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of read more modal -->

        <!-- 70 importan modal -->
        <div id="modal-70" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h3 class="uk-modal-title" style="color: #0f6ecd;">70 Important Mattters</h3>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Basic Information</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            01. Name
                            02. Age
                            03. Marital Status
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Residences and Contacts</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            04. Permanent Address
                            05. Postal Address
                            06. Residence ownership
                            07. Native District and Lived places
                            08. Contacts
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Physical Status</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            09. Height
                            10. Weight
                            11. Body Shape/Type
                            12. Skin Color
                            13. Disability if any
                            14. Blood Group
                            15. Health Information
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Background</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            16. Mother Tongue
                            17. Nationality
                            18. Religion 19. Caste
                            20. Family attitudes about castes
                            21. If involved in a criminal or civil case
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Life Style</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            22. Diet
                            23. Drink
                            24. Smoke
                            25. Languages
                            26. Dress and Makeup
                            27. Used to travel
                            28. How to speak parents (Amma or Mammy... etc.)
                            29. Attitudes about Customs
                            30.The nature of the home
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Partners Attitudes</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            31. Open Personality
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
                            46. Favorite People and Things
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Education</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            47. Education Level
                            48. Education field
                            49. Schools/ Universities
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Career</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            50. Employment Section
                            51. Designation
                            52. Workplace
                            53. Nature of Occupation or Business
                            54. Income/Salary and Previous Service Information
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Personal Assets</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            55. Assets
                            56. Ownership, Nature and Issues of Assets
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Family</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            57. The present address of the family
                            58. Fathers Name and Caste
                            59. Fathers Current Information
                            60. Mothers Name and Caste
                            61. Mothers Current Information
                            62. Sibling Information
                            63. Family type (rural or urban / middle or high income status)
                            64. Family Special Information (Religious, Cultural, Legal Issues, etc.)
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>After Marriage</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            65. Proposers plans to live after marriage (Residence / Expatriation etc.)
                            66. The need of the proponents family
                            67. Future employment and educational activities of the proponent
                            68. Number of expectant children
                            69. Other Requirements of the Proponent
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Partner Preferences and Other Information</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            70. Preferences of the proposed partner and other specific information of the proposer
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Astrology</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            71. Horoscope
                            72. Attitudes of the family in astrology
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <strong>Photos & Videos</strong>
                    </div>
                    <div class="col-9">
                        <p>
                            73. More photos and videos are collected for clear identification. It gives you the opportunity to save time, money, energy on visiting homes and people.
                        </p>
                    </div>
                </div>
                <hr>
                <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">OK</button>
                </p>
            </div>
        </div>
        <!-- End of 70 importan modal -->
    </div>
    <div class="row steps-section mt-2 mb-5">
        <div class="container">
            <div class="row pt-2">
                <p style="font-weight: 500; font-size: 0.9em; text-align: right;" class="col-12 pb-0 mb-0">Steps</p>
                <h3 style="font-weight: bold; text-transform: uppercase; text-align: right" class="col-12">Simple Steps To Partner</h3>
            </div>
            <div class="row pt-3">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="steps-element d-flex" style=" display: table-cell; vertical-align: middle;">
                        <p class="step-header" style="background-color: #4BB75E; margin: 0 !important;">1
                            <span style="font-size: 0.25em !important; position: absolute; bottom:0px;">STEP</span>
                        </p>
                        <p class="step-title" style="margin: 0;">Post Your Profile Free Of Charge</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="steps-element d-flex" style=" display: table-cell;  vertical-align: middle;">
                        <p class="step-header" style="background-color: #FFC232; margin: 0 !important;">2
                            <span style="font-size: 0.25em !important; position: absolute; bottom:0px;">STEP</span>
                        </p>
                        <p class="step-title">Search Your Partner
                            <span style="font-size: 0.7em !important; position: absolute; bottom:20px;">(All Over Sri Lanka)</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="steps-element d-flex" style=" display: table-cell;  vertical-align: middle;">
                        <p class="step-header" style="background-color: #ED2C52; margin: 0 !important;">3
                            <span style="font-size: 0.25em !important; position: absolute; bottom:0px;">STEP</span>
                        </p>
                        <p class="step-title">Marry If Trust Verified
                            <span style="font-size: 0.7em !important; position: absolute; bottom:20px;">(Trust Guaranteed By Our Service)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>

<!-- <script>
     $('.card-service').on('click', function() {
         $('.card-service').toggleClass('flipped');
     });
 </script> -->

 <script src="<?= base_url("Resources/js/login.js")?>"></script>