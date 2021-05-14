<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model_auth');
    }

    /* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
    public function login()
    {

        $this->logged_in();

        $this->form_validation->set_rules('username', 'user name', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');


        if ($this->form_validation->run() == TRUE) {
            // true case
            $username_exists = $this->model_auth->check_username($this->input->post('username'));

            if ($username_exists == TRUE) {
                $login = $this->model_auth->login($this->input->post('username'), $this->input->post('password'));

                if ($login) {
                    if ($login['IsActive'] == 1) {
                        $logged_in_sess = array(
                            'member_id' => $login['intMemberID'],
                            'nick_name' => $login['vcNickName'],
                            'email' => $login['vcEmail'],
                            'member_account_status_id' => $login['intMemberAccountStatusID'],
                            'member_account_status_name' => $login['vcMemberAccountStatus'],
                            'no_of_submitted_form'  => $login['intNoOfSubmitedForm'],
                            'gender'  => $login['vcGender'],
                            'language_id' => 1,
                            'logged_in' => TRUE
                        );

                        if ($login['intMemberAccountStatusID'] == 1) { // Email Verification Pending
                            $this->data['errors'] = 'Your email verification has been deactivated !';
                            $this->load->view(base_url("Welcome"), $this->data);
                        }else if ($login['intMemberAccountStatusID'] == 2) { // OTP Verification Pending
                            $this->data['errors'] = 'Your OTP verification has been deactivated !';
                            $this->load->view(base_url("Welcome"), $this->data);
                        } else if ($login['intMemberAccountStatusID'] == 3) { // Member Details Pending
                            $this->session->set_userdata($logged_in_sess);
                            $this->CheckAndRedirectNextForm();
                        }

                        // Not Complete Redirect Pages
                        // if ($login['intNoOfSubmitedForm'] == 1) {
                        //     redirect(base_url("Registration/PhysicalStatus"), 'refresh');
                        // }

                       
                    } else {
                        $this->data['errors'] = 'Your account has been deactivated. Please contact administrator !';
                        $this->load->view(base_url("Welcome"), $this->data);
                    }
                } else {
                    $this->data['errors'] = 'Incorrect user name / password !';
                    $this->load->view(base_url("Welcome"), $this->data);
                }
            } else {
                $this->data['errors'] = 'User name does not exists !';
                $this->load->view(base_url("Welcome"), $this->data);
            }
        } else {
            // false case
            $this->load->view(base_url("Welcome"));
        }
    }

    /*
		clears the session and redirects to login page
	*/
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url("Welcome"), 'refresh');
    }
}
