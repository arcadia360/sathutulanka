<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Admin_Controller {

	public function index()
	{
		if (!isset($_SESSION['language_id']) || empty($_SESSION['language_id'])) {  // If Fresh User
			$logged_in_sess = array(
				'language_id' => 1 // 1 - English, 2 - Sinhala, 3 - Tamil
			);
			$this->session->set_userdata($logged_in_sess);
		} 

		// $this->load->view('welcome');
		// $this->session->sess_destroy();


// if (!isset($_SESSION['language_id']) || empty($_SESSION['language_id'])) {  // If Fresh User

// echo "AAA";
// }

		$this->render_template('welcome', 'W E L C O M E', null);
	}

	public function ChangeLanguage($LanguageID,$url){
		if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {  // If Fresh User
			$logged_in_sess = array(
				'language_id' => $LanguageID // 1 - English, 2 - Sinhala, 3 - Tamil
			);
			$this->session->set_userdata($logged_in_sess);
			redirect(base_url($url), 'refresh');
		}else{
			echo 'ddddd';
		}
	}
}
