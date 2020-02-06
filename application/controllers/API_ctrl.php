<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('API_model');
        $this->load->model('Gangguan_model');
        $this->load->model('Pelanggan_model');
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
        $gangguan = $this->API_model->getWoGangguan($kode_cabang,$kode_user)->result();

        if (count($gangguan)>0){
            $data = array();
            $fotos = array();
            foreach ($gangguan as $parent){
                $foto = $this->API_model->getFotoGangguan($parent->kode_gangguan)->result();
                foreach ($foto as $child){
                    $fotos["foto"][] = $child->foto;
                }
                $data[] = (array)$parent + $fotos;
            }
            echo json_encode($data);
        }
        else {
            echo false;
        }
    }

    public function updateWoGangguan(){

        $kode_pelanggan     = $this->input->post('kode_pelanggan');
        $kode_gangguan      = $this->input->post('kode_gangguan');
        $long_lat           = $this->input->post('long_lat');
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

        $pelanggan = array(
            'long_lat'  => $long_lat
        );

        $foto = $this->input->post('foto[]');
        for ($i = 0; $i < count($foto); $i++){
            if($foto[$i]=="")
                continue;
                
            $fotos[] = array(
                'kode_gangguan' => $kode_gangguan,
                'foto'          => $foto[$i]
            );
        }

        $this->Gangguan_model->update_data($data, 'master_gangguan', $kode_gangguan);
        $this->Pelanggan_model->update_data($pelanggan, 'master_pelanggan', $kode_pelanggan);
        $this->db->insert_batch('detail_foto_gangguan', $fotos);
    }

    public function updatePelanggan(){
        $kode_pelanggan     = $this->input->post('kode_pelanggan');
        $no_meter           = $this->input->post('no_meter');
        $nama_pelanggan     = $this->input->post('nama_pelanggan');
        $alamat_pelanggan   = $this->input->post('alamat_pelanggan');
        $tarif              = $this->input->post('tarif');
        $daya               = $this->input->post('daya');
        $jenis_pelanggan    = $this->input->post('jenis_pelanggan');
        $long_lat           = $this->input->post('long_lat');

        $data = array(
            'no_meter'          => $no_meter,
            'nama_pelanggan'    => $nama_pelanggan,
            'alamat_pelanggan'  => $alamat_pelanggan,
            'tarif'             => $tarif,
            'daya'              => $daya,
            'jenis_pelanggan'   => $jenis_pelanggan,
            'long_lat'          => $long_lat
        );

        $this->Pelanggan_model->update_data($data, 'master_pelanggan', $kode_pelanggan);
    }
}
?>