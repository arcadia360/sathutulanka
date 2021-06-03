<?php
class Model_account extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getMemberData($UserID)
  {
    $sql = "
		    SELECT 
            M.intMemberID, 
            M.vcNickName, 
            M.vcCountryCode, 
            M.vcMobileNo, 
            M.vcPassword, 
            M.vcEmail, 
            M.vcProvidingInformationType, 
            M.vcGender, 
            M.dtDOB, 
            MS.vcMaritalStatus_en AS vcMaritalStatus, 
            M.vcNoOfChildren, 
            M.intMemberAccountStatusID, 
            M.vcMarriageType, 
            M.intNoOfSubmitedForm, 
            M.intHeight, 
            M.intWeightFrom, 
            M.intWeightTo, 
            M.intBodyTypeID, 
            M.intSkinColourID, 
            M.isDisability, 
            M.vcBloodGroup, 
            M.isHealthInfo, 
            M.vcMotherTounge, 
            M.vcEthnicity, vcReligion, 
            M.isPoliceReportCanProvide,
            WW.vcWorkingWith,
            WASC.vcWorkingAsSubCat,
            IFNULL(CASE WHEN (SUBSTRING_INDEX(WASC.vcWorkingAsSubCat, '(', LENGTH(WASC.vcWorkingAsSubCat) - LENGTH(REPLACE(WASC.vcWorkingAsSubCat, ')', '')))) = '' THEN
            	WASC.vcWorkingAsSubCat 
              ELSE 
            	(SUBSTRING_INDEX(WASC.vcWorkingAsSubCat, '(', LENGTH(WASC.vcWorkingAsSubCat) - LENGTH(REPLACE(WASC.vcWorkingAsSubCat, ')', '')))) END, WW.vcWorkingWith) 
            AS vcWorkingAsSubCat_Customised,
            MAS.intMemberAccountStatusID,       
            MAS.vcMemberAccountStatus,            
            MAT.intMemberAccountTypeID,
            MAT.vcMemberAccountType
          FROM 
            Member AS M
            INNER JOIN WorkingWith          AS WW   ON M.intWorkingWithID = WW.intWorkingWithID
            LEFT OUTER JOIN WorkingAsSubCat AS WASC ON M.intWorkingAsSubCatID = WASC.intWorkingAsSubCatID
            INNER JOIN MemberAccountStatus  AS MAS  ON M.intMemberAccountStatusID = MAS.intMemberAccountStatusID
            INNER JOIN MemberAccountType    AS MAT  ON M.intMemberAccountTypeID = MAT.intMemberAccountTypeID
            INNER JOIN MaritalStatus        AS MS   ON M.intMaritalStatusID = MS.intMaritalStatusID
          WHERE 
            intMemberID = ? ";

    $query = $this->db->query($sql, array($UserID));
    return $query->row_array();
  }
}
