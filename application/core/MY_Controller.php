<?php

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_auth');
	}
}

class Admin_Controller extends MY_Controller
{
	var $permission = array();
	var $isAdmin = FALSE;

	public function __construct()
	{
		parent::__construct();

		$group_data = array();
		if (empty($this->session->userdata('logged_in'))) {

			$session_data = array('logged_in' => FALSE);
			$this->session->set_userdata($session_data);
		} else {
			// $user_id = $this->session->userdata('user_id');
			// $this->load->model('model_auth');
			// $group_data = $this->model_auth->getUserGroupByUserId($user_id);

			// if ($group_data["isAdmin"] == 1) {
			// 	$this->isAdmin = TRUE;
			// 	$this->data['isAdmin'] = TRUE;
			// 	$this->data['user_permission'] = array();
			// } else {
			// 	$this->data['isAdmin'] = FALSE;
			// 	$this->data['user_permission'] = unserialize($group_data['vcPermission']);
			// 	$this->permission = unserialize($group_data['vcPermission']);
			// }
		}

		// $this->CheckANdRedirectNextForm();
	}

	public function logged_in()
	{
		$session_data = $this->session->userdata();
		if ($session_data['logged_in'] == TRUE) {
			// redirect('dashboard', 'refresh');
			$this->CheckANdRedirectNextForm();
		}
	}

	public function not_logged_in()
	{
		$session_data = $this->session->userdata();
		if ($session_data['logged_in'] == FALSE) {
			if (!($this->uri->segment(1) == "Registration" && $this->uri->segment(2) == "")) {
				redirect(base_url("Welcome"), 'refresh');
			}
		}
	}

	public function render_template($page = null, $title, $data = array()) // For Registerd User
	{

		$this->data['page_title'] = $title . " | Satutu Lanka";

		$this->load->helper('language');

		// Temp 2021-05-08 ViRAJ
		if (!isset($_SESSION['language_id']) || empty($_SESSION['language_id'])) {  // If Fresh User
			$logged_in_sess = array(
				'language_id' => 1 // 1 - English, 2 - Sinhala, 3 - Tamil
			);
			$this->session->set_userdata($logged_in_sess);
		}
		// END Temp

		$session_data = $this->session->userdata();

		if ($session_data['language_id'] == 1) { // English
			$this->lang->load('en', 'English');
		} else if ($session_data['language_id'] == 2) { // Sinhala
			$this->lang->load('si', 'Sinhala');
		} else if ($session_data['language_id'] == 3) { // Tamil
			$this->lang->load('ta', 'Tamil');
		}

		// $this->load->view('partials/header',$this->data);
		$this->load->view('partials/navbar', $this->data);
		$this->load->view($page);
		$this->load->view('partials/footer');
	}

	public function render_template_registration($page = null, $title, $data = array()) // For Registration User
	{

		$this->data['page_title'] = $title . " | Satutu Lanka";

		$this->load->helper('language');

		$session_data = $this->session->userdata();

		// if ($session_data['language_id'] == 1) { // English
		// 	$this->lang->load('en', 'English');
		// } else if ($session_data['language_id'] == 2) { // Sinhala
		// 	$this->lang->load('si', 'Sinhala');
		// } else if ($session_data['language_id'] == 3) { // Tamil
		// 	$this->lang->load('ta', 'Tamil');
		// }

		$this->lang->load('en', 'English');
		// $this->lang->load('si', 'Sinhala');

		$this->load->view('registration/header', $this->data);
		$this->load->view($page);
		$this->load->view('registration/footer');
	}

