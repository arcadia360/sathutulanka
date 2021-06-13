<?php

class Account extends Admin_Controller{
    public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
		$this->load->model('Model_account');
		// header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
		// header("Pragma: no-cache"); // HTTP 1.0.
		// header("Expires: 0"); // Proxies.
	}

    public function MyAccount(){

		$member_id = $this->session->userdata('member_id');
		// $user_id= 18;
		$memberData = $this->Model_account->getMemberData($member_id);

		$this->data['memberData'] = $memberData;

		$this->render_template('account/my_account', 'My Account',  $this->data);
	}

	public function AllSingles()
	{
		// $gender = $this->session->userdata('gender');
		$AllSinglesCount = $this->Model_account->getAllSinglesCount();

		$this->data['AllSinglesCount'] = $AllSinglesCount;

		$this->render_template('account/all_singles', 'All Singles',  $this->data);
	}

	public function MatchProfile()
	{

		$member_id = $this->session->userdata('member_id');
		// $user_id= 18;
		$memberData = $this->Model_account->getMemberData($member_id);

		$this->data['userData'] = $memberData;

		$this->render_template('account/match_profile', 'Match Profile',  null);
	}

	public function GetMyMatches(){
		$member_id = $this->session->userdata('member_id');
		$gender = $this->session->userdata('gender');

		$result = $this->Model_account->getMyMatches($member_id, $gender);
		echo json_encode($result);
	}

}