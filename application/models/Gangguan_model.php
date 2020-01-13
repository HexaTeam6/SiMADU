<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gangguan_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }
    
    function tampil_data(){
        return $this->db->query('SELECT * FROM master_gangguan
		WHERE status_aktif = "YES" 
		AND kode_cabang not in (1)
		ORDER BY kode_cabang DESC');
    }
	
	function get_data_cabang(){
		return $this->db->query('SELECT * FROM master_cabang WHERE kode_cabang='.$_SESSION['kode_gangguan'].'');
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
