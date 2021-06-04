<?php
class Admin extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_admin');
		$this->load->model('model_account');
	}

	public function index()
	{
		$title = "";

		$this->data['page_title'] = $title . " | Satutu Lanka Admin Panel";

		$this->load->helper('language');


		$this->load->view('admin_panel/partials/header', $this->data);
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

		$this->load->view('admin_panel/partials/header', $this->data);
		$this->load->view('admin_panel/partials/navbar');
		$this->load->view('admin_panel/partials/sidebar');
		$this->load->view($page);
		$this->load->view('admin_panel/partials/footer');
	}

	public function otpreset()
	{
		// $member_status = $this->model_admin->GetMemberStatus();
		// $this->data['member_status'] = $member_status;
		$this->render_template('admin_panel/member/otp_reset', 'OTP Reset', NULL);
	}

	public function test()
	{
		echo 'success';
	}

	public function memberlist()
	{
		$member_status = $this->model_admin->GetMemberStatus();
		$this->data['member_status'] = $member_status;
		$this->render_template('admin_panel/member/member_list', 'Members List', $this->data);
	}

	public function FilterMemberListData($statusID, $FromDate, $ToDate)
	{
		// $isAdmin = true;

		// if (!$this->isAdmin) {
		// if (!in_array('viewMemberList', $this->permission)) {
		// 	redirect('welcome', 'refresh');
		// }
		// }

		$result = array('data' => array());
		$member_data = $this->model_admin->GetFilterMemberListData($statusID, $FromDate, $ToDate);
		foreach ($member_data as $key => $value) {
			$buttons = '';
			$time = '';
			$time = $value['Days'] . ' Days &nbsp;&nbsp;';

			if ($value['Months'] > 0) {
				$time .= $value['Months'] . ' Months &nbsp;&nbsp;';
			}
			if ($value['Years'] > 0) {
				$time .= $value['Years'] . ' Years &nbsp;&nbsp;';
			}

			$buttons .= '<a class="button btn btn-default" href="' . base_url("admin/memberDetails/" . $value['intMemberID']) . '" style="margin:0 !important;"><i class="fas fa-edit"></i></a>';

			$result['data'][$key] = array(
				$value['vcMemberCode'],
				$value['vcNickName'],
				$value['vcEmail'],
				$value['vcMobileNo'],
				$value['vcGender'],
				$value['dtDOB'],
				// $value['vcMaritalStatus'],
				$value['createdDate'],
				$time,
				$value['vcMemberAccountStatus'],
				$buttons
			);
		}

		echo json_encode($result);
	}

	public function memberDetails($MemberID)
	{
		$member_data = $this->model_account->getMemberData($MemberID);
		$this->data['member_data'] = $member_data;
		$this->render_template('admin_panel/member/member_details', 'Members Details', $this->data);
	}
}
