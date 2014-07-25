<?php

class Admin_roles extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model("admin_roles_model");
    }
    
    
    public function index(){
        $data['roles']=$this->admin_roles_model->get_roles();
        $data['main_content'] = 'admin/roles/list';
        $this->load->view('includes/template', $data);
    }
    
    
}