	public function CheckAndRedirectNextForm($lastSubmitFormNo = NULL)
	{
		if ($this->session->userdata('member_id')) {

			$AccountStatusID = $this->session->userdata('member_account_status_id');

			if ($AccountStatusID == 3) { 	// Not Completed Account

				$lastSubmittedFormNo = $this->session->userdata('no_of_submitted_form');

				if ($lastSubmitFormNo > $lastSubmittedFormNo || $lastSubmitFormNo == 0) {

					if ($lastSubmittedFormNo == 1) {
						redirect(base_url("Registration/PhysicalStatus"), 'refresh');
					} else if ($lastSubmittedFormNo == 2) {
						redirect(base_url("Registration/Residence"), 'refresh');
					} else if ($lastSubmittedFormNo == 3) {
						redirect(base_url("Registration/Background"), 'refresh');
					} else if ($lastSubmittedFormNo == 4) {
						redirect(base_url("Registration/LifeStyle"), 'refresh');
					} else if ($lastSubmittedFormNo == 5) {
						redirect(base_url("Registration/WhoAmI"), 'refresh');
					} else if ($lastSubmittedFormNo == 6) {
						redirect(base_url("Registration/Education"), 'refresh');
					} else if ($lastSubmittedFormNo == 7) {
						redirect(base_url("Registration/Career"), 'refresh');
					} else if ($lastSubmittedFormNo == 8) {
						redirect(base_url("Registration/PersonalAssets"), 'refresh');
					} else if ($lastSubmittedFormNo == 9) {
						redirect(base_url("Registration/Family"), 'refresh');
					} else if ($lastSubmittedFormNo == 10) {
						redirect(base_url("Registration/AfterMarriage"), 'refresh');
					} else if ($lastSubmittedFormNo == 11) {
						redirect(base_url("Registration/Horoscope"), 'refresh');
					} else if ($lastSubmittedFormNo == 12) {
						redirect(base_url("Registration/myPhotos"), 'refresh');
					} else if ($lastSubmittedFormNo == 13) {
						redirect(base_url("Registration/AboutYourSelfAndPartner"), 'refresh');
					} else if ($lastSubmittedFormNo == 14) {
						redirect(base_url("Registration/PrivacySettings"), 'refresh');
					} else if ($lastSubmittedFormNo == 15) {
						redirect(base_url("Registration/PartnerPreferences"), 'refresh');
						// redirect(base_url("Account/AllSingles"), 'refresh');
					} else {
						$this->session->sess_destroy();
						redirect(base_url("Welcome"), 'refresh');
					}
				}
			} else if ($AccountStatusID  == 4 || $AccountStatusID == 5 || $AccountStatusID == 6 || $AccountStatusID == 7) { 	// Completed Account / Account Review Pending / Account Reviewed / Account Review Rejected
				redirect(base_url("Account/AllSingles"), 'refresh');
			}
		} else {
			redirect(base_url("Welcome"), 'refresh');
		}
	}

