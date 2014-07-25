<?php

class Admin_contractors extends CI_Controller{
    
    const VIEW_FOLDER = 'admin/contractors';
    function __construct() {
        parent::__construct();
        $this->load->model('admin_contractors_model');
        
    }
    
    
    public function index(){
        
        $data['contractors'] = $this->admin_contractors_model->get_contractors();
        $data['main_content'] = 'admin/contractors/list';
        $this->load->view('includes/template',$data);
    }
    
    
    public function add(){
         //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {

            //form validation
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('phone_number', 'phone_number', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('work_experience', 'work_experience', 'required');
            $this->form_validation->set_rules('staff_strength', 'staff_strength', 'required');
            $this->form_validation->set_rules('comapany_name', 'comapany_name', 'required');
            $this->form_validation->set_rules('billing_name', 'billing_name', 'required');
            $this->form_validation->set_rules('billing_address', 'billing_address', 'required');
            $this->form_validation->set_rules('location_business', 'location_business', 'required');
            $this->form_validation->set_rules('pan_card_number', 'pan_card_number', 'required');
            $this->form_validation->set_rules('bank_account_number', 'bank_account_number', 'required');
            $this->form_validation->set_rules('tan', 'tan', 'required');
            $this->form_validation->set_rules('govt_id', 'govt_id', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
            

            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
                $data_to_store = array(
                    'name' => $this->input->post('name'),
                    'address' => $this->input->post('address'),
                    'phone_number' => $this->input->post('phone_number'),
                    'email_address' => $this->input->post('email'),
                    'work_experience' => $this->input->post('work_experience'),
                    'staff_strength' => $this->input->post('staff_strength'),
                    'company_name' => $this->input->post('comapany_name'),
                    'billing_name' => $this->input->post('billing_name'),
                    'billing_address' => $this->input->post('billing_address'),
                    'location_of_business' => $this->input->post('location_business'),
                    'pan_card_number' => $this->input->post('pan_card_number'),
                    'bank_account_number' => $this->input->post('bank_account_number'),
                    'tan' => $this->input->post('tan'),
                    'govt_id_card_number' => $this->input->post('govt_id'),
                );
                //if the insert has returned true then we show the flash message
                if($this->admin_contractors_model->store_contrators($data_to_store)){
                    $data['flash_message'] = TRUE; 
                }else{
                    $data['flash_message'] = FALSE; 
                }

            }

        }
        //load the view
        $data['main_content'] = 'admin/contractors/add';
        $this->load->view('includes/template', $data);
        
    }
    
    public function update(){
            //product id 
        $id = $this->uri->segment(4);
  
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            //form validation
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('address', 'address', 'required');
            $this->form_validation->set_rules('phone_number', 'phone_number', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('work_experience', 'work_experience', 'required');
            $this->form_validation->set_rules('staff_strength', 'staff_strength', 'required');
            $this->form_validation->set_rules('comapany_name', 'comapany_name', 'required');
            $this->form_validation->set_rules('billing_name', 'billing_name', 'required');
            $this->form_validation->set_rules('billing_address', 'billing_address', 'required');
            $this->form_validation->set_rules('location_business', 'location_business', 'required');
            $this->form_validation->set_rules('pan_card_number', 'pan_card_number', 'required');
            $this->form_validation->set_rules('bank_account_number', 'bank_account_number', 'required');
            $this->form_validation->set_rules('tan', 'tan', 'required');
            $this->form_validation->set_rules('govt_id', 'govt_id', 'required');
            //if the form has passed through the validation
            if ($this->form_validation->run())
            {
    
                $data_to_store = array(
                    'name' => $this->input->post('name'),
                    'address' => $this->input->post('address'),
                    'phone_number' => $this->input->post('phone_number'),
                    'email_address' => $this->input->post('email'),
                    'work_experience' => $this->input->post('work_experience'),
                    'staff_strength' => $this->input->post('staff_strength'),
                    'company_name' => $this->input->post('comapany_name'),
                    'billing_name' => $this->input->post('billing_name'),
                    'billing_address' => $this->input->post('billing_address'),
                    'location_of_business' => $this->input->post('location_business'),
                    'pan_card_number' => $this->input->post('pan_card_number'),
                    'bank_account_number' => $this->input->post('bank_account_number'),
                    'tan' => $this->input->post('tan'),
                    'govt_id_card_number' => $this->input->post('govt_id')
                );
                //if the insert has returned true then we show the flash message
                if($this->admin_contractors_model->update_contractors($id, $data_to_store) == TRUE){
                    $this->session->set_flashdata('flash_message', 'updated');
                }else{
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/contractors/update/'.$id.'');

            }//validation run

        }

        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data

        //product data 
        $data['contractor'] = $this->admin_contractors_model->get_contractor_by_id($id);
        //load the view
        $data['main_content'] = 'admin/contractors/edit';
        $this->load->view('includes/template', $data);                
    }
    
    public function delete(){
                 //product id 
        $id = $this->uri->segment(4);
        $this->admin_contrctors_model->delete_contrctor($id);
        redirect('admin/contractors');
  
    }
    
}
