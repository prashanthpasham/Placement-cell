<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

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
$this->load->model('Image_model');
}
	public function index()
	{
		$rollno = $this->session->userdata('rol');
     $data['images'] = $this->Image_model->show_images($rollno);
     $this->load->view('personaldetail/index',$data);
	}
	
	/*function image()
	{
		$rollno = $this->session->userdata('rol');
     $data['imagedetails'] = $this->Image_model->show_images($rollno);
     $this->load->view('personaldetail/index',$data);
	}*/

}
?>