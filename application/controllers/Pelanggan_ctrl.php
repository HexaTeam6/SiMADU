<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('Pelanggan_model');
    }

    public function index()
    {
		if(isset($_SESSION['username'])){
			$data['data'] = $this->Pelanggan_model->tampil_data()->result();
        	$this->load->view('Pelanggan_view',$data);
		}
		else{
			redirect(site_url(). '/Auth/logout');
		}
    }

    public function update()
    {
        //$this->output->enable_profiler(TRUE);
        $kode_pelanggan     = $this->input->post('kode_pelanggan');
        $kode_cabang        = $_SESSION['kode_cabang'];
        $no_meter           = $this->input->post('no_meter');
        $nama_pelanggan     = $this->input->post('nama_pelanggan');
        $alamat_pelanggan   = $this->input->post('alamat_pelanggan');
        $tarif              = $this->input->post('tarif');
        $daya               = $this->input->post('daya');
        $jenis_pelanggan    = $this->input->post('jenis_pelanggan');
        $long_lat           = $this->input->post('longitude')." ".$this->input->post('latitude');
        $data = array(
            'kode_pelanggan'    => $kode_pelanggan,
            'kode_cabang'       => $kode_cabang,
            'no_meter'          => $no_meter,
            'nama_pelanggan'    => $nama_pelanggan,
            'alamat_pelanggan'  => $alamat_pelanggan,
            'tarif'             => $tarif,
            'daya'              => $daya,
            'jenis_pelanggan'   => $jenis_pelanggan,
            'long_lat'          => $long_lat
        );
        if ($this->input->post('action')=="add"){
            $this->Pelanggan_model->input_data($data, 'master_pelanggan');
            $this->session->set_flashdata('msg', 'Berhasil Simpan');
        }else{
            $this->Pelanggan_model->update_data($data, 'master_pelanggan', $kode_pelanggan);
            $this->session->set_flashdata('msg', 'Berhasil Update');
        }
	redirect(site_url() . '\Pelanggan_ctrl');
    }
	
	public function inactive()
    {
        $this->output->enable_profiler(TRUE);
		$data = array('status_aktif' => 'NO');
        $kode_pelanggan_delete = $this->input->post('kode_pelanggan_delete');
		$this->Pelanggan_model->inactive_data($data,'master_pelanggan',$kode_pelanggan_delete);
		$this->session->set_flashdata('msg', 'Berhasil Didelete');		
		redirect(site_url() . '\Pelanggan_ctrl');
	}
	
	public function delete()
    {
        //$this->output->enable_profiler(TRUE);
        $kode_pelanggan_delete = $this->input->post('kode_pelanggan_delete');
		$this->Pelanggan_model->delete_data($kode_pelanggan_delete);
		$this->session->set_flashdata('msg', 'Berhasil Didelete');		
		redirect(site_url() . '\Pelanggan_ctrl');
	}
}
?>
