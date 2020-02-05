<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }
    
    function tampil_data(){
        return $this->db->query('SELECT * FROM master_pelanggan
		WHERE status_aktif = "YES" 
		AND kode_cabang not in (1)
		AND kode_cabang = '.$_SESSION['kode_cabang'].'
		ORDER BY kode_cabang DESC');
    }

    function tampil_data_mobile($kode_cabang){
        return $this->db->query('SELECT * FROM master_pelanggan
		WHERE status_aktif = "YES" 
		AND kode_cabang not in (1)
		AND kode_cabang = '.$kode_cabang.'
		ORDER BY kode_cabang DESC');
    }
	
	function get_data_pelanggan($kode_pelanggan){
		return $this->db->query('SELECT * FROM master_pelanggan
		WHERE status_aktif = "YES" 
		AND kode_cabang not in (1)
		AND kode_cabang = '.$_SESSION['kode_cabang'].'
		AND kode_pelanggan = '.$kode_pelanggan.'');
	}

    function input_data($data,$table){
        //$this->output->enable_profiler(TRUE);
        return $this->db->insert($table,$data);
    }
    function update_data($data,$table,$where){
        $this->db->where('kode_pelanggan',$where);
        $this->db->update($table,$data);
        return true;
    }
	function inactive_data($data,$table,$where){
        $this->db->where('kode_pelanggan',$where);
        $this->db->update($table,$data);
        return true;
    }
	function delete_data($where){
        $this->db->where('kode_pelanggan',$where);
        $this->db->delete('master_pelanggan');
        return true;
    }
}
?>