	public function CheckCookieAfterFillSessionData(){

		$username = $this->input->cookie('username', TRUE);
		$password = $this->input->cookie('password', TRUE);

		if ($username != NULL && $password != NULL) {
			$username_exists = $this->model_auth->check_username($username);
			if ($username_exists == TRUE) {
				$login = $this->model_auth->login($username, $password);
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
							'profile_pic' => $login['vcProfilePicture'],
							'language_id' => 1,
							'logged_in' => TRUE
						);

						if ($login['intMemberAccountStatusID'] == 3) { // Not Completed Account >>> (Redirect to registration forms)
							$this->session->set_userdata($logged_in_sess);
						} else if ($login['intMemberAccountStatusID'] == 4 || $login['intMemberAccountStatusID'] == 5 || $login['intMemberAccountStatusID'] == 6) { // Completed Account || Account Review Pending || Account Reviewed
							$this->session->set_userdata($logged_in_sess);
						}

					} else {
						setcookie("username", "", time() - 3600, "/");
						setcookie("password", "", time() - 3600, "/");
					}
				} else {
					setcookie("username", "", time() - 3600, "/");
					setcookie("password", "", time() - 3600, "/");
				}
			}else{
				setcookie("username", "", time() - 3600, "/");
				setcookie("password", "", time() - 3600, "/");
			}
		}
	}

	// public function company_currency()
	// {
	// 	$this->load->model('model_company');
	// 	$company_currency = $this->model_company->getCompanyData(1);
	// 	$currencies = $this->currency();

	// 	$currency = '';
	// 	foreach ($currencies as $key => $value) {
	// 		if($key == $company_currency['currency']) {
	// 			$currency = $value;
	// 		}
	// 	}

	// 	return $currency;

	// }


	// public function currency()
	// {
	// 	return $currency_symbols = array(
	// 	  'AED' => '&#1583;.&#1573;', // ?
	// 	  'AFN' => '&#65;&#102;',
	// 	  'ALL' => '&#76;&#101;&#107;',
	// 	  'ANG' => '&#402;',
	// 	  'AOA' => '&#75;&#122;', // ?
	// 	  'ARS' => '&#36;',
	// 	  'AUD' => '&#36;',
	// 	  'AWG' => '&#402;',
	// 	  'AZN' => '&#1084;&#1072;&#1085;',
	// 	  'BAM' => '&#75;&#77;',
	// 	  'BBD' => '&#36;',
	// 	  'BDT' => '&#2547;', // ?
	// 	  'BGN' => '&#1083;&#1074;',
	// 	  'BHD' => '.&#1583;.&#1576;', // ?
	// 	  'BIF' => '&#70;&#66;&#117;', // ?
	// 	  'BMD' => '&#36;',
	// 	  'BND' => '&#36;',
	// 	  'BOB' => '&#36;&#98;',
	// 	  'BRL' => '&#82;&#36;',
	// 	  'BSD' => '&#36;',
	// 	  'BTN' => '&#78;&#117;&#46;', // ?
	// 	  'BWP' => '&#80;',
	// 	  'BYR' => '&#112;&#46;',
	// 	  'BZD' => '&#66;&#90;&#36;',
	// 	  'CAD' => '&#36;',
	// 	  'CDF' => '&#70;&#67;',
	// 	  'CHF' => '&#67;&#72;&#70;',
	// 	  'CLP' => '&#36;',
	// 	  'CNY' => '&#165;',
	// 	  'COP' => '&#36;',
	// 	  'CRC' => '&#8353;',
	// 	  'CUP' => '&#8396;',
	// 	  'CVE' => '&#36;', // ?
	// 	  'CZK' => '&#75;&#269;',
	// 	  'DJF' => '&#70;&#100;&#106;', // ?
	// 	  'DKK' => '&#107;&#114;',
	// 	  'DOP' => '&#82;&#68;&#36;',
	// 	  'DZD' => '&#1583;&#1580;', // ?
	// 	  'EGP' => '&#163;',
	// 	  'ETB' => '&#66;&#114;',
	// 	  'EUR' => '&#8364;',
	// 	  'FJD' => '&#36;',
	// 	  'FKP' => '&#163;',
	// 	  'GBP' => '&#163;',
	// 	  'GEL' => '&#4314;', // ?
	// 	  'GHS' => '&#162;',
	// 	  'GIP' => '&#163;',
	// 	  'GMD' => '&#68;', // ?
	// 	  'GNF' => '&#70;&#71;', // ?
	// 	  'GTQ' => '&#81;',
	// 	  'GYD' => '&#36;',
	// 	  'HKD' => '&#36;',
	// 	  'HNL' => '&#76;',
	// 	  'HRK' => '&#107;&#110;',
	// 	  'HTG' => '&#71;', // ?
	// 	  'HUF' => '&#70;&#116;',
	// 	  'IDR' => '&#82;&#112;',
	// 	  'ILS' => '&#8362;',
	// 	  'INR' => '&#8377;',
	// 	  'IQD' => '&#1593;.&#1583;', // ?
	// 	  'IRR' => '&#65020;',
	// 	  'ISK' => '&#107;&#114;',
	// 	  'JEP' => '&#163;',
	// 	  'JMD' => '&#74;&#36;',
	// 	  'JOD' => '&#74;&#68;', // ?
	// 	  'JPY' => '&#165;',
	// 	  'KES' => '&#75;&#83;&#104;', // ?
	// 	  'KGS' => '&#1083;&#1074;',
	// 	  'KHR' => '&#6107;',
	// 	  'KMF' => '&#67;&#70;', // ?
	// 	  'KPW' => '&#8361;',
	// 	  'KRW' => '&#8361;',
	// 	  'KWD' => '&#1583;.&#1603;', // ?
	// 	  'KYD' => '&#36;',
	// 	  'KZT' => '&#1083;&#1074;',
	// 	  'LAK' => '&#8365;',
	// 	  'LBP' => '&#163;',
	// 	  'LKR' => '&#8360;',
	// 	  'LRD' => '&#36;',
	// 	  'LSL' => '&#76;', // ?
	// 	  'LTL' => '&#76;&#116;',
	// 	  'LVL' => '&#76;&#115;',
	// 	  'LYD' => '&#1604;.&#1583;', // ?
	// 	  'MAD' => '&#1583;.&#1605;.', //?
	// 	  'MDL' => '&#76;',
	// 	  'MGA' => '&#65;&#114;', // ?
	// 	  'MKD' => '&#1076;&#1077;&#1085;',
	// 	  'MMK' => '&#75;',
	// 	  'MNT' => '&#8366;',
	// 	  'MOP' => '&#77;&#79;&#80;&#36;', // ?
	// 	  'MRO' => '&#85;&#77;', // ?
	// 	  'MUR' => '&#8360;', // ?
	// 	  'MVR' => '.&#1923;', // ?
	// 	  'MWK' => '&#77;&#75;',
	// 	  'MXN' => '&#36;',
	// 	  'MYR' => '&#82;&#77;',
	// 	  'MZN' => '&#77;&#84;',
	// 	  'NAD' => '&#36;',
	// 	  'NGN' => '&#8358;',
	// 	  'NIO' => '&#67;&#36;',
	// 	  'NOK' => '&#107;&#114;',
	// 	  'NPR' => '&#8360;',
	// 	  'NZD' => '&#36;',
	// 	  'OMR' => '&#65020;',
	// 	  'PAB' => '&#66;&#47;&#46;',
	// 	  'PEN' => '&#83;&#47;&#46;',
	// 	  'PGK' => '&#75;', // ?
	// 	  'PHP' => '&#8369;',
	// 	  'PKR' => '&#8360;',
	// 	  'PLN' => '&#122;&#322;',
	// 	  'PYG' => '&#71;&#115;',
	// 	  'QAR' => '&#65020;',
	// 	  'RON' => '&#108;&#101;&#105;',
	// 	  'RSD' => '&#1044;&#1080;&#1085;&#46;',
	// 	  'RUB' => '&#1088;&#1091;&#1073;',
	// 	  'RWF' => '&#1585;.&#1587;',
	// 	  'SAR' => '&#65020;',
	// 	  'SBD' => '&#36;',
	// 	  'SCR' => '&#8360;',
	// 	  'SDG' => '&#163;', // ?
	// 	  'SEK' => '&#107;&#114;',
	// 	  'SGD' => '&#36;',
	// 	  'SHP' => '&#163;',
	// 	  'SLL' => '&#76;&#101;', // ?
	// 	  'SOS' => '&#83;',
	// 	  'SRD' => '&#36;',
	// 	  'STD' => '&#68;&#98;', // ?
	// 	  'SVC' => '&#36;',
	// 	  'SYP' => '&#163;',
	// 	  'SZL' => '&#76;', // ?
	// 	  'THB' => '&#3647;',
	// 	  'TJS' => '&#84;&#74;&#83;', // ? TJS (guess)
	// 	  'TMT' => '&#109;',
	// 	  'TND' => '&#1583;.&#1578;',
	// 	  'TOP' => '&#84;&#36;',
	// 	  'TRY' => '&#8356;', // New Turkey Lira (old symbol used)
	// 	  'TTD' => '&#36;',
	// 	  'TWD' => '&#78;&#84;&#36;',
	// 	  'UAH' => '&#8372;',
	// 	  'UGX' => '&#85;&#83;&#104;',
	// 	  'USD' => '&#36;',
	// 	  'UYU' => '&#36;&#85;',
	// 	  'UZS' => '&#1083;&#1074;',
	// 	  'VEF' => '&#66;&#115;',
	// 	  'VND' => '&#8363;',
	// 	  'VUV' => '&#86;&#84;',
	// 	  'WST' => '&#87;&#83;&#36;',
	// 	  'XAF' => '&#70;&#67;&#70;&#65;',
	// 	  'XCD' => '&#36;',
	// 	  'XPF' => '&#70;',
	// 	  'YER' => '&#65020;',
	// 	  'ZAR' => '&#82;',
	// 	  'ZMK' => '&#90;&#75;', // ?
	// 	  'ZWL' => '&#90;&#36;',
	// 	);
	// }
}
