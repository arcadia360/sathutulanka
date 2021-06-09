<style>
    input[type="range"] {
        --thumbSize: 18px;
        --trackSize: 10px;
        --thumbBg: rgb(255, 255, 255);
        --trackBg: rgb(211, 211, 211);
        --progressBg: rgb(30, 221, 16);
        --webkitProgressPercent: 0%;
    }

    input[type="range"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        height: var(--thumbSize);
        width: 100%;
        margin: 0;
        padding: 0;

    }

    input[type="range"]:focus {
        outline: none;
    }

    /* Thumb */
    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: var(--thumbSize);
        height: var(--thumbSize);
        background-color: var(--thumbBg);
        border-radius: 4px;
        border: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        margin-top: calc(((var(--thumbSize) - var(--trackSize)) / 2) * -1);
        cursor: pointer;
    }

    input[type="range"]::-moz-range-thumb {
        -moz-appearance: none;
        appearance: none;
        width: var(--thumbSize);
        height: var(--thumbSize);
        background-color: var(--thumbBg);
        border-radius: 4px;
        border: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        margin-top: calc(((var(--thumbSize) - var(--trackSize)) / 2) * -1);
        cursor: pointer;
    }

    input[type="range"]::-ms-thumb {
        -ms-appearance: none;
        appearance: none;
        width: var(--thumbSize);
        height: var(--thumbSize);
        background-color: var(--thumbBg);
        border-radius: 4px;
        border: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        margin-top: calc(((var(--thumbSize) - var(--trackSize)) / 2) * -1);
        cursor: pointer;
    }

    /* Track */
    input[type="range"]::-webkit-slider-runnable-track {
        height: var(--trackSize);
        background-image: linear-gradient(90deg,
                var(--progressBg) var(--webkitProgressPercent),
                var(--trackBg) var(--webkitProgressPercent));
        border-radius: calc(var(--trackSize) / 2);
    }

    input[type="range"]::-moz-range-track {
        height: var(--trackSize);
        background-color: var(--trackBg);
        border-radius: calc(var(--trackSize) / 2);
    }

    input[type="range"]::-ms-track {
        height: var(--trackSize);
        background-color: var(--trackBg);
        border-radius: calc(var(--trackSize) / 2);
    }

    /* Progress */
    input[type="range"]::-moz-range-progress {
        height: var(--trackSize);
        background-color: var(--progressBg);
        border-radius: calc(var(--trackSize) / 2) 0 0 calc(var(--trackSize) / 2);
    }

    input[type="range"]::-ms-fill-lower {
        height: var(--trackSize);
        background-color: var(--progressBg);
        border-radius: calc(var(--trackSize) / 2) 0 0 calc(var(--trackSize) / 2);
    }
</style>

<style>
    .ui-widget-header {

        /* background: #bdc1c8 url(<?= base_url('resources/images/ui-bg_diagonals-thick_18_b81900_40x40_dk_green.png') ?>) 50% 50% !important; */
        background: #37AEB6 !important;

    }

    .ui-widget-content {
        background: #FFFFFF !important;

        box-shadow:
            0 1px 2.2px rgba(0, 0, 0, 0.02),
            0 2.4px 5.3px rgba(0, 0, 0, 0.028),
            0 4.5px 10px rgba(0, 0, 0, 0.035),
            0 8px 17.9px rgba(0, 0, 0, 0.042),
            0 15px 33.4px rgba(0, 0, 0, 0.05),
            0 36px 80px rgba(0, 0, 0, 0.07);


    }

    .ui-widget.ui-widget-content {
        border: none !important;
    }

    .ui-state-default,
    .ui-widget-content .ui-state-default,
    .ui-widget-header .ui-state-default {
        /* border: 1px solid #cccccc; */
        /* background: #f6f6f6 url(images/ui-bg_glass_100_f6f6f6_1x400.png) 50% 50% repeat-x; */
        /* font-weight: bold;
        color: #1c94c4; */
        /*Touch Enabling CSS Atribute */
        touch-action: pan-y;
        -ms-touch-action: pan-y;
        -moz-touch-action: pan-y;
        -o-touch-action: pan-y;
    }

    .ui-slider-horizontal .ui-slider-handle {
        top: -5px !important;
        margin-left: -.6em;
        background: #37AEB6 !important;
        border: 3px solid #FFFFFF !important;
        border-radius: 50% !important;
        width: 25px !important;
        height: 25px !important;

        box-shadow:
            0 0px 3.8px rgba(0, 0, 0, 0.017),
            0 0px 7.3px rgba(0, 0, 0, 0.024),
            0 0px 10.6px rgba(0, 0, 0, 0.03),
            0 0px 13.8px rgba(0, 0, 0, 0.035),
            0 0px 17.2px rgba(0, 0, 0, 0.04),
            0 0px 21.7px rgba(0, 0, 0, 0.046),
            0 0px 29.8px rgba(0, 0, 0, 0.053),
            0 0px 80px rgba(0, 0, 0, 0.07);



    }

    .ui-slider-horizontal .ui-slider-handle:focus-visible {
        outline: none !important;
        -ms-outline: none !important;
        -moz-outline: none !important;
        -o-outline: none !important;
        -webkit-outline: none !important;

    }
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script> <!-- << Touch Supporting Jquery File -->



