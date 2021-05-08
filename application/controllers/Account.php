<?php

class Account extends Admin_Controller{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_account');
		// header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
		// header("Pragma: no-cache"); // HTTP 1.0.
		// header("Expires: 0"); // Proxies.
	}

    public function MyAccount(){

		$user_id = $this->session->userdata('user_id');
		$user_id= 18;
		$userData = $this->Model_account->getUserDate($user_id);

		$this->data['userData'] = $userData;

		$this->render_template('account/my_account', 'My Account',  $this->data);
	}

	public function AllSingles()
	{

		// $user_id = $this->session->userdata('user_id');
		// $user_id = 18;
		// $userData = $this->Model_account->getUserDate($user_id);

		// $this->data['userData'] = $userData;

		$this->render_template('account/all_singles', 'All Singles',  null);
	}

}