<?php

class Account extends Admin_Controller{
    public function __construct()
	{
		parent::__construct();
		// $this->load->model('Model_registration');
		// header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
		// header("Pragma: no-cache"); // HTTP 1.0.
		// header("Expires: 0"); // Proxies.
	}

    public function MyAccount(){
		$this->render_template('account/my_account', 'My Account', null);
	}

}