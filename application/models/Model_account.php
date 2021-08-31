<?php
class Model_account extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getMemberData($UserID)
  {
    // $sql = "SELECT  
    //         M.intMemberID, 
    //         M.vcMemberCode,
    //         CONCAT(MIM.intImageName,MIM.vcImageType) AS vcProfilePicture,
    //         M.vcNickName, 
    //         M.vcCountryCode, 
    //         M.vcMobileNo, 
    //         M.vcPassword, 
    //         M.vcEmail, 
    //         M.vcProvidingInformationType, 
    //         M.vcGender, 
    //         M.dtDOB, 
    //         MS.vcMaritalStatus_en AS vcMaritalStatus, 
    //         M.intNoOfChildrenID, 
    //         M.intMemberAccountStatusID, 
    //         M.vcMarriageType, 
    //         M.intNoOfSubmitedForm, 
    //         M.intHeight, 
    //         M.intWeightFrom, 
    //         M.intWeightTo, 
    //         M.intBodyTypeID, 
    //         CASE
    //         WHEN M.intBodyTypeID = 1 THEN 'Slim'
    //         WHEN M.intBodyTypeID = 2 THEN 'Average'
    //         WHEN M.intBodyTypeID = 3 THEN 'Heavy'
    //         END AS vcBodyType,
    //         M.intSkinColourID, 
    //         CASE
    //         WHEN M.intSkinColourID = 1 THEN 'Very Fair'
    //         WHEN M.intSkinColourID = 2 THEN 'Fair'
    //         WHEN M.intSkinColourID = 3 THEN 'Light Brown'
    //         WHEN M.intSkinColourID = 4 THEN 'Dark Brown'
    //         WHEN M.intSkinColourID = 5 THEN 'Black Brown'
    //         END AS vcSkinColour,
    //         M.intDisabilityID, 
    //         M.vcBloodGroup, 
    //         M.isHealthInfo, 
    //         CASE WHEN M.isHealthInfo = 1 THEN 'Details in Writing' ELSE  'No Health Issues' END AS vcHealthInfo,
    //         MT.vcMotherTongueName AS vcMotherTounge, 
    //         ET.vcEthnicityName AS vcEthnicity, 
    //         RE.vcReligion, 
    //         M.isPoliceReportCanProvide,
    //         CASE WHEN M.isPoliceReportCanProvide = 1 THEN 'Can provide' ELSE  'Can not provide' END AS vcPoliceReportCanProvide,
    //         WW.vcWorkingWith,
    //         -- WASC.vcWorkingAsSubCat,
    //         DT.vcDietName AS vcDiet,
    //         M.vcDrink,
    //         M.vcSmoke,
    //         M.vcDressAndMakeup,
    //         M.vcUsedToTravel,
    //         M.vcCalToParent,
    //         M.vcCustoms,
    //         M.vcLiveIn,
    //         M.intOpennessToExperience,
    //         M.intConscientiousness,
    //         M.intExtrovertPersonality,
    //         M.intIntrovertPersonality,
    //         M.intAgreeableness,
    //         M.intNeuroticism,
    //         M.intFamilyBond,
    //         M.intMoney,
    //         M.intReligious,
    //         M.intPhysicallyActive,
    //         M.IntPolitics,
    //         M.intKnowledge,
    //         M.intLoveAffairs,
    //         M.intimportanceVirginity,
    //         -- IFNULL(CASE WHEN (SUBSTRING_INDEX(WASC.vcWorkingAsSubCat, '(', LENGTH(WASC.vcWorkingAsSubCat) - LENGTH(REPLACE(WASC.vcWorkingAsSubCat, ')', '')))) = '' THEN
    //         --   WASC.vcWorkingAsSubCat 
    //         --   ELSE 
    //         --   (SUBSTRING_INDEX(WASC.vcWorkingAsSubCat, '(', LENGTH(WASC.vcWorkingAsSubCat) - LENGTH(REPLACE(WASC.vcWorkingAsSubCat, ')', '')))) END, WW.vcWorkingWith) 
    //         -- AS vcWorkingAsSubCat_Customised,
    //         -- 'TEST' AS vcWorkingAsSubCat_Customised,
    //         M.intWorkingAsID,
    //         WA.vcWorkingAS,
    //         IFNULL(WA.vcWorkingAS,WW.vcWorkingWith) AS MiniProfileDesignation,
    //         MAS.intMemberAccountStatusID,       
    //         MAS.vcMemberAccountStatus,            
    //         MAT.intMemberAccountTypeID,
    //         MAT.vcMemberAccountType,
    //         CONCAT(M.intWeightFrom,'-',M.intWeightTo) AS Weight_Customised,
    //         CT.intDistrictId,
    //         CT.intCityId,
    //         M.intCityIdIfLiveInSL,
    //         M.intCountryId,
    //         M.vcAddOfSriLanka,
    //         M.intNativeDistrictId,
    //         CS.intCasteID,
    //         CT.vcCityName,
    //         M.vcNic,
    //         M.vcGuardianContact,
    //         M.vcPremanentAddress,
    //         M.intResidenceStatusID,
    //         M.intEthnicityID,
    //         M.intReligionID,
    //         M.intMotherTongueID,
    //         M.intDietID,
    //         M.intEducationLevelID,
    //         M.intEducationFieldID,
    //         M.vcSclUniDescription,
    //         M.vcDescribeCareer,
    //         M.intWorkingWithId,
    //         -- M.intWorkingAsSubCatId,
    //         M.vcWorkingLocation,
    //         M.intCityIdWorkingIn,
    //         M.intWorkingCountryID,
    //         M.intMonthlyIncomeID,
    //         M.intAssetValueID,
    //         M.vcOwnershipOfAssets,
    //         M.intFamilyLocationID,
    //         M.vcFamilyType,
    //         M.vcFamilyValues,
    //         M.vcFamilyClass,
    //         M.vcFamilyCulture,
    //         M.vcFatherStatus,
    //         M.vcMotherStatus,
    //         M.vcFamilyDetails,
    //         M.vcPrefferToLive,
    //         M.vcHelpFamily,
    //         M.vcJobAfterMarriage,
    //         M.vcEducationAfterMarriage,
    //         M.vcChildrenLikes,
    //         M.vcOtherNeeds,
    //         M.vcMatchingHoroscope,
    //         M.vcZodiacSign,
    //         M.vcGanaya,
    //         M.vcNekatha,
    //         M.intRavi,
    //         M.intMoon,
    //         M.intMars,
    //         M.intMercury,
    //         M.intJupiter,
    //         M.intVenus,
    //         M.intSaturn,
    //         M.intRahu,
    //         M.intKethu,
    //         M.vcPapaKendara,
    //         M.vcAboutYourselfAndPartner,
    //         CTT.intDistrictid,
    //         -- WASC.intWorkinAsMainCat,
    //         M.intMyPhotosPrivacy,
    //         M.intMyVideosPrivacy,
    //         M.intAssetsDetailsPrivacy,
    //         M.intFamilyDetailsPrivacy,
    //         M.intHoroscopeDetailsPrivacy,
    //         NOC.vcNoOfChildren_en AS vcNoOfChildren,
    //         DS.vcDisability,
    //         RS.vcResidenceStatus,
    //         CS.vcSubCasteName,
    //         fnLanguageSpeakWithSeparator(M.intMemberID) AS vcLanguageSpeakWithSeparator,
    //         fnMonthlyIncomeRouteSeparator(M.intMemberID) AS vcMonthlyIncomeRouteSeparator,
    //         EL.vcEducationLevel,
    //         EF.vcEducationField,
    //         MI.vcMonthlyIncome,
    //         A.vcAssetValue,
    //         'Test' AS Test
    //       FROM 
    //         Member AS M
    //         LEFT OUTER JOIN WorkingWith          AS WW   ON M.intWorkingWithID = WW.intWorkingWithID
    //         LEFT OUTER JOIN WorkingAs            AS WA  ON  M.intWorkingAsID = WA.intWorkingAsID
    //         -- LEFT OUTER JOIN WorkingAsSubCat AS WASC ON M.intWorkingAsSubCatID = WASC.intWorkingAsSubCatID
    //         LEFT OUTER JOIN MemberAccountStatus  AS MAS  ON M.intMemberAccountStatusID = MAS.intMemberAccountStatusID
    //         LEFT OUTER JOIN MemberAccountType    AS MAT  ON M.intMemberAccountTypeID = MAT.intMemberAccountTypeID
    //         LEFT OUTER JOIN MaritalStatus        AS MS   ON M.intMaritalStatusID = MS.intMaritalStatusID
    //         LEFT OUTER JOIN City AS CT ON  M.intCityIdIfLiveInSL = CT.intCityID
    //         LEFT OUTER JOIN Subcaste AS CS ON M.intSubCasteId = CS.intSubCasteId
    //         LEFT OUTER JOIN Mothertongue AS MT ON M.intMotherTongueID = MT.intMotherTongueID
    //         LEFT OUTER JOIN Ethnicity AS ET ON M.intEthnicityID = ET.intEthnicityID
    //         LEFT OUTER JOIN Religion AS RE ON M.intReligionID = RE.intReligionID
    //         LEFT OUTER JOIN Diet AS DT ON M.intDietID = DT.intDietID
    //         LEFT OUTER JOIN Disability AS DS ON M.intDisabilityID = DS.intDisabilityID
    //         LEFT OUTER JOIN Residencestatus AS RS ON M.intResidenceStatusID = RS.intResidenceStatusID
    //         LEFT OUTER JOIN City AS CTT ON M.intCityIdWorkingIn = CTT.intCityid
    //         LEFT OUTER JOIN NoofChildren AS NOC ON M.intNoOfChildrenID = NOC.intNoOfChildrenID
    //         LEFT OUTER JOIN EducationLevel AS EL 	ON M.intEducationLevelID = EL.intEducationLevelID  
    //         LEFT OUTER JOIN EducationField AS EF 	ON M.intEducationFieldID = EF.intEducationFieldID 
    //         LEFT OUTER JOIN MonthlyIncome AS MI 	ON M.intMonthlyIncomeID = MI.intMonthlyIncomeID 
    //         LEFT OUTER JOIN AssetValue AS A 	ON M.intAssetValueID = A.intAssetValueID
    //         LEFT OUTER JOIN MemberImage AS MIM ON M.intMemberID = MIM.intMemberID AND MIM.isProfilePicture = 1

    //       WHERE 
    //         M.intMemberID = ? ";

    $sql = "CALL spGetMemberDetailByID(?);";
    $query = $this->db->query($sql, array($UserID));
    mysqli_next_result($this->db->conn_id);
    return $query->row_array();
  }

  public function getGetBasicPreferencesWithSeparatorMemberDetailByID($member_id)
  {
    $sql = "CALL spGetBasicPreferencesWithSeparatorMemberDetailByID(?);";
    $query = $this->db->query($sql, array($member_id));
    mysqli_next_result($this->db->conn_id);
    return $query->row_array();
  }


  public function getGetBasicPreferences_ID_WithSeparatorMemberDetailByID($member_id)
  {
    $sql = "CALL spGetBasicPreferences_ID_WithSeparatorMemberDetailByID(?);";
    $query = $this->db->query($sql, array($member_id));
    mysqli_next_result($this->db->conn_id);
    return $query->row_array();
  }

  public function getMemberPhotosData($member_id)
  {
    $sql = "SELECT 
              intImageID,
              intImageName,
              UPPER(vcImageType) AS vcImageType,
              CONCAT(intImageName,UPPER(vcImageType)) AS vcImage,
              isProfilePicture
            FROM MemberImage
            WHERE intMemberID = ? ";

    $query = $this->db->query($sql, array($member_id));
    return $query->result_array();
  }

  // public function getMyProfileMatchingDetils($member_id)
  // {

  //   $sql = "SELECT 
  //             TIMESTAMPDIFF(year,M.dtDOB, now()) AS Age,
  //             M.intHeight,
  //             M.intMaritalStatusID,
  //             M.intNoOfChildrenID,	
  //             M.intReligionID,
  //             M.intEthnicityID,
  //             M.intMotherTongueID,
  //             D.intProvinceID,
  //             M.intEducationLevelID,
  //             M.intMonthlyIncomeID,
  //             M.intAssetValueID,
  //             M.intDisabilityID,
  //             M.intDietID,
  //             M.intMemberPreferedAgeFrom,
  //             M.intMemberPreferedAgeTo,
  //             M.intMemberPreferedHeightFrom,
  //             M.intMemberPreferedHeightTo,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPMS.intMaritalStatusID SEPARATOR ','),0) AS MemberPreferedMaritalStatus,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPNC.intNoOfChildrenID SEPARATOR ','),0) AS MemberPreferedNoOfChildren,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPR.intReligionID SEPARATOR ','),0) AS MemberPreferedReligion,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPE.intEthnicityID SEPARATOR ','),0) AS MemberPreferedEthnicity,          
  //             IFNULL(GROUP_CONCAT(DISTINCT MPMT.intMotherTongueID SEPARATOR ','),0) AS MemberPreferedMotherTongue,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPSL.intProvinceID SEPARATOR ','),0) AS MemberPreferedLiveInSriLanka,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPEL.intEducationLevelID SEPARATOR ','),0) AS MemberPreferedEducationLevel,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPME.intMonthlyIncomeID SEPARATOR ','),0) AS MemberPreferedMonthlyIncome,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPAV.intAssetValueID SEPARATOR ','),0) AS MemberPreferedAssetValue,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPAD.intDisabilityID SEPARATOR ','),0) AS MemberPreferedAnyDisability,
  //             IFNULL(GROUP_CONCAT(DISTINCT MPD.intDietID SEPARATOR ','),0) AS MemberPreferedDiet
  //           FROM 
  //             Member AS M
  //             INNER JOIN City                         AS C ON M.intCityIdIfLiveInSL = C.intCityID
  //             INNER JOIN District                     AS D ON C.intDistrictID = D.intDistrictID
  //             INNER JOIN MemberPreferedMaritalStatus  AS MPMS ON M.intMemberID = MPMS.intMemberID
  //             INNER JOIN MemberPreferedNoOfChildren   AS MPNC ON M.intMemberID = MPNC.intMemberID
  //             INNER JOIN MemberPreferedReligion       AS MPR ON M.intMemberID = MPR.intMemberID
  //             INNER JOIN MemberPreferedEthnicity      AS MPE ON M.intMemberID = MPE.intMemberID 	
  //             INNER JOIN MemberPreferedMotherTongue   AS MPMT ON M.intMemberID = MPMT.intMemberID 
  //             INNER JOIN MemberPreferedLiveInSriLanka AS MPSL ON M.intMemberID = MPSL.intMemberID
  //             INNER JOIN MemberPreferedEducationLevel AS MPEL ON M.intMemberID = MPEL.intMemberID 
  //             INNER JOIN MemberPreferedMonthlyIncome  AS MPME ON M.intMemberID = MPME.intMemberID
  //             INNER JOIN MemberPreferedAssetValue     AS MPAV ON M.intMemberID = MPAV.intMemberID 
  //             INNER JOIN MemberPreferedAnyDisability  AS MPAD ON M.intMemberID = MPAD.intMemberID 
  //             INNER JOIN MemberPreferedDiet           AS MPD ON M.intMemberID = MPD.intMemberID 
  //           WHERE M.intMemberID = ? ";

  //   $query = $this->db->query($sql, array($member_id));
  //   return $query->row_array();
  // }

  public function getAllSinglesCount()
  {
    $gender = $this->session->userdata('gender');

    $sql = "SELECT 
              COUNT(M.intMemberID) AS AllSinglesCount 
            FROM Member AS M 
            WHERE M.vcGender <> ? AND M.intMemberAccountStatusID IN (4,5,6)";

    $query = $this->db->query($sql, array($gender));
    return $query->row_array();
  }

  public function getPreferedMaritalStatus($member_id)
  {
    $sql = "SELECT 
              COUNT(M.intMemberID) AS AllSinglesCount 
            FROM Member AS M 
            WHERE M.vcGender <> ? AND M.intMemberAccountStatusID IN (4,5,6)";

    $query = $this->db->query($sql, array($member_id));
    return $query->row_array();
  }


  public function getAllSingles_ByMemberID($member_id, $gender)
  {

    $myDetails = $this->getMemberData($member_id);
    $myPreferencesDetails = $this->getGetBasicPreferences_ID_WithSeparatorMemberDetailByID($member_id);

    $sql = "SELECT 
            M.intMemberID,
            M.vcMemberCode,
            CONCAT(UPPER(SUBSTRING(M.vcNickName,1,1)),LOWER(SUBSTRING(M.vcNickName,2))) AS vcNickName,  
            WW.vcWorkingWith, 
            IFNULL(WA.vcWorkingAS,WW.vcWorkingWith) AS MiniProfileDesignation,
            M.intMemberAccountTypeID,
            TIMESTAMPDIFF(year,M.dtDOB, now())  AS Age,
            M.intHeight,
            fnCmToFeet(M.intHeight) AS vcHightFeet,
            E.vcEthnicityName,
            R.vcReligion,
            MS.vcMaritalStatus_en AS vcMaritalStatus,
            EL.vcEducationLevel,    
            (CASE WHEN  TIMESTAMPDIFF(year,M.dtDOB, now())  >= " . (int)$myDetails['intMemberPreferedAgeFrom'] . " AND  TIMESTAMPDIFF(year,M.dtDOB, now())  <= " . (int)$myDetails['intMemberPreferedAgeTo'] . " THEN 7 ELSE 0 END +
            CASE WHEN M.intHeight >= " . (int)$myDetails['intMemberPreferedHeightFrom'] . " AND M.intHeight <= " . (int)$myDetails['intMemberPreferedHeightTo'] . " THEN 7 ELSE 0 END +
            CASE WHEN M.intMaritalStatusID IN (" . $myPreferencesDetails['PreferedMaritalStatusID'] . ") THEN 7 ELSE 0 END +
            CASE WHEN M.intNoOfChildrenID IN (" . $myPreferencesDetails["PreferednoofchildrenID"] . ") THEN 7 ELSE 0 END +
            CASE WHEN M.intReligionID IN (" . $myPreferencesDetails["PreferedReligionID"] . ") THEN 7 ELSE 0 END +
            CASE WHEN M.intEthnicityID IN (" . $myPreferencesDetails["PreferedEthnicityID"] . ") THEN 7 ELSE 0 END +
            CASE WHEN M.intMotherTongueID IN (" . $myPreferencesDetails["PreferedMotherTongueID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN P.intProvinceID IN (" . $myPreferencesDetails["PreferedLiveinSrilankaID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intEducationLevelID IN (" . $myPreferencesDetails["PreferedEducationLevelID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intWorkingWithID IN (" . $myPreferencesDetails["PreferedCareerID"] . ") THEN 7 ELSE 0 END + 
            CASE WHEN M.intMonthlyIncomeID IN (" . $myPreferencesDetails["PreferedMonthlyInComeID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intAssetValueID IN (" . $myPreferencesDetails["PreferedAssetValueID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intDisabilityID IN (" . $myPreferencesDetails["PreferedDisabilityID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intDietID IN (" . $myPreferencesDetails["PreferedDietID"] . ") THEN 7 ELSE 0 END) AS ForMe,
            IFNULL(fnGetPercentageForPartner(M.intMemberID," . $myDetails["intAge"] . "," . $myDetails["intHeight"] . "," . $myDetails["intMaritalStatusID"] . "," . $myDetails["intNoOfChildrenID"] . "," . $myDetails["intReligionID"] . "," . $myDetails["intEthnicityID"] . "," . $myDetails["intMotherTongueID"] . "," . $myDetails["intProvinceID"] . "," . $myDetails["intEducationLevelID"] . ",1," . $myDetails["intMonthlyIncomeID"] . "," . $myDetails["intAssetValueID"] . "," . $myDetails["intDisabilityID"] . "," . $myDetails["intDietID"] . "),0) AS ForPartner,
            CONCAT(MI.intImageName,MI.vcImageType) AS vcProfilePicture,
            CASE WHEN MLP.intMemberID IS NULL THEN 0 ELSE 1 END AS IsLiked,
            (SELECT COUNT(*) FROM MemberImage AS MI WHERE MI.intMemberID = M.intMemberID) AS intImageCount
          FROM 
          Member AS M
          INNER JOIN City 									  AS C 		ON M.intCityIdIfLiveInSL = C.intCityID
          INNER JOIN District 							  AS D 		ON C.intDistrictID = D.intDistrictID
          INNER JOIN Province 							  AS P 		ON D.intProvinceID = P.intProvinceID    
          INNER JOIN WorkingWith 						  AS WW 	ON M.intWorkingWithId = WW.intWorkingWithId
          LEFT OUTER JOIN WorkingAs           AS WA   ON M.intWorkingAsID = WA.intWorkingAsID
          INNER JOIN Ethnicity 							  AS E 		ON M.intEthnicityID = E.intEthnicityID    
          INNER JOIN Religion 							  AS R 		ON M.intReligionID = R.intReligionID
          INNER JOIN MaritalStatus 					  AS MS 	ON M.intMaritalStatusID = MS.intMaritalStatusID  
          INNER JOIN EducationLevel 				  AS EL 	ON M.intEducationLevelID = EL.intEducationLevelID    
          LEFT OUTER JOIN MemberLikedProfile  AS MLP  ON M.intMemberID = MLP.intMemberID_Partner AND MLP.intMemberID = $member_id
          INNER JOIN MemberImage              AS MI   ON M.intMemberID = MI.intMemberID AND MI.isProfilePicture = 1    
        WHERE 
          M.vcGender <> ?
          AND M.intMemberAccountStatusID IN (4,5,6)";

    $query = $this->db->query($sql, array($gender));
    return $query->result_array();
  }


  public function getMemberMatchingDetailsByPartnerID($member_id, $partner_id)
  {
    $myPreferencesDetails = $this->getGetBasicPreferences_ID_WithSeparatorMemberDetailByID($member_id);

    $sql = "
    
    ";
  }


  public function getPartnerAndMemberMatchingPercentage($member_id, $partner_id)
  {

    $myDetails = $this->getMemberData($member_id);
    $myPreferencesDetails = $this->getGetBasicPreferences_ID_WithSeparatorMemberDetailByID($member_id);

    $sql = "SELECT 
            M.intMemberID,
            M.vcMemberCode,
            CONCAT(UPPER(SUBSTRING(M.vcNickName,1,1)),LOWER(SUBSTRING(M.vcNickName,2))) AS vcNickName,  
            WW.vcWorkingWith, 
            IFNULL(WA.vcWorkingAS,WW.vcWorkingWith) AS MiniProfileDesignation,
            M.intMemberAccountTypeID,
            TIMESTAMPDIFF(year,M.dtDOB, now())  AS Age,
            M.intHeight,
            fnCmToFeet(M.intHeight) AS vcHightFeet,
            E.vcEthnicityName,
            R.vcReligion,
            MS.vcMaritalStatus_en AS vcMaritalStatus,
            EL.vcEducationLevel,    
            (CASE WHEN  TIMESTAMPDIFF(year,M.dtDOB, now())  >= " . (int)$myDetails['intMemberPreferedAgeFrom'] . " AND  TIMESTAMPDIFF(year,M.dtDOB, now())  <= " . (int)$myDetails['intMemberPreferedAgeTo'] . " THEN 7 ELSE 0 END +
            CASE WHEN M.intHeight >= " . (int)$myDetails['intMemberPreferedHeightFrom'] . " AND M.intHeight <= " . (int)$myDetails['intMemberPreferedHeightTo'] . " THEN 7 ELSE 0 END +
            CASE WHEN M.intMaritalStatusID IN (" . $myPreferencesDetails['PreferedMaritalStatusID'] . ") THEN 7 ELSE 0 END +
            CASE WHEN M.intNoOfChildrenID IN (" . $myPreferencesDetails["PreferednoofchildrenID"] . ") THEN 7 ELSE 0 END +
            CASE WHEN M.intReligionID IN (" . $myPreferencesDetails["PreferedReligionID"] . ") THEN 7 ELSE 0 END +
            CASE WHEN M.intEthnicityID IN (" . $myPreferencesDetails["PreferedEthnicityID"] . ") THEN 7 ELSE 0 END +
            CASE WHEN M.intMotherTongueID IN (" . $myPreferencesDetails["PreferedMotherTongueID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN P.intProvinceID IN (" . $myPreferencesDetails["PreferedLiveinSrilankaID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intEducationLevelID IN (" . $myPreferencesDetails["PreferedEducationLevelID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intWorkingWithID IN (" . $myPreferencesDetails["PreferedCareerID"] . ") THEN 7 ELSE 0 END + 
            CASE WHEN M.intMonthlyIncomeID IN (" . $myPreferencesDetails["PreferedMonthlyInComeID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intAssetValueID IN (" . $myPreferencesDetails["PreferedAssetValueID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intDisabilityID IN (" . $myPreferencesDetails["PreferedDisabilityID"] . ") THEN 7 ELSE 0 END+
            CASE WHEN M.intDietID IN (" . $myPreferencesDetails["PreferedDietID"] . ") THEN 7 ELSE 0 END) AS ForMe,
            IFNULL(fnGetPercentageForPartner(M.intMemberID," . $myDetails["intAge"] . "," . $myDetails["intHeight"] . "," . $myDetails["intMaritalStatusID"] . "," . $myDetails["intNoOfChildrenID"] . "," . $myDetails["intReligionID"] . "," . $myDetails["intEthnicityID"] . "," . $myDetails["intMotherTongueID"] . "," . $myDetails["intProvinceID"] . "," . $myDetails["intEducationLevelID"] . ",1," . $myDetails["intMonthlyIncomeID"] . "," . $myDetails["intAssetValueID"] . "," . $myDetails["intDisabilityID"] . "," . $myDetails["intDietID"] . "),0) AS ForPartner,
            CONCAT(MI.intImageName,MI.vcImageType) AS vcProfilePicture,
            CASE WHEN MLP.intMemberID IS NULL THEN 0 ELSE 1 END AS IsLiked,
            (SELECT COUNT(*) FROM MemberImage AS MI WHERE MI.intMemberID = M.intMemberID) AS intImageCount
          FROM 
          Member AS M
          INNER JOIN City 									  AS C 		ON M.intCityIdIfLiveInSL = C.intCityID
          INNER JOIN District 							  AS D 		ON C.intDistrictID = D.intDistrictID
          INNER JOIN Province 							  AS P 		ON D.intProvinceID = P.intProvinceID    
          INNER JOIN WorkingWith 						  AS WW 	ON M.intWorkingWithId = WW.intWorkingWithId
          LEFT OUTER JOIN WorkingAs           AS WA   ON M.intWorkingAsID = WA.intWorkingAsID
          INNER JOIN Ethnicity 							  AS E 		ON M.intEthnicityID = E.intEthnicityID    
          INNER JOIN Religion 							  AS R 		ON M.intReligionID = R.intReligionID
          INNER JOIN MaritalStatus 					  AS MS 	ON M.intMaritalStatusID = MS.intMaritalStatusID  
          INNER JOIN EducationLevel 				  AS EL 	ON M.intEducationLevelID = EL.intEducationLevelID    
          LEFT OUTER JOIN MemberLikedProfile  AS MLP  ON M.intMemberID = MLP.intMemberID_Partner AND MLP.intMemberID = $member_id
          INNER JOIN MemberImage              AS MI   ON M.intMemberID = MI.intMemberID AND MI.isProfilePicture = 1    
        WHERE 
          M.intMemberID = ?";

    $query = $this->db->query($sql, array($partner_id));
    return $query->row_array();
  }


  public function updateLikeOrDisLikeProfile($member_id, $member_id_partner, $gender)
  {

    //     $dataMemberLikedProfile = array(
    //       'intMemberID' => $member_id,
    //       'intMemberID_Partner' => $member_id_partner
    //     );
    // $this->db->insert('MemberLikedProfile', $dataMemberLikedProfile);

    $query = $this->db->query("SELECT intMemberID FROM Member WHERE intMemberID = ? AND vcGender <> ? ", array($member_id_partner, $gender));
    $row = $query->row_array();

    if (isset($row)) {
      $query = $this->db->query("SELECT intMemberID FROM MemberLikedProfile WHERE intMemberID = ? AND intMemberID_Partner = ? ", array($member_id, $member_id_partner));
      $row = $query->row_array();
      $this->db->trans_begin();
      if (isset($row)) {
        $this->db->delete('MemberLikedProfile', array('intMemberID' => $member_id, 'intMemberID_Partner' => $member_id_partner));
      } else {
        $dataMemberLikedProfile = array(
          'intMemberID' => $member_id,
          'intMemberID_Partner' => $member_id_partner
        );
        $this->db->insert('MemberLikedProfile', $dataMemberLikedProfile);
      }

      if ($this->db->trans_status() === FALSE) {
        $this->db->trans_rollback();
      } else {
        $this->db->trans_commit();
      }
    } else {
      return false;
    }
    return true;
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

  // DK start

  public function updateVisitedProfile($member_id, $PartnerID)
  {
    $query = $this->db->query("SELECT * FROM membervisitedprofile WHERE intMemberID = '" . $member_id . "' AND intVisitedID = '" . $PartnerID . "'");
    if ($query->num_rows() < 1) {
      $data = array(
        'intMemberID' => $member_id,
        'intVisitedID' => $PartnerID
      );
      $this->db->insert('membervisitedprofile', $data);
      return true;
    } else {
      return false;
    }
  }

  public function getVisitedProfileCount($member_id)
  {
    $query = $this->db->query("SELECT COUNT(intMemberID) as noOfVisitedProfile FROM membervisitedprofile WHERE intMemberID = '.$member_id.'");


    if ($query->num_rows() > 0) {
      $row = $query->row();
      return $row->noOfVisitedProfile;
    } else {
      return false;
    }
  }

  public function getVisitedProfiles($member_id, $gender)
  {

    $myDetails = $this->getMemberData($member_id);
    $myPreferencesDetails = $this->getGetBasicPreferences_ID_WithSeparatorMemberDetailByID($member_id);

    $sql = "SELECT 
          M.intMemberID,
          M.vcMemberCode,
          CONCAT(UPPER(SUBSTRING(M.vcNickName,1,1)),LOWER(SUBSTRING(M.vcNickName,2))) AS vcNickName,  
          WW.vcWorkingWith,
          -- WSC.vcWorkingAsSubCat, 
          -- IFNULL(WSC.vcWorkingAsSubCat,WW.vcWorkingWith) AS MiniProfileDesignation,
          IFNULL(WA.vcWorkingAS,WW.vcWorkingWith) AS MiniProfileDesignation,
          M.intMemberAccountTypeID,
          TIMESTAMPDIFF(year,M.dtDOB, now())  AS Age,
          M.intHeight,
          fnCmToFeet(M.intHeight) AS vcHightFeet,
          E.vcEthnicityName,
          R.vcReligion,
          MS.vcMaritalStatus_en AS vcMaritalStatus,
          EL.vcEducationLevel,    
          (CASE WHEN  TIMESTAMPDIFF(year,M.dtDOB, now())  >= " . (int)$myDetails['intMemberPreferedAgeFrom'] . " AND  TIMESTAMPDIFF(year,M.dtDOB, now())  <= " . (int)$myDetails['intMemberPreferedAgeTo'] . " THEN 7 ELSE 0 END +
          CASE WHEN M.intHeight >= " . (int)$myDetails['intMemberPreferedHeightFrom'] . " AND M.intHeight <= " . (int)$myDetails['intMemberPreferedHeightTo'] . " THEN 7 ELSE 0 END +
          CASE WHEN M.intMaritalStatusID IN (" . $myPreferencesDetails['PreferedMaritalStatusID'] . ") THEN 7 ELSE 0 END +
          CASE WHEN M.intNoOfChildrenID IN (" . $myPreferencesDetails["PreferednoofchildrenID"] . ") THEN 7 ELSE 0 END +
          CASE WHEN M.intReligionID IN (" . $myPreferencesDetails["PreferedReligionID"] . ") THEN 7 ELSE 0 END +
          CASE WHEN M.intEthnicityID IN (" . $myPreferencesDetails["PreferedEthnicityID"] . ") THEN 7 ELSE 0 END +
          CASE WHEN M.intMotherTongueID IN (" . $myPreferencesDetails["PreferedMotherTongueID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN P.intProvinceID IN (" . $myPreferencesDetails["PreferedLiveinSrilankaID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intEducationLevelID IN (" . $myPreferencesDetails["PreferedEducationLevelID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intWorkingWithID IN (" . $myPreferencesDetails["PreferedCareerID"] . ") THEN 7 ELSE 0 END + 
          CASE WHEN M.intMonthlyIncomeID IN (" . $myPreferencesDetails["PreferedMonthlyInComeID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intAssetValueID IN (" . $myPreferencesDetails["PreferedAssetValueID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intDisabilityID IN (" . $myPreferencesDetails["PreferedDisabilityID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intDietID IN (" . $myPreferencesDetails["PreferedDietID"] . ") THEN 7 ELSE 0 END) AS ForMe,
          IFNULL(fnGetPercentageForPartner(M.intMemberID," . $myDetails["intAge"] . "," . $myDetails["intHeight"] . "," . $myDetails["intMaritalStatusID"] . "," . $myDetails["intNoOfChildrenID"] . "," . $myDetails["intReligionID"] . "," . $myDetails["intEthnicityID"] . "," . $myDetails["intMotherTongueID"] . "," . $myDetails["intProvinceID"] . "," . $myDetails["intEducationLevelID"] . ",1," . $myDetails["intMonthlyIncomeID"] . "," . $myDetails["intAssetValueID"] . "," . $myDetails["intDisabilityID"] . "," . $myDetails["intDietID"] . "),0) AS ForPartner,
          CONCAT(MI.intImageName,MI.vcImageType) AS vcProfilePicture,
          CASE WHEN MLP.intMemberID IS NULL THEN 0 ELSE 1 END AS IsLiked,
          (SELECT COUNT(*) FROM MemberImage AS MI WHERE MI.intMemberID = M.intMemberID) AS intImageCount
        FROM 
        Member AS M
        INNER JOIN City 									  AS C 		ON M.intCityIdIfLiveInSL = C.intCityID
        INNER JOIN District 							  AS D 		ON C.intDistrictID = D.intDistrictID
        INNER JOIN Province 							  AS P 		ON D.intProvinceID = P.intProvinceID    
        INNER JOIN WorkingWith 						  AS WW 	ON M.intWorkingWithId = WW.intWorkingWithId
        LEFT OUTER JOIN WorkingAs           AS WA   ON M.intWorkingAsID = WA.intWorkingAsID
        INNER JOIN Ethnicity 							  AS E 		ON M.intEthnicityID = E.intEthnicityID    
        INNER JOIN Religion 							  AS R 		ON M.intReligionID = R.intReligionID
        INNER JOIN MaritalStatus 					  AS MS 	ON M.intMaritalStatusID = MS.intMaritalStatusID  
        INNER JOIN EducationLevel 				  AS EL 	ON M.intEducationLevelID = EL.intEducationLevelID    
        LEFT OUTER JOIN MemberLikedProfile  AS MLP  ON M.intMemberID = MLP.intMemberID_Partner AND MLP.intMemberID = $member_id
        INNER JOIN MemberImage              AS MI   ON M.intMemberID = MI.intMemberID AND MI.isProfilePicture = 1   
        INNER JOIN membervisitedprofile     AS MVP  ON M.intMemberID = MVP.intVisitedID
      WHERE 
      MVP.intMemberID = '.$member_id.'";

    $query = $this->db->query($sql, array($gender));
    return $query->result_array();
  }

  public function getMyProfileVisitedByOthers($member_id, $gender)
  {

    $myDetails = $this->getMemberData($member_id);
    $myPreferencesDetails = $this->getGetBasicPreferences_ID_WithSeparatorMemberDetailByID($member_id);

    $sql = "SELECT 
          M.intMemberID,
          M.vcMemberCode,
          CONCAT(UPPER(SUBSTRING(M.vcNickName,1,1)),LOWER(SUBSTRING(M.vcNickName,2))) AS vcNickName,  
          WW.vcWorkingWith,
          -- WSC.vcWorkingAsSubCat, 
          -- IFNULL(WSC.vcWorkingAsSubCat,WW.vcWorkingWith) AS MiniProfileDesignation,
          IFNULL(WA.vcWorkingAS,WW.vcWorkingWith) AS MiniProfileDesignation,
          M.intMemberAccountTypeID,
          TIMESTAMPDIFF(year,M.dtDOB, now())  AS Age,
          M.intHeight,
          fnCmToFeet(M.intHeight) AS vcHightFeet,
          E.vcEthnicityName,
          R.vcReligion,
          MS.vcMaritalStatus_en AS vcMaritalStatus,
          EL.vcEducationLevel,    
          (CASE WHEN  TIMESTAMPDIFF(year,M.dtDOB, now())  >= " . (int)$myDetails['intMemberPreferedAgeFrom'] . " AND  TIMESTAMPDIFF(year,M.dtDOB, now())  <= " . (int)$myDetails['intMemberPreferedAgeTo'] . " THEN 7 ELSE 0 END +
          CASE WHEN M.intHeight >= " . (int)$myDetails['intMemberPreferedHeightFrom'] . " AND M.intHeight <= " . (int)$myDetails['intMemberPreferedHeightTo'] . " THEN 7 ELSE 0 END +
          CASE WHEN M.intMaritalStatusID IN (" . $myPreferencesDetails['PreferedMaritalStatusID'] . ") THEN 7 ELSE 0 END +
          CASE WHEN M.intNoOfChildrenID IN (" . $myPreferencesDetails["PreferednoofchildrenID"] . ") THEN 7 ELSE 0 END +
          CASE WHEN M.intReligionID IN (" . $myPreferencesDetails["PreferedReligionID"] . ") THEN 7 ELSE 0 END +
          CASE WHEN M.intEthnicityID IN (" . $myPreferencesDetails["PreferedEthnicityID"] . ") THEN 7 ELSE 0 END +
          CASE WHEN M.intMotherTongueID IN (" . $myPreferencesDetails["PreferedMotherTongueID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN P.intProvinceID IN (" . $myPreferencesDetails["PreferedLiveinSrilankaID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intEducationLevelID IN (" . $myPreferencesDetails["PreferedEducationLevelID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intWorkingWithID IN (" . $myPreferencesDetails["PreferedCareerID"] . ") THEN 7 ELSE 0 END + 
          CASE WHEN M.intMonthlyIncomeID IN (" . $myPreferencesDetails["PreferedMonthlyInComeID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intAssetValueID IN (" . $myPreferencesDetails["PreferedAssetValueID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intDisabilityID IN (" . $myPreferencesDetails["PreferedDisabilityID"] . ") THEN 7 ELSE 0 END+
          CASE WHEN M.intDietID IN (" . $myPreferencesDetails["PreferedDietID"] . ") THEN 7 ELSE 0 END) AS ForMe,
          IFNULL(fnGetPercentageForPartner(M.intMemberID," . $myDetails["intAge"] . "," . $myDetails["intHeight"] . "," . $myDetails["intMaritalStatusID"] . "," . $myDetails["intNoOfChildrenID"] . "," . $myDetails["intReligionID"] . "," . $myDetails["intEthnicityID"] . "," . $myDetails["intMotherTongueID"] . "," . $myDetails["intProvinceID"] . "," . $myDetails["intEducationLevelID"] . ",1," . $myDetails["intMonthlyIncomeID"] . "," . $myDetails["intAssetValueID"] . "," . $myDetails["intDisabilityID"] . "," . $myDetails["intDietID"] . "),0) AS ForPartner,
          CONCAT(MI.intImageName,MI.vcImageType) AS vcProfilePicture,
          CASE WHEN MLP.intMemberID IS NULL THEN 0 ELSE 1 END AS IsLiked,
          (SELECT COUNT(*) FROM MemberImage AS MI WHERE MI.intMemberID = M.intMemberID) AS intImageCount
        FROM 
        Member AS M
        INNER JOIN City 									  AS C 		ON M.intCityIdIfLiveInSL = C.intCityID
        INNER JOIN District 							  AS D 		ON C.intDistrictID = D.intDistrictID
        INNER JOIN Province 							  AS P 		ON D.intProvinceID = P.intProvinceID    
        INNER JOIN WorkingWith 						  AS WW 	ON M.intWorkingWithId = WW.intWorkingWithId
        LEFT OUTER JOIN WorkingAs           AS WA   ON M.intWorkingAsID = WA.intWorkingAsID
        INNER JOIN Ethnicity 							  AS E 		ON M.intEthnicityID = E.intEthnicityID    
        INNER JOIN Religion 							  AS R 		ON M.intReligionID = R.intReligionID
        INNER JOIN MaritalStatus 					  AS MS 	ON M.intMaritalStatusID = MS.intMaritalStatusID  
        INNER JOIN EducationLevel 				  AS EL 	ON M.intEducationLevelID = EL.intEducationLevelID    
        LEFT OUTER JOIN MemberLikedProfile  AS MLP  ON M.intMemberID = MLP.intMemberID_Partner AND MLP.intMemberID = $member_id
        INNER JOIN MemberImage              AS MI   ON M.intMemberID = MI.intMemberID AND MI.isProfilePicture = 1   
        INNER JOIN membervisitedprofile     AS MVP  ON M.intMemberID = MVP.intMemberID
      WHERE 
      MVP.intVisitedID = '.$member_id.'";

    $query = $this->db->query($sql, array($gender));
    return $query->result_array();
  }

  // DK end

}
