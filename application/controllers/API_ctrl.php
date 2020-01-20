<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('API_model');
        $this->load->model('Gangguan_model');
        $this->load->model('User_model');
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query = $this->User_model->process_login($username,$password);
        if (count($query->result())>0)
            echo json_encode($query->result());
        else
            echo false;
    }

    public function getWoGangguan(){
        $kode_user      = $this->input->post('kode_user');
        $kode_cabang    = $this->input->post('kode_cabang');
        $query = $this->API_model->getWoGangguan($kode_cabang,$kode_user);
        if (count($query->result())>0)
            echo json_encode($query->result());
        else
            echo false;
    }

    public function updateWoGangguan(){

        $kode_gangguan      = $this->input->post('kode_gangguan');
        $lang_lot           = $this->input->post('lang_lot');
        $nama_pelapor       = $this->input->post('nama_pelapor');
        $no_hp              = $this->input->post('no_hp');
        $alamat_gangguan    = $this->input->post('alamat_gangguan');
        $pembatas_daya      = $this->input->post('pembatas_daya');
        $permasalahan       = $this->input->post('permasalahan');
        $keterangan         = $this->input->post('keterangan');
        $kondisi            = $this->input->post('kondisi');
        $tang_ampere        = $this->input->post('tang_ampere');
        $perbaikan          = $this->input->post('perbaikan');
        $nama_petugas1      = $this->input->post('nama_petugas1');
        $nama_petugas2      = $this->input->post('nama_petugas2');
        $tanggal_pemeriksaan= $this->input->post('tanggal_pemeriksaan');
        $ttd_petugas        = $this->input->post('ttd_petugas');
        $ttd_pelanggan      = $this->input->post('ttd_pelanggan');
        $status_wo          = $this->input->post('status_wo');

        $data = array(
            'lang_lot'              => $lang_lot,
            'nama_pelapor'          => $nama_pelapor,
            'no_hp'                 => $no_hp,
            'alamat_gangguan'       => $alamat_gangguan,
            'pembatas_daya'         => $pembatas_daya,
            'permasalahan'          => $permasalahan,
            'keterangan'            => $keterangan,
            'kondisi'               => $kondisi,
            'tang_ampere'           => $tang_ampere,
            'perbaikan'             => $perbaikan,
            'nama_petugas1'         => $nama_petugas1,
            'nama_petugas2'         => $nama_petugas2,
            'tanggal_pemeriksaan'   => $tanggal_pemeriksaan,
            'ttd_petugas'           => $ttd_petugas,
            'ttd_pelanggan'         => $ttd_pelanggan,
            'status_wo'             => "Selesai"
        );
        $this->Gangguan_model->update_data($data, 'master_gangguan', $kode_gangguan);

        $foto = $this->input->post('foto[]');
        $this->Gangguan_model->insert_data($foto, 'detail_foto_gangguan');
    }

    public function update()
    {
        //$this->output->enable_profiler(TRUE);
        $kode_gangguan      = $this->input->post('kode_gangguan');
        $kode_cabang        = $_SESSION['kode_cabang'];
        $id_pelanggan       = $this->input->post('id_pelanggan');
        $no_meter           = $this->input->post('no_meter');
        $no_lapor           = $this->input->post('no_lapor');
        $nama_pelapor       = $this->input->post('nama_pelapor');
        $no_hp              = $this->input->post('no_hp');
        $pembatas_daya      = $this->input->post('pembatas_daya');

        $permasalahan       = $this->input->post('permasalahan');
        $permasalahan_lain  = $this->input->post('permasalahan_lain');
        $permasalahan       = $permasalahan == "Lain-lain"? $permasalahan_lain : $permasalahan;
        
        $keterangan         = $this->input->post('keterangan');
        $kondisi            = $this->input->post('kondisi');
        $tang_ampere        = $this->input->post('tang_ampere');

        $perbaikan          = $this->input->post('perbaikan');
        $perbaikan_lain     = $this->input->post('perbaikan_lain');
        $perbaikan          = $perbaikan == "Lain-lain"? $perbaikan_lain : $perbaikan;

        $nama_petugas1      = $this->input->post('nama_petugas1');
        $nama_petugas2      = $this->input->post('nama_petugas2');
        $data = array(
                'kode_cabang'   => $kode_cabang,
                'id_pelanggan'  => $id_pelanggan,
                'no_meter'      => $no_meter,
                'no_lapor'      => $no_lapor,
                'nama_pelapor'  => $nama_pelapor,
                'no_hp'         => $no_hp,
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
}
?>
