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

    .uk-modal-dialog {
        width: 800px !important;
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


    .modal-title {
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
        font-size: 1em;
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
        width: 80px;
        height: 80px;
        margin: 0 auto;
        position: relative;
        z-index: 0;
        border-radius: 50%;
        /* background: #b52b4a; */
        background: #FFFFFF;

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


    .advantage-model .icon {
        line-height: 1.3;
        position: relative;
        width: 80px;
        height: 80px;
        margin: 0 auto;
        position: relative;
        z-index: 0;
        border-radius: 50%;
        /* background: #b52b4a; */
        background: #FFFFFF;

        -webkit-box-shadow: 0px 10px 30px -4px rgb(0 0 0 / 15%);
        -moz-box-shadow: 0px 10px 30px -4px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 10px 30px -4px rgb(0 0 0 / 15%);
        font-size: 30px;
        color: #fff;
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
            /* background: #1A4668; */
        }

        .mobile-drop-shadow {
            box-shadow:
                0 0.7px 2.2px rgba(0, 0, 0, 0.02),
                0 1.7px 5.3px rgba(0, 0, 0, 0.028),
                0 3.3px 10px rgba(0, 0, 0, 0.035),
                0 5.8px 17.9px rgba(0, 0, 0, 0.042),
                0 10.9px 33.4px rgba(0, 0, 0, 0.05),
                0 26px 80px rgba(0, 0, 0, 0.07);

        }

        .caption-para {
            font-size: 16px;
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

<div class="container-fluid">
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
                        <div class="row mobile-drop-shadow">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 p-0">
                                <select class="form-control">
                                    <option><?= lang('im_looking_for'); ?></option>
                                    <option><?= lang('male_search'); ?></option>
                                    <option><?= lang('female_search'); ?></option>
                                </select>
                            </div>
                            <div class="col-6 col-lg-2 col-md-2 col-sm-6 col-xs-6 p-0">
                                <select class="form-control">
                                    <option><?= lang('age_from'); ?></option>
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
                                    <option><?= lang('age_to'); ?></option>
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
                                    <option><?= lang('religion'); ?></option>
                                    <option value=""><?= lang('buddhist'); ?></option>
                                    <option value=""><?= lang('hindu'); ?></option>
                                    <option value=""><?= lang('islam'); ?></option>
                                    <option value=""><?= lang('christians'); ?></option>
                                    <option value=""><?= lang('romanCatholic'); ?></option>
                                    <option value=""><?= lang('other'); ?></option>
                                </select>
                            </div>
                            <div class="col-6 col-lg-2 col-md-2 col-sm-6 col-xs-6 p-0">
                                <select class="form-control">
                                    <option><?= lang('mother_tongue'); ?></option>
                                    <option>සිංහල</option>
                                    <option>English</option>
                                    <option>தமிழ்</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                <button type="button" class="btn btn-danger wrn-btn" data-toggle="modal" data-target="#exampleModal"><?= lang('search'); ?></button>
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
                <!-- <div class="col-md-4">
                    <img src="<?= base_url("resources/images/sathutulanka_1.png") ?>" alt="Sathutulanka.LK" style="width: 300px;" class="mt-3">
                </div> -->
                <div class="col-12">
                    <div class="site-caption-1">
                        <p style="font-weight: 500; text-align: right; font-size: 0.9em;" class="col-12 pb-0 pr-0 mb-0">Sathutulanka.lk</p>
                        <h3 style="font-weight: bold; text-align: right; text-transform: uppercase;"><?= lang('who_we_are'); ?></h3>
                        <p class="caption-para">
                            <?= lang('who_we_are_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row our-services-section" style="background-color: #f5f5f5; clip-path: polygon(75% 14%, 100% 0, 100% 76%, 0 100%, 0 0); padding-bottom: 100px;"> -->
    <div class="row our-services-section mt-3 pb-4" style="background-color: #f5f5f5;">
        <div class="container transcroller-body">
            <div class="row  pt-4">
                <p style="font-weight: 500; font-size: 0.9em;" class="col-12 pb-0 mb-0"><?= lang('our_services'); ?></p>
                <h3 style="font-weight: bold; text-transform: uppercase;" class="col-12"><?= lang('what_we_offer'); ?></h3>
            </div>

            <div class="row pt-4 services">
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center" style="background: #9A0001;">
                            <!-- <i class="far fa-handshake"></i> -->
                            <img src="<?= base_url("resources/images/Image2.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading"><?= lang('trust'); ?></h4>
                            <p><?= lang('trust_title'); ?></p>
                            <p class="read-more"><a href="#modal-container" uk-toggle><?= lang('read_more'); ?></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-user-shield"></i> -->
                            <img src="<?= base_url("resources/images/Image9.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading"><?= lang('privacy'); ?></h4>
                            <p><?= lang('privacy_title'); ?></p>
                            <p class="read-more"><a href="#modal-container" uk-toggle><?= lang('read_more'); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-coins"></i> -->
                            <img src="<?= base_url("resources/images/Image6.png") ?>" alt="Trust" style="padding: 12px;">
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading"><?= lang('save_money'); ?></h4>
                            <p><?= lang('save_money_title'); ?></p>
                            <p class="read-more"><a href="#modal-container" uk-toggle><?= lang('read_more'); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <!-- <i class="far fa-heart"></i> -->
                            <img src="<?= base_url("resources/images/Image1.png") ?>" alt="Trust" style="padding: 10px; margin-left: 8px;">
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading"><?= lang('love_proposal'); ?></h4>
                            <p><?= lang('love_proposal_title'); ?></p>
                            <p class="read-more"><a href="#modal-container" uk-toggle><?= lang('read_more'); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <!-- <i class="fas fa-sync-alt"></i> -->
                            <img src="<?= base_url("resources/images/Image4.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading"><?= lang('after_marriage'); ?></h4>
                            <p><?= lang('after_marriage_title'); ?></p>
                            <p class="read-more"><a href="#modal-container" uk-toggle><?= lang('read_more'); ?></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-block d-flex service-card">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <!-- <i class="far fa-laugh-wink"></i> -->
                            <img src="<?= base_url("resources/images/Image10.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <div class="media-body pl-3">
                            <h4 class="heading"><?= lang('always_free'); ?></h4>
                            <p><?= lang('always_free_title'); ?></p>
                            <p class="read-more"><a href="#modal-container" uk-toggle><?= lang('read_more'); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Advantages modal -->
        <div id="modal-container" class="advantage-model" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h2 class="uk-modal-title text-center" style="color: #0f6ecd;"><strong><?= lang('advantages_of_sathutulanka'); ?></strong></h2>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3" style="background: #9A0001;">
                            <img src="<?= base_url("resources/images/Image2.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('trust_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_trust'); ?>

                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <img src="<?= base_url("resources/images/Image6.png") ?>" alt="Trust" style="padding: 12px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('save_money_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_save_money'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <img src="<?= base_url("resources/images/Image10.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('always_free_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_always_free'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <img src="<?= base_url("resources/images/Image9.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('privacy_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_privacy'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <img src="<?= base_url("resources/images/Image1.png") ?>" alt="Trust" style="padding: 10px; margin-left: 8px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('love_proposal_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_love_proposal'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <img src="<?= base_url("resources/images/Image4.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('after_marriage_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_after_marriage'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <img src="<?= base_url("resources/images/Member.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('marriage_seeker_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_marriage_seeker'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <img src="<?= base_url("resources/images/Search.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('search_engine_convenience_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_search_engine_convenience'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3">
                            <img src="<?= base_url("resources/images/Security.png") ?>" alt="Trust" style="padding: 10px;">
                        </div>
                        <h4 class="text-center"><strong><?= lang('single_attention_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_single_attention'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="icon d-flex justify-content-center align-items-center mb-3" style="box-shadow: none;">
                            <img src="<?= base_url("resources/images/Premium.png") ?>" alt="Trust" style="">
                        </div>
                        <h4 class="text-center"><strong><?= lang('premium_membership_title'); ?></strong></h4>
                        <p><?= lang('advantages_of_sathutulanka_premium_membership'); ?></p>
                    </div>
                </div>
                <hr>
                <p class="uk-text-right" style="float: right;">
                    <button class="uk-button uk-button-primary uk-modal-close" type="button"><?= lang('ok'); ?></button>
                </p>
            </div>
        </div>
        <!-- End of read more modal -->

        <!-- 70 importan modal -->
        <div id="modal-70" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <h2 class="uk-modal-title text-center" style="color: #0f6ecd;"><strong><?= lang('70_important_mattters'); ?></strong></h2>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('basic_information'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('basic_information_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('residences_and_contacts'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('residences_and_contact_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4> <strong><?= lang('physical_status'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('physical_status_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('background'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('background_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('lifeStyle'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('lifeStyle_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('partners_attitudes'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('partners_attitudes_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('education'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('education_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('career'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('career_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('personal_assets'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('personal_assets_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('family'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('family_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('after_marriage'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('after_marriage_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('partner_preferences_and_other_information'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('partner_preferences_and_other_information_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('astrology'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('astrology_details'); ?></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h4><strong><?= lang('photos_and_videos'); ?></strong></h4>
                    </div>
                    <div class="col-md-9">
                        <p><?= lang('photos_and_videos_details'); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p style="border: 2px #ffab00 solid; padding: 10px;"><strong><?= lang('70_important_mattters_note'); ?></strong></p>
                    </div>
                </div>
                <p class="uk-text-right">
                    <button class="uk-button uk-button-primary uk-modal-close" type="button"><?= lang('ok'); ?></button>
                </p>
            </div>
        </div>
        <!-- End of 70 importan modal -->
    </div>
    <div class="row steps-section mt-2 mb-5">
        <div class="container">
            <div class="row pt-2">
                <p style="font-weight: 500; font-size: 0.9em; text-align: right;" class="col-12 pb-0 mb-0"><?= lang('steps'); ?></p>
                <h3 style="font-weight: bold; text-transform: uppercase; text-align: right" class="col-12"><?= lang('steps_title'); ?></h3>
            </div>
            <div class="row pt-3">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-3 mt-lg-0">
                    <div class="steps-element d-flex" style=" display: table-cell; vertical-align: middle;">
                        <p class="step-header" style="background-color: #4BB75E; margin: 0 !important;">1
                            <span style="font-size: 0.25em !important; position: absolute; bottom:0px; text-transform: uppercase;"><?= lang('step'); ?></span>
                        </p>
                        <p class="step-title" style="margin: 0;"><?= lang('step_1_title'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-3 mt-lg-0">
                    <div class="steps-element d-flex" style=" display: table-cell;  vertical-align: middle;">
                        <p class="step-header" style="background-color: #FFC232; margin: 0 !important;">2
                            <span style="font-size: 0.25em !important; position: absolute; bottom:0px; text-transform: uppercase;"><?= lang('step'); ?></span>
                        </p>
                        <p class="step-title"><?= lang('step_2_title'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-3 mt-lg-0">
                    <div class="steps-element d-flex" style=" display: table-cell;  vertical-align: middle;">
                        <p class="step-header" style="background-color: #ED2C52; margin: 0 !important;">3
                            <span style="font-size: 0.25em !important; position: absolute; bottom:0px; text-transform: uppercase;"><?= lang('step'); ?></span>
                        </p>
                        <p class="step-title"><?= lang('step_3_title'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $string = exec('getmac');
    $mac = substr($string, 0, 17);
    echo "Your MAC Address : " . $mac . " (Testing Purpose Only)";
    ?>
</div>


</div>

<!-- <script>
     $('.card-service').on('click', function() {
         $('.card-service').toggleClass('flipped');
     });
 </script> -->

<script src="<?= base_url("Resources/js/login.js") ?>"></script>