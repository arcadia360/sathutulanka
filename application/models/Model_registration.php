<?php
class Model_registration extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('email');
    $this->email->set_mailtype("html");
  }

  //-----------------------------------
  //DK
  //-----------------------------------

  //Physical Status
  public function savePhysicalStatus()
  {
    $weight = $this->input->post('weight');
    // // arrange from weight and to wight
    $weightsArray = explode("-", $weight);
    $fromWeight = $weightsArray[0];
    $toWeight = $weightsArray[1];

    $mid = $this->session->userdata('member_id');

    $NoOfSubmitedForm = null;
    $data = array();

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }

    if ($NoOfSubmitedForm > 2) {
      $data = array(
        'intHeight' => $this->input->post('height'),
        'intWeightFrom' => $fromWeight,
        'intWeightTo' => $toWeight,
        'intBodyTypeID' => $this->input->post('bodyShape'),
        'intSkinColourID' => $this->input->post('skinColor'),
        'intDisabilityID' => $this->input->post('disability'),
        'vcBloodGroup' => $this->input->post('bloodGroup'),
        'isHealthInfo' => $this->input->post('healthInfo')
      );
    } else {
      $data = array(
        'intHeight' => $this->input->post('height'),
        'intWeightFrom' => $fromWeight,
        'intWeightTo' => $toWeight,
        'intBodyTypeID' => $this->input->post('bodyShape'),
        'intSkinColourID' => $this->input->post('skinColor'),
        'intDisabilityID' => $this->input->post('disability'),
        'vcBloodGroup' => $this->input->post('bloodGroup'),
        'isHealthInfo' => $this->input->post('healthInfo'),
        'intNoOfSubmitedForm' => 2
      );
    }

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);

    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (2 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function getMonthlyIncomeRoutesData($MemberID)
  {
    $sql = "SELECT vcMonthlyIncomeRoute, intMemberID
    FROM monthlyincomeroutes
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }

  public function getAssetRoutesData($MemberID)
  {
    $sql = "SELECT vcAssetRoute, intMemberID
    FROM assetroutes
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }
  public function getEnrichmentHobbies($MemberID)
  {
    $sql = "SELECT vcEnrichmentHobby, intMemberID
    FROM enrichmenthobbies
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }

  public function getSportsActivities($MemberID)
  {
    $sql = "SELECT vcSportsPhysicalActivities, intMemberID
    FROM sportsphysicalactivities
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }

  public function getCreativeHobbies($MemberID)
  {
    $sql = "SELECT vcCreativeHobbies, intMemberID
    FROM creativehobbies
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }

  public function getCollectingHobbies($MemberID)
  {
    $sql = "SELECT vcCollectingHobby, intMemberID
    FROM collectinghobbies
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }

  public function getOutdoorsHobbies($MemberID)
  {
    $sql = "SELECT vcOutdoorHobies, intMemberID
    FROM outdoorhobies
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }

  public function getDomesticHobbies($MemberID)
  {
    $sql = "SELECT vcdomesticHobbies, intMemberID
    FROM domestichobbies
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }


  public function getSocialActivites($MemberID)
  {
    $sql = "SELECT vcSocialActivities, intMemberID
    FROM socialactivities
    WHERE intMemberID = ? ";
    $query = $this->db->query($sql, array($MemberID));
    return $query->result_array();
  }


  public function loadDisabilityDetails()
  {
    $this->db->select('*');
    $this->db->from('disability');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  //residance details

  public function loadresidenceStatus()
  {
    $this->db->select('*');
    $this->db->from('residencestatus');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }


  public function loadCountries()
  {

    $this->db->select('*');
    $this->db->from('country');
    // $this->db->where('intCountryId !=', 1);
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

  public function getMaritalStatus()
  {
    $this->db->select('intMaritalStatusID,vcMaritalStatus_en AS vcMaritalStatus');
    $this->db->from('maritalstatus');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function saveResidenceDetails()
  {
    $mid = $this->session->userdata('member_id');

    $NoOfSubmitedForm = null;
    $data = array();

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }

    if ($NoOfSubmitedForm > 3) {
      $data = array(
        'intCityIdIfLiveInSL' => $this->input->post('city'),
        'intCountryId' => $this->input->post('country'),
        'vcAddOfSriLanka' => $this->input->post('AddressofSriLanka'),
        'intNativeDistrictId' => $this->input->post('nativeDistrict'),
        'intResidenceStatusID' =>  $this->input->post('ResidenceStatus')

      );
    } else {
      $data = array(
        'intCityIdIfLiveInSL' => $this->input->post('city'),
        'intCountryId' => $this->input->post('country'),
        'vcAddOfSriLanka' => $this->input->post('AddressofSriLanka'),
        'intNativeDistrictId' => $this->input->post('nativeDistrict'),
        'intResidenceStatusID' =>  $this->input->post('ResidenceStatus'),
        'intNoOfSubmitedForm' => 3
      );
    }
    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (3 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function saveBackgroundDetails()
  {
    $mid = $this->session->userdata('member_id');
    $subCasteID = null;
    $CasteID = $this->input->post('caste');
    if ($CasteID == 1) {
      $subCasteID = 1;
    } else if ($CasteID == 2) {
      $subCasteID = 2;
    } else if ($CasteID == 3) {
      $subCasteID = 3;
    } else {
      $subCasteID = $this->input->post('subCaste');
    }

    $NoOfSubmitedForm = null;
    $data = array();

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }

    if ($NoOfSubmitedForm > 4) {
      $data = array(
        'intMotherTongueID' => $this->input->post('motherTongue'),
        'intEthnicityID' => $this->input->post('ethnicity'),
        'intReligionID' => $this->input->post('religion'),
        'intCasteId' => $this->input->post('caste'),
        'intSubCasteId' => $subCasteID,
        'isPoliceReportCanProvide' => $this->input->post('policeReport')
      );
    } else {
      $data = array(
        'intMotherTongueID' => $this->input->post('motherTongue'),
        'intEthnicityID' => $this->input->post('ethnicity'),
        'intReligionID' => $this->input->post('religion'),
        'intCasteId' => $this->input->post('caste'),
        'intSubCasteId' => $subCasteID,
        'isPoliceReportCanProvide' => $this->input->post('policeReport'),
        'intNoOfSubmitedForm' => 4
      );
    }
    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);

    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (4 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function loadCaste()
  {

    $this->db->select('*');
    $this->db->from('caste');
    $this->db->order_by('intCasteSequence', 'desc');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function getMotherTongue()
  {
    $this->db->select('intMotherTongueID,vcMotherTongueName');
    $this->db->from('mothertongue');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function getEthnicity()
  {
    $this->db->select('intEthnicityID,vcEthnicityName');
    $this->db->from('ethnicity');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function getEducationLevel()
  {
    $this->db->select('intEducationLevelID,vcEducationLevel');
    $this->db->from('educationlevel');
    $this->db->order_by('intEducationLevelID', 'DESC');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function getEducationField()
  {
    $this->db->select('intEducationFieldID,vcEducationField');
    $this->db->from('educationfield');
    $this->db->order_by('intEducationFieldID', 'DESC');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function getDiet()
  {
    $this->db->select('intDietID,vcDietName');
    $this->db->from('diet');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function getMonthlyIncome()
  {
    $this->db->select('intMonthlyIncomeID,vcMonthlyIncome');
    $this->db->from('monthlyincome');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function getAssetValue()
  {
    $this->db->select('intAssetValueID,vcAssetValue');
    $this->db->from('assetvalue');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function getNoofChildren()
  {
    $this->db->select('intNoOfChildrenID,vcNoOfChildren_en AS vcNoOfChildren');
    $this->db->from('noofchildren');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

  public function loadSubCaste()
  {
    $subCaste = $this->input->post('casteID');
    $this->db->select('*');
    $this->db->from('subCaste');
    $this->db->where('intCasteId =', $subCaste);
    $this->db->order_by('intSubCasteId', 'asc');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function saveLifeStyleDetails()
  {
    $mid = $this->session->userdata('member_id');

    $languages = $this->input->post('language');

    $NoOfSubmitedForm = null;
    $dataMemberTb  = array();

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }

    if ($NoOfSubmitedForm > 5) {
      $dataMemberTb  = array(
        'intDietID' => $this->input->post('diet'),
        'vcDrink' => $this->input->post('drink'),
        'vcSmoke' => $this->input->post('smoke'),
        'vcDressAndMakeup' => $this->input->post('dressAndMakeup'),
        'vcUsedToTravel' => $this->input->post('usedToTravel'),
        'vcCalToParent' => $this->input->post('CallTtParents'),
        'vcCustoms' => $this->input->post('customs'),
        'vcLiveIn' => $this->input->post('LiveIn')
      );
    } else {
      $dataMemberTb  = array(
        'intDietID' => $this->input->post('diet'),
        'vcDrink' => $this->input->post('drink'),
        'vcSmoke' => $this->input->post('smoke'),
        'vcDressAndMakeup' => $this->input->post('dressAndMakeup'),
        'vcUsedToTravel' => $this->input->post('usedToTravel'),
        'vcCalToParent' => $this->input->post('CallTtParents'),
        'vcCustoms' => $this->input->post('customs'),
        'vcLiveIn' => $this->input->post('LiveIn'),
        'intNoOfSubmitedForm' => 5
      );
    }

    $this->db->trans_begin();

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $dataMemberTb);

    //insert languages speak
    $querylanguage_speakExist   = $this->db->query("select * from languagespeak where intMemberID ='$mid'"); //check whether record exist
    if ($querylanguage_speakExist->num_rows() > 0) {
      $this->db->delete('languagespeak', array('intMemberID' => $mid)); //delete records if exist
    }
    for ($i = 0; $i < count($languages); $i++) {
      $dataLanguageSpeakTb = array(
        'vcLanguage' => $languages[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('languagespeak', $dataLanguageSpeakTb);
    }

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      return false;
    } else {
      $this->db->trans_commit();
      return true;
    }
  }

  public function saveWhoAmIDetails()
  {
    $mid = $this->session->userdata('member_id');

    $NoOfSubmitedForm = null;

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }
    if ($NoOfSubmitedForm > 6) {
      $dataMemberTb  = array(
        'intOpennessToExperience' => str_replace("%", "", $this->input->post('OpennessToExperienceValue')),
        'intConscientiousness' => str_replace("%", "", $this->input->post('conscientiousnessValue')),
        'intExtrovertPersonality' => str_replace("%", "", $this->input->post('ExtrovertPersonalityValue')),
        'intIntrovertPersonality' => str_replace("%", "", $this->input->post('IntrovertPersonalityValue')),
        'intAgreeableness' => str_replace("%", "", $this->input->post('AgreeablenessValue')),
        'intNeuroticism' => str_replace("%", "", $this->input->post('NeuroticismValue')),
        'intFamilyBond' => str_replace("%", "", $this->input->post('FamilyBondValue')),
        'intMoney' => str_replace("%", "", $this->input->post('moneyValue')),
        'intReligious' => str_replace("%", "", $this->input->post('ReligiousValue')),
        'intPhysicallyActive' => str_replace("%", "", $this->input->post('PhysicallyActiveValue')),
        'IntPolitics' => str_replace("%", "", $this->input->post('PoliticsValue')),
        'intKnowledge' => str_replace("%", "", $this->input->post('KnowledgeValue')),
        'intLoveAffairs' => str_replace("%", "", $this->input->post('LoveAffairsValue')),
        'intimportanceVirginity' => str_replace("%", "", $this->input->post('ImportanceOfVirginityValue'))
      );
    } else {
      $dataMemberTb  = array(
        'intOpennessToExperience' => str_replace("%", "", $this->input->post('OpennessToExperienceValue')),
        'intConscientiousness' => str_replace("%", "", $this->input->post('conscientiousnessValue')),
        'intExtrovertPersonality' => str_replace("%", "", $this->input->post('ExtrovertPersonalityValue')),
        'intIntrovertPersonality' => str_replace("%", "", $this->input->post('IntrovertPersonalityValue')),
        'intAgreeableness' => str_replace("%", "", $this->input->post('AgreeablenessValue')),
        'intNeuroticism' => str_replace("%", "", $this->input->post('NeuroticismValue')),
        'intFamilyBond' => str_replace("%", "", $this->input->post('FamilyBondValue')),
        'intMoney' => str_replace("%", "", $this->input->post('moneyValue')),
        'intReligious' => str_replace("%", "", $this->input->post('ReligiousValue')),
        'intPhysicallyActive' => str_replace("%", "", $this->input->post('PhysicallyActiveValue')),
        'IntPolitics' => str_replace("%", "", $this->input->post('PoliticsValue')),
        'intKnowledge' => str_replace("%", "", $this->input->post('KnowledgeValue')),
        'intLoveAffairs' => str_replace("%", "", $this->input->post('LoveAffairsValue')),
        'intimportanceVirginity' => str_replace("%", "", $this->input->post('ImportanceOfVirginityValue')),
        'intNoOfSubmitedForm' => 6
      );
    }
    $this->db->trans_begin();

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $dataMemberTb);

    // save Enrichment Hobies Start
    $queryEnrichmentHobiesExist   = $this->db->query("select * from enrichmenthobbies where intMemberID ='$mid'"); //check whether record exist
    if ($queryEnrichmentHobiesExist->num_rows() > 0) {
      $this->db->delete('enrichmenthobbies', array('intMemberID' => $mid)); //delete records if exist
    }
    $EnrichmentHobies = $this->input->post('EnrichmentHobies');
    for ($i = 0; $i < count($EnrichmentHobies); $i++) {
      $dataEnrichmentHobbiesTB = array(
        'intMemberID' => $mid,
        'vcEnrichmentHobby' => $EnrichmentHobies[$i]
      );
      $this->db->insert('enrichmenthobbies', $dataEnrichmentHobbiesTB);
    }
    // save Enrichment Hobies END

    // save Sports / Physical activities Start
    $SportsPhysicalActivities = $this->input->post('Sports-Physicalactivities');
    $querySportsPhysicalActivitiesExists  = $this->db->query("select * from sportsphysicalactivities where intMemberID ='$mid'");
    if ($querySportsPhysicalActivitiesExists->num_rows() > 0) {
      $this->db->delete('sportsphysicalactivities', array('intMemberID' => $mid));
    }
    for ($i = 0; $i < count($SportsPhysicalActivities); $i++) {

      $dataSportsphysicalactivitiesTB = array(
        'intMemberID' => $mid,
        'vcSportsPhysicalActivities' => $SportsPhysicalActivities[$i]
      );
      $this->db->insert('sportsphysicalactivities', $dataSportsphysicalactivitiesTB);
    }
    // save Sports / Physical activities END

    // save Social Activites Start
    $SocialActivites = $this->input->post('SocialActivities');
    $querySocialActivitesExists  = $this->db->query("select * from socialactivities where intMemberID ='$mid'");
    if ($querySocialActivitesExists->num_rows() > 0) {
      $this->db->delete('socialactivities', array('intMemberID' => $mid));
    }
    for ($i = 0; $i < count($SocialActivites); $i++) {
      $dataSocialActivitesTB = array(
        'intMemberID' => $mid,
        'vcSocialActivities' => $SocialActivites[$i]
      );
      $this->db->insert('socialactivities', $dataSocialActivitesTB);
    }
    // save Social Activites END

    // save Creative Hobbies Start
    $CreativeHobbies = $this->input->post('CreatvieHobies');
    $queryCreativeHobbiesExists  = $this->db->query("select * from creativehobbies where intMemberID ='$mid'");
    if ($queryCreativeHobbiesExists->num_rows() > 0) {
      $this->db->delete('creativehobbies', array('intMemberID' => $mid));
    }
    for ($i = 0; $i < count($CreativeHobbies); $i++) {
      $dataCreativeHobbiesTB = array(
        'intMemberID' => $mid,
        'vcCreativeHobbies' => $CreativeHobbies[$i]
      );
      $this->db->insert('creativehobbies', $dataCreativeHobbiesTB);
    }
    // save Creative Hobbies END

    // save Collecting Hobbies Start
    $CollectingHobbies = $this->input->post('CollectingHobbies');
    $queryCollectingHobbiesExists  = $this->db->query("select * from collectinghobbies where intMemberID ='$mid'");
    if ($queryCollectingHobbiesExists->num_rows() > 0) {
      $this->db->delete('collectinghobbies', array('intMemberID' => $mid));
    }
    for ($i = 0; $i < count($CollectingHobbies); $i++) {
      $dataCollectingHobbiesTB = array(
        'intMemberID' => $mid,
        'vcCollectingHobby' => $CollectingHobbies[$i]
      );
      $this->db->insert('collectinghobbies', $dataCollectingHobbiesTB);
    }
    // save Collecting Hobbies END

    // save Outdoors hobbies Start
    $OutdoorsHobbies = $this->input->post('outdoorHobies');
    $queryOutdoorHobiesExists  = $this->db->query("select * from outdoorhobies where intMemberID ='$mid'");
    if ($queryOutdoorHobiesExists->num_rows() > 0) {
      $this->db->delete('outdoorhobies', array('intMemberID' => $mid));
    }
    for ($i = 0; $i < count($OutdoorsHobbies); $i++) {
      $dataOutdoorHobiesTB = array(
        'intMemberID' => $mid,
        'vcOutdoorHobies' => $OutdoorsHobbies[$i]
      );
      $this->db->insert('outdoorhobies', $dataOutdoorHobiesTB);
    }
    // save Outdoors hobbies END  


    // save Domestic Hobbies Start
    $DomesticHobbies = $this->input->post('domesticHobbies');
    $queryDomesticHobbiesExists  = $this->db->query("select * from domestichobbies where intMemberID ='$mid'");
    if ($queryDomesticHobbiesExists->num_rows() > 0) {
      $this->db->delete('domestichobbies', array('intMemberID' => $mid));
    }
    for ($i = 0; $i < count($DomesticHobbies); $i++) {
      $dataDomesticHobbiesTB = array(
        'intMemberID' => $mid,
        'vcdomesticHobbies' => $DomesticHobbies[$i]
      );
      $this->db->insert('domestichobbies', $dataDomesticHobbiesTB);
    }
    // save Domestic Hobbies END

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      return false;
    } else {
      $this->db->trans_commit();
      return true;
    }
  }

  public function saveEducationDetails()
  {
    $mid = $this->session->userdata('member_id');


    $NoOfSubmitedForm = null;
    $data = array();

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }

    if ($NoOfSubmitedForm > 7) {
      $data = array(
        'intEducationLevelID' => $this->input->post('EducationLevel'),
        'intEducationFieldID' => $this->input->post('EducationField'),
        'vcSclUniDescription' => $this->input->post('vcSclUniDescription')
      );
    } else {
      $data = array(
        'intEducationLevelID' => $this->input->post('EducationLevel'),
        'intEducationFieldID' => $this->input->post('EducationField'),
        'vcSclUniDescription' => $this->input->post('vcSclUniDescription'),
        'intNoOfSubmitedForm' => 7
      );
    }

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (7 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function loadWorkingWith()
  {
    $this->db->select('*');
    $this->db->from('workingwith');
    $this->db->order_by('intSequence', 'ASC');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function loadWorkingAsMainCat()
  {
    $this->db->select('*');
    $this->db->from('WorkingAsMainCat');
    $this->db->order_by('vcWorkingAsMainCat', 'ASC');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function loadWorkingAs()
  {
    $workingWith = $this->input->post('workingWith');
    $this->db->select('*');
    $this->db->from('workingas');
    $this->db->where('intWorkingWithId =', $workingWith);
    $this->db->order_by('vcWorkingAs', 'asc');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadWorkingSector()
  {
    $this->db->select('*');
    $this->db->from('workingsector');
    $this->db->order_by('vcWorkingsector', 'asc');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function saveCareerDetails()
  {
    $mid = $this->session->userdata('member_id');

    $NoOfSubmitedForm = null;
    $data = array();

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }

    if ($NoOfSubmitedForm > 8) {
      $data = array(
        'intWorkingWithId' => $this->input->post('workingWith'),
        'intWorkingAsId' => $this->input->post('workingAs'),
        'intWorkingsectorID' => $this->input->post('WorkingSector'),
        'vcWorkingLocation' => $this->input->post('workingLocation'),
        'intCityIdWorkingIn' => $this->input->post('city'),
        'intWorkingCountryID' => $this->input->post('country'),
        'vcDescribeCareer' => $this->input->post('describeCareer')
      );
    } else {
      $data = array(
        'intWorkingWithId' => $this->input->post('workingWith'),
        'intWorkingAsId' => $this->input->post('workingAs'),
        'intWorkingsectorID' => $this->input->post('WorkingSector'),
        'vcWorkingLocation' => $this->input->post('workingLocation'),
        'intCityIdWorkingIn' => $this->input->post('city'),
        'intWorkingCountryID' => $this->input->post('country'),
        'vcDescribeCareer' => $this->input->post('describeCareer'),
        'intNoOfSubmitedForm' => 8
      );
    }

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (8 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function savePersonalAssestDetailss()
  {
    $mid = $this->session->userdata('member_id');
    $incomeRoute = $this->input->post('incomeRoute');
    $assestRoute = $this->input->post('assestRoute');

    $NoOfSubmitedForm = null;
    $data = array();

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }

    if ($NoOfSubmitedForm > 9) {
      $data = array(
        'intMonthlyIncomeID' => $this->input->post('monthlyIncome'),
        'intAssetValueID' => $this->input->post('assetValue'),
        'vcOwnershipOfAssets' => $this->input->post('OwnershipOfAssets')
      );
    } else {
      $data = array(
        'intMonthlyIncomeID' => $this->input->post('monthlyIncome'),
        'intAssetValueID' => $this->input->post('assetValue'),
        'vcOwnershipOfAssets' => $this->input->post('OwnershipOfAssets'),
        'intNoOfSubmitedForm' => 9
      );
    }



    $this->db->trans_begin();

    //insert monthly income route data
    $queryMonthlyIncomeRoutesExists  = $this->db->query("select * from monthlyincomeroutes where intMemberID ='$mid'");
    if ($queryMonthlyIncomeRoutesExists->num_rows() > 0) {
      $this->db->delete('MonthlyIncomeRoutes', array('intMemberID' => $mid));
    }
    for ($i = 0; $i < count($incomeRoute); $i++) {
      $dataincomeRouteTb = array(
        'vcMonthlyIncomeRoute' => $incomeRoute[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('MonthlyIncomeRoutes', $dataincomeRouteTb);
    }

    //insert asset route data
    $queryAssetRoutesExists  = $this->db->query("select * from assetroutes where intMemberID ='$mid'");
    if ($queryAssetRoutesExists->num_rows() > 0) {
      $this->db->delete('assetroutes', array('intMemberID' => $mid));
    }
    for ($i = 0; $i < count($assestRoute); $i++) {
      $datainassestRouteTb = array(
        'vcAssetRoute' => $assestRoute[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('AssetRoutes', $datainassestRouteTb);
    }

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      return false;
    } else {
      $this->db->trans_commit();
      return true;
    }
  }
  public function saveFamilyDetailss()
  {
    $mid = $this->session->userdata('member_id');

    $NoOfSubmitedForm = null;

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $NoOfSubmitedForm = $row['intNoOfSubmitedForm'];
    }

    if ($NoOfSubmitedForm > 10) {
      $data = array(
        'intFamilyLocationID' => $this->input->post('district'),
        'vcFamilyType' => $this->input->post('Family-Type'),
        'vcFamilyValues' => $this->input->post('Family-Values'),
        'vcFamilyClass' => $this->input->post('Family-Class'),
        'vcFamilyCulture' => $this->input->post('Family-Culture'),
        'vcFatherStatus' => $this->input->post('Father-Status'),
        'vcMotherStatus' => $this->input->post('Mother-Status'),
        'vcFamilyDetails' => $this->input->post('Add-Family-Details')
      );
    } else {
      $data = array(
        'intFamilyLocationID' => $this->input->post('district'),
        'vcFamilyType' => $this->input->post('Family-Type'),
        'vcFamilyValues' => $this->input->post('Family-Values'),
        'vcFamilyClass' => $this->input->post('Family-Class'),
        'vcFamilyCulture' => $this->input->post('Family-Culture'),
        'vcFatherStatus' => $this->input->post('Father-Status'),
        'vcMotherStatus' => $this->input->post('Mother-Status'),
        'vcFamilyDetails' => $this->input->post('Add-Family-Details'),
        'intNoOfSubmitedForm' => 10
      );
    }
    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (10 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function saveAfterMarriageDetails()
  {
    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];
    $NoOfSubmitedForm = $userNameAndLastSubmitForm['noOfSubmittedForm'];

    if ($NoOfSubmitedForm > 11) {
      $data = array(
        'vcPrefferToLive' => $this->input->post('PrefferToLive'),
        'vcHelpFamily' => $this->input->post('HelpFamily'),
        'vcJobAfterMarriage' => $this->input->post('Job'),
        'vcEducationAfterMarriage' => $this->input->post('Education'),
        'vcChildrenLikes' => $this->input->post('ChildrenLikes'),
        'vcOtherNeeds' => $this->input->post('OtherNeeds')
      );
    } else {
      $data = array(
        'vcPrefferToLive' => $this->input->post('PrefferToLive'),
        'vcHelpFamily' => $this->input->post('HelpFamily'),
        'vcJobAfterMarriage' => $this->input->post('Job'),
        'vcEducationAfterMarriage' => $this->input->post('Education'),
        'vcChildrenLikes' => $this->input->post('ChildrenLikes'),
        'vcOtherNeeds' => $this->input->post('OtherNeeds'),
        'intNoOfSubmitedForm' => 11
      );
    }
    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (11 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function saveHoroscopeDetails()
  {
    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];
    $NoOfSubmitedForm = $userNameAndLastSubmitForm['noOfSubmittedForm'];

    if ($NoOfSubmitedForm > 12) {
      $data = array(
        'vcMatchingHoroscope' => $this->input->post('matchingHoroscope'),
        'vcZodiacSign' => $this->input->post('ZodiacSign'),
        'vcGanaya' => $this->input->post('Ganaya'),
        'vcNekatha' => $this->input->post('Nekatha'),
        'intRavi' => $this->input->post('Ravi'),
        'intMoon' => $this->input->post('Moon'),
        'intMars' => $this->input->post('Mars'),
        'intMercury' => $this->input->post('Mercury'),
        'intJupiter' => $this->input->post('Jupiter'),
        'intVenus' => $this->input->post('Venus'),
        'intSaturn' => $this->input->post('Saturn'),
        'intRahu' => $this->input->post('Rahu'),
        'intKethu' => $this->input->post('Kethu'),
        'vcPapaKendara' => $this->input->post('PapaKendara')
      );
    } else {
      $data = array(
        'vcMatchingHoroscope' => $this->input->post('matchingHoroscope'),
        'vcZodiacSign' => $this->input->post('ZodiacSign'),
        'vcGanaya' => $this->input->post('Ganaya'),
        'vcNekatha' => $this->input->post('Nekatha'),
        'intRavi' => $this->input->post('Ravi'),
        'intMoon' => $this->input->post('Moon'),
        'intMars' => $this->input->post('Mars'),
        'intMercury' => $this->input->post('Mercury'),
        'intJupiter' => $this->input->post('Jupiter'),
        'intVenus' => $this->input->post('Venus'),
        'intSaturn' => $this->input->post('Saturn'),
        'intRahu' => $this->input->post('Rahu'),
        'intKethu' => $this->input->post('Kethu'),
        'vcPapaKendara' => $this->input->post('PapaKendara'),
        'intNoOfSubmitedForm' => 12
      );
    }
    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (12 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function saveAboutYourselfAndPartner()
  {
    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];
    $NoOfSubmitedForm = $userNameAndLastSubmitForm['noOfSubmittedForm'];

    if ($NoOfSubmitedForm > 14) {
      $data = array(
        'vcAboutYourselfAndPartner' => $this->input->post('aboutYourSelfAndPartner')
      );
    } else {
      $data = array(
        'vcAboutYourselfAndPartner' => $this->input->post('aboutYourSelfAndPartner'),
        'intNoOfSubmitedForm' => 14
      );
    }

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->affected_rows() == 1) {
      return true;
    } else {
      if (14 <= $NoOfSubmitedForm) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function savePrivacySettings()
  {
    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];
    $NoOfSubmitedForm = $userNameAndLastSubmitForm['noOfSubmittedForm'];

    if ($NoOfSubmitedForm > 15) {
      $data = array(
        'intMyPhotosPrivacy' => $this->input->post('MyPhotos'),
        'intAssetsDetailsPrivacy' => $this->input->post('AssetsDetails'),
        'intFamilyDetailsPrivacy' => $this->input->post('FamilyDetails'),
        'intHoroscopeDetailsPrivacy' => $this->input->post('Horoshcope')
      );
    } else {
      $data = array(
        'intMyPhotosPrivacy' => $this->input->post('MyPhotos'),
        'intAssetsDetailsPrivacy' => $this->input->post('AssetsDetails'),
        'intFamilyDetailsPrivacy' => $this->input->post('FamilyDetails'),
        'intHoroscopeDetailsPrivacy' => $this->input->post('Horoshcope'),
        'intNoOfSubmitedForm' => 15
      );
    }

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);
    if ($this->db->affected_rows() < 0) {
      return False;
    } else {
      return true;
    }
  }

  public function saveUploadedImageName($imgName, $imgType)
  {
    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];
    $data = array(

      'intImageName' => $imgName,
      'vcImageType' => $imgType,
      'intMemberID' => $mid

    );
    $this->db->insert('memberimage', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function LoadUploadedImages()
  {
    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];

    $this->db->select('*');
    $this->db->from('memberimage');
    $this->db->where('intMemberID =', $mid);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function removeMemberImage()
  {
    $imgID = $this->input->post('imgID');
    $this->db->delete('memberimage', array('intImageID' => $imgID));
  }
  public function saveProfilePicture()
  {
    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];

    $ClearProFilePic = array(
      'isProfilePicture' => 0
    );

    $dataUpdateMemberTB = array(
      'intNoOfSubmitedForm' => 13
    );

    $this->db->trans_begin();

    $this->db->where('intMemberID', $mid);
    $this->db->update('memberimage', $ClearProFilePic);

    $imgID = $this->input->post('imgID');
    $data = array(
      'isProfilePicture' => 1
    );
    $this->db->where('intImageID', $imgID);
    $this->db->update('memberimage', $data);

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $dataUpdateMemberTB);

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      return false;
    } else {
      $this->db->trans_commit();
      return true;
    }
  }

  public function getMidAndLastSubmitFrom()
  {
    $mid = $this->session->userdata('member_id');

    $userNameAndLastSubmitForm = array(
      'mid' => $mid,
      'noOfSubmittedForm' => null
    );

    $this->db->select('intNoOfSubmitedForm');
    $this->db->from('member');
    $this->db->where('intMemberID', $mid);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $userNameAndLastSubmitForm['noOfSubmittedForm'] = $row['intNoOfSubmitedForm'];
    }
    return $userNameAndLastSubmitForm;
  }

  public function getLastUploadedImageName()
  {

    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];

    $result = array(
      'status' => false,
      'lastUploadImageName' => null
    );

    $this->db->select('intImageName');
    $this->db->from('memberimage');
    $this->db->where('intMemberID', $mid);
    $this->db->order_by("intImageName", "desc");
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $row = $query->row_array();
      $result['status'] = true;
      $result['lastUploadImageName'] = $row['intImageName'];
    }
    return $result;
  }

  public function LoadMaritalStatusData()
  {

    $this->db->select('*');
    $this->db->from('maritalstatus');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  // public function LoadReligionData()
  // {

  //   $this->db->select('*');
  //   $this->db->from('religion');
  //   $query = $this->db->get();

  //   if ($query->num_rows() > 0) {
  //     return $query->result();
  //   } else {
  //     return false;
  //   }
  // }

  public function LoadNoOfChildrenData()
  {

    $this->db->select('*');
    $this->db->from('noofchildren');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadEthnicityData()
  {

    $this->db->select('*');
    $this->db->from('ethnicity');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadMotherToungeData()
  {

    $this->db->select('*');
    $this->db->from('mothertongue');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadLiveInSriLankaData()
  {

    $this->db->select('*');
    $this->db->from('province');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadEducationLevelData()
  {
    $this->db->select('*');
    $this->db->from('educationlevel');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadSummerizedEducationLevelData()
  {
    $this->db->select('*');
    $this->db->from('educationlevelsumerized');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadSummerizedMonthtlyIncomeData()
  {
    $this->db->select('*');
    $this->db->from('monthlyincomesummerised');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadSummerizedAssetValuelData()
  {
    $this->db->select('*');
    $this->db->from('assetvaluesummerised');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadAnyDisabilityData()
  {
    $this->db->select('*');
    $this->db->from('disability');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function LoadDietData()
  {
    $this->db->select('*');
    $this->db->from('diet');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }
  public function ftToCm($value)
  {
    $result =  str_replace("'", ".", $value);
    $result =  str_replace('"', " ", $result);
    return (int)$result * 30.48;
  }

  public function savePartnerPreference()
  {

    $userNameAndLastSubmitForm  = $this->getMidAndLastSubmitFrom();
    $mid = $userNameAndLastSubmitForm['mid'];
    $NoOfSubmitedForm = $userNameAndLastSubmitForm['noOfSubmittedForm'];

    $MartialStatus = $this->input->post('MartialStatusDrp');
    $NoOfChildren = $this->input->post('NoOfChildrenDrp');
    $Religion = $this->input->post('ReligionDrp');
    $Ethnicity = $this->input->post('EthnicityDrp');
    $motherTongue = $this->input->post('motherToungeDrp');
    $LiveInSriLanka = $this->input->post('LiveInSriLankaDrp');
    $EducationSummerizeLevel = $this->input->post('EducationLevelDrp');
    // $WorkingWith = $this->input->post('WorkingWithDrp');
    $CareerLevel = $this->input->post('CareerLevelDrp');
    $MonthlyIncomeSummerizedLevel = $this->input->post('MonthlyIncomeDrp');
    $AssetValueSummerizedLevel = $this->input->post('AssetValueDrp');
    $AnyDisability = $this->input->post('AnyDisabilityDrp');
    $Diet = $this->input->post('DietDrp');


    $memberPreferedFromAge = $this->input->post('memberPreferedFromAge');
    $memberPreferedToAge = $this->input->post('memberPreferedToAge');
    $memberPreferedFromHeight  = $this->ftToCm($this->input->post('memberPreferedFromHeight'));
    $memberPreferedToHeight  = $this->ftToCm($this->input->post('memberPreferedToHeight'));

    // if ($NoOfSubmitedForm == 16) {
    $data = array(
      'intMemberPreferedHeightFrom' => $memberPreferedFromHeight,
      'intMemberPreferedHeightTo' => $memberPreferedToHeight,
      'IntMemberPreferedAgeFrom' => $memberPreferedFromAge,
      'IntMemberPreferedAgeTo' => $memberPreferedToAge,
      'intMemberAccountStatusID' => 4
    );

    $this->db->trans_begin();
    //* Insert Prefered Martial Status data

    $this->db->delete('memberpreferedmaritalstatus', array('intMemberID' => $mid));

    for ($i = 0; $i < count($MartialStatus); $i++) {
      $dataPreferedMartialStatusTb = array(
        'intMaritalStatusID' => $MartialStatus[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberpreferedmaritalstatus', $dataPreferedMartialStatusTb);
    }

    //* Insert Prefered Children data

    $this->db->delete('memberpreferednoofchildren', array('intMemberID' => $mid));

    for ($i = 0; $i < count($NoOfChildren); $i++) {
      $dataPreferedOfChildrenTb = array(
        'intNoOfChildrenID' => $NoOfChildren[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberpreferednoofchildren', $dataPreferedOfChildrenTb);
    }

    //* Insert Prefered Religion data

    $this->db->delete('memberpreferedreligion', array('intMemberID' => $mid));

    for ($i = 0; $i < count($Religion); $i++) {
      $dataPpreferedreligionTb = array(
        'intReligionID' => $Religion[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberpreferedreligion', $dataPpreferedreligionTb);
    }

    //* Insert Prefered Ethnicity data

    $this->db->delete('memberpreferedethnicity', array('intMemberID' => $mid));

    for ($i = 0; $i < count($Ethnicity); $i++) {
      $dataPpreferedEthnicityTb = array(
        'intEthnicityID' => $Ethnicity[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberpreferedethnicity', $dataPpreferedEthnicityTb);
    }

    //* Insert Mother Tounge data

    $this->db->delete('memberpreferedmothertongue', array('intMemberID' => $mid));
    // }
    for ($i = 0; $i < count($motherTongue); $i++) {
      $dataPpreferedMotherToungueTb = array(
        'intMotherTongueID' => $motherTongue[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberpreferedmothertongue', $dataPpreferedMotherToungueTb);
    }

    //* Insert Live in Sri Lanka data

    $this->db->delete('memberpreferedliveinsrilanka', array('intMemberID' => $mid));
    // }
    for ($i = 0; $i < count($LiveInSriLanka); $i++) {
      $dataPpreferedLiveInSriLankaTb = array(
        'IntProvinceId' => $LiveInSriLanka[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberpreferedliveinsrilanka', $dataPpreferedLiveInSriLankaTb);
    }

    //* Insert member prefered education level data

    $this->db->delete('memberpreferededucationlevel', array('intMemberID' => $mid));

    for ($i = 0; $i < count($EducationSummerizeLevel); $i++) {
      if ($EducationSummerizeLevel[$i] == 1) {  //1 : With Degree
        for ($j = 1; $j <= 6; $j++) {
          $dataPpreferedEducationLevelTb = array(
            'intEducationLevelID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferededucationlevel', $dataPpreferedEducationLevelTb);
        }
      }
      if ($EducationSummerizeLevel[$i] == 2) {  //2 : Up to A/L
        for ($j = 7; $j <= 11; $j++) {
          $dataPpreferedEducationLevelTb = array(
            'intEducationLevelID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferededucationlevel', $dataPpreferedEducationLevelTb);
        }
      }

      if ($EducationSummerizeLevel[$i] == 3) {  //3 : Up to O/L
        for ($j = 12; $j <= 14; $j++) {
          $dataPpreferedEducationLevelTb = array(
            'intEducationLevelID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferededucationlevel', $dataPpreferedEducationLevelTb);
        }
      }
    }

    //* Insert member prefered working with data

    $this->db->delete('memberpreferedworkingwith', array('intMemberID' => $mid));
    // }
    for ($i = 0; $i < count($CareerLevel); $i++) {
      $dataPpreferedWorkingWithTb = array(
        'intMemberpreferedworkingwithID' => $CareerLevel[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberpreferedworkingwith', $dataPpreferedWorkingWithTb);  // error line
    }

    //* Insert member prefered Monthly Income data

    $this->db->delete('memberpreferedmonthlyincome', array('intMemberID' => $mid));

    for ($i = 0; $i < count($MonthlyIncomeSummerizedLevel); $i++) {
      if ($MonthlyIncomeSummerizedLevel[$i] == 1) {  //1 : None to 75000
        for ($j = 1; $j <= 4; $j++) {
          $dataPpreferedMonthlyIncomeTb = array(
            'intMonthlyIncomeID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferedmonthlyincome', $dataPpreferedMonthlyIncomeTb);
        }
      }
      if ($MonthlyIncomeSummerizedLevel[$i] == 2) {  //2 : 75000 to 150000
        for ($j = 5; $j <= 6; $j++) {
          $dataPpreferedMonthlyIncomeTb = array(
            'intMonthlyIncomeID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferedmonthlyincome', $dataPpreferedMonthlyIncomeTb);
        }
      }
      if ($MonthlyIncomeSummerizedLevel[$i] == 3) {  //2 : 150000 to 250000
        for ($j = 7; $j <= 8; $j++) {
          $dataPpreferedMonthlyIncomeTb = array(
            'intMonthlyIncomeID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferedmonthlyincome', $dataPpreferedMonthlyIncomeTb);
        }
      }
      if ($MonthlyIncomeSummerizedLevel[$i] == 4) {  //2 : Over 250000
        for ($j = 9; $j <= 11; $j++) {
          $dataPpreferedMonthlyIncomeTb = array(
            'intMonthlyIncomeID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferedmonthlyincome', $dataPpreferedMonthlyIncomeTb);
        }
      }
    }

    //* Insert member prefered Asset Value data

    $this->db->delete('memberpreferedassetvalue', array('intMemberID' => $mid));


    for ($i = 0; $i < count($AssetValueSummerizedLevel); $i++) {
      if ($AssetValueSummerizedLevel[$i] == 1) {  //1 : None to 500000
        for ($j = 1; $j <= 4; $j++) {
          $dataPpreferedAssetValueTb = array(
            'intAssetValueID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferedassetvalue', $dataPpreferedAssetValueTb);
        }
      }
      if ($AssetValueSummerizedLevel[$i] == 2) {  //2 : 500000 to 2.5 M
        for ($j = 5; $j <= 9; $j++) {
          $dataPpreferedAssetValueTb = array(
            'intAssetValueID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferedassetvalue', $dataPpreferedAssetValueTb);
        }
      }
      if ($AssetValueSummerizedLevel[$i] == 3) {  //3 : 2.5 M to 7.5M
        for ($j = 10; $j <= 13; $j++) {
          $dataPpreferedAssetValueTb = array(
            'intAssetValueID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferedassetvalue', $dataPpreferedAssetValueTb);
        }
      }
      if ($AssetValueSummerizedLevel[$i] == 4) {  //4 : Over 7.5M
        for ($j = 14; $j <= 20; $j++) {
          $dataPpreferedAssetValueTb = array(
            'intAssetValueID' => $j,
            'intMemberID' => $mid
          );
          $this->db->insert('memberpreferedassetvalue', $dataPpreferedAssetValueTb);
        }
      }
    }

    //* Insert member prefered Any Disability data

    $this->db->delete('memberpreferedanydisability', array('intMemberID' => $mid));

    for ($i = 0; $i < count($AnyDisability); $i++) {
      $dataPpreferedAnyDisabilityTb = array(
        'intDisabilityID' => $AnyDisability[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberpreferedanydisability', $dataPpreferedAnyDisabilityTb);
    }

    //* Insert member prefered Diet data

    $this->db->delete('memberprefereddiet', array('intMemberID' => $mid));

    for ($i = 0; $i < count($Diet); $i++) {
      $dataPpreferedDietTb = array(
        'intDietID' => $Diet[$i],
        'intMemberID' => $mid
      );
      $this->db->insert('memberprefereddiet', $dataPpreferedDietTb);
    }

    $this->db->where('intMemberID', $mid);
    $this->db->update('member', $data);

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      return false;
    } else {
      $this->db->trans_commit();
      return true;
    }
  }



  //-----------------------------------
  //END DK
  //-----------------------------------

  //-----------------------------------
  //Create Account - Ramod
  //-----------------------------------

  public function LoadReligionStatusDetails()
  {

    $this->db->select('intReligionID, vcReligion');
    $this->db->from('religion');
    $this->db->order_by("intReligionSequence", "desc");
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
      return $query->result_array();
    } else {
      return false;
    }
  }

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

    $year =  $this->input->post('birth_year');
    $month =  $this->input->post('birth_month');
    $day =  $this->input->post('birth_day');

    $bDate = $year . "-" . $month . "-" . $day;


    $query = $this->db->query("SELECT fnGenerateMemberCode('" . $this->input->post('gender') . "') AS MemberCode");
    $ret = $query->row();
    $MemberCode = $ret->MemberCode;

    $data = array(
      'vcMemberCode' => $MemberCode,
      'vcNickName' => $this->input->post('short_name'),
      'vcCountryCode' => $this->input->post('country_code'),
      'vcMobileNo' => substr($this->input->post('mobile_no'), 1), // Remove 1st number (zero)
      'vcPassword' => $this->password_hash($this->input->post('password')),
      'vcEmail' =>  $this->input->post('email'),
      'vcProvidingInformationType' => $this->input->post('provide_infor'),
      'vcGender' => $this->input->post('gender'),
      'dtDOB' => $bDate,
      'intMaritalStatusID' => $this->input->post('marital_status'),
      'intNoOfChildrenID' => $this->input->post('num_of_child'),
      'intMemberAccountStatusID' => 1,
      'vcMarriageType' => $this->input->post('marry_by'),
      'intNoOfSubmitedForm' => 1,
    );

    $this->db->insert('member', $data);
    $userID = $this->db->insert_id();

    $data = array(
      'vcEmailCode' => $random_EmailCode,
      'intMemberID' => $userID,
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
    // $this->email->message("Dear member,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://localhost:8012/sathutulanka/Registration/VerificatinEmail/" . $random_EmailCode . "\n" . "\n\nThanks\nAdmin Team");
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
                              <p>' . base_url() . 'CreateAccount/EmailVerification/' . $random_EmailCode . '<p>
                               
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

    $sql = "UPDATE registerverification R INNER JOIN member as U on R.intMemberID = U.intMemberID SET R.IsEmailVerified = 1 , U.intMemberAccountStatusID = 2, dtEmailVerifiedDate = '$nowDateTime'  WHERE R.vcEmailCode = ? AND (R.IsOTPVerified IS NULL OR R.IsOTPVerified = 0)";
    $this->db->query($sql, array($verificationText));
    return $this->db->affected_rows();
  }

  public function sendOTP($verificationText, $ReSend)
  {
    date_default_timezone_set('Asia/Colombo');
    $nowDateTime = date('Y-m-d h:i:s');

    $digits = 4;
    $otpCode =  rand(pow(10, $digits - 1), pow(10, $digits) - 1);
    $userData = $this->getMemberData($verificationText);
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
        "number": "' . $mobileNO . '",
        "mask": "SL Marriage",
        "text": "Your OTP code is ' . $otpCode . '. Please insert your code in the form to complete your Sathutu Lanka registration.",
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
    } else {
      $sql = "UPDATE registerverification SET vcOTP = $otpCode , dtOTPSentDate = '$nowDateTime' , IsOTPVerified = 0 , intOTPSentCount = 1 WHERE vcEmailCode = ?";
      $this->db->query($sql, array($verificationText));
      return $this->db->affected_rows();
    }
  }

  public function getMemberData($verificationText)
  {
    $sql = "SELECT concat(U.vcCountryCode,vcMobileNo) AS vcMobileNo,vcMobileNo AS Without94,RE.vcOTP,U.intMemberID,U.vcEmail,RE.vcEmailCode, RE.intOTPSentCount,U.vcCountryCode FROM member AS U
    INNER JOIN registerverification AS RE ON U.intMemberID = RE.intMemberID
    WHERE RE.vcEmailCode =  ? ";
    $query = $this->db->query($sql, array($verificationText));
    return $query->row_array();
  }

  public function upDateMobileNumber($mobile_no, $emailVerificationCode, $countryCode)
  {
    if ($mobile_no) {
      $sql = "UPDATE  member as U
      INNER JOIN registerverification as V on U.intMemberID = V.intMemberID
      SET U.vcMobileNo ='$mobile_no', U.vcCountryCode = '$countryCode'
      WHERE V.vcEmailCode = ?";
      $this->db->query($sql, array($emailVerificationCode));
      return $this->db->affected_rows();
    }
  }

  public function otpVerification($otpNumber, $emailVerificationCode)
  {
    date_default_timezone_set('Asia/Colombo');
    $nowDateTime = date('Y-m-d h:i:s');
    if ($otpNumber) {
      $sql = "UPDATE  member as U
      INNER JOIN registerverification as V on U.intMemberID = V.intMemberID
      SET V.IsOTPVerified = 1 , V.dtOTPVerifiedDate = '$nowDateTime' , U.intMemberAccountStatusID = 3
      WHERE vcOTP = ? AND V.vcEmailCode = ?";
      $this->db->query($sql, array($otpNumber, $emailVerificationCode));
      return $this->db->affected_rows();
    }
  }


  public function getMemberBasicData($email)
  {

    $this->db->select('intMemberID,vcEmail');
    $this->db->from('member');
    $this->db->where('vcEmail', $email);
    $query = $this->db->get();

    return $query->row_array();
  }

  public function getPasswordRestLink($memberID, $email)
  {

    $data = array(
      'intMemberID' => $memberID
    );

    $sql = "UPDATE PasswordResetRequest SET IsInvalid = 1 WHERE intMemberID = ?";

    $random_EmailCode = substr(md5(uniqid(rand(), true)), 16, 16);
    date_default_timezone_set('Asia/Colombo');
    $nowDateTime = date('Y-m-d h:i:s');

    $data_2 = array(
      'intMemberID' => $memberID,
      'vcEmailCode' => $random_EmailCode,
      'dtPasswordResetLinkSentDate' => $nowDateTime,
    );

    $this->db->trans_begin();

    $this->db->query($sql, array($data));

    $this->db->insert('PasswordResetRequest', $data_2);

    $resetLink = base_url() . "CreateAccount/ResetPassword/" . $random_EmailCode;

    if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
      $response['success'] = false;
    } else {
      $this->db->trans_commit();
      $this->sendPasswordResetRequestEmail($email, $resetLink); //Send Email
      $response['success'] = true;
    }

    return $response;
  }

  public function sendPasswordResetRequestEmail($email, $resetLink)
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
    $this->email->subject("Sathutu Lanka Password Reset Link");
    // $this->email->message("Dear member,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://localhost:8012/sathutulanka/Registration/VerificatinEmail/" . $random_EmailCode . "\n" . "\n\nThanks\nAdmin Team");
    $message = "";
    $message = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <style type="text/css">
        body {
          margin: 0;
          padding: 0;
        }

        table,
        td,
        tr {
          vertical-align: top;
          border-collapse: collapse;
        }

        * {
          line-height: inherit;
        }

        a[x-apple-data-detectors=true] {
          color: inherit !important;
          text-decoration: none !important;
        }
      </style>
      <style type="text/css" id="media-query">
        @media (max-width: 660px) {

          .block-grid,
          .col {
            min-width: 320px !important;
            max-width: 100% !important;
            display: block !important;
          }

          .block-grid {
            width: 100% !important;
          }

          .col {
            width: 100% !important;
          }

          .col_cont {
            margin: 0 auto;
          }

          img.fullwidth,
          img.fullwidthOnMobile {
            width: 100% !important;
          }

          .no-stack .col {
            min-width: 0 !important;
            display: table-cell !important;
          }

          .no-stack.two-up .col {
            width: 50% !important;
          }

          .no-stack .col.num2 {
            width: 16.6% !important;
          }

          .no-stack .col.num3 {
            width: 25% !important;
          }

          .no-stack .col.num4 {
            width: 33% !important;
          }

          .no-stack .col.num5 {
            width: 41.6% !important;
          }

          .no-stack .col.num6 {
            width: 50% !important;
          }

          .no-stack .col.num7 {
            width: 58.3% !important;
          }

          .no-stack .col.num8 {
            width: 66.6% !important;
          }

          .no-stack .col.num9 {
            width: 75% !important;
          }

          .no-stack .col.num10 {
            width: 83.3% !important;
          }

          .video-block {
            max-width: none !important;
          }

          .mobile_hide {
            min-height: 0px;
            max-height: 0px;
            max-width: 0px;
            display: none;
            overflow: hidden;
            font-size: 0px;
          }

          .desktop_hide {
            display: block !important;
            max-height: none !important;
          }
        }
      </style>
    </head>

    <body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f8f8f9;">
      <table class="nl-container" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f8f8f9; width: 100%;" cellpadding="0" cellspacing="0" role="presentation" width="100%" bgcolor="#f8f8f9" valign="top">
        <tbody>
          <tr style="vertical-align: top;" valign="top">
            <td style="word-break: break-word; vertical-align: top;" valign="top">
              <div style="background-color:transparent;">
                <div class="block-grid " style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
                    <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                      <div class="col_cont" style="width:100% !important;">
                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                          <div class="img-container center fixedwidth" align="center" style="padding-right: 0px;padding-left: 0px;">
                            <a href="www.sathutulanka.lk" target="_blank" style="outline:none" tabindex="-1">
                              <img class="center fixedwidth" align="center" border="0" src="' . base_url('resources/images/navbar-logo-en.png') . '" alt="SathutuLanka.lk" title="Your logo." style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 160px; max-width: 100%; display: block;" width="160"></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div style="background-color:transparent;">
                <div class="block-grid " style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #fff;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">
                    <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                      <div class="col_cont" style="width:100% !important;">
                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                          <div class="img-container center autowidth" align="center" style="padding-right: 0px;padding-left: 0px;">
                                                        <a href="www.sathutulanka.lk" target="_blank" style="outline:none" tabindex="-1"><img class="center autowidth" align="center" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/4036/___passwordreset.gif" alt="Image of lock &amp; key." title="Image of lock &amp; key." style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 640px; max-width: 100%; display: block;" width="640"></a>
                          </div>
                          <table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" role="presentation" valign="top">
                            <tbody>
                              <tr style="vertical-align: top;" valign="top">
                                <td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">
                                  <table class="divider_content" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" align="center" role="presentation" valign="top">
                                    <tbody>
                                      <tr style="vertical-align: top;" valign="top">
                                        <td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <div style="color:#555555;font-family:\' Helvetica Neue\' , Helvetica, Arial, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
                            <div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; font-family: \' Helvetica Neue\' , Helvetica, Arial, sans-serif; color: #555555; mso-line-height-alt: 14px;">
                              <p style="margin: 0; font-size: 30px; line-height: 1.2; text-align: center; word-break: break-word; mso-line-height-alt: 36px; margin-top: 0; margin-bottom: 0;"><span style="font-size: 30px; color: #2b303a;"><strong>Forgot Your Password?</strong></span></p>
                            </div>
                          </div>
                          <div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
                            <div class="txtTinyMce-wrapper" style="line-height: 1.5; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 18px;">
                              <p style="margin: 0; font-size: 14px; line-height: 1.5; word-break: break-word; text-align: left; mso-line-height-alt: 21px; margin-top: 0; margin-bottom: 0;">Hello, VirajLasitha, someone requested to reset the password for this account.</p>
                            </div>
                          </div>
                          <div class="button-container" align="center" style="padding-top:0px;padding-right:10px;padding-bottom:0px;padding-left:10px;">
                                                    <a href="' . $resetLink . '" target="_blank" style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #f7a50c; border-radius: 35px; -webkit-border-radius: 35px; -moz-border-radius: 35px; width: auto; width: auto; border-top: 1px solid #f7a50c; border-right: 1px solid #f7a50c; border-bottom: 1px solid #f7a50c; border-left: 1px solid #f7a50c; padding-top: 15px; padding-bottom: 15px; font-family: \' Helvetica Neue\' , Helvetica, Arial, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;"><span style="padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;letter-spacing:undefined;"><span style="font-size: 16px; margin: 0; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;"><strong>RESET PASSWORD</strong></span></span></a>
                          </div>
                          <div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:10px;padding-right:10px;padding-bottom:0px;padding-left:10px;">
                            <div class="txtTinyMce-wrapper" style="line-height: 1.5; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 18px;">
                              <p style="margin: 0; line-height: 1.5; word-break: break-word; mso-line-height-alt: 18px; margin-top: 0; margin-bottom: 0;">If it was a mistake, just ignore this email.</p>
                              <p style="margin: 0; line-height: 1.5; word-break: break-word; mso-line-height-alt: 18px; margin-top: 0; margin-bottom: 0;">If the previous link does not work, try to copy and paste the following URL in your browser\' s address bar:</p>
                              <p style="margin: 0; line-height: 1.5; word-break: break-word; mso-line-height-alt: 18px; margin-top: 0; margin-bottom: 0;"></p>
                              <p style="margin: 0; line-height: 1.5; word-break: break-word; mso-line-height-alt: 18px; margin-top: 0; margin-bottom: 0;"></p>
                            </div>
                          </div>
                          <div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                            <div class="txtTinyMce-wrapper" style="font-size: 14px; line-height: 1.2; color: #555555; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 17px;">
                              <p style="margin: 0; font-size: 14px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 17px; margin-top: 0; margin-bottom: 0;"><a href="' . $resetLink . '" target="_blank" rel="noopener" style="color: #0068A5;">' . $resetLink . '</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div style="background-color:transparent;">
                <div class="block-grid " style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #fff;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">
                    <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                      <div class="col_cont" style="width:100% !important;">
                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
                          <div style="color:#a0a0a0;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;">
                            <div class="txtTinyMce-wrapper" style="font-size: 14px; line-height: 1.2; color: #a0a0a0; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 17px;">
                              <p style="margin: 0; font-size: 11px; line-height: 1.2; word-break: break-word; mso-line-height-alt: 13px; margin-top: 0; margin-bottom: 0;"><span style="font-size: 11px;">This is an automatically generated email, please do not reply.</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div style="background-color:transparent;">
                <div class="block-grid " style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #570c32;">
                  <div style="border-collapse: collapse;display: table;width: 100%;background-color:#570c32;">
                    <div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
                      <div class="col_cont" style="width:100% !important;">
                        <div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
                          <div style="color:#ffffff;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:15px;padding-right:40px;padding-bottom:15px;padding-left:40px;">
                            <div class="txtTinyMce-wrapper" style="line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #ffffff; mso-line-height-alt: 14px;">
                              <p style="margin: 0; font-size: 12px; line-height: 1.2; word-break: break-word; text-align: center; mso-line-height-alt: 14px; margin-top: 0; margin-bottom: 0;"><span style="color: #bcbcbc; font-size: 12px;">Sathutu Lanka Copyright © 2021</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </body>

    </html>
    ';
    $this->email->message($message);
    $this->email->send();
  }
}
