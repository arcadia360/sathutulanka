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
		$this->not_logged_in();
	}

	public function index()
	{
		$this->load->helper('language');

		$session_data = $this->session->userdata();

		if ($this->session->userdata('member_id')) {
			$this->CheckAndRedirectNextForm(0);
		}

		if ($session_data['language_id'] == 1) { // English
			$this->lang->load('en', 'English');
		} else if ($session_data['language_id'] == 2) { // Sinhala
			$this->lang->load('si', 'Sinhala');
		} else if ($session_data['language_id'] == 3) { // Tamil
			$this->lang->load('ta', 'Tamil');
		}

		// $ProvidingInformationType = $this->Model_registration->getProvidingInformationType($session_data['language_id']);
		// $MaritalStatus = $this->Model_registration->getMaritalStatus($session_data['language_id']);
		// $MarriageType = $this->Model_registration->getMarriageType($session_data['language_id']);
		// $NoofChildren = $this->Model_registration->getNoofChildren($session_data['language_id']);

		// $this->data['ProvidingInformationType_data'] = $ProvidingInformationType;
		// $this->data['MaritalStatus_data'] = $MaritalStatus;
		// $this->data['MarriageType_data'] = $MarriageType;
		// $this->data['NoofChildren_data'] = $NoofChildren;

		$this->load->view('registration/create_account');
	}

	// ---------------------------------------------------------------------------------------------------------------------------
	//DK section Start
	public function physicalStatus()
	{
		$this->CheckAndRedirectNextForm(1);

		$this->render_template_registration('registration/physical_status', 'Add Physical Details', NULL);


		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/physical_status');
		// $this->load->view('registration/footer');
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

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/residence');
		// $this->load->view('registration/footer');
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
		$this->render_template_registration('registration/background', 'Add Background Details', NULL);

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/background');
		// $this->load->view('registration/footer');
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
		$this->render_template_registration('registration/lifeStyle', 'Add Life Style Details', NULL);

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/lifeStyle');
		// $this->load->view('registration/footer');
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

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/who_am_i');
		// $this->load->view('registration/footer');
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
		$this->render_template_registration('registration/education', 'Education', NULL);

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/education');
		// $this->load->view('registration/footer');
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

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/career');
		// $this->load->view('registration/footer');
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
	// Load working as main category data to career details form
	public function loadWorkingAsMainCat()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadWorkingAsMainCat();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');

			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $workingAs) {
					$workingAsName = $workingAs->vcWorkingAsMainCat;
					$html .= "<option value=" . $workingAs->intWorkingAsMainCatId . " >" . $workingAsName  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}
	// Load working as sub category data to career details form
	public function loadWorkingAsSubCat()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadWorkingAsSubCat();
		if (!$result) {
			return false;
		} else {
			$this->load->helper('language');
			$this->lang->load('en', 'English');

			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $WorkingAsSubCat) {
					$WorkingAsSubCatName = $WorkingAsSubCat->vcWorkingAsSubCatl;
					$html .= "<option value=" . $WorkingAsSubCat->intWorkingAsSubCatId . " >" . $WorkingAsSubCatName  . "</option>";
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
		$this->render_template_registration('registration/personal_assets', 'Personal Assets', NULL);

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/personal_assets');
		// $this->load->view('registration/footer');
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

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/family');
		// $this->load->view('registration/footer');
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

		// $this->load->helper('language');
		// $this->lang->load('en', 'English');
		// $this->load->view('registration/header');
		// $this->load->view('registration/after_marriage');
		// $this->load->view('registration/footer');
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
		// $this->CheckAndRedirectNextForm(11);
		// $this->render_template_registration('registration/horoscope', 'Horoscope', NULL);

		$this->load->helper('language');
		$this->lang->load('en', 'English');
		$this->load->view('registration/header');
		$this->load->view('registration/horoscope');
		$this->load->view('registration/footer');
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


	public function myPhotosAndVideos()
	{
		// $this->CheckAndRedirectNextForm(12);
		// $this->render_template_registration('registration/horoscope', 'Horoscope', NULL);

		$this->load->helper('language');
		$this->lang->load('en', 'English');
		$this->load->view('registration/header');
		$this->load->view('registration/my_photos_and_videos');
		$this->load->view('registration/footer');
	}

	public function UploadMyPhotos()
	{
		$this->load->model('Model_registration');
		$result = $this->Model_registration->getLastUploadedImageName();

		if ($result['status']) {
			$fileName = $result['lastUploadImageName'];
			$fileName++;
		} else {
			$fileName = 1;
		}

		$folderName = $this->session->userdata('member_code');
		$imagePath = "./resources/images/member/" . $folderName;
		if (!is_dir($imagePath)) {
			mkdir("./resources/images/member/" . $folderName);
		}
		$config['upload_path'] = $imagePath;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $fileName;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload("file1")) {
			$data = array('upload_data' => $this->upload->data());

			$imgName = $data['upload_data']['file_name'];
			$imgType = $data['upload_data']['file_ext'];

			// echo ($imageType);

			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveUploadedImageName($imgName, $imgType);

			if ($result == true) {
				$response['success'] = true;
				$session_data = array('no_of_submitted_form' => 12);
				$this->session->set_userdata($session_data);
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while member images. Please contact system administrator.';
			}
		}
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
				foreach ($result as $useriamges) {
					$html .= "<div class='col-3 text-al-center' style='padding: 10px!important'>
					<i class='far fa-times-circle'></i> <br>
					<img class='img-thumbnail imgUpload' src=" . base_url('resources/images/member/68/' . $useriamges->intImageName . $useriamges->vcImageType) . "> <br>
					<div class='text-al-center'>
					<input name='MyPhotos' type='radio' value=" . $useriamges->intImageID . " id=img" . $useriamges->intImageID . "><br>
					<label for=img" . $useriamges->intImageID . ">Profile picture</label>
					</div>
					</div>";
				}
				echo json_encode($html);
			}
		}
	}

	public function AboutYourselfAndPartner()
	{
		// $this->CheckAndRedirectNextForm(13);
		// $this->render_template_registration('registration/horoscope', 'Horoscope', NULL);
		$this->load->helper('language');
		$this->lang->load('en', 'English');
		$this->load->view('registration/header');
		$this->load->view('registration/about_yourself_and_partner');
		$this->load->view('registration/footer');
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
		// $this->CheckAndRedirectNextForm(13);
		// $this->render_template_registration('registration/horoscope', 'Horoscope', NULL);
		$this->load->helper('language');
		$this->lang->load('en', 'English');
		$this->load->view('registration/header');
		$this->load->view('registration/privacy_settings');
		$this->load->view('registration/footer');
	}

	public function AddPrivacySettings()
	{
		$response = array();

		$this->form_validation->set_rules('MyPhotos', 'MyPhotos privacy', 'required');
		$this->form_validation->set_rules('MyVideos', 'MyPhotos privacy', 'required');
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
				$response['messages'] = 'Error in the database while saving privacy settings. Please contact system administrator.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
	}

	public function partnerPreferences()
	{

		// $this->CheckAndRedirectNextForm(15);
		// $this->render_template_registration('registration/partnerPreferences', 'Partner Preferences', NULL);
		$this->load->helper('language');
		$this->lang->load('en', 'English');
		$this->load->view('registration/header');
		$this->load->view('registration/partnerPreferences');
		$this->load->view('registration/footer');
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
			// $session_data = $this->session->userdata();
			// if ($session_data['language_id'] == 1) { // English
			$this->lang->load('en', 'English');
			// } else if ($session_data['language_id'] == 2) { // Sinhala
			// $this->lang->load('si', 'Sinhala');
			// } else if ($session_data['language_id'] == 3) { // Tamil
			// 	$this->lang->load('ta', 'Tamil');
			// }
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
			// $session_data = $this->session->userdata();
			// if ($session_data['language_id'] == 1) { // English
			$this->lang->load('en', 'English');
			// } else if ($session_data['language_id'] == 2) { // Sinhala
			// $this->lang->load('si', 'Sinhala');
			// } else if ($session_data['language_id'] == 3) { // Tamil
			// 	$this->lang->load('ta', 'Tamil');
			// }
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
			// $session_data = $this->session->userdata();
			// if ($session_data['language_id'] == 1) { // English
			$this->lang->load('en', 'English');
			// } else if ($session_data['language_id'] == 2) { // Sinhala
			// $this->lang->load('si', 'Sinhala');
			// } else if ($session_data['language_id'] == 3) { // Tamil
			// 	$this->lang->load('ta', 'Tamil');
			// }
			$html = "<option value=" . 0 . " >" . lang('select')  . "</option>";
			if ($result) {
				foreach ($result as $cities) {
					$districName = lang($cities->vcCityName);
					$html .= "<option value=" . $cities->intCityId . " >" . $districName  . "</option>";
				}
				echo json_encode($html);
			}
		}
	}

	public function horoscope()
	{
		// $this->CheckAndRedirectNextForm(4);
		// $this->render_template_registration('registration/lifeStyle', 'Add Life Style Details', NULL);

		$this->load->helper('language');
		$this->lang->load('en', 'English');
		$this->load->view('registration/header');
		$this->load->view('registration/horoscope');
		$this->load->view('registration/footer');
	}


	// end dk section
	// ---------------------------------------------------------------------------------------------------------------------------

	public function createAccount()
	{

		$email = $this->input->post('email');
		$random_EmailCode = "";
		$random_EmailCode = substr(md5(uniqid(rand(), true)), 16, 16);

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[member.vcEmail]');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');


		// $this->Model_registration->sendVerificatinEmail($email, $random_EmailCode);
		if ($this->form_validation->run() == TRUE) {
			$response = $this->Model_registration->saveCreateAccount($email, $random_EmailCode);
			if ($response['success'] == true) {
				$userData = $this->Model_registration->getMemberData($random_EmailCode);
				// $this->Model_registration->sendVerificatinEmail($email, $random_EmailCode);
				$response['email'] = $userData['vcEmail'];
				$response['verificationText'] = $userData['vcEmailCode'];
				$response['messages'] = "Please Check Your Email";
				$response['success'] = true;
			} else {
				$response['messages'] = "Sent error";
				$response['success'] = false;
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}

		echo json_encode($response);
	}

	public function EmailVerification($verificationText = NULL)
	{
		$response = array();

		$userData = $this->Model_registration->getMemberData($verificationText);
		$noRecords = $this->Model_registration->verifyEmailAddress($verificationText);
		$noRecordsendOTP = 0;

		if ($noRecords > 0) {
			$data['verificationText'] = $verificationText;
			$data['vcMobileNo'] = $userData['Without94'];
			$data['vcCountryCode'] = $userData['vcCountryCode'];

			if ($userData['intOTPSentCount'] == 0) {
				$noRecordsendOTP = $this->Model_registration->sendOTP($verificationText, false);
			}
			if ($noRecordsendOTP > 0) {
				$this->load->view('registration/header');
				$this->load->view('registration/otp_verification', $data);
				$this->load->view('registration/footer');
			} else {
				$this->load->view('registration/header');
				$this->load->view('registration/otp_verification', $data);
				$this->load->view('registration/footer');
			}
		} else {
			$error = array('error' => "Sorry Unable to Verify Your Email!");
			$this->load->helper('language');
			$session_data = $this->session->userdata();
			if ($session_data['language_id'] == 1) { // English
				$this->lang->load('en', 'English');
			} else if ($session_data['language_id'] == 2) { // Sinhala
				$this->lang->load('si', 'Sinhala');
			} else if ($session_data['language_id'] == 3) { // Tamil
				$this->lang->load('ta', 'Tamil');
			}
			$this->load->view('registration/create_account');
		}
		// $data['errormsg'] = $error;
	}

	public function sendEmail($email, $random_EmailCode)
	{
		$this->Model_registration->sendVerificatinEmail($email, $random_EmailCode);
	}

	public function otpResend($verificationText = NULL)
	{
		// var_dump($verificationText);
		// $this->render_template_registration('Registration/otp_verification', 'OTP Verification', NULL);

		$userData = $this->Model_registration->getMemberData($verificationText);

		if ($userData['intOTPSentCount'] == 3) {
			$response['messages'] = "Can't Send More than 3 text messages, Please Contact Us !";
			$response['success'] = false;
		} else {
			$noRecordsendOTP = $this->Model_registration->sendOTP($verificationText, true);
			if ($noRecordsendOTP > 0) {
				$response['messages'] = "Sent Successfully !";
				$response['success'] = true;
			} else {

				$response['messages'] = "Sent error";
				$response['success'] = false;
			}
		}
		echo json_encode($response);
	}

	public function fetchUserDate($EmailVerificationCode)
	{
		if ($EmailVerificationCode) {
			$data = $this->Model_registration->getMemberData($EmailVerificationCode);
			echo json_encode($data);
		}

		return false;
	}


	public function otpVerification($otpNumber, $emailVerificationCode)
	{
		$noRecord = $this->Model_registration->otpVerification($otpNumber, $emailVerificationCode);
		if ($noRecord > 0) {
			$response['messages'] = "Verification Successfully, Please Re-Login Here !";
			$response['success'] = true;
		} else {
			$response['messages'] = "Please Enter Valid OTP Code !";
			$response['success'] = false;
		}
		echo json_encode($response);
	}

	public function upDateMobileNumber($mobile_no, $emailVerificationCode, $countryCode)
	{
		$noRecord = $this->Model_registration->upDateMobileNumber($mobile_no, $emailVerificationCode, $countryCode);
		if ($noRecord > 0) {
			$response['messages'] = "Update Successfully !";
			$response['success'] = true;
		} else {

			$response['messages'] = "Nothing To Change !";
			$response['success'] = false;
		}
		echo json_encode($response);
	}

	public function sample()
	{

		echo lang('hello');
		$this->load->view('registration/header');
		$this->load->view('registration/sample');
		$this->load->view('registration/footer');
	}
}
