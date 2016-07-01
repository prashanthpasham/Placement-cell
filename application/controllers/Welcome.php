<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function __construct() {
   parent::__construct();

// Load form helper library
$this->load->helper('form');

// Load form validation library
$this->load->library('form_validation');

// Load session library
$this->load->library('session');
$this->load->helper('url');
// Load database
$this->load->model('Register_model');
}
	public function reg()
	{
		$this->load->view('register/register');
	}
	public function register()
	{
		$this->load->helper('form');
   $this->load->library('form_validation');	
   $this->form_validation->set_rules('email','Email','required');
   $this->form_validation->set_rules('rollno','Rollno','required');
   $this->form_validation->set_rules('pass','Pass','required');
   $this->form_validation->set_rules('cpass','Cpass','required');
   $this->form_validation->set_rules('name','Name','required');
   $this->form_validation->set_rules('branch','Branch','required');
   $this->form_validation->set_rules('ypass','Ypass','required');
   $this->form_validation->set_rules('phoneno','Phoneno','required');
   $this->form_validation->set_rules('address','Address','required');
   $this->form_validation->set_rules('school','school','required');
   $this->form_validation->set_rules('spercent','Spercent','required');
   $this->form_validation->set_rules('inter','Inter','required');
   $this->form_validation->set_rules('ipercent','Ipercent','required');
   $this->form_validation->set_rules('btech','Btech','required');
   $this->form_validation->set_rules('bpercent','Bpercent','required');
   $this->form_validation->set_rules('ptitle','Ptitle','required');
   $this->form_validation->set_rules('tech','Tech','required');
   $this->form_validation->set_rules('des','Des','required');
   /*$this->form_validation->set_rules('achieve','achieve','required');
   $this->form_validation->set_rules('skill[]','skill','required');*/
    if($this->form_validation->run()==FALSE)
    {
      $this->load->view('register/register');
     return false;
     }
  

   else
  { 
  
      $config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size']    = '1024';
$config['max_width']  = '1280';
$config['max_height']  = '1024';
$this->load->library('upload', $config);
$this->upload->initialize($config);
if (!$this->upload->do_upload()) {
    $error = array('error' => $this->upload->display_errors());
    echo $error['error'];
}
$path =  $this->upload->data();
  $result = $this->Register_model->register($path);
  if($result == FALSE)
  {
   echo "<script>
                    window.location.href='http://gnies.org/';
                    alert('Please Login!');
                    </script>";
  }
  else
  {
       echo "<script>
                    window.location.href='http://gnies.org/index.php/Welcome/register';
                    alert('Registration Failed,Try again!');
                    </script>";
  // echo "unable to register,try again!";
    //$this->load->view('register');
  }
 }/*else */
	} /*register*/

}