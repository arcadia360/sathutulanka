<?php
class Registration extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();

		// header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
		// header("Pragma: no-cache"); // HTTP 1.0.
		// header("Expires: 0"); // Proxies.
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
		$response = array();

		$this->form_validation->set_rules('height', 'Height', 'required');
		$this->form_validation->set_rules('weight', 'Weight', 'required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Model_registration');
			$result = $this->Model_registration->savePhysicalStatus();
			if ($result == true) {
				$response['success'] = true;
			} else {
				$response['success'] = false;
				$response['messages'] = 'Error in the database while adding physical status. Please contact service provider.';
			}
		} else {
			$response['success'] = false;
			foreach ($_POST as $key => $value) {
				$response['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($response);
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