<div class="offset-lg-3 col-lg-6 main-section">
    <h3 class="text-center text-inverse title">Who Am I</h3>
    <div class="row">
        <div class="col-12">
            <button class="btn btn-info float-right" type="button" id="btnSkip">Skip this step &nbsp; <i class="fas fa-forward"></i></button>
        </div>
    </div>
    <br>
    <form method="post" action="<?= base_url('Registration/addWhoAmIDetails') ?>" id="addWhoAmIDetails">
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Openness to Experience</h6>
                <p>Enjoy new experiences, A wide variety of interests, Imaginative, Creative, Adventure, Daring, Love of learning and Art, Likes meeting new people, Not much more traditional.</p>
                <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                <div id="OpennessToExperience"></div>
                <p>Value<input class="tansparentInput" type="text" id="OpennessToExperienceValue" name="OpennessToExperienceValue"></p>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Conscientiousness</h6>
                <p>Good impulse control, Goal-directed behavior, Self-disciplined, Think about how their behavior affects others, Hardworking, Methodical.</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="conscientiousness"></div>
                    <p>Value <input class="tansparentInput" type="text" id="conscientiousnessValue" name="conscientiousnessValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Extrovert Personality</h6>
                <p>Sociable interacting with others, Friendly, Talkative, Fun loving, Enjoy meeting new people, has a wide social circle of friends. High amounts of emotional expressiveness.</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="ExtrovertPersonality"></div>
                    <p>Value<input class="tansparentInput" type="text" id="ExtrovertPersonalityValue" name="ExtrovertPersonalityValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Introvert Personality</h6>
                <p>Quiet, Reserved, Introspective, Feels exhausted when having to socialize a lot, Dislikes being the center of attention (opposite of extroversion).</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="IntrovertPersonality"></div>
                    <p>Value<input class="tansparentInput" type="text" id="IntrovertPersonalityValue" name="IntrovertPersonalityValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Agreeableness</h6>
                <p>Kind, Trusting, Humble, patient, Tactful, Polite, Unselfish, Helpfulness, Sensitive, Enjoys and contributing to the happiness of other people, Feels empathy.</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="Agreeableness"></div>
                    <p>Value<input class="tansparentInput" type="text" id="AgreeablenessValue" name="AgreeablenessValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Neuroticism</h6>
                <p>Get upset easily, Emotional instability, Over sensitive Moody, Timid.</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="Neuroticism"></div>
                    <p>Value<input class="tansparentInput" type="text" id="NeuroticismValue" name="NeuroticismValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Family Bond</h6>
                <p>Importance of your family's opinion while selecting your partner, how likely do you allow family to be involved in your relationship? Living with parents after marriage.</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="FamilyBond"></div>
                    <p>Value<input class="tansparentInput" type="text" id="FamilyBondValue" name="FamilyBondValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Money</h6>
                <p>How important is your partner's wealth, asset, dowry, job in a marriage?</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="money"></div>
                    <p>Value<input class="tansparentInput" type="text" id="moneyValue" name="moneyValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Religious</h6>
                <p>How important is religion in your life? How important your spouse believes in religion? Having strong religious attitudes and activities.</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="Religious"></div>
                    <p>Value<input class="tansparentInput" type="text" id="ReligiousValue" name="ReligiousValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Physically Active</h6>
                <p>Exercise once or twice a week, Prefer with sports, Gardening, Climbing the stairs, Dancing, Walking.</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="PhysicallyActive"></div>
                    <p>Value<input class="tansparentInput" type="text" id="PhysicallyActiveValue" name="PhysicallyActiveValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Politics</h6>
                <p>About Politic Involve.</p>
                <div class="slidecontainer">

                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="Politics"></div>
                    <p>Value<input class="tansparentInput" type="text" id="PoliticsValue" name="PoliticsValue"></p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Knowledge</h6>
                <p>Are you often interested in gaining the knowledge and listening to news?</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="Knowledge"></div>
                    <p>Value<input class="tansparentInput" type="text" id="KnowledgeValue" name="KnowledgeValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">Love Affairs</h6>
                <p>The importance of love affairs of you and your partner before marriage.</p>
                <div class="slidecontainer">
                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="LoveAffairs"></div>
                    <p>Value<input class="tansparentInput" type="text" id="LoveAffairsValue" name="LoveAffairsValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">The importance of male & female virginity.</h6>
                <div class="slidecontainer">

                    <p class="PercentageText">0% <span class="float-right">100%</span> </p>
                    <div id="ImportanceOfVirginity"></div>
                    <p>Value<input class="tansparentInput" type="text" id="ImportanceOfVirginityValue" name="ImportanceOfVirginityValue"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h6 class="font-weight-bold">My interests and Hobbies</h6>
                <div class="container">
                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Enrichment Hobbies</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Study / Reading / Writing" id="EnrichmentHobieschk1" name="EnrichmentHobies[]">
                                    <label class="form-check-label" for="EnrichmentHobieschk1">
                                        Study / Reading / Writing
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Museums / Galleries" id="EnrichmentHobieschk2" name="EnrichmentHobies[]">
                                    <label class="form-check-label" for="EnrichmentHobieschk2">
                                        Museums / Galleries
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Technology" id="EnrichmentHobieschk3" name="EnrichmentHobies[]">
                                    <label class="form-check-label" for="EnrichmentHobieschk3">
                                        Technology
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Net surfing" id="EnrichmentHobieschk4" name="EnrichmentHobies[]">
                                    <label class="form-check-label" for="EnrichmentHobieschk4">
                                        Net surfing
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Meditation" id="EnrichmentHobieschk5" name="EnrichmentHobies[]">
                                    <label class="form-check-label" for="EnrichmentHobieschk5">
                                        Meditation
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Watching" id="EnrichmentHobieschk6" name="EnrichmentHobies[]">
                                    <label class="form-check-label" for="EnrichmentHobieschk6">
                                        Watching
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input EnrichmentHobies" type="checkbox" value="Details in Writing" id="EnrichmentHobieschk7" name="EnrichmentHobies[]">
                                    <label class="form-check-label" for="EnrichmentHobieschk7">
                                        Details in Writing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Sports / Physical activities</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Jogging" id="Sports-Physicalactivitieschk1" name="Sports-Physicalactivities[]">
                                    <label class="form-check-label" for="Sports-Physicalactivitieschk1">
                                        Jogging
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Exercise" id="Sports-Physicalactivitieschk2" name="Sports-Physicalactivities[]">
                                    <label class="form-check-label" for="Sports-Physicalactivitieschk2">
                                        Exercise
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Martial Arts" id="Sports-Physicalactivitieschk3" name="Sports-Physicalactivities[]">
                                    <label class="form-check-label" for="Sports-Physicalactivitieschk3">
                                        Martial Arts
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Yoga" id="Sports-Physicalactivitieschk4" name="Sports-Physicalactivities[]">
                                    <label class="form-check-label" for="Sports-Physicalactivitieschk4">
                                        Yoga
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Adventure Sports" id="Sports-Physicalactivitieschk5" name="Sports-Physicalactivities[]">
                                    <label class="form-check-label" for="Sports-Physicalactivitieschk5">
                                        Adventure Sports
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Outdoor sports" id="Sports-Physicalactivitieschk6" name="Sports-Physicalactivities[]">
                                    <label class="form-check-label" for="Sports-Physicalactivitieschk6">
                                        Outdoor sports
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Technology" id="Sports-Physicalactivitieschk7" name="Sports-Physicalactivities[]">
                                    <label class="form-check-label" for="Sports-Physicalactivitieschk7">
                                        Technology
                                    </label>
                                </div>
                            </div> -->
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Details in Writing" id="Sports-Physicalactivitieschk8" name="Sports-Physicalactivities[]">
                                    <label class="form-check-label" for="Sports-Physicalactivitieschk8">
                                        Details in Writing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Social Activites</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input SocialActivities" type="checkbox" value="Social Service" id="SocialActivitieschk1" name="SocialActivities[]">
                                    <label class="form-check-label" for="SocialActivitieschk1">
                                        Social Service
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input SocialActivities" type="checkbox" value="Volunteering" id="SocialActivitieschk2" name="SocialActivities[]">
                                    <label class="form-check-label" for="SocialActivitieschk2">
                                        Volunteering
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input SocialActivities" type="checkbox" value="Politics" id="SocialActivitieschk3" name="SocialActivities[]">
                                    <label class="form-check-label" for="SocialActivitieschk3">
                                        Politics
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input SocialActivities" type="checkbox" value="Party clubbing" id="SocialActivitieschk4" name="SocialActivities[]">
                                    <label class="form-check-label" for="SocialActivitieschk4">
                                        Party clubbing
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input SocialActivities" type="checkbox" value="Religion" id="SocialActivitieschk5" name="SocialActivities[]">
                                    <label class="form-check-label" for="SocialActivitieschk5">
                                        Religion
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input SocialActivities" type="checkbox" value="Dining" id="SocialActivitieschk6" name="SocialActivities[]">
                                    <label class="form-check-label" for="SocialActivitieschk6">
                                        Dining
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input SocialActivities" type="checkbox" value="Spending time with friends" id="SocialActivitieschk7" name="SocialActivities[]">
                                    <label class="form-check-label" for="SocialActivitieschk7">
                                        Spending time with friends
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input SocialActivities" type="checkbox" value="Details in Writing" id="SocialActivitieschk8" name="SocialActivities[]">
                                    <label class="form-check-label" for="SocialActivitieschk8">
                                        Details in Writing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Creative Hobbies</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Drawing" id="CreatvieHobieschk1" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk1">
                                        Drawing
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Dancing" id="CreatvieHobieschk2" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk2">
                                        Dancing
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Fashion & Style" id="CreatvieHobieschk3" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk3">
                                        Fashion & Style
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Acting" id="CreatvieHobieschk4" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk4">
                                        Acting
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Handy Craft" id="CreatvieHobieschk5" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk5">
                                        Handy Craft
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Sewing" id="CreatvieHobieschk6" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk6">
                                        Sewing
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Music" id="CreatvieHobieschk7" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk7">
                                        Music
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Photography" id="CreatvieHobieschk8" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk8">
                                        Photography
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CreatvieHobies" type="checkbox" value="Details in Writing" id="CreatvieHobieschk9" name="CreatvieHobies[]">
                                    <label class="form-check-label" for="CreatvieHobieschk9">
                                        Details in Writing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Collecting Hobbies</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CollectingHobbies" type="checkbox" value="Antiques" id="CollectingHobbieschk1" name="CollectingHobbies[]">
                                    <label class="form-check-label" for="CollectingHobbieschk1">
                                        Antiques
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CollectingHobbies" type="checkbox" value="Books / Magazines" id="CollectingHobbieschk2" name="CollectingHobbies[]">
                                    <label class="form-check-label" for="CollectingHobbieschk2">
                                        Books / Magazines
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CollectingHobbies" type="checkbox" value="Collecting stamps" id="CollectingHobbieschk3" name="CollectingHobbies[]">
                                    <label class="form-check-label" for="CollectingHobbieschk3">
                                        Collecting stamps
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CollectingHobbies" type="checkbox" value="Coins" id="CollectingHobbieschk4" name="CollectingHobbies[]">
                                    <label class="form-check-label" for="CollectingHobbieschk4">
                                        Coins
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input CollectingHobbies" type="checkbox" value=" Details in Writing" id="CollectingHobbieschk5" name="CollectingHobbies[]">
                                    <label class="form-check-label" for="CollectingHobbieschk5">
                                        Details in Writing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Outdoors Hobbies</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Hiking" id="outdoorHobieschk1" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk1">
                                        Hiking
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Fishing" id="outdoorHobieschk2" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk2">
                                        Fishing
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Camping" id="outdoorHobieschk3" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk3">
                                        Camping
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Bird-watching" id="outdoorHobieschk4" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk4">
                                        Bird-watching
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Gardening" id="outdoorHobieschk5" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk5">
                                        Gardening
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Nature" id="outdoorHobieschk6" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk6">
                                        Nature
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Hunting" id="outdoorHobieschk7" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk7">
                                        Hunting
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Driving" id="outdoorHobieschk8" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk8">
                                        Driving
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Shopping" id="outdoorHobieschk9" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk9">
                                        Shopping
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Travel / Sight seeing" id="outdoorHobieschk10" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk10">
                                        Travel / Sight seeing
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input outdoorHobies" type="checkbox" value="Details in Writing" id="outdoorHobieschk11" name="outdoorHobies[]">
                                    <label class="form-check-label" for="outdoorHobieschk11">
                                        Details in Writing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Domestic Hobbies</h6>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Knitting" id="domesticHobbieschk1" name="domesticHobbies[]">
                                    <label class="form-check-label" for="domesticHobbieschk1">
                                        Knitting
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Pets" id="domesticHobbieschk2" name="domesticHobbies[]">
                                    <label class="form-check-label" for="domesticHobbieschk2">
                                        Pets
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Cooking" id="domesticHobbieschk3" name="domesticHobbies[]">
                                    <label class="form-check-label" for="domesticHobbieschk3">
                                        Cooking
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Spending time with family" id="domesticHobbieschk4" name="domesticHobbies[]">
                                    <label class="form-check-label" for="domesticHobbieschk4">
                                        Spending time with family
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Sports indoor" id="domesticHobbieschk5" name="domesticHobbies[]">
                                    <label class="form-check-label" for="domesticHobbieschk5">
                                        Sports indoor
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Home interior decoration" id="domesticHobbieschk6" name="domesticHobbies[]">
                                    <label class="form-check-label" for="domesticHobbieschk6">
                                        Home interior decoration
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input domesticHobbies" type="checkbox" value="Details in Writing" id="domesticHobbieschk7" name="domesticHobbies[]">
                                    <label class="form-check-label" for="domesticHobbieschk7">
                                        Details in Writing
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-info" id="btnBack" type="button"><i class="fas fa-angle-double-left"></i> &nbsp; BACK</button>
                <button class="btn btn-info float-right" type="button" id="btnSubmit">Next &nbsp; <i class="fas fa-angle-double-right"></i></button>
            </div>
        </div>
    </form>
