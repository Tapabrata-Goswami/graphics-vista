<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAuth extends CI_Controller{
    public function index(){

        if($this->input->post()){
            $email = $this->input->post('email_id');
            $password = sha1($this->input->post('password'));
            $data = array(
                'email' => $email,
                'password' => $password,
                'status' => '1',
            );
            $result = $this->db->get_where('tb_admin',$data)->result_array();

            $admin_data = array(
                'admin_id' => $result[0]['id'],
                'admin_email' => $result[0]['email'],
                'admin_status' => $result[0]['status'],
                'admin_login' => TRUE,
            );

            $this->session->set_userdata($admin_data);

        }

        if(isset($this->session->userdata['admin_id']) && !empty($this->session->userdata['admin_id'])){
            $page_data['page_title'] ='Dashboard';
            $this->load->view('admin/admin_dashboard', $page_data);
        }else{
            $page_data['page_title'] ='Admin Login';
            $this->load->view('admin/admin_login', $page_data);
        }
        
    }

    public function logout(){
       $this->session->sess_destroy();
    }
}