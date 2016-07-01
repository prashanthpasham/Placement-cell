<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class My_calendar extends CI_Controller {

    function __construct() {
        parent::__construct();
     $this->load->helper('form');
      $this->load->library('javascript');
      $this->load->helper('url');
      $this->load->model('Mycal_model');
      $this->load->library('session');
    }
    
    
    function index($year = null,$month = null) {
     if(  $this->session->userdata('logged_in'))
           {
          
          $this->load->model('Mycal_model');
    
   
  $data['calendar'] = $this->Mycal_model->generate($year,$month);
        
       
        $this -> load -> view('Admin/calendar',$data);  
             
        }
         else{
         
         redirect('http://www.gnies.org');
         }
   
      
    }
    
    
    function personal($year = null,$month = null) {
    $this->load->model('Mycal_model');
    
   
  $data['calendar'] = $this->Mycal_model->generate($year,$month);
        
       
        $this->load-> view('personaldetail/calendar',$data);
       
    }
    
    
    
    
    
    function github($year = null,$month = null) {
    $this->load->model('Mycal_model');
    
   
  $data['calendar'] = $this->Mycal_model->generate($year,$month);
        
       
        $this -> load -> view('github/calendar',$data);
       
    }
    
    
    
    function project($year = null,$month = null) {
    $this->load->model('Mycal_model');
    
   
  $data['calendar'] = $this->Mycal_model->generate($year,$month);
        
       
        $this -> load -> view('project/calendar',$data);
       
    }
    
    
    function resume($year = null,$month = null) {
    $this->load->model('Mycal_model');
    
   
  $data['calendar'] = $this->Mycal_model->generate($year,$month);
        
       
        $this -> load -> view('resume/calendar',$data);
       
    }
    
    
    function skillset($year = null,$month = null) {
    $this->load->model('Mycal_model');
    
   
  $data['calendar'] = $this->Mycal_model->generate($year,$month);
        
       
        $this -> load -> view('skillset/calendar',$data);
       
    }
    
    
   function add_events($year = null ,$month = null )
   {
    if(!$year)
    {
    $year = date('Y');
    }
    if(!$month)
    {
    $month = date('M');
    }
    $date = $this->input->post('date');
    
    $this->Mycal_model->add_events("$date",$this->input->post('event'));
  redirect('My_calendar/index');
}


function delete_events(){ 
$date = $this->input->post('dateevent');
$this->Mycal_model->delete_events($date);
redirect('My_calendar/index');
} 
  
}
?>