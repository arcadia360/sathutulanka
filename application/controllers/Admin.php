<?php
class Admin extends CI_Controller
{
	public function index()
	{
		$this->load->view('partials/header_admin');
		$this->load->view('home_admin');
		$this->load->view('partials/footer_admin');
	}

	public function test()
	{
		echo 'success';
	}
}
