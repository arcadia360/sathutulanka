<?php
class CreateAccount extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Model_registration');
		$this->load->model('model_auth');
		
	}

    public function saveAccount()
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
				$response['messages'] = "Please Check Your Email !";
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

	public function sendEmail($email, $random_EmailCode)
	{
		$this->Model_registration->sendVerificatinEmail($email, $random_EmailCode);
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
			$this->render_template('welcome', 'W E L C O M E', null);

		}
		// $data['errormsg'] = $error;
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

	

	public function otpVerification($otpNumber, $emailVerificationCode)
	{
		$noRecord = $this->Model_registration->otpVerification($otpNumber, $emailVerificationCode);
		if ($noRecord > 0) {
			$this->logged_in();
			$login = $this->model_auth->otpVerificationAfterForm($otpNumber, $emailVerificationCode);
			if ($login) {
				if ($login['IsActive'] == 1) {
					$logged_in_sess = array(
						'member_id' => $login['intMemberID'],
						'member_code' => $login['vcMemberCode'],
						'nick_name' => $login['vcNickName'],
						'email' => $login['vcEmail'],
						'member_account_status_id' => $login['intMemberAccountStatusID'],
						'member_account_status_name' => $login['vcMemberAccountStatus'],
						'no_of_submitted_form'  => $login['intNoOfSubmitedForm'],
						'gender'  => $login['vcGender'],
						'language_id' => 1,
						'logged_in' => TRUE
					);

					$this->session->set_userdata($logged_in_sess);
					$response['success'] = true;
				   
				} else {
					$this->session->set_flashdata("errors", "Your account has been deactivated. Please contact administrator !");
					redirect(base_url("Welcome"), 'refresh');
				}
			}


		} else {
			$response['messages'] = "Please Enter Valid OTP Code !";
			$response['success'] = false;
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

	public function ForgetPassword()
	{

		$this->CheckCookieAfterFillSessionData(); // Check Cookie

		if (!isset($_SESSION['member_id']) || empty($_SESSION['member_id'])) {  // If Fresh User
			$this->render_template('account/forget_password', 'W E L C O M E', null);
		} else {
			$this->CheckAndRedirectNextForm();
		}
	}

	public function SendPasswordResetLinkToTheEmailAddress()
	{
		$username_exists = $this->model_auth->check_username($this->input->post('email-for-pass'));
		if ($username_exists) {


			$result = $this->Model_registration->getMemberBasicData($this->input->post('email-for-pass'));
			
			$response = $this->Model_registration->getPasswordRestLink($result['intMemberID'], $result['vcEmail']);

			if ($response['success'] == true) {
				$response['messages'] = "Successful !";
			}else{
				$response['messages'] = "Resetting Link Generate Error !";
			}
		} else {
			$response['messages'] = "Invalid Email Address !";
			$response['success'] = false;
		}
		echo json_encode($response);
	}

	public function ResetPassword($verificationCode = NULL){
		// $this->CheckCookieAfterFillSessionData(); // Check Cookie

		// if (!isset($_SESSION['member_id']) || empty($_SESSION['member_id'])) {  // If Fresh User
		// 	$this->render_template('account/create_new_password', 'W E L C O M E', null);
		// } else {
		// 	$this->CheckAndRedirectNextForm();
		// }

		$noRecords = $this->Model_registration->upDateIsReset($verificationCode);
		if ($noRecords > 0) {
			$this->data['user_data'] = array('status' => '1','emailCode' => $verificationCode); 
			$this->render_template('account/create_new_password', 'W E L C O M E', $this->data);
		}
		else{
			$this->data['user_data'] = array('status' => '0','emailCode' => $verificationCode); 
			$this->render_template('account/create_new_password', 'W E L C O M E', $this->data);
		}
		
	}

	public function password_hash($pass = '')
	{
	  if ($pass) {
		$password = password_hash($pass, PASSWORD_DEFAULT);
		return $password;
	  }
	}

	public function CreateNewPassword()
	{
		$result = $this->Model_registration->getPasswordRestData($this->input->post('emailCode'));
		$IsSave = $this->Model_registration->createNewPassword($result['intMemberID']);

		if ($IsSave == true) {
			$response['success'] = true;
		}else{
			$response['success'] = false;
		}
		echo json_encode($response);
	}
	
}
