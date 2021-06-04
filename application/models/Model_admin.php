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
            m.vcMaritalStatus, 
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
            WHERE CAST(r.dtEmailCodeSentDate AS DATE) BETWEEN ? AND ? ";

            $query = $this->db->query($sql, array($FromDate, $ToDate));
            return $query->result_array();
        } else {
            $sql = "SELECT 
            m.intMemberID, 
            m.vcNickName, 
            m.vcCountryCode, 
            m.vcMobileNo, 
            m.vcEmail, 
            m.vcGender, 
            m.dtDOB, 
            m.vcMaritalStatus, 
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
            WHERE M.intMemberAccountStatusID = ? AND CAST(r.dtEmailCodeSentDate AS DATE) BETWEEN ? AND ?  ";

            $query = $this->db->query($sql, array($statusID, $FromDate, $ToDate));
            return $query->result_array();
        }
    }
}
