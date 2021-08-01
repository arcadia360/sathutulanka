<?php
class Model_admin extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('model_admin');
    }


    public function GetMemberStatus()
    {
        $sql = "SELECT intMemberAccountStatusID, vcMemberAccountStatus FROM memberaccountstatus;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function GetFilterMemberListData($statusID, $FromDate, $ToDate)
    {
        if ($statusID == 0) {
            $sql = "SELECT 
            m.intMemberID, 
            m.vcMemberCode, 
            m.vcNickName, 
            m.vcCountryCode, 
            m.vcMobileNo, 
            m.vcEmail, 
            m.vcGender, 
            m.dtDOB, 
            ms.vcMaritalStatus_en, 
            m.vcMarriageType,
            re.vcReligion, 
            m.vcCurrentlyLiveIn, 
            m.intCityIdIfLiveInSL,
            mt.vcMemberAccountStatus,
            m.intMemberAccountStatusID,
            CONCAT(CAST(r.dtEmailCodeSentDate AS DATE),'  ',DATE_FORMAT(r.dtEmailCodeSentDate, '%r')) as createdDate,
            FLOOR( TIMESTAMPDIFF( DAY, cast(r.dtEmailCodeSentDate as date), now() ) % 30.4375 ) AS Days,
            TIMESTAMPDIFF( MONTH, cast(r.dtEmailCodeSentDate as date), now()) % 12 as Months ,
            TIMESTAMPDIFF( YEAR, cast(r.dtEmailCodeSentDate as date), now()) as Years 
            from
            member as m
            INNER JOIN registerverification as r on m.intMemberID = r.intMemberID
            INNER JOIN memberaccountstatus as mt on m.intMemberAccountStatusID = mt.intMemberAccountStatusID
            INNER JOIN MaritalStatus   AS ms   ON m.intMaritalStatusID = ms.intMaritalStatusID
            LEFT OUTER JOIN religion as re ON m.intReligionID = re.intReligionID
            WHERE CAST(r.dtEmailCodeSentDate AS DATE) BETWEEN ? AND ? ";

            $query = $this->db->query($sql, array($FromDate, $ToDate));
            return $query->result_array();
        } else {
            $sql = "SELECT 
            m.intMemberID, 
            m.vcMemberCode, 
            m.vcNickName, 
            m.vcCountryCode, 
            m.vcMobileNo, 
            m.vcEmail, 
            m.vcGender, 
            m.dtDOB, 
            ms.vcMaritalStatus_en, 
            m.vcMarriageType,
            re.vcReligion,
            m.vcCurrentlyLiveIn, 
            m.intCityIdIfLiveInSL,
            mt.vcMemberAccountStatus,
            m.intMemberAccountStatusID,
            CONCAT(CAST(r.dtEmailCodeSentDate AS DATE),'  ',DATE_FORMAT(r.dtEmailCodeSentDate, '%r')) as createdDate,
            FLOOR( TIMESTAMPDIFF( DAY, cast(r.dtEmailCodeSentDate as date), now() ) % 30.4375 ) AS Days,
            TIMESTAMPDIFF( MONTH, cast(r.dtEmailCodeSentDate as date), now()) % 12 as Months ,
            TIMESTAMPDIFF( YEAR, cast(r.dtEmailCodeSentDate as date), now()) as Years 
            from
            member as m
            INNER JOIN registerverification as r on m.intMemberID = r.intMemberID
            INNER JOIN memberaccountstatus as mt on m.intMemberAccountStatusID = mt.intMemberAccountStatusID
            INNER JOIN MaritalStatus   AS ms   ON m.intMaritalStatusID = ms.intMaritalStatusID
            LEFT OUTER JOIN religion as re ON m.intReligionID = re.intReligionID
            WHERE m.intMemberAccountStatusID = ? AND CAST(r.dtEmailCodeSentDate AS DATE) BETWEEN ? AND ? ";

            $query = $this->db->query($sql, array($statusID, $FromDate, $ToDate));
            return $query->result_array();
        }
    }

    public function GetRemarkHistoryData($MemberID)
    {
        $sql = "SELECT  M.vcRemark,U.vcUserName, CONCAT(CAST(M.dtEnteredDate AS DATE),'  ',DATE_FORMAT(M.dtEnteredDate, '%r')) as dtEnteredDate 
        FROM memberremark AS M
        INNER JOIN user AS U ON M.intUserID = U.intUserID
        WHERE M.intMemberID = ? ";

        $query = $this->db->query($sql, array($MemberID));
        return $query->result_array();
    }

    public function GetPendingApprovalMember($FromDate, $ToDate)
    {
        $sql = "SELECT 
        m.intMemberID, 
        m.vcMemberCode, 
        m.vcNickName, 
        m.vcCountryCode, 
        m.vcMobileNo, 
        m.vcEmail, 
        m.vcGender, 
        m.dtDOB, 
        ms.vcMaritalStatus_en, 
        m.vcMarriageType,
        re.vcReligion, 
        m.vcCurrentlyLiveIn, 
        m.intCityIdIfLiveInSL,
        mt.vcMemberAccountStatus,
        CONCAT(CAST(r.dtEmailCodeSentDate AS DATE),'  ',DATE_FORMAT(r.dtEmailCodeSentDate, '%r')) as createdDate,
        FLOOR( TIMESTAMPDIFF( DAY, cast(r.dtEmailCodeSentDate as date), now() ) % 30.4375 ) AS Days,
        TIMESTAMPDIFF( MONTH, cast(r.dtEmailCodeSentDate as date), now()) % 12 as Months ,
        TIMESTAMPDIFF( YEAR, cast(r.dtEmailCodeSentDate as date), now()) as Years 
        from
        member as m
        INNER JOIN registerverification as r on m.intMemberID = r.intMemberID
        INNER JOIN memberaccountstatus as mt on m.intMemberAccountStatusID = mt.intMemberAccountStatusID
        INNER JOIN MaritalStatus   AS ms   ON m.intMaritalStatusID = ms.intMaritalStatusID
        LEFT OUTER JOIN religion as re ON m.intReligionID = re.intReligionID
        WHERE m.intMemberAccountStatusID = 5 AND CAST(r.dtEmailCodeSentDate AS DATE) BETWEEN ? AND ? ";

        $query = $this->db->query($sql, array($FromDate, $ToDate));
        return $query->result_array();
    }

    public function GetOTPResetData($FromDate, $ToDate)
    {

        $sql = "SELECT 
        m.intMemberID, 
        m.vcNickName, 
        m.vcCountryCode, 
        m.vcMobileNo, 
        m.vcEmail, 
        m.vcGender, 
        m.dtDOB, 
        ms.vcMaritalStatus_en, 
        m.vcMarriageType,
        m.vcReligion, 
        m.vcCurrentlyLiveIn, 
        m.intCityIdIfLiveInSL,
        mt.vcMemberAccountStatus,
        CONCAT(CAST(r.dtEmailCodeSentDate AS DATE),'  ',DATE_FORMAT(r.dtEmailCodeSentDate, '%r')) as createdDate,
        FLOOR( TIMESTAMPDIFF( DAY, cast(r.dtEmailCodeSentDate as date), now() ) % 30.4375 ) AS Days,
        TIMESTAMPDIFF( MONTH, cast(r.dtEmailCodeSentDate as date), now()) % 12 as Months ,
        TIMESTAMPDIFF( YEAR, cast(r.dtEmailCodeSentDate as date), now()) as Years 
        from 
        member as m
        INNER JOIN registerverification as r on m.intMemberID = r.intMemberID
        INNER JOIN memberaccountstatus as mt on m.intMemberAccountStatusID = mt.intMemberAccountStatusID
        INNER JOIN MaritalStatus   AS ms   ON m.intMaritalStatusID = ms.intMaritalStatusID
        WHERE M.intMemberAccountStatusID = ? AND CAST(r.dtEmailCodeSentDate AS DATE) BETWEEN ? AND ?  ";

        $query = $this->db->query($sql, array($FromDate, $ToDate));
        return $query->result_array();
    }


    public function addMemberRemark($data)
    {
        if ($data) {
            $insert = $this->db->insert('memberremark', $data);
            if ($insert == true) {
                $response['success'] = true;
                $response['messages'] = 'Succesfully !';
            } else {
                $response['success'] = true;
                $response['messages'] = 'Error !';
            }

            return $response;
        }
    }

    public function getMemberStatusID($MemberID)
    {
        $sql = "SELECT intMemberAccountStatusID,intMemberAccountTypeID FROM member WHERE intMemberID = ?";
        $query = $this->db->query($sql, array($MemberID));
        return $query->row_array();
    }

    public function approvalMember($MemberID)
    {
        if ($MemberID) {

            $memberData =  $this->getMemberStatusID($MemberID);

            $dataMemberLog = array(
                'intMemberID' => $MemberID,
                'intPreviousMemberAccountStatusID' => $memberData['intMemberAccountStatusID'],
                'intCurrentMemberAccountStatusID' => 6,
                'intUserID' => 1 //Admin ID

            );
            $this->db->insert('memberaccountstatuslog', $dataMemberLog);

            $data = [
                'intMemberAccountStatusID' => 6
            ];
            $this->db->where('intMemberID', $MemberID);
            $update = $this->db->update('member', $data);
            return ($update == true) ? true : false;
        }
    }

    public function updateMemberDetailsByAdmin($MemberID)
    {
    }

    public function suspendMemberAccount($MemberID)
    {
        if ($MemberID) {

            $memberData =  $this->getMemberStatusID($MemberID);

            $dataMemberLog = array(
                'intMemberID' => $MemberID,
                'intPreviousMemberAccountStatusID' => $memberData['intMemberAccountStatusID'],
                'intCurrentMemberAccountStatusID' => 8,
                'intMemberSuspendReasonID' => $this->input->post('suspendReason'),
                'vcOtherReason' => $this->input->post('otherReasonSuspend') == "" ? NULL : $this->input->post('otherReasonSuspend'),
                'intUserID' => 1 //Admin ID

            );
            $this->db->insert('memberaccountstatuslog', $dataMemberLog);

            $data = [
                'intMemberAccountStatusID' => 8
            ];
            $this->db->where('intMemberID', $MemberID);
            $update = $this->db->update('member', $data);
            return ($update == true) ? true : false;
        }
    }
}
