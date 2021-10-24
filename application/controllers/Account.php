<?php

class Account extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->load->model('Model_account');
		$this->load->model('Model_registration');

		// header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
		// header("Pragma: no-cache"); // HTTP 1.0.
		// header("Expires: 0"); // Proxies.
	}

	public function MyAccount()
	{

		$member_id = $this->session->userdata('member_id');
		$memberData = $this->Model_account->getMemberData($member_id);
		$memberPhotosData = $this->Model_account->getMemberPhotosData($member_id);

		$this->data['memberData'] = $memberData;
		$this->data['memberPhotosData'] = $memberPhotosData;

		$this->render_template('account/my_account', 'My Account',  $this->data);
	}



	// All Singles Area

	public function AllSingles()
	{
		$gender = $this->session->userdata('gender');
		$member_id = $this->session->userdata('member_id');

		$AllSinglesCount = $this->Model_account->getAllSinglesCount();
		$MyMatchesCount = $this->Model_account->getAllSingles_ByMemberID($member_id, $gender);

		$visitedProfileCountCount = $this->Model_account->getVisitedProfileCount($member_id); //dk added 2021-7-11 

		$this->data['allSinglesCount'] = $AllSinglesCount;
		$this->data['myMatchesCount'] = $MyMatchesCount;
		$this->data['visitedProfileCountCount'] = $visitedProfileCountCount;

		$this->render_template('account/all_singles', 'All Singles',  $this->data);
	}

	public function LikeOrDisLikeProfile()
	{
		$member_id = $this->session->userdata('member_id');
		$MemberID_Partner =  $this->input->post('MemberID');
		$gender = $this->session->userdata('gender');

		$result = $this->Model_account->updateLikeOrDisLikeProfile($member_id, $MemberID_Partner, $gender);


		// var_dump($result);

		if ($result == true) {
			$response['success'] = true;
		} else {
			$response['success'] = false;
			$response['messages'] = 'Error in the database while like profile, Please contact service provider.';
		}

		echo json_encode($response);
	}

	public function MatchProfile($PartnerID)
	{

		$member_id = $this->session->userdata('member_id');

		$myData = $this->Model_account->getMemberData($member_id);
		$partnerData = $this->Model_account->getMemberData($PartnerID);

		$partnerPhotosData = $this->Model_account->getMemberPhotosData($PartnerID);
		
		$matchingPercentageData = $this->Model_account->getPartnerAndMemberMatchingPercentage($member_id, $PartnerID);

		$myBasicPreferencesData = $this->Model_account->getGetBasicPreferencesWithSeparatorMemberDetailByID($member_id);
		$partnerBasicPreferencesData = $this->Model_account->getGetBasicPreferencesWithSeparatorMemberDetailByID($PartnerID);

		$memberMatchingData =  $this->Model_account->getMemberMatchingDetailsByPartnerID($member_id, $PartnerID);
		$partnerMatchingData =  $this->Model_account->getMemberMatchingDetailsByPartnerID($PartnerID, $member_id);

		$myEnrichmentHobbies = $this->Model_registration->getEnrichmentHobbies($member_id);
		$partnerEnrichmentHobbies = $this->Model_registration->getEnrichmentHobbies($PartnerID);
		
		$mySportsActivities = $this->Model_registration->getSportsActivities($member_id);
		$partnerSportsActivities = $this->Model_registration->getSportsActivities($PartnerID);

		$mySocialActivites = $this->Model_registration->getSocialActivites($member_id);
		$partnerSocialActivites = $this->Model_registration->getSocialActivites($PartnerID);

		$myCreativeHobbies = $this->Model_registration->getCreativeHobbies($member_id);
		$partnerCreativeHobbies = $this->Model_registration->getCreativeHobbies($PartnerID);

		$myCollectingHobbies = $this->Model_registration->getCollectingHobbies($member_id);
		$partnerCollectingHobbies = $this->Model_registration->getCollectingHobbies($PartnerID);

		$myOutdoorsHobbies = $this->Model_registration->getOutdoorsHobbies($member_id);
		$partnerOutdoorsHobbies = $this->Model_registration->getOutdoorsHobbies($PartnerID);

		$myDomesticHobbies = $this->Model_registration->getDomesticHobbies($member_id);
		$partnerDomesticHobbies = $this->Model_registration->getDomesticHobbies($PartnerID);



		$this->data['myData'] = $myData;
		$this->data['partnerData'] = $partnerData;
		$this->data['partnerPhotosData'] = $partnerPhotosData;
		$this->data['matchingPercentageData'] = $matchingPercentageData;
		$this->data['myBasicPreferencesData'] = $myBasicPreferencesData;
		$this->data['partnerBasicPreferencesData'] = $partnerBasicPreferencesData;
		$this->data['memberMatchingData'] = $memberMatchingData;
		$this->data['partnerMatchingData'] = $partnerMatchingData;
		$this->data['myEnrichmentHobbies'] = $myEnrichmentHobbies;
		$this->data['partnerEnrichmentHobbies'] = $partnerEnrichmentHobbies;
		$this->data['mySportsActivities'] = $mySportsActivities;
		$this->data['partnerSportsActivities'] = $partnerSportsActivities;
		$this->data['mySocialActivites'] = $mySocialActivites;
		$this->data['partnerSocialActivites'] = $partnerSocialActivites;
		$this->data['myCreativeHobbies'] = $myCreativeHobbies;
		$this->data['partnerCreativeHobbies'] = $partnerCreativeHobbies;
		$this->data['myCollectingHobbies'] = $myCollectingHobbies;
		$this->data['partnerCollectingHobbies'] = $partnerCollectingHobbies;
		$this->data['myOutdoorsHobbies'] = $myOutdoorsHobbies;
		$this->data['partnerOutdoorsHobbies'] = $partnerOutdoorsHobbies;
		$this->data['myDomesticHobbies'] = $myDomesticHobbies;
		$this->data['partnerDomesticHobbies'] = $partnerDomesticHobbies;


		$this->Model_account->updateVisitedProfile($member_id, $PartnerID); //update member visited profile - dk added 2021-7-11

		$this->render_template('account/match_profile', 'Match Profile',  $this->data);
	}

	public function GetMyMatches()
	{
		$member_id = $this->session->userdata('member_id');
		$gender = $this->session->userdata('gender');

		$response['result'] = $this->Model_account->getAllSingles_ByMemberID($member_id, $gender);
		$response['token'] = $this->security->get_csrf_hash();
		echo json_encode($response);
	}

	public function GetMemberMatchingDetailsByPartnerID($MemberID, $PartnerID)
	{
		return $this->Model_account->getMemberMatchingDetailsByPartnerID($MemberID, $PartnerID);
	}

	// DK Start
	//visited profile started
	public function VisitedProfiles()
	{
		$member_id = $this->session->userdata('member_id');
		$result = $this->Model_account->getVisitedProfileCount($member_id);

		$this->render_template('account/visited_profile', 'visited profile');
	}

	public function GetvisitedProfiles()
	{
		$member_id = $this->session->userdata('member_id');
		$gender = $this->session->userdata('gender');

		$result = $this->Model_account->getVisitedProfiles($member_id, $gender);
		echo json_encode($result);
	}

	public function getMyProfileVisitedByOthers()
	{
		$member_id = $this->session->userdata('member_id');
		$gender = $this->session->userdata('gender');

		$result = $this->Model_account->getMyProfileVisitedByOthers($member_id, $gender);
		echo json_encode($result);
	}
	//visited profile end

	//My Favourites start
	public function myFavourites()
	{
		$this->render_template('account/my_favourites', 'My Favourites');
	}

	public function GetMyFavouriteProfiles()
	{
		$member_id = $this->session->userdata('member_id');
		$gender = $this->session->userdata('gender');

		$result = $this->Model_account->GetMyFavouriteProfiles($member_id, $gender);
		echo json_encode($result);
	}

	public function GetMyProfileFavouriteByOthers()
	{
		$member_id = $this->session->userdata('member_id');
		$gender = $this->session->userdata('gender');

		$result = $this->Model_account->GetMyProfileFavouriteByOthers($member_id, $gender);
		echo json_encode($result);
	}
	// Myfavourites end
	
	// blocked Profile start
	public function blockedProfile()
	{
		$this->render_template('account/blocked_profiles', 'Blocked Profiles');
	}

	public function GetblockedProfileByMe()
	{
		$member_id = $this->session->userdata('member_id');
		$gender = $this->session->userdata('gender');

		$result = $this->Model_account->GetblockedProfileByMe($member_id, $gender);
		echo json_encode($result);
	}

	public function GetMyProfileBlockedOthers()
	{
		$member_id = $this->session->userdata('member_id');
		$gender = $this->session->userdata('gender');

		$result = $this->Model_account->GetMyProfileBlockedOthers($member_id, $gender);
		echo json_encode($result);
	}

	// blocked Profile end

	//interest/requst start
	public function InterestsAndRequests(){
		$this->render_template('account/interests_and_requests', 'Interests/Requests');
	}	
	//interest/requst end

	
	// DK End
}

// All Single Area - End
