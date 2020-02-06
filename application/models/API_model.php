<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class API_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }

    function getWoGangguan($kode_cabang, $kode_user){
        return $this->db->query('SELECT mg.*, mp.*
            FROM master_gangguan mg, master_pelanggan mp
            WHERE mg.status_aktif = "YES" 
            AND mg.kode_cabang not in (1)
            AND mg.kode_cabang = "'.$kode_cabang.'"
            AND mg.kode_user = "'.$kode_user.'"
            AND mg.kode_pelanggan = mp.kode_pelanggan
            AND mp.status_aktif = "YES"
            ORDER BY mg.kode_gangguan DESC');
    }

    function getFotoGangguan($kode_gangguan){
        return $this->db->query('SELECT * FROM detail_foto_gangguan
            WHERE kode_gangguan = "'.$kode_gangguan.'"');
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
