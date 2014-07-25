<?php

class Admin_users extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('admin_users_model');
        
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
            $this->form_validation->set_rules('u_name', 'user name', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('f_name', 'first name', 'required');
            $this->form_validation->set_rules('l_name', 'last name', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            

            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                $data_to_store = array(
                    'user_group_id'=>'1',
                    'username' => $this->input->post('u_name'),
                    'password' => $this->input->post('password'),
                    'email' => $this->input->post('email'),
                    'first_name' => $this->input->post('f_name'),
                    'last_name' => $this->input->post('l_name'),
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
