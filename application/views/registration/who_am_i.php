<style>
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
        background: #4CAF50;
        cursor: pointer;
    }

    .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
        background: #4CAF50;
        cursor: pointer;
    }
</style>

<canvas id="sakura"></canvas>
<div class="btnbg" style="padding-top: 30px;">
    <!-- Container Area Start -->
    <div class="container" style="z-index: 1;">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12 border rounded main-section">
                <h3 class="text-center text-inverse title">Who Am I</h3>
                <hr>
                <form class="container" id="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">OPENNESS TO EXPERIENCE</h6>
                            <p>Enjoy new experiences, A wide variety of interests, Imaginative, Creative, Adventure, Daring, Love of learning and Art, Likes meeting new people, Not much more traditional.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">CONSCIENTIOUSNESS</h6>
                            <p>Good impulse control, Goal-directed behavior, Self-disciplined, Think about how their behavior affects others, Hardworking, Methodical.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">EXTROVERT PERSONALITY</h6>
                            <p>Sociable interacting with others, Friendly, Talkative, Fun loving, Enjoy meeting new people, has a wide social circle of friends. High amounts of emotional expressiveness.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">INTROVERT PERSONALITY</h6>
                            <p>Quiet, Reserved, Introspective, Feels exhausted when having to socialize a lot, Dislikes being the center of attention (opposite of extroversion).</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">AGREEABLENESS</h6>
                            <p>Kind, Trusting, Humble, patient, Tactful, Polite, Unselfish, Helpfulness, Sensitive, Enjoys and contributing to the happiness of other people, Feels empathy.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">NEUROTICISM</h6>
                            <p>Get upset easily, Emotional instability, Over sensitive Moody, Timid.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">FAMILY BOND</h6>
                            <p>Importance of your family's opinion while selecting your partner, how likely do you allow family to be involved in your relationship? Living with parents after marriage.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">MONEY</h6>
                            <p>How important is your partner's wealth, asset, dowry, job in a marriage?</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">RELIGIOUS</h6>
                            <p>How important is religion in your life? How important your spouse believes in religion? Having strong religious attitudes and activities.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">PHYSICALLY ACTIVE</h6>
                            <p>Exercise once or twice a week, Prefer with sports, Gardening, Climbing the stairs, Dancing, Walking.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">POLITICS</h6>
                            <p>About Politic Involve.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">KNOWLEDGE</h6>
                            <p>Are you often interested in gaining the knowledge and listening to news?</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">LOVE AFFAIRS</h6>
                            <p>The importance of love affairs of you and your partner before marriage.</p>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">THE IMPORTANCE OF MALE & FEMALE VIRGINITY.</h6>
                            <div class="slidecontainer">
                                <p style="color:#616161; font-size:0.8em">0% <span style="float:right;">100%</span> </p>
                                <input type="range" min="1" max="100" value="50" class="slider" id="rangeOpennessToExperience">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-weight-bold">MY INTERESTS AND HOBBIES</h6>
                            <div class="container">
                                <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Enrichment hobbies</h6>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk1">
                                                <label class="form-check-label" for="chk1">
                                                    Study / Reading / Writing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk2">
                                                <label class="form-check-label" for="chk2">
                                                    Museums / Galleries
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk3">
                                                <label class="form-check-label" for="chk3">
                                                    Technology
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk4">
                                                <label class="form-check-label" for="chk4">
                                                    Net surfing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk5">
                                                <label class="form-check-label" for="chk5">
                                                    Meditation
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk6">
                                                <label class="form-check-label" for="chk6">
                                                    Watching
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk7">
                                                <label class="form-check-label" for="chk7">
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
                                                <input class="form-check-input" type="checkbox" value="" id="chk8">
                                                <label class="form-check-label" for="chk8">
                                                    Jogging
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk9">
                                                <label class="form-check-label" for="chk9">
                                                    Exercise
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk10">
                                                <label class="form-check-label" for="chk10">
                                                    Martial Arts
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk11">
                                                <label class="form-check-label" for="chk11">
                                                    Yoga
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk12">
                                                <label class="form-check-label" for="chk12">
                                                    Adventure Sports
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk13">
                                                <label class="form-check-label" for="chk13">
                                                    Outdoor sports
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk14">
                                                <label class="form-check-label" for="chk14">
                                                    Technology
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk15">
                                                <label class="form-check-label" for="chk15">
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
                                                <input class="form-check-input" type="checkbox" value="" id="chk16">
                                                <label class="form-check-label" for="chk16">
                                                    Social Service
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk17">
                                                <label class="form-check-label" for="chk17">
                                                    Volunteering
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk18">
                                                <label class="form-check-label" for="chk18">
                                                    Politics
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk19">
                                                <label class="form-check-label" for="chk19">
                                                    Party clubbing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    Religion
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk21">
                                                <label class="form-check-label" for="chk21">
                                                    Dining
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk22">
                                                <label class="form-check-label" for="chk22">
                                                    Spending time with friends
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk23">
                                                <label class="form-check-label" for="chk23">
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
                                                <input class="form-check-input" type="checkbox" value="" id="chk16">
                                                <label class="form-check-label" for="chk16">
                                                    Drawing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk17">
                                                <label class="form-check-label" for="chk17">
                                                    Dancing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk18">
                                                <label class="form-check-label" for="chk18">
                                                    Fashion & Style
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk19">
                                                <label class="form-check-label" for="chk19">
                                                    Acting
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    Handy Craft
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk21">
                                                <label class="form-check-label" for="chk21">
                                                    Sewing
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk22">
                                                <label class="form-check-label" for="chk22">
                                                    Music
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk23">
                                                <label class="form-check-label" for="chk23">
                                                    Photography
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk23">
                                                <label class="form-check-label" for="chk23">
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
                                                <input class="form-check-input" type="checkbox" value="" id="chk16">
                                                <label class="form-check-label" for="chk16">
                                                    Antiques
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk17">
                                                <label class="form-check-label" for="chk17">
                                                    Books / Magazines
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk18">
                                                <label class="form-check-label" for="chk18">
                                                    Collecting stamps
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk19">
                                                <label class="form-check-label" for="chk19">
                                                    Coins
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    The rest are in the writing box (MY Story)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Outdoors hobbies</h6>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk16">
                                                <label class="form-check-label" for="chk16">
                                                    Hiking
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk17">
                                                <label class="form-check-label" for="chk17">
                                                    Fishing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk18">
                                                <label class="form-check-label" for="chk18">
                                                    Camping
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk19">
                                                <label class="form-check-label" for="chk19">
                                                    Bird-watching
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    Gardening
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    Nature
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk19">
                                                <label class="form-check-label" for="chk19">
                                                    Hunting
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    Driving
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    Shopping
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk19">
                                                <label class="form-check-label" for="chk19">
                                                    Travel / Sight seeing
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    The rest are in the writing box (MY Story)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="p-2" style="background-color: #cfd8dc; padding-left:10px">Domestic hobbies</h6>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk16">
                                                <label class="form-check-label" for="chk16">
                                                    Knitting
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk17">
                                                <label class="form-check-label" for="chk17">
                                                    Pets
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk18">
                                                <label class="form-check-label" for="chk18">
                                                    Cooking
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk19">
                                                <label class="form-check-label" for="chk19">
                                                    Spending time with family
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    Sports indoor
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk20">
                                                <label class="form-check-label" for="chk20">
                                                    Home interior decoration
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="chk19">
                                                <label class="form-check-label" for="chk19">
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
    var slider = document.getElementById("rangeOpennessToExperience");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>

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
</script> -->