<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Admin_Controller
{

	public function index()
	{
		$this->CheckCookieAfterFillSessionData(); // Check Cookie

		if (!isset($_SESSION['member_id']) || empty($_SESSION['member_id'])) {  // If Fresh User
			$this->render_template('welcome', 'Welcome', null);
		} else {
			$this->CheckAndRedirectNextForm();
		}
	}

	// public function ForgetPassword(){

	// 	$this->CheckCookieAfterFillSessionData(); // Check Cookie

	// 	if (!isset($_SESSION['member_id']) || empty($_SESSION['member_id'])) {  // If Fresh User
	// 		$this->render_template('forget_password', 'W E L C O M E', null);
	// 	} else {
	// 		$this->CheckAndRedirectNextForm();
	// 	}
	// }

	public function ContactUs()
	{
		$this->render_template('contact_us', 'Contact Us', null);
	}

	// public function ChangeLanguage($LanguageID, $url)   //>>> Commented on 2021-08-11 (ViRAJ)
	// {
	// 	if (!isset($_SESSION['member_id']) || empty($_SESSION['member_id'])) {  // If Fresh User
	// 		$logged_in_sess = array(
	// 			'language_id' => $LanguageID // 1 - English, 2 - Sinhala, 3 - Tamil
	// 		);
	// 		$this->session->set_userdata($logged_in_sess);
	// 		redirect(base_url($url), 'refresh');
	// 	} else {
	// 		// echo 'ddddd';
	// 	}
	// }

	public function ChangeLanguage($LanguageID) 
	{
		$logged_in_sess = array(
			'language_id' => $LanguageID // 1 - English, 2 - Sinhala, 3 - Tamil
		);
		$this->session->set_userdata($logged_in_sess);
		$response['success'] = true;
		echo json_encode($response);
	}
}
