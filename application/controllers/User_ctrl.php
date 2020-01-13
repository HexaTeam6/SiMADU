<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('User_model');
        $this->load->model('Hak_akses_model');
        $this->load->model('Cabang_model');
    }

    public function index()
    {
        if(isset($_SESSION['username'])){
			$data['data'] = $this->User_model->tampil_data()->result();
			$data['akses'] = $this->Hak_akses_model->tampil_data()->result();
			$data['cabang'] = $this->Cabang_model->tampil_data()->result();
			$this->load->view('User_view',$data);
		}
		else{
			redirect(site_url().'/Auth/logout');
		}
    }

    public function update()
    {
        $this->output->enable_profiler(TRUE);
        $kode_user = $this->input->post('kode_user');
        $kode_akses = $this->input->post('kode_akses');
        $kode_cabang = $this->input->post('kode_cabang');
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $data = array(
                'kode_user' => $kode_user,
                'kode_akses' => $kode_akses,
                'kode_cabang' => $kode_cabang,
                'username' => $username,
                'nama' => $nama,
                'password' => md5($password)
                );
        if ($this->input->post('action')=="add"){
            $this->User_model->input_data($data, 'master_user_login');	
            $this->session->set_flashdata('msg', 'Berhasil Simpan');
        }else{
            $this->User_model->update_data($data, 'master_user_login', $kode_user);	
            $this->session->set_flashdata('msg', 'Berhasil Update');
        }
	redirect(site_url() . '\User_ctrl');
    }
	
	public function inactive()
    {
        $this->output->enable_profiler(TRUE);
		$data = array('status_aktif' => 'NO');
        $kode_user_delete = $this->input->post('kode_user_delete');
		$this->User_model->inactive_data($data,'master_user_login',$kode_user_delete);
		$this->session->set_flashdata('msg', 'Berhasil Didelete');		
		redirect(site_url() . '\User_ctrl');
	}
}
?>
