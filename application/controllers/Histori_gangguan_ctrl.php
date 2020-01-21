<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Histori_gangguan_ctrl extends CI_Controller {

    public function __construct()
    {
        parent::__construct();		
        $this->load->model('Gangguan_model');
        $this->load->model('User_model');
    }

    public function index()
    {
		if(isset($_SESSION['username'])){
			$data['data'] = $this->Gangguan_model->get_data_histori()->result();
			$data['user'] = $this->User_model->tampil_data()->result();
        	$this->load->view('Histori_gangguan_view',$data);
		}
		else{
			redirect(site_url(). '/Auth/logout');
		}
    }

    public function laporan_print($kode_gangguan)
    {
        if(isset($_SESSION['username'])){
            $data['data'] = $this->Gangguan_model->get_laporan($kode_gangguan)->row();
            $data['foto'] = $this->Gangguan_model->get_laporan_foto($kode_gangguan)->result();
//            echo json_encode($data);
            $this->load->view('prints/Lap_gangguan_print',$data);
        }
        else{
            redirect(site_url(). '/Auth/logout');
        }
    }
}
?>
