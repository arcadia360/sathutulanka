<?php
class Registration extends Admin_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_registration');
		// header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
		// header("Pragma: no-cache"); // HTTP 1.0.
		// header("Expires: 0"); // Proxies.
	}

	public function index()
	{
		$this->load->helper('language');

		$session_data = $this->session->userdata();

		if ($session_data['language_id'] == 1) { // English
			$this->lang->load('en', 'English');
		} else if ($session_data['language_id'] == 2) { // Sinhala
			$this->lang->load('si', 'Sinhala');
		} else if ($session_data['language_id'] == 3) { // Tamil
			$this->lang->load('ta', 'Tamil');
		}

		// $ProvidingInformationType = $this->Model_registration->getProvidingInformationType($session_data['language_id']);
		// $MaritalStatus = $this->Model_registration->getMaritalStatus($session_data['language_id']);
		// $MarriageType = $this->Model_registration->getMarriageType($session_data['language_id']);
		// $NoofChildren = $this->Model_registration->getNoofChildren($session_data['language_id']);

		// $this->data['ProvidingInformationType_data'] = $ProvidingInformationType;
		// $this->data['MaritalStatus_data'] = $MaritalStatus;
		// $this->data['MarriageType_data'] = $MarriageType;
		// $this->data['NoofChildren_data'] = $NoofChildren;

		$this->load->view('registration/create_account',$this->data);
	}

	public function CreateAccount()
	{
		// $this->load->view('registration/header');
		$this->load->view('registration/create_account');
	
	}

	public function physicalStatus()
	{
		$this->render_template_registration('registration/physical_status', 'Add Background Details', NULL);
	}

	public function addPhysicalStatus()
	{
		$response = array();

		$this->form_validation->set_rules('height', 'Height', 'required');
		$this->form_validation->set_rules('weight', 'Weight', 'required');
		$this->form_validation->set_rules('bodyShape', 'Body Shape', 'required');
		$this->form_validation->set_rules('skinColor', 'Skin Color', 'required');
		$this->form_validation->set_rules('disability', 'Disability', 'required');
		$this->form_validation->set_rules('bloodGroup', 'Blood Group', 'required');
		$this->form_validation->set_rules('healthInfo', 'Health Info', 'required');
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

	public function residence()
	{
		$this->render_template_registration('registration/residence', 'Add Residence Details', NULL);
	}

	public function WhoAmI()
	{
		// $this->load->view('registration/header');
		$this->render_template_registration('registration/who_am_i', 'Who Am I', NULL);
	}

	public function LoadCountries()
	{
		$result = '';
		$this->load->model('Model_registration');
		$result = $this->Model_registration->loadCountries();
		if ($result) {
			echo json_encode($result);
		} else {
			echo json_encode($result);
		}
	}

	public function background()
	{
		$this->render_template_registration('registration/background', 'Add Background Details', NULL);
	}

	public function lifeStyle()
	{
		$this->render_template_registration('registration/lifeStyle', 'Add Life Style Details', NULL);
	}

	public function Verification()
	{
		$this->load->view('registration/otp_verification');
	}

	public function sample()
	{

		echo lang('hello');
		$this->load->view('registration/header');
		$this->load->view('registration/sample');
		$this->load->view('registration/footer');
	}
	
}
