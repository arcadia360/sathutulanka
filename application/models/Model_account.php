<?php
class Model_account extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getUserDate($UserID)
  {
    $sql = "SELECT intUserID, vcNickName, vcCountryCode, vcMobileNo, vcPassword, vcEmail, vcProvidingInformationType, vcGender, dtDOB, vcMaritalStatus, vcNoOfChildren, intUserAccountStatusTypeID, vcMarriageType, intNoOfSubmitedForm, intHeight, intWeightFrom, intWeightTo, intBodyTypeID, intSkinColourID, isDisability, vcBloodGroup, isHealthInfo, vcMotherTounge, vcEthnicity, vcReligion, isPoliceReportCanProvide
      FROM member WHERE intUserID =   ? ";
    $query = $this->db->query($sql, array($UserID));
    return $query->row_array();
  }
}
