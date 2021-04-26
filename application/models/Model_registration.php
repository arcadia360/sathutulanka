<?php
class Model_registration extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->email->set_mailtype("html");
  }

  public function savePhysicalStatus()
  {
    $weight = $this->input->post('weight');
    // arrange from weight and to wight
    $weightsArray = explode("-", $weight);
    $fromWeight = $weightsArray[0];
    $toWeight = $weightsArray[1];

    $id = 18;

    $data = array(
      'intHeight' => $this->input->post('height'),
      'intWeightFrom' => $fromWeight,
      'intWeightTo' => $toWeight,
      'intBodyTypeID' => $this->input->post('bodyShape'),
      'intSkinColourID' => $this->input->post('skinColor'),
      'isDisability' => $this->input->post('disability'),
      'vcBloodGroup' => $this->input->post('bloodGroup'),
      'isHealthInfo' => $this->input->post('healthInfo'),
      'intNoOfSubmitedForm' => 2

      // 'intHeight' => 1,
      // 'intWeightFrom' => 1,
      // 'intWeightTo' => 1,
      // 'intBodyTypeID' => 1,
      // 'intSkinColourID' => 1,
      // 'isDisability' => 1,
      // 'vcBloodGroup' => 'fff',
      // 'isHealthInfo' => 1,
      // 'intNoOfSubmitedForm' => 2
    );
    $this->db->where('intUserID', $id);
    $this->db->update('user', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function loadCountries()
  {

    $this->db->select('*');
    $this->db->from('country');
    $this->db->where('intCountryId !=', 1);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function loadDistricts()
  {

    $this->db->select('*');
    $this->db->from('district');
    $this->db->order_by('vcDistrictName', 'asc');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function loadCities()
  {
    $districtID = $this->input->post('districtID');
    $this->db->select('*');
    $this->db->from('city');
    // $this->db->where('intDistrictId =', $this->input->post('districtID'));
    $this->db->where('intDistrictId =', $districtID);
    $this->db->order_by('vcCityName', 'asc');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }


  //-----------------------------------
  //Create Account - Ramod
  //-----------------------------------

  public function password_hash($pass = '')
  {
    if ($pass) {
      $password = password_hash($pass, PASSWORD_DEFAULT);
      return $password;
    }
  }

  public function saveCreateAccount($email, $random_EmailCode)
  {
    $this->db->trans_begin();

    $data = array(
      'vcNickName' => $this->input->post('short_name'),
      'vcCountryCode' => $this->input->post('country_code'),
      'vcMobileNo' => $this->input->post('mobile_no'),
      'vcPassword' => $this->password_hash($this->input->post('password')),
      'vcEmail' =>  $this->input->post('email'),
      'vcProvidingInformationType' => $this->input->post('provide_infor'),
      'vcGender' => $this->input->post('gender'),
      // 'dtDOB' => $this->input->post('birth_day'),
      'vcMaritalStatus' => $this->input->post('marital_status'),
      'vcNoOfChildren' => $this->input->post('num_of_child'),
      'intUserAccountStatusTypeID' => 1,
      'vcMarriageType' => $this->input->post('marry_by'),
      'intNoOfSubmitedForm' => 1,
    );

    $this->db->insert('user', $data);
    $userID = $this->db->insert_id();

    $data = array(
      'vcEmailCode' => $random_EmailCode,
      'intUserID' => $userID,
    );

    $this->db->insert('registerverification', $data);

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      $response['success'] = false;
    } else {
      $this->db->trans_commit();
      $response['success'] = true;
    }
    return $response;
  }

  public function sendVerificatinEmail($email, $random_EmailCode)
  {
    $config = array(
      'protocol' => 'smtp',
      'smtp_host' => 'smtp.gmail.com.',
      'smtp_port' => 587,
      'smtp_user' => 'geekfortechnologycom@gmail.com', // change it to yours
      'smtp_pass' => 'nethsara@ramod', // change it to yours
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );

    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('geekfortechnologycom@gmail.com', "Admin Team");
    $this->email->to($email);
    $this->email->subject("Sathutulanka Email Verification");
    // $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://localhost:8012/sathutulanka/Registration/VerificatinEmail/" . $random_EmailCode . "\n" . "\n\nThanks\nAdmin Team");
    $message = "";
    $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Verify your email address</title>
      <style type="text/css" rel="stylesheet" media="all">
        /* Base ------------------------------ */
        *:not(br):not(tr):not(html) {
          font-family: Arial, \'Helvetica Neue\', Helvetica, sans-serif;
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
        }
        body {
          width: 100% !important;
          height: 100%;
          margin: 0;
          line-height: 1.4;
          background-color: #B52B4A;
          color: #839197;
          -webkit-text-size-adjust: none;
        }
        a {
          color: #414EF9;
        }
    
        /* Layout ------------------------------ */
        .email-wrapper {
          width: 100%;
          margin: 0;
          padding: 0;
          background-color: #B52B4A;
        }
        .email-content {
          width: 100%;
          margin: 0;
          padding: 0;
        }
    
        /* Masthead ----------------------- */
        .email-masthead {
          padding: 25px 0;
          text-align: center;
        }
        .email-masthead_logo {
          max-width: 400px;
          border: 0;
        }
        .email-masthead_name {
          font-size: 16px;
          font-weight: bold;
          color: #839197;
          text-decoration: none;
          text-shadow: 0 1px 0 white;
        }
    
        /* Body ------------------------------ */
        .email-body {
          width: 100%;
          margin: 0;
          padding: 0;
          border-top: 1px solid #E7EAEC;
          border-bottom: 1px solid #E7EAEC;
          background-color: #FFFFFF;
        }
        .email-body_inner {
          width: 570px;
          margin: 0 auto;
          padding: 0;
        }
        .email-footer {
          width: 570px;
          margin: 0 auto;
          padding: 0;
          text-align: center;
        }
        .email-footer p {
          color: #839197;
        }
        .body-action {
          width: 100%;
          margin: 30px auto;
          padding: 0;
          text-align: center;
        }
        .body-sub {
          margin-top: 25px;
          padding-top: 25px;
          border-top: 1px solid #E7EAEC;
        }
        .content-cell {
          padding: 35px;
        }
        .align-right {
          text-align: right;
        }
    
        /* Type ------------------------------ */
        h1 {
          margin-top: 0;
          color: #292E31;
          font-size: 19px;
          font-weight: bold;
          text-align: left;
        }
        h2 {
          margin-top: 0;
          color: #292E31;
          font-size: 16px;
          font-weight: bold;
          text-align: left;
        }
        h3 {
          margin-top: 0;
          color: #292E31;
          font-size: 14px;
          font-weight: bold;
          text-align: left;
        }
        p {
          margin-top: 0;
          color: #839197;
          font-size: 16px;
          line-height: 1.5em;
          text-align: left;
        }
        p.sub {
          font-size: 12px;
        }
        p.center {
          text-align: center;
        }
    
        /* Buttons ------------------------------ */
        .button {
          display: inline-block;
          width: 200px;
          background-color: #414EF9;
          border-radius: 3px;
          color: #ffffff;
          font-size: 15px;
          line-height: 45px;
          text-align: center;
          text-decoration: none;
          -webkit-text-size-adjust: none;
          mso-hide: all;
        }
        .button--green {
          background-color: #28DB67;
        }
        .button--red {
          background-color: #FF3665;
        }
        .button--blue {
          background-color: #414EF9;
        }
    
        /*Media Queries ------------------------------ */
        @media only screen and (max-width: 600px) {
          .email-body_inner,
          .email-footer {
            width: 100% !important;
          }
        }
        @media only screen and (max-width: 500px) {
          .button {
            width: 100% !important;
          }
        }
      </style>
    </head>
    <body>
      <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">
            <table class="email-content" width="100%" cellpadding="0" cellspacing="0">
              <!-- Logo -->
              <tr>
                <td class="email-masthead">
                  <a class="email-masthead_name">Sathutu Lanka</a>
                </td>
              </tr>
              <!-- Email Body -->
              <tr>
                <td class="email-body" width="100%">
                  <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
                    <!-- Body content -->
                    <tr>
                      <td class="content-cell">
                        <h1>Verify your email address</h1>
                        <p>Thanks for signing up for Sathutu Lanka! Please click on below URL or paste into your browser to verify your Email Address.</p>
                        <!-- Action -->
                        <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="center">
                              <div>
                                <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{action_url}}" style="height:45px;v-text-anchor:middle;width:200px;" arcsize="7%" stroke="f" fill="t">
                                <v:fill type="tile" color="#414EF9" />
                                <w:anchorlock/>
                                <center style="color:#ffffff;font-family:sans-serif;font-size:15px;">Verify Email</center>
                              </v:roundrect><![endif]-->
                              <p>http://localhost:8012/sathutulanka/Registration/EmailVerification/' . $random_EmailCode . '<p>
                               
                              </div>
                            </td>
                          </tr>
                        </table>
                        <p>Thanks,<br>Sathutu Lanka Team</p>
                        <!-- Sub copy -->
                   
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">
                    <tr>
                      <td class="content-cell">
                        <p class="sub center">
                              Sathutu Lanka.
                          <br>325 9th St, Sri Lanka, CA 94103
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </body>
    </html>';
    $this->email->message($message);
    $this->email->send();
  }

  public function verifyEmailAddress($verificationText)
  {
    date_default_timezone_set('Asia/Colombo');
    $nowDateTime = date('Y-m-d h:i:s');

    $sql = "UPDATE registerverification SET IsEmailVerified = 1 , dtEmailVerifiedDate = '$nowDateTime'  WHERE vcEmailCode = ? AND (IsOTPVerified IS NULL OR IsOTPVerified = 0)";
    $this->db->query($sql, array($verificationText));
    return $this->db->affected_rows();
  }

  public function sendOTP($verificationText,$ReSend)
  {
    date_default_timezone_set('Asia/Colombo');
    $nowDateTime = date('Y-m-d h:i:s');

    $digits = 4;
    $otpCode =  rand(pow(10, $digits - 1), pow(10, $digits) - 1);
    $userData = $this->getUserDate($verificationText);
    $mobileNO = 0;
    $mobileNO =   (int)$userData['vcMobileNo'];
    $otpResend = (int)$userData['intOTPSentCount'] + 1;
    //-----------------------------------Send OTP to Mobile---------------------

    error_reporting(E_ALL);
    date_default_timezone_set('Asia/Colombo');
    $now = date("Y-m-d\TH:i:s");
    $username = "sathutu_lnk";
    $password = "sathutu@456";
    $digest = md5($password);
    // var_dump($mobileNO);
    $body = '{
        
        "messages": [
        {
        "clientRef": "0934345",
        "number": "'. $mobileNO .'",
        "mask": "SL Marriage",
        "text": "Your OTP code is '. $otpCode .'. Please insert your code in the form to complete your Sathutu Lanka registration.",
        "campaignName":"Test campaign001"
        }
        ]
        }';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://richcommunication.dialog.lk/api/sms/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body); //Post Fields
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $headers = [
      'Content-Type: application/json',
      'USER: ' . $username,
      'DIGEST: ' . $digest,
      'CREATED: ' . $now
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec($ch);
    curl_close($ch);
    // var_dump($server_output);


    //-----------------------------------End OTP to Mobile---------------------

    if ($ReSend) {
      $sql = "UPDATE registerverification SET vcOTP = $otpCode , dtOTPSentDate = '$nowDateTime' , IsOTPVerified = 0 , intOTPSentCount =  '$otpResend'  WHERE vcEmailCode = ?";
      $this->db->query($sql, array($verificationText));
      return $this->db->affected_rows();
    }
    else
    {
      $sql = "UPDATE registerverification SET vcOTP = $otpCode , dtOTPSentDate = '$nowDateTime' , IsOTPVerified = 0 , intOTPSentCount = 1 WHERE vcEmailCode = ?";
      $this->db->query($sql, array($verificationText));
      return $this->db->affected_rows();
    }

  
  }

  public function getUserDate($verificationText)
  {
    $sql = "SELECT concat('94',SUBSTRING(vcMobileNo,2,10)) AS vcMobileNo,vcMobileNo AS Without94,RE.vcOTP,U.intUserID, RE.intOTPSentCount FROM user AS U
    INNER JOIN registerverification AS RE ON U.intUserID = RE.intUserID
    WHERE RE.vcEmailCode =  ? ";
    $query = $this->db->query($sql, array($verificationText));
    return $query->row_array();
  }

  public function upDateMobileNumber($mobile_no,$emailVerificationCode)
  {
    if ($mobile_no) {
      $sql = "UPDATE  user as U
      INNER JOIN registerverification as V on U.intUserID = V.intUserID
      SET U.vcMobileNo ='$mobile_no'
      WHERE V.vcEmailCode = ?";
      $this->db->query($sql, array($emailVerificationCode));
      return $this->db->affected_rows();
    }
  }

  public function otpVerification($otpNumber,$emailVerificationCode)
  {
    date_default_timezone_set('Asia/Colombo');
    $nowDateTime = date('Y-m-d h:i:s');
    if ($otpNumber) {
      $sql = "UPDATE  user as U
      INNER JOIN registerverification as V on U.intUserID = V.intUserID
      SET V.IsOTPVerified = 1 , V.dtOTPVerifiedDate = '$nowDateTime' , U.intUserAccountStatusTypeID = 2
      WHERE vcOTP = ? AND V.vcEmailCode = ?";
      $this->db->query($sql, array($otpNumber,$emailVerificationCode));
      return $this->db->affected_rows();
    }
  }

}
