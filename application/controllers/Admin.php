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

	public function approvalMemberList()
	{
		$this->render_template('admin_panel/member/approval_member_list', 'Approval Member List', NULL);
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


	public function GetOTPResetData($FromDate, $ToDate)
	{
		$result = array('data' => array());
		$member_data = $this->model_admin->GetOTPResetData($FromDate, $ToDate);
		foreach ($member_data as $key => $value) {

			$result['data'][$key] = array(
				$value['vcMemberCode'],
				$value['vcNickName'],
				$value['vcEmail'],
				$value['vcMobileNo'],
				$value['vcGender'],
				$value['dtDOB']
			);
		}

		echo json_encode($result);
	}

	public function approvalMember()
	{
		$intMemberID = $this->input->post('intMemberID');
		$response = array();
		$IsSuccess = $this->model_admin->approvalMember($intMemberID);
		if ($IsSuccess == true) {
			$response['success'] = true;
			$response['messages'] = "Approved !";
		} else {
			$response['success'] = false;
			$response['messages'] = "Error !";
		}

		echo json_encode($response);
	}


	public function memberDetails($MemberID)
	{
		$member_data = $this->model_account->getMemberData($MemberID);
		$suspendReason = $this->model_account->getMemberSuspendReason();
		$this->data['member_data'] = $member_data;
		$this->data['suspendReason'] = $suspendReason;
		$this->render_template('admin_panel/member/member_details', 'Members List', $this->data);
	}

	public function GetRemarkHistoryData($MemberID)
	{
		$result = array('data' => array());
		$remarkdata = $this->model_admin->GetRemarkHistoryData($MemberID);
		foreach ($remarkdata as $key => $value) {

			$result['data'][$key] = array(
				$value['vcRemark'],
				$value['vcUserName'],
				$value['dtEnteredDate']
			);
		}

		echo json_encode($result);
	}

	public function suspendMemberAccount()
	{
		$intMemberID = $this->input->post('intMemberID');
		$response = array();
		$IsSuccess = $this->model_admin->suspendMemberAccount($intMemberID);
		if ($IsSuccess == true) {
			$response['success'] = true;
			$response['messages'] = "Suspended !";
		} else {
			$response['success'] = false;
			$response['messages'] = "Error !";
		}

		echo json_encode($response);

	}

	public function updateMemberDetailsByAdmin()
	{
		$intMemberID = $this->input->post('intMemberID');
		$response = array();
		$IsSuccess = $this->model_admin->updateMemberDetailsByAdmin($intMemberID);
		if ($IsSuccess == true) {
			$response['success'] = true;
			$response['messages'] = "Updated !";
		} else {
			$response['success'] = false;
			$response['messages'] = "Error !";
		}

		echo json_encode($response);
	}


	public function addMemberRemark()
	{
		$response = array();

		$data = array(
			'intMemberID' => $this->input->post('intRemarkMemberID'),
			'vcRemark' => $this->input->post('member_remark'),
			'intUserID' => 1, //Admin ID
		);
		$response = $this->model_admin->addMemberRemark($data);

		echo json_encode($response);
	}

	public function GetPendingApprovalMember($FromDate, $ToDate)
	{
		$result = array('data' => array());
		$member_data = $this->model_admin->GetPendingApprovalMember($FromDate, $ToDate);
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

			$buttons .= '<a class="button btn btn-default" href="' . base_url("admin/manageMemberList/" . $value['intMemberID']) . '" style="margin:0 !important;"><i class="fas fa-edit"></i></a>';

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

	public function manageMemberList($MemberID)
	{
		$member_data = $this->model_account->getMemberData($MemberID);
		// $suspendReason = $this->model_account->getMemberSuspendReason();
		$this->data['member_data'] = $member_data;
		// $this->data['suspendReason'] = $suspendReason;
		$this->render_template('admin_panel/member/manage_member', 'Manage Member', $this->data);
	}

	public function markAsTrustProving()
	{
		$this->render_template('admin_panel/member/mark_as_trust_proving', 'Mark As Trust Proving', NULL);
	}

}
