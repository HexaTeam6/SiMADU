<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_akses_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }

    function tampil_data(){
	if (($_SESSION['kode_cabang'] == 1) || ($_SESSION['kode_cabang'] == 2))
		{
        return $this->db->query("SELECT mh.kode_akses, mh.kode_cabang, mc.nama_cabang, mh.hak_akses, mh.keterangan
		FROM menu_hak_akses mh, master_cabang mc
		WHERE mh.kode_cabang = mc.kode_cabang
		AND mh.status_aktif = 'YES'
		AND mh.kode_cabang not in (1,2)
		ORDER BY mh.kode_akses DESC");
		}
		else
		{
		$kode_cabang = $_SESSION['kode_cabang'];
		return $this->db->query("SELECT mh.kode_akses, mh.kode_cabang, mc.nama_cabang, mh.hak_akses, mh.keterangan
		FROM menu_hak_akses mh, master_cabang mc
		WHERE mh.kode_cabang = mc.kode_cabang
		AND mh.status_aktif = 'YES'
		AND mh.kode_cabang not in (1,2)
		AND mh.kode_cabang = ".$kode_cabang."
		ORDER BY mh.kode_akses DESC");
		}
    }

    function input_data($data,$table){
        //$this->output->enable_profiler(TRUE);
        return $this->db->insert($table,$data);
    }
    function update_data($data,$table,$where){
        $this->db->where('kode_akses',$where);
        $this->db->update($table,$data);
        return true;
    }
	function inactive_data($data,$table,$where){
        $this->db->where('kode_akses',$where);
        $this->db->update($table,$data);
        return true;
    }
}
?>
