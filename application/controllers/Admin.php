<?php
class Admin extends CI_Controller
{
	public function index()
	{
		// $this->load->view('admin_panel/partials/header');
		// $this->load->view('admin_panel/home');
		// $this->load->view('admin_panel/partials/footer');
		
		$this->load->view('admin_panel/partials/header');
		$this->load->view('admin_panel/partials/navbar');
		$this->load->view('admin_panel/partials/sidebar');
		$this->load->view('admin_panel/home');
		$this->load->view('admin_panel/partials/footer');
	}

	public function render_template($page = null, $title, $data = array()) // For Registerd User
	{
		$this->data['page_title'] = $title . " | Satutu Lanka";

		$this->load->helper('language');

		$session_data = $this->session->userdata();


		$this->load->view('admin_panel/partials/header',$this->data);
		$this->load->view('admin_panel/partials/navbar');
		$this->load->view('admin_panel/partials/sidebar');
		$this->load->view($page);
		$this->load->view('admin_panel/partials/footer');
	}

	public function test()
	{
		echo 'success';
	}

	public function memberlist()
	{
		$this->render_template('admin_panel/member/member_list', 'Members List', NULL);
	}


}
