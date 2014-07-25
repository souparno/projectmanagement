<?php

class Admin_departments extends CI_Controller {

    const VIEW_FOLDER = 'admin/departments';

    function __construct() {
        parent::__construct();
        $this->load->model('admin_departments_model');
    }

    public function index() {

        //fetch sql data into arrays
        #$data['count_departments']= $this->admin_departments_model->count_manufacturers($search_string, $order);
        $data['departments'] = $this->admin_departments_model->get_departments();
        $data['main_content'] = 'admin/departments/list';
        $this->load->view('includes/template', $data);
    }

    public function add() {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            //form validation
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('location', 'location', 'required');
            $this->form_validation->set_rules('head_department', 'head_department', 'required');
            $this->form_validation->set_rules('contact_number', 'contact_number', 'required');
            $this->form_validation->set_rules('office_number', 'office_number', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('number_of_staff', 'number_of_staff', 'required');
            $this->form_validation->set_rules('role', 'role', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
            $this->form_validation->set_rules('remarks', 'remarks', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');


            //if the form has passed through the validation
            if ($this->form_validation->run()) {
                $data_to_store = array(
                    'name' => $this->input->post('name'),
                    'location' => $this->input->post('location'),
                    'department_head' => $this->input->post('head_department'),
                    'contact_number' => $this->input->post('contact_number'),
                    'office_number' => $this->input->post('office_number'),
                    'number_of_staff' => $this->input->post('number_of_staff'),
                    'description' => $this->input->post('description'),
                    'remarks' => $this->input->post('remarks'),
                    'role' => $this->input->post('role'),
                    'email_address' => $this->input->post('email')
                );
                //if the insert has returned true then we show the flash message
                if ($this->admin_departments_model->store_departments($data_to_store)) {
                    $data['flash_message'] = TRUE;
                } else {
                    $data['flash_message'] = FALSE;
                }
            }
        }
        //load the view
        $data['main_content'] = 'admin/departments/add';
        $this->load->view('includes/template', $data);
    }

    public function update() {
        //product id 
        $id = $this->uri->segment(4);
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            //form validation
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('location', 'location', 'required');
            $this->form_validation->set_rules('department_head', 'department_head', 'required');
            $this->form_validation->set_rules('contact_number', 'contact_number', 'required');
            $this->form_validation->set_rules('office_number', 'office_number', 'required');
            $this->form_validation->set_rules('email_address', 'email_address', 'required');
            $this->form_validation->set_rules('number_of_staff', 'number_of_staff', 'required');
            $this->form_validation->set_rules('role', 'role', 'required');
            $this->form_validation->set_rules('description', 'description', 'required');
            $this->form_validation->set_rules('remarks', 'remarks', 'required');
            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
    
                $data_to_store = array(
                    'name' => $this->input->post('name'),
                    'location' => $this->input->post('location'),
                    'department_head' => $this->input->post('department_head'),
                    'email_address' =>$this->input->post('email_address'),
                    'contact_number' => $this->input->post('contact_number'),
                    'office_number' => $this->input->post('office_number'),
                    'number_of_staff' => $this->input->post('number_of_staff'),
                    'description' => $this->input->post('description'),
                    'remarks' => $this->input->post('remarks'),
                    'role' => $this->input->post('role'),
                    'email_address' => $this->input->post('email')
                );
                //if the insert has returned true then we show the flash message
                if($this->admin_departments_model->update_departments($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/departments/update/'.$id.'');

            }//validation run

        }

        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data

        //product data 
        $data['department'] = $this->admin_departments_model->get_department_by_id($id);
        //load the view
        $data['main_content'] = 'admin/departments/edit';
        $this->load->view('includes/template', $data);            
        
    }

    public function delete() {
           //product id 
        $id = $this->uri->segment(4);
        $this->admin_departments_model->delete_department($id);
        redirect('admin/departments');

    }

}
