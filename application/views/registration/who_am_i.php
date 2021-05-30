<!-- <style>
    .slidecontainer {
        width: 100%;
    }

    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 25px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
    }

    .slider:hover {
        opacity: 1;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
        /* background: #4CAF50; */
        background: rgb(30, 221, 16);
        cursor: pointer;
    }

    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        background: #4CAF50;
        cursor: pointer;
    }

    /* range customize */
    input[type="range"] {
        --thumbSize: 18px !important;
        --thumbBg: rgb(255, 255, 255);
        --trackBg: rgb(211, 211, 211);
        --progressBg: rgb(76, 175, 80);

        /* webkit progress workaround */
        --webkitProgressPercent: 0%;
    }

    input[type="range"]::-webkit-slider-runnable-track {
        height: var(--trackSize);
        background-image: linear-gradient(90deg,
                var(--progressBg) var(--webkitProgressPercent),
                var(--trackBg) var(--webkitProgressPercent));
        border-radius: calc(var(--trackSize) / 2);
    }

    input[type="range"]::-moz-range-progress {
        height: var(--trackSize);
        background-color: var(--progressBg) !important;
        border-radius: calc(var(--trackSize) / 2) 0 0 calc(var(--trackSize) / 2);
    }

    input[type="range"]::-moz-range-track {
        height: var(--trackSize);
        background-color: var(--trackBg);
        border-radius: calc(var(--trackSize) / 2);
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
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
        background-color: var(--thumbBg);
        /* border-radius: calc(var(--thumbSize) / 2); */
        border-radius: 4px;
        border: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        margin-top: calc(((var(--thumbSize) - var(--trackSize)) / 2) * -1);
        cursor: pointer;
    }

    /* end range */
</style> -->


