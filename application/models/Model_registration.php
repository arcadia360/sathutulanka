<?php
class Model_registration extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function savePhysicalStatus()
  {
    $weight = $this->input->post('weight');
    // arrange from weight and to wight
    $weightsArray = explode("-", $weight);
    $fromWeight = $weightsArray[0];
    $toWeight = $weightsArray[1];

    $id = 1;

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
    );
    $this->db->where('intUserID', $id);
    $this->db->update('user', $data);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function getProvidingInformationType($language_id)
  {
    if ($language_id == 1) { // English
      $sql = "SELECT  intProvidingInformationTypeID, vcProvidingInformationType_en AS vcProvidingInformationType FROM providinginformationtype";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 2) { // Sinhala
      $sql = "SELECT  intProvidingInformationTypeID, vcProvidingInformationType_si AS vcProvidingInformationType FROM providinginformationtype";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 3) { // Tamil
      $sql = "SELECT  intProvidingInformationTypeID, vcProvidingInformationType_ta AS vcProvidingInformationType FROM providinginformationtype";
      $query = $this->db->query($sql);
      return $query->result_array();
    }
  }

  public function loadCountries()
  {
    $query = $this->db->query("SELECT * FROM country");
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }

  public function getProvidingInformationType($language_id)
  {
    if ($language_id == 1) { // English
      $sql = "SELECT  intProvidingInformationTypeID, vcProvidingInformationType_en AS vcProvidingInformationType FROM providinginformationtype";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 2) { // Sinhala
      $sql = "SELECT  intProvidingInformationTypeID, vcProvidingInformationType_si AS vcProvidingInformationType FROM providinginformationtype";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 3) { // Tamil
      $sql = "SELECT  intProvidingInformationTypeID, vcProvidingInformationType_ta AS vcProvidingInformationType FROM providinginformationtype";
      $query = $this->db->query($sql);
      return $query->result_array();
    }
  }

  public function getMaritalStatus($language_id)
  {
    if ($language_id == 1) { // English
      $sql = "SELECT intMaritalStatusID, vcMaritalStatus_en AS vcMaritalStatus FROM maritalstatus";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 2) { // Sinhala
      $sql = "SELECT intMaritalStatusID, vcMaritalStatus_si AS vcMaritalStatus FROM maritalstatus";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 3) { // Tamil
      $sql = "SELECT intMaritalStatusID, vcMaritalStatus_ta AS vcMaritalStatus FROM maritalstatus";
      $query = $this->db->query($sql);
      return $query->result_array();
    }
  }

  public function getMarriageType($language_id)
  {
    if ($language_id == 1) { // English
      $sql = "SELECT intMarriageTypeID, vcMarriageType_en AS vcMarriageType FROM marriagetype";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 2) { // Sinhala
      $sql = "SELECT intMarriageTypeID, vcMarriageType_si AS vcMarriageType FROM marriagetype";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 3) { // Tamil
      $sql = "SELECT intMarriageTypeID, vcMarriageType_ta AS vcMarriageType FROM marriagetype";
      $query = $this->db->query($sql);
      return $query->result_array();
    }
  }

  public function getNoofChildren($language_id)
  {
    if ($language_id == 1) { // English
      $sql = "SELECT intNoOfChildrenID, vcNoOfChildren_en AS vcNoOfChildren FROM noofchildren";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 2) { // Sinhala
      $sql = "SELECT intNoOfChildrenID, vcNoOfChildren_si AS vcNoOfChildren FROM noofchildren";
      $query = $this->db->query($sql);
      return $query->result_array();
    } else if ($language_id == 3) { // Tamil
      $sql = "SELECT intNoOfChildrenID, vcNoOfChildren_ta AS vcNoOfChildren FROM noofchildren";
      $query = $this->db->query($sql);
      return $query->result_array();
    }
  }


}
