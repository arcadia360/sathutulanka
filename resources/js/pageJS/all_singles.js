$(function () {
    getAllSingles_ByMemberID();
});

var Member = function () {
    this.MemberID = 0;
}



function getAllSingles_ByMemberID() {
    ajaxCall('Account/GetMyMatches', $("#loginForm").serialize(), function (response) {
        // debugger;

    // $.ajax({
    //     type: 'POST',
    //     url: base_url + 'Account/GetMyMatches',
    //     data: $("#loginForm").serialize(),
    //     dataType: 'json',
    //     complete: function () {
    //         $('body').removeClass("wait");
    //     },
    //     success: function (response) {

            // $('input[name=csrf_arcadia360]').val(response.token);

            // if (response.success == false) {
            //     $("#invalid-messages").text(response.messages);
            //     $("#invalid-messages").show();
            // } else {
            //     location.reload();
            // }

            // alert("ddd");


    
        $('input[name=csrf_arcadia360]').val(response.token);

        var element = "";

            for (let index = 0; index < response.result.length; index++) {

            var isLiked = "";
            var premiumBadge = "";
            var verifyBadge = "";

                if ((response.result[index].IsLiked) == 1) {
                isLiked = " like";
            }

                if ((response.result[index].intMemberAccountTypeID) == 4) {
                premiumBadge = "<p class='premium_badge'><i class='fas fa-crown'></i> PREMIUM</p>"
            }

                if ((response.result[index].intMemberAccountTypeID) == 1) {
                verifyBadge = "<span class='badge badge-notTrustVerified'>Not Trust Verified</span>";
                } else if ((response.result[index].intMemberAccountTypeID) == 2) {
                verifyBadge = "<span class='badge badge-trustProving'>Trust Proving</span>";
            }
                else if ((response.result[index].intMemberAccountTypeID) == 3) {
                verifyBadge = "<span class='badge badge-trustVerified'>Trust Verified</span>";
            }
                else if ((response.result[index].intMemberAccountTypeID) == 4) {
                verifyBadge = "<span class='badge badge-trustVerified'>Trust Verified</span>";
            }

            element +=
                "<div class='col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12'>" +
                "<div class='card profile-card'>" +
                "<div class='row'>" +
            "<button class='profile-heart " + isLiked + "' name='" + response.result[index].intMemberID + "' id='btnHeart" + response.result[index].intMemberID + "' onClick='LikeOrDisLikeProfile(this)'><i class='fas fa-heart'></i></button>" +
                "</div>" +
                "<div class='overlay'>" +
                "<div class='card-img-block'>" +
                premiumBadge +
            "<p class='photo-count'><i class='fas fa-camera'></i> " + response.result[index].intImageCount + "</p>" +
            "<img src='" + base_url + "resources/images/member/photos/" + response.result[index].vcMemberCode + "/" + response.result[index].vcProfilePicture + "' />" +
                "</div>" +
                "<div class='card-body pt-0'>" +
                "<div class='row percentage-row'>" +
                "<div class='col-6 card-percentage'>" +
            "<p class='percentage-left'>" + response.result[index].ForMe + "%</p>" +
                "<p class='text-left'>For me</p>" +
                "</div>" +
                "<div class='col-6 card-percentage'>" +
            "<p class='percentage-right'>" + response.result[index].ForPartner + "%</p>" +
                "<p class='text-right'>For her</p>" +
                "</div>" +
                "</div>" +
            "<h5 class='col-12 card-title'>" + response.result[index].vcNickName + "</h5>" +
            "<h6 class='col-12 card-designation'>" + response.result[index].MiniProfileDesignation + "</h6>" +
                "<p class='badge-label'>" + verifyBadge + "</p>" +
            "<p class='card-text'>" + response.result[index].Age + " Years, " + response.result[index].vcHightFeet + ", " + response.result[index].vcEthnicityName + ", " + response.result[index].vcReligion + ", " + response.result[index].vcMaritalStatus + ", " + response.result[index].vcEducationLevel + ".</p>" +
                "</div>" +
            "<a href='" + base_url + ('Account/MatchProfile/' + response.result[index].intMemberID) + "' class='btn btn-primary'>Check Match</a>" +
                "</div>" +
                "</div >" +
                "</div >";

        }

        $('#mini-profile-area').empty();
        $('#mini-profile-area').append(element);
        // }
    // });

    });
}

function LikeOrDisLikeProfile(element) {
    // debugger;
    var model = new Member();
    model.MemberID = element.name;
    document.getElementById(element.id).classList.toggle("like");

    // if ($("#"+element.id).hasClass("like")) {
    //     $("#" +element.id).removeClass('like');
    //     alert("A")

    // }else{
    //     $("#" +element.id).addClass('like');
    //     alert("b")
    // }

    ajaxCall('Account/LikeOrDisLikeProfile', model, function (response) {
        // debugger;
        if (response.success == false) {
            document.getElementById(element.id).classList.toggle("like");
        }
    });
}