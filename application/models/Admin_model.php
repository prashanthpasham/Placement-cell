<?php

class Admin_model extends CI_model
{
function admin()
{
$this->load->database();
  $data = array(
                  'username' => $this->input->post('username'),
                  'password' => $this->input->post('password'),
                     );
 $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('admin');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {

  return true;
} else {
return false;
}
}
function get_percentage($limit)
{
 $pas = $this->input->post('branch');
   
                $ypas  = $this->input->post('percentage');
          $array =  array('branch'=>$pas,'percent'=>$ypas);
$this->db->select('*');
$this->db->from('personaldetails');
$this->db->join('academicdetails','academicdetails.rollno=personaldetails.rollno');
$this->db->limit($limit);
$this->db->where('branch',$pas);
$this->db->where('percent >=',$ypas);
$query = $this->db->get();
return $query->result_array();

}


}
?>