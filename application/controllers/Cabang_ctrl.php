<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('Cabang_model');
    }

    public function index()
    {
		if(isset($_SESSION['username'])){
			$data['data'] = $this->Cabang_model->tampil_data()->result();
        	$this->load->view('Cabang_view',$data);	
		}
		else{
			redirect(site_url(). '/Auth/logout');
		}
    }

    public function update()
    {
        //$this->output->enable_profiler(TRUE);
        $kode_cabang = $this->input->post('kode_cabang');
        $nama_cabang = $this->input->post('nama_cabang');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $telepon = $this->input->post('telepon');
        $data = array(
                'kode_cabang' => $kode_cabang,
                'nama_cabang' => $nama_cabang,
                'alamat' => $alamat,
                'kota' => $kota,
                'telepon' => $telepon
                );
        if ($this->input->post('action')=="add"){
            $this->Cabang_model->input_data($data, 'master_cabang');	
            $this->session->set_flashdata('msg', 'Berhasil Simpan');
        }else{
            $this->Cabang_model->update_data($data, 'master_cabang', $kode_cabang);	
            $this->session->set_flashdata('msg', 'Berhasil Update');
        }
	redirect(site_url() . '\Cabang_ctrl');
    }
	
	public function inactive()
    {
        $this->output->enable_profiler(TRUE);
		$data = array('status_aktif' => 'NO');
        $kode_cabang_delete = $this->input->post('kode_cabang_delete');
		$this->Cabang_model->inactive_data($data,'master_cabang',$kode_cabang_delete);
		$this->session->set_flashdata('msg', 'Berhasil Didelete');		
		redirect(site_url() . '\Cabang_ctrl');
	}
	
	public function delete()
    {
        //$this->output->enable_profiler(TRUE);
        $kode_cabang_delete = $this->input->post('kode_cabang_delete');
		$this->Cabang_model->delete_data($kode_cabang_delete);
		$this->session->set_flashdata('msg', 'Berhasil Didelete');		
		redirect(site_url() . '\Cabang_ctrl');
	}
}
?>
