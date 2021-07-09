<?php 
class User extends CI_Controller{
    public function index(){


        $this->load->model('User_model');
        $allusers=$this->User_model->read();
        $data['key']=$allusers;

       $this->load->view('list',$data);
    }
    public function create(){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

         if($this->form_validation->run()==false){
            $this->load->view('create');
        }else{
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $form=[
                'name'=> $name,
                'email'=> $email
            ];
            // print_r($form);
            $this->load->model('User_model');
            $this->User_model->create($form);
            //info for add of records 
            $this->session->set_flashdata('success','record added successfully');
            //iske bad kaha jana h h control
            redirect(base_url().'index.php/user/index');




        }
        
       
    }

}