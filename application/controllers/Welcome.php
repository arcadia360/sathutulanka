<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome');
	}

	public function ChangeLanguage($LanguageID,$url){
		if (!isset($_SESSION['user_id']) || !empty($_SESSION['user_id'])) {  // If Fresh User
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
