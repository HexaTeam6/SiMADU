<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gangguan_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }
    
    function tampil_data(){
        if($_SESSION['kode_akses'] == 1 || $_SESSION['kode_akses'] == 6){
            return $this->db->query('SELECT * FROM master_gangguan
            WHERE status_aktif = "YES" 
            AND kode_cabang not in (1)
            AND kode_cabang = '.$_SESSION['kode_cabang'].'
            AND status_wo != "Selesai"
            ORDER BY kode_cabang DESC');
        }else{
            return $this->db->query('SELECT * FROM master_gangguan
            WHERE status_aktif = "YES" 
            AND kode_cabang not in (1)
            AND kode_cabang = '.$_SESSION['kode_cabang'].'
            AND kode_user = '.$_SESSION['kode_user'].'
            AND status_wo != "Selesai"
            ORDER BY kode_cabang DESC');
        }
    }

    function get_data_histori(){
        if($_SESSION['kode_akses'] == 1 || $_SESSION['kode_akses'] == 6){
            return $this->db->query('SELECT * FROM master_gangguan
            WHERE status_aktif = "YES" 
            AND kode_cabang not in (1)
            AND kode_cabang = '.$_SESSION['kode_cabang'].'
            AND status_wo = "Selesai"
            ORDER BY kode_cabang DESC');
        }else{
            return $this->db->query('SELECT * FROM master_gangguan
            WHERE status_aktif = "YES" 
            AND kode_cabang not in (1)
            AND kode_cabang = '.$_SESSION['kode_cabang'].'
            AND kode_user = '.$_SESSION['kode_user'].'
            AND status_wo = "Selesai"
            ORDER BY kode_cabang DESC');
        }
    }

    function get_laporan($kode_gangguan){
        return $this->db->query('SELECT mg.*, mp.* FROM master_gangguan mg, master_pelanggan mp
            WHERE mg.kode_gangguan = '.$kode_gangguan.'
            AND mg.kode_pelanggan = mp.kode_pelanggan');
    }
    
     function get_laporan_foto($kode_gangguan){
        return $this->db->query('SELECT foto FROM detail_foto_gangguan WHERE kode_gangguan ='.$kode_gangguan.'');
    }
	
	function get_data_gangguan(){
		return $this->db->query('SELECT * FROM master_gangguan WHERE kode_cabang='.$_SESSION['kode_cabang'].'');
	}

    function input_data($data,$table){
        //$this->output->enable_profiler(TRUE);
        return $this->db->insert($table,$data);
    }
    function update_data($data,$table,$where){
        $this->db->where('kode_gangguan',$where);
        $this->db->update($table,$data);
        return true;
    }
	function inactive_data($data,$table,$where){
        $this->db->where('kode_gangguan',$where);
        $this->db->update($table,$data);
        return true;
    }
	function delete_data($where){
        $this->db->where('kode_gangguan',$where);
        $this->db->delete('master_gangguan');
        return true;
    }
}
?>
