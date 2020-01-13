<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('User_model');
    }

    public function index()
    {
		if(isset($_SESSION['username'])){
			$data['data'] = $this->User_model->tampil_data()->result();
			$data['data'] = $this->User_model->get_data_user()->result();
			$this->load->view('Change_password_view',$data);
		}
		else{
			redirect(site_url(). '/Auth/logout');
		}
    }

    public function update()
    {
        //$this->output->enable_profiler(TRUE);
        $username = $this->input->post('username');
        $password = $this->input->post('newpassword');
        $kode_user = $this->input->post('kode_user');
        $data = array(
                'username' => $username,
                'password' => md5($password),
                'kode_user' => $kode_user
                );
        if ($this->input->post('action')=="update"){            
            $this->User_model->update_data($data, 'master_user_login', $kode_user);	
            $this->session->set_flashdata('msg', 'Berhasil Update');
        }
		redirect(site_url() . '/Change_password_ctrl');
    } 
}
?>
