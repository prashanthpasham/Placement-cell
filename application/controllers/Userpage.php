<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// session_start();
class Userpage extends CI_Controller {

	public function index()
	{
    $this->load->view('personaldetail/index');
    
	}
 
public function project()
{
  $this->load->view('github/github');
}

public function __construct(){
parent::__construct();
$this->load->helper('form');
$this->load->library('session');
$this->load->library('form_validation');
 
$this->load->helper(array('form', 'url'));
$this->load->helper('url');
$this->load->helper('form');
$this->load->model('Register_model');
 $this->load->model('Personaldetail_model');
  $this->load->model('Academicdetail_model');
   $this->load->model('Resume_model');
   $this->load->model('Project_model');
   $this->load->model('Skillset_model');
  $this->load->library('session');

}
public function resume()
{
  $rollno = $this->session->userdata('rol');
   if($this->session->userdata('rol')) {
  $data['resume']= $this->Personaldetail_model->get_personaldetails($rollno);
  $data['acd'] = $this->Academicdetail_model->get_academicdetails($rollno);
  $data['proj'] = $this->Project_model->get_projects($rollno);
  $data['objective'] = $this->Resume_model->get_objective($rollno);
  $data['skills'] = $this->Skillset_model->get_skillset($rollno);
  $this->load->view('resume/resume',$data);
  }
  else
  {
  redirect('http://www.gnies.org');
  }
}
public function addobjective()
{
 $this->load->library('form_validation');

   
    $this->form_validation->set_rules('objective','Objective','required|max_length[255]');
    
    
    if($this->form_validation->run())     
        { 
        $rollno = $this->session->userdata('rol');  
            $params = array(
        
        'objective' => $this->input->post('objective'),
        'rollno' => $rollno,
            );
            
         $addobjective = $this->Resume_model->get_objective($rollno);
         if($addobjective == TRUE){
          redirect('Userpage/primaryobjective');
        //$this->load->view('Userpage/editobjective');
         }
         else{
            $this->Resume_model->addobjective($params);
           
    
            redirect('Userpage/resume');
          }
        }
        else
        {
            $this->load->view('resume/add');
        }
}

public function primaryobjective()
{
  $this->load->library('form_validation');

  $this->form_validation->set_rules('objective','Objective','required|max_length[255]');
   $rollno = $this->session->userdata('rol');
        if($this->form_validation->run())     
        { 
         $params = array(
                'objective' => $this->input->post('objective'),
                );
         $this->Resume_model->update_objective($rollno,$params);            
            redirect('Userpage/resume');

        }
        else
        {
          $data['resume']= $this->Personaldetail_model->get_personaldetails($rollno);
  $data['acd'] = $this->Academicdetail_model->get_academicdetails($rollno);
  $data['proj'] = $this->Project_model->get_projects($rollno);
         $data['objective'] = $this->Resume_model->get_objective($rollno);
  
        $this->load->view('resume/resume',$data); 
        }


}

public function editobjective()
{
  $this->load->library('form_validation');

  $this->form_validation->set_rules('objective','Objective','required|max_length[255]');
   $rollno = $this->session->userdata('rol');
        if($this->form_validation->run())     
        { 
         $params = array(
                'objective' => $this->input->post('objective'),
                );
         $this->Resume_model->update_objective($rollno,$params);            
            redirect('Userpage/resume');

        }
        else
        {
          
         $data['objective'] = $this->Resume_model->get_objective($rollno);
  
        $this->load->view('resume/edit',$data); 
        }


}


 
public function login()
 {
  $this->load->helper('form');
 	$this->load->model('Register_model');
  $this->load->model('Skillset_model');
  $this->load->model('Achievements_model');
  $this->load->model('Personaldetail_model');
  $this->load->model('Academicdetail_model');
  $this->load->model('Project_model');
  
 	$this->load->library('form_validation');
  $this->form_validation->set_rules('rollno','Rollno','required');
  $this->form_validation->set_rules('password','Password','required');
   if($this->form_validation->run()== FALSE){
       
              $this->load->view('welcome_message');
            }
             else
              {
            
                
                    $result = $this->Register_model->login();
                   
                if($result == TRUE)
                {
                     $rollno = $this->input->post('rollno');
                     $this->session->set_userdata('rol',$rollno);
                     $data['personaldetails'] = $this->Personaldetail_model->get_personaldetails($rollno);
                    
                     
                   
                     if($data != FALSE )
                     {
                     	
                     
                    $this->load->view('personaldetail/index',$data);
                  
                     }
                    
                }
               
                   else{
                    echo "<script>
                    window.location.href='http://gnies.org/';
                    alert('Wrong Rollno or password!');
                    </script>";
                    
                        

                      
                    }
             
            }
                 
               
  
 }//login 
/*
public function academic($data)
 {
  $this->load->view('academicdetail/index',$data);
 }*/
 
 public function logout() {

$this->session->sess_destroy();
$this->load->helper('url');	
redirect('http://gnies.org/');
 echo "<script>
 window.location.href='http://gnies.org/;
                    
</script>";
		
}
}
?>