<?php

class Image_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    /*
     * get personaldetails by pid
     */
    function show_images($rollno)
    {
        return $this->db->get_where('images',array('rollno'=>$rollno))->row_array();
    }
    }
    ?>