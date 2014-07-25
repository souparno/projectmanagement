<?php

class Admin_contractors extends CI_Controller{
    
    const VIEW_FOLDER = 'admin/contractors';
    function __construct() {
        parent::__construct();
        $this->load->model('admin_contractors_model');
        
    }
    
    
    public function index(){
        $data['main_content'] = 'admin/users/list';
        $this->load->view('includes/template',$data);
    }
    
    
    public function add(){
         //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('role', 'role', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            

            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                $data_to_store = array(
                    'name' => $this->input->post('name'),
                    'role' => $this->input->post('role'),
                    'email' => $this->input->post('email'),
                );
                //if the insert has returned true then we show the flash message
                if($this->admin_users_model->store_users($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }

            }

        }
        //load the view
        $data['main_content'] = 'admin/users/add';
        $this->load->view('includes/template', $data);
        
    }
    
    public function update(){
        
    }
    
    public function delete(){
        
    }
    
}