</div>
<!-- Container Area End -->

<!-- <button type="button" id="sampleValueSetToSlider">set valu</button> -->


<script>
    $(function() {

        // var Member = function() {
        //     this.MemberID = 0;
        // }
        // var model = new Member();
        // model.MemberID = (<?= $this->session->userdata('member_id') ?>);

        // ajaxCall('registration/getMemberData', model, function(response) {

        //     if (response.intOpennessToExperience != null) {
        //         $('#OpennessToExperience').slider("option", "value", response.intOpennessToExperience);
        //         $("#OpennessToExperienceValue").val(response.intOpennessToExperience + "%");
        //         // $('#conscientiousnessValue').val(response.intConscientiousness);
        //         // $('#ExtrovertPersonalityValue').val(response.intExtrovertPersonality);
        //         // $('#OpennessToExperience').val(response.intIntrovertPersonality);
        //         // $('#OpennessToExperience').val(response.intAgreeableness);
        //         // $('#OpennessToExperience').val(response.intNeuroticism);
        //         // $('#OpennessToExperience').val(response.intFamilyBond);
        //         // $('#OpennessToExperience').val(response.intMoney);
        //         // $('#OpennessToExperience').val(response.intReligious);
        //         // $('#OpennessToExperience').val(response.intPhysicallyActive);
        //         // $('#OpennessToExperience').val(response.IntPolitics);
        //         // $('#OpennessToExperience').val(response.intKnowledge);
        //         // $('#OpennessToExperience').val(response.intLoveAffairs);
        //         // $('#OpennessToExperience').val(response.intimportanceVirginity);

        //     }


        // });

        // manage range slider start
        //slider openness to experiance

        $('#sampleValueSetToSlider').click(function() {
            $('#OpennessToExperience').slider("option", "value", 10);
        });

        $("#OpennessToExperience").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#OpennessToExperienceValue").val(ui.value + "%");
            }
        });
        $("#OpennessToExperienceValue").val($("#OpennessToExperience").slider("value") + "%");

        // slider cooncientinous
        $("#conscientiousness").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#conscientiousnessValue").val(ui.value + "%");
            }
        });
        $("#conscientiousnessValue").val($("#conscientiousness").slider("value") + "%");

        //slider extrovert personality
        $("#ExtrovertPersonality").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#ExtrovertPersonalityValue").val(ui.value + "%");
            }
        });
        $("#ExtrovertPersonalityValue").val($("#ExtrovertPersonality").slider("value") + "%");

        //slider introvert personality
        $("#IntrovertPersonality").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#IntrovertPersonalityValue").val(ui.value + "%");
            }
        });
        $("#IntrovertPersonalityValue").val($("#IntrovertPersonality").slider("value") + "%");

        //slider agreebleness personality
        $("#Agreeableness").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#AgreeablenessValue").val(ui.value + "%");
            }
        });
        $("#AgreeablenessValue").val($("#Agreeableness").slider("value") + "%");

        //slider Neuroticism personality
        $("#Neuroticism").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#NeuroticismValue").val(ui.value + "%");
            }
        });
        $("#NeuroticismValue").val($("#Neuroticism").slider("value") + "%");

        //slider Family Bond personality
        $("#FamilyBond").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#FamilyBondValue").val(ui.value + "%");
            }
        });
        $("#FamilyBondValue").val($("#FamilyBond").slider("value") + "%");

        //slider money Bond personality
        $("#money").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#moneyValue").val(ui.value + "%");
            }
        });
        $("#moneyValue").val($("#money").slider("value") + "%");

        //slider Religious Bond personality
        $("#Religious").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#ReligiousValue").val(ui.value + "%");
            }
        });
        $("#ReligiousValue").val($("#Religious").slider("value") + "%");

        //slider physically Active Bond personality
        $("#PhysicallyActive").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#PhysicallyActiveValue").val(ui.value + "%");
            }
        });
        $("#PhysicallyActiveValue").val($("#PhysicallyActive").slider("value") + "%");

        //slider Politics Bond personality
        $("#Politics").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#PoliticsValue").val(ui.value + "%");
            }
        });
        $("#PoliticsValue").val($("#Politics").slider("value") + "%");

        //slider Knowledge Bond personality
        $("#Knowledge").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#KnowledgeValue").val(ui.value + "%");
            }
        });
        $("#KnowledgeValue").val($("#Knowledge").slider("value") + "%");

        //slider LoveAffairs Bond personality
        $("#LoveAffairs").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#LoveAffairsValue").val(ui.value + "%");
            }
        });
        $("#LoveAffairsValue").val($("#LoveAffairs").slider("value") + "%");

        //slider ImportanceOfVirginity personality
        $("#ImportanceOfVirginity").slider({
            range: "min",
            value: 50,
            min: 1,
            max: 100,
            slide: function(event, ui) {
                $("#ImportanceOfVirginityValue").val(ui.value + "%");
            }
        });
        $("#ImportanceOfVirginityValue").val($("#ImportanceOfVirginity").slider("value") + "%");


        // disable inputs
        disableInputs();

        function disableInputs() {
            $("#OpennessToExperienceValue").prop("disabled", true);
            $("#conscientiousnessValue").prop("disabled", true);
            $("#ExtrovertPersonalityValue").prop("disabled", true);
            $("#IntrovertPersonalityValue").prop("disabled", true);
            $("#AgreeablenessValue").prop("disabled", true);
            $("#NeuroticismValue").prop("disabled", true);
            $("#FamilyBondValue").prop("disabled", true);
            $("#moneyValue").prop("disabled", true);
            $("#ReligiousValue").prop("disabled", true);
            $("#PhysicallyActiveValue").prop("disabled", true);
            $("#PoliticsValue").prop("disabled", true);
            $("#KnowledgeValue").prop("disabled", true);
            $("#LoveAffairsValue").prop("disabled", true);
            $("#ImportanceOfVirginityValue").prop("disabled", true);
        }

        function enableInputs() {
            $("#OpennessToExperienceValue").prop("disabled", false);
            $("#conscientiousnessValue").prop("disabled", false);
            $("#ExtrovertPersonalityValue").prop("disabled", false);
            $("#IntrovertPersonalityValue").prop("disabled", false);
            $("#AgreeablenessValue").prop("disabled", false);
            $("#NeuroticismValue").prop("disabled", false);
            $("#FamilyBondValue").prop("disabled", false);
            $("#moneyValue").prop("disabled", false);
            $("#ReligiousValue").prop("disabled", false);
            $("#PhysicallyActiveValue").prop("disabled", false);
            $("#PoliticsValue").prop("disabled", false);
            $("#KnowledgeValue").prop("disabled", false);
            $("#LoveAffairsValue").prop("disabled", false);
            $("#ImportanceOfVirginityValue").prop("disabled", false);
        }
        // manage range slider end

        $('#btnBack').click(function() {
            window.location.href = "<?php echo base_url('Registration/lifeStyle') ?>";
        });

        $('#btnSubmit').click(function() {
            if ($('.EnrichmentHobies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select enrichment hobies !");
            } else if ($('.Sports-Physicalactivities[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select sports / physicalactivities !");
            } else if ($('.SocialActivities[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select social Activities !");
            } else if ($('.CreatvieHobies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select creative hobies !");
            } else if ($('.CollectingHobbies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select collecting hobbies !");
            } else if ($('.outdoorHobies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select outdoor hobies !");
            } else if ($('.domesticHobbies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select domestic hobbies !");
            } else {
                var form = $("#addWhoAmIDetails");
                enableInputs();
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Personal assets saved successfully !',
                                showConfirmButton: false,
                                timer: 2000
                            }).then((result) => {
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    window.location.href = "<?= base_url('Registration/education') ?>";
                                }
                            })
                        } else {
                            if (response.messages instanceof Object) {
                                $.each(response.messages, function(index, value) {
                                    var id = $("#" + index);
                                    id.closest('.form-group')
                                        .removeClass('has-error')
                                        .removeClass('has-success')
                                        .addClass(value.length > 0 ? 'has-error' : 'has-success');
                                    id.after(value);
                                });
                            } else {
                                toastr["error"](response.messages);
                                $(button).prop('disabled', false);
                            }
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Internal Server Error! Please contact system administrator.',
                        })
                    }
                });
                disableInputs();
            }
        });

        $('#btnSkip').click(function() {
            window.location.href = "<?php echo base_url('Registration/education') ?>";
        });

    });
</script>