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

	public function WhoAmI()
	{
		// $this->load->view('registration/header');
		$this->render_template_registration('registration/who_am_i', 'Who Am I', NULL);
	}

	public function education()
	{
		$this->render_template_registration('registration/education', 'Education', NULL);
	}

	public function career()
	{
		$this->render_template_registration('registration/career', 'career', NULL);
	}

	public function personal_assets()
	{
		$this->render_template_registration('registration/personal_assets', 'Personal Assets', NULL);
	}


	public function after_marriage()
	{
		$this->render_template_registration('registration/after_marriage', 'After Marriage', NULL);
	}

	public function LoadCountries()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadCountries();
		if ($result) {
			echo json_encode($result);
		} else {
			echo json_encode($result);
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
			// $this->lang->load('en', 'English');
			// } else if ($session_data['language_id'] == 2) { // Sinhala
			$this->lang->load('si', 'Sinhala');
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
			// $this->lang->load('en', 'English');
			// } else if ($session_data['language_id'] == 2) { // Sinhala
			$this->lang->load('si', 'Sinhala');
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

	public function lifeStyle()
	{
		$this->render_template_registration('registration/lifeStyle', 'Add Life Style Details', NULL);
	}

	public function createAccount()
	{

		$email = $this->input->post('email');
		$random_EmailCode = "";
		$random_EmailCode = substr(md5(uniqid(rand(), true)), 16, 16);

		$response = $this->Model_registration->saveCreateAccount($email, $random_EmailCode);
		$this->Model_registration->sendVerificatinEmail($email, $random_EmailCode);

		if ($response['success'] == true) {

			$this->load->view('registration/create_account');
		} else {
		}
	}

	public function EmailVerification($verificationText = NULL)
	{
		$response = array();

		$userData = $this->Model_registration->getUserDate($verificationText);
		$noRecords = $this->Model_registration->verifyEmailAddress($verificationText);
		$noRecordsendOTP = 0;
		if ($noRecords > 0) {
			$error = array('success' => "Email Verified Successfully!");
			if ($userData['intOTPSentCount'] != 1) {
				$noRecordsendOTP = $this->Model_registration->sendOTP($verificationText, false);
			}
			if ($noRecordsendOTP > 0) {
				$this->render_template_registration('registration/otp_verification', 'OTP Verification', NULL);
			} else {

				$this->render_template_registration('registration/otp_verification', 'OTP Verification', NULL);
			}
		} else {
			$error = array('error' => "Sorry Unable to Verify Your Email!");
			$this->load->view('registration/create_account');
		}
		$data['errormsg'] = $error;
	}

	public function otpResend($verificationText = NULL)
	{
	    // var_dump($verificationText);
		// $this->render_template_registration('Registration/otp_verification', 'OTP Verification', NULL);
		$response['messages'] = $verificationText;

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
