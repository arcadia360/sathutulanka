<?php
class Registration extends CI_Controller
{
	public function index()
	{
		$this->load->view('user_registration/header');
		$this->load->view('user_registration/sample');
		$this->load->view('user_registration/footer');
	}
}
