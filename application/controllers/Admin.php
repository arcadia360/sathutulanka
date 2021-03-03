<?php
class Admin extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin_panel/header');
		$this->load->view('admin_panel/home');
		$this->load->view('admin_panel/footer');
	}

	public function test()
	{
		echo 'success';
	}
}
