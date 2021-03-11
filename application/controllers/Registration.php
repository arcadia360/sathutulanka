<?php
class Registration extends Admin_Controller
{
	public function index()
	{
		$this->load->view('registration/header');
		$this->load->view('registration/sample');
		$this->load->view('registration/footer');
	}

	public function CreateAccount()
	{
		// $this->load->view('registration/header');
		$this->load->view('registration/create_account');
		// $this->load->view('registration/footer');
	}

	public function addPhysicalStatus()
	{
		$this->load->view('registration/header');
		$this->load->view('registration/physical_status');
		$this->load->view('registration/footer');
	}

	public function addBackground()
	{
		// $this->load->helper('language');
		// $this->lang->load('si', 'Sinhala');
		// $this->load->view('user_registration/header');
		// $this->load->view('user_registration/background');
		// $this->load->view('user_registration/footer');


		$this->render_template_registration('registration/background', 'Add Background Details', NULL);
	}
	public function langTest()
	{

		echo lang('hello');
		$this->load->view('registration/header');
		$this->load->view('registration/physical_status');
		$this->load->view('registration/footer');
	}
}
