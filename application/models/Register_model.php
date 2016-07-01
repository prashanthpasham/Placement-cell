<?php
class Register_model extends CI_model
{

public function login()
{
 $this->load->database();
  $data = array(
                  'rollno' => $this->input->post('rollno'),
                  'password' => $this->input->post('password'),
                     );
 $condition = "rollno =" . "'" . $data['rollno'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('signup');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {

  return true;
} else {
return false;
}
}//login

public function register($path)
{
	$this->load->database();
  
  $image = array(
    'rollno' => $this->input->post('rollno'),
    'image'  => $path['file_name'],
    );
     $data1 = array(
                    'rollno' => $this->input->post('rollno'),
                    'password' => $this->input->post('pass'),
    
                  );

    $data2 = array(
  
   'name' => $this->input->post('name'),
   'rollno' => $this->input->post('rollno'),
   'branch' => $this->input->post('branch'),
   'ypass' => $this->input->post('ypass'),
   'email' => $this->input->post('email'),
   'phoneno' => $this->input->post('phoneno'),
   'address' => $this->input->post('address'),
    'image'  => $path['file_name'],
   
     );

   
         
       
       $data3 = array(

                'rollno'    => $this->input->post('rollno'),
                'school'  => $this->input->post('school'),
               
                'ssc'  => $this->input->post('spercent'),
                'intercollege'  => $this->input->post('inter'),
                'inter'  => $this->input->post('ipercent'),
                'Btechcollege'  => $this->input->post('btech'),
                'percent'  => $this->input->post('bpercent'),
            );

   /*       
  $data5 = array(
    'achievement' => $this->input->post('achieve'),
    'rollno' => $this->input->post('rollno'),
    );
    */
  
 $condition = "rollno =" . "'" . $data1['rollno'] . "'";
 $this->db->select('*');
 $this->db->from('signup');
  $this->db->where($condition);
  $this->db->limit(10);
  $query = $this->db->get();

  if ($query->num_rows() == 0) {
  	
  $this->db->insert('images', $image);
 	$this->db->insert('signup', $data1);

  $this->db->insert('personaldetails', $data2);
  $this->db->insert('academicdetails', $data3);
                      
             
           $data4 = array(
                      'ptitle' => $this->input->post('ptitle'),
                       'technology' => $this->input->post('tech'),
                        'description' =>$this->input->post('des') ,
                        'rollno' =>$this->input->post('rollno'),
                         );
                 
    $this->db->insert('projects', $data4);      
 
         /*
  	$this->db->insert('achievements', $data5);
  	foreach ($this->input->post('skill') as $skill)
         {
         $data6 = array(
     'skill' => $skill,
     'rollno' => $this->input->post('rollno'),
    );
  	$this->db->insert('skillset', $data6);
  	}
      if ($this->db->affected_rows() > 0) {
          return true;

           }
}

 else {
return false;
}*/
}	

}//register
}
?>