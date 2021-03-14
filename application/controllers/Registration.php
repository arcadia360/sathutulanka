<?php
class Registration extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();

		header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
		header("Pragma: no-cache"); // HTTP 1.0.
		header("Expires: 0"); // Proxies.
	}

	public function index()
	{
		// $this->load->view('registration/header');
		// $this->load->view('registration/sample');
		// $this->load->view('registration/footer');

		// $this->load->view('registration/header');
		$this->load->view('registration/create_account');
		// $this->load->view('registration/footer');
	}

	public function CreateAccount()
	{
		// $this->load->view('registration/header');
		$this->load->view('registration/create_account');
		// $this->load->view('registration/footer');
	}

	public function physicalStatus()
	{
		$this->render_template_registration('registration/physical_status', 'Add Background Details', NULL);
	}
	public function residence()
	{
		$this->render_template_registration('registration/residence', 'Add Background Details', NULL);
	}
	public function addPhysicalStatus()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('height', 'Height', 'required');
		$this->form_validation->set_rules('weight', 'Weight', 'required');
		$this->form_validation->set_rules('bodyShape', 'Body Shape', 'required');
		$this->form_validation->set_rules('skinColor', 'Skin Color', 'required');
		$this->form_validation->set_rules('disability', 'Disability', 'required');
		$this->form_validation->set_rules('bloodGroup', 'Blood Group', 'required');
		$this->form_validation->set_rules('healthInfo', 'Blood Group', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('flashValidationErr', 1);
			$this->physicalStatus();
		} else {
			$this->load->model('Model_registration');
			$result =  $this->Model_registration->savePhysicalStatus();
			if ($result) {
				$this->session->set_flashdata('flashValidationErr', 0);
				$this->residence();
			} else {
				$this->session->set_flashdata('flashError', 'Failed to Save Record!');
				$this->physicalStatus();
			}
		}
	}

	public function background()
	{
		// $this->load->helper('language');
		// $this->lang->load('si', 'Sinhala');
		// $this->load->view('user_registration/header');
		// $this->load->view('user_registration/background');
		// $this->load->view('user_registration/footer');


		$this->render_template_registration('registration/background', 'Add Background Details', NULL);
	}

	public function Verification(){
		$this->load->view('registration/otp_verification');
	}

	public function langTest()
	{

		echo lang('hello');
		$this->load->view('registration/header');
		$this->load->view('registration/physical_status');
		$this->load->view('registration/footer');
	}
}