<style>
    input[type="range"] {
        --thumbSize: 18px;
        --trackSize: 10px;
        --thumbBg: rgb(255, 255, 255);
        --trackBg: rgb(211, 211, 211);
        --progressBg: rgb(30, 221, 16);

        /* webkit progress workaround */
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
        /* border-radius: calc(var(--thumbSize) / 2); */
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
        /* border-radius: calc(var(--thumbSize) / 2); */
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
        /* border-radius: calc(var(--thumbSize) / 2); */
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


<div class="btnbg" style="padding-top: 10px;">
    <!-- Container Area Start -->
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
                <h3 class="text-center text-inverse title">Who Am I</h3>
                <hr>
                <div class="row">

                    <div class="container">
                        <button class="btn btn-info" style="width: 150px; margin-bottom:20px; float:right;" type="button" id="btnSkip">Skip this step &nbsp; <i class="fas fa-forward"></i></button>
                    </div>
                </div>
                <form method="post" action="<?= base_url('Registration/addWhoAmIDetails') ?>" id="addWhoAmIDetails">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Openness to Experience</h6>
                            <p>Enjoy new experiences, A wide variety of interests, Imaginative, Creative, Adventure, Daring, Love of learning and Art, Likes meeting new people, Not much more traditional.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="OpennessToExperience" name="OpennessToExperience">
                                <p>Value: <span id="OpennessToExperienceValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Conscientiousness</h6>
                            <p>Good impulse control, Goal-directed behavior, Self-disciplined, Think about how their behavior affects others, Hardworking, Methodical.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="conscientiousness" name="conscientiousness">
                                <p>Value: <span id="conscientiousnessValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Extrovert Personality</h6>
                            <p>Sociable interacting with others, Friendly, Talkative, Fun loving, Enjoy meeting new people, has a wide social circle of friends. High amounts of emotional expressiveness.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="ExtrovertPersonality" name="ExtrovertPersonality">
                                <p>Value: <span id="ExtrovertPersonalityValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Introvert Personality</h6>
                            <p>Quiet, Reserved, Introspective, Feels exhausted when having to socialize a lot, Dislikes being the center of attention (opposite of extroversion).</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="IntrovertPersonality" name="IntrovertPersonality">
                                <p>Value: <span id="IntrovertPersonalityValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Agreeableness</h6>
                            <p>Kind, Trusting, Humble, patient, Tactful, Polite, Unselfish, Helpfulness, Sensitive, Enjoys and contributing to the happiness of other people, Feels empathy.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="Agreeableness" name="Agreeableness">
                                <p>Value: <span id="AgreeablenessValue"></span></p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Neuroticism</h6>
                            <p>Get upset easily, Emotional instability, Over sensitive Moody, Timid.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="Neuroticism" name="Neuroticism">
                                <p>Value: <span id="NeuroticismValue"></span></p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Family Bond</h6>
                            <p>Importance of your family's opinion while selecting your partner, how likely do you allow family to be involved in your relationship? Living with parents after marriage.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="FamilyBond" name="FamilyBond">
                                <p>Value: <span id="FamilyBondValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Money</h6>
                            <p>How important is your partner's wealth, asset, dowry, job in a marriage?</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="money" name="money">
                                <p>Value: <span id="moneyValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Religious</h6>
                            <p>How important is religion in your life? How important your spouse believes in religion? Having strong religious attitudes and activities.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="Religious" name="Religious">
                                <p>Value: <span id="ReligiousValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Physically Active</h6>
                            <p>Exercise once or twice a week, Prefer with sports, Gardening, Climbing the stairs, Dancing, Walking.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="PhysicallyActive" name="PhysicallyActive">
                                <p>Value: <span id="PhysicallyActiveValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Politics</h6>
                            <p>About Politic Involve.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="Politics" name="Politics">
                                <p>Value: <span id="PoliticsValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Knowledge</h6>
                            <p>Are you often interested in gaining the knowledge and listening to news?</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="Knowledge" name="Knowledge">
                                <p>Value: <span id="KnowledgeValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">Love Affairs</h6>
                            <p>The importance of love affairs of you and your partner before marriage.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="LoveAffairs" name="LoveAffairs">
                                <p>Value: <span id="LoveAffairsValue"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">The importance of male & female virginity.</h6>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="0" max="100" value="50" class="slider" id="ImportanceOfVirginity" name="ImportanceOfVirginity">
                                <p>Value: <span id="ImportanceOfVirginityValue"></span></p>
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
                                                <input class="form-check-input EnrichmentHobies" type="checkbox" value="The rest are in the writing box (MY Story)" id="EnrichmentHobieschk7" name="EnrichmentHobies[]">
                                                <label class="form-check-label" for="EnrichmentHobieschk7">
                                                    The rest are in the writing box (MY Story)
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
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="Technology" id="Sports-Physicalactivitieschk7" name="Sports-Physicalactivities[]">
                                                <label class="form-check-label" for="Sports-Physicalactivitieschk7">
                                                    Technology
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input Sports-Physicalactivities" type="checkbox" value="The rest are in the writing box (MY Story)" id="Sports-Physicalactivitieschk8" name="Sports-Physicalactivities[]">
                                                <label class="form-check-label" for="Sports-Physicalactivitieschk8">
                                                    The rest are in the writing box (MY Story)
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
                                                <input class="form-check-input SocialActivities" type="checkbox" value="The rest are in the writing box (MY Story)" id="SocialActivitieschk8" name="SocialActivities[]">
                                                <label class="form-check-label" for="SocialActivitieschk8">
                                                    The rest are in the writing box (MY Story)
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
                                                <input class="form-check-input CreatvieHobies" type="checkbox" value="The rest are in the writing box (MY Story)" id="CreatvieHobieschk9" name="CreatvieHobies[]">
                                                <label class="form-check-label" for="CreatvieHobieschk9">
                                                    The rest are in the writing box (MY Story)
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
                                                <input class="form-check-input CollectingHobbies" type="checkbox" value=" The rest are in the writing box (MY Story)" id="CollectingHobbieschk5" name="CollectingHobbies[]">
                                                <label class="form-check-label" for="CollectingHobbieschk5">
                                                    The rest are in the writing box (MY Story)
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
                                                <input class="form-check-input outdoorHobies" type="checkbox" value="The rest are in the writing box (MY Story)" id="outdoorHobieschk11" name="outdoorHobies[]">
                                                <label class="form-check-label" for="outdoorHobieschk11">
                                                    The rest are in the writing box (MY Story)
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
                                                <input class="form-check-input domesticHobbies" type="checkbox" value="The rest are in the writing box (MY Story)" id="domesticHobbieschk7" name="domesticHobbies[]">
                                                <label class="form-check-label" for="domesticHobbieschk7">
                                                    The rest are in the writing box (MY Story)
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
                        <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
                            <button class="btn btn-info" style="width: 150px;" id="btnBack" type="button">Back</button>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-6 text-center" style="padding: 10px;">
                            <button class="btn btn-info" style="width: 150px;" type="button" id="btnSubmit">CONTINUE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Container Area End -->



</div>

<script>
    $(function() {

        var Member = function() {
            this.MemberID = 0;
        }
        var model = new Member();
        model.MemberID = (<?= $this->session->userdata('member_id') ?>);

        ajaxCall('registration/getMemberData', model, function(response) {

            $('#OpennessToExperience').val(response.intOpennessToExperience);
            $('#conscientiousnessValue').val(response.intConscientiousness);
            $('#ExtrovertPersonalityValue').val(response.intExtrovertPersonality);
            // $('#OpennessToExperience').val(response.intIntrovertPersonality);
            // $('#OpennessToExperience').val(response.intAgreeableness);
            // $('#OpennessToExperience').val(response.intNeuroticism);
            // $('#OpennessToExperience').val(response.intFamilyBond);
            // $('#OpennessToExperience').val(response.intMoney);
            // $('#OpennessToExperience').val(response.intReligious);
            // $('#OpennessToExperience').val(response.intPhysicallyActive);
            // $('#OpennessToExperience').val(response.IntPolitics);
            // $('#OpennessToExperience').val(response.intKnowledge);
            // $('#OpennessToExperience').val(response.intLoveAffairs);
            // $('#OpennessToExperience').val(response.intimportanceVirginity);
          
        });


        // set Progress bar values start
        $("#OpennessToExperience").on({
            mousemove: function() {
                setRangeValue('#OpennessToExperience', '#OpennessToExperienceValue');
            },
            change: function() {
                setRangeValue('#OpennessToExperience', '#OpennessToExperienceValue');
            },
        });

        $("#conscientiousness").on({
            mousemove: function() {
                setRangeValue('#conscientiousness', '#conscientiousnessValue');
            },
            change: function() {
                setRangeValue('#conscientiousness', '#conscientiousnessValue');
            },
        });


        $("#ExtrovertPersonality").on({
            mousemove: function() {
                setRangeValue('#ExtrovertPersonality', '#ExtrovertPersonalityValue');
            },
            change: function() {
                setRangeValue('#ExtrovertPersonality', '#ExtrovertPersonalityValue');
            },
        });

        $("#IntrovertPersonality").on({
            mousemove: function() {
                setRangeValue('#IntrovertPersonality', '#IntrovertPersonalityValue');
            },
            change: function() {
                setRangeValue('#IntrovertPersonality', '#IntrovertPersonalityValue');
            },
        });

        $("#Agreeableness").on({
            mousemove: function() {
                setRangeValue('#Agreeableness', '#AgreeablenessValue');
            },
            change: function() {
                setRangeValue('#Agreeableness', '#AgreeablenessValue');
            },
        });

        $("#Neuroticism").on({
            mousemove: function() {
                setRangeValue('#Neuroticism', '#NeuroticismValue');
            },
            change: function() {
                setRangeValue('#Neuroticism', '#NeuroticismValue');
            },
        });

        $("#FamilyBond").on({
            mousemove: function() {
                setRangeValue('#FamilyBond', '#FamilyBondValue');
            },
            change: function() {
                setRangeValue('#FamilyBond', '#FamilyBondValue');
            },
        });

        $("#money").on({
            mousemove: function() {
                setRangeValue('#money', '#moneyValue');
            },
            change: function() {
                setRangeValue('#money', '#moneyValue');
            },
        });

        $("#Religious").on({
            mousemove: function() {
                setRangeValue('#Religious', '#ReligiousValue');
            },
            change: function() {
                setRangeValue('#Religious', '#ReligiousValue');
            },
        });

        $("#PhysicallyActive").on({
            mousemove: function() {
                setRangeValue('#PhysicallyActive', '#PhysicallyActiveValue');
            },
            change: function() {
                setRangeValue('#PhysicallyActive', '#PhysicallyActiveValue');
            },
        });

        $("#Politics").on({
            mousemove: function() {
                setRangeValue('#Politics', '#PoliticsValue');
            },
            change: function() {
                setRangeValue('#Politics', '#PoliticsValue');
            },
        });

        $("#Knowledge").on({
            mousemove: function() {
                setRangeValue('#Knowledge', '#KnowledgeValue');
            },
            change: function() {
                setRangeValue('#Knowledge', '#KnowledgeValue');
            },
        });

        $("#LoveAffairs").on({
            mousemove: function() {
                setRangeValue('#LoveAffairs', '#LoveAffairsValue');
            },
            change: function() {
                setRangeValue('#LoveAffairs', '#LoveAffairsValue');
            },
        });

        $("#ImportanceOfVirginity").on({
            mousemove: function() {
                setRangeValue('#ImportanceOfVirginity', '#ImportanceOfVirginityValue');
            },
            change: function() {
                setRangeValue('#ImportanceOfVirginity', '#ImportanceOfVirginityValue');
            },
        });

        function setRangeValue(rangeID, rangeValue) {
            var progress = $(rangeID).val();
            $(rangeValue).html(progress + '%');
        }
        // set Progress bar values end




        $('#btnBack').click(function() {
            window.location.href = "<?php echo base_url('Registration/lifeStyle') ?>";
        });

        $('#btnSubmit').click(function() {

            if ($('.EnrichmentHobies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select enrichment hobies ");
            } else if ($('.Sports-Physicalactivities[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select sports / physicalactivities ");
            } else if ($('.SocialActivities[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select social Activities ");
            } else if ($('.CreatvieHobies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select creative hobies ");
            } else if ($('.CollectingHobbies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select collecting hobbies ");
            } else if ($('.outdoorHobies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select outdoor hobies ");
            } else if ($('.domesticHobbies[type=checkbox]:checked').length == 0) {
                toastr["error"]("Please select domestic hobbies ");
            } else {
                var form = $("#addWhoAmIDetails");
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success == true) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Personal assets saved successfully!',
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
            }
        });

        $('#btnSkip').click(function() {
            window.location.href = "<?php echo base_url('Registration/education') ?>";
        });

    });
</script>

<script>
    const inputElements = document.querySelectorAll('[type="range"]');

    const handleInput = (inputElement) => {
        let isChanging = false;

        const setCSSProperty = () => {
            const percent =
                ((inputElement.value - inputElement.min) /
                    (inputElement.max - inputElement.min)) *
                100;
            // Here comes the magic 🦄🌈
            inputElement.style.setProperty("--webkitProgressPercent", `${percent}%`);
        }

        // Set event listeners
        const handleMove = () => {
            if (!isChanging) return;
            setCSSProperty();
        };
        const handleUpAndLeave = () => isChanging = false;
        const handleDown = () => isChanging = true;

        inputElement.addEventListener("mousemove", handleMove);
        inputElement.addEventListener("mousedown", handleDown);
        inputElement.addEventListener("mouseup", handleUpAndLeave);
        inputElement.addEventListener("mouseleave", handleUpAndLeave);
        inputElement.addEventListener("click", setCSSProperty);

        // Init input
        setCSSProperty();
    }

    inputElements.forEach(handleInput)
</script>
<!-- <script>
    var slider = document.getElementById("rangeOpennessToExperience");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script> -->

<!-- <script>
    $(function() {

        loadCountries();
        $('#btnBack').click(function() {
            window.location.href = "<?php echo base_url('Registration/physicalStatus') ?>";
        });

        $('#btnSubmit').click(function() {
            window.location.href = "<?php echo base_url('Registration/background') ?>";
        });

        function loadCountries() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url(); ?>Registration/LoadCountries',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    html += '<option value = 0><?= lang('select'); ?></option>';
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].intCountryId + ' >' + data[i].vcCountry_si + '</option>';
                    }
                    $('#country').html(html);
                    $('#country').val(0);

                },
                error: function() {
                    alert('failed to load countries');
                }
            });
        }
    });
</script>