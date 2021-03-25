<?php
class Model_registration extends CI_Model
{
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

  public function loadCountries()
  {
    $query = $this->db->query("SELECT * FROM country");
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
  }
}
