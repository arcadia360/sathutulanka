<?php
class Registration extends CI_Controller
{
	public function index()
	{
		$this->load->view('user_registration/header');
		$this->load->view('user_registration/sample');
		$this->load->view('user_registration/footer');
	}

	public function addPhysicalStatus()
	{
		$this->load->view('user_registration/header');
		$this->load->view('user_registration/physical_status');
		$this->load->view('user_registration/footer');
	}
	public function langTest()
	{
		$this->load->helper('language');
		$this->lang->load('si', 'Sinhala');
		echo lang('hello');
		$this->load->view('user_registration/header');
		$this->load->view('user_registration/physical_status');
		$this->load->view('user_registration/footer');
	}
}
