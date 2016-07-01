<?php
class Resume_model extends CI_model
{
	public function __construct()
	{
		 parent::__construct();
		$this->load->database();
	}
	function get_objective($rollno)
	{
    return $this->db->get_where('objectives',array('rollno'=>$rollno))->row_array(); 
	}
	function addobjective($params)
	{
		 $this->db->insert('objectives',$params);
		
        return $this->db->insert_id();
   
	}
	function update_objective($rollno,$params)
    {
        $this->db->where('rollno',$rollno);
        $this->db->update('objectives',$params);
    }
}

?>