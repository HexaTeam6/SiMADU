<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wo_gangguan_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('Gangguan_model');
        $this->load->model('Pelanggan_model');
        $this->load->model('User_model');
    }

    public function index()
    {
		if(isset($_SESSION['username'])){
			$data['data']       = $this->Gangguan_model->tampil_data()->result();
			$data['user']       = $this->User_model->tampil_data()->result();
			$data['pelanggan']  = $this->Pelanggan_model->tampil_data()->result();
        	$this->load->view('Gangguan_view',$data);
		}
		else{
			redirect(site_url(). '/Auth/logout');
		}
    }

    public function mobile(){
        $data['data']       = $this->Gangguan_model->tampil_data()->result();
        $data['user']       = $this->User_model->tampil_data()->result();
        $data['pelanggan']  = $this->Pelanggan_model->tampil_data()->result();
        $this->load->view('Gangguan_mobile_view',$data);
    }

    public function update()
    {
        //$this->output->enable_profiler(TRUE);
        $kode_gangguan      = $this->input->post('kode_gangguan');
        $kode_cabang        = $_SESSION['kode_cabang'];
        $kode_pelanggan     = $this->input->post('kode_pelanggan');
        $no_lapor           = $this->input->post('no_lapor');
        $nama_pelapor       = $this->input->post('nama_pelapor');
        $no_hp              = $this->input->post('no_hp');
        $alamat_gangguan     = $this->input->post('alamat_gangguan');
        $pembatas_daya      = $this->input->post('pembatas_daya');
        $permasalahan       = implode(", ",$this->input->post('permasalahan'));
        $keterangan         = $this->input->post('keterangan');
        $kondisi            = $this->input->post('kondisi');
        $tang_ampere        = $this->input->post('tang_ampere');
        $perbaikan          = implode(", ",$this->input->post('perbaikan'));
        $nama_petugas1      = $this->input->post('nama_petugas1');
        $nama_petugas2      = $this->input->post('nama_petugas2');
        $data = array(
                'kode_cabang'   => $kode_cabang,
                'kode_pelanggan'=> $kode_pelanggan,
                'no_lapor'      => $no_lapor,
                'nama_pelapor'  => $nama_pelapor,
                'no_hp'         => $no_hp,
                'alamat_gangguan'=> $alamat_gangguan,
                'pembatas_daya' => $pembatas_daya,
                'permasalahan'  => $permasalahan,
                'keterangan'    => $keterangan,
                'kondisi'       => $kondisi,
                'tang_ampere'   => $tang_ampere,
                'perbaikan'     => $perbaikan,
                'nama_petugas1' => $nama_petugas1,
                'nama_petugas2' => $nama_petugas2
                );
        if ($this->input->post('action')=="add"){
            $this->Gangguan_model->input_data($data, 'master_gangguan');
            $this->session->set_flashdata('msg', 'Berhasil Simpan');
        }else{
            $this->Gangguan_model->update_data($data, 'master_gangguan', $kode_gangguan);
            $this->session->set_flashdata('msg', 'Berhasil Update');
        }
	redirect(site_url() . '\Wo_gangguan_ctrl');
    }

    public function addUser(){
        $kode_gangguan  = $this->input->post('kode_gangguan_user');
        $kode_user      = $this->input->post('kode_user');
        $data = array(
            'kode_user'   => $kode_user
        );

        $this->Gangguan_model->update_data($data, 'master_gangguan', $kode_gangguan);
        $this->session->set_flashdata('msg', 'Berhasil Update');
        redirect(site_url() . '\Wo_gangguan_ctrl');
    }

    public function getDataPelanggan(){
        $kode_pelanggan = $_POST['kode_pelanggan'];
        $data           = $this->Pelanggan_model->get_data_pelanggan($kode_pelanggan)->row();
        echo json_encode($data);
    }
	
	public function inactive()
    {
        $this->output->enable_profiler(TRUE);
		$data = array('status_aktif' => 'NO');
        $kode_gangguan_delete = $this->input->post('kode_gangguan_delete');
		$this->Gangguan_model->inactive_data($data,'master_gangguan',$kode_gangguan_delete);
		$this->session->set_flashdata('msg', 'Berhasil Didelete');		
		redirect(site_url() . '\Wo_gangguan_ctrl');
	}
	
	public function delete()
    {
        //$this->output->enable_profiler(TRUE);
        $kode_gangguan_delete = $this->input->post('kode_gangguan_delete');
		$this->Gangguan_model->delete_data($kode_gangguan_delete);
		$this->session->set_flashdata('msg', 'Berhasil Didelete');		
		redirect(site_url() . '\Wo_gangguan_ctrl');
	}
}
?>
