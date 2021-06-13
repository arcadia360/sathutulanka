<?php
class Model_account extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getMemberData($UserID)
  {
    $sql = "SELECT  
            M.intMemberID, 
            M.vcMemberCode,
            M.vcNickName, 
            M.vcCountryCode, 
            M.vcMobileNo, 
            M.vcPassword, 
            M.vcEmail, 
            M.vcProvidingInformationType, 
            M.vcGender, 
            M.dtDOB, 
            MS.vcMaritalStatus_en AS vcMaritalStatus, 
            M.intNoOfChildrenID, 
            M.intMemberAccountStatusID, 
            M.vcMarriageType, 
            M.intNoOfSubmitedForm, 
            M.intHeight, 
            M.intWeightFrom, 
            M.intWeightTo, 
            M.intBodyTypeID, 
            M.intSkinColourID, 
            M.intDisabilityID, 
            M.vcBloodGroup, 
            M.isHealthInfo, 
            MT.vcMotherTongueName AS vcMotherTounge, 
            ET.vcEthnicityName AS vcEthnicity, 
            RE.vcReligion, 
            M.isPoliceReportCanProvide,
            WW.vcWorkingWith,
            WASC.vcWorkingAsSubCat,
            DT.vcDietName AS vcDiet,
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
            CS.intCasteID,
            CT.vcCityName,
            M.vcNic,
            M.vcGuardianContact,
            M.vcPremanentAddress,
            M.intResidenceStatusID,
            M.intEthnicityID,
            M.intReligionID,
            M.intMotherTongueID,
            M.intDietID,
            M.intEducationLevelID,
            M.intEducationFieldID,
            M.vcSclUniDescription,
            M.vcDescribeCareer,
            M.intWorkingWithId,
            M.intWorkingAsSubCatId,
            M.vcWorkingLocation,
            M.intCityIdWorkingIn,
            M.intWorkingCountryID,
            M.intMonthlyIncomeID,
            M.intAssetValueID,
            M.vcOwnershipOfAssets,
            M.intFamilyLocationID,
            M.vcFamilyType,
            M.vcFamilyValues,
            M.vcFamilyClass,
            M.vcFamilyCulture,
            M.vcFatherStatus,
            M.vcMotherStatus,
            M.vcFamilyDetails,
            M.vcPrefferToLive,
            M.vcHelpFamily,
            M.vcJobAfterMarriage,
            M.vcEducationAfterMarriage,
            M.vcChildrenLikes,
            M.vcOtherNeeds,
            M.vcMatchingHoroscope,
            M.vcZodiacSign,
            M.vcGanaya,
            M.vcNekatha,
            M.intRavi,
            M.intMoon,
            M.intMars,
            M.intMercury,
            M.intJupiter,
            M.intVenus,
            M.intSaturn,
            M.intRahu,
            M.intKethu,
            M.vcPapaKendara,
            M.vcAboutYourselfAndPartner,
            CTT.intDistrictid,
            WASC.intWorkinAsMainCat,
            M.intMyPhotosPrivacy,
            M.intMyVideosPrivacy,
            M.intAssetsDetailsPrivacy,
            M.intFamilyDetailsPrivacy,
            M.intHoroscopeDetailsPrivacy
          FROM 
            Member AS M
            LEFT OUTER JOIN WorkingWith          AS WW   ON M.intWorkingWithID = WW.intWorkingWithID
            LEFT OUTER JOIN WorkingAsSubCat AS WASC ON M.intWorkingAsSubCatID = WASC.intWorkingAsSubCatID
            LEFT OUTER JOIN MemberAccountStatus  AS MAS  ON M.intMemberAccountStatusID = MAS.intMemberAccountStatusID
            LEFT OUTER JOIN MemberAccountType    AS MAT  ON M.intMemberAccountTypeID = MAT.intMemberAccountTypeID
            LEFT OUTER JOIN MaritalStatus        AS MS   ON M.intMaritalStatusID = MS.intMaritalStatusID
            LEFT OUTER JOIN city AS CT ON  M.intCityIdIfLiveInSL = CT.intCityID
            LEFT OUTER JOIN subcaste AS CS ON M.intSubCasteId = CS.intSubCasteId
            LEFT OUTER JOIN mothertongue AS MT ON M.intMotherTongueID = MT.intMotherTongueID
            LEFT OUTER JOIN ethnicity AS ET ON M.intEthnicityID = ET.intEthnicityID
            LEFT OUTER JOIN religion AS RE ON M.intReligionID = RE.intReligionID
            LEFT OUTER JOIN diet AS DT ON M.intDietID = DT.intDietID
            LEFT OUTER JOIN disability AS DS ON M.intDisabilityID = DS.intDisabilityID
            LEFT OUTER JOIN residencestatus AS RS ON M.intResidenceStatusID = RS.intResidenceStatusID
            LEFT OUTER JOIN city AS CTT ON M.intCityIdWorkingIn = CTT.intCityid
          WHERE 
            intMemberID = ? ";

    $query = $this->db->query($sql, array($UserID));
    return $query->row_array();
  }


  public function getMyProfileMatchingDetils($member_id)
  {

    $sql = "
        SELECT 
          20 AS Age,
          M.intHeight,
          M.intMaritalStatusID,
          M.intNoOfChildrenID,	
          M.intReligionID,
          M.intEthnicityID,
          M.intMotherTongueID,
          D.intProvinceID,
          M.intEducationLevelID,
          M.intMonthlyIncomeID,
          M.intAssetValueID,
          M.intDisabilityID,
          M.intDietID,
          M.intMemberPreferedAgeFrom,
          M.intMemberPreferedAgeTo,
          M.intMemberPreferedHeightFrom,
          M.intMemberPreferedHeightTo
        FROM Member AS M
        INNER JOIN City         AS C 		ON M.intCityIdIfLiveInSL = C.intCityID
	      INNER JOIN District     AS D 		ON C.intDistrictID = D.intDistrictID
        WHERE M.intMemberID = ? ";

    $query = $this->db->query($sql, array($member_id));
    return $query->row_array();
  }

  public function getAllSinglesCount()
  {
    $gender = $this->session->userdata('gender');

    $sql = "
    SELECT 
      COUNT(M.intMemberID) AS AllSinglesCount 
    FROM Member AS M 
    WHERE M.vcGender <> ? AND M.intMemberAccountStatusID IN (4,5,6)";
    $query = $this->db->query($sql, array($gender));
    return $query->row_array();
  }

  public function getPreferedMaritalStatus($member_id)
  {
    $sql = "
    SELECT 
      COUNT(M.intMemberID) AS AllSinglesCount 
    FROM Member AS M 
    WHERE M.vcGender <> ? AND M.intMemberAccountStatusID IN (4,5,6)";
    $query = $this->db->query($sql, array($member_id));
    return $query->row_array();
  }


  public function getMyMatches($member_id, $gender)
  {

    $details = $this->getMyProfileMatchingDetils($member_id);

    $MemberPreferedAgeFrom = "A";
    $MemberPreferedAgeTo = "B";


    $sql = "
          SELECT 
            M.intMemberID,
            M.vcMemberCode,
            CONCAT(UPPER(SUBSTRING(M.vcNickName,1,1)),LOWER(SUBSTRING(M.vcNickName,2))) AS vcNickName,  
            WW.vcWorkingWith,
            WSC.vcWorkingAsSubCat, 
            IFNULL(WSC.vcWorkingAsSubCat,WW.vcWorkingWith) AS MiniProfileDesignation,
            M.intMemberAccountTypeID,
            20 AS Age,
            M.intHeight,
            fnCmToFeet(M.intHeight) AS vcHightFeet,
            E.vcEthnicityName,
            R.vcReligion,
            MS.vcMaritalStatus_en AS vcMaritalStatus,
            EL.vcEducationLevel,    
            (CASE WHEN 20 >= 10 AND 20 <= 20 THEN 7 ELSE 0 END +
            CASE WHEN M.intHeight >= 10 AND M.intHeight <= 1500 THEN 7 ELSE 0 END +
            CASE WHEN M.intMaritalStatusID IN (1,2,3,4,5 ) THEN 7 ELSE 0 END +
            CASE WHEN M.intNoOfChildrenID IN (1,2,3) THEN 7 ELSE 0 END +
            CASE WHEN M.intReligionID IN (1,2,3) THEN 7 ELSE 0 END +
            CASE WHEN M.intEthnicityID IN (1,2,3) THEN 7 ELSE 0 END +
            CASE WHEN M.intMotherTongueID IN (1,2,3) THEN 7 ELSE 0 END+
            CASE WHEN P.intProvinceID IN (1,2,3) THEN 7 ELSE 0 END+
            CASE WHEN M.intEducationLevelID IN (1,2,3) THEN 7 ELSE 0 END+
            7+
            CASE WHEN M.intMonthlyIncomeID IN (1,2,3) THEN 7 ELSE 0 END+
            CASE WHEN M.intAssetValueID IN (1,2,3) THEN 7 ELSE 0 END+
            CASE WHEN M.intDisabilityID IN (1,2) THEN 7 ELSE 0 END+
            CASE WHEN M.intDietID IN (1,2) THEN 7 ELSE 0 END) AS ForMe,
            fnGetPercentageForPartner(80,41,137,5,1,1,1,1,1,1,1,1,1,1) AS ForPartner,
            1 AS IsLiked,
            (SELECT COUNT(*) FROM MemberImage WHERE intMemberID = M.intMemberID) AS intImageCount
        FROM 
          Member AS M
          INNER JOIN City 									AS C 		ON M.intCityIdIfLiveInSL = C.intCityID
          INNER JOIN District 							AS D 		ON C.intDistrictID = D.intDistrictID
          INNER JOIN Province 							AS P 		ON D.intProvinceID = P.intProvinceID    
          INNER JOIN WorkingWith 						AS WW 	ON M.intWorkingWithId = WW.intWorkingWithId
          LEFT OUTER JOIN WorkingAsSubCat 	AS WSC  ON M.intWorkingAsSubCatId = WSC.intWorkinAsMainCat    
          INNER JOIN Ethnicity 							AS E 		ON M.intEthnicityID = E.intEthnicityID    
          INNER JOIN Religion 							AS R 		ON M.intReligionID = R.intReligionID
          INNER JOIN MaritalStatus 					AS MS 	ON M.intMaritalStatusID = MS.intMaritalStatusID  
          INNER JOIN EducationLevel 				AS EL 	ON M.intEducationLevelID = EL.intEducationLevelID      
        WHERE 
          M.vcGender <> ?
          AND M.intMemberAccountStatusID IN (4,5,6)";

    $query = $this->db->query($sql, array($gender));
    return $query->result_array();
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

  public function getMemberSuspendReason()
  {
    $this->db->select('intMemberSuspendReasons, vcSuspendReason');
    $this->db->from('membersuspendreasons');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return  $query->result();
    } else {
      return false;
    }
  }
}
