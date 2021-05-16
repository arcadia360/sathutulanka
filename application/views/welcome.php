<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');

    * {
        /* margin: 0;
        padding: 0; */
        font-family: 'Open Sans', sans-serif;
        box-sizing: border-box;
    }

    /* slider */
    .slider {
        width: 100%;
        height: calc(100vh - 66px);
        /* height: 100vh; */
        margin: 0 !important;
        position: relative;
        /* background-color: #222222; */

    }

    .slider ul {
        /* width: 100%; */
        margin: 0;
        padding: 0;
        list-style: none;
        /* background-color: #222222; */
        /* opacity: 0.5; */
        /* height: 100vh; */

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
        /* background-color: #222222; */

        /* overflow: hidden; */
        animation-iteration-count: infinite;
        animation-duration: 24s;
        overflow: hidden;
        height: calc(100vh - 66px);

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
        font-family: "Roboto", sans-serif;
    }

    .search-area {
        width: 100%;
        /* background-color: yellow !important; */
        position: absolute;
        /* top: 60vh; */
        z-index: 1;
    }

    .search {
        padding: 2rem;
        /* width: 90%; */
        /* background: rgba(26, 70, 104, 0.51); */
        /* background-color: red; */
        /* position: inherit; */
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
        /* background-color: #b52b4a; */
    }

    .search-area .container {
        background-color: rgba(26, 70, 104, 0.51);
        padding: 30px 100px 30px 100px;
    }

    /* @media (min-width: 768px) {
        .search {
            position: relative;
            top: -30vh;
            background: rgba(26, 70, 104, 0.51);
        }
    } */

    @media (max-width: 768px) {
        .search-area {
            position: relative;
            background: #1A4668;
            /* top: -10vh; */
        }

        .slider {
            height: 30vh;
            /* height: 0; */

        }
    }

    @media (max-width: 900px) {
        .slider {
            /* height: 60vh; */
            /* height: auto !important; */
            /* position: relative; */
        }

        .search-area {
            /* top: 0 !important; */
            /* background-color: blue !important; */
        }
    }


    @media only screen and (min-width: 768px) {
        .search {
            top: -40vh;
        }


    }

    @media only screen and (min-width: 892px) {
        .search-area {
            /* background-color: pink !important; */
            top: 40vh;
        }

    }

    @media only screen and (min-width: 1200px) {
        .search-area {
            /* background-color: red !important; */
            top: 60vh;
        }

    }
</style>

<div class="container-fluid">
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
            <!-- <div class="searchX"> -->
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
            <!-- </div> -->
        </div>
    </div>
    <div class="row">
        <!-- ddd</div> -->
</div>