     $(function() {

        
        ajaxCall('registration/getMemberData', model, function(response) {
            if (response.intOpennessToExperience != null) {
                $('#OpennessToExperience').slider("option", "value", response.intOpennessToExperience);
                $("#OpennessToExperienceValue").val(response.intOpennessToExperience + "%");

                $('#conscientiousness').slider("option", "value", response.intConscientiousness);
                $("#conscientiousnessValue").val(response.intConscientiousness + "%");

                $('#ExtrovertPersonality').slider("option", "value", response.intExtrovertPersonality);
                $("#ExtrovertPersonalityValue").val(response.intExtrovertPersonality + "%");

                $('#IntrovertPersonality').slider("option", "value", response.intIntrovertPersonality);
                $("#IntrovertPersonalityValue").val(response.intIntrovertPersonality + "%");

                $('#Agreeableness').slider("option", "value", response.intAgreeableness);
                $("#AgreeablenessValue").val(response.intAgreeableness + "%");

                $('#Neuroticism').slider("option", "value", response.intNeuroticism);
                $("#NeuroticismValue").val(response.intNeuroticism + "%");

                $('#FamilyBond').slider("option", "value", response.intFamilyBond);
                $("#FamilyBondValue").val(response.intFamilyBond + "%");

                $('#money').slider("option", "value", response.intMoney);
                $("#moneyValue").val(response.intMoney + "%");

                $('#Religious').slider("option", "value", response.intReligious);
                $("#ReligiousValue").val(response.intReligious + "%");

                $('#PhysicallyActive').slider("option", "value", response.intPhysicallyActive);
                $("#PhysicallyActiveValue").val(response.intPhysicallyActive + "%");

                $('#Politics').slider("option", "value", response.IntPolitics);
                $("#PoliticsValue").val(response.IntPolitics + "%");

                $('#Knowledge').slider("option", "value", response.intKnowledge);
                $("#KnowledgeValue").val(response.intKnowledge + "%");

                $('#LoveAffairs').slider("option", "value", response.intLoveAffairs);
                $("#LoveAffairsValue").val(response.intLoveAffairs + "%");

                $('#ImportanceOfVirginity').slider("option", "value", response.intimportanceVirginity);
                $("#ImportanceOfVirginityValue").val(response.intimportanceVirginity + "%");

            }

        });

        FillEnrichmentHobbies();
        FillSportsActivities();
        FillSocialActivites();
        FillCreativeHobbies();
        FillCollectingHobbies();
        FillOutdoorsHobbies();
        FillDomesticHobbies();

        function FillEnrichmentHobbies() {
            var model = new Member();
            model.MemberID = memberId;
            ajaxCall('registration/getEnrichmentHobbies', model, function(response) {
                for (let index = 0; index < response.length; index++) {
                    if (response[index].vcEnrichmentHobby == "Study / Reading / Writing") {
                        $("#EnrichmentHobieschk1").prop("checked", true);
                    } else if (response[index].vcEnrichmentHobby == "Museums / Galleries") {
                        $("#EnrichmentHobieschk2").prop("checked", true);
                    } else if (response[index].vcEnrichmentHobby == "Technology") {
                        $("#EnrichmentHobieschk3").prop("checked", true);
                    } else if (response[index].vcEnrichmentHobby == "Net surfing") {
                        $("#EnrichmentHobieschk4").prop("checked", true);
                    } else if (response[index].vcEnrichmentHobby == "Meditation") {
                        $("#EnrichmentHobieschk5").prop("checked", true);
                    } else if (response[index].vcEnrichmentHobby == "Watching") {
                        $("#EnrichmentHobieschk6").prop("checked", true);
                    } else if (response[index].vcEnrichmentHobby == "Details in Writing") {
                        $("#EnrichmentHobieschk7").prop("checked", true);
                    }
                }
            });
        }

        function FillSportsActivities() {
            var model = new Member();
            model.MemberID = memberId;
            ajaxCall('registration/getSportsActivities', model, function(response) {
                for (let index = 0; index < response.length; index++) {
                    if (response[index].vcSportsPhysicalActivities == "Jogging") {
                        $("#Sports-Physicalactivitieschk1").prop("checked", true);
                    } else if (response[index].vcSportsPhysicalActivities == "Exercise") {
                        $("#Sports-Physicalactivitieschk2").prop("checked", true);
                    } else if (response[index].vcSportsPhysicalActivities == "Martial Arts") {
                        $("#Sports-Physicalactivitieschk3").prop("checked", true);
                    } else if (response[index].vcSportsPhysicalActivities == "Yoga") {
                        $("#Sports-Physicalactivitieschk4").prop("checked", true);
                    } else if (response[index].vcSportsPhysicalActivities == "Adventure Sports") {
                        $("#Sports-Physicalactivitieschk5").prop("checked", true);
                    } else if (response[index].vcSportsPhysicalActivities == "Outdoor sports") {
                        $("#Sports-Physicalactivitieschk6").prop("checked", true);
                    } else if (response[index].vcSportsPhysicalActivities == "Details in Writing") {
                        $("#Sports-Physicalactivitieschk7").prop("checked", true);
                    }
                }
            });
        }

        function FillSocialActivites() {
            var model = new Member();
            model.MemberID = memberId;
            ajaxCall('registration/getSocialActivites', model, function(response) {
                for (let index = 0; index < response.length; index++) {
                    if (response[index].vcSocialActivities == "Social Service") {
                        $("#SocialActivitieschk1").prop("checked", true);
                    } else if (response[index].vcSocialActivities == "Volunteering") {
                        $("#SocialActivitieschk2").prop("checked", true);
                    } else if (response[index].vcSocialActivities == "Politics") {
                        $("#SocialActivitieschk3").prop("checked", true);
                    } else if (response[index].vcSocialActivities == "Party clubbing") {
                        $("#SocialActivitieschk4").prop("checked", true);
                    } else if (response[index].vcSocialActivities == "Religion") {
                        $("#SocialActivitieschk5").prop("checked", true);
                    } else if (response[index].vcSocialActivities == "Dining") {
                        $("#SocialActivitieschk6").prop("checked", true);
                    } else if (response[index].vcSocialActivities == "Spending time with friends") {
                        $("#SocialActivitieschk7").prop("checked", true);
                    } else if (response[index].vcSocialActivities == "Details in Writing") {
                        $("#SocialActivitieschk8").prop("checked", true);
                    }
                }
            });
        }

        function FillCreativeHobbies() {
            var model = new Member();
            model.MemberID = memberId;
            ajaxCall('registration/getCreativeHobbies', model, function(response) {
                for (let index = 0; index < response.length; index++) {
                    if (response[index].vcCreativeHobbies == "Drawing") {
                        $("#CreatvieHobieschk1").prop("checked", true);
                    } else if (response[index].vcCreativeHobbies == "Dancing") {
                        $("#CreatvieHobieschk2").prop("checked", true);
                    } else if (response[index].vcCreativeHobbies == "Fashion & Style") {
                        $("#CreatvieHobieschk3").prop("checked", true);
                    } else if (response[index].vcCreativeHobbies == "Acting") {
                        $("#CreatvieHobieschk4").prop("checked", true);
                    } else if (response[index].vcCreativeHobbies == "Handy Craft") {
                        $("#CreatvieHobieschk5").prop("checked", true);
                    } else if (response[index].vcCreativeHobbies == "Sewing") {
                        $("#CreatvieHobieschk6").prop("checked", true);
                    } else if (response[index].vcCreativeHobbies == "Music") {
                        $("#CreatvieHobieschk7").prop("checked", true);
                    } else if (response[index].vcCreativeHobbies == "Photography") {
                        $("#CreatvieHobieschk8").prop("checked", true);
                    } else if (response[index].vcCreativeHobbies == "Details in Writing") {
                        $("#CreatvieHobieschk9").prop("checked", true);
                    }
                }
            });
        }

        function FillCollectingHobbies() {
            var model = new Member();
            model.MemberID = memberId;
            ajaxCall('registration/getCollectingHobbies', model, function(response) {
                for (let index = 0; index < response.length; index++) {
                    if (response[index].vcCollectingHobby == "Antiques") {
                        $("#CollectingHobbieschk1").prop("checked", true);
                    } else if (response[index].vcCollectingHobby == "Books / Magazines") {
                        $("#CollectingHobbieschk2").prop("checked", true);
                    } else if (response[index].vcCollectingHobby == "Collecting stamps") {
                        $("#CollectingHobbieschk3").prop("checked", true);
                    } else if (response[index].vcCollectingHobby == "Coins") {
                        $("#CollectingHobbieschk4").prop("checked", true);
                    } else if (response[index].vcCollectingHobby == "Details in Writing") {
                        $("#CollectingHobbieschk5").prop("checked", true);
                    }
                }
            });
        }

        function FillOutdoorsHobbies() {
            var model = new Member();
            model.MemberID = memberId;
            ajaxCall('registration/getOutdoorsHobbies', model, function(response) {
                for (let index = 0; index < response.length; index++) {
                    if (response[index].vcOutdoorHobies == "Hiking") {
                        $("#outdoorHobieschk1").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Fishing") {
                        $("#outdoorHobieschk2").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Camping") {
                        $("#outdoorHobieschk3").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Bird-watching") {
                        $("#outdoorHobieschk4").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Gardening") {
                        $("#outdoorHobieschk5").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Nature") {
                        $("#outdoorHobieschk6").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Hunting") {
                        $("#outdoorHobieschk7").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Driving") {
                        $("#outdoorHobieschk8").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Shopping") {
                        $("#outdoorHobieschk9").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Travel / Sight seeing") {
                        $("#outdoorHobieschk10").prop("checked", true);
                    } else if (response[index].vcOutdoorHobies == "Details in Writing") {
                        $("#outdoorHobieschk11").prop("checked", true);
                    }
                }
            });
        }

        function FillDomesticHobbies() {
            var model = new Member();
            model.MemberID = memberId;
            ajaxCall('registration/getDomesticHobbies', model, function(response) {
                for (let index = 0; index < response.length; index++) {
                    if (response[index].vcdomesticHobbies == "Knitting") {
                        $("#domesticHobbieschk1").prop("checked", true);
                    } else if (response[index].vcdomesticHobbies == "Pets") {
                        $("#domesticHobbieschk2").prop("checked", true);
                    } else if (response[index].vcdomesticHobbies == "Cooking") {
                        $("#domesticHobbieschk3").prop("checked", true);
                    } else if (response[index].vcdomesticHobbies == "Spending time with family") {
                        $("#domesticHobbieschk4").prop("checked", true);
                    } else if (response[index].vcdomesticHobbies == "Sports indoor") {
                        $("#domesticHobbieschk5").prop("checked", true);
                    } else if (response[index].vcdomesticHobbies == "Home interior decoration") {
                        $("#domesticHobbieschk6").prop("checked", true);
                    } else if (response[index].vcdomesticHobbies == "Details in Writing") {
                        $("#domesticHobbieschk7").prop("checked", true);
                    }
                }
            });
        }


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
            window.location.href = navigateBack;
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
                $("#btnSubmit").prop('disabled', true);
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
                                    window.location.href = navigateTo;
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
                                $("#btnSubmit").prop('disabled', false);
                            }
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Internal Server Error! Please contact system administrator.',
                        });
                        $("#btnSubmit").prop('disabled', false);
                    }
                });
                disableInputs();
            }
        });
    });