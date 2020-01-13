<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_header_model extends CI_Model{

    public function __construct() 
    {
        parent::__construct();
    }

    function tampil_data(){
        return $this->db->query("SELECT kode_menu_header, menu_header 
		FROM menu_header 
		WHERE status_aktif ='YES' 
		ORDER BY kode_menu_header DESC");
    }

    function input_data($data,$table){
        //$this->output->enable_profiler(TRUE);
        return $this->db->insert($table,$data);
    }
    function update_data($data,$table,$where){
        $this->db->where('kode_menu_header',$where);
        $this->db->update($table,$data);
        return true;
    }
	function inactive_data($data,$table,$where){
        $this->db->where('kode_menu_header',$where);
        $this->db->update($table,$data);
        return true;
    }
}
?>
