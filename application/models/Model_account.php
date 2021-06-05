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
            M.intNoOfChildren, 
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
            M.vcEthnicity, 
            vcReligion, 
            M.isPoliceReportCanProvide,
            WW.vcWorkingWith,
            WASC.vcWorkingAsSubCat,
            M.vcDiet,
            M.vcDrink,
            M.vcSmoke,
            M.vcDressAndMakeup,
            M.vcUsedToTravel,
            M.vcCalToParent,
            M.vcCustoms,
            M.vcLiveIn,
            M.intOpennessToExperience,
            M.intConscientiousness,
            M.intExtrovertPersonality,
            M.intIntrovertPersonality,
            M.intAgreeableness,
            M.intNeuroticism,
            M.intFamilyBond,
            M.intMoney,
            M.intReligious,
            M.intPhysicallyActive,
            M.IntPolitics,
            M.intKnowledge,
            M.intLoveAffairs,
            M.intimportanceVirginity,
            IFNULL(CASE WHEN (SUBSTRING_INDEX(WASC.vcWorkingAsSubCat, '(', LENGTH(WASC.vcWorkingAsSubCat) - LENGTH(REPLACE(WASC.vcWorkingAsSubCat, ')', '')))) = '' THEN
            	WASC.vcWorkingAsSubCat 
              ELSE 
            	(SUBSTRING_INDEX(WASC.vcWorkingAsSubCat, '(', LENGTH(WASC.vcWorkingAsSubCat) - LENGTH(REPLACE(WASC.vcWorkingAsSubCat, ')', '')))) END, WW.vcWorkingWith) 
            AS vcWorkingAsSubCat_Customised,
            MAS.intMemberAccountStatusID,       
            MAS.vcMemberAccountStatus,            
            MAT.intMemberAccountTypeID,
            MAT.vcMemberAccountType,
            CONCAT(M.intWeightFrom,'-',M.intWeightTo) AS Weight_Customised,
            CT.intDistrictId,
            CT.intCityId,
            M.intCityIdIfLiveInSL,
            M.intCountryId,
            M.vcAddOfSriLanka,
            M.intNativeDistrictId,
            M.vcMotherTounge,
            CS.intCasteID,
            CT.vcCityName,
            M.vcNic,
            M.vcGuardianContact,
            M.vcPremanentAddress
          FROM 
            Member AS M
            LEFT OUTER JOIN WorkingWith          AS WW   ON M.intWorkingWithID = WW.intWorkingWithID
            LEFT OUTER JOIN WorkingAsSubCat AS WASC ON M.intWorkingAsSubCatID = WASC.intWorkingAsSubCatID
            LEFT OUTER JOIN MemberAccountStatus  AS MAS  ON M.intMemberAccountStatusID = MAS.intMemberAccountStatusID
            LEFT OUTER JOIN MemberAccountType    AS MAT  ON M.intMemberAccountTypeID = MAT.intMemberAccountTypeID
            LEFT OUTER JOIN MaritalStatus        AS MS   ON M.intMaritalStatusID = MS.intMaritalStatusID
            LEFT OUTER JOIN city AS CT ON  M.intCityIdIfLiveInSL = CT.intCityID
            LEFT OUTER JOIN subcaste AS CS ON M.intSubCasteId = CS.intSubCasteId

          WHERE 
            intMemberID = ? ";

    $query = $this->db->query($sql, array($UserID));
    return $query->row_array();
  }

  public function getMemberWiseLanguageSpeak($MemberID)
  {
    $sql = "
    SELECT vcLanguage, intMemberID
    FROM languagespeak
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }
}
