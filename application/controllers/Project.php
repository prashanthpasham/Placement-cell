<?php
/* 
 * Generated by CRUDigniter v1.3 Beta 
 * www.crudigniter.com
 */
 
class Project extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Project_model');
        $this->load->helper('form');
    }
    
    /*
     * Listing of projects
     */
    function index()
    {
        $rollno = $this->session->userdata('rol');
           if($this->session->userdata('rol')) {
        $data['projects'] = $this->Project_model->get_projects($rollno);
        $this->load->view('project/index',$data);
        $this->session->set_userdata('project',$data);
        }
       else { 
           redirect('http://www.gnies.org');
           } 

    }
    
    /*
     * Adding new projects
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('ptitle','Ptitle','required|max_length[255]');
		$this->form_validation->set_rules('technology','Technology','required|max_length[255]');
		$this->form_validation->set_rules('description','Description','required|max_length[255]');
		$this->form_validation->set_rules('rollno','Rollno','required|max_length[255]');
		
		if($this->form_validation->run())     
        { 
        $rollno = $this->session->userdata('rol');  
            $params = array(
				'ptitle' => $this->input->post('ptitle'),
				'technology' => $this->input->post('technology'),
				'description' => $this->input->post('description'),
				'rollno' => $rollno,
            );
            
           // $projects_id = $this->Project_model->add_projects($params);
            $this->Project_model->add_projects($params);
            redirect('project/index');
        }
        else
        {
            $this->load->view('project/add');
        }
    }

    function projectid() {
            $id = $this->uri->segment(3);
           $data['students'] = $this->Project_model->show_projects($id);
             //$data['single_student'] = $this->update_model->show_student_id($id);
           $this->load->view('project/edit', $data);
            }
    
    /*
     * Editing projects
     */
    function edit()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('ptitle[]','Ptitle','required|max_length[255]');
		$this->form_validation->set_rules('technology[]','Technology','required|max_length[255]');
		$this->form_validation->set_rules('description[]','Description','required|max_length[255]');
		$this->form_validation->set_rules('rollno[]','Rollno','required|max_length[255]');
		 $rollno = $this->session->userdata('rol');
        
        
		if($this->form_validation->run())     
        {   
             $projectid = $this->uri->segment(3);
            $params = array(
				'ptitle' => $this->input->post('ptitle'),
				'technology' => $this->input->post('technology'),
				'description' => $this->input->post('description'),
				 'rollno' => $this->input->post('rollno'),
            );
            
           
            $this->Project_model->update_projects($projectid,$params);     
           
            redirect('project/index');
        }
        else
        {   
            //$data['projects'] = $this->Project_model->get_projects($rollno);
            //$this->load->view('project/edit',$data);
        }
    }
    
   
    
     
    function remove()
    {
         $id = $this->uri->segment(3);
        $this->Project_model->delete_projects($id);
        redirect('project/index');
    }
    
}
?>