<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Admin_Controller
{

	public function index()
	{

		$this->CheckCookieAfterFillSessionData(); // Check Cookie

		if (!isset($_SESSION['member_id']) || empty($_SESSION['member_id'])) {  // If Fresh User
			$this->render_template('welcome', 'W E L C O M E', null);
		} else {
			$this->CheckAndRedirectNextForm();
		}
	}

	public function ChangeLanguage($LanguageID, $url)
	{
		if (!isset($_SESSION['member_id']) || empty($_SESSION['member_id'])) {  // If Fresh User
			$logged_in_sess = array(
				'language_id' => $LanguageID // 1 - English, 2 - Sinhala, 3 - Tamil
			);
			$this->session->set_userdata($logged_in_sess);
			redirect(base_url($url), 'refresh');
		} else {
			// echo 'ddddd';
		}
	}
}
