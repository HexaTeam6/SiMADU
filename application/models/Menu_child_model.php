<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_child_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }

    function tampil_data(){
        return $this->db->query("SELECT kode_menu_child, mc.kode_menu_header, mh.menu_header,  menu_name, file_php 
		FROM menu_child mc, menu_header mh
		WHERE mc.kode_menu_header = mh.kode_menu_header
		AND mc.status_aktif ='YES' 
		ORDER BY kode_menu_child DESC");
    }

    function input_data($data,$table){
        //$this->output->enable_profiler(TRUE);
        return $this->db->insert($table,$data);
    }
    function update_data($data,$table,$where){
        $this->db->where('kode_menu_child',$where);
        $this->db->update($table,$data);
        return true;
    }
	function inactive_data($data,$table,$where){
        $this->db->where('kode_menu_child',$where);
        $this->db->update($table,$data);
        return true;
    }
}
?>
