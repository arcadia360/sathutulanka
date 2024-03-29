<?php
class Registration extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_registration');
		// header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
		// header("Pragma: no-cache"); // HTTP 1.0.
		// header("Expires: 0"); // Proxies.
		$this->load->model('Model_account');
		$this->not_logged_in();
	}

	public function index()
	{
		$this->load->helper('language');

		$session_data = $this->session->userdata();

		if ($this->session->userdata('member_id')) {
			$this->CheckAndRedirectNextForm(0);
		}

		if (!isset($session_data['language_id']) || empty($session_data['language_id'])) {  // If Fresh User
			$logged_in_sess = array(
				'language_id' => 1 // 1 - English, 2 - Sinhala, 3 - Tamil
			);
			$this->session->set_userdata($logged_in_sess);
		}


		if ($session_data['language_id'] == 1) { // English
			$this->lang->load('en', 'English');
		} else if ($session_data['language_id'] == 2) { // Sinhala
			$this->lang->load('si', 'Sinhala');
		} else if ($session_data['language_id'] == 3) { // Tamil
			$this->lang->load('ta', 'Tamil');
		}

		// $ProvidingInformationType = $this->Model_registration->getProvidingInformationType($session_data['language_id']);
		$MaritalStatus = $this->Model_registration->getMaritalStatus($session_data['language_id']);
		// $MarriageType = $this->Model_registration->getMarriageType($session_data['language_id']);
		$NoofChildren = $this->Model_registration->getNoofChildren($session_data['language_id']);

		// $this->data['ProvidingInformationType_data'] = $ProvidingInformationType;
		$this->data['MaritalStatus_data'] = $MaritalStatus;
		// $this->data['MarriageType_data'] = $MarriageType;
		$this->data['NoofChildren_data'] = $NoofChildren;

		$this->load->view('registration/create_account', $this->data);
	}

	// ---------------------------------------------------------------------------------------------------------------------------
	//DK section Start
	public function physicalStatus()
	{
		$this->CheckAndRedirectNextForm(1);

		// $member_data = $this->Model_account->getMemberData(83);
		// $this->data['memberData'] = $member_data;

		$this->render_template_registration('registration/physical_status', 'Add Physical Details', NULL);
	}

	public function getMemberData()
	{
		$MemberID =  $this->input->post('MemberID');
		$data = $this->Model_account->getMemberData($MemberID);
		echo json_encode($data);
	}

	public function getMemberWiseLanguageSpeak()
	{
		$MemberID =  $this->input->post('MemberID');
		$data = $this->Model_account->getMemberWiseLanguageSpeak($MemberID);
		echo json_encode($data);
	}

	public function getEnrichmentHobbies($MemberID = null) // Null parameter added by ViRAJ 2021-10-08
	{
		if ($MemberID == null) {
			$MemberID =  $this->input->post('MemberID');
		}
		$data = $this->Model_registration->getEnrichmentHobbies($MemberID);
		echo json_encode($data);
	}

	public function getSportsActivities($MemberID = null) // Null parameter added by ViRAJ 2021-10-08
	{
		if ($MemberID == null) {
			$MemberID =  $this->input->post('MemberID');
		}
		$data = $this->Model_registration->getSportsActivities($MemberID);
		echo json_encode($data);
	}

	public function getCreativeHobbies($MemberID = null) // Null parameter added by ViRAJ 2021-10-08
	{
		if ($MemberID == null) {
			$MemberID =  $this->input->post('MemberID');
		}
		$data = $this->Model_registration->getCreativeHobbies($MemberID);
		echo json_encode($data);
	}

	public function getCollectingHobbies()
	{
		$MemberID =  $this->input->post('MemberID');
		$data = $this->Model_registration->getCollectingHobbies($MemberID);
		echo json_encode($data);
	}

	public function getOutdoorsHobbies()
	{
		$MemberID =  $this->input->post('MemberID');
		$data = $this->Model_registration->getOutdoorsHobbies($MemberID);
		echo json_encode($data);
	}

	public function getDomesticHobbies()
	{
		$MemberID =  $this->input->post('MemberID');
		$data = $this->Model_registration->getDomesticHobbies($MemberID);
		echo json_encode($data);
	}


	public function getSocialActivites($MemberID = null) // Null parameter added by ViRAJ 2021-10-08
	{
		if ($MemberID == null) {
			$MemberID =  $this->input->post('MemberID');
		}
		$data = $this->Model_registration->getSocialActivites($MemberID);
		echo json_encode($data);
	}
	public function getMonthlyIncomeRoutesData()
	{
		$MemberID =  $this->input->post('MemberID');
		$data = $this->Model_registration->getMonthlyIncomeRoutesData($MemberID);
		echo json_encode($data);
	}

	public function getAssetRoutesData()
	{
		$MemberID =  $this->input->post('MemberID');
		$data = $this->Model_registration->getAssetRoutesData($MemberID);
		echo json_encode($data);
	}

	public function addPhysicalStatus()
	{
		$response = array();

		$this->form_validation->set_rules('height', 'Height', 'required');
		$this->form_validation->set_rules('weight', 'Weight', 'required');
		$this->form_validation->set_rules('bodyShape', 'Body Shape', 'required');
		$this->form_validation->set_rules('skinColor', 'Skin Color', 'required');
		$this->form_validation->set_rules('disability', 'Disability', 'required');
		$this->form_validation->set_rules('bloodGroup', 'Blood Group', 'required');
		$this->form_validation->set_rules('healthInfo', 'Health Info', 'required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->savePhysicalStatus();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 2);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while adding physical status. Please contact service provider.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function residence()
	{
		$this->CheckAndRedirectNextForm(2);
		$this->render_template_registration('registration/residence', 'Add Residence Details', NULL);
	}

	public function addResidenceDetails()
	{
		$response = array();

		$this->form_validation->set_rules('AddressofSriLanka', 'Address of Sri Lanka', 'required');
		$this->form_validation->set_rules('nativeDistrict', 'Native District', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveResidenceDetails();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 3);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving residence details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function background()
	{
		$this->CheckAndRedirectNextForm(3);
		$motherTongue = $this->Model_registration->getMotherTongue();
		$ethnicity = $this->Model_registration->getEthnicity();
		$religionStatus = $this->Model_registration->LoadReligionStatusDetails();
		$this->data['motherTongue_data'] = $motherTongue;
		$this->data['ethnicity_data'] = $ethnicity;
		$this->data['religion_data'] = $religionStatus;
		$this->render_template_registration('registration/background', 'Add Background Details', $this->data);
	}

	public function loadCaste()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadCaste();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');
			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $caste) {
					$CasteName = $caste->vcCasteName;
					$html .= "<option value=" . $caste->intCasteId . " >" . $CasteName  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function loadSubCaste()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadSubCaste();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');
			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $subCaste) {
					$subCasteName = $subCaste->vcSubCasteName;
					$html .= "<option value=" . $subCaste->intSubCasteId . " >" . $subCasteName  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function addBackgroundDetails()
	{
		$response = array();

		$this->form_validation->set_rules('motherTongue', 'Mother Tongue', 'required');
		$this->form_validation->set_rules('ethnicity', 'Ethnicity', 'required');
		$this->form_validation->set_rules('religion', 'Religion', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveBackgroundDetails();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 4);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving background details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function lifeStyle()
	{
		$this->CheckAndRedirectNextForm(4);
		$diet = $this->Model_registration->getDiet();
		$this->data['diet_data'] = $diet;
		$this->render_template_registration('registration/lifeStyle', 'Add Life Style Details', NULL);
	}

	public function addLifeStyleDetails()
	{
		$response = array();

		$this->form_validation->set_rules('diet', 'Diet', 'required');
		$this->form_validation->set_rules('drink', 'Drink', 'required');
		$this->form_validation->set_rules('LiveIn', 'Live In', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveLifeStyleDetails();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 5);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving life style details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}


	public function WhoAmI()
	{
		$this->CheckAndRedirectNextForm(5);
		$this->render_template_registration('registration/who_am_i', 'Who Am I', NULL);
	}

	public function addWhoAmIDetails()
	{
		$response = array();

		$this->form_validation->set_rules('EnrichmentHobies[]', 'enrichment hobies', 'required');
		$this->form_validation->set_rules('Sports-Physicalactivities[]', 'sports physicalactivities', 'required');
		$this->form_validation->set_rules('SocialActivities[]', 'social activities', 'required');
		$this->form_validation->set_rules('CreatvieHobies[]', 'creatvie hobies', 'required');
		$this->form_validation->set_rules('CollectingHobbies[]', 'collecting hobbies', 'required');
		$this->form_validation->set_rules('outdoorHobies[]', 'outdoor hobies', 'required');
		$this->form_validation->set_rules('domesticHobbies[]', 'domestic hobbies', 'required');


		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {

			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveWhoAmIDetails();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 6);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving who am I details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function education()
	{
		$this->CheckAndRedirectNextForm(6);
		$educationLevel = $this->Model_registration->getEducationLevel();
		$educationField =  $this->Model_registration->getEducationField();
		$this->data['educationLevel_data'] = $educationLevel;
		$this->data['educationField_data'] = $educationField;
		$this->render_template_registration('registration/education', 'Education', $this->data);
	}
	public function addEducationDetails()
	{
		$response = array();

		$this->form_validation->set_rules('EducationLevel', 'Education Level', 'required');
		$this->form_validation->set_rules('EducationField', 'Education Field', 'required');
		$this->form_validation->set_rules('SchoolUniversityDescription', 'School University Description', 'max_length[250]');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveEducationDetails();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 7);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving education details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function career()
	{
		$this->CheckAndRedirectNextForm(7);
		$this->render_template_registration('registration/career', 'career', NULL);
	}

	// Load working with data to career details form
	public function loadWorkingWith()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadWorkingWith();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');

			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $workingWith) {
					$workingWIthName = $workingWith->vcWorkingWith;
					$html .= "<option value=" . $workingWith->intWorkingWithId . " >" . $workingWIthName  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}


	// Load working as sub category data to career details form
	public function loadWorkingAs()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadWorkingAs();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');

			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $workingas) {
					$html .= "<option value=" . $workingas->intWorkingAsId . " >" . $workingas->vcWorkingAs . "</option>";
				}
				echo json_encode($html);
			}
		}
	}


	// Load Working Sector data to career details form
	public function LoadWorkingSector()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->LoadWorkingSector();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');

			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $workingsector) {
					$html .= "<option value=" . $workingsector->intWorkingsectorID . " >" . $workingsector->vcWorkingsector  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function addcareerDetails()
	{
		$response = array();

		$this->form_validation->set_rules('workingWith', 'Working With', 'required');
		$this->form_validation->set_rules('describeCareer', 'describe career', 'max_length[250]');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveCareerDetails();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 8);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving career details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function personalAssets()
	{
		$this->CheckAndRedirectNextForm(8);
		$monthlyIncome =  $this->Model_registration->getMonthlyIncome();
		$assetValue = $this->Model_registration->getAssetValue();
		$this->data['monthlyIncome_data'] = $monthlyIncome;
		$this->data['assetValue_data'] = $assetValue;
		$this->render_template_registration('registration/personal_assets', 'Personal Assets', $this->data);
	}

	public function addPersonalAssestDetails()
	{
		$response = array();

		$this->form_validation->set_rules('monthlyIncome', 'Monthly income', 'required');
		$this->form_validation->set_rules('assetValue', 'Asset value', 'required');
		$this->form_validation->set_rules('OwnershipOfAssets', 'ownership of assets', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->savePersonalAssestDetailss();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 9);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving personal assets details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function family()
	{
		$this->CheckAndRedirectNextForm(9);
		$this->render_template_registration('registration/family', 'Family', NULL);
	}

	public function addFamilyDetails()
	{
		$response = array();

		$this->form_validation->set_rules('district', 'Family Location', 'required');
		$this->form_validation->set_rules('Add-Family-Details', 'Add Family Details', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveFamilyDetailss();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 10);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving family details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function afterMarriage()
	{
		$this->CheckAndRedirectNextForm(10);
		$this->render_template_registration('registration/after_marriage', 'After Marriage', NULL);
	}

	public function addAfterMarriageDetails()
	{
		$response = array();

		$this->form_validation->set_rules('PrefferToLive', 'Preffer to live', 'required');
		$this->form_validation->set_rules('ChildrenLikes', 'Children Likes', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveAfterMarriageDetails();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 11);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving after marriage details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function horoscopeDetails()
	{
		$this->CheckAndRedirectNextForm(11);
		$this->render_template_registration('registration/horoscope', 'Horoscope', NULL);
	}
	public function addHoroscopeDetails()
	{
		$response = array();

		$this->form_validation->set_rules('matchingHoroscope', 'Matching Horoscope', 'required');
		$this->form_validation->set_rules('Ganaya', 'Ganaya', 'required');
		$this->form_validation->set_rules('Mercury', 'Mercury', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveHoroscopeDetails();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 12);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving horoscope details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}


	public function myPhotos()
	{
		$this->CheckAndRedirectNextForm(12);
		$this->render_template_registration('registration/my_photos', 'my photos', NULL);
	}

	public function LoadUploadedImages()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->LoadUploadedImages();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');
			$html = null;
			if ($result) {
				$count = 1;
				$imgFolderName = $this->session->userdata('member_code');
				foreach ($result as $useriamges) {
					$html .= "<div class='col-lg-3 col-4 text-al-center' style='padding: 10px!important'>
					<i class='far fa-times-circle' onclick='RemoveImage(" . $useriamges->intImageID . ")' ></i> <br>
					<img class='img-thumbnail imgUpload' src=" . base_url('resources/images/member/photos/' . $imgFolderName . '/' . $useriamges->intImageName . $useriamges->vcImageType) . "> <br>
					<div class='text-al-center'>
					<div class='radio icheck-midnightblue icheck-align mx-auto'>
					<input name='MyPhotos' type='radio' value=" . $useriamges->intImageID . " id=img" . $useriamges->intImageID . ">
					<label for=img" . $useriamges->intImageID . "></label>
                                </div>
                                <div><label for=img" . $useriamges->intImageID . ">Profile picture</label></div>
					</div>
					</div>";
				}
				echo json_encode($html);
			}
		}
	}
	public function removeImage()
	{
		$result = '';
		$response = false;
		$this->load->model('Model_registration');
		$result = $this->Model_registration->removeMemberImage();
		if ($result) {
			$response = true;
		}
		echo json_encode($response);
	}

	public function saveProfilePicture()
	{
		$response = array(
			'status' => null,
			'message' => null
		);
		$this->load->model('Model_registration');
		$result = $this->Model_registration->saveProfilePicture();
		if ($result) {
			$response['status'] = true;
			$response['message'] = 'My photos saved succesfully!';
			$session_data = array('no_of_submitted_form' => 13);
			$this->session->set_userdata($session_data);
		} else {
			$response['status'] = false;
			$response['message'] = 'Failed to save my photos';
		}
		echo json_encode($response);
	}

	public function AboutYourselfAndPartner()
	{
		$this->CheckAndRedirectNextForm(13);
		$this->render_template_registration('registration/about_yourself_and_partner', 'about_yourself_and_partner', NULL);;
	}

	public function AddAboutYourselfAndPartner()
	{
		$response = array();

		$this->form_validation->set_rules('aboutYourSelfAndPartner', 'About yourself and partner', 'required|max_length[2500]');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveAboutYourselfAndPartner();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 14);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while saving about yourself and partner details. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function privacySettings()
	{
		$this->CheckAndRedirectNextForm(14);
		$this->render_template_registration('registration/privacy_settings', 'privacy_settings', NULL);
	}

	public function AddPrivacySettings()
	{
		$response = array();

		$this->form_validation->set_rules('MyPhotos', 'MyPhotos privacy', 'required');
		$this->form_validation->set_rules('AssetsDetails', 'Assets Details privacy', 'required');
		$this->form_validation->set_rules('FamilyDetails', 'Family Details privacy', 'required');
		$this->form_validation->set_rules('Horoshcope', 'Horoshcope privacy', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->savePrivacySettings();
			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 15);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['falseType'] = 'BD';
				$response['messages'] = 'Error in the database while saving privacy settings. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			$response['falseType'] = 'validation';
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	// partner preferences
	public function partnerPreferences()
	{
		$this->CheckAndRedirectNextForm(15);

		$this->data['LoadMaritalStatusData'] = $this->Model_registration->LoadMaritalStatusData();
		$this->data['LoadNoOfChildrenData'] = $this->Model_registration->LoadNoOfChildrenData();
		$this->data['LoadReligionData'] = $this->Model_registration->ReligionData();
		$this->data['LoadEthnicityData'] = $this->Model_registration->LoadEthnicityData();
		$this->data['LoadMotherToungeData'] = $this->Model_registration->LoadMotherToungeData();
		$this->data['LoadSummerizedEducationLevelData'] = $this->Model_registration->LoadSummerizedEducationLevelData();
		$this->data['LoadSummerizedMonthtlyIncomeData'] = $this->Model_registration->LoadSummerizedMonthtlyIncomeData();
		$this->data['loadWorkingWithData'] = $this->Model_registration->loadWorkingWithData();
		$this->data['LoadSummerizedAssetValuelData'] = $this->Model_registration->LoadSummerizedAssetValuelData();
		$this->data['LoadAnyDisabilityData'] = $this->Model_registration->LoadAnyDisabilityData();
		$this->data['LoadDietData'] = $this->Model_registration->LoadDietData();
		$this->data['LoadLiveInSriLankaData'] = $this->Model_registration->LoadLiveInSriLankaData();

		$this->render_template_registration('registration/partnerPreferences', 'Partner Preferences', $this->data);
	}
	public function LoadEducationLevelData()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->LoadEducationLevelData();
		if (!$result) {
			return false;
		} else {
			$html = null;
			if ($result) {
				foreach ($result as $educationlevel) {
					$html .= "<option value=" . $educationlevel->inteducationlevelID . " >" . $educationlevel->vcEducationlevel  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function LoadAnyDisabilityData()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->LoadAnyDisabilityData();
		if (!$result) {
			return false;
		} else {
			$html = null;
			if ($result) {
				foreach ($result as $disability) {
					$html .= "<option value=" . $disability->intDisabilityID . " >" . $disability->vcDisability  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function LoadDietData()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->LoadDietData();
		if (!$result) {
			return false;
		} else {
			$html = null;
			if ($result) {
				foreach ($result as $diet) {
					$html .= "<option value=" . $diet->intDietID . " >" . $diet->vcDietName  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	// End partner preferences

	public function loadDisabilityDetails()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadDisabilityDetails();
		if (!$result) {
			return false;
		} else {
			$html = "<option value=" . 0 . " >" . 'Select' . "</option>";
			if ($result) {
				foreach ($result as $disability) {
					$html .= "<option value=" . $disability->intDisabilityID . " >" . $disability->vcDisability  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}



	public function residenceStatus()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadresidenceStatus();
		if (!$result) {
			return false;
		} else {
			$html = "<option value=" . 0 . " >" . 'Select' . "</option>";
			if ($result) {
				foreach ($result as $residenceStatus) {
					$html .= "<option value=" . $residenceStatus->intResidenceStatusID . " >" . $residenceStatus->vcResidenceStatus  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function LoadCountries()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadCountries();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');
			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $country) {
					$countryName = lang($country->vcCountry);
					$html .= "<option value=" . $country->intCountryId . " >" . $countryName  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function loadDistricts()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadDistricts();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');
			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $district) {
					$districName = lang($district->vcDistrictName);
					$html .= "<option value=" . $district->IntDistrictId . " >" . $districName  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function loadCities()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadCities();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');
			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $cities) {
					$html .= "<option value=" . $cities->intCityId . " >" . $cities->vcCityName . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function horoscope()
	{
		$this->CheckAndRedirectNextForm(11);
		$this->render_template_registration('registration/horoscope', 'Horoscope', NULL);
	}
	public function addPartnerPreference()
	{

		$response = array();

		// $this->form_validation->set_rules('MartialStatusDrp', 'Martial Status', 'required');
		// $this->form_validation->set_rules('NoOfChildrenDrp', 'Children', 'required');
		// $this->form_validation->set_rules('NoOfChildrenDrp', 'Children', 'required');

		// if ($this->form_validation->run() == TRUE) {
		$this->load->model('Model_registration');
		$result = $this->Model_registration->savePartnerPreference();
		if ($result == true) {
			$response['success'] = true;
			$session_data = array('member_account_status_id' => 4);
			$this->session->set_userdata($session_data);
		} else {
			$response['success'] = false;
			$response['messages'] = 'Error in the database while saving partner preferences. Please contact system administrator.';
		}
		// } else {
		// 	$response['success'] = false;
		// 	foreach ($_POST as $key => $value) {
		// 		$response['messages'][$key] = form_error($key);
		// 	}
		// }
		echo json_encode($response);
	}

	public function UploadMyPhotos()
	{
		$response = array(
			'success' => null,
			'message' => null,
		);
		$this->load->model('Model_registration');
		$result = $this->Model_registration->getLastUploadedImageName();

		$fileName = null;
		if ($result['status']) {
			$fileName = (int)$result['lastUploadImageName'];
			$fileName++;
		} else {
			$fileName = 1;
		}

		$folderName = $this->session->userdata('member_code');
		$imagePath = "./resources/images/member/photos/" . $folderName;
		if (!is_dir($imagePath)) {
			mkdir("./resources/images/member/photos/" . $folderName);
		}
		$config['upload_path'] = $imagePath;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $fileName;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload("file1")) {
			$data = array('upload_data' => $this->upload->data());

			$imgName = $data['upload_data']['file_name'];
			$imgType = $data['upload_data']['file_ext'];
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveUploadedImageName($imgName, $imgType);

			if ($result == true) {
				$response['success'] = true;
				$response['message'] = 'image uploaded successfully!';
				$session_data = array('no_of_submitted_form' => 12);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['message'] = 'Error in the database while member images. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			$response['message'] = 'Error while uploading image. Please contact system administrator.';
		}

		echo json_encode($response);
	}




	// end dk section
	// ---------------------------------------------------------------------------------------------------------------------------






	public function sample()
	{

		echo lang('hello');
		$this->load->view('registration/header');
		$this->load->view('registration/sample');
		$this->load->view('registration/footer');
	}
}
