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
	}

	public function index()
	{
		$this->load->helper('language');

		$session_data = $this->session->userdata();

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
		$this->render_template_registration('registration/physical_status', 'Add Background Details', NULL);
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
		$this->render_template_registration('registration/residence', 'Add Residence Details', NULL);
	}

	public function addResidenceDetails()
	{
		$response = array();

		$this->form_validation->set_rules('liveIn', 'Currently Live In', 'required');
		$this->form_validation->set_rules('AddressofSriLanka', 'Address of Sri Lanka', 'required');
		$this->form_validation->set_rules('nativeDistrict', 'Native District', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveResidenceDetails();
			if ($result == true) {
				$response['success'] = true;
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

	public function WhoAmI()
	{
		// $this->load->view('registration/header');
		$this->render_template_registration('registration/who_am_i', 'Who Am I', NULL);
	}

	public function education()
	{
		$this->render_template_registration('registration/education', 'Education', NULL);
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
		$this->form_validation->set_rules('WorkingAsMainCat', 'Working as main category', 'required');
		$this->form_validation->set_rules('workingAsSubCat', 'working as sub category', 'required');
		$this->form_validation->set_rules('workingLocation', 'working location', 'required');
		$this->form_validation->set_rules('describeCareer', 'describe career', 'max_length[250]');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->saveCareerDetails();
			if ($result == true) {
				$response['success'] = true;
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
		$this->render_template_registration('registration/personal_assets', 'Personal Assets', NULL);
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
		$this->render_template_registration('registration/family', 'Family', NULL);
	}

	public function imageUpload()
	{
		$imgName = array();

		$config['upload_path'] = "./assets/images";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;

		$this->load->library('upload', $config);

		if ($this->input->post('file1')) {
			$result = true;
		}

		if ($this->upload->do_upload("file1")) {
			$data = array('upload_data' => $this->upload->data());

			$img4 = $this->input->post('file1');
			$image = $data['upload_data']['file_name'];
			// $result = $this->m_upload->simpan_upload($judul, $image);
			// $imgName['']
			$result = true;
		}
		if ($this->upload->do_upload("file2")) {
			$data = array('upload_data' => $this->upload->data());

			$img4 = $this->input->post('file2');
			$image = $data['upload_data']['file_name'];
			// $result = $this->m_upload->simpan_upload($judul, $image);
			$result = true;
		}
		if ($this->upload->do_upload("file3")) {
			$data = array('upload_data' => $this->upload->data());

			$img4 = $this->input->post('file3');
			$image = $data['upload_data']['file_name'];
			// $result = $this->m_upload->simpan_upload($judul, $image);
			$result = true;
		}
		if ($this->upload->do_upload("file4")) {
			$data = array('upload_data' => $this->upload->data());

			$img4 = $this->input->post('file4');
			$image = $data['upload_data']['file_name'];
			// $result = $this->m_upload->simpan_upload($judul, $image);
			$result = true;
		}
		if ($this->upload->do_upload("file5")) {
			$data = array('upload_data' => $this->upload->data());

			$img5 = $this->input->post('file5');
			$image = $data['upload_data']['file_name'];
			// $result = $this->m_upload->simpan_upload($judul, $image);
			$result = true;
		}
		echo json_decode($result);
	}

	public function afterMarriage()
	{
		$this->render_template_registration('registration/after_marriage', 'After Marriage', NULL);
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

	public function background()
	{
		$this->render_template_registration('registration/background', 'Add Background Details', NULL);
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


	// end dk section
	// ---------------------------------------------------------------------------------------------------------------------------

	public function createAccount()
	{

		$email = $this->input->post('email');
		$random_EmailCode = "";
		$random_EmailCode = substr(md5(uniqid(rand(), true)), 16, 16);

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.vcEmail]');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');


		// $this->Model_registration->sendVerificatinEmail($email, $random_EmailCode);
		if ($this->form_validation->run() == TRUE) {
			$response = $this->Model_registration->saveCreateAccount($email, $random_EmailCode);
			if ($response['success'] == true) {
				$userData = $this->Model_registration->getUserDate($random_EmailCode);
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

		$userData = $this->Model_registration->getUserDate($verificationText);
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

		$userData = $this->Model_registration->getUserDate($verificationText);

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
			$data = $this->Model_registration->getUserDate($EmailVerificationCode);
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
